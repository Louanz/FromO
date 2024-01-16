<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"type='text/css' media='all' href=".css" />
    <script type="text/javascript" src="Affichage.js"></script>

    <title>Pack</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "formoro";
    $password = "17yp~I26u";
    $dbname = "formoro";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $role = $_POST['role'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $stmt = $conn->prepare("SELECT * FROM roles WHERE role = ? AND password = ?");
    $stmt->bind_param("ss", $role, $password);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['role'] = $role;
        header('Location: dashboard.php');
    } else {
        echo "Invalid role or password";
    }

    $stmt->close();
    $conn->close();
    ?>
</body>
</html>
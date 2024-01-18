<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' media='all' href=".css">
    <title>Orcocom</title>
    <script type="text/javascript">
        function redirect() {
            window.location.href = "index.php";
        }
    </script>
</head>

<body>

<?php

$roles = array(
    "user" => "UupsadOr1",
    "admin" => "AapsadOr2"
);

if (isset($_POST["role"]) && isset($_POST["password"])) {
    $role = $_POST["role"];
    $password = $_POST["password"];

    if ($roles[$role] === $password) {
        header("Location: Wfrom.php");
        exit();
    } else {
        echo "<script>alert('Erreur mot de passe'); redirect();</script>";
        exit;
    
    }
    
}
?>

</body>
</html>
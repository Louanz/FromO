<!-- <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"type='text/css' media='all' href=".css" />
    </head>
    <body>

<?php
    $servername = "localhost";
    $username = "";
    $password = "17yp~I26u";
    $dbname = "formoro";


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $saveChbox = isset($_POST['save-chbox']) ? $_POST['save-chbox'] : array();
    $saveRadio = isset($_POST['save-radio']) ? $_POST['save-radio'] : "";

    foreach ($saveChbox as $chboxValue) {
        $sql = "INSERT INTO saveData (chboxValue) VALUES ('$chboxValue')";

        if ($conn->query($sql) === TRUE) {
            echo "Données enregistrées";
        } else {
            echo "Erreur: " . $sql . "<br>" . $conn->error;
        }
    }

    if ($saveRadio != "") {
        $sql = "INSERT INTO saveData (radioValue) VALUES ('$saveRadio')";

        if ($conn->query($sql) === TRUE) {
            echo "Données enregistrées";
        } else {
            echo "Erreur: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?> -->
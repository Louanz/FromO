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
    <form action="inde.php" method="post">

 
</form> 


<?php

$ hostname = "localhost" ;   
$ database_name = "formo" ; 
$ table_name = "" ; 


$checkboxId = $_POST['checkbox_id'];
$checkboxValue = $_POST['checkbox_value'];

$servername = "localhost";
$dbname = "grilleo";

$conn = new mysqli($servername, $dbname);

$sql = "SELECT id FROM checkboxes WHERE id='$checkboxId'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $sql = "UPDATE checkboxes SET value='$checkboxValue' WHERE id='$checkboxId'";
} else {
    $sql = "INSERT INTO checkboxes (id, value) VALUES ('$checkboxId', '$checkboxValue')";
}

if ($conn->query($sql) === TRUE) {
    echo "Checkbox enregistrée avec succès";
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

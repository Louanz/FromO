<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"type='text/css' media='all' href="" />
        
        <title>Pack</title>
    </head>
    <body>
        
    <?php
 if(isset($_POST['WebAss'])){
    $total += $_POST['WebAss'];
 }

 if (isset($_POST['Intr'])){
    $total += $_POST['Intr'];
 }

 if (isset($_POST['Heb'])){
    $total += $_POST['Heb'];
 }

 
 if (isset($_POST['MJS'])){
    $total += $_POST['MJS'];
 }
 

 if (isset($_POST['LS'])){
    $total += $_POST['LS'];
 }

 if (isset($_POST['LSEO'])){
    $total += $_POST['LSEO'];
 }


 echo "Le total est : " . $total . "€";
?>



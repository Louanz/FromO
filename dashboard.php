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
    <form action="traitement.php" method="post">
<?php
session_start();

if (!isset($_SESSION['role'])) {
  header('Location: index.php');
}

$role = $_SESSION['role'];

if ($role == 'admin') {
  echo "Welcome, admin!";
} else if ($role == 'user') {
  echo "Welcome, user!";
}
?>
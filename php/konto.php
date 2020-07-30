<!DOCTYPE HTML>
<?php
session_start();

if(!isset($_SESSION['zalogowany'])){
    header('Location: index.php');
    exit();
}
 ?>
<html>
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Project </title>

<script src="jquery-3.1.1.js"></script>
<script src="../js/bootstrap.js"></script>

  <link href='https://fonts.googleapis.com/css?family=Courgette&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="css/register.css">

<script src="js/main.js"></script>
<script src="js/Project.js"></script>
<script src="js/login.js"></script>
</head>
<body>
  <a href="wylogowanie.php">Wyloguj się!</a>
  <center>
  <h1>Witam</h1>
</center>
</body>
</html>

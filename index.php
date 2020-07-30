<!DOCTYPE HTMl>
<?php
session_start();
if(isset($_SESSION['zalogowany']) && ($_SESSION['zalogowany']==TRUE)){
    header('Location: konto.php');
    exit;
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
  <center>
  <h1>Logowanie</h1></br>
  <b>Login:</b>
  <input type="text" placeholder="Login" id="login_in"></br></br>
  <b>Hasło:</b>
  <input type="password" placeholder="Hasło" id="haslo"></br></br>
  <input type="button" name="zaloguj" id="zaloguj" value="Zaloguj">
  <p>Jeśli nie pamiętasz hasła, <a href="przypomnienie.php">przypomnij je sobie!</a></p>
  <p>Jeżeli nie masz konta <a href="register.php">zarejestruj się!</a></p>
</center>
</body>
</html>

<!DOCTYPE HTMl>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Project </title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="../js/bootstrap.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Courgette&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/register.css">

	<script src="js/main.js"></script>
	<script src="js/Project.js"></script>

</head>

<body>
  <center>
  <h1>Rejestracja</h1></br>
  <b>Nazwa użytkownika:</b>
  <input type="text" placeholder="Nazwa Użytkownika" id="n_uz"></br></br>
  <b>Login:</b>
  <input type="text" placeholder="Login" id="login"></br></br>
  <b>Hasło:</b>
  <input type="password" placeholder="Hasło" id="haslo"></br></br>
  <b>E-mail:</b>
  <input type="email" placeholder="E-mail" name="mail" id="mail"></br></br>
  <b>Imie:</b>
  <input type="text" placeholder="Imie" id="imie"></br></br>
  <b>Nazwisko:</b>
  <input type="text" placeholder="Nazwisko" id="nazwisko"></br></br>
  <form>
  <fieldset>
  <legend>Reklama</legend>
	<textarea placeholder="Reklama" id="reklama" class="reklama"></textarea>
	</fieldset>
  </form>
  <button type="button" id="wyslijFormularz">Wyślij</button></br>
  <p>Jeżeli masz już konto <a href="index.php">zaloguj się!</a></p>
</center>
</body>

</html>

<script>
$(document).ready(function(){

/*
    $("button").click( function(){
		var info = $("input#pobierzDane").val();
		if ( info.length > 0 ) {
			console.log(info);
			alert(info);
		}

    });

	oDane = {
		0: "abc",
		1: "123"
	};
	*/


});
</script>

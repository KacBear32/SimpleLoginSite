<?php
session_start();
/*$connection = mysql_connect("ygd13959497c_34", "ygd13959497c_34", "K.Niedzwiedz2017");
$db = mysql_select_db("college", $connection);

$login = $_POST['login_in1'];
$haslo = $_POST['haslo1'];

$sql = "SELECT * FROM users WHERE login='$login' AND haslo='$haslo'";
$wynik = $connection->query($sql);
$data = $wynik->num_rows;
if($data == 1){
  echo "Logowanie powiodło się";
}else{
  echo "Login lub hasło nieprawidłowe!";
}
*/
$connection = mysql_connect("sql.ygd13959497c.nazwa.pl", "ygd13959497c_34", "K.Niedzwiedz2017");
$db = mysql_select_db("ygd13959497c_34", $connection);

$login = $_POST['login_in1'];
$haslo = $_POST['haslo1'];

$wynik = mysql_query("SELECT * FROM users WHERE login='$login' AND haslo='$haslo'");
$data = mysql_num_rows($wynik);
if($data==1){
$_SESSION['zalogowany'] = TRUE;
echo "Udane logowanie!";
}else{
echo "Login lub hasło jest nieprawidłowe!";
}
mysql_close ($connection);
?>

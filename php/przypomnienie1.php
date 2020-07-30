<?php
session_start();
$connection = mysql_connect("sql.ygd13959497c.nazwa.pl", "ygd13959497c_34", "K.Niedzwiedz2017");
$db = mysql_select_db("ygd13959497c_34", $connection);

$email = $_POST['email_przy1'];

$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Niepoprawny email!";
} else {
$wynik = mysql_query("SELECT haslo FROM users WHERE mail='$email'");
$data = mysql_num_rows($wynik);
if($data==1){
echo "Hasło zostało wysłane na podany email!";
}else{
echo "Login lub hasło jest nieprawidłowe!";
}
//}
mysql_close ($connection);
?>

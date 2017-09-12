<?php 
include_once('db.php');

$ime =$_POST['ime'];
$prezime =$_POST['prezime'];
$adresa =$_POST['adresa'];
$kontakt =$_POST['kontakt'];

if (mysql_query("INSERT INTO `narudzba` (`ime`, `prezime`, `adresa`, `kontakt`) VALUES ('".$ime."','".$prezime."','".$adresa."','".$kontakt."')"))
echo"successfully inserted";
else
echo "failed";
	
?>
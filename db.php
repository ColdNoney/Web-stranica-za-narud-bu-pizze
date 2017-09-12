<?php

try {
	$conn = new PDO("mysql:host=localhost;dbname=Sastojci", 'root');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$ime = $_POST['ime'];
	$prezime = $_POST['prezime'];
	$adresa = $_POST['adresa'];
	$kontakt = $_POST['kontakt'];
	
	$sql = "INSERT INTO narudzba (ime, prezime, adresa, kontakt)
    VALUES ('$ime', '$prezime', '$adresa', '$kontakt')";
    $conn->exec($sql);
    echo "Narudžba uspješno pohranjena";
	}
	catch(PDOException $e)
	{
	echo "Neuspjela konekcija s bazom: " . $e->getMessage();
	}

?>
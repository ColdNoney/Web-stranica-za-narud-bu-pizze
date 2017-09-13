<?php

try {
	$conn = new PDO("mysql:host=localhost;dbname=sastojci", 'root');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$ime = $_POST['ime'];
	$prezime = $_POST['prezime'];
	$adresa = $_POST['adresa'];
	$kontakt = $_POST['kontakt'];
	$broj_pizza = $_POST['broj_pizza'];
	$sastojci = isset($_POST['sastojci']) ? $_POST['sastojci'] : array();
	$sastojciL = isset($_POST['sastojciL']) ? $_POST['sastojciL'] : array();
	$sastojciD = isset($_POST['sastojciD']) ? $_POST['sastojciD'] : array();

	$sviSastojci = array();
	foreach($sastojci as $sastojak) {
		$sviSastojci[] += $sastojak;
	}
	foreach($sastojciL as $sastojak) {
		$sviSastojci[] += $sastojak;
	}
	foreach($sastojciD as $sastojak) {
		$sviSastojci[] += $sastojak;
	}

	$ids = join("','", $sviSastojci);   
	$selectSastojaciSql = "SELECT * FROM sastojak WHERE IDsastojka IN ('$ids')";
	$result = $conn->query($selectSastojaciSql);
	//izracunaj cijenu
	$cijena = 10;
	$results = $result->fetchAll();

	foreach($sviSastojci as $id) {
		for($i = 0; $i < count($results); ++$i) {
			if($results[$i]['IDsastojka'] == $id) {
				$cijena += $results[$i]['CijenaSastojka'];
			}
		}
		/**while($row = $result->fetch(PDO::FETCH_ASSOC)) {
			var_dump($id);
			if($row['IDsastojka'] == $id) {
				$cijena += $row['CijenaSastojka'];
			}
		}**/
	}
	$cijena *= $broj_pizza;
	$sql = "INSERT INTO narudzba (ime, prezime, adresa, kontakt, cijena)
    VALUES ('$ime', '$prezime', '$adresa', '$kontakt', $cijena)";
    $conn->exec($sql);
	
	$narudba_id = $conn->lastInsertId();
	
	$insertIntoNarudbaSastojak = "INSERT INTO narudba_sastojak (narudba_id, sastojak_id) VALUES ";

	foreach($sastojci as $sastojak) {
		$insertIntoNarudbaSastojak = $insertIntoNarudbaSastojak . "('$narudba_id', '$sastojak'), ";
	}
	foreach($sastojciL as $sastojakL) {
		$insertIntoNarudbaSastojak = $insertIntoNarudbaSastojak . "('$narudba_id', '$sastojakL'), ";
	}
	foreach($sastojciD as $sastojakD) {
		$insertIntoNarudbaSastojak = $insertIntoNarudbaSastojak . "('$narudba_id', '$sastojakD'), ";
	}
	$insertIntoNarudbaSastojak = rtrim($insertIntoNarudbaSastojak,", ");

    $conn->exec($insertIntoNarudbaSastojak);
	
    echo "Narudžba uspješno pohranjena";
	}
	catch(PDOException $e)
	{
	echo "Neuspjela konekcija s bazom: " . $e->getMessage();
	}
?>
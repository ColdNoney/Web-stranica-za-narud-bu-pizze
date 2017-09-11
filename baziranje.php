<!DOCTYPE html>
<html>
	<head>
		<title>Web stranica za narudžbu pizze</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	</head>

	<body>
	
	<!--Jumbotron header-->
	<div class="jumbotron text-center">
		<div class="container">
			<h1>Naručite pizze po vašem izboru</h1>
			<p>Ovdje imate mogućnost izabrati cijelu pizzu s istim sastojcima ili iskoristiti opciju pola-pola, gdje možete izabrati različite sastojke na polovicama pizze.</p> 
		</div>
	</div>

	<br>
	
	<p id="broj"> </p>
	
	<!--Prva tablica sa sastojcima-->
	<div class="container">    
		<div class="row">
			<div class="col-lg-3">
				<div id="tablicaL" class="skriveno">
					<table id="hiddenTable" class="table table-hover">
						<thead>
						  <tr>
							<th>Ime Sastojka</th>
							<th>Cijena</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliKukuruzL"> Kukuruz </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliRajcica"> Rajčica </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliSirL"> Sir </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliPaprikaL"> Paprika </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliGljiveL"> Gljive </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliKulenL"> Kulen </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliLukL"> Luk </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliMaslineL"> Masline </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliSalataL"> Salata </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliSir4L"> 4 vrste sira </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliTunaL"> Tuna </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliSunkaL"> Šunka </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						</tbody>
					</table>
				</div>
			</div>
			
			<!--Slika tijesta na kojoj ce se mijenjati sastojci -->
			<div class="col-lg-6">
				<div class="slikaPizze" align="center">
					<img src="Slike/pizza_prilozi/tijesto.png" alt="Responsive image" class="preslika">
					<img src="Slike/pizza_prilozi/pizza_rajcica.png" alt="" class="preslika sakriveno" id="rajcica"> 
					<img src="Slike/pizza_prilozi/pizza_kukuruz.png" alt="" class="preslika sakriveno" id="kukuruz">
					<img src="Slike/pizza_prilozi/pizza_salata.png" alt="" class="preslika sakriveno" id="salata"> 
					<img src="Slike/pizza_prilozi/pizza_gljive.png" alt="" class="preslika sakriveno" id="gljive"> 
					<img src="Slike/pizza_prilozi/pizza_sir.png" alt="" class="preslika sakriveno" id="sir"> 
					<img src="Slike/pizza_prilozi/pizza_sir4.png" alt="" class="preslika sakriveno" id="sir4"> 
					<img src="Slike/pizza_prilozi/pizza_masline.png" alt="" class="preslika sakriveno" id="masline"> 
					<img src="Slike/pizza_prilozi/pizza_sunka.png" alt="" class="preslika sakriveno" id="sunka"> 
					<img src="Slike/pizza_prilozi/pizza_tuna.png" alt="" class="preslika sakriveno" id="tuna">
					<img src="Slike/pizza_prilozi/pizza_paprika.png" alt="" class="preslika sakriveno" id="paprika"> 
					<img src="Slike/pizza_prilozi/pizza_kulen.png" alt="" class="preslika sakriveno" id="kulen"> 
					<img src="Slike/pizza_prilozi/pizza_luk.png" alt="" class="preslika sakriveno" id="luk">
					<img src="Slike/pizza_prilozi/pizza_kukuruz_l.png" alt="" class="preslika sakriveno" id="kukuruzL"> 
					<img src="Slike/pizza_prilozi/pizza_salata_l.png" alt="" class="preslika sakriveno" id="salataL"> 
					<img src="Slike/pizza_prilozi/pizza_gljive_l.png" alt="" class="preslika sakriveno" id="gljiveL"> 
					<img src="Slike/pizza_prilozi/pizza_sir_l.png" alt="" class="preslika sakriveno" id="sirL"> 
					<img src="Slike/pizza_prilozi/pizza_sir4_l.png" alt="" class="preslika sakriveno" id="sir4L"> 
					<img src="Slike/pizza_prilozi/pizza_masline_l.png" alt="" class="preslika sakriveno" id="maslineL"> 
					<img src="Slike/pizza_prilozi/pizza_sunka_l.png" alt="" class="preslika sakriveno" id="sunkaL"> 
					<img src="Slike/pizza_prilozi/pizza_tuna_l.png" alt="" class="preslika sakriveno" id="tunaL">
					<img src="Slike/pizza_prilozi/pizza_paprika_l.png" alt="" class="preslika sakriveno" id="paprikaL"> 
					<img src="Slike/pizza_prilozi/pizza_kulen_l.png" alt="" class="preslika sakriveno" id="kulenL"> 
					<img src="Slike/pizza_prilozi/pizza_luk_l.png" alt="" class="preslika sakriveno" id="lukL">
					<img src="Slike/pizza_prilozi/pizza_kukuruz_d.png" alt="" class="preslika sakriveno" id="kukuruzD"> 
					<img src="Slike/pizza_prilozi/pizza_salata_d.png" alt="" class="preslika sakriveno" id="salataD"> 
					<img src="Slike/pizza_prilozi/pizza_gljive_d.png" alt="" class="preslika sakriveno" id="gljiveD"> 
					<img src="Slike/pizza_prilozi/pizza_sir_d.png" alt="" class="preslika sakriveno" id="sirD"> 
					<img src="Slike/pizza_prilozi/pizza_sir4_d.png" alt="" class="preslika sakriveno" id="sir4D"> 
					<img src="Slike/pizza_prilozi/pizza_masline_d.png" alt="" class="preslika sakriveno" id="maslineD"> 
					<img src="Slike/pizza_prilozi/pizza_sunka_d.png" alt="" class="preslika sakriveno" id="sunkaD"> 
					<img src="Slike/pizza_prilozi/pizza_tuna_d.png" alt="" class="preslika sakriveno" id="tunaD">
					<img src="Slike/pizza_prilozi/pizza_paprika_d.png" alt="" class="preslika sakriveno" id="paprikaD"> 
					<img src="Slike/pizza_prilozi/pizza_kulen_d.png" alt="" class="preslika sakriveno" id="kulenD"> 
					<img src="Slike/pizza_prilozi/pizza_luk_d.png" alt="" class="preslika sakriveno" id="lukD">
					<img src="Slike/pizza_prilozi/nista.png" alt="" class="nistaSlika"> 
				</div>
			</div>
			
			<!--Druga tablica sa sastojcima -->
			<div class="col-lg-3">
				<div id="tablicaD" class="hiden">
					<table id="hiddenTable" class="table table-hover tablicaD">
						<thead>
						  <tr>
							<th>Ime Sastojka</th>
							<th>Cijena</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""  id="upaliKukuruzD"> Kukuruz </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliRajcica"> Rajčica </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliSirD"> Sir </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliPaprikaD"> Paprika </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliGljiveD"> Gljive </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliKulenD"> Kulen </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliLukD"> Luk </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliMaslineD"> Masline </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliSalataD"> Salata </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliSir4D"> 4 vrste sira </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliTunaD"> Tuna </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliSunkaD"> Šunka </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						</tbody>
					</table>
				</div>
				<div id="tablica3" class="hidden">
					<table id="hiddenTable" class="table table-hover">
						<thead>
						  <tr>
							<th>Ime Sastojka</th>
							<th>Cijena</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliKukuruz"> Kukuruz </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliRajcica"> Rajčica </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliSir"> Sir </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliPaprika"> Paprika </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliGljive"> Gljive </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliKulen"> Kulen </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliLuk"> Luk </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliMasline"> Masline </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliSalata"> Salata </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliSir4"> 4 vrste sira </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliTuna"> Tuna </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value="" id="upaliSunka"> Šunka </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>	
	</div>
	
	<br>
	<br>
	
	<!--Buttoni za odabir opcije narudzbe pizze-->
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-2 col-xs-4">
				<button type="button" class="btn btn-danger btn-lg">POLA POLA</button>
				<p>*Izbor različitih sastojaka na polovicama pizze</p>
			</div>
			<div class="col-lg-2 col-xs-4">
				<button type="button" onclick="document.getElementById('tablicaD').style.display='block'" class="btn btn-danger btn-lg">CIJELA PIZZA</button>
				<p>*Izbor jednakih sastojaka na cijeloj pizzi</p>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row justify-content-center" id="skriveno">
			<b class="brojPizza"> Broj ovakvih pizza: </b>
			<select>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			  <option value="8">8</option>
			  <option value="9">9</option>
			  <option value="10">10</option>
			</select>
			<b class="izracunCijene"> Ukupna cijena: </b>
			<br>
		</div>
	</div>
	
	<br>
	
	<div class="container" >
		<div class="row justify-content-center">
			<div class="col-lg-2 col-xs-6">
				<button type="button" class="btn btn-danger btn-lg">ODUSTANI</button>
				<p> </p>
			</div>
			<div class="col-lg-2 col-xs-6">
				<button type ="button" class="btn btn-danger btn-lg naruciButton">NARUČI</button>
			</div>
		</div>
	</div>
	
	<br>
	
	<?php
/*
$servername = "localhost";
$username = "username";
$password = "password";

try {
	$conn = new PDO("mysql:host=$servername;dbname=Sastojak", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully"; 
	}
catch(PDOException $e)
	{
	echo "Connection failed: " . $e->getMessage();
	}
	*/
?>

	<script src="jquery-3.2.1.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script type="text/javascript" src="script.js"></script>
		
	</body>
</html>



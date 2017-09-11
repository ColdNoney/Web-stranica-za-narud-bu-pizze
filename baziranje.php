<!DOCTYPE html>
<html>
	<head>
		<title>Web stranica za narudžbu pizze</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<script type="text/javascript" src="script.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	</head>

	<body>
	
	<!--Jumbotron header-->
	<div class="jumbotron text-center">
		<div class="container">
			<h1>Naručite pizze po vašem izboru</h1>
			<p>Ovdje imate mogućnost izabrati cijelu pizzu s istim sastojcima ili iskoristiti opciju pola-pola, gdje možete izabrati različite sastojke na polovicama pizze.</p> 
		</div>
	</div>

	</br>
	
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
							  <label><input type="checkbox" value=""> Kukuruz </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Rajčica </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Sir </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Paprika </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Gljive </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Kulen </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Luk </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Masline </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Salata </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> 4 vrste sira </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Tuna </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Šunka </label>
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
					<img src="Slike/pizza_prilozi/pizza_rajcica.png" alt="" class="preslika"> <!--style="display:none;"-->
					<img src="Slike/pizza_prilozi/pizza_kukuruz.png" alt="" class="preslika"> <!--style="display:none;"-->
					<img src="Slike/pizza_prilozi/pizza_salata.png" alt="" class="preslika"> <!--style="display:none;"-->
					<img src="Slike/pizza_prilozi/pizza_gljive.png" alt="" class="preslika"> <!--style="display:none;"-->
					<img src="Slike/pizza_prilozi/pizza_sir.png" alt="" class="preslika"> <!--style="display:none;"-->
					<img src="Slike/pizza_prilozi/pizza_sir4.png" alt="" class="preslika"> <!--style="display:none;"-->
					<img src="Slike/pizza_prilozi/pizza_masline.png" alt="" class="preslika"> <!--style="display:none;"-->
					<img src="Slike/pizza_prilozi/pizza_sunka.png" alt="" class="preslika"> <!--style="display:none;"-->
					<img src="Slike/pizza_prilozi/pizza_tuna.png" alt="" class="preslika"> <!--style="display:none;"-->
					<img src="Slike/pizza_prilozi/pizza_paprika.png" alt="" class="preslika"> <!--style="display:none;"-->
					<img src="Slike/pizza_prilozi/pizza_kulen.png" alt="" class="preslika"> <!--style="display:none;"-->
					<img src="Slike/pizza_prilozi/pizza_luk.png" alt="" class="luk"> <!--style="display:none;"-->
				</div>
			</div>
			
			<!--Druga tablica sa sastojcima -->
			<div class="col-lg-3">
				<div id="tablicaD" class="skriveno">
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
							  <label><input type="checkbox" value=""> Kukuruz </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Rajčica </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Sir </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Paprika </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Gljive </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Kulen </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Luk </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Masline </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Salata </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> 4 vrste sira </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Tuna </label>
							</div>
							</td>
							<td>+1 kn</td>
						  </tr>
						  <tr>
							<td>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> Šunka </label>
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
	
	</br>
	</br>
	
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
			</br>
		</div>
	</div>
	
	</br>
	
	<div class="container" >
		<div class="row justify-content-center">
			<div class="col-lg-2 col-xs-4">
				<button type="button" class="btn btn-danger btn-lg">ODUSTANI</button>
			</div>
			<div class="col-lg-2 col-xs-4">
				<button id="myBtn"class="btn btn-danger btn-lg naruciButton">NARUČI</button>
				<div id="myModal" class="modal">
				<!-- Modal content -->
				  <div class="modal-content">
					<div class="modal-header">
					  <span class="close">&times;</span>
					  <h2>Naručili ste pizzu!</h2>
					</div>
					<div class="modal-body">
					  <p>Možete naručiti još pizza ili završiti narudžbu</p>
					</div>
				  </div>

				</div>
			</div>
		</div>
	</div>
	
	</br>

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

	</body>
</html>



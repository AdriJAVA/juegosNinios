<!DOCTYPE html>
<html>
<head>
	<meta charset="ISO-8859-1">
	<title>Palabras</title>
	<link rel="stylesheet" href="..\..\juegoNinos\indice\global.css">
	<link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>

	<h1>Adivina la letra</h1>
	<?php
	function generarPalabra(){
	$palabras = array("COMER","DORMIR","CENAR","VESTIR","LEVANTAR");

	$palabra = $palabras[rand(0,count($palabras)-1)];

	$indice = rand(0,strlen($palabra)-1);


	$palabra2 = substr($palabra, 0,$indice) . str_replace($palabra[$indice], "_", $palabra[$indice]) . substr($palabra, $indice+1,strlen($palabra)) ;


	$letra =  $palabra[$indice];

	echo $palabra2;

	session_start();

	$_SESSION['letra2'] = $letra;
	$_SESSION['palabraGenerada'] = $palabra;
}

	?>

		<form method="post" action="palabras2.php">
			<p id="palabra"> <?php generarPalabra(); ?></p>
			<p id="frase">Introduce la letra que falta:</p> <input type="text" name="letra" maxlength="1">
			<input type="submit" name="enviar" value="Comprobar"/>

		</form>



</body>
</html>

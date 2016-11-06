<!DOCTYPE html>
<html>
<head>
	<meta charset="ISO-8859-1">
	<title>Palabras</title>
	<link rel="stylesheet" href="..\..\juegoNinos\indice\global.css">
	<link rel="stylesheet" href="css/stylesheet2.css">
</head>
<body>

	<h1>Adivina la letra</h1>
<div id="caja">


			<?php
				session_start();
				$letra = $_SESSION['letra2'];
				$palabra = 	$_SESSION['palabraGenerada'];
				if(isset($_POST["letra"])){
					if(strtoupper($_POST["letra"]) == $letra){
						echo "<p>Enhorabuena! Has acertado.</p>";
					}else{
						echo "<p>Lo siento! Fallaste</br>";
						echo "La respuesta correcta era " . "<b>" . $palabra . "</b>" . "</p>";
					}

				}
			?>

	<a href="palabras.php" id="url">Volver a jugar</a>
	<a href="../indice/index.html">Volver al menú</a>
</div>
</body>
</html>

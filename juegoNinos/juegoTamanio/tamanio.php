<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="..\..\juegoNinos\indice\global.css">
    <title>Acierta el tamaño</title>
  </head>
  <body>
    <h1>Acierta el tamaño</h1>
    <form action="tamanio2.php" method="post">
      <?php generarCirculos(); ?>
    </form>

  </body>
</html>

<?php
	function generarCirculos(){

    $tamanio = array();

    $arr = array("grande","mediano","pequenio");

    $random = $arr[array_rand($arr)];

  	echo "<p>Elige el circulo " . $random . "</p>";



		$tamanio[0] = '<button type="submit" name="tamanio" value="grande" class="grande"></button>';

		$tamanio[1] = '<button type="submit" name="tamanio" value="mediano" class="mediano"></button>';

		$tamanio[2] = '<button type="submit" name="tamanio" value="pequenio" class="pequenio"></button>';

		shuffle($tamanio);

		for($i = 0; $i < count($tamanio);$i++){
			echo $tamanio[$i];
		}

		session_start();

		$_SESSION['elegido'] = $random;
		
	}
	
	
 ?>
 
 

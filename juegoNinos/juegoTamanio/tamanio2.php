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
    <div id="caja">
      	<?php
      	session_start();
      	$elegido = $_SESSION['elegido'];

      	if(isset($_POST['tamanio'])){
      		if($_POST['tamanio'] == $elegido){
      			echo "<p>Enhorabuena! Has acertado.</p>";
      		}else{
            echo "<p>Lo siento! Fallaste</br>";
          }
      	}
      	?>
        <a href="tamanio.php" id="url">Volver a jugar</a>
      	<a href="../indice/index.html">Volver al menú</a>
    </div>

  </body>
</html>

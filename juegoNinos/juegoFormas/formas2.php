<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="..\..\juegoNinos\indice\global.css">
    <title>Acierta el tamaño</title>
  </head>
  <body>
    <h1>Formas</h1>
    <div id="caja">
      	<?php
      		$elegida = $_POST['figura'];
      		
      		$figura = $_POST['introducida'];
      		
      		if($elegida == $figura){
      			echo "<p>Enhorabuena! Has acertado.</p>";
      		}else{
      			echo "<p>Lo siento! Fallaste</br>";
      		}
      	?>
        <a href="formas.php" id="url">Volver a jugar</a>
      	<a href="../indice/index.html">Volver al menú</a>
    </div>

  </body>
</html>

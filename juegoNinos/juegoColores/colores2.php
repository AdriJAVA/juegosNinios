<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="..\..\juegoNinos\indice\global.css">
    <title>Acierta el tamaño</title>
  </head>
  <body>
    <h1>Color</h1>
<div id="caja">
	<?php
	if(isset($_POST['oculto']) && isset($_POST['color']) ){
		$colorPedido = $_POST['oculto'];
		$colorUsuario = $_POST['color'];
		
	
		if(trim($colorPedido) == trim($colorUsuario)){
			echo "<p>Enhorabuena! Has acertado.</p>";
      		}else{
            echo "<p>Lo siento! Fallaste</p>";
	}
	}

	
 ?>
 
		 <a href="colores.php" id="url">Volver a jugar</a>
      	 <a href="../indice/index.html">Volver al menú</a>
 
 </div>
  </body>
</html>


 
 

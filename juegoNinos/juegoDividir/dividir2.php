<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <link rel="stylesheet" href="..\..\juegoNinos\juegoMultiplicar\stylesheet.css">
    <link rel="stylesheet" href="..\..\juegoNinos\indice\global.css">
<title>Acierta el tamaño</title>
</head>
<body>
<h1>Dividir</h1>
<div id="caja">
		<?php
		if(isset($_POST['cociente']) && isset($_POST['resto']) ){
			$cociente = floor($_POST['cociente']);
			$resto= $_POST['resto'];
			$numIntroducido = $_POST['introducido'];
			$restoIntroducido = $_POST['restoIntroducido'];

		
			if($cociente == $numIntroducido && $resto == $restoIntroducido){
				echo "<p>Enhorabuena! Has acertado.</p>";
			}else{
				echo  "<p>Lo siento! Fallaste</p>";
		}
		}
		?>
    	 <a href="dividir.php" id="url">Volver a jugar</a>
      	 <a href="../indice/index.html">Volver al menú</a>
	</div>
  </body>
</html>
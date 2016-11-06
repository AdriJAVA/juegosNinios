<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="stylesheet.css">
<link rel="stylesheet" href="..\..\juegoNinos\indice\global.css">
<title>Acierta el tamaño</title>
</head>
<body>
<h1>Multiplicar</h1>

<div id="caja">
		<?php
		if(isset($_POST['signo']) && isset($_POST['resultado']) ){
			$resultado = $_POST['resultado'];
			$signo = $_POST['signo'];
			$numIntroducido = $_POST['introducido'];
			$signoIntroducido = $_POST['signo'];

		
			if($numIntroducido == abs($resultado) & $signoIntroducido == $signo){
				echo "<p>Enhorabuena! Has acertado.</p>";
			}else{
				echo  "<p>Lo siento! Fallaste</p>";
			}
		}
		
		?>
    	 <a href="multiplicar.php" id="url">Volver a jugar</a>
      	 <a href="../indice/index.html">Volver al menú</a>
</div>

  </body>
</html>
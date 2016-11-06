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

  </body>
</html>
    <form action="formas2.php" method="post">
	
		<?php
		
		    $figura = array();
		
		    $arr = array("cuadrado","elipse","circulo");
		
		    $random = $arr[array_rand($arr)];
		
		  	echo "<p>Elige la figura " . $random . "</p>";
		
		
		
			$figura[0] = '<button type="submit" name="introducida" value="circulo" class="circulo"></button>';
		
			$figura[1] = '<button type="submit" name="introducida" value="elipse" class="elipse"></button>';
		
			$figura[2] = '<button type="submit" name="introducida" value="cuadrado" class="cuadrado"></button>';
		
			shuffle($figura);
		
			for($i = 0; $i < count($figura);$i++){
				echo $figura[$i];
			}		
		 ?>
		 
		 <input type="hidden" name="figura" value=<?php echo $random?>>
		 
		 </form>
 </html>
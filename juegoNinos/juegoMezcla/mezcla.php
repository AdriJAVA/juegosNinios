<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="..\..\juegoNinos\indice\global.css">
    <title>Acierta el tamaño</title>
  </head>
  <body>
    <h1>Formas y colores</h1>

  </body>
</html>
    <form action="mezcla2.php" method="post">
	
		<?php
		
		    $figura = array();
		
		    $tipo = array("cuadrado","elipse","circulo");
		    
			$color = array("red","black","yellow","green","blue");
			
			$randomTipo = $tipo[array_rand($tipo)];
			
			$randomColor = $color[array_rand($color)];
				
					
		  	echo "<p>Elige la figura " . $randomTipo . " de color " . $randomColor . "</p>";
		
			for($i = 0, $j = 0, $k = 0; $i < 15; $i++, $j++,$k++){
				
				if($j > 2){ // Tipo
					$j = 0;
				}
				
				if($k > 4){ // Color
					$k = 0;
				}
				$figura[$i] = '<button type="submit" name="introducido" value="' . $tipo[$j] . '|' . $color[$k] . '" class="' .  $tipo[$j] . '"
		  			style="background-color:' . $color[$k] . ';" ></button>';
			
			}
				
			shuffle($figura);
			?>
			<div id="formas">
		<?php
			for($i = 0; $i < count($figura);$i++){
				echo $figura[$i];
				if($i==4 || $i==9){
					echo "</br>";
				}
			}		
		 ?>
		 </div>
		 <input type="hidden" name="figura" value=<?php echo $randomTipo . '|' . $randomColor  ;?>>
		 
		 </form>
 </html>
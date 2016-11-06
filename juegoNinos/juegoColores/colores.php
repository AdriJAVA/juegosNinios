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
    <form action="colores2.php" method="post">
    <div>
		    		<?php 
		
				$colores = array("black","green","yellow","red","purple");
				
				$aleatorio = $colores[array_rand($colores)];
				
				shuffle($colores);
				
				$arr = array_slice($colores,3);
				
		
				echo "<p>Elige el color " . $aleatorio . "</p>";
				for($i = 0; $i < 5; $i++){
					echo '<button type="submit"  name="color" value="' . $colores[$i]  .  ' " style="width:50px; height:50px; background-color:  ' . $colores[$i] . ';"></button>';			
				}
				
				
				?>
		
		</div>
    	<input type="hidden" name="oculto" value="<?php echo $aleatorio;?>" />
    </form>

  </body>
</html>


 
 

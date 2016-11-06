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
    
    <form action="dividir2.php" method="post">
    <?php
	
		$aleatorio = rand(4,50);
		$aleatorio2 = rand(1,4);
		$cociente = $aleatorio / $aleatorio2;
		$resto = $aleatorio % $aleatorio2;

		
		echo "<p>Introduce el resultado de la división:</p> ";
		
		echo "<p>" . $aleatorio . " / " . $aleatorio2;
		
	    ?>
	    
	    <p>Cociente: <input type="number"  maxlength="3" name="introducido" />
	    Resto: <input type="number" name="restoIntroducido" /></p>
	    <input type="hidden" name="cociente" maxlength="3" value= <?php echo $cociente;?> />
	    <input type="hidden" name="resto" value= <?php echo $resto;?> />
	    <input type="submit" value="Comprobar" />
    
    </form>

  </body>
</html>
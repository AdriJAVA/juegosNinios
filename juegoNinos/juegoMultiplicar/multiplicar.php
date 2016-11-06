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
    
    <form action="multiplicar2.php" method="post">
    <?php
	
		$aleatorio = rand(-10,10);
		$aleatorio2 = rand(-10,10);
		$resultado = $aleatorio * $aleatorio2;
		$signo;
		
		if($resultado >= 0){
			$signo = "+";
		}else{
				$signo = "-";
			}
		
		echo "<p>Introduce el resultado de la multiplicación:</p> ";
		
		echo "<p>" . $aleatorio . " X " . $aleatorio2;
		
	    ?>
	    
	    <p>Signo: <input type="text"  maxlength="1" name="signo" />
	    Resultado: <input type="text" name="introducido" maxlength="3"/></p>
	    <input type="hidden" name="resultado" value= <?php echo $resultado;?> />
	    <input type="hidden" name="signo"value= <?php echo $signo;?> />
	    <input type="submit" value="Comprobar" />
    
    </form>

  </body>
</html>


 
 
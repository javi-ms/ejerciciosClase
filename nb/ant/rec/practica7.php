<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
		<title>PRACTICA7</title>
	</head>
	<body>
		<?php
			/*
			Definir una variable de cada ipo: integer, double, string y boolean. Luego imprimirlas en la pagina, una por linea. 
			*/
			$variable = 5.05;
				settype($variableI, "integer"); 
				echo "Variable integer = " . $variable."<br/>";

				settype($variable, "double");//double
				echo "Variable float = " . $variable . "<br/>";

			$varBol = true;
				settype($varBol, "bool"); 
				echo "Variable Boolean = ". $varBol;		
		?>
	</body>
</html>



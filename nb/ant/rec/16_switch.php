<html> 
	<head> 
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
		<title>Condicional Switch</title> 
	</head> 
	<body> 
		<h1>Condicional Switch. Ejemplo</h1> 
			<?php
			   /*Declaramos una variable con un valor de muestra */ 
			   $posicion = "arriba"; 
			   echo "La variable posicion es ".$posicion; 
			   echo "<br>"; 
			   	switch($posicion){ 
			  		case "arriba":   
						// Primer condicion si es arriba 
			  			echo "La variable contiene el valor de arriba"; 
			         break; 
			        case "abajo":    
					//Segunda condicion del supuesto 
			        	echo "La variable contiene el valor de abajo"; 
			        break; 
			        default:   
			//Condicion por default o si no es ninguna 
			        	echo "La variable contiene otro valor distinto arriba y abajo"; 
				}
			?>
			<ol>
				<li>¿Cuál es la diferencia de la instrucción SWITCH con la instrucción IF? </li>
					<p>Con la instruccion switch podemos abarcar todos los resultados en una sola instruccion y con if usariamos varias</p>
			</ol>
	</body>
</html>
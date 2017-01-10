<html> 
<head> 
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
  <title></title> 
</head> 
<body> 
	<h1>Primer ejemplo de Variables </h1> 
	<p> 
		<?php 
			$Name = "Javier"; 
		
			echo "Hola <b>$Name</b>, encantado de conocerte"; 
		?> 
	</p> 
	<ol>
		<li>¿Cómo declaramos una variable?</li>
			<p>Se declaran mediante el simbolo del dollar "$"seguido del nombre de la variable</p>
		<li>¿Importan las mayusculas y minusculas en la declaracion de las variables? </li>
			<p>Si importa, varias variables con el mismo nombre pero con alguna letra diferente son variables distintas, php diferencia entre minusculas y mayusculas</p>
	</ol>
</body> 
</html> 

<!DOCTYPE html>
<html>
<head>
	<title>Prueba 3 - Area del circulo</title>
</head>
<body>
	<?php
	
		//fórmula A=PI*r2
		$base =10;
		$exponente =  2;
		$Radio=pow($base,$exponente);
		$Area = pi() * ($Radio);

		echo "PI=".pi()."<br/>";
		echo "El radio es= ".$base."<br/>";

		echo "El Area del circulo es= ".$Area;

		echo "<hr>";
		echo "<a href=\"vercodigo.php?src=circulo.php\">ver codigo</a><br/>";	
		echo "<a href=\"indexT1.php\">volver</a><br/>";
	?>
</body>
</html>
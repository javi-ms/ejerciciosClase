<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<!--
 *Creacion de una ficha en PHP
 *@Autor:Javier Mariscal Solís
 *@2ºDAW IES GRAN CAPITAN

-->
<?php
	
	$num1 = 39;
	$num2 = 36;
	if ($num1>$num2) {
		echo "numero 1 es mayor<br/>";
	}
	if ($num1==$num2) {
		echo "los numeros son iguales<br/>";
	}
	if ($num2>$num1) {
		echo "el numero 2 es mayor<br/>";
	}
/**
*Se utiliza para ver el codigo de la pagina actual
*/
	echo "<a href=\"vercodigo.php?src=1.php\">ver codigo</a><br/>";	
	echo "<a href=\"1.php\">volver</a><br/>";	
?>
</body>
</html>



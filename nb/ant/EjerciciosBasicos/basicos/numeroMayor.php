<?php
/**
*saber que numero es mayor
*
*/
	$num1=4;
	$num2=4;

	if ($num1>$num2) {
		echo "El numero: " .$num1. " es mayor";
	}else if ($num1<$num2) {
		echo "El numero: " .$num2. " es mayor";
	}else if ($num1=$num2) {
		echo "los numeros son iguales";
	}

	echo "<br/><a href=\"vercodigo.php?src=numeroMayor.php\">ver codigo</a>"
?>
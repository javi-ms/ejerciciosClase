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
/*
	if (!isset($_GET['page'])) {
			echo "404";
		}else{
			switch ($_GET['page']) {
				case 'ejercicio1':
					require_once "1.php";
					break;
				case 'ejercicio2':
					require_once "2.php";
				default:
					echo "indexT1.php";
					break;
			}
		}
		*/
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
	echo "<hr>";
	echo "<a href=\"vercodigo.php?src=1.php\">ver codigo</a><br/>";	
	echo "<a href=\"indexT1.php\">volver</a><br/>";	
?>
</body>
</html>



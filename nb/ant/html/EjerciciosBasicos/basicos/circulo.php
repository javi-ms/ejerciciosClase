<?php
/**
 *Averiguar area del circulo
 *@Autor:Javier Mariscal Solís
 *@2ºDAW IES GRAN CAPITAN
*/
/**
* para crear una constante se pone define("nombreVariable", "Valorvariable")
*/
	define('PI', 3.14);
	$radio=10;
	$Area = PI*($radio*$radio);
	echo "El valor de Pi es ", PI;
	echo "<br/>El valor de area  ", $radio;
	echo "<br/>El area del circulo es ",  $Area;
/**
*Se utiliza para ver el codigo de la pagina actual
*/
	echo "<br/><a href=\"vercodigo.php?src=circulo.php\">ver codigo</a>"	
?>
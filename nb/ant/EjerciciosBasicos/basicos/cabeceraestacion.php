<?php
/**
*Cabecera en funcion de la estacion
*PREGUNTAR RAMON
*/
	$estacion = "verano";
	switch ($estacion) {
		case 'primavera':
			echo "<img src='estaciones/primavera.jpg'>";
			break;
		case 'verano':
			echo "<img src='estaciones/verano.jpg'>";
			break;
		case 'otono':
			echo "<img src='estaciones/otono.jpg'>";
			break;
		case 'invierno':
			echo "<img src='estaciones/invierno	.jpg'>";
			break;
		
		default:
			echo "Error";
			break;
	}

	echo "<br/><a href=\"vercodigo.php?src=cabeceraestacion.php\">ver codigo</a>"
?>
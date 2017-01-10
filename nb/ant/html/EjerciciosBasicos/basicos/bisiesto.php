<?php
/**
*saber si un año es bisiesto
*
*/
	$anio=2004;
	/*$comprobar=$anio/4;*/
	
	if((!($anio%4) && ($anio%100)) || !($anio%400)){
		
		echo 'el año es bisiesto';
	}else{
		echo 'el año no es bisiesto';
	}
	echo "<br/><a href=\"vercodigo.php?src=bisiesto.php\">ver codigo</a>"
?>
<?php
/**
*indice nombre asignaturas(abreviaturas) y su valor el numero de horas
*
*
*/
	$asignaturas=array(
		"DEWESES"=>"8",
		"DEWEC"=>"8"
		);
	foreach($asignaturas as $rAsignaturas => $asign){
		echo ("<br/>Asignatura:" .$rAsignaturas." horas ".$asign);
	}
	
	
	echo "<br/><a href=\"vercodigo.php?src=recorrerAsignturas.php\">ver codigo</a>"
?>
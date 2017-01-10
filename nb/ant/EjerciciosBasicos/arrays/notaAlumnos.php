<?php
/**
*Listado de notas de alumnos
*
*/
	$alumno=array(
		"Javi" => rand(1,10),
		"Pablo" => rand(1,10),
		"Pablo Sanchez" => rand(1,10),
		"Juan" => rand(1,10),
		"Pedro" => rand(1,10),
		"Fran" => rand(1,10)
		);
	echo "<table>";
	foreach($alumno as $alum => $nota){
		echo "<tr><td>$alum $nota</td>";
		/*
		foreach ($nota as $key => $value) {
			echo "<td>$value</td>";
		}
		*/
	}
	echo "</table>";
	
	
	echo "<br/><a href=\"vercodigo.php?src=notaAlumnos.php\">ver codigo</a>"


?>
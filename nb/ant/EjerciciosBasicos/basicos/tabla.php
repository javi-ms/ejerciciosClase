<?php
/**
*Tabla de multiplicar 
*
*/
	for ($i=1; $i <= 10; $i++) {
		 
		for ($j=1; $j <= 10; $j++) { 
			echo $i*$j. " ";
		}
		echo "<br/> ";
	}
	echo "<br/><a href=\"vercodigo.php?src=tabla.php\">ver codigo</a>"
?>
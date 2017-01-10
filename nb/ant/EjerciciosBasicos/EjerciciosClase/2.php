<?php 
/*
* Dado un array 10 elementos de números enteros (sin coma decimal), encontrar el máximo, y la media de los valores almacenados.
*/
	$numeroEntero = array("EL1" =>20, "EL2" =>23, "EL3" =>35, "EL4" =>36, "EL5" =>100,
						"EL6" =>36, "EL7" =>25, "EL8" =>36, "EL9" =>90, "EL10"=> 12

	);

	
		
		echo max($numeroEntero);
		echo "<br/>".array_sum($numeroEntero);
 ?>
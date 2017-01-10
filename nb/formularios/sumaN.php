<?php
/*

Script para sumar una serie de números. El número de números a sumar será introducido en un
formulario.

*/
	$suma ="";
	if (isset($_POST['sumar'])) {
		foreach ($_POST as $indice => $num) {
		
			if (is_numeric($num)) {
				$suma += $num;
			}
		}
		echo $suma;
		//print_r($_POST);
			
	}

?>
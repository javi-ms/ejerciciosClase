<?php 
//Función recursiva para sumar los dígitos de un número.

	if (isset($_POST['enviar'])) {
		$sumando1 = $_POST['sumando1'];
		$sumando2 = $_POST['sumando2'];
	    if ($sumando1 < $sumando2) {
	        echo "$a\n";
	        recursividad($sumando1+$sumando2);
	    }
	}

?>
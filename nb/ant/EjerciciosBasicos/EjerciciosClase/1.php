<?php 
/*
* Dado un array de 20 elementos que consiste en números reales (con coma decimal) y que cada
* elemento representa la venta del día de un comercio. Calcular el promedio de venta por día
* utilizando alguna estructura iterativa. Mostrar el resultado por pantalla.
*/
	$numeroReal = array("diaUno" => 20, "diaDos" => 23.54,"diaTres"=>35,"diaCuatro"=>36.58,"diaCinco"=>100,"diaSeis"=>236,"diaSiete"=>25,"diaOcho"=>36,"diaNueve"=>90,"diaDiez"=> 12, "diaOnce"=>34,"diaDoce"=>45.54,"diaTrece"=>63.9,"diaCatorce"=>99.9,"diaQuince"=>98.7,"diaDieciseis"=>10.23,"diaDiecisiete"=>21,"diaDieciocho"=>52,"diaDiecinueve"=>65,"diaVeinte"=>20
	);

	//variable
	$sumar=0;
		foreach ($numeroReal as $dia => $value) {
			$sumar+=$value;
		}
		//count para averiguar el tamaño del array
		echo $sumar/count($numeroReal) ." €";
 ?>
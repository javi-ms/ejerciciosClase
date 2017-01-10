<?php
/**
*Saber cuantos dias tiene un mes
*
*/
$anio = 1652;
 $mes = 2;
 /**
 *Comprobar si el año es bisiesto
 *para poner en febrero 28 o 29
 */
    if((!($anio%4) && ($anio%100)) || !($anio%400)) { 
        $dias_febrero = 29; 
    } else { 
        $dias_febrero = 28; 
    } 
	/**
	*Crear un switch que segun que mes pongas te devuelve una cantidad u otra refiriendose a los dias que tiene ese mes 
	*/
    switch($mes) { 
        case 01: 
			echo 31; break; 
        case 02:
			echo $dias_febrero; break; 
        case 03:
			echo 31;
		break; 
        case 04:
			echo 30; 
		break; 
        case 05:
			echo 31;
		break; 
        case 06:
			echo 30;
		break; 
        case 07:
			echo 31;
		break; 
        case 08:
			echo 31;
		break; 
        case 09:
			echo 30;
		break; 
        case 10:
			echo 31;
		break; 
        case 11:
			echo 30;
		break; 
        case 12:
			echo 31;
		break;
	}
	echo "<br/> <a href=\"vercodigo.php?src=diaAnio.php\">ver codigo</a>"
?>
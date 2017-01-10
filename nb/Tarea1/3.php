<?php
//require_once "../modulos/header.php";
?>
<?php
/**
 *Creacion de una ficha en PHP
 *@Autor:Javier Mariscal Solís
 *@2ºDAW IES GRAN CAPITAN
*
*Cargar dos numeros en variables y escribir el amyor de ellos
*Cargar en variables mes y año e indicar numeros de dias del mes 
*cabecera segun estacion
*lista de enlaces segun usuario
*
*/
	//recoge mes/fecha que estas y te diga que estacion es

	
	$fechaactual = getdate();
	$fechaNac = 2000;
	$edad = "$fechaactual[year]"-$fechaNac;
		echo $edad."<br/>";
//echo "Hoy es: $fechaactual[year]";

	

/**
*Se utiliza para ver el codigo de la pagina actual
*/
	echo "<a href=\"vercodigo.php?src=3.php\">ver codigo</a>";	
?>
<?php
	//require_once "../modulos/footer.php";
?>



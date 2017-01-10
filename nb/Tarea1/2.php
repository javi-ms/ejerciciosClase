<?php
//require_once "../modulos/header.php";
?>
<?php
/**
 *Creacion de una ficha en PHP
 *@Autor:Javier Mariscal Solís
 *@2ºDAW IES GRAN CAPITAN
*/
	
	$mes='Febrero';
	$ano=2016;
	switch ($mes) {
		case $mes=="Enero"||$mes=="Marzo"||$mes=="Mayo"||$mes=="Julio"||$mes=="Agosto"||$mes=="Octubre"||$mes=="Diciembre":
			for ($i=1; $i <= 31; $i++) { 
				echo $i.' ';
			}
				echo '<br/>';
			break;
		
		case $mes=='Abril'||$mes=="Junio"||$mes=="Septiembre"||$mes=="Noviembre":
			for ($i=1; $i <= 30; $i++) { 
				echo $i.' ';
			}
				echo '<br/>';
			break;
		case 'Febrero':

			if (($ano%4==0 && $ano%100!=0) || $ano%400==0){
			    for ($i=1; $i <= 29; $i++) { 
				echo $i.' ';
			}
				echo '<br/>';
			break;
			}else{
				for ($i=1; $i <= 28; $i++) { 
				echo $i.' ';
			}
				echo '<br/>';
			break; 
			    }

		default:
			echo "no es un mes <br/>";
			break;
	}

/**
*Se utiliza para ver el codigo de la pagina actual
*/
	echo "<a href=\"vercodigo.php?src=2.php\">ver codigo</a>";	
?>
<?php
	//require_once "../modulos/footer.php";
?>



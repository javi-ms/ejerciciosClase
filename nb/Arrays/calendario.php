<?php
//. Mostrar un calendario introduciendo el mes y el año en un formulario 


	if (isset($_POST['enviar'])) {
		
		switch ($mes) {
			case 'Enero'||'Marzo'||'Mayo'||'Julio'||'Agosto'||"octubre"||"Diciembre":
				for ($i=1; $i <= 31; $i++) { 
					echo "$i";
				}
				break;
			
			case 'Febrero':
				for ($i=1; $i <= 28; $i++) { 
					echo "$i";
				}
				break;
			case 'Abril'||'Junio'||'Septiembre'||'Noviembre':
				for ($i=1; $i <= 30; $i++) { 
					echo "$i";
				}
				break;
			
			default:
				echo "No es un mes";
				break;
		}














	}
?>
<?php
//. Mostrar un calendario introduciendo el mes y el año en un formulario 
$mes= $_POST['mes'];
$year= $_POST['year'];

	if (isset($_POST['enviar'])) {
		
		switch ($mes) {
			case $mes == 'Enero'|| $mes== 'Marzo'|| $mes == 'Mayo'|| $mes == 'Julio'|| $mes== 'Agosto'|| $mes == "octubre"|| $mes=="Diciembre":
				for ($i=1; $i <= 31; $i++) { 
					if($i % 7 == 0){
						echo $i."<br>";
					}else{
						echo "$i";
					}
					
				}
				break;
			
			case $mes=='Febrero':
				if (($year%4 == 0 && $year%100 != 0) || $year%400 == 0 ) {
					for ($i=1; $i <= 29; $i++) { 
						echo "$i";
					}
				}else{
					for ($i=1; $i <= 28; $i++) { 
						echo "$i";
					}
				}

				break;
			case $mes=='Abril'||$mes=='Junio'||$mes=='Septiembre'||$mes=='Noviembre':
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
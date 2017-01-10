<?php 
/*
* Escribir un script que permita generar y almacenar en un array los números de la lotería primitiva.
*/
//un numero(*6) aleatorio individial
//un numero individial para el reintegro
//un numero individual para complementario

	$primitiva= array();
		for ($i=0; $i <= 5; $i++) { 
			//creacion de un numero individual mediante el mt_rand
			array_push($primitiva, mt_rand(1,49));
		}
		for ($i=0; $i <=1 ; $i++) { 
			array_push($primitiva, mt_rand(0,9));
			}
		//recorrido del tamaño del array
		for($j=0; $j <= count($primitiva); $j++){
			if($j <= 5){
				echo $primitiva[$j].", ";
			}else{
				if($j == 6){
					echo "<br />complementario: ".$primitiva[$j];
				}else{
					if($j == 7){
						echo "<br />reintegro: ".$primitiva[$j];
					}
				}
			}
		}
		echo "<br/><a href=\"vercodigo.php?src=3.php\">ver codigo</a>";



 ?>
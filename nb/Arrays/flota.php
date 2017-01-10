<?php

	$tablero = array( '_'=>array('A', 'B', 'C', 'D','E','F','G','H','I'),
				   '1'=>array('A', 'A', 'A', 'A','A','3','3','3','A'),
				   '2'=>array('A', '1', 'A', 'A','A','A','A','A','A'),
				   '3'=>array('A', 'A', 'A', '2','2','A','A','A','A'),
				   '4'=>array('A', '2', 'A', 'A','A','A','A','A','A'),
				   '5'=>array('A', '2', 'A', 'A','A','A','A','A','A'),
				   '6'=>array('A', 'A', '1', 'A','4','4','4','4','A'),
				   '8'=>array('A', 'A', 'A', 'A','A','A','A','A','A'),
				   '9'=>array('A', 'A', 'A', 'A','A','A','A','A','A'),
				   '10'=>array('A', 'A', 'A', 'A','A','A','2','A','3'),
				   '11'=>array('3', '3', '3', 'A','A','A','2','A','3'),
				   '12'=>array('A', 'A', 'A', 'A','A','A','A','A','3')
					
				);
	foreach ($tablero as $indice1 => $datos) {
		echo "<table border='1'>";
			echo '<tr>';
				echo "<td>".$indice1.'</td>';

				foreach ($datos as $indice2 => $datos2) {
					echo "<td>".$datos2."</td>";
				}
			echo '</tr>';
		echo "</table>";
		//cuando sea
  		
	}/*
	foreach ($tablero as $indice1 => $datos) {
	if($indice1 == 0 || $indice1 == 11){
		echo "|";
    }else{
      if($indice1 != 10 && $indice1 != 12){
        echo $indice1 ."==> | ";
      }else{
        echo $indice1 ."=> | ";
      } 
      
    }
*/
?>
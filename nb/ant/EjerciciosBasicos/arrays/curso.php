<?php

	$curso = array('Javier Mariscal'=>array(2,5,6),
				   'Juan Cubero'=>array(5,5,5),
				   'Estela'=>array(6,6,6),
				   'Lucas'=>array(4,4,4),
				   'Miguel'=>array(7,7,7),
				   'Alejandro'=>array(1,1,1),
				   'Oscar'=>array(6,6,6)
				);

		foreach ($curso as $indice1 => $datos) {
				echo "<table border='1'>";
					echo '<tr>';
						echo "<td>".$indice1.'</td>';

						foreach ($datos as $indice2 => $datos2) {
							echo "<td>".$datos2."</td>";
						}
					echo '</tr>';
				echo "</table>";
				//cuando sea
		  		
			}
?>
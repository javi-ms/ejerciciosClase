<?php

	$verbo = array('be' => array('was/were','been'),
				  'become' => array('became','become'),
				  'begin' => array('began','begun'),
				  'bite' => array('bit','bitten')
				);
				
			echo "<table border='1'>";
				echo '<th>
						infinitivo
					  </th>
					  <th>
						Past Simple
					  </th>
					  <th>
						Past Partciple
					  </th>';
		foreach ($verbo as $indice1 => $datos) {
				echo '<tr>';
					echo "<td>".$indice1.'</td>';
						foreach ($datos as $indice2 => $datos2) {
							echo "<td>".$datos2."</td>";
							
						}
					 '</tr>';
		}
			echo "</table>";
			echo "<hr>";
			echo "<a href=\"vercodigo.php?src=verbos.php\">ver codigo</a><br/>";	
			echo "<a href=\"indexArray.php\">volver</a><br/>";
?>
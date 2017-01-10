<?php

	$continente = array('España' => array('Europa','madrid','<img src="img/spn.jpg">'),
				   'Reino Unido' => array('Europa','londres','<img src="img/ru.jpg">'),
				   'Francia' => array('Europa','Paris','<img src="img/fr.jpg">'),
				   'Alemania' => array('Europa','Berlin','<img src="img/alm.jpg">')
				);
				
			echo "<table border='1'>";
				echo '<th>
						Pais
					  </th>
					  <th>
						Continente
					  </th>
					  <th>
						Capital
					  </th>
					  <th>
						Bandera
					  </th>';

		foreach ($continente as $indice1 => $datos) {
				echo '<tr>';
					echo "<td>".$indice1.'</td>';
						foreach ($datos as $indice2 => $datos2) {
							echo "<td>".$datos2."</td>";
							
						}
		}
				echo "</table>";
?>
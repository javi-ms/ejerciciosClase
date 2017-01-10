<?php

	$continente = array('Espana' => array('Europa','madrid','<img src="img/spn.jpg">'),
				   		'Reino Unido' => array('Europa','londres','<img src="img/ru.jpg">'),
				  		'Francia' => array('Europa','Paris','<img src="img/fr.jpg">'),
				  		'Alemania' => array('Europa','Berlin','<img src="img/alm.jpg">')
						);
	
	if (isset($_POST['enviar'])) {
		$pais = $_POST['pais'];
					
			$indice = array_search($pais,$continente, true);
		
			/*echo "<table border='1'>";
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
					  </th>';*/
			echo "<td>".$indice."</td>";
		}
	
/*
		foreach ($verbo as $indice1 => $datos) {
				echo '<tr>';
					echo "<td>".$indice1.'</td>';
						foreach ($datos as $indice2 => $datos2) {
							echo "<td>".$datos2."</td>";
							
						}
		}
		*/
				echo "</table>";
				echo "<hr>";
			echo "<a href=\"vercodigo.php?src=paisespaises.php\">ver codigo</a><br/>";	
			echo "<a href=\"../indexFormulario.php\">volver</a><br/>";
?>
<?php
	$curso = array('Javier Mariscal'=>array(2,5,6),
				   'Juan Cubero'=>array(5,5,5),
				   'Estela'=>array(6,6,6),
				   'Lucas'=>array(4,4,4),
				   'Miguel'=>array(7,7,7),
				   'Alejandro'=>array(1,1,1),
				   'Oscar'=>array(6,6,6)
				);
	$contador =1;
	$divisor =3;
	$suma = 0;
		foreach ($curso as $indice1 => $datos) {
				echo "<table border='1'>";
					echo '<tr>';
						echo "<td>".$indice1.'</td>';

						foreach ($datos as $indice2 => $datos2) {
							echo "<td>Trimestre ".$contador.': '.$datos2."</td>";
							$suma+=$datos2;
							$contador++;
						}
						$nfinal =  $suma/$divisor;
							$numero = number_format($nfinal);
							echo "<td>Nota Final: ".$numero."</td>";
							$suma = 0;
					 '</tr>';
				echo "</table>";	  		
			}
			echo "<hr>";
	echo "<a href=\"vercodigo.php?src=curso.php\">ver codigo</a><br/>";	
	echo "<a href=\"indexArray.php\">volver</a><br/>";
?>
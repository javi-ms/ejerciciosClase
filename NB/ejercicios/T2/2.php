<?php
	$numAct = 0;
	for ($i=1; $i<=6 ; $i++) { 
		if ($i%2==0) {
			$numAct+=$i;
		}
	}
	echo $numAct;
	echo "<hr>";
	echo "<a href=\"vercodigo.php?src=2.php\">ver codigo</a><br/>";	
	echo "<a href=\"indexT2.php\">volver</a><br/>";
?>
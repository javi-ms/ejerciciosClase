<?php
	$numAct = 0;
	for ($i=1; $i<=6 ; $i++) { 
		if ($i%2==0) {
			$numAct+=$i;
		}
	}
	echo $numAct;

?>
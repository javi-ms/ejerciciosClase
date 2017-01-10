<?php
/**
*Recorrer listado de verbos irregulares
*
*
*/
	$verbos=array(
		"be"=>array("was/were","been"),
		"beat"=>array("beat","beaten"),
		"become"=>array("became","become"),
		"began"=>array("began","begun"),
		"bite"=>array("bit","bitten")
		);
	echo "<table>";
	foreach($verbos as $rverbos => $verb){
		echo "<tr><td>$rverbos</td>";
		foreach ($verb as $key => $value) {
			echo "<td>$value</td>";
		}
	}
	echo "</table>";
	
	
	echo "<br/><a href=\"vercodigo.php?src=verbosIrregulares.php\">ver codigo</a>"


?>
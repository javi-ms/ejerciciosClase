<?php
/**
*Suma de los tres primeros numeros pares
*
*/
	$suma=0;
	for ($n1=1; $n1<=6; $n1++){
		
		/*echo $n1;*/
		if($n1%2==0){
			$suma+=$n1;
		}
	}
	echo $suma,'<br/>';
	echo "<br/><a href=\"vercodigo.php?src=sumaPares.php\">ver codigo</a>"
?>

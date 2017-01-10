<?php
function letra_nif($dni) {
	//si el NIE empieza por Y, se sustituye la letra Y por el número 1, 
	//si el NIE empieza por Z, se sustituye la letra Z por el número 2 y se realiza el mismo cálculo.
	return substr("TRWAGMYFPDXBNJZSQVHLCKE",strtr($dni,"XYZ","012")%23,1);
}
 
	$numero = "31001612";
	echo "<form action='#' method='post'>";
		echo "<input type='text' name='numero'>";
		echo "<input type='submit' name='calcular' value='calcular'>";
	
	if(isset($_POST["calcular"])){  
			echo 'El NIF del DNI "'.$numero.'" es "'.$numero.letra_nif($numero).'"';
	}
	echo "</form>";
?>
<?php
function letra_nif($dni) {
	return substr("TRWAGMYFPDXBNJZSQVHLCKE",strtr($dni,"XYZ","012")%23,1);
}
 
	$numero = "12345678";
	echo 'El NIF del DNI "'.$numero.'" es "'.$numero.letra_nif($numero).'"';
?>
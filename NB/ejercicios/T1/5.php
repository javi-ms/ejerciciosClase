<?php

	$user='admin';
	if ($user=='admin') {
		echo "<a href>Administrar</a><br/>";
		echo "<a href>Perfil</a><br/>";
		echo "<a href>Index</a><br/>";
	}
	if ($user=='user') {
		echo "<a href>Perfil</a><br/>";
		echo "<a href>Foros</a><br/>";
	}
	if ($user=='escritor') {
		echo "<a href>Administrar post</a><br/>";
		echo "<a href>Perfil</a><br/>";
	}

	echo "<a href=\"vercodigo.php?src=5.php\">ver codigo</a><br/>";	
	echo "<a href=\"indexT1.php\">volver</a><br/>";	
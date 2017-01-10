<?php
	if(isset($_GET['src'])){
		highlight_file($_GET['src']);
		echo("<br/><a href=\"$_GET[src]\">Volver</a>");
	}
	/*
	 *	
	 *	echo("<br /><a href=\"$_GET['src']\">Volver</a>");
	*/
	else header('Location: /www/html/index.html');

	/**
	*echo "<a href=\vercodigo.php?src=vercodigo.php\>ver codigo</a>";
	*/
	
?>



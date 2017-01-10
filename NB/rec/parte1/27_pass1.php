<?php
	if (isset($_POST['pw'])) {
		$pw = $_POST['pw'];
	if ($pw == "magic") {
		header ("Location: Newpage1.html");
	} elseif ($pw == "abracadabra" ){
		header ("Location: Newpage2.html");
	} else {
		header ("Location: Sorry.html");
	}
	}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
		<title>Ejemplo de password y header</title>
	</head>
	<body>
		<h1> Ejemplo de password y funcion header </h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<input type="text" name="pw">
			<input type="submit" value="Envialo">
		</form>
		<ol>
			<li>¿Por qué se pone el codigo php antes del codigo html?</li>
				<p>Para que se ejecute antes</p>
			<li>¿Qué hace $_SERVER?</li>
				<p>Es un array que contiene información, tales como cabeceras, rutas y ubicaciones de script.</p>
			<li>¿Es recomendable poner las claves de esta forma en php?</li>
				<p>No</p>
		</ol>
	</body>
</html>
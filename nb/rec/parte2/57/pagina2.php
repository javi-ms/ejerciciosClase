	<?php
	if ($_REQUEST['radio']=="rojo")
		setcookie("color","#ff0000",time()+60*60*24*365,"/");
	elseif ($_REQUEST['radio']=="verde")
		setcookie("color","#00ff00",time()+60*60*24*365,"/");
	elseif ($_REQUEST['radio']=="azul")
		setcookie("color","#0000ff",time()+60*60*24*365,"/");
	?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/estilos.css" media="screen" />
		<title>Problema</title>
	</head>
	<body>
		Se creó la cookie.
		<br>
		<a href="Ejercicio57–Cookies.php">Ir a la otra página</a>
	</body>
</html>
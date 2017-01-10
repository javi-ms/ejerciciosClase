<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
		<title>Ejemplo Pagina 2 Librerias</title>
	</head>
	<body>
		<?php include("21_libreria.phtml") ?>
		<?php CabeceraPagina(); ?>
			Esta es otra página<BR><BR>
			completamente distinta<BR><BR>
			pero comparte el pie y la cabecera con la otra.<BR><BR>
		<?php PiePagina(); ?> 
	</body>
</html>
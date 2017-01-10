<?php
	if ($_REQUEST['opcion']=="NoticiaPolitica"){
		//setcookie("mail",$_REQUEST['mailusuario'],time()+(60*60*24*365),"/");
		echo "NoticiaPolitica";
	}
	if ($_REQUEST['opcion']=="NoticiaEconomica"){
		//setcookie("mail",$_REQUEST['mailusuario'],time()+(60*60*24*365),"/");
		echo "NoticiaEconomica";
	}
	if ($_REQUEST['opcion']=="NoticiaDeportiva"){
		//setcookie("mail",$_REQUEST['mailusuario'],time()+(60*60*24*365),"/");
		echo "NoticiaDeportiva";
	}
	
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../../css/estilos.css" media="screen" />
		<title>Noticias</title>
	</head>
<body>
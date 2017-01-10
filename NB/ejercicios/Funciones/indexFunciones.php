<!DOCTYPE html>
<html>
<head>
	<title>Ejercicios 1</title>
	<?php
	require_once "../modulos/header.php";
?>
</head>
<body>
	<div id=tablaUno align="center">		
		<table border="">
			<tr>
				<th colspan="2">1er trimestre</th>
			</tr>
			<tr>
				<td><p><img class="imgText" src="img/imgTexto.jpg">DNI</img></p></td>
				<td class="derechaAl"><a href="dni/index.php">IR</a></td>
			</tr>
			<tr>
				<td><p><img class="imgText" src="img/imgTexto.jpg">Nombre y apellido</img></p></td>
				<td class="derechaAl"><a href="NA/index.php">IR</a></td>
			</tr>
			<!--
			<tr>
				<td><p><img class="imgText" src="img/imgTexto.jpg">Numero a Letras</img></p></td>
				<td class="derechaAl"><a href="numALetras/numALetras.php">IR</a></td>
			</tr>
			-->
			<tr>
				<td><p><img class="imgText" src="img/imgTexto.jpg">Validar Contraseña</img></p></td>
				<td class="derechaAl"><a href="Pass/index.php">IR</a></td>
			</tr>
			<tr>
				<td><p><img class="imgText" src="img/imgTexto.jpg">Sumar</img></p></td>
				<td class="derechaAl"><a href="sumar/index.php">IR</a></td>
			</tr>
			<tr>
				<td><p><img class="imgText" src="img/imgTexto.jpg">Calcular tamaño del texto</img></p></td>
				<td class="derechaAl"><a href="texto/index.php">IR</a></td>
			</tr>
			<tr>
				<td><p><img class="imgText" src="img/imgTexto.jpg">Maquetar</img></p></td>
				<td class="derechaAl"><a href="maquetar/index.php">IR</a></td>
			</tr>
		</table>
	</div>
	<p><a href="../../index.php">Atras</a></p>
<?php
	require_once "../modulos/footer.php";
?>
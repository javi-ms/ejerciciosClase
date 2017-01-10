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
				<td><p><img class="imgText" src="img/imgTexto.jpg">Calendario</img></p></td>
				<td class="derechaAl"><a href="vistaCalendario.php">IR</a></td>
			</tr>
			<tr>
				<td><p><img class="imgText" src="img/imgTexto.jpg">Curso</img></p></td>
				<td class="derechaAl"><a href="curso.php">IR</a></td>
			<tr>
				<td><p><img class="imgText" src="img/imgTexto.jpg">Flota</img></p></td>
				<td class="derechaAl"><a href="flota.php">IR</a></td>
			<tr>
				<td><p><img class="imgText" src="img/imgTexto.jpg">Meses</img></p></td>
				<td class="derechaAl"><a href="meses.php">IR</a></td>
			<tr>
				<td><p><img class="imgText" src="img/imgTexto.jpg">Verbos</img></p></td>
				<td class="derechaAl"><a href="verbos.php">IR</a></td>
			</tr>
			<tr>
				<td><p><img class="imgText" src="img/imgTexto.jpg">Paises</img></p></td>
				<td class="derechaAl"><a href="paises/paises.php">IR</a></td>
			</tr>

		</table>
	</div>
	
	<p><a href="../../index.php">Atras</a></p>
</body>
</html>
<?php
	require_once "../modulos/footer.php";
?>
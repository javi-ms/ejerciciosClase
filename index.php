<?php
	require_once "modulos/header.php";
	
	/*if (!isset($_GET['page'])) {
			require_once "ejercicios/T1/indexT1.php";
		}else{
			switch ($_GET['page']) {
				case 'ejercicio1':
					require_once "ejercicios/T1/indexT1.php";
					break;
				case 'ejercicio2':
					require_once "ejercicios/T2/indexT2.php";
					break;
				default:
					echo "404";
					break;
			}
		}*/
?>

<?php 
if (!isset($_GET['page'])) {
	include ('modulos/body.php');
}else{
	include ('ejercicios/'.$_GET['page'].'.php');
}
?>
<!--
<div id=tablaUno align="center">		
		<table border="">
			<th colspan="2">1er trimestre</th>
			<tr>
				<td><p><img class="imgText" src="img/php.jpg">Ejercicios 1</img></p></td>
				<td class="derechaAl"><a href="ejercicios/T1/indexT1.php">IR</a></td>
			</tr>
			<tr>
				<td><p><img class="imgText" src="img/php.jpg">Ejercicios 2</img></p></td>
				<td class="derechaAl"><a href="ejercicios/T2/indexT2.php">IR</a></td>
			</tr>
			<tr>
				<td><p><img class="imgText" src="img/php.jpg">Ejercicios Arrays</img></p></td>
				<td class="derechaAl"><a href="ejercicios/Arrays/indexArray.php">IR</a></td>
			</tr>
			<tr>
				<td><p><img class="imgText" src="img/php.jpg">Ejercicios Formularios</img></p></td>
				<td class="derechaAl"><a href="ejercicios/formularios/indexFormulario.php">IR</a></td>
			</tr>
			<tr>
				<td><p><img class="imgText" src="img/php.jpg">Ejercicios Funciones</img></p></td>
				<td class="derechaAl"><a href="ejercicios/Funciones/indexFunciones.php">IR</a></td>
			</tr>
			<tr>
				<td><p><img class="imgText" src="img/php.jpg">Ejercicios Cookies ...</img></p></td>
				<td class="derechaAl"><a href="ejercicios/cookies.php">IR</a></td>
			</tr>
		</table>
	</div>
	-->
	<!--
	<div id=tabla2 align="center">		
		<table border="">
			<th colspan="2">2º trimestre</th>
			<tr>
				<td>a</td>
				<td id="derechaAl"><a href="">IR</a></td>
			</tr>
			<tr>
				<td>a</td>
				<td id="derechaAl"><a href="">IR</a></td>
			</tr>
			<tr>
				<td>a</td>
				<td id="derechaAl"><a href="">IR</a></td>
			</tr>
			<tr>
				<td>a</td>
				<td id="derechaAl"><a href="">IR</a></td>
			</tr>
			<tr>
				<td>a</td>
				<td id="derechaAl"><a href="">IR</a></td>
			</tr>
			<tr>
				<td>a</td>
				<td id="derechaAl"><a href="">IR</a></td>
			</tr>

		</table>
	</div>
	-->

<?php
	require_once "modulos/footer.php";
?>
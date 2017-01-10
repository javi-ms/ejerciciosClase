/* 12_logicos.php
Programa de ejemplo de operadores logicos
Por: Lic. Sergio Hugo Sanchez O.
Para: Universidad Matamoros
17, Mayo, 2009 */
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
		<title>Ejemplo de operadores Logicos</title>
	</head>
	<body>
		<h1>Ejemplo de operaciones logicas en PHP</h1>
			<?php
				$a = 8;
				$b = 3;
				$c = 3;
					echo ($a == $b) && ($c > $b). "<br>";
					echo ($a == $b) || ($b == $c). "<br>";
					echo !($b <= $c)b. "<br>";
			?>
			<li>Anota el significado de las operaciones de comparacion:</li>
			<table>
				<tr>
					<td>PREGUNTA</td>
					<td>RESPUESTA</td>
				</tr>
				<tr>
					<td>&&</td>
					<td>RESPUESTA</td>
				</tr>
				<tr>
					<td>||</td>
					<td>RESPUESTA</td>
				</tr>
			</table>
	</body>
</html>
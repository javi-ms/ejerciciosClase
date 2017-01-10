<html>
	<head>
		<meta charset="UTF-8">
		<title>Suma de 2 numeros en PHP</title>
	</head>
	<body>
	<H2>Suma de 2 numeros en PHP</H2>
	<form action="sumar.php" method="POST">
		
		<div>
			<input type="text" name="numero1">
			<input type="text" name="numero2">
		</div>
		<p><input type="submit" value="sumar"></p>

	
	</form>
	</body>
	</html>

	<?php
		if($_POST)
		{	
			$num1 = $_POST['numero1'];
			$num2 = $_POST['numero2'];
			$suma = $num1 
			+ $num2;
			echo "La suma de ".$num1." y ".$num2." es ".$suma; 
		}
		echo "<hr>";
			echo "<a href=\"vercodigo.php?src=calendario.php\">ver codigo</a><br/>";	
			echo "<a href=\"indexFormulario.php\">volver</a><br/>";
	?>
<html>
	<head>
	
	</head>
	<body>
		<h2>Seleecion de nivel</h2>
		<p>Nivel 1:  5 verbos.</p>
		<p>Nivel 2: 10 verbos.</p>
		<p>Nivel 3: 15 verbos</p>
	<?php
		echo "<form action='resultadoVerbos.php' method='post'>";
			echo "<div>";
				echo "<p>";
					echo "<input type='number' name='numCajas' min='1' max='3'/>";

				echo "</p>";
			echo "</div>";

		echo "<br />";
			echo "<input type='submit' name='enviar' value='enviar'>";
			echo "<input type='reset' value='reset' />";
		echo "</form>";
	?>


	</body>
</html>
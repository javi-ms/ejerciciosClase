<html>
	<head>
	
	</head>
	<body>
	<?php
		echo "<form action='resultado.php' method='post'>";
			echo "<div>";
				echo "<p>";
					echo "<input type='text' name='numCajas'/>";
				echo "</p>";
			echo "</div>";

		echo "<br />";
			echo "<input type='submit' name='enviar' value='enviar'>";
			echo "<input type='reset' value='reset' />";
		echo "</form>";
		?>
	</body>
</html>
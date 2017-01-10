<?php
	echo "<form action='#' method='post'>";
	//se necesita leer el arrayy segun se lea el array ir mostrando la cantidad de preguntas
		echo "<table>";
			echo "<tr>";
				echo "<td>Pregunta";//.$_POST['pregunta'];
			echo "</tr>";
			echo "<tr>";
			//el name de las respuestas debe de cambiar segun el numero de la respuesta
				echo "<td>Respuesta 1<input type='radio' name='respuesta1'>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>Respuesta 2<input type='radio' name='respuesta1'>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>Respuesta 3<input type='radio' name='respuesta1'>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>Respuesta 4<input type='radio' name='respuesta1'>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>Respuesta 5<input type='radio' name='respuesta1'>";
			echo "</tr>";
		echo "</table>";
	echo "</form>";
?>
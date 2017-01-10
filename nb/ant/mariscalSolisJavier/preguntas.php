<?php
	echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
	//$preguntas=array("p1"=>"r1", "p2"=>"r2", "p3"=>"r3");
	$preguntas=array();
	

	echo "<form action='#' method='post'>";
		echo "<table aling='center'>";
			echo "<tr>";
				echo "<td>TITULO<input type='text' name='input_titulo'><br/>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>Introduce la pregunta<input type='text' name='pregunta'><br/>";
			echo "</tr>";	
				echo "<td>Introduce respuesta<input type='text' name='respuesta1'><br/>";
			echo "<tr>";
				echo "<td>Introduce respuesta<input type='text' name='respuesta2'><br/>";
			echo "</tr>";	
			echo "<tr>";
				echo "<td>Introduce respuesta<input type='text' name='respuesta3'><br/>";
			echo "</tr>";	
			echo "<tr>";
				echo "<td>Introduce respuesta<input type='text' name='respuesta4'><br/>";
			echo "</tr>";	
			echo "<tr>";
				echo "<td>Introduce respuesta<input type='text' name='respuesta5'><br/>";
			echo "</tr>";
			echo "<tr>";	
				echo "<td><input type='submit' name='guardar' value='guardar'>";
				echo "<td><input type='reset' name='borrar' value='borrar'>";
			echo "</tr>";
		echo "</table>";
	echo "</form>";
	
	
	if(isset($_POST["guardar"])){
		//añadimos el titulo a una variableº	
		echo "esto no esta bien";
		array_push($preguntas, $_POST['pregunta']);
		print_r($preguntas);
		/*	
		$preguntas[$_POST['input_titulo']]+= array($_POST['pregunta']=>array("1"=>$_POST['respuesta1'],"2"=>$_POST['respuesta2'],"3"=>$_POST['respuesta3'],"4"=>$_POST['respuesta4'],
			"5"=>$_POST['respuesta5']));
			*/
	}


	//crear preguntas e insertar en array

	//preguntar las preguntas.

//cuando pregunta1 este en el array sera correcta
	/*


<html>
	<>




	<p>Pregunta 1</p>
		<input type="radio" name="pregunta1">r1<br>
		<input type="radio" name="pregunta1">r2<br/>
		<input type="radio" name="pregunta1">r3<br/>
		<input type="radio" name="pregunta1">r4<br/>
		<input type="radio" name="pregunta1">r5<br/>

	<p>Pregunta 2</p>
		<input type="radio" name="pregunta1">r1<br>
		<input type="radio" name="pregunta1">r2<br/>
		<input type="radio" name="pregunta1">r3<br/>
	<p>Pregunta 3</p>
		<input type="radio" name="pregunta1">r1<br>
		<input type="radio" name="pregunta1">r2<br/>
		<input type="radio" name="pregunta1">r3<br/>
	<p>Pregunta 4</p>
</html>
*/
?>
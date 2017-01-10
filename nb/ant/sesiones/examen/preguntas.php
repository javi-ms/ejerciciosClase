<?php

	//$preguntas=array("p1"=>"r1", "p2"=>"r2", "p3"=>"r3");
	$preguntas=array();
	

	echo "<form action='#' method='post'>";
		echo "TITULO<input type='text' name='input_titulo'>";
		echo "Introduce la pregunta<input type='text' name='pregunta'>";
		echo "Introduce respuesta<input type='text' name='respuesta1'>";
		echo "Introduce respuesta<input type='text' name='respuesta2'>";
		echo "Introduce respuesta<input type='text' name='respuesta3'>";
		echo "Introduce respuesta<input type='text' name='respuesta4'>";
		echo "Introduce respuesta<input type='text' name='respuesta5'>";
		echo "<input type='submit' name='guardar' value='guardar'>";
		echo "<input type='submit' name='borrar' value='borrar'>";
	echo "</form>";
	
	if(isset($_POST["guardar"])){
		//añadimos el titulo a una variable
		//$titulo = $_POST['input_titulo'];
		//
		$preguntas[$_POST['input_titulo']]+= ''array($_POST['pregunta']=>array("1"=>$_POST['respuesta1'],"2"=>$_POST['respuesta2'],"3"=>$_POST['respuesta3'],"4"=>$_POST['respuesta4'],
			"5"=>$_POST['respuesta5'])'');
		print_r($preguntas);
	}


	//crear preguntas e insertar en array

	//preguntar las preguntas.

//cuando pregunta1 este en el array sera correcta
	/*

	if($preguntas["p1"] == "r1"){
		echo "doraemon";
	}else{
		echo "nobita";
	}
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
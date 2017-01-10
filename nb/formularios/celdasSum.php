<?php
/*

Script para sumar una serie de números. El número de números a sumar será introducido en un
formulario.

*/
	$num = $_POST['num'];
	$sumando = '';

	if (isset($_POST['enviar'])) {
		echo "<form method='post' action='sumaN.php'>";
		for ($i=0; $i < $num; $i++) { 
			echo "<input type='text' name='sumando$i'><br/><br/>";
				
		}
			echo "<input type='submit' name='sumar'>
			</form>";
			print_r($_POST);
	}

?>
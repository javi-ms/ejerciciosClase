 <?php   
 	function test_input($data){
		//
		$data = trim($data);
		//
		$data = stripslashes($data);
		//
		$data =htmlspecialchars($data);
		return $data;
		}

		$cantidad ="";
		$mensaje = "";
		$lerror = FALSE;

		$mensajeError =array();
		$valores = array();
		$lerrorN =FALSE;

		if (isset($_POST['enviar'])) {
			$cantidad = test_input($_POST["cantidad"]);

			if (empty($_POST["cantidad"])) {
				$mensajeError = "campo requerido";
				$lerror = TRUE;
			}else{
				if (filter_var($cantidad, FILTER_VALIDATE_INT)) {
					$mensajeError ="Formato incorrecto";
					$lerror =TRUE;
				}

			}
		}

		if (isset($_POST['sumar'])) {
			$valores=$_POST['numeros'];
			foreach ($$_POST['numeros'] as $valor) {
				$valor=test_input($valor);

				if (empty($valor)) {
					$mensajeError[]="campo requerido";
					$lerror =TRUE;
				}
				else{
					if (!filter_var($valor, FILTER_VALIDATE_INT)) {
						$mensajeError ="mensaje incorrecto";
						$lerror = TRUE;
					}else{
						$mensajeError[]="";
					}
				}				
			}			
		}
		echo "<form method=\"post\" ";
		echo "action =\"". htmlspecialchars($_SERVER["PHP_SELF"])
		echo "Cantidad:";
		echo "<input type=\"text\" name =\"enviar\" value=\"\">"
 	 
 	 if ((isset($_POST['enviar']) and !$lerror) OR (isset ($_POST['sumar']))) {
		echo "<form method=\"post\" ";
		echo "action =\"". htmlspecialchars($_SERVER["PHP_SELF"])
		for ($i=0; $i <$cantidad ; $i++) { 
			if (isset($_POST['sumar'])) {
				$valor = $valores[$i];
				$error =$mensajeError[$i]
				
			}
		}
 	 }










 	/*Si se pulsa boton que realize lo de dentro*/

	/*if(isset($_POST["enviar"])){  
		echo "<form action='#' method='post'>";

		for ($i=0; $i < $_POST['numCajas'] ; $i++) { 
			echo "<input type='text' name='num[]'>";
		}

		
		echo "<input type='submit' name='sumar' value='sumar'>";
		echo "</form>";	

		
    }//else{
    	if(isset($_POST["sumar"])){
			
    		/*En una variable guardamos la informacion del array*/
		/*	$arrayTotal = $_POST["num"];
			echo "La suma del numero ";
			foreach ($arrayTotal  as $indice => $dato) {
				echo $dato .", ";
			}
			echo "es: " . array_sum($arrayTotal) . "\n";
		}
		//else{
		//	echo "error en la suma";
		//}  
   // }         
   

	
?>
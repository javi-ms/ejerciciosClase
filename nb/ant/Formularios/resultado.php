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
		$error ="";
		$valores = array();
		$lerrorN =FALSE;

		if (isset($_POST['enviar'])) {
			if (empty($_POST["cantidad"])) {
				$error = "campo requerido";
				$lerror = TRUE;
			}else{
				if (filter_var($cantidad, FILTER_VALIDATE_INT)) {
					$error ="Formato incorrecto";
					$lerror =TRUE;
				}
			}
		if (!$lerror){
			$cantidad = test_input($_POST["cantidad"]);
		}

			
		}
		
		if (isset($_POST['sumar'])) {
			$valores=$_POST['numeros'];
			foreach ($_POST['numeros'] as $valor) {
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
		echo "<form method=\"post\" action =\"". htmlspecialchars($_SERVER["PHP_SELF"])."\">";
		echo "Cantidad:";
		echo "<input type=\"text\" name =\"cantidad\">";
		echo "<label>".$error."</label>";
		echo "<input type= \"submit\" name=\"enviar\" value=\"Mostrar\">";
		echo "<input type =\"submit\" name=\"Sumar\" value=\"Sumar\";>";
		echo "</form>";
 	 
 	if ((isset($_POST['enviar']) and !$lerror)) {
		echo "<form method=\"post\" action=\"";
		
		
		for ($i=0; $i <=$cantidad; $i++) { 
			echo "<input type=\"text\" name=\"sumando[]\";>";
			//if (isset($_POST['sumar'])) {
			//	$valor = $valores[$i];
			//	$error =$mensajeError[$i];	
			//}
		}
		$arrayTotal = $_POST["sumando"];
			echo "La suma del numero ";
			foreach ($arrayTotal  as $indice => $dato) {
				echo $dato .", ";
			}
			echo "es: " . array_sum($arrayTotal) . "\n";
		echo "</form>";

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
		}*/
		//else{
		//	echo "error en la suma";
		//}  
   // }         
   

	
?>
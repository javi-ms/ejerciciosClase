<?php    
//creacion de una funcion para colocar la cantidad de cajas
	function printCajas($num){
		$numFor = 0;
		//$num=$_POST['numcajas'];
		if($num == 1){
			$numFor = 5;
		}else if($num == 2){
			$numFor = 10;
		}else if($num == 3){
			$numFor = 15;
		}else{
			echo "no se ha recibido ningún numero.";
			exit();
		}
		echo "<table border ='1'>";
			for ($i=1; $i <= $numFor; $i++) { 
				echo "<tr>";
				/*En esta caja ira el verbo del array*/
					echo "<td>Verbo Español<input type='text' name='verb' size='20' max ='20' maxlength='20'></td>";
					echo "<td>Infinitivo<input type='text' name='verb' maxlength='20'></td>";
					echo "<td>Pasado Simple<input type='text' name='verb' maxlength='20'></td>";
					echo "<td>Pasado participio<input type='text' name='verb' maxlength='20'></td>";
				echo "</tr>"	;
			}
			echo "</table>"	;

	}
 	/*Si se pulsa boton que realize lo de dentro*/
	if(isset($_POST["enviar"])){  
		echo "<form action='#' method='post'>";
	
	//llamar a una funcion
		printCajas($_POST['numCajas']);
	
		echo "<br/>";
		echo "<input type='submit' name='resolver' value='Resolver'>";
		echo "</form>";
	}
		       
?>
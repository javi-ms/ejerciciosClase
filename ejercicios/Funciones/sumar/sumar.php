<?php 
//Función recursiva para sumar los dígitos de un número.
$sumando = '';
	function recursividad($sumando){
    	    
    	    $numero = $sumando;

	    
   			$resto = intval($numero%10);
   			if($resto == 0){
   				return $sumando;
   			}
   			$nuevonumero= intval(substr(''.$numero,0,strlen(''.$numero)-1));
   			$resultado=recursividad($nuevonumero)+$resto;

       
	}
	if (isset($_POST['enviar'])) {
		$sumando = $_POST['sumando'];
		echo recursividad($sumando);
		   
	    }
	

?>
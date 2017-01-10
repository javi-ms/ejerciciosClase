<?php
	function validacion($clave,&$error_clave){
		if (strlen($clave)>6) {
			echo "la clave debe de tener mas de 6 caracteres";
		}
		if (strlen($clave)<16) {
			echo "la clave debe tener menor o igual a 16 caracteres ";
		}
		if (!preg_match('`[a-z]`',$clave)){
	      $error_clave = "La clave debe tener al menos una letra minúscula";
	      return false;
	   	}
		if (!preg_match('`[A-Z]`',$clave)){
			$error_clave = "La clave debe tener al menos una letra mayúscula";
	    	return false;
	   	}
	   	if (!preg_match('`[0-9]`',$clave)){
			$error_clave = "La clave debe tener al menos un caracter numérico";
			return false;
   		}
	}
	

if ($_POST){
   $error_encontrado="";
   if (validacion($_POST["clave"], $error_encontrado)){
      echo "PASSWORD VÁLIDO";
   }else{
      echo "PASSWORD NO VÁLIDO: " . $error_encontrado;
   }
}
echo "<form action='contras.php' method='post'>";
echo "Escribe una clave:";
echo "<input type=password name='clave'>";
echo "<input type='submit' value='Enviar'>";
echo  "</form>"
		
	
?>
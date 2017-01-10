<?php

	//iniciar sesion
	session_start();
	if (!isset($_SESSION['users'])) {	
		//creamos el array agenda
		$_SESSION["users"]=array("admin"=>"admin", "usuario"=>"usuario");
	}else{

		$usuarios=$_SESSION['users'];
	}

	function validar_clave($clave,&$error_clave){
		if(strlen($clave) < 6){
	    	$error_clave = "La clave debe tener al menos 6 caracteres";
     	return false;
   		}
   		if(strlen($clave) > 16){
    		$error_clave = "La clave no puede tener más de 16 caracteres";
      	return false;
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
  		$error_clave = "";
   		return true;
	}

	//creacion de los usuarios 
	$users=array("admin"=>"admin", "usuario"=>"ususario");

	if (isset($_POST["login"])) {
		//si en el array esta el usuario y la contraseña
		if (in_array($_POST["user"], $users) && in_array($_POST["pass"], $users)) {
			include('preguntas.php');
		}elseif ($_POST['user']!="admin" && $_POST['pass']!="admin") {
			include('responder.php');
			//print_r("te estas dirigiendo a responder");
		}
	}else{	
		echo "usted esta saliendo<br/>";
		print_r($_POST['user']);
		}
		
	if (isset($_POST['registrar'])) {
		array_push($_SESSION['users'],array($_POST['user']=>$_POST['pass']));
		$usuarios=$_SESSION['users'];
		
	   	$error_encontrado="";
		if (validar_clave($_POST["pass"], $error_encontrado)){
	    echo "PASSWORD VÁLIDO<br/>";
   		}else{
      	echo "PASSWORD NO VÁLIDO: " . $error_encontrado."<br/>";
		
   }
		print_r($_SESSION['users']);
}
	
	if (isset($_POST['cerrar'])) {
		print_r($_SESSION["users"]);

		unset($_SESSION["user"]);
		session_destroy();
	}

	
?>
<?php
    // Cargamos la sesión
	session_start();

    // HTML primero
	include("includes/header.php");
    
    // Funciones a usar
	include("includes/funciones.php");
    // Capa de control
    if (!isset($_SESSION['usuario']) ) {
        header("Location:index.php");
    }

    
  
    // Sólo se accede si hay sesión y se accede por el enlace de registro
    
    $usuario = "";
    $nombre = "";
    $pass = "";
    $pass2 = "";

    // Formulario de registro
    registrarUser();
    if (isset($_GET['mensaje'])) {
        if ($_GET['mensaje']=="vacios") {
            echo "Los campos no pueden estar vacios";
        }
        if ($_GET['mensaje']=="noREP") {
            echo "Las contraseñas no coinciden";
        }
    }
    
    /*
    // Comprobaciones del registro
    if(isset($_POST['registrar'])){
        $nombre = depurar($_POST['nameRegis']);
        $usuario = depurar($_POST['usuario']);
        $pass = depurar($_POST['passRegis']);
        $pass2 = depurar($_POST['passRe']);
        if(empty($usuario) or empty($nombre) or empty($pass) or empty($pass2)){
            echo "<span id=\"errores\">Rellena todos los campos</span>";            
        }else{
            if($pass != $pass2){
                echo "<span id=\"errores\">La contraseñas deben coincidir</span>"; 
            }else{           
                // Añade el usuario
                aniadirUsuario($nombre, $usuario, $pass); 
                echo "<span class=\"informacion\">Registro Realizado</span>";
            }            
        }
    }
    *//*
    $usuario = "javier";
    $pass = "javier";
    esUsuario($usuario, $pass);
*/
    // Final del HTML (footer)
	include("includes/footer.php");
?>
<?php
/*
llamar conexion BBDD
llamar clases de gestion
llamar header
*/
//inicia sesion
	session_start();
	//si no esta creada la sesion la crea
	if (!isset($_SESSION['usuario'])) {
		//la crea como invitado
		$_SESSION['usuario']='invitado';
		$_SESSION['perfil']='';
		$_SESSION['autentificado']='';
		//crea un array de session llamado carrito
		$_SESSION['carrito']=array();
	}
	require_once "includes/header.php";
	
	include("includes/funciones.php");
	//retornarConexion("conexion");

print_r($_SESSION);

	infoUsuario();

	if ($_SESSION['autentificado']=='si') {
		menu();
	}
	if (isset($_GET['mensaje'])) {
        if ($_GET['mensaje']=="registrado") {
            echo "Se ha registrado correctamente";
        }
       
    }
	
/*
	//pasar datos de input depurados
	if (isset($_POST['login'])) {
		$user = depurar($_POST['nameLogin']);
		$pass = depurar($_POST['passLogin']);
	}
//echo getElemento("nombre", "usuarios", "usuario","manuel");
*/
?>

<?php
/*
llamar footer.php
*/
	require_once "includes/footer.php";

	/*
	funcion curso academico
		comprobar fecha

	*/
?>
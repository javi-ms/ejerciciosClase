<?php
session_start();
	include("includes/funciones.php");
	require_once "includes/header.php";

	if (!$_SESSION['perfil']="admin") {
		header("Location:index.php");
	}

	registrarProducto();
	//comprobar que existe
	if (isset($_GET['mensaje'])) {
		//comprobar el nombre
		if ($_GET['mensaje']=="vacios") {
			echo "Los campos estan vacios";       
		}
		if ($_GET['mensaje']=="anadido") {
			echo "El producto se ha añadido correctamente";
		}
    }

?>
<?php
	require_once "includes/footer.php";
?>
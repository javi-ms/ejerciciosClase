<?php 
	/**
	 * Aplicación para una tienda de móviles.
	 *
	 * @author Estela Muñoz Cordón
	 */

	// Creamos la sesión
	session_start();

	// Comprobamos si existen las variables de sesión
	if (!isset($_SESSION['usuario'])) {
		$_SESSION['usuario'] = "invitado";
        $_SESSION['carrito'] = array();
	}
    
    // HTML primero
	include("includes/comienzo.php");
    
    // Funciones a usar
	include("includes/funciones.php");
 ?>
 
<main>
    <!-- INFORMACIÓN DINÁMICA -->
	<div id="info">
        <?php 
            $condicionNombre = true;
            $entrada = "";
            $consulta = "";
            $db = "";
            $user = "";
            $pass = "";
        
            // Información de usuario
            infoUsuario();
            
            // Menú según el usuario
            menu();
        
            // Comprobamos si está registrado
            if(isset($_POST['enviar'])){
                $user = depurar($_POST['usuario']);
                $pass = depurar($_POST['contrasenia']);                      
                
                if(empty($user) or empty($pass)){
                     echo "<span class=\"errores\">Rellena todos los campos</span>";  
                    //header('Location:index.php');
                }else if(!esUsuario($user, $pass)){
                    echo "<span class=\"errores\">No se encuentra registrado en el sistema</span>"; 
                    //header('Location:index.php');
                }else{
                    $_SESSION['usuario'] = getElemento("nombre", "usuarios",  "usuario", $user); 
                    header('Location:index.php');
                }
            }           
        ?>
    
    </div>
    <!-- BÚSQUEDAS -->
	<form id="fBusqueda" action =<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?> method="post">
		<input name="entrada" type="text" />
		<input type="submit" name="buscar" id="buscar" value="Buscar" />	
	</form>

	<div id="infoBusqueda">
        <?php 
            if(isset($_POST['buscar'])){
                $entrada = depurar($_POST['entrada']);
                getBusqueda($entrada);
            }
            // Mostramos los productos
            mostrarProductos($entrada);
        ?>
    </div>
</main>

<?php
    // Final del HTML (footer)
	include("includes/final.php");

 ?>
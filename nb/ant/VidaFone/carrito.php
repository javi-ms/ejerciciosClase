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
            // Información de usuario
            infoUsuario();
            
            // Menú según el usuario
            menu();
          
        ?>
    
    </div>
    
    <div id="carrito">
        
    </div>
    
</main>

<?php
    // Final del HTML (footer)
	include("includes/final.php");

 ?>
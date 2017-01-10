<?php 
	/**
	 * Para desloguear y cerrar sesión.
	 *
	 * @author Estela Muñoz Cordón
	 */

	// Recoge la sesión
	session_start();
    
    // vacío lo que guarde la sesión
    unset($_SESSION); 
    
    // borro la sesión
	session_destroy(); 
	
    // Vuelve al inicio
	header("Location: index.php");
?>
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
		header("Location:index.php");
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
            $descripcion = "";
            $pvp = "";
            $entrada = "";
            $consulta = "";
            $db = "";            
        
            // Información de usuario
            infoUsuario();
            
            // Menú según el usuario
            menu();           
        ?>
    
    </div>
    <!-- Formulario Producto -->
	<form action =<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?> method="post">
		<label>Descripción</label><input name="descripcion" type="text" /><br />
        <label>PVP</label><input name="pvp" type="text" /><br />        
		<label></label><input type="submit" name="crearP" id="buscar" value="Añadir" />		
	</form>
  
    <?php 
        if(isset($_POST['crearP'])){
            $descripcion = depurar($_POST['descripcion']);
            $pvp = depurar($_POST['pvp']);
            if(empty($descripcion) or empty($pvp)){
                echo "<span class=\"errores\">Rellena todos los campos</span>";
            }else{                
                aniadirProducto($descripcion, $pvp); 
                echo "<span class=\"informacion\">Producto Añadido</span>";
                header('Location:productos.php');
            }
        }
    ?>
   
   <div id="adorno"></div><br><br>
    
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
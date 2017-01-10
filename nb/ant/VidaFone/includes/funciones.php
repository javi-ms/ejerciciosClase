<?php 
	
	/**
	 * Recoge todas las Funciones
	 *
	 * @author Estela Muñoz Cordón
	 */
	
    // Depurar los datos quitando espacios y caracteres no necesarios
    function depurar($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

	// Controla la información que se muestra
	function infoUsuario(){
		if ($_SESSION['usuario'] == "invitado") { // No autentificado
			mostrarLogin();			
		}
		else{ // Registrado
			mostrarInfo();
		}
	}

	// Muestra el login
	function mostrarLogin(){
		echo "<form id=\"login\" action=\" ".htmlspecialchars($_SERVER["PHP_SELF"])." \" method=\"post\">";
	    echo "<label>Usuario </label><input type=\"text\" name=\"usuario\" >";
	    echo "<br/><br/><label>Contraseña </label><input type=\"text\" name=\"contrasenia\" >";
	    echo "<br/></br><input type=\"submit\" name=\"enviar\" id=\"enviarL\" value=\"Entrar\">";
        echo "<a href=\"nuevoUsuario.php?opcion=registrar\">Registrar</a><br/>";
	    echo "</form>";
        
        echo "<div id=\"adorno\"></div><br>";
	}
    
    // Muestra el registro
    function mostrarRegistro(){
        echo "<form id=\"login\" action=\" ".htmlspecialchars($_SERVER["PHP_SELF"])."?opcion=registrar\" method=\"post\">";
	    echo "<label>Nombre </label><input type=\"text\" name=\"nombreR\" >";
        echo "<label>Usuario </label><input type=\"text\" name=\"usuarioR\" >";
	    echo "<br/><br/><label>Contraseña </label><input type=\"text\" name=\"contraseniaR\" >";
        echo "<br/><br/><label>Repetir</label><input type=\"text\" name=\"contraseniaR2\" >";
	    echo "<br/></br><input type=\"submit\" name=\"registrar\" id=\"enviarL\" value=\"Registrar\">";
        echo "<a href=\"index.php\">Volver</a><br/>";
	    echo "</form>";
    }

	// Muestra la informacion de usario
	function mostrarInfo(){
		echo "<p>Usted está registrado como <strong>".$_SESSION['usuario']."</strong>.</p>";
		echo "<a id=\"salir\" href=\"includes/salir.php\">Salir</a>";
	}

    // Controla la información que sale en el menú	
	function menu(){
		if ($_SESSION['usuario']=="Administrador") {
			echo '<nav>
                    <ul>
                        <li><a href="index.php">Inicio</a></li>     
                        <li><a href="cuenta.php">Cuenta</a></li>
                        <li><a href="productos.php">Productos</a></li>
                        <li><a href="pedidos.php">Pedidos</a></li> 
                    </ul>
                </nav>';			
		}elseif ($_SESSION['usuario'] != "invitado") {
			echo '<nav>
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="cuenta.php">Cuenta</a></li>
                        <li><a href="carrito.php">Carrito</a></li>
                    </ul>
                </nav>';	
		}
	}

    // Devuelve un elemento de la tabla
    function getElemento($element, $tabla, $elComparar, $valor){
        $elemento = "";

        $consulta = getConsulta('SELECT '.$element.' from '.$tabla.' WHERE '.$elComparar.'="'.$valor.'"');
        //$consulta = getConsulta(""'SELECT nombre from usuarios where usuario="estela"');
        //SELECT nombre from usuarios where usuario="estela"
        $consulta->execute();    

        foreach($consulta as $columna){            
            $elemento = $columna['nombre'];            
        }   

        return $elemento;    
    }
    
    // Comprueba si es un usuario
    function esUsuario($user, $pass){
       $consulta = getConsulta("SELECT * FROM `usuarios`");
       
        $consulta->execute();
        
        foreach($consulta as $columna){
            if($columna['usuario'] == $user and $columna['password'] == $pass){
               return true;
            }
        }
        return false;  
    }

    // Comprueba los filtros de la búsqueda
    function getBusqueda($entrada){
        if(!empty($entrada)){
            $condicion = $entrada;
        }else{
             $condicion = '';
        }
        return $condicion;
    }
    
    // Devolver una consulta
    function getConsulta($sql){
        $db = new PDO('mysql:host=localhost;dbname=vidafone', 'vidafone', '');

        $consulta = $db->prepare($sql);
        
        return $consulta;
    }

    // Añade un usuario
    function aniadirUsuario($name, $user, $pass){
        $perfil = "Cliente";
    
        $consulta = getConsulta("INSERT INTO usuarios (`nombre`, `usuario`, `password`, `perfil`) VALUES (:nombre, :usuario, :password, :perfil)");
        
        $consulta->bindParam(':nombre', $name);
        $consulta->bindParam(':usuario', $user);
        $consulta->bindParam(':password', $pass);
        $consulta->bindParam(':perfil', $perfil);
        
        $consulta->execute();
        
        $db = null; 
    }

    // Añade un producto
    function aniadirProducto($descrip, $p){
        $fam = "Movil";
        
        // INSERT INTO productos (`descripcion`, `familia`, `pvp`) VALUES ("e", "Móvil", "4")
        $consulta = getConsulta("INSERT INTO productos (`descripcion`, `familia`, `pvp`) VALUES (:descripcion, :familia, :pvp)");
   
        $consulta->bindParam(':descripcion', $descrip);
        $consulta->bindParam(':familia', $fam);
        $consulta->bindParam(':pvp', $p);
        
        $consulta->execute();

        $db = null;
    }    

    // Muestra las empresas
	function mostrarProductos($condicion){             
        $consulta = getConsulta('SELECT * from productos WHERE descripcion like "%'.$condicion.'%"');
        
        $consulta->execute();
        
        echo "<table>
                <caption>Productos</caption>";
        
        foreach($consulta as $columna){
            $id = $columna["id"];
            echo "<tr><td>".$columna['descripcion']."</td><td><a href=\"gestionProductos.php?opcion=ver&&id=$id\">Ver</a></td></tr>";
        }
            echo "</table>";
        
        $db = null;
    }     
    
    // Edita una pregunta
    function editarProducto($productoNuevo, $id){
        $db = new PDO('mysql:host=localhost;dbname=vidafone', 'vidafone', 'vidafone');
        $sql = "Update productos SET descripcion=' ".$productoNuevo." ' WHERE id=".$id; 
        echo $sql;
        $consulta = $db->prepare($sql);
        
        $consulta->execute();
        
        $db = null;
    }

    // Borrar una pregunta
    function borrarRegistro($idR, $tabla){
        $db = new PDO('mysql:host=localhost;dbname=vidafone', 'vidafone', 'vidafone');

        $consulta = $db->prepare('DELETE FROM '.$tabla.' WHERE id='.$idR);
        
        $consulta->execute();
        
        $db = null;
    }
?>
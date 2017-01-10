<?php
	//devuelve el elemento son espacios, sin caracteres extraños
	function depurar($dato){
		$dato = trim($dato);
		$dato = stripslashes($dato);
		$dato = htmlspecialchars($dato);

		return $dato;
	}
	//devuelve una consulta
	function getConsulta($sql){
		$db=new PDO('mysql:host=localhost;dbname=vidafone', 'root','usuario');

		//Te lo prepara para ejecutarla sin errores
		$consulta = $db->prepare($sql);
		return $consulta;
	}
	//Muestra el login
	function mostrarLogin(){
		echo '<form action="procesaLogin.php" method="POST">
				<table align="center">
					<th colspan="2">LOGIN</th>
					<tr>
						<td>
							Nombre
						</td>
						<td>
							<input type="text" name="nameLogin">
						</td>
					</tr>
					<tr>
						<td>
							Contraseña
						</td>
						<td align="right">
							<input type="password" name="passLogin" >
						</td>
					</tr>	
					<tr align="center">	
						<td colspan="2">
							<input type="submit" name="login" value="login">
							<a href="newUser.php?opcion=registrar">Registrar</a><br/>
						</td>
					
					</tr>
				</table>
			</form>';
	}
	//cuando se pulse el boton registrar
	function registrarUser(){
		echo '<form action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'" method="POST">
				<table align="center">
					<th colspan="2">Registrar</th>
					<tr>
						<td>
							Nombre
						</td>
						<td>
							<input type="text" name="nameRegis">
						</td>
					</tr>
					<tr>	
						<td>
							Usuario
						</td>
						<td>
							<input type="text" name="usuario">
						</td>
					</tr>
					<tr>
						<td>
							Password
						</td>
						</td>
						<td>
							<input type="password" name="passRegis" >
						</td>
					</tr>
					<tr>	
						<td>
							Repetir password
						</td>
						<td>
							<input type="password" name="passRe" >
						</td>
					</tr>
					<tr align="center">	
						<td colspan="2">
							<input type="submit" name="registrar" value="regisUser">
						</td>
					</tr>
				</table>
			</form>';
	}
//
	function anadirUser($name, $user, $pass){
        $perfil = "Cliente";
    
        $consulta = getConsulta("INSERT INTO usuarios (`nombre`, `usuario`, `password`, `perfil`) VALUES (:nameRegis, :usuario, :passRegis, :perfil)");
        
        $consulta->bindParam(':nameRegis', $name);
        $consulta->bindParam(':usuario', $user);
        $consulta->bindParam(':passRegis', $pass);
        //el perfil por defecto sera cliente
        $consulta->bindParam(':perfil', $perfil);
        
        $consulta->execute();
        
        $db = null; 
    }
//
	function mostrarInfo(){
		echo "Estas logeado como ".$_SESSION['usuario'];
		echo "<a href='includes/salir.php'>Salir</a>";
	}
//
	function infoUsuario(){
		//siempre que sea invitado nunca mostrara el login
		if ($_SESSION['usuario']=="invitado") {
			mostrarLogin();
		}else{
			mostrarInfo();
		}
		/*
		if (isset($_POST['registrar'])) {
			registrarUser();
			if (isset($_POST['regisUser'])) {
				anadirUser();
			}
		}*/
	}

	function menu(){
			if ($_SESSION['usuario']=='javier') {
				echo'<ul>
						<li><a href="../index.php">Inicio</a></li>
						<li><a href="../cuenta.php">Cuenta</a></li>';
				echo '<li><a href="../producto.php">Producto</a></li>';
				echo '<li><a href="/anadirPedido">Pedidos</a></li>';
				echo'</ul>';
			}elseif ($_SESSION['usuario']!='invitado') {
				echo'<ul>
						<li><a href="../index.php">Inicio</a></li>
						<li><a href="../cuenta.php">Cuenta</a></li>';
				echo '<li><a href="../carrito.php">Carrito</a></li>';
				echo'</ul>';
			}
	}
	function esRegistrado($user, $pass){
		$consulta=getConsulta('select * from usuarios');
		$consulta->execute();
		foreach ($consulta as $fila) {
			if ($fila['usuario']==$user && $fila['password']==$pass) {
				return true;
			}
		}
		return false;
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

	function getElemento($e, $t, $eC, $v){
		$elemento = "";
		$consulta = getConsulta('SELECT '.$e.' FROM '.$t.' WHERE '.$eC.'="'.$v.'"');
		$consulta->execute();
		foreach ($consulta as $fila) {
			//no esta del todo correcto
			$elemento=$fila[$e];
		}
		return $elemento;
	}

	function registrarPedido(){
		echo'
			<form action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'" method="POST">
				Descripcion<input type="text"name="descripcion">
				Familia<input type="text" name="familia">
				Pvp<input type="text" name="pvp">
			</form>';
	}
?>


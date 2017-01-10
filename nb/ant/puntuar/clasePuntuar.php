<?php
session_start();

	class alumNotas{


		//Declaramos las variables.

	    private $arrayConexion = array();
	    private $mysql;

	    //Creamos el constructor que incializará la conexión con la BBDD.
	    //Por otro lado, si la sesión se ha inciado, guardamos en el array de conexión los datos 
	    //de esa sesión
	    function __construct(){
	        //lugar donde esta la base de datos, usuario para acceder a ella, contraseña y nombre de la base de datos
	        $this->mysql= @new mysqli("localhost", "root", "","alumnos"); 
	        if ($this->mysql->connect_errno){ 
	            echo "Error al conectar con la base de datos ".$this->mysql->connect_error; 
	        }
	        if (isset($_SESSION["user"])) {
	            $this->arrayConexion = $_SESSION['user'];
	        }
	    }

		function mostrar(){
			//logins
			echo "
			<br/>
				<form method='POST'>
					<table>
						<tr>
							<td aling='rigth'>Nombre <input type='text' name='name' value='name' /></td>
						</tr>
						<tr>
							<td aling='rigth'>Pass <input type='password' name='pass' value='pass' /></td>
						</tr>
						<tr>
							<td aling='rigth'> <input type='submit' name='login' value='login' /></td>
						</tr>
					</table>	
				</form>
			";
		}
		
		//El método loginUsuario recogerá los datos de acceso recogidos por parámetro para usarlos.
	    function loginUsuario($datos) {
	        //Guardamos el usuario y contraseña en dos variables.
	        $usuario = $datos['name'];
	        $contra = $datos['pass'];

	        //Hacemos las dos consultas que nos harán falta.
	        //Una para el usuario y la contraseña y otra para los permisos. 
	        $consultaAcceso = $this->mysql->query("select * from alumnos where name='$usuario' and pass='$contra'");
	       
	       
	        //Hacemos el fetch_array a la consulta de acceso al usuario y contraseña. 
	        $fila = $consultaAcceso->fetch_array(); 
	        //Si al hacer el fetch_array no retorna ningún elemento, es decir, si el usuario y contraseña
	        //son incorrectos, mandará un mensaje por javascript indicando que el usuario y/o la contraseña
	        //no son válidos y hará focus en el campo de usuario.
	        if ($fila == null){
	            echo "<script type='text/javascript'>
	                    alert('Usuario y/o contraseña incorrectos');
	                    document.getElementById('iduser').focus();
	                    </script>";
	                //Tras hacer esto, hacemos un exit para salirnos.
	                exit();
	        }
	        
	        //Guardamos los datos del usuario y contraseña en el array.
	        if (isset($this->arrayConexion)) {
	            //Creamos un array en blanco porque para cada conexión nueva tiene que haber datos distintos.
	            $this->arrayConexion = array();
	            //Pasamos el usuario  al array.
	            $this->arrayConexion[] = $usuario;


	            
	         
	            
	            //Por último, tras haber rellenado el array, se lo damos a la sesión.
	            $_SESSION['user'] = $this->arrayConexion;
	        }
	    }
		function recogerNota($datos){
			//ponerle al form method = post


			
			//recoger nombre de usuario a través del array de la sesión.
			$usuarioActual = $_SESSION['user'][0];

			$consulta="update alumnos set nota = '".$datos['nota']."' where name = $usuarioActual";
			// $datos= $this->mysql->query($consulta) or


		}
	}
	//usar clase para preview
	$prueba = new alumNotas();
	$prueba->mostrar();
	if(isset($_POST["login"])){

		$prueba->loginUsuario($_POST);

		
		/*echo"
			<form>
			<input type='number' name='nota' value='note'>
			</form>
			";
*/
	}

	//Si la sesión actual es la denominada 'user'
        if (isset($_SESSION['user'])) {
        	//Se mostrará a la izquierda en rojo el mensaje Estás en el sistema como usuario X
            echo "	<div id='mensaje' style='color:red; font-weight:bold; position:absolute; top:0px; left:0%'>
           				Estás en el sistema como " . $_SESSION['user'][0] . "
           			</div>

           			<form method='POST'>
           				Nota del alumno<input type=number name='note' value='note'>
           				Modificar<input type=submit name='input_modificar' value='input_modificar'>
           			</form>

           			";

        }else{
        	echo "	<div id='mensaje' style='color:red; font-weight:bold; position:absolute; top:0px; left:0%'>
           				No estás en el sistema
           			</div>";
            echo "<h3 align='center'>No tiene permiso para estar en esta página</h3>";
            exit();

        }

        -
        $prueba->recogerNota($_POST);
		-
?>
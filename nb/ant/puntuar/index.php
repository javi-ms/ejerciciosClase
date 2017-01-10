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
	}
		public function login(){
			//login
			echo "
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
			";
		}
	//El método loginUsuario recogerá los datos de acceso recogidos por parámetro para usarlos.
    public function loginUsuario($datos) {
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


            
            //Sacamos los elementos contenidos en la consulta de permisos para asignar los permisos.
            while ($fila2 = $consultaPermisos->fetch_array()){
                //Pasamos la página a la que el usuario puede acceder dando al array el segundo elemento
                //de fila2.
                $this->arrayConexion[] = $fila2[2];
            }
            
            //Por último, tras haber rellenado el array, se lo damos a la sesión.
            $_SESSION['user'] = $this->arrayConexion;
        }
    }
/*
			//Creamos el método insertarVisita para meter los datos en el array
			public function insertarAlumno($datos){
				//Creamos las variables para usar luego en el insert.

				$alumno = $datos["name"];
				

				//Hacemos la consulta insert e introducimos los valores pasados por parámetros.
				$consulta="insert into alumnos values(null,'".utf8_decode(htmlentities($name))."$note)"; 

				//Comprobar si la consulta es correcta.
				// $this->mysql->query($consulta);

				if (!$this->mysql->query($consulta)){
					if(strpos($this->mysql->error,"name")!== false){
						echo "<script>alert('el valor nombre  está repetido. Por favor, introduzca otros valores.')</script>";
					}else{
						die("Error en la consulta ".'Error nº'.$this->mysql->errno.'.-'.$this->mysql->error);
					}
				}
			}
			*/
		
		//reenvia a meter nota
		/*
		$_POST['login']
		echo "
			<input type='number' name='nota' value='note'>
		";
*/
	}

	//usar clase para preview
	$prueba = new alumNotas();
	$prueba->mostrar();

?>
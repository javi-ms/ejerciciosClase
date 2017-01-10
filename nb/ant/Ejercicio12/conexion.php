<?php 
//inicia sesion de usuario
session_start();

class Conexion {

    private $arrayConexion = array();
    private $mysql;

    //Creamos el constructor que incializará la conexión con la BBDD.
    //Por otro lado, si la sesión se ha inciado, guardamos en el array de conexión los datos 
    //de esa sesión
    function __construct(){
        //lugar donde esta la base de datos, usuario para acceder a ella, contraseña y nombre de la base de datos
        $this->mysql= @new mysqli("localhost", "root", "","examen"); 
        if ($this->mysql->connect_errno){ 
            echo "Error al conectar con la base de datos ".$this->mysql->connect_error; 
        }
        if (isset($_SESSION["user"])) {
            $this->arrayConexion = $_SESSION['user'];
        }
    }

    //El método formAcceso muestra el formulario para acceder con el usuario y la contraseña.
    public function formAcceso(){
        echo"
            <form action='indice.php' method='POST'>
                <table>
                    <tr>
                        <td>Usuario:</td><td><input type='text' name='usuario' id='iduser'/></td>
                    </tr>
                    <tr>
                        <td>Contraseña:</td><td><input type='password' name='password'/></td>
                    </tr>
                    <tr>
                        <td align='right' width='50%'><input type='submit' name='btn_enviar' value='Entrar' /></td>
                        <td align='left'><input type='submit' name='btn_salir' value='Salir'/></td>
                    </tr>
                </table>
            </form>
        ";
    }
    //El método loginUsuario recogerá los datos de acceso recogidos por parámetro para usarlos.
    public function loginUsuario($datos) {
        //Guardamos el usuario y contraseña en dos variables.
        $usuario = $datos['usuario'];
        $contra = $datos['password'];

        //Hacemos las dos consultas que nos harán falta.
        //Una para el usuario y la contraseña y otra para los permisos. 
        $consultaAcceso = $this->mysql->query("select * from usuario where usuario='$usuario' and password='$contra'");
        $consultaPermisos = $this->mysql->query("select * from permiso where id_usuario=(select id from usuario where usuario ='$usuario')");
       
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


    //El método desconectarUsuario eliminará por completo las cookies y los datos de la sesión.
    public function desconectarUsuario() {
        $this->arrayConexion = array();
        $_SESSION['user'] = $this->arrayConexion;
        // Destruir todas las variables de sesión.
       $_SESSION = array();
       // Si se desea destruir la sesión completamente, se borra la cookie de la sesión
       if (ini_get("session.use_cookies")) { //se comprueba si se usan cookies en la sesión.
           $params = session_get_cookie_params(); //obtenemos todos los valores de la sesión.
           setcookie(session_name(), '', time() - 42000, //se pone un valor negativo para borrar la cookie.
                   $params["path"], $params["domain"], $params["secure"], $params["httponly"]
           );
       }
       // Finalmente, se destruye la información de la sesión.
       session_destroy();
    }

    public function __destruct() {
        //Hemos terminado, cerramos la conexión.
        $this->mysql->close();
        //Guardamos lo que haya en el array en la sesión
        $_SESSION['user'] = $this->arrayConexion;
    }

}

?>
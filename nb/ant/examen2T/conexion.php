<?php
session_start();

    class blog{


        //Declaramos las variables.

        private $arrayConexion = array();
        private $mysql;

        //Creamos el constructor que incializará la conexión con la BBDD.
        //Por otro lado, si la sesión se ha inciado, guardamos en el array de conexión los datos 
        //de esa sesión
        function __construct(){
            //lugar donde esta la base de datos, usuario para acceder a ella, contraseña y nombre de la base de datos
            $this->mysql= @new mysqli("localhost", "root", "","ex_symblog"); 
            if ($this->mysql->connect_errno){ 
                echo "Error al conectar con la base de datos ".$this->mysql->connect_error; 
            }
            if (isset($_SESSION["user"])) {
                $this->arrayConexion = $_SESSION['user'];
            }
        }

        function mostrar(){
            //logins
            /*
            // Consultar la base de datos
            $consulta_mysql='select * from usuarios';
            $resultado_consulta_mysql=mysql_query($consulta_mysql,$conexion);
while($fila=mysql_fetch_array($resultado_consulta_mysql)){
                                <option value='".$fila['perfil']."'>".$fila['perfil']."</option>;
                            }
  */
            echo "
            <br/>
            <div>
                <form action='index.php' method='POST'>
                    <table>
                        <tr>
                            <td aling='rigth'>Nombre</td> 
                            <td><input type='text' name='nombre'/></td>
                        </tr>
                        <tr>
                            <td aling='rigth'>Pass</td> 
                            <td><input type='password' name='psw'/></td>
                        </tr>
                        <tr>
                            <td aling='rigth'> <input type='submit' name='login' value='login' /></td>
                            <td><input type='submit' name='exit' value='exit'></td>
                            <td><input type='submit' name='registrar' value='registrar'></td>
                        </tr>
                    </table>    
                    
                </form>
            </div> 

            
            ";
        }
        
        //El método loginUsuario recogerá los datos de acceso recogidos por parámetro para usarlos.
        function loginUsuario($datos) {
            //Guardamos el usuario y contraseña en dos variables.
            $usuario = $datos['nombre'];
            $contra = $datos['psw'];

            //Hacemos las dos consultas que nos harán falta.
            //Una para el usuario y la contraseña y otra para los permisos. 
            $consultaAcceso = $this->mysql->query("select * from usuarios where nombre='$usuario' and psw='$contra'");
           
           
            //Hacemos el fetch_array a la consulta de acceso al usuario y contraseña. 
            $fila = $consultaAcceso->fetch_array(); 
            //Si al hacer el fetch_array no retorna ningún elemento, es decir, si el usuario y contraseña
            //son incorrectos, mandará un mensaje por javascript indicando que el usuario y/o la contraseña
            //no son válidos y hará focus en el campo de usuario.
            if ($fila == null){
                echo "<script type='text/javascript'>
                        alert('Usuario y/o contraseña incorrectos');
                        document.getElementById('id').focus();
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

        public function insertar($datos){
            //Creamos las variables para usar luego en el insert.

            $usuario = $datos["nombreR"];
            $contra = $datos["pswR"];
           

            //Hacemos la consulta insert e introducimos los valores pasados por parámetros.
            $consulta="insert into usuarios values(null,'".utf8_decode(htmlentities($usuario))."','".$contra; 
      

            //Comprobar si la consulta es correcta.
            // $this->mysql->query($consulta);
        
            if (!$this->mysql->query($consulta)){
                if(strpos($this->mysql->error,"nombreR")!== false){
                    echo "<script>alert('El valor nombre esta repetido. Por favor, introduzca otros valores.')</script>";
                }else{
                    die("Error en la consulta ".'Error nº'.$this->mysql->errno.'.-'.$this->mysql->error);
                }
            }
        }
       Public function mostrar_insertar(){
            /*
            // Consultar la base de datos
            $consulta_mysql='select * from usuarios';
            $resultado_consulta_mysql=mysql_query($consulta_mysql,$conexion);
                        while($registro=mysql_fetch_array($resultado_consulta_mysql)){
                        $registro['perfil'];
              
            */
            echo"
                <table align='center' border='0'>
                    <form method='POST' action='index.php'>
                        <tr>
                            <td>user:</td>
                            </td><td><input type='text' name='nombreR' required  /></td>
                        </tr>
                        <tr>  
                            <td>pass</td>
                            <td><input type='password' name='pswR' required  /></td>
                        </tr>
                        <tr>
                            <td>Email</td>  
                            <td><input type='text' name='email' required  /></td>
                        </tr>
                        <tr>
                        <td>
                            Perfil
                        </td>
                            <td>
                                <select multiple name='perfil[]''>    
                                    <option value='Administrador'>Administrador</option>    
                                    <option value='Redactor'>Redactor</option>    
                                    <option value='lector'>lector</option>      
                                </select><br> 
                            </td>
                        </tr>
                        <tr>  
                            <td><input type='submit' name='registrar' required  /></td>
                        </tr>
                    </form>
                </table>
                <br/>
            ";
    
        } 
    public function __destruct() {
        //Hemos terminado, cerramos la conexión.
        $this->mysql->close();
        //Guardamos lo que haya en el array en la sesión
        $_SESSION['user'] = $this->arrayConexion;
        }
        /*
        function recogerNota($datos){
            //ponerle al form method = post


            
            //recoger nombre de usuario a través del array de la sesión.
            $usuarioActual = $_SESSION['user'][0];

            $consulta="update alumnos set nota = '".$datos['nota']."' where name = $usuarioActual";
            // $datos= $this->mysql->query($consulta) or


        }*/
    }

    //Si la sesión actual es la denominada 'user'
    if(isset($_POST["login"])){
        if (isset($_SESSION['user'])) {
            //Se mostrará a la izquierda en rojo el mensaje Estás en el sistema como usuario X
            echo "  <div id='mensaje' style='color:red; font-weight:bold; position:absolute; top:0px; left:0%'>
                        Estás en el sistema como " . $_SESSION['user'][0] . "
                    </div>
                    ";

        }else{
            echo "  <div id='mensaje' style='color:red; font-weight:bold; position:absolute; top:0px; left:0%'>
                        No estás en el sistema
                    </div>";
            echo "<h3 align='center'>No tiene permiso para estar en esta página</h3>";
            exit();
       

        }
    }

       
?>
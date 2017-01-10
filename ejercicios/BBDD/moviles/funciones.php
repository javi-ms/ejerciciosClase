<?php 
	//conexion con la BBDD
	function conexion(){
		$user= "root";
		$pass= "root";
		$host= "192.168.115.150";
		$port='3306';
		$db= "moviles";
		$conexion = new PDO('mysql:host=192.168.115.150;dbname=moviles;port=3306', "user", "user");
		//$conexion = new PDO('mysql:host=192.168.115.150;dbname=moviles;', $user,$pass);
		return $conexion;
	}

	//aqui van los datos que se van a insertar en la tabla
	function insertar($nombre,$marca,$modelo){
		//si hago un archivo conexion tengo que crear un Objeto(new conexion())
		
		//me devuelve la conexion
		$conexion = conexion();
		//dos puntos indica el parametro
		$sqlInsertar ="insert into movil(nombre, marca, modelo) values(:nombre, :marca, :modelo)";
		
		//Preparo la consulta para evitar el SQLInyection con el metodo prepare
    	$statement = $conexion->prepare($sql);

    	//Bindeamos los parametros para sustituir los parametros con : por su valor
		$statement->bindParam(":nombre", $nombre);
		$statement->bindParam(":marca", $marca);
		$statement->bindParam(":modelo", $modelo);

		if (!$statement) {
			return "Error al registrar los datos";
		}else{
			$statement->execute();
			return "Se han registrado correctamente";
		}
	}

	function mostrar() {

    	$filas = null;
    	//llamando a la conexion a la base de datos
        $conexion =conexion();
        
        $sql = "select * from movil";
        
        $statement = $conexion->prepare($sql);
        
        $statement->execute();
        
        while($resultado = $statement->fetch() ) {
            $filas[] = $resultado;
        }
        
        return $filas;
    }
?>
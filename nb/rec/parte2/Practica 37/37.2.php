<?php
	/*
		Confeccionar una librería que contenga una funcion llamada retornarConexion, la misma debe llamar a
		las funciones mysql_connect y mysql_select_db y retornar la variable que genero la funcion
		mysql_connect.
		Tener en cuenta que a esta funcion la deben implementar en el archivo “pagina2.php”. En el archivo
		“pagina1.php” incluir la librería que contiene la funcion retornarConexion. Luego imprimir todos los
		registros de la tabla ALUMNOS.
	*/

	function retornarConexion(){
		$dp = mysqli_connect("localhost", "root", "usuario", "clase" );
		if ($dp->connect_errno) {
	   		printf("Falló la conexión: %s\n", $dp->connect_error);
	    exit();
		}
		//esto es para enviarlo a otro lado
		return $dp;
	}
	function consultaBD(){
		//aqui llamamos a la funcion anterior y la guardamos en una variable
		$dp = retornarConexion();
		$ConsultaMySql= $dp->query("SELECT * from alumnos");
		while($columna = mysqli_fetch_array($ConsultaMySql)){
		    echo "<br/>".$columna["nombre"]." "; 
		}
	}	

	retornarConexion();

?>
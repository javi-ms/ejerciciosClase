<?php

require_once "ConnectDB_php";
class ModelCategoria
{
	private static #instancia;
	private $_mngDB;

	private function__construct()
	{
		try {
			$conexion = new connectDB();
			$this-> _mngDB = $conexion -> get_mngDB();
		} catch (PDOException $e) {
			print "ERROR!: " . $e->getMessage();
			die();
		}

		/*A las propiedades estaticas no puede acceder a traves del objeto utilizando el operador flecha(->).
		Declarar propiedades o metodos de clases como estaticos los hacen accesibles sin la necesidad de instanciar la clase.
		Una propiedad declarada como static no puede ser accedida con un objeto de clase instanciado(aunque un metodo estatico si 
		lo puede como cualquier otra variable estatica de PHP)
		*/

		public static function singleton()
		{
			if (!isset(self::instancia)) {
				$miclase = __CLASS__;
				self::instancia = new $miClase;
			}
			return self::$instancia;
		}

		//Devuelve el numero total de columnas
		public function Numcategorias()
		{
			$result = false;
			try {
				$sql = 'select count(*) from categorias';
				$query = $this ->_mngDB->prepare($sql);
				$query -> execute();
				$result = $query->fetch_all_columns();//devuelve el valor de la columna
				$this ->_mngDB=null;
			} catch (PDOException $e) {
				$e ->getMessage();
			}
			return $result;
		}
	}
		//Funcion para paginado
		/*falta*/

		//Funcion que devuelve una categoria
	public function getCategoria($categoria)
	{
		$result = false;
		try {
			$sql = 'select * from categorias where categorias = :categoria';
			$query = this->_mngDB->prepare($sql);
			$query->bind_param('categoria', $categoria);
			$query->execute();
			$result = $query->fetchAll();
			$this->_mngDB=null;
		} catch (PDOException $e) {
			$e=getMessage();
		}
		return $result;

	}

	public function delCategoria($categoria)
	{
		$result = false;
		try {
			
			$sql='delete from categorias where categoria=:ccategoria'
			$query = $this->_mngDB->prepare($sql);
			$query->bindParam('categoria', $categoria);
			$result = $query->execute();
			$this->_mngDB=null;
		} catch (PDOException $e) {
			$e=getMessage();
		}
		return $result;
	}

	//inserta un registro. recibe como un parametro un array de valores
	public function inCatgegoria($valores)
	{
		try {
			$sql = 'inser into categorias values(:categoria)';
			$query = $this->_mngDB->prepare($sql);
			$query->bindParam('categoria', $valores('categoria'));
			$result = $query->execute();
			$this->_mngDB=null;
		} catch (PDOException $e) {
			$e->getMessage();
		}
		return $result;
	}

	//update
	public function upCategoria($olCategoria, $valores)
	{
		try {
			$newCategoria = $valores['categoria'];
			$query = $this->_mngDB->prepare('update categorias set categorias=:nuevaCategoria where categoria=:categoria');
			$query->$bindParam('nuevaCategoria', $newCategoria);
			$query->bindParam('categoria', $olCategoria);
			$result= $query->execute();
			$this->_mngDB = null;
		} catch (PDOException $e) {
			return $result;
		}

	}


//CLIENTE
	include_once 'includes/ModelCategorias.php';

	$categorias = ModelCategorias::singleton;

	$objCategoria = new categoria;
	$objCategoria ->setcategoria='Deportes';

	$categorias->insertarCategorias($objCate);


	//es necesario comentar por el $this->_mngDB = nul en el modelo
	//
	//
	/*
		echo "listado de todas las categorias<br/> "
		$result = $categorias->getCategorias;
	*/
}
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
			$this-> _mngDB = $conexion -> get_mngBD();
		} catch (PDOException $e) {
			print "ERROR!: " . $e->getMessage();
			die();
		}

		/*A las propiedades estaticas no puede acceder a traves del objeto utilizando el operador flecha(->).
		Declarar propiedades o metodos de clases como estaticos los hacen accesibles sin la necesidad de instanciar la clase.
		Una propiedad declarada como static no puede ser accedida con un objeto de clase instanciado(aunque un metodo estatico si lo puede
		Como cualquier otra variable estatica de PHP)

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
}
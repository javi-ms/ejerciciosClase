<?php
require_once "includes/conexionBD.php";
require_once "includes/detPedidos.php";
class ModelEmpresas{
	private $conexion ="";
	public function __construct(){
		$conexion = new connectBD();
	}/*
	public function add(Empresa $empresa){
		$nombre = $empresa->getNombre();
		$this->conexion->consultaBD("INSERT INTO `Empresas`(`nombre`,)values($nombre,$email)");
		// esto es para mostrar un array con los resultados de la tabla
		//return $this->conexion->consultaBD("SELECT *  from `empresas`");
	}
	public function delete(Empresa $empresa){
		$nombre = $empresa ->getNombre();
		//$this ->conexion->consultaBD(DELETE * from Empresas where where ID="introducir id de la empresa")
		// esto es para mostrar un array con los resultados de la tabla
		//return $this->conexion->consultaBD("SELECT *  from `empresas`");
	}
	public function update(Empresa $empresa){
		$nombre = $empresa->getNombre();
		$this->conexion->consultaBD("UPDATE * from `Empresas`");
		// esto es para mostrar un array con los resultados de la tabla
		//return $this->conexion->consultaBD("SELECT *  from `empresas`");
	}*/
} 
 ?>
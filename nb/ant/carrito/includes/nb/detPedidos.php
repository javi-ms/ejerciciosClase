<?php 
class Empresa{
	private $idpedido="";
	private $idproducto="";
	private $unidades="";
	private $importe="";
	

/*poner lo mismo que get&set*/
	public function get() {
		return $this->idpedido;
	}
	public function set($idpedido){
		$this->idpedido = $idpedido;
	}
	public function get() {
		return $this->idproducto;
	}
	public function set($idproducto){
		$this->idproducto = $idproducto;
	}
	public function get() {
		return $this->unidades;
	}
	public function set($unidades){
		$this->unidades = $unidades;
	}
	public function get() {
		return $this->importe;
	}
	public function set($){
		$this->importe = $importe;
	}
	
} ?>
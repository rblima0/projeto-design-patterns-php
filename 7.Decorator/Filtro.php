<?php
abstract class Filtro {

	protected $filtro;

	function __construct ($filtro = null){
		$this->filtro = $filtro;
	}

	public abstract function filtra ($contas);

	protected function proximo($contas){
		if(!is_null($this->filtro)){
			return $this->filtro->filtra($contas);
		}
		return array();
	}

}
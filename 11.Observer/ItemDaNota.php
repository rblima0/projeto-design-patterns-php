<?php
class ItemDaNota {

	private $descricao;
	private $valor;

	function __construct($descricao, $valor){
		$this->descricao = $descricao;
		$this->valor = $valor;
	}


    public function getDescricao(){
        return $this->descricao;
    }


    public function getValor(){
        return $this->valor;
    }
}
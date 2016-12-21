<?php
class ItemDaNota {

	private $descricao;
	private $valor;

	function __construct($descricao, $valor){
		$descricao = $this->descricao;
		$valor = $this->valor;
	}


    public function getDescricao(){
        return $this->descricao;
    }


    public function getValor(){
        return $this->valor;
    }
}
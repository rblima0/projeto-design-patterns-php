<?php
class Conta {

	private $valor;
	private $itens;

	function __construct($valor){
		$this->valor = $valor;
	}

	public function getNome(){
		return $this->nome;
	}

	public function getItens(){
		return $this->itens;
	}

	public function adicionaItem(Item $itens){
		$this->itens[] = $itens;
	}
}
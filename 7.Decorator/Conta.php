<?php
class Conta {

	private $titular;
	private $saldo;
	private $dataAbertura;

	function __construct($titular, $saldo, $dataAbertura){
		$this->titular = $titular;
		$this->saldo = $saldo;
		$this->dataAbertura = $dataAbertura;
	}

	function getTitular(){
		return $this->titular;
	}

	function getSaldo(){
		return $this->saldo;
	}

	function getDataAbertura(){
		return $this->dataAbertura;
	}
}
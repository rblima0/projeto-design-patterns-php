<?php
class Conta {
	private $titular;
	private $numeroConta;
	private $agencia;
	private $saldo;

	function __construct($titular, $numeroConta, $agencia, $saldo){
		$this->titular = $titular;
		$this->numeroConta = $numeroConta;
		$this->agencia = $agencia;
		$this->saldo = $saldo;
	}

	public function getTitular() {
		return $this->titular;
	}

	public function getNumeroConta() {
		return $this->numeroConta;
	}

	public function getAgencia() {
		return $this->agencia;
	}

	public function getSaldo() {
		return $this->saldo;
	}

}
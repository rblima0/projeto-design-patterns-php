<?php
class Conta {

	private $saldo;
	private $estado;

	function __construct(){
		$this->estado = new Negativo();
	}

		public function getSaldo(){
			return $this->saldo;
		}
		public function setSaldo($saldo){
			$this->saldo = $saldo;
		}

		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}

	public function saca($valor) {
		$this->estado->saca($this, $valor);
	}

	public function deposita($valor) {
		$this->estado->deposita($this, $valor);
	}

}
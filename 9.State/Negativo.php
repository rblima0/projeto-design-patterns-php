<?php
class Negativo {

	public function saca(Conta $conta, $valor) {
		throw new Exception("Conta no Negativo, Não é possível sacar!");
	}

	public function deposita(Conta $conta, $valor){
		$conta->setSaldo($conta->getSaldo() + $valor);
		if($conta->getSaldo() > 0){
			$conta->setEstado(New Positivo());
		}
	}

}
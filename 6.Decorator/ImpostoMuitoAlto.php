<?php
class ImpostoMuitoAlto extends Imposto {

	private $proximoImposto;

	function __construct(Imposto $proximoImposto = null){
		$this->proximoImposto = $proximoImposto;
	}

	protected function calcula(Orcamento $orcamento){
		return $orcamento->getValor() * 0.2 + $this->calculaOutroImposto($orcamento);
	}
}
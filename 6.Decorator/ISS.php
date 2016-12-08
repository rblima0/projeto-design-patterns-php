<?php
class ISS extends Imposto {

	private $proximoImposto;

	function __construct(Imposto $proximoImposto = null){
		$this->proximoImposto = $proximoImposto;
	}
	
	public function calcula(Orcamento $orcamento){
		return $orcamento->getValor() * 0.05 + 50 + $this->calculaOutroOrcamento($orcamento);
	}
}
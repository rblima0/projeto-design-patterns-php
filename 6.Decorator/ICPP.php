<?php
class ICPP extends TemplateImpostoCondicional {

	private $proximoImposto;

	function __construct(Imposto $proximoImposto = null){
		$this->proximoImposto = $proximoImposto;
	}
	
	protected function deveUsarMaximaTaxacao(Orcamento $orcamento) {
		return $orcamento->getValor() > 500;
	}
	
	protected function maximaTaxacao(Orcamento $orcamento) { 
		return $orcamento->getValor() * 0.07;
	}

	protected function minimaTaxacao(Orcamento $orcamento) {
		return $orcamento->getValor() * 0.05;
	}
}
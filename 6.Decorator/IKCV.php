<?php 
class IKCV extends TemplateImpostoCondicional {

	private $proximoImposto;

	function __construct(Imposto $proximoImposto = null){
		$this->proximoImposto = $proximoImposto;
	}

	protected function deveUsarMaximaTaxacao(Orcamento $orcamento) {
		return $orcamento->getValor() > 500 && $this->itemMaior100($orcamento);
	}
	protected function maximaTaxacao(Orcamento $orcamento) { 
		return $orcamento->getValor() * 0.10;  
	}
	protected function minimaTaxacao(Orcamento $orcamento) {
		return $orcamento->getValor() * 0.06;
	}

	private function itemMaior100(Orcamento $orcamento) {
	    foreach ($orcamento->getItens() as $item) {
	        if($item->getValor() > 100) {
	        	return true;
	        } 
	    }
    		return false;
	}
}
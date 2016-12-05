<?php 
abstract class Imposto {

	private $proximoImposto;

	function __construct (Imposto $proximoImposto){
		$this->proximoImposto-> $proximoImposto;
	}

	protected function calculaOutroImposto(Orcamento $orcamento){
		if(is_null($this->proximoImposto)){
			return 0;
		} else {
			return $proximoImposto->calcula($orcamento);
		}
	}

	public abstract function calcula(Orcamento $orcamento);
}

class ISS extends Imposto {

	function __construct(Imposto $proximoImposto = null) {
		parent::construct($proximoImposto);
	}

	public function calcula(Orcamento $orcamento){
		return $orcamento->getValor() * 0.06 + $this->calculaOutroImposto($orcamento);
	}

	private function calculaOutroImposto($orcamento) {
		return $this->proximoImposto->calcula($orcamento);
	}
}

class ICMS extends Imposto {

	function __construct(Imposto $proximoImposto = null) {
		parent::construct($proximoImposto);
	}

	public function calcula(Orcamento $orcamento){
		return $orcamento->getValor() * 0.1 + $this->calculaOutroImposto($orcamento);
	}

	private function calculaOutroImposto($orcamento) {
		return $this->proximoImposto->calcula($orcamento);
	}
}
<?php 
abstract class Imposto {
	
	private $proximoImposto;

	function __construct(Imposto $proximoImposto = null){
		$this->proximoImposto = $proximoImposto;
	}

	public abstract function calcula(Orcamento $orcamento);

	protected function calculaOutroImposto(Orcamento $orcamento){
		if(is_null($this->proximoImposto)) return 0;
			return $proximoImposto->calcula($orcamento);
	}
		//return ($this->outroImposto == null) ? 0 : $this->outroImposto->calcula($orcamento);
}
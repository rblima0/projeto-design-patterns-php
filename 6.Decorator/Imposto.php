<?php 
abstract class Imposto {
	
	private $proximoImposto;

	function __construct(Imposto $proximoImposto){
		$this->proximoImposto = $proximoImposto;
	}

	function calculaOutroImposto(Orcamento $orcamento){
		if(is_null($this->proximoImposto)){
			return 0;
		} else {
			return $proximoImposto->calcula($orcamento);
		}
	}
		//return ($this->outroImposto == null) ? 0 : $this->outroImposto->calcula($orcamento);

	public abstract function calcula(Orcamento $orcamento);
}
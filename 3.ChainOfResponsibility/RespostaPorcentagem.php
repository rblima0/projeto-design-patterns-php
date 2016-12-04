<?php 
class RespostaPorcentagem implements Resposta {

	private $proximaResposta;

	function __construct(Resposta $proximaResposta) {
		$this->proximaResposta = $proximaResposta;
	}

	public function Responde(Requisicao $req, Conta $conta){
		if($req->getFormato() == Formato::$PORCENTO){
			return $conta->getNomeTitular()."%".$conta->getSaldo();
		} else {
			return $this->proximaResposta->responde($req, $conta);
		}
	}

	public function setProxima(Resposta $resposta) {
    	$this->proximaResposta= $resposta;
	}
	
}
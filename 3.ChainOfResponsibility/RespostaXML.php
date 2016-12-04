<?php
class RespostaXML implements Resposta {

	private $proximaResposta;

	function __construct(Resposta $proximaResposta){
		$this->proximaResposta = $proximaResposta;
	}

	public function Responde(Requisicao $req, Conta $conta){
		if($req->getFormato() == Formato::$XML){
			return  "<conta><titular>" . $conta->getNomeTitular() . "</titular><saldo>" . $conta->getSaldo() . "</saldo></conta>";
		} else {
			return $this->proximaResposta->responde($req, $conta);
		}
	}

	public function setProxima(Resposta $resposta) {
    	$this->proximaResposta= $resposta;
	}

}
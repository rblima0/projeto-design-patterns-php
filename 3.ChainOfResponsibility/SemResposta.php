<?php

class SemResposta implements Resposta {

	private $proximaResposta;
	
	public function responde(Requisicao $req, Conta $conta) {
		
	}

	public function setProxima(Resposta $resposta) {
    	$this->proximaResposta= $resposta;
	}

}
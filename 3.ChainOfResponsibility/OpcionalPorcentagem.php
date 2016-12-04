<?php
class OpcionalPorcentagem implements Resposta {
    private $proximaResposta;

    function __construct(Resposta $proximaResposta) {
        $this->proximaResposta = $proximaResposta;
    }

    public function OpcionalPorcentagem() {
        $this->proximaResposta = null; // nao recebi a proxima!
    }

     public function responde(Requisicao $req, Conta $conta) {
        if($req->getFormato() == Formato::$PORCENTO) {
            return $conta->getNomeTitular() . '%' . $conta->getSaldo();
        } else if(!is_null($proximaResposta)){
            return $proximaResposta->responde($req, $conta);
        } else {
            // não existe próxima na corrente, e ninguém atendeu a requisição!
            throw new Exception("Formato de resposta não encontrado");
        }
    }
}
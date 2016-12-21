<?php
class EnviadorDeEmail implements AcaoPorGerarNota {

	public function executa(NotaFiscal $notaFiscal){
        echo "Nota fiscal sendo enviada por email, sucesso";
    }
}
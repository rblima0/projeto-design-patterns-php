<?php
class Multiplicador implements AcaoPorGerarNota {
	
	private $fator;

	public function __construct($fator){
		$this->fator = $fator;
	}

	public function executa(NotaFiscal $notaFiscal){
		echo $notaFiscal->getValorBruto() * $this->fator;
		?><br/><?php
	}
}
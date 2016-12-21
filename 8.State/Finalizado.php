<?php
class Finalizado implements EstadoDeUmOrcamento {

	public function aplicaDescontoExtra(Orcamento $orcamento){
	}

	public function Aprova(Orcamento $orcamento){
		throw new Exception("ERRO: ORÇAMENTO JÁ FOI FINALIZADO.");
	}

	public function reprova(Orcamento $orcamento){
		throw new Exception("ERRO: ORÇAMENTO JÁ FOI FINALIZADO.");
	}

	public function finaliza(Orcamento $orcamento){
		throw new Exception("ERRO: ORÇAMENTO JÁ FOI FINALIZADO.");
	}
}
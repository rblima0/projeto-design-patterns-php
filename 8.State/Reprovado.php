<?php
class Reprovado implements EstadoDeUmOrcamento {

	public function aplicaDescontoExtra(Orcamento $orcamento){
	}

	public function Aprova(Orcamento $orcamento){
		throw new Exception("ERRO: ORÇAMENTO JÁ FOI REPROVADO.");
	}

	public function reprova(Orcamento $orcamento){
		throw new Exception("ERRO: ORÇAMENTO JÁ FOI REPROVADO.");
	}

	public function finaliza(Orcamento $orcamento){
		return $orcamento->setEstado(new Finalizado());
	}

}
<?php
class Aprovado implements EstadoDeUmOrcamento {

	private $descontoAplicado = false;

	public function aplicaDescontoExtra(Orcamento $orcamento){
		if($this->descontoAplicado == true){
			throw new Exception("Desconto já foi dado.");
			
		}

		$valor = $orcamento->getValor();
		$resultado = $orcamento->setValor($valor - ($valor * 0.02));
		$this->descontoAplicado = true;
		return $resultado;
	}

	public function Aprova(Orcamento $orcamento){
		throw new Exception("ERRO: ORÇAMENTO JÁ FOI APROVADO.");
		
	}

	public function reprova(Orcamento $orcamento){
		throw new Exception("ERRO: ORÇAMENTO JÁ FOI APROVADO.");
	}

	public function finaliza(Orcamento $orcamento){
		return $orcamento->setEstado(new Finalizado());
	}

}
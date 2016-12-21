<?php
class EmAprovacao implements EstadoDeUmOrcamento {

		public function aplicaDescontoExtra(Orcamento $orcamento){
		if($this->descontoAplicado == true){
			throw new Exception("Desconto já foi dado.");
			
		}

		$valor = $orcamento->getValor();
		$resultado = $orcamento->setValor($valor - ($valor * 0.05));
		$this->descontoAplicado = true;
		return $resultado;
	}

	public function Aprova(Orcamento $orcamento){
		return $orcamento->setEstado(new Aprovado());
	}

	public function reprova(Orcamento $orcamento){
		return $orcamento->setEstado(new Reprovado());
	}

	public function finaliza(Orcamento $orcamento){
		throw new Exception("ERRO: PRIMEIRO O ORÇAMENTO DEVE SER APROVADO");		
	}

}
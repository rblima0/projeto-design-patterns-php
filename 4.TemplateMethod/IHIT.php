<?php
class IHIT extends TemplateImpostoCondicional {
	
	protected function deveUsarMaximaTaxacao(Orcamento $orcamento){
		$emOrcamento = array();

		foreach($orcamento->getItens() as $item){
			if(in_array($item->getNome(), $emOrcamento)){
				return true;
			}
			$emOrcamento[] = $item->getNome();
		}
		return false;
	}

	protected function maximaTaxacao(Orcamento $orcamento){
		return $orcamento->getValor() * 0.13 + 100;
	}

	protected function minimaTaxacao(Orcamento $orcamento) {
		return $orcamento->getValor() * (0.01 * count($orcamento->getItens()));
	}
}
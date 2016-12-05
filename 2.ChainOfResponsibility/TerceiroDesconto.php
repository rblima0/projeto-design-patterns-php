<?php 
	class TerceiroDesconto implements Desconto {
		private $proximo;

		public function desconta(Orcamento $orcamento){
			if($this->vendaCasada($orcamento)){
				return $orcamento->getValor() * 0.05;				
			} else {
				return $this->proximo->desconta($orcamento);
			}
		}

		private function vendaCasada(Orcamento $orcamento) {
            return $this->existeItem("CANETA", $orcamento) && $this->existeItem("LAPIS", $orcamento);
        }

		public function existeItem($nomeDoItem, Orcamento $orcamento) {
			foreach ($orcamento->getItens() as $item) {
		    	if($item->getNome() == $nomeDoItem){
		    		return true;
		    	} 
			} 
			return false;
		}

		public function setProximo(Desconto $proximo){
			$this->proximo = $proximo;
		}		
	}
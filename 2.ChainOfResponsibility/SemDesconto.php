<?php 
	class SemDesconto implements Desconto {

		public function setProximo(Desconto $desconto) {
      	}

		public function desconta(Orcamento $orcamento) {
			return 0;
      	}         
	}
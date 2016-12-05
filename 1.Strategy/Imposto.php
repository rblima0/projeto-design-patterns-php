<?php 
interface Imposto {
	public function calcula(Orcamento $orcamento);
}

class ICMS implements Imposto {
	public function calcula(Orcamento $orcamento){
		return $orcamento->getValor() * 0.05;
	}
}
class ISS implements Imposto {
	public function calcula(Orcamento $orcamento){
		return $orcamento->getValor() * 0.1;
	}
}

class ICCC implements Imposto {
	public function calcula(Orcamento $orcamento){
		if($orcamento->getValor() <= 1000){
			return $orcamento->getValor() * 0.05;
		}else if($orcamento->getValor() <= 3000){
			return $orcamento->getValor() * 0.07;
		}else{
			return $orcamento->getValor() * 0.08 + 30;
		}
	}
}
?>
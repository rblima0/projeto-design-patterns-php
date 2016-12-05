<?php 
class CalculadoraDeDescontos {
	public function calcula(Orcamento $orcamento){
		$d1 = new PrimeiroDesconto();
		$d2 = new SegundoDesconto();
		$d3 = new TerceiroDesconto();
		$d4 = new SemDesconto();

		$d1->setProximo($d2);
		$d2->setProximo($d3);
		$d3->setProximo($d4);

		return $d1->desconta($orcamento);
	}
}
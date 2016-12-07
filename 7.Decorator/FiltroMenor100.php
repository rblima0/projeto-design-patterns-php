<?php
class FiltroMenor100 extends Filtro {

	public function filtra ($contas){
		$filtro = array();

		foreach ($contas as $conta) {
			if($conta->getSaldo() < 100 ){
				$filtro[] = $conta;
			}
		}

		foreach ($this->proximo($contas) as $conta) {
			$filtro[] = $conta;
		}
			return $filtro;
	}
}
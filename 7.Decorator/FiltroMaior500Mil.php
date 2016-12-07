<?php
class FiltroMaior500Mil extends Filtro {

	public function filtra ($contas){
		$filtro = array();

		foreach ($contas as $conta) {
			if($conta->getSaldo() > 500000 ){
				$filtro[] = $conta;
			}
		}

			foreach ($this->proximo($contas) as $conta) {
				$filtro[] = $conta;		
			}
				return $filtro;
	}
}
<?php
class FiltroDataCorrente extends Filtro {

	public function filtra ($contas){
		$filtro = array();

		foreach ($contas as $conta) {
			if($mesAtual = date('m', strtotime($conta->getDataAbertura())) == date('m') && $anoAtual = date('Y', strtotime($conta->getDataAbertura())) == date('Y')){
				$filtro = $conta;
			}
		}

		foreach($this->proximo($contas) as $conta){
			$filtro[] = $conta;
		}
		return $filtro;
	}
}
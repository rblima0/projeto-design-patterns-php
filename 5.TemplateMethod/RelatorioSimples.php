<?php
class RelatorioSimples extends Relatorio {

	protected function cabecalho(){
		echo "Banco Santander - Tel: (011) 3313-3313";
	}

	protected function rodape(){
		echo "Banco Santander - Tel: (011) 3313-3313";
	}

	protected function corpo($contas){
		foreach ($contas as $conta) {
			echo $conta->getTitular()." - ".$conta->getSaldo();
		}
	}

}
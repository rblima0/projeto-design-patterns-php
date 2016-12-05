<?php
class RelatorioComplexo extends Relatorio {

	protected function cabecalho(){
		echo "Banco Santander";
		echo "Rua Joverzik 33";
		echo "(011) 3313-3313";
	}

	protected function rodape(){
		echo "email@email.com.br";
		echo date ("d/m/Y");
	}

	protected function corpo($contas){
		foreach ($contas as $conta) {
			echo $conta->getTitular()." - ".$conta->getAgencia()." - ".$conta->getNumeroConta()." - ".$conta->getSaldo();
		}
	}

}
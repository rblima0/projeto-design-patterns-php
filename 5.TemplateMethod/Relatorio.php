<?php
abstract class Relatorio {

	protected abstract function cabecalho();
	protected abstract function rodape();
	protected abstract function corpo($contas);

	public function mostra($contas){
		$this->cabecalho();
		$this->rodape();
		$this->corpo($contas);
	}

}
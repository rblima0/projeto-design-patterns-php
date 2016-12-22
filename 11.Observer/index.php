<?php 

function autoloadDeClasses($nomeDaClasse) {
	require $nomeDaClasse.".php";
}
spl_autoload_register("autoloadDeClasses");

$acoes = array(
	new Multiplicador(2),
	new EnviadorDeEmail(),
	new NotaFiscalDao()
);

$construtor = new NotaFiscalBuilder($acoes);

$notaFiscal = $construtor->paraEmpresa("Saraiva")
	->comCnpj("555.666.555/0001-66")
	->com(new ItemDaNota("item 1", 100.0))
	->com(new ItemDaNota("item 2", 200.0))
	->com(new ItemDaNota("item 3", 300.0))
	->comObservacoes("entregar notaFiscal pessoalmente")
	->constroi();


<?php 
require "NotaFiscal.php";
require "ItemDaNota.php";
require "NotaFiscalBuilder.php";
require "AcaoPorGerarNota.php";
//require "Multiplicador.php";
require "EnviadorDeEmail.php";
require "NotaFiscalDao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Observer</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h1>Observer</h1>

<?php 
	$acoes = array(
		//new Multiplicador(2),
		new EnviadorDeEmail(),
		new NotaFiscalDao()
	);

	$construtor = new NotaFiscalBuilder($acoes);

	$notaFiscal = $construtor->paraEmpresa("Caelum")
		->comCnpj("123.456.789/0001-10")
		->com(new ItemDaNota("item 1", 100.0))
		->com(new ItemDaNota("item 2", 200.0))
		->com(new ItemDaNota("item 3", 300.0))
		->comObservacoes("entregar notaFiscal pessoalmente")
		->constroi();
?>
</div>
	
</body>
</html>
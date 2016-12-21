<?php
require "Orcamento.php";
require "EstadoDeUmOrcamento.php";
require "Aprovado.php";
require "EmAprovacao.php";
require "Finalizado.php";
require "Reprovado.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>State</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php 
	$orcamento = new Orcamento(500);
?>

	<h2>State No PHP - Orcamento</h2>
	<p>Orçamento: R$ <?=$orcamento->getValor()?></p>

	<p><?=$orcamento->aplicaDescontoExtra();?></p>
	<p><?=$orcamento->aprova();?></p>
	<p>Desconto Orçamento: R$ <?=$orcamento->getValor()?></p>
	<p><?=$orcamento->aplicaDescontoExtra();?></p>
	<p><?=$orcamento->finaliza();?></p>
	<p>Desconto Orçamento: R$ <?=$orcamento->getValor()?></p>

</div>
</body>
</html>
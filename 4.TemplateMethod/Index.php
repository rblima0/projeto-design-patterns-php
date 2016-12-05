<?php
require "Orcamento.php";
require "Imposto.php";
require "Item.php";
require "TemplateImpostoCondicional.php";
require "IHIT.php";
?>

<html>
<head>
	<title>Template Method</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<?php 
		$orcamento = new Orcamento(500.0);
		$orcamento->adicionaItem(new Item("CANETA", 250));
		$orcamento->adicionaItem(new Item("LAPIS", 250));

		$novoImposto = new IHIT();
	?>
<div class="container">
	<h2>Template Method</h2>

	<p>Calculo: <?=$novoImposto->calcula($orcamento);?></p>
</div>
</body>
</html>
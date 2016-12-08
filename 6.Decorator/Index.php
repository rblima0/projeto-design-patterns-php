<?php
require "Item.php";
require "Orcamento.php";
require "Imposto.php";
require "TemplateImpostoCondicional.php";
require "IKCV.php";
require "ICMS.php";
require "ICPP.php";
require "IHIT.php";
require "ISS.php";
?>

<html>
<head>
	<title>Decorator - Imposto</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<?php 
		$orcamento = new Orcamento(600.0);
		$orcamento->adicionaItem(new Item("CANETA", 250));
		$orcamento->adicionaItem(new Item("LAPIS", 250));

		$impostos = new ICMS(new ICPP());
	?>
<div class="container">
	<h2>Decorator - Imposto</h2>

	<p>Imposto: <?=$impostos->calcula($orcamento);?></p>
</div>
</body>
</html>
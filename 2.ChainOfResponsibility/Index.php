<?php 
require "Orcamento.php";
require "Item.php";
require "Desconto.php";
require "CalculadoraDeDescontos.php";
require "PrimeiroDesconto.php";
require "SegundoDesconto.php";
require "TerceiroDesconto.php";
require "SemDesconto.php";
?>

<html>
<head>
	<title>Chain Of Responsibility</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<h2>Chain Of Responsibility</h2>
	<h3>Descontos</h3>
	<?php
		$orcamento = new Orcamento(500.0);
		$orcamento->adicionaItem(new Item("CANETA", 250));
		$orcamento->adicionaItem(new Item("LAPIS", 320));
		//$orcamento->adicionaItem(new Item("BORRACHA", 15.0));
		//$orcamento->adicionaItem(new Item("LAPISEIRA", 560.0));
		//$orcamento->adicionaItem(new Item("APONTADOR", 25.0));
		//$orcamento->adicionaItem(new Item("GRAFITE", 19.0));

		$calculadoraDeDescontos = new CalculadoraDeDescontos();
		$desconto = $calculadoraDeDescontos->calcula($orcamento);

		echo $desconto;
	?>
</div>
</body>
</html>
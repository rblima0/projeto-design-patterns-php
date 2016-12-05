<?php require "Orcamento.php";
require "CalculadoraDeImpostos.php";
require "Imposto.php"; 
require "Conta.php";
require "Investimento.php";
require "RealizadorDeInvestimentos.php";
?>

<html>
<head>
	<title>Padroes de Projeto</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<?php 
		$impostos = new ISS(new ICMS());
		$reforma = new Orcamento(500);
		
		echo $impostos->calcula($orcamento);
	?>
<div class="container">
	<h2>Calculadora De Impostos</h2>
</div>
</body>
</html>
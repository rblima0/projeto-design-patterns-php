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
		$reforma = new Orcamento(500);
		$calculadora = new CalculadoraDeImpostos();

		$creditoConta = new Conta(300);
		$resultadoInvestimento = new RealizadorDeInvestimentos();

		//echo $calculadora->calculaICMS($reforma);
		//echo $calculadora->calculaISS($reforma);
	?>
<div class="container">
	<h2>Calculadora De Impostos</h2>

	<p>Imposto de ICMS: <?=$calculadora->calcula($reforma, new ICMS());?></p>
	<p>Imposto de ISS: <?=$calculadora->calcula($reforma, new ISS());?></p>
	<p>Imposto de ICCC: <?=$calculadora->calcula($reforma, new ICCC());?></p>

	<h3>Investimento e Retorno</h3>
	<p>Retorno: <?=$resultadoInvestimento->realiza($creditoConta, new Conservador());?></p>
	<p>Retorno: <?=$resultadoInvestimento->realiza($creditoConta, new Moderado());?></p>
	<p>Retorno: <?=$resultadoInvestimento->realiza($creditoConta, new Arrojado());?></p>
</div>
</body>
</html>
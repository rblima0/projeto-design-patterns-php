<?php 
require "Conta.php";
require "Relatorio.php";
require "RelatorioSimples.php";
require "RelatorioComplexo.php";
 ?>

<html>
<head>
	<title>Template Method - Relatorio</title>
</head>
<body>

<?php 
	$contas = array (
		new Conta("Rodrigo Lima", "1", "0102", 2000),
		new Conta("Fabio Luque", "2", "0102", 1500),
		new Conta("Jorge Sabie", "3", "4125", 850),
		new Conta("Lucas Carilio", "4", "0250", 2300),
		new Conta("Carlos Bueno", "5", "0102", 1300)
	);

	$relatorioSimples = new RelatorioSimples();
	$relatorioComplexo = new RelatorioComplexo();

 ?>
	<h2>Template Method</h2>

	<p>Relatorio Simples</p>
		<?=$relatorioSimples->mostra($contas);?>

	<p>Relatorio Complexo</p>
		<?=$relatorioComplexo->mostra($contas);?>

</body>
</html>
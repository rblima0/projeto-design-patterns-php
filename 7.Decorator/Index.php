<?php 
require "Conta.php";
require "Filtro.php";
require "FiltroMaior500Mil.php";
require "FiltroMenor100.php";
require "FiltroDataCorrente.php"; ?>

<html>
<head>
	<title>Decorator - Conta</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php 
	$contas = array(
		new Conta("Carlos Jorge", 50, "2017-11-11"),
		new Conta("João Jorge", 600000, "2014-06-11"),
		new Conta("Jorge João", 120, "2016-07-12"),
		new Conta("Jair Carlos", 250, "2016-05-06")
		);

	$filtroDataCorrente = new FiltroDataCorrente();
	$filtroMaior500Mil = new FiltroMaior500Mil($filtroDataCorrente);
	$filtroMenor100 = new FiltroMenor100($filtroMaior500Mil);
?>

	<h2>PROJETO DO DECORATOR</h2>

	<p><?=var_dump($filtroMenor100->filtra($contas));?></p>

</body>
</html>
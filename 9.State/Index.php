<?php
require "Conta.php";
require "Estado.php";
require "Positivo.php";
require "Negativo.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Estado Conta</title>
</head>
<body>

<?php 
	$conta = new Conta();
	$conta->deposita(500);
	$conta->saca(600);
	echo $conta->getSaldo();
	$conta->saca(600);
	echo $conta->getSaldo();
?>
	
</body>
</html>
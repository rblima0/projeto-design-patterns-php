<?php

require "Conta.php";
require "Formato.php";
require "Requisicao.php";
require "Resposta.php";
require "RespostaCSV.php";
require "RespostaXML.php";
require "RespostaPorcentagem.php";
require "SemResposta.php";

$conta = new Conta("Rodrigo", 1000);
$requisicao = new Requisicao(Formato::$XML);

$semResposta = new SemResposta();
$RespostaPorcentagem = new RespostaPorcentagem($semResposta);
$RespostaXML = new RespostaXML($RespostaPorcentagem);
$RespostaCSV = new RespostaCSV($RespostaXML);

echo $RespostaCSV->responde($requisicao, $conta);
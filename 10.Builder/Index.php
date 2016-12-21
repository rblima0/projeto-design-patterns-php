<?php 
require "ItemDaNota.php";
require "NotaFiscal.php";
require "NotaFiscalBuilder.php";
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

<div class="container">
  <h1>Builder - Padrão de Projeto</h1>

  <?php 
  $notaBuilder = new NotaFiscalBuilder();
  //$itemBuilder = new ItemDaNotaBuilder();

  $notaFiscal = $notaBuilder->paraEmpresa('Livraria Saraiva')->comCnpj('00.232.222/0001-60')->constroi();

  echo $notaFiscal->getRazaoSocial();
  
  ?>

</div>

</body>
</html>
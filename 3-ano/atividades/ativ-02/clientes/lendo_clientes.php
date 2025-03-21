<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Exibindo Arquivo XML</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
  </style>
</head>

<body>
  <h1>Cadastro de clientes</h1>

  <main>
    <?php
    $link = "clientes.xml";
    $xml = simplexml_load_file($link)->clientes;
    foreach ($xml->cliente as $cliente) {
    ?>
      <div>
        <p><strong>Nome:</strong> <?php echo mb_convert_encoding($cliente->nome, "UTF-8") ?></p>
        <p><strong>Sobrenome:</strong> <?php echo mb_convert_encoding($cliente->sobrenome, "UTF-8") ?></p>
        <p><strong>Endereço:</strong> <?php echo mb_convert_encoding($cliente->endereco, "UTF-8") ?></p>
        <p><strong>Cidade:</strong> <?php echo mb_convert_encoding($cliente->cidade, "UTF-8") ?></p>
        <p><strong>Estado:</strong> <?php echo mb_convert_encoding($cliente->estado, "UTF-8") ?></p>
        <p><strong>Telefone:</strong> <?php echo mb_convert_encoding($cliente->telefone, "UTF-8") ?></p>
        <p><img width="250px" src="imagens/<?php echo mb_convert_encoding($cliente->imagem, "UTF-8") ?>" /></p>
      </div>
      <hr>
    <?php
    }
    ?>
  </main>
</body>

</html>
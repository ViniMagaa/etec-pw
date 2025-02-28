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
    $link = "ativ01.xml";
    $xml = simplexml_load_file($link)->clientes;
    foreach ($xml->cliente as $cliente) {
    ?>
    <div>
      <p><strong>Nome:</strong> <?php echo utf8_decode($cliente->nome) ?></p>
      <p><strong>Sobrenome:</strong> <?php echo utf8_decode($cliente->sobrenome) ?></p>
      <p><strong>Endereço:</strong> <?php echo utf8_decode($cliente->endereco) ?></p>
      <p><strong>Cidade:</strong> <?php echo utf8_decode($cliente->cidade) ?></p>
      <p><strong>Estado:</strong> <?php echo utf8_decode($cliente->estado) ?></p>
      <p><strong>Telefone:</strong> <?php echo utf8_decode($cliente->telefone) ?></p>
    </div>
    <hr>
    <?php
    }
    ?>
  </main>
</body>

</html>
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
  <h1>Playlist de Filmes</h1>

  <main>
    <?php
    $link = "filmes.xml";
    $xml = simplexml_load_file($link)->playlist;
    foreach ($xml->filme as $filme) {
    ?>
      <div>
        <p><strong>Título:</strong> <?php echo utf8_decode($filme->titulo) ?></p>
        <p><strong>Tipo:</strong> <?php echo utf8_decode($filme->tipo) ?></p>
        <p><strong>Duração:</strong> <?php echo utf8_decode($filme->duracao) ?></p>
        <p><strong>Ano:</strong> <?php echo utf8_decode($filme->ano) ?></p>
        <p><strong>Diretor:</strong> <?php echo utf8_decode($filme->diretor) ?></p>
        <p><img width="250px" src="imagens/<?php echo utf8_decode($filme->imagem) ?>" /></p>
      </div>
      <hr>
    <?php
    }
    ?>
  </main>
</body>

</html>
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
        <p><strong>Título:</strong> <?php echo mb_convert_encoding($filme->titulo, "UTF-8") ?></p>
        <p><strong>Tipo:</strong> <?php echo mb_convert_encoding($filme->tipo, "UTF-8") ?></p>
        <p><strong>Duração:</strong> <?php echo mb_convert_encoding($filme->duracao, "UTF-8") ?></p>
        <p><strong>Ano:</strong> <?php echo mb_convert_encoding($filme->ano, "UTF-8") ?></p>
        <p><strong>Diretor:</strong> <?php echo mb_convert_encoding($filme->diretor, "UTF-8") ?></p>
        <p><img width="250px" src="imagens/<?php echo mb_convert_encoding($filme->imagem, "UTF-8") ?>" /></p>
      </div>
      <hr>
    <?php
    }
    ?>
  </main>
</body>

</html>
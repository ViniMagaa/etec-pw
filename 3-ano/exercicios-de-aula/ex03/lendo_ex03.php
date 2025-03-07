<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagens</title>
</head>
<body>
    <h1>Arquivo XML</h1>
    <?php
        $link = "ex03.xml";
        $xml = simplexml_load_file($link) -> materia;
        foreach($xml -> aula as $aula) {
            echo "Título: ".utf8_decode($aula -> titulo)."<br>";
            echo "<img width=250 src=".utf8_decode($aula -> imagem)." /><br>";
        }
    ?>
</body>
</html>
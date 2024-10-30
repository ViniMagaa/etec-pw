<?php
$numero = $_POST["number"];
$resultado = $numero % 2 == 0
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="index.css" />
</head>

<body>
  <main>
    <header>
      <span>O número <strong><?php echo $numero ?></strong></span>
      <h1 class="<?php echo $resultado ? "green" : "red" ?>">
        <?php echo ($resultado ? "É" : "Não é") . " divisível por 2!" ?></h1>
    </header>

    <button onclick="window.location.assign('./')">Voltar</button>
  </main>
</body>

</html>
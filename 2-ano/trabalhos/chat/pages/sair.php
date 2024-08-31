<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat&Code | Desconectar</title>
</head>

<body>
  <?php
  session_start();
  unset($_SESSION["login"]);
  unset($_SESSION["senha"]);
  session_destroy();
  header("Location: ../")
  ?>
</body>

</html>
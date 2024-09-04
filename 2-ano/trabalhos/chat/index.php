<?php
session_start();
if ((isset($_SESSION["login"]) === true) and (isset($_SESSION["senha"]) === true)) {
  header("Location:./pages/conversas.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chat&Code | Entre em sua conta</title>
  <link rel="shortcut icon" href="./src/images/favicon.ico" type="image/x-icon" />
  <script src="https://kit.fontawesome.com/5a46ee37aa.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./src/css/global.css" />
  <link rel="stylesheet" href="./src/css/index.css" />
</head>

<body>
  <main>
    <section class="left-content">
      <img src="./src/images/logo.png" alt="Chat&Code" />
      <header>
        <h1>Conecte-se</h1>
        <span>Não possui uma conta?
          <a href="./pages/cadastrausuario.php">Cadastre-se aqui</a></span>
      </header>
      <form method="post" enctype="multipart/form-data" action="./pages/login.php">
        <input id="login" name="login" type="text" placeholder="Usuário" />
        <input id="senha" name="senha" type="password" placeholder="Senha" />
        <button type="submit">Entrar</button>
      </form>
    </section>
    <section class="image-container">
      <img src="./src/images/woman_at_phone.jpg" />
    </section>
  </main>
</body>

</html>
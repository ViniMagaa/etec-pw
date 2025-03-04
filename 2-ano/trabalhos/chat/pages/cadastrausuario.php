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
  <title>Chat&Code | Cadastre-se</title>
  <link rel="shortcut icon" href="./src/images/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="../src/css/global.css" />
  <link rel="stylesheet" href="../src/css/cadastrausuario.css" />
</head>

<body>
  <main>
    <section class="image-container">
      <img src="../src/images/man_at_phone.jpg" />
    </section>
    <section class="right-content">
      <img src="../src/images/logo.png" alt="Chat&Code" />
      <header>
        <h1>Crie uma conta</h1>
        <span>Já possui uma conta? <a href="../">Entre aqui</a></span>
      </header>
      <form enctype="multipart/form-data" method="post" action="incluiusuario.php">
        <input id="login" name="login" type="text" placeholder="Usuário" />
        <input id="senha" name="senha" type="password" placeholder="Senha" />
        <input id="confirma_senha" name="confirma_senha" type="password" placeholder="Confirmar senha" />
        <button type="submit">Criar conta</button>
      </form>
    </section>
  </main>
</body>

<script>
document.getElementById("form").addEventListener("submit", (e) => {
  const senha = document.getElementById("senha");
  const confirmaSenha = document.getElementById("confirma_senha");

  if (senha.length > 8) {
    e.preventDefault();
    alert("A senha deve ter no mínimo 8 caracteres");
  }

  if (senha.value !== confirmaSenha.value) {
    e.preventDefault();
    alert("As senhas não coincidem");
  }
});
</script>

</html>
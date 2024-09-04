<?php
include 'conexao.php';
session_start();
if ((!isset($_SESSION['login']) == true) and
  (!isset($_SESSION['senha']) == true)
) {
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:index.php');
}

if ($_SESSION["login"] != "vini") {
  header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manutenção de Usuários</title>
  <link rel="stylesheet" href="../src/css/global.css">
  <link rel="stylesheet" href="../src/css/usuarios.css">
  <script src="https://kit.fontawesome.com/5a46ee37aa.js" crossorigin="anonymous"></script>
</head>

<body>
  <button class="cinza" id="voltar" onclick="window.location.replace('conversas.php')">
    <i class="fa-solid fa-arrow-left"></i> Voltar
  </button>

  <main>
    <h1>Gerenciamento de usuários</h1>
    <p>Visualize e configure os usuários conectados na aplicação.</p>
  </main>

  <table>
    <thead>
      <th>Login</th>
      <th>Senha</th>
      <th>Alterar</th>
      <th>Excluir</th>
    </thead>
    <?php
    $sql = 'select * from usuarios';
    $result = mysqli_query($conexao, $sql);
    while ($dados = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    ?>
    <tr>
      <td><?php echo $dados['login'] ?></td>
      <td><?php echo $dados['login'] ?></td>
      <td>
        <button class="azul">
          <i class="fa-solid fa-pen-to-square"></i> Editar
        </button>
      </td>
      <td>
        <button class="vermelho">
          <i class="fa-solid fa-trash"></i> Apagar
        </button>
      </td>
    </tr>
    <?php
    }
    ?>
  </table>
</body>

</html>
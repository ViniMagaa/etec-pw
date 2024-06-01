<!DOCTYPE html>
<html lang="pt-br">

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/5a46ee37aa.js" crossorigin="anonymous"></script>
  <title>Pesquisa concluída</title>
</head>

<body>
  <div class="card">
    <h1>Resposta enviada</h1>
    <?php
    $servidor = '127.0.0.1';
    $banco = 'pessoas';
    $usuario = 'root';
    $senha = '';
    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
    if (!$conexao) {
      die("Erro ao conectar com o Banco de Dados");
    }
    $nome = $_POST['name'];
    $cpf = $_POST['cpf'];
    $sql = "insert into nomes(nome, cpf) values ('$nome','$cpf')";
    $resultado = mysqli_query($conexao, $sql);
    if (!$resultado) {
      die("Erro ao adicionar dados!" . mysqli_error($conexao));
    }
    ?>
    <button type="button" onclick="voltar()">Voltar</button>
  </div>
</body>

<script>
function voltar() {
  window.location = "./index.html"
}
</script>

</html>
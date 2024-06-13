<?php
$numero = $_GET["numero"];
$servidor = '127.0.0.1';
$banco = 'votacao';
$usuario = 'root';
$senha = '';
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
if (!$conexao) {
  die("Erro ao conectar com o Banco de Dados");
}
$sql = "select * from candidatos where numero = $numero order by numero";
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
$nome = $dados['txtNome'];
$foto = $dados['foto'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../styles/global.css">
<link rel="stylesheet" href="../styles/incluircandidato.css">
<script src="https://kit.fontawesome.com/5a46ee37aa.js" crossorigin="anonymous"></script>
<title>Confirmação do voto</title>
</head>

<body>
  <header>
    <div>
      <h1>Urna Eletrônica</h1>
      <p>Sistema de votação online</p>
    </div>
    <img src="../img/polivalente-logo.png" alt="Polivalente" class="logo" />
  </header>
  <main>
    <aside>
      <nav>
        <img src="../img/logo.png" alt="Logo" class="logo" />
        <menu>
          <li>
            <a href="../../index.html">
              <i class="fa-solid fa-clipboard-list"></i>
              Cadastrar
            </a>
          </li>
          <li>
            <a href="./candidatos.php">
              <i class="fa-solid fa-users"></i>
              Candidatos
            </a>
          </li>
          <li>
            <a href="./votar.html" class="active">
              <i class="fa-solid fa-pencil"></i>
              Votar
            </a>
          </li>
        </menu>
      </nav>
      <footer>
        <p><strong>Vinícius e Pedro</strong></p>
        <small>&copy; ETEC Polivalente 2024</small>
      </footer>
    </aside>
    <div class="card-container">
      <div class="card">
        <div class="header">
          <h2>Confirmar voto</h2>
        </div>
        <form action="incluivoto.php" method="post" class="body">
          <div class="form-field">
            <div class="form-field">
              <input type="text" name="foto" value=<?php echo $foto; ?>>
            </div>
            <label for="txtNumero">Número do candidato</label>
            <input name="txtNumero" id="txtNumero" type="number" readonly value=<?php echo $numero; ?> />
          </div>
          <div class="form-field">
            <label for="txtNome">Nome do candidato</label>
            <input name="txtNome" id="txtNome" type="text" readonly value=<?php echo "'$nome'"; ?> />
          </div>
          <button type="submit">Confirmar</button>
        </form>
      </div>
    </div>
  </main>
</body>

</html>
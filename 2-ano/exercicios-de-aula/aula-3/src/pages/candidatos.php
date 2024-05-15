<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/global.css">
  <link rel="stylesheet" href="../styles/candidatos.css">
  <script src="https://kit.fontawesome.com/5a46ee37aa.js" crossorigin="anonymous"></script>
  <title>Painel de Candidatos</title>
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
            <a href="./candidatos.php" class="active">
              <i class="fa-solid fa-users"></i>
              Candidatos
            </a>
          </li>
        </menu>
      </nav>
      <footer>
        <p><strong>Vinícius e Pedro</strong></p>
        <small>&copy; ETEC Polivalente 2024</small>
      </footer>
    </aside>
    <section>
      <h2>Candidatos</h2>
      <div class="cards-container">
        <?php
        $servidor = '127.0.0.1';
        $banco = 'votacao';
        $usuario = 'root';
        $senha = '';
        $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
        if (!$conexao) {
          die("Erro ao conectar com o Banco de Dados");
        }
        $sql = "select * from candidatos order by numero";
        $resultado = mysqli_query($conexao, $sql);
        if (!mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
          echo "<small>Não há candidatos aqui</small>";
        }
        while ($dados = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
          $foto = $dados['foto'];
          $numero = $dados['numero'];
          $nome = $dados['nome'];
        ?>
        <div class="card">
          <img src="<?php echo $foto; ?>" class="aspect-ratio">
          <strong><?php echo $numero; ?></strong>
          <small><?php echo $nome; ?></small>
        </div>
        <?php
        }
        ?>
      </div>
    </section>
  </main>
</body>

</html>
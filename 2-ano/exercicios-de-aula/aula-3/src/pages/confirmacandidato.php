<?php
$candidato = $_POST['txtNumero'];
$nome = $_POST['txtNome'];
$destino = "../data/" . $_FILES['foto']['name'];
$foto = $_FILES['foto']['tmp_name'];
move_uploaded_file($foto, $destino);
?>
<!DOCTYPE html>
<html lang="pt-br">

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/global.css">
  <script src="https://kit.fontawesome.com/5a46ee37aa.js" crossorigin="anonymous"></script>
  <title>Cadastro de candidatos</title>
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
            <a href="../../index.html" class="active">
              <i class="fa-solid fa-clipboard-list"></i>
              Cadastrar
            </a>
          </li>
          <li>
            <a href="../pages/candidatos.php">
              <i class="fa-solid fa-users"></i>
              Candidatos
            </a>
          </li>
          <li>
            <a href="./votar.html">
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
          <h2>Confirmar candidato</h2>
        </div>
        <form name="form1" method="post" action="incluicandidato.php" class="body">
          <img src=<?php echo $destino ?> class="aspect-ratio">
          <div class="form-field">
            <label>Número</label>
            <input name="txtNumero" type="number" readonly value=<?php echo $candidato; ?>>
          </div>
          <div class="form-field">
            <label>Nome</label>
            <input name="txtNome" type="text" readonly value=<?php echo $nome; ?>>
          </div>
          <div class="form-field">
            <label>Foto</label>
            <input type="text" name="fotocandidato" value=<?php echo $destino; ?>>
          </div>
          <div class="buttons-container">
            <button type="button" onclick="cancelar()" class="alt">Cancelar</button>
            <button type="submit">Confirmar</button>
          </div>
        </form>
      </div>
    </div>
  </main>
</body>

<script>
  function cancelar() {
    window.location = "../../index.html"
  }
</script>

</html>
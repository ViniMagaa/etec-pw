<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat&Code | Converse e Codifique</title>
  <script src="../src/js/jquery-3.7.1.min.js"></script>
  <link rel="shortcut icon" href="../src/images/favicon.ico" type="image/x-icon">
  <script src="https://kit.fontawesome.com/5a46ee37aa.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../src/css/global.css" />
  <link rel="stylesheet" href="../src/css/conversa.css" />
  <script>
  function incluiConversa(destinatario, mensagem) {
    $.ajax({
      type: "post",
      url: "incluiconversa.php",
      data: {
        destinatario,
        mensagem
      },
      success: (response) => {
        document.getElementById("mensagem").value = "";
      }
    })
  }

  function buscaConversa(destinatario, numeroMensagens) {
    $.ajax({
      type: "post",
      url: "buscaconversas.php",
      data: {
        destinatario
      },
      success: (response) => {
        document.getElementById("messages-container").innerHTML = response;
        if (document.getElementById("messages-container").children.length > numeroMensagens) {
          scrollBottom()
        }
      }
    })
  }

  function buscaRemetente() {
    $.ajax({
      type: "post",
      url: "buscaremententes.php",
      data: {

      },
      success: (response) => {
        document.getElementById("remetentes").innerHTML = response;
      }
    })
  }

  function sair() {
    window.location.replace("sair.php");
  }

  function limpar(destinatario) {
    if (confirm("Você deseja realmente limpar as mensagens?")) {
      $.ajax({
        type: "post",
        url: "limpaconversas.php",
        data: {
          destinatario,
        },
        success: (response) => {}
      })
    }
  }
  </script>
</head>

<body>
  <?php
  session_start();
  if ((!isset($_SESSION["login"]) === true) and (!isset($_SESSION["senha"]) === true)) {
    unset($_SESSION["login"]);
    unset($_SESSION["senha"]);
    header("Location: ../");
  }
  ?>
  <main>
    <section class="chats">
      <div class="title">
        <img src="../src/images/small-logo.png" alt="Chat&Code" />
        <h1>Converse & codifique</h1>
      </div>

      <div class="user-info">
        <span class="usuario">
          Usuário: <?php echo $_SESSION["login"] ?>
        </span>
        <div>
          <button class="sair" onclick="sair()">
            Sair
          </button>
          <button class="limpar" onclick="limpar()">
            Limpar
          </button>
        </div>
      </div>

      <?php
      require("conexao.php");
      $login = $_SESSION["login"];
      $sql = "select * from usuarios order by login";
      $result = mysqli_query($conexao, $sql);

      while ($dados = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $nomeusuario = $dados["login"];
        if ($nomeusuario != $_SESSION["login"]) {
      ?>
      <label for=<?php echo $nomeusuario ?> class="user-chat">
        <img src="../src/images/user.png" alt="User" class="user-picture" />
        <span class="username"><?php echo $nomeusuario ?></span>
        <input type="radio" name="destinatario" id=<?php echo $nomeusuario ?> value=<?php echo $nomeusuario ?>>
      </label>
      <?php
        }
      }
      ?>
    </section>
    <section class="main-chat" id="main-chat">
      <div id="mensagem-inicial">
        <h1>Bem vindo!</h1>
        <p>Converse e codifique com as pessoas de nossa comunidade.</p>
      </div>
      <header id="destinatario-header">
        <img src="../src/images/user.png" alt="User" class="user-picture" />
        <span class="username" id="destinatario-name"></span>
      </header>
      <div class="messages" id="messages">
        <div class="messages-container" id="messages-container">
        </div>
      </div>
      <button onclick="scrollBottom()" id="scroll">
        <i class="fa-solid fa-arrow-down"></i>
      </button>
      <div class="form" id="form">
        <input type="text" class="mensagem" id="mensagem" name="mensagem" placeholder="Digite sua mensagem">

        <button class="enviar" id="enviar" onclick="handleInclude()">
          <i class="fas fa-paper-plane"></i>
        </button>
      </div>
    </section>
  </main>


  <?php echo mysqli_fetch_array($result, MYSQLI_ASSOC) ?>


  <script>
  const inputMensagem = document.getElementById('mensagem')
  const scrollButton = document.getElementById("scroll");
  const containerMensagens = document.getElementById("messages-container");
  const inputsDestinatarios = document.querySelectorAll("input[name='destinatario']");
  const tituloDestinatario = document.getElementById("destinatario-name")
  const secaoChatPrincipal = document.getElementById("main-chat")
  const headerDestinatario = document.getElementById("destinatario-header")
  const formMensagens = document.getElementById("form")
  const divMensagemInicial = document.getElementById("mensagem-inicial")

  headerDestinatario.style.visibility = "hidden";
  containerMensagens.style.visibility = "hidden";
  formMensagens.style.visibility = "hidden";

  function pegarValorDestinatario() {
    return document.querySelector("input[name='destinatario']:checked")?.value || ""
  }

  function handleInclude() {
    const valueDestinatario = pegarValorDestinatario()

    const {
      value: mensagem
    } = inputMensagem

    if (!mensagem.trim()) return;

    incluiConversa(valueDestinatario, mensagem)
  }

  inputMensagem.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
      handleInclude();
    }
  })

  inputsDestinatarios.forEach(input => {
    input.addEventListener("input", (e) => {
      if (e.target.checked) {
        tituloDestinatario.innerText = pegarValorDestinatario()

        const carregando = document.createElement("div")
        carregando.classList.add("loading")
        carregando.innerText = "Carregando..."

        containerMensagens.innerHTML = ""
        containerMensagens.appendChild(carregando);
      }
    })
  })

  function scrollBottom() {
    containerMensagens.scrollTop = containerMensagens.scrollHeight;
  }

  containerMensagens.addEventListener("scroll", () => {
    const isScrolledToBottom =
      containerMensagens.scrollHeight - Math.round(containerMensagens.scrollTop) ===
      containerMensagens.clientHeight;

    scrollButton.style.display = isScrolledToBottom ? "none" : "flex";
  });

  $(function() {
    setTime();

    function setTime() {
      const value = pegarValorDestinatario()

      if (value) {
        buscaConversa(value, containerMensagens.children.length);
        divMensagemInicial.style.display = "none";
        headerDestinatario.style.visibility = "visible";
        containerMensagens.style.visibility = "visible";
        formMensagens.style.visibility = "visible";
      }
      buscaRemetente();
      setTimeout(setTime, 1000);
    }
  })
  </script>
</body>

</html>
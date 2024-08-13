<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chat&Code</title>
  <script src="https://kit.fontawesome.com/5a46ee37aa.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../src/css/global.css" />
  <link rel="stylesheet" href="../src/css/conversa.css" />
</head>

<body>
  <main>
    <section class="chats">
      <div class="title">
        <img src="../src/images/small-logo.png" alt="Chat&Code" />
        <h1>Converse & codifique</h1>
      </div>

      <div class="user-chat active">
        <img src="../src/images/user.png" alt="User" class="user-picture" />
        <span class="username">User 1</span>
      </div>
      <div class="user-chat">
        <img src="../src/images/user.png" alt="User" class="user-picture" />
        <span class="username">User 2</span>
      </div>
      <div class="user-chat">
        <img src="../src/images/user.png" alt="User" class="user-picture" />
        <span class="username">User 3</span>
      </div>
    </section>
    <section class="main-chat" id="main-chat">
      <header>
        <img src="../src/images/user.png" alt="User" class="user-picture" />
        <span class="username">User 1</span>
      </header>
      <div class="messages" id="messages">
        <div class="messages-container" id="messages-container">
          <div class="message">
            <span>Hello, how are you today?</span>
          </div>
          <div class="message user">
            <span>I'm good, thank you!</span>
          </div>
          <div class="message user">
            <span>What about you?</span>
          </div>
        </div>
      </div>
      <button onclick="scrollBottom()" id="scroll">
        <i class="fa-solid fa-arrow-down"></i>
      </button>
      <form id="new-message-form" action="">
        <input type="text" id="new-message" name="new-message" placeholder="Digite sua mensagem..." />
        <button type="submit">
          <i class="fas fa-paper-plane"></i>
        </button>
      </form>
    </section>
  </main>
</body>

<script>
const form = document.getElementById("new-message-form");
const messages = document.getElementById("messages");
const messagesContainer = document.getElementById("messages-container");
const message = document.getElementById("new-message");
const scrollButton = document.getElementById("scroll");

function scrollBottom() {
  messagesContainer.scrollTop = messagesContainer.scrollHeight;
}

function createMessage(text) {
  const message = document.createElement("div");
  message.innerText = text;
  message.className = "message user";

  return message;
}

messagesContainer.addEventListener("scroll", () => {
  const isScrolledToBottom =
    messagesContainer.scrollHeight - messagesContainer.scrollTop ===
    messagesContainer.clientHeight;

  scrollButton.style.display = isScrolledToBottom ? "none" : "flex";
});

form.addEventListener("submit", (event) => {
  event.preventDefault();

  if (message.value.trim() === "") return;

  const newMessage = createMessage(message.value);
  messagesContainer.appendChild(newMessage);

  scrollBottom();

  message.value = "";
  message.focus();
});
</script>

</html>
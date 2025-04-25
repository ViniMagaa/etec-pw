<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>25/04/2025</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      padding: 2rem 0.5rem;
      color: white;
      font-family: "Poppins", sans-serif;
      min-height: 100vh;
      background: #23294a;
      background: linear-gradient(158deg, rgba(35, 41, 74, 1) 0%, rgba(49, 70, 117, 1) 50%, rgba(17, 99, 88, 1) 100%);
    }

    main {
      margin: auto;
      width: 90%;
      max-width: 1200px;
      background-color: #0f0f0fab;
      padding: 1rem 1.5rem;
      border-radius: 1rem;
      display: flex;
      flex-direction: column;
      gap: 2rem;
    }

    div {
      display: flex;
      flex-direction: column;
      gap: 0.25rem;
    }

    code {
      color: white;
      background-color: rgba(17, 99, 88, 1);
      padding: 2px 5px;
      border-radius: 5px;
    }

    ol,
    ul {
      margin-left: 2.5rem;
    }

    .container {
      display: grid;
      grid-template-columns: auto auto;
    }
  </style>
</head>

<body>
  <main>
    <div>
      <h1>Math</h1>
      <?php
      echo "Constate Pi<br>";
      echo pi() . "<br>";
      echo "Obter o valor máximo e mínimo:<br>";
      echo (min(2, 5, 8, 3, 6)) . "<br>";
      echo (max(2, 5, 8, 3, 6)) . "<br>";
      echo "Raiz Quadrada:";
      echo sqrt(100) . "<br>";
      echo "<br>Função de arredondamento<br>";
      echo "Arredondando 0,51: " . round(0.51) . "<br>";
      echo "Arredondando 0,49: " . round(0.49) . "<br>";
      echo "Arredondando 0,5: " . round(0.5) . "<br>";
      echo "Números aleatórios:<br>";
      echo rand() . "<br>";
      echo rand(10, 100) . "O rand do PHP inclui o número do limite superior.<br>";
      ?>
    </div>

    <div>
      <h1>Constantes</h1>
      <p>As constantes têm acesso global no script.</p>
      <p>Para criar uma constate, use a função <code>define()</code>. Sintaxe:</p>
      <p><code>define(nome, valor);</code></p>
      <?php
      define("alerta", "Estoque baixo");
      $qtd = 20;
      if ($qtd <= 10)
        echo alerta;
      ?>
    </div>

    <div>
      <h2>Arrays Constantes</h2>
      <?php
      define("carro", [
        "Uno", "Fox", "BMW"
      ]);
      echo "O índice define o elemento a ser impresso:<br>";
      echo carro[2];
      ?>
    </div>

    <div>
      <h2>Constantes Mágicas</h2>
      <p>São 9 constantes mágicas escritas com 2 underlines antes e depois do nome além da constante <code>ClassName::class</code></p>
      <div class="container">
        <div>Constante</div>
        <div>Descrição</div>
        <div>__CLASS__</div>
        <div>Se usada dentro da classe retorna o nome da classe.</div>
        <div>__DIR__</div>
        <div>Retorna o diretório do arquivo.</div>
        <div>__FILE__</div>
        <div>Retorna o caminho completo e o nome do arquivo.</div>
        <div>__FUNCTION__</div>
        <div>Se dentro da função, retorna o nome da função.</div>
        <div>__LINE__</div>
        <div>O número da linha atual.</div>
        <div>__METHOD__</div>
        <div>Se dentro de uma função que pertence à classe, retorna tanto o nome da classe como o nome da função.</div>
        <div>__NAMESPACE__</div>
        <div>Se dentro do namespace, retorna o nome do namespace.</div>
        <div>__TRAIT__</div>
        <div>Se usada dentro da trait, o nome da trait é retornado.</div>
        <div>ClassName::Class</div>
        <div>Retorna o nome de uma classe específica e o nome do namespace se houver.</div>
      </div>
    </div>

    <?php
    class Auto
    {
      function imprimeClass()
      {
        echo __CLASS__ . "<br>";
      }
    }
    $carro = new Auto();
    $carro->imprimeClass();
    ?>

    <h2>__DIR__</h2>
    <?php
    echo __DIR__;
    ?>

    <h2>__FILE__</h2>
    <?php
    echo __FILE__;
    ?>

    <h2>__FUNCTION__</h2>
    <?php
    class Sala
    {
      function imprimeSala()
      {
        echo "Estamos na sala 3 - " . __FUNCTION__;
      }
    }
    $sala = new Sala();
    $sala->imprimeSala();
    ?>

    <h2>__LINE__</h2>
    <?php
    echo __LINE__;
    ?>

    <h2>__METHOD__</h2>
    <?php
    class Aluno
    {
      function alunoDaEscola()
      {
        echo __METHOD__;
      }
    }

    $aluno = new Aluno();
    $aluno->alunoDaEscola();
    ?>
  </main>

</body>

</html>
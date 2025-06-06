<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <h1>Funções</h1>
    <p>Um exemplo com ochamar uma função:</p>
    <?php
        echo "<pre>";
        function imprimeMensagem() {
            echo "Hello, World!";
        }
        imprimeMensagem();
        echo "</pre>";
    ?>

    <h2>Argumentos das funções</h2>
    <p>As funções são enviadas para as funções através de argumentos.</p>

    <?php 
        echo "<pre>";
        function saudaComNome($nome) {
            echo "Salve, " . $nome . "!<br>";
        }

        saudaComNome("galera");
        saudaComNome("meu amigo");
        saudaComNome("gente boa");

        echo "</pre>";
    ?>

    <div>
        Modifique o progama anterior de alguma forma para que o cumprimento conceorde gramaticalmente com o argumento. Por exemplo, como as impressões a seguir:
    </div>
    <div>Caso 1: Salve, galera!</div>
    <div>Caso 2: Salvem, meus amigos!</div>

    <?php 
        echo "<pre>";
        function saudaNome($nome, $tipo) {
            if ($tipo == 1) {
                echo "Salve, " . $nome . "!<br>";
            }
            if ($tipo == 2) {
                echo "Salvem, " . $nome . "!<br>";
            }
        }

        saudaNome("galera", 1);
        saudaNome("meus amigos", 2);
        echo "</pre>";
    ?>

    <h2>Valores default</h2>
    <p>Na falta de um valor como argumento, um outro valor é fornecido.</p>

    <?php 
        echo "<pre>";
        function insereCPF($cpf = "000000000-00") {
            echo "CPF" . $cpf . ".<br>";
        }

        insereCPF("123456789-00");
        insereCPF();
        echo "</pre>";
    ?>
</body>
</html>
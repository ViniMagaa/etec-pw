<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08/08/2025</title>
    <style>
        span {
            font-family: Consolas;
        }
    </style>
</head>
<body>
    <div>
        <h1>Aula 8 de agosto de 2025</h1>
        <p>Arrays</p>
        <ul>
            <li>Array indexado: índices numéricos</li>
            <li>Array associativo: índices de texto</li>
            <li>Array multidimensionais: Arrays que contêm um ou mais arrays</li>
        </ul>

        <p>A propriedade <span>count</span> conta a quantidade de elementos.</p>

        <?php 
            $carros = array("Uno", "Gol", "Fox");
            var_dump($carros);
            echo "<br>Para imprimrimir um elemento específico, indique pelo índice: $carros(1)";

            echo "<br>O comando <span>array_push()</span> insere um elemento no final do array.<br>";
            array_push($carros, "Onix");
            foreach($carros as $carro) {
                echo $carro . "<br>";
            }

            echo "<p>Caso um array tenha índice numérico aleatório e for usado array_push(), o PHP acrescenta no índice do próximo inteiro consecutivo.</p>";
            $aves = array();
            $aves[1] = "galinha";
            $aves[8] = "coruja";
            $aves[11] = "pinguim";
            array_push($aves, "falcão");
            var_dump($aves);
            echo "<br>";
            print_r($aves);
        ?>

        <h2>Arrays associativos</h2>
        <?php 
            $veiculo = array(
                "fabricante" => "Honda",
                "modelo" => "Civic",
                "ano" => 2024
            );
            var_dump($veiculo);

            echo "<p>Para acessar um valor de array associativo, indique o nome (chave) do array:</p>";
            echo "Ano de fabricação: " . $veiculo["ano"];

            echo "<p>Para atualizar um valor de array associativo, atribua o novo valor à chave:</p>";
            $veiculo["ano"] = 2025;
            var_dump($veiculo);

            echo "<p>Para iterar um array associativo:</p>";
            foreach($veiculo as $p1 => $p2) {
                echo "$p1: $p2<br>";
            }
        ?>

        <h3>Outra forma de criar um array, é através dos colchetes []</h3>
        <?php 
            $computador = [
                "processador" => "i7",
                "memória" => "16GB",
                "geração" => 14,
                "SSD" => "1TB"
            ];
            foreach($computador as $p1 => $p2) {
                echo "$p1: $p2<br>";
            }
        ?>

        <p>Pode-se misturar índices numéricos com textuais:</p>
        <?php 
            $frutas = [];
            $frutas[0] = "amora";
            $frutas[1] = "banana";
            $frutas["vermelha"] = "caqui";
            var_dump($frutas);
        ?>

        <p>O operador & modifica todos os elementos atualizando para o mesmo valor:</p>
        <?php 
            $marcas = ["Renault", "Havaianas", "Kichute"];
            foreach($marcas as &$novo) {
                $novo = "Rider";
            }
            unset($novo);
            var_dump($novo);

            echo "<p>Sem a função <span>unset(\$novo)</span> a variável permanece como uma referência para o último item do array.</p>";
            $marcas = ["Renault", "Havaianas", "Kichute"];
            foreach($marcas as &$novo) {
                $novo = "Rider";
            }
            $novo = "Patola";
            var_dump($marcas);
        ?>

        <p>Outra forma de inserir um elemento no final do array:</p>
        <?php 
            $mamifero = ["cavalo", "cachorro", "gato"];
            $mamifero[] = "homem";
            print_r($mamifero);
        ?>

        <p>Da mesma forma pode ser feito com o arrat associativo:</p>
        <?php 
            $moto = array(
                "fabricante" => "Honda",
                "modelo" => "Falcon",
                "motorização" => "300cc"
            );
            $moto["cor"] = "prata";
            print_r($moto);
        ?>

        <p>O comando <span>array_push()</span> permite inserir múltiplos elementos:</p>
        <?php 
            $frutas = ["abacaxi", "laranja", "coco"];
            array_push($frutas, "morango", "maça", "pêssego");
            print_r($frutas);
        ?>

        <p>Para os arrays associativos, a inserção é feita através do +=</p>
        <?php 
            $venda = array(
                "fabricante" => "Ford",
                "modelo" => "Fiesta",
                "ano" => 2020
            );
            $venda += ["motorização" => "1.4", "cor" => "branco"];
            print_r($venda);
        ?>
    </div>
</body>
</html>
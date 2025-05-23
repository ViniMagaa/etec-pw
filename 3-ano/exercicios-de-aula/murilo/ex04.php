<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula dia 23/05/2025</title>
</head>
<body>
    <h1>Operadores</h1>

    <h2>Operador aritmético</h2>
    <div class="container">
        <div>Nome</div>
        <div>Exemplo</div>
        <div>Resultado</div>
        <div>**</div>
        <div>Exponenciação</div>
        <div>$x**$y</div>
        <div>Base elevado a um expoente</div>
    </div>

    <h2>Operador de comparação</h2>
    <div class="container">
        <div>Operador</div>
        <div>Nome</div>
        <div>Exemplo</div>
        <div>Resultado</div>
        <div>==</div>
        <div>Igual</div>
        <div>$x==$y</div>
        <div>Retorna <code>TRUE</code> se $x é igual a $y</div>
        <div>==</div>
        <div>Idêntico</div>
        <div>===</div>
        <div>Retorna <code>TRUE</code> se $x é igual a $y e ambos são do mesmo tipo</div>
        <div>!= <></div>
        <div>Não Igual</div>
        <div>$x!=$y</div>
        <div>Retorna <code>TRUE</code> se $x não for igual a $y</div>
        <div>!==</div>
        <div>Não Idêntico</div>
        <div>$x!===$y</div>
        <div>Retorna <code>TRUE</code> se $x não for igual a $y OU se ambos não são do mesmo tipo</div>
        <div>>=></div>
        <div>Spaceship</div>
        <div>$x<=>$y</div>
        <div>Retorna um inteiro menor do que zero, igual a zero ou maior que 0</div>
    </div>

    <?php 
        $x = 5;
        $y = 10;
        echo $x <=> $y;
        echo "<br>";
        
        $x = 5;
        $y = 5;
        echo $x <=> $y;
        echo "<br>";
        
        $x = 10;
        $y = 5;
        echo $x <=> $y;
        echo "<br>";
    ?>

    <h2>Operador Lógico</h2>
    <div class="container">
        <div>Operador</div>
        <div>Nome</div>
        <div>Exemplo</div>
        <div>Resultado</div>
        <div>and &&</div>
        <div>E lógico</div>
        <div>$x and $y</div>
        <div>Retorna <code>TRUE</code> se ambos são verdadeiros</div>
        <div>or ||</div>
        <div>Ou lógico</div>
        <div>$x || $y</div>
        <div>Retorna <code>TRUE</code> se pelo menos umdos valores é verdadeiro</div>
        <div>xor</div>
        <div>Ou Exclusivo</div>
        <div>$x xor $y</div>
        <div>Retorna <code>TRUE</code> se umdos valores é verdadeiro, MAS não ambos</div>
        <div>!</div>
        <div>Not</div>
        <div>!$x</div>
        <div>Retorna <code>TRUE</code> se o valor for falso</div>
    </div>

    <h2>Operadores de Array</h2>
    <div class="container">
        <div>Operador</div>
        <div>Nome</div>
        <div>Exemplo</div>
        <div>Resultado</div>
        <div>+</div>
        <div>União</div>
        <div>$x + $y</div>
        <div>União de $x e $y</div>
        <div>Retorna <code>TRUE</code> se $x e $y tem os valores para chave/valor</div>
        <div>===</div>
        <div>Identidade</div>
        <div>$x === $y</div>
        <div>Retorna <code>TRUE</code> se $x e $y têm as mesmas chaves/valores na mesma ordem E devem ser do mesmo tipo</div>
        <div>!= <></div>
        <div>Inigualdade</div>
        <div>$x != $y</div>
        <div>Retorna <code>TRUE</code> se $x não for igual a $y</div>
        <div>!==</div>
        <div>Não identidade</div>
        <div>$x != $y</div>
        <div>Retorna <code>TRUE</code> se $x não for idêntico a $y</div>
    </div>

    <?php 
        echo "<h3>União</h3>";
        $x = array("A" => "azul", "B" => "branco");
        $y = array("M" => "marrom", "P" => "preto");
        $resultado = $x + $y;
        print_r($resultado);
        
        echo "<h3>Igualdade</h3>";
        $x = array("A" => "azul", "B" => "branco");
        $y = array("A" => "azul", "B" => "branco");
        var_dump($x == $y);
        
        echo "<h3>Identidade</h3>";
        $x = array(1 => 10, 2 => 20);
        $y = array(1 => "10", 2 => "20");
        var_dump($x === $y);

        echo "<h3>Inigualdade</h3>";
        $x = array("c1" => "v1", "c2" => "v2");
        $y = array("c1" => "v1", "c2" => "v10");
        var_dump($x <> $y);

        echo "<h3>Não identidade</h3>";
        $x = array(1 => 10, 2 => 20);
        $y = array(1 => "10", 2 => "20");
        var_dump($x !== $y);
    ?>

    <h2>Operadores de atribuição condicional</h2>
    <div class="container">
        <div>Operador</div>
        <div>Nome</div>
        <div>Exemplo</div>
        <div>Resultado</div>
    </div>
</body>
</html>

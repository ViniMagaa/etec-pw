<?php
    echo "<h1>Tabuada do 5</h1>";

    echo "<h2>Usando FOR</h2>";
    for ($i = 0; $i <= 10; $i++) {
        $resultado = 5 * $i;
        echo "5 * $i = $resultado <br>";
    }

    echo "<h2>Usando WHILE</h2>";
    $i = 0;
    while ($i <= 10) {
        $resultado = 5 * $i;
        echo "5 * $i = $resultado <br>";
        $i++;
    }

?>


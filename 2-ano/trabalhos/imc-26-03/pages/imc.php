<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado de seu IMC!</title>
  <link rel="stylesheet" href="../src/styles/global.css" />
  <link rel="stylesheet" href="../src/styles/imc.css" />
</head>

<?php
$imc = (float) $_GET["weight"] / pow((float) $_GET["height"], 2);
?>

<body>
  <header>
    <div class="title">
      <strong>Seu IMC é</strong>
      <h1><?php echo number_format($imc, 1, ",") ?></h1>
    </div>
  </header>

  <main>
    <div class="card">
      <h2>Confira a tabela abaixo</h2>
      <table>
        <tr>
          <th>IMC</th>
          <th>Classificação</th>
          <th>Obesidade (grau)</th>
        </tr>
        <tr>
          <td>Menor que 18,5</td>
          <td>Magreza</td>
          <td>0</td>
        </tr>
        <tr>
          <td>Entre 18,5 e 24,9</td>
          <td>Normal</td>
          <td>0</td>
        </tr>
        <tr>
          <td>Entre 25,0 e 29,9</td>
          <td>Sobrepeso</td>
          <td>I</td>
        </tr>
        <tr>
          <td>Entre 30,0 e 39,9</td>
          <td>Obesidade</td>
          <td>II</td>
        </tr>
        <tr>
          <td>Maior que 40,0</td>
          <td>Obesidade grave</td>
          <td>III</td>
        </tr>
      </table>
      <a href="../index.html">Calcular novamente</a>
    </div>
  </main>

  <footer>
    <p>Vinícius DSNT2D - ETEC Polivalente &copy; 2024</p>
  </footer>
</body>

</html>
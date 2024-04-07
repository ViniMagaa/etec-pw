<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado de seu IMC!</title>
  <link rel="stylesheet" href="../src/styles/global.css" />
  <link rel="stylesheet" href="../src/styles/imc.css" />
  <script src="../src/javascript/imc.js" defer></script>
</head>

<?php
$imc = (float) $_GET["weight"] / pow((float) $_GET["height"], 2);
$recommendation;
$classification;
$levelOfObesity;

if ($imc <= 18.5) {
  $recommendation = "Tente ganhar um pouco mais de peso";
  $classification = "Magreza";
  $levelOfObesity = "0";
} elseif ($imc > 18.5 && $imc <= 24.9) {
  $recommendation = "Continue assim! Você está saudável.";
  $classification = "Normal";
  $levelOfObesity = "0";
} elseif ($imc > 24.9 && $imc <= 29.9) {
  $recommendation = "Tente se controlar mais nas refeições.";
  $classification = "Sobrepeso";
  $levelOfObesity = "I";
} elseif ($imc > 29.9 && $imc <= 39.9) {
  $recommendation = "Recomendamos que você faça academia.";
  $classification = "Obesidade";
  $levelOfObesity = "II";
} else {
  $recommendation = "Você deve procurar um médico urgentemente!";
  $classification = "Obesidade Grave";
  $levelOfObesity = "III";
};
?>

<body>
  <header>
    <h1>Olá, <?php echo $_GET["name"] ?>!</h1>
  </header>

  <main>
    <div class="card">
      <div class="header">
        <img src="../src/img/personal-trainer.svg" alt="Personal-Trainer">

        <div class="title">
          <strong>Seu IMC é</strong>
          <h2><?php echo number_format($imc, 1, ",") ?></h2>
        </div>

        <img src="../src/img/workout.svg" alt="Exercícios">
      </div>

      <p class="recommendation">
        "<?php echo $recommendation ?>"
      </p>

      <div class="information">
        <div>
          <p>
            Sua classificação:
            <strong>
              <?php echo $classification ?>
            </strong>
          </p>
          <p>
            Grau de obesidade:
            <strong>
              <?php echo $levelOfObesity ?>
            </strong>
          </p>
        </div>

        <button id="button-toggle-table-visible" onclick="toggleTableVisible()">Ver mais</button>
      </div>


      <div class="table-container">
        <table id="table" style="display: none;">
          <thead>
            <tr>
              <th>IMC</th>
              <th>Classificação</th>
              <th>Obesidade (grau)</th>
            </tr>
          </thead>
          <tbody>
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
            </tb>
        </table>
      </div>

      <a href="../index.html">Calcular novamente</a>
    </div>
  </main>

  <footer>
    <p>ETEC Polivalente &copy; 2024</p>
  </footer>
</body>

</html>
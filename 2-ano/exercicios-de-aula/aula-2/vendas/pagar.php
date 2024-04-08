<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Pagamento</title>
  <link rel="stylesheet" href="./styles/global.css">
  <link rel="stylesheet" href="./styles/pagar.css">
</head>

<body>
  <?php
  $paymentType = $_POST["payment-type"];
  $total = $_POST["total"];
  $discount = 0;
  $discountTotal;
  $paymentMethod;
  if ($paymentType == "money") {
    $paymentMethod = "Dinheiro";
    $discount = 10 / 100;
  } else if ($paymentType == "pix") {
    $paymentMethod = "PIX";
    $discount = 5 / 100;
  } else {
    $paymentMethod = "Cartão de Crédito";
  }
  $discountTotal = $total - ($total * $discount);
  ?>

  <main>
    <div class="card">
      <h1>Obrigado pela compra!</h1>
      <p>
        <strong>Método de pagamento:</strong> <?php echo $paymentMethod ?>
      </p>
      <?php

      if ($paymentType !== "credit-card") {
        echo "<div>";
        echo "<p>";
        echo "<strong>Total devido:</strong> R$ " . number_format($total, 2, ",", ".");
        echo "</p>";

        echo "<p>";
        echo "<strong>Desconto aplicado:</strong> " . $discount * 100 . "%";
        echo "</p>";

        echo "<p>";
        echo "<strong>Total com desconto:</strong> R$ " . number_format($discountTotal, 2, ",", ".");
        echo "</p>";
        echo "</div>";
      } else {
        echo "<small class='not-important'>Infelizmente não foi possível conceder desconto</small>";
      }
      ?>
      <h3 class="green">
        Total final: R$ <?php echo number_format($discountTotal, 2, ",", ".") ?>
      </h3>

      <a href="./index.html" class="link">🛍️ Compre mais produtos</a>
    </div>
  </main>

</body>

</html>
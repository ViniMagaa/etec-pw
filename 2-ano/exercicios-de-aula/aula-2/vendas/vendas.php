<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Pagamento</title>
  <link rel="stylesheet" href="./styles/global.css">
  <link rel="stylesheet" href="./styles/vendas.css">
  <script src="./js/vendas.js" defer></script>
</head>

<body>
  <?php
  $product = $_POST["product"];
  $price = $_POST["price"];
  $quantity = $_POST["quantity"];
  $total = $price * $quantity;
  ?>

  <main>
    <div class="card">
      <h1>Confirmar pedido</h1>
      <div>
        <p>
          <strong>Produto:</strong> <?php echo $product ?>
        </p>
        <p>
          <strong>Quantidade:</strong> <?php echo $quantity ?>
        </p>
        <p>
          <strong>Valor unitário:</strong> R$ <?php echo number_format($price, 2, ",", ".") ?>
        </p>
      </div>
      <h3 class="green">
        Total: R$ <?php echo number_format($total, 2, ",", ".") ?>
      </h3>
      <hr>
      <form name="form2" action="pagar.php" method="post">
        <div class="field-container">
          <h2>Forma de pagamento</h2>
          <div>
            <input type="radio" name="payment-type" id="credit-card" value="credit-card"
              onclick="handleSelectingPaymentType()">
            <label for="credit-card">Cartão de Crédito</label>
          </div>
          <div>
            <input type="radio" name="payment-type" id="money" value="money" onclick="handleSelectingPaymentType()">
            <label for="money">Dinheiro</label>
          </div>
          <div>
            <input type="radio" name="payment-type" id="pix" value="pix" onclick="handleSelectingPaymentType()" checked>
            <label for="pix">PIX</label>
          </div>
        </div>

        <div id="credit-card-container" class="field-container information">
          <div class="field-container">
            <label for="credit-card-number">N° do Cartão de Crédito</label>
            <input type="text" placeholder="0000 0000 0000 0000" id="credit-card-number" name="credit-card-number"
              oninput="onChangeCreditCardNumber()" maxlength="19">
            <span id="credit-card-number-error" class="error"></span>
          </div>
          <div class="field-container">
            <label for="credit-card-code">Código</label>
            <input type="text" placeholder="000" maxlength="3" id="credit-card-code" name="credit-card-code"
              oninput="onChangeCreditCardCode()">
            <span id="credit-card-code-error" class="error"></span>
          </div>
          <div class="field-container">
            <label for="credit-card-expire-date">Validade</label>
            <input type="date" name="credit-card-expire-date" id="credit-card-expire-date"
              oninput="onChangeCreditCardExpireDate()">
            <span id="credit-card-expire-date-error" class="error"></span>
          </div>
        </div>

        <div id="money-container" class="field-container">
          <strong>Compareça em uma de nossas unidades com o valor em mãos:</strong>
          <ul>
            <li>📍 Rua Solimões, 123 - Pindamonhangaba</li>
            <li>📍 Avenida João Maria, 987 - São Bento</li>
            <li>📍 Rua Coroneia, 456 - Campo Pequeno</li>
          </ul>
          <small>Apresente o código da sua compra: <strong><?php echo rand() ?></strong></small>
        </div>

        <div id="pix-container" class="field-container information">
          <p>
            <strong>Chave PIX:</strong>
            36cac6fc-1738-4568-9f8a-ffcbb74715fb
            <button type="button" onclick="copyPixKey()" class="small" id="copy-pix-key-button">
              Copiar
            </button>
          </p>
        </div>

        <div class="field-container">
          <input type="text" id="total" name="total" value="<?php echo $total ?>" readonly>
        </div>

        <button type="submit" id="submit" disabled>Efetuar pagamento</button>
      </form>
    </div>
  </main>

</body>

</html>
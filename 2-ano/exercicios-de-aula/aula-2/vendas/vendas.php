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
            <input type="radio" name="paymentType" id="credit-card" onclick="handleSelectingPaymentType()">
            <label for="credit-card">Cartão de Crédito</label>
          </div>
          <div>
            <input type="radio" name="paymentType" id="debit-card" onclick="handleSelectingPaymentType()">
            <label for="debit-card">Cartão de Débito</label>
          </div>
          <div>
            <input type="radio" name="paymentType" id="pix" onclick="handleSelectingPaymentType()" checked>
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

        <div id="debit-card-container" class="field-container information">
          <div class="field-container">
            <label for="debit-card-number">N° do Cartão de Débito</label>
            <input type="text" placeholder="0000 0000 0000 0000" id="debit-card-number" name="debit-card-number"
              oninput="onChangeDebitCardNumber()" maxlength="19">
            <span id="debit-card-number-error" class="error"></span>
          </div>
          <div class="field-container">
            <label for="debit-card-code">Código</label>
            <input type="text" placeholder="000" maxlength="3" id="debit-card-code" name="debit-card-code"
              oninput="onChangeDebitCardCode()">
            <span id="debit-card-code-error" class="error"></span>
          </div>
          <div class="field-container">
            <label for="debit-card-expire-date">Validade</label>
            <input type="date" name="debit-card-expire-date" id="debit-card-expire-date"
              oninput="onChangeDebitCardExpireDate()">
            <span id="debit-card-expire-date-error" class="error"></span>
          </div>
        </div>

        <div id="pix-container" class="field-container information">
          <p>
            <strong>Chave PIX:</strong>
            vinisantos2008vs@gmail.com
            <button type="button" onclick="copyPixKey()" class="small" id="copy-pix-key-button">
              Copiar
            </button>
          </p>
          <small>Efetue o pagamento e depois retorne a essa página</small>
        </div>

        <button type="submit" id="submit" disabled>Efetuar pagamento</button>
      </form>
    </div>
  </main>

</body>

</html>
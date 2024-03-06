<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mercadinho do Bairro</title>
  <style>
  body {
    background-color: darkslateblue;
    color: white;
    font-size: 1.5rem;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .btn-primary {
    font-size: 1.2rem;
    font-weight: 600;
    text-transform: uppercase;
    background-color: #000033;
    color: #eee;
    padding: .5rem 0.8rem;
    border: none;
    border-radius: 1rem;
    cursor: pointer;
    transition: .2s;
  }

  .btn-primary:hover {
    letter-spacing: 1px;
  }
  </style>
</head>

<body>
  <?php
  $product = "Danoninho";
  $price = 12.9;
  $quantity = 12;
  $total = $price * $quantity;
  $discount = 10 / 100;
  $discountTotal = $total - ($total * $discount);

  echo "Produto comprado: $product <br/>";
  echo "Quantidade: $quantity <br/>";
  echo "Preço: R$ $price <br/>";
  echo "Total à prazo: R$ $total <br/>";
  echo "Total à vista: R$ $discountTotal <br/>";
  $o = "oi";
  ?>

  <button class="btn-primary">Comprar</button>

</body>

</html>
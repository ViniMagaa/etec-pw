<?php
$login = $_POST["login"];
$senha = $_POST["senha"];
require("conexao.php");
$sql = "insert into usuarios (login, senha) values ('$login', '$senha')";
$result = mysqli_query($conexao, $sql);
if (!$result) {
  die("Não foi possível incluir. Erro: " . mysqli_connect_error());
}
header("Location: ../index.html");

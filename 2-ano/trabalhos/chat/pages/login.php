<?php
require("conexao.php");
$login = $_POST["login"];
$senha = $_POST["senha"];
$sql = "select * from usuarios where login = '$login' and senha = '$senha'";
$result = mysqli_query($conexao, $sql);
$linhas = mysqli_num_rows($result);
if ($linhas <= 0) {
  header("Location: erro.html");
} else {
  session_start();
  $_SESSION["login"] = $login;
  $_SESSION["senha"] = $senha;
  header("Location: conversas.php");
}

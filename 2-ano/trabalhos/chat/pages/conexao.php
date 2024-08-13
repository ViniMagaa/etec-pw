<?php
$servidor = "localhost";
$user = "root";
$password = "";
$porta = "3306";
$banco = "chat";
$conexao = mysqli_connect($servidor, $user, $password, $banco, $porta);
if (!$conexao) {
  die("Conexão falhou. Erro: " . mysqli_connect_error());
}

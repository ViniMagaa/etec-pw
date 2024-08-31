<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
$remetente = $_SESSION["login"];
$destinatario = $_POST["destinatario"];
$mensagem = $_POST["mensagem"];
$data = date("Y-m-d");
$hora = date("H:i:s");
require("conexao.php");
$sql = "insert into conversas (data, hora, remetente, destinatario, mensagem) values ('$data', '$hora', '$remetente', '$destinatario', '$mensagem')";
$result = mysqli_query($conexao, $sql);
if (!$result) {
  die("Não foi possível incluir. Erro: " . mysqli_connect_error());
}

<?php
session_start();
$login = $_SESSION["login"];
require("conexao.php");
$sql = "select remente from conversas where destinatario = '$login' group by remetente order by data,hora";
$result = mysqli_query($conexao, $sql);
if ($result) {
  echo "<div class='cabecalho'>";
  echo "<table>";
  while ($dados = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
?>
    <tr>
      <td><b><?php echo $dados["remetente"]; ?></b></td>
    </tr>
<?php
  }
  echo "</table>";
  echo "</div>";
}
?>
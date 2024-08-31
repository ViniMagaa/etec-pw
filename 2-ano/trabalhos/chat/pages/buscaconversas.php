<?php
session_start();
$login = $_SESSION["login"];
$destinatario = $_POST["destinatario"];
require("conexao.php");
$sql = "select * from conversas where (remetente = '$login' and destinatario = '$destinatario') or (destinatario = '$login' and remetente = '$destinatario') order by data, hora";
$result = mysqli_query($conexao, $sql);
$datas = [];
if ($result) {
  while ($dados = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $class = "message";
    if ($login != $dados["destinatario"]) {
      $class = "message-user";
    }

    $data = date("d/m/Y", strtotime($dados["data"]));

    if (!in_array($data, $datas)) {
      array_push($datas, $data);
?>
      <div class="date">
        <?php
        echo $data == date("d/m/Y") ? "Hoje" : $data;
        ?>
      </div>
    <?php
    }
    ?>
    <div class=<?php echo $class ?>>
      <span><?php echo $dados["mensagem"] ?></span>
      <small class="message-date"><?php echo date("H:i", strtotime($dados["hora"])) ?></small>
    </div>
<?php
  }
}
?>
<?php
$candidato = $_POST['txtNumero'];
$nome = $_POST['txtNome'];
$destino = $_FILES['foto']['name'];
$foto = $_FILES['foto']['tmp_name'];
move_uploaded_file($foto, $destino);
?>
<!DOCTYPE html>
<html lang="pt-br">

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/global.css">
    <title>Candidato Cadastrado</title>
</head>

<body>
    <div>
        <div>
            <h1>Confirma Candidato</h1>
        </div>
        <form name="form1" method="post" action="incluicandidato.php">
            <img src=<?php echo $destino; ?>>
            <label><b>Número do Candidato</b></label>
            <input name="txtNumero" type="number" readonly value=<?php echo $candidato; ?>><label><b>Nome do
                    Candidato</b></label>
            <input name="txtNome" type="text" readonly value=<?php echo $nome; ?>>

            <input type="text" name="fotocandidato" value=<?php echo $destino; ?>>
            <button class="w3-btn w3-blue-grey">Confirmar</button>
        </form>
    </div>
</body>

</html>
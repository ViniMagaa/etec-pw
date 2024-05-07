<!DOCTYPE html>
<html lang="pt-br">

<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../styles/global.css">
<title>Cadastro de Candidatos</title>
</head>

<body>
    <div>
        <div>
            <h1>Candidato Cadastrado</h1>
        </div>
        <?php
        $servidor = '127.0.0.1';
        $banco = 'votacao';
        $usuario = 'root';
        $senha = '';
        $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
        if (!$conexao) {
            die("Erro ao conectar com o Banco de Dados");
        }
        $numero = $_POST['txtNumero'];
        $nome = $_POST['txtNome'];
        $foto = $_POST['fotocandidato'];
        $sql = "insert into candidatos(numero, nome, foto) values ('$numero','$nome','$foto')";
        $resultado = mysqli_query($conexao, $sql);
        if (!$resultado) {
            die("Erro ao inserir o Candidato!" . mysqli_error($conexao));
        }
        ?>
        <audio controls autoplay>
            <source src="owin31.mp3" type="audio/mpeg">
        </audio>
        <img src="ok.png" width="200px" height="200px">
        <button type="button" class="w3-btn w3-blue-grey" onclick="voltar()">Voltar</button>
    </div>
</body>

<script>
    function voltar() {
        window.location.assign("index.html")
    }
</script>

</html>
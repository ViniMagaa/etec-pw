<!DOCTYPE html>
<html lang="pt-br">

<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../styles/global.css">
<link rel="stylesheet" href="../styles/incluircandidato.css">
<script src="https://kit.fontawesome.com/5a46ee37aa.js" crossorigin="anonymous"></script>
<title>Cadastro de candidatos</title>
</head>

<body>
	<header>
		<div>
			<h1>Urna Eletrônica</h1>
			<p>Sistema de votação online</p>
		</div>
		<img src="../img/polivalente-logo.png" alt="Polivalente" class="logo" />
	</header>
	<main>
		<aside>
			<nav>
				<img src="../img/logo.png" alt="Logo" class="logo" />
				<menu>
					<li>
						<a href="../../index.html">
							<i class="fa-solid fa-clipboard-list"></i>
							Cadastrar
						</a>
					</li>
					<li>
						<a href="./candidatos.php" class="active">
							<i class="fa-solid fa-users"></i>
							Candidatos
						</a>
					</li>
					<li>
						<a href="./votar.html">
							<i class="fa-solid fa-pencil"></i>
							Votar
						</a>
					</li>
				</menu>
			</nav>
			<footer>
				<p><strong>Vinícius e Pedro</strong></p>
				<small>&copy; ETEC Polivalente 2024</small>
			</footer>
		</aside>
		<div class="card-container">
			<div class="card">
				<div class="header">
					<h2>Candidato cadastrado</h2>
				</div>
				<div class="body">
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
						<source src="../audio/owin31.mp3" type="audio/mpeg">
					</audio>
					<img src="../img/ok.png">
					<div class="buttons-container">
						<button type="button" class="alt" onclick="candidatos()">Candidatos</button>
						<button type="button" onclick="voltar()">Voltar</button>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>

<script>
	function candidatos() {
		window.location = "./candidatos.php"
	}

	function voltar() {
		window.location = "../../index.html"
	}
</script>

</html>
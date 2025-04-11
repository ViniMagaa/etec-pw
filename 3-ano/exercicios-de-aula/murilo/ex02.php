<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>11/04/2025</title>

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

		* {
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}

		body {
			padding: 2rem 0.5rem;
			color: white;
			font-family: "Poppins", sans-serif;
			min-height: 100vh;
			background: #23294a;
			background: linear-gradient(158deg, rgba(35, 41, 74, 1) 0%, rgba(49, 70, 117, 1) 50%, rgba(17, 99, 88, 1) 100%);
		}

		main {
			margin: auto;
			width: 90%;
			max-width: 1200px;
			background-color: #0f0f0fab;
			padding: 1rem 1.5rem;
			border-radius: 1rem;
			display: flex;
			flex-direction: column;
			gap: 2rem;
		}

		div {
			display: flex;
			flex-direction: column;
			gap: 0.25rem;
		}

		code {
			color: white;
			background-color: rgba(17, 99, 88, 1);
			padding: 2px 5px;
			border-radius: 5px;
		}

		ol, ul {
			margin-left: 2.5rem;
		}
	</style>
</head>

<body>
	<main>
		<div>
			<h1>Números</h1>
			<p>Os 3 principais tipos numéricaos em PHP:</p>
			<ol>
				<li>Integer</li>
				<li>Float</li>
				<li>Number Strings</li>
			</ol>
			<p>Há também mais 2 tipos usados para números:</p>
			<ol>
				<li>Infinity</li>
				<li>NaN</li>
			</ol>
			<?php
			$val = "10";
			echo var_dump($val) . "<br>";
			$val2 = "10" + 20;
			echo $val2;
			?>
		</div>

		<div>
			<h2>Integer</h2>
			<p>Constante são valores que não precisam do $ no início da delcaração.</p>
			<ul>
				<li>Inteiro máximo: <strong><?php echo PHP_INT_MAX ?></strong></li>
				<li>Inteiro mínimo: <strong><?php echo PHP_INT_MIN ?></strong></li>
				<li>Bytes para armazenar um integer: <strong><?php echo PHP_INT_SIZE ?></strong></li>
			</ul>
			<h4>Função para checar se a variável é um integer:</h4>
			<?php
			$val3 = 50;
			echo var_dump(is_int($val3)) . "<br>";
			$val4 = 5.75;
			var_dump(is_int($val4));
			?>
		</div>

		<div>
			<h2>Float</h2>
			<p>Constates:</p>
			<ul>
				<li>Maior número: <strong><?php echo PHP_FLOAT_MAX ?></strong></li>
				<li>Menor número: <strong><?php echo PHP_FLOAT_MIN ?></strong></li>
			</ul>
			<p>Para verificar se uma varíavel é do tipo float, use a função <code>is_float()</code></p>
			<?php
			$val5 = 1.23;
			var_dump(is_float($val5));
			?>
		</div>

		<div>
			<h2>Infinity</h2>
			<p>Valor que ultrapasse <code>PHP_FLOAT_MAX</code> é considerado <strong>infinito</strong>.</p>
			<?php
			$val6 = 6.23e23;
			var_dump(is_infinite($val6));
			$val7 = 4.2e309;
			var_dump(is_infinite($val7));
			?>
		</div>

		<div>
			<h2>NaN</h2>
			<p>Significa <em>Not a Number</em>. Para verificar se é do tipo NaN, use <code>is_nan()</code>.</p>
			<?php
			$val8 = acos(1.5);
			?>
		</div>

		<div>
			<h2>Conversão de Float e String para Integer</h2>
			<?php 
				$val9 = 1.6e-19;
				$convertido1 = (int)$val9;
				echo $convertido1 . "<br>";
				$val10 = "2.54";
				$convertido2 = (int)$val10 . "<br>";
				echo $convertido2;
				echo "Arredondando 3,99: " . (int)3.99;
			?>
		</div>

		<div>
			<h2>Conversão de Objetos em Array</h2>
			<?php 
				class Carro {
					public $fabricante;
					public $modelo;

					public function __construct($fabricante, $modelo) {
						$this->fabricante = $fabricante;
						$this->modelo =  $modelo;
					}

					public function imprime() {
						return $this->fabricante . "fabrica" . $this->modelo;
					}
				}

				$myCar = new Carro("Honda", "Civic");
				echo var_dump($myCar) . "<br><br>";
				$carArray = (array)$myCar;
				echo var_dump($carArray);
			?>
		</div>

		<div>
			<h2>Conversão para Object</h2>
			<?php 
				$carro1 = array("Toyta", "Honda", "Nissan");
				$pessoa1 = array("Zé das Couves", "Tonho da Lua", "Tião Macale");
				$carroArray = (object)$carro1;
				$pessoaArray = (object)$pessoa1;
				echo var_dump($carroArray) . "<br>";
				echo var_dump($pessoaArray);
			?>
		</div>
	</main>
</body>

</html>
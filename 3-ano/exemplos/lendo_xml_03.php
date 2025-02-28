<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8">
			<title> Lendo XML  </title>
	</head>
	<body>
		<h1>  Lendo um arquivo XML   </h1>
<?php
	$link = "exemplo03.xml";
	$xml = simplexml_load_file($link) -> materia;
	foreach($xml -> aula as $aula){
			echo "<strong> Título: </strong>".utf8_decode($aula ->titulo)."<br>";
			echo "<strong> Telefone: </strong>".utf8_decode($aula ->texto)."<br>";
			echo "<br />";
			}
?>
	</body>
	</html>
	
	
	
	
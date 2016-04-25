<!DOCTYPE html>
<?php

?>
<html>
	<head>
		<title>Teste com Javascript</title>
		<meta charset="UTF-8">
		<script>
			function teste(){
				var nome = document.querySelector('#nome');
				var senha = document.querySelector('#senha');
				if(nome.value.length < 6){
					alert('Nome menor que 6');
					return false;
				}
				if(senha.value.length < 6){
					alert('Senha menor que 6');
					return false;
				}
			}
		</script>
	</head>
	<body>
		<form action="js2.test.php" method="post" onsubmit="return teste()">
			Nome: <input type="text" id="nome" name="nome"><br>
			Senha: <input type="text" id="senha" nome="senha"><br>
			<input type="submit" value="testar e enviar">
		</form>
		<a href="js3.php">Exemplo 3</a>
	</body>
<html>
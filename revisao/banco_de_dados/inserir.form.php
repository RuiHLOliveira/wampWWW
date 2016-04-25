<!DOCTYPE html>
<?php
	require_once("Raiz.php");
?>

<html>
	<head>
		<meta charset="UTF-8" />
		<title>Página de exemplo de Banco PDO</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		Insira alguém no banco.<br>
		<form method="post" action="inserir.php">
			Nome: <input type="text" name="nome" required>
			<input type="submit" value="Inserir!">
		</form>
	</body>
</html>
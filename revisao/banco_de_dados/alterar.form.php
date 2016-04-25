<!DOCTYPE html>
<?php
	require_once("Raiz.php");
	$id = htmlentities($_REQUEST["id"]);
	$nome = htmlentities($_REQUEST["nome"]);
?>

<html>
	<head>
		<meta charset="UTF-8" />
		<title>Bazar Tem Tudo</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		Altera alguém no banco.<br>
		<form method="post" action="alterar.php">
			<?php
				echo "Qual o novo nome de <b>$nome</b> : <input type='text' name='novonome' required>";
				echo "<input type='text' hidden name='id' value='$id'>"
			?>
			<input type="submit" value="Alterar!">
		</form>
	</body>
</html>
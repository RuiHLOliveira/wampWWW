<?php
	require_once("pagina_restrita.inc");

	$id = $_GET["id"];
	$descricao = $_GET["descricao"];
?>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Bazar Tem Tudo</title>
</head>
<body>

	<?php require_once("cabecalho.inc"); ?>

	<div id="corpo">

		<form action="alterar_categoria.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id; ?>"/>			
			<span>Descrição:</span><input type="text" name="descricao" maxlength="40" value="<?php echo $descricao; ?>">
<input type="hidden" name="descricaoAnterior" value="<?php echo $descricao; ?>">
			<button type="submit">Enviar</button>
		</form>

	</div>

	<?php require_once("rodape.inc"); ?>

</body>
</html>

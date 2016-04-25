<?php
	session_start();
	if(!isset($_SESSION["nome"]))
	{
		header("Location: inicio.php");
	}
	else
	{
		include("boasvindas_autenticacao.php");
	}

	$cod = htmlentities($_GET["cod"]);
	$descricao = htmlentities($_GET["descricao"]);
?>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Bazar Tem Tudo</title>
</head>
<body>
	<?php require_once("cabecalho.inc"); ?>
	<div id="corpo">
		<div>
			<?php exibe_usuario ($saudacao); ?>
		</div>
		<div>
			<form action="alterar_categoria.php" method="post">
				<input type="hidden" name="cod" value="<?php echo $cod ?>">
				Descrição: <input type="text" name="descricao" maxlength="40"
					value="<?php echo $descricao ?>" >
				<input type="hidden" name="descricaoAnterior" value="<?php echo $descricao ?>">
				<button type="submit">Enviar</button>
			</form>
		</div>
	</div>
	<?php require_once("rodape.inc"); ?>
</body>
</html>
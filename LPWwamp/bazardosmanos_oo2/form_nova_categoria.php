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
			<form action="inserir_categoria.php" method="post">
				Descrição: <input type="text" name="descricao" maxlength="40">
				<button type="submit">Enviar</button>
			</form>
		</div>
	</div>
	<?php require_once("rodape.inc"); ?>
</body>
</html>
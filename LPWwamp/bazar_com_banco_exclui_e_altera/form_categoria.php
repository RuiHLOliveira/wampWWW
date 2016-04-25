<?php
	session_start();
	if( !isset( $_SESSION["usuario"] ) )
	{
		Header("location: inicio.php");
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

		<form action="inserir_categoria.php" method="post">
			<span>Descrição:</span><input type="text" name="descricao" maxlength="40">
			<button type="submit">Enviar</button>
		</form>

	</div>

	<?php require_once("rodape.inc"); ?>

</body>
</html>
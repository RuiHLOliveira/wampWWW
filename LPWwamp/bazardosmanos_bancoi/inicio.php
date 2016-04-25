<?php
	session_start();
	include("boasvindas_autenticacao.php");
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
			
		</div>
		<div>
			<?php
				if(!isset($_SESSION["nome"]))
				{
					#echo "não tem ninguem";
					pede_login($saudacao);
				}
				else
				{
					exibe_usuario ($saudacao);
					#echo "tem gente";
				}
			?>
			
		</div>
	</div>

	<?php require_once("rodape.inc"); ?>

</body>
</html>
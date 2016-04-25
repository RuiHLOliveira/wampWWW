<!DOCTYPE html>
<?php
	session_start();
	require_once("funcoes.php");
	if(isset($_SESSION["nome"])){
		#tem alguém
		$flag = true;
	}
	else{
		#tem ninguém
		$flag = false;
	}
	?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Página de exemplo de Sessao</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
			if($flag){
				#tem alguém
				mostraUsuario();				
			}else{
				#tem ninguém
				requisitaLogin();
			}
		?>
		<div class="reliquiasdamorte">
			<img class="imagem" src="reliquiasdamorte.jpg">
		</div>
	</body>
</html>
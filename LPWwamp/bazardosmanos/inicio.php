<?php
	session_start();
	include("boasvindas_autenticacao.php");
	/*
	$d = date("H")-5;
	if( $d < 12 ) $saudacao = "Bom dia";
	elseif ($d < 17) $saudacao = "Boa tarde";
	else  $saudacao = "Boa noite";
	#echo $d;
	function pede_login ($saudacao)
	{
		echo "<span><?= $saudacao ?></span>
			Faça seu login!<br />
			<form action='login.php' method='post'>
				Nome: <input type='text' name='nome' required>
				Senha: <input type='password' name='senha' required>
				<input type='submit' value='Fazer Login!'>
			</form>";
	}
	function exibe_usuario ($saudacao)
	{
		echo $saudacao. ", " . $_SESSION['nome'] . "<br />";
		echo "
			<form action='logoff.php' >
				<input type='submit' value='Logoff!'>
			</form>";
	}*/
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
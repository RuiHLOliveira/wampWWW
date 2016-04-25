<?php
	
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
	}
?>
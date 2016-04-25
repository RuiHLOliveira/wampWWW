<?php
	session_start();
	$_SESSION["nome"]=$_REQUEST["nome"];
	
?>
<html>
<head>
</head>
<body>
	Sessao iniciada.<br />
	<?php echo "Bem vindo Sr. " . $_SESSION["nome"]; ?>
	<form action="fecharsessao.php">
		<input type="submit">
	</form>
	
</body>
<?php
	session_start();
	$email = $_REQUEST["email"];
	$senha = $_REQUEST["senha"];
	$nome = $_REQUEST["nome"];
	$telefone = $_REQUEST["telefone"];
	$cep = $_REQUEST["cep"];
	
	echo "$email";
	
	require_once( "basedir.php");
	require_once(BASE_DIR . "/Classes/Usuario.php");
	$listaUsuario = Usuario::InsereUsuario($email,$senha,
								$nome,$telefone,$cep);
	
	//header("Location: index.php");
?>
	

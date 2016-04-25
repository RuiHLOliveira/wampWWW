<?php
	session_start();
	$nome = $_REQUEST["nome"];
	$senha = $_REQUEST["senha"];
	
	require_once( "basedir.php");
	require_once(BASE_DIR . "/Classes/Usuario.php");
	$listaUsuario = Usuario::findAll();
	
	foreach($listaUsuario as $Usuario){
		if( $Usuario->getNome() == $nome)
		{
			if($Usuario->getSenha() == $senha){
					$_SESSION["nome"]=$_REQUEST["nome"];
					$_SESSION["id"] = $Usuario->getId();
			}
		}
	}
	
	header("Location: index.php");
?>
	

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
	require_once("categoria.class.php");
	$descricao = htmlentities($_POST["descricao"]);
	
	if(Categoria::InsereCategoria($descricao)){
		header("Location: categoria.php?sucesso=" . urlencode($descricao));
	}
?>
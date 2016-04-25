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
	$cod = htmlentities($_POST["cod"]);
	$descricao = htmlentities($_POST["descricao"]);
	
	if(Categoria::ExcluiCategoria($cod)){
		header("Location: categoria.php?sucesso=Categoria "
		. urlencode($descricao) . " excluída com sucesso.");
	}
?>
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
	
	$cod = htmlentities($_POST["cod"]);
	$descricao = htmlentities($_POST["descricao"]);
	
	$pdo = new PDO('mysql:host=localhost;dbname=bazar;charset=utf8mb4',
	'root', '');
	
	$statement = $pdo->prepare("delete from categoria where cod_categoria = :cod");
	$statement->bindParam(":cod", $cod, PDO::PARAM_INT);
	$resultado = $statement->execute();
	
	if($resultado){
		header("Location: categoria.php?sucesso=Categoria "
		. urlencode($descricao) . " excluída com sucesso.");
	}
?>
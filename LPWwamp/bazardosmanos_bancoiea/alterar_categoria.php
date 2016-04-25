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
	$descricaoAnterior = htmlentities($_POST["descricaoAnterior"]);
	
	$pdo = new PDO('mysql:host=localhost;dbname=bazar;charset=utf8mb4',
	'root', '');
	
	$statement = $pdo->prepare("update categoria set descricao = :descricao
		where cod_categoria = :cod");
	$statement->bindParam( ":cod", $cod, PDO::PARAM_INT);
	$statement->bindParam( ":descricao", $descricao, PDO::PARAM_STR);
	
	$resultado = $statement->execute();
	
	if($resultado){
		header("Location: categoria.php?sucesso=Categoria " . urlencode($descricaoAnterior) . 
		" alterada para " . urlencode($descricao) . " com sucesso");
	}
?>
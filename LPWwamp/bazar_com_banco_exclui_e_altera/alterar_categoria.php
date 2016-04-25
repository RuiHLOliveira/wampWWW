<?php
	
	require_once("pagina_restrita.inc");

	$id = $_POST["id"];
	$descricao = $_POST["descricao"];
	$descricaoAnterior = $_POST["descricaoAnterior"];

	$pdo = new PDO('mysql:host=localhost;dbname=bazar;charset=utf8mb4', 'root', '');

	$stmt = $pdo->prepare("update categoria set descricao=:descricao where cod_categoria = :id");
	$stmt->bindParam( ":id", $id, PDO::PARAM_INT);
	$stmt->bindParam( ":descricao", $descricao, PDO::PARAM_STR);
	$result = $stmt->execute();

	if( $result )
	{
		header("Location: categoria.php?sucesso=Categoria " . urlencode($descricaoAnterior) . " alterada para $descricao com sucesso.");
	}
	
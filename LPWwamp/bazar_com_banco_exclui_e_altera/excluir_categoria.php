<?php
	
	require_once("pagina_restrita.inc");

	$id = $_POST["id"];
	$descricao = $_POST["descricao"];

	$pdo = new PDO('mysql:host=localhost;dbname=bazar;charset=utf8mb4', 'root', '');

	$stmt = $pdo->prepare("delete from categoria where cod_categoria = :id");
	$stmt->bindParam( ":id", $id, PDO::PARAM_INT);
	$result = $stmt->execute();

	if( $result )
	{
		header("Location: categoria.php?sucesso=Categoria " . urlencode($descricao) . " excluída com sucesso");
	}

<?php
	require_once("pagina_restrita.inc");

	$descricao = $_POST["descricao"];

	$pdo = new PDO('mysql:host=localhost;dbname=bazar;charset=utf8mb4', 'root', '');

	$statement = $pdo->query("SELECT max(cod_categoria) as maior_id FROM categoria");

	$registro = $statement->fetch();

	$maior_id = $registro["maior_id"];

	if( $maior_id == null ) $novo_id = 1;
	else $novo_id = $maior_id + 1;

	$insere = $pdo->prepare("insert into categoria (cod_categoria, descricao) values (:id, :descricao)");
	$insere->bindParam( ":id", $novo_id, PDO::PARAM_INT);
	$insere->bindParam( ":descricao", $descricao, PDO::PARAM_STR);
	$resultado = $insere->execute();

	if( $resultado ) {
		header("Location: categoria.php?sucesso=Categoria " . urlencode($descricao) . " criada com sucesso." );
	}



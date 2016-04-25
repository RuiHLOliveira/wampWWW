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
	
	$descricao = htmlentities($_POST["descricao"]);
	
	$pdo = new PDO('mysql:host=localhost;dbname=bazar;charset=utf8mb4',
	'root', '');
	
	$statement = $pdo->query("select max(cod_categoria) as maior_cod from categoria");
	
	$registro = $statement->fetch();
	
	$maior_cod = $registro["maior_cod"];
	
	if( $maior_cod == null){
		$novo_cod = 1;
	}
	else {
		$novo_cod = $maior_cod +1;
	}

	$insere = $pdo->prepare("insert into categoria
	(cod_categoria, descricao) values(:cod, :descricao)");
	$insere->bindParam(":cod", $novo_cod, PDO::PARAM_INT);
	$insere->bindParam(":descricao", $descricao, PDO::PARAM_STR);
	$resultado = $insere->execute();
	
	if($resultado){
		header("Location: categoria.php?sucesso=" . urlencode($descricao));
	}
?>
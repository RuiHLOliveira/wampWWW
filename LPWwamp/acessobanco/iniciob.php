<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bazar";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

	//versao prepare / execute
    //$stmt = $conn->prepare("SELECT cod_categoria,descricao from categoria");
	//$stmt->execute();
	
	//versao query
	$stmt = $conn->query("SELECT cod_categoria,descricao from categoria");
	
	var_dump($stmt);
	
	//fetchAll
	//$categoriasAll = $stmt->fetchAll();
	//echo var_dump($categoriasAll);
	
	/* //fetch
	echo "teste";
	$categorias = array();
	while( $result = $stmt->fetch( PDO::FETCH_ASSOC) )
	{
		$categorias[] = $result;
	}
	echo var_dump($categorias);
	*/
	
?>
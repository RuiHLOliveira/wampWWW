<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bazar";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $stmt = $conn->query("SELECT cod_categoria,descricao from categoria");
	if( !$stmt )
	{
		echo "erro de conexao";
		exit;
	}    

	var_dump( $stmt );
	
    
    $categorias = $stmt->fetchAll();
	//$categorias = $stmt­>fetchAll();
	//$categorias = $stmt->fetchAll();
	//$categorias = $stmt->fetchAll();
	
	/*
    $categorias = array();
	while( $result = $stmt->fetch( PDO::FETCH_ASSOC) )
	{
		$categorias[] = $result;
	}*/
	echo var_dump($categorias);

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
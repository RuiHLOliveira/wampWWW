<?php
require_once 'paginaRestrita.php';
$id = filter_input(INPUT_POST, "id");
$descricaoAtual = filter_input(INPUT_POST, "descricaoAtual");
$novaDescricao = filter_input(INPUT_POST, "novaDescricao");
echo $descricaoAtual. " " . $novaDescricao;
$pdo = new PDO("mysql:host=localhost;dbname=bazar;charset=utf8mb4","root","");
$statement = $pdo->prepare("update categoria set descricao = :novaDescricao where cod_categoria = :id");
$statement->bindParam(":novaDescricao", $novaDescricao, PDO::PARAM_STR);
$statement->bindParam(":id", $id, PDO::PARAM_INT);
if($statement->execute()){
    header("location:categoria.php?sucesso=Categoria ".urlencode($descricaoAtual).
            " alterada para ".urlencode($novaDescricao).".");
}
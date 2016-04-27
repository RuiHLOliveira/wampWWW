<?php
require_once 'paginaRestrita.php';
$id = filter_input(INPUT_POST, "id");
$descricao = filter_input(INPUT_POST, "descricao");
$pdo = new PDO("mysql:host=localhost;dbname=bazar;charset=utf8mb4","root","");
$statement = $pdo->prepare("delete from categoria where cod_categoria = :id");
$statement->bindParam(":id", $id, PDO::PARAM_INT);
if($statement->execute()) {
    header("Location: categoria.php?sucesso=Categoria ".urlencode($descricao)." excluída com sucesso.");
}
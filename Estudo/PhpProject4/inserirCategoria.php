<?php
require_once 'paginaRestrita.php';
$descricao = filter_input(INPUT_POST, "descricao");
$pdo = new PDO("mysql:host=localhost;dbname=bazar;charset=utf8mb4","root","");
$statement = $pdo->prepare("insert into categoria (descricao) values (:descricao)");
$statement->bindparam(":descricao", $descricao, PDO::PARAM_STR);
if($statement->execute()) {
    header("location: categoria.php?sucesso=Categoria ".urlencode($descricao)." criada com sucesso.");
}
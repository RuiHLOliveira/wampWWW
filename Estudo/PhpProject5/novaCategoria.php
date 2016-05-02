<?php
session_start();
if(!isset($_SESSION["nome"])){
    header("location:index.php");
}
require_once 'boasVindasEAutenticacao.php';
require_once 'Classes/Categoria.class.php';
$descricaoNovaCategoria = filter_input(INPUT_POST, "descricaoNovaCategoria");
if(Categoria::insereCategoria($descricaoNovaCategoria)){
    header("location: categoria.php?sucesso=".urlencode($descricaoNovaCategoria));
}


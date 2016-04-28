<?php
session_start();
if(!isset($_SESSION["nome"])) {
    header("location:index.php");
}
require_once 'boasVindasEAutenticacao.php';
require_once 'Categoria.class.php';
//$listaDeCategorias = Categoria::findAll();

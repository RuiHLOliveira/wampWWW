<?php
//Autor: Rui Henrique Leite de Oliveira
//Definição:
session_start();
require_once 'boasVindasEAutenticacao.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Rui Henrique Leite de Oliveira">
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <title>Programa X</title>
    </head>
    <body>
        <?php require_once 'cabecalho.php'; ?>
        <section id="corpo">
            <div></div>
            <div>
                <?php
                if(!isset($_SESSION["nome"])) {
                    pedeLogin($saudacao);
                } else {
                    exibeUsuario($saudacao);
                }
                ?>
            </div>
        </section>
        <?php require_once 'rodape.php'; ?>
    </body>
</html>

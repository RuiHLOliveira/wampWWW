<?php
//Autor: Rui Henrique Leite de Oliveira
//Definição: 
session_start();
$logado = isset($_SESSION["usuario"]);
date_default_timezone_set('America/Sao_Paulo');
$data = date("H");
if ($data < 12) {
    $saudacao = "Bom dia";
} elseif ($data < 17) {
    $saudacao = "Boa tarde";
} else {
    $saudacao = "Boa noite";
}
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
        <?php
        if ($logado) {
            echo "<span>".$saudacao.",".$_SESSION["usuario"]."</span>";
        } else {
            if (isset($msgErro)) {
            echo "<p style='color: red'>".$msgErro."</p>";
        } ?>
        <form method="post" action="abrirSessao.php">
            Login: <input type="text" name="login" required><br>
            Senha: <input type="password" name="senha" required><br>
            <input type="submit" value="Entrar">
        </form>
        <?php }
        require_once("rodape.html");
        ?>
        
    </body>
</html>

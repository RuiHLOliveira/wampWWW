<?php
session_start();
if(!isset($_SESSION["nome"])) {
    header("location:index.php");
}
require_once 'boasVindasEAutenticacao.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bazar tem tudo</title>
    </head>
    <body>
        <?php require_once 'cabecalho.php'; ?>
        <section id="corpo">
            <?php exibeUsuario($saudacao); ?>
            <table>
                <tr>
                    <td><img src="img/martelo.jpeg" alt="martelo"></td>
                    <td>Martelo resistente. Ideal para serviços pesados.<br>R$ 12,00</td>
                </tr>
                <tr>
                    <td><img src="img/alicate.jpeg" alt="alicate"></td>
                    <td>Alicate, para obras, e para corajosos, para unha.<br>R$ 5,50</td>
                </tr>
                <tr>
                    <td><img src="img/serrote.jpeg" alt="serrote"></td>
                    <td>Serrote para serviços pesados.<br>R$7,35</td>
                </tr>
            </table>
        </section>
        <?php require_once 'rodape.php' ?>
    </body>
</html>

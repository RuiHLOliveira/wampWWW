<?php
session_start();
if(!isset($_SESSION["usuario"])) {
    header("location:index.php");
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bazar tem tudo</title>
    </head>
    <body>
        <?php require_once("cabecalho.html"); ?>
        <section id="corpo">
            <table>
                <tbody>
                    <tr>
                        <td><img src="img/martelo.jpeg" alt="martelo" width="100" height="100"></td>
                        <td>Martelo resistente. Ideal para serviços pesados.<br>R$ 12,00</td>
                    </tr>
                    <tr>
                        <td><img src="img/alicate.jpeg" alt="alicate" width="100" height="100"></td>
                        <td>Alicate para obras.<br>R$ 5,50</td>
                    </tr>
                    <tr>
                        <td><img src="img/serrote.jpeg" alt="serrote" width="100" height="100"></td>
                        <td>Serra para serviços pesados.<br>R$ 7,35</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <?php require_once("rodape.html"); ?>
    </body>
</html>
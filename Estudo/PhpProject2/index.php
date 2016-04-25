<!DOCTYPE html>
<?php
//Autor: Rui Henrique Leite de Oliveira
//Definição: Exibe números de 1 à 100 com ok.
//Muda para ping com css class 'negrito', caso seja multiplo de 3,
//muda para pong com css class 'italico', caso seja multiplo de 5 e
//muda para ploc com css class 'sublinhado', caso seja multiplo de ambos.
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Rui Henrique Leite de Oliveira">
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <title>Programa X</title>
    </head>
    <body>
        <?php
        for ($a = 1; $a <= 100; $a++) {
            echo $a;
            if (($a % 3) == 0) {
                if (($a % 5) == 0) {
                    echo " <span class='sublinhado'>ploc</span><br>";
                } else{
                    echo " <span class='negrito'>ping</span><br>";
                }
            } elseif (($a % 5) == 0) {
                echo " <span class='italico'>pong</span><br>";
            } else {
                echo " <span>ok</span><br>";
            }
        }
        ?>
    </body>
</html>

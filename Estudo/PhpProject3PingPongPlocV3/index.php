<!DOCTYPE html>
<?php
//Autor: Rui Henrique Leite de Oliveira
//Definição: Exibe números de 1 à 100 com ok.
//Muda para ping com css class 'negrito', caso seja multiplo de 3,
//muda para pong com css class 'italico', caso seja multiplo de 5 e
//muda para ploc com css class 'sublinhado', caso seja multiplo de ambos.
//Usa ?max=10 como argumento opcional

function pingPongPloc ($numero) {
    if (($numero % 3) == 0) {
        if (($numero % 5) == 0) {
            return " <span class='sublinhado'>ploc</span><br>";
        } else{
            return " <span class='negrito'>ping</span><br>";
        }
    } elseif (($numero % 5) == 0) {
        return " <span class='italico'>pong</span><br>";
    } else {
        return " <span>ok</span><br>";
    }
}

if (isset($_GET['max'])) {
    $max = htmlentities($_GET["max"]);
} else {
    $max = 100;
}
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
        for ($numero = 1; $numero <= $max; $numero++) {
            echo $numero." ".  pingPongPloc($numero);            
        }
        ?>
    </body>
</html>

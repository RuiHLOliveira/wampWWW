<?php
require_once 'paginaRestrita.php';
$id = filter_input(INPUT_GET, "id");
$descricaoAtual = filter_input(INPUT_GET, "descricao");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bazar tem tudo</title>
    </head>
    <body>
        <?php require_once 'cabecalho.html' ?>
        <section>
            <form action="alterarCategoria.php" method="post">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="hidden" name="descricaoAtual" value="<?= $descricaoAtual ?>">
                Descricao atual: <?= $descricaoAtual ?><br>
                Nova Descrição:
                <input type="text" name="novaDescricao" maxlength="40" required><br>
                <input type="submit" value="Alterar Categoria">
            </form>
        </section>
        <?php require_once 'rodape.html'; ?>
    </body>
</html>
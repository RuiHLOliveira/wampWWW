<?php
session_start();
if(!isset($_SESSION["nome"])) {
    header("location:index.php");
}
require_once 'boasVindasEAutenticacao.php';
require_once 'Classes/Categoria.class.php';
$listaDeCategorias = Categoria::findAll();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bazar tem tudo</title>
    </head>
    <body>
        <?php require_once 'cabecalho.php' ?>
        <section id="corpo">
            <?php exibeUsuario($saudacao); ?>
            <table border="1">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Descrição</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="3">
                            <form action="novaCategoria.php" method="post">
                                Nova Categoria:
                                <input type="text" name="descricaoNovaCategoria"
                                       maxlength="255" required>
                                <input type="submit" value="Criar categoria">
                            </form>
                        </td>
                    </tr>
                    <?php
                    /* @var $categoriaNoBanco Categoria */
                    foreach($listaDeCategorias as $categoriaNoBanco) {
                        echo "
                        <tr>
                        <td>".$categoriaNoBanco->getCodCategoria()."</td>
                        <td>".$categoriaNoBanco->getDescricao()."</td>
                        <td>
                        <form action='excluirCategoria.php' method='post'>
                            <input type='hidden' name='cod' value='".
                                $categoriaNoBanco->getCodCategoria()."'>
                            <input type='hidden' name='descricao' value='".
                                $categoriaNoBanco->getDescricao()."'>
                            <button type='submit'>Excluir esta categoria</button>
                        </form>
                        <form action='AlterarCategoria.php' method='get'>
                            <input type='hidden' name='cod' value='".
                                $categoriaNoBanco->getCodCategoria()."'>
                            <input type='hidden' name='descricao' value='".
                                $categoriaNoBanco->getDescricao()."'>
                            <button type='submit'>Alterar esta categoria</button>
                        </form>
                        </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
        <?php require_once 'rodape.php' ?>
    </body>
</html>

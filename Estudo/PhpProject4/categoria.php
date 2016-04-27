<?php
require_once 'paginaRestrita.php';
$pdo = new PDO("mysql:host=localhost;dbname=bazar;charset=utf8mb4","root","");
$statement = $pdo->query("select cod_categoria,descricao from categoria");
$categorias = $statement->fetchAll();
if(isset($_get["sucesso"])) {
    $exibirMsgSucesso = true;
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bazar Tem tudo</title>
    </head>
    <body>
        <?php
        require_once("cabecalho.html");
        if(isset($_GET["sucesso"])) {
            echo "<section><span>".filter_input(INPUT_GET, "sucesso")."</span></section";
        }
        ?>
        
        <section id="corpo">
            <table border="1">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Descrição</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($categorias as $categoria) { ?>
                    <tr>
                        <td><?= $categoria["cod_categoria"] ?></td>
                        <td><?= $categoria["descricao"] ?></td>
                        <td>
                            <form action="excluirCategoria.php" method="post">
                                <input type="hidden" name="id" value="<?= $categoria["cod_categoria"] ?>">
                                <input type="hidden" name="descricao" value="<?= $categoria["descricao"] ?>">
                                <input type="submit" value="Excluir">
                            </form>
                            
                            <form action="formAlteraCategoria.php" method="get">
                                <input type="hidden" name="id" value="<?= $categoria["cod_categoria"] ?>">
                                <input type="hidden" name="descricao" value="<?= $categoria["descricao"] ?>">
                                <input type="submit" value="Alterar">
                            </form>
                        </td>
                    </tr><?php } ?>
                </tbody>
            </table>
            <div>
                Nova categoria<br>
                <form action="inserirCategoria.php" method="post">
                    Descrição: <input type="text" name="descricao" maxlength="40" required>
                    <input type="submit" value="Inserir Categoria">
                </form>
            </div>
        </section>
        <?php require_once 'rodape.html'; ?>
    </body>
</html>
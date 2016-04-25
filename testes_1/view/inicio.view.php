<!--
View de painel do sistema.
1. Inicializa sessão
2. Dá boas vindas ao usuário.
3. Exibe botão para sair do sistema. Envia para logoff.controller.php via POST>
-->
<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>View do Inicio</h1>
        <br>
        Olá, <?php echo $_SESSION["nome"]; ?>! Como vai?
        <a href="../controller/logoff.controller.php"><input type="Button" value="LOGOFF"></a>
    </body>
</html>
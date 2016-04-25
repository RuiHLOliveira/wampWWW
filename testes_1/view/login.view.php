<!--
View de Login do sistema.
1. Recupera possível resultado de tentativa de login.
2. Exibe menu (menu.req).
3. Exibe possível resultado de tentativa de login.
4. Exibe formulário para autenticação. Envia email e senha para login.controller.php via POST>
-->
<!DOCTYPE html>
<?php
$resultado = "";
if(isset($_GET["resultado"])){
    $resultado = htmlentities($_GET["resultado"]);
}
?> 
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <title></title>
    </head>
    <body class='body'>
        <h1>View do Login</h1>
        <?php require_once ("../requirehtml/menu.req"); ?>
        <br>
        <?php echo $resultado; ?>
        <br>
        <form action="../controller/login.controller.php" method='post'>
            <div class='TituloCampo'>
                Email:<br>
                Senha:<br>
            </div>
            <div class='PreencheCampo'>
                <input type='text' id='email' name='email' required><br>
                <input type='password' id='senha' name='senha' required><br>
            </div>
            <br><br><br>
            <input type='submit' value='LOGIN!'>
        </form>
    </body>
</html>

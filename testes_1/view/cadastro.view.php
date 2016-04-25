<!--
View do Cadastro
1. Recupera possível resultado de tentantiva de cadastro.
2. Exibe menu (menu.req).
3. Exibe possível resultado de tentativa de cadastro.
4. Exibe formulário para cadastro de novo usuário. Envia nome, email, senha senha para confirmação para cadastro.controller.php via POST>
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
    <body>
        <h1>View do Cadastro</h1>
        <?php require_once ("../requirehtml/menu.req"); ?>
        <br>
        <?php echo $resultado; ?>
        <br>
        <form action='../controller/cadastro.controller.php' method='post'>
            <div class='TituloCampo'>
                Nome de Usuário:<br>
                Email:<br>
                Senha:<br>
                Confirme a senha:<br>
            </div>
            <div class='PreencheCampo'>
                <input type='text' id='nome' name='nome' required><br>
                <input type='email' id='email' name='email' required><br>
                <input type='password' id='senha' name='senha' required><br>
                <input type='password' id='confirmaSenha' name='confirmaSenha' required><br>
            </div>
            <br><br><br><br><br>    
            <input type='submit' value='CADASTRAR!'>
        </form>
    </body>
</html>
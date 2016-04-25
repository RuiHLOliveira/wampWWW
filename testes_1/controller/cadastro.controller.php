<!--
Este arquivo, cadastro.controller.php, usa as definições da Classe Usuario,
recebe as váriaveis via request e cria um usuario a ser cadastrado.
Em seguida, envia a senha a confirmar para verificação. Dependendo do resultado
desta, uma mensagem contendo um aviso de confirmação ou de erro é enviada,
junto do redirecionamento para cadastro.view.php.
-->
<?php
require_once("../classes/Usuario.class.php");
$nome = htmlentities($_POST["nome"]);
$email = htmlentities($_POST["email"]);
$senha = htmlentities($_POST["senha"]);
$confirmaSenha = htmlentities($_POST["confirmaSenha"]);
$usuarioACadastrar = new Usuario(null,$nome,$email,$senha,null);
$resultado = "";
if($usuarioACadastrar->verificaSenha($confirmaSenha)){
    $resultado = $resultado."Cadastro feito com sucesso.";
    Usuario::insere($usuarioACadastrar);
    header("Location: ../view/cadastro.view.php?resultado=$resultado");
}else{
    
    $resultado = $resultado."Senhas são diferentes.";
    header("Location: ../view/cadastro.view.php?resultado=$resultado");
}
?>
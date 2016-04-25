<?php
/*
 * Controlador de Login
 * 1. Inicia uma sessão.
 * 2. Importa a Classe Usuário (Usuario.class.php).
 * 3. Recupera informações de email e senha da tentativa de login.
 * 4. Declara uma variável de controle, começando com resposta negativa.
 * 5. Busca os usuários no banco.
 * 6. Percorre os usuários, comparando email e senha. Caso encontre o usuário desejado, muda a variável de controle para resposta positiva.
 *  
 */
session_start();
require_once("../classes/Usuario.class.php");
$email = htmlentities($_POST["email"]);
$senha = htmlentities($_POST["senha"]);


$encontrou = 0;
$listaUsuarios = Usuario::buscaTodos();
foreach($listaUsuarios as $u){
    if(0 == strcmp($email,$u->getEmail())){
        if(0 == strcmp($senha,$u->getSenha())){
            $_SESSION["email"] = $u->getEmail();
            $_SESSION["nome"] = $u->getNome();
            $encontrou = 1;
        }
    }
}
if($encontrou == 1){
    header("Location: ../index.php");
}else{
    header("Location: ../view/login.view.php?resultado=Dados+Invalidos");
}

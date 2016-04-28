<?php

$hora = date("H");
if($hora < 12) {
    $saudacao = "Bom dia";
} elseif ($hora < 17) {
    $saudacao = "Boa tarde";
} else {
    $saudacao = "Boa noite";
}
function pedeLogin($saudacao) {
    echo $saudacao."!<br>Faça seu login!<br>".
            "<form action='login.php' method='post'>".
            "   Nome: <input type='text' name='nome' required>".
            "   Senha: <input type='password' name='senha' required>".
            "   <input type='submit' value='Fazer login!'>".
            "</form>";            
}
function exibeUsuario($saudacao){
    echo $saudacao.", ".$_SESSION["nome"]."!<br>".
            "<form action='logoff.php'>".
            "   <input type='submit' value='Fazer Logoff!'>".
            "</form>";
}
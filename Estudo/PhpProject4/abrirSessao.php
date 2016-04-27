<?php
//Autor: Rui Henrique Leite de Oliveira
$login = filter_input(INPUT_POST,"login");
$senha = filter_input(INPUT_POST, "senha");

if ($senha == "patasdegalinha") {
    session_start();
    $_SESSION["usuario"] = $login;
    Header("location: index.php");
} else {
    $msgErro = "Senha incorreta!";
    require_once("index.php");
}
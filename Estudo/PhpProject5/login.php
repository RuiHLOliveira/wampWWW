<?php
session_start();
$senha = filter_input(INPUT_POST, "senha");
if($senha == "patasdegalinha") {
    $_SESSION["nome"] = filter_input(INPUT_POST, "nome");
}
header("location:index.php");


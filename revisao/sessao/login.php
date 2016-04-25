<?php
	session_start();
	$nome = htmlentities($_REQUEST["nome"]);
	$senha = htmlentities($_REQUEST["senha"]);
	
	if($senha == "reliquiasdamorte"){
		$_SESSION["nome"] = $nome;
	}
	header("Location: sessao.php");
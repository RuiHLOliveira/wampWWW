<?php
	require_once("Raiz.php");
	require_once(Raiz . "/classes/Usuarioa.class.php");
	$nome = htmlentities($_REQUEST["nome"]);
	Usuarioa::inserir($u = new Usuarioa(null, $nome));
	header("Location: banco_de_dados.php");
	
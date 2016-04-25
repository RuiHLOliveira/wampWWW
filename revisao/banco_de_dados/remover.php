<?php
	require_once("Raiz.php");
	require_once(Raiz . "/classes/Usuarioa.class.php");
	$id = htmlentities($_REQUEST["id"]);
	Usuarioa::excluir($u = new Usuarioa($id, null));
	header("Location: banco_de_dados.php");
	
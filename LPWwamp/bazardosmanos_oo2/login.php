<?php
	session_start();
	$senha = $_REQUEST["senha"];
	if($senha == "patasdegalinha")
	{
		$_SESSION["nome"]=$_REQUEST["nome"];
	}
	else
	{
		
	}
	header("Location: inicio.php");
?>
	

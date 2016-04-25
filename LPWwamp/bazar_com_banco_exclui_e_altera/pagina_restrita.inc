<?php
	session_start();
	if( !isset( $_SESSION["usuario"] ) )
	{
		Header("location: inicio.php");
	}
?>

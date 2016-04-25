<?php
abstract class Banco{
	public static function novaConexao(){
		return new PDO('mysql:host=localhost;dbname=bazar;
		charset=utf8mb4', 'root','');
	}
}
?>
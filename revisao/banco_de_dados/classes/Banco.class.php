<?php
	abstract class Banco{
		public static function obterConexao(){
			return new PDO('mysql:host=localhost;dbname=revisao;charset=utf8mb4','root','');
		}
	}
?>
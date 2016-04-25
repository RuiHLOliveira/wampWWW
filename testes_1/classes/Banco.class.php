<?php
    abstract class Banco{
        public static function obterConexao(){
            return new PDO('mysql:host=localhost;dbname=projectdraenor;charset=utf8mb4','root','');
        }
    }
?>
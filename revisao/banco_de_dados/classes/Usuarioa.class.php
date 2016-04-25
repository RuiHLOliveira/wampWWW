<?php
	require_once( Raiz . "/classes/Banco.class.php");
	require_once( Raiz . "/classes/UsuarioaDao.class.php");

	class Usuarioa{
		use UsuarioaDao;
		private $id;
		private $nome;
		
		public function __construct($id, $nome){
			$this->id = $id;
			$this->nome = $nome;
		}
		
		public function getId(){
			return $this->id;
		}
		
		public function getNome(){
			return $this->nome;
		}
	}
?>
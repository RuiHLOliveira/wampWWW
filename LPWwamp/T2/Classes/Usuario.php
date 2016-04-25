<?php
require_once( BASE_DIR . "/Classes/UsuarioDao.php");
require_once( BASE_DIR . "/Classes/Banco.php");
class Usuario{
	use UsuarioDao;

	private $id;
	private $email;
	private $senha;
	private $nome;
	private $telefone;
	private $cep;
	
	public function __construct( $id, $email, $senha,
							$nome, $telefone, $cep){
		$this->id = $id;
		$this->email = $email;
		$this->senha = $senha;
		$this->nome = $nome;
		$this->telefone = $telefone;
		$this->cep = $cep;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function getEmail(){
		return $this->email;
	}

	public function getSenha(){
		return $this->senha;
	}
	
	public function getNome(){
		return $this->nome;
	}
	
	public function getTelefone(){
		return $this->telefone;
	}
	
	public function getCep(){
		return $this->cep;
	}
}

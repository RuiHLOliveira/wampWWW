<?php
require_once(raiz."/classes/Banco.class.php");
require_once(raiz."/classes/PersonagemDao.class.php");
class Personagem{
	use PersonagemDao;
	private $id;
	private $nome;
	private $classe;
	private $vidaAtual;
	private $vidaTotal;
	private $ataque;
	public function __construct($id,$nome,$classe,$vidaTotal,$ataque){
		$this->id = $id;
		$this->nome = $nome;
		$this->classe = $classe;
		$this->vidaAtual = $vidaTotal;
		$this->vidaTotal = $vidaTotal;
		$this->ataque = $ataque;
	}
	public function getId(){
		return $this->id;
	}
	public function getNome(){
		return $this->nome;
	}
	public function getClasse(){
		return $this->classe;
	}
	public function getVidaAtual(){
		return $this->vidaAtual;
	}
	public function getVidaTotal(){
		return $this->vidaTotal;
	}
	public function getAtaque(){
		return $this->ataque;
	}
        /*
	public function toString(){
		return "Id: ".$this->getId()." Nome: ".$this->getNome()." Ataque: ".$this->getAtaque().
		" Vida: ".$this->getVidaAtual()."/".$this->getVidaTotal();
	}*/
}
<?php
require_once ("/../raiz.php");
require_once(raiz."/classes/Banco.class.php");
require_once(raiz."/classes/UsuarioDao.class.php");
require_once(raiz."/classes/Personagem.class.php");
class Usuario{
    use UsuarioDao;
    private $id;
    private $nome;
    private $senha;
    private $personagem;
    public function __construct($id,$nome,$email,$senha,$personagem){
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        if($personagem != null){
            $this->personagem = new Personagem($personagem->getId(),$personagem->getNome(),
                $personagem->getClasse(),$personagem->getVidaTotal(),$personagem->getAtaque());
        }else{
            $this->personagem = null;
        }
    }
	public function getId(){
            return $this->id;
	}
	public function getNome(){
            return $this->nome;
	}
        public function getEmail(){
            return $this->email;
        }
	public function getSenha(){
            return $this->senha;
	}
	public function getPersonagem(){
            return $this->personagem;
	}
	public function toString(){
            return "Id: ".$this->getId().
                " Nome: ".$this->getNome().
                " Email: ".$this->getEmail();
	}     
        /* Dada uma senha, esta função verifica se a senha é igual a senha
         * do objeto usuário instanciado.
         */
        public function verificaSenha ($senhaAConfirmar){
            if(0 == strcmp($this->senha, $senhaAConfirmar)){
                return true;
            }else{
                return false;
            }
        }
}
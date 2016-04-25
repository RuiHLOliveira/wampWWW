<?php
class Categoria {
	private $codCategoria;
	private $descricao;
	
	public function __construct ($cod, $desc){
		$this->codCategoria = $cod;
		$this->descricao = $desc;
	}
	use TraitCategoria;
}
trait TraitCategoria{
	public function getCodCategoria(){
		return $this->codCategoria;
	}
	
	public function getDescricao(){
		return $this->descricao;
	}
}
?>
<?php
require_once 'Banco.class.php';
class Categoria {
    private $codCategoria;
    private $descricao;
    
    public function __construct($codCategoria, $descricao) {
        $this->codCategoria = $codCategoria;
        $this->descricao = $descricao;
    }
    public function getCodCategoria() {
        return $this->codCategoria;
    }
    public function getDescricao() {
        return $this->descricao;
    }
}
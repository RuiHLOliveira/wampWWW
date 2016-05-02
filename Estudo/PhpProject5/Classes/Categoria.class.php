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
    public static function rowMapper($codCategoria, $descricao) {
        return new Categoria($codCategoria, $descricao);
    }
    public static function findAll() {
        $pdo = Banco::novaConexao();
        $statement = $pdo->prepare("select cod_categoria, descricao "
                ."from Categoria");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_FUNC,"Categoria::RowMapper");
    }
    public static function insereCategoria($descricao) {
        $pdo = Banco::novaConexao();
        $statement = $pdo->prepare("insert into Categoria(descricao) values "
                ."(:descricao)");
        $statement->bindParam(":descricao", $descricao, PDO::PARAM_STR);
        return $statement->execute();
    }
    public static function excluiCategoria($codCategoria){
        $pdo = Banco::novaConexao();
        $statement = $pdo->prepare("delete from categoria where"
                ." cod_categoria = :cod");
        $statement->bindParam(":cod", $codCategoria, PDO::PARAM_INT);
        return $statement->execute();
    }
    public static function alteraCategoria($codCategoria, $descricao){
        $pdo = Banco::novaConexao();
        $statement = $pdo->prepare("update categoria set descricao = :descricao"
                ." where cod_categoria = :cod");
        $statement->bindParam(":descricao", $descricao, PDO::PARAM_STR);
        $statement->bindParam(":cod", $codCategoria, PDO::PARAM_INT);
        return $statement->execute();
    }
    
}
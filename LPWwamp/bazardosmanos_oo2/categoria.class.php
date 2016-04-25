<?php
require_once("Banco.class.php");

class Categoria {
	private $codCategoria;
	private $descricao;
	
	use TraitCategoria;
	
	public function __construct ($cod, $desc){
		$this->codCategoria = $cod;
		$this->descricao = $desc;
	}
	
	public function getCodCategoria(){
		return $this->codCategoria;
	}
	
	public function getDescricao(){
		return $this->descricao;
	}
}

trait TraitCategoria{
	public static function rowMapper($cod_categoria, $descricao){
		return new Categoria ($cod_categoria, $descricao);
	}
	
	public static function findAll(){
		$pdo = Banco::novaConexao();
		$statement = $pdo->prepare("select cod_categoria,
		descricao from Categoria");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_FUNC,
		"TraitCategoria::RowMapper");
	}
	
	public static function InsereCategoria($descricao){
		$pdo = Banco::novaConexao();
		$statement = $pdo->query("select max(cod_categoria) as maior_cod from categoria");
		$registro = $statement->fetch();
		$maior_cod = $registro["maior_cod"];
		if( $maior_cod == null){
			$novo_cod = 1;
		}
		else {
			$novo_cod = $maior_cod +1;
		}
		$insere = $pdo->prepare("insert into categoria
		(cod_categoria, descricao) values(:cod, :descricao)");
		$insere->bindParam(":cod", $novo_cod, PDO::PARAM_INT);
		$insere->bindParam(":descricao", $descricao, PDO::PARAM_STR);
		$resultado = $insere->execute();
		return $resultado;	
	}
	
	public static function ExcluiCategoria($cod){
		$pdo = Banco::novaConexao();
		$statement = $pdo->prepare("delete from categoria where cod_categoria = :cod");
		$statement->bindParam(":cod", $cod, PDO::PARAM_INT);
		$resultado = $statement->execute();
		return $resultado;
	}
	
	public static function AlteraCategoria($cod,$descricao){
		$pdo = Banco::novaConexao();
		$statement = $pdo->prepare("update categoria set descricao = :descricao
		where cod_categoria = :cod");
		$statement->bindParam( ":cod", $cod, PDO::PARAM_INT);
		$statement->bindParam( ":descricao", $descricao, PDO::PARAM_STR);
		$resultado = $statement->execute();
		return $resultado;
	}
}
?>
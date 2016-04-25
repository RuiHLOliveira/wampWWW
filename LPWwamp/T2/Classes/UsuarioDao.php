<?php


trait UsuarioDao{
	
	public static function rowMapper($id, $email, $senha,
								$nome, $telefone, $cep){
		
		return new Usuario($id, $email, $senha,
								$nome, $telefone, $cep);
	}

	public static function findAll(){
		$pdo = Banco::obterConexao();
		$statement = $pdo->prepare("SELECT id,email,senha,nome,telefone,cep FROM Usuario");
		$statement->execute();
		return $statement->fetchAll( PDO::FETCH_FUNC, "UsuarioDao::rowMapper" );
	}
	
	public static function InsereUsuario($email, $senha,
								$nome, $telefone, $cep){
		$pdo = Banco::obterConexao();
		$insere = $pdo->prepare("insert into Usuario
		(email, senha, nome, telefone, cep) values(:email, :senha, :nome, :telefone, :cep)");
		$insere->bindParam(":email", $email, PDO::PARAM_STR);
		$insere->bindParam(":senha", $senha, PDO::PARAM_STR);
		$insere->bindParam(":nome", $nome, PDO::PARAM_STR);
		$insere->bindParam(":telefone", $telefone, PDO::PARAM_STR);
		$insere->bindParam(":cep", $cep, PDO::PARAM_STR);
		$resultado = $insere->execute();
		return $resultado;	
	}
}

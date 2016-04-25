<?php
	trait UsuarioaDao{
		public function rowMapper($id, $nome){
			return new Usuarioa($id,$nome);
		}
		
		public static function buscaTodos(){
			$pdo = Banco::obterConexao();
			$busca = $pdo->prepare("select id, nome from usuarioa");
			$busca->execute();
			return $busca->fetchAll(PDO::FETCH_FUNC, "UsuarioaDao::rowMapper");
		}
		
		public static function inserir($u){
			$pdo = Banco::obterConexao();
			$inserir = $pdo->prepare("insert into usuarioa (nome) values(:nome)");
			$nome = $u->getNome();
			$inserir->bindParam(":nome", $nome, PDO::PARAM_STR);
			return $inserir->execute();
		}
		
		public static function alterar($novoU, $u){
			$pdo = Banco::obterConexao();
			$alterar = $pdo->prepare("update usuarioa set nome = :novonome
										where id = :id");
			$novonome = $novoU->getNome();
			echo $novonome;
			$id = $u->getId();
			$alterar->bindParam(":novonome", $novonome, PDO::PARAM_STR);
			$alterar->bindParam(":id", $id, PDO::PARAM_INT);
			return $alterar->execute();
		}
		
		public static function excluir($u){
			$pdo = Banco::obterConexao();
			$excluir = $pdo->prepare("delete from usuarioa where id = :id");
			$id =$u->getId();
			$excluir->bindParam(":id", $id, PDO::PARAM_INT);
			return $excluir->execute();
		}
	}
?>
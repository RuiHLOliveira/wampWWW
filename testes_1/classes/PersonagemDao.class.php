<?php
trait PersonagemDao{
	public function rowMapper($id,$nome,$classe,$vidaAtual,$vidaTotal,$ataque){
		//return new Usuario($id,$nome,$senha,null);
	}
	
	public static function insere($idUsuario,$personagem){
		$pdo = Banco::obterConexao();
		$inserir = $pdo->prepare("insert into personagem (idUsuario,nome,classe,vidaAtual,vidaTotal,ataque)
		values(:idUsuario,:nome,:classe,:vidaAtual,:vidaTotal,:ataque)");
		
		$nome = $personagem->getNome();
		$classe = $personagem->getClasse();
		$vidaAtual = $personagem->getVidaAtual();
		$vidaTotal = $personagem->getVidaTotal();
		$ataque = $personagem->getAtaque();
		
		$inserir->bindParam(":idUsuario", $idUsuario, PDO::PARAM_INT);
		$inserir->bindParam(":nome", $nome, PDO::PARAM_STR);
		$inserir->bindParam(":classe", $classe, PDO::PARAM_STR);
		$inserir->bindParam(":vidaAtual", $vidaAtual, PDO::PARAM_INT);
		$inserir->bindParam(":vidaTotal", $vidaTotal, PDO::PARAM_INT);
		$inserir->bindParam(":ataque", $ataque, PDO::PARAM_INT);
		
		$inserir->execute();
	}
}
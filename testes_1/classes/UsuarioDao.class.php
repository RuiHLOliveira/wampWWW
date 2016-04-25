<?php
trait UsuarioDao {
    public function rowMapper($id,$nome,$email,$senha){
        return new Usuario($id,$nome,$email,$senha,null);
    }

    public static function buscaTodos(){
        $pdo = Banco::obterConexao();
        $busca = $pdo->prepare("select id,nome,email,senha from usuario");
        $busca->execute();
        return $busca->fetchAll(PDO::FETCH_FUNC, "UsuarioDao::rowMapper");
    }

    public static function insere($usuario){
        $pdo = Banco::obterConexao();
        $inserir = $pdo->prepare("insert into usuario (nome,email,senha) values(:nome,:email,:senha)");
        $nomeUsuario = $usuario->getNome();
        $emailUsuario = $usuario->getEmail();
        $senhaUsuario = $usuario->getSenha();
        $inserir->bindParam(":nome", $nomeUsuario, PDO::PARAM_STR);
        $inserir->bindParam(":email", $emailUsuario, PDO::PARAM_STR);
        $inserir->bindParam(":senha", $senhaUsuario, PDO::PARAM_STR);
        $inserir->execute();
        if(null != $usuario->getPersonagem()){
            $personagem = $usuario->getPersonagem();
            Personagem::insere($personagem);
        }
    }
}
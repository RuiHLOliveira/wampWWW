<!--
Este arquivo, index, faz uso das constantes php definidas no arquivo
raiz.php.
Inicializa uma sessão, verifica se a sessão tem dados válidos, e redireciona
para a página de inicio do game.
Caso contrário, redireciona para a página de identificação.
-->
<!DOCTYPE html>
<?php
    require_once("raiz.php");
    session_start();
    /*
    require(raiz."/classes/Usuario.class.php");
    $u1 = new Usuario(123,"teste","abc",null);
    Usuario::insere($u1);
    */
    
    if(isset($_SESSION["nome"])){
        #codigo para usuário logado
        header("Location: view/inicio.view.php");
    }else{
        #codigo para usuário não logado
        header("Location: view/painel.view.php");
    }
?>

<!--
//observações referentes a instanciação de personagens e usuarios
//e a persistencia dos mesmos no banco de dados.

            //testando personagem nulo para um usuario.
            $p1 = new Personagem(123,"Dustscar","Caçador",100,100,10);
            $p2 = new Personagem(null,null,null,null,null,null);
            $u1 = new Usuario(456,"Rui","456",$p1);
            $u2 = new Usuario(789,"Maria","789",$p2);

            echo $u1->getPersonagem()->getNome();
            if(null == $u2->getPersonagem()->getId()){
                    echo "\nnão tem p2";
            }
            
            
            //inserindo no banco
            $p1 = new Personagem(123,"Dustscar","Caçador",100,100,10);
            $u1 = new Usuario(456,"Rui","456",$p1);
            Usuario::insere($u1);
            
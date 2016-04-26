<?php

function validaLogin($nome = null, $senha = null) {

    if (!$nome || !$senha) {
        echo "Preencha todos os campos";
        exit;
    } else {
        $path = "usuarios/";

        $abredir = opendir($path);



        while ($arqs = readdir($abredir)) {


            $pathArquivo = $path . $arqs;

            $extensaoArquivo = explode(".", $arqs);
            if (end($extensaoArquivo) == 'txt') {
                $abre = fopen($pathArquivo, "r");

                $le = fread($abre, filesize($pathArquivo));

                $dado = explode("|", $le);

                $nomeGravado = $dado['0'];
                $senhaGravado = $dado['3'];

                if ($nomeGravado == $nome && $senhaGravado == $senha) {
                    return TRUE;
                }

            }
        }

        closedir($abredir);
        return FALSE;
    }
}

$nome = $_POST['nome'];
$entrar = $_POST['entrar'];
$senha = $_POST['senha'];


if (isset($entrar)) {
    if (validaLogin($nome, $senha)) {
        echo "deu certooooooooooooo";
        setcookie("login", $nome);
        header("Location:ofertas.php");
    } else {
        echo "Dados Incorretos";
    }
}
?>


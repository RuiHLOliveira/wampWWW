<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $path = "usuarios/";

        $abredir = opendir($path);



        while ($arqs = readdir($abredir)) {


            $pathArquivo = $path . $arqs;

            $extensaoArquivo = explode(".", $arqs);
            if (end($extensaoArquivo) == 'txt') {
                $abre = fopen($pathArquivo, "r");

                $le = fread($abre, filesize($pathArquivo));

                $dado = explode("|", $le);

                $nome = $dado['0'];
                $cpf = $dado['1'];
                $email = $dado['2'];
                $senha = $dado['3'];
                $sexo = $dado['4'];

                echo "Usuário: <b>$nome</b><br>";
                echo "nome: $nome <br>";
                echo "cpf: $cpf <br>";
                echo "e-mail: $email <br><br>";
                echo "senha: $senha <br><br>";
                echo "sexo: $sexo <br><br>";
            }
        }






        closedir($abredir);
        ?>
    </body>
</html>
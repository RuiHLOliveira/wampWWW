<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function validaCPF($cpf = null) {

            // Verifica se um número foi informado
            if (empty($cpf)) {
                return false;
            }

            // Elimina possivel mascara
            $cpf = ereg_replace('[^0-9]', '', $cpf);
            $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

            // Verifica se o numero de digitos informados é igual a 11 
            if (strlen($cpf) != 11) {
                return false;
            }
            // Verifica se nenhuma das sequências invalidas abaixo 
            // foi digitada. Caso afirmativo, retorna falso
            else if ($cpf == '00000000000' ||
                    $cpf == '11111111111' ||
                    $cpf == '22222222222' ||
                    $cpf == '33333333333' ||
                    $cpf == '44444444444' ||
                    $cpf == '55555555555' ||
                    $cpf == '66666666666' ||
                    $cpf == '77777777777' ||
                    $cpf == '88888888888' ||
                    $cpf == '99999999999') {
                return false;
                // Calcula os digitos verificadores para verificar se o
                // CPF é válido
            } else {

                for ($t = 9; $t < 11; $t++) {

                    for ($d = 0, $c = 0; $c < $t; $c++) {
                        $d += $cpf{$c} * (($t + 1) - $c);
                    }
                    $d = ((10 * $d) % 11) % 10;
                    if ($cpf{$c} != $d) {
                        return false;
                    }
                }

                return true;
            }
        }

        function validaEmail($email) {
            $conta = "^[a-zA-Z0-9\._-]+@";
            $domino = "[a-zA-Z0-9\._-]+.";
            $extensao = "([a-zA-Z]{2,4})$";
            $pattern = $conta . $domino . $extensao;
            if (ereg($pattern, $email))
                return true;
            else
                return false;
        }

        function validaSenha($senha) {
            $uppercase = preg_match('@[A-Z]@', $senha);
            $lowercase = preg_match('@[a-z]@', $senha);
            $number = preg_match('@[0-9]@', $senha);

            if (!$uppercase || !$lowercase || !$number || strlen($senha) < 6) {
                return false;
            }
            return true;
        }

        if ($_POST) {
            extract($_POST);
// Verifica se todos os campos foram preenchidos
            if (!$nome || !$email || !$cpf || !$senha || !$sexo || !$confirmarSenha) {
                echo "Preencha todos os campos";
                exit;
            } else {
                if (validaCPF($cpf) == FALSE) {
                    echo "CPF no formato errado";
                } else {
                    if (validaEmail($email) == FALSE) {
                        echo "Email no formato errado";
                    } else {
                        if ($senha != $confirmarSenha) {
                            echo "O campo confirmar senha deve ser igual ao campo senha!";
                        } else {
                            if (validaSenha($senha) == FALSE) {
                                echo "Sua senha deve ter no mínimo 6 caracteres e possuir letras maiusculas e minusculas";
                            } else {



// Verifica se um usuário com o mesmo nome ja foi cadastrado
                                if (!file_exists("usuarios/" . $nome . ".txt")) {
// Criamos o arquivo do usuário com w+
                                    $cria = fopen("usuarios/" . $nome . ".txt", "w+");
## Aqui iremos declarar as informações do usuário
## São separadas por | para depois podermos recupera-las com explode
                                    $dados.="$nome|";
                                    $dados.="$cpf|";
                                    $dados.="$email|";
                                    $dados.="$senha|";
                                    $dados.="$sexo";
// Agora escrevemos estes dados no arquivo
                                    $escreve = fwrite($cria, $dados);
// Fechando o arquivo
                                    fclose($cria);
// Exibe a mensagem de usuário cadastrado
                                    echo "Usuário cadastrado com sucesso!";
                                    ?>
                                    <a href="index.php">Página de Login</a>
                                    <?Php
                                } else {
// Se ja houver um usuário cadastrado com o mesmo nome
                                    echo "Um usuário chamado $nome ja foi cadastrado";
                                }
                            }
                        }
                    }
                }
            }
        }
        ?>
    </body>
</html>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/ofertas.css">
        <title> Login de Usuário </title>
    </head>
    <body>
        <?php
        $pagina = $_GET['pagina'];
        $login_cookie = $_COOKIE['login'];

        if (!$pagina) {
            $pc = "1";
        } else {
            $pc = $pagina;
        }

        $inicio = $pc - 1;
        $inicio = $inicio * $total_reg;





        $ofertas = [0 => "Celular", 1 => "Camisa", 2 => "Carro", 3 => "Casa", 4 => "Computador", 5 => "Celular", 6 => "Camisa", 7 => "Carro", 8 => "Casa", 9 => "Computador", 10 => "Celular", 11 => "Camisa", 12 => "Carro", 13 => "Casa", 14 => "Computador", 15 => "Celular", 16 => "Camisa", 17 => "Carro", 18 => "Casa", 19 => "Computador", 20 => "Celular", 21 => "Camisa", 22 => "Carro", 23 => "Casa", 24 => "Computador", 25 => "Celular", 26 => "Camisa", 27 => "Carro", 28 => "Casa", 29 => "Computador"];


        $totalOfertas = count($ofertas);
        $ofertasPorPagina = 10;
        $numeroDePaginas = $totalOfertas / $ofertasPorPagina;
        ?>
        <div>
            <?php
            while ($inicio < $ofertasPorPagina) {
                ?>
                <h2> <?php echo"$ofertas[$inicio]"; ?> </h2>


                <?php
                if (isset($login_cookie)) {
                    ?>
                    <p> "Olá <?php echo "$login_cookie" ?> , abaixo vc pode ver mais informações!"</p>
                    <p> "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque";</p><br>
                        <?php
                    } else {
                        ?>
                    <p> "para exibir mais informações, faça o login!";</p>
                        <a href='index.php'>Aqui!</a>
                        <?php
                    }
                    $inicio++;
                }

                $anterior = $pc - 1;
                $proximo = $pc + 1;
                if ($pc > 1) {
                    echo " <a href='?pagina=$anterior'><- Anterior</a> ";
                } echo "|";
                if ($pc < $numeroDePaginas) {
                    echo " <a href='?pagina=$proximo'>Próxima -></a>";
                }
                ?>
        </div>



    </body>
</html>

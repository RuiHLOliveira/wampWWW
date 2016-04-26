<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/login.css">
        <title> Login de Usuário </title>
    </head>
    <body>
        <section class="container">
            <div class="login">
                <h1>Login no Site de Trocas</h1>
                <form method="POST" action="login.php" class="">
                    <p><input type="text" name="nome" id="nome" placeholder="Nome para login"></p>
                    <p><input type="password" name="senha" id="senha" placeholder="Senha"></p>
                    <p class="submit"><input type="submit" value="entrar" id="entrar" name="entrar"></p>
                    <a href="cadastro.php">Cadastre-se</a><br>
                    <a href="ofertas.php">Entrar sem se cadastrar</a>
                </form>
            </div>
        </section>
    </body>
</html>



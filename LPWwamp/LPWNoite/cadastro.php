<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastre-se - Site para troca de produtos!</title>
        <link type="text/css" rel="stylesheet" href="css/cadastro.css">
    </head>
    <body>

        <form method="POST" action="gravar.php">

            <div>
                <div>
                    <fieldset class= "fieldSet">
                        <h2 class="titulo">cadastro grátis</h2>
                        <div>
                            <label class="label">nome completo</label>
                            <input maxlength="200" type="text" name="nome" id="nome_completo" value="">
                        </div>
                        <div>
                            <label class="label">email</label>
                            <input maxlength="100" type="text" name="email" id="email" value="">              
                        </div>
                        <div>
                            <label class="label">CPF</label>
                            <input maxlength="100" type="text" name="cpf" id="cpf" value="">              
                        </div>
                        <div>
                            <label class="label">senha</label>
                            <input maxlength="15" type="password" autocomplete="off" name="senha" id="txtSenha">
                        </div>
                        <div>
                            <label class="label">confirmar senha</label>
                            <input maxlength="15" type="password" autocomplete="off" name="confirmarSenha" id="txtSenha">
                        </div>
                        <div>
                            <label class="label">sexo</label>
                            <div>
                                <div>
                                    <div>
                                        <input type="radio" name="sexo" id="masculino" value="MASCULINO">
                                        <label>Masculino</label>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <input type="radio" name="sexo" id="feminino" value="FEMININO">
                                        <label>Feminino</label>
                                    </div>
                                </div>
                            </div>
                        </div>              

                        <div>
                            <input type="submit" id="cadastrar" value="cadastrar" class="btn primary">
                        </div>


                    </fieldset>
                </div>




            </div>
        </form>





    </body>
</html>



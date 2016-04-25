<!DOCTYPE html>
<?php
//Autor: Rui Henrique Leite de Oliveira
//Definição: Calcula e exibe o valor do plano de saúde.
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Rui Henrique Leite de Oliveira">
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <title>Programa X</title>
    </head>
    <body>
        <form action="calcula.php" method="post" id="form">
            Nome Completo:
            <input type="text" name="nome" size="30" maxlength="30"
                   placeholder="Nome Completo" required> <br>
            <select name="faixaEtaria" required>
                <option value="1">20 ou menos</option>
                <option value="2">21 à 30</option>
                <option value="3">31 à 40</option>
                <option value="4">41 à 50</option>
                <option value="5">51 à 60</option>
                <option value="6">66 ou mais</option>
            </select><br>
            Você é portador de doença previamente identificada?<br>
            <input type="radio" name="doencaPreviamenteIdentificada"
                   value="1">Sim<br>
            <input type="radio" name="doencaPreviamenteIdentificada"
                   value="2">Não<br>
            <input type="submit" value="Enviar e calcular">
            <input type="reset" value="Apagar tudo">
        </form>
    </body>
</html>

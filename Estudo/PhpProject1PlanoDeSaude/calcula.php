<?php
//Autor: Rui Henrique Leite de Oliveira
//Definição: Calcula e exibe o valor do plano de saúde.
$nome = $_POST['nome'];
$faixaEtaria = $_POST['faixaEtaria'];
$doencaPreviamenteIdentificada = $_POST['doencaPreviamenteIdentificada'];
$valorFinal;
$seguroValor = array();
$seguroValor[0]=200;
for($i = 1; $i < 6  ; $i++) {
    $seguroValor[$i] = $seguroValor[$i-1] + ($seguroValor[$i-1] /2);
    echo $seguroValor[$i]."<br>";
}
$valorFinal = $seguroValor[$faixaEtaria-1];
if($doencaPreviamenteIdentificada == 1) {
    $valorFinal = $valorFinal + ($valorFinal/100)*30;
}
echo ("<br>".$nome.",<br>o valor calculado do seu seguro é de:"
        .$valorFinal." reais.");
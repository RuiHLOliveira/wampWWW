<?php
	$nome     =   $_POST['nome']; //pega os dados que foi digitado no ID name.
	$faixaetaria   =   $_POST['faixaetaria']; //pega os dados que foi digitado no ID email.
	$doencaprevia  =   $_POST['doencaprevia']; //pega os dados que foi digitado no ID sebject.
	$valorfinal;
	$segurovalor = array();
	$segurovalor[0]=200;
	for($i=1;$i<5;$i++)
	{
		$segurovalor[$i]=$segurovalor[$i-1] + ($segurovalor[$i-1]/2);
		echo $faixaetaria;
	}
	
	/*
	$corpo = "Formulário enviado\n";
	$corpo .= "Nome: " . $name . "\n";
	$corpo .= "Email: " . $email . "\n";
	$corpo .= "Mensagem: " . $message . "\n" */
	if($faixaetaria ==2) //altera o valor para classe2
	{
		$valorfinal = $segurovalor[1];
	} elseif ($faixaetaria ==3) //altera o valor para classe3
	{
		$valorfinal = $segurovalor[2];
	} elseif ($faixaetaria ==4) //altera o valor para classe4
	{
		$valorfinal = $segurovalor[3];
	} elseif ($faixaetaria ==5) //altera o valor para classe5
	{
		$valorfinal = $segurovalor[4];
	} elseif ($faixaetaria ==6) //altera o valor para classe6
	{
		$valorfinal = $segurovalor[5];
	} else
	{
		$valorfinal = $segurovalor[0];
		echo strcmp($faixaetaria,"classe1");
	}
	
	if ($doencaprevia == 1) //altera o valor para doença previamente identificada
	{
		$valorfinal = $valorfinal + (($valorfinal/100)*30);
	}
	
	echo ("<br />$nome, <br /> o valor calculado do seu seguro é de: <br /> $valorfinal reais. ");
 

?>
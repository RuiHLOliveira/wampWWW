<meta charset="UTF-8">
<?php 
	include 'biblioteca_verificacao.php';
	
	$email;
	$senha;
	$senha2;
	$nome;
	$telefone;
	$cep;

	$email = htmlentities($_POST["email"]);
	$senha = htmlentities($_POST["senha"]);
	$senha2 = htmlentities($_POST["senha2"]);
	$nome = htmlentities($_POST["nome"]);
	$telefone = htmlentities($_POST["telefone"]);
	$cep = htmlentities($_POST["cep"]);
	
	#verifica comprimento da senha
	if( strlen($senha) < 6 )
	{
		$erro_formulario = "Erro: Senha contém menos de 6 caracteres.";
		exibe_erro($erro_formulario);
	}
	echo "senha tamanho ok <br />";
	#verifica se as senhas são iguais
	if(0==strcmp($senha,$senha2))
	{
		echo "senha igual ok <br />";
		#verifica se caracteres são válidos
		if(!verifica_caracter_senha($senha))
		{
			$erro_formulario = "Erro: Senha possui caracteres inválidos.";
			exibe_erro($erro_formulario);
		}
		echo "senha caractere ok <br />";
	}
	else
	{
		$erro_formulario = "Erro: Senha e senha de confirmação não são iguais.";
		exibe_erro($erro_formulario);
	}
	
	#verifica telefone
	if( !telefone_e_valido ($telefone) )
	{
		$erro_formulario = "Erro: Telefone contém caracteres inválidos.";
		exibe_erro($erro_formulario);
	}
	echo "telefone caractere ok <br />";
	#verifica cep
	if(strlen($cep) < 8)
	{
		$erro_formulario = "Erro: Cep contém menos de 8 caracteres.";
		exibe_erro($erro_formulario);
	}
	echo "cep tamanho ok <br />";
	if( !cep_e_valido ($cep) )
	{
		$erro_formulario = "Erro: Cep contém caracteres inválidos.";
		exibe_erro($erro_formulario);
	}
	echo "cep caractere ok <br />";
	

	$myfile = fopen("usuarios.txt", "r") or die("Unable to open file!");
	while(!feof($myfile))
	{
		$nome_arquivo = fgets($myfile);
		if( -1 == strcmp($nome,$nome_arquivo))
		{
			echo "ta repetido";
		}
		echo ".".$nome_arquivo.".". "<br>";
	}
	fclose($myfile);

	
?>
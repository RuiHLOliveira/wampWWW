<?php
##################################################################
	function exibe_erro ($erro_formulario)
	{
		setcookie("erro_formulario",$erro_formulario, time()+3);
		header("Location: login.php");
	}
##################################################################
	function senha_e_valida ($character)
	{
		#for para A-Z
		for($i = 65; $i < 91; $i++)
		{
			if( 0 == strcmp($character,chr($i)))
			{
				#echo $character . " e maiuscula <br />";
				return true;
			}
		}
		
		#for para a-z
		for($i = 97; $i < 123; $i++)
		{
			if( 0 == strcmp($character,chr($i)))
			{
				#echo $character . " e minuscula <br />";
				return true;
			}
		}
		
		#for para 1-9
		for($i = 0; $i < 10; $i++)
		{
			
			if( $character == "$i")
			{
				#echo $character . " e numero <br />";
				return true;
			}
		}
		return false;
	}
##################################################################
	function verifica_caracter_senha ($senha)
	{
		$chars_contados = count_chars($senha,3);
		
		for( $j=0; $j<strlen($chars_contados); $j++ )
		{
			if( !( senha_e_valida($chars_contados[$j]) ) )
			{
				#echo $chars_contados[$j] . " não é valido <br />";
				return false;
			}
			else
			{
				#echo $chars_contados[$j] . " é válido <br />";
			}
		}
		return true;
	}	
##################################################################
	function verifica_caracter_telefone ($character)
	{
		#for para 1-9
		for($i = 0; $i < 10; $i++)
		{
			
			if( $character == "$i")
			{
				#echo $character . " e numero <br />";
				return true;
			}
		}
		#para símbolos
		if( (0 == strcmp($character,chr(32))) ||
		(0 == strcmp($character,chr(45))) )
		{
			#echo "simbolo $character";
			return true;
		}
		return false;
	}
##################################################################
	function telefone_e_valido ($telefone)
	{
		for( $j=0; $j<strlen($telefone); $j++ )
		{
			if( !( verifica_caracter_telefone($telefone[$j]) ) )
			{
				#echo $telefone[$j] . " não é valido <br />";
				return false;
			}
			else
			{
				#echo $telefone[$j] . " é válido <br />";
			}
		}
		return true;
	}
##################################################################
function verifica_caracter_cep ($character)
{
	#for para 1-9
	for($i = 0; $i < 10; $i++)
	{
		
		if( $character == "$i")
		{
			#echo $character . " e numero <br />";
			return true;
		}
	}
	return false;
}
##################################################################
	function cep_e_valido ($cep)
	{
		for( $j=0; $j<strlen($cep); $j++ )
		{
			if( !( verifica_caracter_cep($cep[$j]) ) )
			{
				#echo $cep[$j] . " não é valido <br />";
				return false;
			}
			else
			{
				#echo $cep[$j] . " é válido <br />";
			}
		}
		return true;
	}
?>
<!DOCTYPE html>
<!--
Estado do projeto:
funcionalidades realizadas/total: 12/21.
Página inicial: ok
Produtos: ok
|     |Funcionalidade de páginas: ausente
---
Cabeçalho: ok
Cabeçalho modularizado: ok
|     |Rodapé: ausente
|     |Rodapé modularizado: ausente
---
Formulario Login: ok
Formulario registro: ok
---
|     |Funcionalidade login: ausente
|     |Funcionalidade registro: ausente
|     |Funcionalidade de confirmação de email: ausente
---
NO LOGIN
verificar email: ok
|     |verificar senha: ausente
NO REGISTRO
verificar senha e confirmaçao de senha no registro: ok
verificar se senha contem somente caracteres permitidos: ok
verificar se senha tem ao menos 6 caracteres: ok
verificar se telefone contem somente caracteres permitidos: ok
verificar se cep contem somente caracteres permitidos: ok
enviar mensagem de erro correspondente: ok
|     |guardar usuario sem confirmaçao: ausente
|     |confirmar email e permitir login: ausente


-->
<?php 

	/* declarar os arrays de produtos */
	#produto
	#$array_caminho_anuncio[] = "";
	#$array_texto_alt_anuncio[] = "";
	#$array_titulo_anuncio[] = "";
	
	#produto 1
	$array_caminho_anuncio = array("img/produtos/xboxone.png");
	$array_texto_alt_anuncio = array("XBox One");
	$array_titulo_anuncio = array("Console Xbox One 500 GB de Memória, Controle Sem Fio, Kinect, Headset");
	
	#produto 2
	$array_caminho_anuncio[] = "img/produtos/ax860.png";
	$array_texto_alt_anuncio[] = "Fonte Corsair";
	$array_titulo_anuncio[] = "Fonte Modular 860W Ax860 Cp-9020044-Na Corsair";
	
	#produto 3
	$array_caminho_anuncio[] = "img/produtos/motog2.png";
	$array_texto_alt_anuncio[] = "Moto G 2ª Geração";
	$array_titulo_anuncio[] = "Smartphone Moto G 2 Colors XT1068 Preto 8GB, Câmera 8MP, e Capa Extra";
	
	#produto 4
	$array_caminho_anuncio[] = "img/produtos/sansunghd.png";
	$array_texto_alt_anuncio[] = "HD Externo Sansung M3";
	$array_titulo_anuncio[] = "HD Externo Portátil Samsung M3 1TB STSHX-M101TCB, Preto";
	
	#produto 4
	$array_caminho_anuncio[] = "img/produtos/sandisksd.png";
	$array_texto_alt_anuncio[] = "MicroSD Sandisk";
	$array_titulo_anuncio[] = "Cartão de Memória SanDisk Ultra Micro SDHC UHS-I Classe 10 para Android + 1 Adaptador - 16GB";
	
	/* Esta função recebe as informações e cria um bloco de anuncio */
	function anuncio ($caminho_anuncio, $titulo_anuncio, $texto_alt_anuncio)
	{
		echo "
		<div class='produto_teste'>
			<div class='imagem_teste'>
				<img src= $caminho_anuncio alt= $texto_alt_anuncio class='imagem_teste'>
			</div>
			<div class='texto_teste'>
				$titulo_anuncio
			</div>
		</div>
		";
	}
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Trocas ecologicas">
	<meta name="description" content="Dash's Official Page">
	<meta name="keywords" content="eco, escambo, rui">
	<meta name="author" content="Rui Henrique Leite de Oliveira">
	<meta name="robots" content="index, follow">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>EcoEscambo Rui</title>
</head>
<body>
	
	<div class="meio_do_site"> <!-- meio do site -->
		
		<?php include 'cabecalho.html';?>
		<div class="principal"> <!-- corpo do site -->
		
			<?php 
				for($i=0; $i<sizeof($array_caminho_anuncio); $i++)
				{
					anuncio($array_caminho_anuncio[$i], $array_titulo_anuncio[$i], $array_texto_alt_anuncio[$i]);
				}				
			?>
			
		</div>
		
	</div>
	
</body>
</html>
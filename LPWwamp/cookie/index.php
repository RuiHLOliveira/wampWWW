<!DOCTYPE html>


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
	<?php 
		$qtd_vezes = 0;
		if(!isset($_COOKIE['cookiedorui']))
		{
			$_COOKIE['cookiedorui'] = 0;
		}
		setcookie("cookiedorui",$_COOKIE['cookiedorui']+1, time()+10);
	?>
	Você visitou o site <?php echo $_COOKIE['cookiedorui']; ?>
	
</body>
</html>
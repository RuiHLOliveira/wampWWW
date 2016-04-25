<!DOCTYPE html>
<?php 
	function exibe_erro ()
	{
		if(isset($_COOKIE['erro_formulario']))
		{
			echo $_COOKIE['erro_formulario'];
		}
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
		
			<!-- Box de login -->
			<div class="form_box">
				Já se cadastrou? Entre aqui!
				<form action="" method="post">
					<div class="form_text">
						E-mail:<br />Senha:
					</div>
					<div class="form_field">
						<input type="email" name="email" required><br />
						<input type="password" name="senha" required><br />
					</div>
					<br />
					<input type="submit">
				</form>
			</div>
			
			<!-- Box de registro -->
			<div class="form_box">
				Cadastre-se aqui!
				<form action="doregister.php" method="post">
					<div class="form_text">
						Informe um e-mail válido:<br />
						Senha para login neste site (min 6 dígitos):<br />
						Por favor, repita a senha:<br />
						Informe seu nome:<br />
						Agora informe seu telefone (somente números, espaço e hífen):<br />
						Para finalizar, CEP (8 dígitos):<br />
					</div>
					<div class="form_field">
						<input type="email" name="email" required><br />
						<input type="password" name="senha" required><br />
						<input type="password" name="senha2" required><br />
						<input type="text" name="nome" required><br />
						<input type="text" name="telefone" required><br />
						<input type="text" name="cep" required><br />
					</div>
					<br /><br /><br /><br /><br /><br /><br />
					<input type="submit">
					<?php exibe_erro(); ?>
				</form>
			</div>
			
		</div>
		
	</div>
	
</body>
</html>
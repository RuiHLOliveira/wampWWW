<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Rui Henrique Leite de Oliveira">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Primeira pág php</title>
</head>
<body>

	<form action="calcula.php" method="post" id="form">

		Nome Completo: <input type="text" name="nome" size="30" maxlenght="30" required placeholder="Nome Completo"><br />
		Faixa Etária: 
		<select name="faixaetaria" required>
			<option value="1">20 ou menos</option>
			<option value="2">21 à 30</option>
			<option value="3">31 à 40</option>
			<option value="4">41 à 50</option>
			<option value="5">51 à 65</option>
			<option value="6">66 ou mais</option>
		</select>
		<br />
		Você é portador de doença previamente identificada?<br />
		<input type="radio" name="doencaprevia" value="1">Sim<br>
		<input type="radio" name="doencaprevia" value="2">Não<br>
	
	<input type="submit" value="Enviar">
	<input type="reset" value="Apagar">		

	</form>

</body>
</html>
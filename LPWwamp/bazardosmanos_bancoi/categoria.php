<?php
	session_start();
	if(!isset($_SESSION["nome"]))
	{
		header("Location: inicio.php");
	}
	else
	{
		include("boasvindas_autenticacao.php");
	}
	
	#cria conexão
	$pdo = new PDO('mysql:host=localhost;dbname=bazar;
	charset=utf8mb4', 'root', '');
	
	#cria a query
	$statement = $pdo->query
	("select cod_categoria, descricao from categoria");
	
	#cria o vetor
	$categoria = $statement->fetchAll();
	
?>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Bazar Tem Tudo</title>
</head>
<body>

	<?php require_once("cabecalho.inc"); ?>

	<div id="corpo">
		<div>
			<?php exibe_usuario ($saudacao); ?>
		</div>
		<div>
			<table border="1">
				<thead>
					<tr>
						<th>Código</th>
						<th>Descrição</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="2"><a href="form_categoria.php">Nova Categoria</a></td>
					</tr>
					<?php
					foreach($categoria as $categoria){
						echo "<td>".$categoria["cod_categoria"]."</td>
						<td>".$categoria["descricao"]."</td></tr>";
					}
					?>
				</tbody>
			</table>
		</div>
	</div>

	<?php require_once("rodape.inc"); ?>

</body>
</html>
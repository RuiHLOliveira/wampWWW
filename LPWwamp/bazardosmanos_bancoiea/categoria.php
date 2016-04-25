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
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="3"><a href="form_categoria.php">Nova Categoria</a></td>
					</tr>
					<?php
					foreach($categoria as $categoria){
						echo "
						<tr>
							<td>".$categoria["cod_categoria"]."</td>
							<td>".$categoria["descricao"]."</td>
							<td>
							<form action='excluir_categoria.php' method='post'>
								<input type='hidden' name='cod' value=" . $categoria["cod_categoria"] . ">
								<input type='hidden' name='descricao' value=" . $categoria["descricao"] . ">
								<button type='submit'>excluir</button>
							</form>
							<form action='form_alterar_categoria.php' method='get'>
								<input type='hidden' name='cod' value=" . $categoria["cod_categoria"] . ">
								<input type='hidden' name='descricao' value=" . $categoria["descricao"] . ">
								<button type='submit'>alterar</button>
							</form>
							</td>";
						echo "</tr>";					
					}
					?>
				</tbody>
			</table>
		</div>
	</div>

	<?php require_once("rodape.inc"); ?>

</body>
</html>
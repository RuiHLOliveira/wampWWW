<?php
	session_start();
	if( !isset( $_SESSION["usuario"] ) )
	{
		Header("location: inicio.php");
	}


	$pdo = new PDO('mysql:host=localhost;dbname=bazar;charset=utf8mb4', 'root', '');

	$statement = $pdo->query("SELECT cod_categoria,descricao FROM categoria");

	$categorias = $statement->fetchAll();

	if( isset( $_GET["sucesso"])) 
	{
		$exibirMsgSucesso = true;
	}

?>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Bazar Tem Tudo</title>
</head>
<body>

	<?php require_once("cabecalho.inc"); 

		if( isset( $_GET["sucesso"] ) ) 
		{		
	?>
	<div>
		<span><?php echo $_GET["sucesso"]; ?></span>
	</div>
	<?php 
		}		
	?>

	<div id="corpo">
		<table border="1">
			<thead>
				<tr>
					<th>Código</th>
					<th>Descrição</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach( $categorias as $categoria) {
				?>
				<tr>
					<td><?= $categoria["cod_categoria"] ?></td>
					<td><?= $categoria["descricao"] ?></td>
					<td>
						<form action="excluir_categoria.php" method="post">
						<input type="hidden" name="id" value="<?php echo $categoria["cod_categoria"]; ?>">
						<input type="hidden" name="descricao" value="<?php echo $categoria["descricao"]; ?>">
						<button type="submit">excluir</button>
						</form>

						<form action="form_altera_categoria.php" method="get">
							<input type="hidden" name="id" value="<?php echo $categoria["cod_categoria"]; ?>">
							<input type="hidden" name="descricao" value="<?php echo $categoria["descricao"]; ?>">
							<button type="submit">alterar</button></form>
					</td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
		<div>
			<a href="form_categoria.php">Nova categoria</a>
		</div>
	</div>

	<?php require_once("rodape.inc"); ?>

</body>
</html>

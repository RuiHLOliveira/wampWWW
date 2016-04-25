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
	
	#cria a lista de objetos categoria
	require("categoria.class.php");
	$i=0;
	foreach($categoria as $categoria){
		$listaCategoria[$i] = new Categoria($categoria["cod_categoria"],$categoria["descricao"]);
		$i++;
	}
	
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
			<?php exibe_usuario ($saudacao); 
			/*foreach($listaCategoria as $listaCategoria){
				echo "
				id: " . $listaCategoria->getCodCategoria() . "
				descricao: " . $listaCategoria->getDescricao() . "<br />";
			}*/
			?>
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
						<td colspan="3"><a href="form_nova_categoria.php">Nova Categoria</a></td>
					</tr>
					<?php
					foreach($listaCategoria as $listaCategoria){
						echo "
						<tr>
							
							<td>".$listaCategoria->getCodCategoria()."</td>
							<td>".$listaCategoria->getDescricao()."</td>
							<td>
							<form action='excluir_categoria.php' method='post'>
								<input type='hidden' name='cod' value=".$listaCategoria->getCodCategoria().">
								<input type='hidden' name='descricao' value=".$listaCategoria->getDescricao().">
								<button type='submit'>excluir</button>
							</form>
							<form action='form_alterar_categoria.php' method='get'>
								<input type='hidden' name='cod' value=".$listaCategoria->getCodCategoria().">
								<input type='hidden' name='descricao' value=".$listaCategoria->getDescricao().">
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
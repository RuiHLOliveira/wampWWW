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
	require_once("Categoria.class.php");
	$listaCategoria = Categoria::findAll();
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
<!DOCTYPE html>
<?php
	require_once("Raiz.php");
	require_once(Raiz . "/classes/Usuarioa.class.php");
	$listaUsuarioa = Usuarioa::buscaTodos();
	
?>

<html>
	<head>
		<meta charset="UTF-8" />
		<title>Página de exemplo de Banco PDO</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div>
			<?php
				foreach($listaUsuarioa as $Usuarioa){
					echo $Usuarioa->getId() . " - " .$Usuarioa->getNome();
					
					echo "<form action='alterar.form.php' method='post'>";
					echo "<input type='text' name='id' hidden value=" . $Usuarioa->getId() . ">";
					echo "<input type='text' name='nome' hidden value=" . $Usuarioa->getNome() . ">";
					echo "<input type='submit' value='Alterar!'></form>";
					
					echo "<form action='remover.php' method='post'>";
					echo "<input type='text' name='id' hidden value=" . $Usuarioa->getId() . ">";
					echo "<input type='submit' value='Excluir!'></form><br>";
				}			
			?>
		</div>
		<form action="inserir.form.php">
			<input type="submit" value="Inserir no banco">
		</form>
	</body>
</html>
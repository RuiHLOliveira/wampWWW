<!DOCTYPE html>
<?php
require("Professor.class.php");
$henrique = new Professor("1","Henrique");
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Rui Henrique Leite de Oliveira">
	<meta name="robots" content="index, follow">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>PHP OO 0.1</title>
</head>
<body>
	Este é o tesde de objeto php.
	Vamos ver as informações da pessoa:
	<?php
	echo "<br />Id: " . $henrique->getId();
	echo "<br />Nome: " . $henrique->getNome();
	?>
</body>
</html>
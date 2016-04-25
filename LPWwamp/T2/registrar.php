<?php
	session_start();
	require_once( "basedir.php");
	require_once(BASE_DIR . "/inc/funcoes_php.php");
?>
<html>
<head>
	<?php require_once(BASE_DIR . "/js/jsheader.inc") ?>
	<meta charset="UTF-8" />
	<title>Bazar Tem Tudo</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<script>

</script>

<?php
	require_once( BASE_DIR . "/inc/menu.inc");
	form_inscricao();
?>
</body>
</html>
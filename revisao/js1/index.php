<!DOCTYPE html>
<?php

?>
<html>
	<head>
		<title>Teste com Javascript</title>
		<meta charset="UTF-8">
		<script>
			function teste(){
				var paragrafo = document.querySelector('#demo');
				if(paragrafo.textContent.match('Tudo')){
					paragrafo.textContent = 'Olá Javascript!';
				}else{
					paragrafo.textContent = 'Tudo bem contigo?';
				}
			}
		</script>
	</head>
	<body>
	<p id="demo">Tudo bem?</p>
	<button type="button" onclick="teste()">Click me!</button><br>
	<a href="js2.php">Exemplo 2</a>
	</body>
<html>
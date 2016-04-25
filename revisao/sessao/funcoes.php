<?php
	function requisitaLogin(){
		echo "Bem vindo! Identifique-se!<br>";
		echo "<form action='login.php' method='post'>";
		echo "Nome de usuario: <input type='text' name='nome' required><br>";
		echo "Senha de acesso: <input type='password' name='senha' required><br>";
		echo "<input type='submit' value='Vamos lá!'></form>";
	}
	
	function mostraUsuario(){
		$nome = htmlentities($_SESSION["nome"]);
		echo "Bem vindo, $nome!<br>";
		echo "<form action='logoff.php' method='post'>";
		echo "<input type='submit' value='Sair!'></form>";
	}
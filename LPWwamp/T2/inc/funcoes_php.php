<?php function requisita_login ()
	{
		echo "Faça seu login!<br />
			<form action='login.php' method='post'>
				Email: <input type='email' name='email' maxlength='40' required>
				Senha: <input type='password' name='senha' maxlength='40' required>
				<input id='ButtonLogin' type='submit' value='Fazer Login!'>
			</form>
			<a href='registrar.php'>Registre-se!</a>";
		
	}
	
	function form_inscricao (){
		echo "Se inscreva Aqui!<br />
			<form action='register.php' method='post'>
				Email: <input type='email' name='email' maxlength='40' required><br>
				Senha: <input type='password' name='senha' maxlength='40' required><br>
				Nome: <input type='text' name='nome' maxlength='40' required><br>
				Telefone: <input type='text' name='telefone' maxlength='40' required><br>
				CEP: <input type='text' name='cep' maxlength='8' required><br>
				<input id='ButtonRegister' type='submit' value='Registrar!'>
			</form>";
	}
	
	function exibe_usuario ()
	{
		echo "Olá, user no [" . $_SESSION['id'] . "]: " . $_SESSION['nome'] . "<br />";
		echo "
			<form action='logoff.php' >
				<input type='submit' value='Logoff!'>
			</form>";
	}
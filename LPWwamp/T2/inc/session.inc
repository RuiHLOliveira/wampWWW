<!-- Div de Login e Logoff -->
	<div>
		<?php 
			if(!isset($_SESSION["nome"]))
			{
				//echo "não tem ninguem";
				requisita_login();
			}
			else
			{
				exibe_usuario ();
				#echo "tem gente";
			}
		?>
	</div>
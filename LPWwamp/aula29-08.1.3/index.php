<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Rui Henrique Leite de Oliveira">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Primeira pág php</title>
</head>
<body>

	<?php
		for ($a=1; $a<=100; $a++)
		{
			echo "$a";
			if(($a%3) == 0)
			{
				if(($a%5) == 0)
				{
					echo " <span class='sublinhado'>ploc</span><br />";
				}
				else echo " <span class='negrito'>ping</span><br />";
			}
			elseif (($a%5) == 0)
			{
				echo " <span class='italico'>pong</span><br />";
			}
			
			else
			{
				echo " <span>ok</span><br />";
			}
		}
	?>

</body>
</html>
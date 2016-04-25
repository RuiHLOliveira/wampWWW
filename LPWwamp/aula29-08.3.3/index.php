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
	#isset
	
		function NumeroPPP ($a)
		{
			if(($a%3) == 0)
			{
				if(($a%5) == 0)
				{
					return " <span class='sublinhado'>ploc</span><br />";
				}
				else return " <span class='negrito'>ping</span><br />";
			}
			elseif (($a%5) == 0)
			{
				return " <span class='italico'>pong</span><br />";
			}
			
			else
			{
				return " <span>ok</span><br />";
			}
		}
		
		###Principal
		if( isset($_GET["max"]))
			$max = htmlentities($_GET["max"]);
		else $max=100;
		for ($a=1; $a<=$max; $a++)
		{
			$b = NumeroPPP($a);
			echo "$a $b";
			#echo "$a" . NumeroPPP($a);
		}
	?>

</body>
</html>
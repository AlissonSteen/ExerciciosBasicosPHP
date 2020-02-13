<!DOCTYPE html>
<html>
<head>
	<title>Questão 16</title>
</head>
<body>
		<?php
			$num = $_GET["num"];
			$valor = 0;
			for ($i=0; $i <= 10; $i++) {
				$valor = $num*$i;
				echo "$num x $i = $valor<br>";
			}
		?>
</body>
</html>

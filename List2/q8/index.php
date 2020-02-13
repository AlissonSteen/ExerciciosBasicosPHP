<!DOCTYPE html>
<html>
<head>
	<title>Questão 8</title>
</head>
<body>
		<?php
			$numero = $_GET["total"];

			$soma = 0;
			for($i = 0; $i <= $numero; $i++){
				$soma+=$i;
				echo "$soma";
			}
		?>
</body>
</html>

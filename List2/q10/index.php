<!DOCTYPE html>
<html>
<head>
	<title>Questão 10</title>
</head>
<body>
	<?php
		$soma = 0;

		while($soma <= 1000){
			$num = rand(0,100);
			$soma+=$t;
			echo "Número sorteado = $num : Valor atual da soma = $soma<br>";
		};

		echo" Encerrado, número 1000 alcançado <br> com a soma final de ($soma) ";
	?>
</body>
</html>

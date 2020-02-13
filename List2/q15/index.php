<!DOCTYPE html>
<html>
<head>
	<title>Questão 15</title>
</head>
<body>
		<?php
			$colunas = $_GET["coluna"];
			$linhas = $_GET["linha"];
			echo "<table border='1'>";
			for ($i=0; $i < $linhas; $i++) {
				echo "<tr>";
				for ($j=0; $j < $colunas; $j++) {
					echo "<td>linha</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		?>
</body>
</html>

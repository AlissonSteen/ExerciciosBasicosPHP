<?php
  $n1 = $_GET["n1"];

  if (($n1 % 10 == 00) || ($n1 % 5 == 0) || ($n1 % 2 == 0)) {
    echo "É divisivel por 10, 5 e 2";
  }else{
    echo "Não é divisivel por nenhum";
  }

 ?>

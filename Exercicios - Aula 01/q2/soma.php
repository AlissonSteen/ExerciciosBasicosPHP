<?php
  $n1 = $_GET["n1"];
  $n2 = $_GET["n2"];
  $soma = $n1+$n2;

  if($soma > 20){
    $soma+=8;
    echo "O valor adicionado 8 é: $soma";
  }else if($soma <=20){
    $soma-=5;
    echo "O valor subtraido 5 é: $soma";
  }

 ?>

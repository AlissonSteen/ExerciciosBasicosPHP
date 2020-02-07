<?php
$nome = $_GET["nome"];
$idade = $_GET["idade"];
$sexo = $_GET["sexo"];

if($idade < 18 && $sexo == "feminino"){
  echo "Acesso negado";
}else{
  echo "Acesso permitido";
}
 ?>

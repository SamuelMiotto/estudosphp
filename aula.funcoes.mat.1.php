<?php

//$dataatual = date("d/m/Y H:i:s");
//$dataproxima = date('d/m/Y', strtotime("+2 days", 0));
//echo strtotime("+1 days", 0);
//echo $dataproxima;
//echo ceil(2.00001);
//echo rand(0, 1000);
$lista = array ("Samuel", "Rafael", "Silvia", "José", "Gabriel");

$sorteio = array("Samuel", "Rafael", "Silvia", "José", "Gabriel");

$resultado = rand(0, 4);

echo "O Sorteado é: ".$sorteio[$resultado];
?>
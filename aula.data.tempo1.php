<?php

$dataatual = date("d-M-Y \à\s H:i:s");

echo $dataatual;
echo "<br/>";

$proximaSemana = time() + (7*24*60*60);

echo 'Now: '.date('Y-m-d')."\n";
echo 'Next Week: '.date('Y-m-d', strtotime('+1 week'))."\n";
?>

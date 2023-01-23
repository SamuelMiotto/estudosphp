<?php
/* implode
$array = array("Silvia", "Helena", "Roberto de", "Lima", "Miotto");

$nomecompleto = implode(" ", $array);
echo $nomecompleto;
*/

/* função number_format
$exemplo = number_format(34989.12123, 3, ",", ".");
echo  $exemplo;
*/
/* str_replace

$texto = "O Gabriel foi pro céu!";
$string = str_replace("Gabriel", "Samuel", $texto);

echo $string;
*/

/* strtolower esta função transforma tudo em minusculo
echo strtolower("SAMUEL MIOTTO");
echo strtoupper("samuel miotto");
*/

/* função substr
$texto = "As crianças adoram doces";
$corte = substr($texto, 9, 15);
echo $corte;
*/

// ucfirst
$nome = "samuel";
echo ucfirst($nome);
echo "<br/>";
// ucwords
$nome = "samuel miotto";
echo  ucwords($nome);
?>
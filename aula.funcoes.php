<?php

$conta=0;
function somarNumero($x, $y) {
	$conta = $x + $y;

	//ou return $x + $y;
	echo $conta."<br/>";
	return $conta;
}
$resultado = somarNumero(100, 2000);
echo "Resultado irá ser igual: ".$resultado."<br/>";


function mostrarNome() {
	echo "Samuel";
	echo "<br/>";
	return "Miotto";
}
$nome = mostrarNome();
echo "Meu nome é: ".$nome;
?>

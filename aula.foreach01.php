<?php

$nomes = array(
	array("nome"=>"Samuel", "idade"=>32),
	array("nome"=>"Rafael", "idade"=>34),
	array("nome"=>"Silvia", "idade"=>45),
	array("nome"=>"Gabriel", "idade"=>17)
);

foreach($nomes as $aluno) {
	echo "Aluno: ".$aluno["nome"]. " - Idade: ".$aluno["idade"]."<br/>";
}
?>

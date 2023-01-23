<?php
$aluno = array(
	"nome" => "Samuel",
	"idade" => 32,
	"estado" => "MG",
	"pais" => "Brasil"
);

foreach($aluno as $chave => $dado) {
	echo $chave." = ".$dado."<br/>";
}

?>

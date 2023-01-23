<?php
$json = array(
	"codigo"=>"1",
	"cidade"=>"Ouro Fino",
	"uf"=>"MG",
	"baixa"=>19,
	"alta"=>29,
	"ico"=>10,
	"frase"=>"Calor com poucas nuvens",
	"data"=>"14/08/2022",
	"dia_mes"=>"Agosto",
	"dia_semana"=>"Domingo",
	"selecionado"=>1
);
$encodejson = json_encode($json);
echo $encodejson;
?>
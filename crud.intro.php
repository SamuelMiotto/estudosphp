<?php
require 'banco.2.php';
$banco = new Banco("localhost", "blog", "root", "");

//testando a query
/*$banco->query("SELECT * FROM posts");
$numero = $banco->numRows();
echo "Quantidade de Posts: ".$numero;*/

//testando selecionar
/*$banco->query("SELECT * FROM posts LIMIT 3");
if($banco->numRows() > 0) {
	foreach($banco->result() as $post) {
		echo "Titulo: ".$post['titulo']."<br/>";
		echo "Corpo: ".$post['corpo']."<br/>";
		echo "<hr/>";
	}
} else {
	echo "Não houve resultados!";
}*/

//testando o insert
/*$banco->insert("posts", array(
	"titulo" => 'Novo TITULO TESTE 3',
	"corpo" => 'Um novo texto apenas para teste'));
echo "<br/>";
echo "Inserido com sucesso!";*/

//testando o update
/*$banco->update("posts",
	array("titulo"=>"TITULO PARA TESTARMOS 2"),
 	array("id"=>"1", "id2"=>"2"),
 	"OR");*/

 //conferindo se o post foi atualizado
 //$banco->query("SELECT * FROM posts WHERE id='1'");
 //print_r($banco->result());

 //testando o delete
 /*$banco->delete("posts", array("id"=>"5", "id2"=>"1"), "OR");*/
//$banco->update("posts",array("titulo"=>"Primeiro titulo TESTE"), array("id"=>"1"));
?>
<?php
require 'usuarios.2.php';
$u = new Usuarios();

$u->excluir(21);
//testando o selecionar
/*$res = $u->selecionar(20);
print_r($res);*/

//testando o inserir
//$u->inserir("Bruno", "bruno@gmail.com", "teste1223456");

//testando o atualizar
//$u->atualizar("Bruno", "bruno@gmail.com", "teste123456", 20);

//testando o deletar
//$u->excluir(20);
?>
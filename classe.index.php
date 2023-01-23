<?php
require 'classe.usuario.1.php';
$usuario = new Usuario();
$usuario->setNome("Rafael");
$usuario->setEmail("rafael@gmail.com");
$usuario->setSenha("teste123456");
$usuario->salvar();




//$usuario->delete();
//echo "Usuário deletado com sucesso!";

?>
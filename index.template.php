<?php
require 'template.php';

$array = array(
	"titulo" => "Título da página",
	"nome" 	 => "Samuel",
	"idade"  => 33
);

$temp = new Template('template.phtml');
$temp->render($array);
?>
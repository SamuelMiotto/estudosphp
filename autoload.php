<?php
spl_autoload_register(function ($class){
	if(file_exists('classes/'.$class.'.class.php')) {
		require_once('classes/'.$class.'.class.php');
	}
});

$obj = new Bola();
$obj->setCor('Verde');
echo "A cor da bola é: ".$obj->getCor()."<br/><br/>";

$campo = new Campo();
$campo->set(20, 40, 60);

echo "Me dê a largura: ".$campo->getLargura();

?>
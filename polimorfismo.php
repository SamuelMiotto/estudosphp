<?php
class Animal {
	public function getNome() {
		echo "getNome da classe Animal";
	}

	public function testar() {
		echo "Testado!";
	}
}
class Cachorro extends Animal {

	public function getNome() {
		$this->testar();
	}
}
$animal = new Cachorro();
$animal->getNome();
?>
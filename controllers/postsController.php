<?php
class postsController extends controller {

	public function estruturamvc() {
		echo "Lista das postagens";
	}
	public function ver($nome, $sobrenome) {
		echo "Meu nome é: ".$nome." - ".$sobrenome;
	}
}
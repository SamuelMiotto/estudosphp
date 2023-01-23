<?php
class homeController extends controller {

	public function estruturamvc() {

		$fotos = new fotos();
		$dados['fotos'] = $fotos->getFotos();

		$this->loadTemplate('home', $dados);

		/*$usuario = new usuario();
		$usuario->setName('Samuel');

		$dados = array(
			'name' => $usuario->getName()
		);*/
	}
	public function sobre() {
		$dados = array();
		$this->loadTemplate('sobre', $dados);
	}
}
?>
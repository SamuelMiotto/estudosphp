<?php
class Post {
	private $titulo;
	private $data;
	private $corpo;
	private $comentarios;

	public function __construct($t, $c) {
		$this->setTitulo($t);
		$this->setCorpo($c);
	}

	public function getTitulo() {
		return $this->titulo;
	}

	public function setTitulo($t) {
		if (is_string($t)) {
			$this->titulo = $t;
		}
	}
	public function setCorpo($c) {
		$this->corpo = $c;
	}

}
$post = new Post("Título qualquer", "Corpo da minha primeira postagem");

echo "Titulo do post: ".$post->getTitulo();
?>
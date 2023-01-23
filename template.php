<?php
class Template {

	private $html;

	public function __construct($filename) {
		if(file_exists($filename)) {
			$this->html = file_get_contents($filename);
		}

	}
	public function render($array) {
		foreach($array as $chave => $valor) {
			$this->html = str_replace('{'.$chave.'}', $valor, $this->html);
		}
		echo $this->html;
	}
}

?>
<?php
class Facebook {

		public function createPosts() {
			return new Post();
		}
}
class Post {

	private $autor;
	private $message;

	public function setAuthor($authorName) {
		$this->author = $authorName;
	}
	public function getAuthor() {
		return $this->author;
	}
	public function setMessage($message) {
		$this->message = $message;
	}
	public function getMessage() {
		return $this->message;
	}
}
?>
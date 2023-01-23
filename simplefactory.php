<?php
require 'facebook.php';

$fb = new Facebook();

$post = $fb->createPosts();
$post->setAuthor("Samuel");
$post->setMessage("Uma mensagem utilizando simplefactory para teste");

echo "AUTOR: ".$post->getAuthor()." - ".$post->getMessage();
echo '<hr/>';

$post2 = $fb->createPosts();
$post2->setAuthor("Silvia");
$post2->setMessage("Uma segunda mensagem utilizando simplefactory para teste");

echo "AUTOR: ".$post2->getAuthor()." - ".$post2->getMessage();
<?php
$imagem = "arquivos/imagem.jpg";
$mini_imagem = "arquivos/mini_imagem.jpeg";

list($largura_original, $altura_original) = getimagesize($imagem);
list($largura_mini, $altura_mini) = getimagesize($mini_imagem);

$imagem_final = imagecreatetruecolor($largura_original, $altura_original);

$imagem_original = imagecreatefromjpeg("arquivos/imagem.jpg");
$imagem_mini = imagecreatefromjpeg("arquivos/mini_imagem.jpeg");

imagecopy($imagem_final, $imagem_original, 0, 0, 0, 0, $largura_original, $altura_original);
imagecopy($imagem_final, $imagem_mini, 110, 200, 0, 0, $largura_mini, $altura_mini);

//header("Content-Type: image/jpeg");
imagejpeg($imagem_final, "arquivos/imagem_marca_dagua.jpeg");
echo "Imagem criada com sucesso!";
?>
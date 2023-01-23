<?php
$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$novasenha = md5("teste123456");

	$sql = "UPDATE usuarios SET senha = '$novasenha' WHERE id = 1";
	$pdo->query($sql);

	echo "Usuário alterado com sucesso!";

} catch (PDOException $e) {
	echo "Falhou: ".$e->getMessage();
}

?>
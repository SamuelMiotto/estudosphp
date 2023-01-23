<?php
$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try {

	$pdo = new PDO($dsn, $dbuser, $dbpass);
	$sql = "SELECT * FROM usuarios";
	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0) {
		foreach($sql->fetchAll() as $usuario) {
			echo "Nome: ".$usuario["nome"]." - ".$usuario["email"]."<br/>";
		}
	} else {
		echo "Não encontrou usuários!";
	}

} catch(PDOexception $e){
	echo "Falhou: ".$e->getMessage;
}
?>
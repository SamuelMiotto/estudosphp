<html>
<head>
	<title>Página Teste de Caches Avançados</title>
</head>
<body>
	<?php
	try {
		$pdo = new PDO("mysql:dbname=blog;host=localhost", "root", "");
		$sql = "SELECT * FROM posts ORDER BY RAND()";
		$sql = $pdo->query($sql);
		foreach($sql->fetchAll() as $post) {
			$cor = rand(0, 999999);
			$len = rand(0, 100);
			?>
			<div style="width=1000px;float:left;margin:20px;background-color:#<?php echo $cor ?>;padding:10px;">
				<strong><?php echo $post['titulo']; ?></strong><br/>
				<?php echo substr($post['corpo'], 0, $len); ?>
			</div>
			<?php
		}
	} catch(PDOException $e) {
		print_r($e->getMessage());
	}
	?>
</body>
<?php
if(isset($_POST['nome']) && !empty($_POST['nome'])) {

	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$msg = addslashes($_POST['msg']);

	$para = "samuel@gmail.com";
	$assunto = "Assunto para Contato";
	$corpo = "Nome: ".$nome." - Email: ".$email." - Mensagem: ".$msg;
	$cabecalho = "From: administrador@yesami.com.br"."\r\n"."Reply-To: ".$email."\r\n"."X-Mailer: PHP/".phpversion();

	mail($para, $assunto, $corpo, $cabecalho);

	echo "<h2>E-mail enviado com sucesso!</h2>";
	exit;
}
?>
<form method="POST">
	Nome:<br/>
	<input type="text" name="nome"><br/><br/>

	Email:<br/>
	<input type="email" name="email"><br/><br/>

	Mensagem:<br/>
	<textarea name="msg"></textarea><br/><br/>

	<input type="submit" value="Enviar">
</form>
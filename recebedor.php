<?php
if(isset($_POST['email']) && !empty($_POST['email'])) {

	$email = $_POST['email'];
	echo "O e-mail enviado é: ".$email;
}
?>
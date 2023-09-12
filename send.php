<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$tel=$_POST['tel'];
	$to="baranovscaya@yandex.ru";


	$subject= "Заявка с сайта";
	$massage = "
	Имя: ".htmlspecialchars($name). "<br>
	Почта:".htmlspecialchars($email)."<br>
	телефон:".htmlspecialchars($tel);
	$headers = "from: trening-ludix.com  <no-reply@mysyte.ru>\r\nContent-type:text/html; charset=utf-8 \r\n";
	mail($to, $subject, $massage, $headers);
	header('Location: thanks.php');
	exit;

?>
<?php

if (isset($_POST['g-recaptcha-response'])) {
	$secretkey = "6LfaNTwgAAAAAEwWVUz3QF727gKU2qnnh1sMDQA6";
	$ip = $_SERVER['REMOTE_ADDR'];
	$response = $_POST['g-recaptcha-response'];
	$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
	$fire = file_get_contents($url);
	$data = json_decode($fire);
	if ($data->success==true) {
		echo "Başarılı";
	}
	else{
		echo "Lütfen Doğrulama Yapınız";
	}
}



$adsoyad=$_POST['adsoyad'];
$email=$_POST['email'];
$konu=$_POST['konu'];
$mesaj=$_POST['mesaj'];

if (isset($_POST['mailgonder'])) {
	


	require_once("class.phpmailer.php");

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = "mail.meshaticaret.com";
	$mail->SMTPAuth = true;
	$mail->Username = "info@meshaticaret.com";
	$mail->Password = "123456789";
	$mail->From = "info@meshaticaret.com";
	$mail->Fromname = "$adsoyad";
	$mail->AddAddress("info@meshaticaret.com","Mail gönderimi");
	$mail->AddReplyTo("$email", "Reply to name");
	$mail->Subject = "$konu";
	$mail->Body = "$mesaj";
	$mail->CharSet='UTF-8';

	if($mail->Send())
	{
	   echo "gönderildi";
	}
	
	 else {
	 	echo $mail->ErrorInfo;
	}
}

?>

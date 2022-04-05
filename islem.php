<?php 

require_once 'Admin/islem/baglanti.php';

if (isset($_POST['login'])) {

	$kadi=htmlspecialchars($_POST['kadi']);
	$sifre=htmlspecialchars($_POST['sifre']);
	$sifreguclu=md5($sifre);


	$kullanicisor=$baglanti->prepare("SELECT * from kullanici where kullanici_adi=:kullanici_adi and kullanici_sifre=:kullanici_sifre
		and kullanici_yetki=:kullanici_yetki");
	$kullanicisor->execute(array(
	'kullanici_adi'=>$kadi,
	'kullanici_sifre'=>$sifreguclu,
	'kullanici_yetki'=>1


	));

	$var=$kullanicisor->rowCount();

	if ($var > 0) {
	$_SESSION['normalgiris']=$kadi;
	header("Location:index?durum=hosgeldin");
	}
	else
	{
		header("Location:giris?durum=hata");
	}

}









if (isset($_POST['register'])) {

	$kadi=htmlspecialchars($_POST['kadi']);
	$sifre=htmlspecialchars($_POST['sifre']);
	$sifreiki=htmlspecialchars($_POST['sifretekrar']);
	$email=htmlspecialchars($_POST['email']);
	$adsoyad=htmlspecialchars($_POST['adsoyad']);


	$kullanicisor=$baglanti->prepare("SELECT * from kullanici where kullanici_adi=:kullanici_adi and kullanici_yetki=:kullanici_yetki");
	$kullanicisor->execute(array(
	'kullanici_adi'=>$kadi,
	'kullanici_yetki'=>1
	#admin kullanıcıları dahil değil


	));

	$var=$kullanicisor->rowCount();
	#kullanıcı varmı yokmu

if ($var > 0) {
	#varsa burası
	header("Location:giris?durum=kullanicivar");
}
else{
	if ($sifre==$sifreiki) {
		#şifreler birbirine eşit mi

	if (strlen($sifre)>=8) {
		#eğer 8den büyükse işlem yap

	$kullanicikaydet = $baglanti->prepare("INSERT into kullanici SET


				kullanici_adi=:kullanici_adi,
				kullanici_sifre=:kullanici_sifre,
				kullanici_adsoyad=:kullanici_adsoyad,
				kullanici_yetki=:kullanici_yetki,
				kullanici_email=:kullanici_email

				");

				$insert = $kullanicikaydet->execute(array(

				'kullanici_adi'=>$kadi,
				'kullanici_sifre'=>$sifre,
				'kullanici_adsoyad'=>$adsoyad,
				'kullanici_yetki'=>1,
				'kullanici_email'=>$email

				));

				if ($insert) {

					header("Location:kullanici?durum=basarili");
				}
				else{
					header("Location:giris?durum=basarisiz");
				}
		
		}
		else{
			header("Location:giris?durum=sifreeksik");
		}
		}
		else{
			header("Location:giris?durum=sifrehata");
		}
}

}



?>


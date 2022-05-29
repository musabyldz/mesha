<?php 
session_start();
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
		Header("Location:index?durum=hosgeldin");
	}
	else
	{
		Header("Location:giris?durum=hata");
	}

}









if (isset($_POST['register'])) {

	$kadi=htmlspecialchars($_POST['kadi']);
	$sifre=htmlspecialchars($_POST['sifre']);
	$sifrem=md5($sifre);
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
				'kullanici_sifre'=>$sifrem,
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










if (isset($_POST['sepeteekle'])) {
	

$id=$_POST['urunid'];
$adet=$_POST['adet'];

setcookie('sepet['.$id.']', $adet, strtotime("+7day"));

Header("Location:sepet?durum=eklendi");

}





if (isset($_GET['sepetsil'])) {
	

$id=$_GET['id'];
$adet=$_GET['adet'];

setcookie('sepet['.$id.']', $adet, strtotime("-7day"));

Header("Location:sepet?durum=silindi");

}









if (isset($_POST['alisverisbitir'])) {
	
	$toplamfiyat=$_POST['toplamfiyat'];
	$kadi=$_POST['kadi'];


	foreach (@$_COOKIE['sepet'] as $key => $value) {
    
    $urunler=$baglanti->prepare("SELECT * FROM  urunler where urun_id=:urun_id  order by urun_sira ASC");
    $urunler->execute(array(
        'urun_id'=>$key

    ));
    $urunlercek=$urunler->fetch(PDO::FETCH_ASSOC);

    $fiyat=$urunlercek['urun_fiyat'];


	$alisveriskaydet = $baglanti->prepare("INSERT into siparisler SET


	kullanici_id=:kullanici_id,
	urun_id=:urun_id,
	urun_adet=:urun_adet,
	urun_fiyat=:urun_fiyat,
	toplam_fiyat=:toplam_fiyat,
	odeme_turu=:odeme_turu,
	siparis_onay=:siparis_onay


	");

	$insert = $alisveriskaydet->execute(array(

	'kullanici_id'=>$kadi,
	'urun_id'=>$key,
	'urun_adet'=>$value,
	'urun_fiyat'=>$fiyat,
	'toplam_fiyat'=>$toplamfiyat,
	'odeme_turu'=>$_POST['odeme'],
	'siparis_onay'=>0


	));

	}

	if ($insert) {

		header("Location:../index?durum=tesekkurler	");
	}
	else{
		header("Location:../index?durum=basarisiz");
	}
}





if (isset($_POST['aboneol'])) {

	$aboneol = $baglanti->prepare("INSERT into abone SET


		abone_email=:abone_email

		");

	$insert = $aboneol->execute(array(

	'abone_email'=>$_POST['abone']

	));

	if ($insert) {

		header("Location:index?yuklenme=basarili");
	}
	else{
		header("Location:index?yuklenme=basarisiz");
	}






}



?>


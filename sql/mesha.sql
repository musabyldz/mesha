-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 May 2022, 17:39:00
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mesha`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(11) NOT NULL,
  `baslik` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `anahtarKelime` varchar(400) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `youtube` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mesai` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `baslik`, `aciklama`, `anahtarKelime`, `telefon`, `email`, `adres`, `facebook`, `instagram`, `youtube`, `twitter`, `logo`, `mesai`) VALUES
(1, 'Mesha', '', '', '123456789', 'info@mesha.com', 'Türkiye', 'facebook.com/mesha', 'instagram.com/mesha', 'youtube.com/mesha', 'twitter.com/mesha', '5215188759391005037470a19a36904fe200610cc1f41eb00d9.jpg', '7/24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cokluresim`
--

CREATE TABLE `cokluresim` (
  `id` int(11) NOT NULL,
  `resim` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `urun_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `cokluresim`
--

INSERT INTO `cokluresim` (`id`, `resim`, `urun_id`) VALUES
(2, '889133344185595872626814992366710482157tisort.jpg', 9),
(3, '933349912240518699101248991249742013468992elbise-kadin.jpg', 9),
(4, '48710965964471293919781219032450951603272gozluk.jpg', 9),
(5, '71454347336217359907287256080424958418452.jpg', 9),
(6, '6340070977416103380638256149421224497090drone.jpg', 9),
(7, '34981594990901851399755506310_0.jpg', 15),
(8, '6545764292161648162016210361_Template_Product_Shot_32PA200E-0_def.png', 15),
(9, '476443176129913705361vestel-32fa9500-full-hd-32-82-ekran-uydu-alicili-android-smart-led-z.jpg', 15),
(10, '66510243606806383792beko-b50-b-880b-android-50126-cm-4k-ultra-hd-f-enerji-led-televizyon_43468.jpg', 15),
(11, '473434964573917454645ayakkabix-soguga-dayanikli-kaymayan-erkek-kislik-ayakkabi-kc7100081-5-3f4ed646a4ec46ea9f02c3101e63e292.jpg', 11),
(12, '24862759979236289853bagcikli-spor-ayakkabi_samoan-sun-sari_1_detay.jpg', 11),
(13, '133204611412613433675jump-26505-acik-gri-lacivert-neon-turuncu-erkek-spor-ayakkabi-sneaker-jump-126848-39-K.jpg', 11),
(14, '652378549590418756928jump-26505-beyaz-siyah-royal-mavi-sari-erkek-spor-ayakkabi-sneaker-jump-126850-39-K.jpg', 11),
(15, '23946101170934007543kadin-tasli-spor-ayakkabi-siyah-692a7f.jpg', 11),
(16, '26250989035679476846unisex-beyazsiyah-spor-ayakkabi-kc4505791-1-23cdce7653054126b8ea84100306229b.jpg', 11),
(17, '51881742566455474633EC2550-reebok-graphic-tisort-636989829000304779.jpg', 18),
(18, '664087814368989267381166_1.jpg', 18),
(19, '609995750931813125663images.jpg', 18),
(20, '568985194484518158463hmgoepprod.jpg', 18),
(21, '91671296204861182643mg-0157.jpg', 18),
(22, '305887778293318902979minimal-trio-tisort-erkek-tshirt-tasarla-on3.png', 18),
(23, '530223792484611600074scubapromo-scuba-diving-blue-baskili-tisort-8909_1.jpg', 18);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_misyon` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_vizyon` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_detay`, `hakkimizda_resim`, `hakkimizda_misyon`, `hakkimizda_vizyon`) VALUES
(1, 'Mesha', 'Meshaasf', '64273563972326639030meshalogo.png', 'Meshaasf', 'Mesha');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_resim` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_adi` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sira` int(11) NOT NULL,
  `kategori_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_resim`, `kategori_adi`, `kategori_sira`, `kategori_durum`) VALUES
(23, '', 'Elbisekadın', 1, 1),
(26, '', 'Televizyon', 6, 1),
(27, '', 'Ayakkabı', 12, 1),
(28, '', 'Çorap', 23, 1),
(29, '', 'Gömlek', 13, 1),
(30, '', 'Gözlük', 7, 1),
(31, '', 'Tişört', 17, 1),
(32, '', 'Pantolon', 28, 1),
(33, '3714694230510175630065726979822226566303sapka.jpg', 'Şapka', 25, 1),
(34, '', 'Atkı', 10, 1),
(35, '', 'Drone', 29, 1),
(36, '', 'Eşofman', 5, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_zaman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kullanici_adi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifre` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_email` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` int(2) NOT NULL,
  `kullanici_adres` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_il` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ilce` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tel` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_resim` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_adi`, `kullanici_sifre`, `kullanici_email`, `kullanici_adsoyad`, `kullanici_yetki`, `kullanici_adres`, `kullanici_il`, `kullanici_ilce`, `kullanici_tel`, `kullanici_resim`) VALUES
(1, '2022-04-01 22:57:00', 'mesha', '202cb962ac59075b964b07152d234b70', '', 'meshasitesi', 2, 'turkiye', 'istanbul', 'pendik', '05055915923', ''),
(4, '2022-04-05 11:34:05', 'meshaza', '81dc9bdb52d04dc20036dbd8313ed055', '', 'omer', 2, '', '', '', '', ''),
(8, '2022-04-05 11:34:03', 'omerdogu', 'e10adc3949ba59abbe56e057f20f883e', '', 'omer', 1, '', '', '', '', '31458465762054972676'),
(10, '2022-04-11 08:16:56', 'yigitzorlu', '827ccb0eea8a706c4c34a16891f84e7b', '', 'yigit zorlu', 1, '', '', '', '', '99414123521675695490'),
(18, '2022-05-08 13:32:49', 'harun', '12345678', 'harunyildiz@gmail.com', 'yildiz', 1, '', '', '', '', ''),
(19, '2022-05-17 13:05:44', 'kursat', '25f9e794323b453885f5181f1b624d0b', 'kursat@gmail.com', 'kursat ozdemir', 1, '', '', '', '', ''),
(20, '2022-05-15 23:38:41', 'necati', '25f9e794323b453885f5181f1b624d0b', 'necati@gmail.com', 'necati gozukcu', 1, 'istanbul', 'istanbul', 'kartal', '215245646', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_baslik` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `slider_aciklama` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `slider_link` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `slider_button` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `slider_resim` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` int(11) NOT NULL,
  `slider_durum` int(11) NOT NULL,
  `slider_banner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_baslik`, `slider_aciklama`, `slider_link`, `slider_button`, `slider_resim`, `slider_sira`, `slider_durum`, `slider_banner`) VALUES
(5, 'Telefon', 'hepsi bir', 'mesha.com', 'Git', '560607884486647261921.jpg', 1, 1, 1),
(6, 'Drone', 'Uçan drone', 'mesha.com', 'Git', '322971081440144369881_2.jpg', 2, 1, 0),
(7, 'Bilgisayar', 'Bilgisayar', 'mesha.com', 'Git', '360532184585244423132.jpg', 3, 1, 1),
(8, 'Kamera', 'Kamera', 'mesha.com', 'Git', '812298175385897594231_4.jpg', 4, 1, 0),
(9, 'Hayat', 'hayatın tadını cıkar', 'mesha.com', 'Git', '624175137281865863729.jpg', 5, 1, 1),
(10, 'alperen', 'alperen', 'https://www.instagram.com/musabyldz', 'Git', '1087069755046177777257.jpg', 4, 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `urun_resim` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `urun_baslik` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `urun_aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `urun_sira` int(11) NOT NULL,
  `urun_ozellik` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `urun_model` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_renk` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_adet` int(11) NOT NULL,
  `urun_fiyat` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `onecikan` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_durum` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_zaman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `urun_etiket` varchar(300) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `kategori_id`, `urun_resim`, `urun_baslik`, `urun_aciklama`, `urun_sira`, `urun_ozellik`, `urun_model`, `urun_renk`, `urun_adet`, `urun_fiyat`, `onecikan`, `urun_durum`, `urun_zaman`, `urun_etiket`) VALUES
(7, 30, '81219032450951603272gozluk.jpg', 'Güzel Gözlük', '<p>G&uuml;zel G&ouml;zl&uuml;k</p>\r\n', 10, '', '2020', 'Beyaz', 100, '200', '1', '1', '2022-04-24 14:36:52', 'Güzel Gözlük'),
(8, 34, '11185783265111917776atkı.jpg', 'Örme Atkı', '<p>&Ouml;rme Atkı</p>\r\n', 5, '', '2021', 'Gri', 50, '100', '1', '1', '2022-04-24 14:38:03', 'Örme Atkı'),
(9, 23, '248991249742013468992elbise-kadin.jpg', 'Siyah Elbise', '<p>Siyah Elbise</p>\r\n', 7, '', '2022', 'Siyah', 30, '350', '1', '1', '2022-04-24 14:39:12', 'Siyah Elbise'),
(10, 36, '49208356215814916302esofman.jpg', 'Erkek Siyah Eşofman', '<p>Erkek Siyah Eşofman</p>\r\n', 12, '', '2020', 'Siyah', 100, '150', '1', '1', '2022-04-24 14:39:41', 'Erkek Siyah Eşofman'),
(11, 27, '451128050999515594817ayakkabı.jpg', 'Beyaz Ayakkabı', '<p>Beyaz Ayakkabı</p>\r\n', 18, '', '2021', 'beyaz', 50, '400', '1', '1', '2022-04-24 14:40:34', 'Beyaz Ayakkabı'),
(12, 29, '3704928407013394884gomlek.jpeg', 'Güzel Gömlek', '<p>G&uuml;zel G&ouml;mlek</p>\r\n', 16, '', '2021', 'Yeşil', 70, '200', '1', '1', '2022-04-24 14:41:25', 'Güzel Gömlek'),
(13, 35, '8256149421224497090drone.jpg', 'Hızlı Drone', '<p>Hızlı Drone</p>\r\n', 19, '', '2022', 'Siyah', 25, '1100', '1', '1', '2022-04-24 14:42:03', 'Hızlı Drone'),
(14, 28, '416646933221169021corap.jpg', 'Renkli Çoraplar', '<p>Renkli &Ccedil;oraplar</p>\r\n', 4, '', '2021', 'Renkli', 20, '50', '1', '1', '2022-04-24 14:42:42', 'Renkli Çoraplar'),
(15, 26, '58315551287299487419televizyon.jpg', 'Televizyon', '<p>Televizyon</p>\r\n', 15, '', '2022', 'Siyah', 40, '2500', '1', '1', '2022-04-24 14:43:16', 'Televizyon'),
(16, 33, '65726979822226566303sapka.jpg', 'Siyah Şapka', '<p>Siyah Şapka</p>\r\n', 22, '', '2021', 'Siyah', 50, '100', '1', '1', '2022-04-24 14:43:38', 'Siyah Şapka'),
(17, 32, '61702122848267644991pantolon.jpeg', 'Pantolon', '<p>Pantolon</p>\r\n', 16, '50 inc', '2021', 'Siyah', 50, '200', '1', '1', '2022-05-08 14:00:05', 'Pantolon'),
(18, 31, '26814992366710482157tisort.jpg', 'Beyaz Tişört', '<p>Beyaz Tiş&ouml;rt</p>\r\n', 11, '', '2020', 'Beyaz', 30, '100', '1', '1', '2022-04-24 14:44:36', 'Beyaz Tişört'),
(19, 26, '287256080424958418452.jpg', 'Televizyon2', '<p>Televizyon2</p>\r\n', 5, '', '2021', 'Siyah', 100, '1400', '1', '1', '2022-04-24 14:56:56', 'Televizyon2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `yorum_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `yorum_zaman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `urun_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `yorum_onay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `yorum_detay`, `yorum_zaman`, `urun_id`, `kullanici_id`, `yorum_onay`) VALUES
(1, 'ürün hoşuma gitti teşekkür ederim', '2022-05-17 12:49:05', 19, 0, 1),
(2, 'çok güzel gözlük', '2022-05-17 12:52:33', 7, 20, 1),
(3, 'cok begendim bir tane daha sipariş vereceğim', '2022-05-17 12:50:31', 7, 20, 1),
(6, 'guzel elbise', '2022-05-17 12:58:02', 9, 20, 1),
(7, 'nasıl ya', '2022-05-17 13:05:17', 9, 20, 1),
(8, 'oha cok güzel elbise', '2022-05-17 13:06:36', 9, 19, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `cokluresim`
--
ALTER TABLE `cokluresim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `cokluresim`
--
ALTER TABLE `cokluresim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

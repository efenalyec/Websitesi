-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Haz 2024, 18:59:26
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mydb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kontrol`
--

CREATE TABLE `kontrol` (
  `id` int(11) NOT NULL,
  `isim` varchar(50) NOT NULL,
  `yorum` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL,
  `isim` varchar(50) NOT NULL,
  `yorum` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `isim`, `yorum`, `foto`, `email`) VALUES
(1, 'M. Yusuf Yavi', 'Bugün ilk kez İpek Piliç\'e gittim ve lezzetli tavukları ile gerçekten büyülendim! Servis inanılmaz hızlıydı ve çalışanlar çok güler yüzlüydü. Özellikle barbekü soslu kanatları denemenizi şiddetle tavsiye ederim. Tek kelimeyle mükemmel bir deneyimdi!', 'images/myusuf.jpg', 'yusufyavi@gmail.com'),
(2, 'Demir Oviç', 'İpek Piliç\'in tavukları gerçekten harika! Hem çıtır hem de çok lezzetliydi. Fiyatlar da oldukça makul. Ailecek gidilebilecek ve keyifli vakit geçirilebilecek harika bir yer. Tavukseverlere kesinlikle öneriyorum!', 'images/dmrfoto.jpg', 'dmrteam41@gmail.com'),
(3, 'Kubilay Nalyec', 'Lezzetli tavuk yemekleri, harika soslar ve samimi bir ortam arıyorsanız İpek Piliç\'i mutlaka denemelisiniz! Özellikle baharatlı tavukları çok beğendim. Fiyatlar da makul, kesinlikle tavsiye ediyorum!', 'images/kubifoto.jpg', 'ceylankubilay0@gmail.com'),
(4, 'Ufuk Bozkaya', 'İpek Piliç, tavuk sevenler için adeta bir cennet! Tavukları hem taze hem de çok lezzetliydi. Personelin güler yüzlü hizmeti ve hızlı servisi de bizi çok memnun etti. Mutlaka tekrar geleceğim!\"\r\n', 'images/23392723.svg', 'ufukbozkaya@gmail.com');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kontrol`
--
ALTER TABLE `kontrol`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kontrol`
--
ALTER TABLE `kontrol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

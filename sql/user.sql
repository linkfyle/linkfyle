-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 19 Haz 2022, 14:13:34
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `profile`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_pp` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `user_username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `user_lastname` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `user_password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `user_facebook` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `user_youtube` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `user_instagram` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `user_twitter` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `user_telegram` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `user_spotify` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `user_tiktok` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `user_linkedin` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `user_reddit` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`user_id`, `user_pp`, `user_username`, `user_name`, `user_lastname`, `user_password`, `user_facebook`, `user_youtube`, `user_instagram`, `user_twitter`, `user_telegram`, `user_spotify`, `user_tiktok`, `user_linkedin`, `user_reddit`) VALUES
(1, '2556556361993816.jpg', 'demo', 'Uğur', 'Mercan', 'fe01ce2a7fbac8fafaed7c982a04e229', 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.t.me/@keazon', 'https://open.spotify.com/user/q34hz9w6r3i1jhxrn5kxk0dyp', 'https://www.tiktok.com', 'https://www.linkedin.com/in/ugur-mercan/', 'https://www.reddit.com');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

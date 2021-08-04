-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Ápr 21. 12:26
-- Kiszolgáló verziója: 10.1.19-MariaDB
-- PHP verzió: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `telefonaruhaz`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `telefonok`
--

CREATE TABLE `telefonok` (
  `telefon_id` int(11) NOT NULL,
  `telefon_nev` varchar(100) NOT NULL,
  `telefon_ar` int(11) NOT NULL,
  `telefon_db` int(11) NOT NULL,
  `telefon_kep` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `telefonok`
--

INSERT INTO `telefonok` (`telefon_id`, `telefon_nev`, `telefon_ar`, `telefon_db`, `telefon_kep`) VALUES
(1, 'Google Pixel 4', 210000, 6, 'images/google_pixel4.jpg'),
(2, 'Huawei Mate 10 Pro', 220000, 7, 'images/huawei_mate10_pro.jpg'),
(3, 'Huawei P30 Lite', 70000, 1, 'images/huawei_p30_lite.jpg'),
(4, 'Huawei P30 Pro', 177000, 10, 'images/huawei_p30_pro.jpg'),
(5, 'Xiaomi Redmi Note 8T', 60000, 4, 'images/redmi_note8t.jpg'),
(6, 'Samsung Galaxy A70', 110000, 12, 'images/samsung_galaxy_a70.png'),
(7, 'Samsung Galaxy A71', 121000, 8, 'images/samsung_galaxy_a71.jpg'),
(8, 'Samsung Galaxy S10', 250000, 5, 'images/samsung_galaxy_s10.jpg'),
(9, 'Xiaomi Mi 8', 170000, 1, 'images/xiaomi_mi8.jpg');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `telefonok`
--
ALTER TABLE `telefonok`
  ADD PRIMARY KEY (`telefon_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `telefonok`
--
ALTER TABLE `telefonok`
  MODIFY `telefon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

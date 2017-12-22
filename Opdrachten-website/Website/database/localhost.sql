-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 22 dec 2017 om 12:34
-- Serverversie: 10.1.28-MariaDB
-- PHP-versie: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3972295_lavenir`
--
CREATE DATABASE IF NOT EXISTS `id3972295_lavenir` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id3972295_lavenir`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `naam` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `review`
--

INSERT INTO `review` (`id`, `naam`, `email`, `comment`) VALUES
(2, 'Jacques', 'Email@gmail.com', 'Het blijkt interessanter te zijn ');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tekoop`
--

CREATE TABLE `tekoop` (
  `id` int(11) NOT NULL,
  `image` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `merk_model` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `prijs` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `bouwjaar` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `kilometerstand` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `statut` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tekoop`
--

INSERT INTO `tekoop` (`id`, `image`, `merk_model`, `prijs`, `bouwjaar`, `kilometerstand`, `statut`) VALUES
(1, '../Images/test.jpg', 'BMW serie 3', '25000', '2015', '150000', 'Nog te koop !'),
(2, '../Images/test.jpg', 'BMW serie 5', '2400', '2015', '160000', 'Verkocht');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `tekoop`
--
ALTER TABLE `tekoop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `tekoop`
--
ALTER TABLE `tekoop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

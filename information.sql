-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Gegenereerd op: 13 jun 2017 om 08:19
-- Serverversie: 5.5.49-log
-- PHP-versie: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myband`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `tekst` text NOT NULL,
  `video1` text NOT NULL,
  `video2` text NOT NULL,
  `video3` text NOT NULL,
  `video4` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `information`
--

INSERT INTO `information` (`id`, `title`, `tekst`, `video1`, `video2`, `video3`, `video4`) VALUES
(1, 'ABOUT THE SHOW', 'Negan brutally forced Rick and the group to fall under his will in the first half of Season 7, and now Rick understands that Negan cannot be reasoned with, and that he and his group have to prepare to go to war. The second half of Season 7 is about getting ready to take Negan down once and for all. Victory will require more than just the supplies and numbers in Alexandria, and while in pursuit of more weapons, food and new fighters, Rick and the group will be tested in ways we''ve never seen before. They''ll explore a world that is much bigger than anything they''ve encountered. The group will rise up and band together, but nothing can prepare them for all-out battle with Negan and his army.', 'https://www.youtube.com/embed/R1v0uFms68U', 'https://www.youtube.com/embed/cgX1geb4FlA', 'https://www.youtube.com/embed/wGm2zwg_-NY', 'https://www.youtube.com/embed/wxGgprN6slA');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

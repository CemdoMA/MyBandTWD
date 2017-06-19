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
-- Tabelstructuur voor tabel `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(1) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `date` varchar(10) NOT NULL,
  `link` text NOT NULL,
  `linkTekst` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `image`, `date_created`, `date`, `link`, `linkTekst`) VALUES
(1, 'The Walking Dead: No Man’s Land Is Awarded the Webby People’s Voice Award for Best Mobile Game', 'The fans <strong>have</strong> spoken: The Walking Dead: No Man’s Land has won the Webby People’s Voice Award for best game in mobile sites or apps. The official mobile game of The Walking Dead lets players join Rick, Daryl, Michonne and other iconic characters from the series and, in a first-of-its-kind, real-time partnership, players are able to unlock exclusive weekly content based on the latest episode of The Walking Dead.<br/><br/> Millions of players have immersed themselves in the life-and-death struggle of The Walking Dead: No Man’s Land. The game gives fans an unparalleled experience inside the world of this thrilling series with cinematic graphics, intense turn-based combat, intuitive touchscreen gameplay and unique connections to The Walking Dead.<br/><br/> ', 'images/game.jpg', '0000-00-00 00:00:00', '10-06-2017', 'http://www.thewalkingdeadnomansland.com/', 'http://www.thewalkingdeadnomansland.com/'),
(2, 'War Erupts in Alexandria in a Talked About Scene From The Walking Dead Season 7 Finale', 'Rick and the survivors have risen up, but Jadis and the Scavengers have other ideas. Now, the Alexandrians are once again are outgunned, outnumbered and surrounded. This time, though, things are different. Rick has been stressing the importance of working together all along, and in this talked about  scene from the Season 7 Finale, he gets the help he so desperately needs.<br><br> All of the communities under the Saviors’ thumb have a reason to join Alexandria’s cause, but that doesn’t mean the fight comes without risk.<br><br>', 'images/bericht2.jpg', '0000-00-00 00:00:00', '11-06-2017', 'http://www.amc.com/shows/the-walking-dead/video-extras/season-07/episode-16/spoilers-talked-about-scene-from-the-walking-dead-season-7-episode-16', 'Watch the Talked About Scene From the Season 7 Finale');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

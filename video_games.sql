-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2019 at 10:57 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video_games`
--

-- --------------------------------------------------------

--
-- Table structure for table `video_games`
--

CREATE TABLE `video_games` (
  `Title` varchar(255) NOT NULL,
  `Publisher_Name` varchar(255) NOT NULL,
  `Developer_Name` varchar(255) NOT NULL,
  `Reviews` int(11) NOT NULL,
  `ESRB_Rating` varchar(255) NOT NULL,
  `Platform` varchar(255) NOT NULL,
  `Release_Date` date NOT NULL,
  `Price` int(11) NOT NULL,
  `Genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_games`
--

INSERT INTO `video_games` (`Title`, `Publisher_Name`, `Developer_Name`, `Reviews`, `ESRB_Rating`, `Platform`, `Release_Date`, `Price`, `Genre`) VALUES
('', '', '', 0, '', '', '0000-00-00', 0, ''),
('Apex Legends', 'Electronic Arts', 'Respawn Entertainment', 86, 'T', 'PlayStation 4, Xbox One, PC', '2019-02-04', 20, 'Survival, Shooter'),
('Baba Is You', 'Hempuli', 'Hempuli', 84, 'E', 'PC, Nintendo Switch', '2019-03-13', 15, 'Puzzle'),
('Battlefield V', 'Electronic Arts', 'DICE', 79, 'M', 'Xbox One, PC, PlayStation 4', '2018-11-20', 30, 'Shooter'),
('Black Desert Online', 'Pearl Abyss', 'Pearl Abyss', 71, 'T', 'PC', '2016-03-03', 10, 'MMO, RPG'),
('Borderlands 3', '2K', 'Gearbox Software', 80, 'M', 'Xbox One, PC, PlayStation 4, Google Stadia', '2019-09-13', 60, 'RPG, Shooter'),
('Call Of Duty: Modern Warfare', 'Activision', 'Infinity Ward', 81, 'M', 'PlayStation 4, Xbox One, PC', '2019-10-25', 60, 'Shooter'),
('Control', '505 Games', 'Remedy Entertainment', 84, 'M', 'PlayStation 4, Xbox One, PC', '2019-08-27', 60, 'Adventure'),
('Counter Strike: Global Offensive', 'Valve', 'Valve', 83, 'M', 'PC', '2012-08-12', 0, 'Shooter'),
('Dark Souls III', 'Bandal Namco Games', 'FromSoftware', 88, 'M', 'PlayStation 4, Xbox One, PC', '2016-04-12', 60, 'RPG'),
('Death Stranding', 'Sony Interactive Entertainment', 'Kojima Productions', 84, 'M', 'PlayStation 4, PC', '2019-11-08', 60, 'Adventure'),
('Destiny 2', 'Activision', 'Bungie', 84, 'T', 'PlayStation 4, Xbox One, PC', '2017-09-06', 50, 'Shooter, MMO'),
('Diablo III: Reaper of Souls', 'Blizzard Entertainment', 'Blizzard Entertainment', 87, 'M', 'PC', '2014-03-25', 20, 'RPG'),
('Elder Scrolls Online', 'Bethesda Softworks', 'ZeniMax Media', 70, 'M', 'PC', '2014-04-04', 60, 'MMO, RPG'),
('Fallout 4', 'Bethesda Softworks', 'Bethesda Game Studios', 87, 'M', 'PlayStation 4, Xbox One, PC', '2015-11-10', 30, 'RPG'),
('Fallout 76', 'Bethesda Softworks', 'Bethesda Game Studios', 53, 'M', 'PC, PlayStation 4, Xbox One', '2018-09-14', 40, 'MMO, RPG'),
('Fortnite', 'Epic Games', 'Epic Games', 84, 'T', 'PlayStation 4, Xbox One, PC, Nintendo Switch', '2017-07-25', 0, 'Survival, Shooter'),
('Gears 5', 'Microsoft Game Studios', 'The Coalition', 84, 'M', 'Xbox One, PC', '2019-09-10', 60, 'Shooter'),
('God of War', 'Sony Interactive Entertainment', 'SIE Santa Monica Studio', 95, 'M', 'PlayStation 4', '2018-04-20', 20, 'Adventure'),
('Halo 5: Guardians', 'Microsoft Game Studio', '343 Industries', 83, 'M', 'Xbox One', '2015-10-27', 20, 'Shooter'),
('Human: Fall Flat', 'Curve Digital', 'No Brakes Games', 68, 'E', 'PC, Xbox One, PlayStation 4, Nintendo Switch, iOS, Android', '2016-07-22', 15, 'Puzzle'),
('Legend of Zelda: Link\'s Awakening', 'Nintendo', 'Nintendo', 87, 'E', 'Nintendo Switch', '2019-09-20', 30, 'Adventure'),
('Limbo', 'Playdead', 'Playdead', 88, 'T', 'PC, Nintendo Switch, Xbox 360, PlayStation 4, PlayStation 3, Android, iOS, Xbox One', '2010-07-21', 10, 'Puzzle'),
('Luigi\'s Mansion 3', 'Nintendo', 'Nintendo', 86, 'E', 'Nintendo Switch', '2019-10-31', 60, 'Adventure'),
('Marvel\'s Spider-Man', 'Sony Interactive Entertainment', 'Insomniac Games', 88, 'T', 'PlayStation 4', '2018-09-07', 40, 'Adventure'),
('Neverwinter', 'Perfect World Entertainment', 'Cryptic Studios', 71, 'T', 'PlayStation 4, Xbox One, PC', '2013-06-20', 0, 'MMO, RPG'),
('Octopath Traveler', 'Square Enix, Nintendo', 'Square Enix', 84, 'T', 'Nintendo Switch', '2018-07-13', 45, 'RPG'),
('PlanetSide 2', 'Daybreak Game Company', 'Daybreak Games', 78, 'T', 'PlayStation 4, PC', '2012-11-20', 0, 'MMO, Shooter'),
('PlayerUnknown\'s Battlegrounds', 'Bluehole, Inc.', 'Bluehole, Inc.', 77, 'T', 'Xbox One, PC', '2017-03-23', 10, 'Shooter'),
('Pokemon Sword and Sheild', 'Nintendo', 'Game Freak', 82, 'E', 'Nintendo Swtich', '2019-11-15', 60, 'RPG'),
('Portal', 'Valve Software', 'Valve Software', 90, 'T', 'PC, PlayStation 3, Xbox 360', '2007-10-10', 10, 'Puzzle'),
('Portal 2', 'Valve Software', 'Valve Software', 95, 'E10+', 'PC, PlayStation 3, Xbox 360', '2011-04-18', 10, 'Puzzle, Adventure'),
('Star Wars Jedi: Fallen Order', 'Electronic Arts', 'Respawn Entertainment', 84, 'T', 'PlayStation 4, Xbox One, PC', '2019-11-15', 60, 'Adventure'),
('Super Mario Odyssey', 'Nintendo', 'Nintendo', 97, 'E', 'Nintendo Switch', '2017-10-27', 60, 'Adventure'),
('Tetris Effect', 'Sony', 'Resonair', 89, 'E', 'PlayStation 4', '2018-11-09', 20, 'Puzzle'),
('The Elder Scrolls V: Skyrim - Special Edition', 'Bethesda Softworks', 'Bethesda Game Studios', 80, 'M', 'PlayStation 4, Xbox One, PC', '2016-10-28', 40, 'RPG'),
('The Legend of Zelda: Breath of the Wild', 'Nintendo', 'Nintendo', 96, 'E10+', 'Nintendo Switch, Wii U', '2017-03-03', 50, 'Adventure, RPG'),
('The Outer Worlds', 'Private Division', 'Obsidian Entertainment', 85, 'M', 'Xbox One, PC, PlayStation 4', '2019-10-25', 60, 'RPG'),
('The Room', 'Fireproof Games', 'Fireproof Games', 74, 'N/A', 'iOS, Android, Nintendo Switch, PC', '2012-09-01', 5, 'Puzzle'),
('The Witcher 3: Wild Hunt', 'Warner Bros. Interactive Entertainment', 'CD Projekt Red', 92, 'M', 'Xbox One, PC, PlayStation 4', '2015-05-19', 40, 'RPG'),
('Trine: Enhanced Edition', 'Frozenbyte', 'Frozenbyte', 82, 'E10+', 'PlayStation 4, Wii U, PC', '2009-07-02', 15, 'Puzzle'),
('Uncharted 4: A Thief\'s End', 'Sony', 'Naughty Dog', 92, 'M', 'PlayStation 4', '2016-05-10', 20, 'Adventure'),
('World of Warcraft Classic', 'Blizzard Entertainment', 'Blizzard Entertainment', 81, 'T', 'PC', '2019-08-26', 15, 'RPG, MMO'),
('World of Warcraft: Legion', 'Blizzard Entertainment', 'Blizzard Entertainment', 88, 'T', 'PC', '2016-08-30', 15, 'RPG, MMO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `video_games`
--
ALTER TABLE `video_games`
  ADD PRIMARY KEY (`Title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

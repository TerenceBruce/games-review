-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 09:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamesreview`
--

-- --------------------------------------------------------

--
-- Table structure for table `activereviews`
--

CREATE TABLE `activereviews` (
  `ID` int(11) NOT NULL,
  `GameName` varchar(250) NOT NULL,
  `GameBlurb` longtext NOT NULL,
  `GameReview` longtext NOT NULL,
  `GameComments_YN` varchar(1) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `ReviewImage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `activereviews`
--

INSERT INTO `activereviews` (`ID`, `GameName`, `GameBlurb`, `GameReview`, `GameComments_YN`, `slug`, `ReviewImage`) VALUES
(1, 'Borderlands 3', 'This text was retrieved from the database.', 'This is a test review of the game.', 'Y', 'borderlands-3', 'borderlands-3.jpg'),
(2, 'Gang Beast ', 'Gang Beasts is a silly multiplayer party game with surly gelatinous characters, brutal slapstick fight sequences, and absurd hazardous environments, set in the mean streets of Beef City.', 'At first, I wasn\'t sure but once I started playing this game it was hard to put down. Definitely one to play with friends. It\'s hilarious, technical, and lends itself to a lot of variety so very replayable. If you like ragdoll physics, co-op or vs fighting, and you have a good sense of humour, consider this one.', 'Y', 'Gang-Beasts', 'Gang-beasts.jpg'),
(3, 'Halo Reach', 'Halo: Reach takes place in the year 2552, during the Covenant invasion of the Human colony world Reach, which serves as the main military centre of the UNSC. The game follows Noble Team, a six-man special operations unit of one SPARTAN-II and five SPARTAN-III commandos.', 'its pretty good, I think Beyonce even made a song about it', 'Y', 'halo-reach', 'halo-reach.jpg'),
(4, 'Hotline Miami', 'Hotline Miami is a high-octane action game overflowing with raw brutality, hard-boiled gunplay and skull crushing close combat. Set in an alternative 1989 Miami, you will assume the role of a mysterious antihero on a murderous rampage against the shady underworld at the behest of voices on your answering machine. Soon you\'ll find yourself struggling to get a grip of what is going on and why you are prone to these acts of violence.\r\n\r\nRely on your wits to choreograph your way through seemingly impossible situations as you constantly find yourself outnumbered by vicious enemies. The action is unrelenting and every shot is deadly so each move must be quick and decisive if you hope to survive and unveil the sinister forces driving the bloodshed. Hotline Miami’s unmistakable visual style, a driving soundtrack, and a surreal chain of events will have you question your own thirst for blood while pushing you to the limits with a brutally unforgiving challenge.', 'I love this game and I’ll play it again I’m sure. Deeply ugly murder simulator with hallucinogenic aesthetics, deadly soundtrack, and gameplay that pulls you into the flow.', 'Y', 'Hotline-Miami', 'hotline.jpg'),
(5, 'Dota 2', 'Every day, millions of players worldwide enter battle as one of over a hundred Dota heroes. And no matter if it\'s their 10th hour of play or 1,000th, there\'s always something new to discover. With regular updates that ensure a constant evolution of gameplay, features, and heroes, Dota 2 has taken on a life of its own.', 'This game is the best dress up game since Hello Kitty Online Adventure.', 'Y', 'dota-2', 'dota2.jpg'),
(6, 'Call of Duty: World At War', 'Call of Duty is back, redefining war like you\'ve never experienced before. Building on the Call of Duty 4®: Modern Warfare engine, Call of Duty: World at War immerses players into the most gritty and chaotic WWII combat ever experienced.', 'Loved it as a kid when I played in the xbox, only got it again because my friend wanted to play zombies. This doesn\'t have the best graphics especially when you compare to newer COD games but the campaign it had and all the fun times I had in this game would easily put this as one of my most favourite games', 'Y', 'World-at-War', 'world-at-war.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gamescomments`
--

CREATE TABLE `gamescomments` (
  `UID` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `ReviewID` int(11) NOT NULL,
  `UserComment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `gamescomments`
--

INSERT INTO `gamescomments` (`UID`, `UserName`, `ReviewID`, `UserComment`) VALUES
(53, 'terrybruce123', 5, 'asdasd'),
(54, 'terrybruce123', 5, 'asdasd'),
(55, 'terrybruce123', 1, 'asdasd'),
(56, 'terrybruce123', 5, 'asdasd'),
(57, 'terrybruce123', 5, 'asdasd'),
(58, 'terrybruce123', 5, 'asdasd'),
(59, 'terrybruce123', 3, 'asdasd'),
(60, 'terrybruce123', 3, 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(11) NOT NULL,
  `UserName` varchar(250) NOT NULL,
  `UserPassword` varchar(250) NOT NULL,
  `DarkMode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `UserName`, `UserPassword`, `DarkMode`) VALUES
(1, 'Lecturer', 'Example', 0),
(2, 'admin', 'admin', 0),
(3, 'terrybruce', '123123', 0),
(4, 'terry_bruce', '123123', 0),
(5, 'terrybruce123', '123123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activereviews`
--
ALTER TABLE `activereviews`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `gamescomments`
--
ALTER TABLE `gamescomments`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `UID` (`UID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `UID` (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activereviews`
--
ALTER TABLE `activereviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gamescomments`
--
ALTER TABLE `gamescomments`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

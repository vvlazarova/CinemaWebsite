-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2022 at 09:48 AM
-- Server version: 5.5.29
-- PHP Version: 5.3.10-1ubuntu3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `HNCWEBMR1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE IF NOT EXISTS `cinema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `img` varchar(60) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `genre` varchar(50) CHARACTER SET latin1 COLLATE latin1_danish_ci DEFAULT NULL,
  `director` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `cast` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `info` varchar(300) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `rating` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `tickets` int(100) NOT NULL,
  `time` varchar(11) DEFAULT NULL,
  `category` varchar(15) DEFAULT NULL,
  `category2` varchar(30) DEFAULT NULL,
  `video` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`id`, `name`, `img`, `genre`, `director`, `cast`, `date`, `info`, `rating`, `tickets`, `time`, `category`, `category2`, `video`) VALUES
(3, 'Emma', 'emma.jpg', 'Drama', 'Autumn de Wilde', 'Anya Taylor, JoyJohnny,  FlynnMia Goth', '2021-11-17', 'In 1800s England, a well meaning but selfish young woman meddles in the love lives of her friends.', 'https://www.imdb.com/title/tt9214832/ratings/?ref_=tt_ov_rt', 377, '20:30', 'adult', 'Coming Soon', 'https://www.youtube.com/watch?v=qsOwj0PR5Sk'),
(5, 'Batman', 'batman.jpg', 'Action', 'Matt Reeves', ' Barry Keoghan, Peter Sarsgaard, Robert Pattinson', '2022-01-27', 'In his second year of fighting crime, Batman uncovers corruption in Gotham City that connects to his own family while facing a serial killer known as the Riddler.', NULL, 400, '18:30', 'adult', 'Coming Soon', 'https://www.youtube.com/watch?v=mqqft2x_Aa4'),
(6, 'Cruella', 'cruella.jpg', 'Crime', 'Craig Gillespie', 'Emma Stone, Emma Thompson, Joel Fry ', '2021-11-19', 'Estella is a young and clever grifter who', 'https://www.imdb.com/title/tt3228774/ratings/?ref_=tt_ov_rt', 75, '21:00', 'adult', 'watch', 'https://www.youtube.com/watch?v=gmRKv7n2If8'),
(11, 'Wheel Of Time', 'wheeloftime.jpg', 'Adventure', 'Rafe Judkins', 'Rosamund Pike, Daniel, Henney , Madeleine Madden', '2021-11-26', 'Set in a high fantasy world where magic exists, but only some can access it, a woman named Moiraine crosses paths with five young men and women. This sparks a dangerous, world-spanning journey. Based on the book series by Robert Jordan.', 'https://www.imdb.com/title/tt7462410/ratings/?ref_=tt_ov_rt', 400, '20:30', 'adult', 'watch ', 'https://www.youtube.com/watch?v=11ZozKfRqvA'),
(13, 'The Nutcracker and the Four Realms', 'nutcracker.jpg', 'Fantasy ', 'Joe Johnston', 'Mackenzie, FoyKeira Knightley, Morgan Freeman', '2021-02-09', 'On Christmas Eve, Clara realises that before dying, her mother left her with an inheritance to a magical world of fairies and toy soldiers that are alive. She holds the key to the fate of this world.', 'https://www.imdb.com/title/tt5523010/ratings/?ref_=tt_ov_rt', 400, '16:30', 'kids', 'Coming Soon', 'https://www.youtube.com/watch?v=BXfxLIuNJvw'),
(15, 'Turning Red', 'turningred.jpg', 'Animation', 'Domee Shi', 'Rosalie Chiang(voice), Sandra Oh(voice), Maitreyi Ramakrishnan(voice)', '2022-02-01', 'A 13-year-old girl named Mei Lee turns into a giant red panda whenever she gets too excited.', 'https://www.imdb.com/title/tt8097030/', 400, '18:30', 'kids', 'Coming Soon', 'https://www.youtube.com/watch?v=XdKzUbAiswE'),
(16, 'Raya and the Last Dragon', 'raya.jpg', 'Adventure', 'Don Hall', 'Kelly Marie Tran(voice), Awkwafina(voice), Gemma Chan(voice) ', '2021-11-30', 'In a realm known as Kumandra, a re-imagined Earth inhabited by an ancient civilization, a warrior named Raya is determined to find the last dragon.', 'https://www.imdb.com/title/tt5109280/ratings/?ref_=tt_ov_rt', 400, '18:30', 'kids', 'watch ', 'https://www.youtube.com/watch?v=1VIZ89FEjYI'),
(17, 'Ron', 'ronsgonewrong.jpg', 'Animation', ' Sarah Smith', 'Jack Dylan Grazer(voice), Zach Galifianakis(voice), Ed Helms(voice)', '2021-11-18', 'The story of Barney, an awkward middle-schooler and Ron, his new walking, talking, digitally-connected device. Ron', 'https://www.imdb.com/title/tt7504818/ratings/?ref_=tt_ov_rt', 400, '18:30', 'kids', 'adult', 'https://www.youtube.com/watch?v=fCqGfjBSk0I'),
(18, 'Dolittle', 'dollittle.jpg', 'Adventure', ' Stephen Gaghan', 'Robert Downey Jr., Antonio Banderas, Michael Sheen', '2021-12-15', 'A physician, who can speak with animals, is summoned by the queen to find a cure for her life-threatening disease. Soon, he embarks on a journey with his furry friends in search of a healing tree.', 'https://www.imdb.com/title/tt6673612/ratings/?ref_=tt_ov_rt', 400, '13:00', 'kids', 'watch ', 'https://www.youtube.com/watch?v=FEf412bSPLs'),
(19, 'The Fox and the Hound 2', 'thefoxandthehound2.jpg', 'Animation', ' Jim Kammerud', 'Reba McEntire(voice), Patrick Swayze(voice), Jonah Bobo(voice)', '2022-02-10', 'Copper abandons his best friend Tod to join the music band Singing Strays, who want to attract the attention of a talent scout. However, Dixie, a former member, tries to sabotage their audition.', 'https://www.imdb.com/video/vi2550701337?playlistId=tt0465997&ref_=tt_ov_vi', 400, '20:30', 'kids', 'watch ', 'https://www.imdb.com/video/vi2550701337?playlistId=tt0465997&ref_=tt_ov_vi'),
(97, 'Eternals', 'eternals.png', 'Adventure', 'Chloe Zhao', 'Gemma Chan, Richard Madden, Angelina Jolie', '2022-02-01', 'The Eternals, a race of immortal beings with superhuman powers who have secretly lived on Earth for thousands of years, reunite to battle the evil Deviants.', '', 100, '18:45', 'adult', 'coming soon', 'https://www.youtube.com/watch?v=x_me3xsvDgk'),
(98, 'Dune', 'Dune.jpg', 'Adventure', 'Denis Villeneuve', 'Timothee Chalamet, Zendaya, Rebecca Ferguson, Stel...', '2022-01-27', 'Feature adaptation of Frank Herbert', '', 95, '19:40', 'adult', 'coming soon', 'https://www.youtube.com/watch?v=n9xhJrPXop4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

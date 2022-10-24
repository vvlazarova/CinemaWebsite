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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password2` varchar(15) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `dob`, `password`, `password2`, `category`) VALUES
(11, 'vvlazarova@gmail.com', 'vily', '2010-12-18', '123123', '123123', ''),
(12, 'vvlazarova@gmail.com', 'vvlazarova', '1988-12-09', '123123', '123123', ''),
(17, 'vvlazarova@gmail.com', 'admin', '2015-02-12', '123123', '123123', ''),
(18, 'sophie@wp.pl', 'sophie', '2013-03-06', 'sophie', 'sophie', ''),
(20, 's@abv.bg', 'adult', '1995-01-02', 'adult', 'qazwsx', ''),
(28, 'colette.wilson07@btinternet.co', 'Letty19', '1965-09-19', 'Letty19', 'Letty19', ''),
(30, 'vvlazarova@gmail.com', 'adminnnn', '2015-02-12', '123123', '', ''),
(31, 'test@test.com', 'test', '1984-10-06', 'test', 'test', ''),
(32, 'stoiv@abv.bg', 'admin1', '1980-01-01', 'admin1', 'admin1', ''),
(33, 'ar@at.com', 'ar@at.com', '2022-01-12', '12', '12', ''),
(34, 'vlazarova@v.com', 'vlazarovaaaaaa', '1988-09-12', 'Pass123', 'Pass123', ''),
(35, 'vvlazarova@gmail.com', 'vlazarova1213231', '1980-01-01', 'Pass123', 'Pass123', ''),
(37, 'vvlazarova@gmail.com', 'vlaza123123rova', '1988-01-01', 'Pass123', 'Pass123', ''),
(38, 'vlazarova@v.com', 'vlazarova1212', '1988-01-01', 'Pass123', 'Pass123', ''),
(39, 'vvlazarova@gmail.com', 'vlazarov', '1988-09-12', 'Pass123', 'Pass123', ''),
(41, 'stoilpanchev@abv.bg', 'stoil', '1985-01-06', 'qweasdzxc', 'qweasdzxc', ''),
(42, 'vvlazarova@gmail.com', 'vlazarova', '2022-01-12', 'Pass123', 'Pass123', ''),
(43, 'vvlazarova@gmail.com', 'admin', '2022-01-05', 'admin', '', ''),
(45, 'vvlazarova@gmail.com', 'admin', '0000-00-00', 'admin', '', ''),
(46, 'vvlazarova@gmail.com', 'admin', '0000-00-00', 'admin', '', ''),
(48, 'adult3@adult3.com', 'adult3', '1994-01-05', 'adult', 'adult', ''),
(49, 'f@f.co.uk', 'f', '2021-12-29', 'f', '', ''),
(50, 'vaskolazarov@abv.bg', 'g', '1988-02-02', 'ddd', 'ddd', ''),
(51, 'vvlazarova@gmail.com', 'kids', '2022-01-14', '123', '123', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

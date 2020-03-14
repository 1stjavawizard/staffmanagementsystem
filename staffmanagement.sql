-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2020 at 12:48 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staffmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `passport` varchar(400) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usernamed` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `email`, `passport`) VALUES
(1, 'Mr Segun', 'segun', 'segun', 'segun2345@gmail.com', ''),
(2, 'Mr Segun', 'segunz', 'segun1', 'segun2345@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `generatedpassword` varchar(255) DEFAULT NULL,
  `userpassword` varchar(255) NOT NULL,
  `hidepassword` varchar(255) NOT NULL,
  `parent_name` varchar(255) NOT NULL,
  `profilepic` varchar(255) NOT NULL,
  `aboutme` text NOT NULL,
  `age` varchar(20) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `genotype` varchar(20) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `complexion` varchar(200) NOT NULL,
  `birthplace` varchar(255) NOT NULL,
  `languages` varchar(255) NOT NULL,
  `parentaddress` text NOT NULL,
  `residentaddress` text NOT NULL,
  `parentmobilenumber` varchar(15) NOT NULL,
  `mobilenumber` varchar(15) NOT NULL,
  `parentemail` varchar(20) NOT NULL,
  `parentoccupation` varchar(255) NOT NULL,
  `lga` varchar(255) NOT NULL,
  `datejoinedschool` date NOT NULL,
  `admission_number` varchar(20) NOT NULL,
  `mothername` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `views` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `createdon` varchar(200) NOT NULL,
  `date_login` date NOT NULL,
  `numberoflogin` int(11) NOT NULL,
  `attemptslogin` int(11) NOT NULL,
  `banned` tinyint(1) NOT NULL,
  `datebanned` date DEFAULT NULL,
  `datebannedremoved` date DEFAULT NULL,
  `users_banned_ip` varchar(200) NOT NULL,
  `timecreated` time NOT NULL,
  `timebanned` time NOT NULL,
  `timeubanned` time NOT NULL,
  `datecreated` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `genpassword` (`generatedpassword`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

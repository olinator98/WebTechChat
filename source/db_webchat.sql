-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2018 at 05:52 PM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_webchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `webchat_lines`
--

CREATE TABLE IF NOT EXISTS `webchat_lines` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(16) NOT NULL,
  `gravatar` varchar(32) NOT NULL,
  `text` varchar(255) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `ts` (`ts`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `webchat_users`
--

CREATE TABLE IF NOT EXISTS `webchat_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `user_password` varchar(300) NOT NULL,
  `user_state` varchar(12) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` varchar(15) NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`),
  KEY `last_activity` (`last_activity`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `webchat_users`
--

INSERT INTO `webchat_users` (`id`, `username`, `user_password`, `user_state`, `last_activity`, `active`) VALUES
(6, 'oliverwerlen@bluewin.ch', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'true', '0000-00-00 00:00:00', '0'),
(9, 'peterpan@1234.ch', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'user', '0000-00-00 00:00:00', 'false'),
(8, 'gandalf@frodo.ch', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'true', '0000-00-00 00:00:00', 'true'),
(10, 'oliverwerlen@bluewin.ch', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'user', '0000-00-00 00:00:00', 'false');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

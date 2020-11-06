-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 05, 2020 at 12:44 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thefus`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `profilepic` varchar(100) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `registrationtime` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profilepic`, `username`, `firstname`, `lastname`, `email`, `password`, `dob`, `address`, `city`, `country`, `user_type`, `registrationtime`) VALUES
(12, 'image/Screenshot_1603192812.png', 'anurag', 'Anurag', 'Mishra123', 'anuragsurfing123@gmail.com', 'd77d2953c546cb33e2d0bff4989f6aa2', '2020-11-25', 'vill chitaudi post saraiharakhu', 'jaunpur', 'India', 'user', '2020-11-05 07:01:35.889346'),
(15, NULL, 'anuragsurfing123', 'Anurag', 'Mishra', 'anuragsurfing123113@gmail.com', 'c12d81afd2699cf3ef7dbd0fd1d9af46', '2020-11-20', 'vill chitaudi post saraiharakhu', 'jaunpur', 'India', 'user', '2020-11-05 11:44:08.773350'),
(14, NULL, 'anuragsurfing123', 'Anurag', 'Mishra', 'anuragsurfing1234@gmail.com', 'c12d81afd2699cf3ef7dbd0fd1d9af46', '2020-11-12', 'vill chitaudi post saraiharakhu', 'jaunpur', 'India', 'user', '2020-11-05 11:35:20.220946'),
(13, 'image/Screenshot (239).png', 'anuragsurfing123', 'Anurag', 'Mishra', 'anuragsurfing12312@gmail.com', '18118cfac7687cab464b6218522bb3d0', '2020-11-17', 'vill chitaudi post saraiharakhu', 'jaunpur', 'India', 'user', '2020-11-05 10:55:30.426456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

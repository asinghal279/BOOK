-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 05, 2019 at 06:08 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book2`
--

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `Answer` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='answerkey';

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `Answer`) VALUES
(1, '11108889'),
(2, '603729'),
(3, '60025'),
(4, '34224'),
(5, '477078'),
(6, '411750'),
(7, 'a'),
(8, '985026'),
(9, '13689'),
(10, '19221111'),
(11, '85211361'),
(12, '28884'),
(13, '1061208'),
(14, '1'),
(15, '88'),
(16, '123'),
(17, '956484'),
(18, '1026169'),
(19, '86'),
(20, '73'),
(21, '9999800001'),
(22, '1234321'),
(23, '30625'),
(24, '994009'),
(25, '937024'),
(26, '34370'),
(27, '38025'),
(28, '34216'),
(29, '11236'),
(30, '12996'),
(31, '119X119'),
(32, '631037'),
(33, '58877'),
(34, '3381598'),
(35, '31598424'),
(36, '1074640383'),
(37, '0.142857143'),
(38, '1157625'),
(39, '19236996'),
(40, '85266756');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

DROP TABLE IF EXISTS `visitor`;
CREATE TABLE IF NOT EXISTS `visitor` (
  `visitor_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text COLLATE utf8_bin NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `phno` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`visitor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='visitors data';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

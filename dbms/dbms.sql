-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 20, 2020 at 03:39 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13508289_dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `feedback` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feedback`) VALUES
(1, 'rest one'),
(2, 'rest one'),
(3, 'this is a test feedback...â€¦... '),
(4, 'this is a test feedback...â€¦... '),
(5, 'this is a test feedback...â€¦... '),
(6, 'test'),
(7, 'test'),
(8, 'test'),
(9, 'this service is a very usefull for the any one drivers');

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

DROP TABLE IF EXISTS `table`;
CREATE TABLE IF NOT EXISTS `table` (
  `name` varchar(100) NOT NULL,
  `telephone` char(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

DROP TABLE IF EXISTS `table1`;
CREATE TABLE IF NOT EXISTS `table1` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `telephone` char(12) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `service` varchar(255) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `name`, `telephone`, `address`, `email`, `location`, `city`, `service`, `url`) VALUES
(17, 'nipun', '1234567890', 'abcdefghijklmnop', 'nm3nipp@gmal.com', 'www.llk.lk', 'Polonnaruwa', 'Ambulance', 'https://www.ool.lk'),
(34, 'A Kasun', '0987654321', 'No 56,Main Road,Ampara', 'kasun@gamil.com', 'ampara', 'Ampara', 'Breackdown_service', 'https:www.kasun123.lk'),
(33, 'N Nimal', '0780418567', 'No 89,Colombo Road,Monaragala', 'nnimal@gmail.com', 'Monaragala', 'Monaragala', 'Tire_shop', 'https:www.tiremonaragala.lk'),
(32, 'Madusanka', '0987654321', 'Monaragala', 'sampath@dudumail.com', 'Monaragala', 'Monaragala', 'Emergency(fire..etc)', 'https://www.emagerncyservicefo.lk'),
(31, 'A.M Dinesh', '0719876543', 'No 30,Monaragala', 'nnnnnnm@mm.lk', 'Monaragala', 'Monaragala', 'Garage', 'https:www.amgroup.lk'),
(30, 'A.M Dinesh', '0782343456', 'No 231,Ampara', 'abccompany@gmail.com', 'Ampara', 'Ampara', 'Breackdown_service', 'https:www.abccompany.lk'),
(29, 'N Saman', '0719876543', 'No 45,Mahiyanganaya', 'saman@gmail.com', 'Mahiyanganaya', 'Mahiyanganaya', 'Emergency', 'https:www.saman.lk'),
(28, 'K Kamal', '1234567890', 'Monaragala', 'km@gmail.com', 'Monaragala', 'Monaragala', 'Breackdown_service', 'https:www.kamalshope.lk'),
(27, 'N.M Nipun', '0711234512', 'Polonaruwa', 'nipun@gmail.com', 'Polonaruwa', 'Polonnaruwa', 'Garage', 'https:www.nipun.lk');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2019 at 12:05 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cargo_system`
--
CREATE DATABASE IF NOT EXISTS `cargo_system` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cargo_system`;

-- --------------------------------------------------------

--
-- Table structure for table `add_warehouse`
--

CREATE TABLE IF NOT EXISTS `add_warehouse` (
  `sl` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(30) NOT NULL,
  `place` varchar(50) NOT NULL,
  `supervisor_name` varchar(50) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `add_warehouse`
--

INSERT INTO `add_warehouse` (`sl`, `id`, `place`, `supervisor_name`, `capacity`, `mobile_number`, `password`) VALUES
(3, '100', '', '', '', '', ''),
(4, '101', 'rtetre', 'gdgdg', '88', '8978779787', ''),
(5, '102', 'jamshedpur', 'shyam', '88', '8978779787', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE IF NOT EXISTS `admin_log` (
  `name` varchar(25) NOT NULL,
  `user_id` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`name`, `user_id`, `password`) VALUES
('salman', 'salman123', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `order_cargo`
--

CREATE TABLE IF NOT EXISTS `order_cargo` (
  `sl` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `warehouse_place` varchar(50) NOT NULL,
  `status` varchar(44) NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order_cargo`
--

INSERT INTO `order_cargo` (`sl`, `order_id`, `quantity`, `warehouse_place`, `status`) VALUES
(1, '112', '', '', ''),
(2, '113', '122', 'patna', ''),
(3, '114', '111', 'jamshedpur', 'Shifted to Destination');

-- --------------------------------------------------------

--
-- Table structure for table `shift_cargo`
--

CREATE TABLE IF NOT EXISTS `shift_cargo` (
  `sl` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(50) NOT NULL,
  `place` varchar(30) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `shifted_to` varchar(50) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `quantity_shifted` varchar(50) NOT NULL,
  `status` varchar(40) NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `shift_cargo`
--

INSERT INTO `shift_cargo` (`sl`, `order_id`, `place`, `quantity`, `shifted_to`, `capacity`, `quantity_shifted`, `status`) VALUES
(1, '113', '122', 'patna', 'ranchi', '100', 'patna', 'Shifted to Destination'),
(2, '113', 'patna', '122', 'jamshedpur', '100', 'ranchi', 'Shifted to Destination');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

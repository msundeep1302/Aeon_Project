-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2017 at 12:29 AM
-- Server version: 5.5.19
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aeon_data_base`
--
CREATE DATABASE IF NOT EXISTS `aeon_data_base` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aeon_data_base`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_new_projects`
--

CREATE TABLE IF NOT EXISTS `admin_new_projects` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `projectname` varchar(30) NOT NULL,
  `startdate` varchar(20) NOT NULL,
  `enddate` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_new_projects`
--

INSERT INTO `admin_new_projects` (`id`, `projectname`, `startdate`, `enddate`, `description`) VALUES
(1, 'Aeon_Bootstrap_Challenge', '04/01/2017', '04/17/2017', 'Use Bootstrap To Complete The Project');

-- --------------------------------------------------------

--
-- Table structure for table `index_identifying_info`
--

CREATE TABLE IF NOT EXISTS `index_identifying_info` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `instructions` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `index_identifying_info`
--

INSERT INTO `index_identifying_info` (`id`, `firstname`, `lastname`, `email`, `instructions`) VALUES
(1, 'mushini', 'sundeep', 'msundeep@yahoo.com', 'Extract And Run The Project In WAMP Server');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up_admin`
--

CREATE TABLE IF NOT EXISTS `sign_up_admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sign_up_admin`
--

INSERT INTO `sign_up_admin` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'mushini', 'sundeep', 'msundeep@yahoo.com', '60ed5ab0fa153358e7e5643f190391a5');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up_user`
--

CREATE TABLE IF NOT EXISTS `sign_up_user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_submitted_projects`
--

CREATE TABLE IF NOT EXISTS `user_submitted_projects` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `instructions` varchar(255) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `file_path` varchar(60) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `file_size` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

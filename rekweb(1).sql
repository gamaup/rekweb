-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2014 at 03:40 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rekweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `direktori`
--

CREATE TABLE IF NOT EXISTS `direktori` (
  `id_dir` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id_dir`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `direktori`
--

INSERT INTO `direktori` (`id_dir`, `nama`) VALUES
(1, 'asal'),
(2, 'waktu'),
(3, 'jenis'),
(4, 'cara'),
(5, 'ukuran');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kat` int(3) NOT NULL AUTO_INCREMENT,
  `id_dir` int(3) NOT NULL,
  `nama_kat` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kat`, `id_dir`, `nama_kat`) VALUES
(0, 0, 'uncategorized'),
(1, 1, 'tradisional'),
(2, 1, 'japanese'),
(3, 1, 'western'),
(4, 1, 'french'),
(5, 1, 'italian'),
(6, 2, 'breakfast'),
(7, 2, 'lunch'),
(8, 2, 'dinner'),
(9, 3, 'appetizer'),
(10, 3, 'maincourse'),
(11, 3, 'dessert'),
(12, 3, 'beverages'),
(13, 4, 'fried'),
(14, 4, 'roasted'),
(16, 4, 'smoked'),
(17, 5, 'large'),
(18, 5, 'medium'),
(19, 5, 'small'),
(23, 4, 'boiled');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE IF NOT EXISTS `makanan` (
  `id_mkn` int(3) NOT NULL AUTO_INCREMENT,
  `nama_mkn` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `asal` int(3) NOT NULL,
  `waktu` int(3) NOT NULL,
  `jenis` int(3) NOT NULL,
  `cara` int(3) NOT NULL,
  `ukuran` int(3) NOT NULL,
  `author` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id_mkn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id_mkn`, `nama_mkn`, `foto`, `asal`, `waktu`, `jenis`, `cara`, `ukuran`, `author`, `status`) VALUES
(2, 'reterte', 'g2.jpg', 1, 6, 9, 13, 17, 0, '0'),
(3, 'fhgfg', '10370965_890798844266510_1476682871330915709_n.jpg', 4, 8, 10, 0, 18, 0, '0'),
(4, 'tes', '1623546_1464622820426332_948945036_n2.png', 1, 6, 9, 13, 17, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `role` enum('author','editor','superadmin') NOT NULL,
  `display_name` varchar(30) NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`, `display_name`, `last_login`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'superadmin', 'Super Admin', '2014-12-30 15:23:05'),
(2, 'gamaup', '81dc9bdb52d04dc20036dbd8313ed055', 'editor', 'Gama Unggul Priambada', '2014-12-16 14:36:29'),
(6, 'tester', '25d55ad283aa400af464c76d713c07ad', '', 'Tester', '0000-00-00 00:00:00'),
(7, 'blahblah', '25d55ad283aa400af464c76d713c07ad', '', 'blah blahblah', '0000-00-00 00:00:00'),
(8, 'qwerty', '25d55ad283aa400af464c76d713c07ad', '', 'dfgdgsg', '0000-00-00 00:00:00'),
(9, 'asdr', '25d55ad283aa400af464c76d713c07ad', '', 'asdfasd', '2014-12-30 15:26:41');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

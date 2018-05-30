-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 08:06 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `new_umb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matauji`
--

CREATE TABLE IF NOT EXISTS `tbl_matauji` (
  `id_matauji` int(11) NOT NULL,
  `nama_matauji` varchar(35) NOT NULL,
  `aktif` enum('0','1') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_matauji`
--

INSERT INTO `tbl_matauji` (`id_matauji`, `nama_matauji`, `aktif`) VALUES
(1, 'Verbal', '1'),
(2, 'Numerik', '1'),
(3, 'Logika', '1'),
(4, 'Sinonim', '1'),
(5, 'Anonim', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_matauji`
--
ALTER TABLE `tbl_matauji`
  ADD PRIMARY KEY (`id_matauji`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_matauji`
--
ALTER TABLE `tbl_matauji`
  MODIFY `id_matauji` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

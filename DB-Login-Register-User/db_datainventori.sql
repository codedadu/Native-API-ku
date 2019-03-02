-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2018 at 08:15 AM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_datainventori`
--

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(60) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level_user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `alamat`, `no_telp`, `jenis_kelamin`, `username`, `password`, `level_user`) VALUES
(1, 'Asep Septiadi', 'Cikarang', '081', 'Laki-laki', 'adi', '21091994', 'admin'),
(2, '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(3, 'Rahman Nur Hakim', 'Bekasi', '081', 'Laki-laki', 'rahman', '928409238409', 'admin'),
(4, 'Fina Agustina', 'Bekasi', '021', 'Perempuan', 'fina', '1234567', 'admin'),
(7, 'Wulan', 'Jakarta', '081', 'Perempuan', 'wulan', '25d55ad283aa400af464c76d713c07ad', 'admin'),
(8, '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(9, 'Asep Septiadi', 'Bekasi', '021', 'Laki-laki', 'septiyadii', 'e10adc3949ba59abbe56e057f20f883e', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

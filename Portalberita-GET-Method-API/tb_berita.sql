-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql112.indoweb.xyz
-- Generation Time: Sep 13, 2018 at 09:48 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `neiib_22626554_db_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE IF NOT EXISTS `tb_berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(100) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `tanggal_posting` date NOT NULL,
  `isi_berita` text NOT NULL,
  `penulis` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `foto`, `judul_berita`, `tanggal_posting`, `isi_berita`, `penulis`) VALUES
(1, 'foto_1.jpg', 'Crisitian Gonzales Percaya Madura United Lebih Baik Di Liga 1', '2018-02-08', 'Madura United tersingkir dari Piala Presiden di babak delapan besar.</br></br>\r\nKegagalan Madura United di Piala Presiden 2018, tak membuat Cristian Gonzales, jadi pesemitis ketika Liga 1 bergulir. Ia menilai, timnya bakal bisa berbicara banyak ketika kompetisi kasta teratas digelar.\r\n</br></br>\r\nLangkah Madura United dalam Piala Presiden terhenti di babak delapan besar. Pasukan Gomes de Oliviera tersebut dikalahkan Bali United lewat babak adu penalti di Stadion Manahan, Solo, akhir pekan lalu.\r\n</br></br>\r\nNamun, Gonzales merasa timnya tidak kalah kelas dibandingkan Bali United. Menurutnya, Madura United takluk karena tidak dinaungi dewi fortuna saja pada laga tersebut.\r\n</br></br>\r\n"Waktu di Piala Presiden kami sebenarnya sudah bagus, meskipun lawan kalah lewat penalti. Ya sekarang kami harus lupakan itu dan konsentrasi untuk kompetisi nanti," ucap Gonzales.\r\n</br></br>\r\nLebih jauh, eks Arema FC tersebut menuturkan belum bisa memprediksikan lawan tangguh yang bakal dihadapai Madura United pada Liga 1 2018. Ini lantaran, ia menyebutkan seluruh kontestan pasti ingin meraih hasil maksimal.\r\n</br></br>\r\n"Adanya Piala Presiden ini sangat bagus sebagai sarana kami untuk menilai semua tim, tetapi pasti saat kompetisi dimulai nanti situasi akan berbeda," ujarnya. ', 'Muhammad Ridwan'),
(2, 'foto_2.jpg', 'REVIEW Eredivisie Belanda: PSV Mantap Di Puncak, NAC Tinggalkan Degradasi', '2018-02-08', 'Kemenangan tipis PSV cukup bagi mereka mempertahankan posisi puncak, diikuti Ajax di urutan kedua setelah menang 4-2.\r\n</br></br>\r\nAZ Alkmaar mengukuhkan posisi ketiga dengan menghancurkan tuan rumah Twente, yang mengakhiri laga dengan sepuluh pemain, 4-0.\r\n</br></br>\r\nTim tamu membuka keunggulan di menit kesepuluh via penalti Alireza Jahanbakhsh. Twente berhasil mengimbangi permainan AZ sampai mereka harus kehilangan Cristian Cuevas yang diusir wasit setelah mendapat dua kartu kuning di menit ke-73.\r\n</br></br>\r\nMemasuki pengujung laga, AZ menambah tiga gol, dua di antaranya dicetak Wout Weghorst sebelum Jahanbakhsh mencetak bracenya di injury time.', 'DEWI AGRENIAWATI'),
(3, 'foto_3.jpg', 'Selasa Ini, Belanda Tunjuk Ronald Koeman Sebagai Pelatih', '2018-02-09', 'Koeman yang sudah tidak lagi bekerja sejak didepak Everton pada Oktober kemarin akan segera diresmikan sebagai pelatih Belanda.\r\n</br></br>\r\nMedia Inggris Sky Sports News menyebut Belanda akan mengangkat Ronald Koeman sebagai pelatih baru mereka pada Selasa (6/2) ini.\r\n</br></br>\r\nKoeman, 54 tahun, sudah tidak lagi memiliki pekerjaan sejak dilengserkan Everton dari kursinya sebagai manajer pada Oktober silam menyusul rentetan hasil buruk yang diraih di awal musim.\r\n</br></br>\r\nBelanda sendiri juga belum memiliki pelatih sejak ditinggal Dick Advocaat yang memutuskan mundur pascakegagalan mengantar negaranya lolos ke Piala Dunia 2018.', 'Adhe Makayasa\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

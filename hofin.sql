-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2016 at 02:09 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hofin`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_komentar`
--

CREATE TABLE IF NOT EXISTS `m_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_pengirim` int(11) NOT NULL,
  `id_penerima` int(11) NOT NULL,
  `isi_komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_pengguna`
--

CREATE TABLE IF NOT EXISTS `m_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_pengguna`
--

INSERT INTO `m_pengguna` (`id_pengguna`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Wahyu', 'wahyu', 'wahyu', 1),
(2, 'Fardan', 'fardan', 'fardan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_penginapan`
--

CREATE TABLE IF NOT EXISTS `m_penginapan` (
  `id_penginapan` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `nama_penginapan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `daerah` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_penginapan`
--

INSERT INTO `m_penginapan` (`id_penginapan`, `id_pengguna`, `rating`, `nama_penginapan`, `alamat`, `daerah`, `harga`, `deskripsi`, `kategori`, `foto`) VALUES
(2, 2, 215, 'BAKUL', 'asdasdasdasd', 'Kab. Jabung', 180000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Homestay', ''),
(3, 1, 0, 'baru gan', 'jalan', 'Kab. Jabung', 15000, 'gaul', 'Homestay', ''),
(4, 1, 0, 'asdfa', 'sdfasf', 'Kab. Singosari', 12312, 'asfsadf', 'Homestay', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_komentar`
--
ALTER TABLE `m_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `m_pengguna`
--
ALTER TABLE `m_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `m_penginapan`
--
ALTER TABLE `m_penginapan`
  ADD PRIMARY KEY (`id_penginapan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_komentar`
--
ALTER TABLE `m_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `m_pengguna`
--
ALTER TABLE `m_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `m_penginapan`
--
ALTER TABLE `m_penginapan`
  MODIFY `id_penginapan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

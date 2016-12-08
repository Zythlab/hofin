-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2016 at 10:58 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hofin`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_komentar`
--

CREATE TABLE `m_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_penginapan` int(11) NOT NULL,
  `isi_komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_komentar`
--

INSERT INTO `m_komentar` (`id_komentar`, `id_pengguna`, `id_penginapan`, `isi_komentar`) VALUES
(1, 1, 4, 'coba'),
(2, 1, 4, 'mantab abis'),
(3, 1, 4, 'go go go');

-- --------------------------------------------------------

--
-- Table structure for table `m_pengguna`
--

CREATE TABLE `m_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_pengguna`
--

INSERT INTO `m_pengguna` (`id_pengguna`, `nama`, `username`, `password`, `role`) VALUES
(1, 'bayu', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'wahyu', 'wahyu', '32c9e71e866ecdbc93e497482aa6779f', 2),
(3, 'Alysha Ghea', 'Ghea', '827ccb0eea8a706c4c34a16891f84e7b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_penginapan`
--

CREATE TABLE `m_penginapan` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_penginapan`
--

INSERT INTO `m_penginapan` (`id_penginapan`, `id_pengguna`, `rating`, `nama_penginapan`, `alamat`, `daerah`, `harga`, `deskripsi`, `kategori`, `foto`) VALUES
(6, 1, 1, 'Swiss-Belinn Malang ', 'Jalan Veteran No. 8A, Malang, Indonesia', 'Kec. Blimbing', 604764, 'Fasilitas Utama :\r\n•	WiFi di Lobi\r\n•	WiFi di Kamar\r\n•	Kolam Renang	\r\n•	Spa\r\n•	Tempat Parkir\r\n•	AC	\r\n•	Restoran\r\n•	Bar Hotel\r\n•	Gym\r\nInfo Kamar :\r\n1.	Kamar Deluxe\r\nTempat tidur tersedia :\r\n•	Queen Size	\r\n•	Twin Beds		\r\nUkuran Kamar :\r\n•	21-28 m²	\r\nSemua Kamar Deluxe memiliki :\r\n•	Kulkas\r\n•	Mesin Kopi/Espresso\r\n•	TV Layar Datar\r\n2.	Suite\r\nTempat tidur tersedia :\r\n•	Queen Size	\r\n	Ukuran Kamar :\r\n•	48 m²	\r\nSemua Kamar Deluxe memiliki :\r\n•	Brangkas\r\n•	Kulkas\r\n•	Mesin Kopi/Espresso\r\n•	Shower\r\n•	TV Layar Datar\r\n', 'Hotel', ''),
(7, 1, 0, 'UB Guest House Malang ', 'Jalan MT Haryono 169 Malang, Indonesia', 'Kec. Lowokwaru', 395000, 'Fasilitas Utama :\r\n•	ATM/Bank\r\n•	WiFi di area umum\r\n•	Mini Market\r\n•	Taman	•	Cafe\r\n•	Laundry\r\n•	Sarapan\r\n•	Sarapan berbiaya	•	Resepsionis 24 jam\r\n•	Keamanan 24 jam\r\n\r\n\r\n\r\nInfo Kamar :\r\n1.	Superior Twin Room\r\nDeskripsi tidak tersedia.', 'Guest House', 'UB_Guest_House.PNG'),
(8, 1, 0, 'De Laia Guest House Malang ', 'Jalan Pisang Kipas No. 5, Malang, Indonesia', 'Kec. Lowokwaru', 292500, 'Fasilitas Utama :\r\n•	Resepsionis 24 jam\r\n•	Keamanan 24 jam\r\n•	Cleaning Service	•	Room Service\r\n•	Parkir Are\r\n•	Laundry\r\n•	Surat Kabar di Lobby\r\n	\r\n\r\nInfo Kamar :\r\n1.	Superior Room Only\r\nTempat tidur tersedia :\r\n•	King Size	\r\n	\r\n	Ukuran Kamar :\r\n•	12 m²	Semua Kamar Deluxe memiliki :\r\n•	Bath dan Toilet\r\n•	Almari\r\n•	Nakas\r\n•	Rak TV\r\n•	TV LED', 'Guest House', 'De_Laia_Guest_House.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `m_rating`
--

CREATE TABLE `m_rating` (
  `id_rating` int(11) NOT NULL,
  `id_penginapan` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_rating`
--

INSERT INTO `m_rating` (`id_rating`, `id_penginapan`, `id_pengguna`) VALUES
(3, 6, 3);

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
-- Indexes for table `m_rating`
--
ALTER TABLE `m_rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_komentar`
--
ALTER TABLE `m_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `m_pengguna`
--
ALTER TABLE `m_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `m_penginapan`
--
ALTER TABLE `m_penginapan`
  MODIFY `id_penginapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `m_rating`
--
ALTER TABLE `m_rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

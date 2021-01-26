-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 06:41 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wantiknas`
--

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `no` int(11) NOT NULL,
  `tipe_agenda` varchar(255) NOT NULL,
  `agenda_utama` int(11) DEFAULT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `tipe_meeting` varchar(255) NOT NULL,
  `kategori_meeting` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `pukul` varchar(100) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `link_meeting` varchar(255) NOT NULL,
  `agenda` text NOT NULL,
  `pimpinan_rapat` varchar(255) NOT NULL,
  `moderator` varchar(255) NOT NULL,
  `tribe` varchar(255) NOT NULL,
  `flag` int(11) NOT NULL,
  `tor` varchar(255) NOT NULL,
  `undangan` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `paparan` varchar(255) NOT NULL,
  `form_absen` varchar(255) NOT NULL,
  `booking_ruangan` varchar(255) NOT NULL,
  `booking_link_meeting` varchar(255) NOT NULL,
  `booking_link_streaming` varchar(255) NOT NULL,
  `booking_konsumsi` varchar(255) NOT NULL,
  `booking_narasumber` varchar(255) NOT NULL,
  `posting_jadwal` varchar(255) NOT NULL,
  `posting_poster` varchar(255) NOT NULL,
  `booking_transportasi` varchar(255) NOT NULL,
  `booking_ruang_rapat` varchar(255) NOT NULL,
  `booking_kamar_hotel` varchar(255) NOT NULL,
  `itenary` varchar(255) NOT NULL,
  `form_sppd` varchar(255) NOT NULL,
  `norminatif_sppd` varchar(255) NOT NULL,
  `backdrop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`no`, `tipe_agenda`, `agenda_utama`, `nama_kegiatan`, `tipe_meeting`, `kategori_meeting`, `tanggal`, `pukul`, `tempat`, `link_meeting`, `agenda`, `pimpinan_rapat`, `moderator`, `tribe`, `flag`, `tor`, `undangan`, `poster`, `paparan`, `form_absen`, `booking_ruangan`, `booking_link_meeting`, `booking_link_streaming`, `booking_konsumsi`, `booking_narasumber`, `posting_jadwal`, `posting_poster`, `booking_transportasi`, `booking_ruang_rapat`, `booking_kamar_hotel`, `itenary`, `form_sppd`, `norminatif_sppd`, `backdrop`) VALUES
(1, '1', NULL, 'Rapat Wantiknas', '1', '2', '01/27/2021', '14:05', 'Wantiknas', 'http://localhost/wantiknas/kegiatan/save?', 'Rapat Wantiknas', 'qweqwe', 'TOPIK KIPLEH', '1', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '0', 1, 'Rapat Koordinasi', '2', '2', '01/22/2021', '13:05', 'Bogor', 'www.google.com', 'Menjalankan Rapat', 'Captain Alfredo', 'Pamanku', '1', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_narasumber`
--

CREATE TABLE `kegiatan_narasumber` (
  `no_kegiatan` int(11) NOT NULL,
  `no_narasumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_tag`
--

CREATE TABLE `kegiatan_tag` (
  `no_kegiatan` int(11) NOT NULL,
  `no_tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `narasumber`
--

CREATE TABLE `narasumber` (
  `no` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `narasumber`
--

INSERT INTO `narasumber` (`no`, `nama`, `telepon`, `email`, `deskripsi`, `foto`) VALUES
(2, 'R. Muhamad Firzatullah, S.Pd, M.Kom', '082125664824', 'firzatullah@civitas.unas.ac.id', '<p>R.Muhamad Firzatullah, S.Pd, M.Kom lahir di Bogor pada tanggal 6 April 1994.</p><ol><li>S1 - Universitas Negeri Jakarta</li><li>S2 - Institut Pertanian Bogor</li></ol>', 'qwewqe'),
(4, 'Onno W. Purbo', '087870127778', 'Onno W. Purbo', '<p>Onno W. Purbo</p>', 'https://select2.org/tagging');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `no` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `no` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `role` varchar(1) NOT NULL,
  `active` varchar(1) NOT NULL DEFAULT '1',
  `tribe` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`no`, `email`, `name`, `password`, `phone`, `role`, `active`, `tribe`) VALUES
(1, 'firzatullah@civitas.unas.ac.id', 'R. Muhamad Firzatullah', '$2y$10$1h4aA6NLzTNVGROAiBW/ou9/mSPSMTqrYqajGvEuUz6SZauakrHdS', '082125664824', '4', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `narasumber`
--
ALTER TABLE `narasumber`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `narasumber`
--
ALTER TABLE `narasumber`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

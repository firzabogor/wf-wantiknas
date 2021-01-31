-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2021 at 05:30 PM
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
-- Database: `workflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `name`) VALUES
(1, 'Bank Indonesia (Bank Sentral)'),
(2, 'Bank Negara Indonesia'),
(3, 'Bank Rakyat Indonesia'),
(4, 'Bank Tabungan Negara'),
(5, 'Bank Mandiri'),
(6, 'Bank Agroniaga, Tbk.'),
(7, 'Bank Antardaerah'),
(8, 'Bank Artha Graha Internasional, Tbk.'),
(9, 'Bank BNI Syariah'),
(10, 'Bank Bukopin, Tbk'),
(11, 'Bank Bumi Arta, Tbk'),
(12, 'Bank Central Asia Tbk.(BCA)'),
(13, 'Bank Cimb Niaga, Tbk'),
(14, 'Bank Danamon Indonesia Tbk'),
(15, 'Bank Ekonomi Raharja, Tbk'),
(16, 'Bank Ganesha'),
(17, 'Bank Hana'),
(18, 'Bank Himpunan Saudara 1906, Tbk'),
(19, 'Bank ICB Bumiputera Tbk'),
(20, 'Bank ICBC Indonesia'),
(21, 'Bank Index Selindo'),
(22, 'Bank Internasional Indonesia Tbk'),
(23, 'Bank Maspion Indonesia'),
(24, 'Bank Mayapada International Tbk'),
(25, 'Bank Mega, Tbk'),
(26, 'Bank Mestika Dharma'),
(27, 'Bank Metro Express'),
(28, 'Bank Muamalat Indonesia'),
(29, 'Bank Mutiara, Tbk'),
(30, 'Bank Nusantara Parahyangan,Tbk'),
(31, 'Bank OCBC NISP, Tbk'),
(32, 'Bank Of India Indonesia, Tbk'),
(33, 'Bank Permata Tbk'),
(34, 'Bank SBI Indonesia'),
(35, 'Bank Sinarmas, Tbk'),
(36, 'Bank Syariah Mandiri'),
(37, 'Bank Syariah Mega Indonesia'),
(38, 'Bank UOB Indonesia (Dahulu Uob Buana)'),
(39, 'Pan Indonesia Bank, Tbk'),
(40, 'QNB Bank Kesawan Tbk'),
(41, 'Anglomas Internasional Bank'),
(42, 'Bank Andara'),
(43, 'Bank Artos Indonesia'),
(44, 'Bank Bca Syariah'),
(45, 'Bank Bisnis Internasional'),
(46, 'Bank Bri Syariah'),
(47, 'Bank Fama Internasional'),
(48, 'Bank Harda Internasional'),
(49, 'Bank Ina Perdana'),
(50, 'Bank Jabar Banten Syariah'),
(51, 'Bank Jasa Jakarta'),
(52, 'Bank Kesejahteraan Ekonomi'),
(53, 'Bank Mayora'),
(54, 'Bank Mitraniaga'),
(55, 'Bank Multi Arta Sentosa'),
(56, 'Bank Panin Syariah'),
(57, 'Bank Pundi Indonesia, Tbk'),
(58, 'Bank Royal Indonesia'),
(59, 'Bank Sahabat Purba Danarta'),
(60, 'Bank Sahabat Sampoerna'),
(61, 'Bank Sinar Harapan Bali'),
(62, 'Bank Syariah Bukopin'),
(63, 'Bank Tabungan Pensiunan Nasional, Tbk'),
(64, 'Bank Victoria International, Tbk'),
(65, 'Bank Victoria Syariah'),
(66, 'Bank Yudha Bhakti'),
(67, 'Centratama Nasional Bank'),
(68, 'Liman International Bank'),
(69, 'Nationalnobu'),
(70, 'Prima Master Bank'),
(71, 'Bank Commonwealth'),
(72, 'Bank Agris'),
(73, 'Bank ANZ Indonesia'),
(74, 'Bank BNP Paribas Indonesia'),
(75, 'Bank Capital Indonesia, Tbk'),
(76, 'Bank DBS Indonesia'),
(77, 'Bank KEB Indonesia'),
(78, 'Bank Maybank Syariah Indonesia'),
(79, 'Bank Mizuho Indonesia'),
(80, 'Bank Rabobank International Indonesia'),
(81, 'Bank Resona Perdania'),
(82, 'Bank Windu Kentjana International, Tbk'),
(83, 'Bank Woori Indonesia'),
(84, 'Bank China Trust Indonesia'),
(85, 'Bank Sumitomo Mitsui Indonesia'),
(86, 'Bank Of America, N.A'),
(87, 'Bank Of China Limited'),
(88, 'Citibank N.A.'),
(89, 'Deutsche Bank AG.'),
(90, 'JP. Morgan Chase Bank, N.A.'),
(91, 'Standard Chartered Bank'),
(92, 'The Bangkok Bank Comp. Ltd'),
(93, 'The Bank Of Tokyo Mitsubishi UFJ Ltd'),
(94, 'The Hongkong & Shanghai Banking Corp'),
(95, 'The Royal Bank Of Scotland N.V.'),
(96, 'Bank Aceh'),
(97, 'Bank DKI'),
(98, 'Bank Lampung'),
(99, 'Bank Kalimantan Tengah'),
(100, 'BPD Jambi'),
(101, 'BPD Sulawesi Selatan Dan Sulawesi Barat'),
(102, 'BPD Riau Dan Kepulauan Riau'),
(103, 'BPD Sumatera Barat'),
(104, 'Bank Jabar Banten, Tbk (BJB)'),
(105, 'BPD Maluku'),
(106, 'BPD Bengkulu'),
(107, 'Bank Jateng ( dahulu BPD Jawa Tengah )'),
(108, 'Bank Jatim (dahulu bernama BPD Jawa Timur)'),
(109, 'BPD Kalimantan Barat'),
(110, 'BPD Nusa Tenggara Barat'),
(111, 'BPD Nusa Tenggara Timur'),
(112, 'BPD Sulawesi Tengah'),
(113, 'BPD Sulawesi Utara'),
(114, 'BPD Bali'),
(115, 'BPD Kalimantan Selatan'),
(116, 'BPD Papua'),
(117, 'BPD Sumatera Selatan Dan Bangka Belitung'),
(118, 'BPD Sumatera Utara'),
(119, 'BPD Sulawesi Tenggara'),
(120, 'BPD Yogyakarta'),
(121, 'BPD Kalimantan Timur'),
(122, 'PT Bank Syariah Mandiri'),
(123, 'PT. Bank Syariah Muamalat Indonesia'),
(124, 'PT Bank Syariah BNI'),
(125, 'PT Bank Syariah BRI'),
(126, 'PT. Bank Syariah Mega Indonesia'),
(127, 'PT Bank Jabar dan Banten'),
(128, 'PT Bank Panin Syariah'),
(129, 'PT Bank Syariah Bukopin'),
(130, 'PT Bank Victoria Syariah'),
(131, 'PT BCA Syariah'),
(132, 'PT Maybank Indonesia Syariah'),
(133, 'Bank Danamon'),
(134, 'Bank Permata'),
(135, 'Bank Internasional Indonesia (BII)'),
(136, 'CIMB Niaga'),
(137, 'HSBC, Ltd.'),
(138, 'Bank DKI'),
(139, 'BPD DIY'),
(140, 'BPD Jawa Tengah (Jateng)'),
(141, 'BPD Jawa Timur (Jatim)'),
(142, 'BPD Banda Aceh'),
(143, 'BPD Sumatera Utara (Sumut)'),
(144, 'BPD Sumatera Barat (Sumbar)'),
(145, 'BPD Riau'),
(146, 'BPD Sumatera Selatan (Sumsel)'),
(147, 'BPD Kalimantan Selatan (Kalsel)'),
(148, 'BPD Kalimantan Barat (Kalbar)'),
(149, 'BPD Kalimantan Timur (Kaltim)'),
(150, 'BPD Sulawesi Selatan (Sulsel)'),
(151, 'BPD Nusa Tenggara Barat (NTB)'),
(152, 'BTN'),
(153, 'Bank Tabungan Pensiunan Nasional (BTPN)'),
(154, 'OCBC NISP'),
(155, 'Bank Sinarmas'),
(156, 'BPD Jambi'),
(157, 'UUS Bank Danamon'),
(158, 'UUS Bank Permata'),
(159, 'UUS BII'),
(160, 'UUS Bank Tabungan Negara'),
(161, 'UUS CIMB Niaga'),
(162, 'UUS BTPN'),
(163, 'UUS HSBC'),
(164, 'UUS BPD DKI'),
(165, 'UUS BPD Banda Aceh'),
(166, 'UUS BPD Sumut'),
(167, 'UUS BPD Riau'),
(168, 'UUS BPD Sumbar'),
(169, 'UUS BPD Sumsel'),
(170, 'UUS BPD Jateng'),
(171, 'UUS BPD DIY'),
(172, 'UUS BPD Jatim'),
(173, 'UUS BPD Kalsel'),
(174, 'UUS BPD Kalbar'),
(175, 'UUS BPD Kaltim'),
(176, 'UUS BPD Sulsel'),
(177, 'UUS BPD Nusa Tenggara Barat'),
(178, 'UUS OCBC NISP'),
(179, 'UUS Bank Sinarmas'),
(180, 'UUS BNI'),
(181, 'UUS BPD Jabar dan Banten'),
(182, 'UUS BEI'),
(183, 'UUS Bukopin'),
(184, 'UUS IFI'),
(185, 'UUS BRI'),
(186, 'UUS Lippo'),
(187, 'UUS BPD Jambi');

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE `institution` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('Academic','Business','Government','Community') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `institution`
--

INSERT INTO `institution` (`id`, `name`, `type`) VALUES
(1, 'Universitas Nasional', 'Academic'),
(2, 'Dewan Teknologi Informasi dan Komunikasi Nasional', 'Government');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `agenda` varchar(255) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `host` varchar(255) DEFAULT NULL,
  `ds` varchar(50) NOT NULL,
  `de` varchar(50) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `tribe` int(11) NOT NULL,
  `mt` int(11) NOT NULL,
  `mc` int(11) NOT NULL,
  `at` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `moderator` varchar(255) DEFAULT NULL,
  `chairman` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meeting_speaker`
--

CREATE TABLE `meeting_speaker` (
  `meeting` int(11) NOT NULL,
  `speaker` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meeting_tag`
--

CREATE TABLE `meeting_tag` (
  `meeting` int(11) NOT NULL,
  `tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meeting_user`
--

CREATE TABLE `meeting_user` (
  `meeting` int(11) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` enum('child','parent','master') NOT NULL,
  `slug` varchar(255) NOT NULL,
  `parent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `role`, `slug`, `parent`) VALUES
(1, 'User', 'master', 'user', NULL),
(2, 'Tribe', 'master', 'tribe', NULL),
(3, 'Tag', 'master', 'tag', NULL),
(4, 'Narasumber', 'master', 'narasumber', NULL),
(5, 'Role', 'master', 'role', NULL),
(6, 'Instansi', 'master', 'instansi', NULL),
(7, 'Jabatan', 'master', 'jabatan', NULL),
(8, 'Bank', 'master', 'bank', NULL),
(9, 'Dashboard', 'parent', 'dashboard', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `occupation`
--

CREATE TABLE `occupation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `occupation`
--

INSERT INTO `occupation` (`id`, `name`) VALUES
(1, 'Direktur Utama'),
(2, 'Dosen');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Super Admin'),
(2, 'Direktur Eksekutif'),
(3, 'Sekertaris Eksekutif'),
(4, 'Tribe Leader/ Tenaga Ahli'),
(5, 'Asisten TA (Konten)'),
(6, 'Asisten TA (Administrasi)'),
(7, 'Humas'),
(8, 'Design Grafis'),
(9, 'Administrasi Keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `speakers`
--

CREATE TABLE `speakers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `institution` int(11) NOT NULL,
  `occupation` int(11) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `number` varchar(30) NOT NULL,
  `bank` int(11) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `an` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tribes`
--

CREATE TABLE `tribes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `responsibility` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tribes`
--

INSERT INTO `tribes` (`id`, `name`, `responsibility`) VALUES
(0, '-', '-'),
(1, 'Tribe 1', 'Government, Security, Workflow System'),
(2, 'Tribe 2', 'SPBE, Kegiatan Internal'),
(3, 'Tribe 3', 'Infrastruktur, Data Driven'),
(4, 'Tribe 4', 'Talenta Digital, Education, E-Health'),
(5, 'Tribe 5', 'Layanan Berita, Design, Streaming'),
(6, 'Tribe 6', 'Administrasi Keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `tribe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `phone`, `role`, `active`, `tribe`) VALUES
(1, 'firzatullah@civitas.unas.ac.id', 'R.Muhamad Firzatullah', '$2y$10$WlmjCYakrKL1VvPQlBDkp.OBQozAKy5R2kifaQhkuOSurQUV07bfm', '+6282125664824', 4, 1, 1),
(2, 'albaar.rubhasy@civitas.unas.ac.id', 'Albaar Rubhasy', '$2y$10$xenasMj3Mc2E/u.l62bFdOx8uG3voJKgD3ZAfo6qalrEgKHVhNaxm', '+6282125664824', 4, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institution`
--
ALTER TABLE `institution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occupation`
--
ALTER TABLE `occupation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speakers`
--
ALTER TABLE `speakers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tribes`
--
ALTER TABLE `tribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `institution`
--
ALTER TABLE `institution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `occupation`
--
ALTER TABLE `occupation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `speakers`
--
ALTER TABLE `speakers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tribes`
--
ALTER TABLE `tribes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

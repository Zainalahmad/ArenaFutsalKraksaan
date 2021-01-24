-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 08:41 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arena_futsal`
--

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id` int(11) NOT NULL,
  `id_lapangan` int(11) NOT NULL,
  `jam` time NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id`, `id_lapangan`, `jam`, `harga`) VALUES
(1, 1, '08:00:00', 60000),
(4, 1, '09:00:00', 60000),
(5, 1, '10:00:00', 60000),
(6, 1, '11:00:00', 60000),
(7, 1, '12:00:00', 60000),
(8, 1, '13:00:00', 60000),
(9, 1, '13:00:00', 60000),
(10, 1, '14:00:00', 60000),
(11, 1, '15:00:00', 60000),
(12, 1, '16:00:00', 85000),
(13, 1, '17:00:00', 85000),
(14, 1, '18:00:00', 85000),
(15, 1, '19:00:00', 85000),
(16, 1, '20:00:00', 85000),
(17, 1, '21:00:00', 85000),
(18, 1, '22:00:00', 85000),
(19, 1, '23:00:00', 85000),
(20, 1, '24:00:00', 85000),
(21, 2, '08:00:00', 60000),
(22, 2, '09:00:00', 60000),
(23, 2, '10:00:00', 60000),
(24, 2, '11:00:00', 60000),
(25, 2, '12:00:00', 60000),
(26, 2, '13:00:00', 60000),
(27, 2, '14:00:00', 60000),
(28, 2, '14:00:00', 60000),
(29, 2, '15:00:00', 60000),
(30, 2, '16:00:00', 85000),
(31, 2, '17:00:00', 85000),
(32, 2, '18:00:00', 85000),
(33, 2, '19:00:00', 85000),
(34, 2, '20:00:00', 85000),
(35, 2, '21:00:00', 85000),
(36, 2, '22:00:00', 85000),
(37, 2, '23:00:00', 85000),
(38, 2, '24:00:00', 85000),
(59, 3, '08:00:00', 75000),
(60, 3, '09:00:00', 75000),
(61, 3, '10:00:00', 75000),
(62, 3, '11:00:00', 75000),
(63, 3, '12:00:00', 75000),
(64, 3, '13:00:00', 75000),
(65, 3, '13:00:00', 75000),
(66, 3, '14:00:00', 75000),
(67, 3, '15:00:00', 75000),
(68, 3, '16:00:00', 100000),
(69, 3, '17:00:00', 100000),
(70, 3, '18:00:00', 100000),
(71, 3, '19:00:00', 100000),
(72, 3, '20:00:00', 100000),
(73, 3, '21:00:00', 100000),
(74, 3, '22:00:00', 100000),
(75, 3, '23:00:00', 100000),
(76, 3, '24:00:00', 100000),
(77, 4, '08:00:00', 75000),
(78, 4, '09:00:00', 75000),
(79, 4, '10:00:00', 75000),
(80, 4, '11:00:00', 75000),
(81, 4, '12:00:00', 75000),
(82, 4, '13:00:00', 75000),
(83, 4, '13:00:00', 75000),
(84, 4, '14:00:00', 75000),
(85, 4, '15:00:00', 75000),
(86, 4, '16:00:00', 100000),
(87, 4, '17:00:00', 100000),
(88, 4, '18:00:00', 100000),
(89, 4, '19:00:00', 100000),
(90, 4, '20:00:00', 100000),
(91, 4, '21:00:00', 100000),
(92, 4, '22:00:00', 100000),
(93, 4, '23:00:00', 100000),
(94, 4, '24:00:00', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(12) NOT NULL,
  `tanggal` varchar(12) NOT NULL,
  `jam` varchar(5) NOT NULL,
  `durasi` int(11) NOT NULL,
  `lapangan` varchar(100) NOT NULL,
  `nama` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `tanggal`, `jam`, `durasi`, `lapangan`, `nama`) VALUES
(3, '2021-01-30', '12:00', 1, 'Taraflex 2', 'Chiiii'),
(4, '2021-01-26', '09:00', 1, 'Taraflex 2', 'Chiiii'),
(5, '2021-01-26', '09:00', 1, 'Taraflex 2', 'Chiiii');

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `id_lapangan` int(12) NOT NULL,
  `img` varchar(100) NOT NULL,
  `lapangan` varchar(255) NOT NULL,
  `harga_siang` int(12) NOT NULL,
  `harga_malam` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`id_lapangan`, `img`, `lapangan`, `harga_siang`, `harga_malam`) VALUES
(1, 'st.jpg', 'Sintetis 1', 60000, 75000),
(2, 'st.jpg', 'Sintetis 2', 60000, 75000),
(3, 'tr.jpg', 'Taraflex 1', 75000, 90000),
(4, 'tr.jpg', 'Taraflex 2', 75000, 90000),
(11, '', 'Sintetis Timur2', 75000, 90000),
(12, '', 'Sintetis Timurq', 75000, 90000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(12) NOT NULL,
  `tgl_transaksi` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_users` int(12) NOT NULL,
  `tgl_booking` date NOT NULL,
  `id_lapangan` int(11) NOT NULL,
  `jam_booking` time NOT NULL,
  `durasi` int(2) NOT NULL,
  `total_transaksi` varchar(11) NOT NULL,
  `bukti_tf` varchar(100) NOT NULL,
  `status_bayar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tgl_transaksi`, `id_users`, `tgl_booking`, `id_lapangan`, `jam_booking`, `durasi`, `total_transaksi`, `bukti_tf`, `status_bayar`) VALUES
(1, '2021-01-24 19:01:39', 2, '2021-01-26', 3, '15:00:00', 1, '75000', 'baymax_hi.png', 'Sudah Bayar'),
(2, '2021-01-24 19:02:37', 2, '2021-01-28', 1, '17:00:00', 1, '85000', 'logo.jpg', 'Konfirmasi'),
(3, '2021-01-24 19:04:39', 2, '2021-01-27', 2, '10:00:00', 1, '60000', 'IMG.jpg', 'Konfirmasi'),
(4, '2021-01-24 19:05:18', 2, '2021-01-30', 4, '12:00:00', 1, '75000', 'baymax_hi1.png', 'Konfirmasi'),
(5, '2021-01-24 19:10:51', 2, '2021-01-26', 4, '09:00:00', 1, '75000', 'logo1.jpg', 'Sudah Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `username`, `telepon`, `password`, `level`) VALUES
(1, 'Zainal Abidin', 'admin@admin.com', 'admin', '088814214', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'Chiiii', 'chelsea.rputri@gmail.com', 'chiii', '0897674668797', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(3, 'DavidB', 'david@gmail.com', 'david1', '098', '5ff84c7646419ffeb65cb5625de99723', 0),
(4, 'zainal', 'zainzain@gmail.com', 'zain', '089765675646', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(5, '', '', 'a', 'a', '$2y$10$kptxKc6gilkRIkaRd0ZenOLdoHQDJkq766vHJ.oL0Ny9aOEWzSMGu', 0),
(14, 'Revaldi', 'revaldi@gmail.com', 'reval01', '0823101920', '$2y$10$TsZ190S1AWz7fANnkW8to.FTSJ81xM50JiNYdv6A3PixSM6oNVNtm', 0),
(15, 'Diana Maulidia', 'diana@gmail.com', 'Diana', '098765', '$2y$10$CUlOBuEMkk1sgSUUYUAZzeiPerzJE.BiG3CmfhKGRtrdKJ2J3FRPi', 0),
(16, 'Zainal Abidin', 'zainalabidin170197@gmail.com', 'Zainahmad', '082301209247', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(17, 'sholihi', 'sholi@gmail.com', 'shol', '082301209247', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(18, 'Anton', 'anton@gmail.com', 'anton1', '082301209247', '81dc9bdb52d04dc20036dbd8313ed055', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`id_lapangan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lapangan`
--
ALTER TABLE `lapangan`
  MODIFY `id_lapangan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

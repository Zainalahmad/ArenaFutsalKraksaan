-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2021 pada 19.53
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `id` int(11) NOT NULL,
  `id_lapangan` varchar(250) NOT NULL,
  `jam` time NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`id`, `id_lapangan`, `jam`, `harga`) VALUES
(1, '1', '08:00:00', 60000),
(4, '1', '09:00:00', 60000),
(5, '1', '10:00:00', 60000),
(6, '1', '11:00:00', 60000),
(7, '1', '12:00:00', 60000),
(8, '1', '13:00:00', 60000),
(9, '1', '13:00:00', 60000),
(10, '1', '14:00:00', 60000),
(11, '1', '15:00:00', 60000),
(12, '1', '16:00:00', 85000),
(13, '1', '17:00:00', 85000),
(14, '1', '18:00:00', 85000),
(15, '1', '19:00:00', 85000),
(16, '1', '20:00:00', 85000),
(17, '1', '21:00:00', 85000),
(18, '1', '22:00:00', 85000),
(19, '1', '23:00:00', 85000),
(20, '1', '24:00:00', 85000),
(21, '2', '08:00:00', 60000),
(22, '2', '09:00:00', 60000),
(23, '2', '10:00:00', 60000),
(24, '2', '11:00:00', 60000),
(25, '2', '12:00:00', 60000),
(26, '2', '13:00:00', 60000),
(27, '2', '14:00:00', 60000),
(28, '2', '14:00:00', 60000),
(29, '2', '15:00:00', 60000),
(30, '2', '16:00:00', 85000),
(31, '2', '17:00:00', 85000),
(32, '2', '18:00:00', 85000),
(33, '2', '19:00:00', 85000),
(34, '2', '20:00:00', 85000),
(35, '2', '21:00:00', 85000),
(36, '2', '22:00:00', 85000),
(37, '2', '23:00:00', 85000),
(38, '2', '24:00:00', 85000),
(59, '3', '08:00:00', 75000),
(60, '3', '09:00:00', 75000),
(61, '3', '10:00:00', 75000),
(62, '3', '11:00:00', 75000),
(63, '3', '12:00:00', 75000),
(64, '3', '13:00:00', 75000),
(65, '3', '13:00:00', 75000),
(66, '3', '14:00:00', 75000),
(67, '3', '15:00:00', 75000),
(68, '3', '16:00:00', 100000),
(69, '3', '17:00:00', 100000),
(70, '3', '18:00:00', 100000),
(71, '3', '19:00:00', 100000),
(72, '3', '20:00:00', 100000),
(73, '3', '21:00:00', 100000),
(74, '3', '22:00:00', 100000),
(75, '3', '23:00:00', 100000),
(76, '3', '24:00:00', 100000),
(77, '4', '08:00:00', 75000),
(78, '4', '09:00:00', 75000),
(79, '4', '10:00:00', 75000),
(80, '4', '11:00:00', 75000),
(81, '4', '12:00:00', 75000),
(82, '4', '13:00:00', 75000),
(83, '4', '13:00:00', 75000),
(84, '4', '14:00:00', 75000),
(85, '4', '15:00:00', 75000),
(86, '4', '16:00:00', 100000),
(87, '4', '17:00:00', 100000),
(88, '4', '18:00:00', 100000),
(89, '4', '19:00:00', 100000),
(90, '4', '20:00:00', 100000),
(91, '4', '21:00:00', 100000),
(92, '4', '22:00:00', 100000),
(93, '4', '23:00:00', 100000),
(94, '4', '24:00:00', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(12) NOT NULL,
  `hari` varchar(12) NOT NULL,
  `jam` varchar(5) NOT NULL,
  `harga` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapangan`
--

CREATE TABLE `lapangan` (
  `id_lapangan` int(12) NOT NULL,
  `img` varchar(100) NOT NULL,
  `lapangan` varchar(255) NOT NULL,
  `harga_siang` int(12) NOT NULL,
  `harga_malam` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lapangan`
--

INSERT INTO `lapangan` (`id_lapangan`, `img`, `lapangan`, `harga_siang`, `harga_malam`) VALUES
(1, 'st.jpg', 'Sintetis 1', 60000, 75000),
(2, 'st.jpg', 'Sintetis 2', 60000, 75000),
(3, 'tr.jpg', 'Taraflex 1', 75000, 90000),
(4, 'tr.jpg', 'Taraflex 2', 75000, 90000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id` int(12) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(12) NOT NULL,
  `tgl_transaksi` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_user` int(12) NOT NULL,
  `tgl_booking` date NOT NULL,
  `id_lapangan` int(11) NOT NULL,
  `jam_booking` varchar(5) NOT NULL,
  `durasi` int(2) NOT NULL,
  `total_transaksi` varchar(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `username`, `telepon`, `password`, `level`) VALUES
(1, 'Zainal Abidin', 'admin@admin.com', 'admin', '088814214', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'Chelsea Ramadanti Anisah Putri', 'chelsea.rputri@gmail.com', 'chiii', '0897674668797', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(3, 'DavidB', 'david@gmail.com', 'david1', '098', '5ff84c7646419ffeb65cb5625de99723', 0),
(4, 'zainal', 'zainzain@gmail.com', 'zain', '089765675646', '81dc9bdb52d04dc20036dbd8313ed055', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`id_lapangan`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `harga`
--
ALTER TABLE `harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lapangan`
--
ALTER TABLE `lapangan`
  MODIFY `id_lapangan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

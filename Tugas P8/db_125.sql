-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Okt 2022 pada 16.50
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_125`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rifqi`
--

CREATE TABLE `tbl_rifqi` (
  `id_rifqi` int(11) NOT NULL,
  `nama_rifqi` varchar(40) DEFAULT NULL,
  `alamat_rifqi` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_rifqi`
--

INSERT INTO `tbl_rifqi` (`id_rifqi`, `nama_rifqi`, `alamat_rifqi`) VALUES
(1, 'Miftachur', 'Mejero'),
(6, 'Husain', 'Sendangagung'),
(8, 'Miftachur', 'Lamongan'),
(9, 'Husain', 'Paciran'),
(10, 'Yusin', 'Kediri');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_rifqi`
--
ALTER TABLE `tbl_rifqi`
  ADD PRIMARY KEY (`id_rifqi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_rifqi`
--
ALTER TABLE `tbl_rifqi`
  MODIFY `id_rifqi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

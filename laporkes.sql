-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Agu 2023 pada 15.47
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laporkes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `tanggal_laporan` date NOT NULL,
  `nama_puskesmas` varchar(255) NOT NULL,
  `laporan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`id`, `nama`, `alamat`, `no_hp`, `tanggal_laporan`, `nama_puskesmas`, `laporan`, `status`) VALUES
(33, 'Autem est voluptatem', 'Praesentium reiciend', 'Voluptas officia qui', '2008-01-17', '', 'Sed non qui non sed ', ''),
(34, 'Et fugit iusto est', 'Commodo id molestias', 'Architecto sunt volu', '1993-03-05', '', 'Sed dolores neque es', ''),
(35, 'Sed dolor qui minim ', 'Laudantium explicab', 'Itaque quia itaque q', '1984-09-03', '', 'Quo aspernatur id v', ''),
(36, 'dsf', 'wef', 'wef', '2023-08-04', '', 'wef', ''),
(37, 'Et qui esse magnam ', 'Occaecat ullam volup', 'Eu dolores cillum qu', '1991-05-20', '', 'Voluptas minima eos', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `puskesmas`
--

CREATE TABLE `puskesmas` (
  `id_puskesmas` int(11) NOT NULL,
  `nama_puskesmas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `puskesmas`
--

INSERT INTO `puskesmas` (`id_puskesmas`, `nama_puskesmas`) VALUES
(1, 'Tamangapa'),
(2, 'Perintis'),
(3, 'Pampang'),
(4, 'Urip Sumoharjo');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`id_puskesmas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `puskesmas`
--
ALTER TABLE `puskesmas`
  MODIFY `id_puskesmas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

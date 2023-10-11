-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Okt 2023 pada 14.14
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
-- Struktur dari tabel `infokondisipkm`
--

CREATE TABLE `infokondisipkm` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `infokondisipkm`
--

INSERT INTO `infokondisipkm` (`id`, `name`, `title`, `info`, `date`) VALUES
(2, 'Puskesmas Tamangapa', 'Event Donor Darah', 'hari ini di lakukan donor darah\r\n', '2023-10-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporanmasyarakat`
--

CREATE TABLE `laporanmasyarakat` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `Puskesmas` varchar(255) NOT NULL,
  `laporan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `laporanmasyarakat`
--

INSERT INTO `laporanmasyarakat` (`id`, `name`, `alamat`, `no_hp`, `date`, `Puskesmas`, `laporan`) VALUES
(1, 'Rangga', 'Abdesir', '082487395623', '2023-10-10', 'Puskesmas 1 ', 'aman'),
(2, 'Alam', 'Petterani', '082148293498', '2023-10-10', 'Puskesmas 1 ', 'kurang aman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-10-01-201843', 'App\\Database\\Migrations\\UserTable', 'default', 'App', 1696192381, 1),
(3, '2023-10-04-155916', 'App\\Database\\Migrations\\InfoKondisiPKM', 'default', 'App', 1696436780, 2),
(7, '2023-10-05-121843', 'App\\Database\\Migrations\\RiportMonthFaskes', 'default', 'App', 1696675030, 3),
(8, '2023-10-10-121052', 'App\\Database\\Migrations\\LaporanMasyarakat', 'default', 'App', 1696940789, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `riportmonthfaskes`
--

CREATE TABLE `riportmonthfaskes` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_faskes` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `puskesmas` varchar(255) NOT NULL,
  `name_laporan` varchar(255) NOT NULL,
  `catatan` text NOT NULL DEFAULT 'null',
  `file` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `riportmonthfaskes`
--

INSERT INTO `riportmonthfaskes` (`id`, `name`, `name_faskes`, `address`, `puskesmas`, `name_laporan`, `catatan`, `file`, `date`) VALUES
(1, 'Rangga', 'Klinik Berkah', 'Petterani', 'Puskesmas 1 ', 'Donor darah', 'donor darah', 'uploads/1696675331_4467a6334fdd969178fe.pdf', '2023-10-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usertable`
--

CREATE TABLE `usertable` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('dinkes','puskes','faskes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `username`, `password`, `role`) VALUES
(10, 'Dines Kesehatan', 'dinesKesehatan', '$2y$10$w0/u4QbjRvYdRgpSkyLkA.NSymJWvRaWgDMfQJuTx2UaIlKrgkIDm', 'dinkes'),
(11, 'Puskesmas 1', 'puskesmas1', '$2y$10$.SYci7OLQSMiJtTQsbE49.sDlPtpkPE9GjerFB/rIjjA1sGAcY..a', 'puskes'),
(12, 'Klinik Berkah', 'klinik Berkah', '$2y$10$EKg7e.Y2.ZDuuMYQzxzJWubr.4H19pCiw5yZZWY8fd5obj2pO3DAi', 'faskes');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `infokondisipkm`
--
ALTER TABLE `infokondisipkm`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporanmasyarakat`
--
ALTER TABLE `laporanmasyarakat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riportmonthfaskes`
--
ALTER TABLE `riportmonthfaskes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `infokondisipkm`
--
ALTER TABLE `infokondisipkm`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `laporanmasyarakat`
--
ALTER TABLE `laporanmasyarakat`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `riportmonthfaskes`
--
ALTER TABLE `riportmonthfaskes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

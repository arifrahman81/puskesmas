-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2023 pada 09.10
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
-- Struktur dari tabel `daftar_antrian`
--

CREATE TABLE `daftar_antrian` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `puskesmas` varchar(255) NOT NULL,
  `keluhan` text NOT NULL,
  `jam` time NOT NULL,
  `nomor_antrian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `daftar_antrian`
--

INSERT INTO `daftar_antrian` (`id`, `name`, `tgl_lahir`, `alamat`, `no_hp`, `puskesmas`, `keluhan`, `jam`, `nomor_antrian`) VALUES
(1, 'Rangga', '2006-05-23', 'Makassar', '08294592948', 'Puskesmas 1 ', 'Sehat', '08:00:00', '231029-01'),
(2, 'Arif', '2023-10-25', 'Tello', '08237498349', 'Puskesmas 1 ', 'Sehat', '09:00:00', '231029-01');

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
  `no_laporan` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `Puskesmas` varchar(255) NOT NULL,
  `laporan` text NOT NULL,
  `status` enum('terkirim','dibaca','ditangani') NOT NULL DEFAULT 'terkirim'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `laporanmasyarakat`
--

INSERT INTO `laporanmasyarakat` (`id`, `no_laporan`, `name`, `alamat`, `no_hp`, `tanggal`, `Puskesmas`, `laporan`, `status`) VALUES
(1, '231012001', 'Rangga', 'Petterani', '0839475974', '2023-10-12', 'Puskesmas 1 ', 'Aman', 'dibaca'),
(4, '231012002', 'Alam', 'Makassar', '082347493851', '2023-10-12', 'Puskesmas 1 ', 'tidak aman', 'terkirim'),
(5, '231012003', 'Afdhal', 'Daya', '082783108439', '2023-10-12', 'Puskesmas 1 ', 'Aman', 'terkirim'),
(6, '231012004', 'Nuralam', 'Abdesir', '082345346347', '2023-10-12', 'Puskesmas 1 ', 'Aman', 'terkirim'),
(7, '231012005', 'Arif', 'Tello Baru', '0822346239234', '2023-10-12', 'Puskesmas 1 ', 'Aman', 'terkirim'),
(8, '231012006', 'Fauzy', 'Abdesir', '082148302391', '2023-10-12', 'Puskesmas 1 ', 'Aman', 'terkirim');

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
(9, '2023-10-10-121052', 'App\\Database\\Migrations\\LaporanMasyarakat', 'default', 'App', 1697079781, 4),
(10, '2023-10-29-120739', 'App\\Database\\Migrations\\DaftarAntrian', 'default', 'App', 1698581801, 5);

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
  `file_path` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `riportmonthfaskes`
--

INSERT INTO `riportmonthfaskes` (`id`, `name`, `name_faskes`, `address`, `puskesmas`, `name_laporan`, `catatan`, `file`, `file_path`, `date`) VALUES
(2, 'Rangga', 'Klinik Berkah', 'Petterani', 'Puskesmas 1 ', 'Donor darah', 'Donor Darah', '1697147358_992b85667fd0a60ab8b9.pdf', 'C:\\xampp\\tmp', '2023-10-12'),
(3, 'Alam', 'klinik manjur', 'Makassar', 'Puskesmas 1 ', 'Faksin', 'Faksin', '1697147813_1cf9c59ccc456ce36ae9.docx', 'C:\\xampp\\tmp', '2023-10-12'),
(4, 'user', 'klinik ashi', 'Makassar', 'Puskesmas 1 ', 'Jumlah Pasien', 'Pasien', '1697147977_a0aca252aa23d162915a.docx', 'C:\\xampp\\tmp', '2023-10-12'),
(5, 'NurAlam paku bumi', 'klinik manjur', 'Petterani', 'Puskesmas 1 ', 'Donor darah', 'Darah', '1697148107_9d2d609c3461d223bb6c.pdf', 'C:\\xampp\\tmp', '2023-10-12'),
(6, 'user1', 'Klinik Berkah', 'Petterani', 'Puskesmas 1 ', 'Donor darah', 'Darah', '1697148745_9f244a3ac71f2e83e1d1.pdf', 'C:\\xampp\\tmp', '2023-10-12');

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
-- Indeks untuk tabel `daftar_antrian`
--
ALTER TABLE `daftar_antrian`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `daftar_antrian`
--
ALTER TABLE `daftar_antrian`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `infokondisipkm`
--
ALTER TABLE `infokondisipkm`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `laporanmasyarakat`
--
ALTER TABLE `laporanmasyarakat`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `riportmonthfaskes`
--
ALTER TABLE `riportmonthfaskes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

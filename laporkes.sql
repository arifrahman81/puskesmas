-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2023 pada 22.53
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
  `nomor_antrian` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_puskesmas`
--

CREATE TABLE `laporan_puskesmas` (
  `id` int(11) NOT NULL,
  `tahun` varchar(50) DEFAULT NULL,
  `bulan` varchar(50) DEFAULT NULL,
  `provinsi` varchar(225) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `puskesmas` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `nama_penderita` varchar(255) DEFAULT NULL,
  `umur` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `nama_wali` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tgl_kunjungan` varchar(255) DEFAULT NULL,
  `diagnosa` varchar(255) DEFAULT NULL,
  `klinis` varchar(50) DEFAULT NULL,
  `laboratorium` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(10, '2023-10-29-120739', 'App\\Database\\Migrations\\DaftarAntrian', 'default', 'App', 1698581801, 5),
(14, '2023-11-05-162320', 'App\\Database\\Migrations\\SendInformation', 'default', 'App', 1699207720, 7),
(15, '2023-11-13-204413', 'App\\Database\\Migrations\\LaporanMasyarakat', 'default', 'App', 1699908276, 8);

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `send_information`
--

CREATE TABLE `send_information` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nama_faskes` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `puskesmas` varchar(255) NOT NULL,
  `informasi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
(11, 'Puskesmas 2', 'puskesmas2', '$2y$10$kUF3.Of.eqIlq3eV7dk4Au8aHnGI7JZWg/IolAUfmd/8832TxstA2', 'puskes'),
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
-- Indeks untuk tabel `laporan_puskesmas`
--
ALTER TABLE `laporan_puskesmas`
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
-- Indeks untuk tabel `send_information`
--
ALTER TABLE `send_information`
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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `infokondisipkm`
--
ALTER TABLE `infokondisipkm`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `laporanmasyarakat`
--
ALTER TABLE `laporanmasyarakat`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `laporan_puskesmas`
--
ALTER TABLE `laporan_puskesmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `riportmonthfaskes`
--
ALTER TABLE `riportmonthfaskes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `send_information`
--
ALTER TABLE `send_information`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

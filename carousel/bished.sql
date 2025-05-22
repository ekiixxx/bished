-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jan 2022 pada 09.40
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bished`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarmobil`
--

CREATE TABLE `daftarmobil` (
  `nama` varchar(30) NOT NULL,
  `tipe` varchar(20) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `stok` varchar(20) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftarmobil`
--

INSERT INTO `daftarmobil` (`nama`, `tipe`, `harga`, `stok`, `gambar`, `deskripsi`) VALUES
('asf', 'suv', 20000, 'tersedia', '758-agya.png', 'apa yaa'),
('avanza', 'City Car', 50, 'Tersedia', '910-ayla.png', 'Kapasitas Mesin : 998 cc, Tenaga mesin : 66 hp 108 Nm, Kapasitas Tempat Duduk : 5 Kursi, Jenis Transmisi : Otomatis 4 Tingkat Kecepatan / Manual 5 Tingkat Kecepatan, Jenis Bahan Bakar : Pertalite,Pertamax'),
('CRV', 'SUV', 200, 'Tersedia', '715-ayla.png', 'abc sfa sdafaj;l');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `nama` varchar(100) NOT NULL,
  `komentar` varchar(500) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`nama`, `komentar`, `id`) VALUES
('paimen', 'apa lsafjl', 9),
('safl', 'msnfala', 10);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftarmobil`
--
ALTER TABLE `daftarmobil`
  ADD PRIMARY KEY (`nama`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `komentar` (`komentar`),
  ADD KEY `nama` (`nama`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2024 pada 11.49
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mpti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `setup_buku`
--

CREATE TABLE `setup_buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `setup_buku`
--

INSERT INTO `setup_buku` (`id_buku`, `nama_buku`, `deskripsi`, `gambar`, `link`) VALUES
(1, 'Arsitektur Rumah Adat Nias DWN De Boer Het Niassch', 'Rumah-rumah ini dibangun tanpa menggunakan paku dan jauh lebih mampu menahan gempa kuat, daripada rumah-rumah modern', 'Arsitektur Rumah Adat Nias DWN De Boer Het Niassche Huis 1920.jpg', 'https://tokopedia.link/UTymL4AK9Jb'),
(2, 'Bingkisan nasional', 'Bingkisan', 'bingkisan nasional.jpg', 'https://tokopedia.link/UTymL4AK9Jb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setup_kegiatan`
--

CREATE TABLE `setup_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `user_admin` varchar(20) NOT NULL,
  `pass_admin` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `aktif` varchar(20) NOT NULL DEFAULT 'Y',
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`user_admin`, `pass_admin`, `level`, `aktif`, `nama`) VALUES
('admin', 'admin', 'admin', 'Y', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_reservasi`
--

CREATE TABLE `tbl_reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_kegiatan` date NOT NULL,
  `status` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `setup_buku`
--
ALTER TABLE `setup_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `setup_kegiatan`
--
ALTER TABLE `setup_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`user_admin`);

--
-- Indeks untuk tabel `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `setup_buku`
--
ALTER TABLE `setup_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `setup_kegiatan`
--
ALTER TABLE `setup_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

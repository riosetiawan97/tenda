-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2019 pada 18.40
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tenda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about_us`
--

CREATE TABLE `about_us` (
  `id_au` int(11) NOT NULL,
  `tentang` text NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` text NOT NULL,
  `instagram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `about_us`
--

INSERT INTO `about_us` (`id_au`, `tentang`, `alamat`, `no_telp`, `email`, `instagram`) VALUES
(1, 'Kami menyewakan berbagai macam kebutuhan acara Anda, <br>\r\nDengan harga yang terjangkau.', 'RW.4, Pd. Bambu Duren Sawit Kota Jakarta Timur Daerah Khusus Ibukota Jakarta', '087800081968', 'cs@bertenda99.co.id', '@ber.tenda99');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `no_telp`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', '021123456789');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(3) NOT NULL,
  `foto_banner` varchar(20) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `subjudul` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id_banner`, `foto_banner`, `judul`, `subjudul`) VALUES
(1, '1.jpg', 'Coba', ''),
(2, '2.jpg', 'Coba 2', ''),
(3, '3.jpg', 'coba 3', ''),
(6, '5.jpg', 'Coba 5', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(4) NOT NULL,
  `foto_galeri` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(8) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Tenda'),
(2, 'Panggung'),
(3, 'Sound'),
(4, 'Musik'),
(5, 'Kursi'),
(6, 'Meja'),
(7, 'AC Standing'),
(8, 'Misty Van');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(3) NOT NULL,
  `nama_komentar` varchar(30) NOT NULL,
  `email_komentar` varchar(50) NOT NULL,
  `no_komentar` int(14) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `harga` int(8) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `foto_produk` varchar(30) NOT NULL,
  `terjual` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `id_kategori`, `nama_produk`, `harga`, `satuan`, `foto_produk`, `terjual`) VALUES
(1, 1, 'Tenda1', 100000, '/m2', '1.jpg', 0),
(2, 2, 'kursi', 50000, '/pc', '2.jpg', 0),
(3, 3, 'Meja1', 75000, '/pc', '3.jpg', 0),
(4, 4, 'Banner', 30000, '/pc', '4.jpg', 0),
(5, 5, 'AC', 15000, '/pc', '5.jpg', 0),
(6, 1, '', 0, '', '', 0),
(7, 2, 'aksjdfkajsbbf', 68912, '/pcs', '10.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pesan_testimoni` varchar(100) NOT NULL,
  `foto_testimoni` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `nama`, `pesan_testimoni`, `foto_testimoni`) VALUES
(1, 'Bambang', 'Coba aja', '1.png'),
(2, 'Rudi', 'Tes Tes', '2.png'),
(3, 'Budi', 'Tendanya Bagus', '3.png'),
(4, 'Reza', 'Kursinya Bagus', '4.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id_au`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id_au` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

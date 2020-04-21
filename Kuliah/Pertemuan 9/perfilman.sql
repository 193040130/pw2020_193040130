-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2020 pada 02.05
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dosen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `perfilman`
--

CREATE TABLE `perfilman` (
  `id` int(11) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `rating` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perfilman`
--

INSERT INTO `perfilman` (`id`, `gambar`, `nama`, `genre`, `rating`) VALUES
(1, 'cloy.jpg', 'Crash Landing on You', 'romantic,action', '99%'),
(2, 'Itaewonclass.jpg', 'Itaewon Class', 'Food , Romantic', '98%'),
(3, 'aot.jpg', 'Attack On Titan', 'Action,Mystery', '99%'),
(4, 'naruto.jpg', 'Naruto Shipudden', 'Action,Mystery', '100%'),
(5, 'tokyoghoul.jpg', 'Tokyo Ghoul', 'Action,Mystery', '96%'),
(6, 'myidgangnam.jpg', 'my Id is Gangnam Bea', 'Romantic,comedy', '97%');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `perfilman`
--
ALTER TABLE `perfilman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `perfilman`
--
ALTER TABLE `perfilman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

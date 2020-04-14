-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Apr 2020 pada 06.39
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
-- Database: `pw_193040130`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `apparel`
--

CREATE TABLE `apparel` (
  `id` int(11) NOT NULL,
  `Photo` varchar(200) NOT NULL,
  `Company` varchar(200) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `ReleaseDate` varchar(4) NOT NULL,
  `Price` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `apparel`
--

INSERT INTO `apparel` (`id`, `Photo`, `Company`, `Type`, `ReleaseDate`, `Price`) VALUES
(1, '1Jisoo.jpg', 'Givenchy', 'Metallic Pleated Brown Silk Blend Gown', '2019', '156,239,406 Rupiah'),
(2, '2Rose.jpg', 'Mihara Yasuhiro', 'Biker Jacket with Scarf', '2019', '27,839,919 Rupiah'),
(3, '3Jennie.jpg', 'Mihara Yasuhiro', 'Asymmetric Pleated Skirt', '2019', '8,626,917 Rupiah'),
(4, '4Rose.jpg', 'Versace', 'Nastro Versace Leather Pumps', '2019', '9,548,878 Rupiah'),
(5, '5Lisa.jpg', 'Chanel', 'Clip On Earring metal, strass & resin', '2018', '36.150.000 Rupiah'),
(6, '6Lisa.jpg', 'Alyx', 'Cairo Blazer', '2018', '16.000.005 Rupiah'),
(7, '7Rose.jpg', 'Versace', 'Asymmetric Neck logo mini Dress', '2019', '32,433,259 Rupiah'),
(8, '8Jisoo.jpg', 'Rivithead', 'SHAKER-350 Over the Knee Platform Boots', '2019', '1,992,184 Rupiah'),
(9, '9Jisoo.jpg', 'Undercover', 'Unknown', '2016', '15.000.000 Rupiah'),
(10, '10Jennie.jpg', 'ASHISH', 'Tinsel sequin-embellished silk-georgette dress', '2018', '32,698,163 Rupiah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `apparel`
--
ALTER TABLE `apparel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `apparel`
--
ALTER TABLE `apparel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

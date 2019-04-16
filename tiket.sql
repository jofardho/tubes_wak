-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Apr 2019 pada 06.19
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kereta_api`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `nama_kereta` varchar(20) NOT NULL,
  `berangkat` datetime NOT NULL,
  `datang` datetime NOT NULL,
  `durasi` varchar(10) NOT NULL,
  `harga` varchar(11) NOT NULL,
  `keterangan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tiket`
--

INSERT INTO `tiket` (`nama_kereta`, `berangkat`, `datang`, `durasi`, `harga`, `keterangan`) VALUES
('Taksaka', '2019-04-26 08:30:00', '2019-04-26 11:29:00', '2j 59m', 'Rp 375.000', '10'),
('Gajayana', '2019-04-26 17:40:00', '2019-04-26 20:32:00', '2j 52m', 'Rp 390.000', '3'),
('Argo Muria', '2019-04-26 07:00:00', '2019-04-26 10:59:00', '3j 54m', 'Rp 400.000', '5'),
('Tegal Bahari', '2019-04-26 09:40:00', '2019-04-26 14:10:00', '4j 30m', 'Rp 135.000', '6'),
('Bangunkarta', '2019-04-26 17:54:00', '2019-04-26 18:53:00', '0j 59m', 'Rp 345.000', '3'),
('Sembrani', '2019-04-26 22:17:00', '2019-04-26 23:15:00', '0j 58m', 'Rp 450.000', '3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

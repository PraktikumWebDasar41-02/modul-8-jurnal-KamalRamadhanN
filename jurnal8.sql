-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2018 pada 05.27
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal8`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt`
--

CREATE TABLE `dt` (
  `Nama_Depan` varchar(10) NOT NULL,
  `Nama_Belakang` varchar(15) NOT NULL,
  `Nim` varchar(10) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `Hobi` varchar(15) NOT NULL,
  `Genre_Film` varchar(20) NOT NULL,
  `Tempat_Wisata` varchar(20) NOT NULL,
  `Tanggal_Lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `Nim` varchar(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(6) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(6) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Username`, `Password`, `Email`) VALUES
('Kamal', '12345', 'Kamalamaw@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

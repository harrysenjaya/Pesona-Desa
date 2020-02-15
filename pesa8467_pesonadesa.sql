-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Feb 2020 pada 17.30
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesa8467_pesonadesa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `stay`
--

CREATE TABLE `stay` (
  `Id` int(10) NOT NULL,
  `Nama Desa` varchar(100) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Deskripsi` varchar(1000) NOT NULL,
  `Tempat Tidur` varchar(100) NOT NULL,
  `Fasilitas` varchar(1000) NOT NULL,
  `Availability` date NOT NULL,
  `Review` varchar(1000) NOT NULL,
  `Aturan Tempat` varchar(1000) NOT NULL,
  `Objek Wisata Sekitar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `JenisKelamin` char(1) NOT NULL,
  `TanggalLahir` date NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telepon` int(20) NOT NULL,
  `Alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`FirstName`, `LastName`, `password`, `JenisKelamin`, `TanggalLahir`, `Email`, `Telepon`, `Alamat`) VALUES
('Harry', '', '', '', '0000-00-00', '', 0, ''),
('Tes', 'Tes', 'e10adc3949ba59abbe56e057f20f883e', 'L', '2019-12-04', 'tes1@yahoo.com', 123456, 'tes'),
('Tes', 'TES', '123456', 'L', '2019-12-04', 'tes@yahoo.com', 123456, 'tes');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `stay`
--
ALTER TABLE `stay`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `stay`
--
ALTER TABLE `stay`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

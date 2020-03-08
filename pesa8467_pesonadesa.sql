-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2020 pada 18.20
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
-- Struktur dari tabel `experience`
--

CREATE TABLE `experience` (
  `Id` int(11) NOT NULL,
  `NamaDesa` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Pengalaman` varchar(100) NOT NULL,
  `Durasi` varchar(100) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Deskripsi` varchar(1000) NOT NULL,
  `JumlahPeserta` varchar(100) NOT NULL,
  `TingkatAktivitas` varchar(100) NOT NULL,
  `Bahasa` varchar(50) NOT NULL,
  `Highlight` varchar(100) NOT NULL,
  `CheckIn` date NOT NULL,
  `CheckOut` date NOT NULL,
  `Do` varchar(1000) NOT NULL,
  `Dont` varchar(1000) NOT NULL,
  `Harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `experience`
--

INSERT INTO `experience` (`Id`, `NamaDesa`, `Brand`, `Pengalaman`, `Durasi`, `Foto`, `Deskripsi`, `JumlahPeserta`, `TingkatAktivitas`, `Bahasa`, `Highlight`, `CheckIn`, `CheckOut`, `Do`, `Dont`, `Harga`) VALUES
(1, 'Desa Karangduwur', 'Sawangan Adventure', 'Telusur gua Sawangan Lor', 'Half day (1,5-3 jam)', 'exp', 'Menelusuri gua horizontal di area Sawangan Adventure. Peserta akan diajak menelusuri Gua Sawangan Lor dengan berjalan kaki selama 1,5 jam. Namun, sebelum menuju pintu/mulut gua, peserta akan berjalan menikmati hutan di desa. Peserta akan menemukan static pool pada akhir perjalanan penelusuran gua. Dan memanjat tebing setelah keluar gua. ', '6-10 orang', 'Tinggi', 'Indonesia', 'Helm, sepatu karet, 2 guide untuk 1 rombongan, snack dan minum di akhir tebing', '0000-00-00', '0000-00-00', 'Do: Membawa makanan ringan dan minuman sendiri.', 'Don\'t: Menyentuh stalagtit stalagmit yang masih hidup. Mengambil sesuatu dari dalam gua. ', 'Rp 100.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stay`
--

CREATE TABLE `stay` (
  `Id` int(10) NOT NULL,
  `NamaDesa` varchar(100) NOT NULL,
  `NamaHouseStay` varchar(100) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Deskripsi` varchar(1000) NOT NULL,
  `Keterangan` varchar(1000) NOT NULL,
  `TempatTidur` varchar(100) NOT NULL,
  `JumlahTamu` varchar(10) NOT NULL,
  `Toilet` varchar(50) NOT NULL,
  `AC/Kipas` varchar(100) NOT NULL,
  `SuhuAlami` varchar(20) NOT NULL,
  `Sarapan` varchar(5) NOT NULL,
  `Dapur` varchar(5) NOT NULL,
  `Wifi` varchar(5) NOT NULL,
  `TVKabel` varchar(5) NOT NULL,
  `ParkirGratis` varchar(5) NOT NULL,
  `AlarmAsap` varchar(5) NOT NULL,
  `AlarmKarbonMonoksida` varchar(5) NOT NULL,
  `Kamar 1` varchar(100) NOT NULL,
  `Kamar 2` varchar(100) NOT NULL,
  `Kamar 3` varchar(100) NOT NULL,
  `Kamar 4` varchar(100) NOT NULL,
  `RuangBersama` varchar(100) NOT NULL,
  `CheckIn` date NOT NULL,
  `CheckOut` date NOT NULL,
  `Do` varchar(1000) NOT NULL,
  `Dont` varchar(1000) NOT NULL,
  `DayaTarikSekitar` varchar(1000) NOT NULL,
  `Harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stay`
--

INSERT INTO `stay` (`Id`, `NamaDesa`, `NamaHouseStay`, `Foto`, `Deskripsi`, `Keterangan`, `TempatTidur`, `JumlahTamu`, `Toilet`, `AC/Kipas`, `SuhuAlami`, `Sarapan`, `Dapur`, `Wifi`, `TVKabel`, `ParkirGratis`, `AlarmAsap`, `AlarmKarbonMonoksida`, `Kamar 1`, `Kamar 2`, `Kamar 3`, `Kamar 4`, `RuangBersama`, `CheckIn`, `CheckOut`, `Do`, `Dont`, `DayaTarikSekitar`, `Harga`) VALUES
(1, 'Desa Jatijajar', 'Guest House Avicenna 2', 'pesonadesa', 'Sebuah guest house di lingkungan pedesaan Desa Jatijajar. Mata pencaharian utama penduduk desa adalah bertani padi. Maka, tamu dapat menikmati sawah yang berada langsung di belakang rumah.', 'Bisa digunakan seluruh rumah', '4 kamar / 4 tempat tidur', '8 tamu', '2 kamar mandi + ruang toilet', 'Kamar tidur tidak menggunakan AC. Ruang bersama menggunakan AC.', '', 'Tidak', 'Ya', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', '1 tempat tidur queen untuk 2 tamu\r\n', '1 tempat tidur queen untuk 2 tamu\r\n', '1 tempat tidur king untuk 2 tamu\r\n', '1 tempat tidur single untuk 1 tamu\r\n', '2 sofa\r\n', '0000-00-00', '0000-00-00', 'Do: Terdapat beberapa peralatan makan dan peralatan masak di dapur. Tamu dapat menggunakan berbagai peralatan tersebut. Namun, harap bertanggung jawab membersihkan dan merapikan berbagai peralatan yang digunakan.\r\n', 'Don\'t: Merokok di dalam rumah. Membawa dan mengkonsumsi minuman keras. Membawa dan mengkonsumsi obat-obatan terlarang. Aktivitas asusila dan melanggar norma masyarakat yang tidak sesuai dengan budaya setempat.\r\n', '1.Gua Jatijajar \r\n2.Gua Barat \r\n3.Pasar Demangsari (historikal masa Belanda) \r\n4.Outbond Desa Wisata Jatijajar \r\n5. Gua Petruk', 'Rp 1.000.000');

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
-- Indeks untuk tabel `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`Id`);

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
-- AUTO_INCREMENT untuk tabel `experience`
--
ALTER TABLE `experience`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `stay`
--
ALTER TABLE `stay`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

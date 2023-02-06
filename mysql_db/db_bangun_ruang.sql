-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 10:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bangun_ruang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bangun_ruang`
--

CREATE TABLE `tb_bangun_ruang` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `usia` int(11) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `no_telp` text NOT NULL,
  `hitung` varchar(255) NOT NULL,
  `sisi` float NOT NULL,
  `alas` float NOT NULL,
  `tinggi` float NOT NULL,
  `jari` float NOT NULL,
  `luas` float NOT NULL,
  `volume` float NOT NULL,
  `riwayat_perhitungan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bangun_ruang`
--

INSERT INTO `tb_bangun_ruang` (`id`, `nama_siswa`, `nama_sekolah`, `usia`, `alamat_rumah`, `no_telp`, `hitung`, `sisi`, `alas`, `tinggi`, `jari`, `luas`, `volume`, `riwayat_perhitungan`) VALUES
(40, 'Abastian Dwi Saputra', 'SMK Negeri 12 Surabaya', 22, 'Jl. Ngagel Rejo II No. 32 Surabaya', '083831129792', 'Luas Persegi', 2, 0, 0, 0, 4, 0, '2022-06-15 10:22:41'),
(41, 'Ageng Rahmat', 'SMK Negeri 12 Surabaya', 23, 'Jl. Bratang Gede No. 22 Surabaya', '083811112222', 'Luas Segitiga', 0, 2, 2, 0, 2, 0, '2022-06-15 10:23:30'),
(42, 'Adjie Mas Bagus', 'SMK Negeri 12 Surabaya', 23, 'Jl. Ngagel PDAM No. 2 Surabaya', '083822221111', 'Luas Lingkaran', 0, 0, 0, 2, 12.56, 0, '2022-06-15 10:24:21'),
(43, 'Dwiky Rachman', 'SMK Negeri 12 Surabaya', 22, 'Jl. Mojosari No. 11 Mojokerto', '083833334444', 'Volume Kubus', 2, 0, 0, 0, 0, 8, '2022-06-15 10:25:17'),
(44, 'Arisco Marcel', 'SMK Negeri 12 Surabaya', 22, 'Jl. Tambah Sari No. 30 Surabaya', '083811113333', 'Volume Limas', 0, 2, 3, 0, 0, 2, '2022-06-15 10:26:07'),
(45, 'Roni Firman', 'SMK Negeri 12 Surabaya', 22, 'Jl. Bratang Gede No. 22 Surabaya', '083811111111', 'Volume Tabung', 0, 0, 2, 2, 0, 25.12, '2022-06-15 10:26:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bangun_ruang`
--
ALTER TABLE `tb_bangun_ruang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bangun_ruang`
--
ALTER TABLE `tb_bangun_ruang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

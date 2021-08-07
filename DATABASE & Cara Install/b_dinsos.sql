-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2020 at 07:32 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b_dinsos`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_karangtaruna`
--

CREATE TABLE `t_karangtaruna` (
  `id` bigint(20) NOT NULL,
  `Ketua` varchar(50) NOT NULL,
  `No_Rek` bigint(20) NOT NULL,
  `Cabang` varchar(50) NOT NULL,
  `Nama_Karang_Taruna` varchar(50) NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `Desa` varchar(50) NOT NULL,
  `Kecamatan` varchar(50) NOT NULL,
  `No_Proposal_Pengajuan` varchar(50) NOT NULL,
  `Tgl_Proposal_Pengajuan` date NOT NULL,
  `No_Proposal_Pencairan` varchar(50) NOT NULL,
  `Tgl_Proposal_Pencairan` date NOT NULL,
  `Peruntukan_Dana` varchar(200) NOT NULL,
  `Nominal` varchar(100) NOT NULL,
  `Teks_Nominal` varchar(50) NOT NULL,
  `Anggaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_karangtaruna`
--

INSERT INTO `t_karangtaruna` (`id`, `Ketua`, `No_Rek`, `Cabang`, `Nama_Karang_Taruna`, `Alamat`, `Desa`, `Kecamatan`, `No_Proposal_Pengajuan`, `Tgl_Proposal_Pengajuan`, `No_Proposal_Pencairan`, `Tgl_Proposal_Pencairan`, `Peruntukan_Dana`, `Nominal`, `Teks_Nominal`, `Anggaran`) VALUES
(9, 'DENI SAPTARUNA, SH. ', 109250501892, 'Baregbeg', 'Tunas Harapan', 'Dusun Sukaharja, RT/RT 003/007', 'Petirhilir', 'Baregbeg', '05/KT-TH/PTH/III-2019', '2019-03-16', '/KT-TH/PTH/VII-2020', '2020-07-13', 'Pelatihan Manajemen Organisasi dan Tata Kelola Desa (untuk Pengurus Unit Karang Taruna RW Se Desa Petirhilir Kec. Baregbeg - Ciamis)', '25.000.000', 'Dua Puluh Lima Juta Rupiah', 2019),
(10, 'Aprii Tampan', 444421313138888383, 'Rajadasa', 'Vrindavan', 'jl. ABCD', 'Gudang Kahuripan', 'Lembang', '122/VII/-1.', '2020-09-07', '333/IX/-9.5', '2020-09-30', 'Pengadaan Alat Tempur', '20.000.000', 'dua puluh juta rupiah', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `t_pemohon`
--

CREATE TABLE `t_pemohon` (
  `id` bigint(20) NOT NULL,
  `KTP` bigint(16) NOT NULL,
  `Nama` varchar(60) NOT NULL,
  `Tempat_Lahir` varchar(60) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Pekerjaan` varchar(60) NOT NULL,
  `No_Rek` bigint(20) NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `No_Proposal` varchar(60) NOT NULL,
  `Tgl_Proposal` date NOT NULL,
  `Nominal` varchar(100) NOT NULL,
  `Teks_Nominal` varchar(60) NOT NULL,
  `Anggaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_pemohon`
--

INSERT INTO `t_pemohon` (`id`, `KTP`, `Nama`, `Tempat_Lahir`, `Tanggal_Lahir`, `Pekerjaan`, `No_Rek`, `Alamat`, `No_Proposal`, `Tgl_Proposal`, `Nominal`, `Teks_Nominal`, `Anggaran`) VALUES
(28, 3207191010550002, 'Saimin', 'Ciamis', '1955-10-10', 'Buruh Tani/Perkebunan', 109059080100, 'Karangsari, RT/RW 004/004, Kelurahan/Desa Bangunsari, Kecamatan Pamarican', '460/31 -Ds.2021', '2020-09-07', '10.000.000', 'Sepuluh Juta Rupiah', 2020),
(29, 3207190804750001, 'Suryoto', 'Ciamis', '1975-04-08', 'Buruh Tani/Perkebunan', 555441000, 'Karangsari, RT/RW 004/004, Kelurahan/Desa Bangunsari, Kecamatan Pamarican', '460/31 -Ds.2019', '2020-09-03', '10.000.000', 'Sepuluh Juta Rupiah', 2020),
(30, 3207190804750007, 'Aprii Tampan', 'Barcelona', '2001-02-08', 'Big Boss', 555447887, 'Jl. ABCD', '460/31 -Ds.2018', '2020-09-07', '10.000.000', 'Sepuluh Juta Rupiah', 2019);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_karangtaruna`
--
ALTER TABLE `t_karangtaruna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pemohon`
--
ALTER TABLE `t_pemohon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unik` (`KTP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_karangtaruna`
--
ALTER TABLE `t_karangtaruna`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_pemohon`
--
ALTER TABLE `t_pemohon`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

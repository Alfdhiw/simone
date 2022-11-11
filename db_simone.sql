-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 03:47 AM
-- Server version: 10.4.13-MariaDB-log
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simone`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `absensi_id` char(20) NOT NULL,
  `mhs_id` char(20) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tgl_absen` datetime NOT NULL,
  `divisi` varchar(150) NOT NULL,
  `kegiatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` char(20) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category_magang`
--

CREATE TABLE `category_magang` (
  `id` int(11) NOT NULL,
  `divisi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_magang`
--

INSERT INTO `category_magang` (`id`, `divisi`) VALUES
(1, 'Marketing Officer'),
(2, 'IT Enginering');

-- --------------------------------------------------------

--
-- Table structure for table `table_mahasiswa`
--

CREATE TABLE `table_mahasiswa` (
  `mhs_id` char(20) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `fakultas` varchar(150) NOT NULL,
  `universitas` varchar(150) NOT NULL,
  `jeniskel` char(2) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `surat_pengantar` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_penilaian`
--

CREATE TABLE `table_penilaian` (
  `nilai_id` int(11) NOT NULL,
  `mhs_id` char(20) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `universitas` varchar(150) NOT NULL,
  `nilai_disiplin` double NOT NULL,
  `nilai_tgjwb` double NOT NULL,
  `nilai_ujian` double NOT NULL,
  `rata_rata` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_siswa`
--

CREATE TABLE `table_siswa` (
  `siswa_id` char(20) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `jurusan` varchar(150) NOT NULL,
  `jeniskel` char(2) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `surat_pengantar` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`absensi_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category_magang`
--
ALTER TABLE `category_magang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_mahasiswa`
--
ALTER TABLE `table_mahasiswa`
  ADD PRIMARY KEY (`mhs_id`);

--
-- Indexes for table `table_penilaian`
--
ALTER TABLE `table_penilaian`
  ADD PRIMARY KEY (`nilai_id`);

--
-- Indexes for table `table_siswa`
--
ALTER TABLE `table_siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_magang`
--
ALTER TABLE `category_magang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_penilaian`
--
ALTER TABLE `table_penilaian`
  MODIFY `nilai_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

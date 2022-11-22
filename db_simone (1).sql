-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 04:17 AM
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
  `kode_admin` char(20) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` int(10) NOT NULL,
  `jeniskel` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `is_active` int(10) NOT NULL,
  `foto` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kode_admin`, `nama`, `email`, `password`, `role`, `jeniskel`, `status`, `is_active`, `foto`) VALUES
('ADM-2022-01', 'Admin', 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1, 1, 1, 1, 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_magang`
--

CREATE TABLE `kategori_magang` (
  `kode_kategori` int(11) NOT NULL,
  `divisi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_magang`
--

INSERT INTO `kategori_magang` (`kode_kategori`, `divisi`) VALUES
(1, 'Marketing Officer'),
(2, 'IT Enginering');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
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
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `kode_magang` char(20) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jurusan` varchar(150) NOT NULL,
  `sekolah` varchar(150) NOT NULL,
  `jeniskel` char(2) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `surat_pengantar` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL,
  `status` int(2) NOT NULL,
  `role` int(10) NOT NULL,
  `is_active` int(10) NOT NULL,
  `kode_kategori` int(11) NOT NULL,
  `tingkat_pendidikan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`kode_magang`, `nama`, `jurusan`, `sekolah`, `jeniskel`, `foto`, `surat_pengantar`, `email`, `password`, `status`, `role`, `is_active`, `kode_kategori`, `tingkat_pendidikan`) VALUES
('MHS-2022-01', 'Ayu', 'Teknik Informatika', 'Udinus', 'P', 'default.png', 'default.png', 'ayu@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1, 2, 1, 1, 1),
('STD-2022-00001', 'Jasmin', 'TI', 'udinus', 'P', 'STD-2022-0000313-11-20221668352730.PNG', 'STD-2022-0000313-11-20221668352730.pdf', 'test@mail.com', '01', 0, 0, 1, 0, 0),
('STD-2022-00002', 'Jasmin', 'TI', 'udinus', 'P', 'STD-2022-0000313-11-20221668353235.PNG', 'STD-2022-0000313-11-20221668353235.pdf', 'test@mail.com', '7ByZ7kCPk7', 0, 0, 1, 0, 0),
('STD-2022-00003', 'jason', 'IT', 'udinus', 'L', 'STD-2022-0000313-11-20221668355328.PNG', 'STD-2022-0000313-11-20221668355328.pdf', 'json@mail.com', 'kvLdN88628', 0, 0, 1, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
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

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(10) NOT NULL,
  `role` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Mahasiswa'),
(3, 'Siswa'),
(4, 'Ketua'),
(5, 'Monitoring');

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
  ADD PRIMARY KEY (`kode_admin`);

--
-- Indexes for table `kategori_magang`
--
ALTER TABLE `kategori_magang`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`nilai_id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`kode_magang`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_magang`
--
ALTER TABLE `kategori_magang`
  MODIFY `kode_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `nilai_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

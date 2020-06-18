-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 02:16 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengajuan_pensiun`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `kd_kelamin` char(1) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `kd_kelamin`, `jenis_kelamin`) VALUES
(1, 'l', 'Laki-Laki'),
(2, 'p', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'janda/duda'),
(2, 'batas usia'),
(3, 'permintaan sendiri');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` char(18) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `tgl_lahir`, `username`, `password`) VALUES
('321513080296000112', 'Tete Setia', '2020-12-11', 'tete08', '$2y$10$GS8L5dEccgBM5ldXC3sEo.WdLOkkEi9dmi/Qw1.vGnrI3YyhCvAia'),
('321513080296000113', 'Tete Setia2', '2020-12-12', 'tete09', '$2y$10$LHPk2ojBzpO7W42FfJ9cBeFbF/YQqfORC1N4l6mGMR4WyQa9/l2rO'),
('321513080296000114', 'Tete Setia3', '2020-12-18', 'tete07', '$2y$10$GyFK76HfkCWYT6xemiPgQedHOG8IZqY3p4yFvaYP7wmR/C9oQS17e');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai2`
--

CREATE TABLE `pegawai2` (
  `nip` char(18) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai2`
--

INSERT INTO `pegawai2` (`nip`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`) VALUES
('321513080296000112', 'Dicky Firmansyah', 'Karawang', '1995-07-03', 'l');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_pensiun`
--

CREATE TABLE `pengajuan_pensiun` (
  `id` int(11) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `nip` char(18) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `photo` varchar(128) NOT NULL,
  `karpeg` varchar(128) NOT NULL,
  `sk_cpns` varchar(128) NOT NULL,
  `sk_pns` varchar(128) NOT NULL,
  `sk_pangkat_terakhir` varchar(128) NOT NULL,
  `kenaikan_gaji_terakhir` varchar(128) NOT NULL,
  `jabatan_terakhir` varchar(128) NOT NULL,
  `sk_terakhir` varchar(128) NOT NULL,
  `sasaran_kinerja` varchar(128) NOT NULL,
  `ktp` varchar(128) NOT NULL,
  `surat_nikah` varchar(128) NOT NULL,
  `kartu_keluarga` varchar(128) NOT NULL,
  `akta_kelahiran` varchar(128) NOT NULL,
  `surat_kuliah_anak` varchar(128) NOT NULL,
  `surat_kematian` varchar(128) NOT NULL,
  `surat_janda_duda` varchar(128) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan_pensiun`
--

INSERT INTO `pengajuan_pensiun` (`id`, `tgl_pengajuan`, `nip`, `id_kategori`, `id_admin`, `photo`, `karpeg`, `sk_cpns`, `sk_pns`, `sk_pangkat_terakhir`, `kenaikan_gaji_terakhir`, `jabatan_terakhir`, `sk_terakhir`, `sasaran_kinerja`, `ktp`, `surat_nikah`, `kartu_keluarga`, `akta_kelahiran`, `surat_kuliah_anak`, `surat_kematian`, `surat_janda_duda`, `status`) VALUES
(26, '2020-06-13', '321513080296000112', 3, 0, '5ee4d9693107a.jpg', '5ee4d969314ba.jpg', '5ee4d96931904.jpg', '5ee4d96931d54.png', '5ee4d9693249b.png', '5ee4d969329e2.png', '5ee4d96932e1e.png', '5ee4d96933259.png', '5ee4d98b0bd3b.png', '5ee4d98b0c343.png', '5ee4d98b0c8d9.png', '5ee4d98b0cefa.png', '5ee4d98b0d44e.png', 'null', 'null', 'null', 'proccess');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `nip` char(18) NOT NULL,
  `img1` varchar(128) NOT NULL,
  `img2` varchar(128) NOT NULL,
  `img3` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pegawai2`
--
ALTER TABLE `pegawai2`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `pengajuan_pensiun`
--
ALTER TABLE `pengajuan_pensiun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengajuan_pensiun`
--
ALTER TABLE `pengajuan_pensiun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

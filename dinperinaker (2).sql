-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 02:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinperinaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `jenis_kelamin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_lengkap`, `email`, `username`, `password`, `jenis_kelamin`) VALUES
(3, 'Nasrul Hakim', 'nasrulhakim.brainmatics@gmail.com', 'nassstzy', '$2y$10$xX8kqXkRvklX0HhWFJHfquLKQthHvdnyIGQ2FEnBv54ynEwYpk2BW', '');

-- --------------------------------------------------------

--
-- Table structure for table `bkk`
--

CREATE TABLE `bkk` (
  `id` int(11) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `nama_bkk` varchar(50) DEFAULT NULL,
  `penanggung_jawab` varchar(50) DEFAULT NULL,
  `alamat_bkk` text DEFAULT NULL,
  `struktur_bkk` text DEFAULT NULL,
  `akta_pendirian_bkk` text DEFAULT NULL,
  `rencana_kerja_bkk` text DEFAULT NULL,
  `dokumen_pendirian_bkk` text DEFAULT NULL,
  `pass_foto_kepsek` text DEFAULT NULL,
  `tanggal_pengajuan` datetime NOT NULL,
  `status_pengajuan` text NOT NULL DEFAULT 'menunggu',
  `pesan` text NOT NULL,
  `nomor_kartu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cpmi`
--

CREATE TABLE `cpmi` (
  `id` int(11) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `nama_perusahaan` text NOT NULL,
  `jabatan` text NOT NULL,
  `negara_tujuan` text NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `pas_foto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `foto_ktp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `foto_kk` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `foto_akta_Kelahiran` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `foto_surat_nikah` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `foto_ijazah_terakhir` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `foto_surat_perjanjian` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `foto_medical_check_up` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `foto_ak1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `tanggal_pengajuan` datetime NOT NULL,
  `status_pengajuan` text NOT NULL DEFAULT 'menunggu',
  `pesan` text NOT NULL,
  `nomor_kartu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lpk`
--

CREATE TABLE `lpk` (
  `id` int(11) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `nama_lembaga` varchar(50) DEFAULT NULL,
  `alamat_lembaga` text DEFAULT NULL,
  `penanggung_jawab` varchar(50) DEFAULT NULL,
  `nomor_telfon` bigint(15) DEFAULT NULL,
  `npwp_perusahaan` varchar(30) DEFAULT NULL,
  `bidang_pelatihan` text DEFAULT NULL,
  `foto_keputusan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `foto_npwp_perusahaan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `identitas_kepala_lpk` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `profile_lpk` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `foto_keterangan_domisili` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `foto_bukti_kepemilikan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `tanggal_pengajuan` datetime NOT NULL,
  `status_pengajuan` text NOT NULL DEFAULT 'menunggu',
  `pesan` text NOT NULL,
  `nomor_kartu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `isi_pengaduan` text NOT NULL,
  `bukti` text NOT NULL,
  `email` text NOT NULL,
  `tanggal_pengaduan` datetime NOT NULL,
  `balasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pkwt`
--

CREATE TABLE `pkwt` (
  `id` int(11) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `nama_perusahaan_pkwt` varchar(60) NOT NULL,
  `direktur_pkwt` varchar(60) NOT NULL,
  `jumlah_pekerja_pkwt` int(11) NOT NULL,
  `daftar_pekerja_pkwt` text NOT NULL,
  `naskah_pkwt` text NOT NULL,
  `tanggal_pengajuan` datetime NOT NULL,
  `status_pengajuan` text NOT NULL DEFAULT 'menunggu',
  `pesan` text NOT NULL,
  `nomor_kartu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ak1`
--

CREATE TABLE `tb_ak1` (
  `id` int(11) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(10) NOT NULL,
  `foto_ijazah` text NOT NULL,
  `pass_foto` text NOT NULL,
  `sertifikat_keahlian` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `tanggal_pengajuan` datetime NOT NULL,
  `status_pengajuan` text NOT NULL DEFAULT 'menunggu',
  `pesan` text NOT NULL DEFAULT '-',
  `nomor_kartu` bigint(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `email`, `username`, `password`, `tanggal_lahir`, `alamat`, `jenis_kelamin`) VALUES
(36, 'Nasrul Hakim', 'nasrulhakim.brainmatics@gmail.com', 'nassstzy', '$2y$10$ZfLQa9jDVKxxceKPEApIVOoZCebi0q73oe8/zH07Y691t3.X/FcH6', NULL, '', ''),
(37, 'Nasrul Hakim', 'nasrulhakim.brainmatics@gmail.com', 'admin', '$2y$10$JFfIrsLX32PT7evGKUhbkOoA5tzNHVFl/S3bVFDZH67PqodDAhVBW', '2023-07-14', 'wonoyoso', 'Laki-laki'),
(38, 'Nasrul Hakim', 'nasrulhakim042@gmail.com', 'nassstzy1', '$2y$10$5oCk/matPJHJmTKOprGgp.I4AzjB94k.XaRTFkeDVF6vVt/pH2ocG', NULL, '', ''),
(39, 'Nasrul Hakim', 'nasrulHakim88@gmail.com', 'nassstzy22', '$2y$10$fwvl44nchHhV1H0mGR1OBOizmDWZMaKHjfnK6oOrAH0jeK0FJ2Vki', NULL, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bkk`
--
ALTER TABLE `bkk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpmi`
--
ALTER TABLE `cpmi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lpk`
--
ALTER TABLE `lpk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pkwt`
--
ALTER TABLE `pkwt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_ak1`
--
ALTER TABLE `tb_ak1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bkk`
--
ALTER TABLE `bkk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cpmi`
--
ALTER TABLE `cpmi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lpk`
--
ALTER TABLE `lpk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pkwt`
--
ALTER TABLE `pkwt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_ak1`
--
ALTER TABLE `tb_ak1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

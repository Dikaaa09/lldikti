-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 24, 2022 at 07:51 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepegawaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kgb`
--

CREATE TABLE `data_kgb` (
  `kgb_id` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `gel_depan` varchar(20) DEFAULT NULL,
  `gel_belakang` varchar(20) DEFAULT NULL,
  `jabatan` varchar(100) NOT NULL,
  `status_pegawai` varchar(100) NOT NULL,
  `dpk_pts` varchar(100) DEFAULT NULL,
  `unit_kerja` varchar(100) NOT NULL,
  `gapok_lama` int(10) NOT NULL,
  `tgl_skkp_lama` date NOT NULL,
  `no_skkp_lama` varchar(100) NOT NULL,
  `tmt_skkp_lama` date NOT NULL,
  `thn_mk_lama` int(2) NOT NULL,
  `bln_mk_lama` int(2) NOT NULL,
  `gapok_baru` int(10) NOT NULL,
  `thn_mk_baru` int(2) NOT NULL,
  `bln_mk_baru` int(2) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `golongan` varchar(10) NOT NULL,
  `tmt_skkp_baru` date NOT NULL,
  `tmt_next_kgb` date NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kgb`
--

INSERT INTO `data_kgb` (`kgb_id`, `nip`, `nama`, `gel_depan`, `gel_belakang`, `jabatan`, `status_pegawai`, `dpk_pts`, `unit_kerja`, `gapok_lama`, `tgl_skkp_lama`, `no_skkp_lama`, `tmt_skkp_lama`, `thn_mk_lama`, `bln_mk_lama`, `gapok_baru`, `thn_mk_baru`, `bln_mk_baru`, `pangkat`, `golongan`, `tmt_skkp_baru`, `tmt_next_kgb`, `created`, `updated`) VALUES
(9, '198108182010122002', 'Sitti Rahmawati', 'Dr.', 'SH.', 'Analisis Kepegawaian Ahli Muda', 'Pegawai Negeri Sipil', '', 'Lembaga Layanan Pedidikan Tinggi Wilayah IX', 3410600, '2020-09-09', 'No.7514/LL9/KP/2020', '2020-12-01', 10, 0, 3518100, 12, 0, 'Penata TK.I', 'III/d', '2022-12-01', '2024-12-01', '2022-11-08 11:06:13', '2022-11-09 06:22:50'),
(18, '198112012200604101', 'Safruddin', '', 'S. Kep', 'Lektor', 'Pegawai Negeri Sipil', 'STIK Panrita Husada Bulukumba', 'Lembaga Layanan Pendidikan Tinggi Wilayah IX', 3591200, '2020-12-28', 'No. 10929/LL9/KP/2020', '2020-12-01', 16, 0, 3704300, 18, 0, 'Penata', 'III/c', '2022-12-01', '2024-12-01', '2022-11-14 08:30:00', '2022-11-14 02:03:05'),
(21, '196606252014092001', 'Dahliawati', '', 'ST', 'Pengelola Kepegawaian', 'Pegawai Negeri Sipil', '', 'Lembaga Layanan Pedidikan Tinggi Wilayah IX Sulawesi', 3491500, '2018-11-15', '55013/a2.2/KP/2018', '2018-10-01', 20, 8, 4065500, 28, 8, 'Penata', 'III/c', '2022-10-01', '2024-02-01', '2022-11-14 22:40:51', NULL),
(22, '197311242003122001', 'St. Shofia', '', 's.s.', 'Lektor', 'Pegawai Negeri Sipil', 'Universitas Indonesia Timur', 'Lembaga Layanan Pedidikan Tinggi Wilayah IX', 3743100, '2019-03-01', '272xx/a3/kp.06.00/2019', '2019-04-01', 15, 4, 3743100, 17, 4, 'Penata TK.I', 'III/d', '0021-04-01', '2021-07-15', '2022-11-15 09:32:05', '2022-11-17 16:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `kgb_terhapus`
--

CREATE TABLE `kgb_terhapus` (
  `id_terhapus` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `gel_depan` varchar(20) DEFAULT NULL,
  `gel_belakang` varchar(20) DEFAULT NULL,
  `jabatan` varchar(100) NOT NULL,
  `status_pegawai` varchar(100) NOT NULL,
  `dpk_pts` varchar(100) DEFAULT NULL,
  `unit_kerja` varchar(100) NOT NULL,
  `gapok_lama` int(10) NOT NULL,
  `tgl_skkp_lama` date NOT NULL,
  `no_skkp_lama` int(100) NOT NULL,
  `tmt_skkp_lama` date NOT NULL,
  `thn_mk_lama` int(2) NOT NULL,
  `bln_mk_lama` int(2) NOT NULL,
  `gapok_baru` int(10) NOT NULL,
  `thn_mk_baru` int(2) NOT NULL,
  `bln_mk_baru` int(2) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `golongan` varchar(5) NOT NULL,
  `tmt_skkp_baru` date NOT NULL,
  `tmt_next_kgb` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kgb_terhapus`
--

INSERT INTO `kgb_terhapus` (`id_terhapus`, `nip`, `nama`, `gel_depan`, `gel_belakang`, `jabatan`, `status_pegawai`, `dpk_pts`, `unit_kerja`, `gapok_lama`, `tgl_skkp_lama`, `no_skkp_lama`, `tmt_skkp_lama`, `thn_mk_lama`, `bln_mk_lama`, `gapok_baru`, `thn_mk_baru`, `bln_mk_baru`, `pangkat`, `golongan`, `tmt_skkp_baru`, `tmt_next_kgb`, `user_id`, `created`) VALUES
(1, '191266', 'Dwinandika Prasatya', 'DR.', 'S.Kom', 'Direktur', 'Pegawai Negeri Sipil', '', 'Lembaga Layanan Pendidikan Tinggi Wilayah IX', 5500000, '2002-11-09', 0, '2010-01-12', 12, 21, 5600000, 21, 12, 'Penata', 'IV/c', '0001-12-12', '0121-12-21', 2, '2022-11-21 00:15:19'),
(2, '196511102005011001', 'Nasrullah', '', 'SKM', 'Asisten Ahli', 'Pegawai Negeri Sipil', 'STIKS Tamalanrea Makassar', 'Lembaga Layanan Pedidikan Tinggi Wilayah IX', 3554000, '2020-09-09', 0, '2020-12-01', 18, 0, 3665900, 20, 0, 'Penata Muda TK.I', 'III/b', '2022-12-01', '2024-12-01', 11, '2022-11-24 00:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `list_pts`
--

CREATE TABLE `list_pts` (
  `pts_id` int(11) NOT NULL,
  `nama_pts` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_pts`
--

INSERT INTO `list_pts` (`pts_id`, `nama_pts`, `created`, `updated`) VALUES
(1, 'STIK Panrita Husada Bulukumba', '2022-11-03 09:21:35', NULL),
(2, 'Akademi Farmasi Toraja', '2022-11-03 09:30:01', NULL),
(3, 'Akademi Sekretari Manajemen Indonesia Publik Makassar', '2022-11-03 09:30:15', NULL),
(4, 'AKBID Bina Sejahtera Rantepao', '2022-11-03 09:30:25', NULL),
(5, 'AKBID Sinar Kasih Toraja', '2022-11-03 09:30:45', NULL),
(6, 'AKPER Sawerigading Pemda Luwu', '2022-11-03 09:30:55', NULL),
(7, 'AKPER Toraya', '2022-11-03 09:31:08', NULL),
(8, 'AMIK Ibnu Khaldun Palopo', '2022-11-03 09:31:18', NULL),
(9, 'AMIK Tomakaka Mamuju', '2022-11-03 09:31:32', NULL),
(10, 'Institut Bisnis dan Keuangan Nitro Makassar', '2022-11-03 09:31:42', NULL),
(11, 'Institut Cokroaminoto Pinrang', '2022-11-03 09:31:51', NULL),
(12, 'Institut Ilmu Sosial dan Bisnis Andi Sapada', '2022-11-03 09:32:04', NULL),
(13, 'Institut Lamaddukelleng Sengkang', '2022-11-03 09:32:15', NULL),
(14, 'Institut Sains dan Kesehatan Bone', '2022-11-03 09:32:26', NULL),
(15, 'Institut Teknologi dan Bisnis Bina Adinata Bulukumba', '2022-11-03 09:32:37', NULL),
(16, 'Institut Teknologi dan Bisnis Maritim Balik Diwa Makassar', '2022-11-03 09:32:47', NULL),
(17, 'Institut Teknologi dan Bisnis Nobel Indonesia', '2022-11-03 09:33:03', NULL),
(18, 'Institut Teknologi dan Kesehatan Avicenna', '2022-11-03 09:33:24', NULL),
(19, 'Institut Teknologi, Kesehatan, dan Sains Muhammadiyah Sidrap', '2022-11-03 09:33:38', NULL),
(20, 'Institut Turatea Indonesia', '2022-11-03 09:33:55', NULL),
(21, 'Politeknik Bau-Bau', '2022-11-03 09:34:05', NULL),
(22, 'Politeknik Maritim AMI Makassar', '2022-11-03 09:34:15', NULL),
(23, 'Sekolah Tinggi Ilmu Administrasi YAPPI Makassar', '2022-11-03 09:34:23', NULL),
(24, 'Sekolah Tinggi Ilmu Farmasi Makassar', '2022-11-03 09:34:36', NULL),
(25, 'Sekolah Tinggi Ilmu Kesehatan Makassar', '2022-11-03 09:34:46', NULL),
(26, 'Sekolah Tinggi Ilmu Manajemen Indonesia Yapmi', '2022-11-03 09:34:59', NULL),
(27, 'Sekolah Tinggi Ilmu Pertanian Wuna Raha', '2022-11-03 09:35:09', NULL),
(28, 'Sekolah Tinggi Teknik Baramuli Pinrang', '2022-11-03 09:35:18', NULL),
(29, 'STIA Al Gazali Barru', '2022-11-03 09:35:26', NULL),
(30, 'STIA Prima Bone', '2022-11-03 09:35:36', NULL),
(31, 'STIE Amkop Makassar', '2022-11-03 09:35:47', NULL),
(32, 'STIE Ciputra Makassar', '2022-11-03 09:36:02', NULL),
(33, 'STIE Enam Enam Kendari', '2022-11-03 09:36:11', NULL),
(34, 'STIE Indonesia Makassar', '2022-11-03 09:36:23', NULL),
(35, 'STIE LPI Makassar', '2022-11-03 09:36:40', NULL),
(36, 'STIE Nusantara Makassar', '2022-11-03 09:37:03', NULL),
(37, 'STIE Tri Dharma Nusantara Makassar', '2022-11-03 09:37:12', NULL),
(38, 'STIE Wira Bhakti Makassar', '2022-11-03 09:37:24', NULL),
(39, 'STIEM Bongaya YPBUP Makassar', '2022-11-03 09:37:32', NULL),
(40, 'STIH Pengayoman Watampone', '2022-11-03 09:37:43', NULL),
(41, 'STIK Tamalate Makassar', '2022-11-03 09:37:51', NULL),
(42, 'STIKES Amanah Makassar', '2022-11-03 09:38:07', NULL),
(43, 'STIKES Bataraguru Soroako', '2022-11-03 09:38:23', NULL),
(44, 'STIKES Bhakti Pertiwi Luwu Raya Palopo', '2022-11-03 09:38:31', NULL),
(45, 'STIKES Gunung Sari Makassar', '2022-11-03 09:38:42', NULL),
(46, 'STIKES Karya Kesehatan Kendari', '2022-11-03 09:38:58', NULL),
(47, 'STIKES Marendeng Majene', '2022-11-03 09:39:12', NULL),
(48, 'STIKES Nani Hasanuddin Makassar', '2022-11-03 09:39:20', NULL),
(49, 'STIKES Nusantara Jaya Makassar', '2022-11-03 09:39:31', NULL),
(50, 'STIKES panrita Husada Bulukumba', '2022-11-03 09:39:40', NULL),
(51, 'STIKES Tana Toraja', '2022-11-03 09:39:50', NULL),
(52, 'STIKES Tanawali Persada Takalar', '2022-11-03 09:40:07', NULL),
(53, 'STIKS Tamalanrea Makassar', '2022-11-03 09:40:41', NULL),
(54, 'STIM LPI Makassar', '2022-11-03 09:40:55', NULL),
(55, 'STIM Publik Makassar', '2022-11-03 09:41:06', NULL),
(56, 'STIP Yapi Bone', '2022-11-03 09:41:14', NULL),
(57, 'STISIP Veteran Palopo', '2022-11-03 09:41:23', NULL),
(58, 'STITEK Dharma Yadi Makassar', '2022-11-03 09:41:32', NULL),
(59, 'STKIP Andi Mattappa', '2022-11-03 09:41:40', NULL),
(60, 'STKIP Veteran Sidrap', '2022-11-03 09:41:51', NULL),
(61, 'STKIP YPUP Makassar', '2022-11-03 09:41:58', NULL),
(62, 'STMIK Catur Sakti Kendari', '2022-11-03 09:42:15', NULL),
(63, 'STMIK Kharisma Makassar', '2022-11-03 09:42:26', NULL),
(64, 'STMIK Profesional Makassar', '2022-11-03 09:42:39', NULL),
(65, 'Universitas AL Asyariah Mandar', '2022-11-03 09:42:49', NULL),
(66, 'Universitas Andi Djemma Palopo', '2022-11-03 09:42:58', NULL),
(67, 'Universitas Andi Djemma Toraja', '2022-11-03 09:43:21', NULL),
(68, 'Universitas Atma Jaya Makassar', '2022-11-03 09:43:35', NULL),
(69, 'Universitas Bosowa Makassar', '2022-11-03 09:43:46', NULL),
(70, 'Universitas Cokroaminoto Makassar', '2022-11-03 09:44:03', NULL),
(71, 'Universitas Cokroaminoto Palopo', '2022-11-03 09:44:48', NULL),
(72, 'Universitas Dayanu Ikhsanuddin', '2022-11-03 09:45:07', NULL),
(73, 'Universitas Dipa Makassar', '2022-11-03 09:45:21', NULL),
(74, 'Universitas Fajar Makassar', '2022-11-03 09:45:35', NULL),
(75, 'Universitas Handayani Makassar', '2022-11-03 09:45:58', NULL),
(76, 'Universitas Ichsan Sidenreng Rappang', '2022-11-03 09:46:08', NULL),
(77, 'Universitas Indonesia Timur', '2022-11-03 09:46:17', NULL),
(78, 'Universitas Islam Makassar', '2022-11-03 09:46:42', NULL),
(79, 'Universitas Kristen Indonesia Paulus', '2022-11-03 09:46:55', NULL),
(80, 'Universitas Kristen Indonesia Toraja', '2022-11-03 09:50:46', NULL),
(81, 'Universitas Lakidende Unaaha', '2022-11-03 09:51:28', NULL),
(82, 'Universitas Lamappapoleonro Soppeng', '2022-11-03 09:51:51', NULL),
(83, 'Universitas Mandala Waluya Kendari', '2022-11-03 09:52:16', NULL),
(84, 'Universitas Megarezky', '2022-11-03 09:52:58', NULL),
(85, 'Universitas Muhammadiyah Bone', '2022-11-03 09:53:12', NULL),
(86, 'Universitas Muhammadiyah Bulukumba', '2022-11-03 09:53:26', NULL),
(87, 'Universitas Muhammadiyah Buton', '2022-11-03 09:53:40', NULL),
(88, 'Universitas Muhammadiyah Enrekang', '2022-11-03 09:53:52', NULL),
(89, 'Universitas Muhammadiyah Kendari', '2022-11-03 09:54:04', NULL),
(90, 'Universitas Muhammadiyah Makassar', '2022-11-03 09:54:20', NULL),
(91, 'Universitas Muhammadiyah Mamuju', '2022-11-03 09:54:44', NULL),
(92, 'Universitas Muhammadiyah Palopo', '2022-11-03 09:54:53', NULL),
(93, 'Universitas Muhammadiyah Parepare', '2022-11-03 09:55:03', NULL),
(94, 'Universitas Muhammadiyah Sidenreng Rappang', '2022-11-03 09:55:14', NULL),
(95, 'Universitas Muhammadiyah Sinjai', '2022-11-03 09:55:24', NULL),
(96, 'Universitas Muslim Indonesia', '2022-11-03 09:56:20', NULL),
(97, 'Universitas Muslim Maros', '2022-11-03 09:56:33', NULL),
(98, 'Universitas Nahdlatul Ulama Sulawesi Tenggara', '2022-11-03 09:57:07', NULL),
(99, 'Universitas Pancasakti Makassar', '2022-11-03 09:57:21', NULL),
(100, 'Universitas Patompo', '2022-11-03 09:57:40', NULL),
(101, 'Universitas Patria Artha Makassar', '2022-11-03 09:57:57', NULL),
(102, 'Universitas Pejuang Republik Indonesia', '2022-11-03 09:58:07', NULL),
(103, 'Universitas Pepabri Makassar', '2022-11-03 09:58:19', NULL),
(104, 'Universitas Puangrimaggalatung Sengkang', '2022-11-03 09:58:30', NULL),
(105, 'Universitas Sawerigading Makassar', '2022-11-03 09:59:23', NULL),
(106, 'Universitas Sulawesi Tenggara', '2022-11-03 09:59:46', NULL),
(107, 'Universitas Teknologi Akba Makassar', '2022-11-03 10:00:04', NULL),
(108, 'Universitas Teknologi Sulawesi', '2022-11-03 10:00:21', NULL),
(109, 'Universitas Tomakaka Mamuju', '2022-11-03 10:00:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(300) DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1:admin, 2:pegawai, 3:dosen',
  `gel_depan` varchar(20) DEFAULT NULL,
  `gel_belakang` varchar(20) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `status_pegawai` varchar(100) DEFAULT NULL,
  `pts` varchar(100) DEFAULT NULL,
  `unit_kerja` varchar(100) DEFAULT NULL,
  `pangkat` varchar(50) DEFAULT NULL,
  `golongan` varchar(10) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `password`, `address`, `level`, `gel_depan`, `gel_belakang`, `jabatan`, `status_pegawai`, `pts`, `unit_kerja`, `pangkat`, `golongan`, `created`, `updated`) VALUES
(1, 'Dwinandika Prasatya', 'KKL_Undipa_MKS', '74a1c6c13c005378d923fb9922de5983845496c6', 'Sulawesi Selatan', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-15 16:22:31', NULL),
(2, 'Sitti Rahmawati', 'admin1', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a', 'Makassar, Sulawesi Selatan', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-15 16:22:31', NULL),
(9, 'Safruddin', '198112012200604101', '80f63837af199746b2052f0509d14a33eb3156be', 'Makassar, Sulawesi Selatan', 3, '', 'S. Kep', 'Asisten Ahli', 'Pegawai Negeri Sipil', 'STIK Panrita Husada Bulukumba', 'Lembaga Layanan Pedidikan Tinggi Wilayah IX', 'Penata', 'III/c', '2022-11-07 15:09:26', NULL),
(10, 'Sitti Rahmawati', '198108182010122002', '30c6a6deb48553d65fac7fdf7042a88b7579d3ce', 'Makassar, Sulawesi Selatan', 2, 'Dr.', 'SH.', 'Analis Kepegawaian Ahli Muda', 'Pegawai Negeri Sipil', '', 'Lembaga Layanan Pedidikan Tinggi Wilayah IX', 'Penata TK.I', 'III/d', '2022-11-07 16:21:45', NULL),
(11, 'Nasrullah', '196511102005011001', '8d1d9ae62cbdd6169fc5fa2d6b532369235e71ff', 'Makassar, Sulawesi Selatan', 3, '', 'SKM', 'Asisten Ahli', 'Pegawai Negeri Sipil', 'STIKS Tamalanrea Makassar', 'Lembaga Layanan Pedidikan Tinggi Wilayah IX', 'Penata Muda TK.I', 'III/b', '2022-11-14 14:04:51', NULL),
(12, 'A. Nur Hartati', '197312022002122002', '844b4f231f204f8b5ac2714a907a31978f5053eb', 'Makassar', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-14 14:06:46', NULL),
(13, 'Dahliawati', '196606252014092001', '5a6709325ed9155a65278d60f6b823773296681f', 'Makassar', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-14 22:22:42', NULL),
(14, 'St. Shofia', '197311242003122001', '43b4e5919197309e2d6f266e19fe553e04232fa9', 'Makassar', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-15 09:20:35', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kgb`
--
ALTER TABLE `data_kgb`
  ADD PRIMARY KEY (`kgb_id`);

--
-- Indexes for table `kgb_terhapus`
--
ALTER TABLE `kgb_terhapus`
  ADD PRIMARY KEY (`id_terhapus`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `list_pts`
--
ALTER TABLE `list_pts`
  ADD PRIMARY KEY (`pts_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kgb`
--
ALTER TABLE `data_kgb`
  MODIFY `kgb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `kgb_terhapus`
--
ALTER TABLE `kgb_terhapus`
  MODIFY `id_terhapus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `list_pts`
--
ALTER TABLE `list_pts`
  MODIFY `pts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2015 at 03:34 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `techno_its`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen_karyawan_bem`
--

CREATE TABLE IF NOT EXISTS `dosen_karyawan_bem` (
  `email_doskarbem` varchar(50) NOT NULL DEFAULT '',
  `nama_doskarbem` varchar(50) DEFAULT NULL,
  `jurusan_doskarbem` varchar(50) DEFAULT NULL,
  `password_doskarbem` varchar(50) DEFAULT NULL,
  `hak_akses` int(11) DEFAULT NULL,
  PRIMARY KEY (`email_doskarbem`),
  KEY `hak_akses` (`hak_akses`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen_karyawan_bem`
--

INSERT INTO `dosen_karyawan_bem` (`email_doskarbem`, `nama_doskarbem`, `jurusan_doskarbem`, `password_doskarbem`, `hak_akses`) VALUES
('bem1@its.ac.id', 'BEM ITS 1', 'TEKNIK INFORMATIKA', '12345', 3),
('dosenA@its.ac.id', 'dosen A', 'TEKNIK INFORMATIKA', '12345', 1),
('dosenB@its.ac.id', 'dosen B', 'TEKNIK ELEKTRO', '12345', 2),
('karyawan1@its.ac.id', 'Karyawan 1', 'TEKNIK ELEKTRO', '12345', 4);

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE IF NOT EXISTS `hak_akses` (
  `id_hak_akses` int(11) NOT NULL AUTO_INCREMENT,
  `nama_hak_akses` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_hak_akses`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id_hak_akses`, `nama_hak_akses`) VALUES
(1, 'Dosen P2KM'),
(2, 'Dosen Pembimbing'),
(3, 'BEM ITS'),
(4, 'Karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'BIOLOGI'),
(2, 'DESAIN PRODUK INDUSTRI'),
(3, 'FISIKA'),
(4, 'KIMIA'),
(5, 'MANAJEMEN BISNIS'),
(6, 'MATEMATIKA'),
(7, 'PERENCANAAN WILAYAH DAN KOTA'),
(8, 'SISTEM INFORMASI'),
(9, 'STATISTIKA'),
(10, 'TEKNIK ELEKTRO'),
(11, 'TEKNIK FISIKA'),
(12, 'TEKNIK GEOFISIKA'),
(13, 'TEKNIK GEOMATIKA'),
(14, 'TEKNIK INDUSTRI'),
(15, 'TEKNIK INFORMATIKA'),
(16, 'TEKNIK KELAUTAN'),
(17, 'TEKNIK KIMIA'),
(18, 'TEKNIK LINGKUNGAN'),
(19, 'TEKNIK MATERIAL DAN METALURGI'),
(20, 'TEKNIK MESIN'),
(21, 'TEKNIK MULTIMEDIA DAN JARINGAN'),
(22, 'TEKNIK PERKAPALAN'),
(23, 'TEKNIK SIPIL'),
(24, 'TEKNIK SISTEM PERKAPALAN'),
(25, 'TEKNIK SISTEM PERKAPALAN (GELAR GANDA ITS-JERMAN)'),
(26, 'TRANSPORTASI LAUT');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nrp` varchar(11) NOT NULL DEFAULT '',
  `nama` varchar(50) DEFAULT NULL,
  `path_ktm` varchar(75) DEFAULT NULL,
  `jurusan` int(11) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `email_mahasiswa` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nrp`),
  KEY `jurusan` (`jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nrp`, `nama`, `path_ktm`, `jurusan`, `telepon`, `email_mahasiswa`) VALUES
('5111100166', 'Rifi Febrio', '/6_2015_PMW/ktm_anggota_1.jpg', 15, '0812354183213', 'rifi@mhs.if.its.ac.id'),
('5111100170', 'Fahmi Armand', '/4_2015_PMW/ktm_ketua_kelompok.jpg', 15, '0821234545551', 'fahmi@mhs.if.its.ac.id'),
('5111100195', 'Iqbal Bachmid', '/6_2015_PMW/ktm_ketua_kelompok.jpg', 15, '08123591231', 'iqbal@mhs.if.its.ac.id'),
('5111100702', 'Didik Purwanto', '/13_2015_PMW/ktm_ketua_kelompok.jpg', 15, '08213124758341', 'didik@mhs.if.its.ac.id'),
('51111177', 'Didpurwanto', '/5_2015_PMW/ktm_ketua_kelompok.jpg', 1, '0812373127112', 'didPurwanto@mhs.if.its.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_pengaju_proposal`
--

CREATE TABLE IF NOT EXISTS `mahasiswa_pengaju_proposal` (
  `id_mahasiswa_pengaju_proposal` int(11) NOT NULL AUTO_INCREMENT,
  `status_ketua` tinyint(1) DEFAULT NULL,
  `nrp` varchar(11) DEFAULT NULL,
  `id_pengaju_proposal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mahasiswa_pengaju_proposal`),
  KEY `nrp` (`nrp`),
  KEY `id_pengaju_proposal` (`id_pengaju_proposal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `mahasiswa_pengaju_proposal`
--

INSERT INTO `mahasiswa_pengaju_proposal` (`id_mahasiswa_pengaju_proposal`, `status_ketua`, `nrp`, `id_pengaju_proposal`) VALUES
(3, 0, '5111100170', 4),
(10, 1, '5111100702', 4),
(11, 1, '51111177', 5),
(12, 1, '5111100195', 6),
(18, 0, '5111100166', 6);

-- --------------------------------------------------------

--
-- Table structure for table `monev_1_bulan`
--

CREATE TABLE IF NOT EXISTS `monev_1_bulan` (
  `id_monev_1_bulan` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengaju_proposal` int(11) DEFAULT NULL,
  `dosbem` varchar(50) DEFAULT NULL,
  `path_file_monev_1_bulan` varchar(100) DEFAULT NULL,
  `rekomendasi` tinyint(1) DEFAULT NULL,
  `catatan_dan_saran_pembimbing` varchar(500) DEFAULT NULL,
  `catatan_dan_saran_p2km` varchar(500) DEFAULT NULL,
  `catatan_dan_saran_reviewer` varchar(500) DEFAULT NULL,
  `alasan_gagal` varchar(500) DEFAULT NULL,
  `jawaban_1_1` varchar(500) DEFAULT NULL,
  `jawaban_1_2` varchar(500) DEFAULT NULL,
  `jawaban_1_3` varchar(500) DEFAULT NULL,
  `jawaban_2_1` varchar(500) DEFAULT NULL,
  `jawaban_2_2` varchar(500) DEFAULT NULL,
  `jawaban_2_3` varchar(500) DEFAULT NULL,
  `jawaban_3_1` varchar(500) DEFAULT NULL,
  `jawaban_3_2` varchar(500) DEFAULT NULL,
  `jawaban_3_3` varchar(500) DEFAULT NULL,
  `jawaban_4_1` varchar(500) DEFAULT NULL,
  `jawaban_4_2` varchar(500) DEFAULT NULL,
  `jawaban_4_3` varchar(500) DEFAULT NULL,
  `jawaban_5_1` varchar(500) DEFAULT NULL,
  `jawaban_5_2` varchar(500) DEFAULT NULL,
  `jawaban_5_3` varchar(500) DEFAULT NULL,
  `jawaban_6_1` varchar(500) DEFAULT NULL,
  `jawaban_6_2` varchar(500) DEFAULT NULL,
  `jawaban_6_3` varchar(500) DEFAULT NULL,
  `jawaban_7_1` varchar(500) DEFAULT NULL,
  `jawaban_7_2` varchar(500) DEFAULT NULL,
  `jawaban_7_3` varchar(500) DEFAULT NULL,
  `jawaban_8_1` varchar(500) DEFAULT NULL,
  `jawaban_8_2` varchar(500) DEFAULT NULL,
  `jawaban_8_3` varchar(500) DEFAULT NULL,
  `jawaban_9_1` varchar(500) DEFAULT NULL,
  `jawaban_9_2` varchar(500) DEFAULT NULL,
  `jawaban_9_3` varchar(500) DEFAULT NULL,
  `jawaban_10_1` varchar(500) DEFAULT NULL,
  `jawaban_10_2` varchar(500) DEFAULT NULL,
  `jawaban_10_3` varchar(500) DEFAULT NULL,
  `jawaban_11_1` varchar(500) DEFAULT NULL,
  `jawaban_11_2` varchar(500) DEFAULT NULL,
  `jawaban_11_3` varchar(500) DEFAULT NULL,
  `jawaban_12_1` varchar(500) DEFAULT NULL,
  `jawaban_12_2` varchar(500) DEFAULT NULL,
  `jawaban_12_3` varchar(500) DEFAULT NULL,
  `jawaban_13_1` varchar(500) DEFAULT NULL,
  `jawaban_13_2` varchar(500) DEFAULT NULL,
  `jawaban_13_3` varchar(500) DEFAULT NULL,
  `jawaban_14_1` varchar(500) DEFAULT NULL,
  `jawaban_14_2` varchar(500) DEFAULT NULL,
  `jawaban_14_3` varchar(500) DEFAULT NULL,
  `jawaban_15_1` varchar(500) DEFAULT NULL,
  `jawaban_15_2` varchar(500) DEFAULT NULL,
  `jawaban_15_3` varchar(500) DEFAULT NULL,
  `jawaban_16_1` varchar(500) DEFAULT NULL,
  `jawaban_16_2` varchar(500) DEFAULT NULL,
  `jawaban_16_3` varchar(500) DEFAULT NULL,
  `kendala` varchar(500) DEFAULT NULL,
  `periode_monev` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_monev_1_bulan`),
  KEY `id_pengaju_proposal` (`id_pengaju_proposal`),
  KEY `dosbem` (`dosbem`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `monev_1_bulan`
--

INSERT INTO `monev_1_bulan` (`id_monev_1_bulan`, `id_pengaju_proposal`, `dosbem`, `path_file_monev_1_bulan`, `rekomendasi`, `catatan_dan_saran_pembimbing`, `catatan_dan_saran_p2km`, `catatan_dan_saran_reviewer`, `alasan_gagal`, `jawaban_1_1`, `jawaban_1_2`, `jawaban_1_3`, `jawaban_2_1`, `jawaban_2_2`, `jawaban_2_3`, `jawaban_3_1`, `jawaban_3_2`, `jawaban_3_3`, `jawaban_4_1`, `jawaban_4_2`, `jawaban_4_3`, `jawaban_5_1`, `jawaban_5_2`, `jawaban_5_3`, `jawaban_6_1`, `jawaban_6_2`, `jawaban_6_3`, `jawaban_7_1`, `jawaban_7_2`, `jawaban_7_3`, `jawaban_8_1`, `jawaban_8_2`, `jawaban_8_3`, `jawaban_9_1`, `jawaban_9_2`, `jawaban_9_3`, `jawaban_10_1`, `jawaban_10_2`, `jawaban_10_3`, `jawaban_11_1`, `jawaban_11_2`, `jawaban_11_3`, `jawaban_12_1`, `jawaban_12_2`, `jawaban_12_3`, `jawaban_13_1`, `jawaban_13_2`, `jawaban_13_3`, `jawaban_14_1`, `jawaban_14_2`, `jawaban_14_3`, `jawaban_15_1`, `jawaban_15_2`, `jawaban_15_3`, `jawaban_16_1`, `jawaban_16_2`, `jawaban_16_3`, `kendala`, `periode_monev`) VALUES
(3, 4, NULL, '/4_2015_PMW/monev_1_bulan_1.zip', NULL, NULL, NULL, NULL, NULL, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 1),
(4, 4, NULL, '/4_2015_PMW/monev_1_bulan_2.zip', NULL, NULL, NULL, NULL, NULL, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengaju_proposal`
--

CREATE TABLE IF NOT EXISTS `pengaju_proposal` (
  `id_pengaju_proposal` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_pengaju_proposal` int(11) NOT NULL DEFAULT '0',
  `password_akun_pengaju` varchar(50) DEFAULT NULL,
  `status_akun_pengaju` int(11) DEFAULT NULL,
  `skema` int(11) NOT NULL DEFAULT '0',
  `path_proposal` varchar(100) DEFAULT NULL,
  `judul_proposal` varchar(50) DEFAULT NULL,
  `dana_diajukan` int(11) DEFAULT NULL,
  `dana_disetujui` int(11) DEFAULT NULL,
  `status_pengaju` varchar(11) DEFAULT NULL,
  `abstraksi` varchar(750) DEFAULT NULL,
  `status_ijazah` tinyint(1) DEFAULT NULL,
  `dosen_pembimbing` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pengaju_proposal`,`skema`,`tahun_pengaju_proposal`),
  KEY `status_pengaju` (`status_pengaju`),
  KEY `skema` (`skema`,`tahun_pengaju_proposal`),
  KEY `dosen_pembimbing` (`dosen_pembimbing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pengaju_proposal`
--

INSERT INTO `pengaju_proposal` (`id_pengaju_proposal`, `tahun_pengaju_proposal`, `password_akun_pengaju`, `status_akun_pengaju`, `skema`, `path_proposal`, `judul_proposal`, `dana_diajukan`, `dana_disetujui`, `status_pengaju`, `abstraksi`, `status_ijazah`, `dosen_pembimbing`) VALUES
(4, 2015, '123456', 1, 1, '/4_2015_PMW/proposal.pdf', 'testing 1 2 3', 1000000, NULL, 'A1', 'test 1 2 3', NULL, 'dosenA@its.ac.id'),
(5, 2015, '1234', 1, 1, NULL, NULL, NULL, NULL, 'A0', NULL, NULL, NULL),
(6, 2015, '12345', 1, 1, '/6_2015_PMW/proposal.pdf', 'testing penambahan telepon dan email', 1000000, NULL, 'A1', 'testing', NULL, 'dosenA@its.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_proposal`
--

CREATE TABLE IF NOT EXISTS `penilaian_proposal` (
  `id_penilaian_proposal` int(11) NOT NULL AUTO_INCREMENT,
  `keterangan_interaksi` varchar(100) DEFAULT NULL,
  `doskarbem` varchar(50) DEFAULT NULL,
  `pengaju_proposal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_penilaian_proposal`),
  KEY `doskarbem` (`doskarbem`),
  KEY `pengaju_proposal` (`pengaju_proposal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `skema`
--

CREATE TABLE IF NOT EXISTS `skema` (
  `id_skema` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_skema` int(11) NOT NULL DEFAULT '0',
  `nama_skema` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_skema`,`tahun_skema`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `skema`
--

INSERT INTO `skema` (`id_skema`, `tahun_skema`, `nama_skema`) VALUES
(1, 2015, 'PMW'),
(2, 2015, 'BRI');

-- --------------------------------------------------------

--
-- Table structure for table `status_pengaju`
--

CREATE TABLE IF NOT EXISTS `status_pengaju` (
  `id_status` varchar(11) NOT NULL DEFAULT '',
  `nama_status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_pengaju`
--

INSERT INTO `status_pengaju` (`id_status`, `nama_status`) VALUES
('A0', 'Upload Proposal'),
('A1', 'Proposal masih diproses');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen_karyawan_bem`
--
ALTER TABLE `dosen_karyawan_bem`
  ADD CONSTRAINT `dosen_karyawan_bem_ibfk_1` FOREIGN KEY (`hak_akses`) REFERENCES `hak_akses` (`id_hak_akses`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`jurusan`) REFERENCES `jurusan` (`id_jurusan`);

--
-- Constraints for table `mahasiswa_pengaju_proposal`
--
ALTER TABLE `mahasiswa_pengaju_proposal`
  ADD CONSTRAINT `mahasiswa_pengaju_proposal_ibfk_1` FOREIGN KEY (`nrp`) REFERENCES `mahasiswa` (`nrp`),
  ADD CONSTRAINT `mahasiswa_pengaju_proposal_ibfk_2` FOREIGN KEY (`id_pengaju_proposal`) REFERENCES `pengaju_proposal` (`id_pengaju_proposal`);

--
-- Constraints for table `monev_1_bulan`
--
ALTER TABLE `monev_1_bulan`
  ADD CONSTRAINT `monev_1_bulan_ibfk_1` FOREIGN KEY (`id_pengaju_proposal`) REFERENCES `pengaju_proposal` (`id_pengaju_proposal`),
  ADD CONSTRAINT `monev_1_bulan_ibfk_2` FOREIGN KEY (`dosbem`) REFERENCES `dosen_karyawan_bem` (`email_doskarbem`);

--
-- Constraints for table `pengaju_proposal`
--
ALTER TABLE `pengaju_proposal`
  ADD CONSTRAINT `pengaju_proposal_ibfk_1` FOREIGN KEY (`status_pengaju`) REFERENCES `status_pengaju` (`id_status`),
  ADD CONSTRAINT `pengaju_proposal_ibfk_2` FOREIGN KEY (`skema`, `tahun_pengaju_proposal`) REFERENCES `skema` (`id_skema`, `tahun_skema`),
  ADD CONSTRAINT `pengaju_proposal_ibfk_3` FOREIGN KEY (`dosen_pembimbing`) REFERENCES `dosen_karyawan_bem` (`email_doskarbem`);

--
-- Constraints for table `penilaian_proposal`
--
ALTER TABLE `penilaian_proposal`
  ADD CONSTRAINT `penilaian_proposal_ibfk_1` FOREIGN KEY (`doskarbem`) REFERENCES `dosen_karyawan_bem` (`email_doskarbem`),
  ADD CONSTRAINT `penilaian_proposal_ibfk_2` FOREIGN KEY (`pengaju_proposal`) REFERENCES `pengaju_proposal` (`id_pengaju_proposal`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

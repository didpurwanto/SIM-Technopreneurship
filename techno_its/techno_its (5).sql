-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2015 at 11:33 AM
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
('dosenB@its.ac.id', 'dosen B', 'TEKNIK ELEKTRO', '1234', 2),
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
-- Table structure for table `jawaban_pertanyaan_monev_1_bulan`
--

CREATE TABLE IF NOT EXISTS `jawaban_pertanyaan_monev_1_bulan` (
  `id_jawaban_pertanyaan_monev_1_bulan` int(11) NOT NULL AUTO_INCREMENT,
  `jawaban_pertanyaan_monev_1_bulan` varchar(500) DEFAULT NULL,
  `id_pertanyaan_monev` int(11) DEFAULT NULL,
  `id_monev_1_bulan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jawaban_pertanyaan_monev_1_bulan`),
  KEY `id_monev_1_bulan` (`id_monev_1_bulan`),
  KEY `id_pertanyaan_monev` (`id_pertanyaan_monev`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `jawaban_pertanyaan_monev_1_bulan`
--

INSERT INTO `jawaban_pertanyaan_monev_1_bulan` (`id_jawaban_pertanyaan_monev_1_bulan`, `jawaban_pertanyaan_monev_1_bulan`, `id_pertanyaan_monev`, `id_monev_1_bulan`) VALUES
(1, '1', 1, 1),
(2, '2', 2, 1),
(3, '3', 3, 1),
(4, '4', 4, 1),
(5, '5', 5, 1),
(6, '6', 6, 1),
(7, '7', 7, 1),
(8, '8', 8, 1),
(9, '9', 9, 1),
(10, '10', 10, 1),
(11, '11', 11, 1),
(12, '12', 12, 1),
(13, '13', 13, 1),
(14, '14', 14, 1),
(15, '15', 15, 1),
(16, '16', 16, 1),
(17, '17', 17, 1),
(18, '18', 18, 1),
(19, '19', 19, 1),
(20, '20', 20, 1),
(21, '21', 21, 1),
(22, '22', 22, 1),
(23, '23', 23, 1),
(24, '24', 24, 1),
(25, '25', 25, 1),
(26, '26', 26, 1),
(27, '27', 27, 1),
(28, '28', 28, 1),
(29, '29', 29, 1),
(30, '30', 30, 1),
(31, '31', 31, 1),
(32, '32', 32, 1),
(33, '33', 33, 1),
(34, '34', 34, 1),
(35, '35', 35, 1),
(36, '36', 36, 1),
(37, '37', 37, 1),
(38, '38', 38, 1),
(39, '39', 39, 1),
(40, '40', 40, 1),
(41, '41', 41, 1),
(42, '42', 42, 1),
(43, '43', 43, 1),
(44, '44', 44, 1),
(45, '45', 45, 1),
(46, '46', 46, 1),
(47, '47', 47, 1),
(48, '48', 48, 1),
(49, '500000', 49, 1),
(50, '550000', 50, 1),
(51, '600000', 51, 1),
(52, '650000', 52, 1),
(53, '700000', 53, 1),
(54, '100000', 54, 1),
(55, '150000', 55, 1),
(56, '200000', 56, 1),
(57, '250000', 57, 1),
(58, '300000', 58, 1),
(59, '1', 1, 2),
(60, '2', 2, 2),
(61, '3', 3, 2),
(62, '4', 4, 2),
(63, '5', 5, 2),
(64, '6', 6, 2),
(65, '7', 7, 2),
(66, '8', 8, 2),
(67, '9', 9, 2),
(68, '10', 10, 2),
(69, '11', 11, 2),
(70, '12', 12, 2),
(71, '13', 13, 2),
(72, '14', 14, 2),
(73, '15', 15, 2),
(74, '16', 16, 2),
(75, '17', 17, 2),
(76, '18', 18, 2),
(77, '19', 19, 2),
(78, '20', 20, 2),
(79, '21', 21, 2),
(80, '22', 22, 2),
(81, '23', 23, 2),
(82, '24', 24, 2),
(83, '25', 25, 2),
(84, '26', 26, 2),
(85, '27', 27, 2),
(86, '28', 28, 2),
(87, '29', 29, 2),
(88, '30', 30, 2),
(89, '31', 31, 2),
(90, '32', 32, 2),
(91, '33', 33, 2),
(92, '34', 34, 2),
(93, '35', 35, 2),
(94, '36', 36, 2),
(95, '37', 37, 2),
(96, '38', 38, 2),
(97, '39', 39, 2),
(98, '40', 40, 2),
(99, '41', 41, 2),
(100, '42', 42, 2),
(101, '43', 43, 2),
(102, '44', 44, 2),
(103, '45', 45, 2),
(104, '46', 46, 2),
(105, '47', 47, 2),
(106, '48', 48, 2),
(107, '500000', 49, 2),
(108, '550000', 50, 2),
(109, '600000', 51, 2),
(110, '650000', 52, 2),
(111, '700000', 53, 2),
(112, '100000', 54, 2),
(113, '150000', 55, 2),
(114, '200000', 56, 2),
(115, '250000', 57, 2),
(116, '300000', 58, 2);

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
  `dosbem_penilai` varchar(50) DEFAULT NULL,
  `nilai_monev_1_bulan` int(11) DEFAULT NULL,
  `path_file_monev_1_bulan` varchar(100) DEFAULT NULL,
  `rekomendasi` tinyint(1) DEFAULT NULL,
  `catatan_dan_saran_pembimbing` varchar(500) DEFAULT NULL,
  `catatan_dan_saran_p2km` varchar(500) DEFAULT NULL,
  `catatan_dan_saran_reviewer` varchar(500) DEFAULT NULL,
  `alasan_gagal` varchar(500) DEFAULT NULL,
  `kendala` varchar(500) DEFAULT NULL,
  `periode_monev` int(11) DEFAULT NULL,
  `tanggal_memasukan_monev` date DEFAULT NULL,
  PRIMARY KEY (`id_monev_1_bulan`),
  KEY `id_pengaju_proposal` (`id_pengaju_proposal`),
  KEY `dosbem_penilai` (`dosbem_penilai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `monev_1_bulan`
--

INSERT INTO `monev_1_bulan` (`id_monev_1_bulan`, `id_pengaju_proposal`, `dosbem_penilai`, `nilai_monev_1_bulan`, `path_file_monev_1_bulan`, `rekomendasi`, `catatan_dan_saran_pembimbing`, `catatan_dan_saran_p2km`, `catatan_dan_saran_reviewer`, `alasan_gagal`, `kendala`, `periode_monev`, `tanggal_memasukan_monev`) VALUES
(1, 4, NULL, NULL, '/4_2015_PMW/monev_1_bulan_1.zip', NULL, NULL, NULL, NULL, NULL, 'a', 1, '2015-04-16'),
(2, 4, NULL, NULL, '/4_2015_PMW/monev_1_bulan_2.zip', NULL, NULL, NULL, NULL, NULL, 'kendala', 2, '2015-04-16');

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
  `tanggal_registrasi` date DEFAULT NULL,
  `tanggal_memasukan_proposal` date DEFAULT NULL,
  `alasan_pengunduran_diri` varchar(500) DEFAULT NULL,
  `path_file_pengunduran_diri` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_pengaju_proposal`,`skema`,`tahun_pengaju_proposal`),
  KEY `status_pengaju` (`status_pengaju`),
  KEY `skema` (`skema`,`tahun_pengaju_proposal`),
  KEY `dosen_pembimbing` (`dosen_pembimbing`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pengaju_proposal`
--

INSERT INTO `pengaju_proposal` (`id_pengaju_proposal`, `tahun_pengaju_proposal`, `password_akun_pengaju`, `status_akun_pengaju`, `skema`, `path_proposal`, `judul_proposal`, `dana_diajukan`, `dana_disetujui`, `status_pengaju`, `abstraksi`, `status_ijazah`, `dosen_pembimbing`, `tanggal_registrasi`, `tanggal_memasukan_proposal`, `alasan_pengunduran_diri`, `path_file_pengunduran_diri`) VALUES
(4, 2015, '1234', 1, 1, '/4_2015_PMW/proposal.pdf', 'testing 1 2 3', 1000000, NULL, 'A1', 'test 1 2 3', NULL, 'dosenA@its.ac.id', '2015-04-10', '2015-04-14', NULL, NULL),
(5, 2015, '1234', 1, 1, NULL, NULL, NULL, NULL, 'A0', NULL, NULL, NULL, '2015-04-10', NULL, NULL, NULL),
(6, 2015, '12345', 1, 1, '/6_2015_PMW/proposal.pdf', 'testing penambahan telepon dan email', 1000000, NULL, 'A1', 'testing', NULL, 'dosenA@its.ac.id', '2015-04-16', '2015-04-16', 'testing', '/6_2015_PMW/pengunduran_diri.pdf');

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
-- Table structure for table `pertanyaan_monev_1_bulan`
--

CREATE TABLE IF NOT EXISTS `pertanyaan_monev_1_bulan` (
  `id_pertanyaan_monev` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pertanyaan_monev` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_pertanyaan_monev`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `pertanyaan_monev_1_bulan`
--

INSERT INTO `pertanyaan_monev_1_bulan` (`id_pertanyaan_monev`, `nama_pertanyaan_monev`) VALUES
(1, 'Bagaimana struktur usaha?	'),
(2, 'Bagaimana peran masing-masing bagian?'),
(3, 'Apa sajakah kesepakatan yang yang telah dibuat?'),
(4, 'Seberapa banyak kita membeli stok?'),
(5, 'Bagaimana membeli stok bahan baku ketika diawal usaha?'),
(6, 'Hal apa sajakah yang perlu dipertimbangkan?'),
(7, 'Siapakah yg sebaiknya diawal melakukan proses produksi?'),
(8, 'Bagaimana membuat proses produksi efisien?'),
(9, 'Apakah alat produksi mutlak harus dimiliki diawal usaha?'),
(10, 'Bagaimana distribusi bahan baku kerumah produksi?'),
(11, 'Bagaimana strategi distribusi kekonsumen (delivery order)?'),
(12, 'Berapa minimum produk bisa diantar?'),
(13, 'Apa sajakah strategi marketing yang dilakukan?'),
(14, 'Berapa budget marketing tiap bulan?'),
(15, 'Bagaimana mengukur keberhasilan marketing yang dilakukan?'),
(16, 'Apa yang dilakukan kalau ada konsumen marah?'),
(17, 'Bagaimana mengetahui tingkat kepuasan konsumen?'),
(18, 'Pelayanan apa yang diberikan setelah barang terjual?'),
(19, 'Seperti apakah program pengembangan produk?'),
(20, 'Apa yang menjadi pertimbangan arah RnD?'),
(21, 'Siapakah yang melakukan program RnD?'),
(22, 'Berapa biaya yang digunakan untuk start up?'),
(23, 'Barang-barang apa saja yang dibeli saat start up?'),
(24, 'Bagaiamana cara menghemat biaya start up?'),
(25, 'Dimanakah proses produksi berjalan saat diawal?'),
(26, 'Apakah perlu kita memilih posisi strategis?'),
(27, 'Apa pertimbangan memilih lokasi?'),
(28, 'Bagaiamanakah format pencatatan keuangan yang dilakukan?'),
(29, 'Apa sajakah yang harus dicatat?'),
(30, 'Bagaimana mengurangi faktor resiko, pencatatan tidak sama dengan barang yang terjual?'),
(31, 'Apa alasan memilih brand saat ini?'),
(32, 'Apakah tips memilih logo yang tepat?'),
(33, 'Apa tagline-nya? Dan apa pengaruhnya dengan positioning?'),
(34, 'Bagaimana cara merekrut karyawan?'),
(35, 'Bagaimana cara perhitungan gaji karyawan diawal?'),
(36, 'Bagaimana cara mengontrol karyawan?'),
(37, 'Bagaimana cara menentukan harga jual?'),
(38, 'Seberapa besar profit yang bisa diambil?'),
(39, 'Apabila ada pesaing dg harga murah, apa yang harus dilakukan?'),
(40, 'Apakah dari awal sudah berbadan hukum?'),
(41, 'Apakah keuntungan &kerugian punya badan hukum?'),
(42, 'Apakah sudah mendaftarkan merek? Bgaiamana caranya?'),
(43, 'Apa sajakah pesaing usaha ini?'),
(44, 'Bagaimana strategi menghadapi mereka?'),
(45, 'Apakah pernah terjadi konflik?'),
(46, 'Bagaimana cara menentukan gaji owner?'),
(47, 'Seberapa besar laba ditahan untuk keberlangsungan usaha?'),
(48, 'Apakah ada pengaruh kinerja antara owner yang digaji dengan tidak digaji?'),
(49, 'omset minggu 1?'),
(50, 'omset minggu 2?'),
(51, 'omset minggu 3?'),
(52, 'omset minggu 4?'),
(53, 'omset minggu 5?'),
(54, 'keuntungan minggu 1?'),
(55, 'keuntungan minggu 2?'),
(56, 'keuntungan minggu 3?'),
(57, 'keuntungan minggu 4?'),
(58, 'keuntungan minggu 5?');

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
-- Constraints for table `jawaban_pertanyaan_monev_1_bulan`
--
ALTER TABLE `jawaban_pertanyaan_monev_1_bulan`
  ADD CONSTRAINT `jawaban_pertanyaan_monev_1_bulan_ibfk_1` FOREIGN KEY (`id_monev_1_bulan`) REFERENCES `monev_1_bulan` (`id_monev_1_bulan`),
  ADD CONSTRAINT `jawaban_pertanyaan_monev_1_bulan_ibfk_2` FOREIGN KEY (`id_pertanyaan_monev`) REFERENCES `pertanyaan_monev_1_bulan` (`id_pertanyaan_monev`);

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
  ADD CONSTRAINT `monev_1_bulan_ibfk_2` FOREIGN KEY (`dosbem_penilai`) REFERENCES `dosen_karyawan_bem` (`email_doskarbem`);

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

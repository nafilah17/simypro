-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 02:59 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_simpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `af_bidang`
--

CREATE TABLE IF NOT EXISTS `af_bidang` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id_bidang` varchar(11) NOT NULL,
  `nama_bidang` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`no`),
  KEY `nama_bidang` (`nama_bidang`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `af_bidang`
--

INSERT INTO `af_bidang` (`no`, `id_bidang`, `nama_bidang`, `deskripsi`) VALUES
(4, 'BID-00001', 'Pendidikan', 'Program dan pemberdayaan bidang pendidikan YDSF Malang mempunyai tajuk bernama PERMATA (PEndidikan ceRdas Mandiri unTuk generasi bangsA), program ini bertujuan memberikan support bagi  sekolah dan pelaku pendidikan untuk memberikan yang terbaik bagi negeri ini.'),
(5, 'BID-00002', 'Soskem', 'Melalui Program Sosial Kemanusiaan, YDSF Malang berupaya maksimal untuk memberikan pelayanan prima kepada masyarakat khususnya kaum dhuafa.'),
(6, 'BID-00003', 'Dakwah', 'Program Dakwah untuk memberikan edukasi kepada masyarakat, agar masyarakat bisa memahami Islam secara benar.'),
(7, 'BID-00004', 'Masjid', 'YDSF Malang melalui program ini akan memfokuskan agar Masjid/Musholla bisa berfungsi secara maksimal sebagai pusat aktiftas dakwah.'),
(8, 'BID-00005', 'Yatim', 'Penanganan anak-anak Yatim Piatu bukanlah menjadi tugas Lembaga Panti Asuhan saja, namun hal ini sudah harus menjadi tugas dan tanggung jawab kita sebagai ummat muslim. Program Yatim YDSF Malang difokuskan pada  pemberian bantuan untuk anak yatim piatu, keluarga yatim dan lembaga  Panti Asuhan.'),
(10, 'BID-00007', 'bidang 7', 'deskripsi bidang 7');

-- --------------------------------------------------------

--
-- Table structure for table `af_kategori`
--

CREATE TABLE IF NOT EXISTS `af_kategori` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` varchar(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`no`),
  KEY `nama_kategori` (`nama_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `af_kategori`
--

INSERT INTO `af_kategori` (`no`, `id_kategori`, `nama_kategori`, `deskripsi`) VALUES
(1, 'KAT-00001', 'Masjid', 'Kategori bidang Masjid dan Dakwah'),
(2, 'KAT-00002', 'Musholla', 'Kategori bidang Masjid dan Dakwah'),
(3, 'KAT-00003', 'Ponpes', '-'),
(4, 'KAT-00004', 'Sekolah', 'Kategori bidang Pendidikan'),
(5, 'KAT-00005', 'TPQ', 'Kategori bidang Masjid dan Dakwah'),
(6, 'KAT-00006', 'Majelis Ta''lim', 'Kategori bidang Masjid dan Dakwah'),
(7, 'KAT-00007', 'Lembaga', '-'),
(8, 'KAT-00008', 'LKSA/PA', '-'),
(9, 'KAT-00009', 'LKSA/PI', '-'),
(10, 'KAT-00010', 'Madin', '-'),
(11, 'KAT-00011', 'Ma''had', '-'),
(12, 'KAT-00012', 'Organisasi', '-'),
(13, 'KAT-00013', 'Qurban', '-'),
(14, 'KAT-00014', 'Beasiswa Permata', 'Kategori beasiswa permata'),
(15, 'KAT-00015', 'LKSA', 'LKSA Pa/Pi'),
(16, 'KAT-00016', 'Yayasan', '-'),
(17, 'KAT-00017', 'Beasiswa Yatim', 'Beasiswa Anak Yatim'),
(18, 'KAT-00018', 'Bantuan Biaya Hidup Keluarga Yatim', 'Bantuan hidup keluarga yatim'),
(19, 'KAT-00019', 'Komunitas', 'Komunitas'),
(20, 'KAT-00020', 'Taman Pendidikan', 'Kategori Taman Pendidikan'),
(21, 'KAT-00021', 'kategori 21', 'deskripsi 21');

-- --------------------------------------------------------

--
-- Table structure for table `af_program`
--

CREATE TABLE IF NOT EXISTS `af_program` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bidang` varchar(50) NOT NULL,
  `id_program` varchar(11) NOT NULL,
  `nama_program` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`no`),
  KEY `nama_program` (`nama_program`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `af_program`
--

INSERT INTO `af_program` (`no`, `nama_bidang`, `id_program`, `nama_program`, `deskripsi`) VALUES
(3, 'Pendidikan', 'PRO-00001', 'program 1', 'program 1 pendidikan'),
(10, 'Soskem', 'PRO-00002', 'program 2', 'deskripsi program 2'),
(11, 'Masjid', 'PRO-00003', 'program 3', 'deskripsi program 3');

-- --------------------------------------------------------

--
-- Table structure for table `af_proposal`
--

CREATE TABLE IF NOT EXISTS `af_proposal` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id_proposal` varchar(11) NOT NULL,
  `bulan_masuk` text NOT NULL,
  `tgl_masuk` date NOT NULL,
  `id_bidang` varchar(11) NOT NULL,
  `nama_bidang` varchar(50) NOT NULL,
  `id_kategori` varchar(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `id_program` varchar(11) NOT NULL,
  `nama_program` varchar(50) NOT NULL,
  `nama_lembaga` varchar(150) NOT NULL,
  `alamat_lembaga` varchar(150) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kota_kab` varchar(100) NOT NULL,
  `wil_malang` varchar(100) NOT NULL,
  `nama_kontak` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `rekomendasi` varchar(100) NOT NULL,
  `jml_pengajuan` double NOT NULL,
  `bentuk_pengajuan` varchar(100) NOT NULL,
  `tgl_survei` date NOT NULL,
  PRIMARY KEY (`no`),
  KEY `id_bidang` (`id_bidang`),
  KEY `id_kategori` (`id_kategori`),
  KEY `id_program` (`id_program`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `af_proposal`
--

INSERT INTO `af_proposal` (`no`, `id_proposal`, `bulan_masuk`, `tgl_masuk`, `id_bidang`, `nama_bidang`, `id_kategori`, `nama_kategori`, `id_program`, `nama_program`, `nama_lembaga`, `alamat_lembaga`, `kecamatan`, `kota_kab`, `wil_malang`, `nama_kontak`, `telepon`, `rekomendasi`, `jml_pengajuan`, `bentuk_pengajuan`, `tgl_survei`) VALUES
(5, 'PR-00001', 'oktober', '2018-10-02', 'BID-00003', 'asdf 4', 'KAT-00003', 'kategori 21', 'PRO-00001', 'Dakwah', 'lembaga satu', 'jalan lembaga', 'lawang', 'kabupaten', 'Kota Malang', 'asri', '08812345678', 'qwertyyyyy 3', 5000000, 'surat', '2018-10-10'),
(6, 'PR-00002', 'oktober', '2018-10-05', 'BID-00001', 'bidang 1', 'KAT-00001', 'Masjid', 'PRO-00001', 'Dakwah', 'lembaga dua', 'jalan lembaga A', 'singosari', 'malang 3', 'Malang Selatan', 'asria', '085755785777', 'suraaat xxxxx', 20000, 'surat', '2018-10-11'),
(7, 'PR-00003', 'oktober', '2018-10-31', 'BID-00001', 'bidang 1', 'KAT-00001', 'Masjid', 'PRO-00001', 'Dakwah', 'asdf', 'jl. lembaga', 'singosari', 'kab', 'Malang Utara', 'popopopo ', '085755785123', 'suraaat', 20000, 'surat', '2018-10-10'),
(9, 'PR-00004', 'oktober', '2018-10-04', 'BID-00001', 'bidang 1', 'KAT-00013', 'Musholla', 'PRO-00001', 'aaaa', 'lembaga nju', 'alamat lima', 'lima', 'kabupaten malang', 'Kota Malang', 'ani', '08578899965', 'qwerty', 120000, 'surat', '2018-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` enum('admin','member') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `email`, `password`, `level`) VALUES
(1, 'nafil', 'rissanafilah@gmail.com', '123456', 'admin'),
(2, 'rissa', 'rissa.ndsi@gmail.com', '123456', 'member');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

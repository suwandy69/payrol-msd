-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 05:10 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_cuti`
--

CREATE TABLE IF NOT EXISTS `data_cuti` (
  `id_cuti` int(11) NOT NULL,
  `npp` varchar(10) NOT NULL,
  `jumlah_cuti` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_golongan`
--

CREATE TABLE IF NOT EXISTS `data_golongan` (
  `id_golongan` varchar(10) NOT NULL,
  `nama_golongan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_golongan`
--

INSERT INTO `data_golongan` (`id_golongan`, `nama_golongan`) VALUES
('CSM', 'CASEMIX'),
('DNS', 'DENSUS'),
('FAL', 'FAL'),
('GAA', 'GA'),
('HRD', 'HRD'),
('IFR', 'IFRS'),
('JGM', 'JANGMED'),
('MKT', 'MRKT'),
('RJL', 'RAJAL'),
('RNP', 'RANAP'),
('ZZZ1', 'ZZZ2');

-- --------------------------------------------------------

--
-- Table structure for table `data_jabatan`
--

CREATE TABLE IF NOT EXISTS `data_jabatan` (
  `id_jabatan` varchar(10) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_jabatan`
--

INSERT INTO `data_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
('AAT', 'ASS. APOTEKER'),
('ACC', 'ACCOUNTING'),
('ADM', 'ADMISSION'),
('AHG', 'AHLI GIZI'),
('ANL', 'ANALIS'),
('AR4', 'ASPER RANAP - 4'),
('ARM', 'ASPER RANAP MUTIARA'),
('BDH', 'BENDAHARA'),
('BIG', 'BIDAN IGD'),
('BLL', 'BILLING'),
('BPL', 'BIDAN POLI'),
('BRK', 'BIDAN RANAP KYANITE'),
('BRT', 'BIDAN RANAP TOURMALINE'),
('CSS', 'CSSD'),
('DCM', 'DOKTER CASEMIX'),
('DIG', 'DOKTER IGD'),
('DVR', 'DRIVER'),
('FST', 'FISIOTERAPHY'),
('HAM', 'HUMAS & MARKETING'),
('HRD', 'HRD'),
('IHD', 'IHD'),
('KAD', 'KABAG ADMISSION'),
('KBL', 'KABAG BILLING'),
('KFT', 'KANIT FISIOTERAPHY'),
('KHC', 'KANIT HCU'),
('KIG', 'KANIT IGD'),
('KIH', 'KANIT IHD'),
('KLB', 'KANIT LABORATORIUM'),
('KLF', 'KANIT LOGFAR'),
('KMT', 'KANIT RANAP MUTIARA'),
('KOP', 'KAMAR OPERASI'),
('KRE', 'KANIT RANAP EMERALD'),
('KRG', 'KANIT RANAP GARNET DAN BERLIAN'),
('KRK', 'KANIT RANAP KYANIT'),
('KRM', 'KABAG REKAM MEDIS'),
('KRT', 'KABAG RUMAH TANGGA'),
('KSF', 'KANIT RANAP SAFIR'),
('KTK', 'KABAG. TEKNIK'),
('KTM', 'KANIT RANAP TOURMALINE'),
('LGF', 'LOGFAR'),
('LND', 'LAUNDRY'),
('LUM', 'LOGISTIK UMUM'),
('MKT', 'MARKETING'),
('MPP', 'MPP'),
('P2D', 'P2D'),
('PEM', 'PERAWAT EMERALD'),
('PHD', 'PERAWAT HD'),
('PHU', 'PERAWAT HCU'),
('PIG', 'PERAWAT IGD'),
('PKI', 'PEKARYA IGD'),
('PMD', 'PEREKAM MEDIK'),
('PMK', 'PMKP'),
('POK', 'PERAWAT OK'),
('PPL', 'PERAWAT POLI'),
('PRA', 'PERAWAT R. AQUAMARINE'),
('PRB', 'PERAWAT R. BERLIAN'),
('PRE', 'PERAWAT RANAP EMERALD'),
('PRG', 'PERAWAT RANAP GARNET'),
('PRM', 'PERAWAT RANAP MUTIARA'),
('PRR', 'PERAWAT RANAP RUBY'),
('PRS', 'PERAWAT RANAP SAFIR'),
('PWR', 'PERAWAT RUBI'),
('RGP', 'RADIOGRAPHER'),
('RKY', 'RANAP KYANIT'),
('RMD', 'REKAM MEDIS'),
('RMT', 'RANAP MUTIARA'),
('RTM', 'RANAP TOURMALINE'),
('SAD', 'STAFF ADMISION'),
('SCN', 'SCANNER'),
('SIT', 'STAFF IT'),
('SKR', 'STAF KURIR'),
('SPT', 'STAFF PANTRY'),
('TEKNIK', 'TKN'),
('TEL', 'TEKNIK ELEKTROMEDIS'),
('ZZB', 'ZERRR12'),
('ZZZ1', 'ZEROZZ');

-- --------------------------------------------------------

--
-- Table structure for table `data_lembur`
--

CREATE TABLE IF NOT EXISTS `data_lembur` (
  `npp` varchar(10) NOT NULL,
  `jumlah_lembur` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE IF NOT EXISTS `data_pegawai` (
  `id` int(11) NOT NULL,
  `npp` varchar(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `golongan` varchar(50) DEFAULT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_kerja` float DEFAULT NULL,
  `Struktural` float DEFAULT NULL,
  `Fungsional` float DEFAULT NULL,
  `TKU` float DEFAULT NULL,
  `TunjanganKhusus` float DEFAULT NULL,
  `BPJSNaker` float DEFAULT NULL,
  `BPJSKes` float DEFAULT NULL,
  `Parkir` float DEFAULT NULL,
  `PPH21` float DEFAULT NULL,
  `jumlahhari` float NOT NULL,
  `jumlahhadir` float NOT NULL,
  `lainlain` float NOT NULL,
  `dplk` float NOT NULL,
  `zamrud` float NOT NULL,
  `savingplan` float NOT NULL,
  `obat` float NOT NULL,
  `ppni` float NOT NULL,
  `koperasi` float NOT NULL,
  `lain2` float NOT NULL,
  `lembur` float NOT NULL DEFAULT '0',
  `tanggal_merah` float NOT NULL DEFAULT '0',
  `hari_raya` float NOT NULL DEFAULT '0',
  `on_call` float NOT NULL DEFAULT '0',
  `rujuk` float NOT NULL DEFAULT '0',
  `rekom_sip` float NOT NULL DEFAULT '0',
  `jasmed` float NOT NULL DEFAULT '0',
  `pinjaman` float NOT NULL DEFAULT '0',
  `izin` float NOT NULL DEFAULT '0',
  `keterlambatan` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id`, `npp`, `nama`, `jabatan`, `status`, `pendidikan`, `golongan`, `tanggal_masuk`, `tanggal_kerja`, `Struktural`, `Fungsional`, `TKU`, `TunjanganKhusus`, `BPJSNaker`, `BPJSKes`, `Parkir`, `PPH21`, `jumlahhari`, `jumlahhadir`, `lainlain`, `dplk`, `zamrud`, `savingplan`, `obat`, `ppni`, `koperasi`, `lain2`, `lembur`, `tanggal_merah`, `hari_raya`, `on_call`, `rujuk`, `rekom_sip`, `jasmed`, `pinjaman`, `izin`, `keterlambatan`) VALUES
(1, '000001', 'Andi', 'AAT', 'CSM', 'D1', 'A', '2019-01-01', 0, 500000, 50000, 0, 0, 35000, 45000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '000002', 'Budi', 'ACC', 'DNS', 'D3', 'B', '2013-04-14', 0, 1, 2, 0, 0, 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_pengguna`
--

CREATE TABLE IF NOT EXISTS `data_pengguna` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengguna`
--

INSERT INTO `data_pengguna` (`username`, `password`) VALUES
('admin', 'admin'),
('operator', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_cuti`
--
ALTER TABLE `data_cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `data_golongan`
--
ALTER TABLE `data_golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_cuti`
--
ALTER TABLE `data_cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

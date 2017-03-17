-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2017 at 09:53 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `misbah`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
`id` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `coa`
--

CREATE TABLE IF NOT EXISTS `coa` (
`id` int(11) NOT NULL,
  `perkiraan` varchar(20) NOT NULL,
  `saldo` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `coa`
--

INSERT INTO `coa` (`id`, `perkiraan`, `saldo`, `keterangan`) VALUES
(1, 'Kas ', '10290000', 'aktiva lancar'),
(2, 'Kas di Bank', '90000000', 'aktiva lancar'),
(3, 'Perlengkapan', '20000000', 'aktiva'),
(4, 'Peralatan', '5000000', 'aktiva'),
(5, 'Sewa', '3000000', 'aktiva'),
(6, 'Penerimaan Iuran', '7110000', 'pendapatan'),
(7, 'Penerimaan Kegiatan', '', 'pendapatan'),
(8, 'Kontribusi Unit', '', 'pendapatan'),
(9, 'Diknas', '', 'modal'),
(10, 'Depag', '', 'modal'),
(11, 'BOS', '', 'modal'),
(12, 'Beban Gaji', '500000', 'biaya'),
(13, 'Beban Perlengkapan', '', 'biaya'),
(14, 'Beban Konsumsi', '', 'biaya'),
(15, 'Beban Upah', '', 'biaya');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
`id` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `tgl_masuk` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `gaji` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nik`, `nama`, `jk`, `tgl_masuk`, `tempat_lahir`, `tgl_lahir`, `alamat`, `gaji`) VALUES
(2, '2007-69-00001-SD', 'Iis Mulyani', 'Perempuan', '', '', '', '', '2000000'),
(3, '2007-78-00002-SD', 'Apriyadi', 'Laki-Laki', '2007-05-08', 'Bogor', '1978-12-10', 'Kp. Pondok Manggis RT/RW 01/02', '-'),
(4, '', 'Rofikoh', 'Laki-Laki', '', 'Jakarta', '1970-12-10', '', '-'),
(5, '2007-78-00006-SD', 'Sulaeman Rosyid', 'Laki-Laki', '2007-01-05', 'Bekasi', '1978-02-21', 'Jl. Swadaya No 65 RT/RW 04/06 Cilodong, Kalibaru, Kota Depok', '-'),
(6, '2007-81-00007-SD', 'Rodiah Muslihat', 'Perempuan', '2007-01-06', 'Bogor', '1981-12-13', 'Perum, Puri Citayam Permai 2 Blok G5 No 10 Kel. Rawa Panjang, Kec. Bojong', '-'),
(7, '2009-77-00015-SD', 'Tris Mustika Dewi', 'Perempuan', '2009-05-01', 'Jakarta', '1977-07-27', 'Perum Taman Raya Citayam Blok D1 No 5 Rawa Panjang Kec. Bojong Gede', '-'),
(8, '2009-84-00016-SD', 'Andi Sugantono', 'Laki-Laki', '2009-06-01', 'Bandung', '1984-05-26', 'Perum Taman Raya Citayam Blok D1 Kel. Rawa Panjang Kec. Bojong Gede', '-'),
(9, '2010-77-00021-SD', 'Dewi Alam Mattagaran', 'Perempuan', '2010-06-01', 'Rappang', '1977-05-10', 'Perum Griya Bukit Permata Blok G2/16 Bojong Baru, Kec. Bojong Gede', '-'),
(10, '2010-80-00023-SD', 'Silva Yanti Azis', 'Perempuan', '2010-06-01', 'Rumbai', '1980-09-11', 'Perum Deptan Atsiri Permai Baru Jl. Pertanian II Blok C No 7 RT/RW 15/12', '-'),
(11, '2010-82-00025-SD', 'Wiwik Ida Sri Sugiarti', 'Perempuan', '2010-07-01', 'Tuban', '1982-09-03', 'Perum Griya Bukit Permata H.6/6 RT/RW 05/13 Kel. Bojong Baru, Kec. Bojong', '-'),
(12, '2010-86-00027-SD', 'Achmad Fauzi', 'Laki-Laki', '2010-08-02', 'Bogor', '1986-07-14', 'Kp. Kedung Umpal, DS. Karadenan, Kec, Cibinong, Kab. Bogor', '-'),
(13, '2011-85-00028-SD', 'Dewi Indah Jayanti', 'Perempuan', '2011-01-01', 'Jakarta', '1985-07-08', 'Kp. Pondok Manggis RT/RW 02/02 No 11 Kel. Bojong Baru, Kec. Bojong Gede', '-'),
(14, '2011-84-00034-SD', 'Ade Ratna', 'Perempuan', '2011-01-01', 'Bogor', '1984-05-13', 'Perumahan De Livina Blok B4 No 10', '-'),
(15, '2011-89-00037-SD', 'Eni Purbowati', 'Perempuan', '2011-07-01', 'Jakarta', '1989-12-22', 'Kp. Sawah Indah RT/RW 01/09 No 56 Bojong Gede - Bogor', '-'),
(16, '2011-85-00040-SD', 'Dewi Rahayu', 'Perempuan', '2011-09-08', 'Bogor', '1985-07-27', 'Kp. Patahunan RT/RW 03/10 Ds. Cilebut Timur Bogor - 16710', '-'),
(17, '', 'Baskara', 'Laki-Laki', '2011-01-01', '', '', '', ''),
(18, '2012-73-00050-SD', 'Retno Kustini', 'Perempuan', '2012-07-01', 'Jakarta', '1973-04-30', 'Perum Villa Pabuaran Indah', '-'),
(19, '2012-78-00051-SD', 'Agustin Widyarani', 'Perempuan', '2012-07-01', 'Bilitar', '1978-08-09', 'Perum Pondok Bambu Kuning Blok 12 No 14 RT/RW 02/14 Bojong Gede', '-'),
(20, '2012-89-00055-SD', 'Arif', 'Laki-Laki', '2012-07-09', 'Karawang', '1989-05-18', 'Ds. Karyamulya Kec. Batujaya, Kab. Karawang', '-'),
(21, '2012-86-00056-SD', 'Ida Nurmalia', 'Perempuan', '2012-09-01', 'Bogor', '1986-10-10', 'Kp. Citayam RT/RW 02/03 Ds. Ragajaya', '-'),
(22, '2013-91-00063-SD', 'Yolawati', 'Perempuan', '2013-01-07', 'Bogor', '1991-05-22', 'Kampung Sawah Poncol RT/RW 03/07\r\n', ''),
(23, '2013-94-00068-SD', 'Narto', 'Laki-Laki', '2013-02-12', 'Bogor', '1994-11-28', 'Perum Lipi RT/RW 09/01', ''),
(24, '2013-87-00069-SD', 'Siti Khodijah', 'Perempuan', '2013-03-07', 'Tapanuli', '1987-12-05', 'Perum Gaperti BDB1, Jl. Gurug Mas Gang Klengkeng RT/RW 01/12', ''),
(25, '', 'sandi', '', '', 'Jakarta', '1999-04-09', '', '2000000');

-- --------------------------------------------------------

--
-- Table structure for table `item_tagihan`
--

CREATE TABLE IF NOT EXISTS `item_tagihan` (
`id` int(11) NOT NULL,
  `item_bayar` varchar(40) NOT NULL,
  `akun` varchar(20) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `biaya` varchar(10) NOT NULL,
  `sifat` varchar(20) NOT NULL,
  `masa` varchar(20) NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `item_tagihan`
--

INSERT INTO `item_tagihan` (`id`, `item_bayar`, `akun`, `kelas`, `biaya`, `sifat`, `masa`, `keterangan`) VALUES
(25, 'Uang Pangkal', 'Kas ', '1', '9990000', 'WAJIB', 'PANGKAL', 'MASUK'),
(26, 'SPP', 'Kas ', '1', '395000', 'WAJIB', 'BULANAN', 'MASUK'),
(27, 'Buku Paket 1 Semester', 'Kas ', '1', '600000', 'WAJIB', 'SEMESTER', 'MASUK'),
(28, 'Seragam Siswa', 'Kas ', '1', '240000', 'OPSI', '', 'MASUK'),
(29, 'Ekskul Taekwondo', 'Kas ', '1', '50000', 'OPSI', 'BULANAN', 'MASUK'),
(30, 'Ekskul Panahan', 'Kas ', '1', '200000', 'OPSI', 'BULANAN', 'MASUK'),
(31, 'Ekskul BBQ', 'Kas ', '1', '150000', 'OPSI', 'BULANAN', 'MASUK'),
(32, 'Ekskul English', 'Kas ', '1', '150000', 'OPSI', 'BULANAN', 'MASUK'),
(33, 'Ekskul Calistung', 'Kas ', '1', '150000', 'OPSI', 'BULANAN', 'MASUK'),
(34, 'Ekskul Robotik', 'Kas ', '1', '150000', 'OPSI', 'BULANAN', 'MASUK');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE IF NOT EXISTS `jurnal` (
`id` int(11) NOT NULL,
  `no_bukti` varchar(20) NOT NULL,
  `tgl_trans` varchar(20) NOT NULL,
  `cara_bayar` varchar(20) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `penerima` varchar(20) NOT NULL,
  `id_siswa` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id`, `no_bukti`, `tgl_trans`, `cara_bayar`, `keterangan`, `penerima`, `id_siswa`) VALUES
(7, '7', '02-02-2017', 'cash', 'Sumbangan Bos', 'admin', ''),
(8, '8', '02-02-2017', 'cash', 'Pindah Akun', 'admin', ''),
(9, '9', '02-02-2017', 'cash', 'Pindah Akun', 'admin', ''),
(10, '10', '02-02-2017', 'cash', 'NN', 'kasir', ''),
(11, '11', '02-02-2017', 'cash', 'UNTUK SEWA', 'kasir', ''),
(12, '12', '13-02-2017', 'cash', 'Beli Bangku', 'kasir', ''),
(13, '13', '13-02-2017', 'cash', 'Perkakas', 'kasir', ''),
(14, '14', '13-02-2017', 'cash', 'Sewa mobil', 'kasir', ''),
(15, '15', '13-02-2017', 'cash', 'Modal', 'kasir', '');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_detail`
--

CREATE TABLE IF NOT EXISTS `jurnal_detail` (
`id` int(11) NOT NULL,
  `id_jurnal` int(11) NOT NULL,
  `akun` varchar(20) NOT NULL,
  `debit` varchar(20) NOT NULL,
  `kredit` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `jurnal_detail`
--

INSERT INTO `jurnal_detail` (`id`, `id_jurnal`, `akun`, `debit`, `kredit`) VALUES
(9, 0, '', '', ''),
(10, 0, '', '', ''),
(11, 7, '1', '10000000', ''),
(12, 7, '', '', ''),
(13, 8, '6', '790000', ''),
(14, 8, '1', '', '790000'),
(15, 9, '1', '1580000', ''),
(16, 9, '6', '', '1580000'),
(17, 10, '1', '', '500000'),
(18, 10, '12', '', '500000'),
(19, 11, '2', '', '10000000'),
(20, 11, '', '', ''),
(21, 12, '3', '20000000', ''),
(22, 12, '', '', ''),
(23, 13, '4', '5000000', ''),
(24, 13, '', '', ''),
(25, 14, '5', '3000000', ''),
(26, 14, '', '', ''),
(27, 15, '2', '100000000', ''),
(28, 15, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE IF NOT EXISTS `pemasukan` (
`id` int(11) NOT NULL,
  `no_bukti` varchar(20) NOT NULL,
  `tgl_trans` varchar(20) NOT NULL,
  `cara_bayar` varchar(10) NOT NULL,
  `pembayaran` varchar(255) NOT NULL,
  `akun` varchar(20) NOT NULL,
  `total` varchar(30) NOT NULL,
  `penerima` varchar(20) NOT NULL,
  `id_siswa` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`id`, `no_bukti`, `tgl_trans`, `cara_bayar`, `pembayaran`, `akun`, `total`, `penerima`, `id_siswa`) VALUES
(20, 'PMS002022017', '02-02-2017', 'cash', 'Buku Paket 1 Semester', '', '600000', 'admin', '0'),
(21, 'PMS002022017', '02-02-2017', 'cash', 'SPP', '', '395000', 'admin', '0'),
(24, 'PMS002022017', '02-02-2017', 'cash', 'SPP', '', '395000', 'admin', '0'),
(26, 'PMS002022017', '02-02-2017', 'cash', 'SPP', '', '395000', 'admin', '0'),
(38, 'PSB702022017', '02-02-2017', 'cash', 'pangkal', '', '', 'kasir', '7'),
(39, 'PSB802022017', '02-02-2017', 'cash', 'pangkal', '', '3000000', 'kasir', '8'),
(40, 'PMS108022017', '08-02-2017', 'cash', 'SPP', '', '395000', 'kasir', '1'),
(41, 'PMS109022017', '09-02-2017', 'cash', 'SPP', '', '395000', 'kasir', '1'),
(42, 'PMS109022017', '09-02-2017', 'cash', 'SPP', '', '395000', 'kasir', '1'),
(43, 'PMS109022017', '09-02-2017', 'cash', 'SPP', '', '395000', 'kasir', '1'),
(44, 'PMS109022017', '09-02-2017', 'cash', 'SPP', '', '395000', 'kasir', '1'),
(45, 'PMS109022017', '09-02-2017', 'cash', 'SPP', '', '395000', 'kasir', '1'),
(46, 'PMS109022017', '09-02-2017', 'cash', 'SPP', '', '395000', 'kasir', '1'),
(47, 'PSB909022017', '09-02-2017', 'cash', 'pangkal', '', '9990000', 'kasir', '9'),
(48, 'PSB1009022017', '09-02-2017', 'cash', 'pangkal', '', '9990000', 'kasir', '10'),
(49, 'PMS8610022017', '10-02-2017', 'cash', 'SPP', '', '395000', 'kasir', '86'),
(50, 'PMS8610022017', '10-02-2017', 'cash', 'SPP', '', '395000', 'kasir', '86'),
(51, 'PMS8610022017', '10-02-2017', 'cash', 'SPP', '', '395000', 'kasir', '86'),
(52, 'PMS8610022017', '10-02-2017', 'cash', 'SPP', '', '395000', 'kasir', '86'),
(53, 'PMS8610022017', '10-02-2017', 'cash', 'SPP', '', '395000', 'kasir', '86'),
(54, 'PMS8610022017', '10-02-2017', 'cash', 'SPP', '', '395000', 'kasir', '86'),
(55, 'PMS8610022017', '10-02-2017', 'cash', 'SPP', '', '395000', 'kasir', '86'),
(56, 'PMS8610022017', '10-02-2017', 'cash', 'SPP', '', '395000', 'kasir', '86'),
(57, 'PMS8610022017', '10-02-2017', 'cash', 'SPP', '', '395000', 'kasir', '86'),
(58, 'PMS213022017', '13-02-2017', 'cash', 'SPP', '', '395000', 'kasir', '2');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE IF NOT EXISTS `ruangan` (
`id` int(11) NOT NULL,
  `unit` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `wali` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `unit`, `level`, `nama`, `wali`, `status`) VALUES
(1, 'SD', 1, 'Ar-Rahman', '', 'aktif'),
(2, 'SD', 1, 'Ar-Rahim', '', 'Aktif'),
(3, 'SD', 2, 'Al-Malik', '', 'Aktif'),
(4, 'SD', 2, 'Al-Halim', '', 'Aktif'),
(5, 'SD', 3, 'Al-Aziz', '', 'Aktif'),
(6, 'SD', 3, 'Al-Hakim', '', 'Aktif'),
(7, 'SD', 4, 'As-Salam', '', 'Aktif'),
(8, 'SD', 4, 'Al-Alim', '', 'Aktif'),
(9, 'SD', 5, 'Al-Khaliq', '', 'Aktif'),
(10, 'SD', 5, 'Al-Hamid', '', 'Aktif'),
(11, 'SD', 6, 'Al-Latief', '', 'Aktif'),
(12, 'SD', 6, 'Al-Karim', '', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
`id` int(11) NOT NULL,
  `status_masuk` varchar(10) NOT NULL,
  `nisn` varchar(13) NOT NULL,
  `no_induk` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `unit` varchar(5) NOT NULL,
  `level` varchar(5) NOT NULL,
  `ruangan` varchar(10) NOT NULL,
  `ta` varchar(13) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `pekerjaan_a` varchar(30) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `pekerjaan_i` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `status_masuk`, `nisn`, `no_induk`, `nama`, `jk`, `tmp_lahir`, `tgl_lahir`, `unit`, `level`, `ruangan`, `ta`, `ayah`, `pekerjaan_a`, `ibu`, `pekerjaan_i`, `alamat`) VALUES
(1, '0', '2234556876', '313141001', 'ABYAN RAYNAL HADIPUTRA', 'Laki-laki', 'JAKARTA', '2006-11-17', '2', '1', 'AR-RAHIM', '1314', '', '', '', '', 'Perum Taman Raya Citayam Blok F4 No.39 Rt.03 Rw.13,Rawa Panjang,Bojonggede,Bogor,Jawa Barat,16920'),
(2, '0', '', '313141006', 'ALLODIASAKHI CALLULAVALDA M', 'Perempuan', 'JAKARTA', '2000-01-01', '2', '1', 'AR-RAHIM', '1314', 'AHMAD YUPITER', '', '', '', 'Komp. Bambu Kuning No. 41. Gg. Haji Mundi B6 Bogor,Bojong Gede,Bojonggede,Bogor,Jawa Barat,16922'),
(3, '0', '', '313141010', 'ASYLA RAMEYZA', 'Perempuan', 'JAKARTA', '2006-11-30', '2', '1', 'AR-RAHIM', '1314', 'YANWAR RIO TIRTA', '', '', '', 'Perum Griya bukit permata blok F6/22 rt5/13,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(4, '0', '', '313141011', 'AZZAHRA REFNI', 'Perempuan', 'BOGOR', '2007-05-18', '2', '1', 'AR-RAHIM', '1314', 'DEDI REFLOS', '', '', '', 'Perum Citayam sejahtera BlokJ/23rt3/8,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(5, '0', '', '313141013', 'DZAKA NAKANO', 'Laki-laki', 'MATARAM', '2007-03-14', '2', '1', 'AR-RAHIM', '1314', 'APFAM GALIANO.SP', '', '', '', 'Taman Raya Citayam E5/6,Rawa Panjang,Bojonggede,Bogor,Jawa Barat,16920'),
(6, '0', '', '313141015', 'GHIFARI NAUFAL MUZAKI', 'Laki-laki', 'BOGOR', '2006-10-19', '2', '1', 'AR-RAHIM', '1314', 'RUSTAMAJI', '', '', '', 'Puri Citayam Permai 2 blok G5 No,10&quot;,Rawa Panjang,Bojonggede,Bogor,Jawa Barat,16920'),
(7, '0', '', '313141016', 'KALYCA ATHAYA', 'Perempuan', 'DEPOK', '2007-02-11', '2', '1', 'AR-RAHIM', '1314', 'DONI NUGROHO', '', '', '', 'Puri Ctym Permai 2 Blok C3 No.16,Rawa Panjang,Bojonggede,Bogor,Jawa Barat,16920'),
(8, '0', '', '313141019', 'HASNA FITRI LATIFAH', 'Perempuan', 'BOGOR', '2006-11-17', '2', '1', 'AR-RAHIM', '1314', 'SUHADA', '', '', '', 'Tmn Bojong Lestari G9/24 Rt.4/13,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(9, '0', '', '313141020', 'KHAULA AULIA SOBIRIN', 'Laki-laki', 'JAKARTA', '2007-04-27', '2', '1', 'AR-RAHIM', '1314', 'SOBIRIN', '', '', '', 'BTN Bambu kuning Blok D2 No.16 rt.11/14,Bojong Gede,Bojonggede,Bogor,Jawa Barat,16922'),
(10, '0', '', '313141023', 'MAHFUD PUJADI SUSENO', 'Laki-laki', 'BOGOR', '2007-01-10', '2', '1', 'AR-RAHIM', '1314', 'UJI SUSENO', '', '', '', 'Komp.Perdagangan blok R8 Rt07/0/,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(11, '0', '', '313141024', 'MIRZA DANISYWAR NOOR WAHYU', 'Laki-laki', 'KLATEN', '2006-12-18', '2', '1', 'AR-RAHIM', '1314', 'NOOR SETIADI W', '', '', '', 'Perum Asia blok B12/18 rt03/09,Bojong Gede,Bojonggede,Bogor,Jawa Barat,16922'),
(12, '0', '', '313141026', 'MUHAMMAD ABDULLOH FAQIH', 'Laki-laki', 'SAMARINDA', '2007-03-03', '2', '1', 'AR-RAHIM', '1314', 'RUFIS BAHRUDIN', '', '', '', 'Perum Graha Kartika Pratama blok DD4 .1no.9,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(16, '0', '', '313141029', 'MUHAMMAD FADHLI', 'Laki-laki', 'BOGOR', '2006-08-28', '2', '1', 'AR-RAHIM', '1314', 'H. MARHASAN', '', '', '', 'Jl. Pemda Kp.Cipayung Rt02/09,0,0,Bogor,Jawa barat'),
(17, '0', '', '313141032', 'MUHAMMAD VIRZA RAYHAN', 'Laki-laki', 'JAKARTA', '2006-11-11', '2', '1', 'AR-RAHIM', '1314', 'SUPRAYITNO', '', '', '', 'Perum Villa Asia Blok B8 No. 25,Bojong Gede,Bojonggede,Bogor,Jawa Barat,16922'),
(18, '0', '', '313141033', 'MUHAMMAD NAUFAL HANIF', 'Laki-laki', 'BOGOR', '2006-10-03', '2', '1', 'AR-RAHIM', '1314', 'M KHOIRUN NASIR', '', '', '', 'Taman Raya Citayam BlokF1 no.27,Rawa Panjang,Bojonggede,Bogor,Jawa Barat,16920'),
(19, '0', '', '313141034', 'MUHAMMAD WAFIQ RAMADHAN', 'Laki-laki', 'BOGOR', '2006-10-21', '2', '1', 'AR-RAHIM', '1314', 'YAMTONO', '', '', '', 'Perum Gratama Indah1,BlokDNo.8&quot;,Bojong Gede,Bojonggede,Bogor,Jawa Barat,16922'),
(20, '0', '', '313141037', 'NAILAH PUTRI HUMAIRA', 'Perempuan', 'BOGOR', '2006-11-07', '2', '1', 'AR-RAHIM', '1314', 'HENDRA SETIAWAN', '', '', '', 'Kp. Pondok manggis rt.5/1 No.136,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(21, '0', '', '313141038', 'NAWAL FARHANA', 'Perempuan', 'JAKARTA', '2007-04-21', '2', '1', 'AR-RAHIM', '1314', 'DIANNURDIN DWI SULAKSMANA', '', '', '', 'Perum.Taman Raya Citayam Blok AG/ 1 Rt 08 Rw 12,Rawa Panjang,Bojonggede,Bogor,Jawa Barat,16920'),
(22, '0', '', '313141039', 'NEAL KHOSY HUSAIN', 'Laki-laki', 'BOGOR', '2007-02-14', '2', '1', 'AR-RAHIM', '1314', 'BAMBANG SISWOYO', '', '', '', 'Perum Citayam Sejahtera Blok E no.20,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(23, '0', '', '313141040', 'NIDA ULHAQQ ALHANIIN', 'Perempuan', 'JAKARTA', '2007-01-02', '2', '1', 'AR-RAHIM', '1314', 'AGUS ARIYANTO', '', '', '', 'Perum Taman Raya Citayam B5 No.20 rt11/12,Rawa Panjang,Bojonggede,Bogor,Jawa Barat,16920'),
(24, '0', '', '313141041', 'RAFFI AHMAD MUFID', 'Laki-laki', 'BOGOR', '2006-06-13', '2', '1', 'AR-RAHIM', '1314', 'MAMAN SULAEMAN', '', '', '', 'Perum Puspa Ry Blok AN.30 rt3/10,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(25, '0', '', '313141042', 'NISRINA MALIHA', 'Perempuan', 'JEPARA', '2007-06-06', '2', '1', 'AR-RAHIM', '1314', 'LILIK BAMBANG', '', '', '', 'Taman Raya Citayam B7/7 Bojong gede,Rawa Panjang,Bojonggede,Bogor,Jawa Barat,16920'),
(26, '0', '', '313141043', 'RARA KAMILA RAHMA DIANYA', 'Perempuan', 'BOGOR', '2006-06-25', '2', '1', 'AR-RAHIM', '1314', 'RAHMAT', '', '', '', 'Perum Pondok Bambu kuning Blok D2/20,Bojong Gede,Bojonggede,Bogor,Jawa Barat,16922'),
(27, '0', '', '313141044', 'NOVIA PUTRI AYU INRIYADI', 'Perempuan', 'JAKARTA', '2006-11-13', '2', '1', 'AR-RAHIM', '1314', 'AGUNG RIYADI', '', '', '', 'Taman Raya Citayam Blok E5/11 Rt04/13,Rawa Panjang,Bojonggede,Bogor,Jawa Barat,16920'),
(28, '0', '', '313141047', 'REIZALDY RAFFA RIZQULLAH', 'Laki-laki', 'JAKARTA', '2006-11-02', '2', '1', 'AR-RAHIM', '1314', 'EDY SOEGIARTO', '', '', '', 'Perum Griya Bukit Permata Blok H.6 No.6 Rt.5 Rw.13 Bojonggede,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(29, '0', '', '313141050', 'SABINA KUSNADI', 'Perempuan', 'JAKARTA', '2007-05-02', '2', '1', 'AR-RAHIM', '1314', 'SOLIHIN KUSNADI', '', '', '', 'Griya Satria Jingga Blok F2 No.4,0,Bojong Gede,Bogor,Jawa barat'),
(30, '0', '', '313141052', 'SAFFANA ZAHIRA', 'Perempuan', 'JAKARTA', '2006-10-16', '2', '1', 'AR-RAHIM', '1314', 'MUHAMAD SUHFAN', '', '', '', 'Komp. Perdagangan blok T/22,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(31, '0', '', '313141056', 'ZULFA HANA QANITAH', 'Perempuan', 'DEPOK', '2007-05-25', '2', '1', 'AR-RAHIM', '1314', 'KARLI HINDIYONO', '', '', '', 'Pond Citayam Permai Blok B2 No.4 rt6/7,Susukan,Bojonggede,Bogor,Jawa Barat,16920'),
(32, '0', '', '313141002', 'ADHWA AL GHAZIAN ARIYANTO', 'Perempuan', 'BOGOR', '2006-11-24', '2', '1', 'AR-RAHIM', '1314', 'AGUS ARIYANTO', '', '', '', 'Perum Taman Raya Citayam B5 No.20 rt11/12,Rawa Panjang,Bojonggede,Bogor,Jawa Barat,16920'),
(33, '0', '', '313141003', 'ALLIYYA PRAMUDITA NUGRAHA', 'Perempuan', 'JAKARTA', '2007-02-13', '2', '1', 'AR-RAHIM', '1314', 'WAHYU AGUNG N', '', '', '', 'Perum Delivina blok B5/9,Rawa Panjang,Bojonggede,Bogor,Jawa Barat,16920'),
(34, '0', '', '313141004', 'HILMA FAHMA AULIA JOHANI', 'Perempuan', 'KUNINGAN', '2001-12-16', '2', '1', 'AR-RAHIM', '1314', 'JOHAN BUDI S', '', '', '', 'Griya Melati Mas Blok Blok D1 Ds.Susukan Bojonggege, Bogor,Susukan,Bojonggede,Bogor,Jawa Barat,16920'),
(35, '0', '', '313141005', 'IMAM AZMI RABBANI', 'Laki-laki', 'BOGOR', '2006-09-20', '2', '1', 'AR-RAHIM', '1314', 'TAUFIKURRAHMAN SYAH', '', '', '', 'Taman Raya Citayam Blok A2 no. 14C Citayam,Rawa Panjang,Bojonggede,Bogor,Jawa Barat,16920'),
(36, '0', '', '313141007', 'AMELIA KINANTI', 'Perempuan', 'BOGOR', '2006-08-07', '2', '1', 'AR-RAHIM', '1314', 'AMIN PANGESTU', '', '', '', 'Perum Citayam Sejahtera Blok E 16 Rt 002 Rw 08 Bojong Baru Bojonggede,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(37, '0', '', '313141008', 'ARUNG BUMI WASESO', 'Perempuan', 'JAKARTA', '2007-05-14', '2', '1', 'AR-RAHIM', '1314', 'KUNTO WIBISONO', '', '', '', 'Perum Griya bukit Permt blok E7/16 rt3/13,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(38, '0', '', '313141009', 'INDRI APRILIANI TRIANTO', 'Perempuan', 'JAKARTA', '2007-04-02', '2', '1', 'AR-RAHIM', '1314', 'INDRAGUNA TRIYANTO', '', '', '', 'Perum puspa raya blok AM/25 rt3/10,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(39, '0', '', '313141012', 'BUNGA FARIKHA FEBRIANA', 'Perempuan', 'BOGOR', '2007-02-06', '2', '1', 'AR-RAHIM', '1314', 'HANDONO SUYATNO', '', '', '', 'Puspa Raya Blok AI no.17 bjng baru,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(40, '0', '', '313141014', 'ITSAR UMAR', 'Laki-laki', 'JAKARTA', '2007-01-25', '2', '1', 'AR-RAHIM', '1314', 'DWI HARDIANTO', '', '', '', 'Perum Puspa Raya blok AQ36 rt03/10,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(41, '0', '', '313141017', 'KHAIRUN NISA HUMAIRA', 'Perempuan', 'JAKARTA', '2007-01-21', '2', '1', 'AR-RAHIM', '1314', 'MURJITO', '', '', '', 'Perum Puspa Ry Blok EG-23 Bjng Gd,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(42, '0', '', '313141018', 'HAFIDH RAAFI ATMAJI', 'Laki-laki', 'BOGOR', '2006-09-12', '2', '1', 'AR-RAHIM', '1314', 'TRI ATMOJO', '', '', '', 'Taman Raya Citayam Blok F2 /09 Rt.05/12,Rawa Panjang,Bojonggede,Bogor,Jawa Barat,16920'),
(43, '0', '', '313141021', 'LULU AZKIA PRIYANTO', 'Perempuan', 'JAKARTA', '2008-01-06', '2', '1', 'AR-RAHIM', '1314', 'TEGUH PRIYANTO', '', '', '', 'Perum Delivina Rt06/02 Blok A7 No.6,Rawa Panjang,Bojonggede,Bogor,Jawa Barat,16920'),
(44, '0', '', '313141022', 'LUTHFIYYAH RAMADHANI', 'Perempuan', 'BOGOR', '2006-10-11', '2', '1', 'AR-RAHIM', '1314', 'TRI WALUYO', '', '', '', 'Perum Dept Perdagangan Blok C1.22,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(45, '0', '', '313141025', 'MOHAMMAD HAYKAL IBRAHIM HASAN', 'Laki-laki', 'JAKARTA', '2006-12-20', '2', '1', 'AR-RAHIM', '1314', 'MUHAMMAD SUKRI', '', '', '', 'Jl. Johar raya no.82 rt6/6 Depok,0,0,Depok,Jawa barat'),
(46, '0', '', '313141027', 'MUHAMMAD AZKA RAMZY', 'Laki-laki', 'BOGOR', '2007-04-07', '2', '1', 'AR-RAHIM', '1314', 'OIM ABDUL RAHMAN', '', '', '', 'Perum Graha Kartika Pratama Komp.Srikandi Blok DD 2 No.8,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(47, '0', '', '313141028', 'MUHAMAD DZACKY NUR IKHSAN', 'Laki-laki', 'JAKARTA', '2006-08-30', '2', '1', 'AR-RAHIM', '1314', 'MUHAMMAD IKHSAN', '', '', '', 'Perum Taman Raya Citayam B5 no.8,Rawa Panjang,Bojonggede,Bogor,Jawa Barat,16920'),
(48, '0', '', '313141030', 'MUHAMMAD FAQIH RAMADHAN', 'Laki-laki', 'BOGOR', '2006-10-11', '2', '1', 'AR-RAHIM', '1314', 'FACHRIZAL', '', '', '', 'Kp. Sawah Indah Rt2/9 Bojonggede,Bojong Gede,Bojonggede,Bogor,Jawa Barat,16922'),
(49, '0', '', '313141031', 'MUHAMMAD NABIL SATRIO NURFALAH', 'Laki-laki', 'DEPOK', '2007-01-25', '2', '1', 'AR-RAHIM', '1314', 'BUDHI SATRIO, SE', '', '', '', 'Perum Delivina Blok B1/4,Rawa Panjang,Bojonggede,Bogor,Jawa Barat,16920'),
(50, '0', '', '313141035', 'MUHAMMAD RAFI AKBAR', 'Laki-laki', 'JAKARTA', '2006-11-11', '2', '1', 'AR-RAHIM', '1314', 'EDY SANTOSO', '', '', '', 'Griya Bukit Permata Blok A2/37 rt001/13,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(51, '0', '', '313141036', 'NADYNE AZ ZAHRA AMANDA TOMMY', 'Perempuan', 'BOGOR', '2006-09-11', '2', '1', 'AR-RAHIM', '1314', 'RUSTOMI', '', '', '', 'Perum Griya Bukit Permata Blok E1No.36A RT03/13,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(52, '0', '', '313141045', 'RAYHAN AHMAD SYARIF', 'Laki-laki', 'JAKARTA', '2006-09-19', '2', '1', 'AR-RAHIM', '1314', 'MARSUDI', '', '', '', 'Taman Raya Ciatayam A4/19 rt08/12 Sektor 3,Rawa Panjang,Bojonggede,Bogor,Jawa Barat,16920'),
(53, '0', '', '313141046', 'PUTI AS SYIFA', 'Perempuan', 'DEPOK', '2007-01-10', '2', '1', 'AR-RAHIM', '1314', 'RIZAL EFENDI', '', '', '', 'Perum Bukit waringin Blok D5/9 Rt 6/10,Waringin Jaya,Bojonggede,Bogor,Jawa Barat,16920'),
(54, '0', '', '313141048', 'RIEDZKY ANUGRAH PUTRA FIRMANSY', 'Laki-laki', 'JAKARTA', '2006-08-10', '2', '1', 'AR-RAHIM', '1314', 'DIK DIK FIRMANSYAH', '', '', '', 'Perum Griya Bukit permata blok E2/1,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(55, '0', '', '313141049', 'SYAHNAZ NURKHAIRIYAH ANWAR', 'Perempuan', 'JAKARTA', '2006-05-10', '2', '1', 'AR-RAHIM', '1314', 'KHAIRUL ANWAR', '', '', '', 'Prm Griya Bukit Permata Blok E2 no.15 rt3/13,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(56, '0', '', '313141051', 'TEUKU FAUZAN MANDALA RAYA', 'Laki-laki', 'JAKARTA', '2006-10-26', '2', '1', 'AR-RAHIM', '1314', 'JOHAN PAHLAWAN', '', '', '', 'Jl.Duri Baru V Rt 08/05 No.8'),
(57, '0', '', '313141053', 'YUSUF', 'Laki-laki', 'DENPASAR', '2007-03-17', '2', '1', 'AR-RAHIM', '1314', 'NUZLI LATIEF HERNAWAN', '', '', '', 'Perum Bojong Depok Baru 1 blok MT/11,Bojong Gede,Bojonggede,Bogor,Jawa Barat,16922'),
(58, '0', '', '312131057', 'SALSABILA KHUMAIRA', 'Perempuan', 'JAKARTA', '2007-07-24', '2', '1', 'AR-RAHIM', '1314', 'DARUL HAPZI', '', '', '', 'Perum Delivina Blok A1 no.8,Rawa Panjang,Bojonggede,Bogor,Jawa Barat,16920'),
(59, '0', '', '313141054', 'SALWA SYIFA PUTRIANA MEIHADI', 'Perempuan', 'BOGOR', '2007-02-16', '2', '1', 'AR-RAHIM', '1314', 'DERRY MEIHADI', '', '', '', 'Bambu kuning blok i2 no.5,Bojong Gede,Bojonggede,Bogor,Jawa Barat,16922'),
(60, '0', '', '313141055', 'ZAHRA AGGRAENI HARDEWI', 'Perempuan', 'JAKARTA', '2007-03-22', '2', '1', 'AR-RAHIM', '1314', 'HARSANA', '', '', '', 'Perum Griya Permata blok E4 NO.22,Bojong Baru,Bojonggede,Bogor,Jawa Barat,16920'),
(82, '1', '', '', 'tes', 'Laki-laki', 'jakarta', '2014-01-01', 'SD', 'Ar-Ra', '', '2016-2017', '', '', '', '', 'Bogor'),
(83, '1', '', '', 'asd', 'Laki-laki', 'asd', '2014-01-09', 'SD', 'Ar-Ra', 'a', '2016-2017', '', '', '', '', 'Bogor'),
(84, '1', '', '', 'QWQW', 'Laki-laki', 'QW', '2014-01-18', 'SD', 'Ar-Ra', 'a', '2016-2017', '', '', '', '', 'Q'),
(85, '1', '', '', 'reza', 'Laki-laki', 'Jakarta', '2014-01-10', 'SD', 'Ar-Ra', 'a', '2016-2017', '', '', '', '', 'Bogor'),
(86, 'BARU', '', '', 'Reza Saputra Yusuf', 'Laki-Laki', 'Jakarta', '1994-12-24', 'SD', '1', 'Ar-Rahman', '1617', 'Endang', 'Swasta', 'Rustilah', '', 'Bogor'),
(87, '1', '', '', 'reza reza', 'Laki-laki', 'Bogor', '2004-06-15', 'SD', 'Ar-Ra', 'a', '2016-2017', '', '', '', '', 'Bogor'),
(88, '1', '', '', 'sasa', 'Laki-laki', 'Bogor', '2007-02-06', 'SD', '1', 'Ar-Rahim', '2016-2017', '', '', '', '', 'Bogor'),
(89, '1', '', '', 'dede', 'Laki-laki', 'Bogor', '2008-02-12', 'SD', '1', 'Ar-Rahim', '2016-2017', '', '', '', '', 'Bogor'),
(90, '1', '', '', 'fafae', 'Laki-laki', 'Bogor', '2006-02-09', 'SD', '1', 'Ar-Rahim', '2016-2017', '', '', '', '', 'Bogor'),
(91, '1', '', '', 'saya', 'Laki-laki', 'Bogor', '2009-06-16', 'SD', '1', 'Ar-Rahman', '2016-2017', '', '', '', '', 'Bogor'),
(92, '0', '', '', 'asasasasa', 'Laki-laki', 'Bogor', '2014-01-20', 'SD', '1', 'Ar-Rahman', '2016-2017', 'x', 'x', 'x', '', 'Bogor');

-- --------------------------------------------------------

--
-- Table structure for table `siswatemp`
--

CREATE TABLE IF NOT EXISTS `siswatemp` (
`id` int(11) NOT NULL,
  `status_masuk` varchar(10) NOT NULL,
  `nisn` varchar(13) NOT NULL,
  `no_induk` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `unit` varchar(5) NOT NULL,
  `level` varchar(5) NOT NULL,
  `ruangan` varchar(10) NOT NULL,
  `ta` varchar(13) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `pekerjaan_a` varchar(50) NOT NULL,
  `ibu` varchar(30) NOT NULL,
  `pekerjaan_i` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `siswatemp`
--

INSERT INTO `siswatemp` (`id`, `status_masuk`, `nisn`, `no_induk`, `nama`, `jk`, `tmp_lahir`, `tgl_lahir`, `unit`, `level`, `ruangan`, `ta`, `ayah`, `pekerjaan_a`, `ibu`, `pekerjaan_i`, `alamat`) VALUES
(7, 'BARU', '', '', 'Reza Saputra Yusuf', 'Laki-Laki', 'Jakarta', '1994-12-24', 'SD', '1', 'Ar-Rahman', '1617', 'Endang', 'Swasta', 'Rustilah', '', 'Bogor'),
(8, 'BARU', '', '', 'a', 'Laki-Laki', 'jakarta', '2020-02-02', 'TK/PA', '1', 'Ar-Rahman', '1617', 'a', 'a', 'a', '', 'Bogor'),
(9, 'BARU', '', '', 'reza reza', 'Laki-laki', 'Bogor', '2004-06-15', 'SD', 'Ar-Ra', '', '2016-2017', 's', 's', 's', '', 'Bogor'),
(10, 'BARU', '', '', 'sasa', 'Perempuan', 'Bogor', '2007-02-06', 'SD', '1', 'Ar-Rahim', '2016-2017', 'a', 'q', 'a', '', 'Bogor');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE IF NOT EXISTS `tagihan` (
`id` int(11) NOT NULL,
  `siswa` varchar(40) NOT NULL,
  `item_tagihan` varchar(30) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `juli` int(11) NOT NULL,
  `agustus` int(11) NOT NULL,
  `september` int(11) NOT NULL,
  `oktober` int(11) NOT NULL,
  `november` int(11) NOT NULL,
  `desember` int(11) NOT NULL,
  `januari` int(11) NOT NULL,
  `februari` int(11) NOT NULL,
  `maret` int(11) NOT NULL,
  `april` int(11) NOT NULL,
  `mei` int(11) NOT NULL,
  `juni` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=178 ;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id`, `siswa`, `item_tagihan`, `tahun`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`) VALUES
(31, '0', 'SPP', '2017', 395000, 395000, 395000, 395000, 0, 0, 0, 0, 0, 0, 0, 0),
(32, '0', 'Buku Paket 1 Semester', '2017', 600000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, '1', 'SPP', '2017', 395000, 395000, 395000, 395000, 395000, 395000, 395000, 0, 0, 0, 0, 0),
(34, '1', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, '2', 'SPP', '2017', 395000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, '2', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, '3', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, '3', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, '4', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, '4', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, '5', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, '5', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, '6', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, '6', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, '7', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, '7', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, '8', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, '8', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, '9', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, '9', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, '10', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, '10', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, '11', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, '11', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, '12', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, '12', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, '16', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, '16', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, '17', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, '17', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, '18', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, '18', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, '19', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, '19', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, '20', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, '20', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, '21', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, '21', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, '22', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, '22', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, '23', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, '23', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, '24', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, '24', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, '25', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, '25', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, '26', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, '26', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, '27', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, '27', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, '28', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, '28', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, '29', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, '29', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, '30', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, '30', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, '31', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, '31', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, '32', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, '32', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, '33', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, '33', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, '34', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, '34', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, '35', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, '35', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(97, '36', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(98, '36', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(99, '37', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100, '37', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(101, '38', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(102, '38', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(103, '39', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(104, '39', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(105, '40', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(106, '40', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(107, '41', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(108, '41', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(109, '42', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(110, '42', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(111, '43', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(112, '43', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(113, '44', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(114, '44', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(115, '45', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(116, '45', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(117, '46', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(118, '46', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(119, '47', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(120, '47', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(121, '48', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(122, '48', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(123, '49', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(124, '49', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(125, '50', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(126, '50', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(127, '51', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(128, '51', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(129, '52', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(130, '52', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(131, '53', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(132, '53', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(133, '54', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(134, '54', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(135, '55', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(136, '55', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(137, '56', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(138, '56', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(139, '57', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(140, '57', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(141, '58', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(142, '58', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(143, '59', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(144, '59', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(145, '60', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(146, '60', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(147, '6', 'pangkal', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(148, '7', 'pangkal', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(149, '8', 'pangkal', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(150, '73', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(151, '73', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(152, '74', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(153, '74', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(154, '1', 'Ekskul Calistung', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(155, '1', 'Seragam Siswa', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(156, '1', 'Ekskul Taekwondo', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(157, '1', 'Ekskul Panahan', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(158, '1', 'Ekskul BBQ', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(159, '1', 'Ekskul English', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(160, '1', 'Ekskul Robotik', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(161, '', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(162, '', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(164, '86', 'SPP', '2017', 395000, 395000, 395000, 395000, 395000, 395000, 395000, 395000, 395000, 0, 0, 0),
(165, '86', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(166, '9', 'pangkal', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(167, '10', 'pangkal', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(168, '88', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(169, '88', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(170, '89', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(171, '89', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(172, '90', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(173, '90', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(174, '91', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(175, '91', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(176, '92', 'SPP', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(177, '92', 'Buku Paket 1 Semester', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE IF NOT EXISTS `tahun_ajaran` (
`id` int(11) NOT NULL,
  `ta` varchar(10) NOT NULL,
  `ket` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id`, `ta`, `ket`, `status`) VALUES
(1, '2015/2016', 0, 0),
(2, '2016/2017', 0, 0),
(3, '2017/2018', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
`id` int(11) NOT NULL,
  `unit` varchar(40) NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `unit`, `keterangan`) VALUES
(1, 'TK/PAUD', 'AKTIF'),
(2, 'SD', 'AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `level`, `name`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'reeza2204@gmail.com', 'admin', 'Reza Saputra'),
(2, 'keuangan', '1f931595786f2f178358d0af5fe4d75eaee46819', '', '', 'keuangan'),
(3, 'kasir', '8691e4fc53b99da544ce86e22acba62d13352eff', '', '', 'kasir'),
(4, 'direktur', 'ef55c764d670377f3b24cf6d065252f06ee031c5', '', '', 'direktur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coa`
--
ALTER TABLE `coa`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_tagihan`
--
ALTER TABLE `item_tagihan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurnal_detail`
--
ALTER TABLE `jurnal_detail`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemasukan`
--
ALTER TABLE `pemasukan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswatemp`
--
ALTER TABLE `siswatemp`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coa`
--
ALTER TABLE `coa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `item_tagihan`
--
ALTER TABLE `item_tagihan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `jurnal_detail`
--
ALTER TABLE `jurnal_detail`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `pemasukan`
--
ALTER TABLE `pemasukan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `siswatemp`
--
ALTER TABLE `siswatemp`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=178;
--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

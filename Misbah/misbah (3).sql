-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2017 at 04:20 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
(1, 'Kas ', '10790000', 'aktiva lancar'),
(2, 'Kas di Bank', '', 'aktiva lancar'),
(3, 'Perlengkapan', '', 'aktiva'),
(4, 'Peralatan', '', 'aktiva'),
(5, 'Sewa', '', 'aktiva'),
(6, 'Penerimaan Iuran', '395000', 'pendapatan'),
(7, 'Penerimaan Kegiatan', '', 'pendapatan'),
(8, 'Kontribusi Unit', '', 'pendapatan'),
(9, 'Diknas', '', 'modal'),
(10, 'Depag', '', 'modal'),
(11, 'BOS', '', 'modal'),
(12, 'Beban Gaji', '', 'biaya'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nik`, `nama`, `jk`, `tgl_masuk`, `tempat_lahir`, `tgl_lahir`, `alamat`, `gaji`) VALUES
(2, '2007-69-00001-SD', 'Iis Mulyani', 'Perempuan', '', '', '', '', '-'),
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
(24, '2013-87-00069-SD', 'Siti Khodijah', 'Perempuan', '2013-03-07', 'Tapanuli', '1987-12-05', 'Perum Gaperti BDB1, Jl. Gurug Mas Gang Klengkeng RT/RW 01/12', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id`, `no_bukti`, `tgl_trans`, `cara_bayar`, `keterangan`, `penerima`, `id_siswa`) VALUES
(6, '', '02-02-2017', 'cash', '', 'admin', ''),
(7, '7', '02-02-2017', 'cash', 'Sumbangan Bos', 'admin', ''),
(8, '8', '02-02-2017', 'cash', 'Pindah Akun', 'admin', ''),
(9, '9', '02-02-2017', 'cash', 'Pindah Akun', 'admin', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

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
(16, 9, '6', '', '1580000');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`id`, `no_bukti`, `tgl_trans`, `cara_bayar`, `pembayaran`, `akun`, `total`, `penerima`, `id_siswa`) VALUES
(20, 'PMS002022017', '02-02-2017', 'cash', 'Buku Paket 1 Semester', '', '600000', 'admin', '0'),
(21, 'PMS002022017', '02-02-2017', 'cash', 'SPP', '', '395000', 'admin', '0'),
(24, 'PMS002022017', '02-02-2017', 'cash', 'SPP', '', '395000', 'admin', '0'),
(26, 'PMS002022017', '02-02-2017', 'cash', 'SPP', '', '395000', 'admin', '0');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `status_masuk`, `nisn`, `no_induk`, `nama`, `jk`, `tmp_lahir`, `tgl_lahir`, `unit`, `level`, `ruangan`, `ta`, `ayah`, `pekerjaan_a`, `ibu`, `pekerjaan_i`, `alamat`) VALUES
(0, '0', '', '161701001', 'Reza Saputra Yusuf', 'Laki-laki', 'Jakarta', '1994-12-24', 'SD', '1', 'Al-Hakim', '2016-2017', '', '', '', '', 'Bogor');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id`, `siswa`, `item_tagihan`, `tahun`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`) VALUES
(31, '0', 'SPP', '2017', 395000, 395000, 395000, 395000, 0, 0, 0, 0, 0, 0, 0, 0),
(32, '0', 'Buku Paket 1 Semester', '2017', 600000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `level`, `name`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'reeza2204@gmail.com', 'admin', 'Reza Saputra');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `coa`
--
ALTER TABLE `coa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `item_tagihan`
--
ALTER TABLE `item_tagihan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `jurnal_detail`
--
ALTER TABLE `jurnal_detail`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `pemasukan`
--
ALTER TABLE `pemasukan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `siswatemp`
--
ALTER TABLE `siswatemp`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

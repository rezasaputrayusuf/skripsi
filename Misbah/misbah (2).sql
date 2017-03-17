-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2017 at 10:06 PM
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

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `jumlah`, `jenis`) VALUES
(1, 'Komputer', 4, 'Alat');

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
(1, 'Kas ', '20000000', 'aktiva lancar'),
(2, 'Kas di Bank', '', 'aktiva lancar'),
(3, 'Perlengkapan', '15000000', 'aktiva'),
(4, 'Peralatan', '', 'aktiva'),
(5, 'Sewa', '', 'aktiva'),
(6, 'Penerimaan Iuran', '', 'pendapatan'),
(7, 'Penerimaan Kegiatan', '', 'pendapatan'),
(8, 'Kontribusi Unit', '', 'pendapatan'),
(9, 'Diknas', '', 'modal'),
(10, 'Depag', '-25000000', 'modal'),
(11, 'BOS', '-10000000', 'modal'),
(12, 'Beban Gaji', '1000000', 'biaya'),
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `item_tagihan`
--

INSERT INTO `item_tagihan` (`id`, `item_bayar`, `akun`, `kelas`, `biaya`, `sifat`, `masa`, `keterangan`) VALUES
(13, 'SPP', 'Penerimaan Iuran', '1', '200000', 'WAJIB', 'BULANAN', 'MASUK'),
(14, 'BIAYA PENDIDIKAN', 'Penerimaan Iuran', '1', '300000', 'WAJIB', 'PANGKAL', 'MASUK'),
(15, 'BIAYA DAFTAR ULANG', 'Penerimaan Iuran', '1', '500000', 'WAJIB', 'TAHUNAN', 'MASUK'),
(16, 'SERAGAM', 'Penerimaan Iuran', '1', '200000', 'WAJIB', 'PANGKAL', 'MASUK'),
(17, 'JEMPUTAN', 'Kontribusi Unit', '', '200000', 'PILIHAN', 'BULANAN', 'MASUK'),
(18, 'INFAQ', 'Penerimaan Iuran', '', '50000', 'WAJIB', 'BULANAN', 'MASUK'),
(19, 'BUKU', 'Penerimaan Iuran', '1', '700000', 'WAJIB', 'SEMESTER', 'MASUK'),
(20, 'EKSKUL ROBOTIK', 'Penerimaan Kegiatan', '1', '100000', 'OPSI', 'BULANAN', 'MASUK'),
(21, 'GEDUNG', 'Penerimaan Iuran', '1', '1000000', 'WAJIB', 'PANGKAL', 'MASUK'),
(22, 'PANGKAL', 'Penerimaan Iuran', '', '', '', '', 'MASUK'),
(23, 'ATK', 'Perlengkapan', '', '', '', '', 'KELUAR'),
(24, 'SPP', 'Kas ', '2', '210000', 'WAJIB', 'BULANAN', 'MASUK');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id`, `no_bukti`, `tgl_trans`, `cara_bayar`, `keterangan`, `penerima`, `id_siswa`) VALUES
(2, '1', '23-01-2017', 'cash', 'Sumbangan Bos', 'admin', ''),
(3, '3', '23-01-2017', 'cash', 'Sumbangan Depag', 'admin', ''),
(4, '4', '23-01-2017', 'cash', 'Beli Komputer', 'admin', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jurnal_detail`
--

INSERT INTO `jurnal_detail` (`id`, `id_jurnal`, `akun`, `debit`, `kredit`) VALUES
(1, 2, '1', '10000000', ''),
(2, 2, '11', '', '10000000'),
(3, 3, '1', '25000000', ''),
(4, 3, '10', '', '25000000'),
(5, 4, '3', '15000000', ''),
(6, 4, '1', '', '15000000');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`id`, `no_bukti`, `tgl_trans`, `cara_bayar`, `pembayaran`, `akun`, `total`, `penerima`, `id_siswa`) VALUES
(1, 'PSB', '09-01-2017', 'cash', 'pangkal', '', '1500000', 'kasir', '1'),
(2, 'PMS109012017', '09-01-2017', 'cash', 'SPP', '', '200000', 'admin', '1'),
(3, 'PMS110012017', '10-01-2017', 'cash', 'BUKU', '', '200000', 'admin', '1'),
(4, 'PMS101022017', '01-02-2017', 'cash', 'SPP', '', '200000', 'admin', '1'),
(5, 'PMS103022017', '03-02-2017', 'cash', 'BUKU', '', '300000', 'admin', '1'),
(6, 'PMS109012017', '09-01-2017', 'cash', 'EKSKUL ROBOTIK', '', '300000', 'admin', '1'),
(7, 'PMS109012017', '09-01-2017', 'cash', 'JEMPUTAN', '', '250000', 'admin', '1'),
(8, 'PMS109012017', '09-01-2017', 'cash', 'EKSKUL ROBOTIK', '', '300000', 'admin', '1'),
(9, 'PSB210012017', '10-01-2017', 'cash', 'pangkal', '', '1500000', 'kasir', '2'),
(10, 'PSB312012017', '12-01-2017', 'cash', 'pangkal', '', '1500000', 'kasir', '3'),
(11, 'PSB412012017', '12-01-2017', 'cash', 'pangkal', '', '1500000', 'kasir', '4'),
(12, 'PMS412012017', '12-01-2017', 'cash', 'SPP', '', '1000000', 'admin', '4'),
(16, 'PSB524012017', '24-01-2017', 'cash', 'pangkal', '', '1500000', 'kasir', '5'),
(17, 'PSB524012017', '24-01-2017', 'cash', 'pangkal', '', '', 'kasir', '5'),
(18, 'PMS024012017', '24-01-2017', 'cash', 'SPP', '', '1000000', 'admin', '0'),
(19, 'PMS024012017', '24-01-2017', 'cash', 'SPP', '', '200000', 'admin', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE IF NOT EXISTS `pengeluaran` (
`id` int(11) NOT NULL,
  `no_bukti` varchar(20) NOT NULL,
  `tgl_trans` varchar(20) NOT NULL,
  `pembayaran` varchar(50) NOT NULL,
  `akun` varchar(20) NOT NULL,
  `cara_bayar` varchar(10) NOT NULL,
  `total` varchar(20) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `no_bukti`, `tgl_trans`, `pembayaran`, `akun`, `cara_bayar`, `total`, `keterangan`) VALUES
(1, 'PKL', '12-01-2017', 'ATK', '', 'cash', '200000', 'Keluar');

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
(0, '0', '451221002', '4512210028', 'Rahmad Dedi Julian', 'Laki-Laki', 'Tolang Julu', '2000-07-16', 'SD', '2', 'Ar-Rahman', '2016-2017', 'Rahman', '', 'Listy', '', 'Tolang Julu');

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

--
-- Dumping data for table `siswatemp`
--

INSERT INTO `siswatemp` (`id`, `status_masuk`, `nisn`, `no_induk`, `nama`, `jk`, `tmp_lahir`, `tgl_lahir`, `unit`, `level`, `ruangan`, `ta`, `ayah`, `pekerjaan_a`, `ibu`, `pekerjaan_i`, `alamat`) VALUES
(5, 'BARU', '451221002', '4512210028', 'Rahmad Dedi Julian', 'Laki-Laki', 'Tolang Julu', '2000-07-16', 'SD', '2', 'Ar-Rahman', '2016-2017', 'Rahman', 'PNS', 'Listy', 'PNS', 'Tolang Julu');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id`, `siswa`, `item_tagihan`, `tahun`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`) VALUES
(28, '0', 'SPP', '2017', 200000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1000000, 0),
(29, '0', 'BIAYA DAFTAR ULANG', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, '0', 'BUKU', '2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item_tagihan`
--
ALTER TABLE `item_tagihan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jurnal_detail`
--
ALTER TABLE `jurnal_detail`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pemasukan`
--
ALTER TABLE `pemasukan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
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

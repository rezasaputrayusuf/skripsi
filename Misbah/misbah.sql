-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2016 at 03:12 PM
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
  `alamat` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nik`, `nama`, `jk`, `tgl_masuk`, `tempat_lahir`, `tgl_lahir`, `alamat`) VALUES
(3, '898979798989', 'Reza Saputra Yusuf', 'Laki-laki', '24-12-2015', 'Jakarta', '24-12-1994', 'jakarta,raya\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `item_tagihan`
--

CREATE TABLE IF NOT EXISTS `item_tagihan` (
`id` int(11) NOT NULL,
  `item_bayar` varchar(40) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `biaya` varchar(10) NOT NULL,
  `sifat` varchar(20) NOT NULL,
  `masa` varchar(20) NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `item_tagihan`
--

INSERT INTO `item_tagihan` (`id`, `item_bayar`, `kelas`, `biaya`, `sifat`, `masa`, `keterangan`) VALUES
(4, 'SPP', '1', '200000', 'WAJIB', 'TAHUNAN', 'MASUK'),
(5, 'CATERING', '', '', '', '', 'MASUK'),
(6, 'ANTAR-JEMPUT', '', '', '', '', 'MASUK'),
(7, 'GEDUNG', '1', '500000', 'WAJIB', 'PANGKAL', 'MASUK'),
(8, 'SERAGAM', '1', '100000', 'WAJIB', 'PANGKAL', 'MASUK'),
(9, 'BUKU', '1', '500000', 'WAJIB', 'TAHUNAN', 'MASUK'),
(10, 'PENDAFTARAN', '1', '1500000', 'WAJIB', 'PANGKAL', 'MASUK'),
(11, 'SPP', '2', '250000', 'WAJIB', 'BULANAN', 'MASUK');

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
  `total` varchar(30) NOT NULL,
  `penerima` varchar(20) NOT NULL,
  `id_siswa` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`id`, `no_bukti`, `tgl_trans`, `cara_bayar`, `pembayaran`, `total`, `penerima`, `id_siswa`) VALUES
(19, 'PSB', '29-12-2016', 'cash', 'pangkal', '2000000', 'kasir', '3'),
(20, 'PSB', '30-12-2016', 'cash', 'pangkal', '', 'kasir', '3');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE IF NOT EXISTS `pengeluaran` (
`id` int(11) NOT NULL,
  `no_bukti` varchar(20) NOT NULL,
  `tgl_trans` varchar(20) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `cara_bayar` varchar(10) NOT NULL,
  `nominal` varchar(20) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

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
  `alamat` text NOT NULL,
  `ortu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `status_masuk`, `nisn`, `no_induk`, `nama`, `jk`, `tmp_lahir`, `tgl_lahir`, `unit`, `level`, `ruangan`, `ta`, `alamat`, `ortu`) VALUES
(3, 'Baru', '', '', 'Yanu Darmawan', 'Laki-Laki', 'Bogor', '14-12-1994', 'SD', '1', 'AR-RAHMAN', '2016-2017', 'Cibinong, Bogor', 'Dani');

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
  `alamat` text NOT NULL,
  `ortu` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `siswatemp`
--

INSERT INTO `siswatemp` (`id`, `status_masuk`, `nisn`, `no_induk`, `nama`, `jk`, `tmp_lahir`, `tgl_lahir`, `unit`, `level`, `ruangan`, `ta`, `alamat`, `ortu`) VALUES
(3, 'Baru', '', '', 'Yanu Darmawan', 'Laki-Laki', 'Bogor', '14-12-1994', 'SD', '1', 'AR-RAHMAN', '2016-2017', 'Cibinong, Bogor', 'Dani'),
(5, 'Baru', '', '', 'Reza Code', 'laki-laki', 'jakarta', '12-12-1999', 'sd', '1', 'arrahman', '2016-2017', 'Bogor', 'Dani'),
(6, 'Baru', '', '', 'Siapa Saja', 'Laki-Laki', 'Bogor', '2-12-1994', 'SD', '2', 'AL-MALIK', '2015-2016', 'Perum Taman Raya Citayam B5 No.20 rt11/12', 'Tono');

-- --------------------------------------------------------

--
-- Table structure for table `ta`
--

CREATE TABLE IF NOT EXISTS `ta` (
  `id` varchar(10) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ta`
--

INSERT INTO `ta` (`id`, `keterangan`, `status`) VALUES
('', '2016-2017', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE IF NOT EXISTS `tagihan` (
`id` int(11) NOT NULL,
  `siswa` varchar(40) NOT NULL,
  `item_tagihan` varchar(30) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=299 ;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id`, `siswa`, `item_tagihan`, `bulan`, `tahun`, `status`) VALUES
(285, '3', 'pangkal', '12', '2016', '0'),
(288, '3', 'SPP', '', '2016', '0'),
(289, '3', 'BUKU', '', '2016', '0'),
(295, '3', '', '', '2016', '0'),
(296, '3', '', '', '2016', '0'),
(297, '3', '', '', '2016', '0'),
(298, '3', '', '', '2016', '0');

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

-- --------------------------------------------------------

--
-- Table structure for table `wali`
--

CREATE TABLE IF NOT EXISTS `wali` (
`id` int(11) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `pekerjaan_ayah` text NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `pekerjaan_ibu` text NOT NULL,
  `alamat` text NOT NULL,
  `no_telfon` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `wali`
--

INSERT INTO `wali` (`id`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `alamat`, `no_telfon`) VALUES
(13, 'Dani', 'Buruh', 'Diana', 'IRT', 'Perum Citayam Blok K, No 12', '021-63123141'),
(14, 'Tono', 'Satpam', 'Tina', 'Sekertaris', 'Bogor', '021-56478654');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `wali`
--
ALTER TABLE `wali`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `item_tagihan`
--
ALTER TABLE `item_tagihan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pemasukan`
--
ALTER TABLE `pemasukan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `siswatemp`
--
ALTER TABLE `siswatemp`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=299;
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
--
-- AUTO_INCREMENT for table `wali`
--
ALTER TABLE `wali`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

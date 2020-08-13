-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2020 at 07:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mber`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `login` enum('Y','N') NOT NULL,
  `id_customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `tanggal`, `login`, `id_customer`) VALUES
(1, '2020-08-13', 'Y', 7),
(4, '2020-08-13', 'Y', 7),
(5, '2020-08-13', 'Y', 4),
(6, '2020-08-13', 'N', 2),
(8, '2020-08-14', 'N', 4);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(7) NOT NULL,
  `nama_barang` text NOT NULL,
  `harga_jual` int(8) NOT NULL,
  `harga_pokok` int(8) NOT NULL,
  `stok` int(7) NOT NULL,
  `update_barang` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_jual`, `harga_pokok`, `stok`, `update_barang`, `id_user`) VALUES
(1, 'anbal', 123456, 654321, 0, '2020-08-12 02:17:19', 1),
(2, 'barangbarunih', 666666, 555555, 1234, '2020-08-12 17:17:36', 4),
(5, 'ikibarang', 89777, 89667, 2, '2020-08-12 02:17:19', 4);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(40) NOT NULL,
  `nik` int(13) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `no_telepon` int(13) NOT NULL,
  `riwayat_penyakit` varchar(255) NOT NULL,
  `kendala` varchar(255) NOT NULL,
  `terdaftar_sejak` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `nik`, `pekerjaan`, `no_telepon`, `riwayat_penyakit`, `kendala`, `terdaftar_sejak`, `id_user`) VALUES
(1, '', 1234567891, '', 0, 'rindu mantan', 'ladang mati', '2020-08-12', 1),
(2, '', 1122334455, '', 0, 'MELIA SEHAT SEJAHTERA', 'UANG TERKURAS MLM', '2020-08-12', 2),
(4, '', 0, '', 0, '', '', '0000-00-00', 4),
(7, 'akucustom', 9727428, 'preman', 889708877, 'loroo ati', 'ngeluu', '2020-08-12', 5);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(1) NOT NULL,
  `role` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'all'),
(2, 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_penjualan`
--

CREATE TABLE `transaksi_penjualan` (
  `id_transaksi` int(11) NOT NULL,
  `jumlah_uang` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_diterima` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_penjualan`
--

INSERT INTO `transaksi_penjualan` (`id_transaksi`, `jumlah_uang`, `id_barang`, `id_customer`, `id_user`, `tanggal_diterima`) VALUES
(1, 123456, 1, 1, 1, '2020-08-12'),
(4, 112234, 1, 2, 1, '2020-08-12'),
(5, 332211, 1, 2, 2, '2020-08-12'),
(10, 456456, 1, 2, 1, '2020-08-13'),
(21, 332211, 1, 2, 4, '2020-08-12'),
(22, 332211, 1, 1, 4, '2020-08-12'),
(23, 332211, 1, 1, 1, '2020-08-12'),
(24, 332211, 1, 1, 1, '2020-08-12'),
(25, 332211, 1, 1, 1, '2020-08-12'),
(26, 332211, 1, 1, 1, '2020-08-12'),
(27, 332211, 1, 1, 1, '2020-08-12'),
(28, 332211, 1, 1, 1, '2020-08-12'),
(29, 332211, 1, 1, 1, '2020-08-12'),
(30, 332211, 1, 1, 1, '2020-08-12');

-- --------------------------------------------------------

--
-- Table structure for table `userr`
--

CREATE TABLE `userr` (
  `id` int(9) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `id_role` int(1) NOT NULL,
  `alamat_user` text NOT NULL,
  `tanggal_lahir_user` date NOT NULL,
  `dibuat_tanggal_user` datetime NOT NULL,
  `terupdate_tanggal_user` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userr`
--

INSERT INTO `userr` (`id`, `nama_user`, `username`, `password`, `id_role`, `alamat_user`, `tanggal_lahir_user`, `dibuat_tanggal_user`, `terupdate_tanggal_user`) VALUES
(1, 'bismillahguy', 'babiku', 'qweasd123', 1, 'bwxkale', '1998-02-02', '2020-08-12 00:59:13', '2020-08-12 01:31:13'),
(2, 'bismillahguy1a', 'mana_ager', 'qweasd123', 2, 'bwxkale', '1998-12-12', '2020-08-12 01:43:13', '2020-08-12 01:43:13'),
(4, 'bismillahguyasdqq', '', '', 2, 'bwxkale', '1998-12-12', '2020-08-12 01:43:13', '2020-08-12 01:43:13'),
(5, 'zamroni', '', '', 2, 'embohgakngerti', '1998-02-02', '2020-08-12 00:59:13', '2020-08-12 00:59:13'),
(6, 'zamronil', 'zamzam', 'qwerty123', 2, 'embohgakngerti', '1998-02-02', '2020-08-12 00:59:13', '2020-08-12 00:59:13'),
(7, 'zamronil', 'zamzam', 'qwerty123', 2, 'embohgakngerti', '1998-02-02', '2020-08-12 00:59:13', '2020-08-12 00:59:13'),
(8, 'zamronil', 'zamzam', 'qwerty123', 2, 'embohgakngerti', '1998-02-02', '2020-08-12 00:59:13', '2020-08-12 00:59:13'),
(9, 'zamronil', 'zamzam', 'qwerty123', 2, 'embohgakngerti', '1998-02-02', '2020-08-12 00:59:13', '2020-08-12 00:59:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `transaksi_penjualan`
--
ALTER TABLE `transaksi_penjualan`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `transaksi_penjualan_ibfk_3` (`id_user`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `userr`
--
ALTER TABLE `userr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_ibfk_1` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transaksi_penjualan`
--
ALTER TABLE `transaksi_penjualan`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `userr`
--
ALTER TABLE `userr`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON UPDATE CASCADE;

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `userr` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `userr` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `transaksi_penjualan`
--
ALTER TABLE `transaksi_penjualan`
  ADD CONSTRAINT `transaksi_penjualan_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_penjualan_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `userr` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `userr`
--
ALTER TABLE `userr`
  ADD CONSTRAINT `userr_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

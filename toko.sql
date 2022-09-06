-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 02:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `brg_masuk`
--

CREATE TABLE `brg_masuk` (
  `no_ref` varchar(11) NOT NULL,
  `kd_barang` varchar(10) NOT NULL,
  `kd_distributor` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `penerima` varchar(30) NOT NULL,
  `ket` text NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brg_masuk`
--

INSERT INTO `brg_masuk` (`no_ref`, `kd_barang`, `kd_distributor`, `jumlah`, `tgl_masuk`, `penerima`, `ket`, `total`) VALUES
('ref001', 'B001', 'DB001', 3, '2022-06-06', 'Dimas', 'Masuk pada jam 4', 60000),
('ref002', 'B002', 'DB003', 5, '2022-06-07', 'Vicky', 'Masuk pada jam 6', 1250000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `kd_barang` varchar(15) NOT NULL,
  `nm_barang` varchar(40) NOT NULL,
  `harga` double NOT NULL,
  `stok` int(11) NOT NULL,
  `distributor` varchar(40) NOT NULL,
  `ket` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`kd_barang`, `nm_barang`, `harga`, `stok`, `distributor`, `ket`, `foto`) VALUES
('AB001', 'Sepatu', 1000000, 5, 'AB001', 'Terbuat dari kulit hewan', '475-7998-download.jpg'),
('AB002', 'Kemeja', 500000, 5, 'AB002', 'Bahan Katun', '6732-download.jpg'),
('AB003', 'Tas', 250000, 10, 'AB003', 'Bahan Kulit Hewan', '7342-download (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_distributor`
--

CREATE TABLE `tbl_distributor` (
  `kd_distributor` varchar(15) NOT NULL,
  `nm_distributor` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `pemilik` varchar(30) NOT NULL,
  `tipe_produk` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_distributor`
--

INSERT INTO `tbl_distributor` (`kd_distributor`, `nm_distributor`, `alamat`, `nohp`, `pemilik`, `tipe_produk`) VALUES
('AB001', 'PT. Tah Sung Hung', 'Brebes', '085229876953', 'Ibu Ina', 'Sepatu'),
('AB002', 'PT. Abadi', 'Garut', '083995784563', 'Bapak Fathul', 'Tas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brg_masuk`
--
ALTER TABLE `brg_masuk`
  ADD PRIMARY KEY (`no_ref`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `tbl_distributor`
--
ALTER TABLE `tbl_distributor`
  ADD PRIMARY KEY (`kd_distributor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

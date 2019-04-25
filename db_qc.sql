-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 09:40 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_qc`
--

-- --------------------------------------------------------

--
-- Table structure for table `ba`
--

CREATE TABLE `ba` (
  `id` int(11) NOT NULL,
  `id_ba` varchar(255) DEFAULT NULL,
  `plan` varchar(255) DEFAULT NULL,
  `cell` varchar(255) DEFAULT NULL,
  `lo` varchar(255) DEFAULT NULL,
  `audit_date` date DEFAULT NULL,
  `auditor_name` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `article` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `po_number` int(11) DEFAULT NULL,
  `po_total_qty` varchar(255) DEFAULT NULL,
  `quantity_inspected` int(3) DEFAULT NULL,
  `time_ba` varchar(20) DEFAULT NULL,
  `nomor_qc` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `rating` double(3,1) DEFAULT NULL,
  `percent_progress` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ba`
--

INSERT INTO `ba` (`id`, `id_ba`, `plan`, `cell`, `lo`, `audit_date`, `auditor_name`, `brand`, `model_name`, `article`, `category`, `po_number`, `po_total_qty`, `quantity_inspected`, `time_ba`, `nomor_qc`, `status`, `rating`, `percent_progress`) VALUES
(6, '21/23/7/2018 - BA', '2', '1', 'ADIDAS', '2018-07-23', 'LITHA', 'ADIDAS', 'MUNDIAL', '', 'Outdoor', 12345678, '1500', 10, '11:23:28', '001', 'BA', 2.5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bc_grade`
--

CREATE TABLE `bc_grade` (
  `id` int(11) NOT NULL,
  `id_fi` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `art` varchar(255) DEFAULT NULL,
  `no_po` varchar(255) DEFAULT NULL,
  `size` double DEFAULT NULL,
  `kr_kn` varchar(255) DEFAULT NULL,
  `alasan_reject` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bc_grade`
--

INSERT INTO `bc_grade` (`id`, `id_fi`, `grade`, `model`, `art`, `no_po`, `size`, `kr_kn`, `alasan_reject`) VALUES
(1, '21/23/7/2018 - FI', 'B', 'NIKE', '67784552', 'q43243423', 11, 'Kiri', 'Patah'),
(2, '21/23/7/2018 - FI', 'B', 'NIKE', '67784552', 'q43243423', 11, 'Kanan', 'Patah'),
(3, '21/23/7/2018 - FI', 'B', 'NIKE', '67784552', 'q43243423', 11, 'Kanan', 'Patat'),
(4, '21/23/7/2018 - FI', 'B', 'TOBAKO', '67784552', 'q43243423', 11, 'Kanan', 'Patah'),
(5, '24/25/7/2018 - FI', 'B', 'qwert', '67784552', 'q43243423', 11, 'Kiri', 'Patah sobek');

-- --------------------------------------------------------

--
-- Table structure for table `defect`
--

CREATE TABLE `defect` (
  `id` int(11) NOT NULL,
  `id_fi` varchar(50) DEFAULT NULL,
  `defect_cut` int(4) DEFAULT NULL,
  `benang_pjg` int(4) DEFAULT NULL,
  `langkah_jht` int(4) DEFAULT NULL,
  `wrinkle_collar` int(4) DEFAULT NULL,
  `open_bond` int(4) DEFAULT NULL,
  `overcement` int(4) DEFAULT NULL,
  `kotor` int(4) DEFAULT NULL,
  `heel` int(4) DEFAULT NULL,
  `overbuffing` int(4) DEFAULT NULL,
  `defect_outsole` int(4) DEFAULT NULL,
  `wrinkle_lasting` int(4) DEFAULT NULL,
  `a_grade` int(4) NOT NULL,
  `total_defect` double(5,2) NOT NULL,
  `hasil` double(5,2) NOT NULL,
  `bc_grade` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `defect`
--

INSERT INTO `defect` (`id`, `id_fi`, `defect_cut`, `benang_pjg`, `langkah_jht`, `wrinkle_collar`, `open_bond`, `overcement`, `kotor`, `heel`, `overbuffing`, `defect_outsole`, `wrinkle_lasting`, `a_grade`, `total_defect`, `hasil`, `bc_grade`) VALUES
(5, '21/23/7/2018 - FI', 0, 0, 0, 0, 1, 3, 4, 3, 0, 0, 0, 9, 11.00, 45.00, 4);

-- --------------------------------------------------------

--
-- Table structure for table `final_inspection`
--

CREATE TABLE `final_inspection` (
  `id` int(11) NOT NULL,
  `id_fi` varchar(20) DEFAULT NULL,
  `plan` varchar(255) DEFAULT NULL,
  `cell` varchar(255) DEFAULT NULL,
  `article` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `po` varchar(255) DEFAULT NULL,
  `total_qty_order` int(11) DEFAULT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `date_fi` date DEFAULT NULL,
  `time_fi` time DEFAULT NULL,
  `final_qc` varchar(255) DEFAULT NULL,
  `defect` double(5,2) NOT NULL,
  `bc_grade` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_inspection`
--

INSERT INTO `final_inspection` (`id`, `id_fi`, `plan`, `cell`, `article`, `model`, `brand`, `po`, `total_qty_order`, `customer`, `date_fi`, `time_fi`, `final_qc`, `defect`, `bc_grade`) VALUES
(5, '21/23/7/2018 - FI', '2', '1', '123', 'qwert', '', '1234', 10, 'Nilokusumo Tri p', '2018-07-23', '11:24:23', 'Litha', 45.00, 4),
(6, '24/25/7/2018 - FI', '2', '4', '123', 'NIKE', 'Adidas', '1234', 10, 'U.S.A', '2018-07-25', '14:25:29', 'Litha', 0.00, 0),
(7, '22/26/7/2018 - FI', '2', '2', '123', 'qwert', 'Adidas', '1234', 10, 'Nilokusumo Tri p', '2018-07-26', '15:00:10', 'Litha', 0.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `id_ba` varchar(255) DEFAULT NULL,
  `c1` varchar(255) DEFAULT NULL,
  `c2` varchar(255) DEFAULT NULL,
  `c3` varchar(255) DEFAULT NULL,
  `c4` varchar(255) DEFAULT NULL,
  `c5` varchar(255) DEFAULT NULL,
  `c6` varchar(255) DEFAULT NULL,
  `c7` varchar(255) DEFAULT NULL,
  `c8` varchar(255) DEFAULT NULL,
  `c9` varchar(255) DEFAULT NULL,
  `beautiful` double(3,1) DEFAULT NULL,
  `rating` double(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `id_ba`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `beautiful`, `rating`) VALUES
(3, '21/23/7/2018 - BA', '0', '0', '1', '3', '4', '0', '0', '0', '0', 5.0, 2.5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `hak_akses` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `hak_akses`) VALUES
(1, 'DIT', '4dm1n', 'IT'),
(2, 'Staff', '123', 'staff'),
(3, 'Admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ba`
--
ALTER TABLE `ba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_grade`
--
ALTER TABLE `bc_grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `defect`
--
ALTER TABLE `defect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `final_inspection`
--
ALTER TABLE `final_inspection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ba`
--
ALTER TABLE `ba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bc_grade`
--
ALTER TABLE `bc_grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `defect`
--
ALTER TABLE `defect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `final_inspection`
--
ALTER TABLE `final_inspection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

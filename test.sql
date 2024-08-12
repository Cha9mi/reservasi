-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 06:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(10) NOT NULL DEFAULT 0,
  `username` varchar(30) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `nama` varchar(50) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `level` varchar(20) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `username`, `password`, `nama`, `level`) VALUES
(2206, 'angling', 'angling', 'ANGLING YUNANTO, SP.U, DR', 'admin'),
(2202, 'wahyu', 'wahyu', 'dr. Wahyu Murtiono Hadibroto, ', 'admin'),
(2203, 'yanti', 'yanti', 'dr. Yanti Nurrokhmawati, Sp.TH', 'admin'),
(2204, 'rendra', 'rendra', 'dr. Rendra Irawan, Sp.OT (K) Spine', 'admin'),
(2205, 'lina', 'lina', 'LINA DAMAYANTI, SP. KK, DR', 'admin'),
(2207, 'obit', 'obit', 'Obit Revian, SP.KG ,DRG.', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `janji_temu`
--

CREATE TABLE `janji_temu` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `usia` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `dokter` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `janji_temu`
--

INSERT INTO `janji_temu` (`id`, `nama`, `usia`, `gender`, `alamat`, `dokter`, `tanggal`, `waktu`) VALUES
(5, 'Obit Revian Oktia', 21, 'pria', 'bandung', 'ANGLING YUNANTO, SP.U, DR', '2023-07-02', '12:00:00'),
(6, 'Obit Revian Oktia Zandra', 22, 'pria', 'bandung barat', 'LINA DAMAYANTI, SP. KK, DR', '2023-07-03', '08:00:00'),
(7, 'obit', 20, 'pria', 'jakarta', 'Obit Revian, SP.KG ,DRG.', '2023-07-31', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama`, `level`) VALUES
(16, 'pasien1', 'pasien1', 'pasien1', 'pasien'),
(17, 'admin', 'admin', 'admin', 'admin'),
(18, 'pasien', 'pasien', 'pasien', 'pasien'),
(20, 'angling', 'angling', 'ANGLING YUNANTO, SP.U, DR', 'admin'),
(21, 'lina', 'lina', 'LINA DAMAYANTI, SP. KK, DR', 'admin'),
(22, 'rendra', 'rendra', 'dr. Rendra Irawan, Sp.OT (K) S', 'admin'),
(23, 'yanti', 'yanti', 'dr. Yanti Nurrokhmawati, Sp.TH', 'admin'),
(24, 'wahyu', 'wahyu', 'dr. Wahyu Murtiono Hadibroto, ', 'admin'),
(25, 'obit', 'obit', 'Obit Revian, SP.KG ,DRG.', 'admin'),
(27, 'revian', 'revian', 'revian', 'pasien');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `dokter` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `metode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `nama`, `tanggal`, `waktu`, `dokter`, `harga`, `metode`) VALUES
(5, 'Obit Revian Oktia', '2023-07-03', '12:00:00', 'ANGLING YUNANTO, SP.U, DR', '100.000', 'cod'),
(6, 'Obit Revian Oktia Zandra', '2023-07-03', '08:00:00', 'LINA DAMAYANTI, SP. KK, DR', '200.000', 'cod'),
(7, 'obit', '2023-07-31', '00:00:00', 'Obit Revian, SP.KG ,DRG.', '999.999.999', 'cards');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `janji_temu`
--
ALTER TABLE `janji_temu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `janji_temu`
--
ALTER TABLE `janji_temu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

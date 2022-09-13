-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 04:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_asesmen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiket_bus`
--

CREATE TABLE `tiket_bus` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_identitas` varchar(15) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `jumlah_pnp` int(100) NOT NULL,
  `jumlah_lns` int(100) NOT NULL,
  `harga` int(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket_bus`
--

INSERT INTO `tiket_bus` (`id`, `nama`, `no_identitas`, `no_hp`, `kelas`, `jumlah_pnp`, `jumlah_lns`, `harga`, `total`) VALUES
(4, 'Muhammad Asyraf Faiz Kamil', '112109422381', 899273814, 'Bisnis', 4, 2, 0, 0),
(5, 'Muhammad Asyraf Faiz Kamil', '112109422381', 899273814, 'Eksekutif', 3, 1, 600000, 2340000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tiket_bus`
--
ALTER TABLE `tiket_bus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tiket_bus`
--
ALTER TABLE `tiket_bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

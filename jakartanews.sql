-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 04:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jakartanews`
--

-- --------------------------------------------------------

--
-- Table structure for table `bencana`
--

CREATE TABLE `bencana` (
  `idBencana` int(10) NOT NULL,
  `jnsBencana` varchar(30) NOT NULL,
  `tglKejadian` varchar(50) NOT NULL,
  `tglSelesai` varchar(50) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `jmlKorban` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bencana`
--

INSERT INTO `bencana` (`idBencana`, `jnsBencana`, `tglKejadian`, `tglSelesai`, `lokasi`, `jmlKorban`) VALUES
(2, 'KEBAKARAN', '12/07/2021', '12/07/2021', 'Jl. Nirbaya Rt.10 / 03', '12 KK 30 JIWA'),
(4, 'KEBAKARAN', '17/07/2021', '24/07/2021', 'Jl. Lindung Pasar Baru Rt. 01 ', '272 KK 985 JIWA'),
(6, 'KEBAKARAN', '19/07/2021', '24/07/2021', 'Jl. Manggarai Utara 2 No.7 Rt.', '11 KK 60 JIWA'),
(7, 'KEBAKARAN', '25/07/2021', '26/07/2021', 'Jl. Kebon Pala I No.78 Rt. 004', '9 KK 27 JIWA'),
(8, 'KEBAKARAN', '31/07/2021', '31/07/2021', 'Jl. Karet Pasar Baru Rt. 011 /', '10 KK 50 JIWA');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `copyright` varchar(50) NOT NULL,
  `namaWeb` varchar(100) NOT NULL,
  `slogan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `twitter`, `copyright`, `namaWeb`, `slogan`) VALUES
(1, 'Twitter : @JakartaNEWS\r\nFacebook: @JakartaNEWS\r\nInstagram : @JakartaNEWS', '© Copyright 2022. All Rights Reserved', 'JakartaNEWS\r\nNEWEST NEWS', 'NEWEST NEWS');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `namaHeader` varchar(20) NOT NULL,
  `logo` text NOT NULL,
  `slogan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `namaHeader`, `logo`, `slogan`) VALUES
(1, 'JakartaNEWS', 'icon.png', 'NEWEST NEWS');

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `id` int(10) NOT NULL,
  `menu` varchar(30) NOT NULL,
  `link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `menu`, `link`) VALUES
(1, 'Data Bencana', 'index.php#'),
(2, 'Berita', 'berita.php#');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(10) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `user`, `password`) VALUES
(3, 'admin@gmail.com', '123'),
(6, 'hafidzsabri.n@gmail.com', '08012004');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bencana`
--
ALTER TABLE `bencana`
  ADD PRIMARY KEY (`idBencana`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bencana`
--
ALTER TABLE `bencana`
  MODIFY `idBencana` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

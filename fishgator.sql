-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 22, 2020 at 01:22 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fishgator`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `nama`, `email`, `url`, `komentar`) VALUES
(7, 'saya', 'mia@gmail.com', 'https://www.instagram.com/p/BxSQvvrhiYc/?igshid=u2', 'manteb'),
(8, 'amelita', 'skrillex@gmail.com', 'https://www.instagram.com/p/BxSQvvrhiYc/?igshid=q8', 'yuhuu'),
(9, 'Dimas Nor Haris Hidayati', 'skrillex@gmail.com', 'https://www.instagram.com/p/B8heDeXpY5K/?igshid=1q', 'oki doki');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kolam`
--

CREATE TABLE `tbl_kolam` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_nama_kolam` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `suhu` int(11) NOT NULL,
  `turbidity` varchar(255) NOT NULL,
  `oxigen` varchar(255) NOT NULL,
  `ph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kolam`
--

INSERT INTO `tbl_kolam` (`id`, `id_nama_kolam`, `tanggal`, `suhu`, `turbidity`, `oxigen`, `ph`) VALUES
(1, 1, '2020-08-20', 90, '62', '55', '22'),
(2, 2, '2020-08-21', 45, '54', '22', '66'),
(3, 2, '2020-08-20', 90, '55', '88', '77'),
(4, 1, '2020-08-21', 45, '78', '55', '66');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nama_kolam`
--

CREATE TABLE `tbl_nama_kolam` (
  `id` int(11) NOT NULL,
  `nama_kolam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nama_kolam`
--

INSERT INTO `tbl_nama_kolam` (`id`, `nama_kolam`) VALUES
(1, 'kolam 1'),
(2, 'kolam 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kolam`
--
ALTER TABLE `tbl_kolam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nama_kolam` (`id_nama_kolam`);

--
-- Indexes for table `tbl_nama_kolam`
--
ALTER TABLE `tbl_nama_kolam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kolam`
--
ALTER TABLE `tbl_kolam`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_nama_kolam`
--
ALTER TABLE `tbl_nama_kolam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_kolam`
--
ALTER TABLE `tbl_kolam`
  ADD CONSTRAINT `tbl_kolam_ibfk_1` FOREIGN KEY (`id_nama_kolam`) REFERENCES `tbl_nama_kolam` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

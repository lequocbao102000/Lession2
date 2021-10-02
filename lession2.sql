-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2021 at 03:26 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lession2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldanhmuc`
--

CREATE TABLE `tbldanhmuc` (
  `IDDANHMUC` int(11) NOT NULL,
  `TENDANHMUC` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldanhmuc`
--

INSERT INTO `tbldanhmuc` (`IDDANHMUC`, `TENDANHMUC`) VALUES
(1, 'Shirt'),
(2, 'Pant'),
(3, 'Shoe'),
(4, 'Backpack');

-- --------------------------------------------------------

--
-- Table structure for table `tblsanpham`
--

CREATE TABLE `tblsanpham` (
  `IDSP` int(11) NOT NULL,
  `TENSP` varchar(100) DEFAULT NULL,
  `IDDANHMUC` int(11) DEFAULT NULL,
  `HINHANH` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsanpham`
--

INSERT INTO `tblsanpham` (`IDSP`, `TENSP`, `IDDANHMUC`, `HINHANH`) VALUES
(10, 'T-Shirt Chaos Black', 1, 'tee-chaos-black-1-800x1000.jpg'),
(11, 'T-Shirt Chaos Tan', 1, 'tee-chaos-tan-1-800x1000.jpg'),
(12, 'T-Shirt Logo Pink', 1, 'tee-logo-cube-rose-1a-800x1000.jpg'),
(13, 'Pant Laurel Black', 2, 'PANT-LAUREL-BLACK-1-800x1000.jpg'),
(14, 'Pant Laurel White', 2, 'PANT-LAUREL-WHITE-3-800x1000.jpg'),
(15, 'Ultra Boost', 3, '39211705_2241815452771808_846784434840535040_n.jpg'),
(16, 'Stan Smith', 3, '39135602_2241449786141708_7343770416843849728_n.jpg'),
(17, 'BACKPACK UNITE BLUE', 4, 'backpack-unit-blue-white-1-800x1000.jpg'),
(18, 'BACKPACK UNITE GREEN', 4, 'backpack-unit-green-5-800x1000.jpg'),
(19, 'T-SHIRT 25 03 LIGHT TEAL', 1, 'tee-basic-2503-green_1-800x1000.jpg'),
(20, 'T-SHIRT 25 03 PEPPER', 1, 'tee-basic-2503-pepper_1-800x1000.jpg'),
(21, 'SHORT STICKER BLACK', 2, 'short-sticker_black_1-800x1000.jpg'),
(22, 'T-Shirt Chaos Black', 1, 'tee-chaos-black-1-800x1000.jpg'),
(23, 'T-Shirt Chaos Black', 1, 'tee-chaos-black-1-800x1000.jpg'),
(24, 'BACKPACK UNITE BLUE', 4, 'backpack-unit-blue-white-1-800x1000.jpg'),
(28, 'T-SHIRT 25 03 LIGHT TEAL', 1, 'tee-basic-2503-green_1-800x1000.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldanhmuc`
--
ALTER TABLE `tbldanhmuc`
  ADD PRIMARY KEY (`IDDANHMUC`);

--
-- Indexes for table `tblsanpham`
--
ALTER TABLE `tblsanpham`
  ADD PRIMARY KEY (`IDSP`),
  ADD KEY `key_1` (`IDDANHMUC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbldanhmuc`
--
ALTER TABLE `tbldanhmuc`
  MODIFY `IDDANHMUC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblsanpham`
--
ALTER TABLE `tblsanpham`
  MODIFY `IDSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblsanpham`
--
ALTER TABLE `tblsanpham`
  ADD CONSTRAINT `key_1` FOREIGN KEY (`IDDANHMUC`) REFERENCES `tbldanhmuc` (`IDDANHMUC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

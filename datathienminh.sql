-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 04:35 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datathienminh`
--
CREATE DATABASE IF NOT EXISTS `datathienminh` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `datathienminh`;

-- --------------------------------------------------------

--
-- Table structure for table `duan`
--

CREATE TABLE `duan` (
  `idProj` int(11) NOT NULL,
  `nameProj` varchar(100) NOT NULL,
  `investorProj` varchar(100) NOT NULL,
  `idCus` int(11) NOT NULL,
  `contentProj` varchar(255) NOT NULL,
  `imageProj` varchar(255) NOT NULL,
  `formProj` varchar(100) NOT NULL,
  `deleteStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `duan`
--

INSERT INTO `duan` (`idProj`, `nameProj`, `investorProj`, `idCus`, `contentProj`, `imageProj`, `formProj`, `deleteStatus`) VALUES
(1, 'Khách sạn Thuý Nga', 'CÔNG TY TNNN CÔNG NGHỆ VÀ THIẾT BỊ HÀ THÀNH', 0, 'Cung cấp, lắp đặt hệ thống PCCC', '', 'Trọn gói', 0);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `idCus` int(11) NOT NULL,
  `nameCus` varchar(255) NOT NULL,
  `logoCus` int(255) NOT NULL,
  `phoneCus` int(11) NOT NULL,
  `emailCus` varchar(100) NOT NULL,
  `representativeCus` varchar(50) NOT NULL,
  `accountBankCus` double NOT NULL,
  `nameBankCus` varchar(255) NOT NULL,
  `addressCus` varchar(255) NOT NULL,
  `deleteStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`idCus`, `nameCus`, `logoCus`, `phoneCus`, `emailCus`, `representativeCus`, `accountBankCus`, `nameBankCus`, `addressCus`, `deleteStatus`) VALUES
(1, 'CÔNG TY TNHH CÔNG NGHỆ NGA PHÁP', 0, 82356788, 'ngaphap@gmail.com', 'Phạm Phương Nga', 102567898978, 'Viettinbank', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `idSupp` int(11) NOT NULL,
  `nameSupp` varchar(150) NOT NULL,
  `logoSupp` varchar(255) NOT NULL,
  `phoneSupp` int(11) NOT NULL,
  `emailSupp` varchar(100) NOT NULL,
  `addressSupp` varchar(255) NOT NULL,
  `representativeSupp` varchar(100) NOT NULL,
  `statusSupp` tinyint(1) NOT NULL,
  `deleteStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`idSupp`, `nameSupp`, `logoSupp`, `phoneSupp`, `emailSupp`, `addressSupp`, `representativeSupp`, `statusSupp`, `deleteStatus`) VALUES
(1, 'CÔNG TY CỔ PHẦN ĐẦU TƯ VÀ PHÁT TRIỂN PHÁP NGA', '', 96567854, 'phapnga@gmail.com', 'Hà Nội', 'Phạm Nga Nga', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idEmp` int(11) NOT NULL,
  `nameEmp` varchar(100) NOT NULL,
  `avatarEmp` varchar(255) NOT NULL,
  `phoneEmp` varchar(11) NOT NULL,
  `CMTEmp` varchar(11) NOT NULL,
  `emailEmp` varchar(50) NOT NULL,
  `sexEmp` varchar(30) NOT NULL,
  `addressEmp` varchar(255) NOT NULL,
  `salaryEmp` double NOT NULL,
  `statusEmp` tinyint(1) NOT NULL,
  `deleteStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`idEmp`, `nameEmp`, `avatarEmp`, `phoneEmp`, `CMTEmp`, `emailEmp`, `sexEmp`, `addressEmp`, `salaryEmp`, `statusEmp`, `deleteStatus`) VALUES
(1, 'Phạm Nga', 'assets/imgsAdmin/imgEmployee/toisung-20220524-122829.jpg', '0123123', '135347899', 'phamnga@gmail.com', 'Nữ', 'Vĩnh Hạ Sơn Công Hà Nội', 56456, 0, 0),
(2, 'Thái', '', '123123', '12312312', 'lamvanthai@gmail.com', 'Nam', 'Nam ĐỊnh', 5000000, 0, 1),
(3, 'lamvanthai', 'assets/imgsAdmin/imgEmployee/toisung-20220523-071600.jpg', '0904907825', '1231231', 'lamvanthai@gmail.com', 'Nam', '12312321312', 12312312312, 0, 0),
(4, 'Lâm Văn Thái', 'assets/imgsAdmin/imgEmployee/toisung-20220523-071726.jpg', '0904907825', '1231231', 'lamvanthai0609@gmail.com', 'Nam', '12312321312', 564565, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `idPro` int(11) NOT NULL,
  `namePro` varchar(100) NOT NULL,
  `imagePro` varchar(255) NOT NULL,
  `costPro` double NOT NULL,
  `quantityPro` int(11) NOT NULL,
  `funtionPro` varchar(255) NOT NULL,
  `specificationsPro` varchar(255) NOT NULL,
  `systemPro` varchar(100) NOT NULL,
  `categoryPro` varchar(100) NOT NULL,
  `manufacturerPro` varchar(100) NOT NULL,
  `originPro` varchar(100) NOT NULL,
  `deleteStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idPro`, `namePro`, `imagePro`, `costPro`, `quantityPro`, `funtionPro`, `specificationsPro`, `systemPro`, `categoryPro`, `manufacturerPro`, `originPro`, `deleteStatus`) VALUES
(1, 'Tủ trung tâm báo cháy', '', 235763, 100, 'Chức năng báo trễ (Accumulation Function): báo động sẽ không được phát ngay mà được phát ra sau một khoảng thời gian trễ để cho đến khi xác định chính xác là có tín hiệu báo cháy thực sự.', 'Thiên Minh', 'báo cháy', 'tủ trung tâm', 'Hochiki', 'Nhật bản', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `duan`
--
ALTER TABLE `duan`
  ADD PRIMARY KEY (`idProj`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idCus`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`idSupp`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idEmp`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idPro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `duan`
--
ALTER TABLE `duan`
  MODIFY `idProj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idCus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `idSupp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idEmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idPro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

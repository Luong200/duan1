-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 12:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan12`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `madh` varchar(50) NOT NULL,
  `iduser` int(11) NOT NULL,
  `nguoidat_ten` varchar(50) NOT NULL,
  `nguoidat_email` varchar(50) NOT NULL,
  `nguoidat_tell` varchar(20) NOT NULL,
  `nguoidat_diachi` varchar(100) NOT NULL,
  `ngaydathang` varchar(55) NOT NULL,
  `nguoinhan_ten` varchar(50) DEFAULT NULL,
  `nguoinhan_diachi` varchar(50) DEFAULT NULL,
  `nguoinhan_tel` varchar(20) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `ship` int(11) NOT NULL DEFAULT 0,
  `voucher` int(11) NOT NULL DEFAULT 0,
  `tongthanhtoan` int(11) NOT NULL,
  `bill_status` varchar(255) NOT NULL DEFAULT '0' COMMENT '0:Đơn hàng mới 1:Đang xử lí 2:Đang giao hàng 3:hoàn tất',
  `pttt` tinyint(1) NOT NULL COMMENT '0: COD; 1:CK; 2:Thanh toán online'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `madh`, `iduser`, `nguoidat_ten`, `nguoidat_email`, `nguoidat_tell`, `nguoidat_diachi`, `ngaydathang`, `nguoinhan_ten`, `nguoinhan_diachi`, `nguoinhan_tel`, `total`, `ship`, `voucher`, `tongthanhtoan`, `bill_status`, `pttt`) VALUES
(1, 'Darcy5-064332-23112023', 5, 'nghia', 'tk1@gmail.com', '09654433333', 'trinh van bo', '', '', '', '', 200, 0, 0, 200, '1', 2),
(2, 'Darcy6-064406-23112023', 6, 'nghia', 'tk1@gmail.com', '09654433333', 'trinh van bo', '', '', '', '', 200, 0, 0, 200, '2', 1),
(3, 'Darcy7-064428-23112023', 7, 'nghia', 'tk1@gmail.com', '096544333', 'trinh van bo', '', '', '', '', 400, 0, 0, 400, '1', 1),
(4, 'Darcy8-073724-23112023', 8, 'nghia', 'tk1@gmail.com', '096544333', 'trinh van bo', '', '', '', '', 400, 0, 0, 400, '', 1),
(5, 'Darcy9-105526-25112023', 9, 'Hoang Danh Nghĩa', 'nghia11@gmail.com', '0975.396.587', 'Bắc Ninh', '', '', '', '', 200, 0, 0, 200, '2', 1),
(6, 'Darcy10-105804-25112023', 10, 'Hoang Danh Nghĩa', 'nghia11@gmail.com', '0975.396.587', 'Bắc Ninh', '', '', '', '', 200, 0, 0, 200, '0', 1),
(7, 'Darcy16-070842-26112023', 16, 'Hoang Nghĩa', 'tk1@gmail.com', '0976396587', 'nghe an', '', '', '', '', 1129000, 0, 0, 1129000, '0', 1),
(8, 'Darcy24-115402-03122023', 24, 'đặng văn hậu', 'tk1@gmail.com', '098766323', 'Hòe thị nam từ liêm', '11:54:02am 03/12/2023', '', '', '', 1000000, 0, 0, 1000000, '0', 1),
(9, 'Darcy25-115500-03122023', 25, 'đăng hậu', 'tk1@gmail.com', '098766323', 'Hòe thị nam từ liêm', '11:55:00am 03/12/2023', '', '', '', 400000, 0, 0, 400000, '0', 1),
(10, 'Darcy26-115744-03122023', 26, 'hậu test', 'tk1@gmail.com', '098766323', 'Hòe thị nam từ liêm', '11:57:44am 03/12/2023', '', '', '', 500000, 0, 0, 500000, '0', 3),
(11, 'Darcy27-115844-03122023', 27, 'hậu test 2', 'tk1@gmail.com', '098766323', 'Hòe thị nam từ liêm', '11:58:44am 03/12/2023', '', '', '', 750000, 0, 0, 750000, '0', 0),
(12, 'Darcy28-120045-03122023', 28, 'meomeo', 'tk1@gmail.com', '098766323', 'Hòe thị nam từ liêm', '12:00:45pm 03/12/2023', '', '', '', 250000, 0, 0, 250000, '0', 1),
(13, 'Darcy29-120147-03122023', 29, 'hậu test3', 'tk1@gmail.com', '098766323', 'Hòe thị nam từ liêm', '12:01:47pm 03/12/2023', '', '', '', 200000, 0, 0, 200000, '2', 1),
(14, 'Darcy30-120316-03122023', 30, 'hậu test 5', 'tk1@gmail.com', '098766323', 'Hòe thị nam từ liêm', '12:03:16pm 03/12/2023', '', '', '', 1479000, 0, 0, 1479000, '1', 1),
(15, 'Darcy31-120519-03122023', 31, '1111', 'tk1@gmail.com', '098766323', 'Hòe thị nam từ liêm', '12:05:18pm 03/12/2023', '', '', '', 250000, 0, 0, 250000, '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `idpro`, `price`, `name`, `img`, `soluong`, `thanhtien`, `idbill`) VALUES
(1, 2, 200, 'Sản phẩm 2', 'sp2.webp', 1, 200, 2),
(2, 2, 200, 'Sản phẩm 2', 'sp2.webp', 1, 200, 3),
(3, 2, 200, 'Sản phẩm 2', 'sp2.webp', 1, 200, 3),
(4, 2, 200, 'Sản phẩm 2', 'sp2.webp', 1, 200, 4),
(5, 2, 200, 'Sản phẩm 2', 'sp2.webp', 1, 200, 4),
(7, 2, 200, 'Sản phẩm 2', 'sp2.jpg', 1, 200, 6),
(8, 4, 250000, 'Sản phẩm 44', 'sp44.jpg', 1, 250000, 7),
(9, 15, 879000, 'Nước hoa nam', 'gucci1.jpg', 1, 879000, 7),
(10, 4, 250000, 'Sản phẩm 44', 'sp44.jpg', 4, 1000000, 8),
(11, 2, 200000, 'Sản phẩm 2', 'sp2.jpg', 2, 400000, 9),
(12, 4, 250000, 'Sản phẩm 44', 'sp44.jpg', 2, 500000, 10),
(13, 4, 250000, 'Sản phẩm 44', 'sp44.jpg', 1, 250000, 11),
(14, 2, 200000, 'Sản phẩm 2', 'sp2.jpg', 1, 200000, 11),
(15, 16, 300000, 'Fahrenheit', 'sp55.jpg', 1, 300000, 11),
(16, 4, 250000, 'Sản phẩm 44', 'sp44.jpg', 1, 250000, 12),
(17, 2, 200000, 'Sản phẩm 2', 'sp2.jpg', 1, 200000, 13),
(18, 16, 300000, 'Fahrenheit', 'sp55.jpg', 2, 600000, 14),
(19, 15, 879000, 'Nước hoa nam', 'gucci1.jpg', 1, 879000, 14),
(20, 4, 250000, 'Sản phẩm 44', 'sp44.jpg', 1, 250000, 15);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `home` tinyint(1) NOT NULL DEFAULT 0,
  `stt` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `home`, `stt`) VALUES
(1, 'Chanel', 1, 1),
(2, 'Dior', 0, 0),
(3, 'Gucci', 1, 2),
(4, 'Hermès', 0, 0),
(5, 'Calvin Klein', 0, 0),
(6, 'Nước hoa nam', 0, 0),
(7, 'Charme', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `mota` text NOT NULL,
  `bestseller` tinyint(1) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `img`, `price`, `view`, `mota`, `bestseller`, `iddm`) VALUES
(1, 'Sản phẩm 1', 'sp1.jpg', 168000, 66, '', 1, 1),
(2, 'Sản phẩm 2', 'sp2.jpg', 200000, 235, '', 1, 1),
(4, 'Sản phẩm 44', 'sp44.jpg', 250000, 44, '', 1, 3),
(15, 'Nước hoa nam', 'gucci1.jpg', 879000, 0, '', 0, 4),
(16, 'Fahrenheit', 'sp55.jpg', 300000, 0, 'hahahha', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hoten` varchar(50) DEFAULT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `dienthoai` varchar(20) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `hoten`, `diachi`, `email`, `dienthoai`, `role`) VALUES
(1, 'admin', 'admin123', NULL, 'Hòe thị nam từ liêm', 'tk1@gmail.com', '098766323', 1),
(5, 'guest158', '123456', 'nghia', 'trinh van bo', 'tk1@gmail.com', '09654433333', 0),
(6, 'guest105', '123456', 'nghia', 'trinh van bo', 'tk1@gmail.com', '09654433333', 0),
(7, 'guest191', '123456', 'nghia', 'trinh van bo', 'tk1@gmail.com', '096544333', 0),
(8, 'guest183', '123456', 'nghia', 'trinh van bo', 'tk1@gmail.com', '096544333', 0),
(9, 'guest895', '123456', 'Hoang Danh Nghĩa', 'Bắc Ninh', 'nghia11@gmail.com', '0975.396.587', 0),
(10, 'guest698', '123456', 'Hoang Danh Nghĩa', 'Bắc Ninh', 'nghia11@gmail.com', '0975.396.587', 0),
(13, 'nghiadzkkk', '123456', NULL, NULL, 'nghiadz65885@gmail.com', NULL, 0),
(14, 'nghiaxinh', '123456', NULL, NULL, 'nghiaxinh@gmail.com', NULL, 0),
(16, 'guest890', '123456', 'Hoang Nghĩa', 'nghe an', 'tk1@gmail.com', '0976396587', 0),
(17, 'guest637', '123456', 'tuan ', 'hn', 'admin@gmail.com', '0334550192', 0),
(18, 'guest831', '123456', '', 'Hòe thị nam từ liêm', 'tk1@gmail.com', '098766323', 0),
(19, 'guest989', '123456', '', 'Hòe thị nam từ liêm', 'tk1@gmail.com', '098766323', 0),
(20, 'guest293', '123456', 'tuan ', 'Hòe thị nam từ liêm', 'tk1@gmail.com', '098766323', 0),
(21, 'guest82', '123456', 'tuan ', 'Hòe thị nam từ liêm', 'tk1@gmail.com', '098766323', 0),
(22, 'guest664', '123456', 'admin', 'hn', 'admin@gmail.com', '098766323', 0),
(23, 'guest147', '123456', 'đặng văn hậu', 'Hòe thị nam từ liêm', 'tk1@gmail.com', '098766323', 0),
(24, 'guest124', '123456', 'đặng văn hậu', 'Hòe thị nam từ liêm', 'tk1@gmail.com', '098766323', 0),
(25, 'guest720', '123456', 'đăng hậu', 'Hòe thị nam từ liêm', 'tk1@gmail.com', '098766323', 0),
(26, 'guest883', '123456', 'hậu test', 'Hòe thị nam từ liêm', 'tk1@gmail.com', '098766323', 0),
(27, 'guest728', '123456', 'hậu test 2', 'Hòe thị nam từ liêm', 'tk1@gmail.com', '098766323', 0),
(28, 'guest657', '123456', 'meomeo', 'Hòe thị nam từ liêm', 'tk1@gmail.com', '098766323', 0),
(29, 'guest543', '123456', 'hậu test3', 'Hòe thị nam từ liêm', 'tk1@gmail.com', '098766323', 0),
(30, 'guest459', '123456', 'hậu test 5', 'Hòe thị nam từ liêm', 'tk1@gmail.com', '098766323', 0),
(31, 'guest856', '123456', '1111', 'Hòe thị nam từ liêm', 'tk1@gmail.com', '098766323', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bill_user` (`iduser`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_sanpham` (`idpro`),
  ADD KEY `fk_cart_bill` (`idbill`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sanpham_dm` (`iddm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `fk_bill_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_bill` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `fk_cart_sanpham` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_dm` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

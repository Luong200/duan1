-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2024 at 07:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `da2222`
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
  `ngaydathang` datetime NOT NULL DEFAULT current_timestamp(),
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
(26, 'Darcy47-192500-05042024', 47, 'nghia', 'tk1@gmail.com', '09654433333', 'trinh van bo', '2024-04-16 00:40:40', '', '', '', 879000, 0, 0, 879000, '4', 0),
(27, 'Darcy48-192543-05042024', 48, 'nghia', 'tk1@gmail.com', '09654433333', 'trinh van bo', '2024-04-09 00:40:38', '', '', '', 3000, 0, 0, 3000, '0', 0),
(28, 'Darcy49-193715-05042024', 49, 'nghia', 'tk1@gmail.com', '09654433333', 'trinh van bo', '2024-04-10 00:40:36', '', '', '', 2000, 0, 0, 2000, '0', 0),
(29, 'Darcy50-193800-05042024', 50, 'nghia', 'tk1@gmail.com', '09654433333', 'trinh van bo', '2024-04-11 00:40:33', '', '', '', 3000, 0, 0, 3000, '0', 0),
(30, 'Darcy51-193854-05042024', 51, 'nghia', 'tk1@gmail.com', '09654433333', 'trinh van bo', '2024-03-06 00:38:54', '', '', '', 0, 0, 0, 0, '0', 0),
(31, 'Darcy52-193912-05042024', 52, 'nghia', 'tk1@gmail.com', '09654433333', 'trinh van bo', '2024-03-06 00:39:12', '', '', '', 3000, 0, 0, 3000, '0', 0),
(32, 'Darcy53-125316-06042024', 53, 'nghia', 'tk1@gmail.com', '09654433333', 'trinh van bo', '2024-04-06 17:53:16', '', '', '', 8000, 0, 0, 8000, '0', 0),
(33, 'Darcy55-050950-08042024', 55, 'Thảo đậu', 'thao1@gmail.com', '0147258369', 'Hà Nội', '2024-04-08 10:09:50', '', '', '', 8000, 0, 0, 8000, '4', 0),
(34, 'Darcy56-052701-08042024', 56, 'Thảo đậu', 'thao1@gmail.com', '0147258369', 'Hà Nội', '2024-04-08 10:27:01', '', '', '', 0, 0, 0, 0, '4', 0),
(35, 'Darcy57-053539-08042024', 57, 'Thảo đậu', 'thao1@gmail.com', '0147258369', 'Hà Nội', '2024-04-08 10:35:39', '', '', '', 0, 0, 0, 0, '4', 0),
(36, 'Darcy58-055955-08042024', 58, 'update', 'thao1@gmail.com', '0147258369', 'Hà Nội', '2024-04-08 10:59:55', '', '', '', 4000, 0, 0, 4000, '0', 0),
(37, 'Darcy59-060409-08042024', 59, 'aaaaaaa', 'thao1@gmail.com', '0147258369', 'Hà Nội', '2024-04-08 11:04:09', '', '', '', 60000, 0, 0, 60000, '0', 0),
(38, 'Darcy60-060505-08042024', 60, 'sadasd', 'thao1@gmail.com', '0147258369', 'Hà Nội', '2024-04-08 11:05:05', '', '', '', 0, 0, 0, 0, '0', 0),
(48, 'Darcy61-062620-08042024', 61, 'abc', 'adc@gmail.com', '012312313', 'nam dinh', '2024-04-08 11:26:20', '', '', '', 60000, 0, 0, 60000, '0', 0),
(49, 'Darcy62-062737-08042024', 62, 'thảo đậu 1', 'thao1@gmail.com', '0147258369', 'Hà Nội', '2024-04-08 11:27:37', '', '', '', 0, 0, 0, 0, '0', 0),
(50, 'Darcy54-063337-08042024', 54, 'thảo đậu', 'thao1@gmail.com', '0147258369', 'Hà Nội', '2024-04-08 11:33:37', '', '', '', 120000, 0, 0, 120000, '0', 0),
(51, 'Darcy54-063557-08042024', 54, 'thảo đậu', 'thao1@gmail.com', '0147258369', 'Hà Nội', '2024-04-08 11:35:57', '', '', '', 30000, 0, 0, 30000, '3', 0),
(52, 'Darcy63-064011-08042024', 63, 'test họ tên', 'test1@gmail.com', '0147258369', 'hà nội', '2024-04-08 11:40:11', '', '', '', 30000, 0, 0, 30000, '4', 0),
(53, 'Darcy63-064441-08042024', 63, 'test1', 'test1@gmail.com', '0147258369', 'Hà Nội', '2024-04-08 11:44:41', '', '', '', 30000, 0, 0, 30000, '4', 0),
(54, 'Darcy63-065147-08042024', 63, 'test1', 'test1@gmail.com', '0147258369', 'Hà Nội', '2024-04-08 11:51:47', '', '', '', 879000, 0, 0, 879000, '0', 0),
(55, 'Darcy63-065926-08042024', 63, 'test1', 'test1@gmail.com', '0147258369', 'Hà Nội', '2024-04-08 11:59:26', '', '', '', 6000, 0, 1800, 4200, '0', 0),
(56, 'Darcy63-070002-08042024', 63, 'test1', 'test1@gmail.com', '0147258369', 'Hà Nội', '2024-04-08 12:00:02', '', '', '', 1758000, 0, 527400, 1230600, '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `idbill` int(11) NOT NULL,
  `id_variants` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `idpro`, `price`, `name`, `img`, `soluong`, `thanhtien`, `idbill`, `id_variants`) VALUES
(28, 15, 879000, 'DEWALT 20V MAX* XR Oscillating Tool Kit', '1711293903_img_12.png', 1, 879000, 26, NULL),
(29, 16, 3000, 'Rokinon Xeen CF 16mm T2.6 Pro Cinema Wide', '1711293485_img_16.png', 1, 3000, 27, 102),
(30, 41, 2000, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked', '1711293326_img_15.png', 1, 2000, 28, 98),
(31, 16, 3000, 'Rokinon Xeen CF 16mm T2.6 Pro Cinema Wide', '1711293485_img_16.png', 1, 3000, 29, 102),
(32, 16, 3000, 'Rokinon Xeen CF 16mm T2.6 Pro Cinema Wide', '1711293485_img_16.png', 1, 3000, 31, 102),
(33, 41, 2000, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked', '1711293326_img_15.png', 4, 8000, 32, 98),
(34, 16, 4000, 'Rokinon Xeen CF 16mm T2.6 Pro Cinema Wide', '1711293485_img_16.png', 2, 8000, 33, 103),
(35, 60, 0, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked', '1711293326_img_15.png', 1, 0, 34, NULL),
(36, 60, 0, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked', '1711293326_img_15.png', 1, 0, 35, NULL),
(37, 41, 4000, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked 2', '1711293326_img_15.png', 1, 4000, 36, 100),
(38, 61, 60000, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked 1', '1711293326_img_15.png', 1, 60000, 37, 107),
(39, 60, 0, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked', '1711293326_img_15.png', 1, 0, 38, NULL),
(40, 61, 60000, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked 1', '1711293326_img_15.png', 1, 60000, 48, 107),
(41, 60, 0, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked', '1711293326_img_15.png', 1, 0, 49, NULL),
(42, 61, 60000, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked 1', '1711293326_img_15.png', 2, 120000, 50, 107),
(43, 61, 30000, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked 1', '1711293326_img_15.png', 1, 30000, 51, 106),
(44, 61, 30000, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked 1', '1711293326_img_15.png', 1, 30000, 52, 106),
(45, 61, 30000, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked 1', '1711293326_img_15.png', 1, 30000, 53, 106),
(46, 48, 879000, 'DEWALT 20V MAX* XR Oscillating Tool Kit', '1711293903_img_12.png', 1, 879000, 54, NULL),
(47, 41, 2000, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked 2', '1711293326_img_15.png', 3, 6000, 55, 98),
(48, 15, 879000, 'DEWALT 20V MAX* XR Oscillating Tool Kit', '1711293903_img_12.png', 2, 1758000, 56, NULL);

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
(1, 'IPHONE', 1, 1),
(2, 'OPPO', 0, 0),
(3, 'Realme', 1, 2),
(4, 'Nokia', 0, 0),
(5, 'Avita', 0, 0),
(6, 'sony', 0, 0),
(7, 'Lg', 0, 0),
(9, 'Dell', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `size` varchar(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `color`, `size`, `price`) VALUES
(1, 38, 'màu đỏ', 'size z', 1000),
(2, 38, 'màu đỏ', 'size i', 2000),
(3, 38, 'màu đỏ', 'size g', 3000),
(4, 38, 'màu tím', 'size z', 4000),
(5, 38, 'màu tím', 'size i', 5000),
(6, 38, 'màu tím', 'size g', 6000),
(7, 38, 'màu vàng', 'size z', 7000),
(8, 38, 'màu vàng', 'size i', 8000),
(9, 38, 'màu vàng', 'size g', 9000),
(98, 41, 'màu a', 'size a', 2000),
(99, 41, 'màu a', 'size b', 3000),
(100, 41, 'màu b', 'size a', 4000),
(101, 41, 'màu b', 'size b', 5000),
(102, 16, 'Màu xanh', 'size 1', 3000),
(103, 16, 'Màu xanh', 'size 2', 4000),
(104, 16, 'Màu đỏ', 'size 1', 1000),
(105, 16, 'Màu đỏ', 'size 2', 2000),
(106, 61, 'xanh', 's', 30000),
(107, 61, 'xanh', 'm', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `create_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `id_user`, `id_bill`, `content`, `rating`, `create_at`) VALUES
(2, 5, 26, 'aaa', 3, '2024-04-06'),
(4, 55, 33, 'sản phẩm dùng ok lắm', 4, '2024-04-08'),
(5, 5, 34, 'abcxx', 3, '2024-04-08'),
(6, 57, 35, 'aaaa', 3, '2024-04-08'),
(7, 63, 52, 'dùng tốt', 4, '2024-04-08'),
(8, 63, 53, 'avc', 5, '2024-04-08');

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
  `iddm` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `create_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `img`, `price`, `view`, `mota`, `bestseller`, `iddm`, `soluong`, `create_at`) VALUES
(15, 'DEWALT 20V MAX* XR Oscillating Tool Kit', '1711293903_img_12.png', 879000, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 4, 20, '2024-04-05'),
(16, 'Rokinon Xeen CF 16mm T2.6 Pro Cinema Wide', '1711293485_img_16.png', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 6, 201, '2024-03-19'),
(41, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked 2', '1711293326_img_15.png', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 9, 20, '2024-03-04'),
(42, 'DEWALT 20V MAX* XR Oscillating Tool Kit', '1711293903_img_12.png', 879000, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 4, 20, '2024-04-05'),
(43, 'Rokinon Xeen CF 16mm T2.6 Pro Cinema Wide', '1711293485_img_16.png', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 6, 201, '2024-03-19'),
(44, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked', '1711293326_img_15.png', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 9, 20, '2024-03-04'),
(45, 'DEWALT 20V MAX* XR Oscillating Tool Kit', '1711293903_img_12.png', 879000, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 4, 20, '2024-04-05'),
(46, 'Rokinon Xeen CF 16mm T2.6 Pro Cinema Wide', '1711293485_img_16.png', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 6, 201, '2024-03-19'),
(47, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked', '1711293326_img_15.png', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 9, 20, '2024-03-04'),
(48, 'DEWALT 20V MAX* XR Oscillating Tool Kit', '1711293903_img_12.png', 879000, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 4, 20, '2024-04-05'),
(49, 'Rokinon Xeen CF 16mm T2.6 Pro Cinema Wide', '1711293485_img_16.png', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 6, 201, '2024-03-19'),
(50, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked', '1711293326_img_15.png', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 9, 20, '2024-03-04'),
(51, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked', '1711293326_img_15.png', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 9, 20, '2024-03-04'),
(52, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked', '1711293326_img_15.png', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 9, 20, '2024-03-04'),
(53, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked', '1711293326_img_15.png', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 9, 20, '2024-03-04'),
(54, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked', '1711293326_img_15.png', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 9, 20, '2024-03-04'),
(55, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked', '1711293326_img_15.png', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 9, 20, '2024-03-04'),
(56, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked', '1711293326_img_15.png', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 9, 20, '2024-03-04'),
(57, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked', '1711293326_img_15.png', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 9, 20, '2024-03-04'),
(58, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked', '1711293326_img_15.png', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 9, 20, '2024-03-04'),
(59, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked', '1711293326_img_15.png', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 9, 20, '2024-03-04'),
(60, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked', '1711293326_img_15.png', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 9, 20, '2024-03-04'),
(61, 'Galaxy S20 FE 5G Cell Phone, Factory Unlocked 1', '1711293326_img_15.png', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp\r\nincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 0, 9, 20, '2024-03-04');

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
(5, 'admin', '123', 'nghia', 'trinh van bo', 'tk1@gmail.com', '09654433333', 1),
(6, 'guest105', '123456', 'nghia', 'trinh van bo', 'tk1@gmail.com', '09654433333', 0),
(7, 'guest191', '123456', 'nghia', 'trinh van bo', 'tk1@gmail.com', '096544333', 0),
(8, 'guest183', '123456', 'nghia', 'trinh van bo', 'tk1@gmail.com', '096544333', 0),
(9, 'guest895', '123456', 'Hoang Danh Nghĩa', 'Bắc Ninh', 'nghia11@gmail.com', '0975.396.587', 0),
(10, 'guest698', '123456', 'Hoang Danh Nghĩa', 'Bắc Ninh', 'nghia11@gmail.com', '0975.396.587', 0),
(16, 'guest890', '123456', 'Hoang Nghĩa', 'nghe an', 'tk1@gmail.com', '0976396587', 0),
(21, 'guest82', '123456', 'tuan ', 'Hòe thị nam từ liêm', 'tk1@gmail.com', '098766323', 0),
(22, 'guest664', '123456', 'admin', 'hn', 'admin@gmail.com', '098766323', 0),
(28, 'guest657', '123456', 'meomeo', 'Hòe thị nam từ liêm', 'tk1@gmail.com', '098766323', 0),
(31, 'guest856', '123456', '1111', 'Hòe thị nam từ liêm', 'tk1@gmail.com', '098766323', 0),
(42, 'guest554', '123456', 'nghia', 'trinh van bo', 'tk1@gmail.com', '09654433333', 0),
(43, 'guest289', '123456', 'nghia', 'trinh van bo', 'tk1@gmail.com', '09654433333', 0),
(45, 'guest463', '123456', 'nghia', 'trinh van bo', 'tk1@gmail.com', '09654433333', 0),
(46, 'guest450', '123456', 'nghia', 'trinh van bo', 'tk1@gmail.com', '09654433333', 0),
(47, 'guest508', '123456', 'nghia', 'trinh van bo', 'tk1@gmail.com', '09654433333', 0),
(48, 'guest845', '123456', 'nghia', 'trinh van bo', 'tk1@gmail.com', '09654433333', 0),
(49, 'guest581', '123456', 'nghia', 'trinh van bo', 'tk1@gmail.com', '09654433333', 0),
(50, 'guest742', '123456', 'nghia', 'trinh van bo', 'tk1@gmail.com', '09654433333', 0),
(51, 'guest811', '123456', 'nghia', 'trinh van bo', 'tk1@gmail.com', '09654433333', 0),
(52, 'guest212', '123456', 'nghia', 'trinh van bo', 'tk1@gmail.com', '09654433333', 0),
(53, 'guest74', '123456', 'nghia', 'trinh van bo', 'tk1@gmail.com', '09654433333', 0),
(54, 'thao', '123456', NULL, 'Hà Nội', 'thao1@gmail.com', '0147258369', 0),
(55, 'guest310', '123456', 'Thảo đậu', 'Hà Nội', 'thao1@gmail.com', '0147258369', 0),
(56, 'guest485', '123456', 'Thảo đậu', 'Hà Nội', 'thao1@gmail.com', '0147258369', 0),
(57, 'guest306', '123456', 'Thảo đậu', 'Hà Nội', 'thao1@gmail.com', '0147258369', 0),
(58, 'guest796', '123456', 'update', 'Hà Nội', 'thao1@gmail.com', '0147258369', 0),
(59, 'guest869', '123456', 'aaaaaaa', 'Hà Nội', 'thao1@gmail.com', '0147258369', 0),
(60, 'guest635', '123456', 'sadasd', 'Hà Nội', 'thao1@gmail.com', '0147258369', 0),
(61, 'guest604', '123456', 'abc', 'nam dinh', 'adc@gmail.com', '012312313', 0),
(62, 'guest845', '123456', 'thảo đậu 1', 'Hà Nội', 'thao1@gmail.com', '0147258369', 0),
(63, 'test1', '123456', 'test1', 'Hà Nội', 'test1@gmail.com', '0147258369', 0);

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `sale_off` int(11) NOT NULL DEFAULT 0,
  `create_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `name`, `code`, `sale_off`, `create_at`) VALUES
(2, 'giảm giá quần 1', 'fa1', 30, '2024-04-06'),
(3, 'Giảm 10%', 'fa2', 10, '2024-04-06');

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
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_products` (`idpro`);

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
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`,`color`,`size`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
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
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

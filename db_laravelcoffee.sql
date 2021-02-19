-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2021 at 09:19 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) NOT NULL,
  `idUser` bigint(20) UNSIGNED NOT NULL,
  `idProduct` bigint(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `star` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `idUser`, `idProduct`, `content`, `star`, `created_at`) VALUES
(32, 17, 2, 'Sản phẩm dùng rất vừa ý , cảm ơn shop', 5, '2019-12-29 11:59:26'),
(33, 1, 2, 'Sản phẩm tốt', 5, '2019-12-29 12:01:30'),
(34, 20, 14, 'sản phẩm tốt', 5, '2019-12-29 15:47:48');

-- --------------------------------------------------------

--
-- Table structure for table `cusinfo`
--

CREATE TABLE `cusinfo` (
  `id` bigint(20) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cusinfo`
--

INSERT INTO `cusinfo` (`id`, `fullName`, `email`, `address`, `phone`, `userId`) VALUES
(1, 'Nguyễn Đức Bảo 2000', 'nguyenducbaokey@gmail.com', 'Hòa Khương', '0788049042', 3),
(2, 'Nguyễn Đức Bảo 2000', 'nguyenducbaokey@gmail.com', 'Hòa Khương', '0788049042', 3),
(3, 'Nguyễn Đức Bảo 2000', 'nguyenducbaokey@gmail.com', 'Hòa Khương', '0788049042', 0),
(4, 'Nguyễn Đức Bảo 2000', 'nguyenducbaokey@gmail.com', 'Hòa Khương', '0788049042', 0),
(6, 'Nguyễn Đức Bảo 2000', 'nguyenducbaokey@gmail.com', 'Hòa Khương', '0788049042', 0),
(7, 'Nguyễn Đức Bảo email', 'nguyenducbaokey@gmail.com', 'Bà Rịa, Vũng Tàu', '0788049042', 0),
(8, 'Nguyễn Đức Bảo email', 'nguyenducbaokey@gmail.com', 'Bà Rịa, Vũng Tàu', '0788049042', 0),
(9, 'Nguyễn Đức Bảo 2000', 'nguyenducbaokey@gmail.com', 'Hòa Khương', '0788049042', 0),
(13, 'Nguyễn Đức Bảo email', 'nguyenducbaokey@gmail.com', 'Bà Rịa, Vũng Tàu', '0788049042', 0),
(20, 'Nguyễn Văn B', 'nguyenvanb@gmail.com', 'Bà Rịa, Vũng Tàu', '0788049042', 3),
(21, 'Nguyễn Văn B', 'nguyenvanb@gmail.com', 'Bà Rịa, Vũng Tàu', '0788049042', 3),
(32, 'Nguyễn Đức Bảo', 'nguyenducbaokey@gmail.com', 'Dương Lâm 1 , Hòa Phong , Hòa Vang', '0788049042', 0),
(33, 'Nguyễn Đức Bảo', 'nguyenducbaokey@gmail.com', 'Dương Lâm 1 , Hòa Phong , Hòa Vang', '0788049042', 0),
(35, 'Nguyễn Đức Bảo', 'nguyenducbaokey@gmail.com', 'Bà Rịa, Vũng Tàu', '0788049042', 0),
(36, 'Nguyễn Đức Bảo', 'nguyenducbaokey@gmail.com', 'Dương Lâm 1 , Hòa Phong , Hòa Vang', '0788049042', 0),
(37, 'Nguyễn Đức Bảo', 'nguyenducbaokey@gmail.com', 'Dương Lâm 1 , Hòa Phong , Hòa Vang', '0788049042', 0),
(38, 'Nguyễn Văn B', 'nguyenducbaokey@gmail.com', 'Bà Rịa, Vũng Tàu', '0788049042', 3),
(39, 'Nguyễn Văn B', 'nguyenducbaokey@gmail.com', 'Dương Lâm , Hòa Phong , Hòa Vang , Đà Nẵng', '0905142486', 3),
(40, 'Trần Công Khoa', 'nguyenducbaokey@gmail.com', 'Thanh Khê , Đà Nẵng', '0905142486', 3),
(41, 'Trần Công Khoa', 'nguyenducbaokey@gmail.com', 'Thanh Khê , Đà Nẵng', '0905142486', 3),
(53, 'Nguyễn Đức Bảo', 'nguyenducbaokey@gmail.com', 'Dương Lâm 1 , Hòa Phong , Hòa Vang', '0905142486', 3),
(56, 'Nguyễn Đức Test', 'ndbao.18it5@sict.udn.vn', 'Hòa Khương , Đà Nẵng', '0905142486', 5),
(57, 'Nguyễn Đức Test', 'ndbao.18it5@sict.udn.vn', 'Hòa Khương , Đà Nẵng', '0905142486', 5),
(60, 'Trịnh Thăng Bình', 'ndbao.18it5@sict.udn.vn', 'Dương Lâm 1 , Hòa Phong , Hòa Vang', '0905624652', 6),
(64, 'Lê Thanh Tùng', 'nguyenducbaokey@gmail.com', 'Hòa Nhơn , Hòa Phong , Đà Nẵng', '0788049999', 7),
(65, 'Lê Thanh Tùng', 'ndbao.18it5@sict.udn.vn', 'Hòa Nhơn , Hòa Phong , Đà Nẵng', '0788049999', 7),
(67, 'Nguyễn Đức Bảo', 'nguyenducbaokey@gmail.com', 'Hòa Phong', '0788049042', 1),
(68, 'Trần Thành', 'nguyenducbaokey@gmail.com', 'Hòa Phong', '0788049556', 1),
(69, 'Bùi Đức Thịnh', 'nguyenducbaokey@gmail.com', 'Hòa Phong', '0788049047', 1),
(70, 'Lê Công Thành', 'nguyenducbaokey@gmail.com', 'Hòa Phong', '0788049043', 1),
(78, 'Tèo Văn Test', 'nguyenducbaokey@gmail.com', 'Dương Lâm 1 , Hòa Phong , Hòa Vang', '0905624652', 20),
(80, 'Lê Trần Công Tài', 'ndbao.18it5@sict.udn.vn', '142 Lê Văn Hiến, Ngũ Hành Sơn, Đà Nẵng', '0788049000', 17),
(81, 'Nguyễn Văn Văn', 'ndbao.18it5@sict.udn.vn', '142 Lê Văn Hiến, Ngũ Hành Sơn, Đà Nẵng', '0788049000', 17),
(82, 'Nguyễn Văn Văn', 'ndbao.18it5@sict.udn.vn', '142 Lê Văn Hiến, Ngũ Hành Sơn, Đà Nẵng', '0788049000', 17),
(83, 'Nguyễn Đức Bảo', 'admin@gmail.com', 'không biết', '0788049042', 2);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `productId` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `productId`) VALUES
(4, 'coffee-tree-so1-2.jpg', 2),
(5, 'coffee-tree-so1-0.jpg', 2),
(6, 'coffee-tree-so1-0.jpg', 3),
(7, 'coffee-tree-so1.jpg', 3),
(10, '2ZWLculi-buon-me-thuot.png', 5),
(11, 'RegCcoffee-tree-so1-2.jpg', 5),
(12, 'dmUJcf-1024x858.jpg', 5),
(13, 'Dw98_robusta-buon-ma-thuot.png', 8),
(14, 'coffee-tree-so1.jpg', 8),
(15, 'ca-phe-coffee-tree-truyen-thong-so-3.png', 7),
(16, 'robusta-buon-ma-thuot.png', 6),
(18, 'jhemera-moka-flavor32013.png', 10),
(19, 'jhemera-moka-flavor32013.png', 10),
(26, 'coffee-tree-so1.jpg', 4),
(27, 'coffee-tree-so1-2.jpg', 4),
(28, 'RegCcoffee-tree-so1-2.jpg', 4),
(39, 'coffee-tree-so1-0.jpg', 14);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` bigint(11) NOT NULL,
  `idOrder` bigint(20) NOT NULL,
  `idProduct` bigint(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `priceProduct` decimal(10,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `idOrder`, `idProduct`, `quantity`, `priceProduct`) VALUES
(103, 53, 2, 1, '200.000'),
(104, 53, 7, 1, '234.000'),
(105, 54, 8, 1, '168.000'),
(106, 54, 7, 1, '234.000'),
(107, 54, 5, 1, '180.000'),
(108, 55, 8, 1, '168.000'),
(109, 55, 7, 1, '234.000'),
(110, 55, 5, 1, '180.000'),
(111, 56, 8, 1, '168.000'),
(112, 56, 4, 1, '240.000'),
(113, 57, 9, 2, '85.000'),
(114, 58, 9, 2, '70.000'),
(115, 59, 9, 5, '70.000'),
(116, 60, 7, 1, '234.000'),
(117, 61, 8, 1, '168.000'),
(118, 61, 10, 1, '200.000'),
(119, 62, 8, 2, '168.000'),
(120, 62, 10, 1, '200.000'),
(121, 62, 5, 1, '180.000'),
(122, 62, 7, 1, '234.000'),
(123, 63, 2, 1, '200.000'),
(124, 63, 7, 1, '234.000'),
(125, 63, 8, 1, '168.000'),
(126, 64, 2, 1, '200.000'),
(127, 64, 7, 1, '234.000'),
(128, 64, 8, 1, '168.000'),
(129, 65, 2, 1, '200.000'),
(130, 65, 7, 1, '234.000'),
(131, 65, 8, 1, '168.000'),
(132, 66, 8, 2, '168.000'),
(133, 67, 9, 1, '80.000'),
(134, 68, 8, 1, '168.000'),
(135, 68, 10, 1, '200.000'),
(136, 69, 9, 2, '80.000'),
(137, 69, 2, 1, '200.000'),
(138, 69, 5, 1, '180.000'),
(139, 69, 7, 2, '234.000'),
(140, 70, 10, 1, '200.000'),
(141, 71, 14, 2, '3000.000'),
(142, 71, 2, 1, '200.000'),
(143, 72, 10, 1, '200.000'),
(144, 73, 2, 1, '200.000'),
(145, 73, 3, 1, '230.000'),
(146, 73, 14, 1, '3000.000'),
(147, 73, 8, 1, '168.000'),
(148, 74, 14, 2, '3000.000'),
(149, 75, 10, 1, '200.000'),
(150, 76, 10, 1, '200.000'),
(151, 76, 8, 1, '168.000'),
(152, 77, 5, 1, '180.000'),
(153, 77, 7, 1, '234.000'),
(154, 78, 5, 1, '180.000'),
(155, 78, 7, 1, '234.000'),
(156, 79, 10, 1, '200.000');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `cusId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `totalPrice` decimal(10,3) NOT NULL,
  `note` varchar(1000) DEFAULT NULL,
  `accId` int(11) DEFAULT NULL,
  `delivered` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cusId`, `created_at`, `totalPrice`, `note`, `accId`, `delivered`) VALUES
(61, 65, '2019-12-17 13:09:27', '368.000', NULL, 7, 1),
(63, 67, '2019-12-17 13:48:07', '602.000', NULL, 1, 1),
(64, 68, '2019-12-17 13:51:24', '602.000', NULL, 1, 1),
(65, 69, '2019-12-17 13:55:21', '602.000', NULL, 1, 1),
(66, 70, '2019-12-18 01:05:46', '336.000', NULL, 1, 1),
(74, 78, '2019-12-29 15:48:06', '6000.000', 'nhanh nha', 20, 0),
(76, 80, '2019-12-30 14:23:28', '368.000', NULL, 17, 0),
(77, 81, '2019-12-30 14:24:16', '414.000', NULL, 17, 0),
(78, 82, '2019-12-30 14:25:17', '414.000', NULL, 17, 0),
(79, 83, '2021-02-18 13:39:25', '200.000', NULL, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `producer`
--

CREATE TABLE `producer` (
  `id` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(2) DEFAULT 0,
  `description` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producer`
--

INSERT INTO `producer` (`id`, `email`, `phoneNumber`, `address`, `name`, `status`, `description`, `created_at`) VALUES
(1, 'trungnguyen@gmail.com', '0905624655', 'Hà Nội đã sửa', 'Trung Nguyên đã sửa', 1, 'Tập đoàn Trung Nguyên là một doanh nghiệp hoạt động trong các lĩnh vực: sản xuất, chế biến, kinh doanh cà phê; nhượng quyền thương hiệu; dịch vụ phân phối, bán lẻ hiện đại và du lịch. Cà phê Trung Nguyên là một trong những thương hiệu nổi tiếng hàng đầu tại Việt Nam và đang có mặt tại hơn 60 quốc gia trên thế giới.', '2019-12-04 07:28:36'),
(2, 'coffeetree.vn@gmail.com', '0906702230', 'Số 25 Ngõ 35, P.Cát Linh, Q.Đống Đa,Hà Nội', 'Coffee Treee 1', 0, 'COFFEETREE LÀ 1 TRONG SỐ ÍT CÔNG TY SỞ HỮU HỆ THỐNG RANG XAY CHUYÊN NGHIỆP NHẬP KHẨU HÀ LAN – một trong những máy rang hiện đại nhất, cho phép kiểm soát chặt chẽ nhiệt độ, thời gian rang, chất lượng các mẻ rang hoàn toàn đồng nhất với nhau.\r\n\r\nTrong 5 năm qua, chúng tôi đã thực hiện sứ mệnh của mình bằng việc giúp đỡ và cung cấp hơn 500+ quán cà phê trên khắp cả nước Việt Nam và nhận những sự hài lòng, phản hồi tốt.', '2019-12-04 07:45:02'),
(3, 'sales@trieunguyencoffee.com', '0968770770', 'Công Ty TNHH Cà Phê Triều Nguyên  Số 120A Lý Thái Tổ, X. Dambri, TP. Bảo Lộc, Lâm Đồng', 'Công Ty TNHH Cà Phê Triều Nguyên', 1, 'Cà Phê Triều Nguyên - Đơn vị sản xuất và chế biến cà phê mang phong cách Á Đông tại vùng đất Lâm Đồng - Trung tâm đặc sản cà phê tại Việt Nam!\r\n➤ Cung cấp:\r\n♥♥ Đa dạng chủng loại: Cà phê Arabica, cà phê Robusta, cà phê Culi, cà phê chồn,..\r\n♥♥ Đa dạng hình thức: Cà phê hạt nhân, cà phê bột, cà phê rang xay.\r\n➤ Cà Phê Triều Nguyên: Hương thơm nhẹ dịu, thanh khiết, vị đắng tự nhiên của cà phê nguyên chất\r\n➤ Đặc biệt: Nhận rang xay cà phê với số lượng lớn.', '2019-12-14 13:06:38'),
(4, 'caphenguyenchat@bizz.com', '0984316292', 'Khu Đô Thị Số 1, P. Đông Ngàn, TX. Từ Sơn, Bắc Ninh', 'Coffee Double T - Nhà Sản Xuất Và Phân Phối Cà Phê Sạch', 1, 'cần tìm đại lý phân phối coffee Double T tại miền Bắc\r\nDouble T - Nhà sản xuất và cung cấp Cà Phê Sạch, Nguyên Chất 100%, Giá Cả Hợp Lý với các sản phẩm chính: Cà phê Arabica, cà phê Robusta Nature, Special, cà phê mít (Liberica - Excelsa), rang mộc pha máy, pha phin,.. đảm bảo:\r\n☑ Rang xay nguyên bản, KHÔNG chất bảo quản, KHÔNG chất phụ gia, KHÔNG hương liệu, giữ được hương vị tự nhiên nhất của cà phê\r\n☑ Hương thơm quyến rũ - Hương vị đậm đà thực thụ cho những người mạnh mẽ\r\n☑ Mẫu mã, thiết kế bao bì có tính thẩm mỹ cao, theo đúng tiêu chuẩn\r\n☑ Đáp ứng đầy đủ mọi nhu cầu của khách hàng về cà phê rang mộc sạch xay cho máy, bất kể số lượng, thời gian giao hàng', '2019-12-14 13:16:03'),
(6, 'vannguyen@avchemera.com', '0912144889', '31 Dân Tộc, P. Tân Thành, Q.Tân Phú, Tp. Hồ Chí Minh (TPHCM)', 'Cà Phê AVC HEMERA', 1, 'Chuyên Sản Xuất, Phân Phối Và Bán Buôn Cà Phê nguyên chất 100%,\r\nSản phẩm: Cà phê Arabica, cà phê Robusta, cà phê Culi, cà phê Chồn, cà phê Espresso, cà phê Moka, cà phê Hazelnut, cà phê Dalat-Gold,..\r\n▲ Phục vụ thị trường trong và ngoài nước như: Đức, Nhật Bản, Nga,..\r\n▲ Đạt giải thưởng Top 100 sản phẩm - dịch vụ tốt nhất vì người tiêu dùng năm 2017\r\n▲ Hương vị thơm ngon, tự nhiên, không chất hóa học, không chất phụ gia độc hại', '2019-12-15 01:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `producerId` int(11) NOT NULL,
  `productCateId` int(11) NOT NULL,
  `price` decimal(15,3) NOT NULL,
  `netWeight` int(11) NOT NULL,
  `roast` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `shelfLife` varchar(255) NOT NULL,
  `particleSize` varchar(100) DEFAULT NULL,
  `taste` varchar(2000) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `ingredient` varchar(255) DEFAULT NULL,
  `sold` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(3) NOT NULL,
  `promotion` decimal(10,3) NOT NULL DEFAULT 0.000,
  `imgOnline` varchar(1000) NOT NULL DEFAULT 'https://firebasestorage.googleapis.com/v0/b/storagedoanandroid.appspot.com/o/14jA_EFty_jhemera-moka-flavor32013.png?alt=media&token=b4e10c69-f67a-4ce8-939c-9d39e6a260c1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `producerId`, `productCateId`, `price`, `netWeight`, `roast`, `image`, `shelfLife`, `particleSize`, `taste`, `quantity`, `ingredient`, `sold`, `status`, `promotion`, `imgOnline`) VALUES
(2, 'Truyền Thống số 1', 2, 5, '213.000', 1000, 'Rang nâu', '7auZ_coffeetree-truyen-thong-so1.png', '6 tháng', 'Hạt sàn 20, tỉ lệ hạt nát 5%.', 'Coffee tree truyền thống số 1 có mùi hương thơm vừa, vị đắng đậm đà thơm ngọt và cafein vừa, chát, hậu vị ngọt.', 92, '100% Cà phê sạch Robusta, Arabica', 7, 1, '200.000', 'https://firebasestorage.googleapis.com/v0/b/storagedoanandroid.appspot.com/o/14jA_EFty_jhemera-moka-flavor32013.png?alt=media&token=b4e10c69-f67a-4ce8-939c-9d39e6a260c1'),
(3, 'Truyền Thống số 2', 2, 5, '245.000', 1000, 'Rang nâu', 'geDc_coffeetree-truyen-thong-so-3.png', '6 tháng', 'Hạt sàn 20, tỉ lệ hạt nát 5%.', 'Coffee tree truyền thống số 2 có mùi hương thơm nồng nàn quyến rủ, vị đắng vừa thơm ngọt và cafein vừa, chát, hậu vị ngọt.', 98, '100% Cà phê sạch Robusta, Arabica', 2, 1, '230.000', 'https://firebasestorage.googleapis.com/v0/b/storagedoanandroid.appspot.com/o/1m13_jhemera-moka-flavor32013.png?alt=media&token=534b7447-4a35-4ca8-a662-91b8d9946e09'),
(4, 'Arabica Cầu Đất', 2, 6, '245.000', 1000, 'Rang Nâu', '5OoT_acoffeetree-truyen-thong-so1.png', '6 tháng', 'Sàn 18, hạt nát <3%', 'Cafe Sạch Arabica Nâu Medium có vị ngọt, chua thanh thoảng và mùi hương thơm nồng, mùi vị thơm ngọt kết hợp với vị đăng nhẹ, cafein thấp, hậu vị ngọt.', 94, '70% Cà phê sạch Arabica, 30% Cà phê sạch Robusta', 1, 1, '240.000', 'https://firebasestorage.googleapis.com/v0/b/storagedoanandroid.appspot.com/o/5OoT_acoffeetree-truyen-thong-so1.png?alt=media&token=6afd57bd-cc4a-4929-870e-a719671909a4'),
(5, 'Culi Buôn Mê Thuột ', 2, 3, '180.000', 1000, 'Rang Nâu', 'GQ8q_culi-buon-me-thuot.png', '6 tháng', 'Hạt sàn 18, tỉ lệ hạt nát <3%', 'Cà phê Sạch Culi Special đặc biệt có vị đắng đậm mạnh, mùi hương nồng, cafein vừa, chát, hậu vị ngọt.', 94, '100% Cà phê Sạch Robusta, Arabica', 5, 1, '0.000', 'https://firebasestorage.googleapis.com/v0/b/storagedoanandroid.appspot.com/o/D7WK_Iuwo_269045252531.jpg?alt=media&token=32b3c8d5-d186-4d9c-9674-9bbe541f409c'),
(6, 'Robusta ', 2, 2, '168.000', 1000, 'Rang Nâu', 'Dw98_robusta-buon-ma-thuot.png', '6 tháng', 'Hạt sàn 18, tỉ lệ hạt nát 5%.', 'Cà phê Sạch Robusta Nâu đặc biệt có vị đắng đậm vừa, mùi hương thơm nhẹ, cafein vừa, chát, hậu vị ngọt.', 0, '100% Café Sạch Robusta', 0, 1, '0.000', 'https://firebasestorage.googleapis.com/v0/b/storagedoanandroid.appspot.com/o/EFty_jhemera-moka-flavor32013.png?alt=media&token=bf32b6a9-ec6d-4381-84dc-2fbbb53a53da'),
(7, 'Truyền Thống số 3', 2, 5, '234.000', 1000, 'Rang Nâu', 'k895_ca-phe-coffee-tree-truyen-thong-so-3.png', '6 tháng', 'Sàn 18, hạt nát <3%', 'Coffee tree truyền thống số 3 có mùi hương thơm nồng nàn quyến rủ, vị đắng đậm đà thơm ngọt và cafein vừa, chát, hậu vị ngọt.', 287, '100% Cà phê sạch Robusta, Arabica', 10, 1, '0.000', 'https://firebasestorage.googleapis.com/v0/b/storagedoanandroid.appspot.com/o/XXmu_jhemera-moka-flavor32013.png?alt=media&token=16a8dfb9-4af8-4903-8219-5100cad6a875'),
(8, 'Arabica Cầu Đất 1', 2, 6, '168.000', 1000, 'Rang Nâu', 'v8um_acoffeetree-truyen-thong-so1.png', '6 tháng', 'Sàn 18, hạt nát <3%', 'ngon lắm', 33, '100 % arabica', 12, 1, '0.000', 'https://firebasestorage.googleapis.com/v0/b/storagedoanandroid.appspot.com/o/k895_ca-phe-coffee-tree-truyen-thong-so-3.png?alt=media&token=9b5d555e-2037-4fb3-aa22-fc91c5d9b19c'),
(10, 'Arabica Đặc Biệt (Cầu Đất) 1', 3, 6, '200.000', 1000, NULL, 'f3SQ_jhemera-moka-flavor32013.png', '6 tháng', NULL, 'ngọt , chát', 5, '100 % arabica', 8, 1, '0.000', 'https://firebasestorage.googleapis.com/v0/b/storagedoanandroid.appspot.com/o/k895_ca-phe-coffee-tree-truyen-thong-so-3.png?alt=media&token=9b5d555e-2037-4fb3-aa22-fc91c5d9b19c'),
(14, 'CÀ PHÊ CHỒN', 6, 10, '3500.000', 250, NULL, 'Iuwo_269045252531.jpg', '6 tháng', NULL, 'Hạt cà phê sau khi vào bao tử Chồn  được kết hợp với một loại enzim trong bao tử nó, phần vỏ thịt của qủa được lên men làm chuyển hóa một số hóa tính trong hạt khiến cho hạt cà phê sau khi rang lên tỏa ngát một hương thơm kỳ lạ.\r\n\r\nTừ đó loại cà phê đặc biệt này được biết tới như một loại xa xỉ phẩm vì số lượng hiếm có cũng như hương vị và những lợi ích mà nó mang lại . Nó được những người giàu và các nhà quý tộc săn lùng và giá của nó trở nên rất đắt đỏ.', -1, 'cà phê chồn 100 %', 5, 1, '3000.000', 'https://firebasestorage.googleapis.com/v0/b/storagedoanandroid.appspot.com/o/k895_ca-phe-coffee-tree-truyen-thong-so-3.png?alt=media&token=9b5d555e-2037-4fb3-aa22-fc91c5d9b19c');

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `status` tinyint(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`id`, `name`, `description`, `status`) VALUES
(2, 'cà phê Robusta 1', 'Đặc điểm:Hạt cà phê Robusta hình bàn cầu tròn và thường là 2 hạt trong 1 trái. Trải qua quá trình chế biến trên dây chuyền thiết bị hiện đại với công nghệ cao tạo cho loại cà phê Robusta có mùi thơm dịu, vị đắng gắt, nước có màu nâu sánh, không chua, hàm lượng cafein vừa đủ đã tạo nên một loại cà phê đặc sắc phù hợp với khẩu vị của người dân Việt Nam.', 1),
(3, 'cà phê Culi', 'Đặc điểm: Hạt cà phê Culi là những hạt cà phê no tròn. Đặc biệt là trong một trái chỉ có duy nhất một hạt. Vị đắng gắt, hương thơm say đắm, hàm lượng cafein cao, nuớc màu đen sánh đó là những gì mà Culi  mang đến. Đó là quá trình kết hợp tinh túy của sự duy nhất.', 1),
(4, 'cà phê Cherry', 'Đặc điểm:Hạt cà phê Cherry mang một đặc điểm và hương vị rất khác lạ của một loài cây trưởng thành dưới nắng và gió của Cao Nguyên. Hạt cà phê vàng, sáng bóng rất đẹp. Khi pha tạo ra mùi thơm thoang thoảng, đặc biệt là vị chua của cherry tạo ra một cảm giác thật sảng khoái. Cherry rất thích hợp với sở thích của phái nữ với sự hòa quyện giữa mùi và vị tạo ra một cảm giác dân dã, cao sang quý phái hòa quyện nhau thât sâu sắc.', 0),
(5, 'Truyền Thống', 'Cà phê thơm ngon hơn khi uống nóng; mùi vị còn nguyên vẹn khi dùng trong thời gian 10-15 ngày kể từ ngày xay hạt; nước pha có nâu cánh gián, không sánh, không kẹo.', 1),
(6, 'Cà phê ARABICA', 'Arabica Cầu Đất có vị chua thanh xen lẫn với vị đắng nhẹ, nước pha màu nước nâu nhạt, trong trẻo của hổ phách. Mùi hương của Arabica rất thanh tao, quý phái, Arabica có mùi của si-rô, mùi của hoa trái, hòa quyện với mùi của mật ong, và cà mùi bánh mì nướng, mùi của cánh đồng rơm buổi trưa hè… Arabica chinh phục những con người sành điệu ẩm thực nhất trên thế giới. Cà phê Arabica là nguyên liệu chính của các hãng cà phê, các thương hiệu cà phê nổi tiếng nhất trên thế giới.', 1),
(8, 'cà phê Robusta culi + arabica', 'cà phê Robusta culi + arabica ngon , ngọt', 1),
(10, 'cà phê Cherry', 'Đặc điểm:Hạt cà phê Cherry mang một đặc điểm và hương vị rất khác lạ của một loài cây trưởng thành dưới nắng và gió của Cao Nguyên. Hạt cà phê vàng, sáng bóng rất đẹp. Khi pha tạo ra mùi thơm thoang thoảng, đặc biệt là vị chua của cherry tạo ra một cảm giác thật sảng khoái. Cherry rất thích hợp với sở thích của phái nữ với sự hòa quyện giữa mùi và vị tạo ra một cảm giác dân dã, cao sang quý phái hòa quyện nhau thât sâu sắc.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` bigint(20) NOT NULL,
  `roleName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `roleName`) VALUES
(1, 'ADMIN'),
(2, 'MANAGER'),
(3, 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roleId` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fullName`, `phoneNumber`, `address`, `emailAddress`, `roleId`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'DucBao', 'Nguyễn Đức Bảo', '0788049042', 'Hòa Phong', 'nguyenducbaokey@gmail.com', 1, NULL, '$2y$10$6m97ybkd1PXtlk2RJPXnZOdD3vVsfnpWNQtTiBNZW3OGMfajIi6Fi', NULL, NULL, '2019-12-16 01:21:32'),
(2, 'Admin', 'Nguyễn Đức Bảo', '0788049042', 'không biết', 'admin@gmail.com', 1, NULL, '$2y$10$fuG/4imP.2Bk2gMIs3xZ9uwZniVhlSrWGh6AZ.AG2LGSt4F3NIybe', NULL, NULL, '2019-12-27 19:53:53'),
(3, 'bebebe', 'Nguyễn Văn B', '0788049042', 'Bà Rịa, Vũng Tàu', 'nguyenvanb@gmail.com', 3, NULL, '$2y$10$ylZDCQg4bUEvgCz8oa8T9e/8CuBTPvqcl9NPiqcVriYBz2mhDredq', NULL, '2019-12-04 02:06:23', '2019-12-04 02:06:23'),
(4, 'duckhanh', 'Nguyễn Đức Khánh kít', '0935155570', 'Dương Lâm 1 , Hòa Phong , Hòa Vang', 'Manager@gmail.com', 2, NULL, '$2y$10$Fas5Wg2W3w9LYh1UAaVi0OaS0K3WKf.0XRewwT54Ep/Kzsoo9fpqi', NULL, '2019-12-04 02:07:00', '2019-12-30 08:39:20'),
(7, 'lethanhtung', 'Lê Thanh Tùng', '0788049999', 'Hòa Nhơn , Hòa Phong , Đà Nẵng', 'tungthanhle@gmail.com', 2, NULL, '$2y$10$omwfZOPSGFNYsNg67DUfg.7VbDzRiAeFqEUKYF91q4eRS6zkMpOFO', NULL, '2019-12-17 05:47:17', '2019-12-17 06:25:07'),
(8, 'DucBao2', 'Nguyen Đức Bảo   2', '0788049042', 'Dương Lâm 1 , Hòa Phong , Hòa Vang', 'nguyenducbaokey2@gmail.com', 1, NULL, '$2y$10$.3YZXlP2vy3c3lbp0/JcC.s66QCyxVa0sto555m2YLcMmrb5Y/Rdy', NULL, '2019-12-17 18:37:16', '2019-12-17 18:37:16'),
(10, 'khoadeptrai', 'Trần Công Khoa', '0708344326', 'Đà Nẵng', 'khoatrandeptrai@gmail.com', 3, NULL, '$2y$10$FEerijOv3CdxoyM2/D8P1O9qsEOMHQ2HM3cgEm9qli4O01BHDi6h.', NULL, '2019-12-26 07:07:18', '2019-12-26 08:04:21'),
(17, 'letrancong', 'Lê Trần Công Tài', '0788049000', '142 Lê Văn Hiến, Ngũ Hành Sơn, Đà Nẵng', 'ndbao.18it5@sict.udn.vn', 3, NULL, '$2y$10$H0fqTvaR82knoWSIOSrIi.HRNA/nv3qsFLJCBmswCw7iFhas18Omy', NULL, '2019-12-26 21:18:11', '2019-12-30 07:23:04'),
(19, 'testAdmin', 'test thêm người dùng', '0788049999', 'testAdmin', 'testAdmin@gmail.com', 3, NULL, '$2y$10$5.fGBakR14vLrY5Xb0N7iueQA6ljx35EYXsntGLEfh9tJBDoJ0E5.', NULL, '2019-12-27 20:48:01', '2019-12-27 20:48:34'),
(20, 'testuser', 'Tèo Văn Test sửa', '0905624652', 'Dương Lâm 1 , Hòa Phong , Hòa Vang', 'teovantest@gmail.com', 3, NULL, '$2y$10$ZpOzY0QsVjXSJsF.kE67BeY/ig/LDmz8lyEOZXFSeJYRRria4/sVO', NULL, '2019-12-29 08:47:03', '2019-12-29 08:50:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProduct` (`idProduct`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `cusinfo`
--
ALTER TABLE `cusinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProduct` (`idProduct`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`emailAddress`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `cusinfo`
--
ALTER TABLE `cusinfo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `producer`
--
ALTER TABLE `producer`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`idProduct`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 05, 2020 at 01:44 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

DROP TABLE IF EXISTS `chitietdonhang`;
CREATE TABLE IF NOT EXISTS `chitietdonhang` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `madonhang` int(11) DEFAULT NULL,
  `masanpham` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `gia` float DEFAULT NULL,
  `giamgia` float DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `ngaycapnhat` datetime DEFAULT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`ma`, `madonhang`, `masanpham`, `soluong`, `gia`, `giamgia`, `trangthai`, `ngaytao`, `ngaycapnhat`) VALUES
(1, 1, 1, 1, NULL, 10, NULL, NULL, NULL),
(2, 1, 2, 1, NULL, 5, NULL, NULL, NULL),
(3, 2, 4, 1, NULL, 0, NULL, NULL, NULL),
(4, 3, 5, 1, NULL, 15, NULL, NULL, NULL),
(5, 4, 10, 3, NULL, 20, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chucnang`
--

DROP TABLE IF EXISTS `chucnang`;
CREATE TABLE IF NOT EXISTS `chucnang` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `lienket` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `macha` int(11) DEFAULT NULL,
  `hienthimenu` int(11) DEFAULT '1',
  `trangthai` int(11) NOT NULL,
  `ngaytao` datetime NOT NULL,
  `ngaycapnhat` datetime NOT NULL,
  `allow` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `chucnang`
--

INSERT INTO `chucnang` (`ma`, `ten`, `lienket`, `macha`, `hienthimenu`, `trangthai`, `ngaytao`, `ngaycapnhat`, `allow`) VALUES
(1, 'Tổng quan', 'index.php?controller=system&action=home', 0, 1, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 1),
(2, 'Quản lý sản xuất', '#', 0, 1, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0),
(3, 'sản phẩm', 'index.php?controller=product&action=index', 2, 1, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0),
(4, 'Thêm', 'index.php?controller=product&action=create', 2, 1, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0),
(5, 'Sửa', 'index.php?controller=product&action=edit', 2, 0, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0),
(6, 'Xóa', 'index.php?controller=product&action=delete', 2, 0, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0),
(7, 'Quản lý bán hàng', '#', 0, 1, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0),
(8, 'Khách hàng', 'index.php?controller=customer&action=index', 7, 1, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0),
(9, 'Thêm', 'index.php?controller=customer&action=create', 7, 1, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0),
(10, 'Sửa', 'index.php?controller=customer&action=edit', 7, 0, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0),
(11, 'Xóa', 'index.php?controller=customer&action=delete', 7, 0, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0),
(12, 'Quản lý user', '#', 0, 1, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0),
(13, 'Phân quyền', 'index.php?controller=role&action=index', 12, 1, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0),
(27, 'Thoát', 'index.php?controller=user&action=logout', 0, 0, 1, '2020-09-04 00:00:00', '2020-09-04 00:00:00', 1),
(28, 'Đăng nhập', 'index.php?controller=user&action=login', 0, 0, 1, '2020-09-04 00:00:00', '2020-09-04 00:00:00', 1),
(29, 'Đăng nhập submit', 'index.php?controller=user&action=loginpost', 0, 0, 1, '2020-09-04 00:00:00', '2020-09-04 00:00:00', 1),
(30, 'Cấp quyền', 'index.php?controller=role&action=edit', 12, 1, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0),
(31, 'ghi quyen', 'index.php?controller=role&action=editpost', 12, 1, 1, '2020-08-31 00:00:00', '2020-08-31 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `ngaydat` datetime DEFAULT NULL,
  `sodonhang` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `makhachhang` int(11) DEFAULT NULL,
  `tongtien` float DEFAULT NULL,
  `phiship` float DEFAULT NULL,
  `trangthaidonhang` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `ngaycapnhat` datetime DEFAULT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`ma`, `ngaydat`, `sodonhang`, `makhachhang`, `tongtien`, `phiship`, `trangthaidonhang`, `trangthai`, `ngaytao`, `ngaycapnhat`) VALUES
(1, '2019-05-21 00:00:00', 'DH001', 1, NULL, 20000, 'Dang ship', NULL, NULL, NULL),
(2, '2019-05-20 00:00:00', 'DH002', 2, NULL, 10000, 'Huy bo', NULL, NULL, NULL),
(3, '2019-05-19 00:00:00', 'DH003', 3, NULL, 50000, 'Da thanh toan', NULL, NULL, NULL),
(4, '2019-05-18 00:00:00', 'DH004', 1, NULL, 0, 'Da thanh toan', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`ma`, `ten`) VALUES
(1, 'Nguyen Hoang Duy'),
(2, 'Nguyen Tien Dung'),
(3, 'Nguyen Ngoc Diem Quynh'),
(4, 'Nguyen Thi Lieu'),
(5, 'Nguyen Hoang An');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

DROP TABLE IF EXISTS `loaisanpham`;
CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `mota` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `macha` int(11) DEFAULT NULL,
  `tieude` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `tukhoa` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `motatimkiem` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `hinhchiase` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `tenrutgon` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `ngaycapnhat` datetime DEFAULT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`ma`, `ten`, `mota`, `icon`, `macha`, `tieude`, `tukhoa`, `motatimkiem`, `hinhchiase`, `tenrutgon`, `trangthai`, `ngaytao`, `ngaycapnhat`) VALUES
(1, 'dien thoai thong minh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(2, 'dien thoai thuong', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(3, 'laptop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(4, 'tablet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(5, 'phu kien', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(6, 'dien may', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(7, 'May lanh', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(8, 'Tivi', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(9, 'May giat', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(10, 'Tu lanh', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

DROP TABLE IF EXISTS `nhacungcap`;
CREATE TABLE IF NOT EXISTS `nhacungcap` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `ngaycapnhat` datetime DEFAULT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`ma`, `ten`, `trangthai`, `ngaytao`, `ngaycapnhat`) VALUES
(1, 'Samsung', 1, NULL, NULL),
(2, 'Nokia', 1, NULL, NULL),
(3, 'Xiaomi', 1, NULL, NULL),
(4, 'Honor', 1, NULL, NULL),
(5, 'iPhone', 1, NULL, NULL),
(6, 'Asus', 1, NULL, NULL),
(7, 'Dell', 1, NULL, NULL),
(8, 'HP', 1, NULL, NULL),
(9, 'Microsoft', 1, NULL, NULL),
(10, 'Zadez', 1, NULL, NULL),
(11, 'ivalue', 1, NULL, NULL),
(12, 'LG', 1, NULL, NULL),
(13, 'PHILIPS ', 1, NULL, NULL),
(14, 'ELECTROLUX', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nhomquantri`
--

DROP TABLE IF EXISTS `nhomquantri`;
CREATE TABLE IF NOT EXISTS `nhomquantri` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `mota` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `ngaycapnhat` datetime DEFAULT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

DROP TABLE IF EXISTS `phanquyen`;
CREATE TABLE IF NOT EXISTS `phanquyen` (
  `machucnang` int(11) NOT NULL,
  `maquantri` int(11) NOT NULL,
  PRIMARY KEY (`machucnang`,`maquantri`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`machucnang`, `maquantri`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(11, 1),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 1),
(30, 2);

-- --------------------------------------------------------

--
-- Table structure for table `quantri`
--

DROP TABLE IF EXISTS `quantri`;
CREATE TABLE IF NOT EXISTS `quantri` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `tendangnhap` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `matkhau` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `manhom` int(11) DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `ngaycapnhat` datetime DEFAULT NULL,
  `avt` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `quantri`
--

INSERT INTO `quantri` (`ma`, `ten`, `tendangnhap`, `matkhau`, `manhom`, `trangthai`, `ngaytao`, `ngaycapnhat`, `avt`) VALUES
(1, 'admin', 'admin', '123456', 1, 1, NULL, NULL, ''),
(2, 'admin2', 'admin2', '123456', 1, 1, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `ma` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `gia` bigint(20) DEFAULT NULL,
  `mota` text COLLATE utf8_vietnamese_ci,
  `hinhdaidien` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `manhacungcap` int(11) DEFAULT NULL,
  `maloai` int(11) DEFAULT NULL,
  `hinhchitiet` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `motachitiet` text COLLATE utf8_vietnamese_ci,
  `mavach` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `tieude` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `tukhoa` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `motatimkiem` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `hinhchiase` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `tenrutgon` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT NULL,
  `soluong` int(11) NOT NULL DEFAULT '0',
  `ngaycapnhat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ma`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`ma`, `ten`, `gia`, `mota`, `hinhdaidien`, `video`, `manhacungcap`, `maloai`, `hinhchitiet`, `motachitiet`, `mavach`, `tieude`, `tukhoa`, `motatimkiem`, `hinhchiase`, `tenrutgon`, `trangthai`, `ngaytao`, `soluong`, `ngaycapnhat`) VALUES
(1, 'Samsung Galaxy A9 2018', 12490000, 'Samsung Galaxy A9 2018 là mẫu smartphone đầu tiên trên thế giới có tới 4 camera chính. Với hệ thống camera thông minh, máy có khả năng chụp ảnh hết sức chuyên nghiệp.', NULL, NULL, 1, 1, NULL, 'Màn hình :1080 x 2220 Pixels 6.3 inches\r\nCamera :24 MP, 10 MP, 8 MP và 5 MP (4 camera) 24.0 MP\r\nPin :3800 mAh\r\nRAM :6 GB\r\nCPU :Qualcomm Snapdragon 660 8 nhân\r\nHĐH:Android 8 (Oreo)', '', NULL, NULL, NULL, NULL, NULL, 1, NULL, 10, '2020-10-05 19:36:54'),
(2, 'Nokia 8.1', 7990000, 'Nâng tầm nhiếp ảnh ở cả camera trước và sau; hệ điều hành Android 9 Pie mới nhất cùng hiệu năng mạnh mẽ, Nokia 8.1 đáp ứng mọi sự kỳ vọng của người dùng.', NULL, NULL, 2, 1, NULL, 'Màn hình :	6.18 inches, 1080 x 2280 Pixels\r\nCamera trước :	20.0 MP\r\nCamera sau :	12.0 MP + 13.0 MP\r\nRAM :	4 GB\r\nBộ nhớ trong :	64 GB\r\nCPU :	Qualcomm Snapdragon 710, 8, 2 x 2.2 GHz & 6x 1.7 GHz\r\nGPU :	Adreno 616\r\nDung lượng pin :	3500 mAh\r\nHệ điều hành :	Android 9\r\nThẻ SIM :	2 SIM Nano (SIM 2 chung khe thẻ nhớ), 2 Sim', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 3, '2020-10-05 19:36:54'),
(3, 'Samsung Galaxy A70', 9290000, 'Chiếc điện thoại dành cho những điều lớn: màn hình lớn, viên pin dung lượng cao; 3 camera độ phân giải “siêu khủng”, Samsung A70 mở ra kỷ nguyên mới cho riêng bạn.', NULL, NULL, 1, 1, NULL, 'Màn hình :	6.7 inchs, 1080 x 2340 Pixels\r\nCamera trước :	32.0Mp\r\nCamera sau :	Chính 32 MP & Phụ 8 MP, 5 MP\r\nRAM :	6 GB\r\nBộ nhớ trong :	128 GB\r\nCPU :	Snapdragon 675 8 nhân 64-bit, 8, 2 nhân 2.0 Ghz & 6 nhân 1.7 Ghz\r\nGPU :	Adreno 612\r\nDung lượng pin :	4,500mAh\r\nHệ điều hành :	Android 9.0 (Pie)\r\nThẻ SIM :	Nano SIM, 2 Sim', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 8, '2020-10-05 19:36:54'),
(4, 'Xiaomi Pocophone F1', 7999000, '\"Ông vua tốc độ\" Pocophone F1 đã xuất hiện, bạn sẽ được tận hưởng tốc độ nhanh nhất, hiệu năng xử lý tuyệt vời nhất trong một mức giá khó tin.', NULL, NULL, 3, 1, NULL, 'Màn hình :	6.18 inches, 1080 x 2280 Pixels\r\nCamera trước :	20.0 MP\r\nCamera sau :	Camera kép 12MP+5MP\r\nRAM :	6 GB\r\nBộ nhớ trong :	64 GB\r\nCPU :	Snapdragon 845, 8, 2.8 GHz\r\nGPU :	Adreno 630\r\nDung lượng pin :	4000 mAh\r\nHệ điều hành :	Android 8\r\nThẻ SIM :	Nano SIM, 2 Sim', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, '2020-10-05 19:36:54'),
(5, 'Xiaomi Mi 8 Lite 128GB', 7490000, 'Xiaomi Mi 8 Lite 128GB có không gian lưu trữ cực lớn, thiết kế sang trọng và cấu hình vượt trội, luôn sẵn sàng cho mọi hoạt động của bạn.', NULL, NULL, 3, 1, NULL, 'Màn hình :	6.22 inches, 1080 x 2040 Pixel\r\nCamera trước :	24.0 MP\r\nCamera sau :	12.0 MP + 5.0 MP\r\nRAM :	6 GB\r\nBộ nhớ trong :	128 GB\r\nCPU :	SnapDragon 660, Octa-Core, 4x2.2 GHz Kryo 260 & 4x1.8 GHz Kryo 260\r\nGPU :	Adreno 512\r\nDung lượng pin :	3300mah\r\nHệ điều hành :	Android 8.1 Oreo (phiên bản Go)\r\nThẻ SIM :	Nano SIM, 2 Sim', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 10, '2020-10-05 19:36:54'),
(6, 'Samsung Galaxy A7 2018 - 128GB ', 6490000, 'Với 3 camera sau, Samsung Galaxy A7 2018 128GB cho bạn thỏa sức sáng tạo trong nhiếp ảnh. Hơn nữa, Galaxy A7 còn phù hợp với giới trẻ bởi thiết kế phong cách và hiệu năng mạnh mẽ.', NULL, NULL, NULL, 1, NULL, 'Màn hình :	6.0 inchs, 1080 x 2220 Pixels\r\nCamera trước :	24.0 MP\r\nCamera sau :	24 MP+8 MP+5 MP (3 camera)\r\nRAM :	6 GB\r\nBộ nhớ trong :	128 GB\r\nCPU :	Exynos 7885 8 nhân 64-bit, 8, 2 nhân 2.2 GHz Cortex-A73 & 6 nhân 1.6 GHz Cortex-A53\r\nGPU :	Mali™ G71\r\nDung lượng pin :	3300 mAh\r\nHệ điều hành :	Android 8 (Oreo)\r\nThẻ SIM :	Nano SIM, 2 Sim', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 5, '2020-10-05 19:36:54'),
(7, 'Xiaomi Mi 8 Lite 64GB', 6690000, 'Một siêu phẩm với thiết kế nổi bật, camera xuất sắc và cấu hình vô cùng mạnh mẽ, Xiaomi Mi 8 Lite là chiếc điện thoại mang trên mình tất cả những gì bạn cần.', NULL, NULL, 3, 1, NULL, 'Màn hình :	6.22 inches, 1080 x 2040 Pixel\r\nCamera trước :	24.0 MP\r\nCamera sau :	12.0 MP + 5.0 MP\r\nRAM :	4 GB\r\nBộ nhớ trong :	64 GB\r\nCPU :	SnapDragon 660, Octa-Core, 4x2.2 GHz Kryo 260 & 4x1.8 GHz Kryo 260\r\nGPU :	Adreno 512\r\nDung lượng pin :	3300mah\r\nHệ điều hành :	Android 8.1 Oreo (phiên bản Go)\r\nThẻ SIM :	Nano SIM, 2 Sim', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 7, '2020-10-05 19:36:54'),
(8, 'Honor 10', 9990000, 'Honor 10, chiếc smartphone sở hữu thiết kế bóng bẩy cuốn hút đi kèm cấu hình mạnh mẽ xuất sắc và khả năng chụp ảnh ưu việt.', NULL, NULL, 4, 1, NULL, 'Màn hình :	5.84\", 1080 x 2280 pixels\r\nCamera trước :	24 MP\r\nCamera sau :	24 MP và 16 MP\r\nRAM :	4 GB\r\nBộ nhớ trong :	128 GB\r\nCPU :	Hisilicon Kirin 970 , 8 nhân, 4 nhân 2.4 GHz Cortex-A73 & 4 nhân 1.8 GHz Cortex-A53\r\nGPU :	Mali-G72 MP12\r\nDung lượng pin :	3400 mAh\r\nHệ điều hành :	Android 8.1 (Oreo)\r\nThẻ SIM :	Nano SIM, 2 Sim, hỗ trợ 4G', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, '2020-10-05 19:36:54'),
(9, 'Honor 8X 128GB', 6990000, 'Honor 8X 128GB là chiếc điện thoại gần như hoàn hảo về mọi khía cạnh với thiết kế độc đáo, bộ nhớ trong cực lớn, màn hình viền mỏng và hiệu năng tuyệt vời.', NULL, NULL, 4, 1, NULL, 'Màn hình :	6.5 inchs, 1080 x 2340 Pixels\r\nCamera trước :	16.0 MP\r\nCamera sau :	20 MP và 2 MP (2 camera)\r\nRAM :	4 GB\r\nBộ nhớ trong :	128 GB\r\nCPU :	Hisilicon Kirin 710, 8, 4 x Cortex-A73 2.2 GHz + 4x Cortex-A53 1.7 GHz\r\nGPU :	Mali-G51 MP4\r\nDung lượng pin :	3750 mAh\r\nHệ điều hành :	Android 8.1\r\nThẻ SIM :	Nano SIM, 2 Sim', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 9, '2020-10-05 19:36:54'),
(10, 'Honor Play', 6590000, 'Một sản phẩm đỉnh cao dành riêng cho game thủ với hiệu năng siêu mạnh và những tối ưu cho chơi game, đó chính là Honor Play.', NULL, NULL, 4, 1, NULL, 'Màn hình :	6.3\", 1080 x 2340 pixels\r\nCamera trước :	16 MP\r\nCamera sau :	16 MP + 2 MP\r\nRAM :	4 GB\r\nBộ nhớ trong :	64 GB\r\nCPU :	Hisilicon Kirin 970, 8 nhân, 4 x 2.36 GHz + 4 x 1.8 GHz\r\nGPU :	Mali-G72 MP12\r\nDung lượng pin :	3750 mAh\r\nHệ điều hành :	Android 8.1 Oreo\r\nThẻ SIM :	Nano, 2 Sim, hỗ trợ 4G', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 6, '2020-10-05 19:36:54'),
(11, 'iPhone 6s Plus 32GB', 9990000, 'Apple iPhone 6s Plus là chiếc iPhone màn hình lớn nhất, cho phép người dùng làm được nhiều việc hơn trên không gian rộng lớn.', NULL, NULL, 5, 1, NULL, 'Màn hình :	1080 x 1920 pixels\r\nCamera trước :	5.0 MP\r\nCamera sau :	12.0 MP\r\nRAM :	2 GB\r\nBộ nhớ trong :	32 GB\r\nCPU :	Apple A9, 2 Nhân, 1.8 GHz\r\nGPU :	PowerVR GT7600\r\nDung lượng pin :	2750mAh\r\nThẻ SIM :	Nano Sim, 1 Sim', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 3, '2020-10-05 19:36:54'),
(12, 'Xiaomi Mi 9 SE 64GB', 8490000, 'Được thiết kế hướng tới những người dùng yêu thích dòng smartphone nhỏ gọn, Xiaomi Mi 9 SE cho phép bạn cầm nắm và mang theo bên mình một cách dễ dàng', NULL, NULL, 3, 1, NULL, 'Màn hình :	5.97 inches, 1080 x 2340 Pixels\r\nCamera trước :	20.0 MP\r\nCamera sau :	48 MP,13 MP +8 MP ( 3 camera )\r\nRAM :	6 GB\r\nBộ nhớ trong :	64 GB\r\nCPU :	Snap dragon 712, 8, 2.3Ghz\r\nGPU :	Adreno 614\r\nDung lượng pin :	3070 mAh\r\nHệ điều hành :	Android 9\r\nThẻ SIM :	Nano SIM, 2 Sim', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 6, '2020-10-05 19:36:54'),
(13, 'Asus VIVOBOOK X507UA-EJ234T/Core i3-7020U', 10590000, 'Asus Vivobook X507UA-EJ234T là sự kết hợp hoàn hảo giữa vẻ đẹp và hiệu năng, khi máy có cấu hình tốt cùng với thiết kế màn hình viền mỏng thời trang.', NULL, NULL, 6, 3, NULL, 'CPU :	Intel, Core i3\r\nRAM :	4 GB, DDR4\r\nỔ cứng :	HDD 5400rpm, HDD: 1 TB SATA3, Hỗ trợ khe cắm SSD M.2 SATA3\r\nMàn hình :	15.6 inchs, 1920 x 1080 Pixels\r\nCard màn hình :	Intel® HD graphics, Tích hợp\r\nCổng kết nối :	LAN : Không, WIFI : 802.11 b/g/n\r\nHệ điều hành :	Windows 10 Home\r\nTrọng lượng :	1.68 Kg\r\nKích thước :	365 x 266 x 21.9 mm', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 3, '2020-10-05 19:36:54'),
(14, 'Dell Inspiron N3567S', 10990000, 'Dell Inspiron N3567S là chiếc máy tính dành cho học sinh, sinh viên và dân văn phòng. Nó có giá bán phải chăng, đi kèm với thiết kế hiện đại, chip Intel thế hệ 7 và màn hình lớn.', NULL, NULL, 7, 3, NULL, 'CPU :	Intel, Core i3\r\nRAM :	4 GB, DDR4\r\nỔ cứng :	HDD, 1 TB\r\nMàn hình :	15.6 inchs, 1366 x 768 Pixels\r\nCard màn hình :	Intel HD Graphics 620, Tích hợp\r\nCổng kết nối :	LAN : 10/100 Mbps Ethernet controller, WIFI : 802.11ac\r\nHệ điều hành :	Ubuntu\r\nTrọng lượng :	2.30 Kg\r\nKích thước :	380 x 260 x 23.65 mm', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 5, '2020-10-05 19:36:54'),
(15, 'HP 15-da0037TX/i3 7020U', 10990000, 'HP 15-da0037TX/i3 7020U là chiếc máy tính sở hữu một thiết kế đơn giản, màn hình lớn, chip xử lý Intel thế hệ thứ 7 và nhiều ưu điểm nữa bên cạnh một mức giá phải chăng.', NULL, NULL, 8, 3, NULL, 'CPU :	Intel, Core i3\r\nRAM :	4 GB, DDR4\r\nỔ cứng :	HDD, 500 GB\r\nMàn hình :	15.6 inchs, 1366 x 768 pixels\r\nCard màn hình :	NVIDIA® GeForce® MX110, Card rời\r\nCổng kết nối :	LAN : Integrated 10/100/1000 GbE LAN, WIFI : 802.11b/g/n (1x1) Wi-Fi® and Bluetooth® 4.2 combo\r\nHệ điều hành :	Windows 10 Home Single Language 64\r\nTrọng lượng :	1.77 Kg\r\nKích thước :	376 x 246 x 22.5 mm', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 5, '2020-10-05 19:36:54'),
(16, 'Asus Vivobook X407UA-BV488T/i3-7020U/4G+16GB Optane/1TB/WIN10 ', 10690000, 'Với công nghệ bộ nhớ Intel Optane, Asus Vivobook X407UA có tốc độ nhanh như ổ cứng SSD và bộ nhớ nhiều của ổ cứng HDD.', NULL, NULL, 6, 3, NULL, 'CPU :	Intel, Core i3\r\nRAM :	4GB + 16GB Optane, DDR4\r\nỔ cứng :	HDD 5400rpm, 1000 GB\r\nMàn hình :	14.0 inchs, 1366 x 768 Pixels\r\nCard màn hình :	Intel HD Graphics, Tích hợp\r\nCổng kết nối :	LAN : Không, WIFI : 802.11 a/b/g/n/ac\r\nHệ điều hành :	Windows 10 Home\r\nTrọng lượng :	1.55 KG\r\nKích thước :	328 x 246 x 21.9 ~22.9 mm (WxDxH)', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 10, '2020-10-05 19:36:54'),
(17, 'Dell Vostro 3568/Core i3-7020U/VTI32072W', 11890000, 'Dell Vostro 3568/Core i3-7020U là chiếc máy tính xách tay 15 inch lý tưởng dành cho người dùng văn phòng và học sinh, sinh viên. Laptop đến với màn hình lớn, bàn phím số và các tính năng bảo mật thiết yếu.', NULL, NULL, 7, 3, NULL, 'CPU :	Intel, Core i3\r\nRAM :	4 GB, DDR4\r\nỔ cứng :	HDD, 1 TB\r\nMàn hình :	15.6 inches, 1366 x 768 pixels\r\nCard màn hình :	Intel® UHD Graphics 620, Tích hợp\r\nCổng kết nối :	LAN : RJ-45- Ethernet port, WIFI : Intel 3165AC - 802.11ac and Bluetooth v4.2 combo\r\nHệ điều hành :	Windows 10 Home Single Language English\r\nTrọng lượng :	2.18 Kg\r\nKích thước :	380 x 260 x 23.65 mm', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 5, '2020-10-05 19:36:54'),
(18, 'HP Pavilion 14-ce1014TU/Core i3-8145U/4GB/500GB/WIN10', 12990000, 'Nếu bạn đang kiếm tìm một chiếc laptop có diện mạo hiện đại sang trọng, được tích hợp nhiều tính năng thú vị và cũng sở hữu hiệu năng ấn tượng thì HP Pavilion 14-ce1014TU chính là sản phẩm tối ưu dành cho bạn.', NULL, NULL, 8, 3, NULL, 'CPU :	Intel, Core i3\r\nRAM :	4 GB, DDR4\r\nỔ cứng :	HDD 5400rpm, 500 GB\r\nMàn hình :	14.0 inchs, 1920 x 1080 Pixels\r\nCard màn hình :	Intel® HD Graphics 600, Tích hợp\r\nCổng kết nối :	LAN : 10/100/1000 Mbps, WIFI : 802.11 b/g/n\r\nHệ điều hành :	Windows 10 Home SL 64\r\nTrọng lượng :	1,53kg\r\nKích thước :	Dài 324 mm - Rộng 227.6 mm - Dày 19.9 mm', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 6, '2020-10-05 19:36:54'),
(19, 'Chuột không dây quang Microsoft 1850', 350000, 'Chuột quang không dây Microsoft 1850 là giải pháp hữu hiệu nhằm thay thế chiếc bàn chuột touchpad của laptop', NULL, NULL, 9, 5, NULL, 'Nút ON/OFF	Để kéo dài tuổi thọ pin, hãy sử dụng công tắc Bật/Tắt để tắt nguồn khi không sử dụng.\r\nChế độ bảo hành	12 tháng 1 đổi 1\r\nMàu sắc	Đen\r\nCác mức DPI	1000\r\nĐặc điểm nổi bật	Nhỏ gọn tinh tế, thiết kế vừa tay cho cả nam và nữ\r\nThời lượng pin	Lên đến 12 tháng\r\nĐộ bền nút bấm	1 triệu lần nhấn\r\nDòng máy tương thích	Máy tính với Windows XP/Vista/7/8/10; Linus; Mac OS\r\nNhu cầu sử dụng	Phổ thông, văn phòng\r\nLoại chuột	Quang, không dây\r\nThương hiệu', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 3, '2020-10-05 19:36:54'),
(20, 'Chuột không dây Zadez M390 Đỏ', 200000, NULL, NULL, NULL, 10, 5, NULL, 'Tính năng	Tiết kiệm pin\r\nKích thước	92*58*32 mm\r\nTrọng lượng	55g\r\nKết nối Bluetooth	Kết nối không dây với băng tần 2.4G\r\nNút ON/OFF	Để kéo dài tuổi thọ pin, hãy sử dụng công tắc Bật/Tắt để tắt nguồn khi không sử dụng.\r\nChế độ bảo hành	12 tháng 1 đổi 1\r\nDòng máy tương thích	Sử dụng cho PC,Laptop\r\nNhu cầu sử dụng	Du lịch, văn phòng\r\nLoại chuột	Quang, không dây\r\nThương hiệu	ZADEZ\r\nMẫu mã	có thiết kế Ergonomic này sẽ giúp giảm tối đa nguy cơ dẫn đến Hội chứng ống cổ tay - là căn bệnh thường gặp đối với nhân viên văn phòng hoặc những người thường xuyên sử dụng máy tính.\r\nMàu sắc	Đỏ\r\nCác mức DPI	Độ phân giải 1000/1200/1600 DPI\r\nĐặc điểm nổi bật	- Khoảng cách kết nối tối đa 10m, góc nhận sóng 360 độ, tiết kiệm năng lượng thông minh - Thiết kế Ergonomic, hạn chế tác động đến cổ tay người dùng - Receiver siêu nhỏ\r\nThời lượng pin', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 9, '2020-10-05 19:36:54'),
(21, 'Adapter Sạc 1A ivalue MT-C-013 Trắng', 120000, NULL, NULL, NULL, 11, 5, NULL, 'Chất liệu	Nhựa ABS\r\nChế độ bảo hành	12 tháng 1 đổi 1\r\nThương hiệu	ivalue\r\nCường độ dòng điện	5V 1A\r\nCổng cáp kết nối	1 Cổng\r\nSố cổng USB	1\r\nDòng máy tương thích	Thiết bị điện thoại và máy tính bảng\r\nTính năng	Sạc và truyền dữ liệu', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 7, '2020-10-05 19:36:54'),
(22, 'LG INVERTER 1 HP V10ENW', 8690000, 'Loại máy lạnh: 1 HP - 1 chiều', NULL, NULL, 12, 7, NULL, ' Loại máy lạnh: 1 HP - 1 chiều\r\n Công nghệ Inverter\r\n Loại gas: R-32\r\n Làm lạnh nhanh\r\n Bảo hành: 24 tháng\r\n Xuất xứ: Thái Lan', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 5, '2020-10-05 19:36:54'),
(23, 'PHILIPS 43 INCH 43PFT5853S | 74', 6990000, 'Màn hình FullHD 43 inch', NULL, NULL, 13, 8, NULL, ' Màn hình FullHD 43 inch\r\n Âm thanh vòm ảo 16W\r\n Pixel Plus HD cải tiến hình ảnh\r\n Kết nối mạng, xem nội dung trực tuyến', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 4, '2020-10-05 19:36:54'),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, '2020-10-05 19:36:54'),
(25, 'moi them', 12000, 'chua co', 'khong biet', 'chua co', 8, 8, NULL, 'chua co', '001', 'abc ', 'abc', 'abc', 'web.sql', 'moi-them', 1, '2019-06-12 12:23:32', 2, '2020-10-05 19:36:54'),
(26, 'moi them', 12000, 'chua co', 'khong biet', 'chua co', 8, 8, NULL, 'chua co', '001', 'abc ', 'abc', 'abc', 'web.sql', 'moi-them', 1, '2019-06-12 12:26:48', 9, '2020-10-05 19:36:54'),
(27, 'asd ád', 234, '<aside>\r\n<h2>Đặc điểm nổi bật của Samsung Galaxy Note 8</h2>\r\n<img src=\"https://cdn.tgdd.vn/Products/Images/42/106211/Slider/vi-vn-1-thiet-ke.jpg\" /><br />\r\n<a href=\"https://www.thegioididong.com/tin-tuc/the-nao-la-man-hinh-tran-canh-cong-2-5d-va-smartphone-khong-vien--958156\" target=\"_blank\">Tìm hiểu thêm</a><br />\r\n<a href=\"https://www.thegioididong.com/tin-tuc/man-hinh-vo-cuc-la-gi-giong-hay-khac-man-hinh-tran-canh--966546\" target=\"_blank\">Tìm hiểu thêm</a><br />\r\n<a href=\"https://www.thegioididong.com/tin-tuc/exynos-8895-sieu-chip-moi-tu-samsung-tien-trinh-10-nm-872364\" target=\"_blank\">Tìm hiểu thêm</a><br />\r\n<a href=\"https://www.thegioididong.com/hoi-dap/che-do-chong-rung-quang-hoc-ois-chup-anh-tren-906416\" target=\"_blank\">Tìm hiểu thêm</a><br />\r\n<a href=\"https://www.thegioididong.com/hoi-dap/che-do-chup-bang-giong-noi-la-gi-907898\" target=\"_blank\">Tìm hiểu thêm</a><br />\r\n<a href=\"https://www.thegioididong.com/tin-tuc/nhung-tinh-nang-chat-cua-s-pen-ma-nguoi-dung-note-8-nen-biet-1028711\" target=\"_blank\">Tìm hiểu thêm</a>\r\n\r\n<p>Bộ sản phẩm chuẩn: Hộp, Sạc, Tai nghe, Sách hướng dẫn, Bút cảm ứng (+Ngòi bút), Cáp, Cây lấy sim, Ốp lưng, Adapter chuyển USB (Type C), Adapter chuyển Micro USB (USB OTG)</p>\r\n</aside>\r\n\r\n<article>\r\n<h2><a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-note8\" target=\"_blank\" title=\"Tham khảo điện thoại Samsung Galaxy Note 8 tại Thegioididong.com\" type=\"Tham khảo điện thoại Samsung Galaxy Note 8 tại Thegioididong.com\">Galaxy Note 8</a> là niềm hy vọng vực lại dòng Note danh tiếng của <a href=\"https://www.thegioididong.com/dtdd-samsung\" target=\"_blank\" title=\"Tham khảo các dòng điện thoại Samsung đang kinh doanh tại Thegioididong.com\" type=\"Tham khảo các dòng điện thoại Samsung đang kinh doanh tại Thegioididong.com\">điện thoại Samsung</a> với diện mạo nam tính, sang trọng. Máy trang bị camera kép xóa phông thời thượng, <a href=\"https://www.thegioididong.com/dtdd?f=man-hinh-tran-vien\" target=\"_blank\" title=\"Tham khảo các dòng điện thoại có thiết kế màn hình tràn viền tại Thegioididong.com\" type=\"Tham khảo các dòng điện thoại có thiết kế màn hình tràn viền tại Thegioididong.com\">màn hình vô cực</a> như trên <a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s8-plus\" target=\"_blank\" title=\"Tham khảo điện thoại Samsung Galaxy S8 Plus tại Thegioididong.com\" type=\"Tham khảo điện thoại Samsung Galaxy S8 Plus tại Thegioididong.com\">S8 Plus</a>, bút S Pen cùng nhiều tính năng mới và nhiều công nghệ được ưu ái.</h2>\r\n\r\n<h3>Màn hình vô cực hiện đại tiên tiến</h3>\r\n\r\n<p>Dù được giới thiệu là màn hình lên tới 6.3 inch nhưng thực sự khi cầm <a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" title=\"Tham khảo các dòng điện thoại đang kinh doanh tại Thegioididong.com\" type=\"Tham khảo các dòng điện thoại đang kinh doanh tại Thegioididong.com\">điện thoại</a> Note 8 trên tay rất nhỏ gọn nhờ vào công nghệ \"màn hình vô cực\" tiên tiến nhất hiện nay của Samsung.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Files/2017/09/09/1020228/z764741903200_347a0ee08cf7acf973047629cf2c29ac-_2560x1920-800-resize.jpg\" onclick=\"return false;\"><img alt=\"Màn hình điện thoại Samsung Galaxy Note 8\" data-original=\"https://cdn.tgdd.vn/Files/2017/09/09/1020228/z764741903200_347a0ee08cf7acf973047629cf2c29ac-_2560x1920-800-resize.jpg\" src=\"https://cdn.tgdd.vn/Files/2017/09/09/1020228/z764741903200_347a0ee08cf7acf973047629cf2c29ac-_2560x1920-800-resize.jpg\" title=\"Màn hình điện thoại Samsung Galaxy Note 8\" /></a></p>\r\n\r\n<p>Các cạnh bên máy được làm cong đều khiến mình khi cầm có cảm giác ôm tay rất thoải mái và không hề bị cấn.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Files/2017/09/09/1020228/z764741534567_c7686e1d5bdbcd1a1a365182240bd1fd-_2560x1920-800-resize.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế điện thoại Samsung Galaxy Note 8\" data-original=\"https://cdn.tgdd.vn/Files/2017/09/09/1020228/z764741534567_c7686e1d5bdbcd1a1a365182240bd1fd-_2560x1920-800-resize.jpg\" src=\"https://cdn.tgdd.vn/Files/2017/09/09/1020228/z764741534567_c7686e1d5bdbcd1a1a365182240bd1fd-_2560x1920-800-resize.jpg\" title=\"Thiết kế điện thoại Samsung Galaxy Note 8\" /></a></p>\r\n\r\n<p>Cả mặt trước và mặt sau máy đều được phủ kín bằng lớp kính phản chiếu rất đẹp như đã từng xuất hiện ở bộ đôi S8/S8+.</p>\r\n\r\n<p>Và màn hình 2K+ trên Note 8 hoạt động tốt, góc nhìn sắc nét.</p>\r\n\r\n<p></p>\r\n\r\n<p><b>❝</b>Điện thoại kiểu dáng nam tính, thiết kế gọn và mỏng hơn những dòng note trước... cảm thấy rất thích thú khi sở hữu chiếc galaxy note 8 này lắm... cám ơn SAMSUNG rất nhiều.<b>❞</b></p>\r\n<b>La Tuấn Huỳnh</b> - Q.5, TP.HCM<label>Đã mua tại Thế giới di động</label></article>\r\n', 'đá ', 'fdwef', 1, 1, NULL, '<aside>\r\n<h2>Đặc điểm nổi bật của Samsung Galaxy Note 8</h2>\r\n<img src=\"https://cdn.tgdd.vn/Products/Images/42/106211/Slider/vi-vn-1-thiet-ke.jpg\" /><br />\r\n<a href=\"https://www.thegioididong.com/tin-tuc/the-nao-la-man-hinh-tran-canh-cong-2-5d-va-smartphone-khong-vien--958156\" target=\"_blank\">Tìm hiểu thêm</a><br />\r\n<a href=\"https://www.thegioididong.com/tin-tuc/man-hinh-vo-cuc-la-gi-giong-hay-khac-man-hinh-tran-canh--966546\" target=\"_blank\">Tìm hiểu thêm</a><br />\r\n<a href=\"https://www.thegioididong.com/tin-tuc/exynos-8895-sieu-chip-moi-tu-samsung-tien-trinh-10-nm-872364\" target=\"_blank\">Tìm hiểu thêm</a><br />\r\n<a href=\"https://www.thegioididong.com/hoi-dap/che-do-chong-rung-quang-hoc-ois-chup-anh-tren-906416\" target=\"_blank\">Tìm hiểu thêm</a><br />\r\n<a href=\"https://www.thegioididong.com/hoi-dap/che-do-chup-bang-giong-noi-la-gi-907898\" target=\"_blank\">Tìm hiểu thêm</a><br />\r\n<a href=\"https://www.thegioididong.com/tin-tuc/nhung-tinh-nang-chat-cua-s-pen-ma-nguoi-dung-note-8-nen-biet-1028711\" target=\"_blank\">Tìm hiểu thêm</a>\r\n\r\n<p>Bộ sản phẩm chuẩn: Hộp, Sạc, Tai nghe, Sách hướng dẫn, Bút cảm ứng (+Ngòi bút), Cáp, Cây lấy sim, Ốp lưng, Adapter chuyển USB (Type C), Adapter chuyển Micro USB (USB OTG)</p>\r\n</aside>\r\n\r\n<article>\r\n<h2><a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-note8\" target=\"_blank\" title=\"Tham khảo điện thoại Samsung Galaxy Note 8 tại Thegioididong.com\" type=\"Tham khảo điện thoại Samsung Galaxy Note 8 tại Thegioididong.com\">Galaxy Note 8</a> là niềm hy vọng vực lại dòng Note danh tiếng của <a href=\"https://www.thegioididong.com/dtdd-samsung\" target=\"_blank\" title=\"Tham khảo các dòng điện thoại Samsung đang kinh doanh tại Thegioididong.com\" type=\"Tham khảo các dòng điện thoại Samsung đang kinh doanh tại Thegioididong.com\">điện thoại Samsung</a> với diện mạo nam tính, sang trọng. Máy trang bị camera kép xóa phông thời thượng, <a href=\"https://www.thegioididong.com/dtdd?f=man-hinh-tran-vien\" target=\"_blank\" title=\"Tham khảo các dòng điện thoại có thiết kế màn hình tràn viền tại Thegioididong.com\" type=\"Tham khảo các dòng điện thoại có thiết kế màn hình tràn viền tại Thegioididong.com\">màn hình vô cực</a> như trên <a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s8-plus\" target=\"_blank\" title=\"Tham khảo điện thoại Samsung Galaxy S8 Plus tại Thegioididong.com\" type=\"Tham khảo điện thoại Samsung Galaxy S8 Plus tại Thegioididong.com\">S8 Plus</a>, bút S Pen cùng nhiều tính năng mới và nhiều công nghệ được ưu ái.</h2>\r\n\r\n<h3>Màn hình vô cực hiện đại tiên tiến</h3>\r\n\r\n<p>Dù được giới thiệu là màn hình lên tới 6.3 inch nhưng thực sự khi cầm <a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" title=\"Tham khảo các dòng điện thoại đang kinh doanh tại Thegioididong.com\" type=\"Tham khảo các dòng điện thoại đang kinh doanh tại Thegioididong.com\">điện thoại</a> Note 8 trên tay rất nhỏ gọn nhờ vào công nghệ \"màn hình vô cực\" tiên tiến nhất hiện nay của Samsung.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Files/2017/09/09/1020228/z764741903200_347a0ee08cf7acf973047629cf2c29ac-_2560x1920-800-resize.jpg\" onclick=\"return false;\"><img alt=\"Màn hình điện thoại Samsung Galaxy Note 8\" data-original=\"https://cdn.tgdd.vn/Files/2017/09/09/1020228/z764741903200_347a0ee08cf7acf973047629cf2c29ac-_2560x1920-800-resize.jpg\" src=\"https://cdn.tgdd.vn/Files/2017/09/09/1020228/z764741903200_347a0ee08cf7acf973047629cf2c29ac-_2560x1920-800-resize.jpg\" title=\"Màn hình điện thoại Samsung Galaxy Note 8\" /></a></p>\r\n\r\n<p>Các cạnh bên máy được làm cong đều khiến mình khi cầm có cảm giác ôm tay rất thoải mái và không hề bị cấn.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Files/2017/09/09/1020228/z764741534567_c7686e1d5bdbcd1a1a365182240bd1fd-_2560x1920-800-resize.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế điện thoại Samsung Galaxy Note 8\" data-original=\"https://cdn.tgdd.vn/Files/2017/09/09/1020228/z764741534567_c7686e1d5bdbcd1a1a365182240bd1fd-_2560x1920-800-resize.jpg\" src=\"https://cdn.tgdd.vn/Files/2017/09/09/1020228/z764741534567_c7686e1d5bdbcd1a1a365182240bd1fd-_2560x1920-800-resize.jpg\" title=\"Thiết kế điện thoại Samsung Galaxy Note 8\" /></a></p>\r\n\r\n<p>Cả mặt trước và mặt sau máy đều được phủ kín bằng lớp kính phản chiếu rất đẹp như đã từng xuất hiện ở bộ đôi S8/S8+.</p>\r\n\r\n<p>Và màn hình 2K+ trên Note 8 hoạt động tốt, góc nhìn sắc nét.</p>\r\n\r\n<p></p>\r\n\r\n<p><b>❝</b>Điện thoại kiểu dáng nam tính, thiết kế gọn và mỏng hơn những dòng note trước... cảm thấy rất thích thú khi sở hữu chiếc galaxy note 8 này lắm... cám ơn SAMSUNG rất nhiều.<b>❞</b></p>\r\n<b>La Tuấn Huỳnh</b> - Q.5, TP.HCM<label>Đã mua tại Thế giới di động</label></article>\r\n', 'ádasd', 'sdf', 'sdf', 'sdf', '', 'asd ád', 1, '2019-06-12 13:23:05', 9, '2020-10-05 19:36:54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

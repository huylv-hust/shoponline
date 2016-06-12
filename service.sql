-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2016 at 06:11 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `name` varchar(550) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category` int(11) DEFAULT NULL,
  `description` text,
  `price` int(11) NOT NULL,
  `color` varchar(250) DEFAULT NULL,
  `caterial` varchar(250) DEFAULT NULL,
  `size` varchar(20) NOT NULL,
  `createby` int(11) DEFAULT NULL,
  `createdate` date DEFAULT NULL,
  `editby` int(11) DEFAULT NULL,
  `editdate` date DEFAULT NULL,
  `totalview` int(11) DEFAULT NULL,
  `sale` tinyint(4) DEFAULT NULL,
  `percent_off` int(11) NOT NULL,
  `Image1` varchar(250) DEFAULT NULL,
  `Image2` varchar(250) DEFAULT NULL,
  `Image3` varchar(260) NOT NULL,
  `Image4` varchar(260) NOT NULL,
  `alias` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `sub_category`, `description`, `price`, `color`, `caterial`, `size`, `createby`, `createdate`, `editby`, `editdate`, `totalview`, `sale`, `percent_off`, `Image1`, `Image2`, `Image3`, `Image4`, `alias`) VALUES
(1, 'Áo khoác mùa hè hà nội', 2, 2, 'abc', 100, 'Vàng', 'catton', '', 0, '2016-01-29', 0, '2016-01-23', 89, 0, 0, '1-ao-khoac.jpg', '1-ao-khoac2.jpg', '', '', 'ao-khoac-mua-he-ha-noi'),
(2, 'Áo khoác choàng lót lông AK-36212', 1, 3, '&Aacute;o kho&aacute;c cho&agrave;ng l&oacute;t l&ocirc;ng AK-36212 &Aacute;o kho&aacute;c cho&agrave;ng l&oacute;t l&ocirc;ng AK-36212', 1600000, 'Vàng', '620.000đGIÁ NY: 1.160.000 đ', '', 0, '2016-01-31', 0, '2016-01-23', 149, 1, 0, '2-ao-khoac-choang-lot-long-ak36212.jpg', '2-ao-khoac-choang-lot-long-ak362122.jpg', 'product32-ao-khoac-choang-lot-long-ak36212.jpg', '', 'aokhoac2'),
(3, 'Áo khoác kaki lót lông AK-31112', 1, 3, '&Aacute;o kho&aacute;c kaki l&oacute;t l&ocirc;ng AK-31112 &Aacute;o kho&aacute;c kaki l&oacute;t l&ocirc;ng AK-31112<br />\n', 110, 'vàng', 'vàng', '', NULL, '2016-01-22', NULL, '2016-01-23', 25, 0, 0, '3-ao-khoac-kaki-lot-long-ak31112.jpg', 'vàng', '', '', 'Ao khoac kaki lot long AK31112'),
(4, 'Áo khoác kaki lót lông AK-31112', 1, 3, '&Aacute;o kho&aacute;c kaki l&oacute;t l&ocirc;ng AK-31112 &Aacute;o kho&aacute;c kaki l&oacute;t l&ocirc;ng AK-31112', 110, 'vàng', 'vàng', '', NULL, '2016-01-22', NULL, '2016-01-23', 20, 0, 0, '4-ao-khoac-kaki-lot-long-ak31112.jpg', 'product24-ao-khoac-kaki-lot-long-ak31112.jpg', '', '', 'Ao khoac kaki lot long AK31112'),
(5, 'Áo khoác kaki lót bông MT-2026', 1, 4, '&Aacute;o kho&aacute;c kaki l&oacute;t b&ocirc;ng MT-2026 &Aacute;o kho&aacute;c kaki l&oacute;t b&ocirc;ng MT-2026', 123456, 'a', 'a', '', NULL, '2016-01-30', NULL, '2016-01-23', 23, 0, 0, '5-ao-khoac-kaki-lot-bong-mt2026.jpg', '5-ao-khoac-kaki-lot-bong-mt20262.jpg', '', '', ''),
(6, 'Áo khoác AK-723', 3, 3, '&Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723', 100, 'vàng', 'Áo khoác AK-723', '', NULL, '2016-02-24', NULL, '2016-01-23', 78, 0, 0, '6-ao-khoac-ak723.jpg', 'product26-ao-khoac-ak723.jpg', 'product36-ao-khoac-ak723.jpg', '', 'ao-khoac-ak723'),
(7, 'Áo khoác AK-112', 2, 1, '&Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723', 100, 'vàng', 'Áo khoác AK-723', '', NULL, '2016-01-22', NULL, '2016-01-23', 12, 0, 0, '7-ao-khoac-ak112.jpg', 'Áo khoác AK-723', '', '', 'ao-khoac-ak112'),
(8, 'Áo khoác AK-7234', 2, 1, '&Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723', 100, 'vàng', 'Áo khoác AK-723', '', NULL, '2016-01-22', NULL, '2016-01-23', 12, 0, 0, '8-ao-khoac-ak7234.jpg', 'product28-ao-khoac-ak7234.jpg', '', '', 'ao-khoac-ak7234'),
(9, 'Áo khoác XK-71', 2, 1, '&Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723', 100, 'vàng', 'Áo khoác AK-723', '', NULL, '2016-02-09', NULL, '2016-01-23', 20, 0, 0, '9-ao-khoac-xk71.jpg', 'Áo khoác AK-723', '', 'product49-ao-khoac-xk71.jpg', 'ao-khoac-xk71'),
(10, 'Áo khoác AK-223', 2, 1, '&Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723', 100, 'vàng', 'Áo khoác AK-723', '', NULL, '2016-01-22', NULL, '2016-01-23', 17, 0, 0, '10-ao-khoac-ak223.jpg', '10-ao-khoac-ak2232.jpg', '', '', 'ao-khoac-ak223'),
(13, 'Áo phong 19', 2, 2, 'tran hạo nam', 101000, 'trắng', 'cotton', '', NULL, '2016-02-29', NULL, NULL, 0, 1, 10, '13-dsd.jpg', NULL, '', '', ''),
(14, 'Áo phông mới 2015', 2, 2, '&Aacute;o ph&ocirc;ng mới 2015', 150000, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 10, 'product114-ao-phong-moi-2015.jpg', NULL, '', '', ''),
(15, 'Áo phông polo', 2, 2, '&Aacute;o ph&ocirc;ng polo', 500000, 'sọc đỏ', 'catton', 'L, XL', NULL, '2016-02-29', NULL, NULL, 39, 1, 15, 'product115-ao-phong-polo.jpg', 'product215-ao-phong-polo.jpg', '', '', ''),
(16, 'Áo phông 14', 2, 2, '&Aacute;o ph&ocirc;ng 14 15', 1110000, 'vàng, trắng', 'Cotton', '', NULL, '2016-02-29', NULL, NULL, 1, 0, 0, 'product116-ao-phong-14.jpg', 'product216-ao-phong-14.jpg', 'product316-ao-phong-14.jpg', '', ''),
(17, 'Áo phong 15', 2, 2, '&Aacute;o phong 15', 100000, 'tim', 'cottton', '', NULL, '0000-00-00', NULL, NULL, 0, 0, 0, 'product117-ao-phong-15.jpg', NULL, '', '', 'ao-phong-15'),
(18, 'Sơ mi dài tay', 2, 1, 'sơ my dai tay', 100000, 'vàng, xanh', 'Cotton', 'L, Xl, M', NULL, '2016-03-04', NULL, NULL, 17, 0, 0, 'product118-so-mi-dai-tay.jpg', 'product218-so-mi-dai-tay.jpg', '', '', 'so-mi-dai-tay'),
(19, ' margin: ', 2, 1, 'hty tgr sbgdf bfg', 100, 'vàng, trắng', 'cotton', 'M, L, XL', NULL, '2016-03-04', NULL, NULL, 4, 0, 5, 'product119-margin.jpg', 'product219-margin.jpg', '', '', ''),
(20, '1 3 5 7 9 12 15 18 21 24 2791', 2, 1, '', 100, 'xanh, trắng', 'Cotton', 'XL,L', NULL, '2016-03-04', NULL, NULL, 140, 0, 0, 'product120-margin-09.jpg', 'product220-margin-09.jpg', '', '', '1-3-5-7-9-12-15-18-21-24-2791'),
(21, 'áo khoác mùa hè catton hà', 2, 1, 'nguy&ecirc;nz', 1, 'xanh, trắng', 'Cotton', 'L, XL', NULL, '2016-03-04', NULL, NULL, 85, 0, 7, 'product121-margin-09-em.jpg', 'product221-margin-09-em.jpg', '', '', 'ao-khoac-mua-he-catton-ha'),
(22, ' margin 0 0', 2, 1, 'aaaaaa', 100000, 'Vàng', 'Cotton', 'L, Xl, M', NULL, '2016-03-04', NULL, NULL, 14, 0, 5, 'product122-margin-0-0.jpg', 'product222-margin-0-0.jpg', 'product322-margin-0-0.jpg', '', ''),
(23, 'sơ mi bò', 2, 1, '<pre>\r\n\\r\\n<strong>margin</strong>: 0.9<strong>em </strong>0<strong>em </strong>0 0;</pre>\r\n\\r\\n', 120000, 'Trắng , xanh', 'jean', 'L, XL', NULL, '2016-03-04', NULL, NULL, 2, 0, 7, 'product123-so-mi-bo.jpg', 'product223-so-mi-bo.jpg', 'product323-so-mi-bo.jpg', 'product423-so-mi-bo.jpg', 'so-mi-bo'),
(24, 'sơ mi 12', 2, 1, 'sơ mi b&ograve;', 1220000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, '2016-03-04', NULL, NULL, 2, 0, 5, 'product124-so-mi-12.jpg', 'product224-so-mi-12.jpg', '', '', 'so-mi-12'),
(25, 'x1', 2, 1, '', 123000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, '2016-03-04', NULL, NULL, 11, 0, 0, 'product125-x1.jpg', 'product225-x1.jpg', '', '', 'x1'),
(26, 'sơ mi bò aaa ', 2, 1, 'aaa&nbsp;', 302000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, '2016-03-04', NULL, NULL, 2, 0, 7, 'product126-so-mi-bo-aaa.jpg', 'product226-so-mi-bo-aaa.jpg', '', '', 'so-mi-bo-aaa'),
(27, 'aaa 1', 2, 1, '', 100000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, '2016-03-04', NULL, NULL, 2, 0, 0, 'product127-aaa-1.jpg', 'product227-aaa-1.jpg', '', '', 'aaa-1'),
(28, 'Áo phông', 2, 2, 'ao moi', 200000, 'xl', 'Cotton', 'L, Xl, M', NULL, '2016-03-04', NULL, NULL, 0, 0, 0, 'product128-ao-phong.jpg', 'product228-ao-phong.jpg', '', '', 'ao-phong'),
(29, 'Áo phông 03', 2, 2, 'ao phong', 300000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, '2016-03-04', NULL, NULL, 1, 0, 0, 'product129-ao-phong-03.jpg', 'product229-ao-phong-03.jpg', '', '', 'ao-phong-03'),
(30, 'Áo phông 09', 2, 2, 'ao phong', 2000000, 'Trắng , xanh', 'cotton', 'L, XL', NULL, '2016-03-04', NULL, NULL, 1, 0, 0, 'product130-ao-phong-09.jpg', NULL, '', '', ''),
(31, 'Áo phông 1', 2, 2, '<a href=\\"http://h2t-shop.com/ao-phong/c8.html\\">Áo ph&ocirc;ng</a>&nbsp;', 321110, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, '2016-03-04', NULL, NULL, 3, 0, 0, 'product131-ao-phong-1.jpg', NULL, '', '', ''),
(32, 'Áo phông 03', 2, 1, 'aa vgb', 199900, 'Trắng , xanh', 'Cotton', 'L, XL', NULL, '2016-03-04', NULL, NULL, 1, 1, 19, 'product132-ao-phong-03.jpg', NULL, '', '', ''),
(33, '12 Áo phông', 2, 1, 'bg vf sd', 1456000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, '2016-03-05', NULL, NULL, 3, 1, 12, 'product133-12-ao-phong.jpg', NULL, '', '', ''),
(34, 'Áo phông 12', 2, 2, '', 120000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, '2016-03-18', NULL, NULL, 10, 1, 6, 'product134-ao-phong-12.jpg', 'product234-ao-phong-12.jpg', '', '', 'ao-phong-12');

-- --------------------------------------------------------

--
-- Table structure for table `regist`
--

CREATE TABLE IF NOT EXISTS `regist` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regist`
--

INSERT INTO `regist` (`id`, `email`, `name`, `token`) VALUES
(1, 'levanhuy93@gmail.com', 'Le Huy', 'ZXlKemFXZHVJam9pYUhWNWJIWWlmUT09ZXlKbGJXRnBiQ0k2SWpUX3MyX0hpTldFelpHVTRaREptWXpBelptTTJOVGxqTXpRM01XSTNaRGN3WVdReklpd2lkR2xIX3MyX1RaU0k2TVRRMk9ERXlORGt5TUN3aWNHRnpjM2R2Y21RaU9pSWlmUT09'),
(2, 'huylv.hedspi@gmail.com', 'hehe', 'ZXlKemFXZHVJam9pYUhWNWJIWWlmUT09ZXlKbGJXRnBiQ0k2SWpUX3MyX0hpTldFelpHVTRaREptWXpBelptTTJOVGxqTXpRM01XSTNaRGN3WVdReklpd2lkR2xIX3MyX1RaU0k2TVRRMk9ERXlORGt5TUN3aWNHRnpjM2R2Y21RaU9pSWlmUT09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `address`, `phone`, `role`) VALUES
(1, 'levanhuy93@gmail.com', '123456', 'Le Huy', '3D Duy Tan, Cau Giay, Ha Noi\r\n', '0984787652', 1),
(2, 'huylv.hedspi@gmail.com', '123456', 'Huy Le', 'Dai Hoc Bach Khoa Ha Noi', '0984787652', 1),
(3, 'vtthomhd@gmail.com', '123456', 'Vu Thom', 'Cau Giay, Ha Noi', '01767347769', 1),
(10, 'thomvt.93@gmail.com', '123456', 'Vu Thom', 'Cau Giay, Ha Noi', '01767347769', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regist`
--
ALTER TABLE `regist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `regist`
--
ALTER TABLE `regist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

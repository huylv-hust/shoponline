--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertise`
--

CREATE TABLE `advertise` (
  `Id` int(11) NOT NULL,
  `Name` varchar(150) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `IsActive` tinyint(1) DEFAULT NULL,
  `Visible` int(11) DEFAULT NULL,
  `Description` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`Id`, `Name`, `Image`, `IsActive`, `Visible`, `Description`) VALUES
(3, 'Banner Quảng Cáo Ngang 1', 'banner-3-banner-quang-cao-ngang-1.jpg', 1, 3, 'Nằm dưới sản phẩm mới');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `Id` int(11) NOT NULL,
  `Name` varchar(150) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `IsActive` tinyint(1) DEFAULT NULL,
  `Visible` int(11) DEFAULT NULL,
  `Description` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`Id`, `Name`, `Image`, `IsActive`, `Visible`, `Description`) VALUES
(1, 'banner trái', 'banner-1-banner-trai.jpg', 1, 1, 'banner bên trái'),
(2, 'banner phải', 'banner-2-banner-phai.jpg', 1, 2, 'banner bên phải'),
(3, 'Banner Quảng Cáo Ngang 1', 'banner-3-banner-quang-cao-ngang-1.jpg', 1, 3, 'Nằm dưới sản phẩm mới'),
(5, '1 trung tam', 'banner-5-1-trung-tam1 trung tam.jpg', 0, 4, 'sdadadasd');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Id` int(11) NOT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `SupplyId` int(11) DEFAULT NULL,
  `Position` int(4) DEFAULT NULL,
  `alias` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Id`, `Name`, `SupplyId`, `Position`, `alias`) VALUES
(1, 'QUẦN', 1, 1, 'quan'),
(2, 'ÁO', 1, 2, 'ao'),
(3, 'GIẦY DÉP', 2, 4, 'giay-dep');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Id` int(11) NOT NULL,
  `ProductId` int(11) DEFAULT NULL,
  `Content` longtext,
  `CreateDate` datetime DEFAULT NULL,
  `Author` varchar(150) DEFAULT NULL,
  `ParentId` int(11) DEFAULT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `Phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`Id`, `ProductId`, `Content`, `CreateDate`, `Author`, `ParentId`, `Email`, `Phone`) VALUES
(1, 1, 'comment 1', '2016-02-26 00:00:00', '1 as', 0, '1', '0912123456'),
(2, 1, 'MIỄN PHÍ GIAO HÀNG TRONG PHẠM VI 10KM', '2016-02-26 00:00:00', '2', 0, '2', ''),
(3, 1, '2', '2016-02-26 00:00:00', '2', 0, '2', ''),
(4, 3, 'noioj dung comment 4dasdad', '2016-02-26 00:00:00', '4', 2, '4', '111111111111'),
(5, 1, 'noi dung comment 5s dasd', '2090-02-27 00:00:00', '41', 0, '41 1', '1'),
(6, 13, 's                        ', '2016-03-01 19:10:00', 's', 0, 's', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE `contactinfo` (
  `Id` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Facebook` varchar(200) NOT NULL,
  `Zalo` varchar(200) NOT NULL,
  `Skype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`Id`, `Address`, `Country`, `Mobile`, `Phone`, `Email`, `Facebook`, `Zalo`, `Skype`) VALUES
(1, 'Thanh xuân', 'Hà Nội', '0945 802 194', '0945 802 194', 'dongvuhtvn@gmail.com', 'Facebook.com', 'dongvu2vn', 'dongvu2vn');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerId` int(11) NOT NULL,
  `Name` varchar(550) DEFAULT NULL,
  `Image` varchar(350) DEFAULT NULL,
  `Links` longtext,
  `Detail` varchar(2500) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Subject` varchar(300) NOT NULL,
  `Createtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id`, `Name`, `Email`, `Mobile`, `Subject`, `Createtime`) VALUES
(1, 'aaaaaaaa', 'a', '1', ' a', '2016-03-04 00:00:00'),
(2, 'vu dinh dong', 'dongvu2vn@gmail.com', '0987 192 209', 'Nếu tham số $length được sử dụng và là một số dương, chuỗi trả về sẽ bao gồm $length ký tự, tính từ vị trí thứ $start (tùy thuộc vào độ dài của chuỗi).\\r\\nNếu tham số $length được sử dụng và là một số âm, chuỗi trả về được tính từ vị trí $start đến vị trí $length (trong đó vị trí $length được tính t', '2016-03-10 00:00:00'),
(4, 'dá', 'sadad', 'dsada', ' sadadad', '2016-03-03 13:20:59'),
(5, 'dá', 'sadad', 'dsada', ' sadadad', '2016-03-03 13:26:00'),
(6, 'h', 'j', 'k', 'm ', '2016-03-04 22:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `imageslide`
--

CREATE TABLE `imageslide` (
  `Id` int(11) NOT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `SlideId` int(1) DEFAULT NULL,
  `IsActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imageslide`
--

INSERT INTO `imageslide` (`Id`, `Image`, `SlideId`, `IsActive`) VALUES
(1, '3-1.jpg', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `intro`
--

CREATE TABLE `intro` (
  `Id` int(11) NOT NULL,
  `Title` text,
  `Content` longtext,
  `Link` varchar(250) DEFAULT NULL,
  `IsActive` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `intro`
--

INSERT INTO `intro` (`Id`, `Title`, `Content`, `Link`, `IsActive`) VALUES
(1, '1', '<h2 style="text-align: center;"><strong>Giới thiệu shop</strong></h2>\r\n<br />\r\n<br />\r\n&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Hiện nay, xu hướng thương mại điện tử đang ph&aacute;t triển rất mạnh, trong tương lai sẽ l&agrave; m&ocirc; h&igrave;nh chủ đạo v&agrave; tất yếu, Quanaoredep.com đ&atilde; tạo n&ecirc;n sự kh&aacute;c biệt bởi ch&iacute;nh h&igrave;nh thức n&agrave;y: Một m&ocirc; h&igrave;nh cửa h&agrave;ng trực tuyến, cung cấp mọi g&oacute;c độ của sản phẩm nhằm gi&uacute;p kh&aacute;ch h&agrave;ng dễ d&agrave;ng chọn lựa sản phẩm y&ecirc;u th&iacute;ch, li&ecirc;n tục cập nhật mẫu m&atilde; đa dạng v&agrave; k&egrave;m theo đ&oacute; l&agrave; phong c&aacute;ch b&aacute;n h&agrave;ng chuy&ecirc;n nghiệp, chu đ&aacute;o gi&uacute;p cho bạn trẻ, những người bận rộn, những người l&agrave;m việc văn ph&ograve;ng kh&ocirc;ng c&oacute; thời gian đi shopping vẫn c&oacute; thể thỏa sức mua sắm. với m&ocirc; h&igrave;nh n&agrave;y ch&uacute;ng t&ocirc;i đ&atilde; v&agrave; đang l&agrave;m h&agrave;i l&ograve;ng tất cả c&aacute;c Kh&aacute;ch h&agrave;ng. Hệ thống b&aacute;n h&agrave;ng của ch&uacute;ng t&ocirc;i xuất hiện ở mọi nơi tr&ecirc;n Internet từ Facebook, Twitter, Goole Plus cho tới 123Mua, Zing Me. Bạn c&oacute; thể t&igrave;m hiểu kỹ hơn để y&ecirc;n t&acirc;m hơn về những sản phẩm cũng như dịch vụ b&aacute;n h&agrave;ng trực tuyến của ch&uacute;ng t&ocirc;i theo những đường dẫn sau đ&acirc;y:\r\n<p>+ Facebook: https://www.facebook.com/quanaoredepdotcom<br />\r\n+ Twitter: https://twitter.com/#!/quanaoredep<br />\r\n+ Google Plus: https://plus.google.com/u/0/b/101521943379319701589/<br />\r\n+ Th&agrave;nh vi&ecirc;n Vip tr&ecirc;n Zing Me : http://me.zing.vn/u/shopquanaoredep<br />\r\n+ Th&agrave;nh vi&ecirc;n Vip tr&ecirc;n 123mua.vn http://www.123mua.vn/shopquanaoredep<br />\r\n&nbsp;</p>\r\n\r\n<h2 style="text-align: center;"><strong>Hướng dẫn order sản phẩm</strong></h2>\r\n&nbsp;\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Hiện nay, xu hướng thương mại điện tử đang ph&aacute;t triển rất mạnh, trong tương lai sẽ l&agrave; m&ocirc; h&igrave;nh chủ đạo v&agrave; tất yếu, Quanaoredep.com đ&atilde; tạo n&ecirc;n sự kh&aacute;c biệt bởi ch&iacute;nh h&igrave;nh thức n&agrave;y: Một m&ocirc; h&igrave;nh cửa h&agrave;ng trực tuyến, cung cấp mọi g&oacute;c độ của sản phẩm nhằm gi&uacute;p kh&aacute;ch h&agrave;ng dễ d&agrave;ng chọn lựa sản phẩm y&ecirc;u th&iacute;ch, li&ecirc;n tục cập nhật mẫu m&atilde; đa dạng v&agrave; k&egrave;m theo đ&oacute; l&agrave; phong c&aacute;ch b&aacute;n h&agrave;ng chuy&ecirc;n nghiệp, chu đ&aacute;o gi&uacute;p cho bạn trẻ, những người bận rộn, những người l&agrave;m việc văn ph&ograve;ng kh&ocirc;ng c&oacute; thời gian đi shopping vẫn c&oacute; thể thỏa sức mua sắm. với m&ocirc; h&igrave;nh n&agrave;y ch&uacute;ng t&ocirc;i đ&atilde; v&agrave; đang l&agrave;m h&agrave;i l&ograve;ng tất cả c&aacute;c Kh&aacute;ch h&agrave;ng. Hệ thống b&aacute;n h&agrave;ng của ch&uacute;ng t&ocirc;i xuất hiện ở mọi nơi tr&ecirc;n Internet từ Facebook, Twitter, Goole Plus cho tới 123Mua, Zing Me. Bạn c&oacute; thể t&igrave;m hiểu kỹ hơn để y&ecirc;n t&acirc;m hơn về những sản phẩm cũng như dịch vụ b&aacute;n h&agrave;ng trực tuyến của ch&uacute;ng t&ocirc;i theo những đường dẫn sau đ&acirc;y:</p>\r\n\r\n<p>+ Facebook: https://www.facebook.com/quanaoredepdotcom<br />\r\n+ Twitter: https://twitter.com/#!/quanaoredep<br />\r\n+ Google Plus: https://plus.google.com/u/0/b/101521943379319701589/<br />\r\n+ Th&agrave;nh vi&ecirc;n Vip tr&ecirc;n Zing Me : http://me.zing.vn/u/shopquanaoredep<br />\r\n+ Th&agrave;nh vi&ecirc;n Vip tr&ecirc;n 123mua.vn http://www.123mua.vn/shopquanaoredep<br />\r\n&nbsp;</p>\r\n\r\n<h2 style="text-align: center;"><strong>Chi ph&iacute; vận chuyển, giao h&agrave;ng v&agrave; thanh to&aacute;n</strong></h2>\r\n\r\n<p><br />\r\nHiện nay, xu hướng thương mại điện tử đang ph&aacute;t triển rất mạnh, trong tương lai sẽ l&agrave; m&ocirc; h&igrave;nh chủ đạo v&agrave; tất yếu, Quanaoredep.com đ&atilde; tạo n&ecirc;n sự kh&aacute;c biệt bởi ch&iacute;nh h&igrave;nh thức n&agrave;y: Một m&ocirc; h&igrave;nh cửa h&agrave;ng trực tuyến, cung cấp mọi g&oacute;c độ của sản phẩm nhằm gi&uacute;p kh&aacute;ch h&agrave;ng dễ d&agrave;ng chọn lựa sản phẩm y&ecirc;u th&iacute;ch, li&ecirc;n tục cập nhật mẫu m&atilde; đa dạng v&agrave; k&egrave;m theo đ&oacute; l&agrave; phong c&aacute;ch b&aacute;n h&agrave;ng chuy&ecirc;n nghiệp, chu đ&aacute;o gi&uacute;p cho bạn trẻ, những người bận rộn, những người l&agrave;m việc văn ph&ograve;ng kh&ocirc;ng c&oacute; thời gian đi shopping vẫn c&oacute; thể thỏa sức mua sắm. với m&ocirc; h&igrave;nh n&agrave;y ch&uacute;ng t&ocirc;i đ&atilde; v&agrave; đang l&agrave;m h&agrave;i l&ograve;ng tất cả c&aacute;c Kh&aacute;ch h&agrave;ng. Hệ thống b&aacute;n h&agrave;ng của ch&uacute;ng t&ocirc;i xuất hiện ở mọi nơi tr&ecirc;n Internet từ Facebook, Twitter, Goole Plus cho tới 123Mua, Zing Me. Bạn c&oacute; thể t&igrave;m hiểu kỹ hơn để y&ecirc;n t&acirc;m hơn về những sản phẩm cũng như dịch vụ b&aacute;n h&agrave;ng trực tuyến của ch&uacute;ng t&ocirc;i theo những đường dẫn sau đ&acirc;y: + Facebook: https://www.facebook.com/quanaoredepdotcom<br />\r\n\\r\\n+ Twitter: https://twitter.com/#!/quanaoredep<br />\r\n\\r\\n+ Google Plus: https://plus.google.com/u/0/b/101521943379319701589/<br />\r\n\\r\\n+ Th&agrave;nh vi&ecirc;n Vip tr&ecirc;n Zing Me : http://me.zing.vn/u/shopquanaoredep<br />\r\n\\r\\n+ Th&agrave;nh vi&ecirc;n Vip tr&ecirc;n 123mua.vn http://www.123mua.vn/shopquanaoredep</p>\r\n\\r\\n', NULL, 1),
(2, 'Nội dung giới thiệu shop', '<h2 style="text-align:center"><strong>Giới thiệu shop</strong></h2>\r\n\r\n<div style="text-align: justify;">&nbsp;</div>\r\n\r\n<div>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Hiện nay, xu hướng thương mại điện tử đang ph&aacute;t triển rất mạnh, trong tương lai sẽ l&agrave; m&ocirc; h&igrave;nh chủ đạo v&agrave; tất yếu, Quanaoredep.com đ&atilde; tạo n&ecirc;n sự kh&aacute;c biệt bởi ch&iacute;nh h&igrave;nh thức n&agrave;y: Một m&ocirc; h&igrave;nh cửa h&agrave;ng trực tuyến, cung cấp mọi g&oacute;c độ của sản phẩm nhằm gi&uacute;p kh&aacute;ch h&agrave;ng dễ d&agrave;ng chọn lựa sản phẩm y&ecirc;u th&iacute;ch, li&ecirc;n tục cập nhật mẫu m&atilde; đa dạng v&agrave; k&egrave;m theo đ&oacute; l&agrave; phong c&aacute;ch b&aacute;n h&agrave;ng chuy&ecirc;n nghiệp, chu đ&aacute;o gi&uacute;p cho bạn trẻ, những người bận rộn, những người l&agrave;m việc văn ph&ograve;ng kh&ocirc;ng c&oacute; thời gian đi shopping vẫn c&oacute; thể thỏa sức mua sắm. với m&ocirc; h&igrave;nh n&agrave;y ch&uacute;ng t&ocirc;i đ&atilde; v&agrave; đang l&agrave;m h&agrave;i l&ograve;ng tất cả c&aacute;c Kh&aacute;ch h&agrave;ng. Hệ thống b&aacute;n h&agrave;ng của ch&uacute;ng t&ocirc;i xuất hiện ở mọi nơi tr&ecirc;n Internet từ Facebook, Twitter, Goole Plus cho tới 123Mua, Zing Me. Bạn c&oacute; thể t&igrave;m hiểu kỹ hơn để y&ecirc;n t&acirc;m hơn về những sản phẩm cũng như dịch vụ b&aacute;n h&agrave;ng trực tuyến của ch&uacute;ng t&ocirc;i theo những đường dẫn sau đ&acirc;y:</div>\r\n\r\n<p style="margin-left: 40px;">+ Facebook: https://www.facebook.com/quanaoredepdotcom<br />\r\n+ Twitter: https://twitter.com/#!/quanaoredep<br />\r\n+ Google Plus: https://plus.google.com/u/0/b/101521943379319701589/<br />\r\n+ Th&agrave;nh vi&ecirc;n Vip tr&ecirc;n Zing Me : http://me.zing.vn/u/shopquanaoredep<br />\r\n+ Th&agrave;nh vi&ecirc;n Vip tr&ecirc;n 123mua.vn http://www.123mua.vn/shopquanaoredep<br />\r\n&nbsp;</p>\r\n\r\n<h2 style="text-align:center"><strong>Hướng dẫn order sản phẩm</strong></h2>\r\n&nbsp;\r\n\r\n<p style="text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Hiện nay, xu hướng thương mại điện tử đang ph&aacute;t triển rất mạnh, trong tương lai sẽ l&agrave; m&ocirc; h&igrave;nh chủ đạo v&agrave; tất yếu, Quanaoredep.com đ&atilde; tạo n&ecirc;n sự kh&aacute;c biệt bởi ch&iacute;nh h&igrave;nh thức n&agrave;y: Một m&ocirc; h&igrave;nh cửa h&agrave;ng trực tuyến, cung cấp mọi g&oacute;c độ của sản phẩm nhằm gi&uacute;p kh&aacute;ch h&agrave;ng dễ d&agrave;ng chọn lựa sản phẩm y&ecirc;u th&iacute;ch, li&ecirc;n tục cập nhật mẫu m&atilde; đa dạng v&agrave; k&egrave;m theo đ&oacute; l&agrave; phong c&aacute;ch b&aacute;n h&agrave;ng chuy&ecirc;n nghiệp, chu đ&aacute;o gi&uacute;p cho bạn trẻ, những người bận rộn, những người l&agrave;m việc văn ph&ograve;ng kh&ocirc;ng c&oacute; thời gian đi shopping vẫn c&oacute; thể thỏa sức mua sắm. với m&ocirc; h&igrave;nh n&agrave;y ch&uacute;ng t&ocirc;i đ&atilde; v&agrave; đang l&agrave;m h&agrave;i l&ograve;ng tất cả c&aacute;c Kh&aacute;ch h&agrave;ng. Hệ thống b&aacute;n h&agrave;ng của ch&uacute;ng t&ocirc;i xuất hiện ở mọi nơi tr&ecirc;n Internet từ Facebook, Twitter, Goole Plus cho tới 123Mua, Zing Me. Bạn c&oacute; thể t&igrave;m hiểu kỹ hơn để y&ecirc;n t&acirc;m hơn về những sản phẩm cũng như dịch vụ b&aacute;n h&agrave;ng trực tuyến của ch&uacute;ng t&ocirc;i theo những đường dẫn sau đ&acirc;y:</p>\r\n\r\n<p style="margin-left: 40px;">+ Facebook: https://www.facebook.com/quanaoredepdotcom<br />\r\n+ Twitter: https://twitter.com/#!/quanaoredep<br />\r\n+ Google Plus: https://plus.google.com/u/0/b/101521943379319701589/<br />\r\n+ Th&agrave;nh vi&ecirc;n Vip tr&ecirc;n Zing Me : http://me.zing.vn/u/shopquanaoredep<br />\r\n+ Th&agrave;nh vi&ecirc;n Vip tr&ecirc;n 123mua.vn http://www.123mua.vn/shopquanaoredep<br />\r\n&nbsp;</p>\r\n\r\n<h2 style="text-align:center"><strong>Chi ph&iacute; vận chuyển, giao h&agrave;ng v&agrave; thanh to&aacute;n</strong></h2>\r\n\r\n<p><br />\r\nHiện nay, xu hướng thương mại điện tử đang ph&aacute;t triển rất mạnh, trong tương lai sẽ l&agrave; m&ocirc; h&igrave;nh chủ đạo v&agrave; tất yếu, Quanaoredep.com đ&atilde; tạo n&ecirc;n sự kh&aacute;c biệt bởi ch&iacute;nh h&igrave;nh thức n&agrave;y: Một m&ocirc; h&igrave;nh cửa h&agrave;ng trực tuyến, cung cấp mọi g&oacute;c độ của sản phẩm nhằm gi&uacute;p kh&aacute;ch h&agrave;ng dễ d&agrave;ng chọn lựa sản phẩm y&ecirc;u th&iacute;ch, li&ecirc;n tục cập nhật mẫu m&atilde; đa dạng v&agrave; k&egrave;m theo đ&oacute; l&agrave; phong c&aacute;ch b&aacute;n h&agrave;ng chuy&ecirc;n nghiệp, chu đ&aacute;o gi&uacute;p cho bạn trẻ, những người bận rộn, những người l&agrave;m việc văn ph&ograve;ng kh&ocirc;ng c&oacute; thời gian đi shopping vẫn c&oacute; thể thỏa sức mua sắm. với m&ocirc; h&igrave;nh n&agrave;y ch&uacute;ng t&ocirc;i đ&atilde; v&agrave; đang l&agrave;m h&agrave;i l&ograve;ng tất cả c&aacute;c Kh&aacute;ch h&agrave;ng. Hệ thống b&aacute;n h&agrave;ng của ch&uacute;ng t&ocirc;i xuất hiện ở mọi nơi tr&ecirc;n Internet từ Facebook, Twitter, Goole Plus cho tới 123Mua, Zing Me. Bạn c&oacute; thể t&igrave;m hiểu kỹ hơn để y&ecirc;n t&acirc;m hơn về những sản phẩm cũng như dịch vụ b&aacute;n h&agrave;ng trực tuyến của ch&uacute;ng t&ocirc;i theo những đường dẫn sau đ&acirc;y: + Facebook: https://www.facebook.com/quanaoredepdotcom<br />\r\n\\r\\n+ Twitter: https://twitter.com/#!/quanaoredep<br />\r\n\\r\\n+ Google Plus: https://plus.google.com/u/0/b/101521943379319701589/<br />\r\n\\r\\n+ Th&agrave;nh vi&ecirc;n Vip tr&ecirc;n Zing Me : http://me.zing.vn/u/shopquanaoredep<br />\r\n\\r\\n+ Th&agrave;nh vi&ecirc;n Vip tr&ecirc;n 123mua.vn http://www.123mua.vn/shopquanaoredep</p>\r\n\\r\\n', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `livesport`
--

CREATE TABLE `livesport` (
  `Id` int(11) NOT NULL,
  `Title` varchar(500) NOT NULL,
  `Link` varchar(300) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Url1` varchar(200) NOT NULL,
  `Url2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `livesport`
--

INSERT INTO `livesport` (`Id`, `Title`, `Link`, `Description`, `Url1`, `Url2`) VALUES
(1, 'Trực tiếp bóng đá C1', 'https://www.youtube.com/embed/QfeISNVwnfY', 'Trực tiếp tr&ecirc;n vtv3', 'http://localhost:8080/ShopOnline/livesport', 'http://localhost:8080/ShopOnline/livesport'),
(2, 'Trực tiếp tennit', 'https://www.youtube.com/embed/QfeISNVwnfY', 'Trực tiếp trên vtv3', 'http://localhost:8080/ShopOnline/livesport', '');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `LogoId` int(11) NOT NULL,
  `Name` varchar(150) DEFAULT NULL,
  `Images` varchar(255) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `IsActive` tinyint(1) DEFAULT NULL,
  `alias` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `MenuId` int(11) NOT NULL,
  `Name` varchar(150) DEFAULT NULL,
  `ParentId` int(11) DEFAULT NULL,
  `URL` varchar(250) DEFAULT NULL,
  `Order` int(11) DEFAULT NULL,
  `IsVisible` tinyint(1) DEFAULT NULL,
  `Desciption` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`MenuId`, `Name`, `ParentId`, `URL`, `Order`, `IsVisible`, `Desciption`) VALUES
(1, 'Trang chủ', NULL, '#', 1, 1, NULL),
(2, 'Sản phẩm', NULL, 'san-pham', 2, 1, NULL),
(3, 'Thời trang nam', 2, 'category.php', 2, 1, NULL),
(4, 'Thời trang nữ', 2, '~/thoi-trang-nu.php', 2, 1, NULL),
(5, 'Quần Jean', 3, '~/quan-jean', 3, 1, NULL),
(6, 'Áo khoác nữ', 4, '~/ao-khoac-nu.php', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Id` int(11) NOT NULL,
  `Customer` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Createtime` datetime NOT NULL,
  `Status` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Cart_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Id`, `Customer`, `Address`, `Phone`, `Createtime`, `Status`, `Email`, `Cart_total`) VALUES
(1, '3', '3243423424324', '0918190234', '2016-03-02 15:45:50', 0, '', 0),
(2, 'a', 'a', '0912123456', '2016-03-02 15:49:55', 0, '', 0),
(3, 'aaa', 'd', '0918190234', '2016-03-02 15:54:52', 0, '', 0),
(4, '1', 'a', '0912123456', '2016-03-02 15:59:48', 0, '', 0),
(5, 'a', 'd', '0912123456', '2016-03-02 20:07:18', 1, '', 0),
(6, 'aaa', 'a', '0912123456', '2016-03-04 12:13:39', 0, '', 0),
(7, 'a', 'b', '0912123456', '2016-03-04 12:17:36', 0, '', 0),
(8, 'a', 'd', '0912123456', '2016-03-04 12:18:28', 0, '', 111091),
(9, 'a', 'a', '0912123456', '2016-03-05 22:09:36', 0, '', 12126),
(10, 'moi rewrite', 'd', '0912123456', '2016-03-10 00:56:00', 0, '', 1000000000),
(11, 'aaa', 'a', '0912123456', '2016-03-10 02:42:47', 0, '', 425000),
(12, 'aaa', 'a', '0912123456', '2016-03-10 10:26:45', 0, '', 1000000000),
(13, '1', 'a', '0912123456', '2016-03-10 10:29:36', 0, '', 1000000000),
(14, 'd', 'd', '0912123456', '2016-03-10 14:32:39', 0, '', 4000000000),
(15, 'a', 'a', '0912123456', '2016-03-10 14:51:48', 0, '', 20000),
(16, 'a', 'a', '0912123456', '2016-03-10 21:37:37', 0, '', 1000000000),
(17, 'a', 'a', '0912123456', '2016-03-10 21:54:39', 0, '', 10000),
(18, 's', 'x', '0918190234', '2016-03-10 21:55:34', 0, '', 60),
(19, '1', 'd', '0918190234', '2016-03-10 21:59:17', 0, '', 10000),
(20, '1', 'a', '0918190234', '2016-03-10 22:00:54', 0, '', 10000),
(21, '1', 'a', '0912123456', '2016-03-10 22:01:19', 0, '', 10000),
(22, '1', 'a', '0912123456', '2016-03-10 22:02:31', 0, '', 100000),
(23, '1', 'd', '0912123456', '2016-03-10 22:07:29', 0, '', 1000000000),
(24, 'a', 'd', '0918190234', '2016-03-10 23:13:06', 0, '', 135000),
(25, 'moi nhat', 'moi nhat', '0912123456', '2016-03-10 23:18:09', 1, '', 425000),
(26, 'a', 'a', '0912123456', '2016-03-10 23:26:21', 1, '', 560000),
(27, 'a', 'd', '0918190234', '2016-03-17 16:43:20', 0, '', 112800);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `Id` int(11) NOT NULL,
  `OrderId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`Id`, `OrderId`, `ProductId`, `Quantity`, `Price`, `Description`) VALUES
(1, 1, 16, 1, 0, ''),
(2, 2, 1, 1, 0, ''),
(3, 3, 16, 1, 0, ''),
(4, 3, 2, 1, 0, ''),
(5, 3, 1, 1, 0, ''),
(6, 4, 1, 1, 1200000, ''),
(7, 5, 6, 1, 100000, ''),
(8, 6, 14, 3, 150000, ''),
(9, 6, 15, 1, 500000, ''),
(10, 7, 16, 1, 111000, ''),
(11, 7, 15, 1, 500000, ''),
(12, 8, 16, 1, 111000, ''),
(13, 8, 13, 1, 101, ''),
(14, 9, 34, 1, 12900, ''),
(15, 10, 20, 1, 1000000000, ''),
(16, 11, 15, 1, 500000, ''),
(17, 12, 20, 1, 1000000000, ''),
(18, 13, 20, 1, 1000000000, ''),
(19, 14, 20, 4, 1000000000, ''),
(20, 15, 21, 2, 10000, ''),
(21, 16, 20, 1, 1000000000, ''),
(22, 16, 6, 1, 100, ''),
(23, 17, 21, 1, 10000, ''),
(24, 18, 29, 2, 30, ''),
(25, 19, 21, 1, 10000, ''),
(26, 20, 21, 1, 10000, ''),
(27, 21, 21, 1, 10000, ''),
(28, 22, 22, 1, 100000, ''),
(29, 23, 20, 1, 1000000000, ''),
(30, 24, 14, 1, 150000, ''),
(31, 25, 15, 1, 500000, ''),
(32, 26, 15, 1, 500000, ''),
(33, 26, 14, 1, 150000, ''),
(34, 27, 34, 1, 120000, '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Name` varchar(550) DEFAULT NULL,
  `TypeId` int(11) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `SupplyId` int(11) DEFAULT NULL,
  `Description` longtext,
  `Price` int(11) NOT NULL,
  `Color` varchar(250) DEFAULT NULL,
  `Material` varchar(250) DEFAULT NULL,
  `Size` varchar(20) NOT NULL,
  `Detail` longtext,
  `CreateBy` int(11) DEFAULT NULL,
  `Createdate` date DEFAULT NULL,
  `EditBy` int(11) DEFAULT NULL,
  `EditDate` date DEFAULT NULL,
  `TotalView` int(11) DEFAULT NULL,
  `isSaleOff` tinyint(1) DEFAULT NULL,
  `Percent_off` int(11) NOT NULL,
  `Image1` varchar(250) DEFAULT NULL,
  `Image2` varchar(250) DEFAULT NULL,
  `Image3` varchar(260) NOT NULL,
  `Image4` varchar(260) NOT NULL,
  `alias` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Name`, `TypeId`, `CategoryId`, `SubCategoryId`, `SupplyId`, `Description`, `Price`, `Color`, `Material`, `Size`, `Detail`, `CreateBy`, `Createdate`, `EditBy`, `EditDate`, `TotalView`, `isSaleOff`, `Percent_off`, `Image1`, `Image2`, `Image3`, `Image4`, `alias`) VALUES
(1, 'Áo khoác mùa hè hà nội', 1, 2, 2, 1, '<img alt="á" src="/ShopOnline/admin/themes/upload/images/799_28_1.jpg" style="height:800px; width:600px" /><img alt="" src="/ShopOnline/admin/themes/upload/images/847_thay_th____2.jpg" style="height:800px; width:600px" /><img alt="" src="/ShopOnline/admin/themes/upload/images/407_0_4_1.jpg" style="height:267px; margin-left:100px; margin-right:100px; width:200px" />vu dinh dong<br />\r\n&nbsp;', 100, 'Vàng', 'catton', '', '1m6 55klg mac cỡ nào đc bạn ơi', 0, '2016-01-29', 0, '2016-01-23', 89, 0, 0, '1-ao-khoac.jpg', '1-ao-khoac2.jpg', '', '', 'ao-khoac-mua-he-ha-noi'),
(2, 'Áo khoác choàng lót lông AK-36212', 1, 1, 3, 1, '&Aacute;o kho&aacute;c cho&agrave;ng l&oacute;t l&ocirc;ng AK-36212 &Aacute;o kho&aacute;c cho&agrave;ng l&oacute;t l&ocirc;ng AK-36212', 1600000, 'Vàng', '620.000đGIÁ NY: 1.160.000 đ', '', '1m6 55klg mac cỡ nào đc bạn ơi', 0, '2016-01-31', 0, '2016-01-23', 149, 1, 0, '2-ao-khoac-choang-lot-long-ak36212.jpg', '2-ao-khoac-choang-lot-long-ak362122.jpg', 'product32-ao-khoac-choang-lot-long-ak36212.jpg', '', 'aokhoac2'),
(3, 'Áo khoác kaki lót lông AK-31112', 2, 1, 3, 1, '&Aacute;o kho&aacute;c kaki l&oacute;t l&ocirc;ng AK-31112 &Aacute;o kho&aacute;c kaki l&oacute;t l&ocirc;ng AK-31112<br />\r\n<img alt="" src="/ShopOnline/admin/themes/upload/images/807_2013606805_1641250346.jpg" style="border-style:solid; border-width:1px; height:371px; margin-left:111px; margin-right:111px; width:400px" /><br />\r\n<img alt="" src="/ShopOnline/admin/themes/upload/images/407_0_4_1.jpg" style="height:400px; margin-left:150px; margin-right:150px; width:300px" />', 110, 'vàng', 'vàng', '', '/public/images/product/aokhoac2.jpg\r\n/public/images/product/aokhoac2.jpg', NULL, '2016-01-22', NULL, '2016-01-23', 25, 0, 0, '3-ao-khoac-kaki-lot-long-ak31112.jpg', 'vàng', '', '', 'Ao khoac kaki lot long AK31112'),
(4, 'Áo khoác kaki lót lông AK-31112', 2, 1, 3, 1, '&Aacute;o kho&aacute;c kaki l&oacute;t l&ocirc;ng AK-31112 &Aacute;o kho&aacute;c kaki l&oacute;t l&ocirc;ng AK-31112', 110, 'vàng', 'vàng', '', '/public/images/product/aokhoac2.jpg\r\n/public/images/product/aokhoac2.jpg', NULL, '2016-01-22', NULL, '2016-01-23', 20, 0, 0, '4-ao-khoac-kaki-lot-long-ak31112.jpg', 'product24-ao-khoac-kaki-lot-long-ak31112.jpg', '', '', 'Ao khoac kaki lot long AK31112'),
(5, 'Áo khoác kaki lót bông MT-2026', 3, 1, 4, 1, '&Aacute;o kho&aacute;c kaki l&oacute;t b&ocirc;ng MT-2026 &Aacute;o kho&aacute;c kaki l&oacute;t b&ocirc;ng MT-2026', 123456, 'a', 'a', '', 'public/images/product/aokhoac2.jpg\r\npublic/images/product/aokhoac2.jpg', NULL, '2016-01-30', NULL, '2016-01-23', 23, 0, 0, '5-ao-khoac-kaki-lot-bong-mt2026.jpg', '5-ao-khoac-kaki-lot-bong-mt20262.jpg', '', '', ''),
(6, 'Áo khoác AK-723', 2, 3, 3, 2, '&Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723', 100, 'vàng', 'Áo khoác AK-723', '', 'Áo khoác AK-723\r\nÁo khoác AK-723\r\nÁo khoác AK-723\r\n', NULL, '2016-02-24', NULL, '2016-01-23', 77, 0, 0, '6-ao-khoac-ak723.jpg', 'product26-ao-khoac-ak723.jpg', 'product36-ao-khoac-ak723.jpg', '', 'ao-khoac-ak723'),
(7, 'Áo khoác AK-112', 2, 2, 1, 2, '&Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723', 100, 'vàng', 'Áo khoác AK-723', '', 'Áo khoác AK-723\r\nÁo khoác AK-723\r\nÁo khoác AK-723\r\n', NULL, '2016-01-22', NULL, '2016-01-23', 12, 0, 0, '7-ao-khoac-ak112.jpg', 'Áo khoác AK-723', '', '', 'ao-khoac-ak112'),
(8, 'Áo khoác AK-7234', 2, 2, 1, 2, '&Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723', 100, 'vàng', 'Áo khoác AK-723', '', 'Áo khoác AK-723\r\nÁo khoác AK-723\r\nÁo khoác AK-723\r\n', NULL, '2016-01-22', NULL, '2016-01-23', 12, 0, 0, '8-ao-khoac-ak7234.jpg', 'product28-ao-khoac-ak7234.jpg', '', '', 'ao-khoac-ak7234'),
(9, 'Áo khoác XK-71', 2, 2, 1, 2, '&Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723', 100, 'vàng', 'Áo khoác AK-723', '', 'Áo khoác AK-723\r\nÁo khoác AK-723\r\nÁo khoác AK-723\r\n', NULL, '2016-02-09', NULL, '2016-01-23', 20, 0, 0, '9-ao-khoac-xk71.jpg', 'Áo khoác AK-723', '', 'product49-ao-khoac-xk71.jpg', 'ao-khoac-xk71'),
(10, 'Áo khoác AK-223', 2, 2, 1, 2, '&Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723 &Aacute;o kho&aacute;c AK-723', 100, 'vàng', 'Áo khoác AK-723', '', 'Áo khoác AK-723\r\nÁo khoác AK-723\r\nÁo khoác AK-723\r\n', NULL, '2016-01-22', NULL, '2016-01-23', 17, 0, 0, '10-ao-khoac-ak223.jpg', '10-ao-khoac-ak2232.jpg', '', '', 'ao-khoac-ak223'),
(13, 'Áo phong 19', 3, 2, 2, NULL, 'tran hạo nam', 101000, 'trắng', 'cotton', '', NULL, NULL, '2016-02-29', NULL, NULL, 0, 1, 10, '13-dsd.jpg', NULL, '', '', ''),
(14, 'Áo phông mới 2015', 3, 2, 2, NULL, '&Aacute;o ph&ocirc;ng mới 2015', 150000, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, 'product114-ao-phong-moi-2015.jpg', NULL, '', '', ''),
(15, 'Áo phông polo', 3, 2, 2, 1, '&Aacute;o ph&ocirc;ng polo', 500000, 'sọc đỏ', 'catton', 'L, XL', NULL, NULL, '2016-02-29', NULL, NULL, 39, 1, 15, 'product115-ao-phong-polo.jpg', 'product215-ao-phong-polo.jpg', '', '', ''),
(16, 'Áo phông 14', 1, 2, 2, NULL, '&Aacute;o ph&ocirc;ng 14 15', 1110000, 'vàng, trắng', 'Cotton', '', NULL, NULL, '2016-02-29', NULL, NULL, 1, 0, 0, 'product116-ao-phong-14.jpg', 'product216-ao-phong-14.jpg', 'product316-ao-phong-14.jpg', '', ''),
(17, 'Áo phong 15', 1, 2, 2, 1, '&Aacute;o phong 15', 100000, 'tim', 'cottton', '', NULL, NULL, '0000-00-00', NULL, NULL, 0, 0, 0, 'product117-ao-phong-15.jpg', NULL, '', '', 'ao-phong-15'),
(18, 'Sơ mi dài tay', 2, 2, 1, NULL, 'sơ my dai tay', 100000, 'vàng, xanh', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-04', NULL, NULL, 17, 0, 0, 'product118-so-mi-dai-tay.jpg', 'product218-so-mi-dai-tay.jpg', '', '', 'so-mi-dai-tay'),
(19, ' margin: ', 3, 2, 1, NULL, 'hty tgr sbgdf bfg', 100, 'vàng, trắng', 'cotton', 'M, L, XL', NULL, NULL, '2016-03-04', NULL, NULL, 4, 0, 5, 'product119-margin.jpg', 'product219-margin.jpg', '', '', ''),
(20, '1 3 5 7 9 12 15 18 21 24 2791', 1, 2, 1, NULL, '', 100, 'xanh, trắng', 'Cotton', 'XL,L', NULL, NULL, '2016-03-04', NULL, NULL, 139, 0, 0, 'product120-margin-09.jpg', 'product220-margin-09.jpg', '', '', '1-3-5-7-9-12-15-18-21-24-2791'),
(21, 'áo khoác mùa hè catton hà', 1, 2, 1, NULL, 'nguy&ecirc;nz', 1, 'xanh, trắng', 'Cotton', 'L, XL', NULL, NULL, '2016-03-04', NULL, NULL, 85, 0, 7, 'product121-margin-09-em.jpg', 'product221-margin-09-em.jpg', '', '', 'ao-khoac-mua-he-catton-ha'),
(22, ' margin 0 0', 1, 2, 1, NULL, 'aaaaaa', 100000, 'Vàng', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-04', NULL, NULL, 14, 0, 5, 'product122-margin-0-0.jpg', 'product222-margin-0-0.jpg', 'product322-margin-0-0.jpg', '', ''),
(23, 'sơ mi bò', 1, 2, 1, NULL, '<pre>\r\n\\r\\n<strong>margin</strong>: 0.9<strong>em </strong>0<strong>em </strong>0 0;</pre>\r\n\\r\\n', 120000, 'Trắng , xanh', 'jean', 'L, XL', NULL, NULL, '2016-03-04', NULL, NULL, 2, 0, 7, 'product123-so-mi-bo.jpg', 'product223-so-mi-bo.jpg', 'product323-so-mi-bo.jpg', 'product423-so-mi-bo.jpg', 'so-mi-bo'),
(24, 'sơ mi 12', 1, 2, 1, NULL, 'sơ mi b&ograve;', 1220000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-04', NULL, NULL, 2, 0, 5, 'product124-so-mi-12.jpg', 'product224-so-mi-12.jpg', '', '', 'so-mi-12'),
(25, 'x1', 1, 2, 1, NULL, '', 123000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-04', NULL, NULL, 11, 0, 0, 'product125-x1.jpg', 'product225-x1.jpg', '', '', 'x1'),
(26, 'sơ mi bò aaa ', 1, 2, 1, NULL, 'aaa&nbsp;', 302000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-04', NULL, NULL, 2, 0, 7, 'product126-so-mi-bo-aaa.jpg', 'product226-so-mi-bo-aaa.jpg', '', '', 'so-mi-bo-aaa'),
(27, 'aaa 1', 1, 2, 1, NULL, '', 100000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-04', NULL, NULL, 1, 0, 0, 'product127-aaa-1.jpg', 'product227-aaa-1.jpg', '', '', 'aaa-1'),
(28, 'Áo phông', 2, 2, 2, NULL, 'ao moi', 200000, 'xl', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-04', NULL, NULL, 0, 0, 0, 'product128-ao-phong.jpg', 'product228-ao-phong.jpg', '', '', 'ao-phong'),
(29, 'Áo phông 03', 2, 2, 2, NULL, 'ao phong', 300000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-04', NULL, NULL, 1, 0, 0, 'product129-ao-phong-03.jpg', 'product229-ao-phong-03.jpg', '', '', 'ao-phong-03'),
(30, 'Áo phông 09', 2, 2, 2, NULL, 'ao phong', 2000000, 'Trắng , xanh', 'cotton', 'L, XL', NULL, NULL, '2016-03-04', NULL, NULL, 1, 0, 0, 'product130-ao-phong-09.jpg', NULL, '', '', ''),
(31, 'Áo phông 1', 2, 2, 2, NULL, '<a href=\\"http://h2t-shop.com/ao-phong/c8.html\\">Áo ph&ocirc;ng</a>&nbsp;', 321110, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-04', NULL, NULL, 3, 0, 0, 'product131-ao-phong-1.jpg', NULL, '', '', ''),
(32, 'Áo phông 03', 3, 2, 1, NULL, 'aa vgb', 199900, 'Trắng , xanh', 'Cotton', 'L, XL', NULL, NULL, '2016-03-04', NULL, NULL, 1, 1, 19, 'product132-ao-phong-03.jpg', NULL, '', '', ''),
(33, '12 Áo phông', 3, 2, 1, NULL, 'bg vf sd', 1456000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-05', NULL, NULL, 3, 1, 12, 'product133-12-ao-phong.jpg', NULL, '', '', ''),
(34, 'Áo phông 12', 3, 2, 2, NULL, '&aacute; a d<br />\r\n<img alt="" src="/ShopOnline/admin/themes/upload/images/407_0_4_1.jpg" style="height:533px; margin-left:100px; margin-right:100px; width:400px" />', 120000, 'Trắng , xanh', 'Cotton', 'L, Xl, M', NULL, NULL, '2016-03-18', NULL, NULL, 10, 1, 6, 'product134-ao-phong-12.jpg', 'product234-ao-phong-12.jpg', '', '', 'ao-phong-12');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `Id` int(11) NOT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`Id`, `Name`, `Description`) VALUES
(1, 'admin', 'a'),
(2, 'user', 'sadad');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `Id` int(11) NOT NULL,
  `Name` varchar(150) DEFAULT NULL,
  `img1` varchar(260) DEFAULT NULL,
  `text1` varchar(500) DEFAULT NULL,
  `img2` varchar(260) DEFAULT NULL,
  `text2` varchar(500) DEFAULT NULL,
  `img3` varchar(260) NOT NULL,
  `text3` varchar(500) NOT NULL,
  `img4` varchar(260) NOT NULL,
  `text4` varchar(500) NOT NULL,
  `img5` varchar(260) NOT NULL,
  `text5` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`Id`, `Name`, `img1`, `text1`, `img2`, `text2`, `img3`, `text3`, `img4`, `text4`, `img5`, `text5`, `status`) VALUES
(1, 'banner trái', 'image1-1-1.jpg', '0', 'image2-1-1.jpg', '0', 'image3-1-banner-trai.jpg', '0', 'image4-1-banner-trai.jpg', '0', 'image5-1-banner-trai.jpg', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `Id` int(11) NOT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `SupplyId` int(11) DEFAULT NULL,
  `Link` varchar(260) DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `pId` int(11) NOT NULL,
  `alias` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`Id`, `Name`, `SupplyId`, `Link`, `CategoryId`, `pId`, `alias`) VALUES
(1, 'Áo Sơ Mi', 1, 'so-mi.php', 2, 0, 'aosomi'),
(2, 'Áo Phông', 1, 'so-mi.php', 2, 0, 'ao-phong'),
(3, 'Quần Bò', 1, NULL, 1, 0, 'jean'),
(4, 'Quần Kaki', 1, NULL, 1, 0, 'quan-kaki'),
(5, 'Sơ Mi Dài Tay', 2, 'so-mi-dai-tay', 2, 1, ''),
(7, 'Vải Giả Bò', 1, NULL, 1, 0, 'quan-au'),
(8, 'Áo Thể Thao', 1, NULL, 2, 0, 'ao-the-thao'),
(9, 'Áo Gió', NULL, 'Áo Gió', 2, 0, 'ao-gio');

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `SupplyId` int(11) NOT NULL,
  `Name` varchar(500) DEFAULT NULL,
  `Logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`SupplyId`, `Name`, `Logo`) VALUES
(1, 'Việt Nam', NULL),
(2, 'Việt Nam', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `alias` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`Id`, `Name`, `Description`, `alias`) VALUES
(1, 'SẢN PHẨM NỔI BẬT', '', 'san-pham-order'),
(2, 'SẢN PHẨM MỚI', '', 'san-pham-moi'),
(3, 'SẢN PHẨM KHUYẾN MẠI', '', 'san-pham-khuyen-mai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Name` varchar(150) DEFAULT NULL,
  `CreateDate` date DEFAULT NULL,
  `RoleId` int(11) DEFAULT NULL,
  `Avatar` varchar(550) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Username`, `Password`, `Name`, `CreateDate`, `RoleId`, `Avatar`, `Email`, `Phone`, `Address`) VALUES
(25, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 'admin', '2016-03-18', 1, 'avatar_name25-.jpg', 'dongvuhtvn@gmail.com', '0945802194', 'hanoi'),
(26, 'user', 'c4ca4238a0b923820dcc509a6f75849b', 'user', '2016-03-18', 2, 'avatar_name26-user.png', 'user@user.com', '0945802194', 'hanoi');

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE `user_online` (
  `session` varchar(100) NOT NULL DEFAULT '''''',
  `time` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(24) NOT NULL,
  `browser` varchar(50) NOT NULL,
  `dateonline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_online`
--

INSERT INTO `user_online` (`session`, `time`, `ip`, `browser`, `dateonline`) VALUES
('2g4u834q03mdbq4kfnpnga5ge1', 1458308377, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `visiter`
--

CREATE TABLE `visiter` (
  `Id` int(11) NOT NULL,
  `session` varchar(100) NOT NULL DEFAULT '''''',
  `time` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(24) NOT NULL,
  `browser` varchar(50) NOT NULL,
  `dateonline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visiter`
--

INSERT INTO `visiter` (`Id`, `session`, `time`, `ip`, `browser`, `dateonline`) VALUES
(2, '1456825980', 1270, 'Mozilla/5.0 (Windows NT ', '2016-03-01', '0000-00-00'),
(3, 'u15sou3lb29c5mro2vgrahugu3', 1456826004, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-01'),
(4, 'n6971v5af3kbrmve3g0hhnh6i2', 1456826021, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Trident/7.0; rv:11.0)', '2016-03-01'),
(5, 'u15sou3lb29c5mro2vgrahugu3', 1456826038, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-01'),
(6, 'u15sou3lb29c5mro2vgrahugu3', 1456826115, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-01'),
(7, 'n6971v5af3kbrmve3g0hhnh6i2', 1456830148, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Trident/7.0; rv:11.0)', '2016-03-01'),
(8, 'athrmehegvarha5g2h2igoorc2', 1456857824, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-01'),
(9, 'nra8eeqgb9t2uatm42d4fr2mr4', 1456927765, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-02'),
(10, '11ml11mraqjrk9boluapoqlau7', 1456977971, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-03'),
(11, '6217tfbqb6dek1aef4u616uha5', 1456977972, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-03'),
(12, 'oojpfp5bgmggtjknupef2094q3', 1457061719, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-04'),
(13, 'ufe6ipna8isig4f1j8pa64n0q0', 1457061720, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-04'),
(14, 'j0s6euuvb5cthjqrrj3sj6pi97', 1457087447, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-04'),
(15, 'v9n5hb1fliivanpte9pgm80mp5', 1457160920, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-05'),
(16, 'upjtit7vu5p0db6hrmr4mfp5m2', 1457189666, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-05'),
(17, 'j3egjmm0shrdmgpomvoncoc3d7', 1457246392, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-06'),
(18, 'h6me5m2lj64uga2thqd24cdh74', 1457502114, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-09'),
(19, '63a6idp353am4dvjfknu3dksk0', 1457522637, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-09'),
(20, '0s5so7pvogve8i5lp9nqtsgq97', 1457542143, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-09'),
(21, '25r22h8hal3rbqj7lfggevs4m3', 1457542641, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-09'),
(22, 'n8edt08aut5449eoehamf60l21', 1457543311, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-09'),
(23, 'igv6kb9l52tqeofg1b21jt66r6', 1457579200, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-10'),
(24, 'fj65aursh80vqe3f3aarrijcj4', 1457580682, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-10'),
(25, 'r0vrorb37asvmaqapqfqs7hdd2', 1457581555, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-10'),
(26, 'ir8k2j5s84kmevpqnk6nu0mr66', 1457581850, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-10'),
(27, 'ghpgnejg26es9l3dijkp1dc5p5', 1457582605, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-10'),
(28, 'sb08aqlu1vmav0vsg3tjqi9686', 1457582715, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-10'),
(29, 'jr75cu5jfmsvgm2nels1nukr82', 1457604875, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-10'),
(30, 'op7fgfpu8lutmmvjogdacrpg77', 1457624257, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-10'),
(31, 'ftapl0k0q554r0gfl0ljqd1ci6', 1457928426, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-14'),
(32, '4jpn482mdk9dc0utp5k3jjtoe0', 1457928427, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-14'),
(33, 'qaqgnilb2vleja1gfclc96vii6', 1457936959, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-14'),
(34, 'vdvvvvl538j5lkvotr60a2h9g2', 1457956744, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-14'),
(35, 'ktnumkqu68mbbf0u8nonbn1ej3', 1457962239, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-14'),
(36, 's2mqpmio4t9g7omj78t9khurb4', 1457962758, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-14'),
(37, '60agnncgn5r5gj0eo26hiqikg0', 1457967981, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-14'),
(38, '5fctj754v0p82qkhuvnese0ne0', 1457968254, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-14'),
(39, '0c1dbegjtv7d061o2su2rpr2p2', 1457968820, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-14'),
(40, 'poenm4ui9bu5hge9ei1rti7md5', 1457971110, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-14'),
(41, '2auuh22bt0vrg3n4bm51n27lu0', 1457971184, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-14'),
(42, '06l5aqmh0b54r14g0begde1p25', 1457972434, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-14'),
(43, '569i5e4s5oq0aef69lf0b87eg3', 1457974717, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-14'),
(44, 'f3trnllaf4ju07e1nepgpbean4', 1457975380, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-14'),
(45, '7jmfq3k12vthq6anep0dh3av56', 1458024787, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-15'),
(46, '4m83pors4kn4qon8sto4964fr4', 1458025610, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-15'),
(47, '2lu71cr6tefh78a4qikitv3pm2', 1458026089, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-15'),
(48, 'tccac13jsag6dhukea2n8jhdh1', 1458184443, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-17'),
(49, 'jrtttilad1bbu0rfhjg6kamn54', 1458197484, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-17'),
(50, 'ou0a403o6e3l4u4ogb7lfvrso2', 1458213584, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-17'),
(51, 'i1fnihddupc3l10uc0ftllr612', 1458215656, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-17'),
(52, 'r48ga6i92r1as5sb3o4pj0fqd6', 1458215656, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-17'),
(53, '7c069ghvrkslu7vrjkk9nafnl1', 1458218271, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-17'),
(54, '11tqef9oi2c32fjmr9vfq523m2', 1458219755, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-17'),
(55, 'v4it7rsl72quq4bvlm68kmauj3', 1458236974, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-17'),
(56, '68jeh3us3bjt5r2doju7q56uf4', 1458237218, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-17'),
(57, 'v4it7rsl72quq4bvlm68kmauj3', 1458239202, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-17'),
(58, '9taac909nttrhusdn9onngrng4', 1458267457, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-18'),
(59, '2g4u834q03mdbq4kfnpnga5ge1', 1458300153, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', '2016-03-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertise`
--
ALTER TABLE `advertise`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_Categories_Supplies1` (`SupplyId`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_Comment_Product` (`ProductId`);

--
-- Indexes for table `contactinfo`
--
ALTER TABLE `contactinfo`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `imageslide`
--
ALTER TABLE `imageslide`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `livesport`
--
ALTER TABLE `livesport`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`LogoId`),
  ADD UNIQUE KEY `logo` (`alias`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`MenuId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_Product_Supplies` (`SupplyId`),
  ADD KEY `FK_Product_Categories` (`CategoryId`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_Id_Supplies1` (`SupplyId`),
  ADD KEY `FK_Id_Category1` (`CategoryId`);

--
-- Indexes for table `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`SupplyId`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_User_Role` (`RoleId`);

--
-- Indexes for table `user_online`
--
ALTER TABLE `user_online`
  ADD PRIMARY KEY (`session`);

--
-- Indexes for table `visiter`
--
ALTER TABLE `visiter`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertise`
--
ALTER TABLE `advertise`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contactinfo`
--
ALTER TABLE `contactinfo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `imageslide`
--
ALTER TABLE `imageslide`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `intro`
--
ALTER TABLE `intro`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `livesport`
--
ALTER TABLE `livesport`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `LogoId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `MenuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `supplies`
--
ALTER TABLE `supplies`
  MODIFY `SupplyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `visiter`
--
ALTER TABLE `visiter`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `FK_Categories_Supplies1` FOREIGN KEY (`SupplyId`) REFERENCES `supplies` (`SupplyId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_Comment_Product` FOREIGN KEY (`ProductId`) REFERENCES `product` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_Product_Categories` FOREIGN KEY (`CategoryId`) REFERENCES `categories` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Product_Supplies` FOREIGN KEY (`SupplyId`) REFERENCES `supplies` (`SupplyId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `FK_Id_Category1` FOREIGN KEY (`CategoryId`) REFERENCES `categories` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Id_Supplies1` FOREIGN KEY (`SupplyId`) REFERENCES `supplies` (`SupplyId`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_User_Role` FOREIGN KEY (`RoleId`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

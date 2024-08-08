-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th5 29, 2021 lúc 12:01 PM
-- Phiên bản máy phục vụ: 10.3.29-MariaDB-cll-lve
-- Phiên bản PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tdndoanhnet_nam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ID` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`, `ID`) VALUES
('Giangscam', 'eee62c8d61da2182293afdebcb9f26bc', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `get_key`
--

CREATE TABLE `get_key` (
  `all_key` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `ID` int(255) NOT NULL,
  `UDID` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `set_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `get_key`
--

INSERT INTO `get_key` (`all_key`, `start_time`, `end_time`, `ID`, `UDID`, `status`, `set_time`) VALUES
('4b80b630d4ba4a14016d7a9397f8174b150e7a76', '2021-05-28 14:19', '2021-05-29 14:19', 1, '3AB3CBDE-C1E7-4B7D-92EF-509D870B1F91', 'Active', 'key days'),
('PJ-X2N-DN-HLQ-GiangScam-hSH4cAVx8Od5iK7', '', '', 5, NULL, 'pending', 'key days'),
('PJ-X2N-DN-HLQ-GiangScam-5pWK2jyVtowSQYc', '2021-05-28 14:16', '2021-06-11 14:16', 6, 'PJ-X2N-DN-HLQ-GiangScam-5pWK2jyVtowSQYc', 'Active', 'key 2 week'),
('Znhshsvwvwvw', '', '', 19, NULL, '', 'key day'),
('PJ-X2N-DN-HLQ-3V4uDCRdpFJnacA', '', '', 21, NULL, 'pending', 'key days'),
('PJ-X2N-DN-HLQ-jbpn7f9tszX3Ugo', '', '', 22, NULL, 'pending', 'key days'),
('PJ-X2N-DN-HLQ-sRZLY0wpDx3fV5m', '', '', 23, NULL, 'pending', 'key days'),
('PJ-X2N-DN-HLQ-TA8g4nvKMI1JFmR', '', '', 24, NULL, 'pending', 'key days'),
('PJ-X2N-DN-HLQ-Ylkx6MmfsSyGB5w', '', '', 25, NULL, 'pending', 'key days'),
('PJ-X2N-DN-HLQ-YZ6Cv3mcyRDbkKN', '2021-05-28 21:26', '2021-06-27 21:26', 26, '3AB3CBDE-C1E7-4B7D-92EF-509D870B1F91', 'Active', 'key month'),
('PJ-X2N-DN-HLQ-Q6ZmP9snhcE4LHr', '', '', 27, NULL, 'pending', 'key days');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `PageTitle`, `Description`, `PostingDate`, `UpdationDate`) VALUES
(1, 'aboutus0', 'THÃ”NG BÃO', 'HIá»†N Táº I HACK CHá»ˆ Há»– TRá»¢ CHO IOS 14.4.2 TRá»ž XUá»NG VÃ€ NHá»®NG MÃY IPHONE 7 TRá»ž LÃŠN Äá»‚ CÃ“ NHá»®NG TRáº¢I NGHIá»†M Tá»T NHáº¤T\r\n<p>-ADMIN: X2N-</p>', '2018-06-30 18:01:03', '2021-05-27 15:52:54'),
(3, 'aboutus1', 'PICTURE ON GAME', '<div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">\r\n  <div class=\"carousel-inner\">\r\n    <div class=\"carousel-item active\">\r\n      <img class=\"d-block w-100\" src=\"https://s1.uphinh.org/2021/05/27/3868BEA8-DF69-497F-997C-2F46BD36FF8F.jpg\" alt=\"First slide\">\r\n    </div>\r\n    <div class=\"carousel-item\">\r\n      <img class=\"d-block w-100\" src=\"https://s1.uphinh.org/2021/05/27/D909226F-4440-4DA5-B26C-8FD8A4BAA666.jpg\" alt=\"Second slide\">\r\n    </div>\r\n    <div class=\"carousel-item\">\r\n      <img class=\"d-block w-100\" src=\"https://s1.uphinh.org/2021/05/27/E61642AE-D25E-4EF0-9831-4F54A57A4032.jpg\" alt=\"Third slide\">\r\n    </div>\r\n  </div>\r\n  <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">\r\n    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>\r\n    <span class=\"sr-only\">Previous</span>\r\n  </a>\r\n  <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">\r\n    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>\r\n    <span class=\"sr-only\">Next</span>\r\n  </a>\r\n</div>\r\n\r\n', '2021-05-27 09:11:38', '2021-05-27 10:17:02'),
(4, 'aboutus2', 'LIÃŠN Há»†', '<p><a class=\"btn btn-info\" href=\"#\">X2NIOS</a></p>\r\n<p><a class=\"btn btn-info\" href=\"#\">DNPUBG</a></p>\r\n<p><a class=\"btn btn-info\" href=\"#\">PHONGJINOO</a></p>', '2021-05-27 09:11:38', '2021-05-27 10:20:24');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `get_key`
--
ALTER TABLE `get_key`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `get_key`
--
ALTER TABLE `get_key`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2020 lúc 04:58 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congnghephanmem`
--

CREATE TABLE `congnghephanmem` (
  `id` int(11) UNSIGNED NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `congnghephanmem`
--

INSERT INTO `congnghephanmem` (`id`, `position`, `image`, `content`) VALUES
(1, '\r\n', '', '\r\nGiới thiệu Bộ môn Công nghệ phần mềm\r\n\r\nBộ môn Công nghệ phần mềm đảm nhiệm chức năng giảng dạy tin đại cương, môn tin cơ \r\nsở và chuyên ngành Công nghệ phần mềm.\r\n\r\n\r\nThành phần lãnh đạo bộ môn:'),
(2, '\r\nTrưởng bộ môn: TS Lý Anh Tuấn', 'http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/images/Ly_Anh_Tuan.jpg', '\r\nTốt nghiệp Đại học Quốc gia Hà Nội  năm 2001\r\n\r\nThạc sỹ năm 2006  tại ĐH Quốc gia Hà Nội\r\n\r\nBảo vệ luận án Tiến sỹ chuyên ngành Công nghệ thông tin  năm  2013 tại ĐH Paris-\r\nSud, Cộng hòa Pháp'),
(3, 'Trưởng bộ môn: TS Lê Nguyễn Tuấn Thành', '', '\r\nTốt nghiệp Đại học Công nghệ, Đại học Quốc gia Hà Nội  năm 2008\r\n\r\nThạc sỹ năm 2011  tại Viện tin học Pháp ngữ\r\n\r\nBảo vệ luận án Tiến sỹ chuyên ngành Trí tuệ nhân tạo  năm  2016 tại ĐH Toulouse 3\r\nPaul Sabatier, Cộng hòa Pháp'),
(4, 'Các môn học giảng dạy', 'http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/images/congnghephanmem.png', ''),
(5, '', 'http://cse.tlu.edu.vn/Portals/0/CNPM%20moi.jpg?ver=2015-11-03-180202-913', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `congnghephanmem`
--
ALTER TABLE `congnghephanmem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `congnghephanmem`
--
ALTER TABLE `congnghephanmem`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

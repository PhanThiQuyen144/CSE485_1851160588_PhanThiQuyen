-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2020 lúc 04:59 PM
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
-- Cấu trúc bảng cho bảng `khoahocmaytinh`
--

CREATE TABLE `khoahocmaytinh` (
  `id` int(11) UNSIGNED NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoahocmaytinh`
--

INSERT INTO `khoahocmaytinh` (`id`, `position`, `content`, `image`) VALUES
(1, 'Phòng:', '200 -Nhà C1', ''),
(2, 'Điện thoại:', '024.35637020', ''),
(3, 'Về đào tạo:', 'Bộ môn Khoa học máy tính đảm nhiệm chức năng giảng dạy tin đại cương, môn tin cơ sở và các môn thuộc chuyên ngành khoa học máy tính. Bên cạnh đó, Bộ môn cũng tham gia giảng dạy các môn học hiện đại (như mô phỏng số và quản lý rủi ro,...) thuộc chương trình tiên tiến của nhà trường.', ''),
(4, 'Về nghiên cứu:', 'Bộ môn có hai hướng nghiên cứu chính là Mô hình hoá/ Mô phỏng và Học máy. Đặc biệt, Bộ môn trú trọng nghiên cứu liên ngành với mục tiêu kết hợp nghiên cứu với các chuyên ngành khác của công nghệ thông tin cũng như của các ngành đặc thù nhằm giải quyết các bài toán thực tế đặt ra.', ''),
(5, 'Cán bộ của bộ môn:', '\r\nSố lượng cán bộ: 9\r\n\r\nPhụ trách bộ môn: TS. GVCC Nguyễn Huy Đức', ''),
(6, 'Các môn giảng dạy', '', 'http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/images/khoahocmaytinh.png'),
(7, '', 'Tên môn in nghiêng là môn thuộc chuyên ngành Khoa học máy tính, ngành CNTT.', 'http://cse.tlu.edu.vn/Portals/0/Images/2016/BM%20KHMT.JPG?ver=2016-05-06-160913-420');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `khoahocmaytinh`
--
ALTER TABLE `khoahocmaytinh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `khoahocmaytinh`
--
ALTER TABLE `khoahocmaytinh`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2020 lúc 04:10 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `daotao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `daotao`
--

CREATE TABLE `daotao` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `daotao`
--

INSERT INTO `daotao` (`id`, `img`, `name`, `description`, `content`) VALUES
(1, 'not', 'Chương trình CNTT - Việt Nhật', 'Đào tạo chuyên môn ngành công nghệ thông tin theo yêu cầu nhà tuyển dụng và theo quy định của chương trình đào tạo hệ...', 'http://cse.tlu.edu.vn/dao-tao/chuong-trinh-cntt--viet-nhat-261'),
(2, 'http://cse.tlu.edu.vn/Portals/0/2017-6/giaovien.jpg', 'Đề cương các môn họ', '', 'http://cse.tlu.edu.vn/dao-tao/de-cuong-cac-mon-hoc-172'),
(3, 'http://cse.tlu.edu.vn/Portals/0/Images/nckh2.jpg', 'Chuẩn đầu ra - Chương trình thạc sĩ ngành Công nghệ thông...\r\n\r\n', '', 'http://cse.tlu.edu.vn/dao-tao/chuan-dau-ra--chuong-trinh-thac-si-nganh-cong-169'),
(4, 'http://cse.tlu.edu.vn/Portals/0/cnpm.jpg', '\r\nChuẩn đầu ra - Ngành Kỹ thuật phần mềm', '', 'http://cse.tlu.edu.vn/dao-tao/chuan-dau-ra--nganh-ky-thuat-phan-mem-168');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `daotao`
--
ALTER TABLE `daotao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `daotao`
--
ALTER TABLE `daotao`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

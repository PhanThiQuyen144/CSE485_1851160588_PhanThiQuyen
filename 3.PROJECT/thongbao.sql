-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2020 lúc 04:25 AM
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
-- Cơ sở dữ liệu: `thongbao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbao`
--

CREATE TABLE `thongbao` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongbao`
--

INSERT INTO `thongbao` (`id`, `img`, `name`, `content`) VALUES
(1, 'http://cse.tlu.edu.vn/Portals/0/tuyen-dung.jpg', 'CÔNG TY CP GIẢI PHÁP PHẦN MỀM TÀI CHÍNH (FSS) TUYỂN DỤNG\r\n\r\n', 'http://cse.tlu.edu.vn/tin-thong-bao/cong-ty-cp-giai-phap-phan-mem-tai-chinh-fss-291'),
(2, '', 'Từ 0h00 ngày 30/5 đến 1/8/2020, Thí sinh bắt đầu đăng ký trực tuyến xét tuyển thẳng và xét tuyển học bạ vào Trường Đại học Thủy lợi', 'http://cse.tlu.edu.vn/tin-thong-bao/tu-0h00-ngay-30-5-den-1-8-2020-thi-sinh-bat-dau-290'),
(3, 'http://cse.tlu.edu.vn/Portals/0/thong%20bao.jpg', 'Tổ chức Cuộc thi “Sinh viên với ý tưởng khởi nghiệp” năm 2020', 'http://cse.tlu.edu.vn/tin-thong-bao/to-chuc-cuoc-thi-sinh-vien-voi-y-tuong-khoi-289'),
(4, 'http://cse.tlu.edu.vn/Portals/0/tuyen-dung.jpg', '\r\nCÔNG TY SMARTOSC TÌM KIẾM THỰC TẬP SINH TÀI NĂNG (PHP/ TESTER)', 'http://cse.tlu.edu.vn/tin-thong-bao/cong-ty-smartosc-tim-kiem-thuc-tap-sinh-tai-nang-288'),
(5, 'http://cse.tlu.edu.vn/Portals/0/thong%20bao.jpg', 'Kế hoạch tổ chức Hội nghị khoa học sinh viên lần thứ 33 cấp khoa năm học 2019 -2020', 'http://cse.tlu.edu.vn/tin-thong-bao/ke-hoach-to-chuc-hoi-nghi-khoa-hoc-sinh-vien-lan-287'),
(6, 'http://cse.tlu.edu.vn/Portals/0/logohoc-bong.jpg', '\r\nHỌC BỔNG TÀI NĂNG SAMSUNG - STP 2020', 'http://cse.tlu.edu.vn/tin-thong-bao/ho%CC%A3c-bo%CC%89ng-ta%CC%80i-nang-samsung--stp-2020-281');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
-- Cấu trúc bảng cho bảng `toanhoc`
--

CREATE TABLE `toanhoc` (
  `id` int(11) UNSIGNED NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `toanhoc`
--

INSERT INTO `toanhoc` (`id`, `position`, `image`, `content`) VALUES
(1, 'Thành phần lãnh đạo bộ môn:', '', ''),
(2, '1. Trưởng bộ môn: TS Nguyễn Hữu Thọ', 'http://web.archive.org/web/20150317011535im_/http://cse.wru.edu.vn/wp-content/uploads/2011/08/Tho1.jpg', '\r\nTốt nghiệp Đại học Sư phạm Hà nội năm 1989\r\n\r\nThạc sỹ năm 2000 tại Viện Toán học- Viện Khoa học và công nghệ VN\r\n\r\nBảo vệ luận án Tiến sỹ năm 2006 tại Viện Toán học- Viện Khoa học và công nghệ VN'),
(3, '2. Phó Trưởng bộ môn: TS Nguyễn Đức Hậu', 'http://web.archive.org/web/20150317011535im_/http://cse.wru.edu.vn/wp-content/uploads/2011/08/hau.jpg', '\r\nTốt nghiệp Đại học chuyên ngành Toán- Đại học Sư phạm Hà nội năm 2001\r\n\r\nThạc sỹ chuyên ngành Giải tích- Đại học Sư phạm Hà nội năm 2004\r\n\r\nBảo vệ luận án Tiến sỹ chuyên ngành Cơ học chất lỏng tại Cộng hòa Pháp năm \r\n2011\r\n\r\nHướng nghiên cứu: Giải tích số, Mô phỏng vận chuyển bùn cát, Mô phỏng dòng \r\nchảy rối và dòng chảy không ổn định.\r\n\r\nCông trình nghiên cứu tiêu biểu\r\n\r\nNguyen D.H., Guillou S., Nguyen K.D., Pham Van Bang D., Chauchat J.  (2012) Simulation of dredged sediment releases into homogeneous water using a \r\ntwo-phase model. Advances in Water Resources 48 (2012) 102–112.http://dx.doi.org/10.1016/j.advwatres.2012.03.009 (5-Year Impact Factor:\r\n2.873)'),
(4, '3. Phó Trưởng bộ môn: TS Đỗ Lân', '', '\r\nTốt nghiệp Đại học chuyên ngành Toán- Đại học Sư phạm Hà Nội năm 2007\r\n\r\nThạc sỹ chuyên ngành Toán- Trường Đại học Khoa học Tự nhiên  -Đại học Quốc gia Hà Nội năm 2010\r\n\r\nBảo vệ luận án Tiến sỹ chuyên ngành phương trình vi phân và tích phân năm 2016'),
(5, 'Các thành viên trong Bộ môn', '', '\r\n1	TS Nguyễn Hữu Thọ (Trưởng Bộ môn)\r\n2	TS Nguyễn Đức Hậu (Phó Bộ môn)\r\n3	TS Đỗ Lân (Phó Bộ môn)\r\n4	ThS Phạm Xuân Đồng\r\n5	ThS Phan Thị Thanh Huyền\r\n6	ThS Nguyễn Thị Vân\r\n7	TS Nguyễn Văn Đắc\r\n8	ThS Nguyễn Thị Lý\r\n9	ThS Lê Thị Minh Hải\r\n10	NCS Đào Việt Hùng\r\n11	TS Nguyễn Ngân Giang \r\n12	ThS Trần Phương Liên\r\n13	ThS Phạm Nam Giang\r\n14	TS Vũ Mạnh Tới\r\n15	ThS Lê Thế Sắc\r\n16	ThS Bùi Thị Huệ\r\n17	ThS Vũ Nam Phong\r\n18	TS  Phạm Trường Xuân \r\n19	ThS Phạm Xuân Trung\r\n20	ThS Nguyễn Ngọc Huy'),
(6, 'Nhiệm vụ:', '', ''),
(7, '1. Giảng dạy các môn Toán cho chương trình đào tạo Tín chỉ', '', '\r\nSTT	Tên môn	                                          Số tín chỉ\r\n1	ToánI (Giải tích hàm một biến)	                       3\r\n2	ToánII (Giải tích hàm nhiều nhiều biến)	               3\r\n3	Toán III (Đại số tuyến tính)	                       3\r\n4	ToánIVa (Phương trình vi phân)	                       2\r\n5	Toán IVb (Phương pháp số)	                       2\r\n6	ToánIVc (Phương trình vật lý toán)	               2\r\n7	Toán V (Xác suất thống kê)	                       3\r\n8	Toán I- II (Giải tích dành cho các ngành kinh tế)      4'),
(8, '2. Giảng dạy các môn Toán cho chương trình đào tạo Tại chức tại Hà nội, TP HCM và các địa phương khác.', '', ''),
(9, '3. Giảng dạy chương trình Toán cho các hệ cao đẳng, cử tuyển, ngắn hạn, liên thông', '', ''),
(10, '4. Giảng dạy các môn Toán cho chương trình đào tạo sau đại học', '', '\r\nSTT	Tên môn	                             Số tiết\r\n1	Bổ túc xác suất và xử lý số liệu	30\r\n2	Phân tích hệ thống	                45\r\n3	Giải tích số	                        30\r\n'),
(11, '', 'http://cse.tlu.edu.vn/Portals/0/BM%20Toan%20hoc.jpg?ver=2015-10-26-103036-570', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `toanhoc`
--
ALTER TABLE `toanhoc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `toanhoc`
--
ALTER TABLE `toanhoc`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

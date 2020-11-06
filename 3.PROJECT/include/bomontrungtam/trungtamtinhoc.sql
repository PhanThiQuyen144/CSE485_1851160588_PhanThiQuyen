-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2020 lúc 05:00 PM
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
-- Cấu trúc bảng cho bảng `trungtamtinhoc`
--

CREATE TABLE `trungtamtinhoc` (
  `id` int(11) UNSIGNED NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trungtamtinhoc`
--

INSERT INTO `trungtamtinhoc` (`id`, `position`, `content`, `image`) VALUES
(1, '1. PGS TS Nguyễn Hữu Quỳnh - Giám đốc', '', ''),
(2, '2. ThS Bùi Văn Huyến- Phó Giám đốc', '\r\nTốt nghiệp thạc sĩ ĐH Bách Khoa', ''),
(3, '3. ThS Hoàng Quốc Dũng', '\r\nTốt nghiệp thạc sĩ IFI - Pháp', ''),
(4, '4. ThS Nguyễn Tuấn Anh', '\r\nTốt nghiệp thạc sĩ Học viện Công nghệ Bưu chính Viễn thông', ''),
(5, '5. ThS Tạ Anh Tuấn', '\r\nTốt nghiệp thạc sĩ ĐH Thủy lợi', ''),
(6, '6. ThS Nguyễn Tiến Đức', '\r\nTốt nghiệp thạc sĩ ĐH Thủy lợi', ''),
(7, '7. KS Nguyễn Nguyên Anh', '\r\nTốt nghiệp đại học Mỏ -Địa chất', 'http://cse.tlu.edu.vn/Portals/0/TTTH.jpg?ver=2015-10-26-105128-617'),
(8, 'A.   Chức năng', '\r\nTrung tâm Tin học có chức năng tham mưu và giúp việc Hiệu trưởng về các mặt \r\ncông tác sau:\r\n\r\n1.           Tin học hoá và quản trị điều hành quản lý hành chính;\r\n\r\n2.           Nghiên cứu, ứng dụng, đào tạo và dịch vụ công nghệ thông tin (CNTT);', ''),
(9, 'B.   Nhiệm vụ', '\r\nI. Tin học hóa và quản trị điều hành quản lý hành chính\r\n\r\n      1. Là đơn vị quản lý Nhà trường về mặt Tin học; Là đầu mối chủ trì \r\nxây dựng và triển khai công tác tin học hóa quản lý hành chính, các đề án \r\nvà dự án của Bộ phục vụ công tác quản lý, điều hành của Hiệu trưởng.\r\n\r\n      2. Chủ trì thiết kế, xây dựng, tư vấn sử dụng, trực tiếp quản lý, vận\r\nhành kỹ thuật hệ thống hạ tầng mạng và hệ thống website của Trường; Tổ chức\r\nthu thập, tổng hợp và phân tích thông tin, tham gia nghiên cứu đề xuất các \r\ngiải pháp xử lý thông tin, các biện pháp phát triển hạ tầng CNTT phục vụ \r\ncông tác quản lý, chỉ đạo điều hành, công tác đào tạo của Trường.\r\n\r\n      3.Chủ trì xây dựng, quản lý và vận hành, khai thác cơ sở dữ liệu liên \r\nquan đến công tác đào tạo, NCKH, quản lý và điều hành của Trường.\r\n\r\n      4.Tích hợp các cơ sở dữ liệu của Trường, tổ chức cung cấp thông tin \r\ndưới dạng điện tử, thực hiện chế độ thông tin, báo cáo theo quy định.\r\n\r\n      5.Thiết kế, xây dựng các đầu mối tích hợp dữ liệu, thông tin từ các \r\nđơn vị thuộc thẩm quyền quản lý của Trường và là đầu mối truy cập, cung cấp \r\nthông tin điện tử từ Trường Đại học Thủy Lợi tới mạng thông tin của Bộ Nông nghiệp và Phát triển nông thôn, Bộ Giáo dục và Đào tạo và các cơ quan theo \r\nquy định.\r\n\r\n       6.Xây dựng quy chế khai thác, sử dụng và quản lý các phần mềm dùng \r\nchung trong các lĩnh vực quản lý của Trường; Quy chế quản lý, vận hành và \r\nchính sách sử dụng hạ tầng CNTT của Trường.\r\n\r\n       7.Tổ chức thiết kế, xây dựng hệ thống kỹ thuật và tin học phục vụ quản \r\nlý hành chính, đào tạo của Trường; Khai thác, sử dụng các phần mềm ứng dụng chuyên ngành trong các dự án do Bộ, Trường đầu tư.\r\n\r\n       8.Tiếp nhận, quản lý và vận hành hệ thống CNTT được bàn giao thông qua \r\ncác dự án CNTT của Bộ, của Trường hoặc của các tổ chức trong và ngoài nước. \r\nQuản lý các dịch vụ CNTT sử dụng hạ tầng mạng của Trường, quản lý bản quyền \r\ncác phần mềm đang sử dụng trong Trường.\r\n\r\n       9.Quản trị hệ thống và vận hành mạng CNTT của Trường, thực hiện các \r\ngiải pháp kỹ thuật bảo đảm an toàn và bảo mật hệ thống thông tin, các cơ sở \r\ndữ liệu thông tin điện tử của Trường.\r\n\r\n      10.Tư vấn bảo trì, bảo dưỡng hệ thống máy tính và mạng, các trang thiết   bị tin học của Trường, từng bước nâng cao chất lượng dịch vụ CNTT trong Trường; Trực tiếp quản lý, bảo trì hệ thống máy tính phục vụ đào tạo; Khắc phục các sự \r\ncố kỹ thuật của hệ thống thiết bị mạng, bảo đảm sự an toàn và tính bảo mật của \r\nhệ thống.\r\n\r\n      11.Giám đốc Trung tâm Tin học đảm nhận chức danh Giám đốc thông tin của Trường và thực hiện nhiệm vụ, quyền hạn của Hiệu trưởng giao.\r\n\r\n      12.Hoạt động hợp tác quốc tế và các nhiệm vụ khác về CNTT do Hiệu trưởng giao.\r\n\r\nII.Nghiên cứu, ứng dụng, đào tạo và dịch vụ CNTT:\r\n\r\n       1. Xây dựng chương trình, kế hoạch dài hạn và hàng năm về CNTT, xây \r\ndựng các văn bản quản lý các hoạt động CNTT; tổ chức thực hiện và quản lý \r\ncác hoạt động CNTT của trường và của Trung tâm; lập kế hoạch dài hạn, hàng \r\nnăm về tài chính thực hiện các đề tài, dự án và các dịch vụ CNTT trong và \r\nngoài trường để phát triển hoạt động có thu của Trung tâm;\r\n\r\n       2.Nghiên cứu và ứng dụng CNTT về quản lý, khoa học công nghệ và sản \r\nxuất kinh doanh;\r\n\r\n       3.Thiết kế, xây dựng, tư vấn, chuyển giao công nghệ và thực hiện các \r\ndịch vụ về CNTT;\r\n\r\n       4.  Đào tạo, bồi dưỡng và chuyển giao công nghệ về CNTT cho CBVC \r\ntrong, ngoài trường và các đối tượng khác;\r\n\r\n       5.Phối hợp với Khoa CNTT trong đào tạo ngành CNTT và đào tạo Tin học \r\ncho các ngành khác; trình Hiệu trưởng cấp chứng chỉ các lớp đào tạo ngắn hạn \r\nvề kỹ năng CNTT, các phần mềm ứng dụng cho các đối tượng theo hướng xã hội \r\nhóa;\r\n\r\n6.   Các hoạt động dịch vụ CNTT khác.', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `trungtamtinhoc`
--
ALTER TABLE `trungtamtinhoc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `trungtamtinhoc`
--
ALTER TABLE `trungtamtinhoc`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

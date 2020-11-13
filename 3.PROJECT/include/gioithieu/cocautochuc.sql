-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2020 lúc 03:37 AM
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
-- Cấu trúc bảng cho bảng `cocautochuc`
--

CREATE TABLE `cocautochuc` (
  `id` int(11) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `infor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cocautochuc`
--

INSERT INTO `cocautochuc` (`id`, `image`, `position`, `name`, `infor`, `content`) VALUES
(1, 'http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/images/avar1.jpg', '- Trưởng khoa: PGS. TS.', 'Nguyễn Thanh Tùng', 'http://cse.tlu.edu.vn/bo-mon-trung-tam/cong-nghe-phan-mem/doi-ngu-giang-vien-cnpm/userid/4/nguyen-thanh-tung-ts', '\r\nEmail: tungnt@tlu.edu.vn\r\nĐiện thoại: +84-4-38521442\r\n\r\nPGS. TS. Nguyễn Thanh Tùng – Trưởng Khoa, phụ trách \r\nchung và trực tiếp phụ trách các công tác:\r\n\r\n1. Tổ chức, nhân sự\r\n2. Các Hội đồng (Khoa học, Tư vấn, ...)\r\n3. Chiến lược phát triển, kế hoạch\r\n4. Nghiên cứu và phát triển chương trình đào tạo, chương trình liên kết với nước \r\nngoài\r\n5. Công tác thi đua, khen thưởng, kỷ luật\r\n6. Phát triển thương hiệu Khoa, quản lý thông tin Website, trang facebook của\r\nKhoa\r\n\r\n'),
(2, 'http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/images/Copy%20of%20Dang%20Thu%20Hien.jpg', '- Phó trưởng khoa: TS. GVC.', 'Đặng Thị Thu Hiền', 'http://cse.tlu.edu.vn/bo-mon-trung-tam/he-thong-thong-tin/doi-ngu-giang-vien-httt/userid/42/dang-thi-thu-hien-ts', '\r\nTS. GVC. Đặng Thị Thu Hiền - Phó trưởng Khoa, phụ trách NCKH, Hợp tác quốc tế\r\nvà công tác sinh viên, phụ trách trực tiếp các mặt công tác:\r\n\r\n1.Công tác sinh viên NCKH, Olympic sinh viên\r\n2.Hợp tác quốc tế\r\n3.Phát triển quan hệ doanh nghiệp, cố vấn học tập và tư vấn ngành nghề\r\n4.Công tác tuyển sinh\r\n5.Công tác thư viện, giáo trình\r\n6.Công tác đoàn, hội sinh viên, công tác cựu sinh viên'),
(3, 'http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/images/Nguyen%20Huu%20Quynh.jpg', '- Phó trưởng khoa: PGS. TS.', 'Nguyễn Hữu Quỳnh', '', '\r\nPGS. TS. Nguyễn Hữu Quỳnh – Giám đốc Trung tâm Tin học kiêm Phó trưởng Khoa,\r\nphụ trách Đào tạo và đảm bảo chất lượng, phụ trách trực tiếp các mặt công tác:\r\n\r\n1. Đào tạo Đại học, Thạc sỹ và Tiến sỹ\r\n2. Kiểm định chất lượng\r\n3. Công tác đào tạo và học tập trực tuyến\r\n4. Quản trị cơ sở vật chất, thiết bị'),
(4, '', '*Văn phòng khoa', '', '', '\r\nThS. Nguyễn Thị Thu Hương\r\nKS. Nguyễn Khánh Linh'),
(5, '', '* Khối các đơn vị giảng dạy', '', '', '\r\n- Bộ môn Công nghệ phần mềm	        Trưởng BM - TS. Lý Anh Tuấn\r\n- Bộ môn Hệ thống thông tin	        Trưởng BM - TS.GVC Đặng Thị Thu Hiền\r\n- Bộ môn Khoa học máy tính	        Phụ trách BM - TS. GVCC Nguyễn Huy Đức\r\n- Bộ môn Kỹ thuật máy tính và Mạng	P. Trưởng BM - ThS. Phạm Thanh Bình\r\n- Bộ môn Tin học và Kỹ thuật tính toán	Trưởng BM - TS. Nguyễn Quỳnh Diệp\r\n- Bộ môn Toán học	                Trưởng BM- TS. Nguyễn Hữu Thọ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cocautochuc`
--
ALTER TABLE `cocautochuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cocautochuc`
--
ALTER TABLE `cocautochuc`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

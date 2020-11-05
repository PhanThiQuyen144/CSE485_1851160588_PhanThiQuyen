-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2020 lúc 06:26 PM
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
-- Cấu trúc bảng cho bảng `loichaomung`
--

CREATE TABLE `loichaomung` (
  `id` int(11) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loichaomung`
--

INSERT INTO `loichaomung` (`id`, `content`) VALUES
(1, '\r\nXin chào các cô giáo, thầy giáo, anh chị và các bạn ghé thăm trang web của Khoa CNTT!\r\n\r\n\r\nNăm 2001, lãnh đạo Bộ Nông nghiệp & PTNT, lãnh đạo trường Đại học Thủy lợi khi đó đã \r\nnhận ra xu hướng và cơ hội của ngành Công nghệ thông tin (CNTT) trong tương lai, đồng \r\nthời cũng do nhu cầu bức thiết về đội ngũ kỹ sư công nghệ thông tin trong ngành và \r\ntoàn xã hội, khoa CNTT được thành lập ngày 19/11/2001 từ việc sáp nhập Trung tâm tin \r\nhọc và Bộ môn Toán học của trường.\r\n \r\nKể từ khi thành lập, Khoa CNTT đã phát triển không ngừng. Bước trưởng thành quan trọng \r\nnhất được thể hiện qua sự đổi mới, kiện toàn chương trình đào tạo. Bắt đầu từ năm 2007,\r\nKhoa đã tập trung thực hiện  việc chuyển đổi toàn bộ chương trình, giáo trình đào tạo,\r\nthiết kế theo cùng ngành của trường ĐH Michigan- Hoa kỳ. Riêng các môn Toán được thiết \r\nkế dựa vào chương trình đào tạo của học viện Kỹ thuật MIT - Hoa Kỳ. Từ năm 2015, \r\n\r\nKhoa tạo bước ngoặt cả về nghiên cứu, đào tạo, xây dựng cơ sở vật chất và phát triển \r\nđội ngũ. Khoa mở rộng quy mô tuyển sinh cho cả đại học và sau đại học trên 450 chỉ \r\ntiêu mỗi năm, với những điểm nhấn quan trọng sau:'),
(2, '\r\nVề đội ngũ, Khoa có 60 giảng viên trực tiếp tham gia giảng dạy, trong đó có 20 Tiến \r\nsỹ và 12 nghiên cứu sinh với năng lực công bố quốc tế tốt. Phần lớn các Tiến sỹ của\r\nKhoa đều tu nghiệp tại nước ngoài có nền khoa học tiên tiến về CNTT, các giảng \r\nviên còn lại của Khoa đều có trình độ Thạc sỹ.'),
(3, '\r\nVề đào tạo, Khoa có những thay đổi lớn trong thời gian qua về quy mô, chương trình \r\nđào tạo có tầm nhìn và đáp ứng yêu cầu thị trường việc làm trong và ngoài nước. Hiện \r\nKhoa có 3 ngành đào tạo bậc đại học là Công nghệ thông tin, Hệ thống thông tin, Kỹ \r\nthuật phần mềm; một chuyên ngành bậc sau đại học là Công nghệ thông tin. Khoa luôn \r\ncập nhật sách và giáo trình mới nhất, đang được nhiều trường đại học uy tín trên\r\nthế giới sử dụng, các bài giảng đều cung cấp trực tuyến cho sinh viên. Các \r\nchương trình do công ty Samsung toàn cầu, FPT software đầu tư giúp Khoa đào tạo \r\nnhững sinh viên khá có cơ hội việc làm khi còn chưa tốt nghiệp.'),
(4, '\r\nVề NCKH và hợp tác quốc tế, Khoa đạt được nhiều thành tích cao, các thầy cô \r\nđã công \r\nbố trên 160 bài báo khoa học, trong đó chủ yếu là công bố quốc tế và có 47 bài thuộc \r\ndanh mục SCI/SCIE. Các thầy cô trong Khoa chủ nhiệm và tham gia trên 10 đề tài \r\ncấp nhà nước và hàng chục đề tài nghiên cứu khoa học cấp Bộ. Khoa có những hợp tác \r\nquốc tế và giao lưu khoa học bền vững với các trường đại học uy tín của Mỹ \r\n\r\n(Delta University, Arkansas University, Colorado State University), Pháp (Paris 6, \r\nIRD, UMMISCO), Trung Quốc (ĐH Thâm Quyến, Viện công nghệ tiên tiến Thâm Quyến, \r\nĐH Khoa học và công nghệ phương Nam), Nhật (JAIST, Nara Women\'s University), Úc \r\n\r\n(Griffith University, Deakin University, Monash University) theo các chương trình trao \r\nđổi hợp tác nghiên cứu, trao đổi giáo viên và sinh viên.'),
(5, '\r\nMục tiêu của chúng tôi là một tổ chức đào tạo CNTT tầm khu vực. Nhìn về phía trước, \r\n\r\nKhoa CNTT sẽ tiếp tục là nơi đào tạo uy tín với nền tảng cốt lõi về CNTT, hướng chuyên \r\n\r\nsâu về khoa học dữ liệu, trí tuệ nhân tạo. Chúng tôi tin tưởng rằng các sinh viên và \r\n\r\ngiảng viên của chúng tôi sẽ là những yếu tố chính của sự thay đổi và giải quyết vấn đề \r\n\r\ntrong thế giới hiện đại,luôn luôn\r\nmở và luôn luôn kết nối này.'),
(6, '\r\nKính mời các quý vị truy cập và khám phá trang web của Khoa chúng tôi, tìm hiểu thêm \r\n\r\nvề các chương trình đào tạo đại học và sau đại học của Khoa, tìm hiểu về các hoạt động \r\n\r\nnghiên cứu và thành tựu của chúng tôi, tra cứu và xem thông tin giảng viên, sinh viên, \r\n\r\nvà khám phá những kinh nghiệm phong phú của Khoa CNTT với chúng tôi.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loichaomung`
--
ALTER TABLE `loichaomung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loichaomung`
--
ALTER TABLE `loichaomung`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

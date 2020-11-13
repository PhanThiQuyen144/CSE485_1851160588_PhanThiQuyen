-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2020 lúc 03:38 AM
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
-- Cấu trúc bảng cho bảng `hoptacquocte`
--

CREATE TABLE `hoptacquocte` (
  `id` int(11) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoptacquocte`
--

INSERT INTO `hoptacquocte` (`id`, `content`, `image`) VALUES
(1, '\r\nVào ngày 20/01/2016 tại trường Đại học Thủy Lợi đã diễn ra lễ kí kết hợp tác đào \r\ntạo với Công ty Fsoft – FPT.\r\n\r\nTham dự buổi lễ có GS.TS Nguyễn Quang Kim - Bí thư Đảng Ủy, Hiệu trưởng Nhà \r\ntrường; TS Nguyễn Thanh Tùng -Trưởng khoa CNTT; Ông Trần Xuân Khôi - Phó tổng\r\ngiám đốc công ty FSOFT cùng các giảng viên và sinh viên khoa Công nghệ thông \r\ntin- Trường Đại học Thủy Lợi.\r\n\r\nTại buổi kí kết, GS.TS Nguyễn Quang Kim đại diện Trường Đại học Thủy Lợi giới \r\nthiệu về nhà trường với công ty FSOFT: về quy mô, cơ sơ vật chất, các lĩnh vực \r\nđào tạo, đồng thời nói lên tầm quan trọng của việc hợp tác và định hướng nghề \r\nnghiệp cho các sinh viên. Nhà trường rất vui mừng và ủng hộ, tạo điều kiện cho \r\nnhững chương trình thiết thực như vậy.', 'http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/images/cntt%20ky%20ket%201.jpg'),
(2, '\r\nTS Nguyễn Thanh Tùng - Trưởng khoa Công nghệ thông tin (CNTT) phát biểu: “Việc ký\r\nkết hợp tác với các doanh nghiệp sẽ không chỉ đưa doanh nghiệp tham gia vào quá     \r\ntrình đào tạo mà còn đem lại nhiều cơ hội cho các sinh viên khoa CNTT.”\r\n\r\nTiếp đó, Ông Trần Xuân Khôi - Phó tổng giám đốc công ty FSOFT bày tỏ sự vui mừng \r\nkhi được tham gia hợp tác với Trường - ngôi trường có bề dày lịch sử, có sự đào \r\ntạo chuyên sâu về khối ngành kĩ thuật và xây dựng. Bên cạnh đó, Ông cũng đã giới  \r\nthiệu về công ty với những lĩnh vực hoạt động nổi trội, rất phù hợp với những \r\nngành nghề CNTT đào tạo ở Đại học Thủy lợi.\r\n\r\nChương trình hợp tác đào tạo giữa Khoa CNTT-ĐHTL và công ty Fsoft nhằm trang bị \r\ncác kiến thức, các kỹ năng lập trình ứng dụng đáp ứng yêu cầu của nhà tuyển dụng. Đây là chương trình rất hữu ích cho sinh viên, các bạn được trang bị cơ bản và \r\nnâng cao về SQL, lập trình ứng dụng với các ngôn ngữ C++/Win32, .Net và Java. \r\nSinh viên sẽ có cơ hội được học tập và thực hành với những kiến thức thực tế nhất \r\ndo giảng viên của FSOFT đảm nhận. Mỗi khóa đào tạo sẽ kéo dài 320 giờ cho sinh \r\nviên năm cuối của khoa CNTT. Sau khóa học này, các bạn sinh viên sẽ được cấp \r\nchứng nhận của FSOFT và có nhiều cơ hội được phỏng vấn vào làm việc tại FSOFT. \r\nĐây là một cơ hội rất tốt cho sinh viên được thử sức, trải nghiệm và làm quen \r\nvới một môi trường làm việc hàng đầu và chuyên nghiệp tại Việt Nam.', 'http://localhost:81/CSE485_1851160588_PhanThiQuyen/3.PROJECT/images/cntt%20ky%20ket%201.jpg'),
(3, '\r\nLễ ký kết  là mốc son đánh dấu quá trình hợp tác tốt đẹp và lâu dài giữa trường \r\nĐại học Thủy Lợi và Công ty FSOFT. Dưới sự chứng kiến của đại diện Ban lãnh đạo \r\nNhà trường, khoa CNTT, các thầy, cô giáo và các bạn Sinh viên, TS Nguyễn Thanh \r\nTùng - Trưởng khoa CNTT và Ông Trần Xuân Khôi - Phó tổng giám đốc công ty FSOFT\r\nđã lên kí hợp đồng hợp tác. \r\n\r\nViệc liên kết hợp tác đào tạo,  mang đến cho sinh viên trường Đại học Thủy Lợi \r\nnhững nền tảng tốt , mở ra bước ngoặt và là giấy thông hành tạo lợi thế cạnh \r\ntranh giúp sinh viên nhà trường ngay sau khi tốt nghiệp dễ dàng ứng tuyển, đảm \r\nnhận các vị trí quan trọng tại các doanh nghiệp chuyên về CNTT.', ''),
(4, '\r\nThông tin về khóa học:\r\n\r\n1) Đối tượng: Tất cả các sinh viên K53, K54 và một số sinh viên có thành tích \r\nhọc tập tốt (điểm TB tích lũy >=2.3) của K55-Khoa CNTT.\r\n\r\n2) Quyền lợi:\r\n- Học phí: Sinh viên không phải đóng bất kỳ khoản phí nào liên quan đến đào \r\ntạo.\r\n\r\n- Cơ hội việc làm: Sau khóa học, Fsoft tuyển dụng làm nhân viên thực tập với \r\ncác sinh viên vượt qua buổi sát hạch (tương lai sẽ làm việc tại Fsoft – tham \r\ngia các dự án lớn trong nươc và dự án nước ngoài). Với các sinh viên không \r\nmuốn làm việc tại Fsoft, các bạn vẫn có cơ hội cao về việc làm đối với doanh \r\n nghiệp khác khi được trang bị những kỹ năng lập trình ứng dụng hữu ích trên.\r\n\r\n- Nghĩa vụ: Sinh viên theo học phải làm bản cam kết với Khoa tham gia đầy đủ \r\ncác buổi học lý thuyết và thực hành.\r\n\r\n3) Tóm tắt về chương trình học:\r\n-   Thời gian: Tổng thời gian 40 * 8 = 320 giờ học tại Nhà C5-Trung Tâm Thực \r\nHành trường Đại học Thủy Lợi, có thể bố trí vào buổi tối và thứ 7, chủ nhật.\r\n\r\n-   Chỉ tiêu: Tuyển sinh 02 lớp, mỗi lớp tối đa 40 sinh viên\r\n\r\n4)Các môn học:\r\n· Know-How: 13 ngày\r\n-   Quy trình làm việc\r\n-   SQL Cơ bản\r\n-   SQL Nâng cao\r\n· Industry Readiness: 27 ngày\r\n-   Kỹ năng lập trình (Basic and OOP): 12 ngày – Lựa chọn 1 trong 3 ngôn ngữ \r\n (C++, Java, .Net).\r\n-   Thực hành dự án: 15 ngày\r\n· Fsoft Training Program: 15 ngày à 4 tháng\r\n-   Sinh viên sau khóa học đạt chuẩn sẽ được thực tập tại công ty Fsoft\r\n-  Training về văn hóa, quy trình làm việc\r\n-  Có thể tham gia các dự án thực tế của công ty.\r\nThực hiện: Nguyễn Huế, Thành Đạt', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hoptacquocte`
--
ALTER TABLE `hoptacquocte`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoptacquocte`
--
ALTER TABLE `hoptacquocte`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

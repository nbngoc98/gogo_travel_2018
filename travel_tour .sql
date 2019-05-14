-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 18, 2019 lúc 09:08 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `travel_tour`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `userAdmin` varchar(255) NOT NULL,
  `passAdmin` varchar(255) NOT NULL,
  `emailAdmin` varchar(255) NOT NULL,
  `avata` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `userAdmin`, `passAdmin`, `emailAdmin`, `avata`, `status`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@gmail.com', 'admin.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdat`
--

CREATE TABLE `chitietdat` (
  `MaDat` int(20) NOT NULL,
  `MaTV` int(11) NOT NULL,
  `MaTour` int(11) DEFAULT NULL,
  `MaSale` int(20) DEFAULT NULL,
  `songuoilon` int(20) DEFAULT NULL,
  `sotreem` int(20) DEFAULT NULL,
  `sotrenho` int(11) DEFAULT NULL,
  `sotienThanhToan` int(20) NOT NULL,
  `ngaykhoihanh` date DEFAULT NULL,
  `ngaydat` datetime NOT NULL,
  `xacnhandat` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `xacnhanhuy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Không có yêu cầu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdat`
--

INSERT INTO `chitietdat` (`MaDat`, `MaTV`, `MaTour`, `MaSale`, `songuoilon`, `sotreem`, `sotrenho`, `sotienThanhToan`, `ngaykhoihanh`, `ngaydat`, `xacnhandat`, `xacnhanhuy`) VALUES
(10, 1, 1, NULL, 1, 0, 0, 8500000, '2018-12-31', '2018-12-26 07:50:22', '1', 'Yêu Cầu Hủy'),
(11, 1, NULL, 1, 1, 0, 0, 4999000, NULL, '2018-12-26 07:52:54', '1', 'Yêu Cầu Hủy'),
(12, 4, NULL, 1, 1, 0, 0, 4999000, NULL, '2018-12-26 09:28:47', '1', 'Không có yêu cầu'),
(13, 4, 1, NULL, 1, 0, 0, 8500000, '2018-12-31', '2018-12-26 09:33:56', '0', 'Không có yêu cầu'),
(14, 4, 8, NULL, 1, 0, 0, 1590000, '2018-11-20', '2018-12-26 06:52:53', '0', 'Không có yêu cầu'),
(15, 1, NULL, 2, 1, 0, 0, 4200000, NULL, '2018-12-27 03:17:16', '0', 'Không có yêu cầu'),
(16, 1, 8, NULL, 1, 1, 0, 2090000, '2018-11-20', '2018-12-27 04:06:35', '0', 'Yêu Cầu Hủy'),
(17, 1, NULL, 2, 2, 0, 0, 8400000, NULL, '2018-12-27 04:32:42', '0', 'Không có yêu cầu'),
(18, 1, 11, NULL, 1, 0, 0, 5000000, '2018-11-28', '2019-01-07 02:00:24', '1', 'Không có yêu cầu'),
(19, 1, NULL, 3, 1, 1, 0, 12000000, NULL, '2019-01-17 01:47:13', '0', 'Không có yêu cầu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `MaCom` int(11) NOT NULL,
  `MaTV` int(20) NOT NULL,
  `MaTour` int(20) DEFAULT NULL,
  `MaSale` int(20) DEFAULT NULL,
  `NoiDungCom` text CHARACTER SET utf8 NOT NULL,
  `Vote` int(11) NOT NULL,
  `reply` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`MaCom`, `MaTV`, `MaTour`, `MaSale`, `NoiDungCom`, `Vote`, `reply`, `created`) VALUES
(1, 1, 1, NULL, 'Các mẫu website bán tour đều có thể cho phép các doanh nghiệp công ty tùy ý cấu hình các tour du lịch về giá cả, thời gian, điểm đến, điểm đi, lịch trình chuyến ...', 5, '', '0000-00-00 00:00:00'),
(10, 1, NULL, 3, 'Tour này thích nhỉ', 0, '', '0000-00-00 00:00:00'),
(14, 1, NULL, 1, 'Tour này rất vui', 0, '', '0000-00-00 00:00:00'),
(18, 1, NULL, 2, 'hihi', 0, NULL, '2018-12-26 10:46:14'),
(19, 4, NULL, 2, 'ngoc\r\n', 0, NULL, '0000-00-00 00:00:00'),
(20, 1, NULL, 2, 'hi', 0, NULL, '2018-12-27 04:05:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanhkhach`
--

CREATE TABLE `hanhkhach` (
  `mahanhkhach` int(20) NOT NULL,
  `MaDat` int(20) NOT NULL,
  `tenhanhkhach` varchar(255) NOT NULL,
  `ngaysinh` date NOT NULL,
  `sdt` int(20) DEFAULT NULL,
  `cmnd` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hanhkhach`
--

INSERT INTO `hanhkhach` (`mahanhkhach`, `MaDat`, `tenhanhkhach`, `ngaysinh`, `sdt`, `cmnd`) VALUES
(11, 10, 'Ngọc', '2018-12-20', 366388171, 2342356),
(12, 10, 'Ngọc', '2018-12-14', 366388171, 2342356),
(13, 10, 'Ngọc', '2018-12-14', 366388171, 2342356),
(14, 11, 'Ngọc', '1970-01-01', 366388171, 2342356),
(15, 12, 'Ngọc', '1970-01-01', 366388171, 2342356),
(16, 13, 'Ngọc', '1970-01-01', 366388171, 2342356),
(17, 14, 'Ngọc', '1970-01-01', 366388171, 2342356),
(18, 15, 'Nguyễn Bảo Ngọc', '1998-10-25', 366388171, 194646574),
(19, 16, 'Nguyễn', '2018-12-28', 366388171, 2342356),
(20, 16, 'Lương', '2018-12-14', 356465325, 46477575),
(21, 18, 'Ngọc', '2019-01-17', 366388171, 2342356);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoihanh`
--

CREATE TABLE `khoihanh` (
  `MaNgaykh` int(25) NOT NULL,
  `MaTour` int(20) NOT NULL,
  `ngaykhoihanh` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khoihanh`
--

INSERT INTO `khoihanh` (`MaNgaykh`, `MaTour`, `ngaykhoihanh`) VALUES
(15, 2, '2018-12-30'),
(16, 3, '2018-12-31'),
(17, 1, '2018-12-28'),
(18, 4, '2019-01-03'),
(19, 5, '2019-01-05'),
(20, 7, '2019-01-02'),
(21, 6, '2018-12-28'),
(22, 8, '2018-11-20'),
(23, 10, '2019-01-01'),
(24, 11, '2018-11-28'),
(25, 13, '2018-11-06'),
(26, 14, '2018-12-30'),
(27, 22, '2018-12-26'),
(28, 7, '2019-01-31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitour`
--

CREATE TABLE `loaitour` (
  `MaLoai` varchar(5) CHARACTER SET utf8 NOT NULL,
  `TenLoai` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitour`
--

INSERT INTO `loaitour` (`MaLoai`, `TenLoai`) VALUES
('1', 'Tour Miền Bắc'),
('2', 'Tour Miền Nam'),
('3', 'Tour Miền Trung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanhoi`
--

CREATE TABLE `phanhoi` (
  `MaPH` int(11) NOT NULL,
  `TenNguoiGui` varchar(30) CHARACTER SET utf8 NOT NULL,
  `EmailNguoiGui` varchar(30) CHARACTER SET utf8 NOT NULL,
  `TieuDe` varchar(100) CHARACTER SET utf8 NOT NULL,
  `NoiDung` text CHARACTER SET utf8 NOT NULL,
  `NgayGui` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phanhoi`
--

INSERT INTO `phanhoi` (`MaPH`, `TenNguoiGui`, `EmailNguoiGui`, `TieuDe`, `NoiDung`, `NgayGui`) VALUES
(1, 'Nguyễn Bảo Ngọc', 'nguyenngoc1950@gmail.com', 'Hà Nội - Lào Cai - Sapa ', 'Cho mình hỏi về thời gian củ thể xuất phát ở đâu đc ko ạ?', '2018-11-16 13:21:09'),
(2, 'Trương Văn Dũng', 'tvdung@gmail.com', 'Miền Tây - Sa Đéc - Cần Thơ \r\n\r\n', 'Có hướng dẫn viên nào xinh đẹp trong tour này ko ạ?', '2018-11-16 08:00:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sales`
--

CREATE TABLE `sales` (
  `MaSale` int(20) NOT NULL,
  `MaLoai` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tgian` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gianguoilon` decimal(10,0) NOT NULL,
  `giatreem` int(11) NOT NULL,
  `ngaykhoihanh` date NOT NULL,
  `giokhoihanh` varchar(255) NOT NULL,
  `diemkhoihanh` varchar(255) NOT NULL,
  `ngaythemSale` datetime NOT NULL,
  `slideshow` varchar(255) NOT NULL,
  `startSale` date NOT NULL,
  `stopSale` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sales`
--

INSERT INTO `sales` (`MaSale`, `MaLoai`, `title`, `tgian`, `noidung`, `image`, `gianguoilon`, `giatreem`, `ngaykhoihanh`, `giokhoihanh`, `diemkhoihanh`, `ngaythemSale`, `slideshow`, `startSale`, `stopSale`) VALUES
(1, 1, 'Hà Nội - Lào Cai', '3 ngày', 'Quý khách tập trung tại sân bay Tân Sơn Nhất - ga đi trong nước. Hướng dẫn viên làm thủ tục cho đoàn đáp chuyến bay đi Hà Nội.\r\nXe Vietravel đón đoàn tại sân bay Nội Bài, khởi hành đi Sa Pa theo cung đường cao tốc hiện đại và dài nhất Việt Nam.\r\nĐến Sapa, nhận phòng nghỉ ngơi. Buổi chiều quý khách thăm \r\n- Bản Tả Van - Lao Chải đường vào Tả Van quanh co một bên là thung lũng Mường Hoa với những thửa ruộng bậc thang màu mỡ được tổ điểm bởi màu xanh của ngô và lúa.\r\n- Thăm những nếp nhà của người Mông, Dao, Giáy trong bản, du khách sẽ không khỏi ngỡ ngàng trước vẻ đẹp bình dị, mộc mạc. \r\nBuổi tối Quý khách dạo phố, ngắm nhà thờ Đá Sapa, tự do thưởng thức đặc sản vùng cao như: thịt lợn cắp nách nướng, trứng nướng, rượu táo mèo, giao lưu với người dân tộc vùng cao. \r\nNghỉ đêm tại Sapa.\r\n', '5bff5dd88d045-5bf4d9ba1f286-a.jpg', '4999000', 2500000, '2019-01-05', '8:00', 'Sân bay Tân Sơn Nhất', '2018-11-20 06:17:47', '5bff5dd89fb7a-5bf4d9ba1f286-a.jpg', '2018-12-26', '2018-12-31'),
(2, 2, 'Miền Tây - Làng Bè Châu Đốc ', '2 ngày', 'Tập trung tại Vietravel (190 Pasteur, Phường 6, Quận 3, Tp.HCM), khởi hành đi Châu Đốc. Dừng tại Long Định (Tiền Giang) tìm hiểu nghề trồng cacao, dùng thử socola tại xưởng Ông già Socola. Vượt cầu Cần Thơ bắc qua sông Hậu, đến nhà hàng dùng cơm trưa. Đoàn đi xuyên thành phố Long Xuyên (tỉnh An Giang) và được nghe giới thiệu về ngành xuất khẩu thủy sản (cá basa) hàng đầu Việt Nam. Buổi chiều khi đến Châu Đốc, Quý khách xuống tàu khám phá Làng cá bè đặc trưng trên dòng sông Hậu. Ngắm ánh mặt trời dần buông xuống trên đồng lúa mênh mông khu vực biên giới Campuchia tại chùa hang Phước Điền cùng câu chuyện về đôi mãng xà hướng thiện nơi cửa Phật. Đoàn nhận phòng khách sạn, ăn tối và tự do dạo bộ hoặc trải nghiệm phương tiện xe lôi độc đáo vía Miếu Bà Chúa Xứ về đêm. \r\nNghỉ đêm tại Châu Đốc.\r\n', '5c107f7625030-tfd_180711024124_505595.jpg', '4200000', 2500000, '2019-01-22', '8:00', 'Sài Gòn', '2018-11-21 05:49:55', '5c107f763615c-tfd_180711024124_505595.jpg', '2018-12-30', '2019-01-08'),
(3, 1, 'Hà Nội - Lào Cai - Sapaa', '3 ngày', ' Bản Tả Van - Lao Chải đường vào Tả Van quanh co một bên là thung lũng Mường Hoa với những thửa ruộng bậc thang màu mỡ được tổ điểm bởi màu xanh của ngô và lúa.', '5c10804f1a5d3-tfd_171127102714_577634.jpg', '8500000', 3500000, '2018-11-30', '8:00', 'Sài Gòn', '2018-11-25 05:26:29', '5c10804f2a1a4-tfd_171127102714_577634.jpg', '2018-11-20', '2018-11-21'),
(4, 2, 'Phú Yên - Quy Nhơn ', '3 ngày', 'Quý khách tập trung tại cột số 5 ga đi trong nước Sân bay Tân Sơn Nhất, hướng dẫn viên hỗ trợ làm thủ tục cho Quý khách đáp chuyến bay đi Phú Yên. Đến sân bay Tuy Hòa (Phú Yên), hướng dẫn viên đón Quý khách đi tham quan:\r\n- Gành Đá Dĩa: thắng cảnh độc nhất vô nhị của tỉnh Phú Yên và của Quốc Gia. Trên đường đi Quý khách còn được chiêm ngưỡng cảnh Đầm Ô Loan.\r\n- Nhà Thờ Mằng Lăng: nơi còn lưu giữ cuốn kinh thánh bằng chữ Quốc Ngữ đầu tiên của Việt Nam.\r\nĐoàn khởi hành đi Quy Nhơn tham quan:\r\n- Khu du lịch Ghềnh Ráng Tiên Sa, viếng mộ nhà thơ Hàn Mặc Tử.\r\n- Bãi Trứng (Bãi tắm Hoàng Hậu): với hàng ngàn viên đá khổng lồ hình dáng độc đáo, du khách sẽ có được cảm giác tuyệt vời khi giẫm bàn chân trần lên những viên đá tròn, nhẵn như trứng chim khổng lồ, nằm xếp lên nhau trên bãi biển, là nơi nghỉ dưỡng dành riêng cho Nam Phương Hoàng Hậu.\r\nĂn tối, nhận phòng và nghỉ đêm tại Quy Nhơn.\r\n', '5c108123cc17d-tfd_180406071516_658268.jpg', '8500000', 6450000, '2019-01-05', '8:00', 'Sân bay Tân Sơn Nhất', '2018-12-12 04:31:47', '5c108123cc897-tfd_180406071516_658268.jpg', '2018-11-06', '2018-11-22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `MaTV` int(11) NOT NULL,
  `usename` varchar(255) NOT NULL,
  `passTV` varchar(255) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `gioitinh` varchar(11) NOT NULL,
  `emailTV` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `soCMT` int(20) NOT NULL,
  `soDT` int(30) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`MaTV`, `usename`, `passTV`, `hoten`, `gioitinh`, `emailTV`, `diachi`, `soCMT`, `soDT`, `role`) VALUES
(1, 'ngocbao', 'e10adc3949ba59abbe56e057f20f883e', 'Bảo Ngọc', 'Nam', 'ngocbao@gmail.com', 'Quảng Bình', 194646574, 366388171, 'user'),
(2, 'thuong', 'e10adc3949ba59abbe56e057f20f883e', 'Duy Thường', 'Nam', 'duythuong@gmail.com', 'Quảng Ngãi', 1446285325, 123456789, 'user'),
(3, 'tung', 'e10adc3949ba59abbe56e057f20f883e', 'Văn Tùng', 'Nam', 'tung@gmail.com', 'Quảng Nam', 1648465321, 346778956, 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `MaTinTuc` int(11) NOT NULL,
  `TenTinTuc` varchar(30) CHARACTER SET utf8 NOT NULL,
  `AnhTT` varchar(255) CHARACTER SET utf8 NOT NULL,
  `NoiDung` text CHARACTER SET utf8 NOT NULL,
  `NgayGuiTT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`MaTinTuc`, `TenTinTuc`, `AnhTT`, `NoiDung`, `NgayGuiTT`) VALUES
(1, 'DU XUÂN HỘI AN, VỀ MIỀN KÝ ỨC ', '5bfbab6a25337-a.jpg', 'Trò diễn bài chòi Hội An sử dụng 4 làn điệu chính: Xuân nữ, Cổ bản, Xàng xê, hò Quảng. Chỉ với hai nhạc cụ là trống cái và đàn nhị, nhưng với sự phối hợp ăn ý của các nhạc công, cùng diễn xướng đầy say mê nhiệt tình của các anh hiệu, đêm hội bài chòi khiến cuộc vui náo nức.\r\n\r\nDu xuân Hội An, về miền ký ức bạn sẽ được thưởng thức giọng hát ngọt ngào truyền cảm, ứng đối tài tình qua những câu ca dao, bài thơ, bài vè gần gũi với đời thường, ca ngợi tình làng nghĩa xóm hay phê phán những thói hư tật xấu chính là nét hấp dẫn đối với người chơi bài chòi. Từ tính chất dân gian, mộc mạc như vậy, dần dần bài chòi đã phát triển thành nghệ thuật quần chúng.\r\n\r\nNăm 1996, nhà hát nghệ thuật cổ truyền Hội An thuộc Trung tâm văn hóa - thể thao Hội An ra đời là dấu mốc đưa bài chòi Hội An lên sân khấu biểu diễn. Hai năm sau, không gian diễn xướng của bài chòi Hội An được mang ra phố trình diễn trong chương trình “Đêm phố cổ”. Từ một thú chơi dân dã, món ăn tinh thần của người dân, nghệ thuật bài chòi chính thức được UNESCO công nhận là Di sản văn hóa phi vật thể vào ngày 7/12/2017.\r\n\r\n', '2018-11-26 09:14:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `MaTour` int(25) NOT NULL,
  `MaLoai` int(20) NOT NULL,
  `TenTour` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tgian` varchar(255) CHARACTER SET utf8 NOT NULL,
  `NoiDungTour` text CHARACTER SET utf8 NOT NULL,
  `AnhTour` varchar(255) CHARACTER SET utf8 NOT NULL,
  `GiaNguoiLon` int(123) NOT NULL,
  `GiaTreEm` int(123) NOT NULL,
  `DiemKhoiHanh` varchar(100) CHARACTER SET utf8 NOT NULL,
  `NgayThem` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`MaTour`, `MaLoai`, `TenTour`, `tgian`, `NoiDungTour`, `AnhTour`, `GiaNguoiLon`, `GiaTreEm`, `DiemKhoiHanh`, `NgayThem`) VALUES
(1, 1, 'Phú Quốc - Vinpearl Oasis Resort - Thỏa Thích Vui Chơi Tại Vinpearl Land & Safari - Thưởng Thức Cock', '3 ngày', 'Quý khách tập trung tại sân bay Tân Sơn Nhất, quầy Vietravel, cột số 5 ga đi Trong Nước. Hướng dẫn viên làm thủ tục cho Quý khách đáp chuyến bay đi Phú Quốc. Xe đón đoàn tại sân bay di chuyển về nhận phòng ăn trưa, nghỉ ngơi tại Khu nghỉ dưỡng cao cấp VinOasis Phú Quốc. Buổi chiều xe đưa Quý Khách đến bán đảo Nam Nghi cho trải nghiệm “đuổi bắt ánh mặt trời”. Chỉ sau 10 phút tản bộ xuyên giữa 2 hàng cây rợp bóng mát, 1 mặt nước trong xanh lấp lánh những tia nắng quyến luyến cuối cùng của ngày sẽ từ từ hiện ra ngập tràn tầm mắt Quý khách. Bên cầu tàu gỗ mộc mạc, Quý khách sẽ bắt gặp từng đàn cá đủ sắc màu đang tận hưởng cuộc sông tự do giữa đại dương xanh, tranh nhau từng vụn bánh mỳ được sẻ chia từ du khách phương xa. Khi cái nắng dịu lại thì cũng chính là lúc thời khắc chuyển giao giữa ngày và đêm càng xuất hiện rõ hơn trên chuyến tàu ngắn ngủi bồng bềnh nhẹ nhàng đưa Quý khách từ bán đảo Nam Nghi ra mỏm đá nổi Rock Island quyến rũ. Thưởng thức 1 ly cocktail thơm dịu, tin chắc rằng những bộn bề lo toan của phố thị xô bồ sẽ được bỏ lại phía sau và Quý khách sẽ bắt được khoảnh khắc “mặt trời đôi” khi mặt trời và mặt biển như hòa làm một: Mặt nước tựa 1 tấm gương khổng lồ óng ánh phản chiếu cả ánh mặt trời và phản chiếu cả những điều sâu thẳm không nói thành lời trong lòng người.. Rồi trong chớp mắt bóng đêm bao phủ hoàn toàn mọi vật. Trong trường hợp biển động, hoặc bão, tàu không ra được bán đảo Nam Nghi, Quý khách sẽ ngồi lại Nhà hàng khách sạn Nam Nghi thưởng thức nước uống và ngắm hoàng hôn.\r\nSau đó, tiếp tục di chuyển về VinOasis Phú Quốc ăn tối, nghỉ ngơi. ', '5c238e00a49ab-tải xuống.jpg', 8590000, 8590000, 'Hồ Chí Minh', '2018-12-26 03:19:44'),
(3, 2, 'Đồng Nai - Núi Chứa Chan - Chương trình hành hương viếng chùa (Tour Giá Sốc) - Tết Dương Lịch', '4 ngày', 'Quý khách tập trung tại văn phòng Vietravel (190 Pasteur, Phường 06, Quận 3, TPHCM ) khởi hành đi chinh phục Núi Chứa Chan hùng vĩ - Ngọn núi cao thứ hai ở Đông Nam Bộ, đoàn đi lên bằng cáp treo và đi bộ xuống khoảng 1000 bậc tam cấp trải nghiệm:\r\n- Thưởng ngoạn khung cảnh đất trời ngoạn mục từ độ cao khoảng 800 mét giữa khung cảnh thiên nhiên, rừng cây bạt ngàn xanh mát.\r\n- Thắp hương cúng Phật tại Chùa Bửu Quang (Chùa Gia Lào) - Xây dựng đầu thế kỷ XX với quần thể kiến trúc điều dựa vào những hang động thiên nhiên, tạo nên nét độc đáo giữa chốn thâm nghiêm kỳ vĩ của núi rừng.\r\n- Chiêm viếng Cây da “ba gốc một ngọn” - Được xem là chốn linh thiêng cho du khách thập phương hành lễ cầu mong may mắn, bình an, gia đình được mạnh khỏe. \r\n- Tiếp tục hành trình lễ Phật, Quý khách viếng thăm Chùa Quảng Đạo, Chùa Bửu Pháp, Chùa Nghĩa Phương tất cả góp phần tạo thành một quần thể thắng cảnh núi Chứa Chan độc đáo ở Đông Nam Bộ.\r\n- Dọc hành trình đoàn có thể tự do thưởng thức bánh xèo với rau rừng hoặc chọn mua các loại nam dược lấy từ núi như: khổ qua núi, chuối hột, sâm liên tử, mật nhân… (chi phí tự túc)\r\nQuý khách dùng bữa trưa, tiếp tục hành trình tham quan:\r\n- Bảo Sơn Tự - Ngôi chánh điện đã được kiến tạo trang nghiêm cùng pho tượng Đức Quán Thế Âm lộ thiên bằng đá nguyên khối cao 5 mét.\r\n- Chùa Long Thọ - Mang vẻ đẹp riêng trên vùng đất đỏ nhiều nắng cháy của thị trấn Xuân Lộc, lối vào chùa thẳng tắp có pho tượng Quan Âm tay cầm bầu tịnh thuý đứng trong sân tạo ra hai lối nhỏ vào chùa mở ra không gian yên tĩnh, thanh tịnh.\r\n- Thiền Viện Thường Chiếu - Một trong những trung tâm Thiền học lớn thuộc dòng Thiền Trúc Lâm do Hòa thượng Thích Thanh Từ khởi xướng vào cuối thế kỷ XX, và hiện đang phát triển mạnh mẽ ở Việt Nam cùng một số nơi trên thế giới, góp phần làm đa dạng hơn nữa Phật giáo ở Việt Nam\r\nXe đưa Quý khách về lại TP. HCM, kết thúc chuyến hành hương tại điểm đón ban đầu. Chia tay Quý khách và hẹn gặp lại.', '5c23915c88934-tfd_181128023107_812000.jpg', 5670000, 1450000, 'Hồ Chí Minh', '2018-12-26 03:34:04'),
(5, 3, 'Đà Nẵng - Bà Nà(Cầu Vàng) - Sơn Trà - Hội An - KDL Thần Tài - Đà Nẵng (Khách sạn 4 sao. Tour Tiêu Ch', '3 ngày', 'Quý khách tập trung tại cột số 5 Ga đi trong nước, sân bay Tân Sơn Nhất. Hướng dẫn viên hỗ trợ làm thủ tục cho đoàn đáp chuyến bay đi Đà Nẵng. Tại sân bay Đà Nẵng xe và HDV Vietravel đón đoàn đi tham quan: \r\n- Bán đảo Sơn Trà, viếng Chùa Linh Ứng - Nơi đây có tượng Phật Quan Thế Âm cao nhất Việt Nam, đứng nơi đây, Quý khách sẽ được chiêm ngưỡng toàn cảnh thành phố, núi rừng và biển đảo Sơn Trà một cách hoàn hảo nhất. \r\nChiều xe đưa Quý khách đi tham quan :\r\n- Phố Cổ Hội An - Chùa Cầu, Nhà Cổ Phùng Hưng, Hội Quán Phước Kiến, Cơ sở Thủ Công Mỹ Nghệ,…Quý khách tự do thưởng thức trà & bánh cookie Reaching Out Tea House quán trà đặc biệt của hội những người khuyết tật, …. (chi phí tự túc). \r\n- Công Viên Ấn tượng Hội An - Tái hiện Hội An của quá khứ, một cảng thị quốc tế sầm uất với sự hiện diện của các nền văn hóa Á, Âu với rất nhiều mini shows tương tác như Trại Hò Đả Hổ, Bà Chúa Tằm Tang, Phụng Nguyệt Tửu Lầu, Đám cưới Ngọc Hoa Công Chúa; tìm hiểu nghề nuôi tằm ươm tơ, quay tơ dệt lụa bằng khung cửi, làm bánh đậu xanh Hội An, thưởng thức trà đạo phong cách Nhật Bản ….\r\n- Tặng Show Ký Ức Hội An - Chương trình biểu diễn thực cảnh quy mô hoành tráng, được xem là một trong những siêu phẩm nghệ thuật. Sau khi xem show đoàn quay về Đà Nẵng nhận phòng. Nghỉ đêm tại Đà Nẵng. ', '5c2394c4828e7-tfd_181016042552_334262.jpg', 5790000, 1500000, 'Hà Hội', '2018-12-26 03:48:36'),
(6, 1, 'Đà Lạt - Madagui - Đồi chè Cầu Đất - Cà phê Mê Linh (Tour Tiết Kiệm)', '7 Ngày', 'Quý khách tập trung tại Vietravel (190 Pasteur, Q3, Tp.HCM), Xe khởi hành đi Đà lạt. Trên đường đi Quý khách dừng chân ăn sáng. Vượt Đèo Chuối, đoàn tham quan:\r\n- Khu du lịch Rừng Madagui - khu sinh thái rừng có bộ sưu tập tre với gần năm mươi chủng loại, sự đa dạng của gần một trăm giống cây ăn trái đang tuổi ra hoa kết trái bên cạnh những trò chơi đầy thử thách và ấn tượng: Công Viên Thần Núi, được ngắm Cầu Treo bắc qua dòng sông Đạ Huoai, Đường Đi Bộ Trên Không khám phá rừng sinh thái - Hồ cá sấu - Hang Tử Thần - Thiên Phúc Sơn Động - Trượt cỏ, Zipline… (tự túc vé trò chơi).\r\nĂn trưa tại Nhà Hàng. Buổi chiều, Quý khách khởi hành đến Đà lạt. Đoàn ăn tối và nhận phòng. Nghỉ đêm tại Đà Lạt.', '5c239c88ac24e-tfd_180110052513_804359.jpg', 5600000, 1200000, 'Hồ Chí Minh', '2018-12-26 04:21:44'),
(7, 1, ' Hà Nội - Bái Đính - Tràng An - Hạ Long - Yên Tử (Khách sạn 3 sao và 4 sao, Tour Tiết Kiệm)', '6 ngày', 'Quý khách tập trung tại sân bay Tân Sơn Nhất (ga nội địa), hướng dẫn viên hỗ trợ khách làm thủ tục đáp chuyến bay đi Hà Nội. Đến nơi, đoàn khởi hành đi Ninh Bình, tham quan: \r\n- Chùa Bái Đính: là một quần thể chùa với nhiều kỷ lục Việt Nam như chùa có diện tích lớn nhất, tượng phật bằng đồng lớn nhất, nhiều tượng Phật La Hán nhất.\r\n- Khu Du Lịch Tràng An: di sản văn hóa & thiên nhiên thế giới được UNESCO công nhận năm 2015 có phong cảnh thiên nhiên non nước hữu tình, thuyền chèo đưa Quý khách tham quan 3 điểm tâm linh là Đền Trình, Đền Trần và Phủ Khống, xuyên qua các hang động như: Hang Tối, Hang Sáng, Hang Nấu Rượu, Hang Ba Giọt.\r\nNghỉ đêm tại Ninh Bình', '5c2395f402e59-tfd_180118103837_784895.jpg', 6700000, 2360000, 'Đà Nẵng', '2018-12-26 03:53:40'),
(8, 3, 'Huế - La Vang - Động Phong Nha & Thiên Đường - Bà Nà - Hội An - Đà Nẵng', '3 ngày', 'Quý khách tập trung tại Cột 5, sân bay Tân Sơn Nhất, hướng dẫn viên Vietravel hỗ trợ làm thủ tục Quý khách đáp chuyến bay đi Huế. Tại sân bay Phú Bài - Huế, xe đón đoàn tham quan: \r\n- Lăng Tự Đức - Nơi có phong cảnh sơn thủy hữu tình và được cho là một trong những lăng tẩm có kiến trúc đẹp nhất của các vua chúa nhà Nguyễn \r\n- Đại Nội - Hoàng cung xưa của 13 vị vua triều Nguyễn, tham quan Ngọ Môn, Điện Thái Hòa, Tử Cấm Thành, Thế Miếu, Hiển Lâm Các, Cửu Đình.\r\n- Chùa Thiên Mụ - Ngôi chùa được xem là cổ nhất ở Huế và là nơi lưu giữ nhiều cổ vật quý giá không chỉ về mặt lịch sử mà còn cả về nghệ thuật.\r\n- Sau khi ăn tối xe đưa đoàn tham quan “Kỳ đài Huế” – Chiêm ngưỡng màn trình diễn ánh sáng theo công nghệ hiện đại với hơn 1.000 đèn led được bố trí bao bọc xung quanh và xuyên suốt kỳ đài. “Thắp sáng Kỳ Đài Huế” là sự kiện thuộc chuỗi dự án “Huế - Sáng và Sống” do Công ty Vietravel đầu tư và phối hợp thực hiện cùng UBND tỉnh Thừa Thiên - Huế. Nghỉ đêm tại Huế.', '5c239d70113ec-tfd_181012044041_560688.jpg', 1590000, 500000, 'Hồ Chí Minh', '2018-12-26 04:25:36'),
(10, 3, 'Phan Thiết - Mũi Né - Bàu Trắng - Làng Chài Xưa - Thưởng Thức Lẩu Thả (Tặng vé Fishermen Show. Mường', '3 ngày', 'Quý khách tập trung tại Công ty Vietravel (190 Pasteur, Phường 6, Quận 3, TP.HCM) khởi hành đi Phan Thiết. Quý khách ăn sáng trên cung đường đi. Đến Phan Thiết đoàn tham quan:\r\n- Lâu đài Rượu Vang RD: nghe giới thiệu về quy trình sản xuất, đóng chai và thưởng thức một trong những loại rượu vang hảo hạng nổi tiếng thế giới được xuất xứ từ Thung Lũng Napa (Mỹ). \r\n- Nhận phòng tự do nghỉ ngơi, tắm biển hồ bơi tại khách sạn/resort\r\n- Ăn tối – thưởng thức hải sản Phan Thiết.\r\nBuổi tối Quý khách tự do dạo phố khám phá Mũi Né về đêm,…Nghỉ đêm tại Mũi Né. \r\n\r\nXem nội dung đầy đủ tại: https://travel.com.vn/tourNDSGN555-002-080119XE-V/phan-thiet-mui-ne-bau-trang-lang-chai-xua-thuong-thuc-lau-tha-tang-ve-fishermen-show-muong-thanh-holiday-4sao-tour-tiet-kiem.aspx\r\nNguồn: travel.com.vn', '5c239f5a94c78-tfd_170519054038_834250.jpg', 5000000, 1500000, 'Hồ Chí Minh', '2018-12-26 04:33:46'),
(11, 2, 'Cần Giờ - Vàm Sát (Tour Giá Sốc)', '3 ngày', 'Xe đón Quý khách tại Vietravel (190 Pasteur, Phường 6, Quận 3, TPHCM) khởi hành đi Cần Giờ.Trên đường nghe giới thiệu về Sài Gòn - Hòn Ngọc Viễn Đông với nhiều đổi thay sau 320 năm.\r\nĐến trạm tiếp đón Dần Xây, Quý khách lên Cano khởi hành đi Vàm Sát, thưởng ngoạn cảnh quan sông nước, hệ thực vật đặc trưng của Khu Dự trữ sinh quyển thế giới Cần Giờ – lá phổi xanh của thành phố mang tên Bác. \r\n- Thuyền chèo đưa Quý khách len lõi trong rừng Đước – một phong cảnh thiên nhiên đẹp như tranh vẽ, đến với khu Bảo tồn Dơi Nghệ được UBND TP.HCM công nhận vào năm 2004; tham gia trò chơi \"Câu cua giải trí\".\r\nTham quan khu trung tâm du lịch Vàm Sát tìm hiểu về quá trình phục hồi và phát triển rừng ngập mặn Cần Giờ. Quý khách lên xe điện đi tham quan: \r\n- Khu Bảo tồn Cá Sấu Hoa Cà - tìm hiểu về qui trình ấp trứng Cá Sấu, đặc biệt là tham gia trò chơi cảm giác mạnh “ Du thuyền câu Cá Sấu”.\r\n- Đàn Khỉ đuôi dài sống hoang dã tự nhiên, rất tinh nghịch nhưng cũng rất thân thiện với con người\r\n- Chinh phục Tháp Tang Bồng cao 26m để chiêm ngưỡng vẽ đẹp toàn cảnh của Khu Dự trữ sinh quyển rừng ngập mặn từ trên cao\r\nDùng cơm trưa tại Nhà hàng Vàm Sát với các món đặc sản: gỏi thòi lòi lìm kìm, tôm sú hấp, cá kho tộ, sườn ram, rau thập cẩm chấm mắm kho quẹt, lẩu hải sản & bún. Sau đó, Quý khách tự do thử thách với chiếc cầu treo, ngắm đàn Nai rừng hiền hoà thân thiện…\r\n \r\nQuý khách tiếp tục hành trình đến với Trung Tâm triển lãm Yến Sào Việt Nam tham quan mô hình nhà Yến, tìm hiểu quá trình dẫn dụ chim Yến về làm tổ, quy trình xử lý Yến Sào thủ công và thưởng thức Yến Sào Việt Nam với trái cây, mật ong, sữa tươi, đường phèn và trải nghiệm dịch vụ Tắm sữa đẹp da trong bồn thư giãn (chi phí tự túc)\r\nTạm biệt Cần Giờ, xe đưa Quý khách về điểm đón ban đầu, kết thúc hành trình khám phá Rừng ngập mặn Cần Giờ.', '5c23a16c0dca3-tfd_181117081213_071295.PNG', 5000000, 1500000, 'Hồ Chí Minh', '2018-12-26 04:42:36'),
(13, 1, 'Miền Tây - Làng Bè Châu Đốc - Chùa Hang Phước Điền - Rừng Tràm Trà Sư - Hà Tiên - Phù Dung Cổ Tự - C', '5 ngày', 'Tập trung tại Vietravel (190 Pasteur, Phường 6, Quận 3, Tp.HCM), khởi hành đi Châu Đốc. Dừng tại Long Định (Tiền Giang) tìm hiểu nghề trồng cacao, dùng thử socola tại xưởng Ông già Socola. Vượt cầu Cần Thơ bắc qua sông Hậu, đến nhà hàng dùng cơm trưa. Đoàn đi xuyên thành phố Long Xuyên (tỉnh An Giang) và được nghe giới thiệu về ngành xuất khẩu thủy sản (cá basa) hàng đầu Việt Nam. Buổi chiều khi đến Châu Đốc, Quý khách xuống tàu khám phá Làng cá bè đặc trưng trên dòng sông Hậu. Ngắm ánh mặt trời dần buông xuống trên đồng lúa mênh mông khu vực biên giới Campuchia tại chùa hang Phước Điền cùng câu chuyện về đôi mãng xà hướng thiện nơi cửa Phật. Đoàn nhận phòng khách sạn, ăn tối và tự do dạo bộ hoặc trải nghiệm phương tiện xe lôi độc đáo vía Miếu Bà Chúa Xứ về đêm. \r\nNghỉ đêm tại Châu Đốc.', '5c23ac0671ed8-tfd_180912060726_102831.jpg', 5100000, 1500000, 'Hồ Chí Minh', '2018-12-26 05:27:50'),
(14, 2, 'Phú Quốc - Hòn Móng Tay - Hòn Gầm Ghì - Bùn Khoáng Galina (Khách Sạn 4*, Tour Tiết Kiệm)', '3 ngày', 'Quý khách tập trung tại sân bay Tân Sơn Nhất, làm thủ tục đáp chuyến bay đi Phú Quốc. Đến sân bay Phú Quốc, đoàn tham quan: \r\n       - Suối Tranh: dòng suối mát lạnh, từ trong khe núi nhiều dòng suối nhỏ len lỏi chảy qua rừng cây, khe đá để cùng hoà mình vào dòng chính tạo nên dòng Suối Tranh hiền hoà.\r\n       - Làng chài Hàm Ninh, vườn tiêu, nhà thùng làm nước mắm, cơ sở nuôi cấy Ngọc Trai.\r\n      -  Dinh Cậu: biểu tượng văn hoá và tín ngưỡng của đảo Phú Quốc, là nơi cầu may mắn, cầu an lành và là nơi ngư dân địa phương gởi gắm niềm tin cho một chuyến ra khơi đánh bắt đầy ắp cá khi trở về. \r\n      - Buổi tối, tự do thưởng thức hải sản Phú Quốc (chi phí tự túc). \r\nNghỉ đêm tại Phú Quốc.', '5c23ad986e886-tfd_180912060726_102831.jpg', 3000000, 1000000, 'Hồ Chí Minh', '2018-12-26 05:30:18');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietdat`
--
ALTER TABLE `chitietdat`
  ADD PRIMARY KEY (`MaDat`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`MaCom`);

--
-- Chỉ mục cho bảng `hanhkhach`
--
ALTER TABLE `hanhkhach`
  ADD PRIMARY KEY (`mahanhkhach`);

--
-- Chỉ mục cho bảng `khoihanh`
--
ALTER TABLE `khoihanh`
  ADD PRIMARY KEY (`MaNgaykh`);

--
-- Chỉ mục cho bảng `loaitour`
--
ALTER TABLE `loaitour`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Chỉ mục cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`MaPH`);

--
-- Chỉ mục cho bảng `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`MaSale`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`MaTV`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`MaTinTuc`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`MaTour`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chitietdat`
--
ALTER TABLE `chitietdat`
  MODIFY `MaDat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `MaCom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `hanhkhach`
--
ALTER TABLE `hanhkhach`
  MODIFY `mahanhkhach` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `khoihanh`
--
ALTER TABLE `khoihanh`
  MODIFY `MaNgaykh` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `MaPH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `MaTV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `MaTinTuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

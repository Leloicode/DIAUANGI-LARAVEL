-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 19, 2023 lúc 06:36 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doantotnghiep`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `citys`
--

CREATE TABLE `citys` (
  `IdCity` int(10) NOT NULL,
  `NameCity` varchar(50) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Oustand` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `citys`
--

INSERT INTO `citys` (`IdCity`, `NameCity`, `Image`, `Oustand`, `created_at`, `updated_at`) VALUES
(3, 'Đà Nẵng', 'dn.jpg', 1, '2022-12-10 06:07:07', '2022-12-10 06:07:07'),
(4, 'Quảng Nam', 'du-lich-tam-ky-1_1635410668.jpg', 1, '2022-12-13 04:33:57', '2022-12-13 04:33:57'),
(5, 'Cà mau', 'R637096778929414583.png', 1, '2022-12-13 04:34:20', '2022-12-13 04:34:20'),
(6, 'Nha Trang', 'nhatrangxuanngoc17899161535941-2734-4978-1615448466_680x0.jpg', 1, '2022-12-13 04:34:50', '2022-12-13 04:34:50'),
(7, 'Đà lạt', '03252020082945892-xenhatrangdalat1.jpg', 1, '2022-12-13 04:35:14', '2022-12-13 04:35:14'),
(8, 'Vũng Tàu', 'Trai nghiem thanh pho bien Vung Tau (2).jpg', 0, '2022-12-13 04:35:50', '2022-12-13 04:35:50'),
(9, 'Vinh', 'tp-vinh-1548-1630844055.jpg', 0, '2022-12-13 04:36:05', '2022-12-13 04:36:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `deliciousfood`
--

CREATE TABLE `deliciousfood` (
  `id` int(10) NOT NULL,
  `id_restaurant` int(10) NOT NULL,
  `id_dish` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `deliciousfood`
--

INSERT INTO `deliciousfood` (`id`, `id_restaurant`, `id_dish`) VALUES
(1, 2, 1),
(2, 2, 4),
(3, 3, 4),
(4, 2, 6),
(5, 1, 2),
(6, 1, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dish`
--

CREATE TABLE `dish` (
  `IdDish` int(10) NOT NULL,
  `NameDish` varchar(50) NOT NULL,
  `Id_post` int(10) DEFAULT NULL,
  `ImageDish` varchar(255) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Outstand` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `dish`
--

INSERT INTO `dish` (`IdDish`, `NameDish`, `Id_post`, `ImageDish`, `Description`, `Outstand`, `created_at`, `updated_at`) VALUES
(1, 'Cút lộn xào me', NULL, 'cutlonxaome.jfif', '10 trứng ăn rất là ngon và ấm bụng', 1, '2022-12-13 04:57:50', '2022-12-13 04:57:50'),
(2, 'Trứng vịt lọn', NULL, 'trungvitlon.jpg', 'Quá ngon , giá cả phải chăng', 1, '2022-12-13 05:03:29', '2022-12-13 05:03:29'),
(3, 'Bánh tráng trộn', NULL, 'banhtrangtron.jpg', 'Bánh tráng rất giòn, rất là ngon.', 1, '2022-12-13 05:05:59', '2022-12-13 05:05:59'),
(4, 'Khô Mực Mắm', NULL, 'cach-lam-kho-muc-chien-nuoc-mam.png', 'Rất ngon, món nhậu rất tuyệt vời', 1, '2022-12-13 05:10:04', '2022-12-13 05:10:04'),
(5, 'Bò nhúng ớt', NULL, 'bo-nhung-ot-cay-nhung-da-ghie_11630307438.jpg', 'Cay nồng,tạo cho một cuộc chơi chưa tàn', 1, '2022-12-13 05:11:08', '2022-12-13 05:11:08'),
(6, 'Chân gà nước mắm', NULL, 'z2723093738214-d2b8e66eeffebd8-6434-2095-1630633496.jpg', 'Chân gà tươi ngon,thêm chút cay nồng', 1, '2022-12-13 05:12:54', '2022-12-13 05:12:54'),
(7, 'Bánh nậm', NULL, 'bi-quyet-lam-banh-nam-hue-thom-ngon-kho-cuong.jpg', 'Bánh mềm ngon,dể ăn', 1, '2022-12-13 05:13:59', '2022-12-13 05:13:59'),
(8, 'Bánh bèo', NULL, 'mon-banh-beo.jpg', 'Bánh mềm và ấm bụng, rất ngon', 1, '2022-12-13 05:14:51', '2022-12-13 05:14:51'),
(9, 'Bánh tráng cuốn thịt heo', NULL, 'hinh-anh-banh-trang-cuon-thit-heo.jpg', 'Bánh tráng cuốn thịt heo rất ngon', 0, '2022-12-13 05:16:26', '2022-12-13 05:16:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `evaluate`
--

CREATE TABLE `evaluate` (
  `IdEvaluate` int(10) NOT NULL,
  `Id_Restaurant` int(10) NOT NULL COMMENT 'iD quán ăn',
  `Content` varchar(50) NOT NULL COMMENT 'nội dung đánh giá',
  `Name` varchar(50) NOT NULL COMMENT 'Tên người đánh giá',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `evaluate`
--

INSERT INTO `evaluate` (`IdEvaluate`, `Id_Restaurant`, `Content`, `Name`, `created_at`, `updated_at`) VALUES
(19, 2, '1234', 'Lê Lợi', '2022-12-18 19:38:27', '2022-12-18 19:38:27'),
(20, 2, 'a', 'Lê Lợi', '2022-12-18 19:38:35', '2022-12-18 19:38:35'),
(21, 2, 'oke lắm nhaa', 'Lê Lợi', '2022-12-18 19:45:03', '2022-12-18 19:45:03'),
(22, 3, '123123', 'Lê Lợi', '2022-12-22 01:04:13', '2022-12-22 01:04:13'),
(23, 3, '12312321', 'Lê Lợi', '2023-01-18 22:34:57', '2023-01-18 22:34:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `IdPost` int(10) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Content` longtext NOT NULL,
  `View` int(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `restaurant`
--

CREATE TABLE `restaurant` (
  `IdRestaurant` int(10) NOT NULL,
  `NameRestaurant` varchar(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Id_city` int(10) NOT NULL,
  `Oustand` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `restaurant`
--

INSERT INTO `restaurant` (`IdRestaurant`, `NameRestaurant`, `Address`, `Phone`, `Image`, `Id_city`, `Oustand`, `created_at`, `updated_at`) VALUES
(1, 'Ăn vặt đà nẵng', '04 Đ. Lê Duẩn,Đà Nẵng', '0123456789', 'Ba-Hanh-FoodDrink.jpg', 3, 1, '2022-12-13 04:39:49', '2022-12-13 04:39:49'),
(2, 'Quán nhậu ông lợi', '99 Tô hiến thành,Đà nẵng', '0123456789', 'quan-an-duong-nguyen-thi-minh-khai-nha-trang-1.jpg', 3, 1, '2022-12-13 05:08:38', '2022-12-13 05:08:38'),
(3, 'Bún Bò Đá Chẹt', '98 hồ xuân hương ,đà nẵng', '0357801312', 'bun-dau-nia-thai-nguyen-nha-trang.jpg', 6, 1, '2022-12-13 06:42:22', '2022-12-13 06:42:22'),
(4, 'Quán ăn vặt Greeny', '28 Nguyễn Thị Minh Khai, Lộc Thọ, Nha Trang, Khánh Hòa 650000', '0123456858', 'ROMA.jpg', 6, 1, '2022-12-13 06:44:08', '2022-12-13 06:44:08'),
(5, 'Quán Cơm cháy chà bông Cu Rum', '17 Nguyễn Hữu Huân, Phước Tiến, Nha Trang, Khánh Hòa 650000', '0123456789', 'top-5-quan-an-sang-chay-sieu-ngon-tai-sai-gon-202101231422248978.jpg', 6, 1, '2022-12-13 06:44:55', '2022-12-13 06:44:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `IdUser` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`IdUser`, `username`, `password`, `created_at`, `updated_at`) VALUES
(6, 'admin', '123123', '2022-12-10 05:28:18', '2022-12-10 05:28:18');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `citys`
--
ALTER TABLE `citys`
  ADD PRIMARY KEY (`IdCity`);

--
-- Chỉ mục cho bảng `deliciousfood`
--
ALTER TABLE `deliciousfood`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_restaurant` (`id_restaurant`),
  ADD KEY `id_dish` (`id_dish`);

--
-- Chỉ mục cho bảng `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`IdDish`),
  ADD KEY `Id_post` (`Id_post`),
  ADD KEY `Id_post_2` (`Id_post`);

--
-- Chỉ mục cho bảng `evaluate`
--
ALTER TABLE `evaluate`
  ADD PRIMARY KEY (`IdEvaluate`),
  ADD KEY `Id_Post` (`Id_Restaurant`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`IdPost`);

--
-- Chỉ mục cho bảng `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`IdRestaurant`),
  ADD KEY `Id_city` (`Id_city`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `citys`
--
ALTER TABLE `citys`
  MODIFY `IdCity` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `deliciousfood`
--
ALTER TABLE `deliciousfood`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `dish`
--
ALTER TABLE `dish`
  MODIFY `IdDish` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `evaluate`
--
ALTER TABLE `evaluate`
  MODIFY `IdEvaluate` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `IdPost` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `IdRestaurant` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `IdUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `deliciousfood`
--
ALTER TABLE `deliciousfood`
  ADD CONSTRAINT `deliciousfood_ibfk_1` FOREIGN KEY (`id_dish`) REFERENCES `dish` (`IdDish`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deliciousfood_ibfk_2` FOREIGN KEY (`id_restaurant`) REFERENCES `restaurant` (`IdRestaurant`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `dish`
--
ALTER TABLE `dish`
  ADD CONSTRAINT `dish_ibfk_1` FOREIGN KEY (`Id_post`) REFERENCES `posts` (`IdPost`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `evaluate`
--
ALTER TABLE `evaluate`
  ADD CONSTRAINT `evaluate_ibfk_1` FOREIGN KEY (`Id_Restaurant`) REFERENCES `restaurant` (`IdRestaurant`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `restaurant_ibfk_1` FOREIGN KEY (`Id_city`) REFERENCES `citys` (`IdCity`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 16, 2022 lúc 09:31 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phone'sstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Accer'),
(2, 'Vmart'),
(3, 'Sony'),
(4, 'SamSung'),
(5, 'Xiaome');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `category_id` varchar(5) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
('BT', 'Loa BlueTooth'),
('DISK', 'HDD/SSD'),
('PDT', 'Pin Điện Thoại'),
('PMT', 'Pin Máy Tính'),
('RAM', 'RAM'),
('TN', 'Tai Nghe BlueTooth');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Yourname` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `cmnd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`customer_id`, `Username`, `Email`, `Yourname`, `Phone`, `Password`, `address`, `cmnd`) VALUES
(17, 'abc', 'abcd@gmail.com', 'Tâm', '0334596482', '$2y$10$A7xhar9nck9ul', NULL, NULL),
(27, 'TranPhuYen', 'phuyen329@gmail.com', 'Yên Trần', '0334596482', 'e10adc3949ba59abbe56', NULL, NULL),
(28, 'Thanh', 'as@gmail.com', 'Yên Trần', '0334596482', '5987e44e1c1c158c5a5a', NULL, NULL),
(33, 'Nguyễn ', 'DH51800004@student.stu.edu.vn', 'Trần Yên', '0334596482', 'e10adc3949ba59abbe56', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `introduce`
--

CREATE TABLE `introduce` (
  `id` int(11) NOT NULL,
  `Pro_name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `HC` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `introduce`
--

INSERT INTO `introduce` (`id`, `Pro_name`, `image`, `price`, `HC`) VALUES
(1, 'Webcam 720p Logitech C505 Đen ', 'WC01.jpg', 1100000, b'1'),
(2, 'Dây Nguồn Adapter', 'Adapter01.jpg', 50000, b'1'),
(3, 'Bao da Xiaomi Redmi Note 9S ', 'BD01_xiaomi.webp', 150000, b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `note` varchar(50) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `order_status` tinyint(4) NOT NULL,
  `order_date` date DEFAULT NULL,
  `required_date` date NOT NULL,
  `shipped_date` date DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `name`, `phone`, `address`, `note`, `total`, `order_status`, `order_date`, `required_date`, `shipped_date`, `store_id`, `staff_id`) VALUES
(223, 17, 'PetShop ', '123456', 'A9_23,Chung Cư Tân Mỹ,Phường Tân Phú,Quận 7', 'tam', 700000, 1, '0000-00-00', '0000-00-00', '0000-00-00', NULL, NULL),
(224, 17, 'PetShop ', '123456', 'A9_23,Chung Cư Tân Mỹ,Phường Tân Phú,Quận 7', 'tam', 700000, 1, '0000-00-00', '0000-00-00', '0000-00-00', NULL, NULL),
(225, 17, 'PetShop ', '123456', 'A9_23,Chung Cư Tân Mỹ,Phường Tân Phú,Quận 7', 'tam', 1400000, 1, '0000-00-00', '0000-00-00', '0000-00-00', NULL, NULL),
(226, 17, 'PetShop ', '123456', 'A9_23,Chung Cư Tân Mỹ,Phường Tân Phú,Quận 7', 'tam', 1400000, 1, '0000-00-00', '0000-00-00', '0000-00-00', NULL, NULL),
(227, 17, 'PetShop ', '123456', 'A9_23,Chung Cư Tân Mỹ,Phường Tân Phú,Quận 7', 'tam', 1400000, 1, '0000-00-00', '0000-00-00', '0000-00-00', NULL, NULL),
(228, 17, 'Balo-Shop', '123456', 'A9_23,Chung Cư Tân Mỹ,Phường Tân Phú,Quận 7', 'tam', 700000, 1, '0000-00-00', '0000-00-00', '0000-00-00', NULL, NULL),
(229, 17, 'Balo-Shop', '123456', 'A9_23,Chung Cư Tân Mỹ,Phường Tân Phú,Quận 7', 'tam', 700000, 1, '0000-00-00', '0000-00-00', '0000-00-00', NULL, NULL),
(230, 17, 'Balo-Shop', '123456', 'A9_23,Chung Cư Tân Mỹ,Phường Tân Phú,Quận 7', 'tam', 700000, 1, '0000-00-00', '0000-00-00', '0000-00-00', NULL, NULL),
(231, 17, 'Balo-Shop', '123456', 'A9_23,Chung Cư Tân Mỹ,Phường Tân Phú,Quận 7', 'tam', 700000, 1, '0000-00-00', '0000-00-00', '0000-00-00', NULL, NULL),
(232, 17, 'Balo-Shop', '123456', 'A9_23,Chung Cư Tân Mỹ,Phường Tân Phú,Quận 7', 'tam', 700000, 1, '0000-00-00', '0000-00-00', '0000-00-00', NULL, NULL),
(233, 17, 'PetShop ', '123456', 'A9_23,Chung Cư Tân Mỹ,Phường Tân Phú,Quận 7', 'tam', 700000, 1, '0000-00-00', '0000-00-00', '0000-00-00', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `items_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_items`
--

INSERT INTO `order_items` (`items_id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(196, 223, 1, 1, 700000),
(197, 224, 1, 1, 700000),
(198, 225, 1, 1, 700000),
(199, 225, 7, 1, 700000),
(200, 226, 1, 1, 700000),
(201, 226, 7, 1, 700000),
(202, 227, 1, 1, 700000),
(203, 227, 7, 1, 700000),
(204, 228, 1, 1, 700000),
(205, 229, 1, 1, 700000),
(206, 230, 1, 1, 700000),
(207, 231, 1, 1, 700000),
(208, 232, 1, 1, 700000),
(209, 233, 1, 1, 700000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `category_id` varchar(5) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `Decription` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `brand_id`, `category_id`, `quantity`, `price`, `image`, `Decription`, `status`) VALUES
(1, 'Tai Nghe Bluetooth Xiaomi', 1, 'TN', 0, 700000, 'WC01.jpg', '', 1),
(2, 'Tai nghe Bluetooth Xiaomi Redmi Air Dots', 5, 'TN', NULL, 550000, 'TN01_xiaomi.jpg', '-Trang bị  Bluetooth 5.0 , bạn có thể tận hưởng tốc độ truyền dữ liệu nhanh gấp 2 lần , kết nối nhanh hơn 1,7 lần so với BT 4.2.\r\n\r\n– Loa lớn 7.2mm cho dải âm rộng hơn và âm thanh tuyệt vời hơn.\r\n\r\n– Công nghệ DSP thông minh để giảm tiếng ồn và cải thiện chất lượng âm thanh.\r\n\r\n– Chỉ có trọng lượng 4,1g ,thoải mái khi đeo và không dễ rơi ra ngoài.\r\n\r\n– Thời gian sử dụng pin 4 + 12 giờ . \r\n\r\n– Dock sạc có thể sạc đầy tai nghe 2 lần\r\n\r\n– Tai nghe Air Dots hỗ trợ Siri, Xiao AI và Google Assistant để giúp bạn nhận chỉ đường và có thể chụp ảnh. ', 1),
(3, 'Ổ cứng HDD laptop 1TB Seagate 5400RPM', 1, 'DISK', NULL, 1400000, 'HDD.jpg', 'Với Công nghệ Multi-Tier Caching có chức năng cung cấp, cải thiện hiệu suất đọc, ghi dữ liệu với khối lượng lớn mà vẫn đảm bảo sự ổn định cho thiết bị, đồng thời tiết kiệm điện năng và thời gian cho người sử dụng. Bảo vệ dữ liệu với Self-Encrypting. Ổ cứng Seagate 1TB 2.5\" 5400RPM với Self-Encrypting có chức năng tự động mã hóa và giải mã dữ liệu, kết hợp với chức năng Authentication Key khi được cài đặt sẽ giúp bạn dễ dàng quản lý được dữ liệu của mình.', 1),
(4, 'Kingston SSD 120GB A400 SATA 3 2.5 Solid State Dri', 3, 'DISK', NULL, 1600000, 'SSD.jpg', 'Product details of Kingston A400 SSDNow SSD 120GB 2.5\" Solid State Drive - Increase Performance\r\nFast start-up, loading and file transfers\r\nMore reliable and durable than a hard drive\r\nMultiple capacities with space for applications or a hard drive replacement\r\nCapacity: 120GB, Interface: SATA Rev. 3.0 (6Gb/s) – with backwards compatibility to SATA Rev. 2.0. 120GB — 500MB/s Read and 320MB/s Write\r\nWarranty details:\r\n7days replacment warranty\r\n1 year manufacturer warranty\r\nnote: no physical damage and must keep complete box', 1),
(5, 'Kingston RAM DDR4 8 GB PC4-2133 2133 2400 2666', NULL, 'RAM', NULL, 800000, 'ram01.jpg', '    DDR4 sử dụng nguồn điện thấp hơn so với DDR3, chỉ khoảng 1.2V, nghĩa là thiết bị của bạn cũng sẽ không bị hao pin quá nhiều.\r\n    Tốc độ truyền dữ liệu của RAM DDR4 nhanh hơn (đạt từ 1600 – 3200 MT/s), giúp máy tính chạy nhanh hơn.', 1),
(6, 'Kingston RAM DDR4 8 GB PC4-2133 2133 2400 2666', NULL, 'RAM', NULL, 800000, 'ram02.jpg', '    DDR4 sử dụng nguồn điện thấp hơn so với DDR3, chỉ khoảng 1.2V, nghĩa là thiết bị của bạn cũng sẽ không bị hao pin quá nhiều.\r\n    Tốc độ truyền dữ liệu của RAM DDR4 nhanh hơn (đạt từ 1600 – 3200 MT/s), giúp máy tính chạy nhanh hơn.', 1),
(7, 'Pin Vmart Bee', 2, 'PDT', NULL, 700000, 'Pin01_Vmart.png', 'Thay Pin Vsmart Joy 4 là vấn đề khách hàng quan tâm sau thời gian sử dụng điện thoại. Khi nào cần thay Pin? Địa chỉ thay Pin tốt nhất, giá rẻ và lấy ngay tại Hà Nội ? Dưới đây là toàn bộ vấn đề về dịch vụ Thay Pin Vsmart Joy 4 mà FoneSmart chia sẻ tới khách hàng để nắm bắt được thông tin khi có nhu cầu thay Pin cho chiếc điện thoại Vsmart của mình.', 1),
(8, 'Pin Vsmart Joy 3', 2, 'PDT', NULL, 400000, 'Pin02_Vmart.jpg', 'Điện áp sạc giới hạn: 4.2V\r\nLoại Li-ion Polymer\r\nSản phẩm của công ty Masstel\r\nSản xuất tại: Trung Quốc.\r\nTình trạng: pin mới 100% luôn có sẵn hàng và giao cho nhà vận chuyển ngay.\r\nCảnh báo nguy hiểm: không bỏ vào lửa, không bỏ vào sọt rác,  không dùng vật nhọn đâm vào pin, Tránh xa tầm tay trẻ em.', 1),
(9, ' Pin Gateway MS2273', NULL, 'PMT', NULL, 400000, 'pin01_acer.jpg', 'Thông số pin:\r\nLoại pin: Li-ion with 11.1V (Compatible with 10.8V)\r\nCông suất: 5200mAh  \r\nSố cell : 6 cell\r\nMàu sắc: Đen\r\nMã pin :AS09A61, AS09A41, AS09A31, AS09A56, AS09A71, AS09A73, AS09A75, AS09A90   ', 1),
(10, 'Loa Bluetooth Mini Đèn LED Đổi Màu', NULL, 'BT', NULL, 100000, 'Loa01_Bluetooth.jpg', 'Lớp vỏ ngoài của Loa Bluetooth bằng nhựa chống trơn trượt\r\nThiết kế tinh tế, công nghệ đột phá, sử dụng đơn giản, kiểu đóng gói độc đáo.\r\nPhát nhạc qua bluetooth của các thiết bị có chức năng phát nhạc qua bluetooth.\r\nChiếc loa bluetooth có âm thanh bass khá tốt, chuyên bass trầm mạnh.\r\nHình ảnh sản phẩm khi lên hình có thể có sự khác biệt màu sắc do hiệu ứng khi chụp ảnh, góc nhìn.', 1),
(11, 'Loa Bluetooth Mini iWALK Sound Frek 3W - SPS005', NULL, 'BT', NULL, 200000, 'Loa02_Bluetooth.webp', 'Nhỏ bé nhưng mạnh mẽ\r\n\r\n- Thiết kế siêu nhỏ gọn, nhưng với chip DSP hiệu năng cao, âm lượng có thể\r\n\r\ncực kỳ rõ ràng và cao (lên tới 3W)\r\n\r\n\r\nToàn bộ thân kim loại & viền mạ bạc\r\n\r\n- Vỏ được làm bằng nhôm đúc hàng không nguyên khối. Các bề mặt được anot hóa, không chỉ chống va chạm, còn chống mồ hôi và chống ăn mòn.\r\n\r\n\r\nÂm thanh nổi Stereo 3D thực sự\r\n\r\n- Chip TWS tích hợp cho phép ghép hai Frek để chơi cùng lúc với âm thanh nổi 3D, mang đến cho bạn trải nghiệm âm nhạc tuyệt vời.\r\n\r\n\r\n', 1),
(12, 'Loa Bluetooth Sony SRS-XB13', NULL, 'BT', NULL, 300000, 'Loa03_Bluetoth.jpg', '\r\n\r\nĐặc điểm nổi bật\r\n\r\n    Thiết kế nhỏ gọn, vỏ chống trầy với UV coating, có dây treo tiện dụng.\r\n  Âm bass mạnh mẽ nhờ công nghệ Extra Bass và bộ xử lý khuếch tán âm thanh.\r\n    Hỗ trợ nghe nhạc không dây qua kết nối Bluetooth 4.2.\r\n    Kết nối cùng lúc 2 loa SRS-XB13 để trải nghiệm âm thanh Stereo.\r\n    Thời lượng pin lên đến 16 tiếng, sạc đầy pin trong khoảng 4 - 5 tiếng.\r\n    Chuẩn chống nước, chống bụi IP67 thoải mái thưởng thức âm nhạc ở bất cứ nơi đâu.\r\n    Dễ thao tác tăng/giảm âm lượng, phát/dừng nhạc, nghe/nhận cuộc gọi,...\r\n\r\n', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staffs`
--

CREATE TABLE `staffs` (
  `staff_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `active` tinyint(4) NOT NULL,
  `store_id` int(11) NOT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `staffs`
--

INSERT INTO `staffs` (`staff_id`, `first_name`, `last_name`, `email`, `phone`, `active`, `store_id`, `manager_id`, `Password`) VALUES
(0, '', '', 'abcd@gmail.com', NULL, 0, 0, NULL, '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stocks`
--

CREATE TABLE `stocks` (
  `store_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stores`
--

CREATE TABLE `stores` (
  `store_id` int(11) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  `zip_code` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `introduce`
--
ALTER TABLE `introduce`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `store_id` (`store_id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`items_id`,`order_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `PRO_CAT` (`category_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Chỉ mục cho bảng `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`store_id`,`product_id`);

--
-- Chỉ mục cho bảng `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`store_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `introduce`
--
ALTER TABLE `introduce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `items_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`store_id`) REFERENCES `stores` (`store_id`);

--
-- Các ràng buộc cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `PRO_CAT` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

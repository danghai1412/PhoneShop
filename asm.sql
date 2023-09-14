-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 06:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asm`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`) VALUES
(1, 'admin', '123'),
(2, 'danghai', '123');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_email` varchar(80) NOT NULL,
  `admin_pwd` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_email`, `admin_pwd`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$89uX3LBy4mlU/DcBveQ1l.32nSianDP/E1MfUh.Z.6B4Z0ql3y7PK');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `BrandId` int(11) NOT NULL,
  `BrandName` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`BrandId`, `BrandName`, `Image`) VALUES
(1, 'Apple', '../images/apple.png'),
(2, 'Samsung', '../images/Samsung.jpg'),
(3, 'Xiaomi', '../images/Xiaomi.png'),
(4, 'Sony', '../images/Sony.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CusId` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(11) NOT NULL,
  `device_name` varchar(50) NOT NULL,
  `device_dep` varchar(20) NOT NULL,
  `device_uid` text NOT NULL,
  `device_date` date NOT NULL,
  `device_mode` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `device_name`, `device_dep`, `device_uid`, `device_date`, `device_mode`) VALUES
(1, 'rfid', 'rfid', '4549898d5ea9c92d', '2022-10-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `OrderId` varchar(10) NOT NULL,
  `OrderDate` date NOT NULL,
  `CusId` int(11) NOT NULL,
  `Total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `OrderId` varchar(10) NOT NULL,
  `WatchId` varchar(10) NOT NULL,
  `Quantitty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `PhoneId` varchar(10) NOT NULL,
  `PhoneName` varchar(200) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `PhoneDetail` varchar(2550) NOT NULL,
  `Price` double NOT NULL,
  `Size` varchar(11) NOT NULL DEFAULT '0',
  `BrandId` int(11) NOT NULL,
  `Color` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`PhoneId`, `PhoneName`, `Image`, `PhoneDetail`, `Price`, `Size`, `BrandId`, `Color`) VALUES
('A1', 'iPhone 14 ', '../images/Iphone14_blue.jpg', 'iPhone 14 owns a 6.1-inch Retina XDR OLED screen with outstanding brightness of up to  1200 nits . The device will also be equipped with a dual 12 MP rear camera with a large pixel sensor of  1.9 microns to help improve low-light shooting. The new iPhone 14 model also carries a 5-core Apple A15 Bionic chip that delivers outstanding performance.', 799, '6', 1, 'Blue'),
('A2', 'iPhone 14 Pro', '../images/iphone-14-pro.jpg', 'iPhone 14 Pro offers a super-smooth visual  experience with its sharp Dynamic Island displaynext-generation Super Retina XDR technologyThe performance of iPhone 14 Pro 128GB is strong with Apple A16 Bionic processor, which helps to stabilize all tasks. The 48MP rear camera clusterand many modern photography technologies bring impressive recording quality, professional photography standards.\r\n\r\n', 1000, '6', 1, 'Yellow'),
('A3', 'iPhone 14 Pro Max', '../images/iphone-14-pro-max.jpg', 'iPhone 14 Pro Max has an impressive Dynamic Island screen design with a 6.7-inch OLED screenthat supports always-on display and outstanding performance with the A16 Bionic chip . Besides, the device also owns many camera upgrades with 48MP rear camera cluster , 12MP front camera using 6G RAM for outstanding multitasking. ', 1499, '7', 1, 'Purple'),
('B1', 'Samsung Galaxy S23 Ultra', '../images/S23.jpg', 'Samsung S23 Ultra is Samsung high-end phone  line , owning an impressive  200MP camera, powerful Snapdragon 8 Gen 2 chip  , 8GB RAM memory for outstanding processing performance and luxurious square frame . The product was launched from the beginning of 2023.', 1200, '7', 2, 'Black'),
('B2', 'Samsung Galaxy Z Flip4', '../images/z-flip.jpg', 'Stylish appearance, extremely luxurious grip with unique clamshell folding design. Leading screen technology from Samsung - 6.7 inches, Dynamic AMOLED 2X panels. Equipped with quality cameras - The dual cameras have the same 12 MP resolution, anti-shake, night shooting. Powerful performance from Qualcomm high-end chip line - Snapdragon 8+ Gen 1', 799, '6', 2, 'Blue'),
('B3', 'Samsung Galaxy Z Fold4', '../images/z-fold.jpg', 'Dark eye camera for an impressive photography experience - Main camera: 50MP. Unleash a flexible mobile experience - 6.2\" external screen and unique 7.6\" main screen. Powerful performance from Qualcomm high-end chip line - Snapdragon 8 Plus Gen 1. Impressive battery, instant fast charging - 4,400 mAh battery, 25 W . fast charge', 2000, '8', 2, 'Black'),
('C1', 'Xiaomi Redmi Note 12', '../images/xiaomi-redmi-note-12.jpg', 'Xiaomi Redmi Note 12  owns a Super AMOLED screen  with a 120Hz refresh rate to make the swipe experience smooth,quality 50MP AI camera . Besides, the phone will be running on Qualcomm Snapdragon 685 chip  combined with Qualcomm Adreno 610 GPU graphics card to provide a stable user experience. Xiaomi Redmi Note 12 phone delivers outstanding usage time with 5000mAh battery with 33W fast charging capacity .', 200, '6', 3, 'Black'),
('C2', 'Xiaomi 13 ', '../images/Xiaomi_13.jpg', 'Xiaomi 13 is a new product equipped with a 6.36-inch OLED screen with a refresh rate of up to 120Hz . Inside Xiaomi 13 is the latest Snapdragon 8 Gen 2 chip with outstanding 8GB RAM . The phone also responds well to photography with a 50MP Leica camera .\r\n\r\n', 800, '7', 3, 'White'),
('C3', 'Xiaomi POCO X5 Pro', '../images/xiaomi-poco-x5-pro.jpg', 'Xiaomi POCO X5 Pro offers beautiful visual experiences thanks to a 6.67-inch AMOLED Full HD + screen. The back of the device owns a 3-camera system with a main sensor resolution of up to 108MP. Besides, this Xiaomi phone also integrates the high-end octa-core Snapdragon 778G 5G chip with up to 8GB of RAM.', 300, '7', 3, 'Yellow');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT 'None',
  `serialnumber` double NOT NULL DEFAULT 0,
  `gender` varchar(10) NOT NULL DEFAULT 'None',
  `email` varchar(50) NOT NULL DEFAULT 'None',
  `card_uid` varchar(30) NOT NULL,
  `card_select` tinyint(1) NOT NULL DEFAULT 0,
  `user_date` date NOT NULL,
  `device_uid` varchar(20) NOT NULL DEFAULT '0',
  `device_dep` varchar(20) NOT NULL DEFAULT '0',
  `add_card` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_logs`
--

CREATE TABLE `users_logs` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `serialnumber` double NOT NULL,
  `card_uid` varchar(30) NOT NULL,
  `device_uid` varchar(20) NOT NULL,
  `device_dep` varchar(20) NOT NULL,
  `checkindate` date NOT NULL,
  `timein` time NOT NULL,
  `timeout` time NOT NULL,
  `card_out` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users_logs`
--

INSERT INTO `users_logs` (`id`, `username`, `serialnumber`, `card_uid`, `device_uid`, `device_dep`, `checkindate`, `timein`, `timeout`, `card_out`) VALUES
(6, 'Nam', 1, '24017513725', '4549898d5ea9c92d', 'rfid', '2022-10-16', '15:48:30', '15:50:39', 1),
(7, 'Nam', 1, '24017513725', '4549898d5ea9c92d', 'rfid', '2022-10-16', '15:51:34', '15:53:34', 1),
(8, 'Nam', 1, '24017513725', '4549898d5ea9c92d', 'rfid', '2022-10-16', '15:55:28', '15:57:08', 1),
(9, 'Nam', 1, '24017513725', '4549898d5ea9c92d', 'rfid', '2022-10-16', '15:58:30', '15:59:53', 1),
(10, 'Nam', 1, '24017513725', '4549898d5ea9c92d', 'rfid', '2022-10-16', '16:11:24', '16:11:38', 1),
(11, 'Nam', 1, '24017513725', '4549898d5ea9c92d', 'rfid', '2022-10-16', '16:11:46', '16:11:57', 1),
(12, 'Nam', 1, '24017513725', '4549898d5ea9c92d', 'rfid', '2022-10-16', '16:13:35', '16:13:45', 1),
(13, 'Nam', 1, '24017513725', '4549898d5ea9c92d', 'rfid', '2022-10-16', '16:16:01', '16:20:12', 1),
(14, 'Nam', 1, '24017513725', '4549898d5ea9c92d', 'rfid', '2022-10-16', '16:21:34', '16:29:15', 1),
(15, 'Nam', 1, '24017513725', '4549898d5ea9c92d', 'rfid', '2022-10-16', '16:30:55', '16:33:26', 1),
(16, 'Nam', 1, '24017513725', '4549898d5ea9c92d', 'rfid', '2022-10-16', '16:46:57', '16:47:46', 1),
(17, 'Nam', 1, '24017513725', '4549898d5ea9c92d', 'rfid', '2022-10-17', '11:16:48', '11:17:23', 1),
(18, 'Nguyen Hoai Nam', 2, '463178114119116129', '4549898d5ea9c92d', 'rfid', '2022-11-01', '14:56:48', '16:31:33', 1),
(19, 'Nguyen Hoai Nam', 2, '463178114119116129', '4549898d5ea9c92d', 'rfid', '2022-11-01', '16:31:56', '16:32:17', 1),
(20, 'Nguyen Tien Thinh', 3, '467178114119116129', '4549898d5ea9c92d', 'rfid', '2022-11-03', '16:25:09', '00:00:00', 0),
(21, 'Nguyen Tien Thinh', 3, '467178114119116129', '4549898d5ea9c92d', 'rfid', '2022-11-05', '12:02:25', '12:02:41', 1),
(22, 'nhn', 1, '24017513725', '4549898d5ea9c92d', 'rfid', '2022-12-27', '16:03:34', '00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`BrandId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CusId`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`OrderId`),
  ADD KEY `CusId` (`CusId`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`OrderId`,`WatchId`),
  ADD KEY `OrderId` (`OrderId`),
  ADD KEY `WatchId` (`WatchId`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`PhoneId`),
  ADD KEY `foreignkey_watch_brandid` (`BrandId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_logs`
--
ALTER TABLE `users_logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `BrandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CusId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users_logs`
--
ALTER TABLE `users_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`CusId`) REFERENCES `customer` (`CusId`);

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`OrderId`) REFERENCES `order` (`OrderId`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`WatchId`) REFERENCES `phone` (`PhoneId`);

--
-- Constraints for table `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `foreignkey_watch_brandid` FOREIGN KEY (`BrandId`) REFERENCES `brand` (`BrandId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

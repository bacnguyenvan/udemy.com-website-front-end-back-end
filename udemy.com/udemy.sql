-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2019 at 04:56 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udemy`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_courses`
--

CREATE TABLE `list_courses` (
  `id` int(11) NOT NULL,
  `name_course` varchar(200) DEFAULT NULL,
  `name_author` varchar(100) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `loai_course` int(11) DEFAULT NULL COMMENT '1:arduino ,2:lt_c,3:arm,4:web',
  `number_star` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `sale` int(11) DEFAULT 0,
  `number_lecture` int(11) DEFAULT NULL,
  `hours` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `list_courses`
--

INSERT INTO `list_courses` (`id`, `name_course`, `name_author`, `image`, `loai_course`, `number_star`, `price`, `sale`, `number_lecture`, `hours`, `created_at`) VALUES
(1, 'Lập trình Arduino cho người mới bắt đầu', 'Tiến Linh', 'arduino0.jpg', 1, 4, 21.99, 2, 550, 29, '2019-11-22 12:44:14'),
(2, 'Lập trình Arduino nâng cao', 'Quang Hải', 'arduino1.jpg', 1, 4, 169, 11, NULL, NULL, '2019-11-23 11:35:27'),
(4, 'Làm chủ C++ trong 21 ngày', 'Chris Croft', 'c++.png', 3, 4, 985, 0, NULL, NULL, '2019-11-23 08:04:05'),
(5, 'Lập trình robotic với ARM 32 Kit', 'Nam nguyễn', 'arm.jpg', 2, 4, 110, 2, NULL, NULL, '2019-11-23 11:08:00'),
(6, 'Lập trình C cơ bản', 'Hùng Dũng', 'lt_c.jpg', 3, 3, 125, 2, NULL, NULL, '2019-11-23 09:12:17'),
(7, 'Lập trình IOT với Arduino', 'Đình Trọng', 'iot.jpg', 1, 5, 126, 9, NULL, NULL, '2019-11-23 06:47:18'),
(8, 'Lập trình Arm nâng cao', 'Công Phượng', 'arm0.png', 2, 3, 230, 10, NULL, NULL, '2019-11-23 06:42:51'),
(9, 'Kỹ thuật lập trình với C', 'Văn Lâm', 'lt_c2.jpg', 3, 4, 220, 2, NULL, NULL, '2019-11-23 06:21:06'),
(10, 'Lập trình Website với Bootstrap', 'North Nguyễn', 'course1.jpg', 4, 5, 330, 1, NULL, NULL, '2019-11-23 05:22:05'),
(11, 'Marketing', 'Join Lee', 'dipesh.jpg', 4, 4, 228, 2, NULL, NULL, '2019-11-23 04:49:39'),
(12, 'Lập trình cánh tay robot trong 7 ngày', 'Thinh lee', 'arm1.jpg', 2, 5, 250, 1, NULL, NULL, '2019-11-23 04:24:31'),
(13, 'Làm chủ Docker', 'Colt Steele', 'course5.jpg', 4, 5, 250, 4, NULL, NULL, '2019-11-23 02:12:09'),
(14, 'Lập trình Firebase với arduino', 'Tuấn Anh', 'course2.png', 1, 4, 350, 5, NULL, NULL, '2019-11-23 01:33:00'),
(15, 'Làm chủ HTML, CSS , JAVASCRIPT trong 1 tháng', 'Anh Đức', 'web.jpg', 4, 5, 357, 6, NULL, NULL, '2019-11-23 01:30:10'),
(16, 'Lập trình ARM STM32 trong 2 tuần', 'Văn Đạt', 'arm2.jpg', 2, 4, 257, 2, NULL, NULL, '2019-11-24 11:21:47'),
(17, 'Lập trình hướng đối tượng với C++', 'Văn Thanh', 'c_plus_1.png', 3, 5, 356, 2, NULL, NULL, '2019-11-24 11:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `id_show_home` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `id_show_home`, `level`, `created_at`) VALUES
(1, '', '', '', NULL, 0, '2019-11-25 10:46:02'),
(2, 'bac nguyen', 'admin@gmail.com', 'admin', 2, 9, '2019-11-25 10:46:02'),
(3, 'hung', 'hung@gmail.com111', 'on', NULL, 0, '2019-11-25 10:46:02'),
(4, 'bac nguyen', 'bac@gmail.com', '123', NULL, 0, '2019-11-25 10:46:02'),
(5, 'bac nguyen', 'dung12@gmail.com', '222', NULL, 0, '2019-11-25 11:00:38'),
(6, 'nam', 'nam@gmail.com', '123', NULL, 0, '2019-11-25 11:01:06'),
(7, 'nam', 'nam', '123', NULL, 0, '2019-11-25 11:01:42'),
(8, 'bac nguyen', 'nnaaamm12', 'on', NULL, 0, '2019-11-26 07:37:22'),
(9, 'bac nguyen', 'bac11@gmail.com', '123', 9, 0, '2019-11-26 07:44:52'),
(10, 'aaa\'', 'bac1123@gmail.com', 'bac12', NULL, 0, '2019-11-26 08:20:12'),
(11, 'hang', 'hang@gmail.com', 'hang12', 11, 0, '2019-11-26 09:28:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_courses`
--
ALTER TABLE `list_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_courses`
--
ALTER TABLE `list_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

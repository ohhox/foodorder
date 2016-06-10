-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2016 at 02:15 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `food_id` int(11) NOT NULL,
  `food_type_id` int(11) NOT NULL,
  `kitchen_id` int(11) NOT NULL,
  `food_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `food_price` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `food_image` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `typeofmanu` enum('1','2') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=food,2=water'
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_type_id`, `kitchen_id`, `food_name`, `food_price`, `food_image`, `typeofmanu`) VALUES
(11, 15, 3, 'sad', '100', '2091463933755.jpeg', '1'),
(3, 15, 3, 'ส้มตำปูปลาร้า', '100', '1901463824691.jpg', '1'),
(6, 14, 2, 'ปลานึ่งมะนาว', '100', '1271463839872.jpg', '1'),
(7, 13, 2, 'ต้มยำกบ', '100', '1421463837205.JPG', '1'),
(12, 0, 0, 'ผผผ', '23', '0', '1'),
(13, 18, 6, 'qwqw', '12', '1061464274902.jpeg', '1'),
(14, 15, 3, 'ปลากะพงทอด', '50', '0', '1'),
(15, 14, 3, 'สลัดผัด', '100', '0', '1'),
(16, 15, 3, 'xxx', '23', '1991464429709.jpeg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `food_type`
--

CREATE TABLE IF NOT EXISTS `food_type` (
  `food_type_id` int(11) NOT NULL,
  `food_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `food_type_number` int(3) NOT NULL,
  `ft_for_type` enum('1','2') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=food,2=water'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `food_type`
--

INSERT INTO `food_type` (`food_type_id`, `food_type`, `food_type_number`, `ft_for_type`) VALUES
(13, 'อาหารเหนือ', 2, '1'),
(14, 'สลัด', 1, '1'),
(15, 'ข้าวผัดจานใหญ่', 3, '1'),
(17, 'สุรา', 2, '2'),
(18, 'น้ำอัดลมผ', 1, '2');

-- --------------------------------------------------------

--
-- Table structure for table `kitchen`
--

CREATE TABLE IF NOT EXISTS `kitchen` (
  `kitchen_id` int(11) NOT NULL,
  `kitchen_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `for_type_food` enum('1','2') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kitchen`
--

INSERT INTO `kitchen` (`kitchen_id`, `kitchen_name`, `for_type_food`) VALUES
(1, 'ครัวเครื่องดื่ม', '1'),
(2, 'ครัวต้มยำ', '1'),
(3, 'ครัวของว่าง', '1'),
(6, 'ครัวน้ำบน', '2'),
(7, 'ครัวน้ำล่าง', '2');

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE IF NOT EXISTS `system` (
  `numoftable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `system`
--

INSERT INTO `system` (`numoftable`) VALUES
(20);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_name_lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_level` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_password`, `user_name_lastname`, `user_image`, `user_level`, `user_date_create`) VALUES
(1, 'xxx', 'xxxx', 'xxxx', '2991464707187.jpeg', '2', '0000-00-00 00:00:00'),
(2, 'fuck', 'fuck', 'นักรบ', '1911464709145.jpg', '3', '2016-05-31 15:08:01'),
(3, 'prawit', '1234', 'นายประวิทย์ ย่านเจริญกิจ', '3151464708770.jpg', '1', '2016-05-31 15:32:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `food_type`
--
ALTER TABLE `food_type`
  ADD PRIMARY KEY (`food_type_id`);

--
-- Indexes for table `kitchen`
--
ALTER TABLE `kitchen`
  ADD PRIMARY KEY (`kitchen_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `food_type`
--
ALTER TABLE `food_type`
  MODIFY `food_type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `kitchen`
--
ALTER TABLE `kitchen`
  MODIFY `kitchen_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

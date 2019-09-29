-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2019 at 12:39 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_lastname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_gender` int(1) NOT NULL,
  `user_birthday` date NOT NULL,
  `user_email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_address` text CHARACTER SET utf8 NOT NULL,
  `user_numphone` int(10) DEFAULT NULL,
  `is_delete` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_lastname`, `user_gender`, `user_birthday`, `user_email`, `user_address`, `user_numphone`, `is_delete`) VALUES
(1, 'ณัฐฐินันท์', 'หมั่นสุข', 1, '1995-08-16', 'ss._001@hotmail.com', '408/5', 931199342, 'N'),
(2, 'กีกี้', 'กีกี้', 2, '2019-09-17', 'ss._001@hotmail.com', '45862/ bangkok', 22921289, 'N'),
(3, 'nuttinun', 'munsook', 1, '0000-00-00', 'ss._001@hotmail.com', 'เจริญกรุง 85', 931199342, 'N'),
(4, 'asdg', 'asfgas', 2, '0000-00-00', 'as@hotmail.com', 'asgas', 12544857, 'N'),
(5, 'advsfnbg', 'ndgbads', 1, '2019-09-15', 'asfbafb@hotmail.com', 'afsb', 2147483647, 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 24, 2019 at 12:50 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `publish`
--

-- --------------------------------------------------------

--
-- Table structure for table `publish_stories`
--

CREATE TABLE `publish_stories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `story_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publish_stories`
--

INSERT INTO `publish_stories` (`id`, `user_id`, `user_name`, `story_title`, `description`, `created_at`, `update_date`) VALUES
(3, 1, 'tarun', 'Hello user', 'hiiqwdnwnsdwl;d\r\nsdmwefmwef,wef\r\nwefmwelfwemf\r\n\r\n\r\n\r\nwefwef', '2019-08-23 00:00:00', '2019-08-24 00:00:00'),
(4, 1, 'tarun', 'ASASAS', 'ASASASAS', '2019-08-23 00:00:00', '2019-08-23 15:06:22'),
(5, 2, 'RAM', 'happy', 'heloooooooooooooooo', '2019-08-23 00:00:00', '2019-08-24 00:00:00'),
(6, 1, 'tarun', 'sadasd', 'asdasd', '2019-08-23 00:00:00', '2019-08-24 10:18:25'),
(7, 1, 'tarun', 'dew', 'rwerwer', '2019-08-23 00:00:00', '2019-08-23 15:44:08'),
(8, 1, 'tarun', 'a', 'a', '2019-08-23 00:00:00', '2019-08-23 15:45:41'),
(9, 1, 'tarun', '444444444234234234', 'wr', '2019-08-23 00:00:00', '2019-08-23 15:46:24'),
(10, 1, 'tarun', 'wqeqwe', 'qweqweqwe', '2019-08-23 00:00:00', '2019-08-23 20:32:57'),
(11, 1, 'tarun', '44', '44444444444', '2019-08-24 00:00:00', '2019-08-24 10:06:08'),
(12, 1, 'tarun', 's', '[', '2019-08-24 00:00:00', '2019-08-24 10:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`, `created_at`) VALUES
(1, 'tarun', '123456', 'author', '2019-08-22 17:59:45'),
(2, 'ram', '12345', 'author', '2019-08-23 12:01:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `publish_stories`
--
ALTER TABLE `publish_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `publish_stories`
--
ALTER TABLE `publish_stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

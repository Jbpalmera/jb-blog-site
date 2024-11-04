-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2024 at 08:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_management_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `history_tbl`
--

CREATE TABLE `history_tbl` (
  `session_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_time` datetime NOT NULL,
  `logout_time` datetime NOT NULL,
  `ip_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history_tbl`
--

INSERT INTO `history_tbl` (`session_id`, `user_id`, `login_time`, `logout_time`, `ip_address`) VALUES
(1, 1, '2024-10-31 03:37:23', '2024-10-31 03:38:29', '::1'),
(2, 1, '2024-10-31 03:40:43', '0000-00-00 00:00:00', '::1'),
(3, 1, '2024-10-31 04:00:26', '0000-00-00 00:00:00', '::1'),
(4, 1, '2024-10-31 04:18:27', '0000-00-00 00:00:00', '::1'),
(5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(6, 1, '2024-10-31 04:54:53', '0000-00-00 00:00:00', '::1'),
(7, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(8, 1, '2024-10-31 12:58:11', '2024-10-31 13:01:56', '::1'),
(9, 1, '2024-10-31 13:02:07', '2024-10-31 05:12:59', '::1'),
(10, 1, '2024-10-31 05:13:07', '2024-10-31 05:14:15', '::1'),
(11, 1, '2024-10-31 05:14:22', '2024-10-31 13:18:54', '::1'),
(12, 1, '2024-10-31 13:19:08', '2024-10-31 13:20:13', '::1'),
(13, 1, '2024-10-31 13:20:19', '2024-10-31 13:37:48', '::1'),
(14, 6, '2024-10-31 13:44:05', '2024-10-31 13:46:54', '::1'),
(15, 1, '2024-10-31 13:48:00', '2024-10-31 13:49:25', '::1'),
(16, 1, '2024-10-31 14:03:22', '2024-10-31 14:23:27', '::1'),
(17, 1, '2024-10-31 14:37:51', '2024-10-31 14:44:52', '::1'),
(18, 1, '2024-10-31 15:24:36', '2024-10-31 15:26:49', '::1'),
(19, 1, '2024-10-31 15:30:02', '0000-00-00 00:00:00', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verify_status` enum('verified','unverified') NOT NULL DEFAULT 'unverified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`user_id`, `username`, `firstname`, `lastname`, `phone`, `email`, `password`, `verify_status`) VALUES
(1, 'jboyanib15', 'Jay Boy', 'Oyanib', '09513324573', 'jboyanib102199@gmail.com', '$2y$10$fH8FO.lgZvTE25mAjMDMIevw/NUsPayyTclxfoyguj/Tqw0SXZlx6', 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_tbl`
--
ALTER TABLE `history_tbl`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_tbl`
--
ALTER TABLE `history_tbl`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

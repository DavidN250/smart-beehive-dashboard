-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 01:16 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beehive`
--

-- --------------------------------------------------------

--
-- Table structure for table `hive`
--

CREATE TABLE `hive` (
  `id` int(11) NOT NULL,
  `serial_number` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hive`
--

INSERT INTO `hive` (`id`, `serial_number`, `user_id`, `status`) VALUES
(1, 'B001', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sound`
--

CREATE TABLE `sound` (
  `id` int(11) NOT NULL,
  `serial_number` text NOT NULL,
  `sound` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `timeoccur` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sound`
--

INSERT INTO `sound` (`id`, `serial_number`, `sound`, `description`, `status`, `timeoccur`) VALUES
(1, 'B001', 300, 'good', 1, '2021-01-04 22:43:42'),
(2, 'B001', 250, 'good', 1, '2021-01-04 22:43:58'),
(3, 'B001', 400, 'sawa', 1, '2021-01-04 22:48:56'),
(4, 'B001', 300, 'sawa', 1, '2021-01-04 22:49:07'),
(5, 'B001', 500, 'kldjfjgfd', 0, '2021-01-07 23:16:43'),
(6, 'B001', 508, 'kldjfjgfd', 1, '2021-01-07 23:17:12'),
(7, 'B001', 700, 'rsdfhgs', 0, '2021-01-07 23:31:54'),
(8, 'B001', 450, 'rsdfhgs', 0, '2021-01-07 23:32:05'),
(9, 'B001', 500, 'wqerrer', 0, '2021-01-07 23:32:31'),
(10, 'B001', 550, 'wqerrer', 0, '2021-01-07 23:32:45'),
(11, 'B001', 500, 'erwrtdfg', 0, '2021-01-07 23:33:49'),
(12, 'B001', 540, 'erwrtdfg', 0, '2021-01-07 23:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `tempandhum`
--

CREATE TABLE `tempandhum` (
  `id` int(11) NOT NULL,
  `serial_number` text NOT NULL,
  `temperature` int(11) NOT NULL,
  `humidity` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `timeoccur` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempandhum`
--

INSERT INTO `tempandhum` (`id`, `serial_number`, `temperature`, `humidity`, `description`, `status`, `timeoccur`) VALUES
(1, 'B001', 30, 60, 'this the normal temperature it can harm your bees or leat any provlem', 0, '2020-12-26 16:02:51'),
(2, 'B001', 20, 50, 'GOOD', 0, '2020-12-26 18:24:10'),
(3, 'B001', 20, 50, 'GOOD', 0, '2020-12-26 18:24:19'),
(4, 'B001', 10, 80, 'HARMUFUL', 0, '2020-12-26 18:31:08'),
(6, 'B001', 15, 10, 'normal', 0, '2020-12-26 19:13:22'),
(7, 'B001', 15, 10, 'normal', 0, '2020-12-26 19:13:27'),
(8, 'B001', 5, 70, 'bad', 0, '2020-12-26 19:42:55'),
(9, 'B001', 50, 70, 'bad', 0, '2020-12-26 19:42:59'),
(10, 'B001', 20, 15, 'fine', 1, '2021-01-04 22:45:21'),
(11, 'B001', 30, 20, 'fine', 1, '2021-01-04 22:45:39'),
(12, 'B001', 20, 15, 'good', 0, '2021-01-07 20:44:25'),
(13, 'B001', 18, 17, 'good', 0, '2021-01-07 20:44:54'),
(14, 'B001', 50, 30, 'bad', 0, '2021-01-07 20:47:58'),
(15, 'B001', 57, 33, 'bad', 0, '2021-01-07 20:48:13'),
(16, 'B001', 20, 12, 'ferreyty', 0, '2021-01-07 22:06:31'),
(17, 'B001', 30, 22, 'ferreyty', 0, '2021-01-07 22:06:53'),
(18, 'B001', 30, 20, 'tytrytr', 0, '2021-01-07 22:09:16'),
(19, 'B001', 32, 12, 'tytrytr', 0, '2021-01-07 22:09:44'),
(20, 'B001', 20, 50, 'fetreteryyfd', 0, '2021-01-07 22:18:16'),
(21, 'B001', 20, 15, 'fetreteryyfd', 0, '2021-01-07 22:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `names` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `phone`, `names`, `password`, `status`) VALUES
(1, 'yes1ericn@gmail.com', '0788236167', 'Ngendahimana Eric', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `weight`
--

CREATE TABLE `weight` (
  `id` int(11) NOT NULL,
  `serial_number` text NOT NULL,
  `weight` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `timeoccur` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weight`
--

INSERT INTO `weight` (`id`, `serial_number`, `weight`, `description`, `status`, `timeoccur`) VALUES
(1, 'B001', 10, 'This the weight is less than the average weight to havest your hive please weight few days', 0, '2020-12-26 15:08:26'),
(2, 'B001', 20, 'havest', 1, '2021-01-04 22:50:22'),
(3, 'B001', 30, 'havest', 1, '2021-01-04 22:50:45'),
(4, 'B001', 30, 'efffffffffff', 1, '2021-01-04 22:51:36'),
(5, 'B001', 20, 'efffffffffff', 1, '2021-01-04 22:52:00'),
(6, 'B001', 10, '5674', 0, '2021-01-07 23:55:26'),
(7, 'B001', 13, '56cvghjkhgfd74', 0, '2021-01-07 23:55:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hive`
--
ALTER TABLE `hive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sound`
--
ALTER TABLE `sound`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempandhum`
--
ALTER TABLE `tempandhum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weight`
--
ALTER TABLE `weight`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hive`
--
ALTER TABLE `hive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sound`
--
ALTER TABLE `sound`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tempandhum`
--
ALTER TABLE `tempandhum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `weight`
--
ALTER TABLE `weight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

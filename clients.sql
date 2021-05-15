-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2021 at 07:01 PM
-- Server version: 10.3.28-MariaDB-log-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kosizcoq_kosizcoq`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(20) NOT NULL,
  `username` varchar(300) NOT NULL,
  `computer` varchar(300) NOT NULL,
  `last_seen` timestamp NOT NULL DEFAULT current_timestamp(),
  `activity_count` int(11) NOT NULL DEFAULT 0,
  `source_groups` varchar(255) DEFAULT NULL,
  `target_groups` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `username`, `computer`, `last_seen`, `activity_count`, `source_groups`, `target_groups`) VALUES
(1, 'megakosi', 'lenovo-pc', '2021-05-15 22:43:32', 14, ',https://source_group', ',https://target_group'),
(7, 'prince', 'dell', '2021-05-15 08:18:11', 0, NULL, NULL),
(3, 'joseph', 'dell-pc', '2021-05-15 08:18:11', 0, NULL, NULL),
(20, 'peter', 'desktop-5fd4h64', '2021-05-15 08:18:11', 0, NULL, NULL),
(8, 'kris', 'shinzu-laptop-157qfb5', '2021-05-15 08:18:11', 0, NULL, NULL),
(14, 'ugo', 'desirebang', '2021-05-15 08:18:11', 0, NULL, NULL),
(10, 'chima', 'desktop-5a2mj1n', '2021-05-15 08:18:11', 0, NULL, NULL),
(25, 'raba', 'desktop-mtd3clj', '2021-05-15 08:18:11', 0, NULL, NULL),
(12, 'edikan', 'hp-pc', '2021-05-15 08:18:11', 0, NULL, NULL),
(16, 'china_man', 'desktop-2kg9kpn', '2021-05-15 08:18:11', 0, NULL, NULL),
(19, 'austin', 'desktop-v0knljs', '2021-05-15 08:18:11', 0, NULL, NULL),
(21, '', '', '2021-05-15 08:18:11', 0, NULL, NULL),
(22, 'sochima', 'desktop-s3bhbm2', '2021-05-15 08:18:11', 0, NULL, NULL),
(23, 'martins', 'robotics', '2021-05-15 08:18:11', 0, NULL, NULL),
(24, 'skana', 'dell', '2021-05-15 08:18:11', 0, NULL, NULL),
(26, 'rath', 'desktop-5pcfrcj', '2021-05-15 08:18:11', 0, NULL, NULL),
(28, 'peters', 'desktop-oma2qm3', '2021-05-15 08:18:11', 0, NULL, NULL),
(29, 'emmanuel', 'desktop-0jge6gp', '2021-05-15 08:18:11', 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

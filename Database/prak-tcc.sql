-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 05:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prak-tcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_keys`
--

CREATE TABLE `api_keys` (
  `id` int(11) NOT NULL,
  `api_key` varchar(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `api_keys`
--

INSERT INTO `api_keys` (`id`, `api_key`, `created_at`) VALUES
(1, '0f748f335a684ee035659b0fa77a1249', '2024-05-28 10:07:31'),
(2, 'd76befa284a605c8d59d2c0563c8f9fe', '2024-05-28 10:09:37'),
(3, '19036142ab800da64de7486231c1ff92', '2024-05-28 13:53:55'),
(4, '7f8aaa423cca760232461ee3798be3e3', '2024-05-28 14:24:30');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id_mails` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date_mails` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id_mails`, `sender`, `receiver`, `subject`, `message`, `date_mails`) VALUES
(47, 'Akari@gmail.com', 'Gara@gmail.com', 'B', 'B', '2024-05-28 15:09:26'),
(48, 'Akari@gmail.com', 'Gara@gmail.com', 'C', 'C', '2024-05-28 15:09:33'),
(49, 'Akari@gmail.com', 'Gara@gmail.com', 'D', 'D', '2024-05-28 15:09:40'),
(50, 'Akari@gmail.com', 'Gara@gmail.com', 'E', 'E', '2024-05-28 15:09:45'),
(51, 'Gara@gmail.com', 'Akari@gmail.com', 'A', 'A', '2024-05-28 15:29:46'),
(52, 'Gara@gmail.com', 'Akari@gmail.com', 'B', 'B', '2024-05-28 15:29:54'),
(53, 'Gara@gmail.com', 'Akari@gmail.com', 'C', 'C', '2024-05-28 15:29:59'),
(54, 'Gara@gmail.com', 'Akari@gmail.com', 'D', 'D', '2024-05-28 15:30:07'),
(57, 'Gara@gmail.com', 'Akari@gmail.com', 'E', 'E', '2024-05-28 15:52:22'),
(58, 'Gara@gmail.com', 'Akari@gmail.com', 'FU', 'FU', '2024-05-28 16:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `api_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `name`, `api_token`) VALUES
('Akari@gmail.com', '123', 'Akari', '68d6205d3dd334fd757af95ce03a3826'),
('Gara@gmail.com', '123', 'Gara', 'd873c14bb0e5de7e0c859b3b906e9caf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_keys`
--
ALTER TABLE `api_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id_mails`),
  ADD KEY `sender` (`sender`),
  ADD KEY `receiver` (`receiver`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_keys`
--
ALTER TABLE `api_keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id_mails` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

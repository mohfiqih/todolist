-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 04:25 AM
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
-- Database: `db_todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `ket_status`
--

CREATE TABLE `ket_status` (
  `id` int(11) NOT NULL,
  `todo_id` int(11) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `task` text NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `level` varchar(11) NOT NULL COMMENT '1 = low, 2 middle. 3 high',
  `status` float NOT NULL DEFAULT '0' COMMENT 'persentase pekerjaan',
  `checked` varchar(25) NOT NULL COMMENT 'ceklist sub 1 = ok 0 belum, 2 ditolak'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `id_user`, `task`, `mulai`, `selesai`, `date_created`, `date_updated`, `level`, `status`, `checked`) VALUES
(1, 3, 'nganggur 222', '12:07:00', '17:00:00', '2022-01-01 17:00:00', '2022-01-10 03:18:43', 'High', 42, 'Tolak'),
(4, 2, 'duduk rewr', '08:00:00', '17:00:00', '2022-01-12 17:00:00', '2022-01-10 03:18:35', 'High', 31, 'ACC'),
(15, 1, 'kkk', '10:00:00', '03:00:00', '2022-01-03 17:00:00', '2022-01-10 03:17:24', 'High', 81, 'Belum');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` text COLLATE utf8_unicode_ci NOT NULL,
  `user_namalengkap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_level` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT '1= kabag, 2= subbag, 3 = staf , 4 magang',
  `user_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_edited` datetime DEFAULT NULL,
  `user_status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_password`, `user_namalengkap`, `user_level`, `user_created`, `user_edited`, `user_status`) VALUES
(1, 'hasta', '$2y$10$TKQKshSWOFBb8oqOe96OouCan9Fs9nGr/UIz7BI6.dTWLRTRJWtve', 'Hasta Dwi', 'Ka. Bag', '2021-11-03 16:45:44', NULL, '1'),
(2, 'yuda', '$2y$10$yHS0FBsn1uQYvQmzskrOuuj/Q874EOQIYAvoHt4H9ObULOLIrFA4.', 'Wirayuda Ardi', 'Sub Bag', '2021-12-12 18:31:05', NULL, '1'),
(3, 'fiqih', '$2y$10$OX1hwPv29xvkzm6wOGgkV.xrFylKq929tKQB/y2xNLiZTZ8VPIA0y', 'Moh. Fiqih', 'Staf', '2021-12-12 18:31:16', NULL, '1'),
(4, 'Wira', '$2y$10$p1bUYSAFUlEkNf6yTgB11O2go0F4bdi3.wQEUiDX.SVEimH79dW7e', 'Wirayuda', 'Magang', '2022-01-09 22:23:24', NULL, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ket_status`
--
ALTER TABLE `ket_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `todo_id` (`todo_id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_nama` (`user_nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ket_status`
--
ALTER TABLE `ket_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ket_status`
--
ALTER TABLE `ket_status`
  ADD CONSTRAINT `on dekete` FOREIGN KEY (`todo_id`) REFERENCES `todo` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `todo`
--
ALTER TABLE `todo`
  ADD CONSTRAINT `on dekete user` FOREIGN KEY (`id_user`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

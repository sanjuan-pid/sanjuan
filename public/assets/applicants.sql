-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 07:00 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pid`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `request_no` varchar(255) DEFAULT NULL,
  `year_applied` varchar(50) DEFAULT NULL,
  `date_requested` datetime DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `suffix` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `age` int(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `house_no` varchar(255) DEFAULT NULL,
  `barangay` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `date_swabbed` date DEFAULT NULL,
  `quarantine_duration` varchar(255) DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `quarantine_facility` varchar(255) DEFAULT NULL,
  `fit_to_work` varchar(255) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `confirmed` varchar(50) DEFAULT NULL,
  `print_now` varchar(50) DEFAULT NULL,
  `swab_result` varchar(255) DEFAULT NULL,
  `monitoring_sheet` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `cho_qrcode` varchar(255) DEFAULT NULL,
  `qr_filename` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `request_no`, `year_applied`, `date_requested`, `last_name`, `first_name`, `middle_name`, `suffix`, `birthday`, `age`, `sex`, `house_no`, `barangay`, `city`, `date_swabbed`, `quarantine_duration`, `date_start`, `date_end`, `quarantine_facility`, `fit_to_work`, `contact`, `email`, `confirmed`, `print_now`, `swab_result`, `monitoring_sheet`, `remarks`, `filename`, `cho_qrcode`, `qr_filename`, `created_at`, `updated_at`) VALUES
(1, 'CertRequest-2022-00001', '2022', '2022-02-04 00:00:00', 'Rosales', 'Stan Roe', 'Parada', NULL, NULL, 0, '', '187 Unit 9 P. Parada St.', 'STA. LUCIA', 'San Juan City', '2022-01-17', '9 days', '2022-01-08', '2022-01-17', 'HOME', 'YES', '09985491893', 'stan24roe@gmail.com', '1', NULL, '632051.png', '1125685.png', NULL, 'CertRecovery_1.pdf', NULL, 'QRCode_1.png', '2022-02-04 17:39:33', '2022-02-15 11:06:13'),
(2, NULL, '2022', '2022-02-15 00:00:00', 'GALLARDO', 'JOSH', NULL, NULL, NULL, NULL, NULL, 'SALAPAN', 'SALAPAN', 'San Juan City', '2021-12-28', '3 days', '2021-12-28', '2021-12-31', 'SAN JUAN MEDICAL CENTER', 'YES', '09064151135', 'joshuagallardo777@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-15 11:13:02', '2022-02-15 11:13:02'),
(3, NULL, '2022', '2022-02-15 00:00:00', 'GALLARDO', 'JOSH', NULL, NULL, NULL, NULL, NULL, 'SALAPAN', 'SALAPAN', 'San Juan City', '2021-12-28', '3 days', '2021-12-28', '2021-12-31', 'SAN JUAN MEDICAL CENTER', 'YES', '09064151135', 'joshuagallardo777@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-15 11:13:46', '2022-02-15 11:13:46'),
(4, 'SJCRC-2022-00004', '2022', '2022-02-15 00:00:00', 'GALLARDO', 'JOSH', NULL, NULL, NULL, NULL, NULL, 'SALAPAN', 'SALAPAN', 'San Juan City', '2021-12-28', '3 days', '2021-12-28', '2021-12-31', 'SAN JUAN MEDICAL CENTER', 'YES', '09064151135', 'joshuagallardo777@gmail.com', NULL, NULL, 'Gull_portrait_ca_usa.jpg', NULL, NULL, NULL, NULL, NULL, '2022-02-15 11:15:24', '2022-02-15 11:15:24'),
(5, 'SJCRC-2022-00005', '2022', '2022-02-15 00:00:00', 'GALLARDO', 'JOSH', NULL, NULL, NULL, NULL, NULL, 'SALAPAN', 'SALAPAN', 'San Juan City', '2021-12-28', '3 days', '2021-12-28', '2021-12-31', 'SAN JUAN MEDICAL CENTER', 'YES', '09064151135', 'joshuagallardo777@gmail.com', '1', NULL, 'Gull_portrait_ca_usa.jpg', NULL, NULL, 'CertRecovery_5.pdf', NULL, 'QRCode_5.png', '2022-02-15 11:15:41', '2022-02-15 11:39:11'),
(6, 'SJCRC-2022-00006', '2022', '2022-02-15 00:00:00', 'GALLARDO', 'JOSH', NULL, NULL, NULL, 24, 'Male', 'SALAPAN, SALAPAN, San Juan City', 'SALAPAN', 'San Juan City', '2022-02-01', '5 days', '2022-02-01', '2022-02-06', 'HOME', 'YES', '09064151135', 'joshuagallardo777@gmail.com', '1', NULL, 'Gull_portrait_ca_usa.jpg', NULL, 'Reasons:\r\n1. sample\r\n2. example\r\n3. test', 'CertRecovery_6.pdf', NULL, 'QRCode_6.png', '2022-02-15 11:40:39', '2022-02-15 13:03:45'),
(7, 'SJCRC-2022-00007', '2022', '2022-02-15 00:00:00', 'GALLARDO', 'JOSH', NULL, NULL, '1997-12-07', 24, 'Male', 'SALAPAN', 'SALAPAN', 'San Juan City', '2022-02-01', '1 days', '2022-02-02', '2022-02-03', 'HOME', 'YES', '09064151135', 'joshuagallardo777@gmail.com', '1', '0', 'Gull_portrait_ca_usa.jpg', NULL, NULL, 'CertRecovery_7.pdf', NULL, 'QRCode_7.png', '2022-02-15 12:48:23', '2022-02-15 13:31:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 12:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dms`
--
CREATE DATABASE IF NOT EXISTS `dms` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dms`;

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

DROP TABLE IF EXISTS `drugs`;
CREATE TABLE `drugs` (
  `drug_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `administration` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `expiry_date` date NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `expired` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`drug_id`, `name`, `description`, `administration`, `type`, `quantity`, `manufacturer`, `expiry_date`, `date_added`, `expired`) VALUES
(3, 'METHADONE HCL INTENSOL CONC', 'syrup', 'drink', 'syrup', 20, 'METHADONE ', '2021-01-27', '2021-01-16 08:56:32', 'Yes'),
(4, 'codeine sulfate tabs', 'codeine sulfate tabs', 'swallow', 'tablet', 50, 'codeine ', '2021-03-05', '2021-01-09 16:59:40', 'no'),
(5, 'DILAUDID TABS', 'DILAUDID TABS', 'swallow', 'tablets', 78, 'DILAUDID', '2021-01-21', '2021-01-09 16:59:40', 'no'),
(6, 'morphine sulfate tabs', 'First fill opioids limited to 7 days.', 'swallow', 'tablet', 89, 'morphine ', '2021-02-20', '2021-01-09 17:02:31', 'no'),
(7, 'INSULIN LISPRO PROTAMINE', 'Limit 45mls per\r\nmonth;QL(1.5\r\nml daily)', 'injection', 'injection', 90, 'INSULIN ', '2021-04-17', '2021-01-09 17:02:31', 'no'),
(8, 'DULCOLAX SUPP', 'Available for members in nongrandfathered plans ages 50- 74;AL(At least 50 yrs old - Up to 74 yrs old)', 'drink', 'syrup', 100, 'DULCOLAX', '2021-03-12', '2021-01-16 10:34:12', 'Yes'),
(10, 'Bruffen', 'Painkiller', 'Oral', 'Anesthetics', 100, 'Bruffen company', '2021-02-06', '2021-01-16 11:01:22', 'Yes'),
(11, 'Panadol', 'Painkiller', 'Oral', 'Stimulants', 160, 'Paracetamol', '2021-02-05', '2021-01-16 08:55:14', 'No'),
(12, 'Codein', 'Stimulant', 'Oral', 'Anesthetics', 12, 'Bruffen company', '2021-02-05', '2021-01-16 10:59:31', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE `notifications` (
  `notification_id` int(11) NOT NULL,
  `message` varchar(300) NOT NULL,
  `date_received` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `message`, `date_received`) VALUES
(2, 'ERYTHROCIN STEARATE TABS is going to expire in 2 days', '2021-01-09 17:07:55'),
(3, 'moxifloxacin hcl (ophth) soln will expire in 4 days', '2021-01-09 17:09:50'),
(4, 'NORTHERA CAPS will expire in 24 hours\r\n\r\n', '2021-01-09 17:09:50'),
(8, 'An item with drug name Codein,has been added to the EXPIRED list of drugs.', '2021-01-16 11:00:33'),
(9, 'An item with drug name Codein,has been added to the EXPIRED list of drugs.', '2021-01-16 11:00:35'),
(10, 'An item with drug name Bruffen,has been added to the EXPIRED list of drugs.', '2021-01-16 11:01:23'),
(11, 'An item with drug name METHADONE HCL INTENSOL CONC,has been added to the EXPIRED list of drugs.', '2021-01-16 11:01:55'),
(12, 'An item with drug name METHADONE HCL INTENSOL CONC,has been added to the EXPIRED list of drugs.', '2021-01-16 11:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `date_added`) VALUES
(3, 'JohnDoe', 'johndoe@email.com', 'secret', '2021-01-09 13:18:59'),
(4, 'JohnDoe', 'john.doe@email.com', 'secret', '2021-01-16 07:57:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`drug_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `drug_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

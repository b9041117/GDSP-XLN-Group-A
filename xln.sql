-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 05:28 PM
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
-- Database: `xln`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `Customer_Key` int(6) NOT NULL,
  `cli_line_number` varchar(15) NOT NULL,
  `dsl_active` int(1) NOT NULL,
  `care_level` int(1) NOT NULL,
  `business_assurance` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Customer_Key`, `cli_line_number`, `dsl_active`, `care_level`, `business_assurance`) VALUES
(1, 444658, '01572822144', 1, 1, 2),
(2, 444659, '01146597858', 0, 1, 1),
(3, 444660, '01169876586', 0, 1, 1),
(4, 444661, '02048998444', 0, 1, 1),
(5, 444662, '02096847897', 1, 1, 2),
(6, 444663, '02065474986', 1, 1, 2),
(7, 444664, '01572456462', 1, 1, 0),
(8, 444665, '01144564645', 1, 2, 2),
(9, 444666, '01181265465', 1, 3, 2),
(10, 444667, '01164856498', 1, 1, 0),
(11, 444668, '01215564649', 1, 1, 0),
(12, 444669, '01144897446', 1, 1, 0),
(13, 444670, '01163312695', 0, 1, 0),
(14, 444671, '01211564654', 1, 4, 2),
(15, 444672, '02045646536', 1, 3, 0),
(16, 444673, '01215646545', 0, 2, 1),
(17, 444674, '01615644878', 1, 1, 2),
(18, 444675, '01135486789', 1, 1, 2),
(19, 444676, '01225856789', 0, 4, 1),
(20, 444677, '01176546549', 1, 1, 0),
(21, 444678, '01482654654', 1, 2, 0),
(22, 444679, '01482654065', 1, 1, 2),
(23, 444680, '01173214566', 1, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Customer_Key` (`Customer_Key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 05:57 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(15) DEFAULT NULL,
  `email_id` varchar(30) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `email_id`, `phone_no`) VALUES
(1, 'Aditi', 'aditi30@gmail.com', '8745896584'),
(2, 'Zaid', 'saifalikhanfanz@yahoo.com', '8056987887');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `day` varchar(12) NOT NULL,
  `dates` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`day`, `dates`) VALUES
('Friday', '2021-06-04'),
('Monday', '2021-05-31'),
('Saturday', '2021-06-05'),
('Sunday', '2021-06-06'),
('Thursday', '2021-06-03'),
('Tuesday', '2021-06-01'),
('Wednesday', '2021-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `run_time` time NOT NULL,
  `t_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`m_id`, `m_name`, `run_time`, `t_id`) VALUES
(1, '96', '02:38:00', 1),
(2, 'Soul', '01:47:00', 2),
(3, 'Roohi', '02:14:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `seat_count`
--

CREATE TABLE `seat_count` (
  `t_id` int(11) DEFAULT NULL,
  `day` varchar(12) DEFAULT NULL,
  `s_type` varchar(3) DEFAULT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat_count`
--

INSERT INTO `seat_count` (`t_id`, `day`, `s_type`, `count`) VALUES
(1, 'Monday', 'M', 0),
(1, 'Monday', 'A', 0),
(1, 'Monday', 'N', 0),
(1, 'Tueday', 'M', 0),
(1, 'Tueday', 'A', 0),
(1, 'Tueday', 'N', 0),
(1, 'Wednesday', 'M', 0),
(1, 'Wednesday', 'A', 0),
(1, 'Wednesday', 'N', 0),
(1, 'Thursday', 'M', 0),
(1, 'Thursday', 'A', 0),
(1, 'Thursday', 'N', 0),
(1, 'Friday', 'M', 0),
(1, 'Friday', 'A', 0),
(1, 'Friday', 'N', 0),
(1, 'Saturday', 'M', 0),
(1, 'Saturday', 'A', 0),
(1, 'Saturday', 'N', 0),
(1, 'Sunday', 'M', 0),
(1, 'Sunday', 'A', 0),
(1, 'Sunday', 'N', 0),
(2, 'Monday', 'M', 0),
(2, 'Monday', 'A', 0),
(2, 'Monday', 'N', 0),
(2, 'Tueday', 'M', 0),
(2, 'Tueday', 'A', 0),
(2, 'Tueday', 'N', 0),
(2, 'Wednesday', 'M', 0),
(2, 'Wednesday', 'A', 0),
(2, 'Wednesday', 'N', 0),
(2, 'Thursday', 'M', 0),
(2, 'Thursday', 'A', 0),
(2, 'Thursday', 'N', 0),
(2, 'Friday', 'M', 0),
(2, 'Friday', 'A', 0),
(2, 'Friday', 'N', 0),
(2, 'Saturday', 'M', 0),
(2, 'Saturday', 'A', 0),
(2, 'Saturday', 'N', 0),
(2, 'Sunday', 'M', 0),
(2, 'Sunday', 'A', 0),
(2, 'Sunday', 'N', 0),
(3, 'Monday', 'M', 0),
(3, 'Monday', 'A', 0),
(3, 'Monday', 'N', 0),
(3, 'Tueday', 'M', 0),
(3, 'Tueday', 'A', 0),
(3, 'Tueday', 'N', 0),
(3, 'Wednesday', 'M', 0),
(3, 'Wednesday', 'A', 0),
(3, 'Wednesday', 'N', 0),
(3, 'Thursday', 'M', 0),
(3, 'Thursday', 'A', 0),
(3, 'Thursday', 'N', 0),
(3, 'Friday', 'M', 0),
(3, 'Friday', 'A', 0),
(3, 'Friday', 'N', 0),
(3, 'Saturday', 'M', 0),
(3, 'Saturday', 'A', 0),
(3, 'Saturday', 'N', 0),
(3, 'Sunday', 'M', 0),
(3, 'Sunday', 'A', 0),
(3, 'Sunday', 'N', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `s_type` varchar(3) NOT NULL,
  `start_time` varchar(10) NOT NULL,
  `cost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`s_type`, `start_time`, `cost`) VALUES
('M', '09:00:00', 120),
('A', '15:00:00', 186),
('N', '21:00:00', 200);

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(50) DEFAULT NULL,
  `no_of_seats` int(11) DEFAULT NULL,
  `m_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`t_id`, `t_name`, `no_of_seats`, `m_name`) VALUES
(1, 'Coral', 150, '96'),
(2, 'Azure', 120, 'Soul'),
(3, 'Jade', 100, 'Roohi');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_no` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `email_id` varchar(30) NOT NULL,
  `day` varchar(15) NOT NULL,
  `movie` varchar(20) NOT NULL,
  `timing` varchar(20) NOT NULL,
  `no_of_tickets` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_no`, `Name`, `phone_no`, `email_id`, `day`, `movie`, `timing`, `no_of_tickets`) VALUES
(1, 'Aditi', '8745896584', 'aditi30@gmail.com', 'Tuesday', 'Soul', 'A', 2),
(2, 'Zaid', '8056987887', 'saifalikhanfanz@yahoo.com', 'Wednesday', 'Roohi', 'M', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `seat_count`
--
ALTER TABLE `seat_count`
  ADD KEY `t_id` (`t_id`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `seat_count`
--
ALTER TABLE `seat_count`
  ADD CONSTRAINT `seat_count_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `theatre` (`t_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

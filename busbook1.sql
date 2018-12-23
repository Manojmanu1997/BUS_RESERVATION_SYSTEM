-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 05:07 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busbook1`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `FindBus` (IN `busno` VARCHAR(255))  begin
select * from admin_entry where busno=busno;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_entry`
--

CREATE TABLE `admin_entry` (
  `bus_id` int(11) NOT NULL,
  `busno` varchar(30) NOT NULL,
  `boarding` char(30) NOT NULL,
  `droping` char(30) NOT NULL,
  `boardtime` time NOT NULL,
  `droptime` time NOT NULL,
  `nseats` int(2) NOT NULL,
  `fair` int(4) NOT NULL,
  `fname` char(30) NOT NULL,
  `lname` char(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address1` varchar(30) NOT NULL,
  `address2` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `dlicense` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_entry`
--

INSERT INTO `admin_entry` (`bus_id`, `busno`, `boarding`, `droping`, `boardtime`, `droptime`, `nseats`, `fair`, `fname`, `lname`, `email`, `address1`, `address2`, `phone`, `dlicense`) VALUES
(2, 'kA05ES7788', 'banglore', 'Moodbidra', '11:11:00', '11:11:00', 11, 111, 'manoj', 'l', 'manojmanul1997@gmail.com', 'hennagara', 'banglore', 7338471604, '123654'),
(4, 'ka33qe1111', 'mumbai', 'japan', '11:11:00', '11:01:00', 30, 500, 'manoj', 'kumar', 'reenalobo321@gmail.com', 'mysore', 'mysore', 9876543210, 'kar42424'),
(5, 'tn11yt1111', 'a', 'z', '23:01:00', '11:11:00', 30, 500, 'manoj', 'kumar', 'manoj@gmail.com', 'mysore', 'mysore', 9876543210, 'kar42424'),
(6, 'ap11tr1111', 'a', 'z', '11:11:00', '21:21:00', 30, 900, 'manoj', 'kumar', 'reenalobo321@gmail.com', 'mysore', 'mysore', 9876543210, 'kar42424'),
(7, 'me18es1234', 'gadaga', 'hubli', '19:00:00', '06:30:00', 48, 650, 'karthi', 'kumar', 'guest@gamil.com', 'banglore', 'mysore', 9855698556, 'mek9922334'),
(8, 'me18es1235', 'g', '', '00:00:00', '00:00:00', 0, 0, '', '', '', '', '', 0, ''),
(9, 'tn22es3333', 'gadaga', 'hubli', '20:00:00', '05:55:00', 30, 800, 'manoj', 'kumar', 'manoj@gmail.com', 'karnataka', 'mysore', 9876543210, 'kar42424'),
(10, 'ab101', 'mijar', 'mangalore', '09:05:00', '10:25:00', 30, 100, 'shashikant', 'n', 'shashirc44@gmail.com', 'ff', 'ggg', 986473878373, 'h46'),
(11, 'ka33rs1234', 'banglore', 'moodbidra', '20:30:00', '06:00:00', 60, 800, 'manoj', 'n', 'chutyapr@gmail.com', 'karnataka', 'mysore', 7204567853, 'h46'),
(12, 'KA05RF100', 'moodbidra', 'vijaynagara', '22:00:00', '06:00:00', 30, 400, 'karthi', 'kumar', 'reenalobo321@gmail.com', 'mysore', 'mysore', 7204567853, 'mek9922334'),
(13, '33ee3333', 'udupi', 'magadirood', '12:12:00', '22:03:00', 36, 500, 'manoj', 'kumar', 'ashish@gmail.com', 'g', 'ggg', 989086344, 'tn33777');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin`, `password`) VALUES
('manoj', 'manuvinu');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `boarding` varchar(225) NOT NULL,
  `droping` varchar(225) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `buses`
--
DELIMITER $$
CREATE TRIGGER `buscopy` AFTER INSERT ON `buses` FOR EACH ROW BEGIN
insert into businfo set boarding=new.boarding,droping=new.droping,date=new.date;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `businfo`
--

CREATE TABLE `businfo` (
  `boarding` varchar(30) DEFAULT NULL,
  `droping` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `passenger_info`
--

CREATE TABLE `passenger_info` (
  `pass_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` char(10) DEFAULT NULL,
  `age` int(2) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger_info`
--

INSERT INTO `passenger_info` (`pass_id`, `name`, `gender`, `age`, `email`, `phone`) VALUES
(1, 'reena', 'female', 24, 'reenalobo321@gmail.com', 9876543210);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `card_no` float NOT NULL,
  `accountholder` char(30) NOT NULL,
  `expire_date` date NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`card_no`, `accountholder`, `expire_date`, `cvv`) VALUES
(13246600000, 'manoj', '1111-12-12', 111),
(48644300000, 'manoj', '2018-11-17', 11),
(14785200000, 'manoj', '2018-11-17', 111),
(14785200000, 'manoj', '2018-11-17', 111),
(425, 'fd', '2018-11-24', 111),
(45855400, 'hjgffgfdrtddt', '2018-11-18', 111),
(1111, '111', '1111-11-11', 111),
(123254, 'kavita', '2019-12-12', 325),
(65956, '65', '3201-02-12', 11),
(98765400000, 'karthu', '2019-12-30', 369),
(12365500000, 'ashish', '2020-12-12', 324),
(789654000000, 'kavana', '2020-12-12', 753),
(123008000000, 'manoj', '2020-12-20', 358),
(14785200000, 'shashi', '2022-12-12', 39),
(3333, 'reena', '2022-12-23', 987),
(11125500, 'manoj', '2020-12-12', 123),
(12394500000, 'karthu', '2018-11-18', 111),
(7896540000, 'frtyui', '2020-12-12', 159),
(555555, 'SS', '2222-12-12', 652),
(258, 'hjgffgfdrtddt', '0020-12-12', 21),
(24256900, 'jyothi', '2024-01-10', 565),
(-1, 'karthu', '2018-11-24', 11),
(968512000000, 'reena', '2020-12-12', 369);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`) VALUES
('er', '1@gmail.com', '123'),
('manoj', 'manojmanul1997@gmail.com', '202cb962ac59075b964b07152d234b70'),
('vinu', 'manojhennagara@gmail.com', '202cb962ac59075b964b07152d234b70'),
('malli', 'malli@gmail.com', '202cb962ac59075b964b07152d234b70'),
('mallikarjun', 'mallli@gmail.com', '202cb962ac59075b964b07152d234b70'),
('jyothi', 'jyothisomshekharcs1999@gmail.com', '1f3870be274f6c49b3e31a0c6728957f');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `useract` AFTER INSERT ON `users` FOR EACH ROW BEGIN
INSERT INTO user_activity
SET username=NEW.username,
date=NOW(),
email=NEW.email;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_activity`
--

CREATE TABLE `user_activity` (
  `date` datetime DEFAULT NULL,
  `username` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_activity`
--

INSERT INTO `user_activity` (`date`, `username`, `email`) VALUES
('2018-11-22 21:45:46', 'vinu', 'manojhennagara@gmail.com'),
('2018-11-22 21:58:06', 'malli', 'malli@gmail.com'),
('2018-11-22 22:05:28', 'mallikarjun', 'mallli@gmail.com'),
('2018-11-23 11:49:49', 'jyothi', 'jyothisomshekharcs1999@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_entry`
--
ALTER TABLE `admin_entry`
  ADD PRIMARY KEY (`bus_id`),
  ADD UNIQUE KEY `busno` (`busno`);

--
-- Indexes for table `passenger_info`
--
ALTER TABLE `passenger_info`
  ADD PRIMARY KEY (`pass_id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_entry`
--
ALTER TABLE `admin_entry`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `passenger_info`
--
ALTER TABLE `passenger_info`
  MODIFY `pass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

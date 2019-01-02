-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 01:13 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ict700`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `id` int(100) NOT NULL,
  `eventName` varchar(50) NOT NULL,
  `dateTim` varchar(16) NOT NULL,
  `registURL` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `imagePath` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`id`, `eventName`, `dateTim`, `registURL`, `location`, `address`, `city`, `state`, `imagePath`, `description`) VALUES
(4, 'OKU Fun Run 2017', '2017/12/08 08:09', 'www.hoohaa.com.my/OKUFunRun2017', 'Cyberjaya', '45110 Cyberjaya Jalan Teknokrat', 'Cyberjaya', 'Kuala Lumpur', 'uploads/Capture.PNG', 'OKU Fun Run 2017 is annual Fun Run that organized by hoohaa organization to raise and collect funds that will be given to the OKU people accros Malaysia. Our beloved PM Dato Seri Najib bin Abdul Razak also participating in the event. So what are you waiting for, show your support to Malaysian OKU and our PM Dato Seri Najib. ;)\r\n\r\n#RespectMyPM'),
(4, 'Larian Amal', '2017/12/29 11:39', 'www.hoohaa.com.my/Larian Amal', 'Putrajaya', 'Bangunan Keadilan Putrajaya', 'Putrajaya', 'Kuala Lumpur', 'uploads/smilelaugh.jpg', 'Larian ini akan di langsungkan bersama sama Perdana Menteri Malaysia Dato Seri Najib bin Razak.\r\n\r\n#RespectMyPM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `orgName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `orgName`) VALUES
(1, 'kurokuroo', 'abc123', 'Aman Palestin'),
(2, 'kkuro', 'kuro', 'NGO'),
(3, 'mirul', 'abc123', 'MEPSCare'),
(4, 'shasha', 'abc123', 'YUN NAM HairCARE');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `name`, `email`, `mobile`) VALUES
(1, 'Mohd Saddam asd', 'office@amanpalestin.net', '+60389267019'),
(2, 'saddam', 'saddam@live.comy', '0315'),
(3, 'amirul', 'mirul@meps.com.my', '01685496251'),
(4, 'tasha', 'tasha@yunnam.com.my', '0197844125');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

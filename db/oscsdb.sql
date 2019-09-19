-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2019 at 10:29 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oscsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `StudentName` char(200) NOT NULL,
  `StudentNo` varchar(200) NOT NULL,
  `RegNo` varchar(200) NOT NULL,
  `Course` varchar(200) NOT NULL,
  `CourseCode` varchar(200) NOT NULL,
  `Program` varchar(200) NOT NULL,
  `Faculty` varchar(200) NOT NULL,
  `Department` varchar(200) NOT NULL,
  `Hall` varchar(200) NOT NULL,
  `Year_Of_Entry` varchar(200) NOT NULL,
  `Year_Of_Study` varchar(200) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `AppliedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `StudentName`, `StudentNo`, `RegNo`, `Course`, `CourseCode`, `Program`, `Faculty`, `Department`, `Hall`, `Year_Of_Entry`, `Year_Of_Study`, `Gender`, `Email`, `AppliedOn`) VALUES
(1, 'bukeye timoythy', '16077210077', '16/u/7701', 'B.Software Engineering', 'ISD', 'Day', 'science', 'computer science', 'North hall', '2015/2016', '4', 'Male', 'bukeyetimothy100@gmail.com', '2019-07-17 06:19:22'),
(2, 'bukeye timoythy', '16077210077', '16/u/7701', 'B.Software Engineering', 'ISD', 'Day', 'science', 'computer science', 'North hall', '2015/2016', '4', 'Male', 'bukeyetimothy100@gmail.com', '2019-07-17 10:32:32'),
(3, 'kabeda ivan', '16077210013', '16/u/1001', 'bachelor of information technology and computing ', 'ISD', 'Day', 'science', 'computer science', 'North hall', '2015/2016', '4', 'Male', 'bukeyetimothy100@gmail.com', '2019-07-17 10:32:37'),
(4, 'Asaba Julius', '160731006892', '16/u/6862/pd', 'Bachelor of information System', 'ISD', 'Day', 'science', 'computer science', 'North hall', '2015/2016', '4', 'Male', 'bukeyetimothy100@gmail.com', '2019-07-17 10:32:42'),
(5, 'kabeda james', '78110', '16/u/7810/isd/pd', 'computer science', 'isp', 'Day', 'science', 'computer sciencce', 'north hall', '2015/2016', '3', 'Male', 'james@gmail.com', '2019-07-20 04:08:43'),
(6, 'kabeda james', '78110', '16/u/7810/isd/pd', 'computer science', 'isp', 'Day', 'science', 'computer sciencce', 'north hall', '2015/2016', '3', 'Male', 'james@gmail.com', '2019-07-20 04:31:20');

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE `clearance` (
  `id` int(11) NOT NULL,
  `Department_Section` varchar(200) NOT NULL,
  `StudentName` varchar(200) NOT NULL,
  `ClearanceStatus` varchar(200) NOT NULL,
  `Comment_Reason` varchar(200) NOT NULL,
  `Cleared_By` varchar(200) NOT NULL,
  `Posting_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`id`, `Department_Section`, `StudentName`, `ClearanceStatus`, `Comment_Reason`, `Cleared_By`, `Posting_Date`) VALUES
(1, 'computer lab', 'kironde Eric', 'Pending', 'He stolen a mouse', 'Musisi', '2019-08-03 06:17:12'),
(2, 'library', 'bukeye timoythy', 'Pending', 'we are demanding him Java programming Book  he Borrowed ', 'Musisi', '2019-08-03 07:10:27'),
(3, 'HoD', 'Asaba Julius', 'cleared', 'He Has No Bad Records ', 'Dr Denis HoD', '2019-08-03 08:22:30');

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `id` int(11) NOT NULL,
  `Requirement_to` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `StudentCategory` varchar(200) NOT NULL,
  `AddedBy` varchar(200) NOT NULL,
  `AddedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`id`, `Requirement_to`, `Description`, `StudentCategory`, `AddedBy`, `AddedOn`) VALUES
(1, 'MedicalOfficer', 'all student should good medical record', '', 'timothy', '2019-07-17 02:34:55'),
(2, 'student', 'All students to be cleared must has paid upto zero balance from year up to finally ', '', 'BUKEYE ADMIN', '2019-07-17 02:38:03'),
(3, 'Lab', 'To clear a student must be when has not any bad record with computer labs ', '', 'ADMIN', '2019-07-17 02:39:37'),
(4, 'Lab', 'To clear a student must be when has not any bad record with computer labs ', '', 'Admin', '2019-07-17 02:41:02'),
(5, 'MedicalOfficer', 'To clear a student should have a medical card ', '', 'Timothy admin', '2019-07-17 02:42:19'),
(6, 'MedicalOfficer', 'To clear a student should have a medical card ', '', 'Timothy admin', '2019-07-17 02:43:51'),
(7, 'user', 'kkkk', '', 'Denies', '2019-07-17 18:56:32'),
(8, 'For All Students', 'gggg', '', 'timi', '2019-07-17 19:51:08'),
(9, '', 'hllala', 'For Only Goverment Supported Students', 'hdhddh', '2019-07-17 20:07:11'),
(10, 'Warden', 'ghdjddjdj', '', 'admin', '2019-07-19 08:44:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `UserType` varchar(200) NOT NULL,
  `studentNo` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `UserName`, `Password`, `Email`, `UserType`, `studentNo`, `course`, `PostingDate`) VALUES
(2, 'Mukisa', '202cb962ac59075b964b07152d234b70', 'musika@gmail.com', 'MedicalOfficer', '', '', '2019-06-30 04:28:01'),
(3, 'admin', '202cb962ac59075b964b07152d234b70', 'admin@gmail.com', 'admin', '', '', '2019-06-30 05:48:53'),
(4, 'Densi', '202cb962ac59075b964b07152d234b70', 'hod@gmail.com', 'HoD', '', '', '2019-06-30 06:04:16'),
(5, 'Nantume', '202cb962ac59075b964b07152d234b70', 'librarian@kyu.ac.com', 'Librarian', '', '', '2019-06-30 06:11:07'),
(6, 'dos', '202cb962ac59075b964b07152d234b70', 'li@gmain.com', 'DoS', '', '', '2019-06-30 06:37:56'),
(7, 'warden', '202cb962ac59075b964b07152d234b70', 'hod@gmain.com', 'Warden', '', '', '2019-06-30 06:56:10'),
(8, 'timo', '202cb962ac59075b964b07152d234b70', 'busar@gmail.com', 'Bursa', '', '', '2019-06-30 06:58:15'),
(9, 'ivan', '202cb962ac59075b964b07152d234b70', 'sport@gmail.com', ' Head_Sport_Science', '', '', '2019-06-30 13:52:40'),
(10, 'robert', '202cb962ac59075b964b07152d234b70', 'robert@gmail.com', 'Lab', '', '', '2019-06-30 13:53:10'),
(11, 'john', '202cb962ac59075b964b07152d234b70', 'john@gmail.com', 'SportScience', '', '', '2019-06-30 14:23:04'),
(12, 'bukeye11', '202cb962ac59075b964b07152d234b70', 'ii@gmail.com', 'student', '', '', '2019-07-07 05:38:16'),
(13, 'Timothy', '202cb962ac59075b964b07152d234b70', 'bis', 'user', 't@gmail.com', '13344', '2019-07-15 19:38:37'),
(14, 'Timothy', '202cb962ac59075b964b07152d234b70', 'bis', 'user', 't@gmail.com', '13344', '2019-07-15 19:39:31'),
(15, 'Timothy', '202cb962ac59075b964b07152d234b70', 'bis', 'user', 't@gmail.com', '13344', '2019-07-15 19:41:17'),
(16, 'bb', '202cb962ac59075b964b07152d234b70', '', 'user', 't14@gmail.com', '', '2019-07-17 03:11:43'),
(17, 'julius', '202cb962ac59075b964b07152d234b70', 'bis', 'user', 'julius@gmail.com', '7702', '2019-07-19 08:42:48'),
(18, 'robert', '202cb962ac59075b964b07152d234b70', '', 'user', 'robert@gmail.com', '', '2019-07-25 04:28:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clearance`
--
ALTER TABLE `clearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clearance`
--
ALTER TABLE `clearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

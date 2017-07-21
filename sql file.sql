-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2017 at 09:35 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adddetails`
--

CREATE TABLE `adddetails` (
  `packageid` varchar(10) NOT NULL,
  `addplace` varchar(20) NOT NULL,
  `adults` varchar(5) NOT NULL,
  `children` varchar(5) NOT NULL,
  `description` text NOT NULL,
  `stayamount` varchar(10) NOT NULL,
  `foodamount` varchar(10) NOT NULL,
  `airlinesamount` varchar(10) NOT NULL,
  `noofdays` varchar(10) NOT NULL,
  `noofnights` varchar(10) NOT NULL,
  `choose` varchar(500) NOT NULL,
  `image_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='add details table';

--
-- Dumping data for table `adddetails`
--

INSERT INTO `adddetails` (`packageid`, `addplace`, `adults`, `children`, `description`, `stayamount`, `foodamount`, `airlinesamount`, `noofdays`, `noofnights`, `choose`, `image_path`) VALUES
('1', 'mumbai', '2', '2', 'Bombay, or Mumbai as it is now called, is the commercial capital of India.', '3000', '1500', '3000', '3', '2', 'mumbai.jpg', ''),
('2', 'delhi', '2', '2', 'The capital of India.', '6000', '3000', '8500', '5', '4', 'delhi1.jpg', ''),
('3', 'banglore', '2', '2', 'Bangaloreofficially known as Bengaluru is the capital of the Indian state of Karnataka.', '6000', '2500', '2000', '4', '3', 'banglore.jpg', ''),
('4', 'goa', '2', '2', 'Famous for its beautiful beaches', '10500', '5000', '10000', '5', '4', 'goa.jpg', ''),
('5', 'kerla', '2', '2', 'A state famous for backwaters.', '8000', '4500', '15000', '6', '5', 'kerla.jpg', ''),
('6', 'kolkata', '2', '2', 'Capital of west bengal.', '6500', '3000', '8000', '5', '4', 'kolkata.jpg', ''),
('7', 'pondicherry', '2', '2', 'Also know as pondy.', '3000', '1500', '1000', '3', '2', 'pondicherry.jpg', ''),
('8', 'kashmir', '2', '2', 'Kashmir is the northernmost geographical region of the Indian subcontinent.', '10000', '5000', '25000', '7', '6', 'kashmir.jpg', ''),
('09', 'kodaikanal', '2', '2', 'Kodaikanal the princess of hills.', '3000', '1500', '5000', '3', '2', 'kodaikanal.jpg', ''),
('10', 'hyderbad', '2', '2', 'upcoming IT sector ', '2500', '1500', '5000', '4', '3', 'hyderabad.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `cardno` varchar(20) NOT NULL,
  `cvvno` varchar(5) NOT NULL,
  `expiremonth` varchar(10) NOT NULL,
  `expireyear` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`cardno`, `cvvno`, `expiremonth`, `expireyear`) VALUES
('8520', '855', '1', '2000'),
('123', '123', '1', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `placedetails`
--

CREATE TABLE `placedetails` (
  `ID_regist` varchar(100) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(15) NOT NULL,
  `days` varchar(5) NOT NULL,
  `nights` varchar(5) NOT NULL,
  `stay` varchar(6) NOT NULL,
  `food` varchar(6) NOT NULL,
  `travel` varchar(6) NOT NULL,
  `doj` date NOT NULL,
  `total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placedetails`
--

INSERT INTO `placedetails` (`ID_regist`, `id`, `name`, `days`, `nights`, `stay`, `food`, `travel`, `doj`, `total`) VALUES
('51', 18, 'mumbai', '3', '2', '3000', '1500', '3000', '2017-04-27', '7500'),
('', 19, 'hyderbad', '4', '3', '2500', '1500', '5000', '2017-04-30', '9000');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) UNSIGNED NOT NULL,
  `frstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `dob` date NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `phoneno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='registration page';

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `frstname`, `lastname`, `username`, `pass`, `gender`, `dob`, `emailid`, `phoneno`) VALUES
(51, 'veneeth', 'raj', 'veneeth', '123', '', '1996-09-16', 'gveneeth@gmail.com', '9791487410'),
(52, 'abhishek', 'sharma', 'abhi', '123', '', '2017-04-14', 'abhishek@gmail.com', '9861428310'),
(53, 'admin', 'admin', 'admin', 'admin', '', '2017-04-07', 'gveneeth@gmail.com', '9791487410');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `placedetails`
--
ALTER TABLE `placedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `placedetails`
--
ALTER TABLE `placedetails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

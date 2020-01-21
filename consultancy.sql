-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 01:22 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consultancy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('Admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `patient_id` int(5) NOT NULL,
  `doc_name` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `date` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`patient_id`, `doc_name`, `name`, `time`, `date`, `status`) VALUES
(1, 'ashiq', 'jijo', '9am', '2020-01-02', 'approved'),
(2, 'ashiq', 'jebin', '4pm', '10/1/2020', 'approved'),
(11, 'ajumal', 'nikhil', '9am', '2020-01-01', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `doctorreg`
--

CREATE TABLE `doctorreg` (
  `doc.id` int(5) NOT NULL,
  `doc_name` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `qualification` varchar(10) NOT NULL,
  `certificate_no` varchar(10) NOT NULL,
  `department` varchar(10) NOT NULL,
  `clinic_address` varchar(10) NOT NULL,
  `clinic_timing` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorreg`
--

INSERT INTO `doctorreg` (`doc.id`, `doc_name`, `phone`, `email`, `qualification`, `certificate_no`, `department`, `clinic_address`, `clinic_timing`, `username`, `password`) VALUES
(1, 'ashiq', '123456789', 'ashiqhabee', 'mbbs', '101', 'cardiology', 'webhouse', '10am-6pm', 'ashiq', '3690');

-- --------------------------------------------------------

--
-- Table structure for table `patientreg`
--

CREATE TABLE `patientreg` (
  `id` int(5) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientreg`
--

INSERT INTO `patientreg` (`id`, `Name`, `Age`, `Phone`, `Gender`, `Address`, `password`) VALUES
(1, 'nikhil', '25', '987654321', 'male', 'chennithal', '12345'),
(2, 'sudhi', '23', '12345689', 'male', 'orisys', '1212'),
(3, 'mujeeb', '23', '897564231', 'male', 'mlopiillkk', 'mujeeb123'),
(28, 'fve', 'ec', 'rgvf', 'ced', 'efv', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `doctorreg`
--
ALTER TABLE `doctorreg`
  ADD PRIMARY KEY (`doc.id`);

--
-- Indexes for table `patientreg`
--
ALTER TABLE `patientreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `patient_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doctorreg`
--
ALTER TABLE `doctorreg`
  MODIFY `doc.id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patientreg`
--
ALTER TABLE `patientreg`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

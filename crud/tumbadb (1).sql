-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 04:23 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tumbadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `id` int(10) NOT NULL,
  `usrname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `room_id` int(255) NOT NULL,
  `block_name` varchar(100) NOT NULL,
  `room_number` int(100) NOT NULL,
  `std_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`room_id`, `block_name`, `room_number`, `std_id`) VALUES
(6, 'Brock1', 1, 5),
(7, 'Brock1', 1, 6),
(24, 'GB_Floo2', 3, 9),
(50, 'NB_Floo2', 3, 33),
(58, 'GB_Floo2', 3, 34);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` int(255) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `Reg_num` varchar(9) NOT NULL,
  `level` int(100) NOT NULL,
  `dpt` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `fname`, `lname`, `gender`, `Reg_num`, `level`, `dpt`, `password`) VALUES
(5, 'salimu', 'sefu', 'male', '1999rp223', 1, 'it', '43211'),
(6, 'rizki', 'abdallah', 'male', '1999rp00', 3, 'it', 'rizki'),
(9, 'divine', 'belladi', 'female', '19rp09140', 3, 'it', '1234'),
(33, 'mugisha', 'benitho', 'male', '19rp04343', 3, 'it', 'mugisha'),
(34, 'olivier', 'karekezi', 'male', '1111', 2, 'it', 'olivier'),
(40, 'hgkhgkj', 'gfjhj', 'female', '19rp44444', 3, 'it', ''),
(41, 'enuce', 'sis', 'male', '19rp0044', 3, 'it', ''),
(42, 'mansi', 'ngabo', 'female', '00rp000', 3, 'mt', ''),
(43, 'mansi', 'ngabo', 'female', '00rp0022', 3, 'mt', ''),
(45, 'mansi', 'ngabo', 'female', '00rp002', 3, 'mt', ''),
(46, 'qewq', 'dgrfwe', 'male', 'greqreqh', 1, 'it', ''),
(47, 'efgew', 'fhgerh', 'male', 'fdhreh', 3, 'mt', ''),
(48, 'efgew', 'fhgerh', 'male', 'fgfsg', 3, 'mt', ''),
(49, 'efefgr', 'efewwe', 'male', 'gewgrweg', 3, 'et', ''),
(50, 'sdbdfb', 'fdngfn', 'female', 'gfnmh', 2, 're', ''),
(51, 'sdbdfb', 'fdngfn', 'female', 'gf32322', 2, 're', ''),
(52, 'ewtte', 'fghd', 'male', 'fdsbg', 3, 'mt', ''),
(53, 'nishimwe', 'walida', 'female', '19pr2211', 3, 're', '999999'),
(55, 'nishimwe', 'walida', 'female', '19pr22110', 3, 're', '99999'),
(57, 'nishimwe', 'walida', 'female', '19pr2432', 3, 're', '9999'),
(58, 'khadidja', 'uwimana', 'female', '19rp3333', 3, 'it', '123@abc'),
(59, 'khadidja', 'uwimana', 'female', '19rp2222', 3, 'it', '1234'),
(60, 'khadidja', 'uwimana', 'female', '19rp1111', 3, 'it', '1234'),
(61, 'khadidja', 'uwimana', 'female', '19rp8888', 3, 'it', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usrname` (`usrname`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`room_id`),
  ADD UNIQUE KEY `std_id` (`std_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`),
  ADD UNIQUE KEY `Reg_num` (`Reg_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `room_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `std_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hostel`
--
ALTER TABLE `hostel`
  ADD CONSTRAINT `std_id` FOREIGN KEY (`std_id`) REFERENCES `student` (`std_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2019 at 06:11 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `bname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bname`) VALUES
(1, 'Head First Java'),
(2, 'Programming in PYTHON'),
(3, 'The C++ Programming'),
(4, 'C# in Depth'),
(5, 'Learing PHP & MySQL');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `cname`) VALUES
(1, 'JAVA'),
(2, 'PYTHON'),
(3, 'C++'),
(4, 'C#'),
(5, 'PHP & SQL');

-- --------------------------------------------------------

--
-- Table structure for table `other_employee`
--

CREATE TABLE `other_employee` (
  `id` int(11) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_employee`
--

INSERT INTO `other_employee` (`id`, `ename`, `department`) VALUES
(1, 'Krishnendu Ghose', 'Accounting'),
(2, 'Tapan Maity', 'Addmission'),
(3, 'Anup Kumar', 'Addmission'),
(4, 'Rathi Row', 'Accounting'),
(5, 'B.K.PAL', 'LIBRARIAN'),
(6, 'ZURAR KHAN', 'LIBRARIAN');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `c_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `c_id`, `b_id`) VALUES
(1, 'Sudipta Rana', 1, 1),
(2, 'Raja Ghorui1', 0, 0),
(3, 'Rounak Banargee', 3, 3),
(4, 'Vhaibhab Sankar Josi', 4, 4),
(5, 'Sudipta Dolui', 5, 5),
(6, 'Rohan Hajra', 5, 5),
(7, 'Trisha Manna', 4, 4),
(8, 'Srijita Mondol', 3, 3),
(9, 'Sweata Kapat', 2, 2),
(10, 'Asmita Maity', 1, 1),
(12, 'SRIJITA MONDAL12', 0, 0),
(14, 'SRIJITA MONDALk', 0, 0),
(15, 'bhbjhbjhqsasas', 0, 0),
(16, 'bhbjhbjhqsasas', 0, 0),
(17, 'Minakshi', 0, 0),
(18, 'SRIJITA MONDAL12', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `id` int(11) NOT NULL,
  `tname` varchar(100) NOT NULL,
  `qualifications` varchar(100) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `tname`, `qualifications`, `salary`) VALUES
(1, 'Cristina Andreescu', 'PHD ', 100000),
(2, 'Andrea Robba', 'M.Tech CSE', 85000),
(3, 'Sachit jain', 'MSC & M.Tech (CSE)', 110000),
(4, 'Nuraddin Sadili', 'PHD ', 100000),
(5, 'Santosh Kumar Sharma', 'M.TEch (CSE)', 85000),
(6, 'Meghnath Samanta', 'BCA', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `NAME`, `EMAIL`, `PASSWORD`) VALUES
(1, 'Sudipta Rana', 'sudiptarana00@gmail.com', '29adb7f06a26e38827eee88ae7ce84ec'),
(2, 'Sudipta Rana', 'sudiptarana00@gmail.com', 'd8030dfbbade68bde019ba2da7a3d8ed'),
(3, 'Sudipta Rana', 'sudiptarana00@gmail.com', 'd8030dfbbade68bde019ba2da7a3d8ed'),
(4, 'Sudipta Rana', 'sudiptarana00@gmail.com', '63ff1bb45485306e0e475c6373aeb68f'),
(5, 'Sudipta Rana', 'sudiptarana00@gmail.com', '29adb7f06a26e38827eee88ae7ce84ec'),
(6, 'Sudipta Rana', 'sudiptarana00@gmail.com', '29adb7f06a26e38827eee88ae7ce84ec');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_employee`
--
ALTER TABLE `other_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `other_employee`
--
ALTER TABLE `other_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

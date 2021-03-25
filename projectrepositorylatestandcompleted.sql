-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 12:44 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectrepository`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'boy');

-- --------------------------------------------------------

--
-- Table structure for table `loginprojectrepository`
--

CREATE TABLE `loginprojectrepository` (
  `sn` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginprojectrepository`
--

INSERT INTO `loginprojectrepository` (`sn`, `username`, `password`) VALUES
(1, 'aliyu', 'e407caaac5853db92c035f54ae564e47102adb0b'),
(2, 'sadik', 'e407caaac5853db92c035f54ae564e47102adb0b'),
(3, 'admin', 'ceac9b04aced67dceaf6577b30208737b9047093');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(5) NOT NULL,
  `student_id` int(11) NOT NULL,
  `topics` varchar(150) NOT NULL,
  `category` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `session` varchar(15) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `student_id`, `topics`, `category`, `author`, `session`, `date`) VALUES
(12, 0, 'project repository', 'Web base', '', '2017/2018', '2017-03-02'),
(13, 0, 'exam', 'Web base', '', '2017/2018', '2017-03-02'),
(14, 0, 'Implementation of an expert System on herbal medicine', 'Stand alone', '', '2017/2018', '2017-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `proposed_topics`
--

CREATE TABLE `proposed_topics` (
  `pro_id` int(11) NOT NULL,
  `p_topic` varchar(150) NOT NULL,
  `supervisor_id` int(11) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `validate` varchar(15) NOT NULL DEFAULT 'waiting'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposed_topics`
--

INSERT INTO `proposed_topics` (`pro_id`, `p_topic`, `supervisor_id`, `student_id`, `validate`) VALUES
(20, 'project repository with use of Binary search algorithm', 13, '1', 'accepted'),
(21, 'what the fuck', 22, '7', 'accepted'),
(22, 'flash derive scanner', 23, '8', 'accepted'),
(23, 'school management system', 13, '9', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `surname` varchar(70) NOT NULL,
  `otherName` varchar(70) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `surname`, `otherName`, `regno`, `gender`, `password`) VALUES
(1, 'Mohammad', 'Abubakar Suleiman', 'U/CS/13/224', 'Male', 'sadik'),
(7, 'YUSUF', 'Monte carlo', 'U/CS/13/189', 'Male', '12345'),
(8, 'Chellumi', 'Adam muhammad', 'fsc/csc/14/0002', 'Male', 'chellumi'),
(9, 'yusuf', 'Abdulsamad', 'U/CS/14/290', 'Male', '9898');

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `supervisor_id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `interest` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`supervisor_id`, `name`, `Title`, `level`, `specialization`, `interest`, `password`) VALUES
(13, 'Adam', 'Mal', 'Lecturer I', 'Software Engineering', 'Programming', 'adam'),
(22, 'Ibrahim Bello', 'Prof.', 'Lecturer I', 'Artificial Intelligent', 'Programming', '12345'),
(23, 'sani', 'Mal.', 'Lecturer I', 'programmer', 'Lecturing', 'sani');

-- --------------------------------------------------------

--
-- Table structure for table `s_proposed_topics`
--

CREATE TABLE `s_proposed_topics` (
  `spt_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `std_pro_topics` varchar(70) NOT NULL,
  `validate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `loginprojectrepository`
--
ALTER TABLE `loginprojectrepository`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `proposed_topics`
--
ALTER TABLE `proposed_topics`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`supervisor_id`);

--
-- Indexes for table `s_proposed_topics`
--
ALTER TABLE `s_proposed_topics`
  ADD PRIMARY KEY (`spt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `loginprojectrepository`
--
ALTER TABLE `loginprojectrepository`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `proposed_topics`
--
ALTER TABLE `proposed_topics`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `supervisor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `s_proposed_topics`
--
ALTER TABLE `s_proposed_topics`
  MODIFY `spt_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

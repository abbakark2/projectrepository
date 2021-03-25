-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2017 at 02:55 AM
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
  `topics` varchar(100) NOT NULL,
  `category` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `session` varchar(15) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `topics`, `category`, `author`, `session`, `date`) VALUES
(1, 'project repository', 'web base', 'Abubakar Mohammad Suleiman', '2017', '2017-09-02'),
(2, 'This is a new topic', 'web base', 'Sadik', '2017', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `surname` varchar(70) NOT NULL,
  `otherName` varchar(70) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `surname`, `otherName`, `regno`, `gender`) VALUES
(2360, 'Mohammad', 'Abubakar Suleiman', 'U/CS/13/224', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `sn` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `interest` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`sn`, `name`, `Title`, `level`, `specialization`, `interest`) VALUES
(1, 'adam', 'mal', 'assistant lecturer', 'software engineering', 'programming'),
(2, 'faruk muhammad aliyu', 'Engineer', 'lecturer I', 'Engeering', 'Programming and repairing of electronics'),
(3, 'Prof.', 'DJ yakubu', 'Visiting', 'Matrice', 'Mathematics'),
(4, 'Mal', 'ibrahim bello', 'Lecturer one', 'Programming in Vb', 'WYSIWYG'),
(5, 'Mal', 'Haruna Sarkin Aska', 'Technitian', 'Hardware Maintainance', 'TroubleShooting'),
(6, 'joshua Ubah', 'Dr.', 'Visiting', 'everything', 'everything'),
(7, 'Chopa', 'Prof.', '400', 'programmin', 'football'),
(8, 'Sadik Mohammad Suleiman', 'Prof.', 'Lecturer One', 'Programming', 'Hacking'),
(9, 'Ahamad Mohammad Suleiman', 'Prof.', 'Lecturer One', 'Drawing', 'Cars Design'),
(10, 'mubarak', 'Mr.', 'Casual', 'Gaming', 'Girls'),
(11, 'Abubakar Mohammad Suleiman', 'Dr.', 'Assistant Lecturer', 'Programming', 'Games'),
(12, 'Sardauna Mohammad Suleiman', 'Engr.', 'Lecturer I', 'Civil Engineering', 'Engineering in General');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginprojectrepository`
--
ALTER TABLE `loginprojectrepository`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2361;
--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

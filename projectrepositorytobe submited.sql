-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 10:50 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.15

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

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'boy');

-- --------------------------------------------------------

--
-- Table structure for table `loginprojectrepository`
--

DROP TABLE IF EXISTS `loginprojectrepository`;
CREATE TABLE IF NOT EXISTS `loginprojectrepository` (
  `sn` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `project_id` int(5) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `topics` varchar(150) NOT NULL,
  `category` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `session` varchar(15) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `student_id`, `topics`, `category`, `author`, `session`, `date`) VALUES
(12, 7, 'project repository', 'Web base', '', '2017/2018', '2017-03-02'),
(14, 1, 'Implementation of an expert System on herbal medicine', 'Stand alone', '', '2017/2018', '2017-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `proposed_topics`
--

DROP TABLE IF EXISTS `proposed_topics`;
CREATE TABLE IF NOT EXISTS `proposed_topics` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_topic` varchar(150) NOT NULL,
  `supervisor_id` int(11) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `validate` varchar(15) NOT NULL DEFAULT 'waiting',
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposed_topics`
--

INSERT INTO `proposed_topics` (`pro_id`, `p_topic`, `supervisor_id`, `student_id`, `validate`) VALUES
(20, 'project repository with use of Binary search algorithm', 13, '1', 'accepted'),
(21, 'what the fuck', 22, '7', 'accepted'),
(22, 'flash derive scanner', 23, '8', 'accepted'),
(23, 'school management system', 13, '9', 'accepted'),
(24, 'fdf', 13, '7', 'accepted'),
(25, 'aaaaaaaaaaaaaaaaaaa', 13, '9', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `surname` varchar(70) NOT NULL,
  `otherName` varchar(70) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `surname`, `otherName`, `regno`, `gender`, `password`) VALUES
(1, 'Mohammad', 'Abubakar Suleiman', 'U/CS/13/224', 'Male', 'sadik'),
(8, 'Chellumi', 'Adam muhammad', 'fsc/csc/14/0002', 'Male', 'chellumi'),
(9, 'yusuff', 'Abdulsamad', 'U/CS/14/290', 'Male', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

DROP TABLE IF EXISTS `supervisors`;
CREATE TABLE IF NOT EXISTS `supervisors` (
  `supervisor_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `interest` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`supervisor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`supervisor_id`, `name`, `Title`, `level`, `specialization`, `interest`, `password`) VALUES
(13, 'Adam', 'Mal', 'Lecturer I', 'Software Engineering', 'Programming', 'adam'),
(22, 'Ibrahim Bello', 'Dr.', 'Lecturer I', 'Artificial Intelligent', 'Programming', '12345'),
(24, 'sadik', 'Prof.', 'Lecturer I', 'programmin', 'coding', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `s_proposed_topics`
--

DROP TABLE IF EXISTS `s_proposed_topics`;
CREATE TABLE IF NOT EXISTS `s_proposed_topics` (
  `spt_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `std_pro_topics` varchar(70) NOT NULL,
  `validate` varchar(20) NOT NULL,
  PRIMARY KEY (`spt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

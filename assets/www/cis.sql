-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2013 at 03:11 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cis`
--
CREATE DATABASE IF NOT EXISTS `cis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cis`;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `username` varchar(40) NOT NULL,
  `courseName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`username`, `courseName`) VALUES
('teacher1', 'Biology'),
('teacher1', 'Chemistry'),
('teacher1', 'History'),
('student1', 'Biology'),
('student1', 'Chemistry'),
('student1', 'Biology'),
('student1', 'Chemistry'),
('student2', 'Chemistry'),
('student2', 'History'),
('teacher1', 'HCI'),
('student1', 'HCI'),
('teacher1', 'ygygyg'),
('teacher1', ''),
('student1', 'HCI'),
('teacher2', 'Progmatics');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `courseName` varchar(40) NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT 'Untitled.txt',
  `mime` varchar(50) NOT NULL DEFAULT 'text/plain',
  `size` bigint(20) unsigned NOT NULL DEFAULT '0',
  `data` mediumblob NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `studentresponse`
--

CREATE TABLE IF NOT EXISTS `studentresponse` (
  `courseName` varchar(40) NOT NULL,
  `topicName` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `feedback` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `dateAndTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentresponse`
--

INSERT INTO `studentresponse` (`courseName`, `topicName`, `username`, `feedback`, `comment`, `dateAndTime`) VALUES
('Biology', 'RNA', 'student1', 2, 'Enter your comments here.', '2013-11-20 18:41:28'),
('Biology', 'Cell', 'student1', 3, 'Enter your comments here.', '2013-11-20 18:42:51'),
('Biology', 'RNA', 'student1', 3, 'Done!', '2013-11-20 18:43:23'),
('Biology', 'RNA', 'student1', 1, 'Enter your comments here.', '2013-11-20 22:00:56'),
('Biology', 'Cell', 'student1', 3, 'Enter your comments here.', '2013-11-20 22:03:20'),
('Biology', 'Cell', 'student1', 2, 'Enter your comments here.', '2013-11-20 22:04:12'),
('Biology', 'RNA', 'student1', 1, 'Enter your comments here.', '2013-11-20 22:05:20'),
('Biology', 'Cell', 'student1', 3, 'Enter your comments here.', '2013-11-20 22:06:34'),
('Biology', 'RNA', 'student1', 2, 'Enter your comments here.', '2013-11-20 22:09:00'),
('Biology', 'Copper', 'student1', 5, 'Enter your comments here.', '2013-11-20 22:09:32'),
('Biology', 'Cell', 'student1', 1, 'Hello.', '2013-11-21 23:54:56'),
('Biology', 'RNA', 'student1', 3, 'World', '2013-11-21 23:55:17'),
('Biology', 'Cell', 'student1', 4, 'hi', '2013-11-21 23:55:33'),
('Biology', 'Cell', 'student1', 5, 'Terrible', '2013-11-22 00:16:35'),
('Biology', 'Cell', 'student1', 3, 'Try again', '2013-11-22 00:17:09'),
('Biology', 'Cell', 'student1', 1, 'whatever', '2013-11-22 00:20:34'),
('Biology', 'RNA', 'student1', 4, 'Elaborate', '2013-11-22 00:20:54'),
('Biology', 'Cell', 'student1', 5, 'What Did you  mean by RNA?', '2013-12-07 13:01:42'),
('HCI', 'Cooking', 'student1', 5, 'Extremely Whack', '2013-12-09 14:00:15'),
('Biology', 'RNA', 'student1', 2, 'What?', '2013-12-09 14:00:40');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `courseName` varchar(40) NOT NULL,
  `topicName` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`courseName`, `topicName`) VALUES
('Biology', 'Cell Division'),
('Biology', 'RNA'),
('', 'Base pairs'),
('', 'Base pairs'),
('', 'DNA'),
('Chemistry', 'Acid'),
('Chemistry', 'bombs'),
('Biology', 'Copper'),
('HCI', 'Cooking'),
('HCI', 'jdfsjidfs'),
('HCI', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL DEFAULT 'csc546',
  `email` varchar(40) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `cellPhoneProvider` varchar(80) NOT NULL,
  `isInstructor` tinyint(1) NOT NULL DEFAULT '0',
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `telephone`, `cellPhoneProvider`, `isInstructor`, `ID`) VALUES
('teacher1', 'e38ad214943daad1d64c102faec29de4afe9da3d', 'quang.vo31@gmail.com', '7146614832', '@vmobl.com', 1, 1),
('student1', 'e38ad214943daad1d64c102faec29de4afe9da3d', 'quang.vo31@gmail.com', '7146614832', '@vmobl.com', 0, 2),
('student2', '2aa60a8ff7fcd473d321e0146afd9e26df395147', 'student2@email.com', '6263158513', '@att.txt.net', 0, 3),
('instructor11', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'info@zaratemartinez.com', '6263158513', '@att.txt.net', 1, 4),
('teacher2', '2aa60a8ff7fcd473d321e0146afd9e26df395147', 'teacher2@hotmail.com', '6263158513', '@txt.att.net', 1, 15);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

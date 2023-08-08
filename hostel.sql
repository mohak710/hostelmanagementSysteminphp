-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 13, 2019 at 06:12 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `Name` varchar(50) NOT NULL,
  `RollNO` int(11) NOT NULL AUTO_INCREMENT,
  `UseraAme` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`RollNO`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Name`, `RollNO`, `UseraAme`, `Password`) VALUES
('Maitrak', 1, 'maitrak', 'c0e37ccacb9a65dedee588a488bfac85'),
('hi', 2, 'hi@gmail.com', '202cb962ac59075b964b07152d234b70'),
('123', 3, '12323@123123.com', 'e034fb6b66aacc1d48f445ddfb08da98'),
('abc', 5, 'abc@gmail.com', '202cb962ac59075b964b07152d234b70'),
('mai', 6, 'mai@gmail.com', 'mai'),
('123', 7, '123@abc.com', '123'),
('1', 8, '1@1.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

DROP TABLE IF EXISTS `emp`;
CREATE TABLE IF NOT EXISTS `emp` (
  `eno` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `job` varchar(20) NOT NULL,
  `jobb_start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sal` int(11) NOT NULL,
  PRIMARY KEY (`eno`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`eno`, `Name`, `Email`, `contact`, `job`, `jobb_start`, `sal`) VALUES
(1, 'heet', 'heet@gmail.com', 123132, 'lib', '2019-09-27 14:49:53', 12333),
(2, 'heet', 'heet@gmail.com', 123213, 'acb', '2019-09-27 14:50:13', 12333);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

DROP TABLE IF EXISTS `guest`;
CREATE TABLE IF NOT EXISTS `guest` (
  `name` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `Student_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`name`, `contact`, `reason`, `Student_id`) VALUES
('maitrak', 1, 'root', 1),
('maitrak', 1, 'root', 2),
('maitrak', 1, 'root', 5),
('maitrak', 1, 'root', 2),
('maitrak', 1, 'root', 1),
('maitrak', 1, 'root', 1),
('maitrak', 1, 'root', 1);

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

DROP TABLE IF EXISTS `meal`;
CREATE TABLE IF NOT EXISTS `meal` (
  `Mon_lunch` varchar(70) NOT NULL,
  `Mon_breakfast` varchar(70) NOT NULL,
  `Mon_dinner` varchar(70) NOT NULL,
  `Tues_lunch` varchar(50) NOT NULL,
  `Tues_breakfast` varchar(50) NOT NULL,
  `Tues_dinner` varchar(50) NOT NULL,
  `Wed_lunch` varchar(50) NOT NULL,
  `Wed_breakfast` varchar(50) NOT NULL,
  `Wed_dinner` varchar(50) DEFAULT NULL,
  `Thu_lunch` varchar(50) DEFAULT NULL,
  `Thu_breakfast` varchar(50) DEFAULT NULL,
  `Thu_dinner` varchar(50) DEFAULT NULL,
  `Fri_lunch` varchar(50) DEFAULT NULL,
  `Fri_breakfast` varchar(50) DEFAULT NULL,
  `Fri_dinner` varchar(50) DEFAULT NULL,
  `sat_Lunch` varchar(50) DEFAULT NULL,
  `sat_breakfast` varchar(50) DEFAULT NULL,
  `sat_dinner` varchar(50) DEFAULT NULL,
  `sun_lunch` varchar(50) DEFAULT NULL,
  `sun_breakfast` varchar(50) DEFAULT NULL,
  `sun_dinner` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`Mon_lunch`, `Mon_breakfast`, `Mon_dinner`, `Tues_lunch`, `Tues_breakfast`, `Tues_dinner`, `Wed_lunch`, `Wed_breakfast`, `Wed_dinner`, `Thu_lunch`, `Thu_breakfast`, `Thu_dinner`, `Fri_lunch`, `Fri_breakfast`, `Fri_dinner`, `sat_Lunch`, `sat_breakfast`, `sat_dinner`, `sun_lunch`, `sun_breakfast`, `sun_dinner`) VALUES
('a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `notice bourd`
--

DROP TABLE IF EXISTS `notice bourd`;
CREATE TABLE IF NOT EXISTS `notice bourd` (
  `info` varchar(90) NOT NULL,
  `heading` varchar(90) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice bourd`
--

INSERT INTO `notice bourd` (`info`, `heading`) VALUES
('maitrak nirmal', 'maitrak');

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

DROP TABLE IF EXISTS `stud`;
CREATE TABLE IF NOT EXISTS `stud` (
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`name`) VALUES
('1');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `StudentId` int(11) NOT NULL AUTO_INCREMENT,
  `RoomNO` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Mname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `ContactNo` int(11) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `fee` int(11) NOT NULL,
  `Mark` int(4) NOT NULL,
  `dob` date DEFAULT NULL,
  `photo` varchar(90) NOT NULL,
  `photo_name` varchar(30) NOT NULL,
  `gym` int(11) NOT NULL,
  `library` int(11) NOT NULL,
  PRIMARY KEY (`StudentId`,`RoomNO`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentId`, `RoomNO`, `Fname`, `Mname`, `Lname`, `ContactNo`, `Address`, `Email`, `UserName`, `Password`, `fee`, `Mark`, `dob`, `photo`, `photo_name`, `gym`, `library`) VALUES
(1, 101, 'maitrak', 'k', 'nirmal', 12345, 'abc', 'mak@gmail.com', 'maitrak', 'abcA@123', 12690, 99, '2019-01-01', '', '', 1, 1),
(2, 102, 'mohak', 'j', 'patel', 987897, '2', 'mohak@gmail.com', '2', '2', 11500, 12, '2018-01-01', '', '', 1, 0),
(3, 103, 'heet', 'p', 'shah', 3545656, '3', 'heet@gmail.com', '3', '3', 10000, 33, '2019-01-01', '', '', 0, 0),
(4, 104, 'abc', 'd', 'efg', 689685, 'abc', 'a@gmail.com', '5', '5', 10000, 10, '2019-01-01', 'C:\\wamp\\www\\hostel\\Image', 'Untitled.jpg', 0, 0),
(5, 106, 'xyz', 'xyz', 'xyz', 7897, '9', 'zy@gmail.com', '9', '9', 10000, 100, '2019-02-01', '', 'DSC_0005.JPG', 0, 0),
(7, 106, 'maitrak', 'k', 'nirmal', 12345, 'KUMBHARVADO, AT-KATHLA, DIST-KHEDA', 'varmaparth123@gmail.com', '7', '7', 13000, 12, '2017-01-01', 'C:wamp	mpphpBA6F.tmp', 'DSCN2868.JPG', 1, 1),
(8, 108, 'asd', 'asd', 'asd', 215, '321', 'sd@asd', '1@1', '1', 10000, 90, '2019-09-26', '', '', 0, 0),
(9, 109, 'mohak', 'g', 'patel', 1234567890, 'KUMBHARVADO, AT-KATHLA, DIST-KHEDA', 'varmaparth123@gmail.com', 'mohak', 'abcABC@123', 10000, 10, '2019-01-31', 'C:wamp	mpphp4E25.tmp', 'DSCN3322.JPG', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

DROP TABLE IF EXISTS `temp`;
CREATE TABLE IF NOT EXISTS `temp` (
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`name`) VALUES
(''),
(''),
('ok'),
('maitrak'),
('maitrak'),
('1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

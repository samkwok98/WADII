-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 13, 2022 at 06:46 AM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE agtt;
USE agtt;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agtt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int NOT NULL AUTO_INCREMENT,
  `adminname` varchar(25) NOT NULL,
  `loginid` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  PRIMARY KEY (`adminid`),
  UNIQUE KEY `adminname` (`adminname`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `loginid`, `password`, `status`, `usertype`) VALUES
(1, 'admin', 'admin', 'admin1234', 'Active', '');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `appointmentid` int NOT NULL AUTO_INCREMENT,
  `appointmenttype` varchar(25) NOT NULL,
  `patientid` int NOT NULL,
  `departmentid` int NOT NULL,
  `appointmentdate` date NOT NULL,
  `appointmenttime` time NOT NULL,
  `doctorid` int NOT NULL,
  `status` varchar(10) NOT NULL,
  `app_reason` text NOT NULL,
  PRIMARY KEY (`appointmentid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentid`, `appointmenttype`, `patientid`, `departmentid`, `appointmentdate`, `appointmenttime`, `doctorid`, `status`, `app_reason`) VALUES
(1, 'ONLINE', 1, 1, '2022-11-11', '01:26:00', 1, 'Approved', 'Headache'),
(2, 'ONLINE', 3, 1, '2022-11-18', '03:10:00', 1, 'Pending', 'Stomach'),
(3, 'ONLINE', 4, 1, '2022-11-18', '03:10:00', 1, 'Approved', 'Itchy hand'),
(4, 'ONLINE', 5, 1, '2022-11-16', '20:46:00', 1, 'Approved', 'Menstral Pain');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `departmentid` int NOT NULL AUTO_INCREMENT,
  `departmentname` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`departmentid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentid`, `departmentname`, `description`, `status`) VALUES
(1, 'Traditional Chinese Medicine', 'Medicine', 'Active'),
(2, 'Acupuncture', 'Only Roxy Quek in this department', 'Active'),
(3, 'Moxibustion', 'ANNA HUANG Moxibustion Specialists', 'Active'),
(4, 'Reflexology', 'Our latest department', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `doctorid` int NOT NULL AUTO_INCREMENT,
  `doctorname` varchar(50) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `departmentid` int NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`doctorid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctorid`, `doctorname`, `mobileno`, `departmentid`, `status`) VALUES
(1, 'SiaPeh', '98456456', 1, 'Active'),
(2, 'Roxy', '94561345', 2, 'Active'),
(3, 'Anna', '97846413', 3, 'Active'),
(4, 'JiePeng', '86454142', 4, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `patientid` int NOT NULL AUTO_INCREMENT,
  `patientname` varchar(50) NOT NULL,
  `admissiondate` date NOT NULL,
  `admissiontime` time NOT NULL,
  `address` varchar(250) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `city` varchar(25) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`patientid`),
  KEY `loginid` (`loginid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientid`, `patientname`, `admissiondate`, `admissiontime`, `address`, `mobileno`, `city`, `pincode`, `loginid`, `password`, `bloodgroup`, `gender`, `dob`, `status`) VALUES
(1, 'sam', '2022-11-06', '05:26:31', 'Istana', '98123323', 'singapore', '', 'sam', '12345678', '', 'Male', '1999-09-12', 'Active'),
(2, 'Aidan', '2022-11-06', '05:27:41', '46 Kew Crescent, 466222', '98316658', 'singapore', '', 'sam', '12345678', '', 'Male', '2000-11-09', 'Active'),
(3, 'Prof Shar', '2022-11-12', '07:19:09', 'SMU lecture room', '98461315', 'singapore', '', 'john', '12345678', '', 'Male', '1986-05-12', 'Active'),
(4, 'Lilly Kong', '2022-11-12', '12:11:01', 'SMU principle office', '98416121', 'singapore', '', 'john', '12345678', '', 'Male', '1956-05-12', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
 	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(200) NOT NULL,
	`desc` text NOT NULL,
	`price` decimal(7,2) NOT NULL,
	`currency` text NOT NULL,
	`quantity` int(11) NOT NULL,
	`img` text NOT NULL,
	`date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `currency`, `quantity`, `img`, `date_added`) VALUES
(1, 'Bird Nest', '<p>Ready-to-drink and can be taken chilled or warmed.</p>\r\n<h3>Suitable for:</h3>\r\n<ul>\r\n<li>All ages</li>\r\n<li>Beauty Care</li>\r\n<li>Pregnant women or new mothers during post-natal periods</li>\r\n<li>Recovering Patients</li>\r\n</ul>', '50.00', 'SGD', 10, 'itemID1.jpg', '2022-11-06 16:00:00'),
(2, 'Ginseng', '<p>Late nights and stress can burn away the Fluid (Yin) in the body, leading to a drained and tired state.</p>\r\n<h3>Benefits:</h3>\r\n<ul>\r\n<li>Boosts Qi</li>\r\n<li>Nourish Yin</li>\r\n<li>Hydrates body</li>\r\n<li>Clears Heat</li>\r\n</ul>', '150.00', 'SGD', 10, 'itemID2.jpg', '2022-11-06 16:00:00'),
(3, 'Royal Jelly', '<p>Raw and pure honey, from the best of bee farms.</p>\r\n<h3>Benefits:</h3>\r\n<ul>\r\n<li>Beauty Support</li>\r\n<li>General Wellness</li>\r\n</ul>', '70.00','SGD', 10, 'itemID3.jpg', '2022-11-06 16:00:00'),
(4,'AG T&T Supplemental Powder' ,'<p>Our custom made, signature supplmental powder, made with the freshest of ingredients from our secret farm</p>\r\n<h3>Benefits:</h3>\r\n<ul>\r\n<li>Beauty Support</li>\r\n<li>Energizing Effect</li>\r\n</ul>', '300.00', 'SGD', 10, 'itemID4.jpg', '2022-11-06 16:00:00'),
(5,'Snow Lotus Seeds 250g Pack' ,'<p>Snow lotus is a flowering plant in the family of Asteraceae. It is grown at mountain peaks with very cold temperatures in the polar Asia, Europe and North America, its largest habitat diversity at the peak of the Himalayas.</p>\r\n<h3>Benefits:</h3>\r\n<ul>\r\n<li>normalize blood pressure</li>\r\n<li>slow down the formation of fats in the body</li>\r\n<li>Eliminate gall bladder stones</li>\r\n<li>To prevent viral disease</li>\r\n<li>Prevent and cure impotence</li>\r\n<li>Increase the stimulant for kidney and bladder</li>\r\n<li>Reduce cholesterol for a healthier heart</li>\r\n<li>Preventing adverse effects from consumption of anti biotic</li>\r\n<li>Aids digestive health</li>\r\n<li>Helps to heal wounds</li>\r\n</ul>','30.00', 'SGD', 10, 'itemID5.jpg', '2022-11-11 00:08:00'),
(6,'Peach Gum Jelly' ,'<p>Our custom made, signature supplmental powder, made with the freshest of ingredients from our secret farm</p>\r\n<h3>Benefits:</h3>\r\n<ul>\r\n<li>Detox intestine</li>\r\n<li>Promote bowel movement</li>\r\n<li>Improve skin texture</li>\r\n<li>Increase moisture to the skin</li>\r\n<li>Lighten pigmentation</li>\r\n<li>Improve acnes or pimples skin</li>\r\n</ul>', '10.00', 'SGD', 10, 'itemID6.jpg', '2022-11-11 00:08:00'),
(7,'Herba Cistanche' ,'<p>The pilp stem with scales of the perennial parasitic plants Cistanche deserticola Y. C. Ma of family Orobanchaceae. Sweet, salty, warm; kidney and large intestine meridians entered.</p>\r\n<h3>Benefits:</h3>\r\n<ul>\r\n<li>Tonify kidney yang</li>\r\n</li>supplement essence and blood</li>\r\n</li>moisten intestines to smooth stool.</li>\r\n</ul>', '50.00', 'SGD', 10, 'itemID7.jpg', '2022-11-11 10:00:00'),
(8,'Pinellia Tuber' ,'<p>White, firm, powder-like, old. Light smell, acrid and spicy, tongue-numbed taste stimulating the throat.Processed with ginger juice and alum.</p>\r\n<h3>Benefits:</h3>\r\n<ul>\r\n<li>Dry dampness and resolve phlegm</li>\r\n<li>check adverse rise of qi and stop vomiting</li>\r\n<li>relieve stuffiness and dissipate nodulation</li>\r\n<li>resolve swelling</li>\r\n<li>alleviate pain externally.</li>\r\n</ul>', '35.00', 'SGD', 10, 'itemID8.jpg', '2022-11-11 10:00:00');
-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int NOT NULL AUTO_INCREMENT,
  `loginname` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `patientname` varchar(50) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `createddateandtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `loginname`, `password`, `patientname`, `mobileno`, `email`, `createddateandtime`) VALUES
(1, 'user', 'admin', 'Jingxiang', '', '', '2022-10-30 11:21:45');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

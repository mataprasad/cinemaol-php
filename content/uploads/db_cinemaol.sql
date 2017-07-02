-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2017 at 12:20 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cinemaol`
--

-- --------------------------------------------------------

--
-- Table structure for table `hallinfo`
--

CREATE TABLE `hallinfo` (
  `Hall_Id` double NOT NULL,
  `Hall_No` varchar(50) DEFAULT NULL,
  `Hall_Capacity` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hallinfo`
--

INSERT INTO `hallinfo` (`Hall_Id`, `Hall_No`, `Hall_Capacity`) VALUES
(1, 'HE01', 90),
(2, 'BH01', 90),
(3, 'HH01', 90),
(4, 'OH01', 90),
(5, 'OE01', 90);

-- --------------------------------------------------------

--
-- Table structure for table `movieindustryinfo`
--

CREATE TABLE `movieindustryinfo` (
  `Industry_id` double NOT NULL,
  `Industry_Name` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movieindustryinfo`
--

INSERT INTO `movieindustryinfo` (`Industry_id`, `Industry_Name`) VALUES
(1, 'HOLLYWOOD'),
(2, 'BOLLYWOOD');

-- --------------------------------------------------------

--
-- Table structure for table `movieinfo`
--

CREATE TABLE `movieinfo` (
  `Movie_Id` double NOT NULL,
  `Movie_ImageURL` varchar(250) DEFAULT NULL,
  `Movie_Status` double DEFAULT NULL,
  `Movie_Title` varchar(50) DEFAULT NULL,
  `Movie_ReleaseDate` varchar(15) DEFAULT NULL,
  `Movie_Director` varchar(50) DEFAULT NULL,
  `Movie_Casts` varchar(500) DEFAULT NULL,
  `Movie_Language` varchar(50) DEFAULT NULL,
  `Movie_Industry` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movieinfo`
--

INSERT INTO `movieinfo` (`Movie_Id`, `Movie_ImageURL`, `Movie_Status`, `Movie_Title`, `Movie_ReleaseDate`, `Movie_Director`, `Movie_Casts`, `Movie_Language`, `Movie_Industry`) VALUES
(8, '1.jpg', 3, 'KAHAANI', '09/03/2012', 'SUJOY GHOSH', 'VIDYA BALAN,  PARAMBRATA, CHAT', 'HINDI', 'BOLLYWOOD'),
(9, '2.jpg', 3, 'PAAN SINGH TOMAR', '02/03/2012', 'TIGMANSHU DHULIA', 'IRRFAN,MAHI GILL,VIPIN SHARMA', 'HINDI', 'BOLLYWOOD'),
(10, '3.png', 3, 'HOUSEFULL 2', '05/04/2012', 'SAJID KHAN', 'AKSHAY KUMAR,ASIN,  JOHN ABRAH', 'HINDI', 'BOLLYWOOD'),
(11, '11.jpg', 3, 'DARK SHADOWS', '11/05/2012', 'TIM BURTON', 'JOHNNY DEPP, MICHELLE PFEIFFER', 'ENGLISH', 'HOLLYWOOD'),
(12, '12.jpg', 3, 'SNOW WHITE AND THE HUNTSMAN ', '08/06/2012', 'RUPERT SANDERS', 'KRISTEN STEWART, CHRIS HEMSWOR', 'ENGLISH', 'HOLLYWOOD'),
(13, '13.jpg', 3, 'LUTERA', '01/01/2012', 'MAI', 'DIDIYA', 'TAMIL', 'BOLLYWOOD'),
(14, '14.jpg', 3, 'Demo Movie45', '05/09/2013', 'Mata Prasad', 'Mata Prasad,  Chauhan Mata Pra', 'ENGLISH', 'HOLLYWOOD'),
(15, '15.jpg', 3, 'Demo00', '30/09/2013', 'aa', 'aaa', 'HINDI', 'BOLLYWOOD'),
(16, '16.jpg', 3, 'mm', '30/09/2013', 'mm', 'mm', 'ENGLISH', 'BOLLYWOOD'),
(17, '17.jpg', 3, 'mm', '30/09/2013', 'aa', 'ss', 'ENGLISH', 'BOLLYWOOD'),
(18, '18.jpg', 3, 'DARK SADOW', '30/10/2013', 'Mata Prasad Chauhan', 'Vinay', 'ENGLISH', 'HOLLYWOOD'),
(19, '19.jpg', 3, 'SHNOW WHITES AND HUNDS MAN', '10/11/2013', 'Mata Prasad Chauhan', 'Vinay', 'HINDI', 'BOLLYWOOD'),
(20, '20.jpg', 3, 'VINAY', '31/10/2013', 'Mata Prasad Chauhan', 'VINAY', 'ENGLISH', 'HOLLYWOOD'),
(21, '21.png', 3, 'Jyoti', '30/11/2013', 'vinay', 'vinay', 'HINDI', 'BOLLYWOOD'),
(22, '22.jpg', 3, 'UPCOMMING 001', '30/11/2013', 'ME', 'YOU', 'ENGLISH', 'HOLLYWOOD'),
(23, '23.jpg', 1, 'New Running Movie', '15/05/2014', 'MATA', 'MATA', 'HINDI', 'BOLLYWOOD'),
(24, '24.jpg', 3, 'New Upcomming Movie', '23/05/2014', 'MATA', 'MATA', 'ENGLISH', 'HOLLYWOOD'),
(35, '35.jpg', 3, 'Ek Villen', '19/06/2014', 'MATA', 'MATA', 'HINDI', 'BOLLYWOOD'),
(36, '36.jpg', 3, 'Ek Villen', '19/06/2014', 'MATA', 'AT', 'HINDI', 'BOLLYWOOD'),
(37, '37.jpg', 1, 'AIR LIFT', '10/03/2016', 'MATA', 'Tekesh  Monu  heroin', 'HINDI', 'BOLLYWOOD'),
(38, '38.jpg', 1, 'Udta Punjab', '01/05/2016', 'Abhishek Chaubey', 'Shahid Kapoor  Kareena Kapoor ', 'HINDI', 'BOLLYWOOD');

-- --------------------------------------------------------

--
-- Table structure for table `movielanguageinfo`
--

CREATE TABLE `movielanguageinfo` (
  `Language_Id` double NOT NULL,
  `Language_Name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movielanguageinfo`
--

INSERT INTO `movielanguageinfo` (`Language_Id`, `Language_Name`) VALUES
(1, 'HINDI'),
(2, 'ENGLISH'),
(3, 'TAMIL');

-- --------------------------------------------------------

--
-- Table structure for table `moviestatusinfo`
--

CREATE TABLE `moviestatusinfo` (
  `MovieStatus_Id` double NOT NULL,
  `MovieStatus_Value` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moviestatusinfo`
--

INSERT INTO `moviestatusinfo` (`MovieStatus_Id`, `MovieStatus_Value`) VALUES
(1, 'RUNNING'),
(2, 'UPCOMMING'),
(3, 'CLOSED');

-- --------------------------------------------------------

--
-- Table structure for table `sheattype`
--

CREATE TABLE `sheattype` (
  `SheatType_Id` double NOT NULL,
  `SheatType_Value` varchar(50) DEFAULT NULL,
  `SheatType_Cost` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sheattype`
--

INSERT INTO `sheattype` (`SheatType_Id`, `SheatType_Value`, `SheatType_Cost`) VALUES
(1, 'SILVER', 100),
(2, 'SILVER', 175),
(3, 'PLETINUM', 225);

-- --------------------------------------------------------

--
-- Table structure for table `showinfo`
--

CREATE TABLE `showinfo` (
  `Show_Id` double NOT NULL,
  `Show_Date` datetime DEFAULT NULL,
  `Show_StartTime` varchar(50) DEFAULT NULL,
  `Movie_Name` varchar(50) DEFAULT NULL,
  `Hall_No` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showinfo`
--

INSERT INTO `showinfo` (`Show_Id`, `Show_Date`, `Show_StartTime`, `Movie_Name`, `Hall_No`) VALUES
(18, '2012-04-15 00:00:00', '11:00 AM', 'KAHAANI', 2),
(19, '2012-04-15 00:00:00', '02:30 PM', 'KAHAANI', 2),
(20, '2012-04-15 00:00:00', '06:00 PM', 'KAHAANI', 2),
(21, '2012-04-15 00:00:00', '09:30 PM', 'KAHAANI', 2),
(22, '2012-04-15 00:00:00', '11:00 AM', 'HOUSEFULL 2', 4),
(23, '2012-04-15 00:00:00', '02:30 PM', 'HOUSEFULL 2', 4),
(24, '2012-04-15 00:00:00', '06:00 PM', 'HOUSEFULL 2', 4),
(25, '2012-04-15 00:00:00', '09:30 PM', 'HOUSEFULL 2', 4),
(26, '2012-04-14 00:00:00', '11:00 AM', 'HOUSEFULL 2', 4),
(27, '2012-04-14 00:00:00', '02:30 PM', 'HOUSEFULL 2', 4),
(28, '2012-04-14 00:00:00', '06:00 PM', 'HOUSEFULL 2', 4),
(29, '2012-04-14 00:00:00', '09:30 PM', 'HOUSEFULL 2', 4),
(30, '2012-04-13 00:00:00', '09:30 PM', 'PAAN SINGH TOMAR', 1),
(31, '2012-04-17 00:00:00', '11:00 AM', 'HOUSEFULL 2', 1),
(32, '2012-05-10 00:00:00', '11:00 AM', 'HOUSEFULL 2', 2),
(33, '2012-05-10 00:00:00', '11:00 AM', 'DARK SHADOWS', 1),
(34, '2012-05-10 00:00:00', '02:30 PM', 'DARK SHADOWS', 1),
(35, '2013-08-28 00:00:00', '11:00 AM', 'LUTERA', 1),
(36, '2013-09-04 00:00:00', '11:00 AM', 'KAHAANI', 1),
(37, '2013-09-05 00:00:00', '11:00 AM', 'HOUSEFULL 2', 1),
(38, '2013-09-17 00:00:00', '11:00 AM', 'KAHAANI', 1),
(39, '2013-09-17 00:00:00', '02:30 PM', 'KAHAANI', 1),
(40, '2013-10-09 00:00:00', '06:00 PM', 'LUTERA', 5),
(42, '2013-09-30 00:00:00', '09:30 PM', 'HOUSEFULL 2', 2),
(44, '2017-09-23 00:00:00', '11:00 AM', 'KAHAANI', 1),
(45, '2013-10-14 00:00:00', '11:00 AM', 'KAHAANI', 1),
(46, '2013-10-29 00:00:00', '02:30 PM', 'HOUSEFULL 2', 3),
(47, '2013-10-31 00:00:00', '09:30 PM', 'LUTERA', 2),
(48, '2013-10-30 00:00:00', '02:30 PM', 'LUTERA', 5),
(49, '2013-10-31 00:00:00', '02:30 PM', 'KAHAANI', 3),
(50, '2013-11-15 00:00:00', '11:00 AM', 'KAHAANI', 1),
(51, '2013-12-31 00:00:00', '11:00 AM', 'KAHAANI', 1),
(52, '2013-12-30 00:00:00', '09:30 PM', 'HOUSEFULL 2', 1),
(53, '2014-01-31 00:00:00', '09:30 PM', 'HOUSEFULL 2', 1),
(54, '2014-02-28 00:00:00', '11:00 AM', 'HOUSEFULL 2', 1),
(55, '2014-03-14 00:00:00', '11:00 AM', 'KAHAANI', 1),
(56, '2014-03-29 00:00:00', '11:00 AM', 'KAHAANI', 1),
(57, '2014-04-30 00:00:00', '11:00 AM', 'HOUSEFULL 2', 1),
(58, '2014-04-30 00:00:00', '02:30 PM', 'UPCOMMING 001', 2),
(59, '2014-05-30 00:00:00', '11:00 AM', 'HOUSEFULL 2', 1),
(60, '2014-05-21 00:00:00', '02:30 PM', 'UPCOMMING 001', 1),
(61, '2014-06-26 00:00:00', '02:30 PM', 'UPCOMMING 001', 2),
(62, '2014-06-30 00:00:00', '09:30 PM', 'New Running Movie', 3),
(63, '2014-06-17 00:00:00', '11:00 AM', 'HOUSEFULL 2', 1),
(64, '2014-08-20 00:00:00', '11:00 AM', 'Ek Villen', 1),
(65, '2014-09-25 00:00:00', '02:30 PM', 'New Running Movie', 4),
(66, '2014-09-18 00:00:00', '11:00 AM', 'New Running Movie', 1),
(67, '2015-01-30 00:00:00', '11:00 AM', 'HOUSEFULL 2', 1),
(68, '2015-02-28 00:00:00', '11:00 AM', 'HOUSEFULL 2', 1),
(69, '2015-04-30 00:00:00', '11:00 AM', 'HOUSEFULL 2', 1),
(70, '2015-07-31 00:00:00', '11:00 AM', 'HOUSEFULL 2', 1),
(71, '2015-08-05 00:00:00', '06:00 PM', 'Ek Villen', 2),
(72, '2016-03-16 00:00:00', '11:00 AM', 'HOUSEFULL 2', 1),
(73, '2016-06-22 00:00:00', '11:00 AM', 'AIR LIFT', 1),
(10073, '2017-04-12 11:26:00', '02:30 PM', 'New Running Movie', 1),
(10074, '2017-04-12 11:26:00', '02:30 PM', 'Ek Villen', 3),
(20073, '2017-04-12 11:26:00', '11:00 AM', 'HOUSEFULL 2', 1),
(30073, '2017-04-12 11:26:00', '11:00 AM', 'HOUSEFULL 2', 1),
(30074, '2017-03-31 00:00:00', '06:00 PM', 'AIR LIFT', 4),
(30075, '2017-03-31 00:00:00', '06:00 PM', 'Udta Punjab', 4),
(30076, '2017-04-28 00:00:00', '02:30 PM', 'New Running Movie', 5),
(30077, '2017-03-18 00:00:00', '02:30 PM', 'AIR LIFT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stateinfo`
--

CREATE TABLE `stateinfo` (
  `State_Id` double NOT NULL,
  `State_Name` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stateinfo`
--

INSERT INTO `stateinfo` (`State_Id`, `State_Name`) VALUES
(1, 'Andhra Pradesh'),
(2, 'Arunachal Pradesh'),
(3, 'Assam'),
(4, 'Bihar'),
(5, 'Chhattisgarh'),
(6, 'Goa'),
(7, 'Gujarat'),
(8, 'Haryana'),
(9, 'Himachal Pradesh'),
(10, 'Jammu and Kashmir'),
(11, 'Jharkhand'),
(12, 'Karnataka'),
(13, 'Kerala'),
(14, 'Madhya Pradesh'),
(15, 'Maharashtra'),
(16, 'Manipur'),
(17, 'Meghalaya'),
(18, 'Mizoram'),
(19, 'Nagaland'),
(20, 'Orissa'),
(21, 'Punjab'),
(22, 'Rajastha'),
(23, 'Sikkim'),
(24, 'Tamil Nadu'),
(25, 'Tripura'),
(26, 'Uttar Pradesh'),
(27, 'Uttarakhand'),
(28, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `ticketdetail`
--

CREATE TABLE `ticketdetail` (
  `Td_Id` double NOT NULL,
  `Ticket_id` double DEFAULT NULL,
  `Sheat_No` varchar(50) DEFAULT NULL,
  `Sheat_Cost` decimal(5,0) DEFAULT NULL,
  `Show_Id` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticketdetail`
--

INSERT INTO `ticketdetail` (`Td_Id`, `Ticket_id`, `Sheat_No`, `Sheat_Cost`, `Show_Id`) VALUES
(13, 13, 'E5', '175', 26),
(14, 13, 'E6', '175', 26),
(15, 13, 'E7', '175', 26),
(16, 14, 'H7', '225', 22),
(17, 14, 'H6', '225', 22),
(18, 14, 'H5', '225', 22),
(19, 14, 'H9', '225', 22),
(20, 14, 'H8', '225', 22),
(21, 15, 'A6', '100', 25),
(22, 15, 'A7', '100', 25),
(23, 15, 'A5', '100', 25),
(24, 16, 'A6', '100', 18),
(25, 16, 'A5', '100', 18),
(26, 16, 'A9', '100', 18),
(27, 16, 'A8', '100', 18),
(28, 16, 'A7', '100', 18),
(29, 17, 'D5', '175', 20),
(30, 17, 'D6', '175', 20),
(31, 17, 'G5', '225', 20),
(32, 17, 'G6', '225', 20),
(33, 17, 'A5', '100', 20),
(34, 17, 'A6', '100', 20),
(35, 18, 'A6', '100', 30),
(36, 18, 'A7', '100', 30),
(37, 18, 'A5', '100', 30),
(38, 19, 'D1', '175', 20),
(39, 19, 'D2', '175', 20),
(40, 19, 'D3', '175', 20),
(41, 19, 'D0', '175', 20),
(42, 19, 'D4', '175', 20),
(43, 20, 'I7', '225', 30),
(44, 20, 'I6', '225', 30),
(45, 20, 'I5', '225', 30),
(46, 20, 'I9', '225', 30),
(47, 20, 'I8', '225', 30),
(48, 21, 'B6', '100', 19),
(49, 21, 'B5', '100', 19),
(50, 22, 'D1', '175', 30),
(51, 22, 'D0', '175', 30),
(52, 23, 'D5', '175', 21),
(53, 24, 'A7', '100', 31),
(54, 24, 'B7', '100', 31),
(55, 24, 'B6', '100', 31),
(56, 24, 'B5', '100', 31),
(57, 24, 'A5', '100', 31),
(58, 24, 'A6', '100', 31),
(59, 25, 'B4', '100', 31),
(60, 26, 'G5', '225', 31),
(61, 27, 'D5', '175', 31),
(62, 27, 'D6', '175', 31),
(63, 27, 'F5', '175', 31),
(64, 27, 'F6', '175', 31),
(65, 27, 'E5', '175', 31),
(66, 27, 'F7', '175', 31),
(67, 28, 'H5', '225', 32),
(68, 28, 'G5', '225', 32),
(69, 29, 'G3', '225', 31),
(70, 30, 'B8', '100', 32),
(71, 30, 'C8', '100', 32),
(72, 31, 'G7', '225', 32),
(73, 31, 'A7', '100', 32),
(74, 31, 'D7', '175', 32),
(75, 32, 'D5', '175', 32),
(76, 33, 'D4', '175', 34),
(77, 33, 'E4', '175', 34),
(78, 34, 'A3', '100', 32),
(79, 35, 'C7', '100', 33),
(80, 36, 'D4', '175', 32),
(81, 37, 'B9', '100', 40),
(82, 37, 'C9', '100', 40),
(83, 37, 'D9', '175', 40),
(84, 37, 'E9', '175', 40),
(85, 37, 'F9', '175', 40),
(86, 37, 'A5', '100', 40),
(87, 38, 'A5', '100', 39),
(88, 39, 'A6', '100', 39),
(89, 40, 'A8', '100', 39),
(90, 40, 'D8', '175', 39),
(91, 40, 'G8', '225', 39),
(92, 41, 'D1', '175', 39),
(93, 41, 'E1', '175', 39),
(94, 42, 'A2', '100', 39),
(95, 42, 'B2', '100', 39),
(96, 43, 'A6', '100', 40),
(97, 44, 'A6', '100', 40),
(98, 45, 'A6', '100', 40),
(99, 46, 'A6', '100', 40),
(100, 47, 'B3', '100', 40),
(101, 48, 'E2', '175', 40),
(102, 49, 'E5', '175', 39),
(103, 50, 'D5', '175', 39),
(104, 51, 'B7', '100', 38),
(105, 52, 'I8', '225', 40),
(106, 53, 'E7', '175', 40),
(107, 54, 'A5', '100', 42),
(108, 55, 'B5', '100', 40),
(109, 56, 'A1', '100', 46),
(110, 56, 'B1', '100', 46),
(111, 56, 'C1', '100', 46),
(112, 56, 'D1', '175', 46),
(113, 56, 'E1', '175', 46),
(114, 56, 'E2', '175', 46),
(115, 57, 'D5', '175', 46),
(116, 57, 'E5', '175', 46),
(117, 57, 'F5', '175', 46),
(118, 57, 'C2', '100', 46),
(119, 58, 'A7', '100', 46),
(120, 59, 'B5', '100', 46),
(121, 60, 'A5', '100', 47),
(122, 60, 'B5', '100', 47),
(123, 61, 'H5', '225', 46),
(124, 61, 'G5', '225', 46),
(125, 62, 'C5', '100', 46),
(126, 62, 'I5', '225', 46),
(127, 62, 'A5', '100', 46),
(128, 63, 'E3', '175', 46),
(129, 63, 'E4', '175', 46),
(130, 63, 'E6', '175', 46),
(131, 63, 'E7', '175', 46),
(132, 63, 'E8', '175', 46),
(133, 63, 'E0', '175', 46),
(134, 64, 'E9', '175', 46),
(135, 65, 'E4', '175', 48),
(136, 65, 'E1', '175', 48),
(137, 65, 'E2', '175', 48),
(138, 65, 'E3', '175', 48),
(139, 65, 'E0', '175', 48),
(140, 66, 'C5', '100', 50),
(141, 66, 'C6', '100', 50),
(142, 66, 'A6', '100', 50),
(143, 66, 'B6', '100', 50),
(144, 66, 'A5', '100', 50),
(145, 66, 'B5', '100', 50),
(146, 67, 'C4', '100', 53),
(147, 67, 'A4', '100', 53),
(148, 67, 'B4', '100', 53),
(149, 67, 'A5', '100', 53),
(150, 67, 'B5', '100', 53),
(151, 68, 'C5', '100', 54),
(152, 68, 'D5', '175', 54),
(153, 68, 'A6', '100', 54),
(154, 68, 'A4', '100', 54),
(155, 68, 'A5', '100', 54),
(156, 68, 'B5', '100', 54),
(157, 69, 'A7', '100', 56),
(158, 69, 'B7', '100', 56),
(159, 69, 'A8', '100', 56),
(160, 69, 'A9', '100', 56),
(161, 69, 'B9', '100', 56),
(162, 69, 'B8', '100', 56),
(163, 70, 'D5', '175', 56),
(164, 70, 'E5', '175', 56),
(165, 70, 'D6', '175', 56),
(166, 70, 'E6', '175', 56),
(167, 71, 'A9', '100', 56),
(168, 72, 'A3', '100', 59),
(169, 73, 'H5', '225', 63),
(170, 73, 'A4', '100', 63),
(171, 73, 'E7', '175', 63),
(172, 74, 'I5', '225', 63),
(173, 75, 'B2', '100', 64),
(174, 75, 'A2', '100', 64),
(175, 75, 'A3', '100', 64),
(176, 75, 'C2', '100', 64),
(177, 75, 'C3', '100', 64),
(178, 75, 'D3', '175', 64),
(179, 76, 'A1', '100', 65),
(180, 76, 'A2', '100', 65),
(181, 77, 'D4', '175', 67),
(182, 77, 'D5', '175', 67),
(183, 77, 'E4', '175', 67),
(184, 77, 'A4', '100', 67),
(185, 77, 'B4', '100', 67),
(186, 77, 'C4', '100', 67),
(187, 78, 'C5', '100', 68),
(188, 78, 'D5', '175', 68),
(189, 78, 'E5', '175', 68),
(190, 78, 'F5', '175', 68),
(191, 78, 'A5', '100', 68),
(192, 78, 'B5', '100', 68),
(193, 79, 'B0', '100', 69),
(194, 79, 'B1', '100', 69),
(195, 79, 'A0', '100', 69),
(196, 79, 'A1', '100', 69),
(197, 79, 'C0', '100', 69),
(198, 79, 'C1', '100', 69),
(199, 80, 'B3', '100', 71),
(200, 80, 'C3', '100', 71),
(201, 81, 'A5', '100', 71),
(202, 82, 'F5', '175', 71),
(203, 82, 'E5', '175', 71),
(204, 83, 'H6', '225', 71),
(205, 83, 'G6', '225', 71),
(206, 84, 'D8', '175', 71),
(207, 87, 'C8', '100', 71),
(208, 88, 'C9', '100', 71),
(209, 88, 'D9', '175', 71),
(210, 90, 'C9', '100', 70),
(211, 90, 'D9', '175', 70),
(212, 91, 'C5', '100', 72),
(213, 91, 'D5', '175', 72),
(214, 91, 'E5', '175', 72),
(215, 91, 'F5', '175', 72),
(216, 91, 'A5', '100', 72),
(217, 91, 'B5', '100', 72),
(218, 92, 'D4', '175', 73),
(219, 92, 'G3', '225', 73),
(220, 92, 'G4', '225', 73),
(221, 92, 'G5', '225', 73),
(222, 92, 'G6', '225', 73),
(223, 92, 'C4', '100', 73),
(224, 93, 'C5', '100', 73),
(20227, 20100, 'A5', '100', 30074),
(20228, 20100, 'B5', '100', 30074),
(20229, 20100, 'C5', '100', 30074),
(20230, 20101, 'A9', '100', 10074),
(20231, 20101, 'D5', '175', 10074),
(20232, 20101, 'I0', '225', 10074),
(20233, 20102, 'A9', '100', 30074),
(20234, 20102, 'B9', '100', 30074),
(20235, 20102, 'D7', '175', 30074),
(20236, 20102, 'E7', '175', 30074),
(20237, 20102, 'G4', '225', 30074),
(20238, 20102, 'H4', '225', 30074),
(20239, 20103, 'A4', '100', 10074),
(20240, 20103, 'B4', '100', 10074),
(20241, 20103, 'D9', '175', 10074),
(20242, 20103, 'E9', '175', 10074),
(20243, 20103, 'G3', '225', 10074),
(20244, 20103, 'H3', '225', 10074),
(20245, 20104, 'A8', '100', 30074),
(20246, 20105, 'A5', '100', 10074),
(20247, 20105, 'B5', '100', 10074);

-- --------------------------------------------------------

--
-- Table structure for table `ticketinfo`
--

CREATE TABLE `ticketinfo` (
  `Ticket_Id` double NOT NULL,
  `Ticket_No` double DEFAULT NULL,
  `User_Id` double DEFAULT NULL,
  `Show_Date` datetime DEFAULT NULL,
  `Show_Time` varchar(50) DEFAULT NULL,
  `Show_Id` double DEFAULT NULL,
  `Ticket_Amount` decimal(5,0) DEFAULT NULL,
  `IsPaid` tinyint(4) DEFAULT NULL,
  `Sheats_Count` double DEFAULT NULL,
  `Booking_Date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticketinfo`
--

INSERT INTO `ticketinfo` (`Ticket_Id`, `Ticket_No`, `User_Id`, `Show_Date`, `Show_Time`, `Show_Id`, `Ticket_Amount`, `IsPaid`, `Sheats_Count`, `Booking_Date`) VALUES
(13, 1000, 13, '2012-04-14 00:00:00', '11:00 AM', 26, '525', 0, 3, '2012-04-12 00:00:00'),
(14, 1001, 13, '2012-04-15 00:00:00', '11:00 AM', 22, '1125', 0, 5, '2012-04-12 00:00:00'),
(15, 1002, 13, '2012-04-15 00:00:00', '09:30 PM', 25, '300', 0, 3, '2012-04-08 00:00:00'),
(16, 1003, 13, '2012-04-15 00:00:00', '11:00 AM', 18, '500', 0, 5, '2012-04-12 00:00:00'),
(17, 1004, 13, '2012-04-15 00:00:00', '06:00 PM', 20, '1000', 0, 6, '2012-04-12 00:00:00'),
(18, 1005, 13, '2012-04-13 00:00:00', '09:30 PM', 30, '300', 0, 3, '2012-04-12 00:00:00'),
(19, 1006, 13, '2012-04-15 00:00:00', '06:00 PM', 20, '875', 0, 5, '2012-04-12 00:00:00'),
(20, 1007, 13, '2012-04-13 00:00:00', '09:30 PM', 30, '1125', 0, 5, '2012-04-12 00:00:00'),
(21, 1008, 13, '2012-04-15 00:00:00', '02:30 PM', 19, '200', 0, 2, '2012-04-12 00:00:00'),
(22, 1009, 13, '2012-04-13 00:00:00', '09:30 PM', 30, '350', 0, 2, '2012-04-12 00:00:00'),
(23, 1010, 13, '2012-04-15 00:00:00', '09:30 PM', 21, '175', 0, 1, '2012-04-12 00:00:00'),
(24, 1011, 13, '2012-04-17 00:00:00', '11:00 AM', 31, '600', 0, 6, '2012-04-15 00:00:00'),
(25, 1012, 13, '2012-04-17 00:00:00', '11:00 AM', 31, '100', 0, 1, '2012-04-15 00:00:00'),
(26, 1013, 13, '2012-04-17 00:00:00', '11:00 AM', 31, '225', 0, 1, '2012-04-15 00:00:00'),
(27, 1014, 13, '2012-04-17 00:00:00', '11:00 AM', 31, '1050', 0, 6, '2012-04-15 00:00:00'),
(28, 1015, 13, '2012-05-10 00:00:00', '11:00 AM', 32, '450', 0, 2, '2012-04-15 00:00:00'),
(29, 1016, 14, '2012-04-17 00:00:00', '11:00 AM', 31, '225', 0, 1, '2012-04-16 00:00:00'),
(30, 1017, 14, '2012-05-10 00:00:00', '11:00 AM', 32, '200', 0, 2, '2012-04-24 00:00:00'),
(31, 1018, 14, '2012-05-10 00:00:00', '11:00 AM', 32, '500', 0, 3, '2012-04-24 00:00:00'),
(32, 1019, 13, '2012-05-10 00:00:00', '11:00 AM', 32, '175', 0, 1, '2012-04-25 00:00:00'),
(33, 1020, 13, '2012-05-10 00:00:00', '02:30 PM', 34, '350', 0, 2, '2012-04-27 00:00:00'),
(34, 1021, 16, '2012-05-10 00:00:00', '11:00 AM', 32, '100', 0, 1, '2012-04-27 00:00:00'),
(35, 1022, 17, '2012-05-10 00:00:00', '11:00 AM', 33, '100', 0, 1, '2012-04-27 00:00:00'),
(36, 1023, 18, '2012-05-10 00:00:00', '11:00 AM', 32, '175', 0, 1, '2012-04-27 00:00:00'),
(37, 1024, 13, '2013-10-09 00:00:00', '06:00 PM', 40, '825', 0, 6, '2013-09-08 00:00:00'),
(38, 1025, 13, '2013-09-17 00:00:00', '02:30 PM', 39, '100', 0, 1, '2013-09-08 00:00:00'),
(39, 1026, 13, '2013-09-17 00:00:00', '02:30 PM', 39, '100', 0, 1, '2013-09-08 00:00:00'),
(40, 1027, 13, '2013-09-17 00:00:00', '02:30 PM', 39, '500', 0, 3, '2013-09-08 00:00:00'),
(41, 1028, 13, '2013-09-17 00:00:00', '02:30 PM', 39, '350', 0, 2, '2013-09-08 00:00:00'),
(42, 1029, 13, '2013-09-17 00:00:00', '02:30 PM', 39, '200', 0, 2, '2013-09-08 00:00:00'),
(43, 1030, 13, '2013-10-09 00:00:00', '06:00 PM', 40, '100', 0, 1, '2013-09-08 00:00:00'),
(44, 1031, 13, '2013-10-09 00:00:00', '06:00 PM', 40, '100', 0, 1, '2013-09-08 00:00:00'),
(45, 1032, 13, '2013-10-09 00:00:00', '06:00 PM', 40, '100', 0, 1, '2013-09-08 00:00:00'),
(46, 1033, 13, '2013-10-09 00:00:00', '06:00 PM', 40, '100', 0, 1, '2013-09-08 00:00:00'),
(47, 1034, 13, '2013-10-09 00:00:00', '06:00 PM', 40, '100', 0, 1, '2013-09-08 00:00:00'),
(48, 1035, 13, '2013-10-09 00:00:00', '06:00 PM', 40, '175', 0, 1, '2013-09-08 00:00:00'),
(49, 1036, 13, '2013-09-17 00:00:00', '02:30 PM', 39, '175', 0, 1, '2013-09-08 00:00:00'),
(50, 1037, 13, '2013-09-17 00:00:00', '02:30 PM', 39, '175', 0, 1, '2013-09-08 00:00:00'),
(51, 1038, 12, '2013-09-17 00:00:00', '11:00 AM', 38, '100', 0, 1, '2013-09-08 00:00:00'),
(52, 1039, 13, '2013-10-09 00:00:00', '06:00 PM', 40, '225', 0, 1, '2013-09-08 00:00:00'),
(53, 1040, 13, '2013-10-09 00:00:00', '06:00 PM', 40, '175', 0, 1, '2013-09-08 00:00:00'),
(54, 1041, 13, '2013-09-30 00:00:00', '09:30 PM', 42, '100', 0, 1, '2013-09-08 00:00:00'),
(55, 1042, 13, '2013-10-09 00:00:00', '06:00 PM', 40, '100', 0, 1, '2013-09-28 00:00:00'),
(56, 1043, 13, '2013-10-29 00:00:00', '02:30 PM', 46, '825', 0, 6, '2013-10-16 00:00:00'),
(57, 1044, 13, '2013-10-29 00:00:00', '02:30 PM', 46, '625', 0, 4, '2013-10-16 00:00:00'),
(58, 1045, 13, '2013-10-29 00:00:00', '02:30 PM', 46, '100', 0, 1, '2013-10-16 00:00:00'),
(59, 1046, 13, '2013-10-29 00:00:00', '02:30 PM', 46, '100', 0, 1, '2013-10-16 00:00:00'),
(60, 1047, 13, '2013-10-31 00:00:00', '09:30 PM', 47, '200', 0, 2, '2013-10-16 00:00:00'),
(61, 1048, 13, '2013-10-29 00:00:00', '02:30 PM', 46, '450', 0, 2, '2013-10-20 00:00:00'),
(62, 1049, 13, '2013-10-29 00:00:00', '02:30 PM', 46, '425', 0, 3, '2013-10-20 00:00:00'),
(63, 1050, 13, '2013-10-29 00:00:00', '02:30 PM', 46, '1050', 0, 6, '2013-10-20 00:00:00'),
(64, 1051, 13, '2013-10-29 00:00:00', '02:30 PM', 46, '175', 0, 1, '2013-10-20 00:00:00'),
(65, 1052, 13, '2013-10-30 00:00:00', '02:30 PM', 48, '875', 0, 5, '2013-10-20 00:00:00'),
(66, 1053, 12, '2013-11-15 00:00:00', '11:00 AM', 50, '600', 0, 6, '2013-11-05 00:00:00'),
(67, 1054, 13, '2014-01-31 00:00:00', '09:30 PM', 53, '500', 0, 5, '2014-01-01 00:00:00'),
(68, 1055, 13, '2014-02-28 00:00:00', '11:00 AM', 54, '675', 0, 6, '2014-02-19 00:00:00'),
(69, 1056, 13, '2014-03-29 00:00:00', '11:00 AM', 56, '600', 0, 6, '2014-03-14 00:00:00'),
(70, 1057, 13, '2014-03-29 00:00:00', '11:00 AM', 56, '700', 0, 4, '2014-03-14 00:00:00'),
(71, 1058, 13, '2014-03-29 00:00:00', '11:00 AM', 56, '100', 0, 1, '2014-03-14 00:00:00'),
(72, 1059, 13, '2014-05-30 00:00:00', '11:00 AM', 59, '100', 0, 1, '2014-05-27 00:00:00'),
(73, 1060, 13, '2014-06-17 00:00:00', '11:00 AM', 63, '500', 0, 3, '2014-06-01 00:00:00'),
(74, 1061, 13, '2014-06-17 00:00:00', '11:00 AM', 63, '225', 0, 1, '2014-06-01 00:00:00'),
(75, 1062, 12, '2014-08-20 00:00:00', '11:00 AM', 64, '675', 0, 6, '2014-08-03 00:00:00'),
(76, 1063, 13, '2014-09-25 00:00:00', '02:30 PM', 65, '200', 0, 2, '2014-09-10 00:00:00'),
(77, 1064, 13, '2015-01-30 00:00:00', '11:00 AM', 67, '825', 0, 6, '2015-01-26 00:00:00'),
(78, 1065, 13, '2015-02-28 00:00:00', '11:00 AM', 68, '825', 0, 6, '2015-02-13 00:00:00'),
(79, 1066, 12, '2015-04-30 00:00:00', '11:00 AM', 69, '600', 0, 6, '2015-04-17 00:00:00'),
(80, 1067, 13, '2015-08-05 00:00:00', '06:00 PM', 71, '200', 0, 2, '2015-07-25 00:00:00'),
(81, 1068, 13, '2015-08-05 00:00:00', '06:00 PM', 71, '100', 0, 1, '2015-07-25 00:00:00'),
(82, 1069, 13, '2015-08-05 00:00:00', '06:00 PM', 71, '350', 0, 2, '2015-07-25 00:00:00'),
(83, 1070, 13, '2015-08-05 00:00:00', '06:00 PM', 71, '450', 0, 2, '2015-07-25 00:00:00'),
(84, 1071, 13, '2015-08-05 00:00:00', '06:00 PM', 71, '175', 0, 1, '2015-07-25 00:00:00'),
(87, 1072, 13, '2015-08-05 00:00:00', '06:00 PM', 71, '100', 0, 1, '2015-07-25 00:00:00'),
(88, 1073, 13, '2015-08-05 00:00:00', '06:00 PM', 71, '275', 0, 2, '2015-07-25 00:00:00'),
(90, 1074, 13, '2015-07-31 00:00:00', '11:00 AM', 70, '275', 0, 2, '2015-07-25 00:00:00'),
(91, 1075, 13, '2016-03-16 00:00:00', '11:00 AM', 72, '825', 0, 6, '2016-03-12 00:00:00'),
(92, 1076, 12, '2016-06-22 00:00:00', '11:00 AM', 73, '1175', 0, 6, '2016-06-19 00:00:00'),
(93, 1077, 13, '2016-06-22 00:00:00', '11:00 AM', 73, '100', 0, 1, '2016-06-19 00:00:00'),
(20100, 1078, 13, '2017-03-31 00:00:00', '06:00 PM', 30074, '300', 0, 3, '2017-03-20 01:46:00'),
(20101, 1079, 13, '2017-04-12 00:00:00', '02:30 PM', 10074, '500', 0, 3, '2017-03-20 01:47:00'),
(20102, 1080, 23, '2017-03-31 00:00:00', '06:00 PM', 30074, '1000', 0, 6, '2017-03-20 01:48:00'),
(20103, 1081, 23, '2017-04-12 00:00:00', '02:30 PM', 10074, '1000', 0, 6, '2017-03-20 01:49:00'),
(20104, 1082, 13, '2017-03-31 00:00:00', '06:00 PM', 30074, '100', 0, 1, '2017-03-20 02:38:00'),
(20105, 1083, 13, '2017-04-12 00:00:00', '02:30 PM', 10074, '200', 0, 2, '2017-04-10 20:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `timinginfo`
--

CREATE TABLE `timinginfo` (
  `Time_Id` double NOT NULL,
  `Time_StartTime` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timinginfo`
--

INSERT INTO `timinginfo` (`Time_Id`, `Time_StartTime`) VALUES
(1, '11:00 AM'),
(2, '02:30 PM'),
(3, '06:00 PM'),
(4, '09:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `User_Id` double NOT NULL,
  `User_LoginName` varchar(50) DEFAULT NULL,
  `User_LoginPassword` varchar(50) DEFAULT NULL,
  `User_Email` varchar(50) DEFAULT NULL,
  `User_MobileNo` decimal(10,0) DEFAULT NULL,
  `User_FName` varchar(50) DEFAULT NULL,
  `User_LName` varchar(50) DEFAULT NULL,
  `User_Add` varchar(100) DEFAULT NULL,
  `User_City` varchar(50) DEFAULT NULL,
  `User_State` varchar(50) DEFAULT NULL,
  `User_SQ` varchar(50) DEFAULT NULL,
  `User_SA` varchar(50) DEFAULT NULL,
  `User_Type` varchar(50) DEFAULT NULL,
  `User_IsActive` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`User_Id`, `User_LoginName`, `User_LoginPassword`, `User_Email`, `User_MobileNo`, `User_FName`, `User_LName`, `User_Add`, `User_City`, `User_State`, `User_SQ`, `User_SA`, `User_Type`, `User_IsActive`) VALUES
(12, 'ADMI', 'admi', 'cinemaol.asct@gmail.com', '8109579945', 'MP ADMI', 'CHAUHA', 'INDRAPURI BHEL,', 'BHOPAL', 'MADHYA PRADESH', 'SQ', 'SA', 'ADMI', 1),
(13, 'ADMI', 'admi', 'cinemaol.asct@gmail.com', '8802524849', 'MATA PRASAD', 'CHAUHA', 'INDRAPURI,BHEL', 'BHOPAL', 'MADHYA PRADESH', 'SQ', 'SA', 'USER', 1),
(14, 'MATA_PD', '12345', 'mataprasad045@gmail.com', '8109579945', 'MATA PRASAD', 'CHAUHA', 'INDRAPURI, BHEL', 'BHOPAL', 'MADHYA PRADESH', 'SQ', 'SA', 'USER', 1),
(16, 'ASHISH', '12345', NULL, NULL, 'ASHISH', 'GUPTA', 'ARERA COLONY, BHOPAL', 'BHOPAL', 'MADHYA PRADESH', 'SQ', 'SA', 'USER', 1),
(17, 'MANO', '12345', NULL, NULL, 'MANORANJA', 'KUMAR', 'INDRAPURI, BHEL', 'BHOPAL', 'MADHYA PRADESH', 'SQ', 'SA', 'USER', 1),
(18, 'WASHI', '12345', NULL, NULL, 'AHTISHAM', 'WASHI', 'BHOPAL', 'BHOPAL', 'MADHYA PRADESH', 'SQ', 'SA', 'USER', 1),
(19, 'MP045', 'admi', 'mail@mail.i', '8802524849', 'MATA PRASAD', 'CHAUHA', 'STREET NO-2, MAMOORA NOIDA-66', 'NOIDA', 'UTTAR PRADESH', 'SA', 'SQ', 'USER', 1),
(20, 'A', 'aa', 'er.deepaksachan@gmail.com', '5678567', 'DEEPAK', 'A', 'FGHFGH, VJVGH', 'GFGF', 'UTTAR PRADESH', 'GDFGD', 'GHFGH', 'USER', 1),
(21, 'MATA009', 'admi', 'mail@in.com', '12', 'MATA009', '', ', ', 'NOIDA', 'UTTAR PRADESH', 'SA', 'SA', 'USER', 1),
(22, 'vp', 'vp', 'mail@vp.i', '1234567890', 'Vinay', 'Pandey', 'REWA   MP', 'REWA', 'MADHYA PRADESH', 'mata', 'rewama', 'USER', 1),
(23, 'pd', '12345', 'gfjhg', '11222', 'MATA', 'PD', 'mm ', 'mm', 'NAGALAND', 'sa', 'sa', 'USER', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hallinfo`
--
ALTER TABLE `hallinfo`
  ADD PRIMARY KEY (`Hall_Id`);

--
-- Indexes for table `movieindustryinfo`
--
ALTER TABLE `movieindustryinfo`
  ADD PRIMARY KEY (`Industry_id`);

--
-- Indexes for table `movieinfo`
--
ALTER TABLE `movieinfo`
  ADD PRIMARY KEY (`Movie_Id`);

--
-- Indexes for table `movielanguageinfo`
--
ALTER TABLE `movielanguageinfo`
  ADD PRIMARY KEY (`Language_Id`);

--
-- Indexes for table `moviestatusinfo`
--
ALTER TABLE `moviestatusinfo`
  ADD PRIMARY KEY (`MovieStatus_Id`);

--
-- Indexes for table `sheattype`
--
ALTER TABLE `sheattype`
  ADD PRIMARY KEY (`SheatType_Id`);

--
-- Indexes for table `showinfo`
--
ALTER TABLE `showinfo`
  ADD PRIMARY KEY (`Show_Id`);

--
-- Indexes for table `stateinfo`
--
ALTER TABLE `stateinfo`
  ADD PRIMARY KEY (`State_Id`);

--
-- Indexes for table `ticketdetail`
--
ALTER TABLE `ticketdetail`
  ADD PRIMARY KEY (`Td_Id`);

--
-- Indexes for table `ticketinfo`
--
ALTER TABLE `ticketinfo`
  ADD PRIMARY KEY (`Ticket_Id`);

--
-- Indexes for table `timinginfo`
--
ALTER TABLE `timinginfo`
  ADD PRIMARY KEY (`Time_Id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hallinfo`
--
ALTER TABLE `hallinfo`
  MODIFY `Hall_Id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `movieindustryinfo`
--
ALTER TABLE `movieindustryinfo`
  MODIFY `Industry_id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `movieinfo`
--
ALTER TABLE `movieinfo`
  MODIFY `Movie_Id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `movielanguageinfo`
--
ALTER TABLE `movielanguageinfo`
  MODIFY `Language_Id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `moviestatusinfo`
--
ALTER TABLE `moviestatusinfo`
  MODIFY `MovieStatus_Id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sheattype`
--
ALTER TABLE `sheattype`
  MODIFY `SheatType_Id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `showinfo`
--
ALTER TABLE `showinfo`
  MODIFY `Show_Id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30078;
--
-- AUTO_INCREMENT for table `stateinfo`
--
ALTER TABLE `stateinfo`
  MODIFY `State_Id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `ticketdetail`
--
ALTER TABLE `ticketdetail`
  MODIFY `Td_Id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20248;
--
-- AUTO_INCREMENT for table `ticketinfo`
--
ALTER TABLE `ticketinfo`
  MODIFY `Ticket_Id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20106;
--
-- AUTO_INCREMENT for table `timinginfo`
--
ALTER TABLE `timinginfo`
  MODIFY `Time_Id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `User_Id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

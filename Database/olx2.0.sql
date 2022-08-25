-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2020 at 05:30 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `olx2.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `image` varchar(150) NOT NULL,
  `password` varchar(300) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email_id`, `mobile`, `image`, `password`) VALUES
(7, 'yash', 'yash@email.com', '6363636356', 'bike-4.jpg', 'yash@123456'),
(8, 'dilip ', 'dilip@email.com', '9797979797', '5f09faea094dc.image.jpg', 'dilip@123456'),
(4, 'siddharth', 'siddharth@gmail.com', '1234567890', 'a2.jpg', 'siddharth@123456');

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE IF NOT EXISTS `catagory` (
  `c_id` int(10) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  `creationtime` varchar(30) NOT NULL,
  `updationtime` varchar(30) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`c_id`, `c_name`, `creationtime`, `updationtime`) VALUES
(8, 'mobile', 'Aug/14/2020 04:57:24', 'Nov/02/2020 09:51:14'),
(7, 'car', 'Aug/14/2020 03:18:08', ''),
(9, 'laptop', 'Aug/14/2020 04:57:45', 'Aug/14/2020 05:07:58'),
(10, 'bike', 'Aug/24/2020 09:00:22', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `cusid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` tinytext NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `message` varchar(10) NOT NULL,
  PRIMARY KEY (`cusid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`cusid`, `name`, `email`, `mobile`, `description`, `message`) VALUES
(5, 'dilip vikani', 'dilipvikani@gmail.com', '9797979797', 'i like your selling site', 'unread'),
(2, 'siddhu', 'siddharth@gmail.com', '9574953717', 'nice work', 'read'),
(6, 'yash thakar', 'thakaryash63@gmail.com', '6363636363', 'i like it site and works', 'unread'),
(7, 'rasadiya siddharth', 'si@gmail.com', '9574953777', 'really really good working for buying AND selling product', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE IF NOT EXISTS `favorite` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `u_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`id`, `u_id`, `p_id`) VALUES
(16, 1, 23),
(22, 2, 23),
(24, 1, 24),
(26, 10, 25),
(28, 0, 52),
(29, 14, 47),
(30, 12, 53),
(31, 12, 51),
(32, 14, 48),
(33, 16, 53),
(34, 16, 52),
(35, 4, 50),
(36, 4, 53),
(37, 13, 46),
(38, 17, 48),
(39, 18, 52),
(40, 19, 48);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL,
  `time` varchar(70) NOT NULL,
  `noti` varchar(20) NOT NULL,
  `p_u_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `p_name` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=122 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `uid`, `name`, `email`, `mobile`, `message`, `time`, `noti`, `p_u_id`, `p_id`, `p_name`) VALUES
(115, 14, 'siddharth', 'siddharth@gmail.com', '9573214563', 'nice care  ', '28/Nov/20 10:13:44', 'unread', 12, 47, 'Hyundai'),
(116, 16, 'Dilip', 'dilip@gmail.com', '9503214563', 'i pay  only 400000', '28/Nov/20 10:18:34', 'unread', 14, 50, 'Suzuki'),
(117, 4, 'anil', 'anil@gmail.com', '9558098336', 'nice  rs=18500 last', '28/Nov/20 10:25:58', 'read', 18, 53, 'Oppo'),
(118, 13, 'Rahul', 'rahul@gmail.com', '6352372545', '35000', '28/Nov/20 10:28:11', 'unread', 4, 25, 'hp'),
(119, 17, 'Darshan', 'darshan@gmail.com', '9253214563', 'good details', '28/Nov/20 10:42:12', 'unread', 13, 48, 'Honda'),
(114, 14, 'siddharth', 'siddharth@gmail.com', '9573214563', 'i pay 500000', '28/Nov/20 09:12:04', 'unread', 12, 47, 'Hyundai'),
(113, 14, 'siddharth', 'siddharth@gmail.com', '9573214563', 'i pay 30000', '28/Nov/20 09:09:56', 'read', 4, 25, 'hp'),
(120, 18, 'Jagjeet', 'jagjeet@gmail.com', '6352145632', '165400', '28/Nov/20 10:47:43', 'unread', 17, 52, 'Hyundai'),
(121, 19, 'Parth', 'parth@gmail.com', '9422145365', 'nice condition', '28/Nov/20 10:50:49', 'unread', 18, 53, 'Oppo');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `mc_id` int(5) NOT NULL,
  `p_b_name` varchar(50) NOT NULL,
  `p_title` varchar(70) NOT NULL,
  `p_description` text NOT NULL,
  `p_price` int(15) NOT NULL,
  `p_image1` text NOT NULL,
  `p_image2` text,
  `p_image3` text,
  `p_image4` text,
  `p_creationtime` text NOT NULL,
  `p_why_selling` varchar(150) NOT NULL,
  `u_id` int(10) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `mc_id`, `p_b_name`, `p_title`, `p_description`, `p_price`, `p_image1`, `p_image2`, `p_image3`, `p_image4`, `p_creationtime`, `p_why_selling`, `u_id`) VALUES
(53, 8, 'Oppo', 'reno 2', 'Brand: Oppo\r\n\r\noppo reno 2 8gb 256gb 1 year old with bill box charger', 20000, 'oppo reno 1.jpg', 'oppo reno 2.jpg', 'oppo reno 3.jpg', 'oppo reno 4.jpg', '28/Nov/20 06:07:27', 'Because I want to buy an iphone..', 18),
(52, 7, 'Hyundai', 'i10', 'Brand: Hyundai\r\nModel:i10\r\nVariant: 1.2 Kappa Magna\r\nYear: 2010\r\nFuel: Petrol\r\nTransmission: Manual\r\nKM driven: 80,000 km\r\nNo. of Owners: 2nd', 195000, 'i10-1.jpg', 'i10-2.jpg', 'i10-3.jpg', 'i10-4.jpg', '28/Nov/20 06:01:46', 'Because I want to buy a new car..', 17),
(25, 9, 'hp', 'HP 15 15s-du2071TU', '1.2GHz Intel i3-1005G1 10th Gen processor\r\n\r\n8GB DDR4 RAM\r\n\r\n1TB 5400rpm hard drive\r\n\r\n15.6-inch screen, Integrated Graphics\r\n\r\nWindows 10 Home operating system\r\n\r\n1.77kg laptop', 37500, 'leptop-1.jpg', 'leptop-2.jpg', 'leptop-3.jpg', 'leptop-4.jpg', 'Sep/06/2020 09:03:05', 'my requirement is gaming laptop', 4),
(47, 7, 'Hyundai', 'Verna', 'Brand: Hyundai\r\nModel: Verna\r\nVariant :Fluidic 1.6 CRDi SX Opt\r\nYear:2012\r\nFuel: Diesel\r\nTransmission: Manual\r\nKM driven:63,000 km\r\nNo. of Owners:1st', 525000, 'verna1.jpg', 'verna2.jpg', 'verna3.jpg', 'verna4.jpg', '28/Nov/20 05:10:29', 'Because I want to buy a new car..', 12),
(48, 10, 'Honda', 'Unicorn', 'Brand: Honda\r\nModel: CB\r\nYear: 2015\r\nKM driven: 19,700 km\r\nWell maintained Honda CB Unicorn 160.\r\n\r\nKilometers driven - 19668 km only.\r\n\r\nRegistered on 22/09/2015.\r\n\r\nRegistered at MumbaiRTO.(KL 17)\r\n\r\nRegistration Valid up to 21/09/2030.\r\n\r\nComprehensive full cover insurance with add on Depreciation waiver Cover - valid up to 09/09/2021.\r\n\r\nCompany Service only\r\n\r\nBrand New Rear Tire.\r\n', 69000, 'honda1.jpg', 'honda2.jpg', 'honda3.jpg', 'honda4.jpg', '28/Nov/20 05:16:27', 'Because I want to buy a new bike..', 13),
(50, 7, 'Suzuki', 'Swift', 'Brand: Maruti Suzuki\r\nModel: Swift\r\nVariant: LDI\r\nYear:2017\r\nFuel: Diesel\r\nTransmission: Manual\r\nKM driven:86,000 km\r\nNo. of Owners:3rd', 495000, 'swift1.jpg', 'swift2.jpg', 'swift3.jpg', 'swift4.jpg', '28/Nov/20 05:47:42', 'Because I want to buy a new car..', 14),
(51, 10, 'Hero', 'Hunk', 'Brand: Hero\r\nModel: Hunk\r\nYear: 2016\r\nKM driven: 26,000 km', 70000, 'hunk1.jpg', 'hunk2.jpg', 'hunk3.jpg', 'hunk4.jpg', '28/Nov/20 05:56:23', 'Because I want to buy a new bike..', 16),
(46, 8, 'iphone', 'iphone 8', 'iPhone 8 64GB\r\n\r\nExcellent Condition\r\n\r\nBattery Health : 80%\r\n\r\nComplete Box Pack\r\n\r\nSTORAGE : 64GB\r\n\r\nCOLOUR : White\r\n', 19500, 'i1.jpg', 'i2.jpg', 'i3.jpg', 'i4.jpg', '28/Nov/20 05:05:05', 'Because I want to buy an android phone..', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `mobile`, `state`, `city`, `email`, `password`, `status`) VALUES
(14, 'siddharth', '9573214563', 'Gujarat', 'surat', 'siddharth@gmail.com', 'siddharth123', 'old'),
(13, 'Rahul', '6352372545', 'Maharashtra', 'Mumbai', 'rahul@gmail.com', 'rahul123', 'new'),
(4, 'anil', '9558098336', 'gujrat', 'baroda', 'anil@gmail.com', 'anil123', 'old'),
(12, 'yash', '6353217432', 'Gujarat', 'Rajkot', 'yash@gmail.com', 'yash123', 'new'),
(11, 'jayraj', '9574242883', 'Gujarat', 'Amreli', 'jayraj@gmail.com', 'jayraj123', 'old'),
(16, 'Dilip', '9503214563', 'Gujarat', 'Vadodra', 'dilip@gmail.com', 'dilip123', 'old'),
(17, 'Darshan', '9253214563', 'Delhi', 'NewDelhi', 'darshan@gmail.com', 'darshan123', 'new'),
(18, 'Jagjeet', '6352145632', 'Gujarat', 'Bhuj', 'jagjeet@gmail.com', 'jagjeet123', 'new'),
(19, 'Parth', '9422145365', 'Rajasthan', 'Jaipur', 'parth@gmail.com', 'parth123', 'new');

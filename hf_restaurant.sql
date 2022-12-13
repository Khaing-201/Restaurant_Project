-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 06:02 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hf_restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `CommentID` int(11) NOT NULL AUTO_INCREMENT,
  `Comment` varchar(200) NOT NULL,
  `MenuID` int(11) NOT NULL,
  PRIMARY KEY (`CommentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`CommentID`, `Comment`, `MenuID`) VALUES
(20, 'Very Good Menu', 12),
(22, 'Very Good', 12),
(23, 'This menu is good', 12);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Customerid` int(11) NOT NULL AUTO_INCREMENT,
  `Customername` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Phonenumber` varchar(12) NOT NULL,
  `Address` text NOT NULL,
  PRIMARY KEY (`Customerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customerid`, `Customername`, `Email`, `Password`, `Phonenumber`, `Address`) VALUES
(1, 'kk', 'k@gmail.com', 'ktz123', '0923564552', 'YGN'),
(5, 'khaing ', 'kh@gmail.com', '12345', '09564321533', 'NO 45, Yangon,Myanmar');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `MenuID` int(11) NOT NULL AUTO_INCREMENT,
  `MenuTypeID` int(11) NOT NULL,
  `MenuName` varchar(100) NOT NULL,
  `MenuImage` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  PRIMARY KEY (`MenuID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`MenuID`, `MenuTypeID`, `MenuName`, `MenuImage`, `Price`, `Quantity`) VALUES
(10, 0, 'tea cup', 'MenuImage/_images (1).jfif', 2000, '1'),
(12, 3, 'Rice', 'MenuImage/_Fish_Rice5.jpg', 10000, '1'),
(13, 6, 'chocolate', 'MenuImage/_3.jpeg', 20000, '1'),
(17, 7, 'cola', 'MenuImage/_images (2).jfif', 2000, '1'),
(18, 3, 'noodle', 'MenuImage/_574c0d_67a97ef27708476b89d113e544a1a96a_mv2.webp', 3000, '1'),
(19, 6, 'Cake cup', 'MenuImage/_8.jpeg', 30000, '1'),
(20, 7, 'ice ice', 'MenuImage/_2017-trends-non-alcoholic-beverages.jpg', 20000, '1'),
(21, 5, 'Mala', 'MenuImage/_download (2).jfif', 52000, '1'),
(22, 5, 'Chicken Kyay Oh ', 'MenuImage/_download.jfif', 6000, '1'),
(23, 4, 'Tomyum', 'MenuImage/_tomyum.jpg', 6000, '1'),
(24, 3, 'Shan Noodle', 'MenuImage/_Shan_Noodle31.jpg', 2000, '1'),
(26, 7, 'wine', 'MenuImage/_image.jfif', 6000, '1'),
(27, 4, 'soup', 'MenuImage/_shutterstock_288572099.jpg', 3000, '1'),
(28, 7, 'rose wine', 'MenuImage/_Hay-Pan-La-Paz.png', 60000, '1'),
(29, 3, 'Shan Tofu', 'MenuImage/_tofu-nway-is-called-shan.jpg', 3000, '1'),
(32, 4, 'Tokpokki', 'MenuImage/_71fa270d-179e-47b5-be14-684ff9b90659.jpg', 2000, '1'),
(33, 7, 'Coffee', 'MenuImage/_images.jfif', 1000, '1'),
(40, 5, 'Mushroom soup', '../admin/MenuImage/_cream-of-mushoom-soup_thecozyapron_1.jpg', 6000, '1');

-- --------------------------------------------------------

--
-- Table structure for table `menutype`
--

CREATE TABLE IF NOT EXISTS `menutype` (
  `MenuTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `MenuTypeName` varchar(100) NOT NULL,
  PRIMARY KEY (`MenuTypeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `menutype`
--

INSERT INTO `menutype` (`MenuTypeID`, `MenuTypeName`) VALUES
(3, 'Local Menu'),
(4, 'Forengin Menu'),
(5, 'Special Menu'),
(6, 'Dessert'),
(7, 'Drinks'),
(9, 'Single set'),
(10, 'Kpop Set');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `OrderID` varchar(11) NOT NULL,
  `OrderDate` date NOT NULL,
  `MenuID` varchar(100) NOT NULL,
  `OrderAmount` varchar(100) NOT NULL,
  `taxamount` varchar(50) NOT NULL,
  `netamount` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phonenumber` int(50) NOT NULL,
  `recipientname` varchar(100) NOT NULL,
  `PaymentType` varchar(100) NOT NULL,
  `Cardnumber` int(50) NOT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `OrderDate`, `MenuID`, `OrderAmount`, `taxamount`, `netamount`, `Address`, `Phonenumber`, `recipientname`, `PaymentType`, `Cardnumber`) VALUES
('Or_0001', '2021-11-28', '26', '81000', '4050', '85050', 'YGN ', 2147483647, 'khaing', 'KPay', 2147483647),
('Or_0002', '2021-11-28', '24', '6000', '300', '6300', 'MDY', 2147483647, 'eun woo', 'Cash', 0),
('Or_0003', '2021-11-28', '35', '20000', '1000', '21000', 'No.22,YGN,Myanmar', 2147483647, 'khaing', 'Visa/MPU', 116546),
('Or_0004', '2021-11-28', '12', '40000', '2000', '42000', 'YGN', 2147483647, 'eun woo', 'Cash', 0),
('Or_0005', '2021-11-28', '27', '46000', '2300', '48300', 'No.33,YGN ', 2147483647, 'khaing', 'KPay', 88465000),
('Or_0006', '2021-11-28', '13', '184000', '9200', '193200', 'no 55 YGN', 965465465, 'zar', 'Cash', 0),
('Or_0007', '2021-11-29', '27', '6000', '300', '6300', 'YGN', 2147483647, 'khaing', 'KPay', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `Staffid` int(11) NOT NULL AUTO_INCREMENT,
  `staffname` varchar(80) NOT NULL,
  `Age` varchar(100) NOT NULL,
  `Gender` varchar(11) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Phonenumber` varchar(11) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `NRC` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Dateofbirth` varchar(50) NOT NULL,
  PRIMARY KEY (`Staffid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staffid`, `staffname`, `Age`, `Gender`, `Role`, `Email`, `Password`, `Phonenumber`, `Image`, `NRC`, `Address`, `Dateofbirth`) VALUES
(10, 'yi yi', '21', 'Female', 'Manager', 'yi@gmail.com', '12345', '09564321598', 'StaffImages/_SharedScreenswhot.jpg', '12/kamata(C)488425', 'Yangon, Myanmar ', '1999-01-13'),
(11, 'yu ', '25', 'Female', 'Chef', 'yu@gmail.com', '12345', '21646165498', 'StaffImages/_3.jpg', '12/kamata(C)488425', 'YGN', '1998-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE IF NOT EXISTS `table1` (
  `TableID` int(11) NOT NULL AUTO_INCREMENT,
  `TableName` varchar(50) NOT NULL,
  `TableTypeID` varchar(11) NOT NULL,
  `People` varchar(50) NOT NULL,
  `Chair` varchar(50) NOT NULL,
  PRIMARY KEY (`TableID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`TableID`, `TableName`, `TableTypeID`, `People`, `Chair`) VALUES
(10, '6', '11', '8', '9'),
(11, '4', '10', '6', '7');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE IF NOT EXISTS `tables` (
  `TableID` int(11) NOT NULL AUTO_INCREMENT,
  `TableTypeID` varchar(11) NOT NULL,
  `TableName` varchar(50) NOT NULL,
  PRIMARY KEY (`TableID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`TableID`, `TableTypeID`, `TableName`) VALUES
(3, '9', 'Table 3'),
(4, '12', 'Table4'),
(5, '11', 'Table 5'),
(6, '14', 'Table 6'),
(7, '15', 'Table 1');

-- --------------------------------------------------------

--
-- Table structure for table `tabletype`
--

CREATE TABLE IF NOT EXISTS `tabletype` (
  `TableTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `TableTypeName` varchar(1000) NOT NULL,
  PRIMARY KEY (`TableTypeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tabletype`
--

INSERT INTO `tabletype` (`TableTypeID`, `TableTypeName`) VALUES
(10, 'Couple Table'),
(11, 'Family Table'),
(14, 'Single Table'),
(15, 'Meeting');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

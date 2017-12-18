-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2017 at 06:25 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alhaj`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_category`
--

CREATE TABLE IF NOT EXISTS `add_category` (
`sn` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `Password` varchar(444) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
`Admin_Id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `Password`, `Admin_Id`) VALUES
('admin', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ad_newsubcategory`
--

CREATE TABLE IF NOT EXISTS `ad_newsubcategory` (
`sn` int(11) NOT NULL,
  `category_name` varchar(566) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `billings_info`
--

CREATE TABLE IF NOT EXISTS `billings_info` (
  `B_Name` varchar(150) NOT NULL DEFAULT '',
  `B_Address` varchar(150) DEFAULT NULL,
  `Road_Name` varchar(150) DEFAULT NULL,
  `Road_No` varchar(150) DEFAULT NULL,
  `Bill_Date` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `Card_Id` varchar(150) NOT NULL DEFAULT '',
  `Card_Deatils` varchar(150) DEFAULT NULL,
  `Card_Pin` int(50) DEFAULT NULL,
  `Total_Price` varchar(150) DEFAULT NULL,
  `Total_Product` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`Customer_Id` int(11) NOT NULL,
  `Customer_Name` varchar(150) DEFAULT NULL,
  `Customer_Number` varchar(150) DEFAULT NULL,
  `B_Name` varchar(150) DEFAULT NULL,
  `Supplier_Id` varchar(150) DEFAULT NULL,
  `Card_Id` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_detials`
--

CREATE TABLE IF NOT EXISTS `order_detials` (
`Order_Id` int(11) NOT NULL,
  `Product_Id` varchar(150) DEFAULT NULL,
  `Price` varchar(150) DEFAULT NULL,
  `Discount` varchar(150) DEFAULT NULL,
  `Quantity` varchar(150) DEFAULT NULL,
  `Customer_Id` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
`User_Id` int(11) NOT NULL,
  `Frist_Name` varchar(150) DEFAULT NULL,
  `Last_Name` varchar(150) DEFAULT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `Password` varchar(150) DEFAULT NULL,
  `User_Type` varchar(150) DEFAULT NULL,
  `Phone` varchar(150) DEFAULT NULL,
  `City` varchar(150) DEFAULT NULL,
  `Address` varchar(150) DEFAULT NULL,
  `Postal_Code` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `Supplier_Name` varchar(150) DEFAULT NULL,
  `Supplier_Id` varchar(150) NOT NULL DEFAULT '',
  `Supplier_Number` varchar(150) DEFAULT NULL,
  `B_Name` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
`sn` int(11) NOT NULL,
  `category_name` varchar(500) NOT NULL,
  `house_item` varchar(66) NOT NULL,
  `personal_item` varchar(77) NOT NULL,
  `pack_item` varchar(65) NOT NULL,
  `beve_item` varchar(77) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_code` varchar(100) NOT NULL,
`sn` int(11) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `description` varchar(555) NOT NULL,
  `product_image` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_category`
--
ALTER TABLE `add_category`
 ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `ad_newsubcategory`
--
ALTER TABLE `ad_newsubcategory`
 ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `billings_info`
--
ALTER TABLE `billings_info`
 ADD PRIMARY KEY (`B_Name`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`Card_Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `order_detials`
--
ALTER TABLE `order_detials`
 ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`User_Id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
 ADD PRIMARY KEY (`Supplier_Id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
 ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
 ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_category`
--
ALTER TABLE `add_category`
MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ad_newsubcategory`
--
ALTER TABLE `ad_newsubcategory`
MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `Customer_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_detials`
--
ALTER TABLE `order_detials`
MODIFY `Order_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

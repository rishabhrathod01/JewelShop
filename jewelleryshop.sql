-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2017 at 05:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jewelleryshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `billingdetails`
--

CREATE TABLE `billingdetails` (
  `Bid` varchar(6) NOT NULL,
  `Bdate` date NOT NULL,
  `Bitemsid` varchar(7) NOT NULL,
  `Beid` varchar(3) NOT NULL,
  `Bcid` varchar(5) NOT NULL,
  `Bamt` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billingdetails`
--

INSERT INTO `billingdetails` (`Bid`, `Bdate`, `Bitemsid`, `Beid`, `Bcid`, `Bamt`) VALUES
('1', '2017-10-01', '34', 't3', 'r4', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `Cid` varchar(5) NOT NULL,
  `Cname` varchar(20) NOT NULL,
  `Caddress` varchar(50) NOT NULL,
  `Cphoneno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`Cid`, `Cname`, `Caddress`, `Cphoneno`) VALUES
('12', 'rakesh', 'silvassa', 9428);

-- --------------------------------------------------------

--
-- Table structure for table `employeedetails`
--

CREATE TABLE `employeedetails` (
  `Eid` varchar(3) NOT NULL,
  `Ename` varchar(20) NOT NULL,
  `Ephoneno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeedetails`
--

INSERT INTO `employeedetails` (`Eid`, `Ename`, `Ephoneno`) VALUES
('r3', 'ramesh', 8676);

-- --------------------------------------------------------

--
-- Table structure for table `itemdetails`
--

CREATE TABLE `itemdetails` (
  `Iid` varchar(7) NOT NULL,
  `Iweight` float NOT NULL,
  `Itype` varchar(3) NOT NULL,
  `Icategory` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemdetails`
--

INSERT INTO `itemdetails` (`Iid`, `Iweight`, `Itype`, `Icategory`) VALUES
('5rr', 70, 'gol', 788);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `Rgold` int(10) NOT NULL,
  `Rsilver` int(10) NOT NULL,
  `Rplatinum` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`Rgold`, `Rsilver`, `Rplatinum`) VALUES
(40000, 5000, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('sohaibalam67', '123456'),
('alam', 'alam'),
('chandan', 'chandan'),
('manish', 'manish'),
('rohit', 'rohit'),
('rahul', 'rahul'),
('rr', 'rr'),
('vikas', 'vikas'),
('testbot', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billingdetails`
--
ALTER TABLE `billingdetails`
  ADD PRIMARY KEY (`Bid`);

--
-- Indexes for table `customerdetails`
--
ALTER TABLE `customerdetails`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `employeedetails`
--
ALTER TABLE `employeedetails`
  ADD PRIMARY KEY (`Eid`);

--
-- Indexes for table `itemdetails`
--
ALTER TABLE `itemdetails`
  ADD PRIMARY KEY (`Iid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

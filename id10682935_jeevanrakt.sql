-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2019 at 10:42 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10682935_jeevanrakt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin0`
--

CREATE TABLE `admin0` (
  `ID` varchar(10) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `UserName` varchar(6) NOT NULL,
  `Pass` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin0`
--

INSERT INTO `admin0` (`ID`, `Name`, `Gender`, `UserName`, `Pass`) VALUES
('BUI8E', 'Abhay', 'M', 'abhay0', 'abhay0');

-- --------------------------------------------------------

--
-- Table structure for table `doners`
--

CREATE TABLE `doners` (
  `Id` varchar(10) NOT NULL,
  `Active` varchar(1) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `BloodGr` varchar(3) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `LastPostDate` date NOT NULL,
  `LastDonationDate` date NOT NULL,
  `Mob` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `RegDate` date NOT NULL,
  `NotifyMe` varchar(1) NOT NULL,
  `Img` varchar(200) NOT NULL DEFAULT 'NULL',
  `AditionalDetails` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `Id` varchar(10) NOT NULL,
  `DonerId` varchar(10) NOT NULL,
  `LocatorId` varchar(10) NOT NULL,
  `Amount` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Place` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locators`
--

CREATE TABLE `locators` (
  `Id` varchar(10) NOT NULL,
  `Active` varchar(1) NOT NULL,
  `Urgent` varchar(1) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `BloodGr` varchar(3) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `DOB` date NOT NULL,
  `Mob` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `LastPostDate` date NOT NULL,
  `AditionalDetails` text NOT NULL,
  `RegDate` date NOT NULL,
  `Img` varchar(100) NOT NULL,
  `informStatus` date NOT NULL DEFAULT '1111-11-11'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Id` varchar(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Mob` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `webcount`
--

CREATE TABLE `webcount` (
  `val` varchar(3) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webcount`
--

INSERT INTO `webcount` (`val`, `count`) VALUES
('web', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

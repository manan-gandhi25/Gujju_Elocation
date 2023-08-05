-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 01:22 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gujju_elocation`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog1_tbl`
--

CREATE TABLE `blog1_tbl` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `profilepic` varchar(500) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog1_tbl`
--

INSERT INTO `blog1_tbl` (`id`, `uid`, `title`, `comment`, `profilepic`, `isactive`, `doi`, `dou`) VALUES
(5, 24, 'asdasdasdasda', 'asfdasdasd', 'avatar.png', 1, '2019-03-20 11:57:27', '0000-00-00 00:00:00'),
(6, 24, 'aaaa', 'kjksdjakjskdj', 'avatar.png', 1, '2019-03-20 11:58:54', '0000-00-00 00:00:00'),
(7, 24, 'aaaa', 'kjksdjakjskdj', 'avatar.png', 1, '2019-03-21 09:18:09', '0000-00-00 00:00:00'),
(8, 18, 'Demo', 'Demo blog', 'avatar.png', 1, '2015-04-20 07:40:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tbl`
--

CREATE TABLE `blog_tbl` (
  `title` int(100) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `profilepic` varchar(1000) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_tbl`
--

INSERT INTO `blog_tbl` (`title`, `comment`, `profilepic`, `isactive`, `doi`, `dou`) VALUES
(0, 'ASDFGHJHGFDX', 'avatar.png', 1, '2019-03-20 10:57:53', '0000-00-00 00:00:00'),
(0, 'frth', 'avatar.png', 1, '2019-03-20 10:58:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `business_id` int(11) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `business_location` varchar(100) NOT NULL,
  `company_email` varchar(50) NOT NULL,
  `business_num` int(10) NOT NULL,
  `category_id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `DOI` date NOT NULL DEFAULT current_timestamp(),
  `Isactive` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`business_id`, `owner_name`, `email`, `business_name`, `business_location`, `company_email`, `business_num`, `category_id`, `logo`, `DOI`, `Isactive`) VALUES
(4, 'Test', 'xyz@gmail.com', 'Fellings', 'Panjrapol,Ahmedabad', 'fellings@gmail.com', 1234567890, 10, 'er.png', '2021-03-17', '1'),
(5, 'Example', 'test@gmail.com', 'Tasvir Creation', 'Surat', 'tasvir@gmail.com', 1234567890, 22, 'IMG_20190519_171043.jpg', '2021-03-19', '1'),
(6, 'XYZ', 'radhe@gmail.com', 'Photoshop 19', 'Vastral,Ahmedabad', 'photo19@gmail.com', 987654321, 22, 'IMG-20190811-WA0004.jpg', '2021-03-19', '1'),
(8, 'PRADIP', 'navkgdwg@gmial.com', 'Manan', 'Panjrapol,Ahmedabad', 'navkgdwg@gmial.com', 2147483647, 10, 'IMG-20200211-WA0000.jpg', '2021-03-19', '1'),
(9, 'PRADIP', 'navkgdwg@gmial.com', 'Photoshop ', 'Vastral,Ahmedabad', 'navkgdwg@gmial.com', 2147483647, 22, 'Screenshot (316).png', '2021-03-23', '1');

-- --------------------------------------------------------

--
-- Table structure for table `city_tbl`
--

CREATE TABLE `city_tbl` (
  `id` int(11) NOT NULL,
  `cityname` varchar(100) NOT NULL,
  `sid` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_tbl`
--

INSERT INTO `city_tbl` (`id`, `cityname`, `sid`, `isactive`, `doi`, `dou`) VALUES
(1, 'Ahmedabad', 3, 1, '0000-00-00 00:00:00', '2020-04-21 09:04:36'),
(2, 'Baroda', 3, 1, '0000-00-00 00:00:00', '2020-04-21 09:04:06'),
(3, 'Surat', 3, 1, '0000-00-00 00:00:00', '2020-04-21 09:04:16'),
(4, 'Aanad', 3, 1, '0000-00-00 00:00:00', '2020-04-21 09:04:31'),
(5, 'shrinagar', 7, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'vadodra', 3, 1, '0000-00-00 00:00:00', '2020-04-14 09:04:11'),
(7, 'Ahmedabad', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Ahmedabad', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Ahmedabad', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Bhavnagar', 3, 1, '0000-00-00 00:00:00', '2020-04-14 09:04:40'),
(11, 'Ahmedabad', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Ahmedabad', 3, 2, '0000-00-00 00:00:00', '2020-04-14 09:04:50'),
(13, 'Ahmedabad', 3, 2, '0000-00-00 00:00:00', '2020-04-14 09:04:58'),
(14, 'Ahmedabad', 3, 2, '0000-00-00 00:00:00', '2020-04-14 09:04:06'),
(15, 'surat', 23, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'London', 24, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'udaipur', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'pradip', 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'pradip', 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `con_tbl`
--

CREATE TABLE `con_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contacct` int(15) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `con_tbl`
--

INSERT INTO `con_tbl` (`id`, `name`, `email`, `contacct`, `subject`, `message`, `isactive`, `doi`, `dou`) VALUES
(1, 'pratik', 'pratik@gmail.com', 2147483647, 'PHP', 'aguddgaidhji', 1, '2011-03-20 07:12:45', '0000-00-00 00:00:00'),
(2, 'pradip ', 'pradip@gmail.com', 2147483647, 'error', 'hi your search engine is very good but some time your search engine is dont show the schme or offers i have better idea to develop your search engine ', 1, '2013-03-20 16:44:18', '0000-00-00 00:00:00'),
(3, 'pradip ', 'pradip@gmail.com', 2147483647, 'error', 'hi your search engine is very good but some time your search engine is dont show the schme or offers i have better idea to develop your search engine ', 1, '2013-03-20 16:45:33', '0000-00-00 00:00:00'),
(4, 'pradip', 'admin@gmail.com', 123456789, 'error', 'ASDCFGBHMNBVCX', 1, '2021-04-20 10:48:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dep_tbl`
--

CREATE TABLE `dep_tbl` (
  `id` int(11) NOT NULL,
  `depname` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL DEFAULT current_timestamp(),
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dep_tbl`
--

INSERT INTO `dep_tbl` (`id`, `depname`, `photo`, `isactive`, `doi`, `dou`) VALUES
(1, 'Advertisement Services', 'adver-tise.png', 1, '2021-03-16 08:03:50', '0000-00-00 00:00:00'),
(2, 'Apparel & Clothing', 'apparel-clothing.png', 1, '2021-03-16 08:03:19', '0000-00-00 00:00:00'),
(4, 'Business Services', 'business-services.png', 1, '2021-03-16 08:03:52', '0000-00-00 00:00:00'),
(5, 'Computer & Internet', 'computer.png', 1, '2021-03-16 08:03:08', '0000-00-00 00:00:00'),
(6, 'Construction', 'construction.png', 1, '2021-03-16 08:03:24', '0000-00-00 00:00:00'),
(8, 'Food & Beverage', 'food.png', 1, '2021-03-16 08:03:57', '0000-00-00 00:00:00'),
(9, 'Furniture Manufacturers', 'furnitures.png', 1, '2021-03-16 08:03:25', '0000-00-00 00:00:00'),
(10, 'Gift', 'gift.png', 1, '2021-03-16 08:03:35', '0000-00-00 00:00:00'),
(12, 'Home Supplies', 'home-supply.png', 1, '2021-03-16 08:03:57', '0000-00-00 00:00:00'),
(13, 'Hotel & Restaurant', 'hotel.png', 1, '2021-03-16 08:03:38', '0000-00-00 00:00:00'),
(14, 'Industrial & Machinary', 'industries.png', 1, '2021-03-16 08:03:51', '0000-00-00 00:00:00'),
(15, 'Information Technology', 'information-technology.png', 1, '2021-03-16 08:03:03', '0000-00-00 00:00:00'),
(16, 'Institute', '', 1, '2021-03-16 08:03:10', '0000-00-00 00:00:00'),
(17, 'Packaging & Paper', 'packing.png', 1, '2021-03-16 08:03:24', '0000-00-00 00:00:00'),
(18, 'Real Estate', 'real-estate.png', 1, '2021-03-16 08:03:03', '0000-00-00 00:00:00'),
(19, 'Security Products', 'security.png', 1, '2021-03-16 08:03:14', '0000-00-00 00:00:00'),
(20, 'Services', 'services.png', 1, '2021-03-16 08:03:22', '0000-00-00 00:00:00'),
(21, 'Sports & Entertainment', 'sports.png', 1, '2021-03-16 08:03:35', '0000-00-00 00:00:00'),
(22, 'Studio', 'studio.png', 1, '2021-03-16 08:03:45', '0000-00-00 00:00:00'),
(23, 'Tele Communications', 'telecommunications.png', 1, '2021-03-16 08:03:54', '0000-00-00 00:00:00'),
(24, 'Tools & Equipment', 'tools-equipment.png', 1, '2021-03-16 08:03:06', '0000-00-00 00:00:00'),
(25, 'Tour and Travel', 'tour-travels.png', 1, '2021-03-16 08:03:18', '0000-00-00 00:00:00'),
(26, 'Transportation & Services', 'transport.png', 1, '2021-03-16 08:03:34', '0000-00-00 00:00:00'),
(27, 'Wedding Services', 'wedding-services.png', 1, '2021-03-16 08:03:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `feed_tbl`
--

CREATE TABLE `feed_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `profilepic` varchar(300) NOT NULL,
  `comment` varchar(600) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_tbl`
--

INSERT INTO `feed_tbl` (`id`, `name`, `profilepic`, `comment`, `isactive`, `doi`, `dou`) VALUES
(8, 'rakesh', 'fnpp.jpg', 'hi your search engine is very good for dont konwedlege of govremenr scheme of offers that is very helpfull of the person of searching of particular typew of govremnt scheme or offers', 1, '2013-03-20 16:49:19', '0000-00-00 00:00:00'),
(9, 'rajesh', 'download.jpg', 'hi your search engine is very good for dont konwedlege of govremenr scheme of offers that is very helpfull of the person of searching of particular typew of govremnt scheme or offers', 1, '2013-03-20 16:50:22', '0000-00-00 00:00:00'),
(10, 'dharti', 'Comingsoon1_1-crop.jpg', 'hi your search engine is very good for dont konwedlege of govremenr scheme of offers that is very helpfull of the person of searching of particular typew of govremnt scheme or offers', 1, '2013-03-20 16:50:51', '0000-00-00 00:00:00'),
(11, 'meet', 'fnpp.jpg', 'hi your search engine is very good for dont konwedlege of govremenr scheme of offers that is very helpfull of the person of searching of particular typew of govremnt scheme or offers', 1, '2013-03-20 16:51:17', '0000-00-00 00:00:00'),
(12, 'parvin', 'download.jpg', 'hi your search engine is very good for dont konwedlege of govremenr scheme of offers that is very helpfull of the person of searching of particular typew of govremnt scheme or offers', 1, '2013-03-20 16:51:44', '0000-00-00 00:00:00'),
(13, 'krina', 'Inara Hair & Beauty - Final Logo - Dark.png', 'hi your search engine is very good for dont konwedlege of govremenr scheme of offers that is very helpfull of the person of searching of particular typew of govremnt scheme or offers', 1, '2013-03-20 16:52:11', '0000-00-00 00:00:00'),
(14, 'shivaay', 'download.jpg', 'hi your search engine is very good for dont konwedlege of govremenr scheme of offers that is very helpfull of the person of searching of particular typew of govremnt scheme or offers', 1, '2013-03-20 16:53:16', '0000-00-00 00:00:00'),
(19, 'hello', 'avatar.png', 'hi your search engine is very good', 2, '2016-04-20 16:46:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `review_tbl`
--

CREATE TABLE `review_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `profilepic` varchar(300) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_tbl`
--

INSERT INTO `review_tbl` (`id`, `name`, `email`, `comment`, `profilepic`, `isactive`, `doi`, `dou`) VALUES
(5, 'pradip', 'pradip@gmail.com', 'Gujarat govt. has announced Vahli Dikri Yojana (Dear Daughter Scheme) for girl children of the state. Under this Vahali Dikri Yojana, the state govt. will provide education incentives and Rs. 1 lakh to first and second daughters of family. This one lakh assistance amount would be provided when the girl attains the age of 18 years. People would be able to fill the Vhali Dikari Yojna registration / application form to avail assistance', 'fnpp.jpg', 1, '2016-03-20 08:24:41', '0000-00-00 00:00:00'),
(6, 'meet', 'admin@gmail.com', 'Gujarat govt. has announced Vahli Dikri Yojana (Dear Daughter Scheme) for girl children of the state. Under this Vahali Dikri Yojana, the state govt. will provide education incentives and Rs. 1 lakh to first and second daughters of family. This one lakh assistance amount would be provided when the girl attains the age of 18 years. People would be able to fill the Vhali Dikari Yojna registration / application form to avail assistance', 'avatar.png', 1, '2016-03-20 08:25:12', '0000-00-00 00:00:00'),
(7, 'dharti', 'admin@gmail.com', 'Gujarat govt. has announced Vahli Dikri Yojana (Dear Daughter Scheme) for girl children of the state. Under this Vahali Dikri Yojana, the state govt. will provide education incentives and Rs. 1 lakh to first and second daughters of family. This one lakh assistance amount would be provided when the girl attains the age of 18 years. People would be able to fill the Vhali Dikari Yojna registration / application form to avail assistance', 'avatar.png', 1, '2016-03-20 08:25:31', '0000-00-00 00:00:00'),
(8, 'Demo', 'abc@gmail.com', 'Gujarat govt. has announced Vahli Dikri Yojana (Dear Daughter Scheme) for girl children of the state. Under this Vahali Dikri Yojana, the state govt. will provide education incentives and Rs. 1 lakh to first and second daughters of family. This one lakh assistance amount would be provided when the girl attains the age of 18 years. People would be able to fill the Vhali Dikari Yojna registration / application form to avail assistance', 'male.jpg', 1, '2014-04-20 15:04:29', '0000-00-00 00:00:00'),
(9, 'c, ;c', ';slmcwelm@gmail.com', 'd c, d', 'avatar.png', 1, '2016-01-21 16:21:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `seq_tbl`
--

CREATE TABLE `seq_tbl` (
  `id` int(11) NOT NULL,
  `squestion` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seq_tbl`
--

INSERT INTO `seq_tbl` (`id`, `squestion`, `isactive`, `doi`, `dou`) VALUES
(3, 'In Which State You Born?', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'What Are The Last Four Digits Of Your Mobile Number?', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'What Is Your Favorite country?', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'What Is Your Favorite Food?', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'What Is Your Favorite Color?', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `state_tbl`
--

CREATE TABLE `state_tbl` (
  `id` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_tbl`
--

INSERT INTO `state_tbl` (`id`, `sname`, `isactive`, `doi`, `dou`) VALUES
(1, 'mp', 2, '0000-00-00 00:00:00', '2020-03-05 00:00:00'),
(2, 'Pradip', 2, '0000-00-00 00:00:00', '2020-03-05 00:00:00'),
(3, 'Gujarat', 1, '0000-00-00 00:00:00', '2020-03-05 00:00:00'),
(4, 'MP', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Uttar Pradesh', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Karnataka', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'j&k', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Rajesthan', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Gujarat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Gujarat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Gujarat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Ahmedabad', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Ahmedabad', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Gujarat', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Ahmedabad', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Bihar', 2, '0000-00-00 00:00:00', '2020-03-05 00:00:00'),
(17, 'Goa', 2, '0000-00-00 00:00:00', '2020-03-05 00:00:00'),
(18, 'Jharkhand', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Simla', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Assam', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Haryana', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'mp', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Gujarat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'india', 2, '0000-00-00 00:00:00', '2020-03-05 00:00:00'),
(25, 'Gujarat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Gujarat', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'pradip', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'soni fali', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profilepic` varchar(100) NOT NULL,
  `mobile` int(15) NOT NULL,
  `dob` date NOT NULL,
  `isactive` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `sec_question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `doi` datetime NOT NULL,
  `dou` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `firstname`, `email`, `password`, `profilepic`, `mobile`, `dob`, `isactive`, `user_type`, `sec_question`, `answer`, `doi`, `dou`) VALUES
(9, 'admin', 'admin1234@gmail.com', '12345', 'avatar.png', 0, '0000-00-00', 1, 2, '', '', '2005-03-20 16:37:10', '0000-00-00 00:00:00'),
(17, 'PRADIP', 'radhe@gmail.com', 'admin123', 'avatar.png', 2147483647, '1998-12-22', 1, 1, '', '', '2011-03-20 16:37:21', '0000-00-00 00:00:00'),
(18, 'pravin', 'gopal@gmail.com', '1234', 'avatar.png', 2147483647, '1998-12-22', 1, 1, '6', 'india', '2011-03-20 16:39:41', '0000-00-00 00:00:00'),
(19, 'test45', 'test45@demo.com', '123', 'avatar.png', 1234567886, '2020-03-10', 1, 1, '6', 'india', '2017-03-20 07:53:05', '0000-00-00 00:00:00'),
(20, 'nainesh', 'nainesh1234@gmail.com', '123', 'avatar.png', 1123456777, '0000-00-00', 1, 1, '', '', '2017-03-20 07:53:42', '0000-00-00 00:00:00'),
(21, 'pradip', 'raju@gmail.com', '12345', 'avatar.png', 2147483647, '2020-03-03', 1, 1, '', '', '2017-03-20 07:55:23', '0000-00-00 00:00:00'),
(22, 'aaa', 'aaa@aaa.com', '123456', 'avatar.png', 1234567890, '2018-05-15', 1, 1, '', '', '2017-03-20 08:07:06', '0000-00-00 00:00:00'),
(23, 'chiragsir', 'chiragsir@gmail.com', '123', 'avatar.png', 1234567890, '2020-03-12', 1, 2, '', '', '2017-03-20 08:12:19', '0000-00-00 00:00:00'),
(24, 'creart', 'creart1234@.com', '123', 'avatar.png', 1234567890, '1998-12-31', 1, 1, '', '', '2017-03-20 08:37:48', '0000-00-00 00:00:00'),
(25, 'webdesign', 'web123.com', 'creart', 'avatar.png', 1234567890, '1998-12-10', 1, 1, '', '', '2017-03-20 08:53:59', '0000-00-00 00:00:00'),
(27, 'rakeshprajapati', 'rakeshprajapati800@gmail.com', '17121995', 'download.jpg', 2147483647, '1995-12-12', 1, 1, '', '', '2018-03-20 13:21:16', '0000-00-00 00:00:00'),
(28, 'bb', 'bbb2.com', '123', 'CGTMSELOGO.png', 1234567890, '1997-12-10', 1, 1, '', '', '2018-03-20 13:37:11', '0000-00-00 00:00:00'),
(29, 'POOJA', 'POOJA123@GMAIL.COM', 'pradip', 'avatar.png', 1234567890, '2020-03-11', 1, 1, '', '', '2022-03-20 14:54:35', '0000-00-00 00:00:00'),
(30, 'jigar', 'jigar1234@gmail.com', '123', 'avatar.png', 2147483647, '2020-04-15', 1, 1, '8', 'pizza', '2016-04-20 16:44:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog1_tbl`
--
ALTER TABLE `blog1_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`business_id`);

--
-- Indexes for table `city_tbl`
--
ALTER TABLE `city_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `con_tbl`
--
ALTER TABLE `con_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dep_tbl`
--
ALTER TABLE `dep_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed_tbl`
--
ALTER TABLE `feed_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_tbl`
--
ALTER TABLE `review_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seq_tbl`
--
ALTER TABLE `seq_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_tbl`
--
ALTER TABLE `state_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog1_tbl`
--
ALTER TABLE `blog1_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `business_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city_tbl`
--
ALTER TABLE `city_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `con_tbl`
--
ALTER TABLE `con_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dep_tbl`
--
ALTER TABLE `dep_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `feed_tbl`
--
ALTER TABLE `feed_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `review_tbl`
--
ALTER TABLE `review_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `seq_tbl`
--
ALTER TABLE `seq_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `state_tbl`
--
ALTER TABLE `state_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

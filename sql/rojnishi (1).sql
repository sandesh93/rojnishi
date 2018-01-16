-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2018 at 12:38 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rojnishi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `text` text,
  `date` varchar(10) NOT NULL,
  `username` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`text`, `date`, `username`) VALUES
('<p><em>Hi I am sam</em></p>\r\n', '14-01-18', 'sam'),
('<p>Hi Team</p>\r\n', '14-01-18', 'sandesh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` text NOT NULL,
  `date` text NOT NULL,
  `photo` varchar(40) DEFAULT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstName`, `lastName`, `phone`, `email`, `password`, `date`, `photo`, `username`) VALUES
('Gaurav', 'Rane', 8989898989, 'gaurav@gmail.com', '75fd7b0afabc488468b33cfff8c58bf7', 'January, 14 2018', NULL, ''),
('Milind', 'Mahajan', 8976820452, 'mnmahajan22@gmail.com', 'ed33732dcf137c1b9f3dc29d8e0cf145', '23-july-1993', '6.jpg', 'mills'),
('sam', 'pawar', 8989898990, 'pawar1@gmail.com', 'd6e64ee0274c3b0ac33be7dfc9ba39bd', 'January, 14 2018', '8.png', 'sam'),
('sandesh', 'rane', 9090909090, 'sandesh@gmail.com', '75fd7b0afabc488468b33cfff8c58bf7', 'January, 14 2018', NULL, 'sandesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`username`,`date`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

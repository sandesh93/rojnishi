-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2017 at 03:09 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

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
  `email` varchar(80) NOT NULL,
  `text` text,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`email`, `text`, `date`) VALUES
('c@gmail.com', 'my name is Gaurav ', '25-12-17'),
('c@gmail.com', 'wdaadww', '26-12-17'),
('gauravrane56@gmail.com', 'egthrhtrhtrhtrhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhrghnynjhyttmtmjtyumjytummyumy', '25-12-17'),
('gauravrane56@gmail.com', 'Good Night   ', '26-12-17'),
('mnmahajan22@gmail.com', 'dskdad', '23-12-17'),
('mnmahajan22@gmail.com', '        today is my birthday', '25-12-17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` text NOT NULL,
  `date` text NOT NULL,
  `photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `phone`, `email`, `password`, `date`, `photo`) VALUES
(1, 'sam', 'pawar', 0, 'email@example.com', '25d55ad283aa400af464c76d713c07ad', 'December, 22 2017', NULL),
(2, 'rohit', 'kadam ', 0, 'me.rohitkadam@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'December, 22 2017', NULL),
(3, 'sam', 'pawar', 0, 'a@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'December, 22 2017', NULL),
(4, 'sam', 'pawar', 0, 'b@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'December, 22 2017', NULL),
(5, 'sam', 'pawar', 7208385842, 'c@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'December, 22 2017', NULL),
(6, 'rohit', 'kadam', 9878999999, 'me@gmail.com', '0d73379b8293acea94298db378afffc0', 'December, 22 2017', NULL),
(7, 'Milind', 'mahajan', 8976820457, 'mnmahajan22@gmail.com', 'ed33732dcf137c1b9f3dc29d8e0cf145', 'December, 23 2017', 'milind.jpg'),
(8, 'abc', 'bac', 1234567890, 'ab@mail.com', 'ed33732dcf137c1b9f3dc29d8e0cf145', 'December, 23 2017', NULL),
(9, 'Gaurav', 'Rane', 8976785247, 'gauravrane56@gmail.com', '80c823f4b30877c43b55c94f5af9c09d', 'December, 25 2017', 'gaurav.png'),
(10, 'sam', 'pawar', 7208385842, 'sam@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 'December, 26 2017', 'sam.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`email`,`date`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

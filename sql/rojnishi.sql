-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2017 at 09:38 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `phone`, `email`, `password`, `date`) VALUES
(1, 'sam', 'pawar', 0, 'email@example.com', '25d55ad283aa400af464c76d713c07ad', 'December, 22 2017'),
(2, 'rohit', 'kadam ', 0, 'me.rohitkadam@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'December, 22 2017'),
(3, 'sam', 'pawar', 0, 'a@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'December, 22 2017'),
(4, 'sam', 'pawar', 0, 'b@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'December, 22 2017'),
(5, 'sam', 'pawar', 7208385842, 'c@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'December, 22 2017'),
(6, 'rohit', 'kadam', 9878999999, 'me@gmail.com', '0d73379b8293acea94298db378afffc0', 'December, 22 2017');

--
-- Indexes for dumped tables
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

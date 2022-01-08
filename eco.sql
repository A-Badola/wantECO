-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 08:53 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eco`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `went` text NOT NULL,
  `worked` text NOT NULL,
  `lives` text NOT NULL,
  `belong` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `userid`, `went`, `worked`, `lives`, `belong`) VALUES
(1, 3, 'Cornell', 'Deloitte', 'Delhi ', 'US'),
(2, 5, 'EcoIndia', 'Eco Academy', 'Eco Academy', 'Eco Academy'),
(3, 2, 'Eco', 'Eco Academy', 'Eco Academy', 'Eco Academy'),
(4, 6, 'MSIT', 'Eco Academy', 'Eco Academy', 'Eco Academy');

-- --------------------------------------------------------

--
-- Table structure for table `pledge`
--

CREATE TABLE `pledge` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pledge`
--

INSERT INTO `pledge` (`id`, `userid`, `postid`) VALUES
(0, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` text NOT NULL,
  `post` text NOT NULL,
  `category` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `userid`, `title`, `post`, `category`, `datetime`) VALUES
(1, 1, 'Let\'s Recycle !', 'Let\'s recycle.', 'recycle', '2021-03-28 14:19:19'),
(2, 3, 'Sustainable Web', 'The internet alone contributes a lot of CO2 into the atmosphere . Developers should know and keep in mind about sustainable web design.', 'web Design', '2021-03-28 14:19:19'),
(3, 1, 'Namo Namo', 'We are leading firm in Recycling Sector providing different services to our clients...', 'waste-management,recycle', '2021-03-28 14:19:19'),
(4, 5, 'Eco India Digest', 'Plogging and other fitness communities in Delhi and Pune are coming together to keep their streets free of plastic and garbage.', 'waste-management', '2021-03-28 14:19:19'),
(5, 2, 'Awareness of Sustainability', 'Sustainable Web design is a Must !', 'web Design', '2021-03-28 14:19:19'),
(6, 6, 'Web Developers Watchout !', 'Sustaiinable web design is a must!', 'web Design', '2021-03-28 14:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'abhi', 'abhi@vk.com', '649cb11f0d62c1faa9e2f7f2636b1aeb'),
(2, 'ankit', 'ankit@gm.co', '65c83c8182d3c7af51154432bdba25b7'),
(3, 'sinha', 'sinha@4.co.uk', 'c3ac4c6eeac3b92876b132763f5a89d0'),
(4, 'namoEwaste', 'namo@nam.com', 'd63efa67da93305943a73bc24d0a2d2c'),
(5, 'ecoIndia', 'eco.india@co.in', 'ae765c6c356b86f3d65223104fe861ee'),
(6, 'ankur', 'ankur@g.co', 'e9186daf9ec775bfde3426b9ad93c22e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

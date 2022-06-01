-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 08:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `highlighthd_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

CREATE TABLE `episodes` (
  `id` int(11) NOT NULL,
  `season_no` int(11) NOT NULL,
  `episode_no` int(11) NOT NULL,
  `episode_name` varchar(100) NOT NULL,
  `duration` datetime NOT NULL,
  `video` varchar(200) NOT NULL,
  `episode_description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `popularity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seasons`
--

CREATE TABLE `seasons` (
  `season_no` int(11) NOT NULL,
  `season_name` varchar(100) NOT NULL,
  `total_episodes` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `email_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `country` varchar(30) NOT NULL,
  `profileImage` varchar(255) NOT NULL,
  `subscribed` tinyint(1) NOT NULL,
  `subscriptionDuration` datetime(6) NOT NULL,
  `watchingNow` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `active`, `email_id`, `name`, `password`, `country`, `profileImage`, `subscribed`, `subscriptionDuration`, `watchingNow`) VALUES
(1, 1, 'tester@shaderbytes.com', 'Tester', '1234abcd', 'India', 'some.jpg', 1, '2022-06-20 08:49:24.000000', 0),
(3, 1, 'rocky@gmail.com', 'Rocky singh', '1234', 'INDIA', 'asdasdasd', 1, '2022-05-31 15:54:31.000000', 1),
(7, 1, 'kumarrockey18@gmail.com', 'rockey', '6262', 'INDIA', 'Sima niroula.jpg', 0, '2022-02-21 00:00:00.000000', 0),
(8, 1, 'rohitgupta@gmail.com', 'rohit', '2526', 'USA', 'Files_82064 (1) (1)_edited.jpg', 0, '2022-05-06 00:00:00.000000', 0),
(9, 1, 'chinmay@gmail.com', 'chinmay thakur', '1234', 'India', 'Sima niroula.jpg', 0, '2022-05-20 00:00:00.000000', 0),
(10, 1, 'a@a', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'a', 'Sima niroula.jpg', 0, '2022-05-20 00:00:00.000000', 0),
(11, 1, 'a@a', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'a', 'Sima niroula.jpg', 0, '2022-05-21 00:00:00.000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `carousel_order` int(20) NOT NULL,
  `content_rating` varchar(20) NOT NULL,
  `genres` varchar(20) NOT NULL,
  `is_carousel` tinyint(1) NOT NULL,
  `languages` varchar(20) NOT NULL,
  `poster` varchar(100) NOT NULL,
  `publish_year` int(4) NOT NULL,
  `storyline` varchar(400) NOT NULL,
  `title` varchar(200) NOT NULL,
  `trailer` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `video` varchar(500) NOT NULL,
  `duration` int(30) DEFAULT NULL,
  `seasons` int(10) DEFAULT NULL,
  `view` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `dislike` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `active`, `banner`, `carousel_order`, `content_rating`, `genres`, `is_carousel`, `languages`, `poster`, `publish_year`, `storyline`, `title`, `trailer`, `type`, `video`, `duration`, `seasons`, `view`, `likes`, `dislike`) VALUES
(1, 0, '', 0, '1', 'Action', 0, 'English ', 'images/Thor.jpeg', 2010, 'Avengers Movies', 'Avengers', 'videos/trailer/Official Trailer - She-Hulk- Attorney at Law - Disney+.mp4', 'mp4', 'videos/movie/Official Trailer - She-Hulk- Attorney at Law - Disney+.mp4', 1, NULL, 221, 520, 112);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seasons`
--
ALTER TABLE `seasons`
  ADD PRIMARY KEY (`season_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seasons`
--
ALTER TABLE `seasons`
  MODIFY `season_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 02:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_pharmacy`
--
CREATE DATABASE IF NOT EXISTS `e_pharmacy` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `e_pharmacy`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `Id` int(100) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Ph_no` varchar(500) NOT NULL,
  `DOB` date NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `E-mail` varchar(255) NOT NULL,
  `Profile_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Name`, `Address`, `Gender`, `Ph_no`, `DOB`, `Position`, `Username`, `Password`, `E-mail`, `Profile_pic`) VALUES
(1, 'Rockey Kumar Singh', 'Namchi, Sikkim, India', 'Male', '8578924272', '1999-12-12', 'Full Stack Developer', 'Rockey18', 'root1', 'kumarrckey18@gmail.com', 'media/admin/rockey.jpeg\r\n'),
(2, 'Naresh Kaswan', 'Kolkata, West Bengal, India', 'Male', '6376014708', '2000-07-21', 'Web Designer', 'Naresh18', 'root2', 'nareshkaswan2000@gmail.com', 'media/admin/naresh.jpg'),
(3, 'Abhishek Kumar Kamti', 'madhubani, Bihar, India', 'Male', '9608782032', '2000-07-24', 'Designing Head', 'Abhishek18', 'root3', 'abhishekkamti723@gmail.com', 'media/admin/abhishek.jpeg'),
(4, 'Sinthia Golder', 'Kolkata, West Bengal, India', 'Female', '6291185643', '2001-09-25', 'Web Designer', 'Sinthia18', 'root4', 'sinthiagolder786@gmail.com', 'media/admin/sinthia.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE `appointment` (
  `Id` int(255) NOT NULL,
  `Image` blob NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Dr_name` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Time` date NOT NULL,
  `PDF` blob NOT NULL,
  `issue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Id`, `Image`, `Name`, `Category`, `Dr_name`, `Date`, `Time`, `PDF`, `issue`) VALUES
(1, '', 'rohit', 'dr', 'vijay', '2022-01-14', '2022-01-07', '', 'pain');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

DROP TABLE IF EXISTS `card`;
CREATE TABLE `card` (
  `Name` varchar(255) NOT NULL,
  `Card_no` varchar(255) NOT NULL,
  `Cvv` int(11) NOT NULL,
  `Expire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE `doctor` (
  `Id` int(255) NOT NULL,
  `Profile_pic` blob NOT NULL,
  `Name` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Ph_no` varchar(20) NOT NULL,
  `E-mail` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `License` blob NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Google_Map` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Gender` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Id`, `Profile_pic`, `Name`, `DOB`, `Ph_no`, `E-mail`, `Category`, `License`, `Address`, `Google_Map`, `Password`, `Gender`) VALUES
(1, '', 'Dr.Vijay', '1995-12-04', '', 'vijarcare22@gmail.com', 'Doctor', '', 'Delhi', 'http:www.googlemap.com', 'Vijay123', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `e_category`
--

DROP TABLE IF EXISTS `e_category`;
CREATE TABLE `e_category` (
  `id` int(11) NOT NULL,
  `c_name` varchar(150) NOT NULL,
  `c_tag` varchar(100) NOT NULL,
  `c_img` varchar(100) NOT NULL,
  `c_date` date NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `e_category`
--

INSERT INTO `e_category` (`id`, `c_name`, `c_tag`, `c_img`, `c_date`, `status`) VALUES
(1, 'Covid Care', 'covid-care', 'category_images/covid-care/7232c31ce6d61a09442b34da40377f1ac8b85cbb.png', '2022-06-13', '1'),
(2, 'Diabetes Care', 'diabetes-care', 'category_images/diabetes-care/f285fc0de23aab6e51d1d71c86cbdd9c14aae610.png', '2022-06-13', '1'),
(3, 'Mind Care', 'mind-care', 'category_images/mind-care/3f6298a0fd2f44c0882131518464a730b70787ed.png', '2022-06-14', '1');

-- --------------------------------------------------------

--
-- Table structure for table `e_medicine`
--

DROP TABLE IF EXISTS `e_medicine`;
CREATE TABLE `e_medicine` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_slug` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL,
  `s_price` int(100) NOT NULL,
  `m_price` int(100) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `packaging_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `short_dec` varchar(255) NOT NULL,
  `long_dec` varchar(255) NOT NULL,
  `stock` int(255) NOT NULL,
  `date` date NOT NULL,
  `action` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e_medicine`
--

INSERT INTO `e_medicine` (`id`, `name`, `name_slug`, `image`, `s_price`, `m_price`, `categories`, `packaging_date`, `expiry_date`, `short_dec`, `long_dec`, `stock`, `date`, `action`) VALUES
(22, 'Test Product', 'test-product', 'medicine_images/2022/06/247d618d37d00f061b23174438a0242da4e96d4f.png,medicine_images/2022/06/fe95239aacea1af1eed442e70c4b0360df3cc79a.png,medicine_images/2022/06/bc287ce32d4c6ca32d0932ded8af25ab89b07346.png,medicine_images/2022/06/90357f257cb0a6efe02428f9', 221, 123, 'something', '2022-06-14', '0013-03-21', 'Something', '123', 123, '2022-06-14', '1'),
(23, 'asd', 'asd', 'medicine_images/2022/06/83650f0d07988e67f69f27b54202dabc3fdd0c22.png,medicine_images/2022/06/98def51e050859e5210676bfb71d917e93ffe353.png,medicine_images/2022/06/1fd18105875457c0027b7a201c08df977472c8fe.png,medicine_images/2022/06/cb506a779b9fba0c751a918c', 213, 12312, 'Covid Care,Diabetes Care,Mind Care', '2022-06-20', '2022-06-22', 'asdasd', 'jkhg', 10, '2022-06-14', '1');

-- --------------------------------------------------------

--
-- Table structure for table `e_subscription_user`
--

DROP TABLE IF EXISTS `e_subscription_user`;
CREATE TABLE `e_subscription_user` (
  `sl_subscription_users` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `phone_no` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `password_token` text NOT NULL,
  `password_txt` varchar(100) NOT NULL,
  `token_id` text NOT NULL,
  `token_use` tinyint(1) NOT NULL DEFAULT 0,
  `token_expiry_date` date NOT NULL,
  `landmark` varchar(200) NOT NULL,
  `street_address` varchar(200) NOT NULL,
  `locality` varchar(200) NOT NULL,
  `village` varchar(200) NOT NULL,
  `post_office` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `pin_code` varchar(50) NOT NULL,
  `last_login_datetime` datetime NOT NULL,
  `birth_date` date NOT NULL,
  `admin_id` int(11) NOT NULL,
  `session_value` text NOT NULL,
  `status` enum('ACTIVE','INACTIVE','CANCELLED','EXPIRED') NOT NULL DEFAULT 'ACTIVE',
  `activity_date` date NOT NULL,
  `registration_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `e_users`
--

DROP TABLE IF EXISTS `e_users`;
CREATE TABLE `e_users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_img` varchar(500) DEFAULT NULL,
  `user_secret_id` varchar(200) NOT NULL,
  `user_type` enum('SUPERADMIN','ADMIN','STAFF','DOCTOR','GUEST') DEFAULT 'GUEST',
  `password` varchar(400) NOT NULL,
  `last_login_datetime` datetime DEFAULT NULL,
  `user_register_datetime` datetime NOT NULL,
  `status` enum('1','0') DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `e_users`
--

INSERT INTO `e_users` (`id`, `name`, `mobile`, `email`, `user_name`, `user_img`, `user_secret_id`, `user_type`, `password`, `last_login_datetime`, `user_register_datetime`, `status`) VALUES
(50, 'user', '961444645951', 'admin@dcitsoft.com', 'admin', 'profile_images/admin/cea5780d710ec0c094d7eb8e58e8cffe02cb7019.jpg', 'b9f32509a6d32e93056ac66ef032382ce9a54ec2', 'GUEST', 'd1d86777ef69e86aa2651b9fff86300ddceaf215', '2022-06-01 02:11:21', '2022-05-31 11:09:36', '1'),
(49, 'Naresh kaswan', '9987755654', 'naresh18@gmail.com', 'naresh18', NULL, 'a28457fa7a1223bada4af37ba25988d187503782', 'GUEST', '76d44a046de6fa81696cc2859ed83aac267ac6ce', NULL, '2022-05-31 11:05:32', '1'),
(48, 'Rockey singh', '8578924272', 'kumarrockey18@gmail.com', 'kumarrockey18', NULL, '42eaa9b6bf92cde65299a1e4989d6d49fd846781', 'SUPERADMIN', 'cf2e875d70c402e4aaf32ceb64b1fa6f7396af59', '2022-06-10 11:46:36', '2022-05-31 10:59:12', '1'),
(47, 'Reshav', '9614464594', 'reshav.sahani.9@gmail.com', 'reshav.sahani.9', 'profile_images/reshav.sahani.9/ed8cbff29f40218f71f615afcd373a21e32e0b68.jpg', 'e733e9a3da6a4d6ec8b0cead022fd1cfd5ecbf75', 'SUPERADMIN', 'd1d86777ef69e86aa2651b9fff86300ddceaf215', '2022-06-12 11:06:57', '2022-05-31 09:18:00', '1'),
(51, 'abhisek kamti', '9504323182', 'abhisek@dcitsoft.com', 'abhisek', NULL, '1e74ea973e0274fe72145159551fe6f834a1d37b', 'GUEST', '7c031171466dd3faf66235f48467dcedd40b683a', '2022-05-31 11:11:55', '2022-05-31 11:11:55', '1'),
(52, 'Abhinita Saha', '8617244636', 'abhinita@gmail.com', 'abhinita', NULL, '265ea4af353ba8a39dfc0d52af09a055ca7659d7', 'GUEST', 'f7b9648245b0b34169b8eb3c7e194f0043de4842', '2022-06-01 06:34:44', '2022-06-01 06:33:25', '1'),
(53, 'Rockey Kumar Singh', '+918578924272', 'kumarrockey18@gmail.coma', 'kumarrockey18', '', '38af29f3e1e913f9f1ba9027b128f1fc5768542b', 'GUEST', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL, '2022-06-11 02:41:57', '1'),
(54, 'test', '96144645952', 'test@test.com', 'test', 'profile_images/test/d455735a18c2d01d08096be1833d36df3f9a67e8.jpg', 'a6ad00ac113a19d953efb91820d8788e2263b28a', 'SUPERADMIN', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2022-06-11 02:46:59', '2022-06-11 02:45:25', '1');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `E-mail` varchar(255) NOT NULL,
  `Feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id`, `Name`, `E-mail`, `Feedback`) VALUES
(1, 'Rohit', 'rohitkumar16@gmail.com', 'Know moreabout you.'),
(2, 'Priti', 'pritiverma22@gmail.com', 'dfgdgfjhfghjgf ghvghvgh hffh hggf yfytf   '),
(3, 'Jyoti', 'jyotijha11@gmail.com', 'Excellent develive time!'),
(4, 'Bandana', 'bandanachettri12@gmail.com', 'Just wow service!'),
(5, 'hgfhg', 'hfhgfhgf', 'hfhgfghf'),
(6, 'jhgjhgj', 'jgjhg', 'jgjhg'),
(7, 'gvhgfv', 'jggvjhfg', 'ghfghf'),
(8, 'jfggh', 'jhgjh', 'gfvghfv'),
(9, 'uyytyu', 'asAS', 'fsazsdz'),
(10, 'hgfgh', 'ghgfhg', 'jhgvjhgvh');

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

DROP TABLE IF EXISTS `orderlist`;
CREATE TABLE `orderlist` (
  `Id` int(255) NOT NULL,
  `Image` blob NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`Id`, `Image`, `Name`, `Price`, `Quantity`) VALUES
(1, '', 'joy', 500, 2),
(2, '', 'toy', 185, 3);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

DROP TABLE IF EXISTS `seller`;
CREATE TABLE `seller` (
  `Id` int(255) NOT NULL,
  `Profile_pic` blob NOT NULL,
  `Name` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Ph_no` varchar(20) NOT NULL,
  `License` blob NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Google_Map` varchar(255) NOT NULL,
  `E-mail` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Shop_Pic` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`Id`, `Profile_pic`, `Name`, `DOB`, `Gender`, `Ph_no`, `License`, `Address`, `Google_Map`, `E-mail`, `Password`, `Shop_Pic`) VALUES
(1, '', 'Denesh', '1995-01-28', 'Male', '9632587410', '', 'Gangtok', 'http://www.googlemap.com', 'deneshmed12@gmail.com', 'Denesh123', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `Profile_pic` varchar(500) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Ph_no` varchar(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Profile_pic`, `Name`, `DOB`, `Gender`, `Ph_no`, `Email`, `Password`, `Address`) VALUES
(1, 'media/user/sinthia.jpeg', 'rokey', '1995-01-28', 'm', '8578924272', 'kumarrockey18@gmail.com', 'root1', 'nnn'),
(2, 'pic2', 'naresh', '2001-09-25', 'm', '9987755654', 'naresh18@gmail.com', 'root2', 'kolkata'),
(3, 'pic3', 'Ram', '2001-09-11', 'Male', '9876543210', 'abc@gmail.com', 'root1', 'kolkata'),
(4, 'pic4', 'Rohit', '2000-07-21', 'male', '9987755654', 'xyz@gmail.com', 'root11', 'namchi'),
(6, 'pic', 'Priti', '2001-09-11', 'Female', '8578924272', 'priti@gmail.com', 'root12', 'Gangtok'),
(7, 'pic', 'Joyti', '2001-09-25', 'female', '9987755654', 'joyti@gmail.com', 'root13', 'kolkata');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `e_category`
--
ALTER TABLE `e_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_medicine`
--
ALTER TABLE `e_medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_subscription_user`
--
ALTER TABLE `e_subscription_user`
  ADD PRIMARY KEY (`sl_subscription_users`);

--
-- Indexes for table `e_users`
--
ALTER TABLE `e_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `e_category`
--
ALTER TABLE `e_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `e_medicine`
--
ALTER TABLE `e_medicine`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `e_subscription_user`
--
ALTER TABLE `e_subscription_user`
  MODIFY `sl_subscription_users` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e_users`
--
ALTER TABLE `e_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

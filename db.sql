-- Adminer 3.5.1 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `e_pharmacy`;
CREATE DATABASE `e_pharmacy` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `e_pharmacy`;

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
  `Profile_pic` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `admin` (`Id`, `Name`, `Address`, `Gender`, `Ph_no`, `DOB`, `Position`, `Username`, `Password`, `E-mail`, `Profile_pic`) VALUES
(1,	'Rockey Kumar Singh',	'Namchi, Sikkim, India',	'Male',	'8578924272',	'1999-12-12',	'Full Stack Developer',	'Rockey18',	'root1',	'kumarrckey18@gmail.com',	'media/admin/rockey.jpeg\r\n'),
(2,	'Naresh Kaswan',	'Kolkata, West Bengal, India',	'Male',	'6376014708',	'2000-07-21',	'Web Designer',	'Naresh18',	'root2',	'nareshkaswan2000@gmail.com',	'media/admin/naresh.jpg'),
(3,	'Abhishek Kumar Kamti',	'madhubani, Bihar, India',	'Male',	'9608782032',	'2000-07-24',	'Designing Head',	'Abhishek18',	'root3',	'abhishekkamti723@gmail.com',	'media/admin/abhishek.jpeg'),
(4,	'Sinthia Golder',	'Kolkata, West Bengal, India',	'Female',	'6291185643',	'2001-09-25',	'Web Designer',	'Sinthia18',	'root4',	'sinthiagolder786@gmail.com',	'media/admin/sinthia.jpeg');

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
  `issue` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `appointment` (`Id`, `Image`, `Name`, `Category`, `Dr_name`, `Date`, `Time`, `PDF`, `issue`) VALUES
(1,	'',	'rohit',	'dr',	'vijay',	'2022-01-14',	'2022-01-07',	'',	'pain');

DROP TABLE IF EXISTS `card`;
CREATE TABLE `card` (
  `Name` varchar(255) NOT NULL,
  `Card_no` varchar(255) NOT NULL,
  `Cvv` int(11) NOT NULL,
  `Expire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


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
  `Gender` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `doctor` (`Id`, `Profile_pic`, `Name`, `DOB`, `Ph_no`, `E-mail`, `Category`, `License`, `Address`, `Google_Map`, `Password`, `Gender`) VALUES
(1,	'',	'Dr.Vijay',	'1995-12-04',	'',	'vijarcare22@gmail.com',	'Doctor',	'',	'Delhi',	'http:www.googlemap.com',	'Vijay123',	'Male');

DROP TABLE IF EXISTS `e_subscription_user`;
CREATE TABLE `e_subscription_user` (
  `sl_subscription_users` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `phone_no` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `password_token` text NOT NULL,
  `password_txt` varchar(100) NOT NULL,
  `token_id` text NOT NULL,
  `token_use` tinyint(1) NOT NULL DEFAULT '0',
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
  `registration_date` date NOT NULL,
  PRIMARY KEY (`sl_subscription_users`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `e_users`;
CREATE TABLE `e_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_secret_id` varchar(200) NOT NULL,
  `user_type` enum('SUPERADMIN','ADMIN','STAFF','DOCTOR','GUEST') DEFAULT 'GUEST',
  `password` varchar(400) NOT NULL,
  `last_login_datetime` datetime DEFAULT NULL,
  `user_register_datetime` datetime NOT NULL,
  `status` enum('1','0') DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `e_users` (`id`, `name`, `mobile`, `email`, `user_name`, `user_secret_id`, `user_type`, `password`, `last_login_datetime`, `user_register_datetime`, `status`) VALUES
(50,	'user',	'961444645951',	'admin@dcitsoft.com',	'admin',	'b9f32509a6d32e93056ac66ef032382ce9a54ec2',	'GUEST',	'd1d86777ef69e86aa2651b9fff86300ddceaf215',	'2022-06-01 02:11:21',	'2022-05-31 11:09:36',	'1'),
(49,	'Naresh kaswan',	'9987755654',	'naresh18@gmail.com',	'naresh18',	'a28457fa7a1223bada4af37ba25988d187503782',	'GUEST',	'76d44a046de6fa81696cc2859ed83aac267ac6ce',	NULL,	'2022-05-31 11:05:32',	'1'),
(48,	'Rocky sing',	'8578924272',	'kumarrockey18@gmail.com',	'kumarrockey18',	'42eaa9b6bf92cde65299a1e4989d6d49fd846781',	'GUEST',	'3392dbc932e0c0a3f56caff3ec0bb394ea93424b',	NULL,	'2022-05-31 10:59:12',	'1'),
(47,	'Reshav',	'9614464594',	'reshav.sahani.9@gmail.com',	'reshav.sahani.9',	'e733e9a3da6a4d6ec8b0cead022fd1cfd5ecbf75',	'SUPERADMIN',	'd1d86777ef69e86aa2651b9fff86300ddceaf215',	'2022-06-01 09:59:58',	'2022-05-31 09:18:00',	'1'),
(51,	'abhisek kamti',	'9504323182',	'abhisek@dcitsoft.com',	'abhisek',	'1e74ea973e0274fe72145159551fe6f834a1d37b',	'GUEST',	'7c031171466dd3faf66235f48467dcedd40b683a',	'2022-05-31 11:11:55',	'2022-05-31 11:11:55',	'1'),
(52,	'Abhinita Saha',	'8617244636',	'abhinita@gmail.com',	'abhinita',	'265ea4af353ba8a39dfc0d52af09a055ca7659d7',	'GUEST',	'f7b9648245b0b34169b8eb3c7e194f0043de4842',	'2022-06-01 06:34:44',	'2022-06-01 06:33:25',	'1');

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `E-mail` varchar(255) NOT NULL,
  `Feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `feedback` (`Id`, `Name`, `E-mail`, `Feedback`) VALUES
(1,	'Rohit',	'rohitkumar16@gmail.com',	'Know moreabout you.'),
(2,	'Priti',	'pritiverma22@gmail.com',	'dfgdgfjhfghjgf ghvghvgh hffh hggf yfytf   '),
(3,	'Jyoti',	'jyotijha11@gmail.com',	'Excellent develive time!'),
(4,	'Bandana',	'bandanachettri12@gmail.com',	'Just wow service!'),
(5,	'hgfhg',	'hfhgfhgf',	'hfhgfghf'),
(6,	'jhgjhgj',	'jgjhg',	'jgjhg'),
(7,	'gvhgfv',	'jggvjhfg',	'ghfghf'),
(8,	'jfggh',	'jhgjh',	'gfvghfv'),
(9,	'uyytyu',	'asAS',	'fsazsdz'),
(10,	'hgfgh',	'ghgfhg',	'jhgvjhgvh');

DROP TABLE IF EXISTS `medicine`;
CREATE TABLE `medicine` (
  `Image` varchar(255) NOT NULL,
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Price` int(100) NOT NULL,
  `Cost` int(100) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Packing_date` date NOT NULL,
  `Expire_date` date NOT NULL,
  `Short_dec` varchar(255) NOT NULL,
  `Long_dec` varchar(255) NOT NULL,
  `Stock` int(255) NOT NULL,
  `Action` tinyblob NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `medicine` (`Image`, `Id`, `Name`, `Price`, `Cost`, `Category`, `Packing_date`, `Expire_date`, `Short_dec`, `Long_dec`, `Stock`, `Action`) VALUES
('media/medicine/revital-h-woman-health.webp',	0,	'Revital H Woman',	78,	102,	'Health Care',	'2021-10-09',	'2022-06-18',	'Keeps women physically and mentally active to perform daily chores.',	'Revital H Woman is a specially formulated, complete and balanced supplement for women. Their body has distinct needs and it is important to remember that to stay active.',	9,	''),
('media/medicine/horlicks.webp',	1,	'Horlicks Lite Malt 450',	250,	275,	'Health Care',	'2022-01-01',	'2023-06-14',	'Horlicks Lite is high in fibre.',	'The Horlicks Lite Regular Malt Nutrition Drink Jar of 450 G contains the goodness of malted barley and wheat with zero cholesterol, high protein and no added sugar.',	15,	''),
('media/medicine/horlicks-mothers.webp',	2,	'Horlicks Mother\'S Plus',	175,	193,	'Health Care',	'2021-12-06',	'2023-10-19',	'Horlicks Mother’s Plus Vanilla Drink Refill',	'The mother\'s health and the baby’s growth are both dependent on proper nutrition throughout pregnancy.',	10,	''),
('media/medicine/horlicks-protein-plus.webp',	3,	'Horlicks Protein Plus',	450,	484,	'Health Care',	'2022-01-02',	'2024-06-30',	'Delivers 34g of protein for every 100g of the product.',	'Horlicks Protein+ contains three sources of protein each acting at different speeds, along with a number of other helpful nutrients.',	25,	''),
('media/medicine/zandu.webp',	4,	'Zandu Kesari Jivan',	290,	319,	'Health Care',	'2021-10-15',	'2022-11-26',	'Zandu Kesari Jivan contains Kesar, Moti, Amla and other herbs.',	'Zandu Kesari Jivan is a health supplement created with ayurvedic ingredients to boost your health and immunity.',	8,	''),
('media/medicine/cadbury-bournvita.webp',	5,	'Cadbury Bournvita',	210,	249,	'Health Care',	'2021-09-25',	'2023-05-12',	'It contains essential vitamins, proteins and minerals.',	'Cadbury Bourvita is a malted drink mix that is extremely healthy and tasty at the same time. It contains a unique blend of Vitamin (D, B2, B9, B12), Iron and Calcium.',	50,	''),
('media/medicine/sugar-free.webp',	6,	'Sugar Free Natura',	85,	109,	'Health Care',	'2021-07-10',	'2023-02-17',	'It is ideal for fitness seekers, weight-conscious & diabetic people.',	'Sugar Free Natura is made from sucralose and contains a low-calorie sugar substitute that can be used in cooking, baking and added to various beverages - tea, coffee, ice-tea, ice-coffee, etc.',	9,	''),
('media/medicine/himalaya.webp',	8,	'Himalaya Geriforte Tablets',	96,	114,	'Health Care',	'2021-11-19',	'2023-07-14',	'The Himalaya tablet is known for its antioxidant properties.',	'Himalaya Geriforte tablets, known for their antioxidant properties, have been formulated to improve the immune system.',	2,	''),
('media/medicine/liveasy-wellness-calcium-magnesium-vitamin-d3.webp',	9,	'Liveasy Wellness Calcium',	299,	329,	'Health Care',	'2021-07-16',	'2022-05-14',	'Helps to build strong bones and dental health',	'LivEasy Wellness Calcium D3 Capsules contain calcium, vitamin D3, magnesium and zinc which are crucial for strong bones, joints, muscles & teeth.',	50,	''),
('media/medicine/carbamide-forte-calcium1.webp',	10,	'Liveasy Wellness Multivitamin',	485,	419,	'Health Care',	'2021-10-08',	'2022-04-16',	'Boosts immunity and energy levels',	'Vitamins and Minerals are essential nutrients that our bodies need for healthy functioning.',	30,	''),
('media/medicine/buscogast-stomach-pain.webp',	11,	'Buscogast Stomach Pain',	19,	26,	'Medicine',	'2021-11-26',	'2023-09-21',	'Buscogast Stomach Pain Specialist relieves the stomach from a wide range of day-to-day troubles.',	'Stomach and gut troubles attack us when we least expect them. Buscogast Stomach Pain Specialist works by relieving stomach troubles.',	4,	''),
('media/medicine/omved-multipurpose-pain-relief.webp',	12,	'Omved Multipurpose Pain Relief',	1059,	1290,	'Medicine',	'2022-01-08',	'2023-02-25',	'100% Natural, external herbal therapy',	'A 100% natural, flexible, hot and cold pack that revives the Ayurvedic tradition of herbal healing, to give you instant relief from rheumatic pain, neural pain.',	51,	''),
('media/medicine/saridon-headache-relief.webp',	13,	'Saridon Headache Relief',	25,	36,	'Medicine',	'2021-12-31',	'2022-10-06',	'Headache',	'Saridon tablets are usually used for headache relief. This tablet acts as a mild analgesic medicine that is primarily used as a pain reliever. ',	4,	''),
('media/medicine/vicks-vaporub-110m.webp',	14,	'Vicks Vaporub 110ml',	199,	222,	'Medicine',	'2021-12-18',	'2023-04-15',	'Headache',	'Vicks VapoRub is a solution to easing symptoms of cough and cold, providing relief when you need it. ',	13,	''),
('media/medicine/nu-bph-strip.webp',	15,	'Nu Bph Strip',	310,	329,	'Medicine',	'2022-01-07',	'2023-07-14',	'bp',	'Use incase of Blood Pressure.',	84,	''),
('media/medicine/dr-reckeweg.webp',	17,	'Dr Reckeweg R 85',	184,	202,	'Medicine',	'2021-09-25',	'2022-08-19',	'bp',	'Use incase of Blood Pressure.',	7,	''),
('media/medicine/digene-.webp',	18,	'Digene Acidity & Gas',	13,	16,	'Medicine',	'2021-10-09',	'2022-12-23',	'gas',	'Digene acidity and gas relief tablet provides quick relief from stomach ache and abdominal cramps as a result of acidity and gas formation.',	5,	''),
('media/medicine/digene-gel-acidity-gas.webp',	19,	'Digene Gel Acidity',	95,	107,	'Medicine',	'2021-11-13',	'2022-11-04',	'gas',	'The eating habits and lifestyle people follow these days have made acidity and gas very common problems.',	24,	''),
('media/medicine/allen_a33_fever_drops.jpg',	20,	'Allen A33 Fever Drops',	211,	245,	'Medicine',	'2021-09-25',	'2022-12-30',	'fever',	'Use incase of High fever.',	34,	''),
('media/medicine/dolo_650mg_tablet_15_s_0.jpg',	21,	'Dolo 650mg Tablet 15\'S',	19,	24,	'Medicine',	'2021-11-27',	'2023-04-01',	'fever',	'DOLO 650MG contains Paracetamol which belongs to a group of medicines called analgesic and antipyretics',	42,	'');

DROP TABLE IF EXISTS `orderlist`;
CREATE TABLE `orderlist` (
  `Id` int(255) NOT NULL,
  `Image` blob NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `orderlist` (`Id`, `Image`, `Name`, `Price`, `Quantity`) VALUES
(1,	'',	'joy',	500,	2),
(2,	'',	'toy',	185,	3);

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
  `Shop_Pic` blob NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `seller` (`Id`, `Profile_pic`, `Name`, `DOB`, `Gender`, `Ph_no`, `License`, `Address`, `Google_Map`, `E-mail`, `Password`, `Shop_Pic`) VALUES
(1,	'',	'Denesh',	'1995-01-28',	'Male',	'9632587410',	'',	'Gangtok',	'http://www.googlemap.com',	'deneshmed12@gmail.com',	'Denesh123',	'');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Profile_pic` varchar(500) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Ph_no` varchar(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `Profile_pic`, `Name`, `DOB`, `Gender`, `Ph_no`, `Email`, `Password`, `Address`) VALUES
(1,	'media/user/sinthia.jpeg',	'rokey',	'1995-01-28',	'm',	'8578924272',	'kumarrockey18@gmail.com',	'root1',	'nnn'),
(2,	'pic2',	'naresh',	'2001-09-25',	'm',	'9987755654',	'naresh18@gmail.com',	'root2',	'kolkata'),
(3,	'pic3',	'Ram',	'2001-09-11',	'Male',	'9876543210',	'abc@gmail.com',	'root1',	'kolkata'),
(4,	'pic4',	'Rohit',	'2000-07-21',	'male',	'9987755654',	'xyz@gmail.com',	'root11',	'namchi'),
(6,	'pic',	'Priti',	'2001-09-11',	'Female',	'8578924272',	'priti@gmail.com',	'root12',	'Gangtok'),
(7,	'pic',	'Joyti',	'2001-09-25',	'female',	'9987755654',	'joyti@gmail.com',	'root13',	'kolkata');

-- 2022-06-02 00:14:31
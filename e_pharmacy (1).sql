-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 04:28 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

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

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

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
(3, 'Mind Care', 'mind-care', 'category_images/mind-care/3f6298a0fd2f44c0882131518464a730b70787ed.png', '2022-06-14', '1'),
(4, 'Liver Care', 'liver-care', 'category_images/liver-care/a907276ef8dd8fc16dcf4ff8026b41c5b81e5f52.png', '2022-06-14', '1'),
(5, 'Cardiac', 'cardiac', 'category_images/cardiac/e6ade70e5cdd65727eeaecb1541655ac2f2fa412.png', '2022-06-14', '1'),
(6, 'Pain Relife', 'pain-relife', 'category_images/pain-relife/d264fa8579304adb0b34734bbe30de29cdb121e3.png', '2022-06-14', '1'),
(7, 'Oral Care', 'oral-care', 'category_images/oral-care/f77aee350cb0242c6b12aedcd437dc321544761e.png', '2022-06-14', '1'),
(8, 'Respiratory', 'respiratory', 'category_images/respiratory/d4c604005463b94a5e5a372fcac96d614077a8c0.png', '2022-06-14', '1'),
(9, 'Cold & Immunity', 'cold-&-immunity', 'category_images/cold-&-immunity/1046e1b8995d355fd25475b5f8cfcff6ee8facf3.png', '2022-06-14', '1'),
(10, 'Stomach Care', 'stomach-care', 'category_images/stomach-care/90357f257cb0a6efe02428f9d94ac0f9474aafe6.png', '2022-06-14', '1'),
(11, 'Sexual Health', 'sexual-health', 'category_images/sexual-health/3bb164240a7b9325719e2939607e341fd14f9c4d.png', '2022-06-14', '1'),
(12, 'Eye & Eat Care', 'eye-&-eat-care', 'category_images/eye-&-eat-care/232bfdc77458b4ec72bcd55a6ee153c89d643460.png', '2022-06-14', '1'),
(13, 'Elderly Care', 'elderly-care', 'category_images/elderly-care/247d618d37d00f061b23174438a0242da4e96d4f.png', '2022-06-14', '1');

-- --------------------------------------------------------

--
-- Table structure for table `e_medicine`
--

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
(25, 'Accusure Hot & Cold Pack', 'accusure-hot-&-cold-pack', 'medicine_images/2022/06/3682a8b3e7fcd1d4d8564f7dc36a0c118d57b060.jpg,medicine_images/2022/06/f28f3242ab21a6a5e4ffcb60d0134c507e05efa2.jpg,medicine_images/2022/06/e8f8a924796c7f3f376c5c11233abe4d4c63970d.jpg', 569, 455, 'Covid Care', '2022-02-03', '2023-03-08', 'Covid', 'The Accusure Hot & Cold Pack helps relieve swelling, sore muscles, discomfort, and body stiffness using hot and cold therapy. By reducing blood flow, cold therapy lowers inflammation. Heat therapy relaxes the muscles and improves blood flow. Its uniform c', 8, '2022-06-14', '1'),
(26, 'Cofsils Orange Lozenges Strip Of 10', 'cofsils-orange-lozenges-strip-of-10', 'medicine_images/2022/06/4a55d4f57feb5fc206b4c85e884d8ebe4a61152e.jpg,medicine_images/2022/06/cfdd7d9fa1178d960b64445194b98ba53266e11d.jpg,medicine_images/2022/06/fb567939039b3decf72f7613085c0227672abbee.jpg', 30, 22, 'Covid Care', '2022-03-19', '2022-11-12', 'Covid', 'Cofsil orange cold & cough lozenges as the name suggests is a lozenge that can help a person gain relief from symptoms of cold and cough. Throat irritation and congestion is one of the most common symptoms of common cough and cold. Cofsil orange cold & co', 25, '2022-06-14', '1'),
(24, 'Mylab CoviSelf COVID-19 Rapid Antigen Self Test Kit, 1 Count', 'mylab-coviself-covid-19-rapid-antigen-self-test-kit,-1-count', 'medicine_images/2022/06/3807540559bbc8f98516c88bb7381ac1c1a84bdb.png', 212, 190, 'Covid Care', '2021-08-21', '2023-03-17', 'Covid', 'Mylab CoviSelf COVID-19 Rapid Antigen Self Test Kit is designed to assist you in taking a safe rapid antigen test easily at the comfort of your home. Get your and your family’s immediate COVID-19-19 Rapid Antigen test done quickly and hassle-free with thi', 15, '2022-06-14', '1'),
(27, 'Dr Morepen Digital Mt 222 Thermometer', 'dr-morepen-digital-mt-222-thermometer', 'medicine_images/2022/06/f00533f408c429483a4a004b0a4f29951bbdedb6.jpg,medicine_images/2022/06/180fc49cd214da6f878eb5591463f1414aaa9c87.jpg,medicine_images/2022/06/87999c45fd59a80125f4bca779e499edf529f681.jpg', 177, 135, 'Covid Care', '2022-02-19', '2024-11-28', 'Covid', 'Dr Morepen is an innovative company with extensive facilities and factories managed by a dedicated team of professionals who ensure stringent quality standards. Their products are exported to several countries around the globe. The wellness products inclu', 22, '2022-06-14', '1'),
(28, 'Swadeshi Covid Immunity Shield Combo Pack of Ayush Kwath Drops 30ml', 'swadeshi-covid-immunity-shield-combo-pack-of-ayush-kwath-drops-30ml', 'medicine_images/2022/06/b1a04ec3d0649d45e52d0d4db1096104861973a9.jpg', 350, 256, 'Covid Care', '2022-05-27', '2022-10-14', 'Covid', 'Swadeshi Covid Immunity Shield Combo Pack comprises Ayush Kwath drops, Tulsi drops, Haldi drops with Digstv Amla sweet candy. This pack is good to boost immunity and increase the body’s capacity to fight against infections and diseases. Not only do these ', 15, '2022-06-14', '1'),
(29, 'Care View 3 Ply Premium Disposable Protective Surgical Face Mask', 'care-view-3-ply-premium-disposable-protective-surgical-face-mask', 'medicine_images/2022/06/68b945783811b5daa256d4b1946109a20b468e6e.jpg,medicine_images/2022/06/0bd98ae770cc4c836666a3e36c4d7720bcabd0ee.jpg,medicine_images/2022/06/54622b3a23ca91c171d174d71e2e16ff97d15840.jpg', 556, 455, 'Covid Care', '2022-03-11', '2022-12-01', 'Covid', 'Care View 3 Ply Premium Disposable Protective Surgical Face Mask with Ear Loops Blue mask with nose pin are tri-folded masks that stretch down to cover the face from the nose to beneath the chin with a snug, secure fit. A high-density nanofibre layer is e', 105, '2022-06-15', '1'),
(30, 'Leseptic Handrub', 'leseptic-handrub', 'medicine_images/2022/06/a78a450e7275eb6fc869aef55fe23be75686d744.jpg,medicine_images/2022/06/f99f47dd6ba1e6af4b83a8ca0f5c2a81a62f4382.jpg,medicine_images/2022/06/dab2b478fbbc53cfcf3f13c8d6270f4b3a41b973.jpg,medicine_images/2022/06/09d3fe589946d944156e29ce', 225, 165, 'Covid Care', '2022-03-31', '2023-04-20', 'Covid', 'Leseptic Handrub has an internationally recognized formulation that has proven effective against the COVID virus and is recommended by WHO for effective germ protection and disinfection. It contains Chlorhexidine with Ethnol antiseptic, which cleans your ', 30, '2022-06-15', '1'),
(31, 'CoviFind Covid 19 Antigen Self Test Kit', 'covifind-covid-19-antigen-self-test-kit', 'medicine_images/2022/06/a63b00d3eec36e907a304670aafe1b08341d60e3.jpg,medicine_images/2022/06/d4be93e34528e081d4801fd1b5286023ffe882a2.jpg,medicine_images/2022/06/cf65bce808724a075426f4e79f2dbb71a4438d64.jpg', 208, 195, 'Covid Care', '2022-05-13', '2023-02-09', 'Covid', 'CoviFind Covid 19 Antigen Self Test is an in-vitro diagnostics immunochromatographic rapid test kit, specially crafted for the qualitative detection of Sars-Cov 2 specific antigen in nasal swab specimens from symptomatic and asymptomatic individuals.', 20, '2022-06-15', '1'),
(32, 'Alpine Biomedicals Covid 19 Rapid Antigen Test Kit', 'alpine-biomedicals-covid-19-rapid-antigen-test-kit', 'medicine_images/2022/06/529a769f1aa9c205aab8bbf1f736c3458a0de5e6.jpg,medicine_images/2022/06/73ccc9012cf04ee8ab086bc43326e38f4d1ddfbf.jpg,medicine_images/2022/06/f9c46e0dafeeb9b9d7ce700b95db1d6a1f2a4be3.jpg', 249, 201, 'Covid Care', '2022-04-07', '2023-12-19', 'Covid', 'The novel coronaviruses belong to the β genus. COVID-19 is an acute respiratory infectious disease. People are generally susceptible. Currently, the patients infected by the novel coronavirus are the primary source of infection; asymptomatic infected peop', 5, '2022-06-15', '1'),
(33, 'Clensta Covid 19 Protection Lotion', 'clensta-covid-19-protection-lotion', 'medicine_images/2022/06/557edb4f60515911659faaef31b9d7d4f6df1e45.png,medicine_images/2022/06/d9fbe0b80618aaaaa53ef4e2b389917c04608d40.jpg', 292, 154, '', '2022-03-05', '2023-06-14', 'Covid', 'The deep moisture serum formula gives you long-lasting moisturised skin. This lotion is enriched with the moisturising goodness of aloe vera gel and olive oil. These natural ingredients improve skin quality and enhance the skin keeping it hydrated for lon', 20, '2022-06-15', '1'),
(34, 'Dr Morepen Gluco One BG 03 Blood Glucose Test Strip', 'dr-morepen-gluco-one-bg-03-blood-glucose-test-strip', 'medicine_images/2022/06/4a7611e4fbd8b070bcc16dc90bb86ac098aad756.jpg,medicine_images/2022/06/e3dd3a284589f35003bfd6fa598025c9b34ebea4.jpg,medicine_images/2022/06/42ae87ae136f3cfd920a64c1f1623f0aecd8ee06.jpg', 611, 512, 'Diabetes Care', '2022-03-12', '2023-04-21', 'Diabetes', 'These test strips help to measure the concentration of glucose in the blood. It acts as a reliable and convenient self-testing method when used along with a blood glucose monitor. All you need to do is prick your finger and put a drop or two on the test s', 102, '2022-06-15', '1'),
(35, 'Sugar Free Gold Low Calorie Sweetener', 'sugar-free-gold-low-calorie-sweetener', 'medicine_images/2022/06/c4ecaad34e4deecfa50a8c2ed18a79ff6d187cdb.jpg,medicine_images/2022/06/7f53f3229c7089c9f8f8361d6b4be68974f34091.jpg,medicine_images/2022/06/9c91f7c9a1cf3fe3c52e6c4545ec743914561c30.jpg', 265, 211, 'Diabetes Care', '2022-05-13', '2023-10-13', 'Diabetes', 'Sugar-Free Gold is your healthier alternative to sugar. It is made from Aspartame, a protein derivative. It is a nutritious, safe and ideal low-calorie sugar substitute, giving you the sweetness and taste of sugar but with negligible calories to worry abo', 205, '2022-06-15', '1'),
(36, 'Ensure Diabetes Care Vanilla Delight Powder', 'ensure-diabetes-care-vanilla-delight-powder', 'medicine_images/2022/06/f18b57d91a36369389dc89493f270ab36afef2ea.jpg,medicine_images/2022/06/954cac8a150637e4f9d4907189c6492bf0eb19da.jpg,medicine_images/2022/06/a7869b3039f13854690bad560905e0f7bb68a97a.jpg,medicine_images/2022/06/46fe91b6800edbcc0ed65e95', 696, 550, 'Diabetes Care', '2022-06-08', '2024-01-18', 'Diabetes', 'Ensure Diabetes Care Powder is diabetes-specific nutrition for diabetic patients. The Ensure powder for diabetics is scientifically formulated with slow-release energy system to help manage blood glucose levels and support weight management. The Ensure Di', 100, '2022-06-15', '1'),
(37, 'Dabur Chyawanprakash Sugarfree', 'dabur-chyawanprakash-sugarfree', 'medicine_images/2022/06/8c84fe1cdc14a6ff9c0ca6be04941f228e1c950c.jpg,medicine_images/2022/06/e4dadc0813dca6de6dc842b41678a23ba2ed976d.jpg,medicine_images/2022/06/00ce7e1b668b19ca93d07a81bf495d1de17245a3.jpg,medicine_images/2022/06/3954481908da8b71ce5a1b12', 223, 195, 'Diabetes Care', '2022-05-20', '2023-06-06', 'Diabetes', 'Dabur Chyawanprakash Sugar Free is a sugar free immunity development product designed for patients suffering from diabetes. This sugar free Chyawanprash improves the body&#39;s energy levels and strengthens the immune system. As a result, regular ailments', 500, '2022-06-15', '1'),
(38, 'Dr Morepen Combo of BP02 Blood Pressure Monitor and BG03 Glucose Check Monitor', 'dr-morepen-combo-of-bp02-blood-pressure-monitor-and-bg03-glucose-check-monitor', 'medicine_images/2022/06/ad22d931fa123aad94d06d927784d3590a286c0a.jpg,medicine_images/2022/06/e6f50c8ac5a5d65ba63d172ce39ce8729c2f17c1.jpg,medicine_images/2022/06/70bde1e94f17c5f8bef737362469bbd578f21700.jpg', 1781, 1450, 'Diabetes Care', '2022-04-08', '2023-05-12', 'Diabetes', 'Dr. Morepen BP02 Blood Pressure Monitor: It is a fully automatic, digital blood pressure measuring device. It enables a very fast and reliable measurement of the systolic and diastolic blood pressure as well as the pulse frequency by using the oscillometr', 15, '2022-06-15', '1'),
(39, 'Bagrry&#39;s Crunchy No Added Sugar Muesli', 'bagrry&#39;s-crunchy-no-added-sugar-muesli', 'medicine_images/2022/06/53f5c83ed6ee893e5fdd958762e9fc583abb2b69.jpg,medicine_images/2022/06/4fc394712d1581a4f74b4511b1036ef8ba547ae9.jpg,medicine_images/2022/06/c0672e0361af0aa7d6f8035637e68c612c26c491.jpg', 559, 495, 'Diabetes Care', '2022-06-04', '2023-04-14', 'Diabetes', 'Bagrry&#39;s Crunchy Muesli No Added Sugar is a diet-friendly product. This consists of a lot of oats and fibre. It is suitable for those who want to lose weight and stay healthy. It is made with natural whole grains enriched with bran and blended with li', 100, '2022-06-15', '1'),
(40, 'So Sweet Stevia Sugar Free Tablet', 'so-sweet-stevia-sugar-free-tablet', 'medicine_images/2022/06/a94e9be362ff2162dd237ea15b5671eadb3e45d0.jpg,medicine_images/2022/06/f04b6026c50281cf8a9723f3c9df3b8de66c59b7.jpg,medicine_images/2022/06/9ff4371169228dfbb891b9ffcd8b762bd8ea4d63.jpg,medicine_images/2022/06/6bbcac92f0afff6fb3c2c28f', 374, 301, 'Diabetes Care', '2022-05-19', '2023-05-11', 'Diabetes', 'So Sweet Stevia Tablet contains 100% herbal, natural calorie free sugar substance which is extracted from the leaves of a shrub, known as Stevia. \r\n1 Tablet (0 calories) is equivalent in sweetness to 1 teaspoon of sugar.', 8, '2022-06-15', '1'),
(41, 'Himalaya Diabecon Tablet', 'himalaya-diabecon-tablet', 'medicine_images/2022/06/dad82dde008c397377376d8d89c031ccd6d96340.jpg,medicine_images/2022/06/b741180355f2130a7c0f729753c8195169b41388.jpg,medicine_images/2022/06/2e1eedbf8ccb5997d69c2bd0d2bbc9b23c4f16fc.jpg', 124, 99, 'Diabetes Care', '2022-04-01', '2023-02-08', 'Diabetes', 'Diabecon is a phytopharmaceutical formulation for the effective management of type II diabetes.\r\nThe natural ingredients in Diabecon increase insulin secretion in the body. By reducing the glycated hemoglobin level (form of hemoglobin used to measure gluc', 165, '2022-06-15', '1'),
(42, 'Colgate Toothpaste for Diabetics with Madhunashini and Jamun Seed Extracts', 'colgate-toothpaste-for-diabetics-with-madhunashini-and-jamun-seed-extracts', 'medicine_images/2022/06/49ee66a2acd212877e7d872d20647b4434c30bd0.jpg,medicine_images/2022/06/11aa301419d5c183cf6ed9dae7f558a90b686197.jpg,medicine_images/2022/06/9383c3089898ee692a93eb4d436c8971dc9ac652.jpg', 142, 95, 'Diabetes Care', '2022-04-07', '2023-04-11', 'Diabetes', 'Colgate Toothpaste for Diabetics, An Advanced Ayurvedic Solution Toothpaste is a specialized toothpaste for diabetic people which helps to fight gum infection. Colgate worked with the best Dentists, Diabetologists and Ayurvedic experts to give you the rig', 651, '2022-06-15', '1'),
(43, 'Vitaqten Tablet', 'vitaqten-tablet', 'medicine_images/2022/06/97a2d5402bde9144c5e204c29c089f05551fccc1.jpg,medicine_images/2022/06/6083dd3460a9671e4a9afcf7ebdf09a5c36b0de7.jpeg,medicine_images/2022/06/d6e47d6d3d9284e7131adff32ed297833aa60b2b.jpg', 464, 402, 'Diabetes Care', '2022-05-20', '2023-06-09', 'Diabetes', 'Vitaqten Tablet contains Co- enzyme Q10, Lycopene, Natural Mixed carotenoids, Methylcobalamin, Biotin, Zinc, and Folic Acid as active ingredients.', 130, '2022-06-15', '1'),
(44, 'Natural Mind Care 500mg Veg Capsule', 'natural-mind-care-500mg-veg-capsule', 'medicine_images/2022/06/ae3778895a318b0de6c0d7dc79ab3e6496cd7970.jpg,medicine_images/2022/06/8f27cf54e0a8361bae0a5ba3a34b383ca7252af3.jpg,medicine_images/2022/06/9c46db7d623611e46bc2460386022f0a404340c8.jpg', 449, 958, 'Mind Care', '2022-02-18', '2023-07-13', 'Mind Care', 'Valeriana wallichii, Indian Valerian, Mushkbala, Sugandhabala, Kalanusari, Kalanusarika, Nata, Paduka, Ganthoda, Tagar Gantho, Ghodawaj, Mandibattal, Mandyavanthu, Mandibattalu, Thakaram, Ganthode, Tagarapaduka, Jalashiuli, Mushkobala, Tagarai, Grandhi Ta', 26, '2022-06-15', '1'),
(45, 'Palmiges Capsule', 'palmiges-capsule', 'medicine_images/2022/06/f5d7ff82fba0c362606eae171e69fa5a6db48a6f.jpg,medicine_images/2022/06/ad207cb1def5227ecbd02623d9875587b26b6033.jpg,medicine_images/2022/06/1ff181fccb35a001b5495470041f9e57538ac093.jpg', 256, 203, 'Mind Care', '2022-05-12', '2023-05-06', 'Mind Care', 'Palmiges Capsule is a nutraceutical capsule that helps to maintain nerve health. It regulates the neuropathic pain with minimal side effects.\r\nKey Ingredients:\r\nPalmitoylethanolamine\r\nGenistein\r\nDaidzein', 102, '2022-06-15', '1'),
(46, 'Himalaya Wellness Pure Herbs Ashvagandha Tablet', 'himalaya-wellness-pure-herbs-ashvagandha-tablet', 'medicine_images/2022/06/9aa49848f351e7c26ca316efe3b4574ed0bc3619.jpg,medicine_images/2022/06/4c7a6583e66e06ae804d26efa08e77d569bd8153.jpg,medicine_images/2022/06/8a37d1ec0b63fde6a7342ad346203d42fb8a7088.jpg', 158, 129, 'Mind Care', '2022-02-11', '2023-06-03', 'Mind Care', 'Himalaya Pure Herb Ashvagandha Tablet acts as a rejuvenating tonic. It is known for its immunomodulatory and inflammation-reducing properties, which help to fight against infections. Ashvagandha improves the overall capacity of the body to fight infection', 112, '2022-06-15', '1'),
(47, 'Zandu Quick Relief Roll-On', 'zandu-quick-relief-roll-on', 'medicine_images/2022/06/35ed3dba4c2cc6075a7d1bf01b8256a9c50d514c.jpg,medicine_images/2022/06/55f9ece741a05ad5d78682d936c6691b24fcdefb.png,medicine_images/2022/06/aeeb3e255565eff18e1abc3ec39ff3c561b6195d.jpg', 48, 41, 'Mind Care', '2022-04-01', '2023-05-12', 'Mind Care', 'Zandu Quick Relief Roll-On comes from the house of Zandu to provide relief in the case of headache. Its combination of Eucalyptus and Menthol gives fast, easy and convenient headache relief. One can carry this headache relief in their pocket.', 230, '2022-06-15', '1'),
(48, 'Navratna Cool Ayurvedic Oil', 'navratna-cool-ayurvedic-oil', 'medicine_images/2022/06/f71f0f291819af51a2094f88a830a0f1f43222b3.jpg,medicine_images/2022/06/c05bb79374583f6b5335451bbcd415591db7835f.jpg,medicine_images/2022/06/b5f375bc80e0ad399b69a987743728152c31b588.png', 79, 56, 'Mind Care', '2022-06-14', '2023-03-31', 'Mind Care', 'Navratna Oil is a multi-benefit cooling oil that is enriched with herbal extracts. It is used for head and body massage and is effective for both men and women. A massage with Navratna oil relaxes the muscles. It imparts a cooling effect on the scalp and ', 1002, '2022-06-15', '1'),
(49, 'Dr. Morepen Omega 3 Triple Strength 1250mg Deep Sea Fish Oil with DHA & EPA 900mg Softgel', 'dr.-morepen-omega-3-triple-strength-1250mg-deep-sea-fish-oil-with-dha-&-epa-900mg-softgel', 'medicine_images/2022/06/a8e5806a13e6d9d33e86e17a8be50f140832e24d.jpg,medicine_images/2022/06/d60062947f5dc40f2f486db16e14174fa28e8e50.jpg,medicine_images/2022/06/d45be9913f7d705408e394f4c3b63ab3d53693a3.jpg,medicine_images/2022/06/91c01a9a886d6dbb8c9c231d', 802, 745, 'Mind Care', '2022-05-30', '2023-03-31', 'Mind Care', 'Dr. Morepen Omega 3 Deep Sea Fish Oil Triple Strength Softgel brings to you, the richness of Omega-3 derived from nature backed by science in the form of OMEGA-3 Deep Sea Fish Oil (Triple Strength). This is made with ultrapure Peruvian anchovy fish from t', 502, '2022-06-15', '1'),
(50, 'Melatonin 10mg Vegetarian Capsule for Calm & Restful Sleep', 'melatonin-10mg-vegetarian-capsule-for-calm-&-restful-sleep', 'medicine_images/2022/06/a73d6867ea286d749475aa18b9211d5715d0d44f.jpg,medicine_images/2022/06/912cefe9688775b4e610f7065ff2b511275e4a0e.jpg', 255, 199, 'Mind Care', '2022-06-03', '2022-12-17', 'Mind Care', 'Melatonin Capsules contain Tagar (Valerian), L-theanine, Chamomile and other natural herbs with vitamin B6. It is beneficial for calm and restful sleep and regulates the sleep-wake cycle. When combined with L-theanine and valerian extract, Melatonin helps', 20, '2022-06-15', '1'),
(51, 'Patanjali Ayurveda Ashvagandha Capsule', 'patanjali-ayurveda-ashvagandha-capsule', 'medicine_images/2022/06/25b33b5b6c21adc77a60c516baf380296c09d6b5.jpg,medicine_images/2022/06/200dc23b0d3d260e9c2b3a044e059fa176b967e1.jpg,medicine_images/2022/06/d95a29679574d5eab578f334f756215bce3ce752.jpg', 88, 69, 'Mind Care', '2022-06-03', '2023-06-02', 'Mind Care', 'Patanjali Ashwagandha capsule is a combination of Ashwagandha herbs that help to increase your energy. Ashwagandha is a traditional herb that has been used to increase brain power. It is a natural tonic for overall improvement of the health.\r\nAshwagandha ', 30, '2022-06-15', '1'),
(52, 'SBL Sleeptite Tablet', 'sbl-sleeptite-tablet', 'medicine_images/2022/06/cbb851c879e2c1eb77c70d6eee8d81d5f37902f0.jpg,medicine_images/2022/06/5f7efee72533de40e250cdcfc0363764e6112eb8.jpg,medicine_images/2022/06/25b83f858db215e57fca3b53671228f28e40d8ff.jpg', 135, 101, 'Mind Care', '2022-05-13', '2023-05-12', 'Mind Care', 'SBL Sleeptite Tablet relaxes the mind and facilitates sound sleep. It helps in treating insomnia which is a perception or complaint of inadequate or poor-quality sleep, which may be characterised by difficulty falling asleep, waking up frequently during t', 201, '2022-06-15', '1'),
(53, 'Sri Sri Tattva Narayana Kalpa 500mg Tablet', 'sri-sri-tattva-narayana-kalpa-500mg-tablet', 'medicine_images/2022/06/d1f942e8d9286b8fce5a7a19ea4e0eb3717ef154.jpg,medicine_images/2022/06/a6f55bb1842af658632ba04efaf5a0c4d6e07f2f.jpg,medicine_images/2022/06/c7b4e5b69341e722746b7400264279481af46f62.jpg', 140, 122, 'Mind Care', '2022-03-11', '2023-08-16', 'Mind Care', 'Sri Sri Tattva Narayana Kalpa- Stress Reliever Tablet is a very effective ayurvedic medicine which improves management of anxiety, depression, insomnia, stress, restlessness and similar conditions. It also helps in the management of blood pressure and pro', 56, '2022-06-15', '1'),
(54, 'Himalaya Liv. 52 Tablet', 'himalaya-liv.-52-tablet', 'medicine_images/2022/06/accf102caaa970ce65d217b9ae9a8e9a57caa67c.jpg,medicine_images/2022/06/278cadb5c5a600fd354bbb4a32acf34407bf98f0.png,medicine_images/2022/06/6896a8696b8038f4fc8989ab005e4fccc3b90047.jpg', 114, 98, 'Liver Care', '2022-03-11', '2023-10-20', 'Liver Care', 'Himalaya Liv. 52 Tablet includes natural ingredients that exhibit potent hepatoprotective properties against chemically-induced hepatotoxicity. It restores the functional efficiency of the liver by protecting the hepatic parenchyma and promoting hepatocel', 25, '2022-06-15', '1'),
(55, 'Himalaya Liv.52 DS Syrup', 'himalaya-liv.52-ds-syrup', 'medicine_images/2022/06/c7c2d6650fe8dd3125b1541cb39af56649bd56fa.jpg,medicine_images/2022/06/f6de1b4820257a328aceff7a5ec334c0db715da1.jpeg,medicine_images/2022/06/b30ff17d14b759c017197570526ff51b33cc83c5.jpg', 237, 201, 'Liver Care', '2022-03-04', '2023-04-13', 'Liver Care', 'Liv.52 DS is a double strength hepato specific formulation, designed for the treatment and management of liver disorders.\r\nLiv 52 DS syrup contains Caper Bush (Himsra) and Chicory (Kasani).Himsra is a potent hepatoprotective, which lowers down the level o', 265, '2022-06-15', '1'),
(56, 'Liveril Forte Tablet', 'liveril-forte-tablet', 'medicine_images/2022/06/cae856732bd4226855875d839121e46dd85999a9.png,medicine_images/2022/06/6caf85fa09e0642959e62c753d9a2f18236eb1da.jpg,medicine_images/2022/06/c0c954a3a268bfc515e88839a41a25de5bd1b194.jpg', 334, 302, 'Liver Care', '2022-06-09', '2024-04-18', 'Liver Care', 'Liveril Forte tablet is an advanced formulation that contains High Strength Silymarin along with select micronutrients and antioxidants. Silymarin in Liveril Forte acts as a hepato-protectant, and optimizes the function of the liver. This tablet for liver', 50, '2022-06-15', '1'),
(57, 'Hamdard Jigreen Syrup', 'hamdard-jigreen-syrup', 'medicine_images/2022/06/cece785eb92cd643f5e788e5f37e3d933a76f56c.jpg,medicine_images/2022/06/2229e417950c39bd1ac90259b6c781a232a40430.jpg', 109, 95, 'Liver Care', '2022-04-13', '2023-03-17', 'Liver Care', 'Hamdard Jigreen Syrup contains Revand chini, Biranjasif, Arjuna, Sarphoka, Bhangra and Kalmegh Naushadar as major ingredients.', 530, '2022-06-15', '1'),
(58, 'Zandu Aloe Vera +5 Herbs Health Juice', 'zandu-aloe-vera-+5-herbs-health-juice', 'medicine_images/2022/06/71b97f3681cfd481f98f8279e17d064ae63ea66a.jpg,medicine_images/2022/06/b96f49b701f581862428f9c58e1a46c731d0aa89.jpg,medicine_images/2022/06/d75dd4921f9f5ca9dc828e1efafbd5a21dfa9c5d.jpg,medicine_images/2022/06/b76bc71fa80c20942ed01e19', 198, 188, 'Liver Care', '2022-03-11', '2023-07-13', 'Liver Care', 'Zandu Aloe Vera +5 Herbs Health Juice is an Ayurvedic, safe and natural health juice. When combined with 5 herbs, it supports liver function, maintains digestive health and is good for skin.', 2, '2022-06-15', '1'),
(59, 'HAJMOLA Amla Candy Chatpata', 'hajmola-amla-candy-chatpata', 'medicine_images/2022/06/1c076733da30d01108464d85a8ffad1517acec59.jpg,medicine_images/2022/06/1cc7c7aaff1472b38801633d33e2f9e6221a290f.jpg,medicine_images/2022/06/b204769ed10a1c03411b358c4574b179d646cfd7.jpg', 60, 55, 'Liver Care', '2022-02-18', '2023-04-08', 'Liver Care', 'HAJMOLA Amla Candy Chatpata is an ayurvedic medicine that contains amla and can aid in digestion. It combines amla, sarkara and pomegranate, which can help in boosting immunity and metabolism.', 60, '2022-06-15', '1'),
(60, 'Dabur Hepano Tablet', 'dabur-hepano-tablet', 'medicine_images/2022/06/ea2b2f998665356b094cbc9e4d99ecdc646b93d5.jpg,medicine_images/2022/06/b200d8bc76303a5287d3954213dd40d331052ae4.jpg,medicine_images/2022/06/6467a03c80771c8f2247b1909a48c73603b62037.jpg', 132, 122, 'Liver Care', '2022-05-11', '2022-12-21', 'Liver Care', 'Dabur Hepano Tablet is an ayurvedic formulation for a healthy liver. It protects your liver from various hepatotoxins such as heavy metals, synthetic chemicals, etc. which can cause liver damage. Dabur Hepano Tablet maintains healthy liver functions and h', 520, '2022-06-15', '1'),
(61, 'Microliv Forte Tablet', 'microliv-forte-tablet', 'medicine_images/2022/06/acb3891951eada938d821fe8c18ea10c2884033f.jpg,medicine_images/2022/06/00ef4ecbef33723c9293d85ddb5e396ecc049496.jpg,medicine_images/2022/06/6ed0b04ccb1af0573cd045b2bd21a60938919582.jpg', 359, 330, 'Liver Care', '2022-03-04', '2023-08-18', 'Liver Care', 'Microliv Forte tablet contains the combination of L-Ornithine L-Aspartate and is used for the treatment of liver dysfunctioning, or severe liver impairment. It may also be used for speeding up wound healing. L-Ornithine L-Aspartate (LOLA) converts ammonia', 230, '2022-06-15', '1'),
(62, 'Dabur Vedic Suraksha Tea Bag (1.5gm Each) Green Tea', 'dabur-vedic-suraksha-tea-bag-(1.5gm-each)-green-tea', 'medicine_images/2022/06/d879e3a09b3d33248cfb9e16b5b5b31c5891b3f5.jpg,medicine_images/2022/06/1b9538555bc8b6bb16a0625a682661edb953ea1c.jpg,medicine_images/2022/06/5d2552f3c147808bd3c9149b748f69964400c85d.jpg,medicine_images/2022/06/7b6ae682f40573d2c3c9364d', 159, 135, 'Liver Care', '2022-06-17', '2023-02-22', 'Liver Care', 'Dabur Vedic Suraksha Tea Bag (1.5gm Each) Green Tea is made up of ingredients that help in strengthening the immune system. It helps in relieving stress and relieves nasal congestion.', 532, '2022-06-15', '1'),
(63, 'Yuvika Rumi Mastagi - Mastangi - Pistacia Lenticus - Mastic Gum', 'yuvika-rumi-mastagi---mastangi---pistacia-lenticus---mastic-gum', 'medicine_images/2022/06/3a951572a2150028f8727110976985967433bc44.jpg,medicine_images/2022/06/3b7708faf9e65ed911a092d713c25e363002f0d0.jpg,medicine_images/2022/06/d4d83c037385c8c5ad5c87028cc7e2fd92a99b12.jpeg', 419, 385, 'Liver Care', '2022-06-01', '2023-05-25', 'Liver Care', 'Manufacturer/Marketer address\r\n2214/1, Ground Floor, Gali Hinga Beg, Tilak Bazaar, Khari Baoli Delhi Central Delhi DL 110006 .', 20, '2022-06-15', '1'),
(64, 'Himalaya Wellness Pure Herbs Arjuna Cardiac Wellness Tablet', 'himalaya-wellness-pure-herbs-arjuna-cardiac-wellness-tablet', 'medicine_images/2022/06/dbc873408247111e6acb23155ab18806f6de3c39.jpg,medicine_images/2022/06/1a6d8f66694a4960defdab262c3afa381cc201fb.jpg,medicine_images/2022/06/b45acaadf82fda72c956c8f25b0b7d43f131541f.jpg', 179, 156, 'Cardiac', '2022-04-08', '2023-04-07', 'Cardiac', 'Himalaya Wellness Pure Herbs Arjuna Cardiac Wellness Tablet promotes a healthy cardiovascular system. It helps to provide relief in the case of angina, atherosclerosis, and symptoms of heart failure.', 56, '2022-06-15', '1'),
(65, 'Salmon Omega 3 Fish Oil Capsule', 'salmon-omega-3-fish-oil-capsule', 'medicine_images/2022/06/145a864114ae45cfcf3e8dffa513b385f88a75e9.jpg,medicine_images/2022/06/9228c361581f6736be746563c716eac45ea525a5.jpg,medicine_images/2022/06/bb9943133fe660b8505dd80014a7854c390b0c4d.jpeg', 448, 402, 'Cardiac', '2022-06-01', '2023-05-19', 'Cardiac', 'Salmon Omega 3 Fish Oil Capsule is enriched with essential fatty acids DHA (Docosahexaenoic acid) and EPA (Eicosapentaenoic acid). It is derived from salmon fish containing essential omega-3 fatty acids which support the healthy functioning of the heart a', 200, '2022-06-15', '1'),
(66, 'Garlic Pearls Capsule', 'garlic-pearls-capsule', 'medicine_images/2022/06/ee199efa842454bb1411a0469c74c850dcc0b23b.png,medicine_images/2022/06/79da53119083e094755832780941e547301a4e6d.jpg,medicine_images/2022/06/cc6191a3bc9c2e65b5b5145ab0b10a7349b03250.jpg', 145, 125, 'Cardiac', '2022-03-14', '2023-09-13', 'Cardiac', 'Garlic Pearls Capsule helps to maintain cholesterol and triglyceride levels. It helps in controlling the high blood pressure and hardening of the arteries. It is also useful in the treatment of prostate, colon and rectal cancer. Being a powerful anti-oxid', 565, '2022-06-15', '1'),
(67, 'BP and Glucose Meter Combo of Accu-Chek Active Blood Glucometer Kit', 'bp-and-glucose-meter-combo-of-accu-chek-active-blood-glucometer-kit', 'medicine_images/2022/06/b009dfa6563a8c5066c014d55a1a1c0cebe1b4fe.jpg,medicine_images/2022/06/916b82b179eb49aa84ee40e2a315cca2b515c157.jpg,medicine_images/2022/06/fb30fabacf7cbf7b9de60db5747cb5fb917e74e2.jpg', 2297, 1950, 'Cardiac', '2022-05-20', '2023-07-19', 'Cardiac', 'Accu-Chek Active Blood Glucometer Kit (Box of 10 Test strips Free) is an easy to use system that comprises powerful features like accurate blood glucose measurement, pre-and post-meal reminders, visual double-check, and two-button intuitive handling. It i', 1023, '2022-06-15', '1'),
(68, 'Bio India Cardiac Plus Tonic', 'bio-india-cardiac-plus-tonic', 'medicine_images/2022/06/a6c2be9e6e2eb8c8e1a79d856a73f83f1d98cea8.jpg,medicine_images/2022/06/5840616a5981df878cf29deb19d1c419fff47ba5.jpg,medicine_images/2022/06/f614b659fc532613275a4480f54b649dbd2e8920.jpeg', 100, 89, 'Cardiac', '2022-05-13', '2023-06-07', 'Cardiac', 'Bio India Cardiac Plus Tonic is a homoeopathic tonic for maintaining a healthy cardiovascular system. Enriched with Crataegus Oxyacantha, Avena Sativa, Arnica Montana it helps in maintaining healthy functioning of the heart. It provides nutrition to heart', 56, '2022-06-15', '1'),
(69, 'Dabur Lipistat Capsule', 'dabur-lipistat-capsule', 'medicine_images/2022/06/197056c7bbcf63d00d03862bd9738864645541c6.jpg,medicine_images/2022/06/4174eeaaaf34c4d48abec1c20b844a4c4ea4daf2.jpeg,medicine_images/2022/06/87c0dc8819aaba13e385fe5604c126c4c20b8e43.jpg', 81, 74, 'Cardiac', '2022-02-04', '2023-07-21', 'Cardiac', 'Dabur Lipistat Capsule is an Ayurvedic medicine which is useful in reducing bad cholesterol in the body. It helps in improving the lipid profile and helps in healthy functioning of the cardiac system.', 523, '2022-06-15', '1'),
(70, 'L-Carnitine L-Tartrate Extra Strength for Heart Health 500mg Capsule', 'l-carnitine-l-tartrate-extra-strength-for-heart-health-500mg-capsule', 'medicine_images/2022/06/f2d13082840dc1fad3b13d4a4829e28f66782fa2.jpg,medicine_images/2022/06/a1efaa8f3f50e2b48420e83ac5b3d5bd6c5ab3f8.jpg,medicine_images/2022/06/8da5666ffefc598e6aef569a267084847510f7de.jpg', 397, 356, 'Cardiac', '2022-05-06', '2023-05-12', 'Cardiac', 'L-Carnitine L-Tartrate Extra Strength for Heart Health Capsule contains L-carnitine L-tartrate as the active ingredient. L-carnitine is essential to transport fats into mitochondria, where fats are turned into energy. Adequate energy production is importa', 562, '2022-06-15', '1'),
(71, 'Millennium Herbal Care Cardicare Softgel Capsule (10 Each)', 'millennium-herbal-care-cardicare-softgel-capsule-(10-each)', 'medicine_images/2022/06/ab56667269dd1432629547dbd4a600ce1daf0825.png,medicine_images/2022/06/bbef5aa8e914ce903b1350069b7b761534c2cb97.jpg,medicine_images/2022/06/226403adcc35aae8d2d785ab4fe0095463924c1d.jpg', 587, 501, 'Cardiac', '2022-06-16', '2023-11-29', 'Cardiac', 'Millennium Herbal Care Cardicare Softgel Capsule is a unique, natural cardioprotective combined with well documented and proven natural ingredients like resveratrol, omega3 fatty acids, CoQ10 and grape seed polyphenols that act synergistically to mitigate', 562, '2022-06-15', '1'),
(72, 'Himalayan Organics Heart Care CoQ10 Vegetarian Tablet', 'himalayan-organics-heart-care-coq10-vegetarian-tablet', 'medicine_images/2022/06/56af530de330f52439bd019ceb8f8b2e492b3872.jpg,medicine_images/2022/06/445e12489c83e7810f90eecb45108f769cbbd2d0.jpg,medicine_images/2022/06/dd34d7d3d9d996bf2980136515af0b60290f51c1.jpg,medicine_images/2022/06/bca2d0493c227adc29db2fb7', 899, 752, 'Cardiac', '2022-05-20', '2023-08-26', 'Cardiac', 'Himalayan Organics Heart Care CoQ10 Vegetarian Tablet 10mg of CoQ10 for healthy heart function and a steady supply of energy. The heart is one of the most important organs for maintaining excellent health for a long time. It circulates blood, which transp', 560, '2022-06-15', '1'),
(73, 'Harto Tablet', 'harto-tablet', 'medicine_images/2022/06/8da026841922c795b71d1f4a729d5ed53c8012d0.jpg,medicine_images/2022/06/47e8585db7b68ed92a6d1003815db26ecee576aa.jpg', 384, 361, 'Cardiac', '2022-05-06', '2023-06-09', 'Cardiac', 'Harto Tablet contains Arjun (Termanalia arjuna), Vidarikand (Ipomoea digitata), Shuddha Guggul (Balsamodendron mukul), Shuddha Vishatinduk (Srychnos nuxvomica), Akikpishti, Abhrak bhasma.', 56, '2022-06-15', '1'),
(74, 'Hapdco Reumacon Pain Killer Oil', 'hapdco-reumacon-pain-killer-oil', 'medicine_images/2022/06/90a30e0149bb48f052988a81649ca6b7558d59b5.jpg,medicine_images/2022/06/2901aa3669702e9aa81af3731a63017866742282.jpg', 158, 132, 'Pain Relife', '2022-06-04', '2023-05-12', 'Pain Relife', 'Hapdco Reumacon Pain Killer Oil provides relief from joint pains. It is helpful in acute and chronic muscular pains, chronic and acute neuralgic pain, paralysis, joint stiffness, gout, rheumatism, osteoarthritis, lumbago, sciatica, sprain, strains, filari', 54, '2022-06-15', '1'),
(75, 'Allen Relax Pain Killer Oil', 'allen-relax-pain-killer-oil', 'medicine_images/2022/06/8adfaad1cd701f71a5eb35354d5d435725cb7fd5.jpeg,medicine_images/2022/06/6036e5d99c796221a12c7a771532b4220c1e1415.jpg', 106, 95, 'Pain Relife', '2022-02-19', '2023-04-15', 'Pain Relife', 'Allen Relax Pain Killer Oil acts as a pain killer and is effective for various muscular disorders or neuralgic pains. Useful in muscular disorders or neuralgic pains, backache, headache, lumbago, osteoarthritis, spondylosis, gout, sprain of limbs with swe', 32, '2022-06-15', '1'),
(76, 'Cartikool Undenatured Type II Collagen Capsule', 'cartikool-undenatured-type-ii-collagen-capsule', 'medicine_images/2022/06/974aadc59fdb96f52f771586b183cb252824638c.jpg,medicine_images/2022/06/4a13a64bb5b978b2c79f6367061aa97e0034b5f8.png,medicine_images/2022/06/adbe1af4fa092097632566cdfbd8ed9ba6eb0ca4.jpg', 552, 485, 'Pain Relife', '2022-06-12', '2023-07-07', 'Pain Relife', 'Cartikool Capsule is a useful remedy for the treatment of osteoarthritis and other types of joint diseases. It contains Undenatured type II collagen primarily useful for the treatment of osteoarthritis, a joint disease that mostly affects cartilage.', 89, '2022-06-15', '1'),
(77, 'Viopatch Herbal Pain Relief Patch XL Back Pain 200cm', 'viopatch-herbal-pain-relief-patch-xl-back-pain-200cm', 'medicine_images/2022/06/05be97d2a7613223fc15430a64ed784b4b77a6a2.jpg,medicine_images/2022/06/eec7472eac64819eefaad8bae53568b7329c5b17.jpg,medicine_images/2022/06/28f209f1844b6218d37760c709fab38a681792e3.jpg', 475, 355, 'Pain Relife', '2022-06-02', '2023-03-30', 'Pain Relife', 'Viopatch Pain Relief Patch Viopatch is a herbal transdermal patch which provides relief from musculoskeletal pain and inflammation on the locally applied area by sustained release over a period of 12 hours after application.', 23, '2022-06-15', '1'),
(78, 'Dr Ortho Combo of Pain Relief Oil 120ml & Capsules 60', 'dr-ortho-combo-of-pain-relief-oil-120ml-&-capsules-60', 'medicine_images/2022/06/2660124935736fd37fbf12292777c8c4b445b959.jpg,medicine_images/2022/06/a6ab5c18a0f6d190dbbe5c4d0b2985d8500966bc.jpg,medicine_images/2022/06/f1d39cfd4a59e11fb04ec6d7a2d82d1a0467503a.jpg', 504, 456, 'Pain Relife', '2022-06-15', '2023-06-23', 'Pain Relife', 'Dr Ortho Combo of Pain Relief Oil 120ml & Pain Relief Capsules 60 are the products that contain blend of ayurvedic herbs which contain anti-inflammatory molecules and deliver broad spectrum of benefits in relieving from various pain conditions like joint ', 86, '2022-06-15', '1'),
(79, 'Elicura Essential Joint Care Boswellia Serrata Vegetarian Capsule', 'elicura-essential-joint-care-boswellia-serrata-vegetarian-capsule', 'medicine_images/2022/06/07ed4d76e23958d673151d58a746b2d0dc34e9a5.jpg,medicine_images/2022/06/c838a2fc9abfca7320f20e8564ffc9ef6c4255f6.jpg,medicine_images/2022/06/a047c6244b44528f500e6c49a86a8bc4ee7007ee.jpg', 406, 395, 'Pain Relife', '2022-03-11', '2023-03-10', 'Pain Relife', 'Key Ingredients of Elicura Boswellia Serrata Vegetarian Capsule:\r\nBoswellia Serrata Extract\r\nAcacia Nilotica (Babool) Powder\r\nAloe Vera Extract\r\nCissus Quadrangularis\r\nCurcuma Longa Root Powder\r\nBlack Pepper', 595, '2022-06-15', '1'),
(80, 'Rqual Gold Soft Gelatin Capsule', 'rqual-gold-soft-gelatin-capsule', 'medicine_images/2022/06/1eceb32f36ea8c595bdf09d6e8f3a7e9d468990e.jpg,medicine_images/2022/06/177b851481319a55450bb7ebe7308ba22d9aafc9.jpg', 163, 124, 'Pain Relife', '2022-03-11', '2023-07-06', 'Pain Relife', 'Rqual Gold Softgels is a perfect blend of several essential vitamins and minerals such as Coenzyme Q10, Alpha Lipoic acid, Omega-3 Fatty acid, resveratrol, green tea extract, Grape seed extract, Gingko biloba extract, piperine, L-arginine, Choline bitartr', 78, '2022-06-15', '1'),
(81, 'HealthyHey Nutrition Vitamin B1 1100mcg Vegetable Capsule', 'healthyhey-nutrition-vitamin-b1-1100mcg-vegetable-capsule', 'medicine_images/2022/06/e4dfec04f3a7ead2bc95cd31c406b165efb54af9.jpg,medicine_images/2022/06/752e686c1c291c12d5d858f8ecdc75951e363abb.jpg,medicine_images/2022/06/6230c4cfedd4702d68fb252202614605503751c3.jpg', 604, 540, 'Pain Relife', '2022-06-02', '2023-05-19', 'Pain Relife', 'HealthyHey Nutrition Vitamin B1 1100mcg Vegetable Capsule\r\nis made using thiamine, an essential nutrient that all tissues of the body need to function properly. Thiamine was the first B vitamin that scientists discovered. This is why its name carries the ', 48, '2022-06-15', '1'),
(82, 'Trinerve Capsule', 'trinerve-capsule', 'medicine_images/2022/06/57a2f863fe5a28d9a1cadc2aad491a699a5e18e9.jpg,medicine_images/2022/06/a12481c75b26f8e133963b4d5b916b8d6d81e147.jpg,medicine_images/2022/06/d045d7489678ed25951df8377ebd76b05805aa6f.jpg', 138, 124, 'Pain Relife', '2022-06-11', '2023-04-22', 'Pain Relife', 'Trinerve Softgel contains Alpha Lipoic Acid, Gamma Linolenic Acid, Pyridoxine, Methylcobalamin & Chromium.', 86, '2022-06-15', '1'),
(83, 'Moov Cream', 'moov-cream', 'medicine_images/2022/06/99b701e410ac63d210fc5161608ab7433546c225.jpg,medicine_images/2022/06/c0c896e99acddbd1b04833ff7bba6d285dece952.jpg,medicine_images/2022/06/0f683a17cf587ae6047ebefa4ba57f310799eb81.jpg', 69, 54, 'Pain Relife', '2022-05-13', '2023-08-12', 'Pain Relife', 'Effective in providing relief from back pain, joint pains, inflammation, sprains, strains, myositis, fibrositis, and sciatica.', 800, '2022-06-15', '1'),
(84, 'Listerine Mouth Wash Cool Mint', 'listerine-mouth-wash-cool-mint', 'medicine_images/2022/06/7836451091d84056c2cbc120bab0959206bd68f2.jpg,medicine_images/2022/06/a19f0d3a8b87fe9f88ead7e47d70a722e9025409.jpg,medicine_images/2022/06/f5e73e9abb44a298696b0417a2400628dcb1072e.jpg,medicine_images/2022/06/d647dc1a9fe4c555e1c99335', 69, 55, 'Oral Care', '2022-05-05', '2023-02-03', 'Oral Care', 'LISTERINE® COOL MINT® Mouthwash reaches all parts of your mouth to remove 99.9% germs* and reduce gum problems in 2 weeks.', 1600, '2022-06-15', '1'),
(85, 'Sensodyne Repair & Protect Sensitive Toothpaste', 'sensodyne-repair-&-protect-sensitive-toothpaste', 'medicine_images/2022/06/a2b535440044bdd45c5cb1e855b44328e3b6ae2b.jpg,medicine_images/2022/06/216b8a36cba00320a8e575acd7e6985a346bb3b5.jpg,medicine_images/2022/06/c66e3536ce1b34c9a6c005a40f573f56c99efc6a.jpg', 180, 162, 'Oral Care', '2022-06-07', '2023-04-06', 'Oral Care', 'Sensodyne Repair & Protect Sensitive Toothpaste\r\nFor nearly 60 years, Sensodyne has created unique formulations to help people overcome tooth sensitivity while still providing the benefits of fluoride, cavity protection, fresh breath and whitening to main', 563, '2022-06-15', '1'),
(86, 'Orasore Mouth Ulcer Relief Gel', 'orasore-mouth-ulcer-relief-gel', 'medicine_images/2022/06/6726a7487e75f60459c910aeec8d77bb78c503ef.jpg,medicine_images/2022/06/c4afcc58dadf7a6c5f0d24c854fde955eed0e515.jpg,medicine_images/2022/06/f02daf195b766a5f24e341dbd21c9ac7acc99c48.jpg', 71, 64, 'Oral Care', '2022-05-05', '2023-09-09', 'Oral Care', 'Orasore Mouth Ulcer Relief Gel provides fast relief from severe pain & irritation, caused by mouth ulcers,within 2 minutes.\r\nIt also provides relief from pain and swelling of the ulcers and has an antibacterial preservative too.\r\nOrasore Mouth Ulcer Gel c', 300, '2022-06-15', '1'),
(87, 'Sensodyne Sensitive Toothbrush with Soft Rounded Bristles Buy 2 Get 1 Free', 'sensodyne-sensitive-toothbrush-with-soft-rounded-bristles-buy-2-get-1-free', 'medicine_images/2022/06/90160f9f31b7bc273d117088d8e95f576b424871.jpg,medicine_images/2022/06/99b3361621b785a27fdb79eaf5e1c5133be0d97e.jpg,medicine_images/2022/06/d4784761d449208976fc47a4d1da05cf1cf8626b.jpg', 102, 94, 'Oral Care', '2022-06-19', '2023-07-14', 'Oral Care', 'Sensodyne Sensitive Soft Gentle on Teeth Toothbrush Buy 2 Get 1 Free is designed to help those with sensitive teeth clean their teeth without facing any pain or discomfort.', 590, '2022-06-15', '1'),
(88, 'Colgate Total Waxed Dental Floss', 'colgate-total-waxed-dental-floss', 'medicine_images/2022/06/6285b64dc539ee6013ba77bd79f0e4ea7c4a9fd5.jpg,medicine_images/2022/06/9673116a5ef64caf42ab7a730e8029c2e67e5c52.jpg,medicine_images/2022/06/b1dfc5773c44e066f427adeadca19a42430ad9dc.jpg', 74, 70, 'Oral Care', '2022-06-02', '2023-03-17', 'Oral Care', 'Colgate Waxed Dental Floss was made to make daily flossing easy for patients. It is an advanced technology floss that slides easily between teeth without shredding. It is mainly used to improve mouth’s general hygiene and is a waxed dental tape.', 1200, '2022-06-15', '1'),
(89, 'Colgate Charcoal Clean Toothpaste', 'colgate-charcoal-clean-toothpaste', 'medicine_images/2022/06/5241c7c389f333ac73d72abbbd68a5e5632a110c.jpg,medicine_images/2022/06/57722f8ef0588a35d64b262822bc4a1a54c0dafb.jpg,medicine_images/2022/06/fc965cdbd05e1b997b58508d01891b59711b3fb0.jpg', 117, 102, 'Oral Care', '2022-06-11', '2023-07-14', 'Oral Care', 'Colgate Charcoal Clean Toothpaste (120gm Each)\r\nRevive your senses with the new Colgate Charcoal Clean, which has the goodness of Bamboo Charcoal and Wintermint Green for a pure clean mouth experience. Bamboo Charcoal is known for its cleaning properties ', 647, '2022-06-15', '1'),
(90, 'Himalaya Hiora Mouth Wash', 'himalaya-hiora-mouth-wash', 'medicine_images/2022/06/ea9a76fd663a88558751d8750808ca3c991e908b.jpg,medicine_images/2022/06/738fca54a64f9dcf25cec34436f10fa5b7cec5d1.jpg', 77, 65, 'Oral Care', '2022-06-01', '2023-02-04', 'Oral Care', 'The Himalaya HiOra Mouth Wash kills germs, tones gums & refreshes mouth. Useful in plaque, gingivitis, and halitosis.', 560, '2022-06-15', '1'),
(91, 'Himalaya Styplon Tablet', 'himalaya-styplon-tablet', 'medicine_images/2022/06/51a02acf66f8b7fd378495f4858a46df587c292a.png,medicine_images/2022/06/ab63f95f48442c24c691a8e666e306548826cd32.jpg,medicine_images/2022/06/55e0723e6198c63dfba54663c201c3aad178afbc.jpg', 109, 95, 'Oral Care', '2022-04-22', '2023-11-30', 'Oral Care', 'Styplon is an herbal formulation of Indian Gooseberry, Indian Sarsaparilla, Lodh Tree and Red Coral.\r\n \r\nIndian Gooseberry (Amalaki) comes with hemostatic, anti-inflammatory and antioxidant properties, that controls local tissue hemorrhage, inflammation a', 745, '2022-06-15', '1'),
(92, 'Clove Sensitive Toothpaste with Anti-Sensitivity & Fluoride Formulation', 'clove-sensitive-toothpaste-with-anti-sensitivity-&-fluoride-formulation', 'medicine_images/2022/06/8dbfdd6900fdf07bffc227323c1e0d42f8e63f06.jpg,medicine_images/2022/06/de1e4a43423ffeb68d43ae7196092afffa488584.jpg,medicine_images/2022/06/f9752575ad8c039a5f405efec8e71be661f6f12b.jpg', 104, 96, 'Oral Care', '2022-06-04', '2023-05-12', 'Oral Care', 'Clove Sensitive Anti-Sensitivity Fluoride Toothpaste is your very own dental care expert made by Indians for Indians. Clove Sensitive helps relieve the sharp or sudden pain caused by sensitive teeth. The toothpaste is formulated with Dentist approved ingr', 652, '2022-06-15', '1'),
(93, 'Dr. Reckeweg Bio-Combination 26 (BC 26) Tablet', 'dr.-reckeweg-bio-combination-26-(bc-26)-tablet', 'medicine_images/2022/06/1cf8ae8a18f80724922a2322e937b5cd4a3421ca.jpg,medicine_images/2022/06/9e55b9f06c9a4a3236e881d4e7f6ed19f25bbb74.jpg,medicine_images/2022/06/1b57441caebc2937357fa9307edf66e6b9d21765.jpg', 165, 145, 'Oral Care', '2022-05-29', '2023-11-04', 'Oral Care', 'Dr. Reckeweg BC 26 Tablet reduces pain in pregnancy, helps during labor pain and make delivery easy. It also helps imprve mother&#39;s health and even the baby.', 210, '2022-06-15', '1');

-- --------------------------------------------------------

--
-- Table structure for table `e_subscription_user`
--

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
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `p_id` int(255) NOT NULL,
  `p_names` varchar(255) NOT NULL,
  `p_images` varchar(255) NOT NULL,
  `p_price` int(100) NOT NULL,
  `p_market_price` int(100) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Packing_date` date NOT NULL,
  `Expire_date` date NOT NULL,
  `Short_dec` varchar(255) NOT NULL,
  `Long_dec` varchar(255) NOT NULL,
  `Stock` int(255) NOT NULL,
  `Action` tinyblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`p_id`, `p_names`, `p_images`, `p_price`, `p_market_price`, `Category`, `Packing_date`, `Expire_date`, `Short_dec`, `Long_dec`, `Stock`, `Action`) VALUES
(0, 'Revital H Woman', 'media/medicine/revital-h-woman-health.webp', 78, 102, 'Health Care', '2021-10-09', '2022-06-18', 'Keeps women physically and mentally active to perform daily chores.', 'Revital H Woman is a specially formulated, complete and balanced supplement for women. Their body has distinct needs and it is important to remember that to stay active.', 9, ''),
(1, 'Horlicks Lite Malt 450', 'media/medicine/horlicks.webp', 250, 275, 'Health Care', '2022-01-01', '2023-06-14', 'Horlicks Lite is high in fibre.', 'The Horlicks Lite Regular Malt Nutrition Drink Jar of 450 G contains the goodness of malted barley and wheat with zero cholesterol, high protein and no added sugar.', 15, ''),
(2, 'Horlicks Mother\'S Plus', 'media/medicine/horlicks-mothers.webp', 175, 193, 'Health Care', '2021-12-06', '2023-10-19', 'Horlicks Mother’s Plus Vanilla Drink Refill', 'The mother\'s health and the baby’s growth are both dependent on proper nutrition throughout pregnancy.', 10, ''),
(3, 'Horlicks Protein Plus', 'media/medicine/horlicks-protein-plus.webp', 450, 484, 'Health Care', '2022-01-02', '2024-06-30', 'Delivers 34g of protein for every 100g of the product.', 'Horlicks Protein+ contains three sources of protein each acting at different speeds, along with a number of other helpful nutrients.', 25, ''),
(4, 'Zandu Kesari Jivan', 'media/medicine/zandu.webp', 290, 319, 'Health Care', '2021-10-15', '2022-11-26', 'Zandu Kesari Jivan contains Kesar, Moti, Amla and other herbs.', 'Zandu Kesari Jivan is a health supplement created with ayurvedic ingredients to boost your health and immunity.', 8, ''),
(5, 'Cadbury Bournvita', 'media/medicine/cadbury-bournvita.webp', 210, 249, 'Health Care', '2021-09-25', '2023-05-12', 'It contains essential vitamins, proteins and minerals.', 'Cadbury Bourvita is a malted drink mix that is extremely healthy and tasty at the same time. It contains a unique blend of Vitamin (D, B2, B9, B12), Iron and Calcium.', 50, ''),
(6, 'Sugar Free Natura', 'media/medicine/sugar-free.webp', 85, 109, 'Health Care', '2021-07-10', '2023-02-17', 'It is ideal for fitness seekers, weight-conscious & diabetic people.', 'Sugar Free Natura is made from sucralose and contains a low-calorie sugar substitute that can be used in cooking, baking and added to various beverages - tea, coffee, ice-tea, ice-coffee, etc.', 9, ''),
(8, 'Himalaya Geriforte Tablets', 'media/medicine/himalaya.webp', 96, 114, 'Health Care', '2021-11-19', '2023-07-14', 'The Himalaya tablet is known for its antioxidant properties.', 'Himalaya Geriforte tablets, known for their antioxidant properties, have been formulated to improve the immune system.', 2, ''),
(9, 'Liveasy Wellness Calcium', 'media/medicine/liveasy-wellness-calcium-magnesium-vitamin-d3.webp', 299, 329, 'Health Care', '2021-07-16', '2022-05-14', 'Helps to build strong bones and dental health', 'LivEasy Wellness Calcium D3 Capsules contain calcium, vitamin D3, magnesium and zinc which are crucial for strong bones, joints, muscles & teeth.', 50, ''),
(10, 'Liveasy Wellness Multivitamin', 'media/medicine/carbamide-forte-calcium1.webp', 485, 419, 'Health Care', '2021-10-08', '2022-04-16', 'Boosts immunity and energy levels', 'Vitamins and Minerals are essential nutrients that our bodies need for healthy functioning.', 30, ''),
(11, 'Buscogast Stomach Pain', 'media/medicine/buscogast-stomach-pain.webp', 19, 26, 'Medicine', '2021-11-26', '2023-09-21', 'Buscogast Stomach Pain Specialist relieves the stomach from a wide range of day-to-day troubles.', 'Stomach and gut troubles attack us when we least expect them. Buscogast Stomach Pain Specialist works by relieving stomach troubles.', 4, ''),
(12, 'Omved Multipurpose Pain Relief', 'media/medicine/omved-multipurpose-pain-relief.webp', 1059, 1290, 'Medicine', '2022-01-08', '2023-02-25', '100% Natural, external herbal therapy', 'A 100% natural, flexible, hot and cold pack that revives the Ayurvedic tradition of herbal healing, to give you instant relief from rheumatic pain, neural pain.', 51, ''),
(13, 'Saridon Headache Relief', 'media/medicine/saridon-headache-relief.webp', 25, 36, 'Medicine', '2021-12-31', '2022-10-06', 'Headache', 'Saridon tablets are usually used for headache relief. This tablet acts as a mild analgesic medicine that is primarily used as a pain reliever. ', 4, ''),
(14, 'Vicks Vaporub 110ml', 'media/medicine/vicks-vaporub-110m.webp', 199, 222, 'Medicine', '2021-12-18', '2023-04-15', 'Headache', 'Vicks VapoRub is a solution to easing symptoms of cough and cold, providing relief when you need it. ', 13, ''),
(15, 'Nu Bph Strip', 'media/medicine/nu-bph-strip.webp', 310, 329, 'Medicine', '2022-01-07', '2023-07-14', 'bp', 'Use incase of Blood Pressure.', 84, ''),
(17, 'Dr Reckeweg R 85', 'media/medicine/dr-reckeweg.webp', 184, 202, 'Medicine', '2021-09-25', '2022-08-19', 'bp', 'Use incase of Blood Pressure.', 7, ''),
(18, 'Digene Acidity & Gas', 'media/medicine/digene-.webp', 13, 16, 'Medicine', '2021-10-09', '2022-12-23', 'gas', 'Digene acidity and gas relief tablet provides quick relief from stomach ache and abdominal cramps as a result of acidity and gas formation.', 5, ''),
(19, 'Digene Gel Acidity', 'media/medicine/digene-gel-acidity-gas.webp', 95, 107, 'Medicine', '2021-11-13', '2022-11-04', 'gas', 'The eating habits and lifestyle people follow these days have made acidity and gas very common problems.', 24, ''),
(20, 'Allen A33 Fever Drops', 'media/medicine/allen_a33_fever_drops.jpg', 211, 245, 'Medicine', '2021-09-25', '2022-12-30', 'fever', 'Use incase of High fever.', 34, ''),
(21, 'Dolo 650mg Tablet 15\'S', 'media/medicine/dolo_650mg_tablet_15_s_0.jpg', 19, 24, 'Medicine', '2021-11-27', '2023-04-01', 'fever', 'DOLO 650MG contains Paracetamol which belongs to a group of medicines called analgesic and antipyretics', 42, '');

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

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
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`p_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `e_medicine`
--
ALTER TABLE `e_medicine`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

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
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

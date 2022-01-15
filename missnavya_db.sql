-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 15, 2022 at 02:29 PM
-- Server version: 10.1.48-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `missnavya_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `content`, `date`, `status`) VALUES
(1, '<p>ssdasd</p>\r\n', '19-11-2021 04:31:45p', '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `last_login` varchar(100) NOT NULL,
  `contact` varchar(60) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `emp_id` varchar(30) DEFAULT NULL,
  `loginAccess` enum('0','1') DEFAULT NULL,
  `cookies` enum('0','1') DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `fcm` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `last_login`, `contact`, `status`, `emp_id`, `loginAccess`, `cookies`, `image`, `fcm`) VALUES
(7, 'Super', 'Admin', 'superadmin', 'admin', '', '15 January, 2022 04:01 PM', '', '1', NULL, '1', '1', NULL, ''),
(8, 'Sanjeev', 'Hazari', 'rsrsanjeev', 'admin', 'rsrsdf@gmail.com', '19 November, 2021 02:26 PM', '', '1', 'SAM001', NULL, NULL, NULL, ''),
(9, 'Rohitk', 'chandrad', 'rohitcc', '1f32aa4c9a1d2ea010adcf2348166a04', 'rsrshot@gmail.com', '21 August, 2021 08:55 PM', '', '1', 'roh0076', NULL, NULL, NULL, ''),
(11, 'Sunny', '', 'sunny001', '827ccb0eea8a706c4c34a16891f84e7b', 'EMP@FMAIL.COM', '05 September, 2021 12:19 PM', '', '1', 'EMP009', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(300) NOT NULL,
  `name` varchar(150) NOT NULL,
  `sub` text NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `tel`, `email`, `name`, `sub`, `date`) VALUES
(15, '9876543211', 'lkj@tyu.nbm', ',n,n,,', 'kjn', '27-11-2021 01:25:am');

-- --------------------------------------------------------

--
-- Table structure for table `disclaimer`
--

CREATE TABLE `disclaimer` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disclaimer`
--

INSERT INTO `disclaimer` (`id`, `content`, `date`, `status`) VALUES
(1, '<p><span style=\"font-size:22px\">dasdfasfdas</span></p>\r\n\r\n<p><span style=\"font-size:22px\">asdf</span></p>\r\n\r\n<p>asdf</p>\r\n\r\n<p>as</p>\r\n\r\n<p>fasdf</p>\r\n\r\n<p>&nbsp;</p>\r\n', '19-11-2021 05:02:55p', '1');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `section` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `section`, `image`, `date`) VALUES
(2, '3', '20211120140157_gallery-1.jpg', '20-11-2021'),
(4, '3', '20211120140210_gallery-2.jpg', '20-11-2021'),
(5, '3', '20211120140217_gallery-3.jpg', '20-11-2021'),
(6, '3', '20211120140224_gallery-4.jpg', '20-11-2021'),
(7, '3', '20211120140231_gallery-5.jpg', '20-11-2021'),
(8, '3', '20211120140236_gallery-6.jpg', '20-11-2021'),
(9, '3', '20211120140247_gallery-7.jpg', '20-11-2021'),
(10, '3', '20211120140256_gallery-8.jpg', '20-11-2021');

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`id`, `content`, `date`, `status`) VALUES
(1, '<p>ssdfdsfasd</p>\r\n\r\n<p>asdfs</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>sdf</p>\r\n\r\n<p>dsf</p>\r\n\r\n<p>sdf</p>\r\n', '19-11-2021 05:02:41p', '1');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `status`) VALUES
(1, 'Andaman and Nicobar (UT)', '1'),
(2, 'Andhra Pradesh', '1'),
(3, 'Arunachal Pradesh', '1'),
(4, 'Assam', '1'),
(5, 'Bihar', '1'),
(6, 'Chandigarh (UT)', '1'),
(7, 'Chhattisgarh', '1'),
(8, 'Dadra and Nagar Haveli (UT)', '1'),
(9, 'Daman and Diu (UT)', '1'),
(10, 'Delhi', '1'),
(11, 'Goa', '1'),
(12, 'Gujarat', '1'),
(13, 'Haryana', '1'),
(14, 'Himachal Pradesh', '1'),
(15, 'Jammu and Kashmir', '1'),
(16, 'Jharkhand', '1'),
(17, 'Karnataka', '1'),
(18, 'Kerala', '1'),
(19, 'Lakshadweep (UT)', '1'),
(20, 'Madhya Pradesh', '1'),
(21, 'Maharashtra', '1'),
(22, 'Manipur', '1'),
(23, 'Meghalaya', '1'),
(24, 'Mizoram', '1'),
(25, 'Nagaland', '1'),
(26, 'Orissa', '1'),
(27, 'Puducherry (UT)', '1'),
(28, 'Punjab', '1'),
(29, 'Rajasthan', '1'),
(30, 'Sikkim', '1'),
(31, 'Tamil Nadu', '1'),
(32, 'Telangana', '1'),
(33, 'Tripura', '1'),
(34, 'Uttar Pradesh', '1'),
(35, 'Uttarakhand', '1'),
(36, 'West Bengal', '1');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `content`, `date`, `status`) VALUES
(1, '<p><span style=\"font-size:22px\"><span style=\"color:#2ecc71\">We always aim at providing you with the utmost sexual pleasure, and our girls leave no stone unturned for giving you memorable experiences in Goa. Our erotic escorts in Goa use many sensual services and foreplay acts during the sex session so that their clients might explore and enjoy their sensual wishes to the fullest. </span></span><br />\r\n<br />\r\nWhatever the fantasies you want to fulfill with our high-profile and busty babes, they would always welcome you and will give you even more sensual and satisfactory services. Right from high-class foreplay services like BSDM, deep throat oral sex, blowjob, cum in mouth, etc. to the highly satisfying sex sessions like anal sex, spooning, threesome, and others, you will be happily provided as per your requests.</p>\r\n\r\n<p>Our Goa escorts are very much comfortable with their clients&rsquo; urges and this is the reason we want you to open up your heart and reveal all those things that you want to experience with our beauties. No need to hide any of your desires in any manner as the escorts are more than happy if they find your hidden urges. If we talk about 100% real sex satisfaction, then it means to us. Our escort services are only limited to providing only coitus services and foreplay acts as you will also be enjoying some other sensual services as per your desires. They are classy and open-minded, so you would never find it challenging to get comfortable with our Goa escorts - the friendly environment would naturally encourage you to talk of your erotic desires.</p>\r\n', '27-11-2021 02:15 pm', '1');

-- --------------------------------------------------------

--
-- Table structure for table `websitefooter`
--

CREATE TABLE `websitefooter` (
  `id` int(11) NOT NULL,
  `site_name` varchar(250) NOT NULL,
  `site_logo` varchar(500) NOT NULL,
  `site_contact` varchar(20) NOT NULL,
  `site_tagline` varchar(250) NOT NULL,
  `site_desp` text NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `websitefooter`
--

INSERT INTO `websitefooter` (`id`, `site_name`, `site_logo`, `site_contact`, `site_tagline`, `site_desp`, `status`) VALUES
(1, 'HSBC', '146-1468001_hsbc-logo-hsbc-logo-white-png.png', '1231456487', 'The Global Bank', '<h1>sdsgdfsg</h1>sdfgdfg<br>sdffgsdfg<br>sdfg<br>sdfg<br>sdfg<br>sdfg<br><br>', '1');

-- --------------------------------------------------------

--
-- Table structure for table `websiteheader`
--

CREATE TABLE `websiteheader` (
  `id` int(11) NOT NULL,
  `site_name` varchar(250) NOT NULL,
  `site_logo` varchar(500) NOT NULL,
  `site_contact` varchar(20) NOT NULL,
  `site_contact2` varchar(10) NOT NULL,
  `site_tagline` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `insta` varchar(250) NOT NULL,
  `skype` varchar(250) NOT NULL,
  `linkin` varchar(250) NOT NULL,
  `date` varchar(30) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `websiteheader`
--

INSERT INTO `websiteheader` (`id`, `site_name`, `site_logo`, `site_contact`, `site_contact2`, `site_tagline`, `facebook`, `twitter`, `insta`, `skype`, `linkin`, `date`, `status`) VALUES
(17, 'Miss Navya', 'miss-navya.png', '1234560000', '1234567892', 'Health Care Plan', 'https://www.facebook.com/devverseen/', 'sdfsdf', 'dfsadf', 'safdsdf', 'sdfsdf', '25-11-2021', '1');

-- --------------------------------------------------------

--
-- Table structure for table `websitehomepage`
--

CREATE TABLE `websitehomepage` (
  `id` int(11) NOT NULL,
  `section` varchar(20) NOT NULL,
  `heading` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `img` text NOT NULL,
  `status` enum('0','1') NOT NULL,
  `up_id` varchar(20) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `websitehomepage`
--

INSERT INTO `websitehomepage` (`id`, `section`, `heading`, `content`, `img`, `status`, `up_id`, `date`) VALUES
(4, '1', 'How To Have Fun with The Girls From Zirakpur', '<p><span style=\"font-size:14px\"><span style=\"background-color:white\"><span style=\"color:#414141\">Awe and fun are the two aspects of life every man adores.&nbsp;Girls&#39; companionship plays an essential role in this excitement.&nbsp;Since the demand for services of <a href=\"https://www.missnavya.com\"><strong>Zirakpur escorts</strong></a> is increasing and the mental state of individuals is also shifting, it&#39;s no reason to wonder why people are thinking about hiring an escort from a company.&nbsp;This is the most suitable solution for you right now.&nbsp;We are all full of desires , and we are able to fulfill those desires.&nbsp;<strong><a href=\"https://www.missnavya.com\">Zirakpur call gils</a></strong> are the most effective method to relieve your inner sweat.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"background-color:white\"><span style=\"color:#414141\">They are offered by a variety of <a href=\"https://www.missnavya.com\"><strong>Call girls in zirakpur</strong></a>.&nbsp;If you&#39;re the first time using an escort it is possible that you are anxious.&nbsp;Anybody can experience this feeling.&nbsp;Be assured that they won&#39;t allow anxiety to ruin your mood.&nbsp;You&#39;ll have the most amazing time with them, offering you the most love, affection and pleasures sexual.&nbsp;Have fun to the max and feel the joy that is to come.</span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-size:18px\"><strong><span style=\"background-color:white\"><span style=\"color:#414141\">The Meeting With the Zirakpur Escorts Is Now Easy</span></span></strong></span></h2>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"background-color:white\"><span style=\"color:#414141\">It is often overlooked how the reputation and credibility of an escort agency is also important.&nbsp;However, the truth is that if your goal is to receive the highest quality service from your friend be sure to verify whether it&#39;s from a reliable firm or.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"background-color:white\"><span style=\"color:#414141\">&nbsp;A reputable escort service will provide you with top high-end escorts who will definitely enhance your mood.&nbsp;It can take a while however, this will ensure your safety and be certain that you will be greeted by the hottest&nbsp;<a href=\"https://www.missnavya.com\"><strong>Call girls in Zirakpur</strong></a>.&nbsp;One possibility is to meet with the person you want to escort, before deciding on the one preferred by you.&nbsp;</span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"background-color:white\"><span style=\"color:#414141\">Even if the service has no arrangements prior to the reservation, you could certainly request a WhatsApp chat prior to meeting them.&nbsp;It is important to ensure that you don&#39;t get an unsuitable escort.&nbsp;This is appropriate for both ends, so it is recommended.</span></span></span></p>\r\n', '20211120132701_20211120132515_kai-new-hot-sexy-thailand-thai-escort-in-dubai-2430064_original.jpg', '1', '7', '31-12-2021 12:54 pm'),
(5, '2', 'Maximum Services of Escort Girls: Fully Worth Your Money', '<h1>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</h1>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"background-color:white\"><span style=\"color:#414141\">Each escort system works in a different way and the time of service also differs.&nbsp;Certain escorts will not provide enough time to travel with the escort while other services let women to<a href=\"https://www.missnavya.com\">&nbsp;<strong>Zirakpur escorts</strong></a> to&nbsp;determine the length of time.&nbsp;Always try to meet her during the time of night since she&#39;ll always desire to spend as long as she can.&nbsp;You can inquire with an escort for the duration and length she&#39;ll stay with you.&nbsp;Don&#39;t let time get in the way of you and your desires.</span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"background-color:white\"><span style=\"color:#414141\">&nbsp;The <a href=\"https://www.missnavya.com\"><strong>Zirakpur call girls</strong></a> are always there to you and your sexual indulgence should not be curtailed due to the limitations of time.&nbsp;That brings us to the following point which is payment.&nbsp;The paid sexual offerings are just one of the main services the escort companies offer.&nbsp;The majority of escort companies offer more services in common than you could imagine.&nbsp;So, how do you be sure to do your research prior to employing an escort?&nbsp;Searching on the Web is a great way to locate a trustworthy agency for escorting.&nbsp;You&#39;ll be delighted to discover the variety of escort firms operating within your local region.&nbsp;However, this could make it difficult to decide which to pick.</span></span></span></p>\r\n\r\n<h2><span style=\"font-size:18px\"><span style=\"background-color:white\"><strong><span style=\"color:#414141\">Select the service with the Most Reputation!</span></strong></span></span></h2>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"background-color:white\"><span style=\"color:#414141\">Then Its Fun!&nbsp;Before you finalize any&nbsp;<a href=\"https://www.missnavya.com\"><strong>Call girls in Zirakpur</strong></a>&nbsp;it is possible to as well check the reputation of the escort companies.&nbsp;The reputable escort companies have classified their escorts based on a variety of physical and regional characteristics.&nbsp;This assists the client in select the perfect girl to meet.&nbsp;Additionally, it guarantees that the services provided by escorts are safer than any other agency for escorts.&nbsp;Anyone who avails the services of any escort firm are usually concerned about the cost of the escorts.&nbsp;Some may charge quite a lot.&nbsp;</span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"background-color:white\"><span style=\"color:#414141\">There is a saying that for the most effective <a href=\"https://www.missnavya.com\"><strong>Zirakpur escorts</strong></a>, you need to spend a lot.&nbsp;In reality, this is true since professional escorts can cost a lot.&nbsp;However, you should ensure that you are getting the top prepay Colombia.&nbsp;Price at the lowest This is why the different escorts and the prices they charge are comparisons.&nbsp;Also, you can look into if there&#39;s a review platform where you can review the comments of previous customers.&nbsp;By doing this you will be able to ensure you&#39;re getting the top quality cost for your money.</span></span></span></p>\r\n', '20211120154608_red-sarre.jpg', '1', '7', '31-12-2021 12:53 pm'),
(6, '3', 'Our Gallery', '', '', '1', '7', ''),
(7, '3', 'rtwrt', 'wertrt', '', '1', '7', 'a'),
(8, '4', 'Unique services offered through the Beautiful Girls', '<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"background-color:white\"><span style=\"color:#414141\">The services offered by escorts are usually distinct in the world of.&nbsp;Many people hire these gorgeous sexually attractive&nbsp;<strong><a href=\"https://www.missnavya.com\">Call girls in Zirakpur</a>&nbsp;</strong>not not just for pleasure however, they also take them to dinners or business events, as well as parties and other events apart from sexual services.&nbsp;These beautiful women who provide escort service tend to be more attractive, charming , and committed than prostitutes.&nbsp;</span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"background-color:white\"><span style=\"color:#414141\">Thus, you must know precisely what services are offered by your escort, and then employ them.&nbsp;Reviews and ratings are the primary element in establishing confidence with the escort agency you choose to work with.&nbsp;When the <strong><a href=\"https://www.missnavya.com\">Zirakpur Escorts</a></strong> Agency offers top-quality services, so it&#39;s easy to select their services and be confident that you&#39;ll receive exactly what you need from the escort that you are hiring.&nbsp;When you take a look at the ratings, you will be able to see where you&#39;re spending your money and will benefit the most from the money you spent.</span></span></span></p>\r\n\r\n<h2><span style=\"font-size:18px\"><span style=\"background-color:white\"><strong><span style=\"color:#414141\">Agency Hiring Is the Best Way</span></strong></span></span></h2>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"background-color:white\"><span style=\"color:#414141\">You can employ an <a href=\"https://www.missnavya.com\"><strong>Zirakpur escorts</strong></a> by yourself or through an agency.&nbsp;You can make use of phone services or mail services to accomplish this.&nbsp;It&#39;s up to you preference of which one to go for.&nbsp;If you are able to have a broker with your account, they&#39;ll be able to assist you locate the ideal escort that will meet your needs for service however it can take time.&nbsp;</span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"background-color:white\"><span style=\"color:#414141\">We will first provide you with the complete list of profile choices and then you are able to select the one you like best. preferences and then the same girl will be assigned to you to enjoy Entertainment.&nbsp;Don&#39;t hesitate to contact us to book your appointment today!</span></span></span></p>\r\n', '20211229131405_detail-page.jpg', '1', '7', '31-12-2021 12:53:35pm');

-- --------------------------------------------------------

--
-- Table structure for table `websitepage`
--

CREATE TABLE `websitepage` (
  `id` int(11) NOT NULL,
  `related_cities` text NOT NULL,
  `city` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `def` varchar(5) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `img_alt` varchar(250) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `date` varchar(30) NOT NULL,
  `position` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `websitepage`
--

INSERT INTO `websitepage` (`id`, `related_cities`, `city`, `url`, `def`, `content`, `image`, `img_alt`, `contact`, `email`, `status`, `date`, `position`) VALUES
(66, '', 'Ludhiana', 'call-girl-ludhiana', '0', '<h1><span style=\"font-size:18px\"><strong><span><span style=\"font-family:Calibri,\">Hire our Ludhiana escorts services for secure intimate moments.</span></span></strong></span></h1>\r\n\r\n<p><span style=\"font-size:14px\"><span><span style=\"font-family:Calibri,\"><span style=\"color:#414141\">Ludhiana is awash in services for escorts around the city.</span>&nbsp;<span style=\"color:#414141\">Numerous sex companies offering service to sexually explicit individuals in the city remain, but we&#39;re the top in the area.</span>&nbsp;<span style=\"color:#414141\">We deliver a satisfying experience as well as our <a href=\"https://www.missnavya.com/call-girl-ludhiana\"><strong>call girls in Ludhiana</strong></a> have a lot of experience in their area.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span><span style=\"font-family:Calibri,\"><span style=\"color:#414141\">You can count on us for all your sexual needs and we&#39;ll deliver all the beautiful women in the city right to your door.</span>&nbsp;<span style=\"color:#414141\">There is no need to worry about finding the perfect girl for yourself.</span>&nbsp;<span style=\"color:#414141\">Instead, put the burden to us.</span>&nbsp;<span style=\"color:#414141\">We have a secure site that showcases top escort service.</span>&nbsp;<span style=\"color:#414141\">Our customers do not need to worry about security of their identity or hygiene.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span><span style=\"font-family:Calibri,\"><span style=\"color:#414141\">We have our&nbsp;</span><a href=\"https://www.missnavya.com/call-girl-ludhiana\"><strong>Ludhiana call girls</strong></a><span style=\"color:#414141\">&nbsp;to protect their beauty and maintain their cleanliness like those of the Ludhiana city of&nbsp;</span>Punjab<span style=\"color:#414141\">.</span>&nbsp;<span style=\"color:#414141\">Our beauty queens keep their looks clean and well-maintained. They are responsible for cleaning their properties regularly.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span><span style=\"font-family:Calibri,\"><span style=\"color:#414141\">During the Covid-19 outage we were among the very few sexual services in Ludhiana which put a lot of focus on sanitation.</span>&nbsp;<span style=\"color:#414141\">We continue to believe that life isn&#39;t always predictable and very short.</span>&nbsp;<span style=\"color:#414141\">So, it is important to live your life to the to the fullest and enjoy yourself.</span>&nbsp;<span style=\"color:#414141\">Therefore, we make every effort to stop all kinds of spread.</span>&nbsp;<span style=\"color:#414141\">The&nbsp;<a href=\"https://www.missnavya.com/call-girl-ludhiana\"><strong>Call girls In ludhiana</strong></a>&nbsp;is a reputation and name in the adult world for being a reliable service in Ludhiana.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span><span style=\"font-family:Calibri,\"><span style=\"color:#414141\">Our customers are all content to work with us and are happy to be able to reach us at any time, without worry.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span><span style=\"font-family:Calibri,\"><span style=\"color:#414141\">They are not at all scared of getting close to these gorgeous ladies in intimate situations.</span>&nbsp;<span style=\"color:#414141\">You&#39;ll have&nbsp;</span>sexually enjoyable<span style=\"color:#414141\">&nbsp;time with these ladies.</span>&nbsp;<span style=\"color:#414141\">It is possible to engage more than one woman to get the most love.</span></span></span></span></p>\r\n', '20211231132743_www.missnavya.com.jpeg', 'Escort', '1234560000', '', '1', '15-01-2022 01:55 pm', ''),
(68, '', 'Guwahati', 'call-girl-guwahati', '0', '<p>We always aim at providing you with the utmost sexual pleasure, and our girls leave no stone unturned for giving you memorable experiences in&nbsp;Guwahati. Our erotic escorts in&nbsp;Goa&nbsp;use many sensual services and foreplay acts during the sex session so that their clients might explore and enjoy their sensual wishes to the fullest. Whatever the fantasies you want to fulfill with our high-profile and busty babes, they would always welcome you and will give you even more sensual and satisfactory services. Right from high-class foreplay services like BSDM, deep throat oral sex, blowjob, cum in mouth, etc. to the highly satisfying sex sessions like anal sex, spooning, threesome, and others, you will be happily provided as per your requests.</p>\r\n\r\n<p>Our&nbsp;escorts are very much comfortable with their clients&rsquo; urges and this is the reason we want you to open up your heart and reveal all those things that you want to experience with our beauties. No need to hide any of your desires in any manner as the escorts are more than happy if they find your hidden urges. If we talk about 100% real sex satisfaction, then it means to us. Our escort services are only limited to providing only coitus services and foreplay acts as you will also be enjoying some other sensual services as per your desires. They are classy and open-minded, so you would never find it challenging to get comfortable with our&nbsp;Goa&nbsp;escorts - the friendly environment would naturally encourage you to talk of your erotic desires.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"http://www.missnavya.com/assets/img/gallery/20211120140256_gallery-8.jpg\" /></td>\r\n			<td><img alt=\"\" src=\"http://www.missnavya.com/assets/img/gallery/20211120140247_gallery-7.jpg\" /></td>\r\n			<td><img alt=\"\" src=\"http://www.missnavya.com/assets/img/gallery/20211120140236_gallery-6.jpg\" /></td>\r\n			<td><img alt=\"\" src=\"http://www.missnavya.com/assets/img/gallery/20211120140231_gallery-5.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"http://www.missnavya.com/assets/img/gallery/20211120140224_gallery-4.jpg\" /></td>\r\n			<td><img alt=\"\" src=\"http://www.missnavya.com/assets/img/gallery/20211120140217_gallery-3.jpg\" /></td>\r\n			<td><img alt=\"\" src=\"http://www.missnavya.com/assets/img/gallery/20211120140210_gallery-2.jpg\" /></td>\r\n			<td><img alt=\"\" src=\"http://www.missnavya.com/assets/img/gallery/20211120140157_gallery-1.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We always aim at providing you with the utmost sexual pleasure, and our girls leave no stone unturned for giving you memorable experiences in&nbsp;Guwahati. Our erotic escorts in&nbsp;Goa&nbsp;use many sensual services and foreplay acts during the sex session so that their clients might explore and enjoy their sensual wishes to the fullest. Whatever the fantasies you want to fulfill with our high-profile and busty babes, they would always welcome you and will give you even more sensual and satisfactory services. Right from high-class foreplay services like BSDM, deep throat oral sex, blowjob, cum in mouth, etc. to the highly satisfying sex sessions like anal sex, spooning, threesome, and others, you will be happily provided as per your requests.</p>\r\n', '20220115194612_9.jpg', 'Escort', '1234560000', '', '1', '15-01-2022 07:54 pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `websitepagecontent`
--

CREATE TABLE `websitepagecontent` (
  `id` int(11) NOT NULL,
  `pid` varchar(10) NOT NULL,
  `header_id` varchar(20) NOT NULL,
  `heading` text NOT NULL,
  `subheading` text NOT NULL,
  `content` text NOT NULL,
  `position` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `up_id` varchar(20) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `websitepagecontent`
--

INSERT INTO `websitepagecontent` (`id`, `pid`, `header_id`, `heading`, `subheading`, `content`, `position`, `status`, `up_id`, `date`) VALUES
(98, '42', '', 'Section One', 'yoauKlIhqt', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac diam accumsan, lacinia turpis a, egestas elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam finibus turpis id leo semper, eget consequat dui pretium. Nulla in sapien et enim molestie tristique et a tortor. Proin tempor odio tempor nulla convallis laoreet. Nullam malesuada rutrum pharetra. Quisque congue urna eu egestas sagittis. Suspendisse congue purus ut urna rutrum, a tempor neque finibus.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Entry Header 1</th>\r\n			<th>Entry Header 2</th>\r\n			<th>Entry Header 3</th>\r\n			<th>Entry Header 4</th>\r\n		</tr>\r\n		<tr>\r\n			<td>Entry First Line 1</td>\r\n			<td>Entry First Line 2</td>\r\n			<td>Entry First Line 3</td>\r\n			<td>Entry First Line 4</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Entry Line 1</td>\r\n			<td>Entry Line 2</td>\r\n			<td>Entry Line 3</td>\r\n			<td>Entry Line 4</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Entry Last Line 1</td>\r\n			<td>Entry Last Line 2</td>\r\n			<td>Entry Last Line 3</td>\r\n			<td>Entry Last Line 4</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 1, '1', '', '28-08-2021'),
(99, '42', '', 'Section Two', 'VgFeqNbujw', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac diam accumsan, lacinia turpis a, egestas elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam finibus turpis id leo semper, eget consequat dui pretium. Nulla in sapien et enim molestie tristique et a tortor. Proin tempor odio tempor nulla convallis laoreet. Nullam malesuada rutrum pharetra. Quisque congue urna eu egestas sagittis. Suspendisse congue purus ut urna rutrum, a tempor neque finibus.</p>\r\n', 2, '1', '', '28-08-2021'),
(100, '42', '', 'Section Three', 'gyCJwWkaVt', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac diam accumsan, lacinia turpis a, egestas elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam finibus turpis id leo semper, eget consequat dui pretium. Nulla in sapien et enim molestie tristique et a tortor. Proin tempor odio tempor nulla convallis laoreet. Nullam malesuada rutrum pharetra. Quisque congue urna eu egestas sagittis. Suspendisse congue purus ut urna rutrum, a tempor neque finibus.</p>\r\n', 4, '1', '', '28-08-2021'),
(101, '42', '', 'Section Four', 'VrXrfpZtLu', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac diam accumsan, lacinia turpis a, egestas elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam finibus turpis id leo semper, eget consequat dui pretium. Nulla in sapien et enim molestie tristique et a tortor. Proin tempor odio tempor nulla convallis laoreet. Nullam malesuada rutrum pharetra. Quisque congue urna eu egestas sagittis. Suspendisse congue purus ut urna rutrum, a tempor neque finibus.</p>\r\n', 3, '1', '', '28-08-2021'),
(102, '42', '', 'Section Five', 'HkNmXyzRNa', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac diam accumsan, lacinia turpis a, egestas elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam finibus turpis id leo semper, eget consequat dui pretium. Nulla in sapien et enim molestie tristique et a tortor. Proin tempor odio tempor nulla convallis laoreet. Nullam malesuada rutrum pharetra. Quisque congue urna eu egestas sagittis. Suspendisse congue purus ut urna rutrum, a tempor neque finibus.</p>\r\n', 5, '1', '', '28-08-2021'),
(103, '43', '', 'Section One', 'iPOZqaiEsS', '<p>Donec vel metus et sapien tempor tincidunt a vel ex. Nunc id lorem varius, euismod neque eu, eleifend ante. Etiam vitae varius metus. Vivamus vulputate ipsum id tellus molestie feugiat. Morbi ornare dui vel pulvinar imperdiet. Duis et imperdiet nulla. Vestibulum in porttitor ligula. Etiam consequat tortor non lectus consequat aliquet. Praesent ornare mauris ut neque ornare varius. Proin vel metus sapien. Donec iaculis sem ac neque tempor, at rhoncus libero varius.</p>\r\n', 1, '1', '', '28-08-2021'),
(104, '43', '', 'Section Two', 'yRdWGacgqO', '<p>Donec vel metus et sapien tempor tincidunt a vel ex. Nunc id lorem varius, euismod neque eu, eleifend ante. Etiam vitae varius metus. Vivamus vulputate ipsum id tellus molestie feugiat. Morbi ornare dui vel pulvinar imperdiet. Duis et imperdiet nulla. Vestibulum in porttitor ligula. Etiam consequat tortor non lectus consequat aliquet. Praesent ornare mauris ut neque ornare varius. Proin vel metus sapien. Donec iaculis sem ac neque tempor, at rhoncus libero varius.</p>\r\n', 2, '1', '', '28-08-2021'),
(105, '43', '', 'Section Three', 'eBmlfIRRHZ', '<p>Donec vel metus et sapien tempor tincidunt a vel ex. Nunc id lorem varius, euismod neque eu, eleifend ante. Etiam vitae varius metus. Vivamus vulputate ipsum id tellus molestie feugiat. Morbi ornare dui vel pulvinar imperdiet. Duis et imperdiet nulla. Vestibulum in porttitor ligula. Etiam consequat tortor non lectus consequat aliquet. Praesent ornare mauris ut neque ornare varius. Proin vel metus sapien. Donec iaculis sem ac neque tempor, at rhoncus libero varius.</p>\r\n', 3, '1', '', '28-08-2021'),
(106, '43', '', 'Section Four', 'FAquZEdJpK', '<p>Donec vel metus et sapien tempor tincidunt a vel ex. Nunc id lorem varius, euismod neque eu, eleifend ante. Etiam vitae varius metus. Vivamus vulputate ipsum id tellus molestie feugiat. Morbi ornare dui vel pulvinar imperdiet. Duis et imperdiet nulla. Vestibulum in porttitor ligula. Etiam consequat tortor non lectus consequat aliquet. Praesent ornare mauris ut neque ornare varius. Proin vel metus sapien. Donec iaculis sem ac neque tempor, at rhoncus libero varius.</p>\r\n', 4, '1', '', '28-08-2021'),
(107, '44', '', 'Section One', 'CQnuLxILvk', '<p>Donec vel metus et sapien tempor tincidunt a vel ex. Nunc id lorem varius, euismod neque eu, eleifend ante. Etiam vitae varius metus. Vivamus vulputate ipsum id tellus molestie feugiat. Morbi ornare dui vel pulvinar imperdiet. Duis et imperdiet nulla. Vestibulum in porttitor ligula. Etiam consequat tortor non lectus consequat aliquet. Praesent ornare mauris ut neque ornare varius. Proin vel metus sapien. Donec iaculis sem ac neque tempor, at rhoncus libero varius.</p>\r\n\r\n<p>Donec vel metus et sapien tempor tincidunt a vel ex. Nunc id lorem varius, euismod neque eu, eleifend ante. Etiam vitae varius metus. Vivamus vulputate ipsum id tellus molestie feugiat. Morbi ornare dui vel pulvinar imperdiet. Duis et imperdiet nulla. Vestibulum in porttitor ligula. Etiam consequat tortor non lectus consequat aliquet. Praesent ornare mauris ut neque ornare varius. Proin vel metus sapien. Donec iaculis sem ac neque tempor, at rhoncus libero varius.</p>\r\n', 3, '1', '', '28-08-2021'),
(108, '44', '', 'Section Two', 'xnXozpmZZB', '<p>Donec vel metus et sapien tempor tincidunt a vel ex. Nunc id lorem varius, euismod neque eu, eleifend ante. Etiam vitae varius metus. Vivamus vulputate ipsum id tellus molestie feugiat. Morbi ornare dui vel pulvinar imperdiet. Duis et imperdiet nulla. Vestibulum in porttitor ligula. Etiam consequat tortor non lectus consequat aliquet. Praesent ornare mauris ut neque ornare varius. Proin vel metus sapien. Donec iaculis sem ac neque tempor, at rhoncus libero varius.</p>\r\n', 4, '1', '', '28-08-2021'),
(109, '44', '', 'Section Three', 'yQgMNjWaWx', '<p>Donec vel metus et sapien tempor tincidunt a vel ex. Nunc id lorem varius, euismod neque eu, eleifend ante. Etiam vitae varius metus. Vivamus vulputate ipsum id tellus molestie feugiat. Morbi ornare dui vel pulvinar imperdiet. Duis et imperdiet nulla. Vestibulum in porttitor ligula. Etiam consequat tortor non lectus consequat aliquet. Praesent ornare mauris ut neque ornare varius. Proin vel metus sapien. Donec iaculis sem ac neque tempor, at rhoncus libero varius.</p>\r\n', 2, '1', '', '28-08-2021'),
(110, '44', '', 'Section Four', 'IqksWZLrRw', '<p>Donec vel metus et sapien tempor tincidunt a vel ex. Nunc id lorem varius, euismod neque eu, eleifend ante. Etiam vitae varius metus. Vivamus vulputate ipsum id tellus molestie feugiat. Morbi ornare dui vel pulvinar imperdiet. Duis et imperdiet nulla. Vestibulum in porttitor ligula. Etiam consequat tortor non lectus consequat aliquet. Praesent ornare mauris ut neque ornare varius. Proin vel metus sapien. Donec iaculis sem ac neque tempor, at rhoncus libero varius.</p>\r\n', 1, '1', '', '28-08-2021'),
(111, '45', '', 'Section One', 'SPmBFLfsts', '<p>Aenean tincidunt ligula lorem, eget lacinia leo pharetra nec. Praesent sed turpis et enim dapibus pharetra. Aenean tincidunt sem sed ipsum ultricies, a eleifend diam lacinia. Maecenas condimentum bibendum nunc nec consequat. Ut nibh arcu, congue in ante at, fringilla pretium nulla. Suspendisse gravida, lectus ac aliquam volutpat, ante metus imperdiet justo, non dapibus lectus tellus nec lectus. Aliquam erat volutpat. Donec sed nunc ut ipsum placerat tristique sit amet at lectus. Aliquam tempor mi eros, in congue ante blandit at. Fusce at molestie sem, a efficitur augue. Morbi posuere mollis metus, sed condimentum nisl lobortis a.</p>\r\n', 1, '1', '', '28-08-2021'),
(113, '45', '', 'Section Three', 'JvQkSsTlng', '<p>Aenean tincidunt ligula lorem, eget lacinia leo pharetra nec. Praesent sed turpis et enim dapibus pharetra. Aenean tincidunt sem sed ipsum ultricies, a eleifend diam lacinia. Maecenas condimentum bibendum nunc nec consequat. Ut nibh arcu, congue in ante at, fringilla pretium nulla. Suspendisse gravida, lectus ac aliquam volutpat, ante metus imperdiet justo, non dapibus lectus tellus nec lectus. Aliquam erat volutpat. Donec sed nunc ut ipsum placerat tristique sit amet at lectus. Aliquam tempor mi eros, in congue ante blandit at. Fusce at molestie sem, a efficitur augue. Morbi posuere mollis metus, sed condimentum nisl lobortis a.</p>\r\n', 2, '1', '', '28-08-2021'),
(114, '46', '', 'Section One', 'YSvrefbZuY', '<p>sdfsdf</p>\r\n', 1, '1', '', '03-09-2021'),
(115, '46', '', 'fdgsdfg', 'xduHmfAsit', '<p>dfgdsfg</p>\r\n', 2, '1', '', '03-09-2021'),
(116, '46', '', 'sdfgdsfg', 'zDzHlSSJeU', '<p>sdfgdfg</p>\r\n', 3, '1', '', '03-09-2021'),
(117, '47', '', 'Section One', 'bzSXdEnqpk', '<p>sdf</p>\r\n', 1, '1', '', '03-09-2021'),
(118, '48', '', 'asdf', 'mHeQxeDVVz', '<p>sdfaf</p>\r\n', 1, '1', '', '03-09-2021'),
(119, '49', '', 'Section One', 'fIOMEpiOiH', '<p>dfghj</p>\r\n', 1, '1', '', '03-09-2021');

-- --------------------------------------------------------

--
-- Table structure for table `websiteslider`
--

CREATE TABLE `websiteslider` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `heading` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `websiteslider`
--

INSERT INTO `websiteslider` (`id`, `image`, `heading`, `content`, `date`, `status`) VALUES
(7, '20220115144534_home-banner-desktop.jpg', '', '', '15-01-2022 02:45 pm', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disclaimer`
--
ALTER TABLE `disclaimer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websitefooter`
--
ALTER TABLE `websitefooter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websiteheader`
--
ALTER TABLE `websiteheader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websitehomepage`
--
ALTER TABLE `websitehomepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websitepage`
--
ALTER TABLE `websitepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websitepagecontent`
--
ALTER TABLE `websitepagecontent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websiteslider`
--
ALTER TABLE `websiteslider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `disclaimer`
--
ALTER TABLE `disclaimer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `privacy`
--
ALTER TABLE `privacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `websitefooter`
--
ALTER TABLE `websitefooter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `websiteheader`
--
ALTER TABLE `websiteheader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `websitehomepage`
--
ALTER TABLE `websitehomepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `websitepage`
--
ALTER TABLE `websitepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `websitepagecontent`
--
ALTER TABLE `websitepagecontent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `websiteslider`
--
ALTER TABLE `websiteslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2017 at 07:37 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pottershouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `authorID` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `approvalStatus` varchar(20) NOT NULL,
  `dateCreated` date NOT NULL,
  `expirationDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `title`, `authorID`, `description`, `approvalStatus`, `dateCreated`, `expirationDate`) VALUES
(2, 'Planting Churches', '3', 'List of Churches Across Asia\r\n*Indonesia\r\n*Malaysia\r\n*Vietnam\r\n*Japan\r\n*etc.', 'Approved', '2016-12-05', '2017-08-27'),
(3, 'Church Leader''s Conference', '3', 'This is an example of a page. Unlike posts, which are displayed on your blog’s front page in the order they’re published, pages are better suited for more timeless content that you want to be easily accessible, like your About or Contact information. Click the Edit link to make changes to this page or add another page.', 'Approved', '2016-12-05', '2017-08-03'),
(4, 'Go & Preach the Word of God', '3', 'This is an example of a page. Unlike posts, which are displayed on your blog’s front page in the order they’re published, pages are better suited for more timeless content that you want to be easily accessible, like your About or Contact information. Click the Edit link to make changes to this page or add another page.', 'Approved', '2016-12-05', '2017-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `churches`
--

CREATE TABLE `churches` (
  `church_Id` int(11) NOT NULL,
  `church_Name` varchar(255) NOT NULL,
  `pastor_Id` int(11) NOT NULL,
  `city_Id` int(11) NOT NULL,
  `province_Id` int(11) NOT NULL,
  `region_Id` int(11) NOT NULL,
  `brgy_Id` int(11) NOT NULL,
  `address` text NOT NULL,
  `schedule` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `create_Date` date NOT NULL,
  `created_By` int(11) NOT NULL,
  `modified_Date` date NOT NULL,
  `modified_By` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `churches`
--

INSERT INTO `churches` (`church_Id`, `church_Name`, `pastor_Id`, `city_Id`, `province_Id`, `region_Id`, `brgy_Id`, `address`, `schedule`, `picture`, `create_Date`, `created_By`, `modified_Date`, `modified_By`) VALUES
(1, 'The Potter''s House Christian Center Mandaluyong', 2, 1364, 70, 14, 36259, '<p>Mayon Street Boni Ave, Mandaluyong, Metro Manila</p>', '(02) 401 6487', 'RegionIV-A.jpg', '2017-01-18', 5, '2017-02-03', 3),
(2, 'The Potter''s House Christian Center Upper Antipolo', 3, 428, 19, 4, 11051, '<p>TANAG EXT. CORNER SITIO, BAGONG BUHAY TRICYCLE TERMINAL, ANTIPOLO CITY</p>', '09123456789', 'NCR.jpg', '2017-01-18', 5, '2017-02-03', 3),
(7, 'Victory Chapel', 1, 1464, 53, 3, 76, '<p>Davao City</p>', '<div class="s-6" style="box-sizing: border-box; margin: 0px; float: left; position: static; width: 179.984px; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;">\n<p>Wednesday Evening<br />\nFriday Discipleship<br />\nSunday School<br />\nSunday Morning<br />\nSunday Evening</p>\n</div>\n\n<div class="s-6" style="box-sizing: border-box; margin: 0px; float: left; position: static; width: 179.984px; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 16px;">\n<p>07:00 PM<br />\n06:00 PM<br />\n09:00 AM<br />\n10:00 AM<br />\n07:00 PM</p>\n</div>\n', 'header_21.png', '2017-01-22', 3, '2017-02-06', 3),
(8, 'Potter''s House Fellowship Center', 6, 1367, 68, 14, 36283, '<h1>Malaya St</h1>\n\n<div style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; font-size: medium; background-color: rgba(34, 34, 34, 0.8);">\n<h2 style="font-style:inherit">Marikina, Metro Manila</h2>\n</div>', '<p>Bible for ages -&nbsp;09:00am<br />\nSunday morning service -&nbsp;10:00am<br />\nSunday evening service -&nbsp;07:00pm</p>\n\n<p>Wednesday midweek service - 06:00pm</p>\n', 'default.png', '2017-02-06', 3, '2017-02-06', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('073c701341531d98db2d4ffb22c97502', '0.0.0.0', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/5', 1486362945, 'a:9:{s:10:"DX_user_id";s:1:"3";s:11:"DX_username";s:0:"";s:10:"DX_role_id";s:1:"7";s:12:"DX_role_name";s:5:"Admin";s:18:"DX_parent_roles_id";a:0:{}s:20:"DX_parent_roles_name";a:0:{}s:13:"DX_permission";a:2:{s:4:"edit";s:1:"1";s:6:"delete";s:1:"1";}s:21:"DX_parent_permissions";a:0:{}s:12:"DX_logged_in";s:1:"1";}');

-- --------------------------------------------------------

--
-- Table structure for table `congregation`
--

CREATE TABLE `congregation` (
  `id` int(11) NOT NULL,
  `completeName` varchar(255) NOT NULL,
  `englishName` varchar(255) NOT NULL,
  `presentAddress` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `congregation`
--

INSERT INTO `congregation` (`id`, `completeName`, `englishName`, `presentAddress`, `country`) VALUES
(1, 'Scott Rogers', 'Scott Rogers', 'Britain', 'United Kingdom'),
(2, 'John Stephen Wade', 'John Stephen Wade', 'Sydney', 'Australia'),
(3, 'Amy Smith', 'Amy Smith', 'New York', 'United Stated of America');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `cuID` int(11) NOT NULL,
  `cu_email` varchar(250) NOT NULL,
  `cu_subject` varchar(250) NOT NULL,
  `cu_message` text NOT NULL,
  `cu_name` varchar(250) NOT NULL,
  `cu_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(350) NOT NULL,
  `attachedment` varchar(255) NOT NULL,
  `approvalStatus` varchar(255) NOT NULL,
  `expiration` date NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date`, `time`, `title`, `body`, `image`, `link`, `attachedment`, `approvalStatus`, `expiration`, `created`) VALUES
(1, '2014-08-16', '08:00', 'Home Bible Studies', 'Home Bible Studies meet on alternate Fridays throughout the Tri-Cities area (English and Spanish) beginning November 4. This season we will be looking into God''s word to discover how we can tune in to hear God''s voice.', '5a4b29_adbb4e72346e4354b2eac8f767673512-mv2.png', 'http://rashedblog.com', 'attachement.jpg', 'Approved', '2017-08-31', '2014-08-15 03:10:10'),
(9, '2014-08-01', '10:30', 'Test Event for Potter HOuse', '<p>Listen to the Word of God</p>', '5a4b29_d3660cbe20b047a8a6736184645e6b1f.png', 'rashedblo.com', '0', 'Approved', '2017-12-22', '2014-08-17 00:55:52'),
(10, '2014-08-02', '09:00', 'Upcoming Events', '<p>Come And Listen</p>', '5a4b29_4e4872e9150e41e295be5fdc4f75b8b7-mv2.png', 'sdfaf', '0', 'Approved', '2017-12-23', '2014-08-17 00:58:41'),
(12, '2014-08-01', '11:30', 'Potters House Logo', '<p>dfsasdfa</p>', '5a4b29_1b3c9ecb72b64ecea847504f57f1f5a1.png', 'rashedblo.com', '0', 'Approved', '2017-12-30', '2014-08-17 01:02:13'),
(13, '2014-08-01', '11:30', 'Event One', '<p>This is an event</p>', '139b4f_acd3a06d5fe14ad1bfcd440721e947b2.png', 'rashedblo.com', '0', 'Approved', '2017-11-01', '2014-08-17 01:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `time`) VALUES
(1, '0.0.0.0', '2011-10-23 19:00:08'),
(2, '0.0.0.0', '2011-10-23 19:14:57'),
(3, '0.0.0.0', '2011-10-23 19:20:24');

-- --------------------------------------------------------

--
-- Table structure for table `pastors`
--

CREATE TABLE `pastors` (
  `id` int(11) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `pastorswife` varchar(250) NOT NULL,
  `contacts` text NOT NULL,
  `emails` text NOT NULL,
  `create_Date` date NOT NULL,
  `created_By` int(11) NOT NULL,
  `modified_Date` date NOT NULL,
  `modified_By` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pastors`
--

INSERT INTO `pastors` (`id`, `lastName`, `firstName`, `middleName`, `photo`, `pastorswife`, `contacts`, `emails`, `create_Date`, `created_By`, `modified_Date`, `modified_By`) VALUES
(1, 'Mitchell', 'Wayman ', 'Othell', 'waymanomitchell.jpg', '', '999-1232,442-1132', 'victorychurch@yahoo.com', '2017-02-06', 5, '2017-02-06', 5),
(2, 'Desipida', 'Boyet', '', 'boyetdesipida.jpg', '', '(02) 401 6487', 'albertdesipida@yahoo.com', '2017-02-06', 5, '2017-02-06', 5),
(3, 'Salucena', 'Ramelito', 'Babasa', 'ramilsalucena.jpg', 'Sister Josefa Lim Salucena', '09123456789', 'ramilsalucena@yahoo.com', '2017-02-06', 5, '2017-02-06', 3),
(6, 'Paramio', 'Ricky', '', 'default.png', '', '', '', '2017-02-06', 3, '2017-02-06', 3);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) UNSIGNED NOT NULL,
  `data` text COLLATE utf8_bin
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `data`) VALUES
(1, 7, 'a:2:{s:4:"edit";s:1:"1";s:6:"delete";s:1:"1";}'),
(2, 1, 'a:3:{s:3:"uri";a:1:{i:0;s:1:"/";}s:4:"edit";s:1:"1";s:6:"delete";s:0:"";}'),
(3, 5, 'a:3:{s:3:"uri";a:1:{i:0;s:1:"/";}s:4:"edit";s:1:"1";s:6:"delete";s:0:"";}'),
(4, 3, 'a:3:{s:3:"uri";a:1:{i:0;s:1:"/";}s:4:"edit";s:1:"1";s:6:"delete";s:0:"";}');

-- --------------------------------------------------------

--
-- Table structure for table `person_level`
--

CREATE TABLE `person_level` (
  `id` bigint(20) NOT NULL,
  `level_name` varchar(200) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person_level`
--

INSERT INTO `person_level` (`id`, `level_name`, `created`, `modified`) VALUES
(1, 'Prospective', '2012-03-27 17:09:37', '2012-03-27 10:09:37'),
(2, 'Cool', '2012-03-27 17:09:50', '2012-03-27 10:09:50'),
(3, 'Warm', '2012-03-27 17:10:03', '2012-03-27 10:10:03'),
(4, 'Highly Prospective', '2012-03-27 17:10:15', '2012-03-27 10:10:15');

-- --------------------------------------------------------

--
-- Table structure for table `ph_brgy`
--

CREATE TABLE `ph_brgy` (
  `id` int(11) NOT NULL,
  `brgyCode` varchar(255) DEFAULT NULL,
  `brgyDesc` text,
  `regCode` varchar(255) DEFAULT NULL,
  `provCode` varchar(255) DEFAULT NULL,
  `citymunCode` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ph_brgy`
--

INSERT INTO `ph_brgy` (`id`, `brgyCode`, `brgyDesc`, `regCode`, `provCode`, `citymunCode`) VALUES
(1, '012801001', 'Adams (Pob.)', '01', '0128', '012801'),
(2, '012802001', 'Bani', '01', '0128', '012802'),
(3, '012802002', 'Buyon', '01', '0128', '012802'),
(4, '012802003', 'Cabaruan', '01', '0128', '012802'),
(5, '012802004', 'Cabulalaan', '01', '0128', '012802'),
(6, '012802005', 'Cabusligan', '01', '0128', '012802'),
(7, '012802006', 'Cadaratan', '01', '0128', '012802'),
(8, '012802007', 'Calioet-Libong', '01', '0128', '012802'),
(9, '012802008', 'Casilian', '01', '0128', '012802'),
(10, '012802009', 'Corocor', '01', '0128', '012802'),
(11, '012802011', 'Duripes', '01', '0128', '012802'),
(12, '012802012', 'Ganagan', '01', '0128', '012802'),
(13, '012802013', 'Libtong', '01', '0128', '012802'),
(14, '012802014', 'Macupit', '01', '0128', '012802'),
(15, '012802015', 'Nambaran', '01', '0128', '012802'),
(16, '012802016', 'Natba', '01', '0128', '012802'),
(17, '012802017', 'Paninaan', '01', '0128', '012802'),
(18, '012802018', 'Pasiocan', '01', '0128', '012802'),
(19, '012802019', 'Pasngal', '01', '0128', '012802'),
(20, '012802020', 'Pipias', '01', '0128', '012802'),
(21, '012802021', 'Pulangi', '01', '0128', '012802'),
(22, '012802022', 'Pungto', '01', '0128', '012802'),
(23, '012802024', 'San Agustin I (Pob.)', '01', '0128', '012802'),
(24, '012802025', 'San Agustin II (Pob.)', '01', '0128', '012802'),
(25, '012802027', 'San Andres I (Pob.)', '01', '0128', '012802'),
(26, '012802028', 'San Andres II (Pob.)', '01', '0128', '012802'),
(27, '012802030', 'San Gabriel I (Pob.)', '01', '0128', '012802'),
(28, '012802031', 'San Gabriel II (Pob.)', '01', '0128', '012802'),
(29, '012802033', 'San Pedro I (Pob.)', '01', '0128', '012802'),
(30, '012802034', 'San Pedro II (Pob.)', '01', '0128', '012802'),
(31, '012802036', 'San Roque I (Pob.)', '01', '0128', '012802'),
(32, '012802037', 'San Roque II (Pob.)', '01', '0128', '012802'),
(33, '012802039', 'San Simon I (Pob.)', '01', '0128', '012802'),
(34, '012802040', 'San Simon II (Pob.)', '01', '0128', '012802'),
(35, '012802041', 'San Vicente (Pob.)', '01', '0128', '012802'),
(36, '012802042', 'Sangil', '01', '0128', '012802'),
(37, '012802044', 'Santa Filomena I (Pob.)', '01', '0128', '012802'),
(38, '012802045', 'Santa Filomena II (Pob.)', '01', '0128', '012802'),
(39, '012802046', 'Santa Rita (Pob.)', '01', '0128', '012802'),
(40, '012802047', 'Santo Cristo I (Pob.)', '01', '0128', '012802'),
(41, '012802048', 'Santo Cristo II (Pob.)', '01', '0128', '012802'),
(42, '012802050', 'Tambidao', '01', '0128', '012802'),
(43, '012802051', 'Teppang', '01', '0128', '012802'),
(44, '012802052', 'Tubburan', '01', '0128', '012802'),
(45, '012803001', 'Alay-Nangbabaan (Alay 15-B)', '01', '0128', '012803'),
(46, '012803002', 'Alogoog', '01', '0128', '012803'),
(47, '012803003', 'Ar-arusip', '01', '0128', '012803'),
(48, '012803004', 'Aring', '01', '0128', '012803'),
(49, '012803005', 'Balbaldez', '01', '0128', '012803'),
(50, '012803006', 'Bato', '01', '0128', '012803'),
(51, '012803007', 'Camanga', '01', '0128', '012803'),
(52, '012803008', 'Canaan (Pob.)', '01', '0128', '012803'),
(53, '012803009', 'Caraitan', '01', '0128', '012803'),
(54, '012803011', 'Gabut Norte', '01', '0128', '012803'),
(55, '012803012', 'Gabut Sur', '01', '0128', '012803'),
(56, '012803013', 'Garreta (Pob.)', '01', '0128', '012803'),
(57, '012803016', 'Labut', '01', '0128', '012803'),
(58, '012803017', 'Lacuben', '01', '0128', '012803'),
(59, '012803018', 'Lubigan', '01', '0128', '012803'),
(60, '012803020', 'Mabusag Norte', '01', '0128', '012803'),
(61, '012803021', 'Mabusag Sur', '01', '0128', '012803'),
(62, '012803022', 'Madupayas', '01', '0128', '012803'),
(63, '012803023', 'Morong', '01', '0128', '012803'),
(64, '012803025', 'Nagrebcan', '01', '0128', '012803'),
(65, '012803026', 'Napu', '01', '0128', '012803'),
(66, '012803027', 'La Virgen Milagrosa (Paguetpet)', '01', '0128', '012803'),
(67, '012803028', 'Pagsanahan Norte', '01', '0128', '012803'),
(68, '012803029', 'Pagsanahan Sur', '01', '0128', '012803'),
(69, '012803030', 'Paltit', '01', '0128', '012803'),
(70, '012803031', 'Parang', '01', '0128', '012803'),
(71, '012803032', 'Pasuc', '01', '0128', '012803'),
(72, '012803034', 'Santa Cruz Norte', '01', '0128', '012803'),
(73, '012803035', 'Santa Cruz Sur', '01', '0128', '012803'),
(74, '012803036', 'Saud', '01', '0128', '012803'),
(75, '012803037', 'Turod', '01', '0128', '012803'),
(76, '012804001', 'Abaca', '01', '0128', '012804'),
(77, '012804002', 'Bacsil', '01', '0128', '012804'),
(78, '012804003', 'Banban', '01', '0128', '012804'),
(79, '012804004', 'Baruyen', '01', '0128', '012804'),
(80, '012804005', 'Dadaor', '01', '0128', '012804'),
(81, '012804006', 'Lanao', '01', '0128', '012804'),
(82, '012804007', 'Malasin', '01', '0128', '012804'),
(83, '012804008', 'Manayon', '01', '0128', '012804'),
(84, '012804009', 'Masikil', '01', '0128', '012804'),
(85, '012804010', 'Nagbalagan', '01', '0128', '012804'),
(86, '012804011', 'Payac', '01', '0128', '012804'),
(87, '012804012', 'San Lorenzo (Pob.)', '01', '0128', '012804'),
(88, '012804014', 'Taguiporo', '01', '0128', '012804'),
(89, '012804015', 'Utol', '01', '0128', '012804'),
(90, '012805001', 'Aglipay (Pob.)', '01', '0128', '012805'),
(91, '012805002', 'Baay', '01', '0128', '012805'),
(92, '012805003', 'Baligat', '01', '0128', '012805'),
(93, '012805004', 'Bungon', '01', '0128', '012805'),
(94, '012805005', 'Baoa East', '01', '0128', '012805'),
(95, '012805006', 'Baoa West', '01', '0128', '012805'),
(96, '012805007', 'Barani (Pob.)', '01', '0128', '012805'),
(97, '012805009', 'Ben-agan (Pob.)', '01', '0128', '012805'),
(98, '012805010', 'Bil-loca', '01', '0128', '012805'),
(99, '012805011', 'Biningan', '01', '0128', '012805'),
(100, '012805012', 'Callaguip (Pob.)', '01', '0128', '012805'),
(101, '012805013', 'Camandingan', '01', '0128', '012805'),
(102, '012805014', 'Camguidan', '01', '0128', '012805'),
(103, '012805015', 'Cangrunaan (Pob.)', '01', '0128', '012805'),
(104, '012805016', 'Capacuan', '01', '0128', '012805'),
(105, '012805017', 'Caunayan (Pob.)', '01', '0128', '012805'),
(106, '012805018', 'Valdez Pob. (Caoayan)', '01', '0128', '012805'),
(107, '012805019', 'Colo', '01', '0128', '012805'),
(108, '012805020', 'Pimentel (Cubol)', '01', '0128', '012805'),
(109, '012805021', 'Dariwdiw', '01', '0128', '012805'),
(110, '012805022', 'Acosta Pob. (Iloilo)', '01', '0128', '012805'),
(111, '012805023', 'Ablan Pob. (Labucao)', '01', '0128', '012805'),
(112, '012805024', 'Lacub (Pob.)', '01', '0128', '012805'),
(113, '012805025', 'Mabaleng', '01', '0128', '012805'),
(114, '012805026', 'Magnuang', '01', '0128', '012805'),
(115, '012805027', 'Maipalig', '01', '0128', '012805'),
(116, '012805028', 'Nagbacalan', '01', '0128', '012805'),
(117, '012805029', 'Naguirangan', '01', '0128', '012805'),
(118, '012805030', 'Ricarte Pob. (Nalasin)', '01', '0128', '012805'),
(119, '012805031', 'Palongpong', '01', '0128', '012805'),
(120, '012805032', 'Palpalicong (Pob.)', '01', '0128', '012805'),
(121, '012805033', 'Parangopong', '01', '0128', '012805'),
(122, '012805034', 'Payao', '01', '0128', '012805'),
(123, '012805035', 'Quiling Norte', '01', '0128', '012805'),
(124, '012805036', 'Quiling Sur', '01', '0128', '012805'),
(125, '012805037', 'Quiom', '01', '0128', '012805'),
(126, '012805038', 'Rayuray', '01', '0128', '012805'),
(127, '012805039', 'San Julian (Pob.)', '01', '0128', '012805'),
(128, '012805040', 'San Mateo', '01', '0128', '012805'),
(129, '012805041', 'San Pedro', '01', '0128', '012805'),
(130, '012805042', 'Suabit (Pob.)', '01', '0128', '012805'),
(131, '012805043', 'Sumader', '01', '0128', '012805'),
(132, '012805044', 'Tabug', '01', '0128', '012805'),
(133, '012806001', 'Ablan Sarat', '01', '0128', '012806'),
(134, '012806002', 'Agaga', '01', '0128', '012806'),
(135, '012806005', 'Bayog', '01', '0128', '012806'),
(136, '012806006', 'Bobon', '01', '0128', '012806'),
(137, '012806007', 'Buduan (Malituek)', '01', '0128', '012806'),
(138, '012806008', 'Nagsurot', '01', '0128', '012806'),
(139, '012806009', 'Paayas', '01', '0128', '012806'),
(140, '012806010', 'Pagali', '01', '0128', '012806'),
(141, '012806011', 'Poblacion', '01', '0128', '012806'),
(142, '012806013', 'Saoit', '01', '0128', '012806'),
(143, '012806014', 'Tanap', '01', '0128', '012806'),
(144, '012807001', 'Angset', '01', '0128', '012807'),
(145, '012807003', 'Barbaqueso (Pob.)', '01', '0128', '012807'),
(146, '012807004', 'Virbira', '01', '0128', '012807'),
(147, '012808001', 'Anggapang Norte', '01', '0128', '012808'),
(148, '012808002', 'Anggapang Sur', '01', '0128', '012808'),
(149, '012808003', 'Bimmanga', '01', '0128', '012808'),
(150, '012808004', 'Cabuusan', '01', '0128', '012808'),
(151, '012808005', 'Comcomloong', '01', '0128', '012808'),
(152, '012808006', 'Gaang', '01', '0128', '012808'),
(153, '012808007', 'Lang-ayan-Baramban', '01', '0128', '012808'),
(154, '012808008', 'Lioes', '01', '0128', '012808'),
(155, '012808009', 'Maglaoi Centro', '01', '0128', '012808'),
(156, '012808010', 'Maglaoi Norte', '01', '0128', '012808'),
(157, '012808011', 'Maglaoi Sur', '01', '0128', '012808'),
(158, '012808013', 'Paguludan-Salindeg', '01', '0128', '012808'),
(159, '012808014', 'Pangil', '01', '0128', '012808'),
(160, '012808015', 'Pias Norte', '01', '0128', '012808'),
(161, '012808016', 'Pias Sur', '01', '0128', '012808'),
(162, '012808017', 'Poblacion I', '01', '0128', '012808'),
(163, '012808018', 'Poblacion II', '01', '0128', '012808'),
(164, '012808019', 'Salugan', '01', '0128', '012808'),
(165, '012808020', 'San Simeon', '01', '0128', '012808'),
(166, '012808021', 'Santa Cruz', '01', '0128', '012808'),
(167, '012808022', 'Tapao-Tigue', '01', '0128', '012808'),
(168, '012808023', 'Torre', '01', '0128', '012808'),
(169, '012808024', 'Victoria', '01', '0128', '012808'),
(170, '012809001', 'Albano (Pob.)', '01', '0128', '012809'),
(171, '012809002', 'Bacsil', '01', '0128', '012809'),
(172, '012809003', 'Bagut', '01', '0128', '012809'),
(173, '012809004', 'Parado (Bangay)', '01', '0128', '012809'),
(174, '012809005', 'Baresbes', '01', '0128', '012809'),
(175, '012809006', 'Barong', '01', '0128', '012809'),
(176, '012809007', 'Bungcag', '01', '0128', '012809'),
(177, '012809009', 'Cali', '01', '0128', '012809'),
(178, '012809010', 'Capasan', '01', '0128', '012809'),
(179, '012809011', 'Dancel (Pob.)', '01', '0128', '012809'),
(180, '012809012', 'Foz', '01', '0128', '012809'),
(181, '012809013', 'Guerrero (Pob.)', '01', '0128', '012809'),
(182, '012809014', 'Lanas', '01', '0128', '012809'),
(183, '012809015', 'Lumbad', '01', '0128', '012809'),
(184, '012809016', 'Madamba (Pob.)', '01', '0128', '012809'),
(185, '012809017', 'Mandaloque', '01', '0128', '012809'),
(186, '012809018', 'Medina', '01', '0128', '012809'),
(187, '012809019', 'Ver (Naglayaan)', '01', '0128', '012809'),
(188, '012809020', 'San Marcelino (Padong)', '01', '0128', '012809'),
(189, '012809021', 'Puruganan (Pob.)', '01', '0128', '012809'),
(190, '012809022', 'Peralta (Pob.)', '01', '0128', '012809'),
(191, '012809023', 'Root (Baldias)', '01', '0128', '012809'),
(192, '012809024', 'Sagpatan', '01', '0128', '012809'),
(193, '012809025', 'Saludares', '01', '0128', '012809'),
(194, '012809026', 'San Esteban', '01', '0128', '012809'),
(195, '012809027', 'Espiritu', '01', '0128', '012809'),
(196, '012809028', 'Sulquiano (Sidiran)', '01', '0128', '012809'),
(197, '012809029', 'San Francisco (Surrate)', '01', '0128', '012809'),
(198, '012809030', 'Suyo', '01', '0128', '012809'),
(199, '012809031', 'San Marcos', '01', '0128', '012809'),
(200, '012809032', 'Elizabeth', '01', '0128', '012809'),
(201, '012810001', 'Dumalneg', '01', '0128', '012810'),
(202, '012810002', 'San Isidro', '01', '0128', '012810'),
(203, '012811001', 'Balioeg', '01', '0128', '012811'),
(204, '012811002', 'Bangsar', '01', '0128', '012811'),
(205, '012811003', 'Barbarangay', '01', '0128', '012811'),
(206, '012811004', 'Bomitog', '01', '0128', '012811'),
(207, '012811005', 'Bugasi', '01', '0128', '012811'),
(208, '012811006', 'Caestebanan', '01', '0128', '012811'),
(209, '012811008', 'Caribquib', '01', '0128', '012811'),
(210, '012811009', 'Catagtaguen', '01', '0128', '012811'),
(211, '012811011', 'Crispina', '01', '0128', '012811'),
(212, '012811012', 'Hilario (Pob.)', '01', '0128', '012811'),
(213, '012811013', 'Imelda', '01', '0128', '012811'),
(214, '012811014', 'Lorenzo (Pob.)', '01', '0128', '012811'),
(215, '012811015', 'Macayepyep', '01', '0128', '012811'),
(216, '012811016', 'Marcos (Pob.)', '01', '0128', '012811'),
(217, '012811017', 'Nagpatayan', '01', '0128', '012811'),
(218, '012811018', 'Valdez', '01', '0128', '012811'),
(219, '012811019', 'Sinamar', '01', '0128', '012811'),
(220, '012811020', 'Tabtabagan', '01', '0128', '012811'),
(221, '012811021', 'Valenciano (Pob.)', '01', '0128', '012811'),
(222, '012811022', 'Binacag', '01', '0128', '012811'),
(223, '012812001', 'Bgy. No. 42, Apaya', '01', '0128', '012812'),
(224, '012812002', 'Bgy. No. 36, Araniw', '01', '0128', '012812'),
(225, '012812003', 'Bgy. No. 56-A, Bacsil North', '01', '0128', '012812'),
(226, '012812004', 'Bgy. No. 56-B, Bacsil South', '01', '0128', '012812'),
(227, '012812005', 'Bgy. No. 41, Balacad', '01', '0128', '012812'),
(228, '012812006', 'Bgy. No. 40, Balatong', '01', '0128', '012812'),
(229, '012812007', 'Bgy. No. 55-A, Barit-Pandan', '01', '0128', '012812'),
(230, '012812008', 'Bgy. No. 47, Bengcag', '01', '0128', '012812'),
(231, '012812009', 'Bgy. No. 50, Buttong', '01', '0128', '012812'),
(232, '012812010', 'Bgy. No. 60-A, Caaoacan', '01', '0128', '012812'),
(233, '012812011', 'Bry. No. 48-A, Cabungaan North', '01', '0128', '012812'),
(234, '012812012', 'Bgy. No. 48-B, Cabungaan South', '01', '0128', '012812'),
(235, '012812013', 'Bgy. No. 37, Calayab', '01', '0128', '012812'),
(236, '012812014', 'Bgy. No. 54-B, Camangaan', '01', '0128', '012812'),
(237, '012812015', 'Bgy. No. 58, Casili', '01', '0128', '012812'),
(238, '012812016', 'Bgy. No. 61, Cataban', '01', '0128', '012812'),
(239, '012812017', 'Bgy. No. 43, Cavit', '01', '0128', '012812'),
(240, '012812019', 'Bgy. No. 49-A, Darayday', '01', '0128', '012812'),
(241, '012812020', 'Bgy. No. 59-B, Dibua North', '01', '0128', '012812'),
(242, '012812021', 'Bgy. No. 59-A, Dibua South', '01', '0128', '012812'),
(243, '012812022', 'Bgy. No. 34-B, Gabu Norte East', '01', '0128', '012812'),
(244, '012812023', 'Bgy. No. 34-A, Gabu Norte West', '01', '0128', '012812'),
(245, '012812024', 'Bgy. No. 35, Gabu Sur', '01', '0128', '012812'),
(246, '012812026', 'Bgy. No. 32-C La Paz East', '01', '0128', '012812'),
(247, '012812027', 'Bgy. No. 33-B, La Paz Proper', '01', '0128', '012812'),
(248, '012812028', 'Bgy. No. 32-B, La Paz West', '01', '0128', '012812'),
(249, '012812029', 'Bgy. No. 54-A, Lagui-Sail', '01', '0128', '012812'),
(250, '012812030', 'Bgy. No. 32-A, La Paz East', '01', '0128', '012812'),
(251, '012812031', 'Bgy. No. 33-A, La Paz Proper', '01', '0128', '012812'),
(252, '012812032', 'Bgy. No. 52-B, Lataag', '01', '0128', '012812'),
(253, '012812033', 'Bgy. No. 60-B, Madiladig', '01', '0128', '012812'),
(254, '012812034', 'Bgy. No. 38-A, Mangato East', '01', '0128', '012812'),
(255, '012812035', 'Bgy. No. 38-B, Mangato West', '01', '0128', '012812'),
(256, '012812036', 'Bgy. No. 62-A, Navotas North', '01', '0128', '012812'),
(257, '012812037', 'Bgy. No. 62-B, Navotas South', '01', '0128', '012812'),
(258, '012812038', 'Bgy. No. 46, Nalbo', '01', '0128', '012812'),
(259, '012812039', 'Bgy. No. 51-A, Nangalisan East', '01', '0128', '012812'),
(260, '012812040', 'Bgy. No. 51-B, Nangalisan West', '01', '0128', '012812'),
(261, '012812041', 'Bgy. No. 24, Nstra. Sra. De Consolacion (Pob.)', '01', '0128', '012812'),
(262, '012812042', 'Bgy. No. 7-A, Nstra. Sra. De Natividad (Pob.)', '01', '0128', '012812'),
(263, '012812043', 'Bgy. No. 7-B, Nstra. Sra. De Natividad (Pob.)', '01', '0128', '012812'),
(264, '012812044', 'Bgy. No. 27, Nstra. Sra. De Soledad (Pob.)', '01', '0128', '012812'),
(265, '012812045', 'Bgy. No. 13, Nstra. Sra. De Visitacion (Pob.)', '01', '0128', '012812'),
(266, '012812046', 'Bgy. No. 3, Nstra. Sra. Del Rosario (Pob.)', '01', '0128', '012812'),
(267, '012812047', 'Bgy. No. 57, Pila', '01', '0128', '012812'),
(268, '012812048', 'Bgy. No. 49-B, Raraburan', '01', '0128', '012812'),
(269, '012812049', 'Bgy. No. 53, Rioeng', '01', '0128', '012812'),
(270, '012812050', 'Bgy. No. 55-B, Salet-Bulangon', '01', '0128', '012812'),
(271, '012812053', 'Bgy. No. 6, San Agustin (Pob.)', '01', '0128', '012812'),
(272, '012812054', 'Bgy. No. 22, San Andres (Pob.)', '01', '0128', '012812'),
(273, '012812055', 'Bgy. No. 28, San Bernardo (Pob.)', '01', '0128', '012812'),
(274, '012812056', 'Bgy. No. 17, San Francisco (Pob.)', '01', '0128', '012812'),
(275, '012812057', 'Bgy. No. 4, San Guillermo (Pob.)', '01', '0128', '012812'),
(276, '012812058', 'Bgy. No. 15, San Guillermo (Pob.)', '01', '0128', '012812'),
(277, '012812059', 'Bgy. No. 12, San Isidro (Pob.)', '01', '0128', '012812'),
(278, '012812060', 'Bgy. No. 16, San Jacinto (Pob.)', '01', '0128', '012812'),
(279, '012812061', 'Bgy. No. 10, San Jose (Pob.)', '01', '0128', '012812'),
(280, '012812062', 'Bgy. No. 1, San Lorenzo (Pob.)', '01', '0128', '012812'),
(281, '012812063', 'Bgy. No. 26, San Marcelino (Pob.)', '01', '0128', '012812'),
(282, '012812064', 'Bgy. No. 52-A, San Mateo', '01', '0128', '012812'),
(283, '012812065', 'Bgy. No. 23, San Matias (Pob.)', '01', '0128', '012812'),
(284, '012812066', 'Bgy. No. 20, San Miguel (Pob.)', '01', '0128', '012812'),
(285, '012812067', 'Bgy. No. 21, San Pedro (Pob.)', '01', '0128', '012812'),
(286, '012812068', 'Bgy. No. 5, San Pedro (Pob.)', '01', '0128', '012812'),
(287, '012812069', 'Bry. No. 18, San Quirino (Pob.)', '01', '0128', '012812'),
(288, '012812070', 'Bgy. No. 8, San Vicente (Pob.)', '01', '0128', '012812'),
(289, '012812071', 'Bgy. No. 9, Santa Angela (Pob.)', '01', '0128', '012812'),
(290, '012812072', 'Bgy. No. 11, Santa Balbina (Pob.)', '01', '0128', '012812'),
(291, '012812073', 'Bgy. No. 25, Santa Cayetana (Pob.)', '01', '0128', '012812'),
(292, '012812074', 'Bgy. No. 2, Santa Joaquina (Pob.)', '01', '0128', '012812'),
(293, '012812075', 'Bgy. No. 19, Santa Marcela (Pob.)', '01', '0128', '012812'),
(294, '012812076', 'Bgy. No. 30-B, Santa Maria', '01', '0128', '012812'),
(295, '012812077', 'Bgy. No. 39, Santa Rosa', '01', '0128', '012812'),
(296, '012812078', 'Bgy. No. 14, Santo Tomas (Pob.)', '01', '0128', '012812'),
(297, '012812079', 'Bgy. No. 29, Santo Tomas (Pob.)', '01', '0128', '012812'),
(298, '012812080', 'Bgy. No. 30-A, Suyo', '01', '0128', '012812'),
(299, '012812081', 'Bgy. No. 31, Talingaan', '01', '0128', '012812'),
(300, '012812082', 'Bgy. No. 45, Tangid', '01', '0128', '012812'),
(301, '012812083', 'Bgy. No. 55-C, Vira', '01', '0128', '012812'),
(302, '012812084', 'Bgy. No. 44, Zamboanga', '01', '0128', '012812'),
(303, '012813001', 'Pacifico (Agunit)', '01', '0128', '012813'),
(304, '012813003', 'Imelda (Capariaan)', '01', '0128', '012813'),
(305, '012813004', 'Elizabeth (Culao)', '01', '0128', '012813'),
(306, '012813005', 'Daquioag', '01', '0128', '012813'),
(307, '012813006', 'Escoda', '01', '0128', '012813'),
(308, '012813007', 'Ferdinand', '01', '0128', '012813'),
(309, '012813008', 'Fortuna', '01', '0128', '012813'),
(310, '012813009', 'Lydia (Pob.)', '01', '0128', '012813'),
(311, '012813010', 'Mabuti', '01', '0128', '012813'),
(312, '012813011', 'Valdez (Biding)', '01', '0128', '012813'),
(313, '012813012', 'Tabucbuc (Ragas)', '01', '0128', '012813'),
(314, '012813013', 'Santiago', '01', '0128', '012813'),
(315, '012813014', 'Cacafean', '01', '0128', '012813'),
(316, '012814001', 'Acnam', '01', '0128', '012814'),
(317, '012814002', 'Barangobong', '01', '0128', '012814'),
(318, '012814003', 'Barikir', '01', '0128', '012814'),
(319, '012814004', 'Bugayong', '01', '0128', '012814'),
(320, '012814005', 'Cabittauran', '01', '0128', '012814'),
(321, '012814006', 'Caray', '01', '0128', '012814'),
(322, '012814007', 'Garnaden', '01', '0128', '012814'),
(323, '012814008', 'Naguillan (Pagpag-ong)', '01', '0128', '012814'),
(324, '012814009', 'Poblacion', '01', '0128', '012814'),
(325, '012814010', 'Santo Niño', '01', '0128', '012814'),
(326, '012814011', 'Uguis', '01', '0128', '012814'),
(327, '012815001', 'Aggasi', '01', '0128', '012815'),
(328, '012815003', 'Baduang', '01', '0128', '012815'),
(329, '012815004', 'Balaoi', '01', '0128', '012815'),
(330, '012815005', 'Burayoc', '01', '0128', '012815'),
(331, '012815006', 'Caunayan', '01', '0128', '012815'),
(332, '012815007', 'Dampig', '01', '0128', '012815'),
(333, '012815008', 'Ligaya', '01', '0128', '012815'),
(334, '012815010', 'Pancian', '01', '0128', '012815'),
(335, '012815011', 'Pasaleng', '01', '0128', '012815'),
(336, '012815012', 'Poblacion 1', '01', '0128', '012815'),
(337, '012815013', 'Poblacion 2', '01', '0128', '012815'),
(338, '012815014', 'Saguigui', '01', '0128', '012815'),
(339, '012815015', 'Saud', '01', '0128', '012815'),
(340, '012815016', 'Subec', '01', '0128', '012815'),
(341, '012815017', 'Tarrag', '01', '0128', '012815'),
(342, '012815018', 'Caparispisan', '01', '0128', '012815'),
(343, '012816001', 'Bacsil', '01', '0128', '012816'),
(344, '012816002', 'Cabagoan', '01', '0128', '012816'),
(345, '012816003', 'Cabangaran', '01', '0128', '012816'),
(346, '012816004', 'Callaguip', '01', '0128', '012816'),
(347, '012816005', 'Cayubog', '01', '0128', '012816'),
(348, '012816006', 'Dolores', '01', '0128', '012816'),
(349, '012816007', 'Laoa', '01', '0128', '012816'),
(350, '012816008', 'Masintoc', '01', '0128', '012816'),
(351, '012816009', 'Monte', '01', '0128', '012816'),
(352, '012816010', 'Mumulaan', '01', '0128', '012816'),
(353, '012816011', 'Nagbacalan', '01', '0128', '012816'),
(354, '012816012', 'Nalasin', '01', '0128', '012816'),
(355, '012816013', 'Nanguyudan', '01', '0128', '012816'),
(356, '012816014', 'Oaig-Upay-Abulao', '01', '0128', '012816'),
(357, '012816015', 'Pambaran', '01', '0128', '012816'),
(358, '012816016', 'Pannaratan (Pob.)', '01', '0128', '012816'),
(359, '012816017', 'Paratong', '01', '0128', '012816'),
(360, '012816018', 'Pasil', '01', '0128', '012816'),
(361, '012816019', 'Salbang (Pob.)', '01', '0128', '012816'),
(362, '012816020', 'San Agustin', '01', '0128', '012816'),
(363, '012816021', 'San Blas (Pob.)', '01', '0128', '012816'),
(364, '012816022', 'San Juan', '01', '0128', '012816'),
(365, '012816025', 'San Pedro', '01', '0128', '012816'),
(366, '012816028', 'San Roque (Pob.)', '01', '0128', '012816'),
(367, '012816029', 'Sangladan Pob. (Nalbuan)', '01', '0128', '012816'),
(368, '012816030', 'Santa Rita (Pob.)', '01', '0128', '012816'),
(369, '012816031', 'Sideg', '01', '0128', '012816'),
(370, '012816032', 'Suba', '01', '0128', '012816'),
(371, '012816033', 'Sungadan', '01', '0128', '012816'),
(372, '012816034', 'Surgui', '01', '0128', '012816'),
(373, '012816035', 'Veronica', '01', '0128', '012816'),
(374, '012817001', 'Batuli', '01', '0128', '012817'),
(375, '012817002', 'Binsang', '01', '0128', '012817'),
(376, '012817003', 'Nalvo (Cababaan-Nalvo)', '01', '0128', '012817'),
(377, '012817004', 'Caruan', '01', '0128', '012817'),
(378, '012817005', 'Carusikis', '01', '0128', '012817'),
(379, '012817006', 'Carusipan', '01', '0128', '012817'),
(380, '012817007', 'Dadaeman', '01', '0128', '012817'),
(381, '012817008', 'Darupidip', '01', '0128', '012817'),
(382, '012817009', 'Davila', '01', '0128', '012817'),
(383, '012817010', 'Dilanis', '01', '0128', '012817'),
(384, '012817011', 'Dilavo', '01', '0128', '012817'),
(385, '012817012', 'Estancia', '01', '0128', '012817'),
(386, '012817014', 'Naglicuan', '01', '0128', '012817'),
(387, '012817015', 'Nagsanga', '01', '0128', '012817'),
(388, '012817016', 'Ngabangab', '01', '0128', '012817'),
(389, '012817017', 'Pangil', '01', '0128', '012817'),
(390, '012817018', 'Poblacion 1', '01', '0128', '012817'),
(391, '012817019', 'Poblacion 2', '01', '0128', '012817'),
(392, '012817020', 'Poblacion 3', '01', '0128', '012817'),
(393, '012817021', 'Poblacion 4', '01', '0128', '012817'),
(394, '012817022', 'Pragata (Pragata-Bungro)', '01', '0128', '012817'),
(395, '012817023', 'Puyupuyan', '01', '0128', '012817'),
(396, '012817024', 'Sulongan', '01', '0128', '012817'),
(397, '012817025', 'Salpad', '01', '0128', '012817'),
(398, '012817026', 'San Juan', '01', '0128', '012817'),
(399, '012817027', 'Santa Catalina', '01', '0128', '012817'),
(400, '012817028', 'Santa Matilde', '01', '0128', '012817'),
(401, '012817029', 'Sapat', '01', '0128', '012817'),
(402, '012817030', 'Sulbec', '01', '0128', '012817'),
(403, '012817031', 'Surong', '01', '0128', '012817'),
(404, '012817032', 'Susugaen', '01', '0128', '012817'),
(405, '012817033', 'Tabungao', '01', '0128', '012817'),
(406, '012817034', 'Tadao', '01', '0128', '012817'),
(407, '012818001', 'Ab-abut', '01', '0128', '012818'),
(408, '012818002', 'Abucay', '01', '0128', '012818'),
(409, '012818003', 'Anao (Pob.)', '01', '0128', '012818'),
(410, '012818004', 'Arua-ay', '01', '0128', '012818'),
(411, '012818005', 'Bimmanga', '01', '0128', '012818'),
(412, '012818006', 'Boyboy', '01', '0128', '012818'),
(413, '012818007', 'Cabaroan (Pob.)', '01', '0128', '012818'),
(414, '012818008', 'Calambeg', '01', '0128', '012818'),
(415, '012818009', 'Callusa', '01', '0128', '012818'),
(416, '012818010', 'Dupitac', '01', '0128', '012818'),
(417, '012818011', 'Estancia', '01', '0128', '012818'),
(418, '012818012', 'Gayamat', '01', '0128', '012818'),
(419, '012818013', 'Lagandit', '01', '0128', '012818'),
(420, '012818014', 'Libnaoan', '01', '0128', '012818'),
(421, '012818015', 'Loing (Pob.)', '01', '0128', '012818'),
(422, '012818016', 'Maab-abaca', '01', '0128', '012818'),
(423, '012818017', 'Mangitayag', '01', '0128', '012818'),
(424, '012818018', 'Maruaya', '01', '0128', '012818'),
(425, '012818019', 'San Antonio', '01', '0128', '012818'),
(426, '012818020', 'Santa Maria', '01', '0128', '012818'),
(427, '012818021', 'Sucsuquen', '01', '0128', '012818'),
(428, '012818022', 'Tangaoan', '01', '0128', '012818'),
(429, '012818023', 'Tonoton', '01', '0128', '012818'),
(430, '012819001', 'Aglipay', '01', '0128', '012819'),
(431, '012819002', 'Apatut-Lubong', '01', '0128', '012819'),
(432, '012819003', 'Badio', '01', '0128', '012819'),
(433, '012819004', 'Barbar', '01', '0128', '012819'),
(434, '012819005', 'Buanga', '01', '0128', '012819'),
(435, '012819006', 'Bulbulala', '01', '0128', '012819'),
(436, '012819007', 'Bungro', '01', '0128', '012819'),
(437, '012819008', 'Cabaroan', '01', '0128', '012819'),
(438, '012819009', 'Capangdanan', '01', '0128', '012819'),
(439, '012819010', 'Dalayap', '01', '0128', '012819'),
(440, '012819011', 'Darat', '01', '0128', '012819'),
(441, '012819012', 'Gulpeng', '01', '0128', '012819'),
(442, '012819013', 'Liliputen', '01', '0128', '012819'),
(443, '012819014', 'Lumbaan-Bicbica', '01', '0128', '012819'),
(444, '012819015', 'Nagtrigoan', '01', '0128', '012819'),
(445, '012819016', 'Pagdilao (Pob.)', '01', '0128', '012819'),
(446, '012819017', 'Pugaoan', '01', '0128', '012819'),
(447, '012819018', 'Puritac', '01', '0128', '012819'),
(448, '012819019', 'Sacritan', '01', '0128', '012819'),
(449, '012819020', 'Salanap', '01', '0128', '012819'),
(450, '012819021', 'Santo Tomas', '01', '0128', '012819'),
(451, '012819022', 'Tartarabang', '01', '0128', '012819'),
(452, '012819023', 'Puzol', '01', '0128', '012819'),
(453, '012819024', 'Upon', '01', '0128', '012819'),
(454, '012819025', 'Valbuena (Pob.)', '01', '0128', '012819'),
(455, '012820001', 'San Francisco (Pob.)', '01', '0128', '012820'),
(456, '012820002', 'San Ildefonso (Pob.)', '01', '0128', '012820'),
(457, '012820003', 'San Agustin', '01', '0128', '012820'),
(458, '012820004', 'San Baltazar (Pob.)', '01', '0128', '012820'),
(459, '012820005', 'San Bartolome (Pob.)', '01', '0128', '012820'),
(460, '012820006', 'San Cayetano (Pob.)', '01', '0128', '012820'),
(461, '012820007', 'San Eugenio (Pob.)', '01', '0128', '012820'),
(462, '012820008', 'San Fernando (Pob.)', '01', '0128', '012820'),
(463, '012820009', 'San Gregorio (Pob.)', '01', '0128', '012820'),
(464, '012820010', 'San Guillermo', '01', '0128', '012820'),
(465, '012820011', 'San Jose (Pob.)', '01', '0128', '012820'),
(466, '012820012', 'San Juan Bautista (Pob.)', '01', '0128', '012820'),
(467, '012820013', 'San Lorenzo', '01', '0128', '012820'),
(468, '012820014', 'San Lucas (Pob.)', '01', '0128', '012820'),
(469, '012820015', 'San Marcos (Payas)', '01', '0128', '012820'),
(470, '012820016', 'San Miguel (Pob.)', '01', '0128', '012820'),
(471, '012820017', 'San Pablo', '01', '0128', '012820'),
(472, '012820018', 'San Paulo (Pob.)', '01', '0128', '012820'),
(473, '012820019', 'San Pedro (Bingao)', '01', '0128', '012820'),
(474, '012820020', 'San Rufino (Pob.)', '01', '0128', '012820'),
(475, '012820021', 'San Silvestre (Pob.)', '01', '0128', '012820'),
(476, '012820022', 'Santa Asuncion (Samac)', '01', '0128', '012820'),
(477, '012820023', 'Santa Cecilia (Barabar)', '01', '0128', '012820'),
(478, '012820024', 'Santa Monica (Nagrebcan)', '01', '0128', '012820'),
(479, '012821001', 'San Agustin (Pob.)', '01', '0128', '012821'),
(480, '012821002', 'San Andres', '01', '0128', '012821'),
(481, '012821003', 'San Antonio', '01', '0128', '012821'),
(482, '012821004', 'San Bernabe', '01', '0128', '012821'),
(483, '012821005', 'San Cristobal', '01', '0128', '012821'),
(484, '012821006', 'San Felipe', '01', '0128', '012821'),
(485, '012821007', 'San Francisco (Pob.)', '01', '0128', '012821'),
(486, '012821008', 'San Isidro', '01', '0128', '012821'),
(487, '012821009', 'San Joaquin (Pob.)', '01', '0128', '012821'),
(488, '012821010', 'San Jose', '01', '0128', '012821'),
(489, '012821011', 'San Juan', '01', '0128', '012821'),
(490, '012821012', 'San Leandro (Pob.)', '01', '0128', '012821'),
(491, '012821014', 'San Lorenzo', '01', '0128', '012821'),
(492, '012821015', 'San Manuel', '01', '0128', '012821'),
(493, '012821016', 'San Marcos', '01', '0128', '012821'),
(494, '012821017', 'San Nicolas', '01', '0128', '012821'),
(495, '012821018', 'San Pedro', '01', '0128', '012821'),
(496, '012821019', 'San Roque', '01', '0128', '012821'),
(497, '012821020', 'San Vicente (Pob.)', '01', '0128', '012821'),
(498, '012821021', 'Santa Barbara (Pob.)', '01', '0128', '012821'),
(499, '012821022', 'Santa Magdalena', '01', '0128', '012821'),
(500, '012821023', 'Santa Rosa', '01', '0128', '012821'),
(501, '012821024', 'Santo Santiago', '01', '0128', '012821'),
(502, '012821025', 'Santo Tomas', '01', '0128', '012821'),
(503, '012822001', 'Aguitap', '01', '0128', '012822'),
(504, '012822002', 'Bagbag', '01', '0128', '012822'),
(505, '012822003', 'Bagbago', '01', '0128', '012822'),
(506, '012822004', 'Barcelona', '01', '0128', '012822'),
(507, '012822005', 'Bubuos', '01', '0128', '012822'),
(508, '012822006', 'Capurictan', '01', '0128', '012822'),
(509, '012822007', 'Catangraran', '01', '0128', '012822'),
(510, '012822008', 'Darasdas', '01', '0128', '012822'),
(511, '012822009', 'Juan (Pob.)', '01', '0128', '012822'),
(512, '012822010', 'Laureta (Pob.)', '01', '0128', '012822'),
(513, '012822011', 'Lipay', '01', '0128', '012822'),
(514, '012822012', 'Maananteng', '01', '0128', '012822'),
(515, '012822013', 'Manalpac', '01', '0128', '012822'),
(516, '012822014', 'Mariquet', '01', '0128', '012822'),
(517, '012822015', 'Nagpatpatan', '01', '0128', '012822'),
(518, '012822016', 'Nalasin', '01', '0128', '012822'),
(519, '012822017', 'Puttao', '01', '0128', '012822'),
(520, '012822018', 'San Juan', '01', '0128', '012822'),
(521, '012822019', 'San Julian', '01', '0128', '012822'),
(522, '012822020', 'Santa Ana', '01', '0128', '012822'),
(523, '012822021', 'Santiago', '01', '0128', '012822'),
(524, '012822022', 'Talugtog', '01', '0128', '012822'),
(525, '012823001', 'Abkir', '01', '0128', '012823'),
(526, '012823003', 'Alsem', '01', '0128', '012823'),
(527, '012823005', 'Bago', '01', '0128', '012823'),
(528, '012823010', 'Bulbulala', '01', '0128', '012823'),
(529, '012823011', 'Cabangaran', '01', '0128', '012823'),
(530, '012823012', 'Cabayo', '01', '0128', '012823'),
(531, '012823013', 'Cabisocolan', '01', '0128', '012823'),
(532, '012823014', 'Canaam', '01', '0128', '012823'),
(533, '012823015', 'Columbia', '01', '0128', '012823'),
(534, '012823016', 'Dagupan', '01', '0128', '012823'),
(535, '012823017', 'Pedro F. Alviar (Diaton)', '01', '0128', '012823'),
(536, '012823019', 'Dipilat', '01', '0128', '012823'),
(537, '012823022', 'Esperanza', '01', '0128', '012823'),
(538, '012823023', 'Ester', '01', '0128', '012823'),
(539, '012823024', 'Isic Isic', '01', '0128', '012823'),
(540, '012823027', 'Lubnac', '01', '0128', '012823'),
(541, '012823028', 'Mabanbanag', '01', '0128', '012823'),
(542, '012823030', 'Alejo Malasig', '01', '0128', '012823'),
(543, '012823031', 'Manarang', '01', '0128', '012823'),
(544, '012823033', 'Margaay', '01', '0128', '012823'),
(545, '012823035', 'Namoroc', '01', '0128', '012823'),
(546, '012823038', 'Malampa (Peninaan-Malampa)', '01', '0128', '012823'),
(547, '012823039', 'Parparoroc', '01', '0128', '012823'),
(548, '012823040', 'Parut', '01', '0128', '012823'),
(549, '012823047', 'Salsalamagui', '01', '0128', '012823'),
(550, '012823049', 'San Jose (Lipay)', '01', '0128', '012823'),
(551, '012823050', 'San Nicolas (Pob.)', '01', '0128', '012823'),
(552, '012823051', 'San Pedro (Pob.)', '01', '0128', '012823'),
(553, '012823052', 'San Ramon (Pob.)', '01', '0128', '012823'),
(554, '012823053', 'San Roque (Pob.)', '01', '0128', '012823'),
(555, '012823054', 'Santa Maria (Pob.)', '01', '0128', '012823'),
(556, '012823056', 'Tamdagan', '01', '0128', '012823'),
(557, '012823058', 'Visaya', '01', '0128', '012823'),
(558, '012901001', 'Alilem Daya (Pob.)', '01', '0129', '012901'),
(559, '012901002', 'Amilongan', '01', '0129', '012901'),
(560, '012901003', 'Anaao', '01', '0129', '012901'),
(561, '012901004', 'Apang', '01', '0129', '012901'),
(562, '012901005', 'Apaya', '01', '0129', '012901'),
(563, '012901006', 'Batbato', '01', '0129', '012901'),
(564, '012901010', 'Daddaay', '01', '0129', '012901'),
(565, '012901011', 'Dalawa', '01', '0129', '012901'),
(566, '012901013', 'Kiat', '01', '0129', '012901'),
(567, '012902001', 'Bagbagotot', '01', '0129', '012902'),
(568, '012902002', 'Banbanaal', '01', '0129', '012902'),
(569, '012902004', 'Bisangol', '01', '0129', '012902'),
(570, '012902005', 'Cadanglaan', '01', '0129', '012902'),
(571, '012902006', 'Casilagan Norte', '01', '0129', '012902'),
(572, '012902007', 'Casilagan Sur', '01', '0129', '012902'),
(573, '012902008', 'Elefante', '01', '0129', '012902'),
(574, '012902009', 'Guardia', '01', '0129', '012902'),
(575, '012902010', 'Lintic', '01', '0129', '012902'),
(576, '012902011', 'Lopez', '01', '0129', '012902'),
(577, '012902012', 'Montero', '01', '0129', '012902'),
(578, '012902013', 'Naguimba', '01', '0129', '012902'),
(579, '012902014', 'Pila', '01', '0129', '012902'),
(580, '012902015', 'Poblacion', '01', '0129', '012902'),
(581, '012903001', 'Aggay', '01', '0129', '012903'),
(582, '012903002', 'An-annam', '01', '0129', '012903'),
(583, '012903003', 'Balaleng', '01', '0129', '012903'),
(584, '012903004', 'Banaoang', '01', '0129', '012903'),
(585, '012903005', 'Bulag', '01', '0129', '012903'),
(586, '012903006', 'Buquig', '01', '0129', '012903'),
(587, '012903007', 'Cabalanggan', '01', '0129', '012903'),
(588, '012903008', 'Cabaroan', '01', '0129', '012903'),
(589, '012903009', 'Cabusligan', '01', '0129', '012903'),
(590, '012903010', 'Capangdanan', '01', '0129', '012903'),
(591, '012903011', 'Guimod', '01', '0129', '012903'),
(592, '012903012', 'Lingsat', '01', '0129', '012903'),
(593, '012903013', 'Malingeb', '01', '0129', '012903'),
(594, '012903014', 'Mira', '01', '0129', '012903'),
(595, '012903015', 'Naguiddayan', '01', '0129', '012903'),
(596, '012903016', 'Ora', '01', '0129', '012903'),
(597, '012903017', 'Paing', '01', '0129', '012903'),
(598, '012903018', 'Puspus', '01', '0129', '012903'),
(599, '012903019', 'Quimmarayan', '01', '0129', '012903'),
(600, '012903020', 'Sagneb', '01', '0129', '012903'),
(601, '012903021', 'Sagpat', '01', '0129', '012903'),
(602, '012903022', 'San Mariano (Sallacong)', '01', '0129', '012903'),
(603, '012903023', 'San Isidro', '01', '0129', '012903'),
(604, '012903024', 'San Julian', '01', '0129', '012903'),
(605, '012903026', 'Sinabaan', '01', '0129', '012903'),
(606, '012903027', 'Taguiporo', '01', '0129', '012903'),
(607, '012903028', 'Taleb', '01', '0129', '012903'),
(608, '012903029', 'Tay-ac', '01', '0129', '012903'),
(609, '012903030', 'Barangay 1 (Pob.)', '01', '0129', '012903'),
(610, '012903031', 'Barangay 2 (Pob.)', '01', '0129', '012903'),
(611, '012903032', 'Barangay 3 (Pob.)', '01', '0129', '012903'),
(612, '012903033', 'Barangay 4 (Pob.)', '01', '0129', '012903'),
(613, '012903034', 'Barangay 5 (Pob.)', '01', '0129', '012903'),
(614, '012903035', 'Barangay 6 (Pob.)', '01', '0129', '012903'),
(615, '012904001', 'Ambugat', '01', '0129', '012904'),
(616, '012904002', 'Balugang', '01', '0129', '012904'),
(617, '012904003', 'Bangbangar', '01', '0129', '012904'),
(618, '012904005', 'Bessang', '01', '0129', '012904'),
(619, '012904006', 'Cabcaburao', '01', '0129', '012904'),
(620, '012904007', 'Cadacad', '01', '0129', '012904'),
(621, '012904008', 'Callitong', '01', '0129', '012904'),
(622, '012904009', 'Dayanki', '01', '0129', '012904'),
(623, '012904010', 'Lesseb', '01', '0129', '012904'),
(624, '012904011', 'Lubing', '01', '0129', '012904'),
(625, '012904012', 'Lucaban', '01', '0129', '012904'),
(626, '012904013', 'Luna', '01', '0129', '012904'),
(627, '012904014', 'Macaoayan', '01', '0129', '012904'),
(628, '012904015', 'Mambug', '01', '0129', '012904'),
(629, '012904016', 'Manaboc', '01', '0129', '012904'),
(630, '012904017', 'Mapanit', '01', '0129', '012904'),
(631, '012904018', 'Poblacion Sur (Masingit)', '01', '0129', '012904'),
(632, '012904019', 'Nagpanaoan', '01', '0129', '012904'),
(633, '012904020', 'Dirdirig (Dirdirig-Paday)', '01', '0129', '012904'),
(634, '012904022', 'Paduros', '01', '0129', '012904'),
(635, '012904023', 'Patac', '01', '0129', '012904'),
(636, '012904024', 'Poblacion Norte (Bato)', '01', '0129', '012904'),
(637, '012904026', 'Sabangan Pinggan', '01', '0129', '012904'),
(638, '012904027', 'Subadi Norte', '01', '0129', '012904'),
(639, '012904028', 'Subadi Sur', '01', '0129', '012904'),
(640, '012904029', 'Taliao', '01', '0129', '012904'),
(641, '012905001', 'Alinaay', '01', '0129', '012905'),
(642, '012905002', 'Aragan', '01', '0129', '012905'),
(643, '012905003', 'Arnap', '01', '0129', '012905'),
(644, '012905004', 'Baclig (Pob.)', '01', '0129', '012905'),
(645, '012905005', 'Bato', '01', '0129', '012905'),
(646, '012905006', 'Bonifacio (Pob.)', '01', '0129', '012905'),
(647, '012905007', 'Bungro', '01', '0129', '012905'),
(648, '012905008', 'Cacadiran', '01', '0129', '012905'),
(649, '012905009', 'Caellayan', '01', '0129', '012905'),
(650, '012905010', 'Carusipan', '01', '0129', '012905'),
(651, '012905011', 'Catucdaan', '01', '0129', '012905'),
(652, '012905012', 'Cuancabal', '01', '0129', '012905'),
(653, '012905013', 'Cuantacla', '01', '0129', '012905'),
(654, '012905014', 'Daclapan', '01', '0129', '012905'),
(655, '012905015', 'Dardarat', '01', '0129', '012905'),
(656, '012905016', 'Lipit', '01', '0129', '012905'),
(657, '012905017', 'Maradodon', '01', '0129', '012905'),
(658, '012905018', 'Margaay', '01', '0129', '012905'),
(659, '012905019', 'Nagsantaan', '01', '0129', '012905'),
(660, '012905020', 'Nagsincaoan', '01', '0129', '012905'),
(661, '012905021', 'Namruangan', '01', '0129', '012905'),
(662, '012905022', 'Pila', '01', '0129', '012905'),
(663, '012905023', 'Pug-os', '01', '0129', '012905'),
(664, '012905024', 'Quezon (Pob.)', '01', '0129', '012905'),
(665, '012905025', 'Reppaac', '01', '0129', '012905'),
(666, '012905026', 'Rizal (Pob.)', '01', '0129', '012905'),
(667, '012905027', 'Sabang', '01', '0129', '012905'),
(668, '012905028', 'Sagayaden', '01', '0129', '012905'),
(669, '012905029', 'Salapasap', '01', '0129', '012905'),
(670, '012905030', 'Salomague', '01', '0129', '012905'),
(671, '012905031', 'Sisim', '01', '0129', '012905'),
(672, '012905032', 'Turod', '01', '0129', '012905'),
(673, '012905033', 'Turod-Patac', '01', '0129', '012905'),
(674, '012906001', 'Allangigan Primero', '01', '0129', '012906'),
(675, '012906002', 'Allangigan Segundo', '01', '0129', '012906'),
(676, '012906003', 'Amguid', '01', '0129', '012906'),
(677, '012906004', 'Ayudante', '01', '0129', '012906'),
(678, '012906005', 'Bagani Camposanto', '01', '0129', '012906'),
(679, '012906006', 'Bagani Gabor', '01', '0129', '012906'),
(680, '012906007', 'Bagani Tocgo', '01', '0129', '012906'),
(681, '012906008', 'Bagani Ubbog', '01', '0129', '012906'),
(682, '012906009', 'Bagar', '01', '0129', '012906'),
(683, '012906010', 'Balingaoan', '01', '0129', '012906'),
(684, '012906015', 'Bugnay', '01', '0129', '012906'),
(685, '012906016', 'Calaoaan', '01', '0129', '012906'),
(686, '012906017', 'Calongbuyan', '01', '0129', '012906'),
(687, '012906018', 'Caterman', '01', '0129', '012906'),
(688, '012906019', 'Cubcubboot', '01', '0129', '012906'),
(689, '012906020', 'Darapidap', '01', '0129', '012906'),
(690, '012906022', 'Langlangca Primero', '01', '0129', '012906'),
(691, '012906023', 'Langlangca Segundo', '01', '0129', '012906'),
(692, '012906024', 'Oaig-Daya', '01', '0129', '012906'),
(693, '012906025', 'Palacapac', '01', '0129', '012906'),
(694, '012906026', 'Paras', '01', '0129', '012906'),
(695, '012906027', 'Parioc Primero', '01', '0129', '012906'),
(696, '012906028', 'Parioc Segundo', '01', '0129', '012906'),
(697, '012906029', 'Patpata Primero', '01', '0129', '012906'),
(698, '012906030', 'Patpata Segundo', '01', '0129', '012906'),
(699, '012906031', 'Paypayad', '01', '0129', '012906'),
(700, '012906032', 'Salvador Primero', '01', '0129', '012906'),
(701, '012906033', 'Salvador Segundo', '01', '0129', '012906'),
(702, '012906034', 'San Agustin', '01', '0129', '012906'),
(703, '012906035', 'San Andres', '01', '0129', '012906'),
(704, '012906036', 'San Antonio (Pob.)', '01', '0129', '012906'),
(705, '012906037', 'San Isidro (Pob.)', '01', '0129', '012906'),
(706, '012906038', 'San Jose (Pob.)', '01', '0129', '012906'),
(707, '012906039', 'San Juan (Pob.)', '01', '0129', '012906'),
(708, '012906040', 'San Nicolas', '01', '0129', '012906'),
(709, '012906041', 'San Pedro', '01', '0129', '012906'),
(710, '012906042', 'Santo Tomas', '01', '0129', '012906'),
(711, '012906043', 'Tablac', '01', '0129', '012906'),
(712, '012906044', 'Talogtog', '01', '0129', '012906'),
(713, '012906045', 'Tamurong Primero', '01', '0129', '012906'),
(714, '012906046', 'Tamurong Segundo', '01', '0129', '012906'),
(715, '012906048', 'Villarica', '01', '0129', '012906'),
(716, '012907001', 'Anonang Mayor', '01', '0129', '012907'),
(717, '012907002', 'Anonang Menor', '01', '0129', '012907'),
(718, '012907003', 'Baggoc', '01', '0129', '012907'),
(719, '012907004', 'Callaguip', '01', '0129', '012907'),
(720, '012907005', 'Caparacadan', '01', '0129', '012907'),
(721, '012907006', 'Fuerte', '01', '0129', '012907'),
(722, '012907007', 'Manangat', '01', '0129', '012907'),
(723, '012907008', 'Naguilian', '01', '0129', '012907'),
(724, '012907009', 'Nansuagao', '01', '0129', '012907'),
(725, '012907010', 'Pandan', '01', '0129', '012907'),
(726, '012907011', 'Pantay-Quitiquit', '01', '0129', '012907'),
(727, '012907012', 'Don Dimas Querubin (Pob.)', '01', '0129', '012907'),
(728, '012907013', 'Puro', '01', '0129', '012907'),
(729, '012907014', 'Pantay Tamurong', '01', '0129', '012907'),
(730, '012907015', 'Villamar', '01', '0129', '012907'),
(731, '012907016', 'Don Alejandro Quirolgico (Pob.)', '01', '0129', '012907'),
(732, '012907017', 'Don Lorenzo Querubin (Pob.)', '01', '0129', '012907'),
(733, '012908001', 'Aluling', '01', '0129', '012908'),
(734, '012908002', 'Comillas North', '01', '0129', '012908'),
(735, '012908003', 'Comillas South', '01', '0129', '012908'),
(736, '012908004', 'Concepcion (Pob.)', '01', '0129', '012908'),
(737, '012908005', 'Dinwede East', '01', '0129', '012908'),
(738, '012908006', 'Dinwede West', '01', '0129', '012908'),
(739, '012908007', 'Libang', '01', '0129', '012908'),
(740, '012908010', 'Pilipil', '01', '0129', '012908'),
(741, '012908013', 'Remedios', '01', '0129', '012908'),
(742, '012908014', 'Rosario (Pob.)', '01', '0129', '012908'),
(743, '012908015', 'San Juan', '01', '0129', '012908'),
(744, '012908016', 'San Luis', '01', '0129', '012908'),
(745, '012908017', 'Malaya', '01', '0129', '012908'),
(746, '012909001', 'Abaya', '01', '0129', '012909'),
(747, '012909002', 'Baracbac', '01', '0129', '012909'),
(748, '012909003', 'Bidbiday', '01', '0129', '012909'),
(749, '012909004', 'Bitong', '01', '0129', '012909'),
(750, '012909005', 'Borobor', '01', '0129', '012909'),
(751, '012909006', 'Calimugtong', '01', '0129', '012909'),
(752, '012909007', 'Calongbuyan', '01', '0129', '012909'),
(753, '012909008', 'Calumbaya', '01', '0129', '012909'),
(754, '012909009', 'Daldagan', '01', '0129', '012909'),
(755, '012909010', 'Kilang', '01', '0129', '012909'),
(756, '012909011', 'Legaspi', '01', '0129', '012909'),
(757, '012909012', 'Mabayag', '01', '0129', '012909'),
(758, '012909013', 'Matanubong', '01', '0129', '012909'),
(759, '012909014', 'Mckinley', '01', '0129', '012909'),
(760, '012909015', 'Nagsingcaoan', '01', '0129', '012909'),
(761, '012909016', 'Oaig-Daya', '01', '0129', '012909'),
(762, '012909017', 'Pagangpang', '01', '0129', '012909'),
(763, '012909018', 'Patac', '01', '0129', '012909'),
(764, '012909019', 'Poblacion', '01', '0129', '012909'),
(765, '012909020', 'Rubio', '01', '0129', '012909'),
(766, '012909021', 'Sabangan-Bato', '01', '0129', '012909'),
(767, '012909022', 'Sacaang', '01', '0129', '012909'),
(768, '012909023', 'San Vicente', '01', '0129', '012909'),
(769, '012909024', 'Sapang', '01', '0129', '012909'),
(770, '012910001', 'Alfonso (Tangaoan)', '01', '0129', '012910'),
(771, '012910002', 'Bussot', '01', '0129', '012910'),
(772, '012910003', 'Concepcion', '01', '0129', '012910'),
(773, '012910004', 'Dapdappig', '01', '0129', '012910'),
(774, '012910005', 'Matue-Butarag', '01', '0129', '012910'),
(775, '012910007', 'Poblacion Norte', '01', '0129', '012910'),
(776, '012910008', 'Poblacion Sur', '01', '0129', '012910'),
(777, '012911001', 'Banucal', '01', '0129', '012911'),
(778, '012911002', 'Bequi-Walin', '01', '0129', '012911'),
(779, '012911003', 'Bugui', '01', '0129', '012911'),
(780, '012911004', 'Calungbuyan', '01', '0129', '012911'),
(781, '012911005', 'Carcarabasa', '01', '0129', '012911'),
(782, '012911006', 'Labut', '01', '0129', '012911'),
(783, '012911007', 'Poblacion Norte', '01', '0129', '012911'),
(784, '012911008', 'Poblacion Sur', '01', '0129', '012911'),
(785, '012911009', 'San Vicente', '01', '0129', '012911'),
(786, '012911010', 'Suysuyan', '01', '0129', '012911'),
(787, '012911011', 'Tay-ac', '01', '0129', '012911'),
(788, '012912001', 'Alangan', '01', '0129', '012912'),
(789, '012912002', 'Bacar', '01', '0129', '012912'),
(790, '012912006', 'Barbarit', '01', '0129', '012912'),
(791, '012912007', 'Bungro', '01', '0129', '012912'),
(792, '012912008', 'Cabaroan', '01', '0129', '012912'),
(793, '012912010', 'Cadanglaan', '01', '0129', '012912'),
(794, '012912011', 'Caraisan', '01', '0129', '012912'),
(795, '012912014', 'Dacutan', '01', '0129', '012912'),
(796, '012912015', 'Labut', '01', '0129', '012912'),
(797, '012912017', 'Maas-asin', '01', '0129', '012912'),
(798, '012912018', 'Macatcatud', '01', '0129', '012912'),
(799, '012912019', 'Namalpalan', '01', '0129', '012912'),
(800, '012912020', 'Manzante', '01', '0129', '012912'),
(801, '012912022', 'Maratudo', '01', '0129', '012912'),
(802, '012912023', 'Miramar', '01', '0129', '012912'),
(803, '012912025', 'Napo', '01', '0129', '012912'),
(804, '012912026', 'Pagsanaan Norte', '01', '0129', '012912'),
(805, '012912027', 'Pagsanaan Sur', '01', '0129', '012912'),
(806, '012912028', 'Panay Norte', '01', '0129', '012912'),
(807, '012912029', 'Panay Sur', '01', '0129', '012912'),
(808, '012912030', 'Patong', '01', '0129', '012912'),
(809, '012912031', 'Puro', '01', '0129', '012912'),
(810, '012912032', 'San Basilio (Pob.)', '01', '0129', '012912'),
(811, '012912033', 'San Clemente (Pob.)', '01', '0129', '012912'),
(812, '012912034', 'San Julian (Pob.)', '01', '0129', '012912'),
(813, '012912035', 'San Lucas (Pob.)', '01', '0129', '012912'),
(814, '012912036', 'San Ramon (Pob.)', '01', '0129', '012912'),
(815, '012912037', 'San Vicente (Pob.)', '01', '0129', '012912'),
(816, '012912038', 'Santa Monica', '01', '0129', '012912'),
(817, '012912039', 'Sarsaracat', '01', '0129', '012912'),
(818, '012913001', 'Balaweg', '01', '0129', '012913'),
(819, '012913002', 'Bandril', '01', '0129', '012913'),
(820, '012913003', 'Bantugo', '01', '0129', '012913'),
(821, '012913004', 'Cadacad', '01', '0129', '012913'),
(822, '012913005', 'Casilagan', '01', '0129', '012913'),
(823, '012913006', 'Casocos', '01', '0129', '012913'),
(824, '012913007', 'Lapting', '01', '0129', '012913'),
(825, '012913008', 'Mapisi', '01', '0129', '012913'),
(826, '012913009', 'Mission', '01', '0129', '012913'),
(827, '012913010', 'Poblacion East', '01', '0129', '012913'),
(828, '012913011', 'Poblacion West', '01', '0129', '012913'),
(829, '012913012', 'Taleb', '01', '0129', '012913'),
(830, '012914001', 'Abuor', '01', '0129', '012914'),
(831, '012914002', 'Ambulogan', '01', '0129', '012914'),
(832, '012914004', 'Aquib', '01', '0129', '012914'),
(833, '012914005', 'Banglayan', '01', '0129', '012914'),
(834, '012914006', 'Bulanos', '01', '0129', '012914'),
(835, '012914007', 'Cadacad', '01', '0129', '012914'),
(836, '012914008', 'Cagayungan', '01', '0129', '012914'),
(837, '012914009', 'Camarao', '01', '0129', '012914'),
(838, '012914010', 'Casilagan', '01', '0129', '012914'),
(839, '012914011', 'Codoog', '01', '0129', '012914'),
(840, '012914012', 'Dasay', '01', '0129', '012914'),
(841, '012914013', 'Dinalaoan', '01', '0129', '012914'),
(842, '012914014', 'Estancia', '01', '0129', '012914'),
(843, '012914015', 'Lanipao', '01', '0129', '012914'),
(844, '012914016', 'Lungog', '01', '0129', '012914'),
(845, '012914017', 'Margaay', '01', '0129', '012914'),
(846, '012914018', 'Marozo', '01', '0129', '012914'),
(847, '012914019', 'Naguneg', '01', '0129', '012914'),
(848, '012914020', 'Orence', '01', '0129', '012914'),
(849, '012914021', 'Pantoc', '01', '0129', '012914'),
(850, '012914022', 'Paratong', '01', '0129', '012914'),
(851, '012914023', 'Parparia', '01', '0129', '012914'),
(852, '012914024', 'Quinarayan', '01', '0129', '012914'),
(853, '012914025', 'Rivadavia', '01', '0129', '012914'),
(854, '012914026', 'San Antonio', '01', '0129', '012914'),
(855, '012914027', 'San Jose (Pob.)', '01', '0129', '012914'),
(856, '012914028', 'San Pablo', '01', '0129', '012914'),
(857, '012914029', 'San Pedro', '01', '0129', '012914'),
(858, '012914030', 'Santa Lucia (Pob.)', '01', '0129', '012914'),
(859, '012914031', 'Sarmingan', '01', '0129', '012914'),
(860, '012914032', 'Sucoc', '01', '0129', '012914'),
(861, '012914033', 'Sulvec', '01', '0129', '012914'),
(862, '012914034', 'Turod', '01', '0129', '012914'),
(863, '012914035', 'Bantay Abot', '01', '0129', '012914'),
(864, '012915001', 'Banoen', '01', '0129', '012915'),
(865, '012915002', 'Cayus', '01', '0129', '012915'),
(866, '012915003', 'Patungcaleo (Lamag)', '01', '0129', '012915');

-- --------------------------------------------------------

--
-- Table structure for table `ph_citymun`
--

CREATE TABLE `ph_citymun` (
  `id` int(255) NOT NULL,
  `psgcCode` varchar(255) DEFAULT NULL,
  `citymunDesc` text,
  `regDesc` varchar(255) DEFAULT NULL,
  `provCode` varchar(255) DEFAULT NULL,
  `citymunCode` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ph_citymun`
--

INSERT INTO `ph_citymun` (`id`, `psgcCode`, `citymunDesc`, `regDesc`, `provCode`, `citymunCode`) VALUES
(1, '012801000', 'ADAMS', '01', '0128', '012801'),
(2, '012802000', 'BACARRA', '01', '0128', '012802'),
(3, '012803000', 'BADOC', '01', '0128', '012803'),
(4, '012804000', 'BANGUI', '01', '0128', '012804'),
(5, '012805000', 'CITY OF BATAC', '01', '0128', '012805'),
(6, '012806000', 'BURGOS', '01', '0128', '012806'),
(7, '012807000', 'CARASI', '01', '0128', '012807'),
(8, '012808000', 'CURRIMAO', '01', '0128', '012808'),
(9, '012809000', 'DINGRAS', '01', '0128', '012809'),
(10, '012810000', 'DUMALNEG', '01', '0128', '012810'),
(11, '012811000', 'BANNA (ESPIRITU)', '01', '0128', '012811'),
(12, '012812000', 'LAOAG CITY (Capital)', '01', '0128', '012812'),
(13, '012813000', 'MARCOS', '01', '0128', '012813'),
(14, '012814000', 'NUEVA ERA', '01', '0128', '012814'),
(15, '012815000', 'PAGUDPUD', '01', '0128', '012815'),
(16, '012816000', 'PAOAY', '01', '0128', '012816'),
(17, '012817000', 'PASUQUIN', '01', '0128', '012817'),
(18, '012818000', 'PIDDIG', '01', '0128', '012818'),
(19, '012819000', 'PINILI', '01', '0128', '012819'),
(20, '012820000', 'SAN NICOLAS', '01', '0128', '012820'),
(21, '012821000', 'SARRAT', '01', '0128', '012821'),
(22, '012822000', 'SOLSONA', '01', '0128', '012822'),
(23, '012823000', 'VINTAR', '01', '0128', '012823'),
(24, '012901000', 'ALILEM', '01', '0129', '012901'),
(25, '012902000', 'BANAYOYO', '01', '0129', '012902'),
(26, '012903000', 'BANTAY', '01', '0129', '012903'),
(27, '012904000', 'BURGOS', '01', '0129', '012904'),
(28, '012905000', 'CABUGAO', '01', '0129', '012905'),
(29, '012906000', 'CITY OF CANDON', '01', '0129', '012906'),
(30, '012907000', 'CAOAYAN', '01', '0129', '012907'),
(31, '012908000', 'CERVANTES', '01', '0129', '012908'),
(32, '012909000', 'GALIMUYOD', '01', '0129', '012909'),
(33, '012910000', 'GREGORIO DEL PILAR (CONCEPCION)', '01', '0129', '012910'),
(34, '012911000', 'LIDLIDDA', '01', '0129', '012911'),
(35, '012912000', 'MAGSINGAL', '01', '0129', '012912'),
(36, '012913000', 'NAGBUKEL', '01', '0129', '012913'),
(37, '012914000', 'NARVACAN', '01', '0129', '012914'),
(38, '012915000', 'QUIRINO (ANGKAKI)', '01', '0129', '012915'),
(39, '012916000', 'SALCEDO (BAUGEN)', '01', '0129', '012916'),
(40, '012917000', 'SAN EMILIO', '01', '0129', '012917'),
(41, '012918000', 'SAN ESTEBAN', '01', '0129', '012918'),
(42, '012919000', 'SAN ILDEFONSO', '01', '0129', '012919'),
(43, '012920000', 'SAN JUAN (LAPOG)', '01', '0129', '012920'),
(44, '012921000', 'SAN VICENTE', '01', '0129', '012921'),
(45, '012922000', 'SANTA', '01', '0129', '012922'),
(46, '012923000', 'SANTA CATALINA', '01', '0129', '012923'),
(47, '012924000', 'SANTA CRUZ', '01', '0129', '012924'),
(48, '012925000', 'SANTA LUCIA', '01', '0129', '012925'),
(49, '012926000', 'SANTA MARIA', '01', '0129', '012926'),
(50, '012927000', 'SANTIAGO', '01', '0129', '012927'),
(51, '012928000', 'SANTO DOMINGO', '01', '0129', '012928'),
(52, '012929000', 'SIGAY', '01', '0129', '012929'),
(53, '012930000', 'SINAIT', '01', '0129', '012930'),
(54, '012931000', 'SUGPON', '01', '0129', '012931'),
(55, '012932000', 'SUYO', '01', '0129', '012932'),
(56, '012933000', 'TAGUDIN', '01', '0129', '012933'),
(57, '012934000', 'CITY OF VIGAN (Capital)', '01', '0129', '012934'),
(58, '013301000', 'AGOO', '01', '0133', '013301'),
(59, '013302000', 'ARINGAY', '01', '0133', '013302'),
(60, '013303000', 'BACNOTAN', '01', '0133', '013303'),
(61, '013304000', 'BAGULIN', '01', '0133', '013304'),
(62, '013305000', 'BALAOAN', '01', '0133', '013305'),
(63, '013306000', 'BANGAR', '01', '0133', '013306'),
(64, '013307000', 'BAUANG', '01', '0133', '013307'),
(65, '013308000', 'BURGOS', '01', '0133', '013308'),
(66, '013309000', 'CABA', '01', '0133', '013309'),
(67, '013310000', 'LUNA', '01', '0133', '013310'),
(68, '013311000', 'NAGUILIAN', '01', '0133', '013311'),
(69, '013312000', 'PUGO', '01', '0133', '013312'),
(70, '013313000', 'ROSARIO', '01', '0133', '013313'),
(71, '013314000', 'CITY OF SAN FERNANDO (Capital)', '01', '0133', '013314'),
(72, '013315000', 'SAN GABRIEL', '01', '0133', '013315'),
(73, '013316000', 'SAN JUAN', '01', '0133', '013316'),
(74, '013317000', 'SANTO TOMAS', '01', '0133', '013317'),
(75, '013318000', 'SANTOL', '01', '0133', '013318'),
(76, '013319000', 'SUDIPEN', '01', '0133', '013319'),
(77, '013320000', 'TUBAO', '01', '0133', '013320'),
(78, '015501000', 'AGNO', '01', '0155', '015501'),
(79, '015502000', 'AGUILAR', '01', '0155', '015502'),
(80, '015503000', 'CITY OF ALAMINOS', '01', '0155', '015503'),
(81, '015504000', 'ALCALA', '01', '0155', '015504'),
(82, '015505000', 'ANDA', '01', '0155', '015505'),
(83, '015506000', 'ASINGAN', '01', '0155', '015506'),
(84, '015507000', 'BALUNGAO', '01', '0155', '015507'),
(85, '015508000', 'BANI', '01', '0155', '015508'),
(86, '015509000', 'BASISTA', '01', '0155', '015509'),
(87, '015510000', 'BAUTISTA', '01', '0155', '015510'),
(88, '015511000', 'BAYAMBANG', '01', '0155', '015511'),
(89, '015512000', 'BINALONAN', '01', '0155', '015512'),
(90, '015513000', 'BINMALEY', '01', '0155', '015513'),
(91, '015514000', 'BOLINAO', '01', '0155', '015514'),
(92, '015515000', 'BUGALLON', '01', '0155', '015515'),
(93, '015516000', 'BURGOS', '01', '0155', '015516'),
(94, '015517000', 'CALASIAO', '01', '0155', '015517'),
(95, '015518000', 'DAGUPAN CITY', '01', '0155', '015518'),
(96, '015519000', 'DASOL', '01', '0155', '015519'),
(97, '015520000', 'INFANTA', '01', '0155', '015520'),
(98, '015521000', 'LABRADOR', '01', '0155', '015521'),
(99, '015522000', 'LINGAYEN (Capital)', '01', '0155', '015522'),
(100, '015523000', 'MABINI', '01', '0155', '015523'),
(101, '015524000', 'MALASIQUI', '01', '0155', '015524'),
(102, '015525000', 'MANAOAG', '01', '0155', '015525'),
(103, '015526000', 'MANGALDAN', '01', '0155', '015526'),
(104, '015527000', 'MANGATAREM', '01', '0155', '015527'),
(105, '015528000', 'MAPANDAN', '01', '0155', '015528'),
(106, '015529000', 'NATIVIDAD', '01', '0155', '015529'),
(107, '015530000', 'POZORRUBIO', '01', '0155', '015530'),
(108, '015531000', 'ROSALES', '01', '0155', '015531'),
(109, '015532000', 'SAN CARLOS CITY', '01', '0155', '015532'),
(110, '015533000', 'SAN FABIAN', '01', '0155', '015533'),
(111, '015534000', 'SAN JACINTO', '01', '0155', '015534'),
(112, '015535000', 'SAN MANUEL', '01', '0155', '015535'),
(113, '015536000', 'SAN NICOLAS', '01', '0155', '015536'),
(114, '015537000', 'SAN QUINTIN', '01', '0155', '015537'),
(115, '015538000', 'SANTA BARBARA', '01', '0155', '015538'),
(116, '015539000', 'SANTA MARIA', '01', '0155', '015539'),
(117, '015540000', 'SANTO TOMAS', '01', '0155', '015540'),
(118, '015541000', 'SISON', '01', '0155', '015541'),
(119, '015542000', 'SUAL', '01', '0155', '015542'),
(120, '015543000', 'TAYUG', '01', '0155', '015543'),
(121, '015544000', 'UMINGAN', '01', '0155', '015544'),
(122, '015545000', 'URBIZTONDO', '01', '0155', '015545'),
(123, '015546000', 'CITY OF URDANETA', '01', '0155', '015546'),
(124, '015547000', 'VILLASIS', '01', '0155', '015547'),
(125, '015548000', 'LAOAC', '01', '0155', '015548'),
(126, '020901000', 'BASCO (Capital)', '02', '0209', '020901'),
(127, '020902000', 'ITBAYAT', '02', '0209', '020902'),
(128, '020903000', 'IVANA', '02', '0209', '020903'),
(129, '020904000', 'MAHATAO', '02', '0209', '020904'),
(130, '020905000', 'SABTANG', '02', '0209', '020905'),
(131, '020906000', 'UYUGAN', '02', '0209', '020906'),
(132, '021501000', 'ABULUG', '02', '0215', '021501'),
(133, '021502000', 'ALCALA', '02', '0215', '021502'),
(134, '021503000', 'ALLACAPAN', '02', '0215', '021503'),
(135, '021504000', 'AMULUNG', '02', '0215', '021504'),
(136, '021505000', 'APARRI', '02', '0215', '021505'),
(137, '021506000', 'BAGGAO', '02', '0215', '021506'),
(138, '021507000', 'BALLESTEROS', '02', '0215', '021507'),
(139, '021508000', 'BUGUEY', '02', '0215', '021508'),
(140, '021509000', 'CALAYAN', '02', '0215', '021509'),
(141, '021510000', 'CAMALANIUGAN', '02', '0215', '021510'),
(142, '021511000', 'CLAVERIA', '02', '0215', '021511'),
(143, '021512000', 'ENRILE', '02', '0215', '021512'),
(144, '021513000', 'GATTARAN', '02', '0215', '021513'),
(145, '021514000', 'GONZAGA', '02', '0215', '021514'),
(146, '021515000', 'IGUIG', '02', '0215', '021515'),
(147, '021516000', 'LAL-LO', '02', '0215', '021516'),
(148, '021517000', 'LASAM', '02', '0215', '021517'),
(149, '021518000', 'PAMPLONA', '02', '0215', '021518'),
(150, '021519000', 'PEÑABLANCA', '02', '0215', '021519'),
(151, '021520000', 'PIAT', '02', '0215', '021520'),
(152, '021521000', 'RIZAL', '02', '0215', '021521'),
(153, '021522000', 'SANCHEZ-MIRA', '02', '0215', '021522'),
(154, '021523000', 'SANTA ANA', '02', '0215', '021523'),
(155, '021524000', 'SANTA PRAXEDES', '02', '0215', '021524'),
(156, '021525000', 'SANTA TERESITA', '02', '0215', '021525'),
(157, '021526000', 'SANTO NIÑO (FAIRE)', '02', '0215', '021526'),
(158, '021527000', 'SOLANA', '02', '0215', '021527'),
(159, '021528000', 'TUAO', '02', '0215', '021528'),
(160, '021529000', 'TUGUEGARAO CITY (Capital)', '02', '0215', '021529'),
(161, '023101000', 'ALICIA', '02', '0231', '023101'),
(162, '023102000', 'ANGADANAN', '02', '0231', '023102'),
(163, '023103000', 'AURORA', '02', '0231', '023103'),
(164, '023104000', 'BENITO SOLIVEN', '02', '0231', '023104'),
(165, '023105000', 'BURGOS', '02', '0231', '023105'),
(166, '023106000', 'CABAGAN', '02', '0231', '023106'),
(167, '023107000', 'CABATUAN', '02', '0231', '023107'),
(168, '023108000', 'CITY OF CAUAYAN', '02', '0231', '023108'),
(169, '023109000', 'CORDON', '02', '0231', '023109'),
(170, '023110000', 'DINAPIGUE', '02', '0231', '023110'),
(171, '023111000', 'DIVILACAN', '02', '0231', '023111'),
(172, '023112000', 'ECHAGUE', '02', '0231', '023112'),
(173, '023113000', 'GAMU', '02', '0231', '023113'),
(174, '023114000', 'ILAGAN CITY (Capital)', '02', '0231', '023114'),
(175, '023115000', 'JONES', '02', '0231', '023115'),
(176, '023116000', 'LUNA', '02', '0231', '023116'),
(177, '023117000', 'MACONACON', '02', '0231', '023117'),
(178, '023118000', 'DELFIN ALBANO (MAGSAYSAY)', '02', '0231', '023118'),
(179, '023119000', 'MALLIG', '02', '0231', '023119'),
(180, '023120000', 'NAGUILIAN', '02', '0231', '023120'),
(181, '023121000', 'PALANAN', '02', '0231', '023121'),
(182, '023122000', 'QUEZON', '02', '0231', '023122'),
(183, '023123000', 'QUIRINO', '02', '0231', '023123'),
(184, '023124000', 'RAMON', '02', '0231', '023124'),
(185, '023125000', 'REINA MERCEDES', '02', '0231', '023125'),
(186, '023126000', 'ROXAS', '02', '0231', '023126'),
(187, '023127000', 'SAN AGUSTIN', '02', '0231', '023127'),
(188, '023128000', 'SAN GUILLERMO', '02', '0231', '023128'),
(189, '023129000', 'SAN ISIDRO', '02', '0231', '023129'),
(190, '023130000', 'SAN MANUEL', '02', '0231', '023130'),
(191, '023131000', 'SAN MARIANO', '02', '0231', '023131'),
(192, '023132000', 'SAN MATEO', '02', '0231', '023132'),
(193, '023133000', 'SAN PABLO', '02', '0231', '023133'),
(194, '023134000', 'SANTA MARIA', '02', '0231', '023134'),
(195, '023135000', 'CITY OF SANTIAGO', '02', '0231', '023135'),
(196, '023136000', 'SANTO TOMAS', '02', '0231', '023136'),
(197, '023137000', 'TUMAUINI', '02', '0231', '023137'),
(198, '025001000', 'AMBAGUIO', '02', '0250', '025001'),
(199, '025002000', 'ARITAO', '02', '0250', '025002'),
(200, '025003000', 'BAGABAG', '02', '0250', '025003'),
(201, '025004000', 'BAMBANG', '02', '0250', '025004'),
(202, '025005000', 'BAYOMBONG (Capital)', '02', '0250', '025005'),
(203, '025006000', 'DIADI', '02', '0250', '025006'),
(204, '025007000', 'DUPAX DEL NORTE', '02', '0250', '025007'),
(205, '025008000', 'DUPAX DEL SUR', '02', '0250', '025008'),
(206, '025009000', 'KASIBU', '02', '0250', '025009'),
(207, '025010000', 'KAYAPA', '02', '0250', '025010'),
(208, '025011000', 'QUEZON', '02', '0250', '025011'),
(209, '025012000', 'SANTA FE', '02', '0250', '025012'),
(210, '025013000', 'SOLANO', '02', '0250', '025013'),
(211, '025014000', 'VILLAVERDE', '02', '0250', '025014'),
(212, '025015000', 'ALFONSO CASTANEDA', '02', '0250', '025015'),
(213, '025701000', 'AGLIPAY', '02', '0257', '025701'),
(214, '025702000', 'CABARROGUIS (Capital)', '02', '0257', '025702'),
(215, '025703000', 'DIFFUN', '02', '0257', '025703'),
(216, '025704000', 'MADDELA', '02', '0257', '025704'),
(217, '025705000', 'SAGUDAY', '02', '0257', '025705'),
(218, '025706000', 'NAGTIPUNAN', '02', '0257', '025706'),
(219, '030801000', 'ABUCAY', '03', '0308', '030801'),
(220, '030802000', 'BAGAC', '03', '0308', '030802'),
(221, '030803000', 'CITY OF BALANGA (Capital)', '03', '0308', '030803'),
(222, '030804000', 'DINALUPIHAN', '03', '0308', '030804'),
(223, '030805000', 'HERMOSA', '03', '0308', '030805'),
(224, '030806000', 'LIMAY', '03', '0308', '030806'),
(225, '030807000', 'MARIVELES', '03', '0308', '030807'),
(226, '030808000', 'MORONG', '03', '0308', '030808'),
(227, '030809000', 'ORANI', '03', '0308', '030809'),
(228, '030810000', 'ORION', '03', '0308', '030810'),
(229, '030811000', 'PILAR', '03', '0308', '030811'),
(230, '030812000', 'SAMAL', '03', '0308', '030812'),
(231, '031401000', 'ANGAT', '03', '0314', '031401'),
(232, '031402000', 'BALAGTAS (BIGAA)', '03', '0314', '031402'),
(233, '031403000', 'BALIUAG', '03', '0314', '031403'),
(234, '031404000', 'BOCAUE', '03', '0314', '031404'),
(235, '031405000', 'BULACAN', '03', '0314', '031405'),
(236, '031406000', 'BUSTOS', '03', '0314', '031406'),
(237, '031407000', 'CALUMPIT', '03', '0314', '031407'),
(238, '031408000', 'GUIGUINTO', '03', '0314', '031408'),
(239, '031409000', 'HAGONOY', '03', '0314', '031409'),
(240, '031410000', 'CITY OF MALOLOS (Capital)', '03', '0314', '031410'),
(241, '031411000', 'MARILAO', '03', '0314', '031411'),
(242, '031412000', 'CITY OF MEYCAUAYAN', '03', '0314', '031412'),
(243, '031413000', 'NORZAGARAY', '03', '0314', '031413'),
(244, '031414000', 'OBANDO', '03', '0314', '031414'),
(245, '031415000', 'PANDI', '03', '0314', '031415'),
(246, '031416000', 'PAOMBONG', '03', '0314', '031416'),
(247, '031417000', 'PLARIDEL', '03', '0314', '031417'),
(248, '031418000', 'PULILAN', '03', '0314', '031418'),
(249, '031419000', 'SAN ILDEFONSO', '03', '0314', '031419'),
(250, '031420000', 'CITY OF SAN JOSE DEL MONTE', '03', '0314', '031420'),
(251, '031421000', 'SAN MIGUEL', '03', '0314', '031421'),
(252, '031422000', 'SAN RAFAEL', '03', '0314', '031422'),
(253, '031423000', 'SANTA MARIA', '03', '0314', '031423'),
(254, '031424000', 'DOÑA REMEDIOS TRINIDAD', '03', '0314', '031424'),
(255, '034901000', 'ALIAGA', '03', '0349', '034901'),
(256, '034902000', 'BONGABON', '03', '0349', '034902'),
(257, '034903000', 'CABANATUAN CITY', '03', '0349', '034903'),
(258, '034904000', 'CABIAO', '03', '0349', '034904'),
(259, '034905000', 'CARRANGLAN', '03', '0349', '034905'),
(260, '034906000', 'CUYAPO', '03', '0349', '034906'),
(261, '034907000', 'GABALDON (BITULOK & SABANI)', '03', '0349', '034907'),
(262, '034908000', 'CITY OF GAPAN', '03', '0349', '034908'),
(263, '034909000', 'GENERAL MAMERTO NATIVIDAD', '03', '0349', '034909'),
(264, '034910000', 'GENERAL TINIO (PAPAYA)', '03', '0349', '034910'),
(265, '034911000', 'GUIMBA', '03', '0349', '034911'),
(266, '034912000', 'JAEN', '03', '0349', '034912'),
(267, '034913000', 'LAUR', '03', '0349', '034913'),
(268, '034914000', 'LICAB', '03', '0349', '034914'),
(269, '034915000', 'LLANERA', '03', '0349', '034915'),
(270, '034916000', 'LUPAO', '03', '0349', '034916'),
(271, '034917000', 'SCIENCE CITY OF MUÑOZ', '03', '0349', '034917'),
(272, '034918000', 'NAMPICUAN', '03', '0349', '034918'),
(273, '034919000', 'PALAYAN CITY (Capital)', '03', '0349', '034919'),
(274, '034920000', 'PANTABANGAN', '03', '0349', '034920'),
(275, '034921000', 'PEÑARANDA', '03', '0349', '034921'),
(276, '034922000', 'QUEZON', '03', '0349', '034922'),
(277, '034923000', 'RIZAL', '03', '0349', '034923'),
(278, '034924000', 'SAN ANTONIO', '03', '0349', '034924'),
(279, '034925000', 'SAN ISIDRO', '03', '0349', '034925'),
(280, '034926000', 'SAN JOSE CITY', '03', '0349', '034926'),
(281, '034927000', 'SAN LEONARDO', '03', '0349', '034927'),
(282, '034928000', 'SANTA ROSA', '03', '0349', '034928'),
(283, '034929000', 'SANTO DOMINGO', '03', '0349', '034929'),
(284, '034930000', 'TALAVERA', '03', '0349', '034930'),
(285, '034931000', 'TALUGTUG', '03', '0349', '034931'),
(286, '034932000', 'ZARAGOZA', '03', '0349', '034932'),
(287, '035401000', 'ANGELES CITY', '03', '0354', '035401'),
(288, '035402000', 'APALIT', '03', '0354', '035402'),
(289, '035403000', 'ARAYAT', '03', '0354', '035403'),
(290, '035404000', 'BACOLOR', '03', '0354', '035404'),
(291, '035405000', 'CANDABA', '03', '0354', '035405'),
(292, '035406000', 'FLORIDABLANCA', '03', '0354', '035406'),
(293, '035407000', 'GUAGUA', '03', '0354', '035407'),
(294, '035408000', 'LUBAO', '03', '0354', '035408'),
(295, '035409000', 'MABALACAT CITY', '03', '0354', '035409'),
(296, '035410000', 'MACABEBE', '03', '0354', '035410'),
(297, '035411000', 'MAGALANG', '03', '0354', '035411'),
(298, '035412000', 'MASANTOL', '03', '0354', '035412'),
(299, '035413000', 'MEXICO', '03', '0354', '035413'),
(300, '035414000', 'MINALIN', '03', '0354', '035414'),
(301, '035415000', 'PORAC', '03', '0354', '035415'),
(302, '035416000', 'CITY OF SAN FERNANDO (Capital)', '03', '0354', '035416'),
(303, '035417000', 'SAN LUIS', '03', '0354', '035417'),
(304, '035418000', 'SAN SIMON', '03', '0354', '035418'),
(305, '035419000', 'SANTA ANA', '03', '0354', '035419'),
(306, '035420000', 'SANTA RITA', '03', '0354', '035420'),
(307, '035421000', 'SANTO TOMAS', '03', '0354', '035421'),
(308, '035422000', 'SASMUAN (Sexmoan)', '03', '0354', '035422'),
(309, '036901000', 'ANAO', '03', '0369', '036901'),
(310, '036902000', 'BAMBAN', '03', '0369', '036902'),
(311, '036903000', 'CAMILING', '03', '0369', '036903'),
(312, '036904000', 'CAPAS', '03', '0369', '036904'),
(313, '036905000', 'CONCEPCION', '03', '0369', '036905'),
(314, '036906000', 'GERONA', '03', '0369', '036906'),
(315, '036907000', 'LA PAZ', '03', '0369', '036907'),
(316, '036908000', 'MAYANTOC', '03', '0369', '036908'),
(317, '036909000', 'MONCADA', '03', '0369', '036909'),
(318, '036910000', 'PANIQUI', '03', '0369', '036910'),
(319, '036911000', 'PURA', '03', '0369', '036911'),
(320, '036912000', 'RAMOS', '03', '0369', '036912'),
(321, '036913000', 'SAN CLEMENTE', '03', '0369', '036913'),
(322, '036914000', 'SAN MANUEL', '03', '0369', '036914'),
(323, '036915000', 'SANTA IGNACIA', '03', '0369', '036915'),
(324, '036916000', 'CITY OF TARLAC (Capital)', '03', '0369', '036916'),
(325, '036917000', 'VICTORIA', '03', '0369', '036917'),
(326, '036918000', 'SAN JOSE', '03', '0369', '036918'),
(327, '037101000', 'BOTOLAN', '03', '0371', '037101'),
(328, '037102000', 'CABANGAN', '03', '0371', '037102'),
(329, '037103000', 'CANDELARIA', '03', '0371', '037103'),
(330, '037104000', 'CASTILLEJOS', '03', '0371', '037104'),
(331, '037105000', 'IBA (Capital)', '03', '0371', '037105'),
(332, '037106000', 'MASINLOC', '03', '0371', '037106'),
(333, '037107000', 'OLONGAPO CITY', '03', '0371', '037107'),
(334, '037108000', 'PALAUIG', '03', '0371', '037108'),
(335, '037109000', 'SAN ANTONIO', '03', '0371', '037109'),
(336, '037110000', 'SAN FELIPE', '03', '0371', '037110'),
(337, '037111000', 'SAN MARCELINO', '03', '0371', '037111'),
(338, '037112000', 'SAN NARCISO', '03', '0371', '037112'),
(339, '037113000', 'SANTA CRUZ', '03', '0371', '037113'),
(340, '037114000', 'SUBIC', '03', '0371', '037114'),
(341, '037701000', 'BALER (Capital)', '03', '0377', '037701'),
(342, '037702000', 'CASIGURAN', '03', '0377', '037702'),
(343, '037703000', 'DILASAG', '03', '0377', '037703'),
(344, '037704000', 'DINALUNGAN', '03', '0377', '037704'),
(345, '037705000', 'DINGALAN', '03', '0377', '037705'),
(346, '037706000', 'DIPACULAO', '03', '0377', '037706'),
(347, '037707000', 'MARIA AURORA', '03', '0377', '037707'),
(348, '037708000', 'SAN LUIS', '03', '0377', '037708'),
(349, '041001000', 'AGONCILLO', '04', '0410', '041001'),
(350, '041002000', 'ALITAGTAG', '04', '0410', '041002'),
(351, '041003000', 'BALAYAN', '04', '0410', '041003'),
(352, '041004000', 'BALETE', '04', '0410', '041004'),
(353, '041005000', 'BATANGAS CITY (Capital)', '04', '0410', '041005'),
(354, '041006000', 'BAUAN', '04', '0410', '041006'),
(355, '041007000', 'CALACA', '04', '0410', '041007'),
(356, '041008000', 'CALATAGAN', '04', '0410', '041008'),
(357, '041009000', 'CUENCA', '04', '0410', '041009'),
(358, '041010000', 'IBAAN', '04', '0410', '041010'),
(359, '041011000', 'LAUREL', '04', '0410', '041011'),
(360, '041012000', 'LEMERY', '04', '0410', '041012'),
(361, '041013000', 'LIAN', '04', '0410', '041013'),
(362, '041014000', 'LIPA CITY', '04', '0410', '041014'),
(363, '041015000', 'LOBO', '04', '0410', '041015'),
(364, '041016000', 'MABINI', '04', '0410', '041016'),
(365, '041017000', 'MALVAR', '04', '0410', '041017'),
(366, '041018000', 'MATAASNAKAHOY', '04', '0410', '041018'),
(367, '041019000', 'NASUGBU', '04', '0410', '041019'),
(368, '041020000', 'PADRE GARCIA', '04', '0410', '041020'),
(369, '041021000', 'ROSARIO', '04', '0410', '041021'),
(370, '041022000', 'SAN JOSE', '04', '0410', '041022'),
(371, '041023000', 'SAN JUAN', '04', '0410', '041023'),
(372, '041024000', 'SAN LUIS', '04', '0410', '041024'),
(373, '041025000', 'SAN NICOLAS', '04', '0410', '041025'),
(374, '041026000', 'SAN PASCUAL', '04', '0410', '041026'),
(375, '041027000', 'SANTA TERESITA', '04', '0410', '041027'),
(376, '041028000', 'SANTO TOMAS', '04', '0410', '041028'),
(377, '041029000', 'TAAL', '04', '0410', '041029'),
(378, '041030000', 'TALISAY', '04', '0410', '041030'),
(379, '041031000', 'CITY OF TANAUAN', '04', '0410', '041031'),
(380, '041032000', 'TAYSAN', '04', '0410', '041032'),
(381, '041033000', 'TINGLOY', '04', '0410', '041033'),
(382, '041034000', 'TUY', '04', '0410', '041034'),
(383, '042101000', 'ALFONSO', '04', '0421', '042101'),
(384, '042102000', 'AMADEO', '04', '0421', '042102'),
(385, '042103000', 'BACOOR CITY', '04', '0421', '042103'),
(386, '042104000', 'CARMONA', '04', '0421', '042104'),
(387, '042105000', 'CAVITE CITY', '04', '0421', '042105'),
(388, '042106000', 'CITY OF DASMARIÑAS', '04', '0421', '042106'),
(389, '042107000', 'GENERAL EMILIO AGUINALDO', '04', '0421', '042107'),
(390, '042108000', 'GENERAL TRIAS', '04', '0421', '042108'),
(391, '042109000', 'IMUS CITY', '04', '0421', '042109'),
(392, '042110000', 'INDANG', '04', '0421', '042110'),
(393, '042111000', 'KAWIT', '04', '0421', '042111'),
(394, '042112000', 'MAGALLANES', '04', '0421', '042112'),
(395, '042113000', 'MARAGONDON', '04', '0421', '042113'),
(396, '042114000', 'MENDEZ (MENDEZ-NUÑEZ)', '04', '0421', '042114'),
(397, '042115000', 'NAIC', '04', '0421', '042115'),
(398, '042116000', 'NOVELETA', '04', '0421', '042116'),
(399, '042117000', 'ROSARIO', '04', '0421', '042117'),
(400, '042118000', 'SILANG', '04', '0421', '042118'),
(401, '042119000', 'TAGAYTAY CITY', '04', '0421', '042119'),
(402, '042120000', 'TANZA', '04', '0421', '042120'),
(403, '042121000', 'TERNATE', '04', '0421', '042121'),
(404, '042122000', 'TRECE MARTIRES CITY (Capital)', '04', '0421', '042122'),
(405, '042123000', 'GEN. MARIANO ALVAREZ', '04', '0421', '042123'),
(406, '043401000', 'ALAMINOS', '04', '0434', '043401'),
(407, '043402000', 'BAY', '04', '0434', '043402'),
(408, '043403000', 'CITY OF BIÑAN', '04', '0434', '043403'),
(409, '043404000', 'CABUYAO CITY', '04', '0434', '043404'),
(410, '043405000', 'CITY OF CALAMBA', '04', '0434', '043405'),
(411, '043406000', 'CALAUAN', '04', '0434', '043406'),
(412, '043407000', 'CAVINTI', '04', '0434', '043407'),
(413, '043408000', 'FAMY', '04', '0434', '043408'),
(414, '043409000', 'KALAYAAN', '04', '0434', '043409'),
(415, '043410000', 'LILIW', '04', '0434', '043410'),
(416, '043411000', 'LOS BAÑOS', '04', '0434', '043411'),
(417, '043412000', 'LUISIANA', '04', '0434', '043412'),
(418, '043413000', 'LUMBAN', '04', '0434', '043413'),
(419, '043414000', 'MABITAC', '04', '0434', '043414'),
(420, '043415000', 'MAGDALENA', '04', '0434', '043415'),
(421, '043416000', 'MAJAYJAY', '04', '0434', '043416'),
(422, '043417000', 'NAGCARLAN', '04', '0434', '043417'),
(423, '043418000', 'PAETE', '04', '0434', '043418'),
(424, '043419000', 'PAGSANJAN', '04', '0434', '043419'),
(425, '043420000', 'PAKIL', '04', '0434', '043420'),
(426, '043421000', 'PANGIL', '04', '0434', '043421'),
(427, '043422000', 'PILA', '04', '0434', '043422'),
(428, '043423000', 'RIZAL', '04', '0434', '043423'),
(429, '043424000', 'SAN PABLO CITY', '04', '0434', '043424'),
(430, '043425000', 'CITY OF SAN PEDRO', '04', '0434', '043425'),
(431, '043426000', 'SANTA CRUZ (Capital)', '04', '0434', '043426'),
(432, '043427000', 'SANTA MARIA', '04', '0434', '043427'),
(433, '043428000', 'CITY OF SANTA ROSA', '04', '0434', '043428'),
(434, '043429000', 'SINILOAN', '04', '0434', '043429'),
(435, '043430000', 'VICTORIA', '04', '0434', '043430'),
(436, '045601000', 'AGDANGAN', '04', '0456', '045601'),
(437, '045602000', 'ALABAT', '04', '0456', '045602'),
(438, '045603000', 'ATIMONAN', '04', '0456', '045603'),
(439, '045605000', 'BUENAVISTA', '04', '0456', '045605'),
(440, '045606000', 'BURDEOS', '04', '0456', '045606'),
(441, '045607000', 'CALAUAG', '04', '0456', '045607'),
(442, '045608000', 'CANDELARIA', '04', '0456', '045608'),
(443, '045610000', 'CATANAUAN', '04', '0456', '045610'),
(444, '045615000', 'DOLORES', '04', '0456', '045615'),
(445, '045616000', 'GENERAL LUNA', '04', '0456', '045616'),
(446, '045617000', 'GENERAL NAKAR', '04', '0456', '045617'),
(447, '045618000', 'GUINAYANGAN', '04', '0456', '045618'),
(448, '045619000', 'GUMACA', '04', '0456', '045619'),
(449, '045620000', 'INFANTA', '04', '0456', '045620'),
(450, '045621000', 'JOMALIG', '04', '0456', '045621'),
(451, '045622000', 'LOPEZ', '04', '0456', '045622'),
(452, '045623000', 'LUCBAN', '04', '0456', '045623'),
(453, '045624000', 'LUCENA CITY (Capital)', '04', '0456', '045624'),
(454, '045625000', 'MACALELON', '04', '0456', '045625'),
(455, '045627000', 'MAUBAN', '04', '0456', '045627'),
(456, '045628000', 'MULANAY', '04', '0456', '045628'),
(457, '045629000', 'PADRE BURGOS', '04', '0456', '045629'),
(458, '045630000', 'PAGBILAO', '04', '0456', '045630'),
(459, '045631000', 'PANUKULAN', '04', '0456', '045631'),
(460, '045632000', 'PATNANUNGAN', '04', '0456', '045632'),
(461, '045633000', 'PEREZ', '04', '0456', '045633'),
(462, '045634000', 'PITOGO', '04', '0456', '045634'),
(463, '045635000', 'PLARIDEL', '04', '0456', '045635'),
(464, '045636000', 'POLILLO', '04', '0456', '045636'),
(465, '045637000', 'QUEZON', '04', '0456', '045637'),
(466, '045638000', 'REAL', '04', '0456', '045638'),
(467, '045639000', 'SAMPALOC', '04', '0456', '045639'),
(468, '045640000', 'SAN ANDRES', '04', '0456', '045640'),
(469, '045641000', 'SAN ANTONIO', '04', '0456', '045641'),
(470, '045642000', 'SAN FRANCISCO (AURORA)', '04', '0456', '045642'),
(471, '045644000', 'SAN NARCISO', '04', '0456', '045644'),
(472, '045645000', 'SARIAYA', '04', '0456', '045645'),
(473, '045646000', 'TAGKAWAYAN', '04', '0456', '045646'),
(474, '045647000', 'CITY OF TAYABAS', '04', '0456', '045647'),
(475, '045648000', 'TIAONG', '04', '0456', '045648'),
(476, '045649000', 'UNISAN', '04', '0456', '045649'),
(477, '045801000', 'ANGONO', '04', '0458', '045801'),
(478, '045802000', 'CITY OF ANTIPOLO', '04', '0458', '045802'),
(479, '045803000', 'BARAS', '04', '0458', '045803'),
(480, '045804000', 'BINANGONAN', '04', '0458', '045804'),
(481, '045805000', 'CAINTA', '04', '0458', '045805'),
(482, '045806000', 'CARDONA', '04', '0458', '045806'),
(483, '045807000', 'JALA-JALA', '04', '0458', '045807'),
(484, '045808000', 'RODRIGUEZ (MONTALBAN)', '04', '0458', '045808'),
(485, '045809000', 'MORONG', '04', '0458', '045809'),
(486, '045810000', 'PILILLA', '04', '0458', '045810'),
(487, '045811000', 'SAN MATEO', '04', '0458', '045811'),
(488, '045812000', 'TANAY', '04', '0458', '045812'),
(489, '045813000', 'TAYTAY', '04', '0458', '045813'),
(490, '045814000', 'TERESA', '04', '0458', '045814'),
(491, '174001000', 'BOAC (Capital)', '17', '1740', '174001'),
(492, '174002000', 'BUENAVISTA', '17', '1740', '174002'),
(493, '174003000', 'GASAN', '17', '1740', '174003'),
(494, '174004000', 'MOGPOG', '17', '1740', '174004'),
(495, '174005000', 'SANTA CRUZ', '17', '1740', '174005'),
(496, '174006000', 'TORRIJOS', '17', '1740', '174006'),
(497, '175101000', 'ABRA DE ILOG', '17', '1751', '175101'),
(498, '175102000', 'CALINTAAN', '17', '1751', '175102'),
(499, '175103000', 'LOOC', '17', '1751', '175103'),
(500, '175104000', 'LUBANG', '17', '1751', '175104'),
(501, '175105000', 'MAGSAYSAY', '17', '1751', '175105'),
(502, '175106000', 'MAMBURAO (Capital)', '17', '1751', '175106'),
(503, '175107000', 'PALUAN', '17', '1751', '175107'),
(504, '175108000', 'RIZAL', '17', '1751', '175108'),
(505, '175109000', 'SABLAYAN', '17', '1751', '175109'),
(506, '175110000', 'SAN JOSE', '17', '1751', '175110'),
(507, '175111000', 'SANTA CRUZ', '17', '1751', '175111'),
(508, '175201000', 'BACO', '17', '1752', '175201'),
(509, '175202000', 'BANSUD', '17', '1752', '175202'),
(510, '175203000', 'BONGABONG', '17', '1752', '175203'),
(511, '175204000', 'BULALACAO (SAN PEDRO)', '17', '1752', '175204'),
(512, '175205000', 'CITY OF CALAPAN (Capital)', '17', '1752', '175205'),
(513, '175206000', 'GLORIA', '17', '1752', '175206'),
(514, '175207000', 'MANSALAY', '17', '1752', '175207'),
(515, '175208000', 'NAUJAN', '17', '1752', '175208'),
(516, '175209000', 'PINAMALAYAN', '17', '1752', '175209'),
(517, '175210000', 'POLA', '17', '1752', '175210'),
(518, '175211000', 'PUERTO GALERA', '17', '1752', '175211'),
(519, '175212000', 'ROXAS', '17', '1752', '175212'),
(520, '175213000', 'SAN TEODORO', '17', '1752', '175213'),
(521, '175214000', 'SOCORRO', '17', '1752', '175214'),
(522, '175215000', 'VICTORIA', '17', '1752', '175215'),
(523, '175301000', 'ABORLAN', '17', '1753', '175301'),
(524, '175302000', 'AGUTAYA', '17', '1753', '175302'),
(525, '175303000', 'ARACELI', '17', '1753', '175303'),
(526, '175304000', 'BALABAC', '17', '1753', '175304'),
(527, '175305000', 'BATARAZA', '17', '1753', '175305'),
(528, '175306000', 'BROOKE''S POINT', '17', '1753', '175306'),
(529, '175307000', 'BUSUANGA', '17', '1753', '175307'),
(530, '175308000', 'CAGAYANCILLO', '17', '1753', '175308'),
(531, '175309000', 'CORON', '17', '1753', '175309'),
(532, '175310000', 'CUYO', '17', '1753', '175310'),
(533, '175311000', 'DUMARAN', '17', '1753', '175311'),
(534, '175312000', 'EL NIDO (BACUIT)', '17', '1753', '175312'),
(535, '175313000', 'LINAPACAN', '17', '1753', '175313'),
(536, '175314000', 'MAGSAYSAY', '17', '1753', '175314'),
(537, '175315000', 'NARRA', '17', '1753', '175315'),
(538, '175316000', 'PUERTO PRINCESA CITY (Capital)', '17', '1753', '175316'),
(539, '175317000', 'QUEZON', '17', '1753', '175317'),
(540, '175318000', 'ROXAS', '17', '1753', '175318'),
(541, '175319000', 'SAN VICENTE', '17', '1753', '175319'),
(542, '175320000', 'TAYTAY', '17', '1753', '175320'),
(543, '175321000', 'KALAYAAN', '17', '1753', '175321'),
(544, '175322000', 'CULION', '17', '1753', '175322'),
(545, '175323000', 'RIZAL (MARCOS)', '17', '1753', '175323'),
(546, '175324000', 'SOFRONIO ESPAÑOLA', '17', '1753', '175324'),
(547, '175901000', 'ALCANTARA', '17', '1759', '175901'),
(548, '175902000', 'BANTON', '17', '1759', '175902'),
(549, '175903000', 'CAJIDIOCAN', '17', '1759', '175903'),
(550, '175904000', 'CALATRAVA', '17', '1759', '175904'),
(551, '175905000', 'CONCEPCION', '17', '1759', '175905'),
(552, '175906000', 'CORCUERA', '17', '1759', '175906'),
(553, '175907000', 'LOOC', '17', '1759', '175907'),
(554, '175908000', 'MAGDIWANG', '17', '1759', '175908'),
(555, '175909000', 'ODIONGAN', '17', '1759', '175909'),
(556, '175910000', 'ROMBLON (Capital)', '17', '1759', '175910'),
(557, '175911000', 'SAN AGUSTIN', '17', '1759', '175911'),
(558, '175912000', 'SAN ANDRES', '17', '1759', '175912'),
(559, '175913000', 'SAN FERNANDO', '17', '1759', '175913'),
(560, '175914000', 'SAN JOSE', '17', '1759', '175914'),
(561, '175915000', 'SANTA FE', '17', '1759', '175915'),
(562, '175916000', 'FERROL', '17', '1759', '175916'),
(563, '175917000', 'SANTA MARIA (IMELDA)', '17', '1759', '175917'),
(564, '050501000', 'BACACAY', '05', '0505', '050501'),
(565, '050502000', 'CAMALIG', '05', '0505', '050502'),
(566, '050503000', 'DARAGA (LOCSIN)', '05', '0505', '050503'),
(567, '050504000', 'GUINOBATAN', '05', '0505', '050504'),
(568, '050505000', 'JOVELLAR', '05', '0505', '050505'),
(569, '050506000', 'LEGAZPI CITY (Capital)', '05', '0505', '050506'),
(570, '050507000', 'LIBON', '05', '0505', '050507'),
(571, '050508000', 'CITY OF LIGAO', '05', '0505', '050508'),
(572, '050509000', 'MALILIPOT', '05', '0505', '050509'),
(573, '050510000', 'MALINAO', '05', '0505', '050510'),
(574, '050511000', 'MANITO', '05', '0505', '050511'),
(575, '050512000', 'OAS', '05', '0505', '050512'),
(576, '050513000', 'PIO DURAN', '05', '0505', '050513'),
(577, '050514000', 'POLANGUI', '05', '0505', '050514'),
(578, '050515000', 'RAPU-RAPU', '05', '0505', '050515'),
(579, '050516000', 'SANTO DOMINGO (LIBOG)', '05', '0505', '050516'),
(580, '050517000', 'CITY OF TABACO', '05', '0505', '050517'),
(581, '050518000', 'TIWI', '05', '0505', '050518'),
(582, '051601000', 'BASUD', '05', '0516', '051601'),
(583, '051602000', 'CAPALONGA', '05', '0516', '051602'),
(584, '051603000', 'DAET (Capital)', '05', '0516', '051603'),
(585, '051604000', 'SAN LORENZO RUIZ (IMELDA)', '05', '0516', '051604'),
(586, '051605000', 'JOSE PANGANIBAN', '05', '0516', '051605'),
(587, '051606000', 'LABO', '05', '0516', '051606'),
(588, '051607000', 'MERCEDES', '05', '0516', '051607'),
(589, '051608000', 'PARACALE', '05', '0516', '051608'),
(590, '051609000', 'SAN VICENTE', '05', '0516', '051609'),
(591, '051610000', 'SANTA ELENA', '05', '0516', '051610'),
(592, '051611000', 'TALISAY', '05', '0516', '051611'),
(593, '051612000', 'VINZONS', '05', '0516', '051612'),
(594, '051701000', 'BAAO', '05', '0517', '051701'),
(595, '051702000', 'BALATAN', '05', '0517', '051702'),
(596, '051703000', 'BATO', '05', '0517', '051703'),
(597, '051704000', 'BOMBON', '05', '0517', '051704'),
(598, '051705000', 'BUHI', '05', '0517', '051705'),
(599, '051706000', 'BULA', '05', '0517', '051706'),
(600, '051707000', 'CABUSAO', '05', '0517', '051707'),
(601, '051708000', 'CALABANGA', '05', '0517', '051708'),
(602, '051709000', 'CAMALIGAN', '05', '0517', '051709'),
(603, '051710000', 'CANAMAN', '05', '0517', '051710'),
(604, '051711000', 'CARAMOAN', '05', '0517', '051711'),
(605, '051712000', 'DEL GALLEGO', '05', '0517', '051712'),
(606, '051713000', 'GAINZA', '05', '0517', '051713'),
(607, '051714000', 'GARCHITORENA', '05', '0517', '051714'),
(608, '051715000', 'GOA', '05', '0517', '051715'),
(609, '051716000', 'IRIGA CITY', '05', '0517', '051716'),
(610, '051717000', 'LAGONOY', '05', '0517', '051717'),
(611, '051718000', 'LIBMANAN', '05', '0517', '051718'),
(612, '051719000', 'LUPI', '05', '0517', '051719'),
(613, '051720000', 'MAGARAO', '05', '0517', '051720'),
(614, '051721000', 'MILAOR', '05', '0517', '051721'),
(615, '051722000', 'MINALABAC', '05', '0517', '051722'),
(616, '051723000', 'NABUA', '05', '0517', '051723'),
(617, '051724000', 'NAGA CITY', '05', '0517', '051724'),
(618, '051725000', 'OCAMPO', '05', '0517', '051725'),
(619, '051726000', 'PAMPLONA', '05', '0517', '051726'),
(620, '051727000', 'PASACAO', '05', '0517', '051727'),
(621, '051728000', 'PILI (Capital)', '05', '0517', '051728'),
(622, '051729000', 'PRESENTACION (PARUBCAN)', '05', '0517', '051729'),
(623, '051730000', 'RAGAY', '05', '0517', '051730'),
(624, '051731000', 'SAGÑAY', '05', '0517', '051731'),
(625, '051732000', 'SAN FERNANDO', '05', '0517', '051732'),
(626, '051733000', 'SAN JOSE', '05', '0517', '051733'),
(627, '051734000', 'SIPOCOT', '05', '0517', '051734'),
(628, '051735000', 'SIRUMA', '05', '0517', '051735'),
(629, '051736000', 'TIGAON', '05', '0517', '051736'),
(630, '051737000', 'TINAMBAC', '05', '0517', '051737'),
(631, '052001000', 'BAGAMANOC', '05', '0520', '052001'),
(632, '052002000', 'BARAS', '05', '0520', '052002'),
(633, '052003000', 'BATO', '05', '0520', '052003'),
(634, '052004000', 'CARAMORAN', '05', '0520', '052004'),
(635, '052005000', 'GIGMOTO', '05', '0520', '052005'),
(636, '052006000', 'PANDAN', '05', '0520', '052006'),
(637, '052007000', 'PANGANIBAN (PAYO)', '05', '0520', '052007'),
(638, '052008000', 'SAN ANDRES (CALOLBON)', '05', '0520', '052008'),
(639, '052009000', 'SAN MIGUEL', '05', '0520', '052009'),
(640, '052010000', 'VIGA', '05', '0520', '052010'),
(641, '052011000', 'VIRAC (Capital)', '05', '0520', '052011'),
(642, '054101000', 'AROROY', '05', '0541', '054101'),
(643, '054102000', 'BALENO', '05', '0541', '054102'),
(644, '054103000', 'BALUD', '05', '0541', '054103'),
(645, '054104000', 'BATUAN', '05', '0541', '054104'),
(646, '054105000', 'CATAINGAN', '05', '0541', '054105'),
(647, '054106000', 'CAWAYAN', '05', '0541', '054106'),
(648, '054107000', 'CLAVERIA', '05', '0541', '054107'),
(649, '054108000', 'DIMASALANG', '05', '0541', '054108'),
(650, '054109000', 'ESPERANZA', '05', '0541', '054109'),
(651, '054110000', 'MANDAON', '05', '0541', '054110'),
(652, '054111000', 'CITY OF MASBATE (Capital)', '05', '0541', '054111'),
(653, '054112000', 'MILAGROS', '05', '0541', '054112'),
(654, '054113000', 'MOBO', '05', '0541', '054113'),
(655, '054114000', 'MONREAL', '05', '0541', '054114'),
(656, '054115000', 'PALANAS', '05', '0541', '054115'),
(657, '054116000', 'PIO V. CORPUZ (LIMBUHAN)', '05', '0541', '054116'),
(658, '054117000', 'PLACER', '05', '0541', '054117'),
(659, '054118000', 'SAN FERNANDO', '05', '0541', '054118'),
(660, '054119000', 'SAN JACINTO', '05', '0541', '054119'),
(661, '054120000', 'SAN PASCUAL', '05', '0541', '054120'),
(662, '054121000', 'USON', '05', '0541', '054121'),
(663, '056202000', 'BARCELONA', '05', '0562', '056202'),
(664, '056203000', 'BULAN', '05', '0562', '056203'),
(665, '056204000', 'BULUSAN', '05', '0562', '056204'),
(666, '056205000', 'CASIGURAN', '05', '0562', '056205'),
(667, '056206000', 'CASTILLA', '05', '0562', '056206'),
(668, '056207000', 'DONSOL', '05', '0562', '056207'),
(669, '056208000', 'GUBAT', '05', '0562', '056208'),
(670, '056209000', 'IROSIN', '05', '0562', '056209'),
(671, '056210000', 'JUBAN', '05', '0562', '056210'),
(672, '056211000', 'MAGALLANES', '05', '0562', '056211'),
(673, '056212000', 'MATNOG', '05', '0562', '056212'),
(674, '056213000', 'PILAR', '05', '0562', '056213'),
(675, '056214000', 'PRIETO DIAZ', '05', '0562', '056214'),
(676, '056215000', 'SANTA MAGDALENA', '05', '0562', '056215'),
(677, '056216000', 'CITY OF SORSOGON (Capital)', '05', '0562', '056216'),
(678, '060401000', 'ALTAVAS', '06', '0604', '060401'),
(679, '060402000', 'BALETE', '06', '0604', '060402'),
(680, '060403000', 'BANGA', '06', '0604', '060403'),
(681, '060404000', 'BATAN', '06', '0604', '060404'),
(682, '060405000', 'BURUANGA', '06', '0604', '060405'),
(683, '060406000', 'IBAJAY', '06', '0604', '060406'),
(684, '060407000', 'KALIBO (Capital)', '06', '0604', '060407'),
(685, '060408000', 'LEZO', '06', '0604', '060408'),
(686, '060409000', 'LIBACAO', '06', '0604', '060409'),
(687, '060410000', 'MADALAG', '06', '0604', '060410'),
(688, '060411000', 'MAKATO', '06', '0604', '060411'),
(689, '060412000', 'MALAY', '06', '0604', '060412'),
(690, '060413000', 'MALINAO', '06', '0604', '060413'),
(691, '060414000', 'NABAS', '06', '0604', '060414'),
(692, '060415000', 'NEW WASHINGTON', '06', '0604', '060415'),
(693, '060416000', 'NUMANCIA', '06', '0604', '060416'),
(694, '060417000', 'TANGALAN', '06', '0604', '060417'),
(695, '060601000', 'ANINI-Y', '06', '0606', '060601'),
(696, '060602000', 'BARBAZA', '06', '0606', '060602'),
(697, '060603000', 'BELISON', '06', '0606', '060603'),
(698, '060604000', 'BUGASONG', '06', '0606', '060604'),
(699, '060605000', 'CALUYA', '06', '0606', '060605'),
(700, '060606000', 'CULASI', '06', '0606', '060606'),
(701, '060607000', 'TOBIAS FORNIER (DAO)', '06', '0606', '060607'),
(702, '060608000', 'HAMTIC', '06', '0606', '060608'),
(703, '060609000', 'LAUA-AN', '06', '0606', '060609'),
(704, '060610000', 'LIBERTAD', '06', '0606', '060610'),
(705, '060611000', 'PANDAN', '06', '0606', '060611'),
(706, '060612000', 'PATNONGON', '06', '0606', '060612'),
(707, '060613000', 'SAN JOSE (Capital)', '06', '0606', '060613'),
(708, '060614000', 'SAN REMIGIO', '06', '0606', '060614'),
(709, '060615000', 'SEBASTE', '06', '0606', '060615'),
(710, '060616000', 'SIBALOM', '06', '0606', '060616'),
(711, '060617000', 'TIBIAO', '06', '0606', '060617'),
(712, '060618000', 'VALDERRAMA', '06', '0606', '060618'),
(713, '061901000', 'CUARTERO', '06', '0619', '061901'),
(714, '061902000', 'DAO', '06', '0619', '061902'),
(715, '061903000', 'DUMALAG', '06', '0619', '061903'),
(716, '061904000', 'DUMARAO', '06', '0619', '061904'),
(717, '061905000', 'IVISAN', '06', '0619', '061905'),
(718, '061906000', 'JAMINDAN', '06', '0619', '061906'),
(719, '061907000', 'MA-AYON', '06', '0619', '061907'),
(720, '061908000', 'MAMBUSAO', '06', '0619', '061908'),
(721, '061909000', 'PANAY', '06', '0619', '061909'),
(722, '061910000', 'PANITAN', '06', '0619', '061910'),
(723, '061911000', 'PILAR', '06', '0619', '061911'),
(724, '061912000', 'PONTEVEDRA', '06', '0619', '061912'),
(725, '061913000', 'PRESIDENT ROXAS', '06', '0619', '061913'),
(726, '061914000', 'ROXAS CITY (Capital)', '06', '0619', '061914'),
(727, '061915000', 'SAPI-AN', '06', '0619', '061915'),
(728, '061916000', 'SIGMA', '06', '0619', '061916'),
(729, '061917000', 'TAPAZ', '06', '0619', '061917'),
(730, '063001000', 'AJUY', '06', '0630', '063001'),
(731, '063002000', 'ALIMODIAN', '06', '0630', '063002'),
(732, '063003000', 'ANILAO', '06', '0630', '063003'),
(733, '063004000', 'BADIANGAN', '06', '0630', '063004'),
(734, '063005000', 'BALASAN', '06', '0630', '063005'),
(735, '063006000', 'BANATE', '06', '0630', '063006'),
(736, '063007000', 'BAROTAC NUEVO', '06', '0630', '063007'),
(737, '063008000', 'BAROTAC VIEJO', '06', '0630', '063008'),
(738, '063009000', 'BATAD', '06', '0630', '063009'),
(739, '063010000', 'BINGAWAN', '06', '0630', '063010'),
(740, '063012000', 'CABATUAN', '06', '0630', '063012'),
(741, '063013000', 'CALINOG', '06', '0630', '063013'),
(742, '063014000', 'CARLES', '06', '0630', '063014'),
(743, '063015000', 'CONCEPCION', '06', '0630', '063015'),
(744, '063016000', 'DINGLE', '06', '0630', '063016'),
(745, '063017000', 'DUEÑAS', '06', '0630', '063017'),
(746, '063018000', 'DUMANGAS', '06', '0630', '063018'),
(747, '063019000', 'ESTANCIA', '06', '0630', '063019'),
(748, '063020000', 'GUIMBAL', '06', '0630', '063020'),
(749, '063021000', 'IGBARAS', '06', '0630', '063021'),
(750, '063022000', 'ILOILO CITY (Capital)', '06', '0630', '063022'),
(751, '063023000', 'JANIUAY', '06', '0630', '063023'),
(752, '063025000', 'LAMBUNAO', '06', '0630', '063025'),
(753, '063026000', 'LEGANES', '06', '0630', '063026'),
(754, '063027000', 'LEMERY', '06', '0630', '063027'),
(755, '063028000', 'LEON', '06', '0630', '063028'),
(756, '063029000', 'MAASIN', '06', '0630', '063029'),
(757, '063030000', 'MIAGAO', '06', '0630', '063030'),
(758, '063031000', 'MINA', '06', '0630', '063031'),
(759, '063032000', 'NEW LUCENA', '06', '0630', '063032'),
(760, '063034000', 'OTON', '06', '0630', '063034'),
(761, '063035000', 'CITY OF PASSI', '06', '0630', '063035'),
(762, '063036000', 'PAVIA', '06', '0630', '063036'),
(763, '063037000', 'POTOTAN', '06', '0630', '063037'),
(764, '063038000', 'SAN DIONISIO', '06', '0630', '063038'),
(765, '063039000', 'SAN ENRIQUE', '06', '0630', '063039'),
(766, '063040000', 'SAN JOAQUIN', '06', '0630', '063040'),
(767, '063041000', 'SAN MIGUEL', '06', '0630', '063041'),
(768, '063042000', 'SAN RAFAEL', '06', '0630', '063042'),
(769, '063043000', 'SANTA BARBARA', '06', '0630', '063043'),
(770, '063044000', 'SARA', '06', '0630', '063044'),
(771, '063045000', 'TIGBAUAN', '06', '0630', '063045'),
(772, '063046000', 'TUBUNGAN', '06', '0630', '063046'),
(773, '063047000', 'ZARRAGA', '06', '0630', '063047'),
(774, '064501000', 'BACOLOD CITY (Capital)', '06', '0645', '064501'),
(775, '064502000', 'BAGO CITY', '06', '0645', '064502'),
(776, '064503000', 'BINALBAGAN', '06', '0645', '064503'),
(777, '064504000', 'CADIZ CITY', '06', '0645', '064504'),
(778, '064505000', 'CALATRAVA', '06', '0645', '064505'),
(779, '064506000', 'CANDONI', '06', '0645', '064506'),
(780, '064507000', 'CAUAYAN', '06', '0645', '064507'),
(781, '064508000', 'ENRIQUE B. MAGALONA (SARAVIA)', '06', '0645', '064508'),
(782, '064509000', 'CITY OF ESCALANTE', '06', '0645', '064509'),
(783, '064510000', 'CITY OF HIMAMAYLAN', '06', '0645', '064510'),
(784, '064511000', 'HINIGARAN', '06', '0645', '064511'),
(785, '064512000', 'HINOBA-AN (ASIA)', '06', '0645', '064512'),
(786, '064513000', 'ILOG', '06', '0645', '064513'),
(787, '064514000', 'ISABELA', '06', '0645', '064514'),
(788, '064515000', 'CITY OF KABANKALAN', '06', '0645', '064515'),
(789, '064516000', 'LA CARLOTA CITY', '06', '0645', '064516'),
(790, '064517000', 'LA CASTELLANA', '06', '0645', '064517'),
(791, '064518000', 'MANAPLA', '06', '0645', '064518'),
(792, '064519000', 'MOISES PADILLA (MAGALLON)', '06', '0645', '064519'),
(793, '064520000', 'MURCIA', '06', '0645', '064520'),
(794, '064521000', 'PONTEVEDRA', '06', '0645', '064521'),
(795, '064522000', 'PULUPANDAN', '06', '0645', '064522'),
(796, '064523000', 'SAGAY CITY', '06', '0645', '064523'),
(797, '064524000', 'SAN CARLOS CITY', '06', '0645', '064524'),
(798, '064525000', 'SAN ENRIQUE', '06', '0645', '064525'),
(799, '064526000', 'SILAY CITY', '06', '0645', '064526'),
(800, '064527000', 'CITY OF SIPALAY', '06', '0645', '064527'),
(801, '064528000', 'CITY OF TALISAY', '06', '0645', '064528'),
(802, '064529000', 'TOBOSO', '06', '0645', '064529'),
(803, '064530000', 'VALLADOLID', '06', '0645', '064530'),
(804, '064531000', 'CITY OF VICTORIAS', '06', '0645', '064531'),
(805, '064532000', 'SALVADOR BENEDICTO', '06', '0645', '064532'),
(806, '067901000', 'BUENAVISTA', '06', '0679', '067901'),
(807, '067902000', 'JORDAN (Capital)', '06', '0679', '067902'),
(808, '067903000', 'NUEVA VALENCIA', '06', '0679', '067903'),
(809, '067904000', 'SAN LORENZO', '06', '0679', '067904'),
(810, '067905000', 'SIBUNAG', '06', '0679', '067905'),
(811, '071201000', 'ALBURQUERQUE', '07', '0712', '071201'),
(812, '071202000', 'ALICIA', '07', '0712', '071202'),
(813, '071203000', 'ANDA', '07', '0712', '071203'),
(814, '071204000', 'ANTEQUERA', '07', '0712', '071204'),
(815, '071205000', 'BACLAYON', '07', '0712', '071205'),
(816, '071206000', 'BALILIHAN', '07', '0712', '071206'),
(817, '071207000', 'BATUAN', '07', '0712', '071207'),
(818, '071208000', 'BILAR', '07', '0712', '071208'),
(819, '071209000', 'BUENAVISTA', '07', '0712', '071209'),
(820, '071210000', 'CALAPE', '07', '0712', '071210'),
(821, '071211000', 'CANDIJAY', '07', '0712', '071211'),
(822, '071212000', 'CARMEN', '07', '0712', '071212'),
(823, '071213000', 'CATIGBIAN', '07', '0712', '071213'),
(824, '071214000', 'CLARIN', '07', '0712', '071214'),
(825, '071215000', 'CORELLA', '07', '0712', '071215'),
(826, '071216000', 'CORTES', '07', '0712', '071216'),
(827, '071217000', 'DAGOHOY', '07', '0712', '071217'),
(828, '071218000', 'DANAO', '07', '0712', '071218'),
(829, '071219000', 'DAUIS', '07', '0712', '071219'),
(830, '071220000', 'DIMIAO', '07', '0712', '071220'),
(831, '071221000', 'DUERO', '07', '0712', '071221'),
(832, '071222000', 'GARCIA HERNANDEZ', '07', '0712', '071222'),
(833, '071223000', 'GUINDULMAN', '07', '0712', '071223'),
(834, '071224000', 'INABANGA', '07', '0712', '071224'),
(835, '071225000', 'JAGNA', '07', '0712', '071225'),
(836, '071226000', 'JETAFE', '07', '0712', '071226'),
(837, '071227000', 'LILA', '07', '0712', '071227'),
(838, '071228000', 'LOAY', '07', '0712', '071228'),
(839, '071229000', 'LOBOC', '07', '0712', '071229'),
(840, '071230000', 'LOON', '07', '0712', '071230'),
(841, '071231000', 'MABINI', '07', '0712', '071231'),
(842, '071232000', 'MARIBOJOC', '07', '0712', '071232'),
(843, '071233000', 'PANGLAO', '07', '0712', '071233'),
(844, '071234000', 'PILAR', '07', '0712', '071234'),
(845, '071235000', 'PRES. CARLOS P. GARCIA (PITOGO)', '07', '0712', '071235'),
(846, '071236000', 'SAGBAYAN (BORJA)', '07', '0712', '071236'),
(847, '071237000', 'SAN ISIDRO', '07', '0712', '071237'),
(848, '071238000', 'SAN MIGUEL', '07', '0712', '071238'),
(849, '071239000', 'SEVILLA', '07', '0712', '071239'),
(850, '071240000', 'SIERRA BULLONES', '07', '0712', '071240'),
(851, '071241000', 'SIKATUNA', '07', '0712', '071241'),
(852, '071242000', 'TAGBILARAN CITY (Capital)', '07', '0712', '071242'),
(853, '071243000', 'TALIBON', '07', '0712', '071243'),
(854, '071244000', 'TRINIDAD', '07', '0712', '071244'),
(855, '071245000', 'TUBIGON', '07', '0712', '071245'),
(856, '071246000', 'UBAY', '07', '0712', '071246'),
(857, '071247000', 'VALENCIA', '07', '0712', '071247'),
(858, '071248000', 'BIEN UNIDO', '07', '0712', '071248'),
(859, '072201000', 'ALCANTARA', '07', '0722', '072201'),
(860, '072202000', 'ALCOY', '07', '0722', '072202'),
(861, '072203000', 'ALEGRIA', '07', '0722', '072203'),
(862, '072204000', 'ALOGUINSAN', '07', '0722', '072204'),
(863, '072205000', 'ARGAO', '07', '0722', '072205'),
(864, '072206000', 'ASTURIAS', '07', '0722', '072206'),
(865, '072207000', 'BADIAN', '07', '0722', '072207'),
(866, '072208000', 'BALAMBAN', '07', '0722', '072208'),
(867, '072209000', 'BANTAYAN', '07', '0722', '072209'),
(868, '072210000', 'BARILI', '07', '0722', '072210'),
(869, '072211000', 'CITY OF BOGO', '07', '0722', '072211'),
(870, '072212000', 'BOLJOON', '07', '0722', '072212'),
(871, '072213000', 'BORBON', '07', '0722', '072213'),
(872, '072214000', 'CITY OF CARCAR', '07', '0722', '072214'),
(873, '072215000', 'CARMEN', '07', '0722', '072215'),
(874, '072216000', 'CATMON', '07', '0722', '072216'),
(875, '072217000', 'CEBU CITY (Capital)', '07', '0722', '072217'),
(876, '072218000', 'COMPOSTELA', '07', '0722', '072218'),
(877, '072219000', 'CONSOLACION', '07', '0722', '072219'),
(878, '072220000', 'CORDOVA', '07', '0722', '072220'),
(879, '072221000', 'DAANBANTAYAN', '07', '0722', '072221'),
(880, '072222000', 'DALAGUETE', '07', '0722', '072222'),
(881, '072223000', 'DANAO CITY', '07', '0722', '072223'),
(882, '072224000', 'DUMANJUG', '07', '0722', '072224'),
(883, '072225000', 'GINATILAN', '07', '0722', '072225'),
(884, '072226000', 'LAPU-LAPU CITY (OPON)', '07', '0722', '072226'),
(885, '072227000', 'LILOAN', '07', '0722', '072227'),
(886, '072228000', 'MADRIDEJOS', '07', '0722', '072228'),
(887, '072229000', 'MALABUYOC', '07', '0722', '072229'),
(888, '072230000', 'MANDAUE CITY', '07', '0722', '072230'),
(889, '072231000', 'MEDELLIN', '07', '0722', '072231'),
(890, '072232000', 'MINGLANILLA', '07', '0722', '072232'),
(891, '072233000', 'MOALBOAL', '07', '0722', '072233'),
(892, '072234000', 'CITY OF NAGA', '07', '0722', '072234'),
(893, '072235000', 'OSLOB', '07', '0722', '072235'),
(894, '072236000', 'PILAR', '07', '0722', '072236'),
(895, '072237000', 'PINAMUNGAHAN', '07', '0722', '072237'),
(896, '072238000', 'PORO', '07', '0722', '072238'),
(897, '072239000', 'RONDA', '07', '0722', '072239'),
(898, '072240000', 'SAMBOAN', '07', '0722', '072240'),
(899, '072241000', 'SAN FERNANDO', '07', '0722', '072241'),
(900, '072242000', 'SAN FRANCISCO', '07', '0722', '072242'),
(901, '072243000', 'SAN REMIGIO', '07', '0722', '072243'),
(902, '072244000', 'SANTA FE', '07', '0722', '072244'),
(903, '072245000', 'SANTANDER', '07', '0722', '072245'),
(904, '072246000', 'SIBONGA', '07', '0722', '072246'),
(905, '072247000', 'SOGOD', '07', '0722', '072247'),
(906, '072248000', 'TABOGON', '07', '0722', '072248'),
(907, '072249000', 'TABUELAN', '07', '0722', '072249');

-- --------------------------------------------------------

--
-- Table structure for table `ph_province`
--

CREATE TABLE `ph_province` (
  `id` int(11) NOT NULL,
  `psgcCode` varchar(255) DEFAULT NULL,
  `provDesc` text,
  `regCode` varchar(255) DEFAULT NULL,
  `provCode` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ph_province`
--

INSERT INTO `ph_province` (`id`, `psgcCode`, `provDesc`, `regCode`, `provCode`) VALUES
(1, '012800000', 'ILOCOS NORTE', '01', '0128'),
(2, '012900000', 'ILOCOS SUR', '01', '0129'),
(3, '013300000', 'LA UNION', '01', '0133'),
(4, '015500000', 'PANGASINAN', '01', '0155'),
(5, '020900000', 'BATANES', '02', '0209'),
(6, '021500000', 'CAGAYAN', '02', '0215'),
(7, '023100000', 'ISABELA', '02', '0231'),
(8, '025000000', 'NUEVA VIZCAYA', '02', '0250'),
(9, '025700000', 'QUIRINO', '02', '0257'),
(10, '030800000', 'BATAAN', '03', '0308'),
(11, '031400000', 'BULACAN', '03', '0314'),
(12, '034900000', 'NUEVA ECIJA', '03', '0349'),
(13, '035400000', 'PAMPANGA', '03', '0354'),
(14, '036900000', 'TARLAC', '03', '0369'),
(15, '037100000', 'ZAMBALES', '03', '0371'),
(16, '037700000', 'AURORA', '03', '0377'),
(17, '041000000', 'BATANGAS', '04', '0410'),
(18, '042100000', 'CAVITE', '04', '0421'),
(19, '043400000', 'LAGUNA', '04', '0434'),
(20, '045600000', 'QUEZON', '04', '0456'),
(21, '045800000', 'RIZAL', '04', '0458'),
(22, '174000000', 'MARINDUQUE', '17', '1740'),
(23, '175100000', 'OCCIDENTAL MINDORO', '17', '1751'),
(24, '175200000', 'ORIENTAL MINDORO', '17', '1752'),
(25, '175300000', 'PALAWAN', '17', '1753'),
(26, '175900000', 'ROMBLON', '17', '1759'),
(27, '050500000', 'ALBAY', '05', '0505'),
(28, '051600000', 'CAMARINES NORTE', '05', '0516'),
(29, '051700000', 'CAMARINES SUR', '05', '0517'),
(30, '052000000', 'CATANDUANES', '05', '0520'),
(31, '054100000', 'MASBATE', '05', '0541'),
(32, '056200000', 'SORSOGON', '05', '0562'),
(33, '060400000', 'AKLAN', '06', '0604'),
(34, '060600000', 'ANTIQUE', '06', '0606'),
(35, '061900000', 'CAPIZ', '06', '0619'),
(36, '063000000', 'ILOILO', '06', '0630'),
(37, '064500000', 'NEGROS OCCIDENTAL', '06', '0645'),
(38, '067900000', 'GUIMARAS', '06', '0679'),
(39, '071200000', 'BOHOL', '07', '0712'),
(40, '072200000', 'CEBU', '07', '0722'),
(41, '074600000', 'NEGROS ORIENTAL', '07', '0746'),
(42, '076100000', 'SIQUIJOR', '07', '0761'),
(43, '082600000', 'EASTERN SAMAR', '08', '0826'),
(44, '083700000', 'LEYTE', '08', '0837'),
(45, '084800000', 'NORTHERN SAMAR', '08', '0848'),
(46, '086000000', 'SAMAR (WESTERN SAMAR)', '08', '0860'),
(47, '086400000', 'SOUTHERN LEYTE', '08', '0864'),
(48, '087800000', 'BILIRAN', '08', '0878'),
(49, '097200000', 'ZAMBOANGA DEL NORTE', '09', '0972'),
(50, '097300000', 'ZAMBOANGA DEL SUR', '09', '0973'),
(51, '098300000', 'ZAMBOANGA SIBUGAY', '09', '0983'),
(52, '099700000', 'CITY OF ISABELA', '09', '0997'),
(53, '101300000', 'BUKIDNON', '10', '1013'),
(54, '101800000', 'CAMIGUIN', '10', '1018'),
(55, '103500000', 'LANAO DEL NORTE', '10', '1035'),
(56, '104200000', 'MISAMIS OCCIDENTAL', '10', '1042'),
(57, '104300000', 'MISAMIS ORIENTAL', '10', '1043'),
(58, '112300000', 'DAVAO DEL NORTE', '11', '1123'),
(59, '112400000', 'DAVAO DEL SUR', '11', '1124'),
(60, '112500000', 'DAVAO ORIENTAL', '11', '1125'),
(61, '118200000', 'COMPOSTELA VALLEY', '11', '1182'),
(62, '118600000', 'DAVAO OCCIDENTAL', '11', '1186'),
(63, '124700000', 'COTABATO (NORTH COTABATO)', '12', '1247'),
(64, '126300000', 'SOUTH COTABATO', '12', '1263'),
(65, '126500000', 'SULTAN KUDARAT', '12', '1265'),
(66, '128000000', 'SARANGANI', '12', '1280'),
(67, '129800000', 'COTABATO CITY', '12', '1298'),
(68, '133900000', 'NCR, CITY OF MANILA, FIRST DISTRICT', '13', '1339'),
(69, '133900000', 'CITY OF MANILA', '13', '1339'),
(70, '137400000', 'NCR, SECOND DISTRICT', '13', '1374'),
(71, '137500000', 'NCR, THIRD DISTRICT', '13', '1375'),
(72, '137600000', 'NCR, FOURTH DISTRICT', '13', '1376'),
(73, '140100000', 'ABRA', '14', '1401'),
(74, '141100000', 'BENGUET', '14', '1411'),
(75, '142700000', 'IFUGAO', '14', '1427'),
(76, '143200000', 'KALINGA', '14', '1432'),
(77, '144400000', 'MOUNTAIN PROVINCE', '14', '1444'),
(78, '148100000', 'APAYAO', '14', '1481'),
(79, '150700000', 'BASILAN', '15', '1507'),
(80, '153600000', 'LANAO DEL SUR', '15', '1536'),
(81, '153800000', 'MAGUINDANAO', '15', '1538'),
(82, '156600000', 'SULU', '15', '1566'),
(83, '157000000', 'TAWI-TAWI', '15', '1570'),
(84, '160200000', 'AGUSAN DEL NORTE', '16', '1602'),
(85, '160300000', 'AGUSAN DEL SUR', '16', '1603'),
(86, '166700000', 'SURIGAO DEL NORTE', '16', '1667'),
(87, '166800000', 'SURIGAO DEL SUR', '16', '1668'),
(88, '168500000', 'DINAGAT ISLANDS', '16', '1685');

-- --------------------------------------------------------

--
-- Table structure for table `ph_region`
--

CREATE TABLE `ph_region` (
  `id` int(11) NOT NULL,
  `psgcCode` varchar(255) DEFAULT NULL,
  `regDesc` text,
  `regCode` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ph_region`
--

INSERT INTO `ph_region` (`id`, `psgcCode`, `regDesc`, `regCode`) VALUES
(1, '010000000', 'REGION I (ILOCOS REGION)', '01'),
(2, '020000000', 'REGION II (CAGAYAN VALLEY)', '02'),
(3, '030000000', 'REGION III (CENTRAL LUZON)', '03'),
(4, '040000000', 'REGION IV-A (CALABARZON)', '04'),
(5, '170000000', 'REGION IV-B (MIMAROPA)', '17'),
(6, '050000000', 'REGION V (BICOL REGION)', '05'),
(7, '060000000', 'REGION VI (WESTERN VISAYAS)', '06'),
(8, '070000000', 'REGION VII (CENTRAL VISAYAS)', '07'),
(9, '080000000', 'REGION VIII (EASTERN VISAYAS)', '08'),
(10, '090000000', 'REGION IX (ZAMBOANGA PENINSULA)', '09'),
(11, '100000000', 'REGION X (NORTHERN MINDANAO)', '10'),
(12, '110000000', 'REGION XI (DAVAO REGION)', '11'),
(13, '120000000', 'REGION XII (SOCCSKSARGEN)', '12'),
(14, '130000000', 'NATIONAL CAPITAL REGION (NCR)', '13'),
(15, '140000000', 'CORDILLERA ADMINISTRATIVE REGION (CAR)', '14'),
(16, '150000000', 'AUTONOMOUS REGION IN MUSLIM MINDANAO (ARMM)', '15'),
(17, '160000000', 'REGION XIII (Caraga)', '16');

-- --------------------------------------------------------

--
-- Table structure for table `prayer_request`
--

CREATE TABLE `prayer_request` (
  `prID` int(11) NOT NULL,
  `pr_bodycontent` text NOT NULL,
  `pr_name` varchar(250) NOT NULL,
  `pr_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prayer_request`
--

INSERT INTO `prayer_request` (`prID`, `pr_bodycontent`, `pr_name`, `pr_date`) VALUES
(1, 'In Jesus name', 'My name', '2017-01-19'),
(2, 'And Now, Amen', 'Here', '2017-01-19'),
(3, 'And Now, Amen', 'Here', '2017-01-19'),
(4, 'And Now, Amen', 'Here', '2017-01-19'),
(5, 'And Now, Amen', 'Here', '2017-01-19'),
(6, 'And Now, Amen', 'Here', '2017-01-19'),
(7, 'sdfsdf', 'fdsf', '2017-01-19'),
(8, 'sadasd', 'asdasd', '2017-01-19'),
(9, 'DSVSDV', 'DFVFDV', '2017-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `quick_links`
--

CREATE TABLE `quick_links` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(350) NOT NULL,
  `approvalStatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quick_links`
--

INSERT INTO `quick_links` (`id`, `title`, `description`, `url`, `approvalStatus`) VALUES
(2, 'Skype.com', '<p>ds af afa dfssssaf &nbsp;dfsa</p>', 'http://skype.com', 'Approved'),
(3, 'Rashedblog.com', '<p>hg dgd</p>', 'http://rashedblog.com', 'Approved'),
(4, 'gmail.com', '<p>Gmail accounts</p>', 'http://gmail.com', 'Approved'),
(6, 'manila-dev.compliancedesktop.com', '<p>Facebook fanpage potter&#39;s house christian center</p>', 'http://facebook.com', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) UNSIGNED NOT NULL,
  `parent_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `parent_id`, `name`) VALUES
(1, 0, 'User'),
(3, 0, 'Clerk'),
(5, 0, 'Director'),
(7, 0, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `congregationName` varchar(255) NOT NULL,
  `pastorID` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `image` text NOT NULL,
  `videolinked` text NOT NULL,
  `createdBy` text NOT NULL,
  `approvalStatus` text NOT NULL,
  `dateModified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `date`, `congregationName`, `pastorID`, `title`, `body`, `image`, `videolinked`, `createdBy`, `approvalStatus`, `dateModified`) VALUES
(1, '2014-08-18', 'Amy Smith', '2', 'How Jesus Christ Changed My Life', '<p>This is my testimony on how Jesus Christ CHANGED MY LIFE, Lets start off with I never truly believed in Him. I was raised in a catholic family. And once I left Colombia at 9 years old to come to the US, I stopped going to church, because my mother doesn&#39;t really like going to church (I doubt a catholic church would have helped anyways). My father was never in my life. He was an alcoholic and the last time I saw him I was 12 yrs old. He has had many marriages, and many kids. Even though I did not completely believe in Him, I would pray to Him when I really wanted something or needed help. I did have a theory that we were planted here by aliens and they were our makers. That was my belief. So blind. My life was full of wickedness. Some that I rather not say but I am going to for I am not that person anymore. I was promiscuous since a young age. And did not value my body or life at all. At the age of 15 years old, I started to smoke marijuana. And was a constant smoker(everyday) up until this year. I am 22. At 17 years old I tried cocaine. And did it a couple of times a year until 2011-2012 I was snorting every weekend. Since 15 years old I started to drink, and was a constant drinker, an alcoholic until this year. At 17 years old, I was already in bondage to alcohol and weed. Mostly alcohol. At 19 I was married. And our relationship was short of an ideal one. I was always craving the love of a man. Maybe because I did not have a father in my life. My life revolved around me having a relationship, henceforth why I gave myself to them. When I my then husband wanted to divorce me, I thought of killing myself many times. I was 19 years old. Our marriage lasted 6 months. I thought of it but never did it. After our divorce, in the year of 2009, I was addicted to ecstasy(X). I would pop pills every chance I got. I would roll (tripping on X) on Wednesdays (my week day off from work) and pop 3 pills, and roll the entire day in my friend&rsquo;s room. Eating absolutely nothing the whole day, for it takes way the craving for food. I would pop 3 more pills on Friday nights. Then again I would roll with 3 pills Saturday nights. Sometimes I would even take 5. I did that for 4 months straight. In those 4 months I consumed 150 pills of X or more. By December, my head was starting to act funny. I would feel very light headed and would get dizzy. I took about a 2 month break. Then I was back on it. Rolling sometimes every day for I was unemployed. Rolling and drinking, and smoking weed and snorting cocaine. That was the life I thought. I was not happy unless I was high or drunk. In 2010 I got into a DUI accident. It was on April 18, my birthday is on April 19. It was my bday weekend and I went all out like any other junkie would. Since early 2010 I started to consume another pill, Bars, also called Xanax. I was popping those every day. And the problem with those pills (if you take them for recreational use) they make you forget and black out but you still continue to function but your conscious mind is not there. Therefore you become into a very grimy and even more wicked being. I was probably possessed during those blackouts. And I did awful things while blacked out. Disgusting things. Well that bday weekend I consumed a xanax and lots of alcohol. You CANNOT mix the 2. I had learned already from many past experiences if you mix the 2 you will black out. But I was a junkie, I wanted to be high and a junkie does not learn from past experiences until the 3 million mistake. Well that Sunday morning when the party ended and everyone was sleeping, I left. Keep in mind, I was blacked out. I don&#39;t remember any of this. I was told that I left and seemed ok. I got into the car accident while I was right next to the palmetto, ready to jump on the expressway. Thank GOD, for If I had gotten on that bridge all the way to my house 20 min away, I would have driven right off. My car was a complete loss, and I came out scratch free. But no I did not learn anything from that. I continued to party and consume large amounts of drugs. And I was doing bars every day. In late 2010, my boyfriend left me. For the cause of all this drug consuming I had developed anxiety and bi-polar disorder. So I would take out a lot of my anger on him and my mother. So he got fed up and broke up with me. Boy did I feel like my life was going to end. I then consumed all the RX pills my mom had from her surgery. My x-boyfriend called 911 and I was rushed to the hospital. My rights were taken away for I was a harm to myself. I was then placed in a mental unit for a couple of days. I continued to do all types of drugs and consume alcohol every chance I got. I would even buy a bottle and drink it by myself at home while watching tv. Taking shot after shot. In late 2011 I met my now husband Flavio Oliveira, he was an atheist, and would debate all those who believed in God as did I. He was also a junkie. We would party every single weekend. Smoke weed every single day. And snort cocaine every single weekend as well. I had quit X and bars at the end of 2010. After a couple of months being together we would fight all the time. Mostly because I was always drunk and I am not nice when I am drunk. We almost broke up a couple of times. In mid-2012, Flavio started to research about the whole new world order and illuminati ordeal. He started to realize this was a satanic cult and were very successful with all their strategies. He realized they must have had help from satan himself to be able to cover all their lies and to make such evil plans. He realized there was a satan so there must be a God and Jesus Christ and the Bible must be true! So he started to seek God every day. I was still a wordly person. And thought of breaking up with him for I thought he had become a fanatic. He then started to show me a lot of videos that speak of the nwo and their wicked plans. And that gave me chills. Finally the video that lead me to repentance was a video regarding the book &quot;Placebo&quot;. The book entails of a pastors journey before being bought back to life and what he saw. He saw all the demons that dwel among us and are the root of all the sinful and wicked choices we make. When I realized that I am being controlled, or being led by demons to be the way I have been all my life. I immediately wanted nothing to do with that. I dropped to my knees, crying my eyes out. And asked God for forgiveness. I apologized for all the horrible things I did, all the lies I told, and all the times I spoke bad of Him. I continued to cry and repent for 20 minutes or more. I started to read the Bible and pray every day. Flavio&#39;s life had already changed; he was no longer an addict to alcohol, and drugs. My addictions and old self left my body a week after my repentance. Shortly after that, I was baptized with the Holy Ghost, and anointed. It happened a night after Flavio. We felt wax fall on our foreheads, and our eyes couldn&rsquo;t stop shaking. And our body felt like it was filled with light and divine energy. I thought I was glowing! The most amazing experience I have ever had in my life! After that my life no longer revolved around me but around Jesus Christ our Lord &amp; Saviour. I was born again. There is not a day that goes by where I don&#39;t pray and thank Him for absolutely all things. I am no longer captive to alcohol, or any drugs or RX pills. I don&rsquo;t watch TV or listen to worldy music. I only watch things about God and listen to Christian music. I don&rsquo;t curse and I am bothered for the actions of wordly people. The Holy Spirit has cleansed me and all that I thought was ok I now realize it isn&#39;t. Praise God! Me and Flavio were recently married In October 27, 2012. It was the most beautiful wedding. Filled with the Holy Ghost and tears or joy. He has COMPLETELY changed our life. He has fixed our relationship and has given us life. For He is, the truth, the way and the light. My life has never been better. I have come a long way. And I am amazed everyday by the change that is in me. I could not have made this change myself. There is no way out of my own will I would have gotten out of my 8 year addictions from one week to the next. And also my own persona has changed. I am not full of wickedness or desire to sin. Of course we are all sinners so it&rsquo;s why we must repent every single day. Since me and my husband were saved a lot of bad spirits attacked us. By placing doubts in our minds, nightmares doing wicked things, placing old memories of wretched things we did, etc. It&rsquo;s been tough but we must always stay strong and be patient and God will help us. Psalm 27:14 Wait on the LORD: be of good courage, and he shall strengthen thine heart: wait, I say, on the LORD. If you have not accepted Jesus Christ as your Saviour and Lord. I sincerely suggest you do. HE IS REAL! He wants to save you. He rejoices when He is able to turn someone to His light! Repent, and pray every day to be filled with His Holy Ghost wholeheartedly. Let Him know you want Him and you welcome Him into your heart. Seek Him every day and He will save you and then you will be able to experience Him as many people have. He is a merciful God; He is a perfect loving God. He is our creator and He has a wonderful place waiting for us. satans greatest achievement is he has convinced all the world he doesn&#39;t exist. he does exist and he wants to damn us all to where he is going. I pray that the whole world is saved. I pray that all the spiritual veils are taken off and His will and truth are poured over all the land in Jesus Christ name. Matthew 7:7-13 (KJV) Ask, and it shall be given you; seek, and ye shall find; knock, and it shall be opened unto you: For every one that asketh receiveth; and he that seeketh findeth; and to him that knocketh it shall be opened.</p>', 'testimonials-06.png', 'https://www.youtube.com/watch?v=PYRgB26rPIs', '3', 'Approved', '2017-02-03'),
(3, '2014-08-18', 'Scott Rogers', '1', 'Freedom From Drugs', '<p>Drugs are a lie from the very pit of Hell. How do I know? I took &rsquo;em for 13 years. Here is my story. It is not a drunkalogue or a blow by blow account by any means &ndash; this is not a confession box! It is intended only to be a brief testimony. Well what do I mean when I say I took drugs? I mean Alcohol, Heroin, Cocaine, Crack, Ecstasy, Acid, Speed, Valium, Temazepam and Hash to name a few. I had my first drink when I was about 11 or so at a New Year&rsquo;s party. I had a bottle of cider and can remember falling out of a taxi into the gutter that night. That pattern was unfortunately set for more or less every time I took a drink from that point on. You may be asking where were my parents? Well, my dad was absent (I never really knew him until I was about 13) and my mum bought it for me! Yes. Strange as it may seem, it was an attempt to introduce me to alcohol under &ldquo;controlled&rdquo; conditions. Well, after that I never really got involved in booze &amp; drugs until I was around 14 when I started smoking hash at school, taking acid and speed and drinking on the weekends. Most of the time nothing too serious happened and I didn&rsquo;t really think about it. When I was 18 my Grandmother died. My Grandmother was the Matriarch; she was the one who raised us (me and my 3 sisters that is) for the most part and left a huge hole in my life when she died. I started drinking heavily and got involved in the 90&rsquo;s club scene where I was introduced to ecstasy, speed and cocaine. I was out every night and I mean seven days. I never worked and slept all afternoon in those days. I became an alcoholic and a drug addict very quickly; by 21 I was drinking first thing in the morning to take away guilt feelings and the shakes. I first sought help for my alcoholism when I was 21 &ndash; I went to AA to try to quit. I continued to go to AA until I was 25 when I was first admitted to Rehab. Prior to this Rehab admission I had been admitted to hospitals many times with injuries, seizures, overdoses and withdrawal symptoms. I stayed in Rehab for 7 weeks and got sober for a while. I started drinking again and by this time (age 26) was a &ldquo;duvet drinker,&rdquo; rarely getting out of bed. I was just sleeping, waking up and drinking, drinking every waking hour. I self harmed a lot and I hated myself. When I did go out I drank and I drugged and got jailed a lot. I was a regular at Casualty Departments across Glasgow (admitted to the hospital 42 times in 13 years) have been in psychiatric wards many times and have also been an inmate at Her Majesty&rsquo;s Prison Barlinnie. I got Rehabbed again and spent more time in psychiatric after I slashed my wrists again. In 1997 I got a phone call from a girl I used to go to school with. I hadn&rsquo;t seen or spoken to her since school and she had no idea that I was an alcoholic. She told me that she had managed to find my number through other people that knew me because Jesus had spoken to her about me! I was freaked out and frankly gave her short shrift thinking she was mad. She said that God told her to tell me that He loved me, that He knew what I was going through and that He had a plan for me. &ldquo;Rubbish,&rdquo; I thought. Anyway, I took notice of this for about 5 minutes then carried on doing what I did best (or so I thought); I got into lots more trouble, street fights, arrests &ndash; the usual. I had just come out of psychiatric for the third time in 6 months where they had hit me on the knees again with a lot of little rubber hammers . . . saying, &ldquo;We can&rsquo;t find anything wrong with you,&rdquo; when another phone call came, this time from my sister. By this point I had nowhere to live and was sleeping anywhere I could &ndash; I just wanted to die but I didn&rsquo;t want to die if you can understand that. You see, what I, the doctors and psychiatrists did not understand was that there was a spiritual problem at the root of my destructive behaviour. My sister told me that her friend (who didn&rsquo;t know me that well &ndash; she just knew about me) had called her up and told her that God had been speaking into her heart about me. This was the second time &ndash; God was on my case BIG TIME. She asked if I would come along to speak to her pastor because she knew only Jesus could save me. Am I exaggerating? No. My GP (who had already told me to get another doctor) actually broke with code and ethics and called my family to tell them I did not have long to live. My family were actually making plans for my death! This is not a joke. Anyway, I went along to speak to the pastor. I kept asking what was wrong with me. I had been asking that for years. He didn&rsquo;t respond in the usual &ldquo;Freudian&rdquo; fashion spouting the same old psychobabble, &ldquo;Possible oral fixation during the latent stage . . . What do you think is wrong with you?&rdquo; etc., etc., etc! He told me I had an orphan spirit and that hole in my belly could only be filled by God &ndash; not drink, drugs or women. He just spoke the truth and it pierced my heart like an arrow . . . You shall know the truth and the truth shall set you free. John 8:32 &ldquo;Why hadn&rsquo;t anyone told me this before?&rdquo; I thought. I could not believe that it was so simple that I had missed it for 13 long years &ndash; you see, the truth is not something but someone &ndash; Jesus. I came to the Lord that day. I was saved by the grace of God the Father and my sins were washed away by the blood of Jesus Christ His son. I will not leave you as orphans. John 14:18 Since then my mind has been renewed supernaturally and God has healed me from the inside out. I AM NOT WHO I USED TO BE. I am a new creation in Christ. I do not take or use any drugs of any sort &ndash; no prescription drugs or anti-depressants; I don&rsquo;t even smoke! God did a number on me &ndash; all the glory is His! I just asked &ndash; He did the rest. I am now married with a beautiful new wife . . . My wife Karen and I got married on a pier in Antigua in 2007 and we now each operate our own businesses . . . when you consider that people were stepping over me in the street just four years earlier I think you can understand the truth of this scripture: If the Son sets you free &ndash; you are free indeed.&rdquo; John 8:36 Amen. Glory to God. If you are reading this and you or someone you know has a similar problem . . . cry out to Jesus. God does not have favorites (Romans 2:11). What He has done for me He can do for you or for those that you love. If you are lost as I was &ndash; find the way &ndash; His name is Jesus. I am the way, the truth and the life. John 14:6 But seek first the kingdom of God, and his righteousness; and all these things shall be added unto you. Matthew 6:33 . . . if anyone is in Christ, they are a new creation; the old has gone and the new has come. 2 Corinthians 5:17 &ldquo;For I know the plans I have for you,&rdquo; declares the LORD, &ldquo;plans to prosper you and not to harm you, plans to give you hope and a future.&rdquo; Jeremiah 29:11 Do not conform any longer to the pattern of this world, but be transformed by the renewing of your mind. Romans 12:2 Praise God. Thank you Jesus. Amen.</p>', 'testimonials-04.png', 'https://www.youtube.com/watch?v=RrKbu6OwJv0', '3', 'Approved', '2017-02-03'),
(4, '2014-08-24', 'John Stephen Wade', '1', 'God’s Amazing Grace', '<p>In the fall of 1981, as an 18 year old aspiring artist with a dream, and a freshman at one of New York&rsquo;s top art schools, I reached one of the darkest periods in my life. On a cold rainy night, far away from home I acted out on feelings I had throughout my entire childhood and teen years &ndash; I had my first homosexual encounter with another student. After drinking alcohol at a school party and getting drunk for the first time ever, something I swore I never would do because of my family&rsquo;s past, my life literally changed in one night. I was plummeted into the deep dark world of homosexuality. After only a few short months in art school, I suffered from a very severe depression, and dropped out of school and returned home to my family in Connecticut. I found many of my old high schools friends had also &ldquo;come out&rdquo; as homosexuals, and became very active in the homosexual bar scene. I lived for the night &ndash; my drinking became worse, I started using cocaine to help alleviate my mental turmoil, and found much love and acceptance by other men. I had many numerous one night stands. I felt I was finally &ldquo;me&rdquo;. However, my drug addiction got worse to the point where I became a cocaine dealer just to support my habit &ndash; I lost my art business to drugs, as well as my dignity to a life based upon a perverse, sensual and decrepit lifestyle I couldn&rsquo;t break free from. It was at this point many of my friends and one night encounters were getting &ldquo;sick&rdquo; and dying, and no one knew why. This sickness was the beginning of the Aids epidemic. Things only grew worse and for a period of 6 years I declined morally, mentally and physically. It was in the winter of 1987 after a 3 day cocaine and alcohol binge I cried out for help. After being up all night and running out of cocaine, I looked in the mirror and was shocked at the reflection. Due to my cocaine abuse, as well as years of bulimia, at almost 6 feet tall, I saw a 135 lb. living skeleton, and I began to cry. I ran down to a payphone on the corner and called for help. I admitted myself into a drug rehabilitation program, and began my recovery as an impatient for 3 months at a nearby facility. It was at this point I began to see God working in my life. Within a few short months I was alcohol and drug free, as well as freed from my bulimia. I had gained about 25 lbs and was feeling great. However, I still had a deep dark secret past hidden inside of me. What was I to do with my homosexuality? Deep down inside I knew it was wrong, yet I was just suppressing it. After dating a few girls, I found myself one night back again at a local gay bar. I didn&rsquo;t drink &ndash; but that night I met a man that I fell in love with, and began a 3 year live in relationship with him. I seemed I had it all &ndash; my homosexual lifestyle and love, without the drugs, alcohol and bulimia, a great job, beautiful home, and great homosexual friends. I attended church faithfully every week &ndash; and felt I had it all. But God wasn&rsquo;t done with me yet &ndash; in fact, He had just started. My doorbell rang, and it was my friend Kathy, a friend for years who had seen me through the good and bad times of my life &ndash; and she had a Bible in her hand, and asked if she could come in. She had told me she left her religious background and became a Christian. She told me how Jesus changed her life, and how according to the Bible homosexuality was wrong &ndash; it was a sin and an abomination in God&rsquo;s eyes &ndash; how according to the Bible I was not &ldquo;born that way&rdquo;, yet in fact it was a choice of lifestyle, and that Jesus could set me free from it &ndash; today. I listened intently, and something inside of me told me she was right. I told her I would take the Bible and she left. That day, the Word of God cut right through me &ndash; I saw my homosexuality for the first time as God saw it &ndash; as sin. Anytime something would happen between my partner and I sexually, I found myself praying for forgiveness to God on my bathroom floor. God was tugging at my heart strings, and I knew it. The tugging was so hard and clear, I left my partner, my job, my family &ndash; everything and headed off to Provincetown, MA &ndash; a homosexual subculture &ndash; to live for a summer, to see if I could reconcile this pull between being a homosexual and a Christian. Did I have to choose one or the other, or could I be both at the same time in God&rsquo;s eyes? Well, in that summer of 1991 God opened my eyes to the truth and perverseness of the homosexual lifestyle &ndash; I saw it all in full swing, in all it&rsquo;s glory &ndash; transsexuals, transvestites, sado masochists, men and women doing things one would never even imagine. After 5 months in Provincetown, I returned home to my partner asking for forgiveness for leaving him &ndash; I was sorry and I was going to put this &ldquo;Christian&rdquo; business aside. After only 4 short months at home in his house, by myself while wrapping Christmas presents, I happened to flip through radio stations and came across a Christian one. A man was singing a song and I heard the lyrics about &ldquo;men marching for their right to sin&rdquo;. I knew exactly what the song was talking about &ndash; it was talking about me. I may have put God on the back burner &ndash; but He was still chasing after me. And on New Year&rsquo;s eve of 1992 I attended a homosexual party with my partner, and for the first time ever in my life &ndash; I felt &ldquo;dirty&rdquo;. I hated myself. I hated my lifestyle. But I just couldn&rsquo;t break free . . . I called my friend Kathy on the telephone, and told her I was going to move back to Provincetown, MA for good and completely give myself over to the homosexual lifestyle. I felt as if I lost my soul &ndash; I was crying out for help &ndash; and that&rsquo;s when Jesus Christ stepped in. She read to me from the Bible, from the book of Romans, how God will &ldquo;call&rdquo; you &ndash; and if He keeps calling you, and you hear, yet harden your heart, it may come to a point where He will make you a &ldquo;reprobate&rdquo; in His sight and give you completely over to your sin, and allow you to believe &ldquo;the lie&rdquo;. At that point, according to the Bible, you have basically sealed your destiny away from Him forever. It scared me so much, I asked her what I needed to do, and she told me right now to pray to Jesus &ndash; ask Him to deliver me from the homosexuality &ndash; and Him to forgive me for my sins, and to come into my heart and life, be my Lord and Saviour, and to take control. At that moment, I did and physically felt the peace of God upon me. That day in January of 1992, on the telephone, I asked Jesus to come into my heart &ndash; and He set me free from homosexuality &ndash; for good. That day God changed my life forever, and I will be eternally grateful to Him for what He did. Within 2 weeks of that time I moved out of my partner&rsquo;s home and was on my way and walk with Jesus Christ. And it is unbelievable how the journey has been. Within that first year, I was engaged to a beautiful Christian woman, Irene, who knew me as a homosexual, and was praying for me for years. We were married on June 13, 1993. Today, almost eight years later, and very happily married, God has blessed us with two other miracles &ndash; my beautiful daughter Chloe Catherine who is two and a half years old, and my son Blake Stephen, six months old, born on Chloe&rsquo;s birthday. Chloe&rsquo;s middle name is in dedication to my friend Kathy who never gave up on me &ndash; a vessel of God, who He used to change my destiny forever. Today life is wonderful &ndash; I am free, and it is all because of Jesus Christ and His love for me. Jesus is the answer for all of our needs, no matter what they are. You may be, know or live with a homosexual, a drug addict, or an alcoholic. God loves the sinner &ndash; He just hates the sin. Remember, with God, nothing is impossible &ndash; believe me, I know. I do believe in miracles &ndash; I believe in miracles, for I&rsquo;ve seen a soul set free . . . for that lost soul was me.</p>', 'testimonials-05.png', 'https://www.youtube.com/watch?v=wDgmJFw6F64', '3', 'Approved', '2017-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) UNSIGNED NOT NULL DEFAULT '1',
  `name_title` varchar(50) COLLATE utf8_bin NOT NULL,
  `first_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `full_name` varchar(300) COLLATE utf8_bin NOT NULL,
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `newpass` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `newpass_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `newpass_time` datetime DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name_title`, `first_name`, `last_name`, `full_name`, `username`, `password`, `email`, `user_id`, `banned`, `ban_reason`, `newpass`, `newpass_key`, `newpass_time`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(3, 7, 'mr', 'Ashraf', 'Alam', 'Ashraf Alam', '', '$1$U00.NF3.$HmfphpT/mUnQ064Pae8EM.', 'ashraf@yahoo.com', 1, 0, NULL, NULL, NULL, NULL, '0.0.0.0', '2017-02-06 09:07:59', '2012-03-31 17:47:46', '2017-02-06 03:07:59'),
(4, 7, 'Rashed', 'Rashedul', 'Hasan', 'Rashedul Hasan', '', '$1$7F0.C34.$xJg8IL0oLAdjj0wYBNMTa/', 'rashed.0123@gmail.com', 3, 0, NULL, NULL, NULL, NULL, '0.0.0.0', '2014-08-25 22:57:26', '2014-08-13 00:08:19', '2014-08-25 16:57:26'),
(5, 7, 'Admin Tester', 'Admin', 'Tester', 'Admin Tester', '', '$1$dQ0.ie3.$i7ai07uSzchwifoqw946a0', 'test@admin.com', 3, 0, NULL, NULL, NULL, NULL, '0.0.0.0', '0000-00-00 00:00:00', '2016-12-05 14:40:20', '2016-12-05 08:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` mediumint(8) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_autologin`
--

INSERT INTO `user_autologin` (`key_id`, `user_id`, `user_agent`, `last_ip`, `last_login`) VALUES
('f534da85759429001c5d0cd0dd85d85e', 8, 'Mozilla/5.0 (Windows NT 6.1; rv:8.0) Gecko/20100101 Firefox/8.0', '92.8.184.146', '2011-11-30 16:33:24'),
('58dc365c33b58ee4b658e831daf12ace', 9, 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.3061', '90.209.5.87', '2011-11-30 18:39:36'),
('214aa81b3165d0a5bb0b4d4d48dc9c00', 22, 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 3.0.4506.2152;', '109.204.80.121', '2011-12-13 16:08:16'),
('663fc4a3f03944a38199fc8363bbc4d2', 27, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-GB; rv:1.9.2.24) Gecko/20111103 Firefox/3.6.24', '217.41.29.32', '2011-12-12 14:50:51'),
('970c755c1418138aad6fd0118aa42124', 23, 'Mozilla/5.0 (iPad; CPU OS 5_0_1 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.1 Mobile/9A405 Safari/7534.48.3', '109.158.224.171', '2011-12-14 16:30:14'),
('b715132421fc1a3d8330e0842cdd0634', 11, 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.2; WOW64; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 3.0.4506.2152; .NET CLR 3.', '87.246.67.34', '2011-12-13 13:42:00'),
('3eb08a39dd78d82878407365129962eb', 17, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.2 (KHTML, like Gecko) Chrome/15.0.874.121 Safari/535.2', '82.71.9.229', '2011-12-13 17:05:40'),
('bd91c8535eba3d9ad1f44fc0b48c89db', 17, 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30)', '188.220.36.179', '2012-01-03 10:40:54'),
('1ef50e6f3858b22c790ae2c12953b234', 17, 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729', '188.220.36.179', '2012-01-03 11:31:24'),
('742b3c554946ffc1b7d729f96cdc4abf', 27, 'Opera/9.80 (Windows NT 5.2; U; en) Presto/2.10.229 Version/11.60', '217.41.29.32', '2011-12-16 11:08:28'),
('c2e6e105fd690d16784ad69b49bf4af4', 24, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.7 (KHTML, like Gecko) Chrome/16.0.912.63 Safari/535.7', '80.192.58.106', '2012-01-05 13:35:48'),
('e0a7443dde5b97191380bb0d21577c91', 6, 'Mozilla/5.0 (Windows NT 5.1; rv:8.0) Gecko/20100101 Firefox/8.0', '81.134.104.198', '2012-01-04 11:41:18'),
('a59148bc76202fa86e1130ff8e84edc8', 22, 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 3.0.4506.2152;', '109.204.80.121', '2012-01-05 09:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `user_temp`
--

CREATE TABLE `user_temp` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `churches`
--
ALTER TABLE `churches`
  ADD PRIMARY KEY (`church_Id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `congregation`
--
ALTER TABLE `congregation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`cuID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pastors`
--
ALTER TABLE `pastors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_permissions_FK` (`role_id`);

--
-- Indexes for table `person_level`
--
ALTER TABLE `person_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ph_brgy`
--
ALTER TABLE `ph_brgy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ph_citymun`
--
ALTER TABLE `ph_citymun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ph_province`
--
ALTER TABLE `ph_province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ph_region`
--
ALTER TABLE `ph_region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prayer_request`
--
ALTER TABLE `prayer_request`
  ADD PRIMARY KEY (`prID`);

--
-- Indexes for table `quick_links`
--
ALTER TABLE `quick_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_users_FK` (`role_id`);

--
-- Indexes for table `user_autologin`
--
ALTER TABLE `user_autologin`
  ADD PRIMARY KEY (`key_id`,`user_id`);

--
-- Indexes for table `user_temp`
--
ALTER TABLE `user_temp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `churches`
--
ALTER TABLE `churches`
  MODIFY `church_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `congregation`
--
ALTER TABLE `congregation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `cuID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pastors`
--
ALTER TABLE `pastors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `person_level`
--
ALTER TABLE `person_level`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ph_brgy`
--
ALTER TABLE `ph_brgy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42030;
--
-- AUTO_INCREMENT for table `ph_citymun`
--
ALTER TABLE `ph_citymun`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1648;
--
-- AUTO_INCREMENT for table `ph_province`
--
ALTER TABLE `ph_province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `ph_region`
--
ALTER TABLE `ph_region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `prayer_request`
--
ALTER TABLE `prayer_request`
  MODIFY `prID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `quick_links`
--
ALTER TABLE `quick_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_temp`
--
ALTER TABLE `user_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

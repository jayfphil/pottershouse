-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2014 at 08:27 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `announcement_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `authorID` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `approvalStatus` varchar(20) NOT NULL,
  `dateCreated` date NOT NULL,
  `expirationDate` date NOT NULL,
  PRIMARY KEY (`announcement_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `title`, `authorID`, `description`, `approvalStatus`, `dateCreated`, `expirationDate`) VALUES
(2, 'Proin non velit nec enim volutpat euismod. Phasellus lorem velit, porttitor non iaculis in, euismod a metus. Nullam orci odio, dignissim a egestas ac, sollicitudin in quam.', '4', '<p>Simple Gray is a professional XHTML/CSS layout provided by&nbsp;<a href="http://www.templatemo.com/" style="color: rgb(0, 0, 0);" target="_parent">templatemo.com</a>&nbsp;for free of charge. You can use this template for any purpose. Credit goes to&nbsp;<a href="http://www.photovaco.com/" style="color: rgb(0, 0, 0);" target="_blank">Free Photos</a>&nbsp;for photos.</p>\n\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a justo dolor. Duis in tincidunt lorem. Nunc et tellus nisi. Nulla non velit lectus. Morbi luctus ullamcorper felis, non gravida neque congue sit amet.</p>', 'Approved', '2014-08-25', '2014-08-27'),
(3, 'test final job', '3', '<p>fadsf</p>', 'Approved', '2014-08-29', '2014-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('c1a5739729ae9e689009071620003d82', '0.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (K', 1409293518, '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(350) NOT NULL,
  `attachedment` varchar(255) NOT NULL,
  `approvalStatus` varchar(255) NOT NULL,
  `expiration` date NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date`, `time`, `title`, `body`, `image`, `link`, `attachedment`, `approvalStatus`, `expiration`, `created`) VALUES
(1, '2014-08-16', '08:00', 'Test Events', 'tesst test stes ', 'logo.gif', 'http://rashedblog.com', 'attachement.jpg', 'Approved', '2014-08-31', '2014-08-15 03:10:10'),
(9, '2014-08-01', '10:30', 'tet', '<p>sdfaf</p>', '1388911694488.jpg.jpg', 'rashedblo.com', '1388911694488.jpg.jpg.jpg', 'Approved', '0000-00-00', '2014-08-17 00:55:52'),
(10, '2014-08-02', '09:00', 'test', '<p>test</p>', '10431159_738755356189299_3333038382056977238_o.jpg.jpg', 'sdfaf', '10431159_738755356189299_3333038382056977238_o.jpg.jpg.jpg', 'Approved', '0000-00-00', '2014-08-17 00:58:41'),
(11, '2014-08-01', '11:30', 'dsfadf', '<p>dfsasdfa</p>', '1507875_10203119638300157_1608736799_n1.jpg', 'rashedblo.com', '1507875_10203119638300157_1608736799_n1.jpg.jpg', 'Approved', '0000-00-00', '2014-08-17 01:01:00'),
(12, '2014-08-01', '11:30', 'dsfadf', '<p>dfsasdfa</p>', '1507875_10203119638300157_1608736799_n2.jpg', 'rashedblo.com', '1507875_10203119638300157_1608736799_n2.jpg.jpg', 'Approved', '0000-00-00', '2014-08-17 01:02:13'),
(13, '2014-08-01', '11:30', 'dsfadf', '<p>dfsasdfa</p>', '1507875_10203119638300157_1608736799_n4.jpg', 'rashedblo.com', '1507875_10203119638300157_1608736799_n4.jpg.jpg', 'Approved', '0000-00-00', '2014-08-17 01:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `time`) VALUES
(1, '0.0.0.0', '2011-10-23 19:00:08'),
(2, '0.0.0.0', '2011-10-23 19:14:57'),
(3, '0.0.0.0', '2011-10-23 19:20:24');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) unsigned NOT NULL,
  `data` text COLLATE utf8_bin,
  PRIMARY KEY (`id`),
  KEY `roles_permissions_FK` (`role_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT AUTO_INCREMENT=5 ;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `data`) VALUES
(1, 7, 0x613a323a7b733a343a2265646974223b733a313a2231223b733a363a2264656c657465223b733a313a2231223b7d),
(2, 1, 0x613a333a7b733a333a22757269223b613a313a7b693a303b733a313a222f223b7d733a343a2265646974223b733a313a2231223b733a363a2264656c657465223b733a303a22223b7d),
(3, 5, 0x613a333a7b733a333a22757269223b613a313a7b693a303b733a313a222f223b7d733a343a2265646974223b733a313a2231223b733a363a2264656c657465223b733a303a22223b7d),
(4, 3, 0x613a333a7b733a333a22757269223b613a313a7b693a303b733a313a222f223b7d733a343a2265646974223b733a313a2231223b733a363a2264656c657465223b733a303a22223b7d);

-- --------------------------------------------------------

--
-- Table structure for table `person_level`
--

CREATE TABLE IF NOT EXISTS `person_level` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(200) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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
-- Table structure for table `quick_links`
--

CREATE TABLE IF NOT EXISTS `quick_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(350) NOT NULL,
  `approvalStatus` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `quick_links`
--

INSERT INTO `quick_links` (`id`, `title`, `description`, `url`, `approvalStatus`) VALUES
(2, 'Skype.com', '<p>ds af afa dfssssaf &nbsp;dfsa</p>', 'http://skype.com', 'Approved'),
(3, 'Rashedblog.com', '<p>hg dgd</p>', 'http://rashedblog.com', 'Approved'),
(4, 'gmail.com', '<p>test</p>', 'http://gmail.com', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC AUTO_INCREMENT=8 ;

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

CREATE TABLE IF NOT EXISTS `testimonial` (
  `Testmony_ID` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `id` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `image` blob NOT NULL,
  `createdBy` text NOT NULL,
  `approvalStatus` text NOT NULL,
  `dateModified` date NOT NULL,
  PRIMARY KEY (`Testmony_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`Testmony_ID`, `date`, `id`, `id`, `title`, `body`, `image`, `createdBy`, `approvalStatus`, `dateModified`) VALUES
(3, '2014-08-18', '1', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '<p><span style="color:rgb(102, 102, 102); font-family:georgia,times new roman,times,serif; font-size:12px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a justo dolor. Duis in tincidunt lorem. Nunc et tellus nisi. Nulla non velit lectus. Morbi luctus ullamcorper felis, non gravida neque congue sit amet.</span></p>', 0x6865616465725f32312e504e47, '4', 'Approved', '2014-08-25'),
(4, '2014-08-24', '1', '1', 'Integer tempor, libero quis laoreet dapibus, quam', '<p><span style="color:rgb(102, 102, 102); font-family:georgia,times new roman,times,serif; font-size:12px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a justo dolor. Duis in tincidunt lorem. Nunc et tellus nisi. Nulla non velit lectus. Morbi luctus ullamcorper felis, non gravida neque congue sit amet. Nam nec mi metus, ac elementum velit. Etiam vel arcu velit, eget consequat risus.</span></p>', 0x6865616465725f32322e504e47, '4', 'Approved', '2014-08-25'),
(5, '2014-08-18', '1', '1', 'Title', '<p>test test test test</p>', 0x6865616465725f32332e504e47, '4', 'Rejected', '2014-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `tle_students`
--

CREATE TABLE IF NOT EXISTS `tle_students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `completeName` varchar(255) NOT NULL,
  `Student_EnglishName` varchar(255) NOT NULL,
  `Student_PresentAddress` varchar(255) NOT NULL,
  `Student_Country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tle_students`
--

INSERT INTO `tle_students` (`id`, `completeName`, `Student_EnglishName`, `Student_PresentAddress`, `Student_Country`) VALUES
(1, 'Rashed', 'Rashed', 'house', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `tle_teachers`
--

CREATE TABLE IF NOT EXISTS `tle_teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `teacher_photo` varchar(350) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tle_teachers`
--

INSERT INTO `tle_teachers` (`id`, `lastName`, `firstName`, `middleName`, `teacher_photo`) VALUES
(1, 'Hasan', 'Saikat', 'Rahman', 'hi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) unsigned NOT NULL DEFAULT '1',
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
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `roles_users_FK` (`role_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name_title`, `first_name`, `last_name`, `full_name`, `username`, `password`, `email`, `user_id`, `banned`, `ban_reason`, `newpass`, `newpass_key`, `newpass_time`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(3, 7, 'mr', 'Ashraf', 'Alam', 'Ashraf Alam', '', '$1$U00.NF3.$HmfphpT/mUnQ064Pae8EM.', 'ashraf@yahoo.com', 1, 0, NULL, NULL, NULL, NULL, '0.0.0.0', '2014-08-29 12:23:44', '2012-03-31 17:47:46', '2014-08-29 06:23:44'),
(4, 7, 'Rashed', 'Rashedul', 'Hasan', 'Rashedul Hasan', '', '$1$7F0.C34.$xJg8IL0oLAdjj0wYBNMTa/', 'rashed.0123@gmail.com', 3, 0, NULL, NULL, NULL, NULL, '0.0.0.0', '2014-08-25 22:57:26', '2014-08-13 00:08:19', '2014-08-25 16:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE IF NOT EXISTS `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` mediumint(8) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

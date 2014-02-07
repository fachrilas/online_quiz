-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 07, 2014 at 09:16 AM
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_quiz`
--
CREATE DATABASE IF NOT EXISTS `online_quiz` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `online_quiz`;

-- --------------------------------------------------------

--
-- Table structure for table `assign_quiz`
--

CREATE TABLE IF NOT EXISTS `assign_quiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `child_username` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `level_name` varchar(100) NOT NULL,
  `time_post` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `total` int(100) NOT NULL,
  `obtained` int(100) NOT NULL,
  `percentage` int(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `operation` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `assign_quiz`
--

INSERT INTO `assign_quiz` (`id`, `child_username`, `level`, `level_name`, `time_post`, `total`, `obtained`, `percentage`, `grade`, `operation`) VALUES
(6, 'formanitefastian@yahoo.com', '9', 'testing as new topic', '2014-01-20 11:51:34', 20, 0, 0, '', 'taken'),
(7, 'formanitefastian@yahoo.com', '9', 'testing as new topic', '2014-01-20 12:00:05', 60, 20, 33, '', 'taken'),
(8, 'formanitefastian@yahoo.com', '9', 'testing as new topic', '2014-01-20 12:11:54', 60, 0, 0, '', 'taken'),
(10, 'me and u', '10', 'testing as new topic', '2014-01-20 14:38:28', 0, 0, 0, '', 'not-taken'),
(11, 'formanitefastian@yahoo.com', '10', 'testing as new topic', '2014-01-20 14:39:28', 22, 0, 0, '', 'taken'),
(12, 'formanitefastian@yahoo.com', '11', 'testing as new topic', '2014-01-20 14:58:02', 20, 0, 0, '', 'taken'),
(13, 'Child 1', '11', 'testing as new topic', '2014-01-20 15:15:13', 0, 0, 0, '', 'not-taken'),
(14, 'Child 1', '11', 'testing as new topic', '2014-01-20 15:20:51', 0, 0, 0, '', 'not-taken'),
(15, 'Child 1', '11', 'testing as new topic', '2014-01-20 15:22:41', 0, 0, 0, '', 'not-taken'),
(16, 'formanitefastian@yahoo.com', '11', 'testing as new topic', '2014-01-20 15:48:33', 20, 0, 0, '', 'taken'),
(17, 'Child 3', '11', 'testing as new topic', '2014-01-22 16:47:53', 0, 0, 0, '', 'not-taken'),
(18, 'Child 4', '11', 'testing as new topic', '2014-01-22 16:49:45', 0, 0, 0, '', 'not-taken'),
(19, '0', '0', '0', '2014-01-28 09:25:59', 0, 0, 0, '', 'not-taken'),
(20, 'formanitefastian@yahoo.com', '11', 'Multiplication and Division', '2014-01-28 10:00:03', 0, 0, 0, '', 'not-taken'),
(21, 'iqbal', '11', 'Multiplication and Division', '2014-01-28 10:00:03', 0, 0, 0, '', 'not-taken'),
(22, 'me and u', '11', 'Multiplication and Division', '2014-01-28 10:00:03', 0, 0, 0, '', 'not-taken'),
(23, 'formanitefastian@yahoo.com', '11', 'Multiplication and Division', '2014-01-28 10:20:02', 0, 0, 0, '', 'not-taken'),
(24, 'formanitefastian@yahoo.com', '11', 'Multiplication and Division', '2014-01-28 10:21:00', 0, 0, 0, '', 'not-taken'),
(25, 'iqbal', '11', 'Multiplication and Division', '2014-01-28 10:21:00', 0, 0, 0, '', 'not-taken'),
(26, 'me and u', '11', 'Multiplication and Division', '2014-01-28 10:21:01', 0, 0, 0, '', 'not-taken'),
(27, 'formanitefastian@yahoo.com', '11', 'Multiplication and Division', '2014-01-28 10:29:09', 0, 0, 0, '', 'not-taken'),
(28, 'iqbal', '11', 'Multiplication and Division', '2014-01-28 10:29:09', 0, 0, 0, '', 'not-taken'),
(29, 'me and u', '11', 'Multiplication and Division', '2014-01-28 10:29:09', 0, 0, 0, '', 'not-taken'),
(30, 'formanitefastian@yahoo.com', '11', 'Multiplication and Division', '2014-01-28 10:45:02', 0, 0, 0, '', 'not-taken');

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE IF NOT EXISTS `children` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) COLLATE dec8_bin DEFAULT NULL,
  `password` varchar(250) COLLATE dec8_bin DEFAULT NULL,
  `name` varchar(250) COLLATE dec8_bin DEFAULT NULL,
  `dd` tinyint(4) DEFAULT NULL,
  `mm` tinyint(4) DEFAULT NULL,
  `yy` mediumint(9) DEFAULT NULL,
  `profile_pic_absolute` varchar(2000) COLLATE dec8_bin DEFAULT NULL,
  `profile_pic_relative` varchar(2000) COLLATE dec8_bin DEFAULT NULL,
  `likes` varchar(2000) COLLATE dec8_bin DEFAULT NULL,
  `dislikes` varchar(2000) COLLATE dec8_bin DEFAULT NULL,
  `member_Since` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mood` varchar(100) COLLATE dec8_bin NOT NULL,
  `last_login` varchar(100) COLLATE dec8_bin NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=dec8 COLLATE=dec8_bin AUTO_INCREMENT=14 ;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `username`, `password`, `name`, `dd`, `mm`, `yy`, `profile_pic_absolute`, `profile_pic_relative`, `likes`, `dislikes`, `member_Since`, `mood`, `last_login`, `parent_id`) VALUES
(3, 'shfaizanali', '21232f297a57a5a743894a0e4a801fc3', 'Faizan', 1, 1, 1995, 'F:/server/onlinequiz/uploads/Dota-2-Wallpaper-Free-Dekstop1.jpg', 'uploads/Dota-2-Wallpaper-Free-Dekstop1.jpg', 'asd', 'asdasdasd', '0000-00-00 00:00:00', '', '0000-00-00', 5),
(4, 'sh.faizan.ali@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'dasdasd', 1, 1, 2006, 'F:/server/onlinequiz/uploads/Dota-2-Wallpaper-Free-Dekstop5.jpg', 'uploads/Dota-2-Wallpaper-Free-Dekstop5.jpg', 'asd', 'asdasdasd', '0000-00-00 00:00:00', '', '0000-00-00', 5),
(5, 'sh.faizan.ali@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'asdad', 1, 1, 2004, 'F:/server/onlinequiz/uploads/Dota-2-Wallpaper-Free-Dekstop10.jpg', 'uploads/Dota-2-Wallpaper-Free-Dekstop10.jpg', 'asd', 'asd', '0000-00-00 00:00:00', '', '0000-00-00', 5),
(6, 'formanitefastian@yahoo.com', '202cb962ac59075b964b07152d234b70', 'hello', 3, 2, 2000, '', '', 'unk', 'unk', '0000-00-00 00:00:00', 'jkjk', '2014-01-28 11:36:00', 6),
(7, 'iqbal', 'd41d8cd98f00b204e9800998ecf8427e', 'ibbal sons', 3, 2, 1997, '', '', 'uk', 'ukn', '0000-00-00 00:00:00', '', '0000-00-00', 6),
(8, 'me and u', 'd41d8cd98f00b204e9800998ecf8427e', 'hello', 5, 5, 2000, '', '', 'hello', 'me -0', '0000-00-00 00:00:00', '', '0000-00-00', 6),
(9, 'Child 1', 'd41d8cd98f00b204e9800998ecf8427e', 'Child 1', 27, 1, 2000, '', '', 'none', 'none', '2014-01-20 15:14:49', '', '', 0),
(10, 'Child 1', 'd41d8cd98f00b204e9800998ecf8427e', 'Child 1', 1, 1, 2000, '', '', 'many', 'none', '2014-01-20 15:18:59', '', '', 7),
(11, 'Child 2', 'd41d8cd98f00b204e9800998ecf8427e', 'Child 2', 21, 1, 2000, '', '', 'none', 'none', '2014-01-20 15:19:45', '', '', 7),
(12, 'Child 3', '376b931e182ea9a40f986f5a0ee172f3', '24 Jan child', 1, 1, 1995, '', '', 'none', 'none', '2014-01-22 16:46:47', '', '2014-01-23 00:48:14', 7),
(13, 'Child 4', '376b931e182ea9a40f986f5a0ee172f3', 'child born 24 Jan 2000', 24, 1, 2000, '', '', 'none', 'none', '2014-01-22 16:49:39', '', '2014-01-23 00:50:03', 7);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('1303ab51895a07bccee5c29f945a74e7', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1391516687, ''),
('19df751c9c4290b4303a606e3e947ea1', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1390975473, ''),
('8b4d1cf76e865582260c9ffb50f2ad4a', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1390919572, ''),
('a530013579c5abf793e702af117868fc', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1391170560, ''),
('b2d469a9398fc973ce180309095516f5', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1391004163, ''),
('d10d8ffdd686a9abc720101622055582', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1391082097, '');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `comment` varchar(10000) NOT NULL,
  `comment_by` varchar(100) NOT NULL,
  `report_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `comment_by`, `report_id`) VALUES
(1, 'hello', '6', '0'),
(2, 'hello', '6', '6'),
(3, 'hello', '6', '0'),
(4, 'helllllellelel', '6', 'formanitefastian@yahoo.com'),
(5, 'helllo', '6', 'formanitefastian@yahoo.com'),
(6, 'helllllellelelff', '6', 'formanitefastian@yahoo.com'),
(7, 'helllllellelelffdd', '6', 'formanitefastian@yahoo.com'),
(8, 'helllllellelelklksllldlsldkl', '6', 'formanitefastian@yahoo.com'),
(9, 'helllllellelel', '6', 'formanitefastian@yahoo.com'),
(10, 'helllllellelelslls', '6', 'formanitefastian@yahoo.com'),
(11, 'helllllellelelkd;lksl;dkfks;kdflks;ldk;lkf;lskd;lk;', '6', 'formanitefastian@yahoo.com'),
(12, 'helllllellelel', '6', 'formanitefastian@yahoo.com'),
(13, 's;dl;d;ls;', '6', 'formanitefastian@yahoo.com'),
(14, 'hello this is last comment commited :)', '6', 'formanitefastian@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE IF NOT EXISTS `levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(256) COLLATE dec8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `level_name` (`level_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=dec8 COLLATE=dec8_bin AUTO_INCREMENT=13 ;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level_name`) VALUES
(11, 'Multiplication and Division'),
(10, 'Test 1'),
(12, 'Testing #2'),
(9, 'testing as new topic');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `user_id` int(25) NOT NULL,
  `package` varchar(100) NOT NULL,
  `starting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `expiration_date` date NOT NULL,
  `trx_id` varchar(100) NOT NULL,
  `is_active` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `user_id`, `package`, `starting_date`, `expiration_date`, `trx_id`, `is_active`) VALUES
(3, 6, 'Yearly', '2014-01-27 09:04:10', '2014-00-27', '3YM70264UL883242B', 1);

-- --------------------------------------------------------

--
-- Table structure for table `open_ended_question`
--

CREATE TABLE IF NOT EXISTS `open_ended_question` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `OpenEndedAnswer1` varchar(1000) NOT NULL,
  `question_id` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `open_ended_question`
--

INSERT INTO `open_ended_question` (`id`, `OpenEndedAnswer1`, `question_id`) VALUES
(1, '5142', 61),
(2, 'shuter stock', 62),
(3, '5142', 63),
(4, '$4 200', 65),
(5, '620', 67),
(6, 'testing testing', 70),
(7, '$47.80', 71),
(8, '$12.20', 72),
(9, '1  95', 74),
(10, 'test', 75),
(11, '7  4', 78),
(12, '74', 79),
(13, '16', 81);

-- --------------------------------------------------------

--
-- Table structure for table `paypal`
--

CREATE TABLE IF NOT EXISTS `paypal` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `data` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `paypal`
--

INSERT INTO `paypal` (`id`, `data`) VALUES
(7, 'hello'),
(8, 'Invalid HTTP request method.'),
(9, 'hello'),
(10, 'Invalid HTTP request method.');

-- --------------------------------------------------------

--
-- Table structure for table `question_record`
--

CREATE TABLE IF NOT EXISTS `question_record` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `child_id` varchar(100) NOT NULL,
  `data` varchar(10000) NOT NULL,
  `level` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `time_of_completion` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `question_record`
--

INSERT INTO `question_record` (`id`, `child_id`, `data`, `level`, `date`, `time_of_completion`) VALUES
(2, '6', '{"1":{"q_id":"60","user_id":"formanitefastian@yahoo.com","stage":"1","answer":"a","remarks":0,"score":"10","obtained":0},"2":{"q_id":"61","user_id":"formanitefastian@yahoo.com","stage":"2","answer":"5142","remarks":true,"score":"0","obtained":"0"},"3":{"q_id":"62","user_id":"formanitefastian@yahoo.com","stage":"3","answer":"test","remarks":0,"score":"0","obtained":0},"4":{"q_id":"63","user_id":"formanitefastian@yahoo.com","stage":"4","answer":"5142","remarks":true,"score":"0","obtained":"0"},"5":{"q_id":"64","user_id":"formanitefastian@yahoo.com","stage":"5","answer":"a","remarks":0,"score":"10","obtained":0},"6":{"q_id":"65","user_id":"formanitefastian@yahoo.com","stage":"6","answer":"5142","remarks":0,"score":"0","obtained":0}}', '9', '2014-01-20 11:52:41', '0h-0m-43s'),
(3, '6', '{"1":{"q_id":"60","user_id":"formanitefastian@yahoo.com","stage":"1","answer":"b","remarks":0,"score":"10","obtained":0},"2":{"q_id":"61","user_id":"formanitefastian@yahoo.com","stage":"2","answer":"5142","remarks":true,"score":"10","obtained":"10"},"3":{"q_id":"62","user_id":"formanitefastian@yahoo.com","stage":"3","answer":"","remarks":0,"score":"10","obtained":0},"4":{"q_id":"63","user_id":"formanitefastian@yahoo.com","stage":"4","answer":"5142","remarks":true,"score":"10","obtained":"10"},"5":{"q_id":"64","user_id":"formanitefastian@yahoo.com","stage":"5","answer":"a","remarks":0,"score":"10","obtained":0},"6":{"q_id":"65","user_id":"formanitefastian@yahoo.com","stage":"6","answer":"1503$","remarks":0,"score":"10","obtained":0}}', '9', '2014-01-20 12:01:30', '0h-1m-2s'),
(4, '6', '{"1":{"q_id":"60","user_id":"formanitefastian@yahoo.com","stage":"1","answer":"a","remarks":0,"score":"10","obtained":0},"2":{"q_id":"61","user_id":"formanitefastian@yahoo.com","stage":"2","answer":"test","remarks":0,"score":"10","obtained":0},"3":{"q_id":"62","user_id":"formanitefastian@yahoo.com","stage":"3","answer":"uui","remarks":0,"score":"10","obtained":0},"4":{"q_id":"63","user_id":"formanitefastian@yahoo.com","stage":"4","answer":"87y","remarks":0,"score":"10","obtained":0},"5":{"q_id":"64","user_id":"formanitefastian@yahoo.com","stage":"5","answer":"b","remarks":0,"score":"10","obtained":0},"6":{"q_id":"65","user_id":"formanitefastian@yahoo.com","stage":"6","answer":"","remarks":0,"score":"10","obtained":0}}', '9', '2014-01-20 13:53:14', '95h-14m-9s'),
(5, '6', '{"1":{"q_id":"67","user_id":"formanitefastian@yahoo.com","stage":"1","answer":"184","remarks":0,"score":"0","obtained":0},"2":{"q_id":"68","user_id":"formanitefastian@yahoo.com","stage":"2","answer":"b","remarks":0,"score":"2","obtained":0},"3":{"q_id":"69","user_id":"formanitefastian@yahoo.com","stage":"3","answer":"c","remarks":0,"score":"20","obtained":0}}', '10', '2014-01-20 14:45:29', '0h-3m-12s'),
(6, '6', '{"1":{"q_id":"71","user_id":"formanitefastian@yahoo.com","stage":"1","answer":"4  78","remarks":0,"score":"0","obtained":0},"2":{"q_id":"72","user_id":"formanitefastian@yahoo.com","stage":"2","answer":"$12.20","remarks":true,"score":"0","obtained":"0"},"3":{"q_id":"73","user_id":"formanitefastian@yahoo.com","stage":"3","answer":"b","remarks":0,"score":"20","obtained":0}}', '11', '2014-01-20 15:04:05', '0h-3m-53s'),
(7, '6', '{"1":{"q_id":"71","user_id":"formanitefastian@yahoo.com","stage":"1","answer":"$47.80","remarks":true,"score":"0","obtained":"0"},"2":{"q_id":"72","user_id":"formanitefastian@yahoo.com","stage":"2","answer":"$12.20","remarks":true,"score":"0","obtained":"0"},"3":{"q_id":"73","user_id":"formanitefastian@yahoo.com","stage":"3","answer":"b","remarks":0,"score":"20","obtained":0}}', '11', '2014-01-20 15:55:33', '0h-1m-34s');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_options`
--

CREATE TABLE IF NOT EXISTS `quiz_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `option` varchar(255) COLLATE dec8_bin DEFAULT NULL,
  `is_correct` tinyint(4) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `questionAnswer` (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=dec8 COLLATE=dec8_bin AUTO_INCREMENT=61 ;

--
-- Dumping data for table `quiz_options`
--

INSERT INTO `quiz_options` (`id`, `option`, `is_correct`, `question_id`) VALUES
(9, '6008', 1, 60),
(10, '2048', 0, 60),
(11, '5008', 0, 60),
(12, '6585', 0, 60),
(13, '1503$', 1, 64),
(14, '148$', 0, 64),
(15, '58$', 0, 64),
(16, '522$', 0, 64),
(17, '136 457 645 986', 1, 66),
(18, '136 457 645 988', 0, 66),
(19, '136 457 645 987', 0, 66),
(20, '136 457 645 978', 0, 66),
(25, '45', 0, 68),
(26, '10', 0, 68),
(27, '2', 1, 68),
(28, '4', 0, 68),
(29, '1', 0, 69),
(30, '2', 1, 69),
(31, '800', 0, 69),
(32, '64837', 0, 69),
(37, 'test', 0, 76),
(38, 'test', 1, 76),
(39, 'test', 0, 76),
(40, 'test', 0, 76),
(41, 'test', 0, 77),
(42, 'test', 0, 77),
(43, 'test', 1, 77),
(44, 'test', 0, 77),
(45, '74', 0, 80),
(46, '82', 1, 80),
(47, '62', 0, 80),
(48, '80', 0, 80),
(53, '2', 0, 82),
(54, '4', 0, 82),
(55, '6', 0, 82),
(56, '8', 1, 82),
(57, '$39.95', 1, 73),
(58, '39', 0, 73),
(59, '$49', 0, 73),
(60, '$59', 0, 73);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

CREATE TABLE IF NOT EXISTS `quiz_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_number` varchar(10) COLLATE dec8_bin DEFAULT NULL,
  `question` varchar(2000) COLLATE dec8_bin DEFAULT NULL,
  `q_hint` varchar(1000) COLLATE dec8_bin NOT NULL,
  `type` tinyint(4) NOT NULL,
  `level` int(11) DEFAULT NULL,
  `score` int(100) NOT NULL,
  `subject` int(100) NOT NULL,
  `image_relative` varchar(1000) COLLATE dec8_bin DEFAULT NULL,
  `image_absolute` varchar(1000) COLLATE dec8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `question_level` (`level`)
) ENGINE=InnoDB  DEFAULT CHARSET=dec8 COLLATE=dec8_bin AUTO_INCREMENT=83 ;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`id`, `question_number`, `question`, `q_hint`, `type`, `level`, `score`, `subject`, `image_relative`, `image_absolute`) VALUES
(60, '1', ' Select the correct answer:<br />\n5463<br />\n+645', 'think on your self', 0, 9, 10, 1, '', ''),
(61, '2', 'Fill in the boxes.', 'no', 1, 9, 10, 0, 'uploads/stock-photo-happy-family-with-banner-over-white-background-91053137.jpg', '/opt/lampp/htdocs/xampp/php2/online_quiz/uploads/stock-photo-happy-family-with-banner-over-white-background-91053137.jpg'),
(62, '3', 'test', 'n', 1, 9, 10, 0, 'uploads/stock-photo-happy-family-with-banner-over-white-background-910531371.jpg', '/opt/lampp/htdocs/xampp/php2/online_quiz/uploads/stock-photo-happy-family-with-banner-over-white-background-910531371.jpg'),
(63, '4', 'Which number is greater?', '5,4', 1, 9, 10, 0, '', ''),
(64, '5', 'Jessica saved $5 less than Heidi. If Jessica saved $749, how much did the both of them save altogether?', 'no', 0, 9, 10, 1, '', ''),
(65, '6', 'Ali had $6 000. He bought a television for $2 300 and a laptop for $1 900.  a) How much did he pay in total?', '4..', 1, 9, 10, 0, '', ''),
(66, '7-1', 'Select the answer that correctly arranged the numbers, in ascending order.<br />\n645|457|136|86', '?', 0, 9, 10, 1, '', ''),
(67, '1', 'Find.', ' ', 1, 10, 0, 0, 'uploads/Screen_Shot_2014-01-15_at_10.41.21_pm.png', '/home/ministr6/public_html/uploads/Screen_Shot_2014-01-15_at_10.41.21_pm.png'),
(68, '2', 'Find.', ' ', 0, 10, 2, 1, 'uploads/Screen_Shot_2014-01-20_at_10.09.11_pm.png', '/home/ministr6/public_html/uploads/Screen_Shot_2014-01-20_at_10.09.11_pm.png'),
(69, '2', 'testing <br />\nthe<br />\nnumber<br />\nof<br />\nlines.', 'Remember your commas and space.', 0, 10, 20, 1, 'uploads/Screen_Shot_2014-01-20_at_10.09.11_pm1.png', '/home/ministr6/public_html/uploads/Screen_Shot_2014-01-20_at_10.09.11_pm1.png'),
(70, '3', 'tkdhwdjwedwehciewhciuqecinejcnjeincienvefbvhuebvhebfhvbdjbvjadbvjhbfdvjhbdfhvbdfhjbvhjdfbvjhbdfjvbdjfhbvjhfdbvjhbdfvbdfjhbvjdfbvbdfvbjhdfbvjhdfbvhjbdfhjvbhjdfbvhbdfjhvbdfjhbvjhdfbvjhfdbjhvbdfhvbdfhjbvjhdfbvhjbdfhjvbdfjhbvjhdfbvjhfbdvhjbfdhjvbfdjdlnvkdfnvlkfdnvlk<br />\nfkvidfhviudhfivhdfiuhvifdhvihdfivhfdhvhdfivhdfiuhvihdfivhifduhviudfhviuhdfiuvhiufdhviudfhviufhdiuvhfdiuvhiudfhviudfhviuhdfiuvhdfihviudfhviufdhviufdhviuhdfiuvhfdiuhviufdhviudfhv', ' ', 1, 10, 0, 0, 'uploads/Screen_Shot_2014-01-20_at_10.04.42_pm.png', '/home/ministr6/public_html/uploads/Screen_Shot_2014-01-20_at_10.04.42_pm.png'),
(71, '1a', 'A Nerf N-Strike Elite Stockade costs $39.90 and a Nerf Glow-In-The-Dark Dart Refills costs $7.90.<br />\n<br />\nHow much must you save to buy both?', 'Remember to include your dollar sign!', 1, 11, 0, 0, 'uploads/1486919_683384461682880_166381351_n.jpg', '/opt/lampp/htdocs/xampp/php2/online_quiz/uploads/1486919_683384461682880_166381351_n.jpg'),
(72, '1b', 'How much change will you get if you give the cashier $60?', 'Don''t forget your dollar signs!', 1, 11, 0, 0, 'uploads/1486919_683384461682880_166381351_n2.jpg', '/opt/lampp/htdocs/xampp/php2/online_quiz/uploads/1486919_683384461682880_166381351_n2.jpg'),
(73, '2a', 'Samantha bought a Lego Brick-shaped bagpack and a Lego stationery set.<br />\n<br />\nThe Lego stationery set costs $9.95.<br />\n<br />\nThe Lego bagpack costs $30.00 more.<br />\n<br />\nHow much did the Lego bagpack cost?', 'Dollar signs! (test image only)', 0, 11, 20, 1, 'uploads/1486919_683384461682880_166381351_n1.jpg', '/opt/lampp/htdocs/xampp/php2/online_quiz/uploads/1486919_683384461682880_166381351_n1.jpg'),
(74, '3', 'Find the product of the 2 numbers.65 and 3', ' ', 1, 11, 0, 0, '', ''),
(75, '576', 'testing for a question mark with a full stop.', 'none', 1, 11, 0, 0, '', ''),
(76, 'testing fi', 'hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there hi there <br />\n<br />\nI need this as a next sentence below.I need this as a next sentence below.I need this as a next sentence below.I need this as a next sentence below.I need this as a next sentence below.I need this as a next sentence below.I need this as a next sentence below.I need this as a next sentence below.I need this as a next sentence below.I need this as a next sentence below.I need this as a next sentence below.', 'test', 0, 11, 30, 1, '', ''),
(77, 'testing fi', 'Hi.<br />\n<br />\nI need this as a next sentence below.', 'none', 0, 11, 60, 1, '', ''),
(78, '23', 'Write in metres and centimetres.', ' ', 1, 10, 0, 0, 'uploads/Screen_Shot_2014-01-23_at_12.22.09_am.png', '/home/ministr6/public_html/uploads/Screen_Shot_2014-01-23_at_12.22.09_am.png'),
(79, '1', 'Write in metres and centimetres. (10 marks)', ' ', 1, 12, 0, 0, 'uploads/Screen_Shot_2014-01-23_at_12.22.09_am1.png', '/home/ministr6/public_html/uploads/Screen_Shot_2014-01-23_at_12.22.09_am1.png'),
(80, '2', 'Write in metres and centimetres. (30 marks)', 'say what you like. (correct answer b)', 0, 12, 30, 1, '', ''),
(81, '3', '___ people bought Mercs.', ' 40 marks', 1, 12, 0, 0, 'uploads/Screen_Shot_2014-01-23_at_12.26.38_am.png', '/home/ministr6/public_html/uploads/Screen_Shot_2014-01-23_at_12.26.38_am.png'),
(82, '4', 'Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. Find. <br />\n<br />\n<br />\n<br />\n<br />\n<br />\nFind. Find. Find. Find. Find. Find. Find. Find. ', 'testing a long question and image. (30 marks) correct answer will be d', 0, 12, 30, 1, 'uploads/Screen_Shot_2014-01-23_at_12.26.38_am1.png', '/home/ministr6/public_html/uploads/Screen_Shot_2014-01-23_at_12.26.38_am1.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `user_id` int(25) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `txn_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `user_id`, `item_name`, `user_email`, `txn_id`) VALUES
(1, 6, 'Monthly', 'sh.faizan.ali@hotmail.com', '8DJ51380KD765143S'),
(2, 6, 'Monthly', 'sh.faizan.ali@hotmail.com', '7N17780317125013K'),
(3, 6, 'Monthly', 'sh.faizan.ali@hotmail.com', '1W965814VN197493B'),
(4, 6, 'Monthly', 'sh.faizan.ali@hotmail.com', '36H42423WN1904520'),
(5, 6, 'Monthly', 'sh.faizan.ali@hotmail.com', '67381086PJ991603D'),
(6, 6, 'Half yearly', 'sh.faizan.ali@hotmail.com', '5NK8903689431611D'),
(7, 6, 'Yearly', 'sh.faizan.ali@hotmail.com', '3YM70264UL883242B');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) COLLATE dec8_bin DEFAULT NULL,
  `password` varchar(256) COLLATE dec8_bin DEFAULT NULL,
  `email` varchar(256) COLLATE dec8_bin DEFAULT NULL,
  `name` varchar(256) COLLATE dec8_bin DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL,
  `is_activated` tinyint(4) DEFAULT '0',
  `contact` varchar(25) COLLATE dec8_bin DEFAULT NULL,
  `purpose` varchar(2000) COLLATE dec8_bin DEFAULT NULL,
  `strength` varchar(2000) COLLATE dec8_bin DEFAULT NULL,
  `weakness` varchar(2000) COLLATE dec8_bin DEFAULT NULL,
  `token` varchar(200) COLLATE dec8_bin NOT NULL,
  `last_login` varchar(100) COLLATE dec8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`user_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=dec8 COLLATE=dec8_bin AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `name`, `user_type`, `is_activated`, `contact`, `purpose`, `strength`, `weakness`, `token`, `last_login`) VALUES
(1, 'sh.faizan.ali@hotmail.com', '0192023a7bbd73250516f069df18b500', 'sh.faizan.ali@hotmail.com', 'Faizan', 1, 1, 'asd', 'asd', 'asd', 'asd', '6663dc7692cd044c900a20a8c37c4553', '2014-01-28 07:24:56'),
(2, 'a', '21232f297a57a5a743894a0e4a801fc3', 'a', 'a', 2, 1, 'a', 'a', 'a', 'a', 'ea989c2e26693a144ff3fb3b5dd2b57d', ''),
(4, 'irfan@gmail.com', '202cb962ac59075b964b07152d234b70', 'irfan@gmail.com', 'Irfan', 2, 1, '0563874676', 'hello', 'world', 'again', '3b01efd747899e040574ce2cfa82ca6f', ''),
(5, 'sh.faizan.ali@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'sh.faizan.ali@gmail.com', 'Faizan', 2, 1, '0563874676', 'ads', 'asd', 'ads', 'ea989c2e26693a144ff3fb3b5dd2b57d', ''),
(6, 'localtesting4@gmail.com', '202cb962ac59075b964b07152d234b70', 'localtesting4@gmail.com', 'adnan', 2, 1, '0', '12', '12', '12', '93a9e806bb374ec90db376ead5118052', '2014-01-28 11:39:44'),
(7, 'kaneshir@gmail.com', '376b931e182ea9a40f986f5a0ee172f3', 'kaneshir@gmail.com', 'First Parent', 2, 1, '91234567', 'none', 'many many', 'nothing', '8a5564b48be15996260896c876233202', '2014-01-23 23:08:50'),
(8, 'ad@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'ad@gmail.com', 'adnan sarwar', 2, 1, '12', '1', '1', '1', '', '2014-01-26 18:05:00'),
(9, 'formanitefastians@yahoo.com', '202cb962ac59075b964b07152d234b70', 'formanitefastians@yahoo.com', 'adnan sarwar', 2, 1, '123', '123', '0', '0', '', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quiz_options`
--
ALTER TABLE `quiz_options`
  ADD CONSTRAINT `questionAnswer` FOREIGN KEY (`question_id`) REFERENCES `quiz_questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  ADD CONSTRAINT `question_level` FOREIGN KEY (`level`) REFERENCES `levels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 13, 2014 at 03:49 PM
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
  `time_post` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `assign_quiz`
--

INSERT INTO `assign_quiz` (`id`, `child_username`, `level`, `time_post`) VALUES
(1, 'iqbal', '1', '2014-01-09 09:54:50'),
(4, 'formanitefastian@yahoo.com', '1', '2014-01-13 06:54:20');

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
) ENGINE=InnoDB  DEFAULT CHARSET=dec8 COLLATE=dec8_bin AUTO_INCREMENT=9 ;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `username`, `password`, `name`, `dd`, `mm`, `yy`, `profile_pic_absolute`, `profile_pic_relative`, `likes`, `dislikes`, `member_Since`, `mood`, `last_login`, `parent_id`) VALUES
(3, 'shfaizanali', '21232f297a57a5a743894a0e4a801fc3', 'Faizan', 1, 1, 1995, 'F:/server/onlinequiz/uploads/Dota-2-Wallpaper-Free-Dekstop1.jpg', 'uploads/Dota-2-Wallpaper-Free-Dekstop1.jpg', 'asd', 'asdasdasd', '0000-00-00 00:00:00', '', '0000-00-00', 5),
(4, 'sh.faizan.ali@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'dasdasd', 1, 1, 2006, 'F:/server/onlinequiz/uploads/Dota-2-Wallpaper-Free-Dekstop5.jpg', 'uploads/Dota-2-Wallpaper-Free-Dekstop5.jpg', 'asd', 'asdasdasd', '0000-00-00 00:00:00', '', '0000-00-00', 5),
(5, 'sh.faizan.ali@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'asdad', 1, 1, 2004, 'F:/server/onlinequiz/uploads/Dota-2-Wallpaper-Free-Dekstop10.jpg', 'uploads/Dota-2-Wallpaper-Free-Dekstop10.jpg', 'asd', 'asd', '0000-00-00 00:00:00', '', '0000-00-00', 5),
(6, 'formanitefastian@yahoo.com', '202cb962ac59075b964b07152d234b70', '4', 3, 2, 2000, '', '', 'unk', 'unk', '0000-00-00 00:00:00', '4kjkjskjks', '2014-01-13 15:24:39', 6),
(7, 'iqbal', 'd41d8cd98f00b204e9800998ecf8427e', 'ibbal sons', 3, 2, 1997, '', '', 'uk', 'ukn', '0000-00-00 00:00:00', '', '0000-00-00', 6),
(8, 'me and u', 'd41d8cd98f00b204e9800998ecf8427e', 'hello', 5, 5, 2000, '', '', 'hello', 'me -0', '0000-00-00 00:00:00', '', '0000-00-00', 6);

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
('dd4140eeba5b32ccf40f3344bd0e05f5', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1389623412, 'a:6:{s:9:"user_data";s:0:"";s:8:"username";s:26:"formanitefastian@yahoo.com";s:12:"is_logged_in";b:1;s:9:"user_type";s:1:"3";s:7:"user_id";s:1:"6";s:4:"name";a:2:{i:1;a:5:{s:4:"q_id";s:2:"35";s:7:"user_id";s:26:"formanitefastian@yahoo.com";s:5:"stage";s:1:"1";s:6:"answer";s:1:"a";s:7:"remarks";i:0;}i:2;a:5:{s:4:"q_id";s:2:"36";s:7:"user_id";s:26:"formanitefastian@yahoo.com";s:5:"stage";s:1:"2";s:6:"answer";s:1:"b";s:7:"remarks";i:0;}}}');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE IF NOT EXISTS `levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(256) COLLATE dec8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=dec8 COLLATE=dec8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level_name`) VALUES
(1, 'Level 1'),
(2, 'Level 2'),
(3, 'Level 3'),
(4, 'Level 4'),
(5, 'Level 5'),
(6, 'Level 6');

-- --------------------------------------------------------

--
-- Table structure for table `open_ended_question`
--

CREATE TABLE IF NOT EXISTS `open_ended_question` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `OpenEndedAnswer1` varchar(1000) NOT NULL,
  `question_id` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `open_ended_question`
--

INSERT INTO `open_ended_question` (`id`, `OpenEndedAnswer1`, `question_id`) VALUES
(1, 'hellojaneman', 47),
(3, 'hello', 49),
(4, 'jjjhello45lkl', 50),
(5, 'klkl', 52),
(6, 'mey hn', 53),
(7, 'hello454787878', 55),
(8, 'hello', 57);

-- --------------------------------------------------------

--
-- Table structure for table `question_record`
--

CREATE TABLE IF NOT EXISTS `question_record` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `child_id` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `question_record`
--

INSERT INTO `question_record` (`id`, `child_id`, `data`, `level`, `date`) VALUES
(1, 'formanitefastian@yahoo.com', '{"3":{"q_id":"40","user_id":"formanitefastian@yahoo.com","stage":"3","answer":false,"remarks":0},"4"', '', '2014-01-13 14:15:28'),
(2, 'formanitefastian@yahoo.com', '{"3":{"q_id":"40","user_id":"formanitefastian@yahoo.com","stage":"3","answer":false,"remarks":0},"4"', '', '2014-01-13 14:15:35'),
(3, 'formanitefastian@yahoo.com', 'null', '', '2014-01-13 14:19:38'),
(4, 'formanitefastian@yahoo.com', '{"1":{"q_id":"35","user_id":"formanitefastian@yahoo.com","stage":"1","answer":false,"remarks":0},"2"', '', '2014-01-13 14:22:49'),
(5, 'formanitefastian@yahoo.com', '{"1":{"q_id":"35","user_id":"formanitefastian@yahoo.com","stage":"1","answer":false,"remarks":0},"2"', '', '2014-01-13 14:23:34'),
(6, 'formanitefastian@yahoo.com', '{"1":{"q_id":"35","user_id":"formanitefastian@yahoo.com","stage":"1","answer":false,"remarks":0},"2"', '', '2014-01-13 14:24:20'),
(7, 'formanitefastian@yahoo.com', '{"1":{"q_id":"35","user_id":"formanitefastian@yahoo.com","stage":"1","answer":"a","remarks":0}}', '', '2014-01-13 14:24:48'),
(8, 'formanitefastian@yahoo.com', '{"1":{"q_id":"35","user_id":"formanitefastian@yahoo.com","stage":"1","answer":"a","remarks":0},"2":{', '1', '2014-01-13 14:28:25'),
(9, 'formanitefastian@yahoo.com', '{"1":{"q_id":"35","user_id":"formanitefastian@yahoo.com","stage":"1","answer":"a","remarks":0},"2":{', '1', '2014-01-13 14:28:25'),
(10, 'formanitefastian@yahoo.com', '{"1":{"q_id":"35","user_id":"formanitefastian@yahoo.com","stage":"1","answer":"a","remarks":0},"2":{', '1', '2014-01-13 14:28:54'),
(11, 'formanitefastian@yahoo.com', '{"1":{"q_id":"35","user_id":"formanitefastian@yahoo.com","stage":"1","answer":"a","remarks":0},"2":{', '1', '2014-01-13 14:33:46'),
(12, 'formanitefastian@yahoo.com', '{"1":{"q_id":"35","user_id":"formanitefastian@yahoo.com","stage":"1","answer":"a","remarks":0},"2":{', '1', '2014-01-13 14:34:49');

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
) ENGINE=InnoDB  DEFAULT CHARSET=dec8 COLLATE=dec8_bin AUTO_INCREMENT=293 ;

--
-- Dumping data for table `quiz_options`
--

INSERT INTO `quiz_options` (`id`, `option`, `is_correct`, `question_id`) VALUES
(181, 'a', 1, 40),
(182, 'a', 0, 40),
(183, 'a', 0, 40),
(184, 'A', 0, 40),
(205, 'a', 1, 36),
(206, 'a', 0, 36),
(207, 'a', 0, 36),
(208, 'a', 0, 36),
(245, 'a', 0, 43),
(246, 'b', 0, 43),
(247, 'c', 1, 43),
(248, 'cd', 0, 43),
(249, 'h', 1, 42),
(250, 'j', 0, 42),
(251, 'k', 0, 42),
(252, 'k', 0, 42),
(265, 'k', 0, 51),
(266, 'k', 0, 51),
(267, 'kk', 1, 51),
(268, 'k5', 0, 51),
(269, 'q', 0, 35),
(270, 'w', 0, 35),
(271, 'c', 1, 35),
(272, 't', 0, 35),
(277, 't', 0, 54),
(278, 'm45', 0, 54),
(279, 'k', 0, 54),
(280, 's', 1, 54),
(285, 'lkl', 0, 56),
(286, 'klklk', 0, 56),
(287, 'lklk', 0, 56),
(288, 'lkl787', 1, 56),
(289, 'hello', 0, 58),
(290, 'll', 0, 58),
(291, 'lll', 1, 58),
(292, 'llkk', 0, 58);

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
  `image_relative` varchar(1000) COLLATE dec8_bin DEFAULT NULL,
  `image_absolute` varchar(1000) COLLATE dec8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `question_level` (`level`)
) ENGINE=InnoDB  DEFAULT CHARSET=dec8 COLLATE=dec8_bin AUTO_INCREMENT=59 ;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`id`, `question_number`, `question`, `q_hint`, `type`, `level`, `image_relative`, `image_absolute`) VALUES
(35, '23d', 'Hey there I am testing a very long long long question here which should span multiple lines Hey there I am testing a very long long long question here which should span multiple lines Hey there I am testing a very long long long question here which should span multiple lines Hey there I am testing a very long long long question here which should span multiple lines Hey there I am testing a very long long long question here which should span multiple lines<br />\n<br />\n<br />\n<br />\nHey there I am testing a very long long long question here which should span multiple lines <br />\n<br />\nHey there I am testing a very long long long question here which should span multiple lines <br />\n<br />\nHey there I am testing a very long long long question here which should span multiple lines', '454554', 0, 1, 'uploads/Screen_shot_2013-12-28_at_PM_06.02.35.png', 'F:/server/onlinequiz/uploads/Screen_shot_2013-12-28_at_PM_06.02.35.png'),
(36, '1cd', 'Hi<br />\r\nits me<br />\r\nplease view me', '', 0, 1, '', ''),
(40, '1a', 'this <br />\r\nis <br />\r\nquestion<br />\r\n1<br />\r\na', '', 0, 1, 'uploads/Dota-2-Wallpaper-Free-Dekstop.jpg', 'F:/server/onlinequiz/uploads/Dota-2-Wallpaper-Free-Dekstop.jpg'),
(42, '1', 'hello testing', 'one u can say<br />\nasdf', 0, 1, '', ''),
(43, '1.3', 'hello world<br />\n<br />\nasa', 'hellod;ld;l;d;<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\n<br />\nl', 0, 1, '', ''),
(47, '1.3', '4545', '454545', 1, 1, '', ''),
(49, '1.3', 'hello', 'hello', 1, 1, NULL, NULL),
(50, '1.34545', '455544', '454544', 1, 1, NULL, NULL),
(51, '24th', 'hello', 'hello', 0, 1, '', ''),
(52, 'hello', 'jkj', 'jan', 1, 1, '', ''),
(53, '1.3', 'hello', 'last yar', 1, 1, '', ''),
(54, 'helo', 'jania', 'hello', 0, 1, '', ''),
(55, 'hello', 'hello', 'l;l;', 1, 1, '', ''),
(56, 'kl', 'klk', 'lkl', 0, 1, '', ''),
(57, 'hello', 'thi is', 'hint;;l;', 1, 1, '', ''),
(58, 'option', 'op', 'op', 0, 1, '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=dec8 COLLATE=dec8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `name`, `user_type`, `is_activated`, `contact`, `purpose`, `strength`, `weakness`, `token`, `last_login`) VALUES
(1, 'sh.faizan.ali@hotmail.com', '0192023a7bbd73250516f069df18b500', 'sh.faizan.ali@hotmail.com', 'Faizan', 1, 1, 'asd', 'asd', 'asd', 'asd', '6663dc7692cd044c900a20a8c37c4553', '2014-01-10 08:48:23'),
(2, 'a', '21232f297a57a5a743894a0e4a801fc3', 'a', 'a', 2, 1, 'a', 'a', 'a', 'a', 'ea989c2e26693a144ff3fb3b5dd2b57d', ''),
(4, 'irfan@gmail.com', '202cb962ac59075b964b07152d234b70', 'irfan@gmail.com', 'Irfan', 2, 1, '0563874676', 'hello', 'world', 'again', '3b01efd747899e040574ce2cfa82ca6f', ''),
(5, 'sh.faizan.ali@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'sh.faizan.ali@gmail.com', 'Faizan', 2, 1, '0563874676', 'ads', 'asd', 'ads', 'ea989c2e26693a144ff3fb3b5dd2b57d', ''),
(6, 'localtesting4@gmail.com', '202cb962ac59075b964b07152d234b70', 'localtesting4@gmail.com', 'adnan', 2, 1, '0', '12', '12', '12', '93a9e806bb374ec90db376ead5118052', '2014-01-13 07:53:59');

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

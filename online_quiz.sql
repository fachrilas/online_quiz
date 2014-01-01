/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : online_quiz

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2014-01-01 15:51:24
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `children`
-- ----------------------------
DROP TABLE IF EXISTS `children`;
CREATE TABLE `children` (
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
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=dec8 COLLATE=dec8_bin;

-- ----------------------------
-- Records of children
-- ----------------------------
INSERT INTO `children` VALUES ('3', 'shfaizanali', '21232f297a57a5a743894a0e4a801fc3', 'Faizan', '1', '1', '1995', 'F:/server/onlinequiz/uploads/Dota-2-Wallpaper-Free-Dekstop1.jpg', 'uploads/Dota-2-Wallpaper-Free-Dekstop1.jpg', 'asd', 'asdasdasd', '5');
INSERT INTO `children` VALUES ('4', 'sh.faizan.ali@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'dasdasd', '1', '1', '2006', 'F:/server/onlinequiz/uploads/Dota-2-Wallpaper-Free-Dekstop5.jpg', 'uploads/Dota-2-Wallpaper-Free-Dekstop5.jpg', 'asd', 'asdasdasd', '5');
INSERT INTO `children` VALUES ('5', 'sh.faizan.ali@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'asdad', '1', '1', '2004', 'F:/server/onlinequiz/uploads/Dota-2-Wallpaper-Free-Dekstop10.jpg', 'uploads/Dota-2-Wallpaper-Free-Dekstop10.jpg', 'asd', 'asd', '5');

-- ----------------------------
-- Table structure for `levels`
-- ----------------------------
DROP TABLE IF EXISTS `levels`;
CREATE TABLE `levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(256) COLLATE dec8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=dec8 COLLATE=dec8_bin;

-- ----------------------------
-- Records of levels
-- ----------------------------
INSERT INTO `levels` VALUES ('1', 'Level 1');
INSERT INTO `levels` VALUES ('2', 'Level 2');
INSERT INTO `levels` VALUES ('3', 'Level 3');
INSERT INTO `levels` VALUES ('4', 'Level 4');
INSERT INTO `levels` VALUES ('5', 'Level 5');
INSERT INTO `levels` VALUES ('6', 'Level 6');

-- ----------------------------
-- Table structure for `quiz_options`
-- ----------------------------
DROP TABLE IF EXISTS `quiz_options`;
CREATE TABLE `quiz_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `option` varchar(255) COLLATE dec8_bin DEFAULT NULL,
  `is_correct` tinyint(4) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `questionAnswer` (`question_id`),
  CONSTRAINT `questionAnswer` FOREIGN KEY (`question_id`) REFERENCES `quiz_questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=213 DEFAULT CHARSET=dec8 COLLATE=dec8_bin;

-- ----------------------------
-- Records of quiz_options
-- ----------------------------
INSERT INTO `quiz_options` VALUES ('181', 'a', '1', '40');
INSERT INTO `quiz_options` VALUES ('182', 'a', '0', '40');
INSERT INTO `quiz_options` VALUES ('183', 'a', '0', '40');
INSERT INTO `quiz_options` VALUES ('184', 'A', '0', '40');
INSERT INTO `quiz_options` VALUES ('205', 'a', '1', '36');
INSERT INTO `quiz_options` VALUES ('206', 'a', '0', '36');
INSERT INTO `quiz_options` VALUES ('207', 'a', '0', '36');
INSERT INTO `quiz_options` VALUES ('208', 'a', '0', '36');
INSERT INTO `quiz_options` VALUES ('209', 'q', '1', '35');
INSERT INTO `quiz_options` VALUES ('210', 'w', '0', '35');
INSERT INTO `quiz_options` VALUES ('211', 'e', '0', '35');
INSERT INTO `quiz_options` VALUES ('212', 't', '0', '35');

-- ----------------------------
-- Table structure for `quiz_questions`
-- ----------------------------
DROP TABLE IF EXISTS `quiz_questions`;
CREATE TABLE `quiz_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_number` varchar(10) COLLATE dec8_bin DEFAULT NULL,
  `question` varchar(2000) COLLATE dec8_bin DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `image_relative` varchar(1000) COLLATE dec8_bin DEFAULT NULL,
  `image_absolute` varchar(1000) COLLATE dec8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `question_level` (`level`),
  CONSTRAINT `question_level` FOREIGN KEY (`level`) REFERENCES `levels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=dec8 COLLATE=dec8_bin;

-- ----------------------------
-- Records of quiz_questions
-- ----------------------------
INSERT INTO `quiz_questions` VALUES ('35', '23d', 'Hey there I am testing a very long long long question here which should span multiple lines Hey there I am testing a very long long long question here which should span multiple lines Hey there I am testing a very long long long question here which should span multiple lines Hey there I am testing a very long long long question here which should span multiple lines Hey there I am testing a very long long long question here which should span multiple lines<br />\r\n<br />\r\nHey there I am testing a very long long long question here which should span multiple lines <br />\r\nHey there I am testing a very long long long question here which should span multiple lines <br />\r\nHey there I am testing a very long long long question here which should span multiple lines', '1', 'uploads/Screen_shot_2013-12-28_at_PM_06.02.35.png', 'F:/server/onlinequiz/uploads/Screen_shot_2013-12-28_at_PM_06.02.35.png');
INSERT INTO `quiz_questions` VALUES ('36', '1cd', 'Hi<br />\r\nits me<br />\r\nplease view me', '1', '', '');
INSERT INTO `quiz_questions` VALUES ('38', '1a', 'this <br />\r\nis <br />\r\nquestion<br />\r\n1<br />\r\na', '1', 'uploads/Dota-2-Wallpaper-Free-Dekstop3.jpg', 'F:/server/onlinequiz/uploads/Dota-2-Wallpaper-Free-Dekstop3.jpg');
INSERT INTO `quiz_questions` VALUES ('40', '1a', 'this <br />\r\nis <br />\r\nquestion<br />\r\n1<br />\r\na', '1', 'uploads/Dota-2-Wallpaper-Free-Dekstop.jpg', 'F:/server/onlinequiz/uploads/Dota-2-Wallpaper-Free-Dekstop.jpg');
INSERT INTO `quiz_questions` VALUES ('41', '1b', '1c', '1', '', '');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
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
  PRIMARY KEY (`id`),
  KEY `type` (`user_type`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=dec8 COLLATE=dec8_bin;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'sh.faizan.ali@hotmail.com', '21232f297a57a5a743894a0e4a801fc3', 'sh.faizan.ali@hotmail.com', 'Faizan', '1', '1', 'asd', 'asd', 'asd', 'asd');
INSERT INTO `user` VALUES ('2', 'a', '21232f297a57a5a743894a0e4a801fc3', 'a', 'a', '2', '1', 'a', 'a', 'a', 'a');
INSERT INTO `user` VALUES ('4', 'irfan@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'irfan@gmail.com', 'Irfan', '2', '1', '0563874676', 'hello', 'world', 'again');
INSERT INTO `user` VALUES ('5', 'sh.faizan.ali@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'sh.faizan.ali@gmail.com', 'Faizan', '2', '1', '0563874676', 'ads', 'asd', 'ads');

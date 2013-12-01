/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : online_quiz

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2013-12-02 01:30:35
*/

SET FOREIGN_KEY_CHECKS=0;
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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=dec8 COLLATE=dec8_bin;

-- ----------------------------
-- Records of quiz_options
-- ----------------------------
INSERT INTO `quiz_options` VALUES ('1', 'f', '1', '2');
INSERT INTO `quiz_options` VALUES ('2', 'u', '0', '2');
INSERT INTO `quiz_options` VALUES ('3', 'c', '0', '2');
INSERT INTO `quiz_options` VALUES ('4', 'k', '0', '2');
INSERT INTO `quiz_options` VALUES ('5', 'f', '1', '3');
INSERT INTO `quiz_options` VALUES ('6', 'u', '0', '3');
INSERT INTO `quiz_options` VALUES ('7', 'c', '0', '3');
INSERT INTO `quiz_options` VALUES ('8', 'k', '0', '3');
INSERT INTO `quiz_options` VALUES ('9', 'q', '1', '12');
INSERT INTO `quiz_options` VALUES ('10', 's', '0', '12');
INSERT INTO `quiz_options` VALUES ('11', 'r', '0', '12');
INSERT INTO `quiz_options` VALUES ('12', 't', '0', '12');
INSERT INTO `quiz_options` VALUES ('13', 'a', '1', '13');
INSERT INTO `quiz_options` VALUES ('14', 'b', '0', '13');
INSERT INTO `quiz_options` VALUES ('15', 'c', '0', '13');
INSERT INTO `quiz_options` VALUES ('16', 'd', '0', '13');
INSERT INTO `quiz_options` VALUES ('17', 'a', '1', '14');
INSERT INTO `quiz_options` VALUES ('18', 's', '0', '14');
INSERT INTO `quiz_options` VALUES ('19', 'q', '0', '14');
INSERT INTO `quiz_options` VALUES ('20', 'd', '0', '14');
INSERT INTO `quiz_options` VALUES ('21', 'a', '1', '15');
INSERT INTO `quiz_options` VALUES ('22', 'w', '0', '15');
INSERT INTO `quiz_options` VALUES ('23', 'e', '0', '15');
INSERT INTO `quiz_options` VALUES ('24', 'r', '0', '15');
INSERT INTO `quiz_options` VALUES ('25', 'a', '1', '16');
INSERT INTO `quiz_options` VALUES ('26', 'w', '0', '16');
INSERT INTO `quiz_options` VALUES ('27', 'e', '0', '16');
INSERT INTO `quiz_options` VALUES ('28', 'r', '0', '16');

-- ----------------------------
-- Table structure for `quiz_questions`
-- ----------------------------
DROP TABLE IF EXISTS `quiz_questions`;
CREATE TABLE `quiz_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(2000) COLLATE dec8_bin DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `question_level` (`level`),
  CONSTRAINT `question_level` FOREIGN KEY (`level`) REFERENCES `levels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=dec8 COLLATE=dec8_bin;

-- ----------------------------
-- Records of quiz_questions
-- ----------------------------
INSERT INTO `quiz_questions` VALUES ('2', 'how are you', '4');
INSERT INTO `quiz_questions` VALUES ('3', 'how are you', '1');
INSERT INTO `quiz_questions` VALUES ('12', 'hello', '1');
INSERT INTO `quiz_questions` VALUES ('13', 'hi tweet', '1');
INSERT INTO `quiz_questions` VALUES ('14', 'aasafaf', '1');
INSERT INTO `quiz_questions` VALUES ('15', 'hello world', '1');
INSERT INTO `quiz_questions` VALUES ('16', 'hello world', '1');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) COLLATE dec8_bin DEFAULT NULL,
  `password` varchar(256) COLLATE dec8_bin DEFAULT NULL,
  `email` varchar(256) COLLATE dec8_bin DEFAULT NULL,
  `first_name` varchar(256) COLLATE dec8_bin DEFAULT NULL,
  `last_name` varchar(256) COLLATE dec8_bin DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL,
  `is_activated` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `type` (`user_type`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=dec8 COLLATE=dec8_bin;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'sh.faizan.ali@hotmail.com', 'Faizan', 'Ali', '1', '1');

/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50728
Source Host           : localhost:3306
Source Database       : test2

Target Server Type    : MYSQL
Target Server Version : 50728
File Encoding         : 65001

Date: 2020-02-26 21:38:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for contact_friends
-- ----------------------------
DROP TABLE IF EXISTS `contact_friends`;
CREATE TABLE `contact_friends` (
  `contact_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  PRIMARY KEY (`contact_id`,`friend_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contact_friends
-- ----------------------------
INSERT INTO `contact_friends` VALUES ('1', '2');
INSERT INTO `contact_friends` VALUES ('1', '3');
INSERT INTO `contact_friends` VALUES ('2', '1');
INSERT INTO `contact_friends` VALUES ('2', '3');
INSERT INTO `contact_friends` VALUES ('2', '4');
INSERT INTO `contact_friends` VALUES ('2', '5');
INSERT INTO `contact_friends` VALUES ('2', '6');
INSERT INTO `contact_friends` VALUES ('2', '7');
INSERT INTO `contact_friends` VALUES ('3', '2');
INSERT INTO `contact_friends` VALUES ('4', '1');
INSERT INTO `contact_friends` VALUES ('7', '1');
INSERT INTO `contact_friends` VALUES ('7', '2');
INSERT INTO `contact_friends` VALUES ('7', '4');
INSERT INTO `contact_friends` VALUES ('7', '5');
INSERT INTO `contact_friends` VALUES ('7', '6');

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contacts
-- ----------------------------
INSERT INTO `contacts` VALUES ('1', 'ASDASD');
INSERT INTO `contacts` VALUES ('2', 'zxcvzxcv');
INSERT INTO `contacts` VALUES ('3', 'LKGUKJ');
INSERT INTO `contacts` VALUES ('4', ':LKJA:CHO');
INSERT INTO `contacts` VALUES ('5', 'asdfgasrgsrg');
INSERT INTO `contacts` VALUES ('6', 'asdgvaR#QFS');
INSERT INTO `contacts` VALUES ('7', 'DFA3rqwf@4rA');
INSERT INTO `contacts` VALUES ('8', '8fas4tvserSD Fg');

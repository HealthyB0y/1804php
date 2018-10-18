/*
Navicat MySQL Data Transfer

Source Server         : 1804E_18_07
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : 1804

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-08-01 22:44:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'The Thao');
INSERT INTO `categories` VALUES ('2', 'Tin Nong');
INSERT INTO `categories` VALUES ('3', 'Ca Nhac');
INSERT INTO `categories` VALUES ('4', 'Showbiz');
INSERT INTO `categories` VALUES ('5', 'Tin nuoc ngoai');

-- ----------------------------
-- Table structure for post
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `desciption` varchar(255) DEFAULT NULL,
  `author` int(11) DEFAULT NULL,
  `starts` int(11) DEFAULT NULL,
  `categories_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES ('1', 'tin tuc 1', 'Tin Tuc', null, '1', '1', '2');
INSERT INTO `post` VALUES ('2', 'tin tuc 2', 'Tin Tuc', null, '2', '2', '2');
INSERT INTO `post` VALUES ('3', 'The thao 1', 'The thao', null, '3', '3', '1');
INSERT INTO `post` VALUES ('4', 'The thao 2', '', 'abc', '4', '4', '1');
INSERT INTO `post` VALUES ('5', 'The thao 3', 'The thao', 'def', '1', '1', '1');
INSERT INTO `post` VALUES ('6', 'Thoi Su 1', 'Thoi su', null, '2', '1', '4');
INSERT INTO `post` VALUES ('7', 'Thoi su 2', 'Thoi su', null, '3', '1', '5');
INSERT INTO `post` VALUES ('8', 'Thoi su 3 ', 'Thoi su', 'Thoi su 3', '4', '2', '5');

-- ----------------------------
-- Table structure for rater
-- ----------------------------
DROP TABLE IF EXISTS `rater`;
CREATE TABLE `rater` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of rater
-- ----------------------------
INSERT INTO `rater` VALUES ('0', '3', '3', '2');
INSERT INTO `rater` VALUES ('1', '1', '1', '4');
INSERT INTO `rater` VALUES ('2', '1', '3', '2');
INSERT INTO `rater` VALUES ('3', '3', '4', '5');
INSERT INTO `rater` VALUES ('4', '5', '2', '1');

-- ----------------------------
-- Table structure for user-info-id
-- ----------------------------
DROP TABLE IF EXISTS `user-info-id`;
CREATE TABLE `user-info-id` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(255) DEFAULT NULL,
  `address` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user-info-id
-- ----------------------------
INSERT INTO `user-info-id` VALUES ('0', 'abc@gmail.com', '123456789', 'Ha Noi');
INSERT INTO `user-info-id` VALUES ('1', '1234@gmail.com', '461155151', 'Bac Giang');
INSERT INTO `user-info-id` VALUES ('2', 'nasn@gmail.com', '151515115', 'Nghe An');
INSERT INTO `user-info-id` VALUES ('3', 'nasas@gmail.com', '15151515', 'Bac Ninh');
INSERT INTO `user-info-id` VALUES ('4', 'ansabsh@gmail.com', '1515151166', 'Ha Noi');
INSERT INTO `user-info-id` VALUES ('5', 'abhhs@gmail.com', '44949499', 'Hai Phong');
INSERT INTO `user-info-id` VALUES ('6', 'sasdaj@gmail.com', '151515115', 'Ha Tinh');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `rule` int(11) DEFAULT '0',
  `add` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'tuan', 'tuan@gmail.com', '016262655626', '123456', '1', 'Hn');
INSERT INTO `users` VALUES ('2', 'Tuan Anh', 'tuananh@gmail.com', '135511161', '123456', '0', 'HN');
INSERT INTO `users` VALUES ('3', 'Ngoc', 'ngoc@gmail.com', '01581116161616', '123456', '0', 'HN');
INSERT INTO `users` VALUES ('4', 'Quoc Hoang', 'quochoang@gmail.com', '01632523233', '123456', '0', 'HN');
INSERT INTO `users` VALUES ('5', 'Thien', 'thien@gmail.com', '0163526512', '123456', '0', 'HN');
INSERT INTO `users` VALUES ('6', 'Hiep', 'hiep@gmail.com', '016356133', '123', '0', 'HP');
INSERT INTO `users` VALUES ('7', 'Hoang', 'hoang@gmail.com', '01635618548', '123489', '0', 'Bg');

-- ----------------------------
-- Table structure for usersss
-- ----------------------------
DROP TABLE IF EXISTS `usersss`;
CREATE TABLE `usersss` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rule` int(11) DEFAULT NULL,
  `user-info-id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usersss
-- ----------------------------
INSERT INTO `usersss` VALUES ('0', 'bui van B ', '16616161', '1', '0');
INSERT INTO `usersss` VALUES ('1', 'bui van c', '123123132', '1', '1');
INSERT INTO `usersss` VALUES ('2', 'bui van k', '21313123', '3', '2');
INSERT INTO `usersss` VALUES ('3', 'bui van l', '21321312', '5', '3');
INSERT INTO `usersss` VALUES ('4', 'bui van m', '42424234', '4', '4');
INSERT INTO `usersss` VALUES ('5', 'bui van n', '2342342342', '1', '5');
INSERT INTO `usersss` VALUES ('6', 'bui van i', '2342342423', '1', '6');
INSERT INTO `usersss` VALUES ('7', 'bui van w', '23423424', '5', null);
INSERT INTO `usersss` VALUES ('8', 'bui van q', '2342423432', '4', null);
INSERT INTO `usersss` VALUES ('9', 'bui van h', '324234234', '3', null);
INSERT INTO `usersss` VALUES ('10', 'bui van t', '2342342324', '1', null);
INSERT INTO `usersss` VALUES ('11', 'bui van c', '34242342342', '5', null);
INSERT INTO `usersss` VALUES ('20', 'new user rule', '2262a2s6', '5', null);

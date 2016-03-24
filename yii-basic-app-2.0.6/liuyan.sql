/*
Navicat MySQL Data Transfer

Source Server         : xm
Source Server Version : 50540
Source Host           : 127.0.0.1:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-03-24 11:46:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for liuyan
-- ----------------------------
DROP TABLE IF EXISTS `liuyan`;
CREATE TABLE `liuyan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lname` varchar(30) DEFAULT NULL,
  `content` text,
  `ltime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of liuyan
-- ----------------------------
INSERT INTO `liuyan` VALUES ('1', '张三', '和烦得很烦得法等多个111', '2016-03-24 11:44:53');
INSERT INTO `liuyan` VALUES ('6', '11UI哟', '和烦得很烦得很`121`2', '2016-03-24 01:44:29');
INSERT INTO `liuyan` VALUES ('8', '11UI哟', '和烦得很烦得很`121`2', '2016-03-24 01:44:29');
INSERT INTO `liuyan` VALUES ('15', '3213', '213213213', '2016-03-24 11:12:19');
INSERT INTO `liuyan` VALUES ('16', '34534534', '5345435345123', '2016-03-24 11:44:32');
INSERT INTO `liuyan` VALUES ('14', '111', '111', '2016-03-24 11:12:14');
INSERT INTO `liuyan` VALUES ('13', '324324', '234234234', '2016-03-24 11:11:58');

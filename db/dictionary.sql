/*
Navicat MySQL Data Transfer

Source Server         : MySql
Source Server Version : 50150
Source Host           : localhost:3306
Source Database       : consulbase

Target Server Type    : MYSQL
Target Server Version : 50150
File Encoding         : 65001

Date: 2012-12-01 23:59:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `dictionary`
-- ----------------------------
DROP TABLE IF EXISTS `dictionary`;
CREATE TABLE `consul_dictionary` (
  `dictionary_code` int(11) NOT NULL AUTO_INCREMENT,
  `essence_code` int(11) NOT NULL DEFAULT '0',
  `lang_code` int(11) NOT NULL,
  `phrase` varchar(256) NOT NULL DEFAULT '',
  PRIMARY KEY (`dictionary_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dictionary
-- ----------------------------

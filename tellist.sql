/*
Navicat MySQL Data Transfer

Source Server         : MySQL1_copy
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : tellist

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-11-13 14:01:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for suesphone
-- ----------------------------
DROP TABLE IF EXISTS `suesphone`;
CREATE TABLE `suesphone` (
  `phone` bigint(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `office` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `id` int(50) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of suesphone
-- ----------------------------
INSERT INTO `suesphone` VALUES ('12345', '校长室', '办公室', 'A1', '12');
INSERT INTO `suesphone` VALUES ('123456', '校长室', '办公室', 'A1', '13');
INSERT INTO `suesphone` VALUES ('1234567', '校长室', '大厅', 'A1', '15');
INSERT INTO `suesphone` VALUES ('12345678', '财政部门', '财政部门', 'B2', '16');
INSERT INTO `suesphone` VALUES ('987654321', '易班', '易班', 'C3', '17');
INSERT INTO `suesphone` VALUES ('354321', '教务处', '总部', 'D4', '18');
INSERT INTO `suesphone` VALUES ('4321', '教务处', '分布', '414123123', '19');
INSERT INTO `suesphone` VALUES ('45511234', '校长室', '办公室', 'A2', '20');
INSERT INTO `suesphone` VALUES ('0', '易班', '易班', 'A2', '21');
INSERT INTO `suesphone` VALUES ('18294758', '易班', '办公室', '87', '22');

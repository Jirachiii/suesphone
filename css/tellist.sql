/*
Navicat MySQL Data Transfer

Source Server         : hu
Source Server Version : 50544
Source Host           : localhost:3306
Source Database       : tellist

Target Server Type    : MYSQL
Target Server Version : 50544
File Encoding         : 65001

Date: 2015-11-04 21:05:55
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
  `id` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of suesphone
-- ----------------------------
INSERT INTO `suesphone` VALUES ('67874120', '机关党委', '办公室', '行A435', '1');
INSERT INTO `suesphone` VALUES ('67791158', '国际交流处', '办公室', '行315', '2');
INSERT INTO `suesphone` VALUES ('67791137', '国际交流处', '办公室', '行315', '3');
INSERT INTO `suesphone` VALUES ('67791263', '国际交流处', '办公室', '行315', '4');
INSERT INTO `suesphone` VALUES ('67874013', '国际交流处', '办公室', '行315', '5');
INSERT INTO `suesphone` VALUES ('67791239', '科研处', '处长室', '', '6');

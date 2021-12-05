/*
 Navicat Premium Data Transfer

 Source Server         : localhost-xampp
 Source Server Type    : MySQL
 Source Server Version : 100119
 Source Host           : localhost:3306
 Source Schema         : patops

 Target Server Type    : MySQL
 Target Server Version : 100119
 File Encoding         : 65001

 Date: 05/12/2021 12:04:27
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ecd_goods
-- ----------------------------
DROP TABLE IF EXISTS `ecd_goods`;
CREATE TABLE `ecd_goods` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `personal_id` bigint(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `currency` varchar(32) NOT NULL,
  `value` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ecd_goods_pers_id_fk_ecd_per_id` (`personal_id`),
  CONSTRAINT `ecd_goods_pers_id_fk_ecd_per_id` FOREIGN KEY (`personal_id`) REFERENCES `ecd_personal` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

SET FOREIGN_KEY_CHECKS = 1;

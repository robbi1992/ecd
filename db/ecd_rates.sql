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

 Date: 23/12/2021 19:24:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ecd_rates
-- ----------------------------
DROP TABLE IF EXISTS `ecd_rates`;
CREATE TABLE `ecd_rates` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `rate` int(1) NOT NULL,
  `rate_text` varchar(255) NOT NULL,
  `personal_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ecd_rate_per_id_fk_personal_id` (`personal_id`),
  CONSTRAINT `ecd_rate_per_id_fk_personal_id` FOREIGN KEY (`personal_id`) REFERENCES `ecd_personal` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

SET FOREIGN_KEY_CHECKS = 1;

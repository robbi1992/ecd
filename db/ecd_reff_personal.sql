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

 Date: 13/12/2021 14:01:43
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ecd_reff_personal
-- ----------------------------
DROP TABLE IF EXISTS `ecd_reff_personal`;
CREATE TABLE `ecd_reff_personal` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `personal_id` bigint(20) NOT NULL,
  `header_reff_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ecd_reff_personal_per_id_fk_per_id` (`personal_id`),
  KEY `ecd_reff_personal_header_reff_id_fk_reff_id` (`header_reff_id`),
  CONSTRAINT `ecd_reff_personal_header_reff_id_fk_reff_id` FOREIGN KEY (`header_reff_id`) REFERENCES `reff_atensi_merah_header` (`id`),
  CONSTRAINT `ecd_reff_personal_per_id_fk_per_id` FOREIGN KEY (`personal_id`) REFERENCES `ecd_personal` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

SET FOREIGN_KEY_CHECKS = 1;

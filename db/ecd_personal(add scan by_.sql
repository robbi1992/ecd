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

 Date: 15/12/2021 17:34:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ecd_personal
-- ----------------------------
DROP TABLE IF EXISTS `ecd_personal`;
CREATE TABLE `ecd_personal` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `occupation` varchar(128) NOT NULL,
  `nationality` int(11) NOT NULL,
  `passport_number` varchar(32) NOT NULL,
  `address_in_indo` varchar(255) NOT NULL,
  `flight_number` varchar(16) NOT NULL,
  `arrival_date` date NOT NULL,
  `baggage_in` int(4) NOT NULL,
  `baggage_ex` int(4) NOT NULL,
  `scan_status` enum('0','1') NOT NULL DEFAULT '0',
  `scan_by` varchar(128) DEFAULT NULL,
  `zone` enum('0','1') NOT NULL DEFAULT '0',
  `zone_by` varchar(128) NOT NULL COMMENT 'red triggered by',
  `qr_code` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_qr_code_unique_item` (`qr_code`) USING BTREE,
  KEY `personal_nationality_fk_country_id` (`nationality`),
  KEY `personal_full_name_idx` (`full_name`) USING BTREE,
  KEY `personal_birth_idx` (`date_of_birth`) USING BTREE,
  KEY `personal_passport_idx` (`passport_number`) USING BTREE,
  CONSTRAINT `personal_nationality_fk_country_id` FOREIGN KEY (`nationality`) REFERENCES `en_countries` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

SET FOREIGN_KEY_CHECKS = 1;

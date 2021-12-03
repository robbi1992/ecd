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

 Date: 03/12/2021 13:31:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ecd_goods_declare
-- ----------------------------
DROP TABLE IF EXISTS `ecd_goods_declare`;
CREATE TABLE `ecd_goods_declare` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `en_content` text NOT NULL,
  `in_content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ecd_goods_declare
-- ----------------------------
BEGIN;
INSERT INTO `ecd_goods_declare` VALUES (1, 'Animals, fish and plants including their products.\n', 'Hewan, ikan, dan tumbuhan, termasuk produk yang berasal dari hewan, ikan, dan tumbuhan.\n');
INSERT INTO `ecd_goods_declare` VALUES (2, 'Narcotics, psychotropic substances, precursor, drugs, fire arms, air guns, sharp objects, ammunitions, explosives, pornography object.', 'Narkotika, psikotropika, prekursor, obat-obatan, senjata api, senjata angin, senjata tajam, amunisi, bahan peledak, benda/ publikasi pornografi.\n');
INSERT INTO `ecd_goods_declare` VALUES (3, 'Currency and/or bearer negotiable instrument in Rupiah or other currencies which equal to the amount of 100 million Rupiah or more.\n', 'Uang dan/atau instrumen pembayaran lainnya dalam rupiah atau dalam mata uang asing senilai Rp. 100.000.000,00 (seratus juta rupiah) atau lebih.\n');
INSERT INTO `ecd_goods_declare` VALUES (4, 'Foreign banknotes which equal to the amount of 1 billion Rupiah or more.\n', 'Uang Kertas Asing paling sedikit setara dengan Rp. 1.000.000.000,00 (satu milyar rupiah).\n');
INSERT INTO `ecd_goods_declare` VALUES (5, 'More than 200 cigarettes or 25 cigars or 100 grams of sliced tobacco, and 1 liter of alcoholic beverages (for Passenger); or more than 40 cigarettes or 10 cigars or 40 grams of sliced tobacco, and 350 milliliter of alcoholic beverages (for Crew).\n', 'Lebih dari 200 batang sigaret, 25 batang cerutu, atau 100 gram tembakau iris/ produk hasil tembakau lainnya dan/ atau 1 liter minuman mengandung etil alkohol (untuk Penumpang) atau 40 batang sigaret, 10 batang cerutu, atau 40 gram tembakau iris/ hasil tembakau lainnya, dan/ atau 350 mililiter minuman mengandung etil alkohol (untuk Awak Sarana Pengangkut).\n');
INSERT INTO `ecd_goods_declare` VALUES (6, 'Goods purchased/obtained abroad and will remain in Indonesia with total value USD 50.00 per person (for Crew); or USD 500.00 per person (for passenger).\n', 'Barang untuk keperluan pribadi yang dibeli/ diperoleh di luar negeri dan tidak akan dibawa kembali ke luar negeri dengan nilai melebihi USD 50.00 per orang (untuk Awak Sarana Pengangkut) atau USD 500.00 per orang (untuk Penumpang).\n');
INSERT INTO `ecd_goods_declare` VALUES (7, 'Import goods that are not considered as personal effect (unreasonable quantity for personal use or component used for industrial purposes).\n', 'Barang impor yang akan digunakan untuk tujuan selain pemakaian pribadi (jumlah tidak wajar untuk dipakai/ konsumsi sendiri atau untuk keperluan perusahaan/ toko/ institusi/ industri)\n');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

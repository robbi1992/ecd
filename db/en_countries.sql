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

 Date: 24/02/2022 03:02:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for en_countries
-- ----------------------------
DROP TABLE IF EXISTS `en_countries`;
CREATE TABLE `en_countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=251 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of en_countries
-- ----------------------------
BEGIN;
INSERT INTO `en_countries` VALUES (1, 'Indonesia');
INSERT INTO `en_countries` VALUES (2, 'Afghanistan');
INSERT INTO `en_countries` VALUES (3, 'Aland Islands');
INSERT INTO `en_countries` VALUES (4, 'Albania');
INSERT INTO `en_countries` VALUES (5, 'Algeria');
INSERT INTO `en_countries` VALUES (6, 'American Samoa');
INSERT INTO `en_countries` VALUES (7, 'Andorra');
INSERT INTO `en_countries` VALUES (8, 'Angola');
INSERT INTO `en_countries` VALUES (9, 'Anguilla');
INSERT INTO `en_countries` VALUES (10, 'Antarctica');
INSERT INTO `en_countries` VALUES (11, 'Antigua and Barbuda');
INSERT INTO `en_countries` VALUES (12, 'Argentina');
INSERT INTO `en_countries` VALUES (13, 'Armenia');
INSERT INTO `en_countries` VALUES (14, 'Aruba');
INSERT INTO `en_countries` VALUES (15, 'Australia');
INSERT INTO `en_countries` VALUES (16, 'Austria');
INSERT INTO `en_countries` VALUES (17, 'Azerbaijan');
INSERT INTO `en_countries` VALUES (18, 'Bahamas');
INSERT INTO `en_countries` VALUES (19, 'Bahrain');
INSERT INTO `en_countries` VALUES (20, 'Bangladesh');
INSERT INTO `en_countries` VALUES (21, 'Barbados');
INSERT INTO `en_countries` VALUES (22, 'Belarus');
INSERT INTO `en_countries` VALUES (23, 'Belgium');
INSERT INTO `en_countries` VALUES (24, 'Belize');
INSERT INTO `en_countries` VALUES (25, 'Benin');
INSERT INTO `en_countries` VALUES (26, 'Bermuda');
INSERT INTO `en_countries` VALUES (27, 'Bhutan');
INSERT INTO `en_countries` VALUES (28, 'Bolivia (Plurinational State of)');
INSERT INTO `en_countries` VALUES (29, 'Bonaire, Sint Eustatius and Saba');
INSERT INTO `en_countries` VALUES (30, 'Bosnia and Herzegovina');
INSERT INTO `en_countries` VALUES (31, 'Botswana');
INSERT INTO `en_countries` VALUES (32, 'Bouvet Island');
INSERT INTO `en_countries` VALUES (33, 'Brazil');
INSERT INTO `en_countries` VALUES (34, 'British Indian Ocean Territory');
INSERT INTO `en_countries` VALUES (35, 'British Virgin Islands');
INSERT INTO `en_countries` VALUES (36, 'Brunei Darussalam');
INSERT INTO `en_countries` VALUES (37, 'Bulgaria');
INSERT INTO `en_countries` VALUES (38, 'Burkina Faso');
INSERT INTO `en_countries` VALUES (39, 'Burundi');
INSERT INTO `en_countries` VALUES (40, 'Cabo Verde');
INSERT INTO `en_countries` VALUES (41, 'Cambodia');
INSERT INTO `en_countries` VALUES (42, 'Cameroon');
INSERT INTO `en_countries` VALUES (43, 'Canada');
INSERT INTO `en_countries` VALUES (44, 'Cayman Islands');
INSERT INTO `en_countries` VALUES (45, 'Central African Republic');
INSERT INTO `en_countries` VALUES (46, 'Chad');
INSERT INTO `en_countries` VALUES (47, 'Chile');
INSERT INTO `en_countries` VALUES (48, 'China');
INSERT INTO `en_countries` VALUES (52, 'Christmas Island');
INSERT INTO `en_countries` VALUES (53, 'Cocos (Keeling) Islands');
INSERT INTO `en_countries` VALUES (54, 'Colombia');
INSERT INTO `en_countries` VALUES (55, 'Comoros');
INSERT INTO `en_countries` VALUES (56, 'Congo');
INSERT INTO `en_countries` VALUES (57, 'Cook Islands');
INSERT INTO `en_countries` VALUES (58, 'Costa Rica');
INSERT INTO `en_countries` VALUES (59, 'Côte d’Ivoire');
INSERT INTO `en_countries` VALUES (60, 'Croatia');
INSERT INTO `en_countries` VALUES (61, 'Cuba');
INSERT INTO `en_countries` VALUES (62, 'Curaçao');
INSERT INTO `en_countries` VALUES (63, 'Cyprus');
INSERT INTO `en_countries` VALUES (64, 'Czechia');
INSERT INTO `en_countries` VALUES (65, 'Democratic People\'s Republic of Korea');
INSERT INTO `en_countries` VALUES (66, 'Democratic Republic of the Congo');
INSERT INTO `en_countries` VALUES (67, 'Denmark');
INSERT INTO `en_countries` VALUES (68, 'Djibouti');
INSERT INTO `en_countries` VALUES (69, 'Dominica');
INSERT INTO `en_countries` VALUES (70, 'Dominican Republic');
INSERT INTO `en_countries` VALUES (71, 'Ecuador');
INSERT INTO `en_countries` VALUES (72, 'Egypt');
INSERT INTO `en_countries` VALUES (73, 'El Salvador');
INSERT INTO `en_countries` VALUES (74, 'Equatorial Guinea');
INSERT INTO `en_countries` VALUES (75, 'Eritrea');
INSERT INTO `en_countries` VALUES (76, 'Estonia');
INSERT INTO `en_countries` VALUES (77, 'Eswatini');
INSERT INTO `en_countries` VALUES (78, 'Ethiopia');
INSERT INTO `en_countries` VALUES (79, 'Falkland Islands (Malvinas)');
INSERT INTO `en_countries` VALUES (80, 'Faroe Islands');
INSERT INTO `en_countries` VALUES (81, 'Fiji');
INSERT INTO `en_countries` VALUES (82, 'Finland');
INSERT INTO `en_countries` VALUES (83, 'France');
INSERT INTO `en_countries` VALUES (84, 'French Guiana');
INSERT INTO `en_countries` VALUES (85, 'French Polynesia');
INSERT INTO `en_countries` VALUES (86, 'French Southern Territories');
INSERT INTO `en_countries` VALUES (87, 'Gabon');
INSERT INTO `en_countries` VALUES (88, 'Gambia');
INSERT INTO `en_countries` VALUES (89, 'Georgia');
INSERT INTO `en_countries` VALUES (90, 'Germany');
INSERT INTO `en_countries` VALUES (91, 'Ghana');
INSERT INTO `en_countries` VALUES (92, 'Gibraltar');
INSERT INTO `en_countries` VALUES (93, 'Greece');
INSERT INTO `en_countries` VALUES (94, 'Greenland');
INSERT INTO `en_countries` VALUES (95, 'Grenada');
INSERT INTO `en_countries` VALUES (96, 'Guadeloupe');
INSERT INTO `en_countries` VALUES (97, 'Guam');
INSERT INTO `en_countries` VALUES (98, 'Guatemala');
INSERT INTO `en_countries` VALUES (99, 'Guernsey');
INSERT INTO `en_countries` VALUES (100, 'Guinea');
INSERT INTO `en_countries` VALUES (101, 'Guinea-Bissau');
INSERT INTO `en_countries` VALUES (102, 'Guyana');
INSERT INTO `en_countries` VALUES (103, 'Haiti');
INSERT INTO `en_countries` VALUES (104, 'Heard Island and McDonald Islands');
INSERT INTO `en_countries` VALUES (105, 'Holy See (Vatican City State)');
INSERT INTO `en_countries` VALUES (106, 'Honduras');
INSERT INTO `en_countries` VALUES (107, 'Hungary');
INSERT INTO `en_countries` VALUES (108, 'Iceland');
INSERT INTO `en_countries` VALUES (109, 'India');
INSERT INTO `en_countries` VALUES (110, 'Iran (Islamic Republic of)');
INSERT INTO `en_countries` VALUES (111, 'Iraq');
INSERT INTO `en_countries` VALUES (112, 'Ireland');
INSERT INTO `en_countries` VALUES (113, 'Isle of Man');
INSERT INTO `en_countries` VALUES (114, 'Israel');
INSERT INTO `en_countries` VALUES (115, 'Italy');
INSERT INTO `en_countries` VALUES (116, 'Jamaica');
INSERT INTO `en_countries` VALUES (117, 'Japan');
INSERT INTO `en_countries` VALUES (118, 'Jersey');
INSERT INTO `en_countries` VALUES (119, 'Jordan');
INSERT INTO `en_countries` VALUES (120, 'Kazakhstan');
INSERT INTO `en_countries` VALUES (121, 'Kenya');
INSERT INTO `en_countries` VALUES (122, 'Kiribati');
INSERT INTO `en_countries` VALUES (123, 'Kuwait');
INSERT INTO `en_countries` VALUES (124, 'Kyrgyzstan');
INSERT INTO `en_countries` VALUES (125, 'Lao People\'s Democratic Republic');
INSERT INTO `en_countries` VALUES (126, 'Latvia');
INSERT INTO `en_countries` VALUES (127, 'Lebanon');
INSERT INTO `en_countries` VALUES (128, 'Lesotho');
INSERT INTO `en_countries` VALUES (129, 'Liberia');
INSERT INTO `en_countries` VALUES (130, 'Libya');
INSERT INTO `en_countries` VALUES (131, 'Liechtenstein');
INSERT INTO `en_countries` VALUES (132, 'Lithuania');
INSERT INTO `en_countries` VALUES (133, 'Luxembourg');
INSERT INTO `en_countries` VALUES (134, 'Madagascar');
INSERT INTO `en_countries` VALUES (135, 'Malawi');
INSERT INTO `en_countries` VALUES (136, 'Malaysia');
INSERT INTO `en_countries` VALUES (137, 'Maldives');
INSERT INTO `en_countries` VALUES (138, 'Mali');
INSERT INTO `en_countries` VALUES (139, 'Malta');
INSERT INTO `en_countries` VALUES (140, 'Marshall Islands');
INSERT INTO `en_countries` VALUES (141, 'Martinique');
INSERT INTO `en_countries` VALUES (142, 'Mauritania');
INSERT INTO `en_countries` VALUES (143, 'Mauritius');
INSERT INTO `en_countries` VALUES (144, 'Mayotte');
INSERT INTO `en_countries` VALUES (145, 'Mexico');
INSERT INTO `en_countries` VALUES (146, 'Micronesia (Federated States of)');
INSERT INTO `en_countries` VALUES (147, 'Monaco');
INSERT INTO `en_countries` VALUES (148, 'Mongolia');
INSERT INTO `en_countries` VALUES (149, 'Montenegro');
INSERT INTO `en_countries` VALUES (150, 'Montserrat');
INSERT INTO `en_countries` VALUES (151, 'Morocco');
INSERT INTO `en_countries` VALUES (152, 'Mozambique');
INSERT INTO `en_countries` VALUES (153, 'Myanmar');
INSERT INTO `en_countries` VALUES (154, 'Namibia');
INSERT INTO `en_countries` VALUES (155, 'Nauru');
INSERT INTO `en_countries` VALUES (156, 'Nepal');
INSERT INTO `en_countries` VALUES (157, 'Netherlands');
INSERT INTO `en_countries` VALUES (158, 'New Caledonia');
INSERT INTO `en_countries` VALUES (159, 'New Zealand');
INSERT INTO `en_countries` VALUES (160, 'Nicaragua');
INSERT INTO `en_countries` VALUES (161, 'Niger');
INSERT INTO `en_countries` VALUES (162, 'Nigeria');
INSERT INTO `en_countries` VALUES (163, 'Niue');
INSERT INTO `en_countries` VALUES (164, 'Norfolk Island');
INSERT INTO `en_countries` VALUES (165, 'North Macedonia');
INSERT INTO `en_countries` VALUES (166, 'Northern Mariana Islands');
INSERT INTO `en_countries` VALUES (167, 'Norway');
INSERT INTO `en_countries` VALUES (168, 'Oman');
INSERT INTO `en_countries` VALUES (169, 'Pakistan');
INSERT INTO `en_countries` VALUES (170, 'Palau');
INSERT INTO `en_countries` VALUES (171, 'Panama');
INSERT INTO `en_countries` VALUES (172, 'Papua New Guinea');
INSERT INTO `en_countries` VALUES (173, 'Paraguay');
INSERT INTO `en_countries` VALUES (174, 'Peru');
INSERT INTO `en_countries` VALUES (175, 'Philippines');
INSERT INTO `en_countries` VALUES (176, 'Pitcairn');
INSERT INTO `en_countries` VALUES (177, 'Poland');
INSERT INTO `en_countries` VALUES (178, 'Portugal');
INSERT INTO `en_countries` VALUES (179, 'Puerto Rico');
INSERT INTO `en_countries` VALUES (180, 'Qatar');
INSERT INTO `en_countries` VALUES (181, 'Republic of Korea');
INSERT INTO `en_countries` VALUES (182, 'Republic of Moldova');
INSERT INTO `en_countries` VALUES (183, 'Réunion');
INSERT INTO `en_countries` VALUES (184, 'Romania');
INSERT INTO `en_countries` VALUES (185, 'Russian Federation');
INSERT INTO `en_countries` VALUES (186, 'Rwanda');
INSERT INTO `en_countries` VALUES (187, 'Saint Barthélemy');
INSERT INTO `en_countries` VALUES (188, 'Saint Helena');
INSERT INTO `en_countries` VALUES (189, 'Saint Kitts and Nevis');
INSERT INTO `en_countries` VALUES (190, 'Saint Lucia');
INSERT INTO `en_countries` VALUES (191, 'Saint Martin (French Part)');
INSERT INTO `en_countries` VALUES (192, 'Saint Pierre and Miquelon');
INSERT INTO `en_countries` VALUES (193, 'Saint Vincent and the Grenadines');
INSERT INTO `en_countries` VALUES (194, 'Samoa');
INSERT INTO `en_countries` VALUES (195, 'San Marino');
INSERT INTO `en_countries` VALUES (196, 'Sao Tome and Principe');
INSERT INTO `en_countries` VALUES (197, 'Sark');
INSERT INTO `en_countries` VALUES (198, 'Saudi Arabia');
INSERT INTO `en_countries` VALUES (199, 'Senegal');
INSERT INTO `en_countries` VALUES (200, 'Serbia');
INSERT INTO `en_countries` VALUES (201, 'Seychelles');
INSERT INTO `en_countries` VALUES (202, 'Sierra Leone');
INSERT INTO `en_countries` VALUES (203, 'Singapore');
INSERT INTO `en_countries` VALUES (204, 'Sint Maarten (Dutch part)');
INSERT INTO `en_countries` VALUES (205, 'Slovakia');
INSERT INTO `en_countries` VALUES (206, 'Slovenia');
INSERT INTO `en_countries` VALUES (207, 'Solomon Islands');
INSERT INTO `en_countries` VALUES (208, 'Somalia');
INSERT INTO `en_countries` VALUES (209, 'South Africa');
INSERT INTO `en_countries` VALUES (210, 'South Georgia and the South Sandwich Islands');
INSERT INTO `en_countries` VALUES (211, 'South Sudan');
INSERT INTO `en_countries` VALUES (212, 'Spain');
INSERT INTO `en_countries` VALUES (213, 'Sri Lanka');
INSERT INTO `en_countries` VALUES (214, 'State of Palestine');
INSERT INTO `en_countries` VALUES (215, 'Sudan');
INSERT INTO `en_countries` VALUES (216, 'Suriname');
INSERT INTO `en_countries` VALUES (217, 'Svalbard and Jan Mayen Islands');
INSERT INTO `en_countries` VALUES (218, 'Sweden');
INSERT INTO `en_countries` VALUES (219, 'Switzerland');
INSERT INTO `en_countries` VALUES (220, 'Syrian Arab Republic');
INSERT INTO `en_countries` VALUES (221, 'Tajikistan');
INSERT INTO `en_countries` VALUES (222, 'Thailand');
INSERT INTO `en_countries` VALUES (223, 'Timor-Leste');
INSERT INTO `en_countries` VALUES (224, 'Togo');
INSERT INTO `en_countries` VALUES (225, 'Tokelau');
INSERT INTO `en_countries` VALUES (226, 'Tonga');
INSERT INTO `en_countries` VALUES (227, 'Trinidad and Tobago');
INSERT INTO `en_countries` VALUES (228, 'Tunisia');
INSERT INTO `en_countries` VALUES (229, 'Turkey');
INSERT INTO `en_countries` VALUES (230, 'Turkmenistan');
INSERT INTO `en_countries` VALUES (231, 'Turks and Caicos Islands');
INSERT INTO `en_countries` VALUES (232, 'Tuvalu');
INSERT INTO `en_countries` VALUES (233, 'Uganda');
INSERT INTO `en_countries` VALUES (234, 'Ukraine');
INSERT INTO `en_countries` VALUES (235, 'United Arab Emirates');
INSERT INTO `en_countries` VALUES (236, 'United Kingdom');
INSERT INTO `en_countries` VALUES (237, 'United Republic of Tanzania');
INSERT INTO `en_countries` VALUES (238, 'United States Minor Outlying Islands');
INSERT INTO `en_countries` VALUES (239, 'United States of America');
INSERT INTO `en_countries` VALUES (240, 'United States Virgin Islands');
INSERT INTO `en_countries` VALUES (241, 'Uruguay');
INSERT INTO `en_countries` VALUES (242, 'Uzbekistan');
INSERT INTO `en_countries` VALUES (243, 'Vanuatu');
INSERT INTO `en_countries` VALUES (244, 'Venezuela (Bolivarian Republic of)');
INSERT INTO `en_countries` VALUES (245, 'Viet Nam');
INSERT INTO `en_countries` VALUES (246, 'Wallis and Futuna Islands');
INSERT INTO `en_countries` VALUES (247, 'Western Sahara');
INSERT INTO `en_countries` VALUES (248, 'Yemen');
INSERT INTO `en_countries` VALUES (249, 'Zambia');
INSERT INTO `en_countries` VALUES (250, 'Zimbabwe');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

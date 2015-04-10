/*
Navicat MySQL Data Transfer

Source Server         : 203.157.82.73_3306
Source Server Version : 50541
Source Host           : 203.157.82.73:3306
Source Database       : adossw

Target Server Type    : MYSQL
Target Server Version : 50541
File Encoding         : 65001

Date: 2015-04-10 09:18:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `auth_assignment`
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
INSERT INTO `auth_assignment` VALUES ('admin', '1', '1426125604');
INSERT INTO `auth_assignment` VALUES ('admin', '4', '1427078648');

-- ----------------------------
-- Table structure for `auth_item`
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item
-- ----------------------------
INSERT INTO `auth_item` VALUES ('/*', '2', null, null, null, '1426125486', '1426125486');
INSERT INTO `auth_item` VALUES ('admin', '2', null, null, null, '1426076383', '1426125523');
INSERT INTO `auth_item` VALUES ('admin_test', '1', null, null, null, '1426125568', '1426125568');
INSERT INTO `auth_item` VALUES ('dd', '2', null, null, null, '1427111116', '1427111116');

-- ----------------------------
-- Table structure for `auth_item_child`
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------
INSERT INTO `auth_item_child` VALUES ('admin', '/*');
INSERT INTO `auth_item_child` VALUES ('admin_test', 'admin');

-- ----------------------------
-- Table structure for `auth_rule`
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1427727370');
INSERT INTO `migration` VALUES ('m140209_132017_init', '1427727373');
INSERT INTO `migration` VALUES ('m140403_174025_create_account_table', '1427727373');
INSERT INTO `migration` VALUES ('m140504_113157_update_tables', '1427727373');
INSERT INTO `migration` VALUES ('m140504_130429_create_token_table', '1427727373');
INSERT INTO `migration` VALUES ('m140830_171933_fix_ip_field', '1427727373');
INSERT INTO `migration` VALUES ('m140830_172703_change_account_table_name', '1427727373');
INSERT INTO `migration` VALUES ('m141222_110026_update_ip_field', '1427727373');

-- ----------------------------
-- Table structure for `prapa`
-- ----------------------------
DROP TABLE IF EXISTS `prapa`;
CREATE TABLE `prapa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_rec` date DEFAULT NULL,
  `date_time` time DEFAULT NULL,
  `num1` double(10,0) DEFAULT NULL,
  `num2` double(10,0) DEFAULT NULL,
  `chlorinefirst` double(10,0) DEFAULT NULL,
  `chlorineennd` double(10,0) DEFAULT NULL,
  `staff` varchar(50) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of prapa
-- ----------------------------
INSERT INTO `prapa` VALUES ('1', '2015-10-01', null, '12', '15', '0', '2', 'fff', 'fffffffffffffffffff');
INSERT INTO `prapa` VALUES ('2', '2015-10-01', null, '3', '6', '0', '0', 'ict009', 'test');
INSERT INTO `prapa` VALUES ('3', null, null, '3', '8', '6', '5', 'ddd', 'mf\\\'dfsdfkls');
INSERT INTO `prapa` VALUES ('4', '2015-03-31', null, '3', '5', '3', '0', 'ggg', 'gggggggggggggg');
INSERT INTO `prapa` VALUES ('5', '2015-04-01', null, '3', '55', '33', '5', 'ict009', 'fgbgfgh');
INSERT INTO `prapa` VALUES ('6', '2015-04-01', null, '5', '5', '5', '5', 'ict009', 'fgd');

-- ----------------------------
-- Table structure for `profile`
-- ----------------------------
DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `public_email` varchar(255) DEFAULT NULL,
  `gravatar_email` varchar(255) DEFAULT NULL,
  `gravatar_id` varchar(32) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `bio` text,
  PRIMARY KEY (`user_id`),
  CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user1` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of profile
-- ----------------------------

-- ----------------------------
-- Table structure for `social_account`
-- ----------------------------
DROP TABLE IF EXISTS `social_account`;
CREATE TABLE `social_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `data` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account_unique` (`provider`,`client_id`),
  KEY `fk_user_account` (`user_id`),
  CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `user1` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of social_account
-- ----------------------------

-- ----------------------------
-- Table structure for `token`
-- ----------------------------
DROP TABLE IF EXISTS `token`;
CREATE TABLE `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL,
  UNIQUE KEY `token_unique` (`user_id`,`code`,`type`),
  CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `user1` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of token
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `status` smallint(6) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `api_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_time` timestamp NULL DEFAULT NULL,
  `create_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL,
  `ban_time` timestamp NULL DEFAULT NULL,
  `ban_reason` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email` (`email`),
  UNIQUE KEY `user_username` (`username`),
  KEY `user_role_id` (`role_id`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '1', '1', 'neo@neo.com', null, 'neo', '$2y$13$dyVw4WkZGkABf2UrGWrhHO4ZmVBv.K4puhOL59Y9jQhIdj63TlV.O', 'TH2AUKuy5x4e6twJxkwbWYrauXYft1qA', 'hUUWHtFrlikN86zmPP01Df6QQXcVbnXL', '::1', '2015-04-02 05:38:28', null, '2015-03-11 10:44:30', null, null, null);
INSERT INTO `user` VALUES ('2', '1', '0', 'sukkla01@gmail.com', null, 'sukkla01', '$2y$13$a2v7.a5MEvxiqqy1bbt.aOUdma.UlNcGEokr95Ygn1qr0EyWWeGma', 'eXj01t0LNy_qeUMQJ1WOHbItywirjNDS', 'Q0Ay_gAC8JwmAN22P8YkjvdrlAu3H23b', null, null, '::1', '2015-03-11 11:09:21', '2015-03-25 04:15:15', null, null);
INSERT INTO `user` VALUES ('3', '2', '0', 'sujubjup@gmail.com', null, null, '$2y$13$9q6XiQSS17obwYyrJjpGie3ovk/0qXN7hXqA3VMc1w3kD26X7txsy', '1xrLzzCwc9mkOaP0DirB3wzUbsMjTWDQ', '560wnckvmHnQeg3hqmYAjgt5drax56q9', null, null, '::1', '2015-03-12 17:04:49', null, null, null);
INSERT INTO `user` VALUES ('4', '1', '1', 'ss@gmail.com', null, 'jubwifi', '$2y$13$GSz0IKAiNwy5twnek7C30e2Gia/EFjFNshUh6JEYW23FS0MAJkjzi', null, null, '::1', '2015-03-23 10:30:23', null, '2015-03-23 03:39:05', null, null, null);
INSERT INTO `user` VALUES ('5', '1', '1', 'dd@gmail.com', null, 'ict009', '$2y$13$ljUsaEPknjOlIMlA74wKieO9fkG2xF2V4HVSX0SkL4S..1LJZoXOC', null, null, null, null, null, '2015-03-25 03:14:41', null, null, null);

-- ----------------------------
-- Table structure for `user1`
-- ----------------------------
DROP TABLE IF EXISTS `user1`;
CREATE TABLE `user1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(60) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_unique_username` (`username`),
  UNIQUE KEY `user_unique_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user1
-- ----------------------------

-- ----------------------------
-- Table structure for `wastewater`
-- ----------------------------
DROP TABLE IF EXISTS `wastewater`;
CREATE TABLE `wastewater` (
  `date_rec` date DEFAULT NULL COMMENT 'วันที่',
  `time_rec` datetime DEFAULT NULL COMMENT 'เวลา',
  `too1` double(10,0) DEFAULT NULL COMMENT 'หน่วยไฟฟ้าตู้ที่ 1',
  `too2` double(10,0) DEFAULT NULL COMMENT 'หน่วยไฟฟ้าตู้ที่ 2',
  `takon` double(10,0) DEFAULT NULL COMMENT 'ปริมาณตะกอน',
  `pump` enum('สูบ','ไม่สูบ') DEFAULT NULL COMMENT 'สูบตะกอน',
  `chlorine` double(10,0) DEFAULT NULL COMMENT 'ค่าคลอรีน',
  `pump_chlorine` enum('เติม','ไม่เติม') DEFAULT NULL COMMENT 'เติมคลอรีน',
  `count_chlorine` double(10,0) DEFAULT NULL COMMENT 'ปริมาณคลอรีน',
  `ph` double(10,0) DEFAULT NULL COMMENT 'ค่า PH',
  `do` double(10,0) DEFAULT NULL COMMENT 'ค่า DO',
  `staff` varchar(255) DEFAULT NULL COMMENT 'ผู้บันทึก',
  `comment` varchar(255) DEFAULT NULL COMMENT 'รายละเอยีด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wastewater
-- ----------------------------

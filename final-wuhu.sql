/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : final-wuhu

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 25/05/2023 23:41:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment`  (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `time` datetime(0) DEFAULT NULL
) ENGINE = MyISAM CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES (4, '1234', '123123123', '2023-05-25 23:01:11');
INSERT INTO `comment` VALUES (5, '1234', '123123123', '2023-05-25 23:13:13');
INSERT INTO `comment` VALUES (6, '1234', '1231232', '2023-05-25 23:27:13');
INSERT INTO `comment` VALUES (6, '1234', '123123', '2023-05-25 23:30:55');
INSERT INTO `comment` VALUES (6, '1234', '2323333333', '2023-05-25 23:31:02');
INSERT INTO `comment` VALUES (5, '1234', '123123123', '2023-05-25 23:37:18');

-- ----------------------------
-- Table structure for gonggao
-- ----------------------------
DROP TABLE IF EXISTS `gonggao`;
CREATE TABLE `gonggao`  (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` time(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for luntan
-- ----------------------------
DROP TABLE IF EXISTS `luntan`;
CREATE TABLE `luntan`  (
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `time` datetime(0) DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of luntan
-- ----------------------------
INSERT INTO `luntan` VALUES ('SHIYUHANG', '2023-05-25 20:56:49', 'test', 'test', 3);
INSERT INTO `luntan` VALUES ('SHIYUHANG', '2023-05-25 20:57:23', 'test2', 'test2', 4);
INSERT INTO `luntan` VALUES ('syh', '2023-05-25 21:01:04', '123', '123', 5);
INSERT INTO `luntan` VALUES ('1234', '2023-05-25 21:03:43', 'test', 'test', 6);

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp(0) DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (1, 1, 'hello', 'welcome to HYU', '2023-05-21 15:52:02');
INSERT INTO `posts` VALUES (2, 1, 'hello', 'welcome to HYU', '2023-05-21 15:53:05');
INSERT INTO `posts` VALUES (3, 1, '2424', 'yfyf、', '2023-05-21 18:48:54');

-- ----------------------------
-- Table structure for tips
-- ----------------------------
DROP TABLE IF EXISTS `tips`;
CREATE TABLE `tips`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tips
-- ----------------------------
INSERT INTO `tips` VALUES (1, '손을 자주 씻으세요. 손은 많은 세균과 바이러스가 존재하는 곳에서 가장 먼저 노출되는 부위입니다. 깨끗한 손으로 건강을 지키세요.', 'syh');
INSERT INTO `tips` VALUES (2, '햇볕에 오래 노출되지 않도록 자외선 차단제를 사용하세요. 자외선은 피부에 손상을 줄 수 있으므로 외출 시 자외선 차단제를 바르는 것이 좋습니다.', 'syh');
INSERT INTO `tips` VALUES (3, '정기적으로 물과 식물을 물어주세요. 물은 우리 생활에 필수적인 요소이며, 식물들도 물을 받아야 성장할 수 있습니다.', 'syh');
INSERT INTO `tips` VALUES (4, '운동을 꾸준히 하세요. 몸을 움직이는 것은 건강을 유지하는 데 도움이 됩니다. 산책, 조깅, 요가 등 다양한 운동 방법을 즐겨보세요.', 'syh');
INSERT INTO `tips` VALUES (5, '충분한 수면을 취하세요. 적절한 수면은 건강과 기분을 개선해줍니다. 규칙적인 수면 패턴을 유지하고 편안한 환경에서 잠을 자도록 노력하세요.', 'syh');
INSERT INTO `tips` VALUES (6, '음식물 쓰레기를 재활용하세요. 환경 보호에 동참하기 위해 음식물 쓰레기를 재활용하거나 컴포스트로 변환하세요.', 'syh');
INSERT INTO `tips` VALUES (7, '스트레스를 관리하세요. 스트레스는 건강과 기분에 영향을 줄 수 있습니다. 휴식을 취하고 힐링하는 활동을 찾아 스트레스를 해소하세요.', 'syh');
INSERT INTO `tips` VALUES (8, '야채와 과일을 다양하게 섭취하세요. 영양소가 풍부한 야채와 과일은 건강에 도움을 줍니다. 색상 다양성을 고려하여 식단에 포함시키세요.', 'syh');
INSERT INTO `tips` VALUES (9, '화재 위험을 예방하세요. 가정에서 화재 위험을 줄이기 위해 전기용품 사용 시 안전한 사용법을 지키고, 촛불을 사용할 때 주의하세요.', 'syh');
INSERT INTO `tips` VALUES (10, '친구나 가족과 함께 시간을 보내세요. 사랑하는 사람들과 함께하는 시간은 행복을 나누고 기억을 만들어줍니다. 소중한 사람들과 소통하세요.', 'syh');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `permission` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gptusage` int(255) NOT NULL DEFAULT 20,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, '123', '$2y$10$vOf7nllK7d9CnJRsFjkRU.TvKr2MUd1hHAwll0R.fNsjzTeeG9tnW', '0', NULL, 0);
INSERT INTO `users` VALUES (8, 'syh', '123', '3', '8.jpg', 50);
INSERT INTO `users` VALUES (9, 'SHIYUHANG', '123', '0', '9.jpg', 20);
INSERT INTO `users` VALUES (10, '1234', '1234', '0', '10.jpg', 20);
INSERT INTO `users` VALUES (11, 'root', 'root', '0', NULL, 20);

SET FOREIGN_KEY_CHECKS = 1;

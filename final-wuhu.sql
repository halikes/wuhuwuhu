/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 80028
 Source Host           : localhost:3306
 Source Schema         : final-wuhu

 Target Server Type    : MySQL
 Target Server Version : 80028
 File Encoding         : 65001

 Date: 09/06/2023 11:23:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for announcements
-- ----------------------------
DROP TABLE IF EXISTS `announcements`;
CREATE TABLE `announcements` (
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `date` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of announcements
-- ----------------------------
BEGIN;
INSERT INTO `announcements` (`title`, `content`, `date`) VALUES ('test', 'hello', '2023-05-25 00:00:00.000000');
INSERT INTO `announcements` (`title`, `content`, `date`) VALUES ('tets2', 'Assad', NULL);
INSERT INTO `announcements` (`title`, `content`, `date`) VALUES ('ni.', 'wocao', '2023-05-25 00:00:00.000000');
COMMIT;

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of comment
-- ----------------------------
BEGIN;
INSERT INTO `comment` (`id`, `username`, `content`, `time`) VALUES (4, '1234', '123123123', '2023-05-25 23:01:11');
INSERT INTO `comment` (`id`, `username`, `content`, `time`) VALUES (5, '1234', '123123123', '2023-05-25 23:13:13');
INSERT INTO `comment` (`id`, `username`, `content`, `time`) VALUES (6, '1234', '1231232', '2023-05-25 23:27:13');
INSERT INTO `comment` (`id`, `username`, `content`, `time`) VALUES (6, '1234', '123123', '2023-05-25 23:30:55');
INSERT INTO `comment` (`id`, `username`, `content`, `time`) VALUES (6, '1234', '2323333333', '2023-05-25 23:31:02');
INSERT INTO `comment` (`id`, `username`, `content`, `time`) VALUES (5, '1234', '123123123', '2023-05-25 23:37:18');
INSERT INTO `comment` (`id`, `username`, `content`, `time`) VALUES (6, 'ztw', 'mm', '2023-05-25 23:56:38');
INSERT INTO `comment` (`id`, `username`, `content`, `time`) VALUES (6, 'ztw', 'hhhh', '2023-05-26 00:07:21');
INSERT INTO `comment` (`id`, `username`, `content`, `time`) VALUES (8, 'SHIYUHANG', 'Create a calendar: Create a detailed calendar that includes class times, assignment due dates, study time, and other events. Make sure to include all important tasks and activities in your schedule and stick to it.', '2023-06-07 16:17:13');
COMMIT;

-- ----------------------------
-- Table structure for gonggao
-- ----------------------------
DROP TABLE IF EXISTS `gonggao`;
CREATE TABLE `gonggao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of gonggao
-- ----------------------------
BEGIN;
INSERT INTO `gonggao` (`id`, `title`, `content`, `created_at`) VALUES (6, '[컴퓨터학부] 16학번 이전 입학자의 졸업 시 학위명칭 변경신청 안내(전공명칭 변경)', '안녕하세요, 소프트웨어융합대학 행정팀입니다. <br>\r\n2022 전기 졸업대상자(2023년 2월 졸업) 中 학위명칭변경을 희망하는 학생은 아래 내용을 확인하시어<br>\r\n붙임의 학위명칭변경신청서를 ~2/5(일) 자정  까지  제출하시기 바랍니다. (기한 엄수)<br>\r\n향후 졸업사정결과 졸업대상자가 아닐 시 학위명칭변경신청은 무효처리 됩니다.<br>\r\n온라인 제출 (★서명필수★)★ : https://forms.gle/E7jvUpotdUg5g8kh8<br>\r\n1. 관련근거 : 한양대학교 학칙 부칙(2016.5.27. 공포) 제2조 (경과조치)<br>\r\n2. 변경적용 대상 : 학위증, 졸업증명서, 성적증명서 상 소속대학 및 전공명칭<br>\r\n3. 신청대상 : 매학기 졸업 대상자(16학번 이전 공학대학 컴퓨터공학과 입학자 - 16, 15, 14, 13 ~ 학번)<br>\r\n4. 신청시기 : 2023.02.05(일) 자정 까지 (기한엄수)<br>\r\n5. 신청방식 : 매 학기 신청기간에 온라인 제출<br>\r\n6. 유의사항 : 학위명칭 변경신청으로 학위명칭이 변경된 경우 어떠한 경우라도 번복이 불가하오니 신중히 선택하시기 바랍니다. 향후 졸업사정결과 대상자가 아닐 시 학위명칭변경신청은 무효처리 됩니다.<br>\r\n7. 문의사항 : 소프트웨어융합대학 행정팀(031-400-1004/jnr0115@hanyang.ac.kr)', '2023-06-04 19:20:12');
INSERT INTO `gonggao` (`id`, `title`, `content`, `created_at`) VALUES (7, '[컴퓨터학부] 2023학년도 신입생 학사 안내 자료 (2.28 업데이트-추가합격대상안내)', '2.28 업데이트 추가합격대상자 및 추가수강신청 관련 안내<br>\r\n- 수강신청은 3/8~3/9 사이에 여석에 대하여 진행<br>\r\n- 프로그래밍기초 수업 희망시 반드시 첫 수업때 출석 바람<br>\r\n- 일반물리학1, 미분적분학1 등은 타 단과대에서도 개설되므로 타 단과대 수업 수강신청 가능(타학과 이수제한 해제 여부는 수강신청 페이지 확인 또는 해당 단과대에 문의바랍니다.)<br>\r\n안녕하세요, 소프트웨어융합대학 행정팀입니다.<br>\r\n2023학년도 신입생 학사 안내 자료를 다음과 같이 제공하오니, 컴퓨터학부 신입생 여러분께서는 아래 내용을 확인하여 주시기 바랍니다.<br>\r\n1. [학사팀] 2023학년도 ERICA 캠퍼스 가이드북 및 학사 안내<br>\r\n-  e-book 링크 : https://book.hanyang.ac.kr/Viewer/2023ericaguidebook<br>\r\n- 신입생 학사 안내 : http://ehaksa.hanyang.ac.kr/surl/RUDB<br>\r\n2. [소프트웨어융합대학] 2023학년도 컴퓨터학부 신입생 학사안내<br>\r\n- 내용 : 학부별 상세 학사 안내 (수강신청, 개설강좌, 졸업요건 및 필수과목, 홈페이지 안내)<br>\r\n- 첨부파일1에서 확인 가능<br>\r\n3. [소프트웨어융합대학] 2023-1학기 컴퓨터학부 1학년 시간표 (학부개설과목 기준) → 첨부파일2 참고<br>\r\n4. 학생증 신청 공지사항(클릭)', '2023-06-04 19:27:55');
INSERT INTO `gonggao` (`id`, `title`, `content`, `created_at`) VALUES (8, '[컴퓨터학부] ★2023-1학기 컴퓨터학부 수강신청 이수제한, 증원 등★(03.08 업데이트)', '향후 과목 관련 안내사항은 본 게시물에 지속 업데이트 될 예정이니 수강신청전에 필히 확인해주시기 바랍니다.<br>\r\n증원예정된 과목은 해당 리스트에 추가되며, 이 외에는 예정된 바가 없는것이므로 행정팀으로 문의하셔도 다른 답변을 드릴 수 없습니다.<br>\r\n개강 후 전체학년 수강신청 기간 : 3/8(수) 17:00~24:00, 3/9(목) 11:00~24:00<br>\r\n◆ 증원 과목<br>\r\n  - 컴퓨터비전(23992/홍규연) : 4명 증원<br>\r\n  - 컴퓨터네트워크(23943, 24328) : 각 15명씩 증원<br>\r\n◆ 1학년 과목 수강신청 (IC-PBL과비전설계 제외)<br>\r\n - 2~4학년 : 3/8(수) 17:30 부터 신청 가능. (17:00~17:30는 1학년 학생들만 신청 가능함)<br> \r\n◆ 선형대수 관련<br>\r\n - 선형대수(25219/컴퓨터학부) 금 16:00~19:00 : 60명 신규 개설<br>\r\n◆ 타학과 이수제한<br>\r\n   - 컴퓨터학부 주전공/다전공 외 타학과 이수제한 : 디지탈논리설계, 자료구조론(25020), 가상및증강현실프로그래밍(ICT융합학부, 인공지능학과는 가능), 딥러닝, 소프트웨어공학, 프로그래밍기초, 데이터사이언스, <br>\r\n 웬만한 문의사항은 아래 안내문에 다 기재되어 있으므로 해당 내용을 꼼꼼히 확인해주시기 바랍니다.<br>\r\n*컴퓨터학부 수강신청 안내문: http://computing.hanyang.ac.kr/open/deptNotice.php?ptype=view&idx=3012&page=&code=deptNotice<br>', '2023-06-04 19:29:58');
INSERT INTO `gonggao` (`id`, `title`, `content`, `created_at`) VALUES (9, '[컴퓨터학부] 2023-1학기 컴퓨터학부 수강신청 안내문 & 유의사항', '안녕하세요, 소프트웨어융합대학 행정팀입니다.<br>\r\n재학생들의 편의를 위하여, 컴퓨터학부 수강신청 안내문을 첨부하오니 확인 바랍니다. 자주하는 질문들 대부분이 포함되어 있으니 해당 첨부파일 및 게시글을 꼼꼼히 확인하여 주시기 바랍니다.<br>\r\n◆ 컴퓨터학부 증원, 이수제한 등 과목 관련 공지(2023.02.07 업데이트)<br>\r\nhttp://computing.hanyang.ac.kr/open/deptNotice.php?ptype=view&idx=3024&page=&code=deptNotice<br>\r\n◆ 2023-1학기 컴퓨터학부 수강신청 안내 & 유의사항<br>\r\n- 주전공생(일반 컴퓨터학부생) - 1번 첨부 확인<br>\r\n- 다전공생(제2전공, 제3전공, 부전공) - 2번 첨부 확인<br>\r\n◆ 본문 링크 모음 (필독)<br>\r\n  - 학사팀 2023-1 수강신청 안내문 : https://portal.hanyang.ac.kr/sugang/annae/202310Y0000316.html<br>\r\n  - 학사팀 다중전공 안내문 : http://https://ehaksa.hanyang.ac.kr/multi-part<br>\r\n  - 소프트웨어학부 편제명 변경 및 학부제 통합 : https://drive.google.com/file/d/1AFJ2Zcs1P_6ygJdtAPs4F89FVjaUzkjZ/view?usp=share_link<br>\r\n - 수강신청관련 과목 변경사항, 이수제한/ 증원 등 안내문 : 안내사항 있을 시 업로드 예정<br>\r\n* 수강 신청 후, \"포탈-졸업사정조회\" 통해 어느 이수구분으로 학점이 들어가는지 확인 필수 + 본인 졸업요건 확인 필수', '2023-06-04 19:44:03');
COMMIT;

-- ----------------------------
-- Table structure for luntan
-- ----------------------------
DROP TABLE IF EXISTS `luntan`;
CREATE TABLE `luntan` (
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of luntan
-- ----------------------------
BEGIN;
INSERT INTO `luntan` (`username`, `time`, `content`, `title`, `id`) VALUES ('hao', '2023-06-07 15:49:31', '언제 어디서 보는거죠...<br>\r\n타과라 물어볼 친구가 없움..', '전기에너지공학 기말', 7);
INSERT INTO `luntan` (`username`, `time`, `content`, `title`, `id`) VALUES ('John Smith', '2023-06-07 16:09:46', 'I have taken a lot of professional courses....please', 'How should I organize my time for classes and assignments?', 8);
INSERT INTO `luntan` (`username`, `time`, `content`, `title`, `id`) VALUES ('syh', '2023-06-07 16:12:04', '컴퓨터학부 신입생', '전공과목은 어떻게 선택하나요?', 9);
INSERT INTO `luntan` (`username`, `time`, `content`, `title`, `id`) VALUES ('SHIYUHANG', '2023-06-07 16:14:20', '해를 거듭할수록 창ㄹ이 되가는구나<br>\r\n이젠 하다하다 타코야기라니..<br>\r\n치킨 주던 시절은 어디갔나', '과기대 야식사업', 10);
COMMIT;

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `user_id` (`user_id`) USING BTREE,
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of posts
-- ----------------------------
BEGIN;
INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `created_at`) VALUES (1, 1, 'hello', 'welcome to HYU', '2023-05-21 15:52:02');
INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `created_at`) VALUES (2, 1, 'hello', 'welcome to HYU', '2023-05-21 15:53:05');
INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `created_at`) VALUES (3, 1, '2424', 'yfyf、', '2023-05-21 18:48:54');
COMMIT;

-- ----------------------------
-- Table structure for tips
-- ----------------------------
DROP TABLE IF EXISTS `tips`;
CREATE TABLE `tips` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tips
-- ----------------------------
BEGIN;
INSERT INTO `tips` (`id`, `content`, `username`) VALUES (1, '손을 자주 씻으세요. 손은 많은 세균과 바이러스가 존재하는 곳에서 가장 먼저 노출되는 부위입니다. 깨끗한 손으로 건강을 지키세요.', 'syh');
INSERT INTO `tips` (`id`, `content`, `username`) VALUES (2, '햇볕에 오래 노출되지 않도록 자외선 차단제를 사용하세요. 자외선은 피부에 손상을 줄 수 있으므로 외출 시 자외선 차단제를 바르는 것이 좋습니다.', 'syh');
INSERT INTO `tips` (`id`, `content`, `username`) VALUES (3, '정기적으로 물과 식물을 물어주세요. 물은 우리 생활에 필수적인 요소이며, 식물들도 물을 받아야 성장할 수 있습니다.', 'syh');
INSERT INTO `tips` (`id`, `content`, `username`) VALUES (4, '운동을 꾸준히 하세요. 몸을 움직이는 것은 건강을 유지하는 데 도움이 됩니다. 산책, 조깅, 요가 등 다양한 운동 방법을 즐겨보세요.', 'syh');
INSERT INTO `tips` (`id`, `content`, `username`) VALUES (5, '충분한 수면을 취하세요. 적절한 수면은 건강과 기분을 개선해줍니다. 규칙적인 수면 패턴을 유지하고 편안한 환경에서 잠을 자도록 노력하세요.', 'syh');
INSERT INTO `tips` (`id`, `content`, `username`) VALUES (6, '음식물 쓰레기를 재활용하세요. 환경 보호에 동참하기 위해 음식물 쓰레기를 재활용하거나 컴포스트로 변환하세요.', 'syh');
INSERT INTO `tips` (`id`, `content`, `username`) VALUES (7, '스트레스를 관리하세요. 스트레스는 건강과 기분에 영향을 줄 수 있습니다. 휴식을 취하고 힐링하는 활동을 찾아 스트레스를 해소하세요.', 'syh');
INSERT INTO `tips` (`id`, `content`, `username`) VALUES (8, '야채와 과일을 다양하게 섭취하세요. 영양소가 풍부한 야채와 과일은 건강에 도움을 줍니다. 색상 다양성을 고려하여 식단에 포함시키세요.', 'syh');
INSERT INTO `tips` (`id`, `content`, `username`) VALUES (9, '화재 위험을 예방하세요. 가정에서 화재 위험을 줄이기 위해 전기용품 사용 시 안전한 사용법을 지키고, 촛불을 사용할 때 주의하세요.', 'syh');
INSERT INTO `tips` (`id`, `content`, `username`) VALUES (10, '친구나 가족과 함께 시간을 보내세요. 사랑하는 사람들과 함께하는 시간은 행복을 나누고 기억을 만들어줍니다. 소중한 사람들과 소통하세요.', 'syh');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `permission` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gptusage` int NOT NULL DEFAULT '20',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `username`, `password`, `permission`, `image`, `gptusage`) VALUES (1, '123', '$2y$10$vOf7nllK7d9CnJRsFjkRU.TvKr2MUd1hHAwll0R.fNsjzTeeG9tnW', '0', NULL, 0);
INSERT INTO `users` (`id`, `username`, `password`, `permission`, `image`, `gptusage`) VALUES (8, 'syh', '123', '3', '8.jpg', 50);
INSERT INTO `users` (`id`, `username`, `password`, `permission`, `image`, `gptusage`) VALUES (9, 'SHIYUHANG', '123', '0', '9.jpg', 20);
INSERT INTO `users` (`id`, `username`, `password`, `permission`, `image`, `gptusage`) VALUES (10, '1234', '1234', '0', '10.jpg', 20);
INSERT INTO `users` (`id`, `username`, `password`, `permission`, `image`, `gptusage`) VALUES (11, 'root', 'root', '0', NULL, 20);
INSERT INTO `users` (`id`, `username`, `password`, `permission`, `image`, `gptusage`) VALUES (12, 'ztw', '123', '2', '12.jpg', 30);
INSERT INTO `users` (`id`, `username`, `password`, `permission`, `image`, `gptusage`) VALUES (13, 'hao', 'hao', '0', NULL, 20);
INSERT INTO `users` (`id`, `username`, `password`, `permission`, `image`, `gptusage`) VALUES (14, 'John Smith', '123', '0', NULL, 20);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

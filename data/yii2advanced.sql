/*
Navicat MySQL Data Transfer

Source Server         : 1111
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : yii2advanced

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-05-30 23:37:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `account`
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`aid`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of account
-- ----------------------------
INSERT INTO `account` VALUES ('1', 'root', 'rootroot');
INSERT INTO `account` VALUES ('16', 'user3', '333333');
INSERT INTO `account` VALUES ('18', 'user2', '222222');
INSERT INTO `account` VALUES ('19', 'user4', '444444');
INSERT INTO `account` VALUES ('20', '小明', '123456');
INSERT INTO `account` VALUES ('21', 'user1', '111111');

-- ----------------------------
-- Table structure for `back_account`
-- ----------------------------
DROP TABLE IF EXISTS `back_account`;
CREATE TABLE `back_account` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`aid`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of back_account
-- ----------------------------
INSERT INTO `back_account` VALUES ('1', 'admin1', '111111');
INSERT INTO `back_account` VALUES ('2', 'admin2', '123456');
INSERT INTO `back_account` VALUES ('3', '小明', '123456');
INSERT INTO `back_account` VALUES ('4', '1', '2');

-- ----------------------------
-- Table structure for `feeds`
-- ----------------------------
DROP TABLE IF EXISTS `feeds`;
CREATE TABLE `feeds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL COMMENT '用户名',
  `content` text NOT NULL COMMENT '留言内容',
  `created_at` int(11) NOT NULL COMMENT '留言时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of feeds
-- ----------------------------
INSERT INTO `feeds` VALUES ('1', 'user1', 'hello world!', '1676202759');
INSERT INTO `feeds` VALUES ('2', 'user2', 'HELLO\r\nWORLD\r\n!!!', '1676203050');
INSERT INTO `feeds` VALUES ('3', '小明', '“允公允能，日新月异”的校训，表达了南开人的价值取向和精神品质。', '1676203617');
INSERT INTO `feeds` VALUES ('4', '小明', '你好？世界！', '1676206949');
INSERT INTO `feeds` VALUES ('5', '小明', '你好\r\n世界\r\n世界\r\n你好', '1676207046');
INSERT INTO `feeds` VALUES ('6', '小明', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', '1676207134');
INSERT INTO `feeds` VALUES ('7', 'root', 'wwwwwwwww', '1676207321');
INSERT INTO `feeds` VALUES ('8', '小明', 'sadfgawfsd', '1676207450');
INSERT INTO `feeds` VALUES ('9', '小明', 'lllllllll', '1676207637');
INSERT INTO `feeds` VALUES ('10', '小明', 'oooooooooooo', '1676207790');
INSERT INTO `feeds` VALUES ('11', '小明', 'yyyyyyyyyyyy', '1676207799');
INSERT INTO `feeds` VALUES ('12', 'user1', '你好，世界！', '1676303671');

-- ----------------------------
-- Table structure for `messageshow`
-- ----------------------------
DROP TABLE IF EXISTS `messageshow`;
CREATE TABLE `messageshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `stu_id` varchar(50) DEFAULT NULL,
  `major` varchar(50) DEFAULT NULL,
  `per_message` varchar(500) DEFAULT NULL,
  `per_part` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of messageshow
-- ----------------------------
INSERT INTO `messageshow` VALUES ('1', '田翔宇', '2011748', '计算机科学与技术', '当代苦逼计算机人，常年奋战在修bug一线，不是在修bug就是在修bug的路上，但是还有头发。本人的愿望是30岁之前不脱发，顺便挣个小钱。', '负责问答板块页面与数据库的设计，承担结项展示PPT的制作。');
INSERT INTO `messageshow` VALUES ('2', '颜欢', '2013459', '信息安全', '本人社恐又佛系....这种留言对我而言真就蛮尴尬的哈哈哈...呵！就酱紫辣', '在团队作业中，我主要负责新闻部分前台后台的界面设计和代码编写，以及团队个人信息的展示以及代码编写~');
INSERT INTO `messageshow` VALUES ('3', '刘嗣旸', '2013458', '计算机科学与技术', '这里是不知道说什么的自我介绍，一个努力学习的程序员酱。\r\n喜欢摇滚、朋克，喜欢音乐（纯欣赏，不会演奏，更不会唱跳rap）\r\n二次元捏\r\n', '前台和后台模板嵌套和主页界面搭建（包括团队文档链接和作业下载）、前台用户账号和后台管理员账号系统、后台用户管理模块');
INSERT INTO `messageshow` VALUES ('4', '施浩南', '2013350', '计算机科学与技术', '该成员没有留言。(（: >)他自己是这样说的）', '留言板模块相关功能');

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1675769535');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1675769540');
INSERT INTO `migration` VALUES ('m190124_110200_add_verification_token_column_to_user_table', '1675769541');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT '',
  `content` varchar(500) DEFAULT '',
  `date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('20', '我校获批2022年度天津市大学生创新创业拔尖项目立项\r\n', '南开新闻网讯（通讯员 李文茹）日前，天津市教育两委公布了2022年度天津市大学生创新创业拔尖项目立项名单，我校生命科学学院项目《“膜”王——细菌纤维素原材料行业开拓者》获批科技方向拔尖项目立项。\r\n\r\n　　“膜王”项目团队由微生物学博士后高歌、博士陈帅、硕士刘童童，保险学硕士金建崇，市场营销系本科生关腾龙等组成，项目从当前细菌纤维素市场痛点切入，开发出同时集优良菌株、新型生产工艺、高性能等优势于一身的新型细菌纤维素原材料产品——“膜王”。该产品的生产和推广将进一步推动国内以细菌纤维素为代表的生物材料产业发展，并积极响应国家的碳达峰政策，符合国家科研和产业布局计划。\r\n\r\n　　据悉，天津市大学生创新创业拔尖项目由市委教育工委、市教委设立，旨在培养和提高大学生创新、创意、创造、创业的意识和能力，助力高校就业创业教育、创业实践活动高质量发展，培育具有天津特色的高质量创新创业成果。本次全市共有13个项目获批立项，2021年度我校获批立项的《奇府——干细胞仿生赋能系统项目》在结项评审中获得优秀。', '2023-02-11 02:07:57');
INSERT INTO `news` VALUES ('21', '我校获批高校思想政治理论课教师研究专项重大课题攻关项目\r\n', '南开新闻网讯 （通讯员 郑杰）近日，教育部办公厅公布了2022年度高校思想政治理论课教师研究专项重大课题攻关项目立项结果，南开大学马克思主义学院付洪教授领衔申报的项目“‘大思政课’实践教学现状及体系构建研究”成功获批。\r\n\r\n　　据了解，该项目属于“教育部哲学社会科学研究重大课题攻关项目”，旨为深入贯彻落实习近平新时代中国特色社会主义思想，贯彻落实习近平总书记关于教育的重要论述，特别是在学校思想政治理论课教师座谈会上的重要讲话精神，大力提升思想政治理论课教师队伍教书育人能力素质，推动新时代思想政治理论课改革创新和高质量发展，不断增强思想政治理论课的思想性、理论性和亲和力、针对性，更好发挥高校思想政治理论课落实立德树人根本任务的关键课程作用。', '2023-02-11 02:09:05');
INSERT INTO `news` VALUES ('22', 'hhh', 'hhhhhhhhhhhhhhhhh', '2023-02-12 01:53:55');
INSERT INTO `news` VALUES ('23', '123', '？？？', '2023-05-09 11:45:30');
INSERT INTO `news` VALUES ('24', '', '', '2023-05-09 12:05:28');

-- ----------------------------
-- Table structure for `newscom`
-- ----------------------------
DROP TABLE IF EXISTS `newscom`;
CREATE TABLE `newscom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `date` varchar(50) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of newscom
-- ----------------------------
INSERT INTO `newscom` VALUES ('46', '有趣\r\n', '2023-02-09 09:31:29');
INSERT INTO `newscom` VALUES ('47', '', '2023-02-09 09:34:56');
INSERT INTO `newscom` VALUES ('48', '', '2023-02-09 09:36:04');
INSERT INTO `newscom` VALUES ('49', '嘎嘎嘎嘎嘎嘎', '2023-02-09 09:38:11');
INSERT INTO `newscom` VALUES ('50', '仅仅就', '2023-02-09 09:40:10');
INSERT INTO `newscom` VALUES ('51', '很有趣哎\r\n', '2023-02-09 09:49:40');
INSERT INTO `newscom` VALUES ('52', '斤斤计较', '2023-02-09 09:51:37');
INSERT INTO `newscom` VALUES ('53', '酷酷酷', '2023-02-09 10:02:03');
INSERT INTO `newscom` VALUES ('54', '111111155555', '2023-02-12 11:01:09');
INSERT INTO `newscom` VALUES ('55', 'OS', '2023-02-12 01:25:29');
INSERT INTO `newscom` VALUES ('56', 'hello，world！这是一条评论', '2023-02-13 04:53:05');

-- ----------------------------
-- Table structure for `newscom2`
-- ----------------------------
DROP TABLE IF EXISTS `newscom2`;
CREATE TABLE `newscom2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of newscom2
-- ----------------------------
INSERT INTO `newscom2` VALUES ('1', '嘎嘎嘎', '2023-02-09 09:57:28');
INSERT INTO `newscom2` VALUES ('2', '嘎嘎嘎', '2023-02-09 09:57:53');
INSERT INTO `newscom2` VALUES ('3', '哈哈哈', '2023-02-09 09:58:09');
INSERT INTO `newscom2` VALUES ('4', '酷酷酷酷酷', '2023-02-09 10:02:11');
INSERT INTO `newscom2` VALUES ('5', '有趣', '2023-02-11 02:28:19');
INSERT INTO `newscom2` VALUES ('6', 'haohaohao', '2023-02-13 02:43:14');

-- ----------------------------
-- Table structure for `newscom3`
-- ----------------------------
DROP TABLE IF EXISTS `newscom3`;
CREATE TABLE `newscom3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(200) DEFAULT '',
  `date` varchar(50) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of newscom3
-- ----------------------------
INSERT INTO `newscom3` VALUES ('1', '学习', '2023-02-11 02:31:31');
INSERT INTO `newscom3` VALUES ('2', '哈哈哈哈哈哈', '2023-02-11 02:31:45');

-- ----------------------------
-- Table structure for `newscom4`
-- ----------------------------
DROP TABLE IF EXISTS `newscom4`;
CREATE TABLE `newscom4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of newscom4
-- ----------------------------
INSERT INTO `newscom4` VALUES ('1', '哈哈哈', '2023-02-11 02:40:14');
INSERT INTO `newscom4` VALUES ('2', 'funny', '2023-02-11 02:40:31');

-- ----------------------------
-- Table structure for `newscom5`
-- ----------------------------
DROP TABLE IF EXISTS `newscom5`;
CREATE TABLE `newscom5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of newscom5
-- ----------------------------
INSERT INTO `newscom5` VALUES ('1', '有趣', '2023-02-11 03:10:46');
INSERT INTO `newscom5` VALUES ('2', 'df', '2023-02-12 02:17:28');

-- ----------------------------
-- Table structure for `newscom6`
-- ----------------------------
DROP TABLE IF EXISTS `newscom6`;
CREATE TABLE `newscom6` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(100) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of newscom6
-- ----------------------------
INSERT INTO `newscom6` VALUES ('1', '哈哈哈·\r\n', '2023-02-11 03:21:33');

-- ----------------------------
-- Table structure for `question`
-- ----------------------------
DROP TABLE IF EXISTS `question`;
CREATE TABLE `question` (
  `ID` int(11) NOT NULL,
  `txt` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of question
-- ----------------------------
INSERT INTO `question` VALUES ('1', 'Directions: For this part, you are allowed 30 minutes to write an essay that begins with the\r\nsentence “Today more and more people begin to realize the pleasures and joys of real-world\r\nsocial interaction.\" You can make comments, cite examples or use your personal experiences to\r\ndevelopyour essay. Youshouldwrite at least 150 morels but no more than 200 words.');
INSERT INTO `question` VALUES ('2', 'A) It enables people to earn more money.');
INSERT INTO `question` VALUES ('3', 'B) It teaches the importance of financing');
INSERT INTO `question` VALUES ('4', 'C) It helps people with budgeting.');
INSERT INTO `question` VALUES ('5', 'D) It introduces a novel way to invest.');
INSERT INTO `question` VALUES ('6', 'A) Many Americans are not satisfied with their income.');

-- ----------------------------
-- Table structure for `stu_account`
-- ----------------------------
DROP TABLE IF EXISTS `stu_account`;
CREATE TABLE `stu_account` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registered` tinyint(1) NOT NULL,
  PRIMARY KEY (`aid`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of stu_account
-- ----------------------------
INSERT INTO `stu_account` VALUES ('1', 'stu1', '111111', '1');
INSERT INTO `stu_account` VALUES ('2', 'xxx', 'hello', '0');

-- ----------------------------
-- Table structure for `tc_account`
-- ----------------------------
DROP TABLE IF EXISTS `tc_account`;
CREATE TABLE `tc_account` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`aid`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of tc_account
-- ----------------------------
INSERT INTO `tc_account` VALUES ('1', 'tc1', '111111');
INSERT INTO `tc_account` VALUES ('2', 'tc2', 'teacher2');
INSERT INTO `tc_account` VALUES ('3', 'tc3', '234');

-- ----------------------------
-- Table structure for `testscore`
-- ----------------------------
DROP TABLE IF EXISTS `testscore`;
CREATE TABLE `testscore` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '考号',
  `student_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '姓名',
  `composition` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '作文保存',
  `choice_score` int(11) NOT NULL COMMENT '客观题得分',
  `compo_score` int(11) NOT NULL COMMENT '作文得分',
  `total_score` int(11) NOT NULL COMMENT '总分',
  `translation` text NOT NULL COMMENT '翻译',
  `trans_score` int(11) NOT NULL COMMENT '翻译得分',
  PRIMARY KEY (`id`,`student_name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=1236 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of testscore
-- ----------------------------
INSERT INTO `testscore` VALUES ('111', '1', '', '95', '0', '0', '', '0');
INSERT INTO `testscore` VALUES ('111', 'hh', 'nihao', '3', '0', '0', '', '0');
INSERT INTO `testscore` VALUES ('1122', 'yx', '', '85', '0', '0', '', '0');
INSERT INTO `testscore` VALUES ('1234', 'yx1', 'hello,this is a test', '110', '0', '0', 'hello,translation', '0');
INSERT INTO `testscore` VALUES ('1235', '', '', '95', '0', '0', '', '0');

-- ----------------------------
-- Table structure for `trueans`
-- ----------------------------
DROP TABLE IF EXISTS `trueans`;
CREATE TABLE `trueans` (
  `ID` int(11) NOT NULL,
  `TF` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of trueans
-- ----------------------------
INSERT INTO `trueans` VALUES ('1', '1');
INSERT INTO `trueans` VALUES ('2', '3');
INSERT INTO `trueans` VALUES ('3', '2');
INSERT INTO `trueans` VALUES ('4', '3');
INSERT INTO `trueans` VALUES ('5', '4');
INSERT INTO `trueans` VALUES ('6', '4');
INSERT INTO `trueans` VALUES ('7', '4');
INSERT INTO `trueans` VALUES ('8', '1');
INSERT INTO `trueans` VALUES ('9', '4');
INSERT INTO `trueans` VALUES ('10', '3');
INSERT INTO `trueans` VALUES ('11', '2');
INSERT INTO `trueans` VALUES ('12', '3');
INSERT INTO `trueans` VALUES ('13', '1');
INSERT INTO `trueans` VALUES ('14', '2');
INSERT INTO `trueans` VALUES ('15', '1');
INSERT INTO `trueans` VALUES ('16', '3');
INSERT INTO `trueans` VALUES ('17', '4');
INSERT INTO `trueans` VALUES ('18', '2');
INSERT INTO `trueans` VALUES ('19', '2');
INSERT INTO `trueans` VALUES ('20', '4');
INSERT INTO `trueans` VALUES ('21', '2');
INSERT INTO `trueans` VALUES ('22', '3');
INSERT INTO `trueans` VALUES ('23', '1');
INSERT INTO `trueans` VALUES ('24', '3');
INSERT INTO `trueans` VALUES ('25', '1');
INSERT INTO `trueans` VALUES ('26', '2');
INSERT INTO `trueans` VALUES ('27', '9');
INSERT INTO `trueans` VALUES ('28', '1');
INSERT INTO `trueans` VALUES ('29', '12');
INSERT INTO `trueans` VALUES ('30', '10');
INSERT INTO `trueans` VALUES ('31', '13');
INSERT INTO `trueans` VALUES ('32', '3');
INSERT INTO `trueans` VALUES ('33', '5');
INSERT INTO `trueans` VALUES ('34', '4');
INSERT INTO `trueans` VALUES ('35', '15');
INSERT INTO `trueans` VALUES ('36', '7');
INSERT INTO `trueans` VALUES ('37', '2');
INSERT INTO `trueans` VALUES ('38', '11');
INSERT INTO `trueans` VALUES ('39', '5');
INSERT INTO `trueans` VALUES ('40', '12');
INSERT INTO `trueans` VALUES ('41', '4');
INSERT INTO `trueans` VALUES ('42', '6');
INSERT INTO `trueans` VALUES ('43', '10');
INSERT INTO `trueans` VALUES ('44', '1');
INSERT INTO `trueans` VALUES ('45', '8');
INSERT INTO `trueans` VALUES ('46', '4');
INSERT INTO `trueans` VALUES ('47', '1');
INSERT INTO `trueans` VALUES ('48', '1');
INSERT INTO `trueans` VALUES ('49', '2');
INSERT INTO `trueans` VALUES ('50', '3');
INSERT INTO `trueans` VALUES ('51', '4');
INSERT INTO `trueans` VALUES ('52', '1');
INSERT INTO `trueans` VALUES ('53', '4');
INSERT INTO `trueans` VALUES ('54', '3');
INSERT INTO `trueans` VALUES ('55', '2');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('4', 'root', 'jT3Rp0BhlIUA7Aww59x2WmfRl1uTZR_T', '$2y$13$Dj4Lyj9s/f6TQw1Ca0Ykm.26JuJ6NZcpxXST7SNKSZniin3mqN6HC', null, 'root@example.com', '10', '1675771247', '1675771247', '8pDz3_lZhZuAM19AW1x2vU98U7aBZSDa_1675771247');

/*
Navicat MySQL Data Transfer

Source Server         : db_1002
Source Server Version : 50703
Source Host           : localhost:3306
Source Database       : chengyu_1001

Target Server Type    : MYSQL
Target Server Version : 50703
File Encoding         : 65001

Date: 2018-11-21 20:51:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `student`
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `student_id` varchar(11) NOT NULL COMMENT '学生ID',
  `student_name` varchar(10) DEFAULT NULL COMMENT '学生姓名',
  `student_nickname` varchar(10) DEFAULT NULL COMMENT '学生昵称',
  `student_password` varchar(32) DEFAULT NULL COMMENT '学生密码',
  `student_sex` varchar(2) DEFAULT NULL COMMENT '学生性别',
  `student_area` varchar(60) DEFAULT NULL COMMENT '学生地区',
  `student_school` varchar(40) DEFAULT NULL COMMENT '学生学校',
  `student_grade` varchar(10) DEFAULT NULL COMMENT '学生班级',
  `student_tel` varchar(11) DEFAULT NULL COMMENT '学生电话',
  `student_rank` varchar(40) DEFAULT NULL COMMENT '学生头衔',
  `student_integral` varchar(10) DEFAULT NULL COMMENT '学生积分',
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------

-- ----------------------------
-- Table structure for `teacher`
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `teacher_id` varchar(11) NOT NULL COMMENT '教师ID',
  `teacher_password` varchar(32) DEFAULT NULL COMMENT '教师密码',
  `teacher_nickname` varchar(10) DEFAULT NULL COMMENT '教师昵称',
  `teacher_sex` varchar(2) DEFAULT NULL COMMENT '教师性别',
  `teacher_area` varchar(60) DEFAULT NULL COMMENT '教师地区',
  `teacher_school` varchar(40) DEFAULT NULL COMMENT '教师学校',
  `teacher_sub` varchar(20) DEFAULT NULL COMMENT '教师科目',
  `teacher_tel` varchar(11) DEFAULT NULL COMMENT '教师电话',
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teacher
-- ----------------------------
INSERT INTO `teacher` VALUES ('123123', '123132', null, null, null, null, null, null);
INSERT INTO `teacher` VALUES ('12312312312', '123123', null, null, null, null, null, null);
INSERT INTO `teacher` VALUES ('12345612345', '123456', null, null, null, null, null, null);
INSERT INTO `teacher` VALUES ('13230480691', '970616', null, null, null, null, null, null);

/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 50533
 Source Host           : localhost
 Source Database       : test

 Target Server Type    : MySQL
 Target Server Version : 50533
 File Encoding         : utf-8

 Date: 12/11/2013 15:09:23 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `members`
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `members`
-- ----------------------------
BEGIN;
INSERT INTO `members` VALUES ('1', 'john', '1234'), ('2', 'unnugi', '1234'), ('3', 'unmida', '1234'), ('4', 'xiaoxiao', '1234'), ('5', 'un', '12'), ('6', 'hanhe', '1234'), ('7', 'yu', '1111'), ('8', 'admin', 'admin');
COMMIT;

-- ----------------------------
--  Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `dates` date NOT NULL,
  `contents` text,
  `hits` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `news`
-- ----------------------------
BEGIN;
INSERT INTO `news` VALUES ('26', 'html', '2013-12-07', 'HyperText Markup Language (HTML) is the main markup language for creating web pages and other information that can be displayed in a web browser.\r\n', '14'), ('30', 'Test', '2013-12-10', 'This is test for Chinese.\r\n&#20013;&#25991;', '9'), ('32', 'Some thing new', '2013-12-11', 'Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation semantics (the look and formatting) of a document written in a markup language. Its most common application is to style web pages written in HTML and XHTML, but the language can also be applied to any kind of XML document, including plain XML, SVG and XUL.', '1');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

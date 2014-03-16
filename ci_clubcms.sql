-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2014-03-16 22:33:40
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ci_clubcms`
--
CREATE DATABASE IF NOT EXISTS `ci_clubcms` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ci_clubcms`;

-- --------------------------------------------------------

--
-- 表的结构 `tb_article`
--

CREATE TABLE IF NOT EXISTS `tb_article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category_id` int(10) NOT NULL DEFAULT '0' COMMENT '文章类别ID',
  `title` varchar(100) DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL,
  `content` text,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发表时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='文章' AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- 表的结构 `tb_carousel`
--

CREATE TABLE IF NOT EXISTS `tb_carousel` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `img_src` varchar(100) DEFAULT NULL,
  `img_alt` varchar(100) DEFAULT NULL,
  `content_h` varchar(100) DEFAULT NULL,
  `content_p` varchar(500) DEFAULT NULL,
  `content_btn` varchar(100) DEFAULT NULL,
  `btn_href` varchar(200) DEFAULT NULL COMMENT '按钮超链接地址',
  `display` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否出现在首页',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='轮播' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `tb_carousel`
--

INSERT INTO `tb_carousel` (`id`, `img_src`, `img_alt`, `content_h`, `content_p`, `content_btn`, `btn_href`, `display`) VALUES
(1, 'slide1.jpg', NULL, 'Example headline.', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Sign up today', NULL, 1),
(2, 'slide2.jpg', NULL, 'Another example headline.', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Learn more', NULL, 1),
(3, 'slide3.jpg', NULL, 'head of content', 'head of contenthead of contenthead of contenthead of contenthead of contenthead of contenthead of content', 'sign it up', NULL, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tb_category`
--

CREATE TABLE IF NOT EXISTS `tb_category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL COMMENT '类别名称',
  `article_num` int(10) NOT NULL DEFAULT '0' COMMENT '文章数',
  `display` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否在首页出现',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='文章类别' AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `tb_category`
--

INSERT INTO `tb_category` (`id`, `name`, `article_num`, `display`) VALUES
(1, '近期通知', 0, 1),
(2, '新闻动态', 0, 1),
(3, '妙手偶得', 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `true_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `password`, `true_name`) VALUES
(1, 'xuyeye', '123456', '徐业业');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

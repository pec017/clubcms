-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2014-02-23 15:22:46
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='文章' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `tb_article`
--

INSERT INTO `tb_article` (`id`, `category_id`, `title`, `author`, `content`, `datetime`) VALUES
(1, 1, 'one of 近期通知', 'aaa', 'aaaaaa\r\naaaaaa\r\nbbbbbb\r\ncccccc', '2014-02-17 18:58:05'),
(2, 1, 'two of 近期通知', 'bbb', 'bbbccc\r\ndddfff', '2014-02-17 18:58:05'),
(3, 1, '3 近期通知', 'ssss', 'sadasdsadas\r\n\r\nsdasdasd\r\nsadasd\r\n\r\nsadasdas\r\n', '2014-02-19 19:26:32'),
(4, 1, '4 近期通知仅仅急急急急急急急急急急急急近期', 'asdad', 'sdasdasdas\r\ndsfsdfsdfsdfsd\r\n\r\n\r\n\r\nfdsfsd\r\n\r\ndsfds\r\n\r\n', '2014-02-19 19:26:32'),
(5, 1, '5 近期通知 都是广泛士大夫士大夫电风扇反对大师傅似的士大夫士大夫', '二恶烷', '大师傅士大夫士大夫\r\n\r\n\r\n是的方式方法\r\n\r\n\r\n对手犯规得分的', '2014-02-19 19:27:38'),
(6, 1, '6 近期通知 撒大苏打似的', '是多少啊', '的萨芬士大夫士大夫\r\n\r\n但是发射点发射点发射点\r\n\r\n\r\n大师傅士大夫士大夫\r\n\r\n是的方式方法', '2014-02-19 19:27:38'),
(7, 2, 'wsdasdadasd', 'sdasdas', 'saddsadas\r\nsa\r\nda\r\nsd\r\nas\r\nd\r\na\r\nd\r\nsd\r\nas\r\nd\r\nas\r\nds\r\na\r\nd\r\nasd\r\n\r\na', '2014-02-20 17:55:14'),
(8, 2, 'fdsfsdfsdfdsf', 'dsfdssdfsdf', 'dsfsdfsdfsdfs\r\nsd\r\n\r\nfs\r\ndf\r\nsd\r\nf\r\ns\r\ndf\r\nsd\r\nf\r\nsd\r\n\r\nds', '2014-02-20 17:55:14');

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
  `btn_href` varchar(200) DEFAULT '#' COMMENT '按钮超链接地址',
  `display` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否出现在首页',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='轮播' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `tb_carousel`
--

INSERT INTO `tb_carousel` (`id`, `img_src`, `img_alt`, `content_h`, `content_p`, `content_btn`, `btn_href`, `display`) VALUES
(1, 'slide1.jpg', NULL, 'Example headline.', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Sign up today', '#', 1),
(2, 'slide2.jpg', NULL, 'Another example headline.', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.', 'Learn more', '#', 1),
(3, 'slide3.jpg', NULL, 'head of content', 'head of contenthead of contenthead of contenthead of contenthead of contenthead of contenthead of content', 'sign it up', '#', 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='文章类别' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `tb_category`
--

INSERT INTO `tb_category` (`id`, `name`, `article_num`, `display`) VALUES
(1, '近期通知', 0, 1),
(2, '新闻动态', 0, 1),
(3, '妙手偶得', 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-04-10 18:06:17
-- 服务器版本： 5.7.10-log
-- PHP Version: 5.6.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `art`
--

CREATE TABLE `art` (
  `art_id` int(10) UNSIGNED NOT NULL,
  `cat_id` smallint(5) UNSIGNED DEFAULT '0',
  `user_id` int(10) UNSIGNED DEFAULT '0',
  `nick` varchar(45) DEFAULT '',
  `title` varchar(45) DEFAULT '',
  `content` text,
  `pic` varchar(50) NOT NULL DEFAULT '',
  `thumb` varchar(50) NOT NULL DEFAULT '',
  `big` varchar(50) NOT NULL DEFAULT '',
  `pubtime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `lastup` int(10) UNSIGNED DEFAULT '0',
  `comm` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `arttag` varchar(30) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章表';

--
-- 转存表中的数据 `art`
--

INSERT INTO `art` (`art_id`, `cat_id`, `user_id`, `nick`, `title`, `content`, `pic`, `thumb`, `big`, `pubtime`, `lastup`, `comm`, `arttag`) VALUES
(66, 1, 0, '', '123we', 'qwe', '', '', '', 1491740380, 0, 0, ''),
(64, 1, 0, '', '11111111111', '111111111111', '', '', '', 1491740148, 0, 0, ''),
(65, 1, 0, '', '111111111112', '111111111111', '', '', '', 1491740215, 0, 0, ''),
(67, 1, 0, '', '11111112333333', '13', '/upload/2017/04/09/QZjseO.gif', '/upload/2017/04/09/nmuWpe.png', '', 1491745258, 0, 0, ''),
(62, 2, 0, '', '1231231231232123', '3', '', '', '', 1491738549, 0, 0, ''),
(54, 1, 0, '', '1234', '123                ', '', '', '', 1491575204, 1491717023, 3, ''),
(56, 1, 0, '', '阿萨德', '阿萨德', '', '', '', 1491665207, 0, 0, ''),
(53, 26, 0, '', '1', '1', '', '', '', 1491575196, 1491717162, 0, ''),
(63, 1, 0, '', '3333', '3333', '', '', '', 1491739370, 0, 0, ''),
(57, 1, 0, '', '阿萨德1', '阿萨德', '', '', '', 1491709696, 0, 0, ''),
(55, 2, 0, '', '让他', '二', '', '', '', 1491664625, 0, 0, ''),
(50, 2, 0, '', '今天的空气', '空气质量优', '', '', '', 12345678, 0, 1, ''),
(61, 1, 0, '', '123123123123123', '123123123123', '', '', '', 1491738355, 0, 0, ''),
(68, 1, 0, '', '1233123', '123', '/upload/2017/04/09/6RnhHB.jpg', '/upload/2017/04/09/zcRtrH.png', '', 1491745399, 0, 0, ''),
(69, 1, 0, '', '2任务二', '2', '/upload/2017/04/09/dwKiYt.jpg', '/upload/2017/04/09/p6eKSd.png', '/upload/2017/04/09/xrvcwr.png', 1491745702, 0, 0, ''),
(70, 1, 0, '', '234', '请问饿', '/upload/2017/04/09/cu5w9D.jpg', '/upload/2017/04/09/Hxdkd8.png', '/upload/2017/04/09/bABLhH.png', 1491745846, 0, 0, ''),
(71, 1, 0, '', '5', '人', '/upload/2017/04/09/am71py.jpg', '/upload/2017/04/09/R8isZa.png', '/upload/2017/04/09/QoHfLn.png', 1491745874, 0, 7, '');

-- --------------------------------------------------------

--
-- 表的结构 `cat`
--

CREATE TABLE `cat` (
  `cat_id` int(10) UNSIGNED NOT NULL,
  `catname` char(30) NOT NULL DEFAULT '',
  `num` smallint(5) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `cat`
--

INSERT INTO `cat` (`cat_id`, `catname`, `num`) VALUES
(1, '人生', 13),
(2, '哲学', 3),
(26, '让他', 1),
(15, '请问', 0),
(25, '爱疯', 0),
(17, '我们', 0),
(18, '水电', 0),
(22, 'asd', 0),
(24, '测试', 0);

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `art_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `nick` varchar(45) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `content` varchar(1000) NOT NULL DEFAULT '',
  `ip` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `pubtime` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `pic` varchar(10) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`comment_id`, `art_id`, `user_id`, `nick`, `email`, `content`, `ip`, `pubtime`, `pic`) VALUES
(63, 71, 0, '4', '3', '1', 1863200730, 1491814318, '444.png'),
(62, 71, 0, '3', '', '2', 0, 1491814311, '555.png'),
(61, 71, 0, '1', '', '1', 0, 1491814306, '555.png'),
(58, 71, 0, '3453', '23c', '3', 0, 1491813518, '555.png'),
(59, 71, 0, '2', '3', '1', 0, 1491813524, '111.png'),
(60, 71, 0, 'aa', 'a', '咋样', 0, 1491813544, '222.png');

-- --------------------------------------------------------

--
-- 表的结构 `ipip`
--

CREATE TABLE `ipip` (
  `name` varchar(20) NOT NULL,
  `ip` int(10) NOT NULL,
  `time` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ipip`
--

INSERT INTO `ipip` (`name`, `ip`, `time`) VALUES
('是', 2, 3),
('浮动', 0, 1491791374),
('水电费', 0, 1491803036);

-- --------------------------------------------------------

--
-- 表的结构 `tag`
--

CREATE TABLE `tag` (
  `tag_id` int(10) UNSIGNED NOT NULL,
  `art_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tag` char(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tag`
--

INSERT INTO `tag` (`tag_id`, `art_id`, `tag`) VALUES
(1, 22, 'http'),
(2, 22, 'mysql'),
(3, 22, 'php'),
(12, 26, '娃儿'),
(10, 23, '测试1'),
(11, 23, '测试212'),
(13, 27, '士大夫'),
(14, 28, '士大夫'),
(15, 29, '士大夫'),
(16, 30, '士大夫'),
(17, 56, '是');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` char(20) NOT NULL DEFAULT '',
  `nick` char(20) NOT NULL DEFAULT '',
  `email` char(30) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `lastlogin` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `salt` char(8) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `name`, `nick`, `email`, `password`, `lastlogin`, `salt`) VALUES
(1, 'huihui123', '', '', '98edcaa4e53d6f0d217f775f53dce918', 0, 'fhu49djk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`art_id`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`tag_id`),
  ADD KEY `at` (`art_id`,`tag`),
  ADD KEY `ta` (`tag`,`art_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `art`
--
ALTER TABLE `art`
  MODIFY `art_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- 使用表AUTO_INCREMENT `cat`
--
ALTER TABLE `cat`
  MODIFY `cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- 使用表AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- 使用表AUTO_INCREMENT `tag`
--
ALTER TABLE `tag`
  MODIFY `tag_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-05-26 17:43:28
-- 服务器版本： 5.7.10-log
-- PHP Version: 5.6.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ti`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `admin_id` smallint(5) UNSIGNED NOT NULL COMMENT '管理员编号',
  `admin_name` varchar(30) NOT NULL DEFAULT '' COMMENT '管理员名称',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '管理员密码',
  `email` varchar(50) NOT NULL DEFAULT '' COMMENT '管理员邮箱',
  `add_time` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '添加时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `password`, `email`, `add_time`) VALUES
(1, 'admina', '21232f297a57a5a743894a0e4a801fc3', 'admin@itcast.cn', 0),
(2, 'test', 'test', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `ti`
--

CREATE TABLE `ti` (
  `ti_id` int(10) NOT NULL,
  `ti_content` varchar(1000) NOT NULL,
  `ti_daan` varchar(100) NOT NULL,
  `is_show` int(5) NOT NULL,
  `ti_xueke` int(5) NOT NULL,
  `zhendaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ti`
--

INSERT INTO `ti` (`ti_id`, `ti_content`, `ti_daan`, `is_show`, `ti_xueke`, `zhendaan`) VALUES
(5, '1+2等于几', '1,2,3,4', 1, 1, 3),
(6, '2+1等于几', '1,2,3,4', 1, 1, 3),
(7, '2+2等于几', '1,2,3,4', 1, 1, 4),
(8, '1+3等于几', '5,2,3,4', 1, 1, 4),
(9, '2+3等于几', '5,2,3,4', 1, 1, 1),
(10, '2+4等于几', '5,6,3,4', 1, 1, 2),
(38, '1+3等于几', '5,2,3,4', 1, 1, 4),
(39, '2+3等于几', '5,2,3,4', 1, 1, 1),
(40, '2+4等于几', '5,6,3,4', 1, 1, 2),
(42, '1+1等于几', '1,2,3,4', 1, 1, 2),
(43, '2+1等于几', '1,2,3,4', 1, 1, 3),
(44, '2+2等于几', '1,2,3,4', 1, 1, 4),
(45, '1+3等于几', '5,2,3,4', 1, 1, 4),
(46, '2+3等于几', '5,2,3,4', 1, 1, 1),
(47, '2+4等于几', '5,6,3,4', 1, 1, 2),
(48, '1+3等于几', '5,2,3,4', 1, 1, 4),
(49, '2+3等于几', '5,2,3,4', 1, 1, 1),
(50, '2+4等于几', '5,6,3,4', 1, 1, 2),
(51, '2+2等于几', '1,2,3,4', 1, 1, 4),
(52, '1+3等于几', '5,2,3,4', 1, 1, 4),
(53, '1+3等于几', '5,2,3,4', 1, 1, 4),
(54, '2+2等于几', '1,2,3,4', 1, 1, 4),
(55, '1+3等于几', '5,2,3,4', 1, 1, 4),
(56, '1+3等于几', '5,2,3,4', 1, 1, 4),
(57, '1+2等于几', '1,2,3,4', 1, 1, 3),
(58, '2+1等于几', '1,2,3,4', 1, 1, 3),
(59, '1+2等于几', '1,2,3,4', 1, 1, 3),
(60, '2+1等于几', '1,2,3,4', 1, 1, 3),
(61, '1+1等于几', '1,2,3,4', 1, 1, 2),
(62, '2+4等于几', '5,6,3,4', 1, 1, 2),
(63, '2+4等于几', '5,6,3,4', 1, 1, 2),
(64, '1+1等于几', '1,2,3,4', 1, 1, 2),
(65, '2+4等于几', '5,6,3,4', 1, 1, 2),
(66, '2+4等于几', '5,6,3,4', 1, 1, 2),
(67, '2+3等于几', '5,2,3,4', 1, 1, 1),
(68, '2+3等于几', '5,2,3,4', 1, 1, 1),
(69, '2+3等于几', '5,2,3,4', 1, 1, 1),
(70, '2+3等于几', '5,2,3,4', 1, 1, 1),
(71, '1+2等于几', '1,2,3,4', 1, 1, 3);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(10) NOT NULL COMMENT '用户名',
  `possword` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `possword`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ti`
--
ALTER TABLE `ti`
  ADD PRIMARY KEY (`ti_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '管理员编号', AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `ti`
--
ALTER TABLE `ti`
  MODIFY `ti_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

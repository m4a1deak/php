-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018-04-10 10:25:57
-- 服务器版本： 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dm2018_opencode`
--

-- --------------------------------------------------------

--
-- 表的结构 `zzz_album`
--

CREATE TABLE `zzz_album` (
  `id` int(11) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `pidname` varchar(100) NOT NULL,
  `pbh` varchar(50) NOT NULL,
  `lang` varchar(50) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `cssname` varchar(100) DEFAULT NULL,
  `kvsm` varchar(50) DEFAULT NULL,
  `pos` int(3) DEFAULT '50',
  `cus_columns` int(3) NOT NULL DEFAULT '1',
  `sta_visible` char(1) NOT NULL DEFAULT 'y',
  `size` int(5) DEFAULT NULL,
  `effect` varchar(100) DEFAULT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'block',
  `dateedit` datetime DEFAULT NULL,
  `desp` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_album`
--

INSERT INTO `zzz_album` (`id`, `pid`, `pidname`, `pbh`, `lang`, `title`, `cssname`, `kvsm`, `pos`, `cus_columns`, `sta_visible`, `size`, `effect`, `type`, `dateedit`, `desp`) VALUES
(100, 'block', 'album20180125_1910233273', 'bh2010079002demososo', 'cn', 'test', '', NULL, 50, 1, 'y', NULL, 'album_jssor.php', 'block', NULL, NULL),
(120, 'album20180126_1645426715', '', 'bh2010079002demososo', 'cn', NULL, NULL, '20180126_164549_4734.png', 50, 1, 'y', 63521, NULL, 'subimg', NULL, NULL),
(149, 'album20180125_1910233273', '', 'bh2010079002demososo', 'cn', NULL, NULL, '20180306_181930_6379.jpg', 50, 1, 'y', 18003, NULL, 'subimg', NULL, NULL),
(148, 'album20180125_1910233273', '', 'bh2010079002demososo', 'cn', NULL, NULL, '20180306_181930_4079.jpg', 50, 1, 'y', 15059, NULL, 'subimg', NULL, NULL),
(119, 'node20150806_0929404264', 'album20180126_1645426715', 'bh2010079002demososo', 'cn', 'sdfg', '', NULL, 50, 1, 'y', NULL, 'album_fancybox.php', 'node', NULL, NULL),
(121, 'album20180126_1645426715', '', 'bh2010079002demososo', 'cn', NULL, NULL, '20180126_164549_3501.jpg', 50, 1, 'y', 30662, NULL, 'subimg', NULL, NULL),
(144, 'node20160406_0930259685', 'album20180305_1554191087', 'bh2010079002demososo', 'cn', 'test', '', NULL, 50, 1, 'y', NULL, 'album.php', 'node', NULL, NULL),
(150, 'album20180125_1910233273', '', 'bh2010079002demososo', 'cn', NULL, NULL, '20180306_181930_7720.jpg', 50, 1, 'y', 14787, NULL, 'subimg', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `zzz_alias`
--

CREATE TABLE `zzz_alias` (
  `id` int(11) NOT NULL,
  `pid` varchar(50) NOT NULL DEFAULT '0',
  `pbh` varchar(50) NOT NULL DEFAULT 'n',
  `lang` varchar(50) NOT NULL,
  `pos` int(3) NOT NULL DEFAULT '50' COMMENT 'must need',
  `name` varchar(225) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_alias`
--

INSERT INTO `zzz_alias` (`id`, `pid`, `pbh`, `lang`, `pos`, `name`, `type`) VALUES
(2, 'cate20150805_1125344029', 'bh2010079002demososo', 'cn', 50, 'products', 'cate'),
(3, 'cate20150805_1133251007', 'bh2010079002demososo', 'cn', 50, 'news', 'cate'),
(54, 'cate20150805_1134397929', 'bh2010079002demososo', 'cn', 50, 'case', 'cate'),
(5, 'page20150805_1138522811', 'bh2010079002demososo', 'cn', 50, 'about', 'page'),
(6, 'page20150805_1143268522', 'bh2010079002demososo', 'cn', 50, 'team', 'page'),
(7, 'page20150806_0435579851', 'bh2010079002demososo', 'cn', 50, 'jobs', 'page'),
(10, 'page20150806_0436437668', 'bh2010079002demososo', 'cn', 50, 'contact', 'page'),
(140, 'csub20150805_1127279495', 'bh2010079002demososo', 'cn', 50, 'saffddddd', 'cate'),
(23, 'page20151015_0855506815', 'bh2010079002demososo', 'cn', 50, 'friendlinks', 'page'),
(30, 'cate20160120_0907499941', 'bh2010079002demososo', 'cn', 50, 'joblist', 'cate'),
(31, 'cate20160120_0933312300', 'bh2010079002demososo', 'cn', 50, 'download', 'cate'),
(32, 'page20160307_1115284044', 'bh2010079002demososo', 'cn', 50, 'index', 'page'),
(37, 'cate20160410_0658287350', 'bh2010079002demososo', 'cn', 50, 'sp', 'cate'),
(45, 'cate20160707_0437114782', 'bh2010079002demososo', 'cn', 50, 'cate20160707_0437114782', 'cate'),
(95, 'csub20150805_1127356368', 'bh2010079002demososo', 'cn', 50, 'huawei', 'cate'),
(142, 'node20150806_0900535131', 'bh2010079002demososo', 'cn', 50, 'sdvvdd', 'node');

-- --------------------------------------------------------

--
-- 表的结构 `zzz_block`
--

CREATE TABLE `zzz_block` (
  `id` int(11) NOT NULL,
  `pbh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pid` varchar(66) CHARACTER SET utf8 DEFAULT NULL COMMENT 'is type',
  `pidstylebh` varchar(80) CHARACTER SET utf8 DEFAULT 'n',
  `pidname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pidcate` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `pidfolder` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT 'base' COMMENT 'base or vip, no use...',
  `pidcolumn` varchar(80) CHARACTER SET utf8 DEFAULT 'none' COMMENT 'column pidname',
  `typecolumn` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT 'block' COMMENT 'column or block ',
  `lang` varchar(50) CHARACTER SET utf8 NOT NULL,
  `name` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `namefront` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `cssname` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `titlestyle` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `titlestylesub` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `pos` int(3) DEFAULT '50',
  `maxline` int(3) DEFAULT '10' COMMENT 'from node of page',
  `kv` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `kvsm` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `linkurl` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `linktitle` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `sta_visible` char(1) CHARACTER SET utf8 DEFAULT 'y',
  `despjj` text CHARACTER SET utf8,
  `desp` text CHARACTER SET utf8,
  `desptext` text CHARACTER SET utf8,
  `template` varchar(100) CHARACTER SET utf8 DEFAULT 'default',
  `templatecur` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `cus_columns` int(2) NOT NULL DEFAULT '3',
  `cus_substrnum` int(3) NOT NULL DEFAULT '100',
  `blockid` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `bgcolor` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `blockimg` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `dateday` char(10) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- 转存表中的数据 `zzz_block`
--

INSERT INTO `zzz_block` (`id`, `pbh`, `pid`, `pidstylebh`, `pidname`, `pidcate`, `pidfolder`, `pidcolumn`, `typecolumn`, `lang`, `name`, `namefront`, `cssname`, `titlestyle`, `titlestylesub`, `pos`, `maxline`, `kv`, `kvsm`, `linkurl`, `linktitle`, `sta_visible`, `despjj`, `desp`, `desptext`, `template`, `templatecur`, `cus_columns`, `cus_substrnum`, `blockid`, `bgcolor`, `blockimg`, `dateday`) VALUES
(833, 'bh2010079002demososo', 'video', 'y', 'vblock20170920_1203376300', NULL, 'base', 'none', 'block', 'cn', 'QQ视频 - default', '', NULL, NULL, NULL, 50, 10, NULL, NULL, NULL, NULL, 'y', NULL, '', NULL, 'default', '', 3, 300, NULL, NULL, NULL, '2017-09-21'),
(85, 'bh2010079002demososo', 'custom', 'style_commonblock', 'vblock20151217_0448227671', 'style20160720_0539115716', 'base', 'none', 'block', 'cn', '公告：DM企业建站系统促销活动 - notice', '公告：DM企业建站系统促销活动', '', '', '', 500, 1, '', '', '', '', 'y', '', '&lt;p&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;span style=&quot;color:#ff0000&quot;&gt;&lt;strong&gt;这是一段弹出来的网站公告内容。当网站第一次打开时，&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;span style=&quot;color:#ff0000&quot;&gt;&lt;strong&gt;也会弹出这个内容。可以在后台修改内容。&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;span style=&quot;color:#ff0000&quot;&gt;&lt;strong&gt;如果不需要自动弹出功能，也可以在后台取消。&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20180315_123721_1520.jpg&quot; style=&quot;height:421px; width:561px&quot; /&gt;&lt;/p&gt;', '', 'notice.tpl.php', '', 3, 300, 'default', '', '', '2017-10-12'),
(719, 'bh2010079002demososo', 'node', 'style_commonblock', 'vblock20170418_1643577213', 'cate20150805_1133251007', 'base', NULL, 'none', 'cn', '新闻 - 先分类后列表 grid_cate', '', 'showimg', '', '', 50, 9, NULL, NULL, '', '', 'y', '', NULL, NULL, 'grid_cate.tpl.php', '', 4, 300, 'grid_cate', '', '', '2017-09-19'),
(229, 'bh2010079002demososo', 'custom', 'style_commonblock', 'vblock20160510_1000376089', 'style20160720_0539115716', 'base', NULL, 'block', 'cn', '404页面，当页面不存在时。 - default', '', '', '', '', 50, 1, '', '', '', '', 'y', '', '&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20160510_100152_4288.jpg&quot; style=&quot;height:267px; width:504px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;strong&gt;对不起，您访问的页面不存在。&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;strong&gt;&lt;a href=&quot;/&quot;&gt;请返回首页 》&lt;/a&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;strong&gt;DM企业建站系统 &lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;www.demososo.com&lt;/a&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '', 'default.tpl.php', '', 3, 300, '', '', '', '2017-09-20'),
(361, 'bh2010079002demososo', 'node', 'style_commonblock', 'vblock20160725_1039239048', 'cate20150805_1125344029', 'base', NULL, 'none', 'cn', '产品效果2 - ceng kuo', '', 'moresm more1', '', '', 33, 8, '20160924_122852_8656.jpg', NULL, '', '', 'y', '', NULL, NULL, 'grid_ceng_kuo.tpl.php', '', 4, 300, 'grid_ceng_kuo', '', '', '2017-09-19'),
(431, 'bh2010079002demososo', 'custom', 'style_commonblock', 'vblock20160921_1144538411', NULL, 'base', NULL, 'block', 'cn', '网站头部 右上角 的一段文字 - default', '', '', '', '', 50, 1, NULL, NULL, '', '', 'y', '', '&lt;p&gt;&lt;span style=&quot;color:#ff0000&quot;&gt;&lt;span style=&quot;font-size:28px&quot;&gt;&lt;strong&gt;021 6666 6666&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;', '', 'defaultnopadmag.tpl.php', '', 3, 300, '', '', '', '2017-09-20'),
(760, 'bh2010079002demososo', 'blockdh', 'style_commonblock', 'vblock20170516_1805542410', 'csub20160708_0508436425', 'base', NULL, 'none', 'cn', '大家都在说 - block/testimonials', '', '', '', '', 30, 5, NULL, NULL, '', '', 'y', '', NULL, NULL, 'slider_testimonials_topimg.tpl.php', '', 3, 300, 'default', '', '20180206_122841_9565.jpg', '2017-09-21'),
(857, 'bh2010079002demososo', 'custom', 'y', 'vblock20170921_1249103017', NULL, 'base', 'colu20170921_1241399188', 'column', 'cn', ' - default', '', '', '', '', 50, 10, '20170921_124914_8665.jpg', NULL, '', '', 'y', '', '', '', 'default_column', NULL, 3, 300, '', NULL, NULL, '2017-09-21'),
(717, 'bh2010079002demososo', 'video', 'y', 'vblock20170414_1636075709', NULL, 'base', NULL, 'none', 'cn', '本地视频 - default', '视频标题', NULL, NULL, NULL, 50, 1, '', NULL, NULL, NULL, 'y', NULL, '', NULL, 'default', '', 3, 300, 'default', NULL, NULL, '2017-09-20'),
(723, 'bh2010079002demososo', 'node', 'style_commonblock', 'vblock20170419_1529137996', 'cate20150805_1134397929', 'base', NULL, 'none', 'cn', '案例--ceng jia', '', '', '', '', 33, 6, NULL, NULL, '', '', 'y', '', NULL, NULL, 'grid_ceng_jia.tpl.php', '', 3, 0, 'grid_ceng_jia', '', '', '2017-09-20'),
(724, 'bh2010079002demososo', 'node', 'style_commonblock', 'vblock20170419_1529251096', 'cate20160410_0658287350', 'base', NULL, 'none', 'cn', '视频分类 - 图文列表 grid_node  - 带播放按钮', '', 'bgvideo diimg  moresm', '', '', 35, 100, NULL, NULL, '', '', 'y', '', NULL, NULL, 'grid_node.tpl.php', '', 4, 100, 'grid_ceng_arrow', '', '', '2017-09-21'),
(727, 'bh2010079002demososo', 'node', 'style_commonblock', 'vblock20170419_1557044653', 'cate20150805_1133251007', 'base', NULL, 'none', 'cn', '列表 list simple', '最新新闻', '', NULL, NULL, 50, 10, NULL, NULL, '', '', 'y', '', NULL, NULL, 'list_simple.tpl.php', '', 1, 0, 'list_simple', '', '', NULL),
(728, 'bh2010079002demososo', 'node', 'style_commonblock', 'vblock20170419_1557131900', 'cate20150805_1133251007', 'base', NULL, 'none', 'cn', '新闻 - 向上垂直滚动列表', '', 'sliderenable  listcircle', '', '', 30, 12, NULL, NULL, '', '', 'y', '', NULL, NULL, 'node_news_vertical.tpl.php', '', 3, 80, 'list_gd', '', '', '2017-09-19'),
(729, 'bh2010079002demososo', 'blockdh', 'style_commonblock', 'vblock20170419_1630345041', 'csub20160707_0905038793', 'base', NULL, 'none', 'cn', '幻灯片 - 默认效果', '', 'showtitle', '', '', 500, 9, NULL, NULL, '', '', 'y', '', NULL, NULL, 'banner_normal.tpl.php', '', 1, 300, 'slider_bx_content', '', '', '2017-09-19'),
(730, 'bh2010079002demososo', 'blockdh', 'style_commonblock', 'vblock20170419_1639427863', 'csub20160707_0914597182', 'base', NULL, 'none', 'cn', '幻灯片 - 移动端', '', '', '', '', 500, 10, NULL, NULL, '', '', 'y', '', NULL, NULL, 'banner_mobile.tpl.php', '', 1, 300, 'slider_bx_mobile', '', '', '2017-09-19'),
(731, 'bh2010079002demososo', 'blockdh', 'style_commonblock', 'vblock20170419_1705191641', 'csub20160712_0612125031', 'base', NULL, 'none', 'cn', '幻灯片  slider_eislideshow', '', '', NULL, NULL, 500, 10, NULL, NULL, '', '', 'y', '', NULL, NULL, 'banner_eislideshow.tpl.php', '', 3, 300, 'slider_eislideshow', '', '', '2017-09-19'),
(732, 'bh2010079002demososo', 'blockdh', 'style_commonblock', 'vblock20170419_1820571922', 'csub20160708_0508436425', 'base', NULL, 'none', 'cn', '手风琴 accord', '', '', '', '', 50, 10, NULL, NULL, '', '', 'y', '', NULL, NULL, 'accord.tpl.php', '', 1, 300, 'accord', '', '', '2017-09-19'),
(733, 'bh2010079002demososo', 'blockdh', 'style_commonblock', 'vblock20170419_1837016257', 'csub20160708_0511229047', 'base', NULL, 'none', 'cn', '为什么选择我们', '', '', '', '', 35, 8, NULL, NULL, '', '', 'y', '', NULL, NULL, 'slider_whychoose.tpl.php', '', 1, 300, 'default', '', '', '2017-09-19'),
(734, 'bh2010079002demososo', 'blockdh', 'style_commonblock', 'vblock20170419_1841265872', 'csub20160708_0508436425', 'base', NULL, 'none', 'cn', '客户评价-滚动效果', '', 'slickbtn slickarrow2 slickarrow2sm', 'text-align:center;color:red', 'sds', 30, 22, NULL, NULL, '', '', 'y', '', NULL, NULL, 'slider_testimonials.tpl.php', '', 2, 300, 'slider_bx_testimonials', '', '', '2017-09-19'),
(736, 'bh2010079002demososo', 'blockdh', 'style_commonblock', 'vblock20170419_1845397696', 'csub20160707_1140595619', 'base', NULL, 'none', 'cn', '我们的服务 - tab切换', '', '', 'color:red', '', 35, 10, NULL, NULL, '', '', 'y', '', NULL, NULL, 'tab_service.tpl.php', '', 1, 300, 'tab_service', '', '', '2017-09-19'),
(737, 'bh2010079002demososo', 'blockdh', 'style_commonblock', 'vblock20170420_1142002825', 'csub20170214_1756444189', 'base', NULL, 'none', 'cn', '关于我们 图文2', '', 'more3   moresm cirimg', 'text-align:center;color:red', 'color:red', 50, 10, NULL, NULL, '', '', 'y', '', NULL, NULL, 'grid_aboutus.tpl.php', '', 3, 300, 'grid_blockdh', '', '', '2017-10-23'),
(738, 'bh2010079002demososo', 'blockdh', 'style_commonblock', 'vblock20170420_1158241500', 'csub20160708_0508536755', 'base', NULL, 'none', 'cn', '我们的服务-两列', '', 'imgdesp80 gridcol2divi more2 moresm', 'color:red', 'color:blue', 50, 6, NULL, NULL, '', '', 'y', '', NULL, NULL, 'grid_services2Col.tpl.php', '', 2, 300, 'default', '', '', '2017-09-19'),
(764, 'bh2010079002demososo', 'custom', 'style_commonblock', 'vblock20170523_1848391714', NULL, 'base', NULL, 'block', 'cn', '移动端头部的电话 - default', '', '', '', '', 50, 10, NULL, NULL, '', '', 'y', '', '&lt;p&gt;&lt;span style=&quot;color:#e74c3c&quot;&gt;&lt;strong&gt;&lt;span style=&quot;font-size:22px&quot;&gt;400 8888 6666&lt;/span&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;', '', 'defaultnopadmag.tpl.php', '', 3, 300, '', '', '', '2017-09-20'),
(761, 'bh2010079002demososo', 'node', 'style_commonblock', 'vblock20170516_1830122023', 'cate20150805_1134397929', 'base', NULL, 'none', 'cn', '案例 flexiselcase', '', '', '', '', 0, 20, NULL, NULL, '', '', 'y', '', NULL, NULL, 'node_flexiselcase.tpl.php', '', 5, 88, 'default', '', '20180206_122845_8456.jpg', '2017-09-17'),
(762, 'bh2010079002demososo', 'node', 'style_commonblock', 'vblock20170516_1840109205', 'cate20150805_1125344029', 'base', NULL, 'none', 'cn', '产品 isotope', '', '', '', '', 0, 30, NULL, NULL, '', '', 'y', '', NULL, NULL, 'node_isotope.tpl.php', '', 4, 300, 'default', '', '', '2017-09-19'),
(763, 'bh2010079002demososo', 'node', 'style_commonblock', 'vblock20170516_1856593452', 'cate20150805_1134397929', 'base', NULL, 'none', 'cn', '师资力量', '', '', '', '', 0, 8, NULL, NULL, '', '', 'y', '', NULL, NULL, 'node_team.tpl.php', '', 4, 0, 'default', '', '', '2017-09-19'),
(851, 'bh2010079002demososo', 'custom', 'y', 'vblock20170921_1139507156', NULL, 'base', 'colu20170921_1138528459', 'column', 'cn', ' - default', '新闻', '', '', '', 50, 10, NULL, NULL, '', '', 'y', '', '', '', 'default_column', NULL, 3, 300, 'vblock20170419_1557044653', NULL, NULL, '2017-10-12'),
(850, 'bh2010079002demososo', 'custom', 'y', 'vblock20170921_1139335749', NULL, 'base', 'colu20170921_1138459407', 'column', 'cn', ' - default', '标签', '', '', '', 50, 10, NULL, NULL, '', '', 'y', '', '', '', 'default_column', NULL, 3, 300, 'prog_tag', NULL, NULL, '2017-10-12'),
(848, 'bh2010079002demososo', 'custom', 'y', 'vblock20170921_1139013583', NULL, 'base', 'colu20170921_1138225871', 'column', 'cn', ' - default', '联系方式', '', '', '', 50, 10, NULL, NULL, '', '', 'y', '', '&lt;p&gt;联系：DM企业建站系统&lt;br /&gt;\r\n地址：上海市浦东新区&lt;br /&gt;\r\n电话： 136 6666 6666&lt;br /&gt;\r\n邮箱：66666666@QQ.com&lt;br /&gt;\r\n网址： &lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;www.demososo.com&lt;/a&gt;&lt;/p&gt;', '', 'default_column', NULL, 3, 300, '', NULL, NULL, '2017-09-21'),
(849, 'bh2010079002demososo', 'custom', 'y', 'vblock20170921_1139192157', NULL, 'base', 'colu20170921_1138331265', 'column', 'cn', '- default', '', '', '', '', 50, 10, NULL, NULL, '', '', 'y', '', '&lt;p&gt;&lt;a href=&quot;http://www.demososo.com/install.html&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20170421_144032_2721.jpg&quot; style=&quot;height:124px; width:242px&quot; /&gt;&lt;/a&gt;&lt;/p&gt;', '', 'default_column', NULL, 3, 300, '', NULL, NULL, '2017-10-04'),
(834, 'bh2010079002demososo', 'custom', 'y', 'vblock20170920_1611575542', NULL, 'base', 'colu20170914_1755204518', 'column', 'cn', ' - defaultnopadmag', '', '', '', '', 50, 10, NULL, NULL, '', '', 'y', '', '&lt;p&gt;&lt;strong&gt;欢迎光临DM建站系统 总部：上海&lt;/strong&gt;&lt;/p&gt;', '', 'default_column', NULL, 3, 300, '', NULL, NULL, '2017-09-20'),
(835, 'bh2010079002demososo', 'custom', 'y', 'vblock20170920_1717501290', NULL, 'base', 'colu20170920_1717466496', 'column', 'cn', ' - default', '', '', '', '', 50, 10, NULL, NULL, '', '', 'y', '', '', '', 'default_column', NULL, 3, 300, 'prog_backtotop', NULL, NULL, '2017-09-20'),
(836, 'bh2010079002demososo', 'custom', 'y', 'vblock20170920_1718376273', NULL, 'base', 'colu20170920_1718203997', 'column', 'cn', ' - default', '', '', '', '', 50, 10, NULL, NULL, '', '', 'y', '', '', '&lt;div class=&quot;sitecolorchange&quot;&gt;\r\n &lt;div class=&quot;cp onlineclosecolor&quot;  style=&quot;display: block;&quot;&gt; &lt;/div&gt;\r\n &lt;a href=&quot;http://www.demososo.com/mb.html&quot; target=&quot;_blank&quot;&gt;更多官方模板&amp;gt;&lt;/a&gt;\r\n\r\n  \r\n&lt;/div&gt;', 'default_column', NULL, 3, 300, '', NULL, NULL, '2017-11-29'),
(822, 'bh2010079002demososo', 'custom', 'y', 'vblock20170914_1814268650', NULL, 'base', 'colu20170914_1813555437', 'column', 'cn', ' - default', '关于我们', 'moresm more3 wow fadeInRight', 'color:red', '', 50, 10, '', NULL, 'http://www.demososo.com', '查看详情', 'y', '副标题副标题副标题副标题副标题副标题副标题', '&lt;p&gt;&lt;span style=&quot;color:#2980b9&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;strong&gt;欢迎使用DM企业建站系统&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;font-size:24px&quot;&gt;&lt;strong&gt;&lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;&lt;span style=&quot;color:#3498db&quot;&gt;www.demososo.com&lt;/span&gt;&lt;/a&gt;&lt;/strong&gt;&lt;/span&gt;&lt;span style=&quot;color:#2980b9&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;strong&gt;，本系统&lt;/strong&gt;&lt;/span&gt;&lt;span style=&quot;font-size:20px&quot;&gt;&lt;strong&gt;开源免费，无需授权&lt;/strong&gt;&lt;/span&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;strong&gt;即可使用，模板响应式，支持手机等移动端设备访问。&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;color:#f39c12&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;strong&gt;欢迎使用DM企业建站系统www.demososo.com，本系统开源免费，无需授权即可使用，模板响应式，支持手机等移动端设备访问。&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;​&lt;span style=&quot;color:#2980b9&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;strong&gt;欢迎使用DM企业建站系统www.demososo.com，本系统开源免费，无需授权即可使用，模板响应式，支持手机等移动端设备访问。&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;', '', 'default_column', NULL, 3, 300, '', NULL, NULL, '2017-10-12'),
(820, 'bh2010079002demososo', 'custom', 'y', 'vblock20170914_1756148792', NULL, 'base', 'colu20170914_1755237816', 'column', 'cn', 'tr - defaultnopadmag', '', 'tr', '', '', 50, 10, '', NULL, '', '', 'y', '', '&lt;p&gt;&lt;a href=&quot;http://www.demososo.com/install.html&quot; target=&quot;_blank&quot;&gt;如何安装&lt;/a&gt; | &lt;a href=&quot;http://www.demososo.com/sq.html&quot; target=&quot;_blank&quot;&gt;关于授权&lt;/a&gt; | &lt;a href=&quot;http://www.demososo.com/hkidc.html&quot; target=&quot;_blank&quot;&gt;DM专用主机&lt;/a&gt;&lt;/p&gt;', '', 'default_column', NULL, 3, 300, '', NULL, NULL, '2017-09-20'),
(821, 'bh2010079002demososo', 'custom', 'y', 'vblock20170914_1813581407', NULL, 'base', 'colu20170914_1813504419', 'column', 'cn', 'namecolumn', '', 'wow fadeInLeft', '', '', 50, 10, '20170914_181407_2202.jpg', NULL, '', '', 'y', '', '', '', 'default_column', NULL, 3, 300, '', NULL, NULL, '2017-09-14'),
(856, 'bh2010079002demososo', 'custom', 'y', 'vblock20170921_1242338191', NULL, 'base', 'colu20170921_1241338733', 'column', 'cn', ' - default', '', '', '', '', 50, 10, NULL, NULL, '', '', 'y', '', '&lt;p&gt;联系：&lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;&lt;strong&gt;DM企业建站企业建站系统&lt;/strong&gt;&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;网址：&lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;&lt;strong&gt;www.demososo.com&lt;/strong&gt;&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;br /&gt;\r\n手机：133 8888 8888&lt;br /&gt;\r\n电话：021-8888 8888 传真：021-8888 8888&lt;br /&gt;\r\n邮箱：***@163.com&lt;br /&gt;\r\n地址：上海市长宁区天山路**号&lt;br /&gt;\r\n电话：021-8888 8888&lt;br /&gt;\r\n传真：021-8888 8888&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '', 'default_column', NULL, 3, 300, '', NULL, NULL, '2017-09-21'),
(827, 'bh2010079002demososo', 'node', 'style_commonblock', 'vblock20170919_1141463819', 'cate20150805_1125344029', 'base', 'none', 'block', 'cn', '产品  - grid_ceng_arrow', '', 'slickbtn', '', '', 33, 8, NULL, NULL, '', '', 'y', '', NULL, NULL, 'grid_ceng_arrow.tpl.php', '', 4, 300, NULL, '', '', '2017-09-21'),
(828, 'bh2010079002demososo', 'node', 'style_commonblock', 'vblock20170919_1202408332', 'cate20150805_1125344029', 'base', 'none', 'block', 'cn', '普通的产品中心  grid_node', '', 'imghg180 imgdesp80 gridboxshadow zoomimgwrap  morexs more3', '', '', 35, 12, NULL, NULL, '', '查看详情', 'y', '', NULL, NULL, 'grid_node.tpl.php', '', 4, 0, NULL, '', '', '2017-09-19'),
(829, 'bh2010079002demososo', 'blockdh', 'style_commonblock', 'vblock20170919_1446491004', 'csub20160708_0509074359', 'base', 'none', 'block', 'cn', '我们的客户 - 滚动效果', '', 'slickbtn slickarrow2 slickarrow2xs', '', '', 30, 10, NULL, NULL, '', '', 'y', '', NULL, NULL, 'slider_clients.tpl.php', '', 6, 300, NULL, '', '', '2017-09-19'),
(897, 'bh2010079002demososo', 'blockdh', 'style_commonblock', 'vblock20171201_1536338532', 'csub20170426_1859253747', 'base', 'none', 'block', 'cn', '全屏幻灯片 fullscreen default03', '', '', NULL, NULL, 500, 8, NULL, NULL, '', '', 'y', '', NULL, NULL, 'banner_fullscreen.tpl.php', '', 1, 100, NULL, '', '', NULL),
(867, 'bh2010079002demososo', 'custom', 'y', 'vblock20171012_0857055868', NULL, 'base', 'colu20171012_0857027802', 'column', 'cn', ' - &lt;div class=&quot;onlineqq&quot;&gt;\r\n\r\n&lt;div class=&quot;onlineopen cp&quot;&gt; &lt;/div&gt;\r\n&lt;div class=&quot;onlineclose cp&quot;&gt; &l', '', '', '', '', 50, 10, NULL, NULL, '', '', 'y', '', '', '&lt;div class=&quot;onlineqq&quot;&gt;\r\n\r\n&lt;div class=&quot;onlineopen cp&quot;&gt; &lt;/div&gt;\r\n&lt;div class=&quot;onlineclose cp&quot;&gt; &lt;/div&gt;\r\n\r\n\r\n&lt;div class=&quot;onlinecontent dn&quot;&gt; \r\n\r\n \r\n        &lt;ul class=&quot;qqnumber&quot;&gt;\r\n        &lt;li&gt;&lt;a  href=&quot;http://wpa.qq.com/msgrd?v=3&amp;uin=939805498&amp;site=qq&amp;menu=yes&quot; target=&quot;_blank&quot;&gt;售前咨询&lt;/a&gt;\r\n        &lt;/li&gt;\r\n\r\n         &lt;li&gt;&lt;a  href=&quot;http://wpa.qq.com/msgrd?v=3&amp;uin=939805498&amp;site=qq&amp;menu=yes&quot;   target=&quot;_blank&quot;&gt;售后咨询&lt;/a&gt;\r\n        &lt;/li&gt;\r\n\r\n         &lt;li&gt;&lt;a  href=&quot;http://wpa.qq.com/msgrd?v=3&amp;uin=939805498&amp;site=qq&amp;menu=yes&quot;  target=&quot;_blank&quot; &gt;域名专员&lt;/a&gt;\r\n        &lt;/li&gt;\r\n\r\n         &lt;li&gt;&lt;a  href=&quot;http://wpa.qq.com/msgrd?v=3&amp;uin=939805498&amp;site=qq&amp;menu=yes&quot;  target=&quot;_blank&quot; &gt;备案专员&lt;/a&gt;\r\n        &lt;/li&gt;\r\n\r\n\r\n        &lt;/ul&gt;\r\n\r\n      \r\n\r\n&lt;div class=&quot;onlinetel&quot;&gt;\r\n            售前咨询热线 \r\n          &lt;span&gt; 400-123-45678 &lt;/span&gt;\r\n\r\n\r\n            售后咨询热线  \r\n           &lt;span&gt; 021-12345678 &lt;/span&gt;\r\n           \r\n\r\n            热线--添加或修改  \r\n           &lt;span&gt; 021-12345678 &lt;/span&gt;\r\n\r\n\r\n        &lt;/div&gt;\r\n\r\n  &lt;p class=&quot;tc&quot;&gt;\r\n        &lt;a target=&quot;_blank&quot; href=&quot;http://www.demososo.com&quot;&gt;&lt;img border=&quot;0&quot; src=&quot;imgpath_3qys0o_comimage/cn/20160410_100653_6176.gif&quot; width=&quot;120&quot;&gt;&lt;/a&gt;\r\n\r\n &lt;/p&gt;\r\n\r\n &lt;div class=&quot;tc&quot;&gt;\r\n                &lt;p&gt;微信搜索：&lt;span&gt;demososo&lt;/span&gt;&lt;/p&gt;\r\n                &lt;p&gt;&lt;img src=&quot;imgpath_3qys0o_comimage/cn/20160410_100648_6599.jpg&quot; border=&quot;0&quot; width=&quot;120px&quot;&gt;&lt;/p&gt;\r\n                &lt;p&gt;扫一扫官方微信&lt;/p&gt;\r\n    &lt;/div&gt;\r\n\r\n\r\n&lt;/div&gt;&lt;!--end online content--&gt;\r\n\r\n&lt;/div&gt;&lt;!--end onlineqq--&gt;', 'default_column', NULL, 3, 300, '', NULL, NULL, '2017-11-29'),
(908, 'bh2010079002demososo', 'blockdh', 'style_commonblock', 'vblock20171220_1120341606', 'csub20171212_1153095561', 'base', 'none', 'block', 'cn', 'water01模板的幻灯片', '', '', NULL, NULL, 500, 8, NULL, NULL, '', '', 'y', '', NULL, NULL, 'banner_water01.tpl.php', '', 1, 100, NULL, '', '', NULL),
(909, 'bh2010079002demososo', 'blockdh', 'style_commonblock', 'vblock20171220_1408558620', 'csub20171207_1040119631', 'base', 'none', 'block', 'cn', 'grid_aboutus左右图文  strip', '', '', NULL, NULL, 35, 8, NULL, NULL, '', '', 'y', '', NULL, NULL, 'grid_aboutusstrip.tpl.php', '', 1, 100, NULL, '', '', NULL),
(910, 'bh2010079002demososo', 'blockdh', 'style_commonblock', 'vblock20171220_1409499140', 'csub20171207_1040184257', 'base', 'none', 'block', 'cn', 'grid_services我们的服务--多列', '我们的服务', '', NULL, NULL, 35, 8, NULL, NULL, '', '', 'y', '在后台的区块管理-前台副标题修改。。。城阙辅三秦，风烟望五津。与君离别意，同是宦游人。海内存知己，天涯若比邻。无为在歧路，儿女共沾巾。', NULL, NULL, 'grid_services.tpl.php', '', 4, 100, NULL, '#29344e', '', NULL),
(912, 'bh2010079002demososo', 'custom', 'style20171123_1856515884', 'vblock20180119_1633301864', NULL, 'base', 'none', 'block', 'cn', '移动端底部的内容', '', '', NULL, NULL, 50, 10, NULL, NULL, '', '', 'y', '', '', '&lt;ul&gt;\r\n&lt;li&gt;&lt;a href=&quot;index.php&quot;&gt;&lt;i class=&quot;fa fa-home&quot;&gt;&lt;/i&gt;首页&lt;/a&gt;\r\n&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;javascript:;&quot;&gt;&lt;span  class=&quot;di&quot;&gt;关于我们&lt;/span&gt;&lt;/a&gt;\r\n                    &lt;dl&gt;\r\n                        &lt;dd&gt;&lt;a href=&quot;about.html&quot;&gt;&lt;span&gt;集团介绍&lt;/span&gt;&lt;/a&gt;&lt;/dd&gt;\r\n                        &lt;dd&gt;&lt;a href=&quot;page-65.html&quot;&gt;&lt;span&gt;集团文化&lt;/span&gt;&lt;/a&gt;&lt;/dd&gt;\r\n                        &lt;dd&gt;&lt;a href=&quot;page-22.html&quot;&gt;&lt;span&gt;企业资质&lt;/span&gt;&lt;/a&gt;&lt;/dd&gt;\r\n                         \r\n                    &lt;/dl&gt;\r\n                &lt;/li&gt;\r\n\r\n                &lt;li&gt;\r\n                    &lt;a href=&quot;javascript:;&quot;&gt;&lt;span class=&quot;di&quot;&gt;产品中心&lt;/span&gt;&lt;/a&gt;\r\n                    &lt;dl&gt;\r\n                        &lt;dd&gt;&lt;a href=&quot;category-2.html&quot;&gt;&lt;span&gt;平板电视&lt;/span&gt;&lt;/a&gt;&lt;/dd&gt;\r\n                        &lt;dd&gt;&lt;a href=&quot;category-3.html&quot;&gt;&lt;span&gt;手机&lt;/span&gt;&lt;/a&gt;&lt;/dd&gt;\r\n                        &lt;dd&gt;&lt;a href=&quot;category-4.html&quot;&gt;&lt;span&gt;笔记本&lt;/span&gt;&lt;/a&gt;&lt;/dd&gt;                         \r\n                    &lt;/dl&gt;\r\n                &lt;/li&gt;\r\n                &lt;li&gt;\r\n                    &lt;a href=&quot;contact.html&quot;&gt;&lt;span  class=&quot;di&quot;&gt;联系我们&lt;/span&gt;&lt;/a&gt;                     \r\n                &lt;/li&gt;\r\n\r\n&lt;/ul&gt;', 'footermobile.php', NULL, 3, 100, NULL, '', '', NULL),
(923, 'bh2010079002demososo', 'video', 'y', 'vblock20180123_1850456893', NULL, 'base', 'none', 'block', 'cn', 'asdfasd', NULL, NULL, NULL, NULL, 50, 10, '', NULL, NULL, NULL, 'y', 'asdfasdf', 'v.qq.comccc', NULL, 'default', '', 3, 100, NULL, NULL, NULL, NULL),
(928, 'bh2010079002demososo', 'video', 'y', 'vblock20180124_1238309815', NULL, 'base', 'none', 'block', 'cn', 'asfdasf', NULL, NULL, NULL, NULL, 50, 10, '', NULL, NULL, NULL, 'y', '', '', NULL, 'default', '', 3, 100, NULL, NULL, NULL, NULL),
(929, 'bh2010079002demososo', 'video', 'y', 'vblock20180124_1238421513', NULL, 'base', 'none', 'block', 'cn', '11111111', NULL, 'asfdasfd', NULL, NULL, 50, 10, '', NULL, NULL, NULL, 'y', '44444cc', 'asdf.mp4', NULL, 'default', '', 3, 100, NULL, NULL, NULL, NULL),
(930, 'bh2010079002demososo', 'video', 'y', 'vblock20180124_1507176931', NULL, 'base', 'none', 'block', 'cn', 'rrrrrrrrrrrrasffasdfa', NULL, NULL, NULL, NULL, 50, 10, NULL, NULL, NULL, NULL, 'y', NULL, NULL, NULL, 'default', NULL, 3, 100, NULL, NULL, NULL, NULL),
(931, 'bh2010079002demososo', 'video', 'y', 'vblock20180124_1512434171', NULL, 'base', 'none', 'block', 'cn', 'mp4的视频', NULL, NULL, NULL, NULL, 50, 10, NULL, NULL, NULL, NULL, 'y', NULL, NULL, NULL, 'video_default', NULL, 3, 100, NULL, NULL, NULL, NULL),
(932, 'bh2010079002demososo', 'video', 'y', 'vblock20180124_1613284594', NULL, 'base', 'none', 'block', 'cn', 'TFboys和小虎队跨时空合作', NULL, NULL, NULL, NULL, 50, 10, NULL, NULL, NULL, NULL, 'y', NULL, NULL, NULL, 'video_default', NULL, 3, 100, NULL, NULL, NULL, NULL),
(936, 'bh2010079002demososo', 'custom', 'n', 'vblock20180224_1442019220', NULL, 'base', 'colu20180224_1441239930', 'column', 'cn', 'namecolumn', '关于我们', '', NULL, NULL, 50, 10, NULL, NULL, '', '', 'y', NULL, '&lt;p&gt;&lt;a href=&quot;http://www.demososo.com&quot;&gt;&lt;strong&gt;DM企业建站系统&lt;/strong&gt;&lt;/a&gt;，专注中小企业网站建设，&lt;/p&gt;\r\n\r\n&lt;p&gt;系统开源免费，无需授权。&lt;/p&gt;\r\n\r\n&lt;p&gt;模板都支持响应式设计。支持移动端访问。&lt;br /&gt;\r\nDM企业建站系统，专注中小企业网站建设，系统开源免费，无需授权。&lt;/p&gt;', '', 'default_column', NULL, 3, 100, '', NULL, NULL, '2018-02-24'),
(937, 'bh2010079002demososo', 'custom', 'n', 'vblock20180224_1442155974', NULL, 'base', 'colu20180224_1441348425', 'column', 'cn', 'namecolumn', '公司介绍', '', NULL, NULL, 50, 10, NULL, NULL, '', '', 'y', NULL, '&lt;p&gt;&lt;a href=&quot;about.html&quot;&gt;公司介绍&lt;/a&gt;&amp;nbsp;&lt;br /&gt;\r\n&lt;a href=&quot;about.html&quot;&gt;团队实力&lt;/a&gt;&amp;nbsp;&lt;br /&gt;\r\n&lt;a href=&quot;about.html&quot;&gt;企业文化&lt;/a&gt;&amp;nbsp;&lt;br /&gt;\r\n&lt;a href=&quot;contact.html&quot;&gt;联系我们&lt;/a&gt;&lt;/p&gt;', '', 'default_column', NULL, 3, 100, '', NULL, NULL, '2018-02-24'),
(938, 'bh2010079002demososo', 'custom', 'n', 'vblock20180224_1442479840', NULL, 'base', 'colu20180224_1441431609', 'column', 'cn', 'namecolumn', '联系方式', '', NULL, NULL, 50, 10, NULL, NULL, '', '', 'y', NULL, '&lt;p&gt;公司地址：********&lt;br /&gt;\r\n联系人：****&lt;br /&gt;\r\n联系方式：*****&lt;/p&gt;', '', 'default_column', NULL, 3, 100, '', NULL, NULL, '2018-02-24'),
(939, 'bh2010079002demososo', 'custom', 'n', 'vblock20180224_1442529390', NULL, 'base', 'colu20180224_1441527142', 'column', 'cn', 'namecolumn', '关于我们', '', NULL, NULL, 50, 10, NULL, NULL, '', '', 'y', NULL, '&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20160410_100648_6599.jpg&quot; /&gt;&lt;/p&gt;', '', 'default_column', NULL, 3, 100, '', NULL, NULL, '2018-02-24'),
(940, 'bh2010079002demososo', 'custom', 'n', 'vblock20180224_1446181736', NULL, 'base', 'colu20180224_1445595161', 'column', 'cn', 'namecolumn', '', '', NULL, NULL, 50, 10, NULL, NULL, '', '', 'y', NULL, '', '', 'default_column', NULL, 3, 100, 'prog_tongji', NULL, NULL, '2018-02-24'),
(941, 'bh2010079002demososo', 'custom', 'n', 'vblock20180224_1446303457', NULL, 'base', 'colu20180224_1445492913', 'column', 'cn', 'namecolumn', '', '', NULL, NULL, 50, 10, NULL, NULL, '', '', 'y', NULL, '&lt;p&gt;版权所有2018 DM企业建站系统&lt;/p&gt;', '', 'default_column', NULL, 3, 100, '', NULL, NULL, '2018-02-24'),
(942, 'bh2010079002demososo', 'custom', 'n', 'vblock20180224_1446446892', NULL, 'base', 'colu20180224_1446114928', 'column', 'cn', 'namecolumn', '', '', NULL, NULL, 50, 10, NULL, NULL, '', '', 'y', NULL, '&lt;p&gt;&lt;a href=&quot;about.html&quot;&gt;关于我们 &lt;/a&gt;| &lt;a href=&quot;contact.html&quot;&gt;联系我们&lt;/a&gt;&lt;/p&gt;', '', 'default_column', NULL, 3, 100, '', NULL, NULL, '2018-02-24'),
(961, 'bh2010079002demososo', 'node', 'style_commonblock', 'vblock20180228_1553596771', 'csub20150805_1127356368', 'base', 'none', 'block', 'cn', '产品 tab 切换', '', '', NULL, NULL, 50, 12, NULL, NULL, '', '', 'y', '', NULL, NULL, 'node_tab.tpl.php', NULL, 4, 0, NULL, '', '', NULL),
(969, 'bh2010079002demososo', 'custom', 'n', 'vblock20180305_1058502928', NULL, 'base', 'colu20180305_1058499246', 'column', 'cn', 'namecolumn', '', '', NULL, NULL, 50, 10, NULL, NULL, '', '', 'y', NULL, '', '', 'default_column', NULL, 3, 100, 'form20180218_1250127063', NULL, NULL, '2018-03-05'),
(970, 'bh2010079002demososo', 'custom', 'n', 'vblock20180305_1059193986', NULL, 'base', 'colu20180305_1058373875', 'column', 'cn', 'namecolumn', '', '', NULL, NULL, 50, 10, NULL, NULL, '', '', 'y', NULL, '&lt;p&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;联系：&lt;/span&gt;&lt;a href=&quot;http://www.demososo.com/&quot; style=&quot;padding: 0px; margin: 0px; color: rgb(102, 102, 102); text-decoration: none;&quot; target=&quot;_blank&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;strong&gt;DM企业建站企业建站系统&lt;/strong&gt;&lt;/span&gt;&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;网址：&lt;/span&gt;&lt;a href=&quot;http://www.demososo.com/&quot; style=&quot;padding: 0px; margin: 0px; color: rgb(102, 102, 102); text-decoration: none;&quot; target=&quot;_blank&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;strong&gt;www.demososo.com&lt;/strong&gt;&lt;/span&gt;&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;br /&gt;\r\n&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-size:18px&quot;&gt;手机：133 8888 8888&lt;br /&gt;\r\n电话：021-8888 8888 传真：021-8888 8888&lt;br /&gt;\r\n邮箱：***@163.com&lt;br /&gt;\r\n地址：上海市长宁区天山路**号&lt;br /&gt;\r\n电话：021-8888 8888&lt;br /&gt;\r\n传真：021-8888 8888&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;', '', 'default_column', NULL, 3, 100, '', NULL, NULL, '2018-03-05'),
(1024, 'bh2010079002demososo', 'custom', 'n', 'vblock20180323_1630143789', NULL, 'base', 'none', 'block', 'cn', '如你所想', 'DM企业建站系统 如你所想', 'more1', NULL, NULL, 50, 10, NULL, NULL, 'http://www.demososo.com/install.html', '查看详情', 'y', '选择DM企业建站系统，建设企业网站变得如此的简单。。。', '', '', 'box_xuanchuan.php', NULL, 3, 100, NULL, '20180323_163049_2338.jpg', '', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `zzz_blockgroup`
--

CREATE TABLE `zzz_blockgroup` (
  `id` int(11) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `pbh` varchar(50) NOT NULL,
  `pidname` varchar(100) NOT NULL,
  `pidstylebh` varchar(80) NOT NULL DEFAULT 'n',
  `lang` varchar(50) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `namebz` varchar(100) DEFAULT NULL,
  `cssname` varchar(200) DEFAULT NULL,
  `sta_name` char(1) NOT NULL DEFAULT 'n',
  `pos` int(3) DEFAULT '50',
  `blockid` varchar(100) DEFAULT NULL,
  `dateedit` datetime DEFAULT NULL,
  `sta_visible` char(1) DEFAULT 'n',
  `sta_width_cnt` char(1) NOT NULL DEFAULT 'n' COMMENT 'for regcommon',
  `arr_cfg` text,
  `despjj` varchar(200) DEFAULT NULL,
  `desp` text,
  `desptext` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_blockgroup`
--

INSERT INTO `zzz_blockgroup` (`id`, `pid`, `pbh`, `pidname`, `pidstylebh`, `lang`, `name`, `namebz`, `cssname`, `sta_name`, `pos`, `blockid`, `dateedit`, `sta_visible`, `sta_width_cnt`, `arr_cfg`, `despjj`, `desp`, `desptext`) VALUES
(154, '0', 'bh2010079002demososo', 'group20160509_1200413359', 'style20160721_0855323118', 'cn', '网站最顶部一排的内容的文字内容', NULL, 'headertop', 'n', 520, NULL, '2016-05-09 12:00:41', 'n', 'n', NULL, NULL, NULL, NULL),
(444, 'group20160822_1126481127', 'bh2010079002demososo', 'sgroup20161019_1112358815', 'n', 'cn', '在线客服', NULL, '', 'n', 50, 'vblock20151202_1007031562', '2016-10-19 11:12:35', 'y', 'n', NULL, NULL, '', ''),
(561, '0', 'bh2010079002demososo', 'group20170921_1137442079', 'style20160721_0855323118', 'cn', '侧边栏', NULL, '', 'n', 50, NULL, '2017-09-21 11:37:44', 'n', 'y', NULL, NULL, NULL, NULL),
(557, '0', 'bh2010079002demososo', 'group20170920_1717255504', 'style20160721_0855323118', 'cn', '网站浮动部分---在线客服等悬浮代码 (它的列，要用绝对定位，这样不会占位置)', NULL, '', 'n', 50, NULL, '2017-09-20 17:17:25', 'n', 'y', NULL, NULL, NULL, NULL),
(569, '0', 'bh2010079002demososo', 'group20180303_1220043665', 'n', 'cn', '联系我们的组合区块', NULL, '', 'n', 50, NULL, '2018-03-03 12:20:04', 'n', 'n', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `zzz_cate`
--

CREATE TABLE `zzz_cate` (
  `id` int(11) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `pbh` varchar(50) NOT NULL,
  `pidname` varchar(50) NOT NULL,
  `pidstylebh` varchar(80) NOT NULL DEFAULT 'n',
  `lang` varchar(50) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `namebz` varchar(50) DEFAULT NULL,
  `sta_visible` varchar(1) NOT NULL DEFAULT 'y',
  `sta_noaccess` char(1) NOT NULL DEFAULT 'n',
  `pos` int(3) NOT NULL DEFAULT '50',
  `level` tinyint(2) DEFAULT NULL,
  `last` varchar(1) DEFAULT 'n',
  `alias` varchar(200) DEFAULT NULL,
  `alias_jump` varchar(100) DEFAULT NULL,
  `tabpro` varchar(55) DEFAULT 'no',
  `modtype` varchar(50) DEFAULT 'node',
  `maxline` int(3) NOT NULL DEFAULT '20',
  `listfg` varchar(100) NOT NULL DEFAULT 'list_text' COMMENT 'file in custom dir',
  `listcssname` varchar(100) DEFAULT NULL,
  `detailfg` varchar(100) DEFAULT 'detail_normal',
  `cateimg` varchar(66) DEFAULT NULL,
  `cus_columns` int(3) NOT NULL DEFAULT '3',
  `cus_substrnum` int(3) NOT NULL DEFAULT '100',
  `sm_w` int(3) DEFAULT '250',
  `sm_h` int(3) DEFAULT '250',
  `album` varchar(100) DEFAULT NULL,
  `albumcssname` varchar(100) DEFAULT NULL,
  `albumposi` char(1) NOT NULL DEFAULT 'y',
  `arr_can` text,
  `seo1` text,
  `seo2` text,
  `seo3` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_cate`
--

INSERT INTO `zzz_cate` (`id`, `pid`, `pbh`, `pidname`, `pidstylebh`, `lang`, `name`, `namebz`, `sta_visible`, `sta_noaccess`, `pos`, `level`, `last`, `alias`, `alias_jump`, `tabpro`, `modtype`, `maxline`, `listfg`, `listcssname`, `detailfg`, `cateimg`, `cus_columns`, `cus_substrnum`, `sm_w`, `sm_h`, `album`, `albumcssname`, `albumposi`, `arr_can`, `seo1`, `seo2`, `seo3`) VALUES
(1, '0', 'bh2010079002demososo', 'cate20150805_1125344029', 'n', 'cn', '产品中心', NULL, 'y', 'n', 69, 1, 'y', '添加主类', '', 'no', 'node', 9, 'list_grid', 'imghg210', 'detail_normal', '', 3, 100, 300, 300, NULL, NULL, 'y', 'shop_priceold:##hide==#==shop_price:##hide==#==shop_currency:##==#==shop_currencycn:##==#==shop_linktitle:##hide==#==formblockid:##form20180223_1705033909==#==authorcate:##hide==#==authorcompanycate:##hide==#==authordatecate:##hide==#==authorhitcate:##hide==#==news_title:##==#==news_moretitle:##==#==sta_fontsize:##y==#==sta_sharebtn:##y==#==sta_tag:##y==#==nextprev:##nextprev.php==#==relativetitle:##相关产品==#==relativefg:##relative_grid.php', '', '', ''),
(2, 'cate20150805_1125344029', 'bh2010079002demososo', 'csub20150805_1127279495', 'n', 'cn', '平板电视', NULL, 'y', 'n', 55, 1, 'y', '', '', 'no', 'node', 20, 'list_grid', '', 'detail_normalshop', '', 3, 100, 120, 120, NULL, NULL, 'y', NULL, '平板电视平板电视cc', '平板电视平板电视', '平板电视平板电视平板电视'),
(3, 'cate20150805_1125344029', 'bh2010079002demososo', 'csub20150805_1127356368', 'n', 'cn', '手机', NULL, 'y', 'n', 50, 1, 'n', '', '', 'no', 'node', 20, 'list_grid', '', 'detail_normalshop', '', 3, 100, 120, 120, NULL, NULL, 'y', NULL, '', '', ''),
(4, 'cate20150805_1125344029', 'bh2010079002demososo', 'csub20150805_1127429915', 'n', 'cn', '笔记本', NULL, 'y', 'n', 50, 1, 'y', '', '', 'no', 'node', 20, 'list_grid', '', 'detail_normalshop', '', 3, 100, 120, 120, NULL, NULL, 'y', NULL, '笔记本笔记本笔记本', '笔记本笔记本笔记本笔记本', '笔记本笔记本笔记本笔记本笔记本笔记本笔记本笔记本笔记本'),
(5, 'csub20150805_1127356368', 'bh2010079002demososo', 'csub20150805_1128542682', 'n', 'cn', '华为', NULL, 'y', 'n', 0, 2, 'y', '', '', 'no', 'node', 20, 'list_grid', '', 'detail_normalshop', '', 3, 100, 120, 120, NULL, NULL, 'y', NULL, '华为华为', '华为华为华为', '华为华为华为'),
(6, 'csub20150805_1127356368', 'bh2010079002demososo', 'csub20150805_1129022677', 'n', 'cn', '联想', NULL, 'y', 'n', 0, 2, 'y', '', '', 'no', 'node', 20, 'list_grid', '', 'detail_normalshop', '', 3, 100, 120, 120, NULL, NULL, 'y', NULL, '联想', '联想联想', '联想联想联想'),
(7, 'csub20150805_1127356368', 'bh2010079002demososo', 'csub20150805_1129113039', 'n', 'cn', '其他', NULL, 'y', 'n', 0, 2, 'y', '', '', 'no', 'node', 20, 'list_grid', '', 'detail_normalshop', '', 3, 100, 120, 120, NULL, NULL, 'y', NULL, '其他其他', '其他其他', '其他其他其他'),
(8, '0', 'bh2010079002demososo', 'cate20150805_1133251007', 'n', 'cn', '新闻中心', NULL, 'y', 'n', 66, 1, 'y', '添加主类', '', 'no', 'node', 10, 'list_text', '', 'detail_normal', '', 3, 100, 300, 300, NULL, NULL, 'y', 'shop_priceold:##hide==#==shop_price:##hide==#==shop_currency:##==#==shop_currencycn:##==#==shop_linktitle:##==#==formblockid:##form20180223_2133551842==#==authorcate:##hide==#==authorcompanycate:##hide==#==authordatecate:##hide==#==authorhitcate:##hide==#==news_title:##==#==news_moretitle:##==#==sta_fontsize:##y==#==sta_sharebtn:##y==#==sta_tag:##y==#==nextprev:##nextprev.php==#==relativetitle:##相关新闻==#==relativefg:##relative_text.php', NULL, NULL, NULL),
(9, 'cate20150805_1133251007', 'bh2010079002demososo', 'csub20150805_1133441588', 'n', 'cn', '公司新闻1', NULL, 'y', 'n', 50, 1, 'y', '', '', 'no', 'node', 20, 'list_text', '', 'detail_normal', '', 3, 100, 120, 120, NULL, NULL, 'y', NULL, '', '', ''),
(10, 'cate20150805_1133251007', 'bh2010079002demososo', 'csub20150805_1133512388', 'n', 'cn', '公司新闻2', NULL, 'y', 'n', 50, 1, 'y', '', '', 'no', 'node', 20, 'list_text', '', 'detail_normal', '20160415_050507_6454.jpg', 3, 100, 120, 120, NULL, NULL, 'y', NULL, '', '', ''),
(11, 'cate20150805_1133251007', 'bh2010079002demososo', 'csub20150805_1133597884', 'n', 'cn', '公司新闻3', NULL, 'y', 'n', 50, 1, 'y', '', '', 'no', 'node', 20, 'list_text', '', 'detail_normal', '', 3, 100, 120, 120, NULL, NULL, 'y', NULL, '', '', ''),
(12, '0', 'bh2010079002demososo', 'cate20150805_1134397929', 'n', 'cn', '客户案例', NULL, 'y', 'n', 60, 1, 'y', '添加主类', '', 'no', 'node', 20, 'list_grid', 'imghg210', 'detail_normal', '', 3, 100, 300, 300, NULL, NULL, 'y', 'shop_priceold:##hide==#==shop_price:##hide==#==shop_currency:##==#==shop_currencycn:##==#==shop_linktitle:##==#==formblockid:##==#==authorcate:##hide==#==authorcompanycate:##hide==#==authordatecate:##hide==#==authorhitcate:##hide==#==news_title:##==#==news_moretitle:##==#==sta_fontsize:##y==#==sta_sharebtn:##y==#==sta_tag:##y==#==nextprev:##nextprev.php==#==relativetitle:##相关案例==#==relativefg:##relative_grid.php', NULL, NULL, NULL),
(13, 'cate20150805_1134397929', 'bh2010079002demososo', 'csub20150805_1136121045', 'n', 'cn', '案例1', NULL, 'y', 'n', 0, 1, 'y', '', '', 'no', 'node', 20, 'list_grid', 'imghg210', 'detail_normal', '', 3, 100, 120, 120, NULL, NULL, 'y', NULL, '', '', ''),
(14, 'cate20150805_1134397929', 'bh2010079002demososo', 'csub20150805_1136195636', 'n', 'cn', '案例2', NULL, 'y', 'n', 0, 1, 'y', '', '', 'no', 'node', 20, 'list_grid', '', 'detail_normal', '', 3, 100, 120, 120, NULL, NULL, 'y', NULL, '', '', ''),
(15, 'cate20150805_1134397929', 'bh2010079002demososo', 'csub20150805_1136269998', 'n', 'cn', '案例3', NULL, 'y', 'n', 0, 1, 'y', '', '', 'no', 'node', 20, 'list_grid', '', 'detail_normal', '', 3, 100, 120, 120, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(26, '0', 'bh2010079002demososo', 'cate20160120_0907499941', 'n', 'cn', '人才招聘', NULL, 'y', 'n', 50, 1, 'y', '添加主类', '', 'no', 'node', 20, 'list_text', '', 'detail_normal', '', 3, 100, 300, 300, NULL, NULL, 'y', 'shop_priceold:##hide==#==shop_price:##hide==#==shop_currency:##==#==shop_currencycn:##==#==shop_linktitle:##==#==formblockid:##==#==authorcate:##hide==#==authorcompanycate:##hide==#==authordatecate:##hide==#==authorhitcate:##hide==#==news_title:##==#==news_moretitle:##==#==sta_fontsize:##y==#==sta_sharebtn:##y==#==sta_tag:##n==#==nextprev:##nextprev.php==#==relativetitle:##相关文章==#==relativefg:##relative_text.php', NULL, NULL, NULL),
(27, 'cate20160120_0907499941', 'bh2010079002demososo', 'csub20160120_0909049705', 'n', 'cn', '产品开发', NULL, 'y', 'n', 50, 1, 'y', '', '', 'no', 'node', 20, 'list_text', '', 'detail_normal', '', 3, 100, 150, 150, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(28, 'cate20160120_0907499941', 'bh2010079002demososo', 'csub20160120_0909109474', 'n', 'cn', '销售', NULL, 'y', 'n', 50, 1, 'y', '', '', 'no', 'node', 20, 'list_text', '', 'detail_normal', '', 3, 100, 150, 150, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(29, 'cate20160120_0907499941', 'bh2010079002demososo', 'csub20160120_0909201766', 'n', 'cn', '市场部门', NULL, 'y', 'n', 50, 1, 'y', '', '', 'no', 'node', 20, 'list_text', '', 'detail_normal', '', 3, 100, 150, 150, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(30, '0', 'bh2010079002demososo', 'cate20160120_0933312300', 'n', 'cn', '资料下载', NULL, 'y', 'n', 50, 1, 'y', '添加主类', '', 'no', 'node', 20, 'list_text', '', 'detail_normal', '', 3, 100, 250, 250, NULL, NULL, 'y', 'shop_priceold:##hide==#==shop_price:##hide==#==shop_currency:##==#==shop_currencycn:##==#==shop_linktitle:##==#==formblockid:##==#==authorcate:##hide==#==authorcompanycate:##hide==#==authordatecate:##hide==#==authorhitcate:##hide==#==news_title:##==#==news_moretitle:##==#==sta_fontsize:##y==#==sta_sharebtn:##y==#==sta_tag:##n==#==nextprev:##nextprev.php==#==relativetitle:##相关下载==#==relativefg:##relative_text.php', NULL, NULL, NULL),
(184, 'cate20160707_0437114782', 'bh2010079002demososo', 'csub20171215_1731334710', 'style20180224_1720347037', 'cn', '手风琴 accord', NULL, 'y', 'n', 555, 1, 'y', NULL, NULL, 'no', 'blockdh', 20, 'list_text', NULL, 'detail_normal', NULL, 3, 100, 250, 250, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(31, 'cate20160120_0933312300', 'bh2010079002demososo', 'csub20160120_0933583105', 'n', 'cn', '下载分类1', NULL, 'y', 'n', 50, 1, 'y', '', '', 'no', 'node', 20, 'list_text', '', 'detail_normal', '', 3, 100, 150, 150, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(32, 'cate20160120_0933312300', 'bh2010079002demososo', 'csub20160120_0934036573', 'n', 'cn', '下载分类2', NULL, 'y', 'n', 50, 1, 'y', '', '', 'no', 'node', 20, 'list_text', '', 'detail_normal', '', 3, 100, 150, 150, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(33, 'cate20160120_0933312300', 'bh2010079002demososo', 'csub20160120_0934083457', 'n', 'cn', '下载分类3', NULL, 'y', 'n', 50, 1, 'y', '', '', 'no', 'node', 20, 'list_text', '', 'detail_normal', '', 3, 100, 150, 150, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(37, '0', 'bh2010079002demososo', 'cate20160410_0658287350', 'n', 'cn', '视频中心', NULL, 'y', 'n', 50, 1, 'y', '添加主类', '', 'no', 'node', 20, 'list_grid_video', 'imghg210', 'detail_normal', '', 3, 100, 300, 300, NULL, NULL, 'y', 'shop_priceold:##hide==#==shop_price:##hide==#==shop_currency:##==#==shop_currencycn:##==#==shop_linktitle:##==#==formblockid:##==#==authorcate:##hide==#==authorcompanycate:##hide==#==authordatecate:##hide==#==authorhitcate:##hide==#==news_title:##==#==news_moretitle:##==#==sta_fontsize:##y==#==sta_sharebtn:##y==#==sta_tag:##n==#==nextprev:##nextprev.php==#==relativetitle:##相关视频==#==relativefg:##relative_grid.php', NULL, NULL, NULL),
(38, 'cate20160410_0658287350', 'bh2010079002demososo', 'csub20160410_0658592970', 'n', 'cn', '视频分类1', NULL, 'y', 'n', 50, 1, 'y', '', '', 'no', 'node', 20, 'list_grid_video', 'imghg210 bgvideo', 'detail_normal', '', 3, 100, 150, 150, NULL, NULL, 'y', NULL, '', '', ''),
(39, 'cate20160410_0658287350', 'bh2010079002demososo', 'csub20160410_0659073489', 'n', 'cn', '视频分类2', NULL, 'y', 'n', 50, 1, 'y', '', '', 'no', 'node', 20, 'list_grid_video', 'imghg210 bgvideo', 'detail_normal', '', 3, 100, 150, 150, NULL, NULL, 'y', NULL, '', '', ''),
(40, 'cate20150805_1133251007', 'bh2010079002demososo', 'csub20160603_1044113807', 'n', 'cn', '公司新闻4', NULL, 'y', 'n', 50, 1, 'y', '', '', 'no', 'node', 20, 'list_text', '', 'detail_normal', '20160215_113655_8906.png', 3, 100, 250, 250, NULL, NULL, 'y', NULL, 'asdf', 'asdfasd', 'asdf'),
(54, '0', 'bh2010079002demososo', 'cate20160707_0437114782', 'n', 'cn', '效果区块管理', NULL, 'y', 'y', 50, 1, 'y', '添加主类', '', 'no', 'blockdh', 5, 'list_text', '', 'detail_normal', NULL, 3, 100, 250, 250, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(58, 'cate20160707_0437114782', 'bh2010079002demososo', 'csub20160707_0905038793', 'style20180224_1720347037', 'cn', '蓝色企业幻灯片', NULL, 'y', 'n', 555, 2, 'y', NULL, '', 'no', 'blockdh', 20, 'list_text', NULL, 'detail_normal', '', 3, 100, 250, 250, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(65, 'cate20160707_0437114782', 'bh2010079002demososo', 'csub20160707_0914597182', 'y', 'cn', '800px的幻灯片，可用于移动端', NULL, 'y', 'n', 555, 2, 'y', NULL, NULL, 'no', 'blockdh', 20, 'list_text', NULL, 'detail_normal', NULL, 3, 100, 250, 250, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(67, 'cate20160707_0437114782', 'bh2010079002demososo', 'csub20160707_1140595619', 'y', 'cn', 'tab切换内容-我们的服务 - 2', NULL, 'y', 'n', 150, 2, 'y', NULL, '', 'no', 'blockdh', 20, 'list_text', NULL, 'detail_normal', '', 3, 100, 250, 250, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(68, 'cate20160707_0437114782', 'bh2010079002demososo', 'csub20160708_0508436425', 'y', 'cn', '客户评价', NULL, 'y', 'n', 135, 1, 'y', NULL, NULL, 'no', 'blockdh', 20, 'list_text', NULL, 'detail_normal', NULL, 3, 100, 250, 250, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(69, 'cate20160707_0437114782', 'bh2010079002demososo', 'csub20160708_0508536755', 'y', 'cn', '我们的服务-2列（小图标）', NULL, 'y', 'n', 149, 1, 'y', NULL, '', 'no', 'blockdh', 20, 'list_text', NULL, 'detail_normal', '', 3, 100, 250, 250, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(70, 'cate20160707_0437114782', 'bh2010079002demososo', 'csub20160708_0509074359', 'y', 'cn', '我们的客户', NULL, 'n', 'n', 50, 1, 'y', NULL, NULL, 'no', 'blockdh', 20, 'list_text', NULL, 'detail_normal', NULL, 3, 100, 250, 250, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(72, 'cate20160707_0437114782', 'bh2010079002demososo', 'csub20160708_0511229047', 'y', 'cn', '为什么选择我们', NULL, 'y', 'n', 50, 1, 'y', NULL, NULL, 'no', 'blockdh', 20, 'list_text', NULL, 'detail_normal', NULL, 3, 100, 250, 250, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(73, 'cate20160707_0437114782', 'bh2010079002demososo', 'csub20160712_0612125031', 'y', 'cn', '首页幻灯片效果 -eislideshow', NULL, 'y', 'n', 555, 2, 'y', NULL, NULL, 'no', 'blockdh', 20, 'list_text', NULL, 'detail_normal', NULL, 3, 100, 250, 250, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(116, 'cate20160707_0437114782', 'bh2010079002demososo', 'csub20170214_1756444189', 'y', 'cn', '关于我们', NULL, 'y', 'n', 155, 1, 'y', NULL, NULL, 'no', 'blockdh', 20, 'list_text', NULL, 'detail_normal', NULL, 3, 100, 250, 250, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(140, 'cate20160707_0437114782', 'bh2010079002demososo', 'csub20170426_1859253747', 'style20180224_1720347037', 'cn', '全屏幻灯片 fullscreen default03', NULL, 'y', 'n', 500, 1, 'y', NULL, NULL, 'no', 'blockdh', 20, 'list_text', NULL, 'detail_normal', NULL, 3, 100, 250, 250, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(183, 'cate20160707_0437114782', 'bh2010079002demososo', 'csub20171212_1153095561', 'y', 'cn', 'water01模板的幻灯片', NULL, 'y', 'n', 555, 1, 'y', NULL, NULL, 'no', 'blockdh', 20, 'list_text', NULL, 'detail_normal', NULL, 3, 100, 250, 250, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(177, 'cate20160707_0437114782', 'bh2010079002demososo', 'csub20171207_1040119631', 'style20180224_1720347037', 'cn', '关于我们的内容--strip', NULL, 'y', 'n', 50, 1, 'y', NULL, NULL, 'no', 'blockdh', 20, 'list_text', NULL, 'detail_normal', NULL, 3, 100, 250, 250, NULL, NULL, 'y', NULL, NULL, NULL, NULL),
(178, 'cate20160707_0437114782', 'bh2010079002demososo', 'csub20171207_1040184257', 'style20180224_1720347037', 'cn', '我们的服务--多列', NULL, 'y', 'n', 50, 1, 'y', NULL, NULL, 'no', 'blockdh', 20, 'list_text', NULL, 'detail_normal', NULL, 3, 100, 250, 250, NULL, NULL, 'y', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `zzz_column`
--

CREATE TABLE `zzz_column` (
  `id` int(11) NOT NULL,
  `pid` varchar(50) NOT NULL DEFAULT '0',
  `pidname` varchar(100) NOT NULL,
  `pbh` varchar(50) NOT NULL DEFAULT 'n',
  `type` varchar(50) DEFAULT NULL COMMENT 'region or page or group',
  `lang` varchar(50) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `cssname` varchar(50) DEFAULT NULL,
  `sta_visible` varchar(1) NOT NULL DEFAULT 'y',
  `pos` int(3) DEFAULT '50',
  `kv` varchar(100) DEFAULT NULL,
  `kvtitle` varchar(200) DEFAULT NULL,
  `desp` text,
  `desptext` text,
  `arr_can` text,
  `width` varchar(20) DEFAULT NULL,
  `floattype` varchar(20) DEFAULT NULL,
  `onlyposi` char(1) DEFAULT 'n' COMMENT 'no content ,only position'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_column`
--

INSERT INTO `zzz_column` (`id`, `pid`, `pidname`, `pbh`, `type`, `lang`, `name`, `cssname`, `sta_visible`, `pos`, `kv`, `kvtitle`, `desp`, `desptext`, `arr_can`, `width`, `floattype`, `onlyposi`) VALUES
(40, 'sregion20160923_1305203022', 'colu20170914_1813555437', 'bh2010079002demososo', 'region', 'cn', '文字', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'colhalf', 'fl', 'n'),
(39, 'sregion20160923_1305203022', 'colu20170914_1813504419', 'bh2010079002demososo', 'region', 'cn', '图片', NULL, 'y', 500, NULL, NULL, NULL, NULL, NULL, 'colhalf', 'fl', 'n'),
(38, 'group20160509_1200413359', 'colu20170914_1755237816', 'bh2010079002demososo', 'group', 'cn', '标题', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'col_3f5', 'fl', 'n'),
(67, 'sreg20170921_1239261001', 'colu20170921_1241399188', 'bh2010079002demososo', 'region', 'cn', '图片', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'colhalf', 'fl', 'n'),
(66, 'sreg20170921_1239261001', 'colu20170921_1241338733', 'bh2010079002demososo', 'region', 'cn', '文字', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'colhalf', 'fl', 'n'),
(37, 'group20160509_1200413359', 'colu20170914_1755204518', 'bh2010079002demososo', 'group', 'cn', '标题', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'col_2f5', 'fl', 'n'),
(42, 'sregion20160923_1305203022', 'colu20170920_1538003836', 'bh2010079002demososo', 'region', 'cn', '标题', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'col_1f6', 'clear', 'n'),
(44, 'group20170920_1717255504', 'colu20170920_1717466496', 'bh2010079002demososo', 'group', 'cn', '返回顶部', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'colfull', 'poa', 'n'),
(45, 'group20170920_1717255504', 'colu20170920_1718203997', 'bh2010079002demososo', 'group', 'cn', '网站模板演示', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'colfull', 'poa', 'n'),
(57, 'group20170921_1137442079', 'colu20170921_1138225871', 'bh2010079002demososo', 'group', 'cn', '联系我们', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'colfull', 'fl', 'n'),
(58, 'group20170921_1137442079', 'colu20170921_1138331265', 'bh2010079002demososo', 'group', 'cn', 'DM视频教程', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'colfull', 'fl', 'n'),
(59, 'group20170921_1137442079', 'colu20170921_1138459407', 'bh2010079002demososo', 'group', 'cn', '标签', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'colfull', 'fl', 'n'),
(60, 'group20170921_1137442079', 'colu20170921_1138528459', 'bh2010079002demososo', 'group', 'cn', '侧边栏的新闻', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'colfull', 'fl', 'n'),
(75, 'group20170920_1717255504', 'colu20171012_0857027802', 'bh2010079002demososo', 'group', 'cn', '在线咨询', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'colfull', 'poa', 'n'),
(84, 'sreg20180224_1440568807', 'colu20180224_1441239930', 'bh2010079002demososo', 'region', 'cn', '关于我们', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'col_1f4', 'fl', 'n'),
(85, 'sreg20180224_1440568807', 'colu20180224_1441348425', 'bh2010079002demososo', 'region', 'cn', '公司', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'col_1f4', 'fl', 'n'),
(86, 'sreg20180224_1440568807', 'colu20180224_1441431609', 'bh2010079002demososo', 'region', 'cn', '联系方式', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'col_1f4', 'fl', 'n'),
(87, 'sreg20180224_1440568807', 'colu20180224_1441527142', 'bh2010079002demososo', 'region', 'cn', '关于我们', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'col_1f4', 'fl', 'n'),
(88, 'sreg20180224_1441047790', 'colu20180224_1445492913', 'bh2010079002demososo', 'region', 'cn', '版权信息', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'col_2f5', 'fl', 'n'),
(89, 'sreg20180224_1441047790', 'colu20180224_1445595161', 'bh2010079002demososo', 'region', 'cn', '统计代码', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'col_1f5', 'fl', 'n'),
(90, 'sreg20180224_1441047790', 'colu20180224_1446114928', 'bh2010079002demososo', 'region', 'cn', '一些链接', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'col_2f5', 'fl', 'n'),
(91, 'group20180303_1220043665', 'colu20180305_1058373875', 'bh2010079002demososo', 'group', 'cn', '文字', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'col_2f5', 'fl', 'n'),
(92, 'group20180303_1220043665', 'colu20180305_1058499246', 'bh2010079002demososo', 'group', 'cn', '表单', NULL, 'y', 50, NULL, NULL, NULL, NULL, NULL, 'col_3f5', 'fl', 'n');

-- --------------------------------------------------------

--
-- 表的结构 `zzz_comment`
--

CREATE TABLE `zzz_comment` (
  `id` int(11) NOT NULL,
  `pid` varchar(50) NOT NULL DEFAULT '0',
  `pidname` varchar(100) NOT NULL,
  `nodepidname` varchar(99) DEFAULT NULL,
  `pbh` varchar(50) NOT NULL DEFAULT 'n',
  `lang` varchar(50) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `sta_visible` varchar(1) NOT NULL DEFAULT 'y',
  `type` varchar(50) NOT NULL DEFAULT 'page' COMMENT 'page or contact or product or ordernow',
  `sta_noaccess` char(1) NOT NULL DEFAULT 'n',
  `pos` int(3) DEFAULT '50',
  `tokenhour` varchar(50) DEFAULT NULL,
  `desp` text,
  `ip` varchar(50) DEFAULT NULL,
  `dateday` date DEFAULT NULL,
  `dateedit` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_comment`
--

INSERT INTO `zzz_comment` (`id`, `pid`, `pidname`, `nodepidname`, `pbh`, `lang`, `name`, `sta_visible`, `type`, `sta_noaccess`, `pos`, `tokenhour`, `desp`, `ip`, `dateday`, `dateedit`) VALUES
(99, '0', '', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'contact', 'n', 50, 'inq_20170421_12', '昵称：asfdf&lt;br /&gt;电子邮箱：asfas@asdf.com&lt;br /&gt;手机：13566666666&lt;br /&gt;内容：asfasfdas', '127.0.0.1', '2017-04-21', '2017-04-21 12:16:32'),
(91, '0', '', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'contact', 'n', 50, 'inq_20170120_18', '昵称：sa&lt;br /&gt;电子邮箱：as@asd.com&lt;br /&gt;手机：13566666666&lt;br /&gt;内容：asf', '127.0.0.1', '2017-01-20', '2017-01-20 18:30:16'),
(100, '0', '', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'contact', 'n', 50, 'inq_20170622_10', '昵称：asdf&lt;br /&gt;电子邮箱：2sf@sdf.com&lt;br /&gt;手机：13565656565&lt;br /&gt;内容：asdfasdf', '127.0.0.1', '2017-06-22', '2017-06-22 10:23:59'),
(136, '0', 'comm20171008_1710155272', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'ordernow', 'n', 50, 'inq_20171008_17', '姓名：adasdf&lt;br /&gt;数量：1&lt;br /&gt;联系方式：adf&lt;br /&gt;电子邮箱：ads@asdfa.com&lt;br /&gt;地址：adf&lt;br /&gt;支付方式：货到付款&lt;br /&gt;补充内容：请输入补充信息', '127.0.0.1', '2017-10-08', '2017-10-08 17:10:15'),
(137, '0', 'comm20171008_1712069256', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'ordernow', 'n', 50, 'inq_20171008_17', '姓名：ads&lt;br /&gt;数量：1&lt;br /&gt;联系方式：aaa&lt;br /&gt;电子邮箱：aaaa@adsf.com&lt;br /&gt;地址：aaaaa&lt;br /&gt;支付方式：货到付款&lt;br /&gt;补充内容：请输入补充信息aaa', '127.0.0.1', '2017-10-08', '2017-10-08 17:12:06'),
(138, '0', 'comm20171008_1713199474', '11', 'bh2010079002demososo', 'cn', NULL, 'y', 'ordernow', 'n', 50, 'inq_20171008_17', '姓名：sdss&lt;br /&gt;数量：1&lt;br /&gt;联系方式：ssssss&lt;br /&gt;电子邮箱：ss@sdf.com&lt;br /&gt;地址：aaa&lt;br /&gt;支付方式：货到付款&lt;br /&gt;补充内容：请输入补充信息', '127.0.0.1', '2017-10-08', '2017-10-08 17:13:19'),
(139, '0', 'comm20171009_1726474451', '11', 'bh2010079002demososo', 'cn', NULL, 'y', 'ordernow', 'n', 50, 'inq_20171009_17', '姓名：式111111111111&lt;br /&gt;数量：2&lt;br /&gt;联系方式：122222222222222&lt;br /&gt;电子邮箱：222@ad.com&lt;br /&gt;地址：asdfas&lt;br /&gt;支付方式：货到付款&lt;br /&gt;补充内容：请输入补充信息aaaaaaaaaaa', '127.0.0.1', '2017-10-09', '2017-10-09 17:26:47'),
(116, '0', 'comm20171008_1601238915', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'ordernow', 'n', 50, 'inq_20171008_16', '姓名：sd&lt;br /&gt;数量：1&lt;br /&gt;联系方式：sd&lt;br /&gt;电子邮箱：saa@adf&lt;br /&gt;地址：asd&lt;br /&gt;支付方式：货到付款&lt;br /&gt;内容：请输入补充信息', '127.0.0.1', '2017-10-08', '2017-10-08 16:01:23'),
(117, '0', 'comm20171008_1602385218', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'ordernow', 'n', 50, 'inq_20171008_16', '姓名：dds&lt;br /&gt;数量：1&lt;br /&gt;联系方式：asd&lt;br /&gt;电子邮箱：asd@asd&lt;br /&gt;地址：asd&lt;br /&gt;支付方式：货到付款&lt;br /&gt;内容：请输入补充信息', '127.0.0.1', '2017-10-08', '2017-10-08 16:02:38'),
(118, '0', 'comm20171008_1604177391', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'ordernow', 'n', 50, 'inq_20171008_16', '姓名：a&lt;br /&gt;数量：1&lt;br /&gt;联系方式：aa&lt;br /&gt;电子邮箱：aa@aa.com&lt;br /&gt;地址：aaa&lt;br /&gt;支付方式：货到付款&lt;br /&gt;内容：请输入补充信息', '127.0.0.1', '2017-10-08', '2017-10-08 16:04:17'),
(119, '0', 'comm20171008_1606483483', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'ordernow', 'n', 50, 'inq_20171008_16', '姓名：ss&lt;br /&gt;数量：1&lt;br /&gt;联系方式：ss&lt;br /&gt;电子邮箱：ss@ds.c&lt;br /&gt;地址：asd&lt;br /&gt;支付方式：货到付款&lt;br /&gt;内容：请输入补充信息', '127.0.0.1', '2017-10-08', '2017-10-08 16:06:48'),
(120, '0', 'comm20171008_1606508250', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'ordernow', 'n', 50, 'inq_20171008_16', '姓名：ss&lt;br /&gt;数量：1&lt;br /&gt;联系方式：ss&lt;br /&gt;电子邮箱：ss@ds.c&lt;br /&gt;地址：asd&lt;br /&gt;支付方式：货到付款&lt;br /&gt;内容：请输入补充信息', '127.0.0.1', '2017-10-08', '2017-10-08 16:06:50'),
(121, '0', 'comm20171008_1606593434', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'ordernow', 'n', 50, 'inq_20171008_16', '姓名：ss&lt;br /&gt;数量：1&lt;br /&gt;联系方式：ss&lt;br /&gt;电子邮箱：ss@ds.c&lt;br /&gt;地址：asd&lt;br /&gt;支付方式：货到付款&lt;br /&gt;内容：请输入补充信息', '127.0.0.1', '2017-10-08', '2017-10-08 16:06:59'),
(122, '0', 'comm20171008_1610372161', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'ordernow', 'n', 50, 'inq_20171008_16', '姓名：sdf&lt;br /&gt;数量：1&lt;br /&gt;联系方式：a&lt;br /&gt;电子邮箱：asd@asdfc.cad&lt;br /&gt;地址：asd&lt;br /&gt;支付方式：货到付款&lt;br /&gt;内容：请输入补充信息', '127.0.0.1', '2017-10-08', '2017-10-08 16:10:37'),
(123, '0', 'comm20171008_1610419539', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'ordernow', 'n', 50, 'inq_20171008_16', '姓名：sdf&lt;br /&gt;数量：1&lt;br /&gt;联系方式：a&lt;br /&gt;电子邮箱：asd@asdfc.cad&lt;br /&gt;地址：asd&lt;br /&gt;支付方式：货到付款&lt;br /&gt;内容：请输入补充信息', '127.0.0.1', '2017-10-08', '2017-10-08 16:10:41'),
(127, '0', 'comm20171008_1614454992', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'contact', 'n', 50, 'inq_20171008_16', '昵称：asd&lt;br /&gt;电子邮箱：aa@aa.com&lt;br /&gt;手机：13566666666&lt;br /&gt;内容：sdf', '127.0.0.1', '2017-10-08', '2017-10-08 16:14:45'),
(132, '0', 'comm20171008_1629008528', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'ordernow', 'n', 50, 'inq_20171008_16', '姓名：admina11&lt;br /&gt;数量：1&lt;br /&gt;联系方式：222&lt;br /&gt;电子邮箱：333@sd.com&lt;br /&gt;地址：44&lt;br /&gt;支付方式：货到付款&lt;br /&gt;补充内容：请输入补充信息4555', '127.0.0.1', '2017-10-08', '2017-10-08 16:29:00'),
(133, '0', 'comm20171008_1629522002', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'ordernow', 'n', 50, 'inq_20171008_16', '姓名：111111111111&lt;br /&gt;数量：1&lt;br /&gt;联系方式：22222222222&lt;br /&gt;电子邮箱：a22@ad.com&lt;br /&gt;地址：344444444444444&lt;br /&gt;支付方式：货到付款&lt;br /&gt;补充内容：请输入补充信息444455555555555555555', '127.0.0.1', '2017-10-08', '2017-10-08 16:29:52'),
(134, '0', 'comm20171008_1630478252', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'ordernow', 'n', 50, 'inq_20171008_16', '姓名：111&lt;br /&gt;数量：1&lt;br /&gt;联系方式：222&lt;br /&gt;电子邮箱：2asdf@ad.com&lt;br /&gt;地址：444&lt;br /&gt;支付方式：货到付款&lt;br /&gt;补充内容：请输入补充信息555555555555', '127.0.0.1', '2017-10-08', '2017-10-08 16:30:47'),
(135, '0', 'comm20171008_1631452760', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'ordernow', 'n', 50, 'inq_20171008_16', '姓名：adsadsf&lt;br /&gt;数量：1&lt;br /&gt;联系方式：135sdff&lt;br /&gt;电子邮箱：1da@asdasf.com&lt;br /&gt;地址：adsfddddddddddddddressss&lt;br /&gt;支付方式：货到付款&lt;br /&gt;补充内容：请输入补充信息ssssssssssssss', '127.0.0.1', '2017-10-08', '2017-10-08 16:31:45'),
(142, '0', 'comm20171122_1303399393', '252', 'bh2010079002demososo', 'cn', NULL, 'y', 'ordernow', 'n', 50, 'inq_20171122_13', '姓名：asfda&lt;br /&gt;数量：1&lt;br /&gt;联系方式：asd&lt;br /&gt;电子邮箱：asda@asdf.com&lt;br /&gt;地址：asdf&lt;br /&gt;支付方式：货到付款&lt;br /&gt;补充内容：请输入补充信息asdf', '127.0.0.1', '2017-11-22', '2017-11-22 13:03:39'),
(143, '0', 'comm20171122_1303454547', '252', 'bh2010079002demososo', 'cn', NULL, 'y', 'ordernow', 'n', 50, 'inq_20171122_13', '姓名：asfda&lt;br /&gt;数量：1&lt;br /&gt;联系方式：asd&lt;br /&gt;电子邮箱：asda@asdf.com&lt;br /&gt;地址：asdf&lt;br /&gt;支付方式：货到付款&lt;br /&gt;补充内容：请输入补充信息asdf', '127.0.0.1', '2017-11-22', '2017-11-22 13:03:45'),
(144, '0', 'comm20171122_1303583986', '252', 'bh2010079002demososo', 'cn', NULL, 'y', 'ordernow', 'n', 50, 'inq_20171122_13', '姓名：asfda&lt;br /&gt;数量：1&lt;br /&gt;联系方式：asd&lt;br /&gt;电子邮箱：asda@asdf.com&lt;br /&gt;地址：asdf&lt;br /&gt;支付方式：货到付款&lt;br /&gt;补充内容：请输入补充信息asdf', '127.0.0.1', '2017-11-22', '2017-11-22 13:03:58'),
(145, '0', 'comm20171122_1304021066', '252', 'bh2010079002demososo', 'cn', NULL, 'y', 'ordernow', 'n', 50, 'inq_20171122_13', '姓名：asfdaccc&lt;br /&gt;数量：1&lt;br /&gt;联系方式：asd&lt;br /&gt;电子邮箱：asda@asdf.com&lt;br /&gt;地址：asdf&lt;br /&gt;支付方式：货到付款&lt;br /&gt;补充内容：请输入补充信息asdf', '127.0.0.1', '2017-11-22', '2017-11-22 13:04:02'),
(146, '0', 'comm20171122_1619418512', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'contact', 'n', 50, 'inq_20171122_16', '昵称：asdfasfd&lt;br /&gt;电子邮箱：asf@asdfa.com&lt;br /&gt;手机：13566666662&lt;br /&gt;内容：asdfasdf', '127.0.0.1', '2017-11-22', '2017-11-22 16:19:41'),
(158, 'form20180218_1250088582', 'comm20180218_1759106961', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180218_17', '表单标题：dasfas2222xxx\naaaddss: wwww&lt;br /&gt;\nselect: sel2222&lt;br /&gt;\nradio: r11&lt;br /&gt;\ncheckbox: 11111,22222,&lt;br /&gt;', '127.0.0.1', '2018-02-18', '2018-02-18 17:59:10'),
(159, 'form20180218_1250088582', 'comm20180218_1759326311', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180218_17', '表单标题：dasfas2222xxx\naaaddss: wwww&lt;br /&gt;\nselect: sel2222&lt;br /&gt;\nradio: r11&lt;br /&gt;\ncheckbox: 11111,22222,&lt;br /&gt;', '127.0.0.1', '2018-02-18', '2018-02-18 17:59:32'),
(160, 'form20180218_1250088582', 'comm20180218_1759537036', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180218_17', '表单标题：dasfas2222xxx\naaaddss: fsa&lt;br /&gt;\nselect: sel2222&lt;br /&gt;\nradio: r11&lt;br /&gt;\ncheckbox: &lt;br /&gt;', '127.0.0.1', '2018-02-18', '2018-02-18 17:59:53'),
(161, 'form20180218_1250088582', 'comm20180218_2112191795', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180218_21', '表单标题：dasfas2222xxx\naaaddss: &lt;br /&gt;\nselect: sel2222&lt;br /&gt;\nradio: r11&lt;br /&gt;\ncheckbox: 3333,11111,22222,&lt;br /&gt;', '127.0.0.1', '2018-02-18', '2018-02-18 21:12:19'),
(162, 'form20180218_1250088582', 'comm20180218_2112202705', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180218_21', '表单标题：dasfas2222xxx\naaaddss: &lt;br /&gt;\nselect: sel2222&lt;br /&gt;\nradio: r11&lt;br /&gt;\ncheckbox: 3333,11111,22222,&lt;br /&gt;', '127.0.0.1', '2018-02-18', '2018-02-18 21:12:20'),
(163, 'form20180218_1250088582', 'comm20180218_2112289874', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180218_21', '表单标题：dasfas2222xxx\naaaddss: &lt;br /&gt;\nselect: sel1111&lt;br /&gt;\nradio: r11&lt;br /&gt;\ncheckbox: &lt;br /&gt;', '127.0.0.1', '2018-02-18', '2018-02-18 21:12:28'),
(164, 'form20180218_1250088582', 'comm20180218_2112359709', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180218_21', '表单标题：dasfas2222xxx\naaaddss: &lt;br /&gt;\nselect: sel1111&lt;br /&gt;\nradio: r11&lt;br /&gt;\ncheckbox: &lt;br /&gt;', '127.0.0.1', '2018-02-18', '2018-02-18 21:12:35'),
(165, 'form20180218_1250088582', 'comm20180218_2112407184', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180218_21', '表单标题：dasfas2222xxx\naaaddss: &lt;br /&gt;\nselect: sel1111&lt;br /&gt;\nradio: r11&lt;br /&gt;\ncheckbox: &lt;br /&gt;', '127.0.0.1', '2018-02-18', '2018-02-18 21:12:40'),
(166, 'form20180218_1250088582', 'comm20180218_2114065167', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180218_21', '表单标题：dasfas2222xxx\naaaddss: &lt;br /&gt;\nselect: sel1111&lt;br /&gt;\nradio: r11&lt;br /&gt;\ncheckbox: &lt;br /&gt;', '127.0.0.1', '2018-02-18', '2018-02-18 21:14:06'),
(167, 'form20180218_1250088582', 'comm20180218_2116373079', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180218_21', '表单标题：dasfas2222xxx\naaaddss: ssssssssssssss&lt;br /&gt;\nselect: sel1111&lt;br /&gt;\nradio: r11&lt;br /&gt;\ncheckbox: &lt;br /&gt;', '127.0.0.1', '2018-02-18', '2018-02-18 21:16:37'),
(168, 'form20180218_1250088582', 'comm20180218_2117169484', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180218_21', '表单标题：dasfas2222xxx&lt;br /&gt;\naaaddss: 111111111111111&lt;br /&gt;\nselect: sel1111&lt;br /&gt;\nradio: r11&lt;br /&gt;\ncheckbox: &lt;br /&gt;', '127.0.0.1', '2018-02-18', '2018-02-18 21:17:16'),
(169, 'form20180218_1250088582', 'comm20180222_1157281328', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180222_11', '表单标题：dasfas2222xxx&lt;br /&gt;\naaaddss: &lt;br /&gt;\nselect: sel1111&lt;br /&gt;\nradio: r11&lt;br /&gt;\ncheckbox: &lt;br /&gt;', '127.0.0.1', '2018-02-22', '2018-02-22 11:57:28'),
(170, 'form20180218_1250088582', 'comm20180222_1459296870', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180222_14', '表单标题：dasfas2222xxx&lt;br /&gt;\n姓名 :\n: &lt;br /&gt;\nselect :\n: sel1111&lt;br /&gt;\nradio :\n: r11&lt;br /&gt;\ncheckbox :\n: &lt;br /&gt;\nemail :\n: &lt;br /&gt;\n手机 :\n: &lt;br /&gt;\n年龄 :\n: &lt;br /&gt;', '127.0.0.1', '2018-02-22', '2018-02-22 14:59:29'),
(171, 'form20180218_1250088582', 'comm20180223_1019095550', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180223_10', '表单标题：dasfas2222xxx&lt;br /&gt;\n姓名 :\n: &lt;br /&gt;\nselect :\n: sel1111&lt;br /&gt;\nradio :\n: r11&lt;br /&gt;\ncheckbox :\n: &lt;br /&gt;\nemail :\n: &lt;br /&gt;\n手机 :\n: &lt;br /&gt;\n年龄 :\n: &lt;br /&gt;\n爱好 :\n: &lt;br /&gt;', '127.0.0.1', '2018-02-23', '2018-02-23 10:19:09'),
(172, 'form20180218_1250088582', 'comm20180223_1019137490', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180223_10', '表单标题：dasfas2222xxx&lt;br /&gt;\n姓名 :\n: &lt;br /&gt;\nselect :\n: sel1111&lt;br /&gt;\nradio :\n: r11&lt;br /&gt;\ncheckbox :\n: &lt;br /&gt;\nemail :\n: &lt;br /&gt;\n手机 :\n: &lt;br /&gt;\n年龄 :\n: &lt;br /&gt;\n爱好 :\n: &lt;br /&gt;', '127.0.0.1', '2018-02-23', '2018-02-23 10:19:13'),
(173, 'form20180218_1250088582', 'comm20180223_1208091916', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180223_12', '表单标题：dasfas2222xxx&lt;br /&gt;\n姓名 :\n: fgsdfg&lt;br /&gt;\nselect :\n: sel1111&lt;br /&gt;\nradio :\n: undefined&lt;br /&gt;\ncheckbox :\n: &lt;br /&gt;\nemail :\n: &lt;br /&gt;\n手机 :\n: &lt;br /&gt;\n年龄 :\n: &lt;br /&gt;\n爱好 :\n: &lt;br /&gt;', '127.0.0.1', '2018-02-23', '2018-02-23 12:08:09'),
(174, 'form20180218_1250088582', 'comm20180223_1209568825', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180223_12', '表单标题：dasfas2222xxx&lt;br /&gt;\n姓名 :\n: 土f&lt;br /&gt;\nselect :\n: sel1111&lt;br /&gt;\nradio :\n: undefined&lt;br /&gt;\ncheckbox :\n: &lt;br /&gt;\nemail :\n: &lt;br /&gt;\n手机 :\n: &lt;br /&gt;\n年龄 :\n: &lt;br /&gt;\n爱好 :\n: &lt;br /&gt;\n不能为空 :\n: adf&lt;br /&gt;', '127.0.0.1', '2018-02-23', '2018-02-23 12:09:56'),
(175, 'form20180218_1250088582', 'comm20180223_1433402492', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180223_14', '表单标题：dasfas2222xxx&lt;br /&gt;\n姓名 (*)\n :\n: adsf&lt;br /&gt;\nselect (*)\n :\n: sel1111&lt;br /&gt;\nradio (*)\n :\n: r222&lt;br /&gt;\ncheckbox (*)\n :\n: 11111,22222,&lt;br /&gt;\nemail (*)\n :\n: 21@asdf.com&lt;br /&gt;\n手机 (*)\n :\n: 13444444444&lt;br /&gt;\n年龄 (*)\n :\n: 2&lt;br /&gt;\n爱好\n :\n: &lt;br /&gt;\n不能为空 (*)\n :\n: das&lt;br /&gt;', '127.0.0.1', '2018-02-23', '2018-02-23 14:33:40'),
(176, 'form20180218_1250088582', 'comm20180223_1647365273', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180223_16', '表单标题：dasfas2222xxx&lt;br /&gt;姓名: sdds&lt;br /&gt;select: sel1111&lt;br /&gt;radio: r222&lt;br /&gt;checkbox: 11111,&lt;br /&gt;email: af@adsf.com&lt;br /&gt;手机: 13555555555&lt;br /&gt;年龄: 33&lt;br /&gt;爱好: &lt;br /&gt;不能为空: asfd&lt;br /&gt;内容: &lt;br /&gt;', '127.0.0.1', '2018-02-23', '2018-02-23 16:47:36'),
(177, 'form20180218_1250127063', 'comm20180223_1659586318', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180223_16', '表单标题：联系我们的表单&lt;br /&gt;昵称: asdf&lt;br /&gt;电子邮箱: sadf@asdf.com&lt;br /&gt;手机: 13666666666&lt;br /&gt;内容: &lt;br /&gt;', '127.0.0.1', '2018-02-23', '2018-02-23 16:59:58'),
(178, 'form20180223_1705033909', 'comm20180223_1926035025', NULL, 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180223_19', '表单标题：产品的表单&lt;br /&gt;订单数量: 3&lt;br /&gt;客户姓名: ads&lt;br /&gt;电子邮箱: asd@sdf.com&lt;br /&gt;手机: 13555555555&lt;br /&gt;详细地址: asdf&lt;br /&gt;客户留言: asf&lt;br /&gt;', '127.0.0.1', '2018-02-23', '2018-02-23 19:26:03'),
(179, 'form20180223_1705033909', 'comm20180223_2101127698', 'node20150806_0929404264', 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180223_21', '表单标题：产品的表单&lt;br /&gt;订单数量: 2&lt;br /&gt;客户姓名: dsas&lt;br /&gt;电子邮箱: aas@sdf.com&lt;br /&gt;手机: 13555555555&lt;br /&gt;详细地址: fdasdf&lt;br /&gt;客户留言: asfdaf&lt;br /&gt;', '127.0.0.1', '2018-02-23', '2018-02-23 21:01:12'),
(180, 'form20180223_1705033909', 'comm20180223_2107084489', 'node20150806_0929404264', 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180223_21', '表单标题：产品的表单&lt;br /&gt;文章：17.3英寸游戏本17.3英寸游戏本&lt;a href=&quot;http://127.0.0.6/dm2018/demoopencode/dm-opencodeform/detail-13.html&quot; target=&quot;_self&quot;&gt;17.3英寸游戏本17.3英寸游戏本&lt;/a&gt;&lt;br /&gt; 订单数量: 2&lt;br /&gt;客户姓名: as&lt;br /&gt;电子邮箱: asd@asdf.com&lt;br /&gt;手机: 13555555555&lt;br /&gt;详细地址: efasf&lt;br /&gt;客户留言: asdfasdf&lt;br /&gt;', '127.0.0.1', '2018-02-23', '2018-02-23 21:07:08'),
(181, 'form20180223_1705033909', 'comm20180223_2113474316', 'node20160820_0656309862', 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180223_21', '表单标题：产品的表单&lt;br /&gt;文章：黑色 移动联通电信4G手机 双卡双待&lt;a href=&quot;http://127.0.0.6/dm2018/demoopencode/dm-opencodeform/detail-252.html&quot; target=&quot;_self&quot;&gt;黑色 移动联通电信4G手机 双卡双待&lt;/a&gt;&lt;br /&gt; 订单数量: 3&lt;br /&gt;客户姓名: asdf&lt;br /&gt;电子邮箱: aasdfa@sfdj.com&lt;br /&gt;手机: 13555555555&lt;br /&gt;详细地址: asfdasf&lt;br /&gt;客户留言: asdfadsf&lt;br /&gt;', '127.0.0.1', '2018-02-23', '2018-02-23 21:13:47'),
(182, 'form20180223_1705033909', 'comm20180223_2114395855', 'node20160820_0656309862', 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180223_21', '表单标题：产品的表单&lt;br /&gt;文章：黑色 移动联通电信4G手机 双卡双待&lt;br /&gt; 订单数量: 6&lt;br /&gt;客户姓名: asdf&lt;br /&gt;电子邮箱: asfd@asdfc.com&lt;br /&gt;手机: 13666666666&lt;br /&gt;详细地址: fawfa&lt;br /&gt;客户留言: asfdasfd&lt;br /&gt;', '127.0.0.1', '2018-02-23', '2018-02-23 21:14:39'),
(183, 'form20180223_2133551842', 'comm20180223_2135272034', 'node20160406_0930259685', 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180223_21', '表单标题：新闻留言&lt;br /&gt;文章：男篮热身计划：5月VS澳洲6月战马其顿7月赴美&lt;br /&gt; 昵称:  &lt;br /&gt;内容: 要霍布斯sasfd &lt;br /&gt;', '127.0.0.1', '2018-02-23', '2018-02-23 21:35:27'),
(184, 'form20180223_2133551842', 'comm20180223_2141019240', 'node20160406_0930259685', 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180223_21', '表单标题：新闻留言&lt;br /&gt;文章：男篮热身计划：5月VS澳洲6月战马其顿7月赴美&lt;br /&gt; 昵称: ffgfgs&lt;br /&gt;内容: dfdsfsdgsd&lt;br /&gt;', '127.0.0.1', '2018-02-23', '2018-02-23 21:41:01'),
(185, 'form20180218_1250127063', 'comm20180228_1705419943', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180228_17', '表单标题：联系我们的表单&lt;br /&gt; 昵称: asdf&lt;br /&gt;电子邮箱: asdf@asdf.com&lt;br /&gt;手机: 13655555555&lt;br /&gt;内容: &lt;br /&gt;', '127.0.0.1', '2018-02-28', '2018-02-28 17:05:41'),
(186, 'form20180223_2133551842', 'comm20180305_1753187036', 'node20160406_0930259685', 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180305_17', '表单标题：新闻留言&lt;br /&gt;文章：男篮热身计划：5月VS澳洲6月战马其顿7月赴美&lt;br /&gt; 昵称: testtttt&lt;br /&gt;内容: asdfasfd&lt;br /&gt;', '127.0.0.1', '2018-03-05', '2018-03-05 17:53:18'),
(187, 'form20180218_1250127063', 'comm20180306_1611433572', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180306_16', '表单标题：undefined昵称: asdfasd&lt;br /&gt;电子邮箱: 135asd@asdf.com&lt;br /&gt;手机: 13566666666&lt;br /&gt;内容: asdf&lt;br /&gt;', '127.0.0.1', '2018-03-06', '2018-03-06 16:11:43'),
(188, 'form20180223_2133551842', 'comm20180306_1612269549', 'node20160406_0930259685', 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180306_16', '表单标题：新闻留言&lt;br /&gt;文章：男篮热身计划：5月VS澳洲6月战马其顿7月赴美&lt;br /&gt;昵称: asdf&lt;br /&gt;内容: asdfasdf&lt;br /&gt;', '127.0.0.1', '2018-03-06', '2018-03-06 16:12:26'),
(189, 'form20180223_2133551842', 'comm20180306_1629135084', 'node20160406_0930259685', 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180306_16', '表单标题：新闻留言&lt;br /&gt;文章：男篮热身计划：5月VS澳洲6月战马其顿7月赴美&lt;br /&gt;昵称: asdfas22222&lt;br /&gt;内容: as22222222222222222&lt;br /&gt;', '127.0.0.1', '2018-03-06', '2018-03-06 16:29:13'),
(190, 'form20180223_2133551842', 'comm20180306_1629294692', 'node20160406_0928025393', 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180306_16', '表单标题：新闻留言&lt;br /&gt;文章：洛城新王的尴尬!25+4+8他赢了比赛赢不了人心&lt;br /&gt;昵称: ffffff&lt;br /&gt;内容: ffffffffffffffffffffff\nasdfasasssssssssssss&lt;br /&gt;', '127.0.0.1', '2018-03-06', '2018-03-06 16:29:29'),
(191, 'form20180218_1250127063', 'comm20180306_1630031014', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180306_16', '表单标题：联系我们的表单昵称: 333333333&lt;br /&gt;电子邮箱: asd@asdf.com&lt;br /&gt;手机: 13555555555&lt;br /&gt;内容: 333333333333\n3333333333eddddddd\nsssssssssssssssss&lt;br /&gt;', '127.0.0.1', '2018-03-06', '2018-03-06 16:30:03'),
(192, 'form20180223_2133551842', 'comm20180306_1631053142', 'node20160406_0930259685', 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180306_16', '表单标题：新闻留言&lt;br /&gt;文章：男篮热身计划：5月VS澳洲6月战马其顿7月赴美&lt;br /&gt;昵称: asdf&lt;br /&gt;内容: asdf&lt;br /&gt;', '127.0.0.1', '2018-03-06', '2018-03-06 16:31:05'),
(193, 'form20180218_1250127063', 'comm20180314_1531081822', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180314_15', '表单标题：联系我们的表单昵称: 1111111111&lt;br /&gt;电子邮箱: 111@11.com&lt;br /&gt;手机: 13566666666&lt;br /&gt;内容: dddddddddddd&lt;br /&gt;', '127.0.0.1', '2018-03-14', '2018-03-14 15:31:08'),
(194, 'form20180218_1250127063', 'comm20180314_1640354488', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180314_16', '表单标题：联系我们的表单昵称: 222222222222222222&lt;br /&gt;电子邮箱: 2@22.com&lt;br /&gt;手机: 13555555555&lt;br /&gt;内容: cccccccccc&lt;br /&gt;', '127.0.0.1', '2018-03-14', '2018-03-14 16:40:35'),
(195, 'form20180218_1250127063', 'comm20180314_1640589163', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180314_16', '表单标题：联系我们的表单昵称: 22&lt;br /&gt;电子邮箱: 22@22.com&lt;br /&gt;手机: 13566666666&lt;br /&gt;内容: afasdf&lt;br /&gt;', '127.0.0.1', '2018-03-14', '2018-03-14 16:40:58'),
(196, 'form20180218_1250127063', 'comm20180314_1641201157', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180314_16', '表单标题：联系我们的表单昵称: adfasdf&lt;br /&gt;电子邮箱: af@asdf.com&lt;br /&gt;手机: 13777777777&lt;br /&gt;内容: asfdasfd\nasfdasfdasf&lt;br /&gt;', '127.0.0.1', '2018-03-14', '2018-03-14 16:41:20'),
(197, 'form20180218_1250127063', 'comm20180314_1641514336', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180314_16', '表单标题：联系我们的表单昵称: asfdasdf&lt;br /&gt;电子邮箱: asdfas@asdfasdf.com&lt;br /&gt;手机: 13666666666&lt;br /&gt;内容: asfgasdfasf\nasfdasfd&lt;br /&gt;', '127.0.0.1', '2018-03-14', '2018-03-14 16:41:51'),
(199, 'form20180218_1250127063', 'comm20180323_1254352273', '', 'bh2010079002demososo', 'cn', NULL, 'y', 'formblock', 'n', 50, 'inq_20180323_12', '表单标题：联系我们的表单昵称: asdf&lt;br /&gt;电子邮箱: asfd@asdfj.com&lt;br /&gt;手机: 13555555555&lt;br /&gt;内容: asdfasd&lt;br /&gt;', '127.0.0.1', '2018-03-23', '2018-03-23 12:54:35');

-- --------------------------------------------------------

--
-- 表的结构 `zzz_field`
--

CREATE TABLE `zzz_field` (
  `id` int(11) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `pbh` varchar(50) DEFAULT NULL,
  `pidname` varchar(50) NOT NULL,
  `lang` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `namefront` varchar(66) DEFAULT NULL,
  `sta_visible` char(1) NOT NULL DEFAULT 'y',
  `sta_must` char(1) NOT NULL DEFAULT 'n',
  `pos` int(3) NOT NULL DEFAULT '50',
  `typeinput` varchar(20) DEFAULT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'cate' COMMENT 'cate or other',
  `effect` varchar(100) DEFAULT NULL,
  `cssname` varchar(50) DEFAULT NULL,
  `error` varchar(20) NOT NULL DEFAULT 'error1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_field`
--

INSERT INTO `zzz_field` (`id`, `pid`, `pbh`, `pidname`, `lang`, `name`, `namefront`, `sta_visible`, `sta_must`, `pos`, `typeinput`, `type`, `effect`, `cssname`, `error`) VALUES
(43, 'block', 'bh2010079002demososo', 'form20180218_1250088582', 'cn', '表单测试', '表单测试', 'y', 'n', 50, NULL, 'block', 'form.php', '', 'error1'),
(44, 'block', 'bh2010079002demososo', 'form20180218_1250127063', 'cn', '联系我们的表单', '', 'y', 'n', 50, NULL, 'block', 'form.php', 'contactform', 'error1'),
(48, 'form20180218_1250088582', 'bh2010079002demososo', 'field20180218_1355397966', 'cn', 'radio', NULL, 'y', 'n', 50, 'radio', '', NULL, '', 'error1'),
(46, 'form20180218_1250088582', 'bh2010079002demososo', 'field20180218_1321499097', 'cn', 'select', NULL, 'y', 'n', 50, 'select', '', NULL, '', 'error1'),
(47, 'form20180218_1250088582', 'bh2010079002demososo', 'field20180218_1321599780', 'cn', '姓名', NULL, 'y', 'n', 502, 'text', '', NULL, '', 'error1'),
(49, 'form20180218_1250088582', 'bh2010079002demososo', 'field20180218_1355485286', 'cn', 'checkbox', NULL, 'y', 'n', 50, 'checkbox', '', NULL, '', 'error1'),
(52, 'form20180218_1250088582', 'bh2010079002demososo', 'field20180222_1457247151', 'cn', 'email', NULL, 'y', 'n', 50, 'text', '', NULL, '', 'error3'),
(53, 'form20180218_1250088582', 'bh2010079002demososo', 'field20180222_1457411819', 'cn', '手机', NULL, 'y', 'n', 50, 'text', '', NULL, '', 'error2'),
(54, 'form20180218_1250088582', 'bh2010079002demososo', 'field20180222_1457521078', 'cn', '年龄', NULL, 'y', 'n', 50, 'text', '', NULL, '', 'error4'),
(55, 'form20180218_1250088582', 'bh2010079002demososo', 'field20180222_1636575014', 'cn', '爱好', NULL, 'y', 'n', 50, 'text', '', NULL, '', 'error0'),
(56, 'form20180218_1250088582', 'bh2010079002demososo', 'field20180223_1208582851', 'cn', '不能为空', NULL, 'y', 'n', 50, 'text', '', NULL, '', 'error1'),
(57, 'form20180218_1250088582', 'bh2010079002demososo', 'field20180223_1434207038', 'cn', '内容', NULL, 'y', 'n', 50, 'textarea', '', NULL, '', 'error0'),
(58, 'form20180218_1250127063', 'bh2010079002demososo', 'field20180223_1654098888', 'cn', '昵称', NULL, 'y', 'n', 50, 'text', '', NULL, 'line1', 'error1'),
(59, 'form20180218_1250127063', 'bh2010079002demososo', 'field20180223_1656069986', 'cn', '电子邮箱', NULL, 'y', 'n', 50, 'text', '', NULL, 'line1', 'error3'),
(60, 'form20180218_1250127063', 'bh2010079002demososo', 'field20180223_1656189548', 'cn', '手机', NULL, 'y', 'n', 50, 'text', '', NULL, 'line1', 'error2'),
(61, 'form20180218_1250127063', 'bh2010079002demososo', 'field20180223_1656299551', 'cn', '内容', NULL, 'y', 'n', 50, 'textarea', '', NULL, '', 'error0'),
(62, 'block', 'bh2010079002demososo', 'form20180223_1705033909', 'cn', '产品的表单', '立即下单', 'y', 'n', 50, NULL, 'block', 'form.php', 'productform', 'error1'),
(63, 'form20180223_1705033909', 'bh2010079002demososo', 'field20180223_1713059257', 'cn', '订单数量', NULL, 'y', 'n', 50, 'text', '', NULL, '', 'error4'),
(64, 'form20180223_1705033909', 'bh2010079002demososo', 'field20180223_1713181470', 'cn', '客户姓名', NULL, 'y', 'n', 50, 'text', '', NULL, '', 'error1'),
(65, 'form20180223_1705033909', 'bh2010079002demososo', 'field20180223_1713351093', 'cn', '电子邮箱', NULL, 'y', 'n', 50, 'text', '', NULL, '', 'error3'),
(66, 'form20180223_1705033909', 'bh2010079002demososo', 'field20180223_1713449328', 'cn', '手机', NULL, 'y', 'n', 50, 'text', '', NULL, '', 'error2'),
(67, 'form20180223_1705033909', 'bh2010079002demososo', 'field20180223_1714153195', 'cn', '详细地址', NULL, 'y', 'n', 50, 'text', '', NULL, '', 'error1'),
(68, 'form20180223_1705033909', 'bh2010079002demososo', 'field20180223_1714279503', 'cn', '客户留言', NULL, 'y', 'n', 50, 'textarea', '', NULL, '', 'error1'),
(69, 'block', 'bh2010079002demososo', 'form20180223_2133551842', 'cn', '新闻留言', '新闻留言', 'y', 'n', 50, NULL, 'block', 'form.php', '', 'error1'),
(70, 'form20180223_2133551842', 'bh2010079002demososo', 'field20180223_2134082500', 'cn', '昵称', NULL, 'y', 'n', 50, 'text', '', NULL, '', 'error1'),
(71, 'form20180223_2133551842', 'bh2010079002demososo', 'field20180223_2134208108', 'cn', '内容', NULL, 'y', 'n', 50, 'textarea', '', NULL, '', 'error1');

-- --------------------------------------------------------

--
-- 表的结构 `zzz_fieldoption`
--

CREATE TABLE `zzz_fieldoption` (
  `id` int(11) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `pbh` varchar(50) DEFAULT NULL,
  `pidname` varchar(50) NOT NULL,
  `lang` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sta_visible` char(1) NOT NULL DEFAULT 'y',
  `pos` int(3) NOT NULL DEFAULT '50'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_fieldoption`
--

INSERT INTO `zzz_fieldoption` (`id`, `pid`, `pbh`, `pidname`, `lang`, `name`, `sta_visible`, `pos`) VALUES
(33, 'field20150924_1053072054', 'bh2010079002demososo', 'fieopt20150924_1143421607', 'cn', '蓝色', 'y', 0),
(34, 'field20150924_1053072054', 'bh2010079002demososo', 'fieopt20150924_1146223738', 'cn', '红色', 'y', 0),
(35, 'field20150924_1053072054', 'bh2010079002demososo', 'fieopt20150924_1146294112', 'cn', '黄色', 'y', 3),
(36, 'field20150924_1140461179', 'bh2010079002demososo', 'fieopt20150924_1147126563', 'cn', '大', 'y', 3),
(37, 'field20150924_1140461179', 'bh2010079002demososo', 'fieopt20150924_1147192792', 'cn', '中', 'y', 5),
(38, 'field20150924_1140461179', 'bh2010079002demososo', 'fieopt20150924_1147259062', 'cn', '小', 'y', 0),
(39, 'field20150924_1200371209', 'bh2010079002demososo', 'fieopt20150924_1201096829', 'cn', '动作', 'y', 0),
(43, 'field20150924_1200371209', 'bh2010079002demososo', 'fieopt20150925_1301331810', 'cn', '爱情', 'y', 0),
(44, 'field20160120_0909352653', 'bh2010079002demososo', 'fieopt20160120_0909526245', 'cn', '本科', 'y', 50),
(45, 'field20160120_0909352653', 'bh2010079002demososo', 'fieopt20160120_0909585643', 'cn', '大专', 'y', 50),
(46, 'field20160120_0909352653', 'bh2010079002demososo', 'fieopt20160120_0910033978', 'cn', '不限', 'y', 50),
(47, 'field20160120_0934365701', 'bh2010079002demososo', 'fieopt20160120_0934551371', 'cn', '红色', 'y', 50),
(48, 'field20160120_0934365701', 'bh2010079002demososo', 'fieopt20160120_0934591497', 'cn', '黄色', 'y', 50),
(49, 'field20160120_0934365701', 'bh2010079002demososo', 'fieopt20160120_0935047721', 'cn', '蓝色', 'y', 50),
(50, 'field20180218_1355485286', 'bh2010079002demososo', 'fieopt20180218_1356186613', 'cn', '11111', 'y', 50),
(51, 'field20180218_1355485286', 'bh2010079002demososo', 'fieopt20180218_1356228783', 'cn', '22222', 'y', 50),
(52, 'field20180218_1355485286', 'bh2010079002demososo', 'fieopt20180218_1356263182', 'cn', '3333', 'y', 500),
(53, 'field20180218_1355397966', 'bh2010079002demososo', 'fieopt20180218_1733138216', 'cn', 'r11', 'y', 50),
(54, 'field20180218_1355397966', 'bh2010079002demososo', 'fieopt20180218_1733172986', 'cn', 'r222', 'y', 50),
(55, 'field20180218_1355397966', 'bh2010079002demososo', 'fieopt20180218_1733222049', 'cn', 'r333', 'y', 50),
(56, 'field20180218_1321499097', 'bh2010079002demososo', 'fieopt20180218_1733313337', 'cn', 'sel1111', 'y', 50),
(57, 'field20180218_1321499097', 'bh2010079002demososo', 'fieopt20180218_1733356727', 'cn', 'sel2222', 'y', 50),
(58, 'field20180218_1321499097', 'bh2010079002demososo', 'fieopt20180218_1733394225', 'cn', 'sel3333', 'y', 50);

-- --------------------------------------------------------

--
-- 表的结构 `zzz_fieldvalue`
--

CREATE TABLE `zzz_fieldvalue` (
  `id` int(11) NOT NULL,
  `pid` varchar(50) NOT NULL COMMENT 'pid-field',
  `pidnode` varchar(50) NOT NULL,
  `pbh` varchar(50) DEFAULT NULL,
  `lang` varchar(50) NOT NULL,
  `value` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_fieldvalue`
--

INSERT INTO `zzz_fieldvalue` (`id`, `pid`, `pidnode`, `pbh`, `lang`, `value`) VALUES
(49, 'field20150924_1053072054', 'node20150806_0928223823', 'bh2010079002demososo', 'cn', 'fieopt20150924_1143421607'),
(47, 'field20150924_1140461179', 'node20150806_0929404264', 'bh2010079002demososo', 'cn', 'fieopt20150924_1147126563|fieopt20150924_1147259062'),
(48, 'field20150924_1200371209', 'node20150806_0929404264', 'bh2010079002demososo', 'cn', 'fieopt20150924_1201096829'),
(45, 'field20150924_1141075378', 'node20150806_0929404264', 'bh2010079002demososo', 'cn', '随便写'),
(44, 'field20150924_1053072054', 'node20150806_0929404264', 'bh2010079002demososo', 'cn', 'fieopt20150924_1146294112'),
(50, 'field20150924_1141075378', 'node20150806_0928223823', 'bh2010079002demososo', 'cn', ''),
(51, 'field20150924_1140461179', 'node20150806_0928223823', 'bh2010079002demososo', 'cn', 'fieopt20150924_1147192792|fieopt20150924_1147259062'),
(52, 'field20150924_1200371209', 'node20150806_0928223823', 'bh2010079002demososo', 'cn', 'fieopt20150925_1301331810'),
(53, 'field20150925_1304301615', 'node20150806_0929404264', 'bh2010079002demososo', 'cn', '这是字段属性功能，可以写一些内容，如果不需要，可以在后台隐藏。'),
(54, 'field20150925_1304301615', 'node20150806_0928223823', 'bh2010079002demososo', 'cn', ''),
(55, 'field20160120_0909352653', 'node20160120_0910305966', 'bh2010079002demososo', 'cn', 'fieopt20160120_0909526245'),
(56, 'field20160120_0909434488', 'node20160120_0910305966', 'bh2010079002demososo', 'cn', '3'),
(57, 'field20160120_0909352653', 'node20160120_0912457509', 'bh2010079002demososo', 'cn', 'fieopt20160120_0909585643'),
(58, 'field20160120_0909434488', 'node20160120_0912457509', 'bh2010079002demososo', 'cn', '5'),
(59, 'field20160120_0909352653', 'node20160120_0912412687', 'bh2010079002demososo', 'cn', 'fieopt20160120_0910033978'),
(60, 'field20160120_0909434488', 'node20160120_0912412687', 'bh2010079002demososo', 'cn', '10'),
(61, 'field20160120_0909352653', 'node20160120_0914178440', 'bh2010079002demososo', 'cn', 'fieopt20160120_0909585643'),
(62, 'field20160120_0909434488', 'node20160120_0914178440', 'bh2010079002demososo', 'cn', '22'),
(63, 'field20160120_0909352653', 'node20160120_0914131240', 'bh2010079002demososo', 'cn', 'fieopt20160120_0909526245'),
(64, 'field20160120_0909434488', 'node20160120_0914131240', 'bh2010079002demososo', 'cn', '3'),
(65, 'field20160120_0909352653', 'node20160120_0914093196', 'bh2010079002demososo', 'cn', 'fieopt20160120_0910033978'),
(66, 'field20160120_0909434488', 'node20160120_0914093196', 'bh2010079002demososo', 'cn', '66'),
(67, 'field20160120_0909352653', 'node20160120_0917539322', 'bh2010079002demososo', 'cn', 'fieopt20160120_0909526245'),
(68, 'field20160120_0909434488', 'node20160120_0917539322', 'bh2010079002demososo', 'cn', '111'),
(69, 'field20160120_0909352653', 'node20160120_0917504351', 'bh2010079002demososo', 'cn', 'fieopt20160120_0910033978'),
(70, 'field20160120_0909434488', 'node20160120_0917504351', 'bh2010079002demososo', 'cn', '2'),
(71, 'field20160120_0909352653', 'node20160120_0917464437', 'bh2010079002demososo', 'cn', 'fieopt20160120_0909585643'),
(72, 'field20160120_0909434488', 'node20160120_0917464437', 'bh2010079002demososo', 'cn', '55'),
(73, 'field20160120_0934365701', 'node20160120_0936166499', 'bh2010079002demososo', 'cn', 'fieopt20160120_0934591497'),
(74, 'field20160120_0934479818', 'node20160120_0936166499', 'bh2010079002demososo', 'cn', ''),
(75, 'field20160120_0934365701', 'node20160120_0936127466', 'bh2010079002demososo', 'cn', 'fieopt20160120_0934551371'),
(76, 'field20160120_0934479818', 'node20160120_0936127466', 'bh2010079002demososo', 'cn', ''),
(77, 'field20160120_0934365701', 'node20160120_0936067492', 'bh2010079002demososo', 'cn', 'fieopt20160120_0935047721'),
(78, 'field20160120_0934479818', 'node20160120_0936067492', 'bh2010079002demososo', 'cn', ''),
(79, 'field20160120_0934365701', 'node20160120_0936331335', 'bh2010079002demososo', 'cn', 'fieopt20160120_0935047721'),
(80, 'field20160120_0934479818', 'node20160120_0936331335', 'bh2010079002demososo', 'cn', ''),
(81, 'field20160120_0934365701', 'node20160120_0936295433', 'bh2010079002demososo', 'cn', 'fieopt20160120_0934551371'),
(82, 'field20160120_0934479818', 'node20160120_0936295433', 'bh2010079002demososo', 'cn', ''),
(83, 'field20160120_0934365701', 'node20160120_0936242604', 'bh2010079002demososo', 'cn', 'fieopt20160120_0934591497'),
(84, 'field20160120_0934479818', 'node20160120_0936242604', 'bh2010079002demososo', 'cn', '22'),
(85, 'field20160120_0934365701', 'node20160120_0936537381', 'bh2010079002demososo', 'cn', 'fieopt20160120_0934551371'),
(86, 'field20160120_0934479818', 'node20160120_0936537381', 'bh2010079002demososo', 'cn', '33'),
(87, 'field20160120_0934365701', 'node20160120_0936497316', 'bh2010079002demososo', 'cn', 'fieopt20160120_0934591497'),
(88, 'field20160120_0934479818', 'node20160120_0936497316', 'bh2010079002demososo', 'cn', '55'),
(89, 'field20160120_0934365701', 'node20160120_0936443830', 'bh2010079002demososo', 'cn', 'fieopt20160120_0934551371'),
(90, 'field20160120_0934479818', 'node20160120_0936443830', 'bh2010079002demososo', 'cn', '88'),
(91, 'field20150924_1053072054', 'node20160718_1054395881', 'bh2010079002demososo', 'cn', 'fieopt20150924_1146294112'),
(92, 'field20150924_1140461179', 'node20160718_1054395881', 'bh2010079002demososo', 'cn', 'fieopt20150924_1147126563|fieopt20150924_1147259062'),
(93, 'field20150924_1141075378', 'node20160718_1054395881', 'bh2010079002demososo', 'cn', ''),
(94, 'field20150925_1304301615', 'node20160718_1054395881', 'bh2010079002demososo', 'cn', ''),
(95, 'field20150924_1053072054', 'node20170313_1645516544', 'bh2010079002demososo', 'cn', 'fieopt20150924_1146294112'),
(96, 'field20150924_1140461179', 'node20170313_1645516544', 'bh2010079002demososo', 'cn', 'fieopt20150924_1147126563'),
(97, 'field20150924_1141075378', 'node20170313_1645516544', 'bh2010079002demososo', 'cn', ''),
(98, 'field20150925_1304301615', 'node20170313_1645516544', 'bh2010079002demososo', 'cn', ''),
(99, 'field20150924_1200371209', 'node20170313_1645516544', 'bh2010079002demososo', 'cn', 'fieopt20150925_1301331810');

-- --------------------------------------------------------

--
-- 表的结构 `zzz_imgfj`
--

CREATE TABLE `zzz_imgfj` (
  `id` int(11) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `pbh` varchar(50) NOT NULL,
  `pidstylebh` varchar(90) NOT NULL DEFAULT 'y',
  `lang` varchar(50) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `kv` varchar(50) DEFAULT NULL,
  `size` int(12) DEFAULT NULL,
  `pos` int(3) NOT NULL DEFAULT '50' COMMENT 'need,for some func to order by pos desc',
  `dateedit` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_imgfj`
--

INSERT INTO `zzz_imgfj` (`id`, `pid`, `pbh`, `pidstylebh`, `lang`, `title`, `kv`, `size`, `pos`, `dateedit`) VALUES
(1, 'page20150805_1138522811', 'bh2010079002demososo', 'y', 'cn', '', '20150805_113942_1804.jpg', 15028, 50, '2015-08-05 11:39:42'),
(3, 'page20150805_1143268522', 'bh2010079002demososo', 'y', 'cn', '', '20150805_114410_5513.jpg', 22391, 50, '2015-08-05 11:44:10'),
(60, 'common', 'bh2010079002demososo', 'y', 'cn', '', '20160410_101019_8098.png', 950, 50, '2016-04-10 10:10:19'),
(65, 'common', 'bh2010079002demososo', 'y', 'cn', '', '20160510_100152_4288.jpg', 7577, 50, '2016-05-10 10:01:52'),
(9, 'block20150803_0638326914', 'bh2010079002demososo', 'y', 'cn', '', '20150806_102334_9252.jpg', 9085, 50, '2015-08-06 10:23:34'),
(189, 'name', 'bh2010079002demososo', 'y', 'cn', '', '20150806_103634_1001.jpg', 37363, 50, '2018-03-16 10:23:52'),
(40, 'group_i20151202_1006575766', 'bh2010079002demososo', 'y', 'cn', '', '20151215_113456_4458.jpg', 21304, 50, '2015-12-15 11:34:56'),
(188, 'name', 'bh2010079002demososo', 'y', 'cn', '', '20180315_183804_8641.jpg', 30641, 50, '2018-03-15 18:38:04'),
(39, 'group_i20151202_1006575766', 'bh2010079002demososo', 'y', 'cn', '', '20151215_113453_1897.gif', 5354, 50, '2015-12-15 11:34:53'),
(162, 'name', 'bh2010079002demososo', 'y', 'cn', '', '20180206_122845_8456.jpg', 36794, 50, '2018-02-06 12:28:45'),
(34, 'page20151015_0855506815', 'bh2010079002demososo', 'y', 'cn', '', '20151015_085813_2221.gif', 4575, 50, '2015-10-15 08:58:13'),
(38, 'page20151015_0911225612', 'bh2010079002demososo', 'y', 'cn', '', '20151015_091438_6322.jpg', 41358, 50, '2015-10-15 09:14:38'),
(41, 'group_i20151217_0447557625', 'bh2010079002demososo', 'y', 'cn', '', '20151217_045219_9054.jpg', 106304, 50, '2015-12-17 04:52:19'),
(43, 'group_i20160101_0932453193', 'bh2010079002demososo', 'y', 'cn', '', '20160101_105616_3651.jpg', 12999, 50, '2016-01-01 10:56:16'),
(44, 'dhsub20151217_0448227671', 'bh2010079002demososo', 'y', 'cn', '', '20160101_110307_2784.jpg', 22850, 50, '2016-01-01 11:03:43'),
(45, 'dhsub20151202_1007034444', 'bh2010079002demososo', 'y', 'cn', '', '20160101_110608_9073.gif', 5354, 50, '2016-01-01 11:06:08'),
(46, 'dhsub20151202_1007034444', 'bh2010079002demososo', 'y', 'cn', '', '20160101_110612_8395.jpg', 21304, 50, '2016-01-01 11:06:12'),
(47, 'name', 'bh2010079002demososo', 'y', 'cn', '', '20160102_100829_4932.jpg', 1434, 50, '2016-01-02 10:08:29'),
(48, 'name', 'bh2010079002demososo', 'y', 'cn', '', '20160102_101454_7183.jpg', 1644, 50, '2016-01-02 10:14:54'),
(49, 'name', 'bh2010079002demososo', 'y', 'cn', '', '20160215_113655_8906.png', 28475, 50, '2016-02-15 11:36:55'),
(50, 'name', 'bh2010079002demososo', 'y', 'cn', '', '20160223_102445_6381.jpg', 17292, 50, '2016-02-23 10:24:45'),
(52, 'page20150805_1138522811', 'bh2010079002demososo', 'y', 'cn', '', '20160322_091501_3192.png', 5764, 50, '2016-03-22 09:19:18'),
(57, 'common', 'bh2010079002demososo', 'y', 'cn', '', '20160330_104430_2431.jpg', 17763, 50, '2016-03-30 10:44:30'),
(54, 'common', 'bh2010079002demososo', 'y', 'cn', '', '20160330_103830_9414.jpg', 4161, 50, '2016-03-30 10:38:30'),
(58, 'common', 'bh2010079002demososo', 'y', 'cn', '', '20160410_100648_6599.jpg', 15178, 50, '2017-05-03 18:46:39'),
(59, 'common', 'bh2010079002demososo', 'y', 'cn', '', '20160410_100653_6176.gif', 5186, 50, '2016-04-10 10:06:53'),
(61, 'common', 'bh2010079002demososo', 'y', 'cn', '', '20160410_101137_6214.png', 1255, 50, '2016-04-10 10:11:37'),
(62, 'name', 'bh2010079002demososo', 'y', 'cn', '', '20160415_050507_6454.jpg', 194586, 50, '2016-04-15 05:05:07'),
(63, 'name', 'bh2010079002demososo', 'y', 'cn', '', '20160419_125516_6089.ico', 1150, 50, '2016-04-19 12:55:16'),
(93, 'name', 'bh2010079002demososo', 'y', 'cn', '', '20160713_121206_4187.jpg', 137385, 50, '2016-07-13 12:12:06'),
(92, 'name', 'bh2010079002demososo', 'y', 'cn', '', '20160713_120705_3380.jpg', 117750, 50, '2016-07-13 12:07:05'),
(98, 'name', 'bh2010079002demososo', 'y', 'cn', 'sgdsg', '20160812_042415_1315.png', 1255, 50, '2017-04-10 17:02:25'),
(185, 'name', 'bh2010079002demososo', 'y', 'cn', '', '20180315_104600_8453.jpg', 1232, 50, '2018-03-15 10:46:00'),
(121, 'common', 'bh2010079002demososo', 'y', 'cn', '', '20170421_144032_2721.jpg', 12928, 50, '2017-04-21 14:40:32'),
(122, 'page20161207_1036569778', 'bh2010079002demososo', 'y', 'cn', '', '20170423_181014_5749.jpg', 11168, 50, '2017-04-23 18:10:14'),
(186, 'common', 'bh2010079002demososo', 'y', 'cn', '', '20180315_123721_1520.jpg', 43940, 50, '2018-03-15 12:37:21'),
(174, 'name', 'bh2010079002demososo', 'y', 'cn', '', '20180306_180946_2038.jpg', 96107, 50, '2018-03-06 18:09:46'),
(173, 'name', 'bh2010079002demososo', 'y', 'cn', '', '20180306_180803_5244.jpg', 57527, 50, '2018-03-06 18:08:03'),
(161, 'name', 'bh2010079002demososo', 'y', 'cn', '', '20180206_122841_9565.jpg', 41496, 50, '2018-02-06 12:28:41'),
(219, 'name', 'bh2010079002demososo', 'y', 'cn', '', '20180323_163049_2338.jpg', 58756, 50, '2018-03-23 16:30:49');

-- --------------------------------------------------------

--
-- 表的结构 `zzz_lang`
--

CREATE TABLE `zzz_lang` (
  `id` int(11) NOT NULL,
  `pbh` varchar(50) NOT NULL,
  `lang` varchar(50) NOT NULL DEFAULT 'cn' COMMENT 'lang is pidname,no change',
  `langfile` varchar(10) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `path` varchar(30) DEFAULT NULL,
  `pos` int(3) NOT NULL DEFAULT '0',
  `sta_visible` char(1) NOT NULL DEFAULT 'n',
  `sta_big5` char(1) NOT NULL DEFAULT 'y',
  `sta_main` char(1) NOT NULL DEFAULT 'n',
  `sitename` varchar(200) DEFAULT NULL,
  `water` varchar(50) DEFAULT NULL,
  `imgfolder` varchar(20) NOT NULL DEFAULT '1',
  `arr_assets` text,
  `arr_map` text,
  `curstyle` varchar(60) DEFAULT NULL,
  `arr_basicset` text,
  `arr_smtp` text,
  `seo1` text,
  `seo2` text,
  `seo3` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_lang`
--

INSERT INTO `zzz_lang` (`id`, `pbh`, `lang`, `langfile`, `name`, `path`, `pos`, `sta_visible`, `sta_big5`, `sta_main`, `sitename`, `water`, `imgfolder`, `arr_assets`, `arr_map`, `curstyle`, `arr_basicset`, `arr_smtp`, `seo1`, `seo2`, `seo3`) VALUES
(1, 'bh2010079002demososo', 'cn', NULL, '中文', 'cn', 20, 'y', 'n', 'y', '默认中文网站 power by DM系统', '20180315_104600_8453.jpg', '1', 'cdn:##http://7xoo1b.com1.z0.glb.clouddn.com==#==sta_cdn:##n==#==jquery:##==#==bootstrapjs:##==#==bootstrapcss:##', 'map_title:##DM企业建站系统==#==map_desp:##企业建站，就选DM企业建站系统 www.demososo.com==#==map_x_wei:##121.481033==#==map_y_jing:##31.238802', 'style20160721_0855323118', 'editor:##ck==#==ico:##20160419_125516_6089.ico==#==sta_frontedit:##y==#==cssversion:##336==#==tag_title:##标签==#==tag_fg:##tag_list.php==#==sta_tag_shownum:##y==#==sta_colseresponsive:##n==#==linkofmobile:##', 'smtp_active:##n==#==smtp_server:##smtp.163.com==#==smtp_port:##25==#==smtp_email:##......@163.com==#==smtp_ps:##', 'DM企业建站系统1', 'DM企业建站系统2', 'DM企业建站系统 SEO描述3');

-- --------------------------------------------------------

--
-- 表的结构 `zzz_layout`
--

CREATE TABLE `zzz_layout` (
  `id` int(11) NOT NULL,
  `pid` varchar(50) NOT NULL DEFAULT '0',
  `pidname` varchar(80) DEFAULT NULL,
  `pid_inherit` varchar(100) DEFAULT NULL,
  `lang` varchar(50) NOT NULL,
  `pbh` varchar(50) NOT NULL DEFAULT 'n',
  `pidstylebh` varchar(80) NOT NULL,
  `pos` int(3) NOT NULL DEFAULT '50' COMMENT 'must',
  `sidebartop` varchar(50) DEFAULT NULL,
  `sidebar` varchar(50) DEFAULT '',
  `sidebarbot` varchar(50) DEFAULT NULL,
  `banner` varchar(50) DEFAULT NULL,
  `bannertext` text,
  `bread` varchar(250) DEFAULT NULL,
  `sta_bread_posi` char(1) NOT NULL DEFAULT '',
  `sta_sidebar` char(1) NOT NULL DEFAULT 'l',
  `contentheader` varchar(50) DEFAULT NULL,
  `contenttop` varchar(50) DEFAULT NULL,
  `content` varchar(50) DEFAULT NULL,
  `contentbot` varchar(50) DEFAULT NULL,
  `pagetop` varchar(50) DEFAULT NULL,
  `pagebot` varchar(50) DEFAULT NULL,
  `bscnt` text,
  `type` varchar(20) DEFAULT NULL COMMENT 'index or read or cate',
  `template` varbinary(50) DEFAULT NULL,
  `dateedit` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_layout`
--

INSERT INTO `zzz_layout` (`id`, `pid`, `pidname`, `pid_inherit`, `lang`, `pbh`, `pidstylebh`, `pos`, `sidebartop`, `sidebar`, `sidebarbot`, `banner`, `bannertext`, `bread`, `sta_bread_posi`, `sta_sidebar`, `contentheader`, `contenttop`, `content`, `contentbot`, `pagetop`, `pagebot`, `bscnt`, `type`, `template`, `dateedit`) VALUES
(1117, 'common', 'layout20171219_1206467660', '', 'cn', 'bh2010079002demososo', 'style20160721_0855323118', 50, '', '', 'group20170921_1137442079', '', '', '', 'r', 'l', '', '', '', '', '', '', NULL, 'common', NULL, '2017-12-19 12:06:46'),
(1125, 'common', 'layout20171219_1633018595', '', 'cn', 'bh2010079002demososo', 'style20160506_1242421660', 50, '', '', 'group20170921_1137442079', '', '', '', 'r', 'l', '', '', '', '', '', '', NULL, 'common', NULL, '2017-12-19 16:33:01'),
(1119, 'page20150805_1138522811', 'layout20171219_1219356309', '', 'cn', 'bh2010079002demososo', 'style20160721_0855323118', 50, '', '', '', '20150806_103634_1001.jpg', '', '', 'h', 't', '', '', '', '', '', '', NULL, 'page', '', '2017-12-19 12:19:35'),
(1118, 'page20150805_1143268522', 'layout20171219_1207197103', '', 'cn', 'bh2010079002demososo', 'style20160721_0855323118', 50, '', '', '', '20160713_121206_4187.jpg', '', '', 'h', 't', '', '', '', '', '', '', NULL, 'page', '', '2017-12-19 12:07:19'),
(1128, 'page20150805_1138522811', 'layout20171219_1637054247', '', 'cn', 'bh2010079002demososo', 'style20160506_1242421660', 50, '', '', '', '20150806_103634_1001.jpg', '', '', 'h', 'l', '', '', '', '', '', '', NULL, 'page', '', '2017-12-19 16:37:05'),
(1178, 'page20161207_1036569778', 'layout20180306_1255011788', NULL, 'cn', 'bh2010079002demososo', 'style20170426_1846378581', 50, '', '', '', '', '', '', 'h', 't', '', '', '', '', '', '', NULL, 'page', NULL, '2018-03-06 12:55:01'),
(1129, 'page20150805_1143268522', 'layout20171219_1637168672', '', 'cn', 'bh2010079002demososo', 'style20160506_1242421660', 50, '', '', '', '20160713_121206_4187.jpg', '', '', 'h', 'l', '', '', '', '', '', '', NULL, 'page', NULL, '2017-12-19 16:37:16'),
(1130, 'page20150806_0435579851', 'layout20171219_1637308734', '', 'cn', 'bh2010079002demososo', 'style20160506_1242421660', 50, '', '', '', '20180315_183804_8641.jpg', '', '', 'h', 't', '', '', '', '', '', '', NULL, 'page', '', '2017-12-19 16:37:30'),
(1189, 'common', 'layout20180306_1808595463', NULL, 'cn', 'bh2010079002demososo', 'style20170426_1846378581', 50, '', '', 'group20170921_1137442079', '', '', '', 'r', 'l', '', '', '', '', '', '', NULL, 'common', '', '2018-03-06 18:08:59'),
(1190, 'page20150805_1138522811', 'layout20180306_1809342608', NULL, 'cn', 'bh2010079002demososo', 'style20170426_1846378581', 50, '', '', '', '20180306_180946_2038.jpg', '不一样的DM系统', '', 'h', 't', '', '', '', '', '', '', NULL, 'page', '', '2018-03-06 18:09:34'),
(1140, 'page20150805_1138522811', 'layout20171219_1712451428', '', 'cn', 'bh2010079002demososo', 'style20171123_1856515884', 50, '', '', '', '', '欢迎使用DM企业建站系统', '', '', '', '', '', '', '', '', '', NULL, 'page', NULL, '2017-12-19 17:12:45'),
(1188, 'common', 'layout20180306_1807479212', NULL, 'cn', 'bh2010079002demososo', 'style20171123_1856515884', 50, '', '', 'group20170921_1137442079', '20180306_180803_5244.jpg', '', '', 'r', 'l', '', '', '', '', '', '', NULL, 'common', '', '2018-03-06 18:07:47'),
(1150, 'common', 'layout20171219_1732443849', '', 'cn', 'bh2010079002demososo', 'style20171022_1025054134', 50, '', '', 'group20170921_1137442079', '', '', '', 'r', 'l', '', '', '', '', '', '', NULL, 'common', NULL, '2017-12-19 17:32:44'),
(1179, 'page20150805_1143268522', 'layout20180306_1255071232', NULL, 'cn', 'bh2010079002demososo', 'style20170426_1846378581', 50, '', '', '', '', '', '', 'h', 't', '', '', '', '', '', '', NULL, 'page', NULL, '2018-03-06 12:55:07'),
(1180, 'page20151015_0911225612', 'layout20180306_1255271680', NULL, 'cn', 'bh2010079002demososo', 'style20170426_1846378581', 50, '', '', '', '', '', '', 'h', 't', '', '', '', '', '', '', NULL, 'page', NULL, '2018-03-06 12:55:27'),
(1192, 'page20151015_0911225612', 'layout20180313_1135065326', NULL, 'cn', 'bh2010079002demososo', 'style20160721_0855323118', 50, '', '', '', '', '', '', 'h', 't', '', '', '', '', '', '', NULL, 'page', '', '2018-03-13 11:35:06'),
(1193, 'page20161207_1036569778', 'layout20180313_1135111025', NULL, 'cn', 'bh2010079002demososo', 'style20160721_0855323118', 50, '', '', '', '20160713_120705_3380.jpg', '', '', 'h', 't', '', '', '', '', '', '', NULL, 'page', '', '2018-03-13 11:35:11'),
(1194, 'page20150806_0435579851', 'layout20180313_1135166984', NULL, 'cn', 'bh2010079002demososo', 'style20160721_0855323118', 50, '', '', '', '20180315_183804_8641.jpg', '', '', 'h', 't', '', '', '', '', '', '', NULL, 'page', '', '2018-03-13 11:35:16'),
(1207, 'page20161207_1036569778', 'layout20180316_1025548750', NULL, 'cn', 'bh2010079002demososo', 'style20160506_1242421660', 50, '', '', '', '20160713_121206_4187.jpg', '', '', 'h', 'l', '', '', '', '', '', '', NULL, 'page', '', '2018-03-16 10:25:54');

-- --------------------------------------------------------

--
-- 表的结构 `zzz_menu`
--

CREATE TABLE `zzz_menu` (
  `id` int(11) NOT NULL,
  `ppid` varchar(80) NOT NULL DEFAULT '0' COMMENT 'main is 0.other is main pidname',
  `pid` varchar(50) NOT NULL DEFAULT '0',
  `pidname` varchar(100) NOT NULL,
  `pbh` varchar(50) NOT NULL DEFAULT 'n',
  `lang` varchar(50) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `cssname` varchar(50) DEFAULT NULL,
  `alias_jump` varchar(100) DEFAULT NULL,
  `sta_visible` varchar(1) NOT NULL DEFAULT 'y',
  `type` varchar(50) NOT NULL DEFAULT 'page' COMMENT 'page or cate or catesub',
  `linkurl` varchar(200) DEFAULT NULL,
  `sta_noaccess` char(1) NOT NULL DEFAULT 'n',
  `pos` int(3) DEFAULT '50',
  `sta_cusmenu` char(1) NOT NULL DEFAULT 'n',
  `cusmenudesp` text,
  `menu_xiala` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_menu`
--

INSERT INTO `zzz_menu` (`id`, `ppid`, `pid`, `pidname`, `pbh`, `lang`, `name`, `cssname`, `alias_jump`, `sta_visible`, `type`, `linkurl`, `sta_noaccess`, `pos`, `sta_cusmenu`, `cusmenudesp`, `menu_xiala`) VALUES
(212, 'menu20161129_1804453928', '0', 'cusm20170822_1657322894', 'bh2010079002demososo', 'cn', '联系我们', NULL, NULL, 'y', 'cust', 'contact.html', 'n', 0, 'n', NULL, ''),
(157, 'menu20161129_1804453928', '0', 'page20150806_0435579851', 'bh2010079002demososo', 'cn', NULL, NULL, NULL, 'y', 'page', NULL, 'n', 50, 'n', NULL, NULL),
(227, 'menu20161129_1804453928', 'cusm20180227_1614544029', 'cusm20180303_1302538103', 'bh2010079002demososo', 'cn', '客户案例', NULL, NULL, 'y', 'cust', 'case.html', 'n', 100, 'n', NULL, ''),
(155, 'menu20161129_1804453928', '0', 'cate20150805_1133251007', 'bh2010079002demososo', 'cn', NULL, NULL, NULL, 'y', 'cate', NULL, 'n', 66, 'n', NULL, NULL),
(154, 'menu20161129_1804453928', '0', 'cate20150805_1125344029', 'bh2010079002demososo', 'cn', NULL, NULL, NULL, 'y', 'cate', NULL, 'n', 66, 'n', NULL, NULL),
(153, 'menu20161129_1804453928', 'cusm20170510_1715538289', 'page20150805_1138522811', 'bh2010079002demososo', 'cn', NULL, NULL, NULL, 'y', 'page', NULL, 'n', 100, 'n', NULL, NULL),
(152, 'menu20161129_1804453928', 'cusm20170510_1715538289', 'page20151015_0911225612', 'bh2010079002demososo', 'cn', NULL, NULL, NULL, 'y', 'page', NULL, 'n', 50, 'n', NULL, NULL),
(151, 'menu20161129_1804453928', 'cusm20170510_1715538289', 'page20150805_1143268522', 'bh2010079002demososo', 'cn', NULL, NULL, NULL, 'y', 'page', NULL, 'n', 50, 'n', NULL, NULL),
(173, 'menu20161129_1804453928', 'cusm20170510_1715538289', 'page20161207_1036569778', 'bh2010079002demososo', 'cn', NULL, NULL, NULL, 'y', 'page', NULL, 'n', 60, 'n', NULL, NULL),
(149, 'menu20161129_1804453928', '0', 'page20160307_1115284044', 'bh2010079002demososo', 'cn', NULL, NULL, NULL, 'y', 'page', NULL, 'n', 500, 'n', NULL, NULL),
(148, '0', 'main', 'menu20161129_1804453928', 'bh2010079002demososo', 'cn', '默认菜单组', NULL, NULL, 'y', 'page', NULL, 'n', 50, 'n', '', NULL),
(178, 'menu20161129_1804453928', '0', 'cusm20170510_1715538289', 'bh2010079002demososo', 'cn', '关于我们', NULL, NULL, 'y', 'cust', 'about.html', 'n', 100, 'n', NULL, ''),
(215, '0', 'main', 'menu20171022_1200255763', 'bh2010079002demososo', 'cn', '单页面菜单', NULL, NULL, 'y', 'page', NULL, 'n', 50, 'y', '&lt;ul class=&quot;m menudanye&quot;&gt;\r\n&lt;li class=&quot;m&quot;&gt;&lt;a class=&quot;m&quot; href=&quot;#region418&quot;&gt;关于我们&lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;m&quot;&gt;&lt;a class=&quot;m&quot; href=&quot;#region419&quot;&gt;我们的服务&lt;/a&gt;&lt;/li&gt;\r\n \r\n&lt;li class=&quot;m&quot;&gt;&lt;a class=&quot;m&quot; href=&quot;#region421&quot;&gt;产品&lt;/a&gt;&lt;/li&gt;\r\n\r\n&lt;li class=&quot;m&quot;&gt;&lt;a class=&quot;m&quot; href=&quot;#region423&quot;&gt;公司新闻&lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;m&quot;&gt;&lt;a class=&quot;m&quot; href=&quot;#region642&quot;&gt;客户介绍&lt;/a&gt;&lt;/li&gt;\r\n&lt;li class=&quot;m&quot;&gt;&lt;a class=&quot;m&quot; href=&quot;#region427&quot;&gt;联系我们&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;', NULL),
(221, 'menu20161129_1804453928', '0', 'cusm20180227_1614544029', 'bh2010079002demososo', 'cn', '其他栏目', NULL, NULL, 'y', 'cust', 'case.html', 'n', 50, 'n', NULL, ''),
(222, 'menu20161129_1804453928', 'cusm20180227_1614544029', 'cusm20180227_1615265708', 'bh2010079002demososo', 'cn', '视频中心', NULL, NULL, 'y', 'cust', 'sp.html', 'n', 50, 'n', NULL, ''),
(223, 'menu20161129_1804453928', 'cusm20180227_1614544029', 'cusm20180227_1615433798', 'bh2010079002demososo', 'cn', '人才招聘', NULL, NULL, 'y', 'cust', 'joblist.html', 'n', 50, 'n', NULL, ''),
(224, 'menu20161129_1804453928', 'cusm20180227_1614544029', 'cusm20180227_1615567174', 'bh2010079002demososo', 'cn', '资料下载', NULL, NULL, 'y', 'cust', 'download.html', 'n', 50, 'n', NULL, '');

-- --------------------------------------------------------

--
-- 表的结构 `zzz_node`
--

CREATE TABLE `zzz_node` (
  `id` int(11) NOT NULL,
  `pid` varchar(50) NOT NULL DEFAULT '0',
  `ppid` varchar(50) NOT NULL,
  `pidname` varchar(50) NOT NULL,
  `pbh` varchar(50) NOT NULL,
  `pbrand` varchar(50) DEFAULT NULL,
  `lang` varchar(50) NOT NULL DEFAULT 'cn',
  `pos` int(3) DEFAULT '50',
  `modtype` varchar(50) NOT NULL DEFAULT 'node' COMMENT 'node or blockdh',
  `hit` int(5) NOT NULL DEFAULT '10',
  `sta_search` char(1) NOT NULL DEFAULT 'y' COMMENT 'for search in frontend',
  `sta_visible` char(1) DEFAULT 'y',
  `sta_noaccess` char(1) NOT NULL DEFAULT 'n',
  `sta_tj` char(1) NOT NULL DEFAULT 'n',
  `sta_new` char(1) NOT NULL DEFAULT 'n',
  `sta_orignimg` char(1) NOT NULL DEFAULT 'n',
  `title` varchar(150) DEFAULT NULL,
  `sta_title` char(1) NOT NULL DEFAULT 'n' COMMENT 'use for blockdh',
  `titlecss` varchar(100) DEFAULT NULL COMMENT 'is style',
  `cssname` varchar(100) DEFAULT NULL COMMENT 'node css,use blockdh',
  `titlestyle` varchar(100) DEFAULT NULL,
  `titlestylesub` varchar(100) DEFAULT NULL,
  `kv` varchar(220) DEFAULT NULL,
  `kvsm` varchar(220) DEFAULT NULL,
  `kvsm2` varchar(220) DEFAULT NULL,
  `alias_jump` varchar(100) DEFAULT NULL,
  `blockid` varchar(100) DEFAULT NULL,
  `blockcntid` varchar(100) DEFAULT 'bkcnt_normal' COMMENT 'no use in blockdh(node),only use in block',
  `iconimg` varchar(100) DEFAULT NULL,
  `linktitle` varchar(50) DEFAULT NULL COMMENT '可以针对不同文章加淘宝或京东',
  `linkurl` varchar(200) DEFAULT NULL,
  `linkmore` varchar(100) DEFAULT NULL,
  `linkcss` varchar(50) DEFAULT NULL,
  `linksize` varchar(50) DEFAULT NULL,
  `linkradius` varchar(50) DEFAULT NULL,
  `linkalign` varchar(50) DEFAULT NULL,
  `despjj` text,
  `desp` text,
  `desptext` text,
  `arr_can` text,
  `dateday` char(10) DEFAULT NULL,
  `dateedit` varchar(50) DEFAULT NULL COMMENT 'string,not datetime,avoid error input',
  `dateadd` datetime DEFAULT NULL,
  `titlebz1` varchar(250) DEFAULT NULL,
  `titlebz2` varchar(250) DEFAULT NULL,
  `titlebz3` varchar(250) DEFAULT NULL,
  `seo1` text,
  `seo2` text,
  `seo3` text,
  `videoid` varchar(100) DEFAULT NULL,
  `albumid` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_node`
--

INSERT INTO `zzz_node` (`id`, `pid`, `ppid`, `pidname`, `pbh`, `pbrand`, `lang`, `pos`, `modtype`, `hit`, `sta_search`, `sta_visible`, `sta_noaccess`, `sta_tj`, `sta_new`, `sta_orignimg`, `title`, `sta_title`, `titlecss`, `cssname`, `titlestyle`, `titlestylesub`, `kv`, `kvsm`, `kvsm2`, `alias_jump`, `blockid`, `blockcntid`, `iconimg`, `linktitle`, `linkurl`, `linkmore`, `linkcss`, `linksize`, `linkradius`, `linkalign`, `despjj`, `desp`, `desptext`, `arr_can`, `dateday`, `dateedit`, `dateadd`, `titlebz1`, `titlebz2`, `titlebz3`, `seo1`, `seo2`, `seo3`, `videoid`, `albumid`) VALUES
(1, 'csub20150805_1127279495', 'cate20150805_1125344029', 'node20150806_0900535131', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 14, 'y', 'y', 'n', 'n', 'n', 'n', 'LED50EC310JD 50英寸 全网Vision 智能LED电视', 'n', NULL, NULL, NULL, NULL, '20150806_090145_7218.jpg', '20160820_063033_9478.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;DM企业建站系统&lt;/a&gt;是由php+mysql开发的一套专门用于中小企业网站建设的开源cms。&lt;br /&gt;\r\n可以用来快速建设一个响应式的企业网站( PC，手机，微信都可以访问)。后台操作简单，维护方便。&lt;br /&gt;\r\n系统主要特点：&lt;br /&gt;\r\n1、模板管理功能，下载后，会有多个模板可选择。&lt;br /&gt;\r\n2、可以给每个页面设置SEO关键字，有利于搜索引擎收录。可以给每个页面设置别名，从而是让网页的访问网址更加简洁。&lt;br /&gt;\r\n3、后台有布局功能。让页面呈现更加方便。&lt;br /&gt;\r\n4、丰富的区块效果&lt;br /&gt;\r\n5、通过前台编辑，直接链接到后台。&lt;/p&gt;\r\n\r\n&lt;p&gt;安装步骤：&lt;br /&gt;\r\n第一步，先用phpmyadmin导入sql文件。&lt;br /&gt;\r\n创建一个库，名字随便。格式选 tf8_general_ci。&lt;br /&gt;\r\n第二步：把文件放到你的本地服务器，或上传到空间。&lt;br /&gt;\r\n网站只有一个入口文件 ，即index.php&lt;br /&gt;\r\n然后修改在component/demososo_cfg 下的mysql.php&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2015-08-06', '2015-08-06 09:02:12', '2015-08-06 09:00:53', NULL, NULL, NULL, '10JD 50英寸 全网Vision 智能LED电', '10JD 50英寸 全网Vision 智能LED电10JD 50英寸 全网Vision 智能LED电', '10JD 50英寸 全网Vision 智能LED电10JD 50英寸 全网Vision 智能LED电10JD 50英寸 全网Vision 智能LED电', NULL, NULL),
(2, 'csub20150805_1129113039', 'cate20150805_1125344029', 'node20150806_0911442628', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 31, 'y', 'y', 'n', 'n', 'n', 'n', '幻影白 移动联通4G手机 双卡双待', 'n', '', NULL, NULL, NULL, '20160820_065418_4988.jpg', '20160820_065425_3224.jpg', NULL, '', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;DM企业建站系统&lt;/a&gt;是由php+mysql开发的一套专门用于中小企业网站建设的开源cms。&lt;br /&gt;\r\n可以用来快速建设一个响应式的企业网站( PC，手机，微信都可以访问)。后台操作简单，维护方便。&lt;br /&gt;\r\n系统主要特点：&lt;br /&gt;\r\n1、模板管理功能，下载后，会有多个模板可选择。&lt;br /&gt;\r\n2、可以给每个页面设置SEO关键字，有利于搜索引擎收录。可以给每个页面设置别名，从而是让网页的访问网址更加简洁。&lt;br /&gt;\r\n3、后台有布局功能。让页面呈现更加方便。&lt;br /&gt;\r\n4、丰富的区块效果&lt;br /&gt;\r\n5、通过前台编辑，直接链接到后台。&lt;/p&gt;\r\n\r\n&lt;p&gt;安装步骤：&lt;br /&gt;\r\n第一步，先用phpmyadmin导入sql文件。&lt;br /&gt;\r\n创建一个库，名字随便。格式选 tf8_general_ci。&lt;br /&gt;\r\n第二步：把文件放到你的本地服务器，或上传到空间。&lt;br /&gt;\r\n网站只有一个入口文件 ，即index.php&lt;br /&gt;\r\n然后修改在component/demososo_cfg 下的mysql.php&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2015-08-06', '2015-08-06 09:12:08', '2015-08-06 09:11:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'csub20150805_1128542682', 'cate20150805_1125344029', 'node20150806_0913071844', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 13, 'y', 'y', 'n', 'n', 'n', 'n', '移动联通电信4G手机 双卡双待', 'n', '', NULL, NULL, NULL, '20160820_065158_9420.jpg', '20160820_065151_8351.jpg', NULL, '', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;DM企业建站系统&lt;/a&gt;是由php+mysql开发的一套专门用于中小企业网站建设的开源cms。&lt;br /&gt;\r\n可以用来快速建设一个响应式的企业网站( PC，手机，微信都可以访问)。后台操作简单，维护方便。&lt;br /&gt;\r\n系统主要特点：&lt;br /&gt;\r\n1、模板管理功能，下载后，会有多个模板可选择。&lt;br /&gt;\r\n2、可以给每个页面设置SEO关键字，有利于搜索引擎收录。可以给每个页面设置别名，从而是让网页的访问网址更加简洁。&lt;br /&gt;\r\n3、后台有布局功能。让页面呈现更加方便。&lt;br /&gt;\r\n4、丰富的区块效果&lt;br /&gt;\r\n5、通过前台编辑，直接链接到后台。&lt;/p&gt;\r\n\r\n&lt;p&gt;安装步骤：&lt;br /&gt;\r\n第一步，先用phpmyadmin导入sql文件。&lt;br /&gt;\r\n创建一个库，名字随便。格式选 tf8_general_ci。&lt;br /&gt;\r\n第二步：把文件放到你的本地服务器，或上传到空间。&lt;br /&gt;\r\n网站只有一个入口文件 ，即index.php&lt;br /&gt;\r\n然后修改在component/demososo_cfg 下的mysql.php&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2015-08-06', '2015-08-06 09:13:26', '2015-08-06 09:13:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'csub20150805_1129022677', 'cate20150805_1125344029', 'node20150806_0914588863', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 13, 'y', 'y', 'n', 'n', 'n', 'n', '移动联通电信4G手机 双卡双待 香槟金', 'n', '', NULL, NULL, NULL, '20160820_064911_2203.jpg', '20160820_064917_6826.jpg', NULL, '', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;DM企业建站系统&lt;/a&gt;是由php+mysql开发的一套专门用于中小企业网站建设的开源cms。&lt;br /&gt;\r\n可以用来快速建设一个响应式的企业网站( PC，手机，微信都可以访问)。后台操作简单，维护方便。&lt;br /&gt;\r\n系统主要特点：&lt;br /&gt;\r\n1、模板管理功能，下载后，会有多个模板可选择。&lt;br /&gt;\r\n2、可以给每个页面设置SEO关键字，有利于搜索引擎收录。可以给每个页面设置别名，从而是让网页的访问网址更加简洁。&lt;br /&gt;\r\n3、后台有布局功能。让页面呈现更加方便。&lt;br /&gt;\r\n4、丰富的区块效果&lt;br /&gt;\r\n5、通过前台编辑，直接链接到后台。&lt;/p&gt;\r\n\r\n&lt;p&gt;安装步骤：&lt;br /&gt;\r\n第一步，先用phpmyadmin导入sql文件。&lt;br /&gt;\r\n创建一个库，名字随便。格式选 tf8_general_ci。&lt;br /&gt;\r\n第二步：把文件放到你的本地服务器，或上传到空间。&lt;br /&gt;\r\n网站只有一个入口文件 ，即index.php&lt;br /&gt;\r\n然后修改在component/demososo_cfg 下的mysql.php&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2015-08-06', '2016-07-18 09:58:40', '2015-08-06 09:14:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(252, 'csub20150805_1129113039', 'cate20150805_1125344029', 'node20160820_0656309862', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 88, 'y', 'y', 'n', 'n', 'n', 'n', '黑色 移动联通电信4G手机 双卡双待', 'n', '', NULL, NULL, NULL, '', '20160820_065655_3605.jpg', NULL, '', NULL, 'bkcnt_normal', NULL, '', '', '', NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;DM企业建站系统&lt;/a&gt;是由php+mysql开发的一套专门用于中小企业网站建设的开源cms。&lt;br /&gt;\r\n可以用来快速建设一个响应式的企业网站( PC，手机，微信都可以访问)。后台操作简单，维护方便。&lt;br /&gt;\r\n系统主要特点：&lt;br /&gt;\r\n1、模板管理功能，下载后，会有多个模板可选择。&lt;br /&gt;\r\n2、可以给每个页面设置SEO关键字，有利于搜索引擎收录。可以给每个页面设置别名，从而是让网页的访问网址更加简洁。&lt;br /&gt;\r\n3、后台有布局功能。让页面呈现更加方便。&lt;br /&gt;\r\n4、丰富的区块效果&lt;br /&gt;\r\n5、通过前台编辑，直接链接到后台。&lt;/p&gt;\r\n\r\n&lt;p&gt;安装步骤：&lt;br /&gt;\r\n第一步，先用phpmyadmin导入sql文件。&lt;br /&gt;\r\n创建一个库，名字随便。格式选 tf8_general_ci。&lt;br /&gt;\r\n第二步：把文件放到你的本地服务器，或上传到空间。&lt;br /&gt;\r\n网站只有一个入口文件 ，即index.php&lt;br /&gt;\r\n然后修改在component/demososo_cfg 下的mysql.php&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-08-20', '2016-08-20 06:56:30', '2016-08-20 06:56:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'csub20150805_1128542682', 'cate20150805_1125344029', 'node20150806_0916371045', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 47, 'y', 'y', 'n', 'n', 'n', 'n', '手机（白色）WCDMA/GSM hua2', 'n', '', NULL, NULL, NULL, '20150806_091718_2691.jpg', '20160820_064151_2910.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;DM企业建站系统&lt;/a&gt;是由php+mysql开发的一套专门用于中小企业网站建设的开源cms。&lt;br /&gt;\r\n可以用来快速建设一个响应式的企业网站( PC，手机，微信都可以访问)。后台操作简单，维护方便。&lt;br /&gt;\r\n系统主要特点：&lt;br /&gt;\r\n1、模板管理功能，下载后，会有多个模板可选择。&lt;br /&gt;\r\n2、可以给每个页面设置SEO关键字，有利于搜索引擎收录。可以给每个页面设置别名，从而是让网页的访问网址更加简洁。&lt;br /&gt;\r\n3、后台有布局功能。让页面呈现更加方便。&lt;br /&gt;\r\n4、丰富的区块效果&lt;br /&gt;\r\n5、通过前台编辑，直接链接到后台。&lt;/p&gt;\r\n\r\n&lt;p&gt;安装步骤：&lt;br /&gt;\r\n第一步，先用phpmyadmin导入sql文件。&lt;br /&gt;\r\n创建一个库，名字随便。格式选 tf8_general_ci。&lt;br /&gt;\r\n第二步：把文件放到你的本地服务器，或上传到空间。&lt;br /&gt;\r\n网站只有一个入口文件 ，即index.php&lt;br /&gt;\r\n然后修改在component/demososo_cfg 下的mysql.php&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2015-08-06', '2015-08-06 09:18:01', '2015-08-06 09:16:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'csub20150805_1129022677', 'cate20150805_1125344029', 'node20150806_0918325701', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 36, 'y', 'y', 'n', 'n', 'n', 'n', '手机（炫酷银）WCDMA/GSM', 'n', NULL, NULL, NULL, NULL, '20150806_091923_3218.jpg', '20160820_064047_5245.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;DM企业建站系统&lt;/a&gt;是由php+mysql开发的一套专门用于中小企业网站建设的开源cms。&lt;br /&gt;\r\n可以用来快速建设一个响应式的企业网站( PC，手机，微信都可以访问)。后台操作简单，维护方便。&lt;br /&gt;\r\n系统主要特点：&lt;br /&gt;\r\n1、模板管理功能，下载后，会有多个模板可选择。&lt;br /&gt;\r\n2、可以给每个页面设置SEO关键字，有利于搜索引擎收录。可以给每个页面设置别名，从而是让网页的访问网址更加简洁。&lt;br /&gt;\r\n3、后台有布局功能。让页面呈现更加方便。&lt;br /&gt;\r\n4、丰富的区块效果&lt;br /&gt;\r\n5、通过前台编辑，直接链接到后台。&lt;/p&gt;\r\n\r\n&lt;p&gt;安装步骤：&lt;br /&gt;\r\n第一步，先用phpmyadmin导入sql文件。&lt;br /&gt;\r\n创建一个库，名字随便。格式选 tf8_general_ci。&lt;br /&gt;\r\n第二步：把文件放到你的本地服务器，或上传到空间。&lt;br /&gt;\r\n网站只有一个入口文件 ，即index.php&lt;br /&gt;\r\n然后修改在component/demososo_cfg 下的mysql.php&lt;/p&gt;', '', 'author:##==#==authorcompany:##asfas==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==linkmore:##', '2015-08-06', '2015-08-06 09:18:49', '2015-08-06 09:18:32', NULL, NULL, NULL, '', '', '', NULL, NULL),
(7, 'csub20150805_1129113039', 'cate20150805_1125344029', 'node20150806_0920002293', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 23, 'y', 'y', 'n', 'n', 'n', 'n', '16G版 3G手机（金色）WCDMA/GSM', 'n', NULL, NULL, NULL, NULL, '20150806_092048_7826.jpg', '20160820_064001_4739.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;DM企业建站系统&lt;/a&gt;是由php+mysql开发的一套专门用于中小企业网站建设的开源cms。&lt;br /&gt;\r\n可以用来快速建设一个响应式的企业网站( PC，手机，微信都可以访问)。后台操作简单，维护方便。&lt;br /&gt;\r\n系统主要特点：&lt;br /&gt;\r\n1、模板管理功能，下载后，会有多个模板可选择。&lt;br /&gt;\r\n2、可以给每个页面设置SEO关键字，有利于搜索引擎收录。可以给每个页面设置别名，从而是让网页的访问网址更加简洁。&lt;br /&gt;\r\n3、后台有布局功能。让页面呈现更加方便。&lt;br /&gt;\r\n4、丰富的区块效果&lt;br /&gt;\r\n5、通过前台编辑，直接链接到后台。&lt;/p&gt;\r\n\r\n&lt;p&gt;安装步骤：&lt;br /&gt;\r\n第一步，先用phpmyadmin导入sql文件。&lt;br /&gt;\r\n创建一个库，名字随便。格式选 tf8_general_ci。&lt;br /&gt;\r\n第二步：把文件放到你的本地服务器，或上传到空间。&lt;br /&gt;\r\n网站只有一个入口文件 ，即index.php&lt;br /&gt;\r\n然后修改在component/demososo_cfg 下的mysql.php&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2015-08-06', '2015-08-06 09:20:19', '2015-08-06 09:20:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'csub20150805_1129113039', 'cate20150805_1125344029', 'node20150806_0921189784', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 35, 'y', 'y', 'n', 'n', 'n', 'n', '手机（白色） CDMA2000/WCDMA/GSM 32G版', 'n', NULL, NULL, NULL, NULL, '20150806_092204_7023.jpg', '20160820_063852_9745.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;DM企业建站系统&lt;/a&gt;是由php+mysql开发的一套专门用于中小企业网站建设的开源cms。&lt;br /&gt;\r\n可以用来快速建设一个响应式的企业网站( PC，手机，微信都可以访问)。后台操作简单，维护方便。&lt;br /&gt;\r\n系统主要特点：&lt;br /&gt;\r\n1、模板管理功能，下载后，会有多个模板可选择。&lt;br /&gt;\r\n2、可以给每个页面设置SEO关键字，有利于搜索引擎收录。可以给每个页面设置别名，从而是让网页的访问网址更加简洁。&lt;br /&gt;\r\n3、后台有布局功能。让页面呈现更加方便。&lt;br /&gt;\r\n4、丰富的区块效果&lt;br /&gt;\r\n5、通过前台编辑，直接链接到后台。&lt;/p&gt;\r\n\r\n&lt;p&gt;安装步骤：&lt;br /&gt;\r\n第一步，先用phpmyadmin导入sql文件。&lt;br /&gt;\r\n创建一个库，名字随便。格式选 tf8_general_ci。&lt;br /&gt;\r\n第二步：把文件放到你的本地服务器，或上传到空间。&lt;br /&gt;\r\n网站只有一个入口文件 ，即index.php&lt;br /&gt;\r\n然后修改在component/demososo_cfg 下的mysql.php&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2015-08-06', '2015-08-06 09:21:34', '2015-08-06 09:21:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'csub20150805_1127279495', 'cate20150805_1125344029', 'node20150806_0924473423', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 22, 'y', 'y', 'n', 'n', 'n', 'n', '50E6CRD 50英寸 窄边超薄 超级网络解码3DLED电视', 'n', NULL, NULL, NULL, NULL, '20150806_092545_1198.jpg', '20160820_063746_5055.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;DM企业建站系统&lt;/a&gt;是由php+mysql开发的一套专门用于中小企业网站建设的开源cms。&lt;br /&gt;\r\n可以用来快速建设一个响应式的企业网站( PC，手机，微信都可以访问)。后台操作简单，维护方便。&lt;br /&gt;\r\n系统主要特点：&lt;br /&gt;\r\n1、模板管理功能，下载后，会有多个模板可选择。&lt;br /&gt;\r\n2、可以给每个页面设置SEO关键字，有利于搜索引擎收录。可以给每个页面设置别名，从而是让网页的访问网址更加简洁。&lt;br /&gt;\r\n3、后台有布局功能。让页面呈现更加方便。&lt;br /&gt;\r\n4、丰富的区块效果&lt;br /&gt;\r\n5、通过前台编辑，直接链接到后台。&lt;/p&gt;\r\n\r\n&lt;p&gt;安装步骤：&lt;br /&gt;\r\n第一步，先用phpmyadmin导入sql文件。&lt;br /&gt;\r\n创建一个库，名字随便。格式选 tf8_general_ci。&lt;br /&gt;\r\n第二步：把文件放到你的本地服务器，或上传到空间。&lt;br /&gt;\r\n网站只有一个入口文件 ，即index.php&lt;br /&gt;\r\n然后修改在component/demososo_cfg 下的mysql.php&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2015-08-06', '2015-08-06 09:25:04', '2015-08-06 09:24:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'csub20150805_1127279495', 'cate20150805_1125344029', 'node20150806_0925599652', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 25, 'y', 'y', 'n', 'n', 'n', 'n', '39EU3000 39英寸 窄边框流媒体全高清LED电视', 'n', '', NULL, NULL, NULL, '20150806_092643_9470.jpg', '20160820_063313_9504.jpg', NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;DM企业建站系统&lt;/a&gt;是由php+mysql开发的一套专门用于中小企业网站建设的开源cms。&lt;br /&gt;\r\n可以用来快速建设一个响应式的企业网站( PC，手机，微信都可以访问)。后台操作简单，维护方便。&lt;br /&gt;\r\n系统主要特点：&lt;br /&gt;\r\n1、模板管理功能，下载后，会有多个模板可选择。&lt;br /&gt;\r\n2、可以给每个页面设置SEO关键字，有利于搜索引擎收录。可以给每个页面设置别名，从而是让网页的访问网址更加简洁。&lt;br /&gt;\r\n3、后台有布局功能。让页面呈现更加方便。&lt;br /&gt;\r\n4、丰富的区块效果&lt;br /&gt;\r\n5、通过前台编辑，直接链接到后台。&lt;/p&gt;\r\n\r\n&lt;p&gt;安装步骤：&lt;br /&gt;\r\n第一步，先用phpmyadmin导入sql文件。&lt;br /&gt;\r\n创建一个库，名字随便。格式选 tf8_general_ci。&lt;br /&gt;\r\n第二步：把文件放到你的本地服务器，或上传到空间。&lt;br /&gt;\r\n网站只有一个入口文件 ，即index.php&lt;br /&gt;\r\n然后修改在component/demososo_cfg 下的mysql.php&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2015-08-06', '2015-08-06 09:26:15', '2015-08-06 09:25:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'csub20150805_1127279495', 'cate20150805_1125344029', 'node20150806_0926593475', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 75, 'y', 'y', 'n', 'n', 'n', 'n', 'LE50D59 50英寸 超窄边内置WIFI安卓智能液晶电视', 'n', NULL, NULL, NULL, NULL, '20150806_092746_9245.jpg', '20160820_063146_7484.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;DM企业建站系统&lt;/a&gt;是由php+mysql开发的一套专门用于中小企业网站建设的开源cms。&lt;br /&gt;\r\n可以用来快速建设一个响应式的企业网站( PC，手机，微信都可以访问)。后台操作简单，维护方便。&lt;br /&gt;\r\n系统主要特点：&lt;br /&gt;\r\n1、模板管理功能，下载后，会有多个模板可选择。&lt;br /&gt;\r\n2、可以给每个页面设置SEO关键字，有利于搜索引擎收录。可以给每个页面设置别名，从而是让网页的访问网址更加简洁。&lt;br /&gt;\r\n3、后台有布局功能。让页面呈现更加方便。&lt;br /&gt;\r\n4、丰富的区块效果&lt;br /&gt;\r\n5、通过前台编辑，直接链接到后台。&lt;/p&gt;\r\n\r\n&lt;p&gt;安装步骤：&lt;br /&gt;\r\n第一步，先用phpmyadmin导入sql文件。&lt;br /&gt;\r\n创建一个库，名字随便。格式选 tf8_general_ci。&lt;br /&gt;\r\n第二步：把文件放到你的本地服务器，或上传到空间。&lt;br /&gt;\r\n网站只有一个入口文件 ，即index.php&lt;br /&gt;\r\n然后修改在component/demososo_cfg 下的mysql.php&lt;br /&gt;\r\n&amp;nbsp;&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2015-08-06', '2015-08-06 09:27:14', '2015-08-06 09:26:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'csub20150805_1127429915', 'cate20150805_1125344029', 'node20150806_0928223823', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 54, 'y', 'y', 'n', 'n', 'n', 'n', '14.0英寸笔记本电脑14.0英寸笔记本电脑', 'n', '', NULL, NULL, NULL, '20150806_092914_1276.jpg', '20160820_062914_8463.jpg', NULL, '', NULL, NULL, NULL, '', 'http://product.suning.com/106334243.html', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;DM企业建站系统&lt;/a&gt;是由php+mysql开发的一套专门用于中小企业网站建设的开源cms。&lt;br /&gt;\r\n可以用来快速建设一个响应式的企业网站( PC，手机，微信都可以访问)。后台操作简单，维护方便。&lt;br /&gt;\r\n系统主要特点：&lt;br /&gt;\r\n1、模板管理功能，下载后，会有多个模板可选择。&lt;br /&gt;\r\n2、可以给每个页面设置SEO关键字，有利于搜索引擎收录。可以给每个页面设置别名，从而是让网页的访问网址更加简洁。&lt;br /&gt;\r\n3、后台有布局功能。让页面呈现更加方便。&lt;br /&gt;\r\n4、丰富的区块效果&lt;br /&gt;\r\n5、通过前台编辑，直接链接到后台。&lt;/p&gt;\r\n\r\n&lt;p&gt;安装步骤：&lt;br /&gt;\r\n第一步，先用phpmyadmin导入sql文件。&lt;br /&gt;\r\n创建一个库，名字随便。格式选 tf8_general_ci。&lt;br /&gt;\r\n第二步：把文件放到你的本地服务器，或上传到空间。&lt;br /&gt;\r\n网站只有一个入口文件 ，即index.php&lt;br /&gt;\r\n然后修改在component/demososo_cfg 下的mysql.php&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==stock:##==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==linkmore:##', '2015-08-06', '2016-06-28 10:16:13', '2015-08-06 09:28:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'csub20150805_1127429915', 'cate20150805_1125344029', 'node20150806_0929404264', 'bh2010079002demososo', NULL, 'cn', 60, 'node', 655, 'y', 'y', 'n', 'n', 'n', 'n', '17.3英寸游戏本17.3英寸游戏本', 'n', '', NULL, NULL, NULL, '20150806_093046_2423.jpg', '20160820_065945_9561.jpg', NULL, '', NULL, NULL, NULL, '京东', 'https://detail.tmall.com/item.htm?id=44102317274', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;DM企业建站系统&lt;/a&gt;是由php+mysql开发的一套专门用于中小企业网站建设的开源cms。&lt;br /&gt;\r\n可以用来快速建设一个响应式的企业网站( PC，手机，微信都可以访问)。后台操作简单，维护方便。&lt;br /&gt;\r\n系统主要特点：&lt;br /&gt;\r\n1、模板管理功能，下载后，会有多个模板可选择。&lt;br /&gt;\r\n2、可以给每个页面设置SEO关键字，有利于搜索引擎收录。可以给每个页面设置别名，从而是让网页的访问网址更加简洁。&lt;br /&gt;\r\n3、后台有布局功能。让页面呈现更加方便。&lt;br /&gt;\r\n4、丰富的区块效果&lt;br /&gt;\r\n5、通过前台编辑，直接链接到后台。&lt;/p&gt;\r\n\r\n&lt;p&gt;安装步骤：&lt;br /&gt;\r\n第一步，先用phpmyadmin导入sql文件。&lt;br /&gt;\r\n创建一个库，名字随便。格式选 tf8_general_ci。&lt;br /&gt;\r\n第二步：把文件放到你的本地服务器，或上传到空间。&lt;br /&gt;\r\n网站只有一个入口文件 ，即index.php&lt;br /&gt;\r\n然后修改在component/demososo_cfg 下的mysql.php&lt;/p&gt;', '', 'author:##==#==authorcompany:##==#==stock:##10000==#==detpriceold:##1000==#==detprice:##800==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==linkmore:##', '2015-08-06', '2016-06-07 12:09:33', '2015-08-06 09:29:40', '', '', '', '17.3英寸游戏本17.3英寸游戏本22', '17.3英寸游戏本17.3英寸游戏本17.3英寸游戏本17.3英寸游戏本', '17.3英寸游戏本17.3英寸游戏本17.3英寸游戏本17.3英寸游戏本17.3英寸游戏本17.3英寸游戏本17.3英寸游戏本17.3英寸游戏本', 'video20180126_1917497914', 'album20180126_1645426715'),
(14, 'csub20160603_1044113807', 'cate20150805_1133251007', 'node20150806_0933549151', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 20, 'y', 'y', 'n', 'n', 'n', 'n', '26+25悍将休赛期苦练 誓言夺最佳防守球员奖', 'n', '', NULL, NULL, NULL, NULL, '20160603_104520_1688.jpg', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;26+25悍将休赛期苦练 誓言夺最佳防守球员奖&lt;/p&gt;\r\n\r\n&lt;p&gt;26+25悍将休赛期苦练 誓言夺最佳防守球员奖&lt;/p&gt;\r\n\r\n&lt;p&gt;26+25悍将休赛期苦练 誓言夺最佳防守球员奖26+25悍将休赛期苦练 誓言夺最佳防守球员奖&lt;/p&gt;\r\n\r\n&lt;p&gt;26+25悍将休赛期苦练 誓言夺最佳防守球员奖&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;26+25悍将休赛期苦练 誓言夺最佳防守球员奖&lt;/p&gt;\r\n\r\n&lt;p&gt;26+25悍将休赛期苦练 誓言夺最佳防守球员奖26+25悍将休赛期苦练 誓言夺最佳防守球员奖&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2015-08-06', '2016-06-03 10:44:54', '2015-08-06 09:33:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'csub20150805_1133441588', 'cate20150805_1133251007', 'node20150806_0934538110', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 11, 'y', 'y', 'n', 'n', 'n', 'n', '奥迪杯-贝尔反戈J罗破门 皇马2-0热刺晋级决赛', 'n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;奥迪杯-贝尔反戈J罗破门 皇马2-0热刺晋级决赛&lt;/p&gt;\r\n\r\n&lt;p&gt;奥迪杯-贝尔反戈J罗破门 皇马2-0热刺晋级决赛&lt;/p&gt;\r\n\r\n&lt;p&gt;奥迪杯-贝尔反戈J罗破门 皇马2-0热刺晋级决赛&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;奥迪杯-贝尔反戈J罗破门 皇马2-0热刺晋级决赛奥迪杯-贝尔反戈J罗破门 皇马2-0热刺晋级决赛&lt;/p&gt;\r\n\r\n&lt;p&gt;奥迪杯-贝尔反戈J罗破门 皇马2-0热刺晋级决赛&lt;/p&gt;\r\n\r\n&lt;p&gt;奥迪杯-贝尔反戈J罗破门 皇马2-0热刺晋级决赛&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2015-08-06', '2015-08-06 09:35:07', '2015-08-06 09:34:53', NULL, NULL, NULL, 'edas', '', '', NULL, NULL),
(17, 'csub20150805_1133512388', 'cate20150805_1133251007', 'node20150806_0935224419', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 12, 'y', 'y', 'n', 'n', 'n', 'n', 'FIBA竞赛部主任：中国举办世界杯成功率达90%', 'n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;FIBA竞赛部主任：中国举办世界杯成功率达90%&lt;/p&gt;\r\n\r\n&lt;p&gt;FIBA竞赛部主任：中国举办世界杯成功率达90%FIBA竞赛部主任：中国举办世界杯成功率达90%&lt;/p&gt;\r\n\r\n&lt;p&gt;FIBA竞赛部主任：中国举办世界杯成功率达90%&lt;/p&gt;\r\n\r\n&lt;p&gt;FIBA竞赛部主任：中国举办世界杯成功率达90%&lt;/p&gt;\r\n\r\n&lt;p&gt;FIBA竞赛部主任：中国举办世界杯成功率达90%&lt;/p&gt;\r\n\r\n&lt;p&gt;FIBA竞赛部主任：中国举办世界杯成功率达90%FIBA竞赛部主任：中国举办世界杯成功率达90%&lt;/p&gt;\r\n\r\n&lt;p&gt;FIBA竞赛部主任：中国举办世界杯成功率达90%&lt;/p&gt;\r\n\r\n&lt;p&gt;FIBA竞赛部主任：中国举办世界杯成功率达90%&lt;/p&gt;\r\n\r\n&lt;p&gt;FIBA竞赛部主任：中国举办世界杯成功率达90%&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2015-08-06', '2015-08-06 09:35:40', '2015-08-06 09:35:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'csub20160603_1044113807', 'cate20150805_1133251007', 'node20150806_0935506630', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 10, 'y', 'y', 'n', 'n', 'n', 'n', 'NBA球星隆多畅谈“控卫经” 称日后或将来华征战', 'n', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;NBA球星隆多畅谈&amp;ldquo;控卫经&amp;rdquo; 称日后或将来华征战&lt;/p&gt;\r\n\r\n&lt;p&gt;NBA球星隆多畅谈&amp;ldquo;控卫经&amp;rdquo; 称日后或将来华征战NBA球星隆多畅谈&amp;ldquo;控卫经&amp;rdquo; 称日后或将来华征战&lt;/p&gt;\r\n\r\n&lt;p&gt;NBA球星隆多畅谈&amp;ldquo;控卫经&amp;rdquo; 称日后或将来华征战&lt;/p&gt;\r\n\r\n&lt;p&gt;NBA球星隆多畅谈&amp;ldquo;控卫经&amp;rdquo; 称日后或将来华征战&lt;/p&gt;\r\n\r\n&lt;p&gt;NBA球星隆多畅谈&amp;ldquo;控卫经&amp;rdquo; 称日后或将来华征战NBA球星隆多畅谈&amp;ldquo;控卫经&amp;rdquo; 称日后或将来华征战&lt;/p&gt;\r\n\r\n&lt;p&gt;NBA球星隆多畅谈&amp;ldquo;控卫经&amp;rdquo; 称日后或将来华征战&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;NBA球星隆多畅谈&amp;ldquo;控卫经&amp;rdquo; 称日后或将来华征战NBA球星隆多畅谈&amp;ldquo;控卫经&amp;rdquo; 称日后或将来华征战&lt;/p&gt;\r\n\r\n&lt;p&gt;NBA球星隆多畅谈&amp;ldquo;控卫经&amp;rdquo; 称日后或将来华征战&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2015-08-06', '2016-06-03 10:44:46', '2015-08-06 09:35:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'csub20150805_1133597884', 'cate20150805_1133251007', 'node20150806_0936553528', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 10, 'y', 'y', 'n', 'n', 'n', 'n', '揭秘北京申冬奥宣传片 拍摄姚明成最大挑战', 'n', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;揭秘北京申冬奥宣传片 拍摄姚明成最大挑战&lt;/p&gt;\r\n\r\n&lt;p&gt;揭秘北京申冬奥宣传片 拍摄姚明成最大挑战揭秘北京申冬奥宣传片 拍摄姚明成最大挑战&lt;/p&gt;\r\n\r\n&lt;p&gt;揭秘北京申冬奥宣传片 拍摄姚明成最大挑战&lt;/p&gt;\r\n\r\n&lt;p&gt;揭秘北京申冬奥宣传片 拍摄姚明成最大挑战&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;揭秘北京申冬奥宣传片 拍摄姚明成最大挑战揭秘北京申冬奥宣传片 拍摄姚明成最大挑战&lt;/p&gt;\r\n\r\n&lt;p&gt;揭秘北京申冬奥宣传片 拍摄姚明成最大挑战&lt;/p&gt;\r\n\r\n&lt;p&gt;揭秘北京申冬奥宣传片 拍摄姚明成最大挑战揭秘北京申冬奥宣传片 拍摄姚明成最大挑战&lt;/p&gt;\r\n\r\n&lt;p&gt;揭秘北京申冬奥宣传片 拍摄姚明成最大挑战&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2015-10-06', '2015-12-19 10:55:54', '2015-08-06 09:36:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'csub20150805_1133597884', 'cate20150805_1133251007', 'node20150806_0952354404', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 15, 'y', 'y', 'n', 'n', 'n', 'n', 'NBA选秀改革双方向，老三届成绝响', 'n', '', NULL, NULL, NULL, '20150806_095329_7264.jpg', '20160406_094240_1253.jpg', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '当然，你也可以这里输入一些简短的文字描述。。。当然，你也可以这里输入一些简短的文字描述。。。<br />\n333<br />\n4444', '&lt;p&gt;NBA选秀改革双方向，老三届成绝响NBA选秀改革双方向，老三届成绝响&lt;/p&gt;\r\n\r\n&lt;p&gt;NBA选秀改革双方向，老三届成绝响NBA选秀改革双方向，老三届成绝响&lt;/p&gt;\r\n\r\n&lt;p&gt;NBA选秀改革双方向，老三届成绝响NBA选秀改革双方向，老三届成绝响&lt;/p&gt;\r\n\r\n&lt;p&gt;NBA选秀改革双方向，老三届成绝响&lt;/p&gt;\r\n\r\n&lt;p&gt;NBA选秀改革双方向，老三届成绝响NBA选秀改革双方向，老三届成绝响&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;NBA选秀改革双方向，老三届成绝响NBA选秀改革双方向，老三届成绝响&lt;/p&gt;\r\n\r\n&lt;p&gt;NBA选秀改革双方向，老三届成绝响&lt;/p&gt;\r\n\r\n&lt;p&gt;NBA选秀改革双方向，老三届成绝响NBA选秀改革双方向，老三届成绝响NBA选秀改革双方向，老三届成绝响&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2015-12-06', '2015-12-19 10:55:44', '2015-08-06 09:52:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'csub20150805_1136121045', 'cate20150805_1134397929', 'node20150806_0954129163', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 11, 'y', 'y', 'n', 'n', 'n', 'n', '中兴通讯是全球领先的综合通信解决方案提供商', 'n', '', NULL, NULL, NULL, '20160608_044457_3279.jpg', '20160608_044452_3565.jpg', '', '', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '', '&lt;p style=&quot;line-height: 20.8px;&quot;&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2015-08-06', '2015-08-06 09:54:28', '2015-08-06 09:54:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'csub20150805_1136195636', 'cate20150805_1134397929', 'node20150806_0955049381', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 17, 'y', 'y', 'n', 'n', 'n', 'n', '案例2222222222222222222222', 'n', NULL, NULL, NULL, NULL, '20160608_044526_9211.jpg', '20160608_044440_9374.jpg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2015-08-06', '2015-08-06 09:55:23', '2015-08-06 09:55:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'csub20150805_1136269998', 'cate20150805_1134397929', 'node20150806_0955508988', 'bh2010079002demososo', NULL, 'cn', 0, 'node', 18, 'y', 'y', 'n', 'n', 'n', 'n', '案例333333333333333333', 'n', NULL, NULL, NULL, NULL, '', '20180313_151518_6059.jpg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2015-08-06', '2015-08-06 09:56:15', '2015-08-06 09:55:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'csub20160120_0909049705', 'cate20160120_0907499941', 'node20160120_0910305966', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 10, 'y', 'y', 'n', 'n', 'n', 'n', '高级产品经理_新闻媒体部', 'n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;strong&gt;职位描述：&lt;/strong&gt;&lt;br /&gt;\r\n1. 负责新闻频道数据挖掘类内容产品设计；&amp;nbsp;&lt;br /&gt;\r\n2．负责新闻频道PC通用组件和模板产品设计；&amp;nbsp;&lt;br /&gt;\r\n3. 负责新闻频道栏目页面产品设计；&amp;nbsp;&lt;br /&gt;\r\n4．绘制产品原型，撰写需求文档，跟进项目进度，把控节奏，保证产品顺利上线；&amp;nbsp;&lt;br /&gt;\r\n5．对所负责的运营模块进行日常维护及数据跟踪，定期分析运营效果，跟踪用户行为。&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;任职要求：&lt;/strong&gt;&lt;br /&gt;\r\n1．3年以上互联网产品工作经验，熟悉资讯类产品；&amp;nbsp;&lt;br /&gt;\r\n2．能够快速理解公司战略需求，具备行业视角，对资讯产品有独到见解；&amp;nbsp;&lt;br /&gt;\r\n3. 能与跨部门团队共同协作实施部门产品策略；&amp;nbsp;&lt;br /&gt;\r\n4. 对数据、用户体验感觉敏锐，能提出有创新性的设计方案；&amp;nbsp;&lt;br /&gt;\r\n5．很强的逻辑思维能力、文档书写能力，能承担较大工作压力，善于发现问题和解决问题；&amp;nbsp;&lt;br /&gt;\r\n6. 有门户或者新闻网站产品工作背景经验者优先。&amp;nbsp;&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-01-20', '2016-01-20 09:10:56', '2016-01-20 09:10:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'csub20160120_0909049705', 'cate20160120_0907499941', 'node20160120_0912412687', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 11, 'y', 'y', 'n', 'n', 'n', 'n', '高级产品经理_新闻媒体部3', 'n', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p style=&quot;line-height: 20.8px;&quot;&gt;&lt;strong&gt;职位描述：&lt;/strong&gt;&lt;br /&gt;\r\n1. 负责新闻频道数据挖掘类内容产品设计；&amp;nbsp;&lt;br /&gt;\r\n2．负责新闻频道PC通用组件和模板产品设计；&amp;nbsp;&lt;br /&gt;\r\n3. 负责新闻频道栏目页面产品设计；&amp;nbsp;&lt;br /&gt;\r\n4．绘制产品原型，撰写需求文档，跟进项目进度，把控节奏，保证产品顺利上线；&amp;nbsp;&lt;br /&gt;\r\n5．对所负责的运营模块进行日常维护及数据跟踪，定期分析运营效果，跟踪用户行为。&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;&lt;strong&gt;任职要求：&lt;/strong&gt;&lt;br /&gt;\r\n1．3年以上互联网产品工作经验，熟悉资讯类产品；&amp;nbsp;&lt;br /&gt;\r\n2．能够快速理解公司战略需求，具备行业视角，对资讯产品有独到见解；&amp;nbsp;&lt;br /&gt;\r\n3. 能与跨部门团队共同协作实施部门产品策略；&amp;nbsp;&lt;br /&gt;\r\n4. 对数据、用户体验感觉敏锐，能提出有创新性的设计方案；&amp;nbsp;&lt;br /&gt;\r\n5．很强的逻辑思维能力、文档书写能力，能承担较大工作压力，善于发现问题和解决问题；&amp;nbsp;&lt;br /&gt;\r\n6. 有门户或者新闻网站产品工作背景经验者优先。&amp;nbsp;&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-01-20', '2016-01-20 09:13:26', '2016-01-20 09:12:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'csub20160120_0909049705', 'cate20160120_0907499941', 'node20160120_0912457509', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 10, 'y', 'y', 'n', 'n', 'n', 'n', '高级产品经理_新闻媒体部2', 'n', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p style=&quot;line-height: 20.8px;&quot;&gt;&lt;strong&gt;职位描述：&lt;/strong&gt;&lt;br /&gt;\r\n1. 负责新闻频道数据挖掘类内容产品设计；&amp;nbsp;&lt;br /&gt;\r\n2．负责新闻频道PC通用组件和模板产品设计；&amp;nbsp;&lt;br /&gt;\r\n3. 负责新闻频道栏目页面产品设计；&amp;nbsp;&lt;br /&gt;\r\n4．绘制产品原型，撰写需求文档，跟进项目进度，把控节奏，保证产品顺利上线；&amp;nbsp;&lt;br /&gt;\r\n5．对所负责的运营模块进行日常维护及数据跟踪，定期分析运营效果，跟踪用户行为。&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;&lt;strong&gt;任职要求：&lt;/strong&gt;&lt;br /&gt;\r\n1．3年以上互联网产品工作经验，熟悉资讯类产品；&amp;nbsp;&lt;br /&gt;\r\n2．能够快速理解公司战略需求，具备行业视角，对资讯产品有独到见解；&amp;nbsp;&lt;br /&gt;\r\n3. 能与跨部门团队共同协作实施部门产品策略；&amp;nbsp;&lt;br /&gt;\r\n4. 对数据、用户体验感觉敏锐，能提出有创新性的设计方案；&amp;nbsp;&lt;br /&gt;\r\n5．很强的逻辑思维能力、文档书写能力，能承担较大工作压力，善于发现问题和解决问题；&amp;nbsp;&lt;br /&gt;\r\n6. 有门户或者新闻网站产品工作背景经验者优先。&amp;nbsp;&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-01-20', '2016-01-20 09:13:22', '2016-01-20 09:12:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'csub20160120_0909109474', 'cate20160120_0907499941', 'node20160120_0914093196', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 10, 'y', 'y', 'n', 'n', 'n', 'n', '广告销售总监3', 'n', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p style=&quot;line-height: 20.8px;&quot;&gt;&lt;strong&gt;职位描述：&amp;nbsp;&lt;/strong&gt;&lt;br /&gt;\r\n1、完成部门制定的季度及年度广告销售任务； &amp;nbsp;&lt;br /&gt;\r\n2、维持客户和公司之间的广告及合作关系，争取双赢，并使公司利益最大化；&amp;nbsp;&lt;br /&gt;\r\n3、有效利用公司资源，帮助客户成功进行网络推广，进行年度和短期的网络规划； &amp;nbsp;&lt;br /&gt;\r\n4、与销售部内部各职能部门协作，保证客户需求顺利实现；&amp;nbsp;&lt;br /&gt;\r\n5、与客户建立长期的良好合作关系。&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;&lt;strong&gt;任职要求：&lt;/strong&gt;&amp;nbsp;&lt;br /&gt;\r\n1、大专以上学历，两年以上互联网市场销售或策划工作经验；&amp;nbsp;&lt;br /&gt;\r\n2、熟悉市场活动、广告推广的运作模式，有丰富的市场推广、品牌经验者优先； &amp;nbsp;&lt;br /&gt;\r\n3、优秀的沟通技巧和谈判能力，出色的对内对外协调能力； &amp;nbsp;&lt;br /&gt;\r\n4、性格开朗稳重，敬业、认真、学习能力强、团队合作好，能胜任高强度快节奏工作； &amp;nbsp;&lt;br /&gt;\r\n5、熟练使用WORD/EXCEL/PPT等办公软件。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-01-20', '2016-01-20 09:15:42', '2016-01-20 09:14:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'csub20160120_0909109474', 'cate20160120_0907499941', 'node20160120_0914131240', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 10, 'y', 'y', 'n', 'n', 'n', 'n', '广告销售总监2', 'n', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p style=&quot;line-height: 20.8px;&quot;&gt;&lt;strong&gt;职位描述：&amp;nbsp;&lt;/strong&gt;&lt;br /&gt;\r\n1、完成部门制定的季度及年度广告销售任务； &amp;nbsp;&lt;br /&gt;\r\n2、维持客户和公司之间的广告及合作关系，争取双赢，并使公司利益最大化；&amp;nbsp;&lt;br /&gt;\r\n3、有效利用公司资源，帮助客户成功进行网络推广，进行年度和短期的网络规划； &amp;nbsp;&lt;br /&gt;\r\n4、与销售部内部各职能部门协作，保证客户需求顺利实现；&amp;nbsp;&lt;br /&gt;\r\n5、与客户建立长期的良好合作关系。&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;&lt;strong&gt;任职要求：&lt;/strong&gt;&amp;nbsp;&lt;br /&gt;\r\n1、大专以上学历，两年以上互联网市场销售或策划工作经验；&amp;nbsp;&lt;br /&gt;\r\n2、熟悉市场活动、广告推广的运作模式，有丰富的市场推广、品牌经验者优先； &amp;nbsp;&lt;br /&gt;\r\n3、优秀的沟通技巧和谈判能力，出色的对内对外协调能力； &amp;nbsp;&lt;br /&gt;\r\n4、性格开朗稳重，敬业、认真、学习能力强、团队合作好，能胜任高强度快节奏工作； &amp;nbsp;&lt;br /&gt;\r\n5、熟练使用WORD/EXCEL/PPT等办公软件。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-01-20', '2016-01-20 09:15:36', '2016-01-20 09:14:13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'csub20160120_0909109474', 'cate20160120_0907499941', 'node20160120_0914178440', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 12, 'y', 'y', 'n', 'n', 'n', 'n', '广告销售总监', 'n', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;strong&gt;职位描述：&amp;nbsp;&lt;/strong&gt;&lt;br /&gt;\r\n1、完成部门制定的季度及年度广告销售任务； &amp;nbsp;&lt;br /&gt;\r\n2、维持客户和公司之间的广告及合作关系，争取双赢，并使公司利益最大化；&amp;nbsp;&lt;br /&gt;\r\n3、有效利用公司资源，帮助客户成功进行网络推广，进行年度和短期的网络规划； &amp;nbsp;&lt;br /&gt;\r\n4、与销售部内部各职能部门协作，保证客户需求顺利实现；&amp;nbsp;&lt;br /&gt;\r\n5、与客户建立长期的良好合作关系。&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;任职要求：&lt;/strong&gt;&amp;nbsp;&lt;br /&gt;\r\n1、大专以上学历，两年以上互联网市场销售或策划工作经验；&amp;nbsp;&lt;br /&gt;\r\n2、熟悉市场活动、广告推广的运作模式，有丰富的市场推广、品牌经验者优先； &amp;nbsp;&lt;br /&gt;\r\n3、优秀的沟通技巧和谈判能力，出色的对内对外协调能力； &amp;nbsp;&lt;br /&gt;\r\n4、性格开朗稳重，敬业、认真、学习能力强、团队合作好，能胜任高强度快节奏工作； &amp;nbsp;&lt;br /&gt;\r\n5、熟练使用WORD/EXCEL/PPT等办公软件。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-01-20', '2016-01-20 09:15:31', '2016-01-20 09:14:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'csub20160120_0909201766', 'cate20160120_0907499941', 'node20160120_0917464437', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 16, 'y', 'y', 'n', 'n', 'n', 'n', '市场活动主管3', 'n', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;职位描述：&lt;br /&gt;\r\n1、制定新浪新闻全年市场活动策略；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;2、负责新浪新闻大型线下推广活动、会议、发布会的策划、组织及执行、结案报告工作；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;3、根据新浪新闻的品牌和商务策略，主动策划市场活动并实现售卖；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;4、制定市场活动年度预算，合理把控市场费用使用；&lt;/p&gt;\r\n\r\n&lt;p&gt;任职要求：&lt;br /&gt;\r\n1、 三年以上市场活动相关经验，本科及以上学历，有互联网公司市场部、公关广告公司经历优先；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;2、 具备优秀的文案策划功底，较强的PPT制作能力；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;3、对传媒领域有较深入了解，有举办大型互联网会议经验；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;4、具备较强的组织协调、全案企划整合、渠道拓展及执行能力；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;5、拥有良好的项目规划、设计、执行、管理及报告撰写能力；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;6、 善于团队协作沟通，责任心强，有较强的承压能力和开拓创新精神；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;7、 良好的中、英文书面及口头表达能力。&amp;nbsp;&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-01-20', '2016-01-20 09:18:49', '2016-01-20 09:17:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'csub20160120_0909201766', 'cate20160120_0907499941', 'node20160120_0917504351', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 14, 'y', 'y', 'n', 'n', 'n', 'n', '市场活动主管2', 'n', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;职位描述：&lt;br /&gt;\r\n1、制定新浪新闻全年市场活动策略；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;2、负责新浪新闻大型线下推广活动、会议、发布会的策划、组织及执行、结案报告工作；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;3、根据新浪新闻的品牌和商务策略，主动策划市场活动并实现售卖；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;4、制定市场活动年度预算，合理把控市场费用使用；&lt;/p&gt;\r\n\r\n&lt;p&gt;任职要求：&lt;br /&gt;\r\n1、 三年以上市场活动相关经验，本科及以上学历，有互联网公司市场部、公关广告公司经历优先；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;2、 具备优秀的文案策划功底，较强的PPT制作能力；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;3、对传媒领域有较深入了解，有举办大型互联网会议经验；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;4、具备较强的组织协调、全案企划整合、渠道拓展及执行能力；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;5、拥有良好的项目规划、设计、执行、管理及报告撰写能力；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;6、 善于团队协作沟通，责任心强，有较强的承压能力和开拓创新精神；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;7、 良好的中、英文书面及口头表达能力。&amp;nbsp;&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-01-20', '2016-01-20 09:18:45', '2016-01-20 09:17:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'csub20160120_0909201766', 'cate20160120_0907499941', 'node20160120_0917539322', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 13, 'y', 'y', 'n', 'n', 'n', 'n', '市场活动主管', 'n', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;职位描述：&lt;br /&gt;\r\n1、制定新浪新闻全年市场活动策略；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;2、负责新浪新闻大型线下推广活动、会议、发布会的策划、组织及执行、结案报告工作；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;3、根据新浪新闻的品牌和商务策略，主动策划市场活动并实现售卖；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;4、制定市场活动年度预算，合理把控市场费用使用；&lt;/p&gt;\r\n\r\n&lt;p&gt;任职要求：&lt;br /&gt;\r\n1、 三年以上市场活动相关经验，本科及以上学历，有互联网公司市场部、公关广告公司经历优先；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;2、 具备优秀的文案策划功底，较强的PPT制作能力；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;3、对传媒领域有较深入了解，有举办大型互联网会议经验；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;4、具备较强的组织协调、全案企划整合、渠道拓展及执行能力；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;5、拥有良好的项目规划、设计、执行、管理及报告撰写能力；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;6、 善于团队协作沟通，责任心强，有较强的承压能力和开拓创新精神；&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;7、 良好的中、英文书面及口头表达能力。&amp;nbsp;&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-01-20', '2016-01-20 09:18:39', '2016-01-20 09:17:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'csub20160120_0933583105', 'cate20160120_0933312300', 'node20160120_0936067492', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 10, 'y', 'y', 'n', 'n', 'n', 'n', '资料下载1', 'n', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&amp;nbsp;&lt;span style=&quot;line-height: 1.6em;&quot;&gt;料下载内容资料下载内容资料下载内容资料下载内容资料&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&amp;nbsp;容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&lt;br /&gt;\r\n下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&lt;br /&gt;\r\n下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-01-20', '2016-01-20 09:58:20', '2016-01-20 09:36:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'csub20160120_0933583105', 'cate20160120_0933312300', 'node20160120_0936127466', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 10, 'y', 'y', 'n', 'n', 'n', 'n', '资料下载12', 'n', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&amp;nbsp;&lt;span style=&quot;line-height: 1.6em;&quot;&gt;料下载内容资料下载内容资料下载内容资料下载内容资料&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&amp;nbsp;容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&lt;br /&gt;\r\n下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&lt;br /&gt;\r\n下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-01-20', '2016-01-20 09:59:00', '2016-01-20 09:36:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `zzz_node` (`id`, `pid`, `ppid`, `pidname`, `pbh`, `pbrand`, `lang`, `pos`, `modtype`, `hit`, `sta_search`, `sta_visible`, `sta_noaccess`, `sta_tj`, `sta_new`, `sta_orignimg`, `title`, `sta_title`, `titlecss`, `cssname`, `titlestyle`, `titlestylesub`, `kv`, `kvsm`, `kvsm2`, `alias_jump`, `blockid`, `blockcntid`, `iconimg`, `linktitle`, `linkurl`, `linkmore`, `linkcss`, `linksize`, `linkradius`, `linkalign`, `despjj`, `desp`, `desptext`, `arr_can`, `dateday`, `dateedit`, `dateadd`, `titlebz1`, `titlebz2`, `titlebz3`, `seo1`, `seo2`, `seo3`, `videoid`, `albumid`) VALUES
(51, 'csub20160120_0933583105', 'cate20160120_0933312300', 'node20160120_0936166499', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 14, 'y', 'y', 'n', 'n', 'n', 'n', '资料下载13', 'n', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&amp;nbsp;&lt;span style=&quot;line-height: 1.6em;&quot;&gt;料下载内容资料下载内容资料下载内容资料下载内容资料&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&amp;nbsp;容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&lt;br /&gt;\r\n下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&lt;br /&gt;\r\n下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##http://www.demososo.com==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-01-20', '2016-01-20 09:58:54', '2016-01-20 09:36:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'csub20160120_0934036573', 'cate20160120_0933312300', 'node20160120_0936242604', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 10, 'y', 'y', 'n', 'n', 'n', 'n', '资料下载2', 'n', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&amp;nbsp;&lt;span style=&quot;line-height: 1.6em;&quot;&gt;料下载内容资料下载内容资料下载内容资料下载内容资料&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&amp;nbsp;容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&lt;br /&gt;\r\n下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&lt;br /&gt;\r\n下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-01-20', '2016-01-20 09:58:11', '2016-01-20 09:36:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'csub20160120_0934036573', 'cate20160120_0933312300', 'node20160120_0936295433', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 10, 'y', 'y', 'n', 'n', 'n', 'n', '资料下载22', 'n', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&amp;nbsp;&lt;span style=&quot;line-height: 1.6em;&quot;&gt;料下载内容资料下载内容资料下载内容资料下载内容资料&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&amp;nbsp;容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&lt;br /&gt;\r\n下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&lt;br /&gt;\r\n下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-01-20', '2016-01-20 10:03:54', '2016-01-20 09:36:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'csub20160120_0934036573', 'cate20160120_0933312300', 'node20160120_0936331335', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 12, 'y', 'y', 'n', 'n', 'n', 'n', '资料下载23', 'n', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&amp;nbsp;&lt;span style=&quot;line-height: 1.6em;&quot;&gt;料下载内容资料下载内容资料下载内容资料下载内容资料&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&amp;nbsp;容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&lt;br /&gt;\r\n下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&lt;br /&gt;\r\n下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-01-20', '2016-01-20 09:58:06', '2016-01-20 09:36:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'csub20160120_0934083457', 'cate20160120_0933312300', 'node20160120_0936443830', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 12, 'y', 'y', 'n', 'n', 'n', 'n', '资料下载3', 'n', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&amp;nbsp;&lt;span style=&quot;line-height: 1.6em;&quot;&gt;料下载内容资料下载内容资料下载内容资料下载内容资料&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&amp;nbsp;容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&lt;br /&gt;\r\n下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&lt;br /&gt;\r\n下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##http://www.demososo.com==#==linkmore:##', '2016-01-20', '2016-01-20 09:58:01', '2016-01-20 09:36:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'csub20160120_0934083457', 'cate20160120_0933312300', 'node20160120_0936497316', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 11, 'y', 'y', 'n', 'n', 'n', 'n', '资料下载32', 'n', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&amp;nbsp;&lt;span style=&quot;line-height: 1.6em;&quot;&gt;料下载内容资料下载内容资料下载内容资料下载内容资料&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&amp;nbsp;容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&lt;br /&gt;\r\n下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&lt;br /&gt;\r\n下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##http://www.demososo.com==#==linkmore:##', '2016-01-20', '2016-01-20 09:57:57', '2016-01-20 09:36:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'csub20160120_0934083457', 'cate20160120_0933312300', 'node20160120_0936537381', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 15, 'y', 'y', 'n', 'n', 'n', 'n', '资料下载33', 'n', 'sdds', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&amp;nbsp;&lt;span style=&quot;line-height: 1.6em;&quot;&gt;料下载内容资料下载内容资料下载内容资料下载内容资料&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&amp;nbsp;容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&lt;br /&gt;\r\n下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;资料下载内容资料下载内容资料下载内容资料下载内容资料&lt;br /&gt;\r\n下载内容资料下载内容资料下载内容资料下载内容资料下载内容&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##http://www.demososo.com==#==linkmore:##', '2016-01-20', '2016-04-10 09:44:28', '2016-01-20 09:36:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'csub20150805_1133441588', 'cate20150805_1133251007', 'node20160406_0915262737', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 13, 'y', 'y', 'n', 'n', 'n', 'n', '曝穆帅受够了！逼曼联签约 他不想被范加尔耍', 'n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;范加尔和穆里尼奥这对昔日师徒，如今正在同时竞争曼联的帅位。早前曼联战绩不佳时，穆里尼奥入主的呼声甚高。而近来红魔战绩好转，弗格森更是公开表态支持范加尔，这让穆里尼奥有些坐不住了。据《太阳报》报道，穆帅希望能与曼联签订一份书面协议，确保自己在今夏成为曼联主帅，而不是这样没有尽头的等待下去。&lt;/p&gt;\r\n\r\n&lt;p&gt;穆里尼奥的心急完全是在情理之中的。曼联近来取得连胜，联赛积分榜上已经只差第4名的曼城1分，红魔很有希望拿到下赛季的欧冠资格，而这也是曼联给范加尔定下的最低要求，一旦他能够完成任务，就大有希望保住帅位。另一方面，曼联功勋主帅弗格森在最近接受采访时也公开表示：&amp;ldquo;曼联需要对范加尔保持耐心，他在提拔青训球员上做的非常好，我认为曼联的未来充满希望。&amp;rdquo;弗格森的发言也被看作是曼联高层仍然信任范加尔的一个标志。&lt;/p&gt;\r\n\r\n&lt;p&gt;而来自荷兰《电讯报》的最新消息称，曼联高层已经向范加尔做出了保证，俱乐部会在今夏留任他，完成最后一年的合同。这对于一直想要拿下曼联帅位的穆里尼奥来说，无疑不是一个好消息。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-06', '2016-04-06 09:15:56', '2016-04-06 09:15:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'csub20150805_1133441588', 'cate20150805_1133251007', 'node20160406_0916127154', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 59, 'y', 'y', 'n', 'n', 'n', 'n', '他们回来了！昔日欧洲劲旅4年后重返顶级联赛', 'n', NULL, NULL, NULL, NULL, '20160406_091658_4796.jpg', '20160406_094131_6337.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;在苏格兰冠军联赛第32轮的一场比赛中，流浪者FC主场1-0击败邓巴顿，提前锁定联赛冠军，下赛季他们将征战苏格兰超级联赛，而他们曾经有个响亮无比的名字&amp;mdash;&amp;mdash;格拉斯哥流浪者，在经过4年的努力后，他们在遭受处罚被降入苏格兰乙级联赛后重新回到了顶级联赛。&lt;/p&gt;\r\n\r\n&lt;p&gt;本场比赛流浪者FC坐镇主场迎战倒数第三的邓巴顿，只要获胜就可以提前4轮锁定冠军，而想要直接升入苏超必须夺得冠军，否则还可能通过附加赛才能冲超，上赛季流浪者FC就是在升级附加赛决赛中输给了马瑟韦尔，重返顶级联赛的步伐晚了一年。&lt;/p&gt;\r\n\r\n&lt;p&gt;第50分钟，塔弗尼尔打进了制胜球，流浪者FC全取三分，积分达到79分，而第二名的福尔柯克和第三名的希伯尼安即使全胜也分别只能得到74分和77分，流浪者FC已经将联赛冠军揽入怀中，在时隔4年后即将重新踏上苏超的赛场。&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;br /&gt;\r\n昔日的格拉斯哥流浪者是苏格兰最顶级的强队，也是欧洲顶级的强队，他们拥有54个苏格兰顶级联赛冠军、33个苏格兰杯冠军、27个苏格兰联赛杯冠军，1971-72赛季他们还夺得了欧洲优胜者杯冠军，但他们在2012年由于破产被降入了第四级别联赛，并以流浪者FC的名字进行重组。2012-13赛季和2013-14赛季，流浪者FC分别夺得了苏乙和苏甲的冠军，在上赛季升级失败后，流浪者FC重振旗鼓，再又一个赛季的努力后，他们终于圆梦。&lt;/p&gt;\r\n\r\n&lt;p&gt;格拉斯哥流浪者和凯尔特人瓜分了苏格兰顶级联赛的大部分冠军，而在格拉斯哥流浪者不在苏超的这几个赛季，凯尔特人已经是完成了苏超三连冠，领先优势分别是16分、29分、17分，本赛季在还剩4轮的情况下凯尔特人领先第二名阿伯丁也还有5分。格拉斯哥流浪者和凯尔特人的比赛是世界足坛著名的&amp;ldquo;老字号德比&amp;rdquo;，比赛激烈程度超乎想象，随着流浪者FC重返顶级联赛，&amp;ldquo;老字号德比&amp;rdquo;也将开启新的篇章。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-06', '2016-04-06 09:16:36', '2016-04-06 09:16:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'csub20150805_1133512388', 'cate20150805_1133251007', 'node20160406_0919389503', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 20, 'y', 'y', 'n', 'n', 'n', 'n', '国米动手!和中超抢曼城天王 年薪500万PK2500万', 'n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;亚亚-图雷的经纪人已经亲口承认，球员在赛季结束后将会铁定离开曼城，而国米也准备出手把这位中场大将收入阵中，但是蓝黑军团要面对与中超球队的竞争。&lt;/p&gt;\r\n\r\n&lt;p&gt;昨天，亚亚-图雷的经纪人在接受采访时称：&amp;ldquo;图雷肯定会离开曼城，我们收到了各个球队的offer，现在需要进行一下选择。钱会是最重要的因素吗？绝对不是！再多的钱，也不能与俱乐部所展现出来的雄心和未来计划相比，对我们来说最好的就是最能说服我们的。国米？所有人都知道图雷与曼奇尼的关系，国米的未来计划也非常诱人，但我们还没有做出决定。&amp;rdquo;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;br /&gt;\r\n为了得到科特迪瓦大将，国米加紧了行动。根据《罗马体育报》的报道，国米为图雷已经准备好了一份合同，算上肖像权、奖金等，图雷的年薪将会达到500万欧元，合同期为两年，若达到一定出场数字，会触发延长一年的条款。500万的年薪比起图雷目前在曼城拿到的1000万来说显然是低了不少，但是这在意甲已经是较高的薪资水平了，尤文的法国天王博格巴目前只拿了450万的年薪，而意甲顶薪德罗西不过拿着650万欧元，在国米队内500万也绝对是第一高薪了。&lt;/p&gt;\r\n\r\n&lt;p&gt;但是这样的待遇能否打动图雷还不好说，因为国米要面对与中超球队的竞争。上个月就有英国媒体称上海上港曾经重金邀请图雷加盟，而他的经纪人也透露，江苏苏宁给他开出了2000万英镑（约合2500万欧元）的天价年薪：&amp;ldquo;我们拒绝了一家中超俱乐部，就是买下拉米雷斯的那支球队，他们开出的报价比给拉米雷斯的还高，但我们现在不想去那里。&amp;rdquo;按照图雷经纪人的说法，球员现在不会考虑金钱，而是要力求在高水平的联赛中效力。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-06', '2016-04-06 09:20:18', '2016-04-06 09:19:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'csub20150805_1133512388', 'cate20150805_1133251007', 'node20160406_0920373622', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 19, 'y', 'y', 'n', 'n', 'n', 'n', '国米未来还有大咖！马竞铁帅亲承早晚回来执教', 'n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;马竞主教练西蒙尼也是近几年世界足坛崛起的少帅，不少豪门球队都想邀请这位极具个性的天才执教。西蒙尼在近期接受采访的时候还坦言称自己希望未来能够回到国际米兰执教。&lt;/p&gt;\r\n\r\n&lt;p&gt;带领马竞在西甲打破皇马巴萨的垄断让西蒙尼声名鹊起，他的铁血属性、执教能力和带队能力让众多豪门眼红。在切尔西确定孔蒂为新任主帅之前，就有传言称蓝军想请西蒙尼出任球队主帅。还有媒体称阿森纳希望西蒙尼能接班温格带领枪手重夺冠军。&lt;/p&gt;\r\n\r\n&lt;p&gt;但是以西蒙尼本人的意愿，目前还没有离开马德里竞技的打算，但他透露，自己希望未来能够执教国际米兰：&amp;ldquo;在我的职业生涯中，有许多地点是我非常渴望要去的，所以我希望未来能够回到米兰。当然不是马上，因为我目前在马竞状况很好。这只是我对未来的一种构想，就像当初我计划回到马德里一样。&amp;rdquo;&lt;/p&gt;\r\n\r\n&lt;p&gt;球员时代，西蒙尼在意甲踢过6年，加盟拉齐奥之前他于1997-1999年之间的两个赛季在国米效力，共为球队打进11球，还帮助蓝黑军团在1998年拿到了欧洲联盟杯的冠军。随后在拉齐奥他又随队获得了意甲冠军、意大利杯冠军和意大利超级杯的冠军。&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-06', '2016-04-06 09:24:40', '2016-04-06 09:20:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'csub20150805_1133512388', 'cate20150805_1133251007', 'node20160406_0925136757', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 17, 'y', 'y', 'n', 'n', 'n', 'n', '马刺险胜爵士义助火箭 威少三双雷霆轻取掘金', 'n', NULL, NULL, NULL, NULL, '20160406_092545_4473.jpg', '20160406_094221_3130.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;马刺（65-12）惊险过关，取得四连胜。考瓦伊-莱昂纳德在终场前4.9秒投中制胜一球，全场贡献18分8个篮板，拉马库斯-阿尔德里奇[微博]14分7个篮板，托尼-帕克11分4次助攻，蒂姆-邓肯3分。替补出场的凯尔-安德森11分，马努-吉诺比利14分。&lt;/p&gt;\r\n\r\n&lt;p&gt;爵士（39-39）二连胜结束，仍居西部第八，但优势不大。罗德尼-胡德23分7个篮板，谢尔文-马克13分，戈登-海沃德12分，鲁迪-戈伯特4分10个篮板。替补出场的乔-因格尔斯13分。&lt;/p&gt;\r\n\r\n&lt;p&gt;前三节马刺以67-53领先，但在最后一节遭到爵士的顽强反击，几乎被翻盘。&lt;/p&gt;\r\n\r\n&lt;p&gt;比赛还有1分59秒时，安德森命中三分，马刺以83-80再度领先。胡德连续两次中投命中，爵士以84-83反超。&lt;/p&gt;\r\n\r\n&lt;p&gt;帕克命中一记三分后，在比赛还有27.7秒时，海沃德禁区内转身投篮命中，双方战成86-86。&lt;/p&gt;\r\n\r\n&lt;p&gt;帕克此后的投篮遭到盖帽，但马刺拥有球权，比赛还有4.9秒时莱昂纳德接安德森传球，中投命中，马刺以88-86领先。爵士还有机会，但胡德最后时刻三分不中。&lt;/p&gt;\r\n\r\n&lt;p&gt;此役过后，爵士仍居西部第八，但只领先火箭0.5场。火箭有平局优势，他们只要剩下的比赛全部胜出，就能取得季后赛门票，已经可以掌控自己的命运。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-06', '2016-04-06 09:25:36', '2016-04-06 09:25:13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'csub20150805_1133512388', 'cate20150805_1133251007', 'node20160406_0926069724', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 12, 'y', 'y', 'n', 'n', 'n', 'n', '观点:鲁能阵中找不到“尖刀”那就必须“换刀”', 'n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;主队大举压上，本来应该是客队难得的反击良机。尤其是在场上比分持平的情况下，只需要一次成功的快速反击，就能够终结比赛的悬念，甚至上演一场逆袭的好戏。&lt;/p&gt;\r\n\r\n&lt;p&gt;这样的好戏，在2016赛季的中超联赛中就已经上演过不止一次。中超首轮比赛中，重庆力帆队的&amp;ldquo;小摩托&amp;rdquo;费尔南多快速反击弄得广州恒大队一众大牌无功而返。在上周的联赛中，&amp;ldquo;小摩托&amp;rdquo;在比赛最后阶段的一次犀利反击，又让同样拥有一众大牌的上海上港队到手的三分变一分。&lt;/p&gt;\r\n\r\n&lt;p&gt;看了好戏过眼瘾之余，不禁的想、不由得问，鲁能泰山队的&amp;ldquo;好戏&amp;rdquo;，究竟何时能够上演？&lt;/p&gt;\r\n\r\n&lt;p&gt;实际上讲，这是一个相当尴尬的话题。当2015赛季失去瓦格纳。洛维之后，鲁能泰山队的阵容中，无论是蒙蒂略、阿洛伊西奥还是当做&amp;ldquo;洛维替代者&amp;rdquo;加盟的塔尔德利，都无法担当起上演类似&amp;ldquo;好戏&amp;rdquo;的重任。&lt;/p&gt;\r\n\r\n&lt;p&gt;在本场比赛中，首发阵容里的吴兴涵，可以看做是曼诺准备好在合适时候捅FC首尔的一把&amp;ldquo;小刀&amp;rdquo;，而塔尔德利则是光明正大摆在外面充当&amp;ldquo;尖刀&amp;rdquo;的角色。毕竟，顶着&amp;ldquo;巴西9号&amp;rdquo;名头的塔尔德利且不论战斗力如何，摆出来还总是能吓唬吓唬对手的。&lt;/p&gt;\r\n\r\n&lt;p&gt;FC首尔队并没有对塔尔德利有丝毫的轻视，在全场比赛中，拿球时能够享受三人逼抢的鲁能泰山队员只有蒙蒂略和塔尔德利。可以说，FC首尔在本场比赛中对蒙蒂略和塔尔德利的限制是成功的。蒙蒂略的进攻，大多在拿球之后尚未传球之时就被FC首尔队的贴身逼抢破坏。而塔尔德利拿球之后试图发动的进攻，几乎全被终结在萌芽状态。甚至说，不知这两名外援，鲁能泰山队的另一名中场核心蒿俊闵在本场比赛中也因为被FC首尔的防守球员重点照顾而几乎隐形。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-06', '2016-04-06 09:26:25', '2016-04-06 09:26:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'csub20150805_1133512388', 'cate20150805_1133251007', 'node20160406_0927195094', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 28, 'y', 'y', 'n', 'n', 'n', 'n', '14中5却无碍这4.9秒的绝杀 邓肯眼看着他长大', 'n', NULL, NULL, NULL, NULL, '20160406_092740_2483.jpg', '20160406_094157_4368.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '北京时间4月6日，圣安东尼奥马刺在客场以88-86战胜犹他爵士。马刺核心考瓦伊-莱昂纳德出场38分钟，14投5中得到18分。第四节最后4.9秒时，莱昂纳德命中了一个制胜的中距离跳投。<br />\n当初选秀大会上用乔治-希尔[微博]换来莱昂纳德时，可能连马刺队自己都没有想到莱昂纳德会有那么好的发展。', '&lt;p&gt;北京时间4月6日，圣安东尼奥马刺在客场以88-86战胜犹他爵士。马刺核心考瓦伊-莱昂纳德出场38分钟，14投5中得到18分。第四节最后4.9秒时，莱昂纳德命中了一个制胜的中距离跳投。&lt;/p&gt;\r\n\r\n&lt;p&gt;当初选秀大会上用乔治-希尔[微博]换来莱昂纳德时，可能连马刺队自己都没有想到莱昂纳德会有那么好的发展。&lt;/p&gt;\r\n\r\n&lt;p&gt;起初，莱昂纳德只是被视为一名防守型球员，但是过去两年里，他先后成为总决赛MVP和最佳防守球员，并成为当今NBA攻守最全面的球员之一。本赛季，莱昂纳德已经是马刺当之无愧的核心球员，他场均得到21.1分、6.8个篮板和2.6次助攻，外加1.8次抢断，投篮命中率和三分球命中率分别达到51%和45.7%。如今的莱昂纳德在进攻端打得非常高效，防守端则是更加沉稳老练。&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;br /&gt;\r\n根据BR网的统计结果显示：考瓦伊成为本赛季常规赛MVP的概率排进了联盟前四，甚至超过了詹姆斯。&lt;/p&gt;\r\n\r\n&lt;p&gt;今天面对防守强悍的爵士，马刺的进攻打得并不顺利，考瓦伊的投篮手感也不是很好。全场比赛，他14投仅5中。不过在第二节，莱昂纳德得到了马刺全队17分里面的8分，他在那一节6投2中，5罚4中，使得马刺在上半场结束时依然领先对手。&lt;/p&gt;\r\n\r\n&lt;p&gt;下半场，两队各打了一节好球，而马刺在第四节被爵士打了一波33-21。最后还剩27秒时，海沃德的转身跳投将双方比分打成86平。此后马刺的一次进攻，帕克的上篮被戈伯特帽掉。关键时刻，考瓦伊展现出了杀手本色，他在最后4.9秒时命中一个中距离跳投，并帮助马刺在客场涉险过关。&lt;/p&gt;\r\n\r\n&lt;p&gt;凭借着考瓦伊的准绝杀，蒂姆-邓肯迎来了个人职业生涯的第1000场胜利。可以说，邓肯是亲眼看着莱昂纳德在很短的时间内成为联盟的顶级球星，现在，他已经可以非常放心地把马刺队交到考瓦伊的手里。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-06', '2016-06-07 08:45:40', '2016-04-06 09:27:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'csub20150805_1133597884', 'cate20150805_1133251007', 'node20160406_0928025393', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 22, 'y', 'y', 'n', 'n', 'n', 'n', '洛城新王的尴尬!25+4+8他赢了比赛赢不了人心', 'n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '快船与湖人同处一座球场，但正所谓“一山不容二虎”，两支球队虽然近况不同，实力存在差距，仍然会刺刀见红，擦出火花。而保罗与湖人队也颇有渊源。2011年，保罗险些被黄蜂交易到湖人，这笔交易最终被NBA总裁斯特恩否决。今天的比赛中，面对“同城死敌”，快船队没有心慈手软，他们仅用三节就打垮了湖人队。', '&lt;p&gt;快船与湖人同处一座球场，但正所谓&amp;ldquo;一山不容二虎&amp;rdquo;，两支球队虽然近况不同，实力存在差距，仍然会刺刀见红，擦出火花。而保罗与湖人队也颇有渊源。2011年，保罗险些被黄蜂交易到湖人，这笔交易最终被NBA总裁斯特恩否决。今天的比赛中，面对&amp;ldquo;同城死敌&amp;rdquo;，快船队没有心慈手软，他们仅用三节就打垮了湖人队。&lt;/p&gt;\r\n\r\n&lt;p&gt;快船队当家控卫克里斯保罗显现出全明星后卫的气质。首节保罗里突外投，屡屡命中高难度投篮；此外，保罗犀利的传球如手术刀一般撕破了湖人队的防线，首节保罗多次连线小乔丹，助攻后者完成空接暴扣。在保罗的带领下，快船队打出了20比2的梦幻开局。随后湖人队发起反攻，但是快船队在保罗稳健地掌控之下，一直占据领先。&lt;/p&gt;\r\n\r\n&lt;p&gt;第三节保罗再次带领全队打出流畅进攻，快船队在第三节再次拉开了比分，随着保罗一记空位3分，快船队得以领先21分，这记三分球也终结了比赛的悬念，保罗也&amp;ldquo;打卡下班&amp;rdquo;。最终快船迎来了大胜，保罗则得到25分4篮板8次助攻，绝对是球队灵魂般的人物。&lt;/p&gt;\r\n\r\n&lt;p&gt;值得一提的是，尽管保罗本场表现出色，且带队在主场赢得了一场大胜，但自己主场的球迷们还是将更多地掌声和欢呼送给了对面的科比。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-06', '2016-06-07 08:50:52', '2016-04-06 09:28:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'csub20160603_1044113807', 'cate20150805_1133251007', 'node20160406_0928324317', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 30, 'y', 'y', 'n', 'n', 'n', 'n', '火牛爵最后5场解析:小牛关键2战 休城能5连胜?', 'n', '', NULL, NULL, NULL, '20160406_092854_8161.jpg', '20160406_094140_5257.jpg', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '北京时间4月6日，据《Fansided》报道，常规赛还剩下最后一周多的时间，西部季后赛的最后两个席位也将在爵士、小牛和火箭当中产生，剩余的赛程里对谁最有利？今天，《Fansided》就专门分析了三队各自剩下的赛程。', '&lt;p&gt;北京时间4月6日，据《Fansided》报道，常规赛还剩下最后一周多的时间，西部季后赛的最后两个席位也将在爵士、小牛和火箭当中产生，剩余的赛程里对谁最有利？今天，《Fansided》就专门分析了三队各自剩下的赛程。&lt;/p&gt;\r\n\r\n&lt;p&gt;目前，小牛跟爵士都是39胜38负的战绩，分别排在西部第七和第八的位置，而火箭则以38胜39负落后他们1场位列第九。最近，小牛拿到了一波重要的四连胜，而火箭则拿下了跟雷霆的比赛，挽救了他们的季后赛机会。而爵士最近表现同样亮眼，他们最近5场比赛只输了1场，还是加时败给勇士。三队各自都剩下最后5场比赛，那么赛程到底对谁最有利呢？&lt;/p&gt;\r\n\r\n&lt;p&gt;火箭：&lt;/p&gt;\r\n\r\n&lt;p&gt;剩余赛程：客场对小牛、主场对太阳、主场对湖人、客场对森林狼、主场对国王。&lt;/p&gt;\r\n\r\n&lt;p&gt;火箭的赛程是三队当中最轻松的，明天对阵小牛的比赛将可能是他们本赛季最重要的一场比赛，而一旦他们跨过了小牛，就极有可能以5连胜结束常规赛。最后一场对阵国王的比赛是剩下4场比赛里他们输球可能性最大的，因为那三个对手都在想办法给自己的乐透签概率增加一些筹码呢。&lt;/p&gt;\r\n\r\n&lt;p&gt;爵士：&lt;/p&gt;\r\n\r\n&lt;p&gt;剩余赛程：主场对马刺、主场对快船、客场对掘金、主场对小牛、客场对湖人&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;br /&gt;\r\n爵士剩余赛程比较有趣，他们将在今天对阵马刺，虽然马刺上一场也上了全部主力，但是天才知道他们这场到底会不会轮休，而快船的情况也类似，虽然他们锁定了西部第四的位置，但是由于刚刚迎回布雷克-格里芬，他们很可能会选择不放水而磨合阵容。而湖人的比赛则可能会更有趣，因为那将是科比的最后一战，湖人全队肯定会希望用一场胜利送别科比。而对于小牛这场，可能就会直接决定最后的西部第七第八的位置。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-06', '2016-06-07 08:45:19', '2016-04-06 09:28:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'csub20150805_1133597884', 'cate20150805_1133251007', 'node20160406_0929508322', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 22, 'y', 'y', 'n', 'n', 'n', 'n', '内线小将强悍防守获比帅点赞：一战可见他未来', 'n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;北京时间4月6日，据《休斯顿纪事报》的乔纳森-费根报道，上一场击败俄城雷霆，克林特-卡佩拉在末节的防守，获得了代理主帅J.B。-比克斯塔夫的称赞。而获得本季单场最多出场时间的K.J。-麦克丹尼尔斯则表示，出场时间越多，他就越能找到节奏。&lt;/p&gt;\r\n\r\n&lt;p&gt;在1月底雷霆对火箭的比赛中，在德怀特-霍华德因2次技犯被逐后，恩尼斯-坎特开始大杀四方。他全场得到22分10个篮板，其中20分是在魔兽被逐后所得。&lt;/p&gt;\r\n\r\n&lt;p&gt;上一场，坎特出场18分钟仍拿下16分，但在末节8分半钟由卡佩拉防守时，坎特仅得2分。全场，卡佩拉出战24分钟得到9分6个篮板4次盖帽，他的出色表现，也使火箭对于未来能更放心地安排他防守对方大个中锋。&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;ldquo;他的防守令人难以置信，&amp;rdquo;比克斯塔夫说，&amp;ldquo;他非常有活力。以往，他对位大个子，和对方拼身体的时候总会陷入麻烦。（但上一场）他表现不错，打出了侵略性。&amp;rdquo;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;br /&gt;\r\n比克斯塔夫接着说：&amp;ldquo;我认为，他已意识到他的运动能力、速度和聪明的头脑，如何能让他和那些块头更大，更为强壮的对手对位。你推不动他，撞不开他，也无法将他推离令他舒服的区域。防守端他的确做得很出色。他驻扎在篮下，送出了许多精彩的盖帽，干扰了对手多次出手，迫使对手改变投篮弧度。他打得很棒，从中我们也可瞥见未来的他会是怎样的。&amp;rdquo;&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-06', '2016-04-06 09:30:04', '2016-04-06 09:29:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'csub20150805_1133597884', 'cate20150805_1133251007', 'node20160406_0930259685', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 131, 'y', 'y', 'n', 'n', 'n', 'n', '男篮热身计划：5月VS澳洲6月战马其顿7月赴美', 'n', '', NULL, NULL, NULL, '20160804_120816_2164.png', '20160603_101652_5575.png', NULL, '', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '北京时间4月6日消息，“高通骁龙”杯中澳男篮热身对抗赛发布会今天上午在北京举办。中国男篮领队柴文生在接受采访时介绍了中国男篮今夏备战里约奥运的计划。', '&lt;p&gt;北京时间4月6日消息，&amp;ldquo;高通骁龙&amp;rdquo;杯中澳男篮热身对抗赛发布会今天上午在北京举办。中国男篮领队柴文生在接受采访时介绍了中国男篮今夏备战里约奥运的计划。&lt;/p&gt;\r\n\r\n&lt;p&gt;据领队柴文胜介绍，男篮最早将于13日奔赴海埂基地，进行高原集训。由于目前还没有跟沟通完毕，因此男篮这段时间的训练将由李楠牵头进行。&lt;/p&gt;\r\n\r\n&lt;p&gt;中国男篮具体热身赛计划：&lt;/p&gt;\r\n\r\n&lt;p&gt;5月6日 中国VS澳大利亚 南宁&lt;/p&gt;\r\n\r\n&lt;p&gt;5月8日 中国VS澳大利亚 广州&lt;/p&gt;\r\n\r\n&lt;p&gt;5月10日 中国VS澳大利亚 北京&lt;/p&gt;\r\n\r\n&lt;p&gt;6月6日 中国VS马其顿 长春&lt;/p&gt;\r\n\r\n&lt;p&gt;6月8日 中国VS马其顿 焦作&lt;/p&gt;\r\n\r\n&lt;p&gt;6月10日 中国VS马其顿 洛阳&lt;/p&gt;\r\n\r\n&lt;p&gt;6月中旬 中国男篮赴意大利参加两站热身赛&lt;/p&gt;\r\n\r\n&lt;p&gt;7月上旬 斯坦科维奇杯&lt;/p&gt;\r\n\r\n&lt;p&gt;7月 中欧对抗赛&lt;/p&gt;\r\n\r\n&lt;p&gt;7月20日 中国男篮赴美热身&lt;/p&gt;\r\n\r\n&lt;p&gt;7月30日 中国男篮赴里约进行一场热身赛&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##33==#==detprice:##444==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-06', '2016-06-09 08:45:03', '2016-04-06 09:30:25', NULL, NULL, NULL, NULL, NULL, NULL, 'video20180305_1554598918', NULL),
(73, 'csub20160410_0658592970', 'cate20160410_0658287350', 'node20160410_0701251989', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 13, 'y', 'y', 'n', 'n', 'n', 'n', '神探夏洛克', 'n', '', NULL, NULL, NULL, NULL, '20160410_071354_6503.jpg', NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;《飓风营救3》是由奥利维尔&amp;middot;米加顿执导，连姆&amp;middot;尼森、福里斯特&amp;middot;惠特克、多格雷&amp;middot;斯科特和玛姬&amp;middot;格蕾斯等联袂出演的动作影片。影片讲述特工布莱恩的前妻诺尔在家里被谋杀，被误认为杀人凶手，为了保护自己的女儿，再次展开一段逃亡营救之旅。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-10', '2016-04-10 09:42:06', '2016-04-10 07:01:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'csub20160410_0658592970', 'cate20160410_0658287350', 'node20160410_0707082846', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 14, 'y', 'y', 'n', 'n', 'n', 'n', '陪安东尼度过漫长岁月', 'n', '', NULL, NULL, NULL, NULL, '20160410_071341_8687.jpg', NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;《飓风营救3》是由奥利维尔&amp;middot;米加顿执导，连姆&amp;middot;尼森、福里斯特&amp;middot;惠特克、多格雷&amp;middot;斯科特和玛姬&amp;middot;格蕾斯等联袂出演的动作影片。影片讲述特工布莱恩的前妻诺尔在家里被谋杀，被误认为杀人凶手，为了保护自己的女儿，再次展开一段逃亡营救之旅。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-10', '2016-04-10 09:43:22', '2016-04-10 07:07:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'csub20160410_0658592970', 'cate20160410_0658287350', 'node20160410_0709314927', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 13, 'y', 'y', 'n', 'n', 'n', 'n', '十月初五的月光', 'n', '', NULL, NULL, NULL, NULL, '20160410_071347_1842.jpg', NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;《飓风营救3》是由奥利维尔&amp;middot;米加顿执导，连姆&amp;middot;尼森、福里斯特&amp;middot;惠特克、多格雷&amp;middot;斯科特和玛姬&amp;middot;格蕾斯等联袂出演的动作影片。影片讲述特工布莱恩的前妻诺尔在家里被谋杀，被误认为杀人凶手，为了保护自己的女儿，再次展开一段逃亡营救之旅。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-10', '2016-04-10 09:41:28', '2016-04-10 07:09:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'csub20160410_0658592970', 'cate20160410_0658287350', 'node20160410_0710091322', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 12, 'y', 'y', 'n', 'n', 'n', 'n', '风口青春', 'n', '', NULL, NULL, NULL, NULL, '20160410_071320_1468.jpg', NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;《飓风营救3》是由奥利维尔&amp;middot;米加顿执导，连姆&amp;middot;尼森、福里斯特&amp;middot;惠特克、多格雷&amp;middot;斯科特和玛姬&amp;middot;格蕾斯等联袂出演的动作影片。影片讲述特工布莱恩的前妻诺尔在家里被谋杀，被误认为杀人凶手，为了保护自己的女儿，再次展开一段逃亡营救之旅。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-10', '2016-04-10 09:42:41', '2016-04-10 07:10:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'csub20160410_0658592970', 'cate20160410_0658287350', 'node20160410_0710424788', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 13, 'y', 'y', 'n', 'n', 'n', 'n', '猛龙特囧', 'n', '', NULL, NULL, NULL, NULL, '20160410_071312_4780.jpg', NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;《你丫闭嘴》是弗朗西斯&amp;middot;维贝执导的喜剧片，由让&amp;middot;雷诺、杰拉尔&amp;middot;德帕迪约、蕾诺&amp;middot;瓦莱拉联袂主演。该片讲述的是让&amp;middot;雷诺扮演的杀手Ruby为了被仇人杀害的情人，而走上了复仇之路。期间他遇见了有着善良的热心肠并且还有点愚蠢的Quentin，二人发生了让人啼笑皆非的一段段法式喜剧。...&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-10', '2016-04-10 09:43:52', '2016-04-10 07:10:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'csub20160410_0659073489', 'cate20160410_0658287350', 'node20160410_0719516967', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 13, 'y', 'y', 'n', 'n', 'n', 'n', '捉妖记', 'n', '', NULL, NULL, NULL, NULL, '20160410_072101_5445.jpg', NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;《你丫闭嘴》是弗朗西斯&amp;middot;维贝执导的喜剧片，由让&amp;middot;雷诺、杰拉尔&amp;middot;德帕迪约、蕾诺&amp;middot;瓦莱拉联袂主演。该片讲述的是让&amp;middot;雷诺扮演的杀手Ruby为了被仇人杀害的情人，而走上了复仇之路。期间他遇见了有着善良的热心肠并且还有点愚蠢的Quentin，二人发生了让人啼笑皆非的一段段法式喜剧。...&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-10', '2016-04-10 09:48:27', '2016-04-10 07:19:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'csub20160410_0659073489', 'cate20160410_0658287350', 'node20160410_0719594433', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 11, 'y', 'y', 'n', 'n', 'n', 'n', '窃听风云', 'n', '', NULL, NULL, NULL, NULL, '20160410_072055_6922.jpg', NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;《你丫闭嘴》是弗朗西斯&amp;middot;维贝执导的喜剧片，由让&amp;middot;雷诺、杰拉尔&amp;middot;德帕迪约、蕾诺&amp;middot;瓦莱拉联袂主演。该片讲述的是让&amp;middot;雷诺扮演的杀手Ruby为了被仇人杀害的情人，而走上了复仇之路。期间他遇见了有着善良的热心肠并且还有点愚蠢的Quentin，二人发生了让人啼笑皆非的一段段法式喜剧。...&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-10', '2016-04-10 09:48:53', '2016-04-10 07:19:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'csub20160410_0659073489', 'cate20160410_0658287350', 'node20160410_0720092861', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 11, 'y', 'y', 'n', 'n', 'n', 'n', '飓风营救3', 'n', '', NULL, NULL, NULL, NULL, '20160410_072048_8084.jpg', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;《飓风营救3》是由奥利维尔&amp;middot;米加顿执导，连姆&amp;middot;尼森、福里斯特&amp;middot;惠特克、多格雷&amp;middot;斯科特和玛姬&amp;middot;格蕾斯等联袂出演的动作影片。影片讲述特工布莱恩的前妻诺尔在家里被谋杀，被误认为杀人凶手，为了保护自己的女儿，再次展开一段逃亡营救之旅。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-10', '2016-04-10 09:52:39', '2016-04-10 07:20:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'csub20160410_0659073489', 'cate20160410_0658287350', 'node20160410_0720179909', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 13, 'y', 'y', 'n', 'n', 'n', 'n', '丑女也有春天', 'n', '', NULL, NULL, NULL, NULL, '20160410_072041_4779.jpg', NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;《你丫闭嘴》是弗朗西斯&amp;middot;维贝执导的喜剧片，由让&amp;middot;雷诺、杰拉尔&amp;middot;德帕迪约、蕾诺&amp;middot;瓦莱拉联袂主演。该片讲述的是让&amp;middot;雷诺扮演的杀手Ruby为了被仇人杀害的情人，而走上了复仇之路。期间他遇见了有着善良的热心肠并且还有点愚蠢的Quentin，二人发生了让人啼笑皆非的一段段法式喜剧。...&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-10', '2016-04-10 09:49:22', '2016-04-10 07:20:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'csub20160410_0659073489', 'cate20160410_0658287350', 'node20160410_0720253479', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 16, 'y', 'y', 'n', 'n', 'n', 'n', '巨人捕手杰克', 'n', '', NULL, NULL, NULL, NULL, '20160410_072034_1962.jpg', NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;《你丫闭嘴》是弗朗西斯&amp;middot;维贝执导的喜剧片，由让&amp;middot;雷诺、杰拉尔&amp;middot;德帕迪约、蕾诺&amp;middot;瓦莱拉联袂主演。该片讲述的是让&amp;middot;雷诺扮演的杀手Ruby为了被仇人杀害的情人，而走上了复仇之路。期间他遇见了有着善良的热心肠并且还有点愚蠢的Quentin，二人发生了让人啼笑皆非的一段段法式喜剧。...&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-10', '2016-04-10 09:49:53', '2016-04-10 07:20:25', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(83, 'csub20160410_0658592970', 'cate20160410_0658287350', 'node20160410_0723141828', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 22, 'y', 'y', 'n', 'n', 'n', 'n', '请你闭嘴', 'n', '', NULL, NULL, NULL, NULL, '20160410_072624_8716.jpg', NULL, '', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;《你丫闭嘴》是弗朗西斯&amp;middot;维贝执导的喜剧片，由让&amp;middot;雷诺、杰拉尔&amp;middot;德帕迪约、蕾诺&amp;middot;瓦莱拉联袂主演。该片 --[DMblockid]video20180201_1610318596[/DMblockid]== 讲述的是让&amp;middot;雷诺扮演的杀手Ruby为了被仇人杀害的情人，而走上了复仇之路。期间他遇见了有着善良的热心肠并且还有点愚蠢的Quentin，二人发生了让人啼笑皆非的一段段法式喜剧。&lt;/p&gt;\r\n\r\n&lt;p&gt;[DMblockid]vblock20170419_1845397696[/DMblockid]&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;[DMblockid]vblock20170419_1845397696[/DMblockid]&lt;/p&gt;\r\n\r\n&lt;p&gt;《你丫闭嘴》是弗朗西斯&amp;middot;维贝执导的喜剧片，由让&amp;middot;雷诺、杰拉尔&amp;middot;德帕迪约、蕾诺&amp;middot;瓦莱拉联袂主演。该片讲述的是让&amp;middot;雷诺扮演的杀手Ruby为了被仇人杀害的情人，而走上了复仇之路。期间他遇见了有着善良的热心肠并且还有点愚蠢的Quentin，二人发生了让人啼笑皆非的一段段法式喜剧。&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;kkk[DMblockid]video20180201_1610318596[/DMblockid]pppp&lt;/p&gt;\r\n\r\n&lt;p&gt;《你丫闭嘴》是弗朗西斯&amp;middot;维贝执导的喜剧片，由让&amp;middot;雷诺、杰拉尔&amp;middot;德帕迪约、蕾诺&amp;middot;瓦莱拉联袂主演。该片讲述的是让&amp;middot;雷诺扮演的杀手Ruby为了被仇人杀害的情人，而走上了复仇之路。期间他遇见了有着善良的热心肠并且还有点愚蠢的Quentin，二人发生了 bbbb[DMblockid]video20180201_1610318596[/DMblockid]mmmm 让人啼笑皆非的一段段法式喜剧。&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-10', '2016-04-10 09:52:10', '2016-04-10 07:23:14', '', '', '', NULL, NULL, NULL, '', ''),
(84, 'csub20160410_0659073489', 'cate20160410_0658287350', 'node20160410_0723301708', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 15, 'y', 'y', 'n', 'n', 'n', 'n', '私奔B计划', 'n', '', NULL, NULL, NULL, '', '20160410_072340_7170.jpg', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;电影《私奔B计划》是由帕斯卡尔&amp;middot;舒梅执导的爱情喜剧片，黛安&amp;middot;克鲁格，丹尼&amp;middot;伯恩，伊什尼&amp;middot;齐科特，劳尔&amp;middot;卡拉米领衔主演。影片于2013年10月25日在中国大陆上映。影片讲述了女主人公伊萨贝拉为绕过她家所有人第一次婚姻都会破裂的厄运，想出了能嫁给她爱的人的策略：找个好骗的，诱惑他、嫁给他然后再离婚。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-04-10', '2016-04-19 08:54:27', '2016-04-10 07:23:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'csub20150805_1136121045', 'cate20150805_1134397929', 'node20160608_0446061391', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 11, 'y', 'y', 'n', 'n', 'n', 'n', '案例案例案例案例案例5', 'n', '', NULL, NULL, NULL, '20160608_044646_9022.jpg', '20160608_044642_4589.jpg', '', '', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '', '&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-06-08', '2016-06-08 04:46:06', '2016-06-08 04:46:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'csub20150805_1136121045', 'cate20150805_1134397929', 'node20160608_0446127094', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 12, 'y', 'y', 'n', 'n', 'n', 'n', '中兴通讯是全球领先的综合通信解决方案提供商', 'n', '', NULL, NULL, NULL, '', '20160608_044657_8722.jpg', '', '', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '', '&lt;p style=&quot;line-height: 20.8px;&quot;&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-06-08', '2016-06-08 04:46:12', '2016-06-08 04:46:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'csub20150805_1136195636', 'cate20150805_1134397929', 'node20160608_0446189268', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 15, 'y', 'y', 'n', 'n', 'n', 'n', '案例案例案例案例案例777777', 'n', '', NULL, NULL, NULL, '', '20160608_045352_3759.jpg', '', '', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '', '&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-06-08', '2016-06-08 04:46:18', '2016-06-08 04:46:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'csub20150805_1136195636', 'cate20150805_1134397929', 'node20160608_0446258154', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 13, 'y', 'y', 'n', 'n', 'n', 'n', '案例案例案例案例案例8888888888', 'n', '', NULL, NULL, NULL, '20160608_045404_1839.jpg', '20160608_045401_5184.jpg', '', '', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '', '&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-06-08', '2016-06-08 04:46:25', '2016-06-08 04:46:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'csub20150805_1136269998', 'cate20150805_1134397929', 'node20160608_0446326999', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 13, 'y', 'y', 'n', 'n', 'n', 'n', '案例案例案例案例案例999999999', 'n', '', NULL, NULL, NULL, '', '20160608_045436_7936.jpg', '', '', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '', '&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-06-08', '2016-06-08 04:46:32', '2016-06-08 04:46:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(136, '', 'blockdh', 'dhnode20160707_0453176331', 'bh2010079002demososo', NULL, 'cn', 500, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '请输入标题', 'n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-07', '2016-07-07 06:40:02', '2016-07-07 04:53:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(138, '', 'blockdh', 'dhnode20160707_0453262249', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '请输入标题', 'n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-07', '2016-07-07 06:41:08', '2016-07-07 04:53:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(149, 'csub20160707_0905038793', 'blockdh', 'dhnode20160707_0949595818', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '图片1', 'n', NULL, NULL, NULL, NULL, '20160924_125009_5777.jpg', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-07', '2017-02-22 12:47:19', '2016-07-07 09:49:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `zzz_node` (`id`, `pid`, `ppid`, `pidname`, `pbh`, `pbrand`, `lang`, `pos`, `modtype`, `hit`, `sta_search`, `sta_visible`, `sta_noaccess`, `sta_tj`, `sta_new`, `sta_orignimg`, `title`, `sta_title`, `titlecss`, `cssname`, `titlestyle`, `titlestylesub`, `kv`, `kvsm`, `kvsm2`, `alias_jump`, `blockid`, `blockcntid`, `iconimg`, `linktitle`, `linkurl`, `linkmore`, `linkcss`, `linksize`, `linkradius`, `linkalign`, `despjj`, `desp`, `desptext`, `arr_can`, `dateday`, `dateedit`, `dateadd`, `titlebz1`, `titlebz2`, `titlebz3`, `seo1`, `seo2`, `seo3`, `videoid`, `albumid`) VALUES
(150, 'csub20160707_0905038793', 'blockdh', 'dhnode20160707_0950025452', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '图片2', 'n', NULL, NULL, NULL, NULL, '20160924_124827_5740.jpg', NULL, NULL, NULL, '', 'bkcnt_normal', '', '', 'http://www.demososo.com', NULL, NULL, NULL, NULL, NULL, '', '', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-07', '2017-02-22 12:47:13', '2016-07-07 09:50:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(151, 'csub20160707_0905038793', 'blockdh', 'dhnode20160707_0951208542', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '图片3', 'n', NULL, NULL, NULL, NULL, '20160924_124644_1529.jpg', NULL, NULL, NULL, '', 'bkcnt_normal', '', '', 'about.html', NULL, NULL, NULL, NULL, NULL, '这是标题栏，如果设置  showtitlebar的值为 n , 则不会显示', '', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-07', '2017-02-22 12:47:08', '2016-07-07 09:51:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(154, 'csub20160707_0914597182', 'blockdh', 'dhnode20160707_1124101118', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '1', 'n', NULL, NULL, NULL, NULL, '20160707_112429_7823.jpg', NULL, NULL, NULL, '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-07', '2016-07-07 11:24:10', '2016-07-07 11:24:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(155, 'csub20160707_0914597182', 'blockdh', 'dhnode20160707_1124132779', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '3', 'n', NULL, NULL, NULL, NULL, '20160707_112424_8656.jpg', NULL, NULL, NULL, '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-07', '2016-07-07 11:24:13', '2016-07-07 11:24:13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(156, 'csub20160707_0914597182', 'blockdh', 'dhnode20160707_1124152176', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '2', 'n', NULL, NULL, NULL, NULL, '20160707_112420_9896.jpg', NULL, NULL, NULL, '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-07', '2016-07-07 11:24:15', '2016-07-07 11:24:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(168, 'csub20160707_1140595619', 'blockdh', 'dhnode20160707_1154283772', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '微信效果', 'n', NULL, 'col2_64', NULL, NULL, '20160707_115618_5634.png', NULL, NULL, NULL, '', 'bkcnt_imgrg', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;strong&gt;DM建站系统，集pc，手机，微信于一体。。。&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;DM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。&lt;/p&gt;\r\n\r\n&lt;p&gt;DM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。&lt;br /&gt;\r\nDM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。&lt;br /&gt;\r\nDM建站系统，集pc，手机，微信于一体。。。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-07', '2016-09-29 06:59:22', '2016-07-07 11:54:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(169, 'csub20160707_1140595619', 'blockdh', 'dhnode20160707_1154326670', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '手机效果', 'n', NULL, 'col2_46', NULL, NULL, '20160707_115552_9070.png', NULL, NULL, NULL, '', 'bkcnt_imgleft', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;strong&gt;DM建站系统，集pc，手机，微信于一体。。。&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;DM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。&lt;/p&gt;\r\n\r\n&lt;p&gt;DM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。&lt;br /&gt;\r\nDM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。&lt;br /&gt;\r\nDM建站系统，集pc，手机，微信于一体。。。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-07', '2017-08-18 13:27:51', '2016-07-07 11:54:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(170, 'csub20160707_1140595619', 'blockdh', 'dhnode20160707_1154347224', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', 'pc效果', 'y', NULL, 'col2_64', NULL, NULL, '20160707_115544_8410.png', NULL, NULL, NULL, '', 'bkcnt_imgrg', '', '', 'about.html', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;strong&gt;DM建站系统，集pc，手机，微信于一体。。。&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;DM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。&lt;/p&gt;\r\n\r\n&lt;p&gt;DM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。&lt;br /&gt;\r\nDM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。DM建站系统，集pc，手机，微信于一体。。。&lt;br /&gt;\r\nDM建站系统，集pc，手机，微信于一体。。。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-07', '2017-01-18 16:18:14', '2016-07-07 11:54:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(171, 'csub20160708_0511229047', 'blockdh', 'dhnode20160708_0511415697', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '1标题', 'n', NULL, NULL, NULL, NULL, '20160708_051409_5884.png', NULL, NULL, NULL, '', 'bkcnt_normal', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;这个和上面的内容一样，只是效果不一样，在后台改变他们很容易的哟。。。。。。。。。合用户编辑所见即所得，但会过滤一些html，所以如果自己写html源代码的话，请使用纯这个和上面的内容一样，只是效果不一样，在后台改变他们很容易的哟。。。。。。。。。合用户编辑所见即所得，但会过滤一些html，所以如果自己写html源代码的话，请使用纯&lt;/span&gt;&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2016-07-08 05:15:53', '2016-07-08 05:11:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(172, 'csub20160708_0511229047', 'blockdh', 'dhnode20160708_0511438328', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '2标题', 'n', NULL, NULL, NULL, NULL, '20160708_051405_9841.png', NULL, NULL, NULL, '', 'bkcnt_normal', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;这个和上面的内容一样，只是效果不一样，在后台改变他们很容易的哟。。。。。。。。。合用户编辑所见即所得，但会过滤一些html，所以如果自己写html源代码的话，请使用纯这个和上面的内容一样，只是效果不一样，在后台改变他们很容易的哟。。。。。。。。。合用户编辑所见即所得，但会过滤一些html，所以如果自己写html源代码的话，请使用纯&lt;/span&gt;&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2016-07-08 05:15:45', '2016-07-08 05:11:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(173, 'csub20160708_0511229047', 'blockdh', 'dhnode20160708_0511478936', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '3标题', 'n', NULL, NULL, NULL, NULL, '20160708_051400_5821.png', NULL, NULL, NULL, '', 'bkcnt_normal', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;这个和上面的内容一样，只是效果不一样，在后台改变他们很容易的哟。。。。。。。。。合用户编辑所见即所得，但会过滤一些html，所以如果自己写html源代码的话，请使用纯这个和上面的内容一样，只是效果不一样，在后台改变他们很容易的哟。。。。。。。。。合用户编辑所见即所得，但会过滤一些html，所以如果自己写html源代码的话，请使用纯&lt;/span&gt;&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2016-07-08 05:15:37', '2016-07-08 05:11:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(177, 'csub20160708_0509074359', 'blockdh', 'dhnode20160708_0517599105', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '1', 'n', NULL, NULL, NULL, NULL, '20160708_051831_1555.jpg', NULL, NULL, NULL, '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2016-07-08 05:17:59', '2016-07-08 05:17:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(178, 'csub20160708_0509074359', 'blockdh', 'dhnode20160708_0518036419', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '2', 'n', NULL, NULL, NULL, NULL, '20160708_051837_3866.jpg', NULL, NULL, NULL, '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2016-07-08 05:18:03', '2016-07-08 05:18:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(179, 'csub20160708_0509074359', 'blockdh', 'dhnode20160708_0518057581', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '3', 'n', NULL, NULL, NULL, NULL, '20160708_051843_3631.jpg', NULL, NULL, NULL, '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2016-07-08 05:18:05', '2016-07-08 05:18:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(180, 'csub20160708_0509074359', 'blockdh', 'dhnode20160708_0518084448', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '4', 'n', NULL, NULL, NULL, NULL, '20160708_051848_7868.jpg', NULL, NULL, NULL, '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2016-07-08 05:18:08', '2016-07-08 05:18:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(181, 'csub20160708_0509074359', 'blockdh', 'dhnode20160708_0518103626', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '5', 'n', NULL, NULL, NULL, NULL, '20160708_051853_3681.jpg', NULL, NULL, NULL, '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2016-07-08 05:18:10', '2016-07-08 05:18:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(182, 'csub20160708_0509074359', 'blockdh', 'dhnode20160708_0518128116', 'bh2010079002demososo', NULL, 'cn', 45, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '6', 'n', NULL, NULL, NULL, NULL, '20160708_051858_5293.jpg', NULL, NULL, NULL, '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2016-07-08 05:18:12', '2016-07-08 05:18:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(183, 'csub20160708_0509074359', 'blockdh', 'dhnode20160708_0518177683', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '7', 'n', NULL, NULL, NULL, NULL, '20160708_051905_7435.jpg', NULL, NULL, NULL, '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2016-07-08 05:18:17', '2016-07-08 05:18:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(184, 'csub20160708_0509074359', 'blockdh', 'dhnode20160708_0518198316', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '8', 'n', NULL, NULL, NULL, NULL, '20160708_051910_3697.jpg', NULL, NULL, NULL, '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2016-07-08 05:18:19', '2016-07-08 05:18:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(185, 'csub20160708_0509074359', 'blockdh', 'dhnode20160708_0518219661', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '9', 'n', NULL, NULL, NULL, NULL, '20160708_051924_7490.jpg', NULL, NULL, NULL, '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2016-07-08 05:18:21', '2016-07-08 05:18:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(186, 'csub20160708_0509074359', 'blockdh', 'dhnode20160708_0518245788', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '10', 'n', NULL, NULL, NULL, NULL, '20160708_051916_7969.jpg', NULL, NULL, NULL, '', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2016-07-08 05:18:24', '2016-07-08 05:18:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(188, 'csub20160708_0508536755', 'blockdh', 'dhnode20160708_0519565256', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '响应服务', 'n', NULL, NULL, NULL, NULL, '20160708_052109_4752.jpg', NULL, NULL, NULL, '', 'bkcnt_normal', 'fa fa-phone-square fa-5x|red', '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;我们通过QQ 939805498、只是测试一下哟只是测试一下哟只是测试一下哟只是测试一下哟&amp;nbsp;电话和售后工单的方式&amp;nbsp;&lt;/span&gt;&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2017-02-20 18:02:54', '2016-07-08 05:19:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(189, 'csub20160708_0508536755', 'blockdh', 'dhnode20160708_0519582176', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '节假日无休制度', 'n', NULL, NULL, NULL, NULL, '20160708_052103_5765.jpg', NULL, NULL, NULL, '', 'bkcnt_normal', 'fa fa-cloud-upload fa-5x|#ccc', '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;为保证客户系统的安全与稳定DM建站系统，我们在周末和节假日都会轮休为客户提供售后支持&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2017-02-20 18:02:45', '2016-07-08 05:19:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(190, 'csub20160708_0508536755', 'blockdh', 'dhnode20160708_0520011899', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '客户反馈', 'n', NULL, NULL, NULL, NULL, '20160708_052042_4614.jpg', NULL, NULL, NULL, '', 'bkcnt_normal', 'fa fa-thumbs-up fa-5x|#ccc', '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;我们收到过很多客户DM建站系统给我们售后团队寄来的锦旗和礼品，我们的售后得到广大客户的极大认可&lt;/span&gt;&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2017-02-20 18:02:37', '2016-07-08 05:20:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(191, 'csub20160708_0508536755', 'blockdh', 'dhnode20160708_0520036020', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '服务评价机制服务评价机制', 'n', NULL, NULL, NULL, NULL, '20160708_052036_3356.jpg', NULL, NULL, NULL, '', 'bkcnt_normal', 'fa fa-tree fa-5x|blue', '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;span style=&quot;line-height: 20.8px;&quot;&gt;DM建站系统自建服务评价体系DM建站系统，对于不满意售后的客户，我们有专人负责跟踪回访&lt;/span&gt;&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2017-02-20 18:02:25', '2016-07-08 05:20:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(192, 'csub20160708_0508536755', 'blockdh', 'dhnode20160708_0520033998', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '售后投诉监督机制', 'n', NULL, NULL, NULL, NULL, '20160708_052031_5410.jpg', NULL, NULL, NULL, '', 'bkcnt_normal', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;公司通过设立微信DM建站系统投诉和电话投诉，由专人来监督售后服务质量&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2017-05-15 14:43:47', '2016-07-08 05:20:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(193, 'csub20160708_0508536755', 'blockdh', 'dhnode20160708_0520079152', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '强大的售后团队', 'n', NULL, NULL, NULL, NULL, '20160708_052024_7556.jpg', NULL, NULL, NULL, '', 'bkcnt_normal', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;我们售后技术包括开发工程师DM建站系统、安全工程师、运维工程师，全方位为客户的稳定安全服务&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2017-05-15 14:43:28', '2016-07-08 05:20:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(194, 'csub20160708_0508436425', 'blockdh', 'dhnode20160708_0528214835', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '客户评价1', 'n', NULL, NULL, NULL, NULL, '20160708_053224_8385.jpg', NULL, NULL, NULL, '', 'bkcnt_normal', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2017-12-01 15:17:30', '2016-07-08 05:28:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(195, 'csub20160708_0508436425', 'blockdh', 'dhnode20160708_0528245891', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '客户评价2', 'n', NULL, NULL, NULL, NULL, '20160708_053219_9347.jpg', NULL, NULL, NULL, '', 'bkcnt_normal', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2017-12-01 15:17:26', '2016-07-08 05:28:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(196, 'csub20160708_0508436425', 'blockdh', 'dhnode20160708_0528262594', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '客户评价3', 'n', NULL, NULL, NULL, NULL, '20160708_053215_7122.jpg', NULL, NULL, NULL, '', 'bkcnt_normal', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2017-12-01 15:17:22', '2016-07-08 05:28:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(197, 'csub20160708_0508436425', 'blockdh', 'dhnode20160708_0528295219', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '客户评价4', 'n', NULL, NULL, NULL, NULL, '20160708_053210_2374.jpg', NULL, NULL, NULL, '', 'bkcnt_normal', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2017-12-01 15:17:17', '2016-07-08 05:28:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(198, 'csub20160708_0508436425', 'blockdh', 'dhnode20160708_0528326665', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '客户评价5', 'n', NULL, NULL, NULL, NULL, '20160708_053206_1162.jpg', NULL, NULL, NULL, '', 'bkcnt_normal', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2017-12-01 15:17:12', '2016-07-08 05:28:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(199, 'csub20160708_0508436425', 'blockdh', 'dhnode20160708_0528356660', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '客户评价6', 'n', NULL, NULL, NULL, NULL, '20160708_053202_1372.jpg', NULL, NULL, NULL, '', 'bkcnt_normal', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。客户评价内容。。。&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-08', '2017-12-01 15:17:07', '2016-07-08 05:28:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201, 'csub20150805_1136195636', 'cate20150805_1134397929', 'node20160711_1206473110', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 15, 'y', 'y', 'n', 'n', 'n', 'n', '华为将与众多伙伴开放合作', 'n', '', NULL, NULL, NULL, '20160711_120740_7023.jpg', '20160711_122102_3348.jpg', '', '', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '', '&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-11', '2016-07-11 12:06:47', '2016-07-11 12:06:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(202, 'csub20150805_1136195636', 'cate20150805_1134397929', 'node20160711_1206541942', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 18, 'y', 'y', 'n', 'n', 'n', 'n', '华为目前已成长为年销售规模超3900亿人民币的世界', 'n', '', NULL, NULL, NULL, '', '20160711_122046_5852.jpg', '', '', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '', '&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p style=&quot;line-height: 20.8px;&quot;&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-11', '2016-07-11 12:06:54', '2016-07-11 12:06:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(203, 'csub20150805_1136269998', 'cate20150805_1134397929', 'node20160711_1207011168', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 33, 'y', 'y', 'n', 'n', 'n', 'n', '华为目前已成长为年销售规模', 'n', '', NULL, NULL, NULL, '20160711_120828_1246.jpg', '20160711_122028_7934.jpg', '', '', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '', '&lt;p&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;\r\n\r\n&lt;p&gt;华为目前已成长为年销售规模超3900亿人民币的世界500强公司,面向未来,华为将与众多伙伴开放合作,努力共建全联接世界&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-11', '2016-07-12 12:07:01', '2016-07-11 12:07:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(204, 'csub20150805_1136121045', 'cate20150805_1134397929', 'node20160711_1208474985', 'bh2010079002demososo', NULL, 'cn', 50, 'node', 43, 'y', 'y', 'n', 'n', 'n', 'n', '中兴通讯是全球领先的综合通信解决方案提供商', 'n', '', NULL, NULL, NULL, '20160711_120853_1591.jpg', '20160711_122012_9931.jpg', '', '', NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, '', '&lt;p&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/p&gt;\r\n\r\n&lt;p&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/p&gt;\r\n\r\n&lt;p&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/p&gt;\r\n\r\n&lt;p&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/p&gt;\r\n\r\n&lt;p&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/p&gt;\r\n\r\n&lt;p&gt;中兴通讯是全球领先的综合通信解决方案提供商。公司通过为 全球160多个国家和地区的电信运营商和企业网客户提供创新 技术与产品解决方案&lt;/p&gt;', '', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-11', '2016-07-11 12:08:47', '2016-07-11 12:08:47', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL),
(205, 'csub20160712_0612125031', 'blockdh', 'dhnode20160712_0615419226', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '大标题333', 'n', NULL, NULL, NULL, NULL, '20160910_135221_4739.jpg', '20171129_180430_8677.jpg', '', NULL, '', 'bkcnt_normal', '', '', '', NULL, NULL, NULL, NULL, NULL, '副标题333', '', '&lt;h3 class=&quot;btn2&quot;&gt;&lt;a href=&quot;http://www.demososo.com/sq.html&quot; target=&quot;_blank&quot;&gt;查看详情 &amp;gt;&lt;/a&gt;&lt;/h3&gt;\r\n\r\n&lt;h2&gt;支持手机，PC和微信访问&lt;/h2&gt;\r\n\r\n&lt;h3&gt;&lt;span style=&quot;font-size:22px&quot;&gt;&lt;strong&gt;DM企业建站，简单方便&lt;/strong&gt;&lt;/span&gt;&lt;/h3&gt;', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-12', '2017-10-21 17:53:26', '2016-07-12 06:15:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(206, 'csub20160712_0612125031', 'blockdh', 'dhnode20160712_0615443542', 'bh2010079002demososo', NULL, 'cn', 55, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '大标题111', 'n', NULL, NULL, NULL, NULL, '20160910_135051_8688.jpg', '20171129_180406_3243.jpg', '', NULL, '', 'bkcnt_normal', '', '', 'sd', NULL, NULL, NULL, NULL, NULL, '副标题111dd', '', '&lt;h3 class=&quot;btn2&quot;&gt;&lt;a href=&quot;http://www.demososo.com/sq.html&quot; target=&quot;_blank&quot;&gt;查看详情 &amp;gt;&lt;/a&gt;&lt;/h3&gt;\r\n\r\n&lt;h2&gt;支持手机，PC和微信访问&lt;/h2&gt;\r\n\r\n&lt;h3&gt;&lt;span style=&quot;font-size:22px&quot;&gt;&lt;strong&gt;DM企业建站，简单方便&lt;/strong&gt;&lt;/span&gt;&lt;/h3&gt;', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-12', '2017-12-11 16:44:09', '2016-07-12 06:15:44', '', '', '', NULL, NULL, NULL, NULL, NULL),
(207, 'csub20160712_0612125031', 'blockdh', 'dhnode20160712_0615472235', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '大标题222', 'n', NULL, NULL, NULL, NULL, '20160910_135108_8774.jpg', '20171129_180422_7762.jpg', '', NULL, '', 'bkcnt_normal', '', '', '', NULL, NULL, NULL, NULL, NULL, '副标题222', '', '&lt;h2&gt;通过前台编辑，直接进入后台管理&lt;/h2&gt;\r\n\r\n&lt;h3&gt;&lt;span style=&quot;font-size:22px&quot;&gt;&lt;strong&gt;DM企业建站，简单方便&lt;/strong&gt;&lt;/span&gt;&lt;/h3&gt;', 'titlecss:##==#==author:##==#==authorcompany:##==#==sta_noaccess:##n==#==sta_tj:##y==#==sta_new:##y==#==stock:##10000==#==detpriceold:##0==#==detprice:##0==#==detlinktitle:##==#==detlinkurl:##==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==linkmore:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '2016-07-12', '2017-07-10 14:32:48', '2016-07-12 06:15:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(281, 'csub20170214_1756444189', 'blockdh', 'dhnode20170214_1757156752', 'bh2010079002demososo', NULL, 'cn', 500, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '安全服务器', 'n', NULL, NULL, NULL, NULL, '20170214_180324_6851.png', '', '', NULL, '', 'bkcnt_normal', '', '', 'http://www.demososo.com', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;&lt;span style=&quot;color:#e74c3c&quot;&gt;&lt;strong&gt;DM企业建站系统&lt;/strong&gt;www.demososo.com&lt;/span&gt; ， 开源免费，无需授权。DM企业建站系统www.demososo.com ， 开源免费，无需授权。&lt;span style=&quot;color:#e74c3c&quot;&gt;内容的高度由内容决定。。。&lt;/span&gt;&lt;/p&gt;', '', NULL, '2017-02-14', '2017-11-30 15:13:49', '2017-02-14 17:57:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(282, 'csub20170214_1756444189', 'blockdh', 'dhnode20170214_1801039449', 'bh2010079002demososo', NULL, 'cn', 360, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '备份和存储', 'n', NULL, NULL, NULL, NULL, '20180313_152128_4187.jpg', '', '', NULL, '', 'bkcnt_normal', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;东风仿佛吹开了盛开鲜花的千棵树，又如将空中的繁星吹落，像阵阵星雨。华丽的香车宝马在路上来来往往，各式各样的醉人香气弥漫着大街。悦耳的音乐之声四处回荡&lt;/p&gt;', '', NULL, '2017-02-14', '2017-02-14 18:04:11', '2017-02-14 18:01:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(283, 'csub20170214_1756444189', 'blockdh', 'dhnode20170214_1801124071', 'bh2010079002demososo', NULL, 'cn', 250, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '24/7 每天备份', 'n', NULL, NULL, NULL, NULL, '20180313_152142_4542.jpg', '', '', NULL, '', 'bkcnt_normal', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;东风仿佛吹开了盛开鲜花的千棵树，又如将空中的繁星吹落，像阵阵星雨。华丽的香车宝马在路上来来往往，各式各样的醉人香气弥漫着大街。悦耳的音乐之声四处回荡&lt;/p&gt;', '', NULL, '2017-02-14', '2017-02-14 18:04:20', '2017-02-14 18:01:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(284, 'csub20170214_1756444189', 'blockdh', 'dhnode20170214_1801216295', 'bh2010079002demososo', NULL, 'cn', 200, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '控制面板', 'n', NULL, NULL, NULL, NULL, '20180313_152147_6756.jpg', '', '', NULL, '', 'bkcnt_normal', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;东风仿佛吹开了盛开鲜花的千棵树，又如将空中的繁星吹落，像阵阵星雨。华丽的香车宝马在路上来来往往，各式各样的醉人香气弥漫着大街。悦耳的音乐之声四处回荡&lt;/p&gt;', '', NULL, '2017-02-14', '2017-02-14 18:04:27', '2017-02-14 18:01:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(285, 'csub20170214_1756444189', 'blockdh', 'dhnode20170214_1801508504', 'bh2010079002demososo', NULL, 'cn', 490, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '容易操作', 'n', NULL, NULL, NULL, NULL, '20180313_152120_8289.jpg', '', '', NULL, '', 'bkcnt_normal', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;东风仿佛吹开了盛开鲜花的千棵树，又如将空中的繁星吹落，像阵阵星雨。华丽的香车宝马在路上来来往往，各式各样的醉人香气弥漫着大街。悦耳的音乐之声四处回荡&lt;/p&gt;', '', NULL, '2017-02-14', '2017-02-14 18:04:06', '2017-02-14 18:01:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(286, 'csub20170214_1756444189', 'blockdh', 'dhnode20170214_1802044753', 'bh2010079002demososo', NULL, 'cn', 350, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '虚拟服务', 'n', NULL, NULL, NULL, NULL, '20180313_152135_9625.jpg', '', '', NULL, '', 'bkcnt_normal', '', '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;东风仿佛吹开了盛开鲜花的千棵树，又如将空中的繁星吹落，像阵阵星雨。华丽的香车宝马在路上来来往往，各式各样的醉人香气弥漫着大街。悦耳的音乐之声四处回荡&lt;/p&gt;', '', NULL, '2017-02-14', '2017-02-14 18:04:15', '2017-02-14 18:02:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(320, 'csub20170426_1859253747', 'blockdh', 'dhnode20170426_1859383219', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', 'DM企业建站3', 'n', NULL, NULL, NULL, NULL, '20170426_190020_3054.jpg', '', '', NULL, '', 'bkcnt_normal', '', '', '', NULL, NULL, NULL, NULL, NULL, '秋高气爽333. 指秋天的天空.天气晴朗,天少云而高.云轻薄而淡', '&lt;p&gt;秋高气爽33333. 指秋天的天空.天气晴朗,天少云而高.云轻薄而淡...南飞的大雁已望到了天边. 不登临长城关口绝不是英雄长空高阔白云清朗,&amp;nbsp;&lt;/p&gt;', '', NULL, '2017-04-26', '2017-12-12 15:37:20', '2017-04-26 18:59:38', '', '', '', NULL, NULL, NULL, NULL, NULL),
(321, 'csub20170426_1859253747', 'blockdh', 'dhnode20170426_1859419254', 'bh2010079002demososo', NULL, 'cn', 55, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', 'DM企业建站2', 'n', NULL, NULL, NULL, NULL, '20170426_190014_9970.jpg', '', '', NULL, '', 'bkcnt_normal', '', '', '', NULL, NULL, NULL, NULL, NULL, '秋高气爽222. 指秋天的天空.天气晴朗,天少云而高.云轻薄而淡', '&lt;p&gt;秋高气爽22222. 指秋天的天空.天气晴朗,天少云而高.云轻薄而淡...南飞的大雁已望到了天边.&amp;nbsp;&lt;/p&gt;', '', NULL, '2017-04-26', '2017-12-12 15:37:15', '2017-04-26 18:59:41', '', '', '', NULL, NULL, NULL, NULL, NULL),
(322, 'csub20170426_1859253747', 'blockdh', 'dhnode20170426_1859432657', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', 'DM企业建站1', 'n', NULL, NULL, NULL, NULL, '20170426_190002_2823.jpg', '', '', NULL, '', 'bkcnt_normal', '', '', '', NULL, NULL, NULL, NULL, NULL, '秋高气爽111. 指秋天的天空.天气晴朗,天少云而高.云轻薄而淡', '&lt;p&gt;秋高气爽111. 指秋天的天空.天气晴朗,天少云而高.云轻薄而淡...南飞的大雁已望到了天边.&amp;nbsp;&lt;/p&gt;', '', NULL, '2017-04-26', '2017-12-12 15:37:10', '2017-04-26 18:59:43', '', '', '', NULL, NULL, NULL, NULL, NULL),
(426, 'csub20171207_1040119631', 'blockdh', 'dhnode20180306_1806169984', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '这是标题3这是标题1', 'n', NULL, NULL, NULL, NULL, '20180306_180624_6788.png', '', '', NULL, '', 'bkcnt_normal', NULL, 'http://www.demososo.com', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;白日依山尽，黄河入海流。欲穷千里目，更上一层楼。&amp;nbsp;夕阳依傍着西山慢慢地沉没， 滔滔黄河朝着东海汹涌奔流。若想把千里的风光景物看够， 那就要登上更高的一层城楼。&lt;/p&gt;', '', NULL, '2018-03-06', '2018-03-06 18:07:16', '2018-03-06 18:06:16', '', '', '', NULL, NULL, NULL, NULL, NULL),
(424, 'csub20171207_1040119631', 'blockdh', 'dhnode20180306_1806063878', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '这是标题3这是标题3', 'n', NULL, NULL, NULL, NULL, '20180306_180632_3335.png', '', '', NULL, '', 'bkcnt_normal', NULL, 'http://www.demososo.com', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;离离原上草，一岁一枯荣。野火烧不尽，春风吹又生。远芳侵古道，晴翠接荒城。又送王孙去，萋萋满别情。离离原上草，一岁一枯荣。野火烧不尽，春风吹又生。远芳侵古道，晴翠接荒城。又送王孙去，萋萋满别情。&lt;/p&gt;', '', NULL, '2018-03-06', '2018-03-06 18:06:58', '2018-03-06 18:06:06', '', '', '', NULL, NULL, NULL, NULL, NULL),
(425, 'csub20171207_1040119631', 'blockdh', 'dhnode20180306_1806087297', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '这是标题3这是标题2', 'n', NULL, NULL, NULL, NULL, '20180306_180628_5816.png', '', '', NULL, '', 'bkcnt_normal', NULL, 'http://www.demososo.com', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;离离原上草，一岁一枯荣。野火烧不尽，春风吹又生。远芳侵古道，晴翠接荒城。又送王孙去，萋萋满别情。离离原上草，一岁一枯荣。野火烧不尽，春风吹又生。远芳侵古道，晴翠接荒城。又送王孙去，萋萋满别情。&lt;/p&gt;', '', NULL, '2018-03-06', '2018-03-06 18:07:03', '2018-03-06 18:06:08', '', '', '', NULL, NULL, NULL, NULL, NULL),
(423, 'csub20171207_1040184257', 'blockdh', 'dhnode20180306_1804026824', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '我们的服务1', 'n', NULL, NULL, NULL, NULL, '20180306_180417_5908.jpg', '', '', NULL, '', 'bkcnt_normal', NULL, 'http://www.demososo.com', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;白日依山尽，黄河入海流。欲穷千里目，更上一层楼。 夕阳依傍着西山慢慢地沉没， 滔滔黄河朝着东海汹涌奔流。若想把千里的风光景物看够， 那就要登上更高的一层城楼。&lt;/p&gt;', '', NULL, '2018-03-06', '2018-03-06 18:05:03', '2018-03-06 18:04:02', '', '', '', NULL, NULL, NULL, NULL, NULL),
(420, 'csub20171207_1040184257', 'blockdh', 'dhnode20180306_1803478979', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '我们的服务4', 'n', NULL, NULL, NULL, NULL, '20180306_180433_1482.jpg', '', '', NULL, '', 'bkcnt_normal', NULL, 'http://www.demososo.com', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;白日依山尽，黄河入海流。欲穷千里目，更上一层楼。 夕阳依傍着西山慢慢地沉没， 滔滔黄河朝着东海汹涌奔流。若想把千里的风光景物看够， 那就要登上更高的一层城楼。&lt;/p&gt;', '', NULL, '2018-03-06', '2018-03-06 18:05:33', '2018-03-06 18:03:47', '', '', '', NULL, NULL, NULL, NULL, NULL),
(421, 'csub20171207_1040184257', 'blockdh', 'dhnode20180306_1803558731', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '我们的服务3', 'n', NULL, NULL, NULL, NULL, '20180306_180428_6984.jpg', '', '', NULL, '', 'bkcnt_normal', NULL, 'http://www.demososo.com', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;白日依山尽，黄河入海流。欲穷千里目，更上一层楼。 夕阳依傍着西山慢慢地沉没， 滔滔黄河朝着东海汹涌奔流。若想把千里的风光景物看够， 那就要登上更高的一层城楼。&lt;/p&gt;', '', NULL, '2018-03-06', '2018-03-06 18:05:24', '2018-03-06 18:03:55', '', '', '', NULL, NULL, NULL, NULL, NULL),
(422, 'csub20171207_1040184257', 'blockdh', 'dhnode20180306_1803586772', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '我们的服务42', 'n', NULL, NULL, NULL, NULL, '20180306_180423_8965.jpg', '', '', NULL, '', 'bkcnt_normal', NULL, 'http://www.demososo.com', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;白日依山尽，黄河入海流。欲穷千里目，更上一层楼。 夕阳依傍着西山慢慢地沉没， 滔滔黄河朝着东海汹涌奔流。若想把千里的风光景物看够， 那就要登上更高的一层城楼。&lt;/p&gt;', '', NULL, '2018-03-06', '2018-03-06 18:05:17', '2018-03-06 18:03:58', '', '', '', NULL, NULL, NULL, NULL, NULL),
(419, 'csub20171212_1153095561', 'blockdh', 'dhnode20180306_1759599242', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '企业建站系统，百变多模板', 'n', NULL, NULL, NULL, NULL, '20180306_180039_5231.jpg', '', '', NULL, '', 'bkcnt_normal', NULL, '下载DM系统', 'http://www.demososo.com', NULL, NULL, NULL, NULL, NULL, '支持多语言，免费授权', '', '', NULL, '2018-03-06', '2018-03-06 18:01:55', '2018-03-06 17:59:59', '', '', '', NULL, NULL, NULL, NULL, NULL),
(418, 'csub20171212_1153095561', 'blockdh', 'dhnode20180306_1759287556', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '用拼积木的方法来建设网站', 'n', NULL, NULL, NULL, NULL, '20180306_180044_3682.jpg', '', '', NULL, '', 'bkcnt_normal', NULL, 'DM官网', 'http://www.demososo.com', NULL, NULL, NULL, NULL, NULL, '响应式快速建站系统', '&lt;p&gt;辑器格式适合用户编辑所见即所得，但会辑器格式适合用户编辑所见即所得，但会&lt;/p&gt;', '', NULL, '2018-03-06', '2018-03-06 17:59:48', '2018-03-06 17:59:28', '', '', '', NULL, NULL, NULL, NULL, NULL),
(406, 'vblock20170516_1805542410', 'blockdh', 'dhnode20180206_1225531845', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '客户评价2', 'n', NULL, NULL, NULL, NULL, '20180206_123335_5443.jpg', '', '', NULL, '', 'bkcnt_normal', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;唐诗泛指创作于唐朝的诗。唐诗是中华民族最珍贵的文化遗产之一，是中华文化宝库中的一颗明珠，同时也对世界上许多民族和国家的文化发展产生了很大影响&lt;/p&gt;', '', NULL, '2018-02-06', '2018-02-06 12:26:34', '2018-02-06 12:25:53', '', '', '', NULL, NULL, NULL, NULL, NULL),
(405, 'vblock20170516_1805542410', 'blockdh', 'dhnode20180206_1225488966', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '客户评价1', 'n', NULL, NULL, NULL, NULL, '20180206_123339_5946.jpg', '', '', NULL, '', 'bkcnt_normal', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '&lt;p&gt;唐诗泛指创作于唐朝的诗。唐诗是中华民族最珍贵的文化遗产之一，是中华文化宝库中的一颗明珠，同时也对世界上许多民族和国家的文化发展产生了很大影响&lt;/p&gt;', '', NULL, '2018-02-06', '2018-02-06 12:26:38', '2018-02-06 12:25:48', '', '', '', NULL, NULL, NULL, NULL, NULL),
(407, 'vblock20170516_1805542410', 'blockdh', 'dhnode20180206_1225576864', 'bh2010079002demososo', NULL, 'cn', 50, 'blockdh', 10, 'n', 'y', 'n', 'n', 'n', 'n', '客户评价3', 'n', NULL, NULL, NULL, NULL, '20180206_123331_9871.jpg', '', '', NULL, '', 'bkcnt_normal', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '唐诗泛指创作于唐朝的诗。唐诗是中华民族最珍贵的文化遗产之一，是中华文化宝库中的一颗明珠，同时也对世界上许多民族和国家的文化发展产生了很大影响', '', NULL, '2018-02-06', '2018-02-06 12:26:29', '2018-02-06 12:25:57', '', '', '', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `zzz_page`
--

CREATE TABLE `zzz_page` (
  `id` int(11) NOT NULL,
  `pid` varchar(50) NOT NULL DEFAULT '0',
  `pidname` varchar(100) NOT NULL,
  `pbh` varchar(50) NOT NULL DEFAULT 'n',
  `regionid` varchar(50) DEFAULT NULL,
  `lang` varchar(50) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `cssname` varchar(50) DEFAULT NULL,
  `sta_noaccess` char(1) NOT NULL DEFAULT 'n',
  `sta_visible` varchar(1) NOT NULL DEFAULT 'y',
  `pos` int(3) DEFAULT '50',
  `kv` varchar(100) DEFAULT NULL,
  `kvtitle` varchar(200) DEFAULT NULL,
  `desp` text,
  `desptext` text,
  `arr_can` text,
  `videoid` varchar(100) DEFAULT NULL,
  `albumid` varchar(100) DEFAULT NULL,
  `album` varchar(100) DEFAULT 'album_fancybox',
  `albumcssname` varchar(100) DEFAULT NULL,
  `albumposi` char(1) NOT NULL DEFAULT 'y',
  `downloadurl` varchar(200) DEFAULT NULL,
  `seo1` text,
  `seo2` text,
  `seo3` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_page`
--

INSERT INTO `zzz_page` (`id`, `pid`, `pidname`, `pbh`, `regionid`, `lang`, `name`, `cssname`, `sta_noaccess`, `sta_visible`, `pos`, `kv`, `kvtitle`, `desp`, `desptext`, `arr_can`, `videoid`, `albumid`, `album`, `albumcssname`, `albumposi`, `downloadurl`, `seo1`, `seo2`, `seo3`) VALUES
(6, '0', 'page20150805_1138522811', 'bh2010079002demososo', '', 'cn', '集团介绍', '', 'n', 'y', 500, '', '', '&lt;p&gt;&lt;img alt=&quot;集团介绍 &quot; src=&quot;imgpath_3qys0o_comimage/cn/20150805_113942_1804.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;font-size:26px&quot;&gt;&lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;&lt;span style=&quot;color:#ff0000&quot;&gt;&lt;strong&gt;DM企业建站企业建站系统&lt;/strong&gt;(www.demososo.com)&lt;/span&gt;&lt;/a&gt;&lt;span style=&quot;color:#ff0000&quot;&gt; 是自主开发的一套面向中小企业建站的系统。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;color:#ff0000&quot;&gt;&lt;span style=&quot;font-size:26px&quot;&gt;操作简单，维护方便。前台绝大多数的内容都可以在后台维护管理。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;------------------------------&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;strong&gt;&amp;nbsp;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;[DMblockid]video20180126_1915093003[/DMblockid]&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;集团介绍集团介绍集团介绍集团介绍集团介绍&lt;/p&gt;\r\n\r\n&lt;p&gt;集团介绍集团介绍集团介绍集团介绍集团介绍集团介绍集团介绍&lt;/p&gt;\r\n\r\n&lt;p&gt;集团介绍集团介绍集团介绍集团介绍集团介绍&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;font-size:20px&quot;&gt;&lt;span style=&quot;color:#e74c3c&quot;&gt;手风琴效果：&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;[DMblockid]vblock20170419_1820571922[/DMblockid]&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;[DMblockid]vblock20170419_1845397696[/DMblockid]&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;span style=&quot;color:#e74c3c&quot;&gt;支持在编辑器里插入多种不同的效果。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp; [DMblockid]vblock20170420_1158241500[/DMblockid]&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;[DMblockid]form20180218_1250088582[/DMblockid]&amp;nbsp;&lt;/p&gt;', '', 'sta_noaccess:##n==#==pagelayout:##noallwidth==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', 'video20180126_1915093003', 'album20180126_1615494539', 'album_jssor', 'gridcol2_hack gridbigimg', 'y', '', '', '', ''),
(8, '0', 'page20150805_1143268522', 'bh2010079002demososo', '', 'cn', '团队建设', '', 'n', 'y', 500, '', '', '&lt;p&gt;&lt;span style=&quot;color:red; font-size:18px&quot;&gt;&lt;strong&gt;&lt;a href=&quot;http://www.demososo.com/detail-100.html&quot; target=&quot;_blank&quot;&gt;如何设置页面的侧边栏的位置?是在左边还是在右边，或是在上面？&lt;/a&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;团队建设团队建设团队建设团队建设团队建设团队建设团队建设团队建设团队建设团队建设团队建设团队建设&lt;/p&gt;\r\n\r\n&lt;p&gt;团队建设团队建设团队建设团队建设团队建设团队建设团队建设团队建设团队建设团队建设团队建设团队建设&lt;/p&gt;\r\n\r\n&lt;p&gt;团队建设团队建设团队建设团队建设团队建设团队建设&lt;/p&gt;\r\n\r\n&lt;p&gt;团队建设团队建设团队建设团队建设团队建设团队建设&lt;/p&gt;\r\n\r\n&lt;p&gt;团队建设团队建设团队建设团队建设团队建设团队建设&lt;/p&gt;\r\n\r\n&lt;p&gt;团队建设团队建设团队建设团队建设团队建设团队建设团队建设团队建设团队建设团队建设团队建设团队建设&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20150805_114410_5513.jpg&quot; style=&quot;height:209px; width:355px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '', 'sta_noaccess:##n==#==pagelayout:##noallwidth==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', '', 'album20180205_1118426482', NULL, '', 'y', '', '团队建设团队建设团队建设', '团队建设', '团队建设团队建设团队建设团队建设团队建设团队建设'),
(10, '0', 'page20150806_0435579851', 'bh2010079002demososo', '', 'cn', '人才招聘', '', 'n', 'y', 110, '', '', '&lt;p&gt;&lt;strong&gt;品牌经理职位&lt;/strong&gt;&lt;br /&gt;\r\n岗位职责：&lt;br /&gt;\r\n1、根据品牌发展策略负责发展品牌推广创意策略以及媒介策略；实施并监督管理。协调其他传播推广工具如PR与品牌调性关系；&lt;br /&gt;\r\n2、品牌研究负责通过产业广告投放情况以及媒介投放监测进行定性与定量的研究。分析其SWOT。以对品牌长期策略的发展起参考作用。为品牌资产的建立以及品牌管理提供直接资料与数据。&lt;br /&gt;\r\n3、完善企业视觉识别体系：如渠道、合作伙伴、供应商、管理企业品牌树（品牌架构）；&lt;br /&gt;\r\n4、内部品牌传播以及品牌管理规范如品牌手册的发展；&lt;br /&gt;\r\n5、分解企业竞争战略； 6、协助制定产品开发计划并与研发以及产品部门共同组织实施；&lt;br /&gt;\r\n7、协助确定产品的经营和竞争战略；&lt;br /&gt;\r\n8、编制年度营销计划和进行营销预测；&lt;br /&gt;\r\n9、管理产品品牌资产并不断优化以获得品牌竞争优势。（视乎产业竞争状况）；&lt;br /&gt;\r\n任职资格：&lt;br /&gt;\r\n5年以上相关工作经验，组织和沟通能力强、工作经验要求，在互联网/电商企业工作者优先。&lt;br /&gt;\r\n&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;媒介经理职位&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;岗位职责：&lt;br /&gt;\r\n拟定媒体投放计划及方案、编制公司年度广告预算。开拓整合媒体资源并进行有效管理及合作谈判、合同签订及维护管理、管理媒体投放效果的跟踪监测等、制定媒介资源数去库的更新和维护标准及监督实施、维护媒体关系，与媒体建立长期稳定的合作关系负责联络、拓展及维护媒体关系，进行媒体资源整合和维护；&lt;br /&gt;\r\n任职资格：&lt;br /&gt;\r\n本科及以上学历，3年以上相关工作经验，沟通能力强，协调组织能力强，逻辑思路清晰，熟练运用各种办公软件。&lt;/p&gt;', '', 'sta_noaccess:##n==#==pagelayout:##noallwidth==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', NULL, NULL, '', '', 'y', NULL, NULL, NULL, NULL),
(11, '0', 'page20150806_0436437668', 'bh2010079002demososo', 'region20170921_1222287881', 'cn', '联系我们', '', 'n', 'y', 100, '', '', '', '', 'sta_noaccess:##n==#==pagelayout:##allwidth==#==downloadurl:##==#==seocus1:##eee==#==seocus2:##==#==seocus3:##', NULL, NULL, 'album_fancybox', '', 'y', NULL, '', '', ''),
(21, '0', 'page20151015_0855506815', 'bh2010079002demososo', NULL, 'cn', '友情链接', '', 'n', 'y', 1, '', '', '&lt;p&gt;&lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;DM企业建站系统&lt;/a&gt; | &lt;a href=&quot;http://www.baidu.com&quot; target=&quot;_blank&quot;&gt;百度&lt;/a&gt; | &lt;a href=&quot;http://www.Opencart.com&quot; target=&quot;_blank&quot;&gt;opencart购物系统&lt;/a&gt; | &lt;a href=&quot;http://www.demososo.com&quot; target=&quot;_blank&quot;&gt;DM企业建站系统&lt;/a&gt; | &lt;a href=&quot;http://www.baidu.com&quot; target=&quot;_blank&quot;&gt;百度&lt;/a&gt; | &lt;a href=&quot;http://www.Opencart.com&quot; target=&quot;_blank&quot;&gt;opencart购物系统&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;a href=&quot;http://www.dlut.edu.cn/&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20151015_085813_2221.gif&quot; style=&quot;width: 140px; height: 50px;&quot; /&gt;&lt;/a&gt;&amp;nbsp;&lt;a href=&quot;http://www.dlut.edu.cn/&quot; style=&quot;line-height: 20.7999992370605px;&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20151015_085813_2221.gif&quot; style=&quot;opacity: 0.9; width: 140px; height: 50px;&quot; /&gt;&lt;/a&gt;&amp;nbsp;&lt;a href=&quot;http://www.dlut.edu.cn/&quot; style=&quot;line-height: 20.7999992370605px;&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20151015_085813_2221.gif&quot; style=&quot;opacity: 0.9; width: 140px; height: 50px;&quot; /&gt;&lt;/a&gt;&amp;nbsp;&lt;a href=&quot;http://www.dlut.edu.cn/&quot; style=&quot;line-height: 20.7999992370605px;&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20151015_085813_2221.gif&quot; style=&quot;opacity: 0.9; width: 140px; height: 50px;&quot; /&gt;&lt;/a&gt;&amp;nbsp;&lt;a href=&quot;http://www.dlut.edu.cn/&quot; style=&quot;line-height: 20.7999992370605px;&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20151015_085813_2221.gif&quot; style=&quot;opacity: 0.9; width: 140px; height: 50px;&quot; /&gt;&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;a href=&quot;http://www.dlut.edu.cn/&quot; style=&quot;line-height: 20.7999992370605px;&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20151015_085813_2221.gif&quot; style=&quot;width: 140px; height: 50px;&quot; /&gt;&lt;/a&gt;&lt;span style=&quot;line-height: 20.7999992370605px;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;a href=&quot;http://www.dlut.edu.cn/&quot; style=&quot;line-height: 20.7999992370605px;&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20151015_085813_2221.gif&quot; style=&quot;opacity: 0.9; width: 140px; height: 50px;&quot; /&gt;&lt;/a&gt;&lt;span style=&quot;line-height: 20.7999992370605px;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;a href=&quot;http://www.dlut.edu.cn/&quot; style=&quot;line-height: 20.7999992370605px;&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20151015_085813_2221.gif&quot; style=&quot;opacity: 0.9; width: 140px; height: 50px;&quot; /&gt;&lt;/a&gt;&lt;span style=&quot;line-height: 20.7999992370605px;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;a href=&quot;http://www.dlut.edu.cn/&quot; style=&quot;line-height: 20.7999992370605px;&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20151015_085813_2221.gif&quot; style=&quot;opacity: 0.9; width: 140px; height: 50px;&quot; /&gt;&lt;/a&gt;&lt;span style=&quot;line-height: 20.7999992370605px;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;a href=&quot;http://www.dlut.edu.cn/&quot; style=&quot;line-height: 20.7999992370605px;&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20151015_085813_2221.gif&quot; style=&quot;opacity: 0.9; width: 140px; height: 50px;&quot; /&gt;&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;a href=&quot;http://www.dlut.edu.cn/&quot; style=&quot;line-height: 20.7999992370605px;&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20151015_085813_2221.gif&quot; style=&quot;width: 140px; height: 50px;&quot; /&gt;&lt;/a&gt;&lt;span style=&quot;line-height: 20.7999992370605px;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;a href=&quot;http://www.dlut.edu.cn/&quot; style=&quot;line-height: 20.7999992370605px;&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20151015_085813_2221.gif&quot; style=&quot;opacity: 0.9; width: 140px; height: 50px;&quot; /&gt;&lt;/a&gt;&lt;span style=&quot;line-height: 20.7999992370605px;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;a href=&quot;http://www.dlut.edu.cn/&quot; style=&quot;line-height: 20.7999992370605px;&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20151015_085813_2221.gif&quot; style=&quot;opacity: 0.9; width: 140px; height: 50px;&quot; /&gt;&lt;/a&gt;&lt;span style=&quot;line-height: 20.7999992370605px;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;a href=&quot;http://www.dlut.edu.cn/&quot; style=&quot;line-height: 20.7999992370605px;&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20151015_085813_2221.gif&quot; style=&quot;opacity: 0.9; width: 140px; height: 50px;&quot; /&gt;&lt;/a&gt;&lt;span style=&quot;line-height: 20.7999992370605px;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;a href=&quot;http://www.dlut.edu.cn/&quot; style=&quot;line-height: 20.7999992370605px;&quot; target=&quot;_blank&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20151015_085813_2221.gif&quot; style=&quot;opacity: 0.9; width: 140px; height: 50px;&quot; /&gt;&lt;/a&gt;&lt;/p&gt;', '', 'sta_noaccess:##n==#==pagelayout:##noallwidth==#==downloadurl:##==#==videourl:##==#==videotitle:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', NULL, NULL, NULL, '', 'y', NULL, NULL, NULL, NULL),
(22, '0', 'page20151015_0911225612', 'bh2010079002demososo', NULL, 'cn', '企业资质', '', 'n', 'y', 500, '', '', '&lt;p&gt;&lt;span style=&quot;color:red; font-size:18px&quot;&gt;&lt;strong&gt;&lt;a href=&quot;http://www.demososo.com/detail-100.html&quot; target=&quot;_blank&quot;&gt;如何设置页面的侧边栏的位置?是在左边还是在右边，或是在上面？&lt;/a&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20151015_091438_6322.jpg&quot; style=&quot;height:460px; width:615px&quot; /&gt;&lt;/p&gt;', '', 'sta_noaccess:##n==#==pagelayout:##noallwidth==#==downloadurl:##==#==seocus1:##==#==seocus2:##==#==seocus3:##', 'video20180125_1504477609', NULL, NULL, '', 'y', NULL, NULL, NULL, NULL),
(33, '0', 'page20160307_1115284044', 'bh2010079002demososo', NULL, 'cn', '&lt;i class=&quot;fa fa-home&quot;&gt;&lt;/i&gt;网站首页', '', 'n', 'y', 1000, '', '', '', '', 'sta_noaccess:##n==#==pagelayout:##allwidth==#==downloadurl:##==#==seocus1:##标题标题==#==seocus2:##关键字关键字==#==seocus3:##关键字关键字关键字', NULL, NULL, 'album_fancybox', '', 'n', NULL, 'index - 修改单页面-首页的seo', 'asas', 'asfas'),
(59, '0', 'page20160930_1202132274', 'bh2010079002demososo', NULL, 'cn', '视频和下载', NULL, 'n', 'y', 50, NULL, NULL, '', '', 'sta_noaccess:##n==#==pagelayout:##noallwidth==#==downloadurl:##http://www.tudou.com/l/urjGPxS0png/&amp;iid=260832680&amp;rpid=332084973&amp;resourceId=332084973_04_05_99/v.swf==#==videourl:##http://www.tudou.com/l/urjGPxS0png/&amp;iid=260832680&amp;rpid=332084973&amp;resourceId=332084973_04_05_99/v.swf==#==videotitle:##十处武侠片里的美丽景色==#==seocus1:##==#==seocus2:##==#==seocus3:##', NULL, NULL, 'album_fancybox', NULL, 'y', NULL, NULL, NULL, NULL),
(65, '0', 'page20161207_1036569778', 'bh2010079002demososo', '', 'cn', '集团文化', NULL, 'n', 'y', 500, NULL, NULL, '&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;imgpath_3qys0o_comimage/cn/20170423_181014_5749.jpg&quot; style=&quot;height:181px; width:502px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;[DMblockid]form20180218_1250088582[/DMblockid]&lt;/p&gt;\r\n\r\n&lt;p&gt;集团文化集团文化集团文化集团文化集团文化集团文化集团文化集团文化集团文化&lt;/p&gt;\r\n\r\n&lt;p&gt;集团文化集团文化集团文化集团文化集团文化集团文化集团文化&lt;/p&gt;\r\n\r\n&lt;p&gt;集团文化集团文化集团文化集团文化集团文化集团文化集团文化集团文化集团文化集团文化&lt;/p&gt;\r\n\r\n&lt;p&gt;集团文化集团文化集团文化&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;集团文化集团文化集团文化集团文化集团文化集团文化集团文化&lt;/p&gt;\r\n\r\n&lt;p&gt;集团文化集团文化集团文化集团文化集团文化集团文化集团文化集团文化集团文化集团文化&lt;/p&gt;', '', 'sta_noaccess:##n==#==pagelayout:##noallwidth==#==downloadurl:##fas==#==seocus1:##==#==seocus2:##==#==seocus3:##', '', NULL, 'album_fancybox', NULL, 'y', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `zzz_region`
--

CREATE TABLE `zzz_region` (
  `id` int(11) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `pbh` varchar(50) NOT NULL,
  `pidname` varchar(100) NOT NULL,
  `pidstylebh` varchar(90) NOT NULL DEFAULT 'n',
  `lang` varchar(50) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `namebz` varchar(100) DEFAULT NULL,
  `pos` int(3) DEFAULT '50',
  `sta_visible` char(1) NOT NULL DEFAULT 'y',
  `blockid` varchar(100) DEFAULT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'page' COMMENT 'page or style(home)',
  `dateedit` datetime DEFAULT NULL,
  `arr_cfg` text,
  `despjj` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_region`
--

INSERT INTO `zzz_region` (`id`, `pid`, `pbh`, `pidname`, `pidstylebh`, `lang`, `name`, `namebz`, `pos`, `sta_visible`, `blockid`, `type`, `dateedit`, `arr_cfg`, `despjj`) VALUES
(423, 'region20160921_0600333032', 'bh2010079002demososo', 'sregion20160923_1314011215', 'n', 'cn', '新闻', '', 88, 'y', 'vblock20170419_1557131900', 'page', '2016-09-23 13:14:01', 'cssname:##wow rollIn==#==cssstyle:##==#==bgcolor:##==#==bgimg:##==#==bgimgattachment:##y==#==bgimgposition:##center center==#==sta_width_title:##y==#==sta_width_cnt:##n==#==sta_title:##y==#==sta_title_posi:##center==#==titleimg:##==#==titlestyle:##==#==titlestylesub:##==#==titlelinelong:##==#==titlelineshort:##==#==titlelineawe:##==#==linkurl:##==#==linktitle:##==#==linkcss:##==#==linksize:##==#==linkradius:##==#==linkposi:##belowtitle', ''),
(416, 'region20160921_0600333032', 'bh2010079002demososo', 'sregion20160923_1303352939', 'n', 'cn', '首页的公告', 'dsfasdfas', 6600, 'y', 'vblock20151217_0448227671', 'page', '2016-09-23 13:03:35', 'cssname:##regionwrapnopad==#==cssstyle:##==#==bgcolor:##==#==bgimg:##==#==bgimgattachment:##n==#==bgimgposition:##center center==#==sta_width_title:##n==#==sta_width_cnt:##n==#==sta_title:##n==#==sta_title_posi:##center==#==titleimg:##==#==titlestyle:##==#==titlestylesub:##==#==titlelinelong:##==#==titlelineshort:##==#==titlelineawe:##==#==linkurl:##==#==linktitle:##==#==linkcss:##==#==linksize:##==#==linkradius:##==#==linkposi:##belowtitle', 'dsafasdfs'),
(420, 'region20160921_0600333032', 'bh2010079002demososo', 'sregion20160923_1307067908', 'n', 'cn', '为什么 选择DM建站系统', '', 300, 'y', 'vblock20170419_1837016257', 'page', '2016-09-23 13:07:06', 'cssname:##mb50 wow fadeInLeft==#==cssstyle:##==#==bgcolor:##==#==bgimg:##==#==bgimgattachment:##n==#==bgimgposition:##center center==#==sta_width_title:##y==#==sta_width_cnt:##n==#==sta_title:##y==#==sta_title_posi:##center==#==titleimg:##==#==titlestyle:##==#==titlestylesub:##==#==titlelinelong:##==#==titlelineshort:##==#==titlelineawe:##==#==linkurl:##==#==linktitle:##==#==linkcss:##==#==linksize:##==#==linkradius:##==#==linkposi:##belowtitle', '效果，可以再效果，可以再效果，可以再<br />\n效果，可以再效果，可以再效果，可以再效果，可以再'),
(421, 'region20160921_0600333032', 'bh2010079002demososo', 'sregion20160923_1307342725', 'n', 'cn', '产品中心', '', 230, 'y', 'vblock20170919_1202408332', 'page', '2016-09-23 13:07:34', 'cssname:##mb50 wow fadeInDown==#==cssstyle:##==#==bgcolor:##==#==bgimg:##==#==bgimgattachment:##n==#==bgimgposition:##center center==#==sta_width_title:##y==#==sta_width_cnt:##n==#==sta_title:##y==#==sta_title_posi:##center==#==titleimg:##==#==titlestyle:##==#==titlestylesub:##==#==titlelinelong:##==#==titlelineshort:##==#==titlelineawe:##==#==linkurl:##products.html==#==linktitle:##更多产品==#==linkcss:##==#==linksize:##==#==linkradius:##morenocir==#==linkposi:##belowtext', ''),
(632, '0', 'bh2010079002demososo', 'region20170921_1222287881', 'y', 'cn', '联系我们页面的区域', NULL, 50, 'y', NULL, 'page', '2017-09-21 12:22:28', NULL, NULL),
(633, 'region20170921_1222287881', 'bh2010079002demososo', 'sreg20170921_1223214223', 'n', 'cn', '百度地图', '', 50, 'y', 'prog_baidumap', 'page', '2017-09-21 12:23:21', 'cssname:##==#==cssstyle:##==#==bgcolor:##==#==bgimg:##==#==bgimgattachment:##n==#==bgimgposition:##center center==#==sta_width_title:##y==#==sta_width_cnt:##y==#==sta_title:##n==#==sta_title_posi:##center==#==titleimg:##==#==titlestyle:##==#==titlestylesub:##==#==titlelinelong:##==#==titlelineshort:##==#==titlelineawe:##fa-pagelines==#==linkurl:##==#==linktitle:##==#==linkcss:##==#==linksize:##==#==linkradius:##==#==linkposi:##belowtitle', ''),
(634, 'region20170921_1222287881', 'bh2010079002demososo', 'sreg20170921_1239261001', 'n', 'cn', '文字和图片', NULL, 50, 'y', NULL, 'page', '2017-09-21 12:39:26', 'cssname:##==#==cssstyle:##==#==bgcolor:##==#==bgimg:##==#==bgimgattachment:##n==#==bgimgposition:##center center==#==sta_width_title:##y==#==sta_width_cnt:##n==#==sta_title:##n==#==sta_title_posi:##center==#==titleimg:##==#==titlestyle:##==#==titlestylesub:##==#==titlelinelong:##==#==titlelineshort:##==#==titlelineawe:##fa-pagelines==#==linkurl:##==#==linktitle:##==#==linkcss:##==#==linksize:##==#==linkradius:##==#==linkposi:##belowtitle', NULL),
(635, 'region20170921_1222287881', 'bh2010079002demososo', 'sreg20170921_1239427145', 'n', 'cn', '联系表单', '', 50, 'y', 'form20180218_1250127063', 'page', '2017-09-21 12:39:42', 'cssname:##==#==cssstyle:##==#==bgcolor:##==#==bgimg:##20160415_050507_6454.jpg==#==bgimgattachment:##y==#==bgimgposition:##center center==#==sta_width_title:##y==#==sta_width_cnt:##n==#==sta_title:##y==#==sta_title_posi:##center==#==titleimg:##==#==titlestyle:##==#==titlestylesub:##==#==titlelinelong:##==#==titlelineshort:##==#==titlelineawe:##fa-pagelines==#==linkurl:##==#==linktitle:##==#==linkcss:##==#==linksize:##==#==linkradius:##==#==linkposi:##belowtitle', ''),
(376, '0', 'bh2010079002demososo', 'region20160921_0600333032', 'style20160721_0855323118', 'cn', '首页区域', NULL, 500, 'y', NULL, 'style', '2016-09-21 06:00:33', NULL, NULL),
(419, 'region20160921_0600333032', 'bh2010079002demososo', 'sregion20160923_1306553370', 'n', 'cn', '我们的服务', 'tab切换', 355, 'y', 'vblock20170420_1158241500', 'page', '2016-09-23 13:06:55', 'cssname:##wow fadeInDown==#==cssstyle:##==#==bgcolor:##==#==bgimg:##==#==bgimgattachment:##n==#==bgimgposition:##center center==#==sta_width_title:##n==#==sta_width_cnt:##n==#==sta_title:##y==#==sta_title_posi:##center==#==titleimg:##==#==titlestyle:##==#==titlestylesub:##==#==titlelinelong:##==#==titlelineshort:##==#==titlelineawe:##==#==linkurl:##==#==linktitle:##==#==linkcss:##more5==#==linksize:##==#==linkradius:##morenocir==#==linkposi:##belowtext', ''),
(418, 'region20160921_0600333032', 'bh2010079002demososo', 'sregion20160923_1305203022', 'n', 'cn', '关于我们', '左图右文', 500, 'y', '', 'page', '2016-09-23 13:05:20', 'cssname:##==#==cssstyle:##==#==bgcolor:##==#==bgimg:##==#==bgimgattachment:##n==#==bgimgposition:##center center==#==sta_width_title:##y==#==sta_width_cnt:##n==#==sta_title:##y==#==sta_title_posi:##center==#==titleimg:##==#==titlestyle:##==#==titlestylesub:##==#==titlelinelong:##==#==titlelineshort:##==#==titlelineawe:##==#==linkurl:##==#==linktitle:##==#==linkcss:##==#==linksize:##==#==linkradius:##==#==linkposi:##belowtitle', ''),
(427, 'region20160921_0600333032', 'bh2010079002demososo', 'sregion20160923_1315537475', 'n', 'cn', '联系我们', '', 0, 'y', 'group20180303_1220043665', 'page', '2016-09-23 13:15:53', 'cssname:##wow fadeInDown==#==cssstyle:##==#==bgcolor:##==#==bgimg:##20160415_050507_6454.jpg==#==bgimgattachment:##n==#==bgimgposition:##center center==#==sta_width_title:##y==#==sta_width_cnt:##n==#==sta_title:##y==#==sta_title_posi:##center==#==titleimg:##==#==titlestyle:##color:#fff==#==titlestylesub:##==#==titlelinelong:##==#==titlelineshort:##==#==titlelineawe:##==#==linkurl:##==#==linktitle:##==#==linkcss:##==#==linksize:##==#==linkradius:##==#==linkposi:##belowtitle', ''),
(476, 'region20160921_0600333032', 'bh2010079002demososo', 'sregionk20170223_1206319800', 'n', 'cn', '客户评价', '', 50, 'y', 'vblock20170419_1841265872', 'page', '2017-02-23 12:06:31', 'cssname:##mb50 wow fadeInDown==#==cssstyle:##==#==bgcolor:##==#==bgimg:##==#==bgimgattachment:##n==#==bgimgposition:##center center==#==sta_width_title:##y==#==sta_width_cnt:##n==#==sta_title:##y==#==sta_title_posi:##center==#==titleimg:##==#==titlestyle:##==#==titlestylesub:##==#==titlelinelong:##==#==titlelineshort:##==#==titlelineawe:##==#==linkurl:##==#==linktitle:##==#==linkcss:##==#==linksize:##==#==linkradius:##==#==linkposi:##belowtitle', ''),
(641, 'region20160921_0600333032', 'bh2010079002demososo', 'sreg20171130_1528559316', 'n', 'cn', '我们的服务tab切换', '', 352, 'y', 'vblock20170419_1845397696', 'page', '2017-11-30 15:28:55', 'cssname:##wow fadeInRight==#==cssstyle:##==#==bgcolor:##==#==bgimg:##==#==bgimgattachment:##n==#==bgimgposition:##center center==#==sta_width_title:##y==#==sta_width_cnt:##n==#==sta_title:##y==#==sta_title_posi:##center==#==titleimg:##==#==titlestyle:##==#==titlestylesub:##==#==titlelinelong:##==#==titlelineshort:##==#==titlelineawe:##==#==linkurl:##==#==linktitle:##==#==linkcss:##==#==linksize:##==#==linkradius:##==#==linkposi:##belowtitle', ''),
(642, 'region20160921_0600333032', 'bh2010079002demososo', 'sreg20171130_1541284891', 'n', 'cn', '我们的客户', '', 50, 'y', 'vblock20170919_1446491004', 'page', '2017-11-30 15:41:28', 'cssname:##mb50 wow rollIn==#==cssstyle:##==#==bgcolor:##==#==bgimg:##==#==bgimgattachment:##n==#==bgimgposition:##center center==#==sta_width_title:##y==#==sta_width_cnt:##n==#==sta_title:##y==#==sta_title_posi:##center==#==titleimg:##==#==titlestyle:##==#==titlestylesub:##==#==titlelinelong:##==#==titlelineshort:##==#==titlelineawe:##==#==linkurl:##==#==linktitle:##==#==linkcss:##==#==linksize:##==#==linkradius:##==#==linkposi:##belowtitle', ''),
(658, '0', 'bh2010079002demososo', 'region20180224_1440414835', 'n', 'cn', '多列底部内容', NULL, 50, 'y', NULL, 'page', '2018-02-24 14:40:41', NULL, NULL),
(659, 'region20180224_1440414835', 'bh2010079002demososo', 'sreg20180224_1440568807', 'n', 'cn', '第一行', NULL, 50, 'y', NULL, 'page', '2018-02-24 14:40:56', 'cssname:##pt30 footer1==#==cssstyle:##==#==bgcolor:##==#==bgimg:##==#==bgimgattachment:##n==#==bgimgposition:##center center==#==sta_width_title:##y==#==sta_width_cnt:##n==#==sta_title:##n==#==sta_title_posi:##center==#==titleimg:##==#==titlestyle:##==#==titlestylesub:##==#==titlelinelong:##==#==titlelineshort:##==#==titlelineawe:##fa-pagelines==#==linkurl:##==#==linktitle:##==#==linkcss:##==#==linksize:##==#==linkradius:##==#==linkposi:##belowtitle', NULL),
(660, 'region20180224_1440414835', 'bh2010079002demososo', 'sreg20180224_1441047790', 'n', 'cn', '第二行', NULL, 50, 'y', NULL, 'page', '2018-02-24 14:41:04', 'cssname:##footer2 regionwrapnopad==#==cssstyle:##==#==bgcolor:##==#==bgimg:##==#==bgimgattachment:##n==#==bgimgposition:##center center==#==sta_width_title:##y==#==sta_width_cnt:##n==#==sta_title:##n==#==sta_title_posi:##center==#==titleimg:##==#==titlestyle:##==#==titlestylesub:##==#==titlelinelong:##==#==titlelineshort:##==#==titlelineawe:##fa-pagelines==#==linkurl:##==#==linktitle:##==#==linkcss:##==#==linksize:##==#==linkradius:##==#==linkposi:##belowtitle', NULL),
(705, 'region20160921_0600333032', 'bh2010079002demososo', 'sreg20180323_1659413320', 'n', 'cn', '如你所想', NULL, 87, 'y', 'vblock20180323_1630143789', 'page', '2018-03-23 16:59:41', 'cssname:##==#==cssstyle:##==#==bgcolor:##==#==bgimg:##==#==bgimgattachment:##n==#==bgimgposition:##center center==#==sta_width_title:##y==#==sta_width_cnt:##y==#==sta_title:##n==#==sta_title_posi:##center==#==titleimg:##==#==titlestyle:##==#==titlestylesub:##==#==titlelinelong:##==#==titlelineshort:##==#==titlelineawe:##==#==linkurl:##==#==linktitle:##==#==linkcss:##==#==linksize:##==#==linkradius:##==#==linkposi:##belowtitle', '');

-- --------------------------------------------------------

--
-- 表的结构 `zzz_style`
--

CREATE TABLE `zzz_style` (
  `id` int(11) NOT NULL,
  `pid` varchar(50) NOT NULL DEFAULT '0',
  `pidname` varchar(60) NOT NULL,
  `lang` varchar(50) NOT NULL,
  `pbh` varchar(50) NOT NULL DEFAULT 'n',
  `title` varchar(20) NOT NULL DEFAULT 'pls input title',
  `pidmenu` varchar(100) DEFAULT NULL,
  `pidregion` varchar(60) DEFAULT NULL,
  `pidregionmobile` varchar(100) DEFAULT NULL,
  `pos` int(3) NOT NULL DEFAULT '50',
  `blockdir` varchar(100) DEFAULT NULL,
  `htmldir` varchar(100) DEFAULT NULL,
  `kv` varchar(100) DEFAULT NULL,
  `sta_visible` char(1) NOT NULL DEFAULT 'y',
  `sta_sqlcss` char(1) NOT NULL DEFAULT 'y',
  `sta_bootstrap` char(1) NOT NULL DEFAULT 'n',
  `style_normal` text,
  `style_hf` text,
  `style_menu` text,
  `style_banner` text,
  `style_boxtitle` text,
  `style_blockid` text,
  `desp` text,
  `despsql` text,
  `type` varchar(20) DEFAULT 'pc' COMMENT 'pc or mobile',
  `dateedit` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_style`
--

INSERT INTO `zzz_style` (`id`, `pid`, `pidname`, `lang`, `pbh`, `title`, `pidmenu`, `pidregion`, `pidregionmobile`, `pos`, `blockdir`, `htmldir`, `kv`, `sta_visible`, `sta_sqlcss`, `sta_bootstrap`, `style_normal`, `style_hf`, `style_menu`, `style_banner`, `style_boxtitle`, `style_blockid`, `desp`, `despsql`, `type`, `dateedit`) VALUES
(3, '0', 'style20160506_1242421660', 'cn', 'bh2010079002demososo', '橙色 - 简约 sky01', 'menu20161129_1804453928', 'region20160921_0600333032', NULL, 155, '', 'sky01', '20160923_090451_1000.jpg', 'y', 'y', 'n', 'pagewidth:##1200px==#==body_bgcolor:##==#==body_bgimg:##==#==body_bgimgset:##norepeat==#==color_body:###000==#==color_a:###666==#==color_ahover:###FF6634', 'header_bgcolor:###fff==#==header_bgimg:##==#==header_color:###000==#==header_color_a:###000==#==header_color_ahover:###000==#==footer_bgcolor:###FFB16A==#==footer_bgimg:##==#==footer_color:###DEF0FA==#==footer_color_a:###DEF0FA==#==footer_color_ahover:###fff==#==footerbar_bgcolor:##==#==footerbar_color:##==#==footerbar_color_a:##==#==footerbar_color_ahover:##', 'menu_height:##50px==#==menu_border:##0==#==menu_bgcolor:##==#==menu_bgimg:##==#==menu_color:###000==#==menu_bgcolor_h:##==#==menu_bgimg_h:##==#==menu_color_h:###FF7A00==#==msub_height:##30px==#==msub_border:##1px solid  #F7CE64==#==msub_bgcolor:###FE972E==#==msub_color:###e2e2e2==#==msub_bgcolor_h:###FEAC5A==#==msub_color_h:###e2e2e2', 'banner_enable:##n==#==banner_textfirst:##y==#==banner_style:##padding-top:150px;padding-bottom:130px==#==banner_bgcolor:##red==#==banner_bgimg:##==#==banner_color:###333', 'boxtitle_height:##40px==#==boxtitle_bgcolor:###FF8719==#==boxtitle_bgimg:##==#==boxtitle_color:###fff', 'bsbanner:##vblock20170419_1705191641==#==bsbannermob:##vblock20170419_1639427863==#==bsbannertext:##==#==bsheadertop:##group20160509_1200413359==#==bsheaderlogo:##20160812_042415_1315.png==#==bsheadertext:##==#==bsheadersearch:##prog_topsearch==#==bsheadermobtel:##==#==bsfooter:##region20180224_1440414835==#==bsfootermob:##vblock20180119_1633301864==#==bsfooterlast:##group20170920_1717255504==#==bsblock404:##vblock20160510_1000376089', '', '', 'pc', '2016-05-06 12:42:42'),
(18, '0', 'style20160721_0855323118', 'cn', 'bh2010079002demososo', '蓝色企业网站 skyblue', 'menu20161129_1804453928', 'region20160921_0600333032', NULL, 150, '', 'skyblue', '20160923_090432_3316.jpg', 'y', 'y', 'y', 'sta_widthscreen:##y==#==pagewidth:##1200px==#==body_bgcolor:##==#==body_bgimg:##==#==body_bgimgset:##norepeat==#==color_body:###000==#==color_a:###333==#==color_ahover:###3DA8E0', 'header_bgcolor:##==#==header_bgimg:##==#==header_color:###000==#==header_color_a:###000==#==header_color_ahover:###000==#==footer_bgcolor:###3DA8E0==#==footer_bgimg:##==#==footer_color:###DEF0FA==#==footer_color_a:###DEF0FA==#==footer_color_ahover:###2c455e==#==footerbar_bgcolor:##==#==footerbar_color:##==#==footerbar_color_a:##==#==footerbar_color_ahover:##', 'menu_height:##60px==#==menu_border:##0==#==menu_bgcolor:###12A7ED==#==menu_bgimg:##==#==menu_color:###fff==#==menu_bgcolor_h:###43BDF8==#==menu_bgimg_h:##==#==menu_color_h:###fff==#==msub_height:##30px==#==msub_border:##1px solid #7ECFF5==#==msub_bgcolor:###43BDF8==#==msub_color:###fff==#==msub_bgcolor_h:###20B3F6==#==msub_color_h:###fff', 'banner_enable:##n==#==banner_textfirst:##n==#==banner_style:##padding-top:150px;padding-bottom:130px==#==banner_bgcolor:##red==#==banner_bgimg:##==#==banner_color:###333', 'boxtitle_height:##40px==#==boxtitle_bgcolor:###3DA8E0==#==boxtitle_bgimg:##==#==boxtitle_color:###fff', 'bsbanner:##vblock20170419_1630345041==#==bsbannermob:##vblock20170419_1639427863==#==bsbannertext:##==#==bsheadertop:##group20160509_1200413359==#==bsheaderlogo:##20160812_042415_1315.png==#==bsheadertext:##vblock20160921_1144538411==#==bsheadersearch:##prog_topsearch==#==bsheadermobtel:##==#==bsfooter:##region20180224_1440414835==#==bsfootermob:##==#==bsfooterlast:##group20170920_1717255504==#==bsblock404:##vblock20160510_1000376089', '', '', 'pc', '2016-07-21 08:55:32'),
(66, '0', 'style20170426_1846378581', 'cn', 'bh2010079002demososo', '幻灯片全屏 skyfull', 'menu20161129_1804453928', 'region20160921_0600333032', NULL, 50, 'block_default03', 'skyfull', '20170426_184816_8533.jpg', 'y', 'y', 'y', 'pagewidth:##1200px==#==body_bgcolor:##none==#==body_bgimg:##==#==body_bgimgset:##norepeat==#==color_body:###000==#==color_a:###666==#==color_ahover:###FF6634', 'header_bgcolor:##==#==header_bgimg:##==#==header_color:###000==#==header_color_a:###000==#==header_color_ahover:###000==#==footer_bgcolor:###FF5722==#==footer_bgimg:##==#==footer_color:###ebd6b7==#==footer_color_a:###ffe922==#==footer_color_ahover:###ebe6b7==#==footerbar_bgcolor:##==#==footerbar_color:##==#==footerbar_color_a:##==#==footerbar_color_ahover:##', 'menu_height:##50px==#==menu_border:##0==#==menu_bgcolor:##none==#==menu_bgimg:##==#==menu_color:###ccc==#==menu_bgcolor_h:##none==#==menu_bgimg_h:##==#==menu_color_h:###fff==#==msub_height:##35px==#==msub_border:##1px solid #ffac22==#==msub_bgcolor:###FF5722==#==msub_color:###fff==#==msub_bgcolor_h:###ff9122==#==msub_color_h:###fff', 'banner_enable:##y==#==banner_textfirst:##y==#==banner_style:##padding-top:120px;padding-bottom:100px==#==banner_bgcolor:###383d61==#==banner_bgimg:##==#==banner_color:###fff', 'boxtitle_height:##40px==#==boxtitle_bgcolor:###FF5722==#==boxtitle_bgimg:##==#==boxtitle_color:###fff', 'bsbanner:##vblock20171201_1536338532==#==bsbannermob:##==#==bsbannertext:##==#==bsheadertop:##==#==bsheaderlogo:##20160812_042415_1315.png==#==bsheadertext:##==#==bsheadersearch:##prog_topsearch==#==bsheadermobtel:##==#==bsfooter:##region20180224_1440414835==#==bsfootermob:##==#==bsfooterlast:##group20170920_1717255504==#==bsblock404:##vblock20160510_1000376089', NULL, NULL, 'pc', '2017-04-26 18:46:37'),
(96, '0', 'style20171022_1025054134', 'cn', 'bh2010079002demososo', '单页面模板', 'menu20171022_1200255763', 'region20160921_0600333032', NULL, 50, NULL, 'skydanye', '20180209_113703_8877.jpg', 'y', 'y', 'n', 'pagewidth:##1200px==#==body_bgcolor:##==#==body_bgimg:##==#==body_bgimgset:##norepeat==#==color_body:###000==#==color_a:###666==#==color_ahover:###FF6634', 'header_bgcolor:###fff==#==header_bgimg:##==#==header_color:###000==#==header_color_a:###000==#==header_color_ahover:###000==#==footer_bgcolor:###FFB16A==#==footer_bgimg:##==#==footer_color:###DEF0FA==#==footer_color_a:###DEF0FA==#==footer_color_ahover:###fff==#==footerbar_bgcolor:##==#==footerbar_color:##==#==footerbar_color_a:##==#==footerbar_color_ahover:##', 'menu_height:##50px==#==menu_border:##0==#==menu_bgcolor:##==#==menu_bgimg:##==#==menu_color:###000==#==menu_bgcolor_h:##==#==menu_bgimg_h:##==#==menu_color_h:###FF7A00==#==msub_height:##30px==#==msub_border:##1px solid  #F7CE64==#==msub_bgcolor:###FE972E==#==msub_color:###e2e2e2==#==msub_bgcolor_h:###FEAC5A==#==msub_color_h:###e2e2e2', 'banner_enable:##n==#==banner_textfirst:##y==#==banner_style:##padding-top:150px;padding-bottom:130px==#==banner_bgcolor:##red==#==banner_bgimg:##==#==banner_color:###333', 'boxtitle_height:##40px==#==boxtitle_bgcolor:###FF8719==#==boxtitle_bgimg:##==#==boxtitle_color:###fff', 'bsbanner:##vblock20170419_1705191641==#==bsbannermob:##vblock20170419_1639427863==#==bsbannertext:##==#==bsheadertop:##==#==bsheaderlogo:##20160812_042415_1315.png==#==bsheadertext:##==#==bsheadersearch:##prog_topsearch==#==bsheadermobtel:##==#==bsfooter:##region20180224_1440414835==#==bsfootermob:##vblock20180119_1633301864==#==bsfooterlast:##group20170920_1717255504==#==bsblock404:##vblock20160510_1000376089', NULL, NULL, 'pc', '2017-10-22 10:25:05'),
(97, '0', 'style20171123_1856515884', 'cn', 'bh2010079002demososo', 'sky02', 'menu20161129_1804453928', 'region20160921_0600333032', NULL, 50, NULL, 'sky02', '20171207_152259_7074.jpg', 'y', 'y', 'n', 'pagewidth:##1200px==#==body_bgcolor:##==#==body_bgimg:##==#==body_bgimgset:##norepeat==#==color_body:###000==#==color_a:###666==#==color_ahover:###FF6634', 'header_bgcolor:###fff==#==header_bgimg:##==#==header_color:###000==#==header_color_a:###000==#==header_color_ahover:###000==#==footer_bgcolor:###FFB16A==#==footer_bgimg:##==#==footer_color:###DEF0FA==#==footer_color_a:###DEF0FA==#==footer_color_ahover:###fff==#==footerbar_bgcolor:##==#==footerbar_color:##==#==footerbar_color_a:##==#==footerbar_color_ahover:##', 'menu_height:##50px==#==menu_border:##0==#==menu_bgcolor:##==#==menu_bgimg:##==#==menu_color:###000==#==menu_bgcolor_h:##==#==menu_bgimg_h:##==#==menu_color_h:###FF7A00==#==msub_height:##30px==#==msub_border:##1px solid  #F7CE64==#==msub_bgcolor:###FE972E==#==msub_color:###e2e2e2==#==msub_bgcolor_h:###FEAC5A==#==msub_color_h:###e2e2e2', 'banner_enable:##n==#==banner_textfirst:##y==#==banner_style:##padding-top:150px;padding-bottom:130px==#==banner_bgcolor:##red==#==banner_bgimg:##==#==banner_color:###333', 'boxtitle_height:##40px==#==boxtitle_bgcolor:###FF8719==#==boxtitle_bgimg:##==#==boxtitle_color:###fff', 'bsbanner:##vblock20171220_1120341606==#==bsbannermob:##==#==bsbannertext:##==#==bsheadertop:##==#==bsheaderlogo:##20160812_042415_1315.png==#==bsheadertext:##==#==bsheadersearch:##prog_topsearch==#==bsheadermobtel:##==#==bsfooter:##region20180224_1440414835==#==bsfootermob:##vblock20180119_1633301864==#==bsfooterlast:##group20170920_1717255504==#==bsblock404:##vblock20160510_1000376089', NULL, NULL, 'pc', '2017-11-23 18:56:51');

-- --------------------------------------------------------

--
-- 表的结构 `zzz_tag`
--

CREATE TABLE `zzz_tag` (
  `id` int(11) NOT NULL,
  `sta_visible` char(1) NOT NULL DEFAULT 'n',
  `pid` varchar(50) NOT NULL DEFAULT '0',
  `pidname` varchar(50) NOT NULL,
  `pbh` varchar(50) NOT NULL DEFAULT 'n',
  `lang` varchar(50) NOT NULL,
  `pos` int(3) NOT NULL DEFAULT '50' COMMENT 'must need',
  `name` varchar(225) DEFAULT NULL,
  `weight` char(1) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_tag`
--

INSERT INTO `zzz_tag` (`id`, `sta_visible`, `pid`, `pidname`, `pbh`, `lang`, `pos`, `name`, `weight`) VALUES
(118, 'y', '0', 'tag20170712_1850111749', 'bh2010079002demososo', 'cn', 50, '足球', '1'),
(119, 'y', '0', 'tag20170712_1850131707', 'bh2010079002demososo', 'cn', 50, '英语', '1'),
(128, 'y', '0', 'tag20170714_1125102062', 'bh2010079002demososo', 'cn', 50, '电影', '5'),
(121, 'y', '0', 'tag20170713_1214442173', 'bh2010079002demososo', 'cn', 50, '网站', '1'),
(123, 'y', '0', 'tag20170713_1302125810', 'bh2010079002demososo', 'cn', 50, '学习', '2'),
(129, 'y', '0', 'tag20170714_1125217248', 'bh2010079002demososo', 'cn', 50, '生活', '1'),
(135, 'y', '0', 'tag20170717_1519198553', 'bh2010079002demososo', 'cn', 50, '华为', '5'),
(122, 'y', '0', 'tag20170713_1214489409', 'bh2010079002demososo', 'cn', 50, '科技', '3'),
(134, 'y', '0', 'tag20170717_1519139951', 'bh2010079002demososo', 'cn', 50, '篮球', '3');

-- --------------------------------------------------------

--
-- 表的结构 `zzz_tagnode`
--

CREATE TABLE `zzz_tagnode` (
  `id` int(11) NOT NULL,
  `sta_visible` char(1) NOT NULL DEFAULT 'n',
  `pbh` varchar(50) NOT NULL DEFAULT 'n',
  `lang` varchar(50) NOT NULL,
  `pos` int(3) NOT NULL DEFAULT '50' COMMENT 'must need',
  `tag` varchar(50) NOT NULL,
  `node` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_tagnode`
--

INSERT INTO `zzz_tagnode` (`id`, `sta_visible`, `pbh`, `lang`, `pos`, `tag`, `node`) VALUES
(90, 'n', 'bh2010079002demososo', 'cn', 50, 'tag20170717_1519198553', 'node20150806_0916371045'),
(89, 'n', 'bh2010079002demososo', 'cn', 50, 'tag20170714_1125102062', 'node20150806_0916371045'),
(88, 'n', 'bh2010079002demososo', 'cn', 50, 'tag20170713_1214489409', 'node20150806_0916371045'),
(87, 'n', 'bh2010079002demososo', 'cn', 50, 'tag20170713_1214442173', 'node20150806_0916371045'),
(86, 'n', 'bh2010079002demososo', 'cn', 50, 'tag20170712_1850111749', 'node20160406_0930259685'),
(85, 'n', 'bh2010079002demososo', 'cn', 50, 'tag20170714_1125102062', 'node20160406_0930259685'),
(84, 'n', 'bh2010079002demososo', 'cn', 50, 'tag20170713_1302125810', 'node20160406_0930259685'),
(83, 'n', 'bh2010079002demososo', 'cn', 50, 'tag20170713_1214489409', 'node20160406_0930259685'),
(82, 'n', 'bh2010079002demososo', 'cn', 50, 'tag20170713_1214442173', 'node20160406_0930259685'),
(81, 'n', 'bh2010079002demososo', 'cn', 50, 'tag20170714_1125102062', 'node20160820_0656309862'),
(80, 'n', 'bh2010079002demososo', 'cn', 50, 'tag20170713_1214442173', 'node20160820_0656309862'),
(95, 'n', 'bh2010079002demososo', 'cn', 50, 'tag20170714_1125102062', 'node20150806_0925599652'),
(96, 'n', 'bh2010079002demososo', 'cn', 50, 'tag20170714_1125102062', 'node20150806_0921189784'),
(97, 'n', 'bh2010079002demososo', 'cn', 50, 'tag20170713_1214442173', 'node20150806_0929404264'),
(98, 'n', 'bh2010079002demososo', 'cn', 50, 'tag20170713_1214489409', 'node20150806_0929404264'),
(99, 'n', 'bh2010079002demososo', 'cn', 50, 'tag20170713_1302125810', 'node20150806_0929404264');

-- --------------------------------------------------------

--
-- 表的结构 `zzz_user`
--

CREATE TABLE `zzz_user` (
  `id` int(9) NOT NULL,
  `userdir` varchar(50) NOT NULL,
  `bh` varchar(50) NOT NULL,
  `lang` varchar(50) NOT NULL DEFAULT 'cn',
  `email` varchar(100) DEFAULT NULL,
  `ps` varchar(100) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `pos` smallint(3) DEFAULT '50',
  `dateedit` datetime DEFAULT NULL,
  `sqcode` int(3) NOT NULL DEFAULT '0',
  `type` varchar(10) NOT NULL DEFAULT 'normal',
  `previ` varchar(200) DEFAULT NULL,
  `user_stanoaccess` char(1) NOT NULL DEFAULT 'n'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_user`
--

INSERT INTO `zzz_user` (`id`, `userdir`, `bh`, `lang`, `email`, `ps`, `name`, `ip`, `pos`, `dateedit`, `sqcode`, `type`, `previ`, `user_stanoaccess`) VALUES
(77, 'user_20130601_2148331669', 'bh2010079002demososo', 'cn', 'admin', '00Ko3aqrA3ETk', 'name company', '127.0.0.27', 0, '2012-02-26 17:33:33', 0, 'admin', NULL, 'n'),
(99, 'userdir', 'bh2010079002demososo', 'cn', 'test', '00gzXhNTZmkME', NULL, NULL, 50, '2018-03-16 15:40:01', 0, 'normal', 'cate20150805_1134397929|cate20160120_0933312300|cate20160410_0658287350|', 'n');

-- --------------------------------------------------------

--
-- 表的结构 `zzz_video`
--

CREATE TABLE `zzz_video` (
  `id` int(11) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `pidname` varchar(100) NOT NULL,
  `pbh` varchar(50) NOT NULL,
  `lang` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'node' COMMENT 'node or page or block',
  `title` varchar(100) DEFAULT NULL,
  `cssname` varchar(100) DEFAULT NULL,
  `pos` int(3) NOT NULL DEFAULT '50',
  `sta_visible` varchar(1) NOT NULL DEFAULT 'y',
  `kv` varchar(100) DEFAULT NULL,
  `effect` varchar(50) NOT NULL DEFAULT 'video_default',
  `despjj` text,
  `desp` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzz_video`
--

INSERT INTO `zzz_video` (`id`, `pid`, `pidname`, `pbh`, `lang`, `type`, `title`, `cssname`, `pos`, `sta_visible`, `kv`, `effect`, `despjj`, `desp`) VALUES
(174, 'node20160406_0930259685', 'video20180305_1554598918', 'bh2010079002demososo', 'cn', 'node', 'test', '', 50, 'y', '', 'video.php', '', ''),
(165, 'page20150805_1138522811', 'video20180126_1915093003', 'bh2010079002demososo', 'cn', 'page', '视频', '', 50, 'y', '', 'video.php', '', '&lt;iframe frameborder=&quot;0&quot; width=&quot;640&quot; height=&quot;498&quot; src=&quot;https://v.qq.com/iframe/player.html?vid=b0537w8vdfu&amp;tiny=0&amp;auto=0&quot; allowfullscreen&gt;&lt;/iframe&gt;'),
(114, 'block', 'video20180124_1938036437', 'bh2010079002demososo', 'cn', 'block', '盘点2017年炫酷又劲爆的十大电影', '', 50, 'y', '20180305_154922_9313.jpg', 'video.php', '', '&lt;iframe height=498 width=510 src=\'http://player.youku.com/embed/XMzM0NzQwOTM3Mg==\' frameborder=0  \'allowfullscreen\' &gt;&lt;/iframe&gt;'),
(160, 'block', 'video20180126_1845151600', 'bh2010079002demososo', 'cn', 'block', '小虎队', '', 50, 'y', '', 'video.php', '', '&lt;iframe frameborder=&quot;0&quot; width=&quot;640&quot; height=&quot;498&quot; src=&quot;https://v.qq.com/iframe/player.html?vid=b0537w8vdfu&amp;tiny=0&amp;auto=0&quot; allowfullscreen&gt;&lt;/iframe&gt;');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `zzz_album`
--
ALTER TABLE `zzz_album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_alias`
--
ALTER TABLE `zzz_alias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_block`
--
ALTER TABLE `zzz_block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_blockgroup`
--
ALTER TABLE `zzz_blockgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_cate`
--
ALTER TABLE `zzz_cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_column`
--
ALTER TABLE `zzz_column`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_comment`
--
ALTER TABLE `zzz_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_field`
--
ALTER TABLE `zzz_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_fieldoption`
--
ALTER TABLE `zzz_fieldoption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_fieldvalue`
--
ALTER TABLE `zzz_fieldvalue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_imgfj`
--
ALTER TABLE `zzz_imgfj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_lang`
--
ALTER TABLE `zzz_lang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_layout`
--
ALTER TABLE `zzz_layout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_menu`
--
ALTER TABLE `zzz_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_node`
--
ALTER TABLE `zzz_node`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_page`
--
ALTER TABLE `zzz_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_region`
--
ALTER TABLE `zzz_region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_style`
--
ALTER TABLE `zzz_style`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_tag`
--
ALTER TABLE `zzz_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_tagnode`
--
ALTER TABLE `zzz_tagnode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_user`
--
ALTER TABLE `zzz_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zzz_video`
--
ALTER TABLE `zzz_video`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `zzz_album`
--
ALTER TABLE `zzz_album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;
--
-- 使用表AUTO_INCREMENT `zzz_alias`
--
ALTER TABLE `zzz_alias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
--
-- 使用表AUTO_INCREMENT `zzz_block`
--
ALTER TABLE `zzz_block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1025;
--
-- 使用表AUTO_INCREMENT `zzz_blockgroup`
--
ALTER TABLE `zzz_blockgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=576;
--
-- 使用表AUTO_INCREMENT `zzz_cate`
--
ALTER TABLE `zzz_cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;
--
-- 使用表AUTO_INCREMENT `zzz_column`
--
ALTER TABLE `zzz_column`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- 使用表AUTO_INCREMENT `zzz_comment`
--
ALTER TABLE `zzz_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;
--
-- 使用表AUTO_INCREMENT `zzz_field`
--
ALTER TABLE `zzz_field`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- 使用表AUTO_INCREMENT `zzz_fieldoption`
--
ALTER TABLE `zzz_fieldoption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- 使用表AUTO_INCREMENT `zzz_fieldvalue`
--
ALTER TABLE `zzz_fieldvalue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- 使用表AUTO_INCREMENT `zzz_imgfj`
--
ALTER TABLE `zzz_imgfj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;
--
-- 使用表AUTO_INCREMENT `zzz_lang`
--
ALTER TABLE `zzz_lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- 使用表AUTO_INCREMENT `zzz_layout`
--
ALTER TABLE `zzz_layout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1222;
--
-- 使用表AUTO_INCREMENT `zzz_menu`
--
ALTER TABLE `zzz_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;
--
-- 使用表AUTO_INCREMENT `zzz_node`
--
ALTER TABLE `zzz_node`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=494;
--
-- 使用表AUTO_INCREMENT `zzz_page`
--
ALTER TABLE `zzz_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- 使用表AUTO_INCREMENT `zzz_region`
--
ALTER TABLE `zzz_region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=707;
--
-- 使用表AUTO_INCREMENT `zzz_style`
--
ALTER TABLE `zzz_style`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- 使用表AUTO_INCREMENT `zzz_tag`
--
ALTER TABLE `zzz_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
--
-- 使用表AUTO_INCREMENT `zzz_tagnode`
--
ALTER TABLE `zzz_tagnode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- 使用表AUTO_INCREMENT `zzz_user`
--
ALTER TABLE `zzz_user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- 使用表AUTO_INCREMENT `zzz_video`
--
ALTER TABLE `zzz_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

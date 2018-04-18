-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?04 �?18 �?11:38
-- 服务器版本: 5.5.47
-- PHP 版本: 5.5.30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `food`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `descrition` varchar(200) NOT NULL,
  `uptime` varchar(30) NOT NULL DEFAULT '2018',
  `xgtj` varchar(30) NOT NULL DEFAULT '100',
  `pfdj` varchar(30) NOT NULL DEFAULT '8',
  `content` varchar(5000) NOT NULL,
  `look` int(100) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `baker`
--

CREATE TABLE IF NOT EXISTS `baker` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `descrition` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL,
  `thumb` varchar(200) NOT NULL,
  `enname` varchar(200) NOT NULL,
  `cid` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`id`, `name`, `thumb`, `enname`, `cid`) VALUES
(1, '艾美挚美', '/mvcweb/upload/logo-bg.jpg', 'AMY BEAUTY', 0),
(2, '面点师', '/mvcweb/upload/logo-bg.jpg', 'THE BAKER', 0),
(3, '面点推荐', '/mvcweb/upload/logo-bg.jpg', 'RECOMMENDATION', 0),
(4, '新闻中心', '/mvcweb/upload/logo-bg.jpg', 'NEWS CENTER', 0),
(5, '关于我们', '/mvcweb/upload/logo-bg.jpg', 'ABOUT US', 0);

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `mess` varchar(255) NOT NULL,
  `nid` int(10) NOT NULL,
  `aid` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `descrition` varchar(300) NOT NULL,
  `thumb` varchar(200) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `look` int(100) NOT NULL DEFAULT '0',
  `like` int(100) NOT NULL DEFAULT '0',
  `recommend` int(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `descrition` varchar(200) NOT NULL,
  `thumb` varchar(500) NOT NULL,
  `xgtj` varchar(100) NOT NULL,
  `uptime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pfdj` int(10) NOT NULL,
  `recommend` varchar(100) NOT NULL DEFAULT '0',
  `like` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user` char(20) NOT NULL,
  `pass` char(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `telephone` bigint(20) NOT NULL,
  `birthday` date NOT NULL,
  `home` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `intro` varchar(2000) NOT NULL,
  `appiaise` varchar(1000) NOT NULL,
  `expirence` varchar(3000) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `name`, `telephone`, `birthday`, `home`, `nickname`, `img`, `intro`, `appiaise`, `expirence`) VALUES
(1, 'zhangdada', 'e10adc3949ba59abbe56e057f20f883e', '鲁迅', 18434367522, '1881-09-25', '浙江省绍兴府会稽县', '周树人', 'upload/2018-03-231521776766.jpg', '鲁迅（1881－1936），文学家，思想家,，革命家。原名周樟寿，后改名周树人。字豫亭，后改为豫才。浙江绍兴人，出身于破落封建家庭，青年时代受进化论、尼采超人哲学和托尔斯泰博爱思想的影响。鲁迅原在仙台医学院学医，后从事文艺工作，希望用以改变国民精神。辛亥革命后，曾任南京临时政府和北京政府教育部部员、佥事等职，兼在北京大学、女子师范大学等校授课。', '鲁迅一生的著作包括杂文、短篇小说、论文、散文、翻译近1000万字，其中杂文集共16本有：《热风》；《坟》；《华盖集》；《华盖集续编》（1926）；《而已集》（1927）；《三闲集》，《二心集》（1930）；《南腔北调集》（1932——1933）；《伪自由书》；《准风月谈》；《花边文学》；《且介亭杂文》（1934——1936）等。散文集《朝花夕拾》，散文诗集《野草》，讽刺了当时社会的黑暗面。', '                          辛亥革命前夜，鲁迅回到祖国，先在杭州的浙江两级师范学堂执教，担任化学、生理学教员，后又回到故乡绍兴，担任绍兴府中学堂监学兼博物教员、山会初级师范学堂监督（校长）。他一方面教书育人，培养青年， 一方面积极投身于辛亥革命。 他领导故乡文学团体“越社”， 支持创办《越铎日报》。 1912年初， 鲁迅应教育总长蔡元培之邀，赴南京临时政府教育部任职，不久，随教育部迁至北京，任社会教育司第一科科长，同时先后受聘于北京大学、北京高等师范学校、北京女子高等师范学校等一些高等院校，担任校外兼职讲师。');

-- --------------------------------------------------------

--
-- 表的结构 `webinfo`
--

CREATE TABLE IF NOT EXISTS `webinfo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `webname` char(100) NOT NULL,
  `webaddress` char(100) NOT NULL,
  `webtelephone` char(100) NOT NULL,
  `webemail` varchar(100) NOT NULL,
  `webpublic` varchar(100) NOT NULL,
  `uploadtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `website` char(100) NOT NULL,
  `copyright` char(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `webinfo`
--

INSERT INTO `webinfo` (`id`, `webname`, `webaddress`, `webtelephone`, `webemail`, `webpublic`, `uploadtime`, `website`, `copyright`) VALUES
(1, 'aimei', '广东省深圳市深圳市中心部', '305-5050661', 'AIMEI@163.com', 'AIMEIMIANBAOFANG', '2018-04-17 01:43:21', 'AIMEI.duapp.com', '北京市公安局朝阳分局备案编号:110105000501   Copyright &copy; 2006-2016 ZCOOL');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?04 �?18 �?09:43
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
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `title`, `thumb`, `descrition`, `uptime`, `xgtj`, `pfdj`, `content`, `look`, `time`) VALUES
(2, '最新定制-澳洲特质水', '/food/upload/2018-04-1615238743923.png', '蛋糕的美味就是可以让人吃了还想吃，拥有诱惑难挡的魅力。85度c蛋糕店里不仅有美味的蛋糕， 还有面包、咖啡、茶饮等多种产品，让你多种口味随意选择，不管想吃哪种，这里都可以找到所需要的。', '2018', '100', '8', '文本<span>文本</span><span>文本</span>文本<span>文本</span>文本<span>文本</span><span>文本</span><span>文本</span><span>文本</span><span>文本</span><span>文本</span><span>文本</span><span>文本</span><span>文本</span><span>文本</span><span>文本</span><span>文本</span><span>文本</span><span>文本</span><span>文本</span><span>文本</span><span>文本</span><span>文本</span><span>文本</span><span>文本</span><span>文本</span><span>文本</span>文本', 0, '2018-04-17 02:51:54'),
(1, '最新定制-澳洲特质水', '/food/upload/2018-04-1615238729174.png', '蛋糕的美味就是可以让人吃了还想吃，拥有诱惑难挡的魅力。85度c蛋糕店里不仅有美味的蛋糕， 还有面包、咖啡、茶饮等多种产品，让你多种口味随意选择，不管想吃哪种，这里都可以找到所需要的。', '2018', '100', '8', '<p style="text-align:center;">\r\n	<img src="http://localhost/food/assets/admin/kindeditor/attached/image/20180416/20180416174149_94682.png" alt="" width="600" height="369" title="" align="" /> \r\n</p>\r\n<p style="text-align:center;">\r\n	粗杂粮饼干&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;粗杂粮饼干\r\n</p>\r\n<p style="text-align:center;">\r\n	<img src="http://localhost/food/assets/admin/kindeditor/attached/image/20180416/20180416175034_98645.png" alt="" /> <img src="http://localhost/food/assets/admin/kindeditor/attached/image/20180416/20180416175055_15605.png" alt="" /> \r\n</p>', 0, '2018-04-16 12:15:16');

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
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `baker`
--

INSERT INTO `baker` (`id`, `name`, `thumb`, `descrition`) VALUES
(1, 'Mr.bare', '/food/upload/2018-04-1715239280703.png', '最好的朋友，就是新鲜出炉的那批面包， 烘焙刚好的面包伙伴，暖胃又暖心，天 天都能让人思念。'),
(2, '闻闻周', '/food/upload/2018-04-1715239270584.png', '最好的朋友，就是新鲜出炉的那批面包， 烘焙刚好的面包伙伴，暖胃又暖心，天 天都能让人思念。'),
(3, '好好吃', '/food/upload/2018-04-1715239292011.png', '最好的朋友，就是新鲜出炉的那批面包， 烘焙刚好的面包伙伴，暖胃又暖心，天 天都能让人思念。');

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
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `name`, `thumb`, `mess`, `nid`, `aid`, `cid`, `time`) VALUES
(1, '可爱的吃货', '/food/upload/user.jpg', '好吃', 0, 1, 0, '2018-04-17 02:52:19'),
(2, '漂亮的吃货', '/food/upload/user1.png', '好好吃，越吃越漂亮！', 1, 0, 0, '2018-04-17 02:52:24'),
(3, '帅帅的吃货', '/food/upload/user3.png', '还不错哦！', 1, 0, 0, '2018-04-17 02:52:29'),
(4, '傻傻的吃货', '/food/upload/user2.png', '傻傻的，很好吃！', 1, 0, 0, '2018-04-17 02:52:33');

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
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `descrition`, `thumb`, `content`, `time`, `look`, `like`, `recommend`) VALUES
(1, '最新定制-澳洲特质水', '蛋糕的美味就是可以让人吃了还想吃，拥有诱惑难挡的魅力。85度c蛋糕店里不仅有美味的蛋糕， 还有面包、咖啡、茶饮等多种产品，让你多种口味随意选择，不管想吃哪种，这里都可以找到所需要的。', '/food/upload/2018-04-1615238702619.png', '<p style="text-align:center;">\r\n	<img src="http://localhost/food/assets/admin/kindeditor/attached/image/20180416/20180416174149_94682.png" alt="" width="600" height="369" title="" align="" /> \r\n</p>\r\n<p style="text-align:center;">\r\n	粗杂粮饼干&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;粗杂粮饼干\r\n</p>\r\n<p style="text-align:center;">\r\n	<img src="http://localhost/food/assets/admin/kindeditor/attached/image/20180416/20180416175034_98645.png" alt="" /> <img src="http://localhost/food/assets/admin/kindeditor/attached/image/20180416/20180416175055_15605.png" alt="" /> \r\n</p>', '2018-04-16 12:11:38', 0, 0, 0),
(2, '怎样经营一家脏脏包烘焙店', '最近，脏脏包的风潮可谓席卷全国。脏脏包并非真的是脏，而是因为吃过它之后，你满嘴满手都会沾满巧克力而变黑看似脏了一样而得名。', '/food/upload/2018-04-1615238704127.jpg', '<p>\r\n	最近，脏脏包的风潮可谓席卷全国。脏脏包并非真的是脏，而是因为吃过它之后，你满嘴满手都会沾满巧克力而变黑看似脏了一样而得名。虽然它的外形不讨喜，但是味道却是俘虏了不少人，还有不少朋友为买脏脏包而排很久的队，可想而知，脏脏包的火热可带来多少的利润。而想创造更大的烘焙店利润仅靠一款产品明显是不够的，所以烘焙加盟连锁店要想赚大钱首先要学会怎么去经营。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p style="text-align:center;">\r\n	<img border="0" src="http://www.weifu668.com/eWebEditor_6.2/uploadfile/20171226095757748.jpg" /> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	&emsp;&emsp;一间能赚钱的烘焙加盟连锁店要具备5大条件\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	&emsp;&emsp;1、店面位置人气的保证，合适的店面可提供可观的客流量，白领商业区、学校住宅周边、主交通枢纽处都是绝佳的开店位置，一定程度上可保证烘焙店利润。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	&emsp;&emsp;2、店面环境休闲舒适，高大上的烘焙加盟连锁店始终是吸引顾客的条件，何谓高大上，那就是店面的门头、外观设计、店面环境能否令到顾客驻足。一般来说，店面门头要有特色突出，店面环境休闲为主，总体能给到消费者一种舒适的购物体验。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	&emsp;&emsp;3、产品物超所值，物超所值说明产品的价值远远大于消费者的需求，怎么做？产品要突出精致的美，利用视觉上顾客对产品美的吸引力，其次，产品定价要结合当地消费能力而定出亲民化的价格，自然而然地顾客就会觉得你烘焙加盟连锁店的产品是物超所值的。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	&emsp;&emsp;4、经营新鲜感，创新是稳定烘焙店利润的动力，因此，烘焙加盟连锁店不管是对产品还是店面的摆设都应该要适时定期的进行更新，增加新鲜感。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	&emsp;&emsp;5、服务得体，员工的服务态度也是烘焙加盟连锁店在经营中的重点，与顾客打好良好关系，消费者成为回头客的机率就大大提升，对于长期提高烘焙店利润有着促进作用。\r\n</p>', '2018-04-16 09:20:16', 0, 0, 0),
(3, '最新定制-澳洲特质水', '蛋糕的美味就是可以让人吃了还想吃，拥有诱惑难挡的魅力。85度c蛋糕店里不仅有美味的蛋糕， 还有面包、咖啡、茶饮等多种产品，让你多种口味随意选择，不管想吃哪种，这里都可以找到所需要的。', '/food/upload/2018-04-1615238716647.png', '文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本', '2018-04-17 02:53:25', 0, 0, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `name`, `descrition`, `thumb`, `xgtj`, `uptime`, `pfdj`, `recommend`, `like`) VALUES
(1, '蜂蜜面包', '蛋糕的美味就是可以让人吃了还想吃，拥有诱惑难挡的魅力。85度c蛋糕店里不仅有美味的蛋糕， 还有面包、咖啡、茶饮等多种产品，让你多种口味随意选择，不管想吃哪种，这里都可以找到所需要的。', '/food/upload/2018-04-1615238846199.png', '100', '2018-04-16 13:17:10', 7, '0', '0'),
(2, '黑森林', '蛋糕的美味就是可以让人吃了还想吃，拥有诱惑难挡的魅力。85度c蛋糕店里不仅有美味的蛋糕， 还有面包、咖啡、茶饮等多种产品，让你多种口味随意选择，不管想吃哪种，这里都可以找到所需要的。', '/food/upload/2018-04-1615238849501.png', '100', '2018-04-16 13:22:58', 8, '0', '0'),
(3, '法国马卡龙', '蛋糕的美味就是可以让人吃了还想吃，拥有诱惑难挡的魅力。85度c蛋糕店里不仅有美味的蛋糕， 还有面包、咖啡、茶饮等多种产品，让你多种口味随意选择，不管想吃哪种，这里都可以找到所需要的。', '/food/upload/2018-04-1615238850899.png', '100', '2018-04-16 13:24:58', 8, '0', '0');

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

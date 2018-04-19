-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?04 �?19 �?10:57
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
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `title`, `thumb`, `descrition`, `uptime`, `xgtj`, `pfdj`, `content`, `look`, `time`) VALUES
(1, '最新定制澳洲面包', 'upload/2018-04-1815240224681.png', '蛋糕的美味就是让人吃了还想吃，拥有诱惑难挡的魔力！', '2018', '100', '8', '我最喜欢做米果的这一天了。我盼呀盼，这一天终于来到了。早上太阳公公和我招手见面，我到了奶奶家，便看见桌子上有大团像球似的米果。小姨、姑姑她们围在一起，我见她们每人从那大团米果里挖了一小团，搓了几下后，就捏成一个个圆圆的球，<img src="/meishi/assets/admin/kindeditor/attached/image/20180418/20180418033945_62544.jpg" alt="" width="200" height="126" title="" align="" />再用那个“机器”一压，就压出一块块铰子皮似的小圆饼来。我见小姨做了一个好像鞋子一样的米果，我就把它称为“鞋子米果”。还可以把米果搓成一根根手指模样。全部做好了，就可以放在灶上蒸了。我最喜欢做米果的这一天了。我盼呀盼，这一天终于来到了。早上太阳公公和我招手见面，我到了奶奶家，便看见桌子上有大团像球似的米果。小姨、姑姑她们围在一起，我见她们每人从那大团米果里挖了一小团，搓了几下后，就捏成一个个圆圆的球，再用那个“机器”一压，就压出一块块铰子皮似的小圆饼来。我见小姨做了一个好像鞋子一样的米果，我就把它称为“鞋子米果”。还可以把米果搓成一根根手指模样。全部做好了，就可以放在灶上蒸了。', 0, '2018-04-18 03:41:45'),
(2, '甜点的邂逅', 'upload/2018-04-1815240230948.jpg', '蛋糕的美味就是让人吃了还想吃，拥有诱惑难挡的魔力！', '2018', '100', '8', '我最喜欢做米果的这一天了。我盼呀盼，这一天终于来到了。早上太阳公公和我招手见面，我到了奶奶家，便看见桌子上有大团像球似的米果。小姨、姑姑她们围在一起，我见她们每人从那大团米果里挖了一小团，搓了几下后，就捏成一个个圆圆的球，<img src="/meishi/assets/admin/kindeditor/attached/image/20180418/20180418033945_62544.jpg" alt="" width="200" height="126" title="" align="" />再用那个“机器”一压，就压出一块块铰子皮似的小圆饼来。我见小姨做了一个好像鞋子一样的米果，我就把它称为“鞋子米果”。还可以把米果搓成一根根手指模样。全部做好了，就可以放在灶上蒸了。我最喜欢做米果的这一天了。我盼呀盼，这一天终于来到了。早上太阳公公和我招手见面，我到了奶奶家，便看见桌子上有大团像球似的米果。小姨、姑姑她们围在一起，我见她们每人从那大团米果里挖了一小团，搓了几下后，就捏成一个个圆圆的球，再用那个“机器”一压，就压出一块块铰子皮似的小圆饼来。我见小姨做了一个好像鞋子一样的米果，我就把它称为“鞋子米果”。还可以把米果搓成一根根手指模样。全部做好了，就可以放在灶上蒸了。', 0, '2018-04-18 03:45:16'),
(3, '粗杂粮饼干', 'upload/2018-04-1815240231424.jpg', '蛋糕的美味就是让人吃了还想吃，拥有诱惑难挡的魔力！', '2018', '100', '8', '我最喜欢做米果的这一天了。我盼呀盼，这一天终于来到了。早上太阳公公和我招手见面，我到了奶奶家，便看见桌子上有大团像球似的米果。小姨、姑姑她们围在一起，我见她们每人从那大团米果里挖了一小团，搓了几下后，就捏成一个个圆圆的球，<img src="/meishi/assets/admin/kindeditor/attached/image/20180418/20180418033945_62544.jpg" alt="" width="200" height="126" title="" align="" />再用那个“机器”一压，就压出一块块铰子皮似的小圆饼来。我见小姨做了一个好像鞋子一样的米果，我就把它称为“鞋子米果”。还可以把米果搓成一根根手指模样。全部做好了，就可以放在灶上蒸了。我最喜欢做米果的这一天了。我盼呀盼，这一天终于来到了。早上太阳公公和我招手见面，我到了奶奶家，便看见桌子上有大团像球似的米果。小姨、姑姑她们围在一起，我见她们每人从那大团米果里挖了一小团，搓了几下后，就捏成一个个圆圆的球，再用那个“机器”一压，就压出一块块铰子皮似的小圆饼来。我见小姨做了一个好像鞋子一样的米果，我就把它称为“鞋子米果”。还可以把米果搓成一根根手指模样。全部做好了，就可以放在灶上蒸了。', 0, '2018-04-18 03:45:44'),
(4, '可爱的吃货', 'upload/2018-04-1815240231626.jpg', '蛋糕的美味就是让人吃了还想吃，拥有诱惑难挡的魔力！', '2018', '100', '8', '我最喜欢做米果的这一天了。我盼呀盼，这一天终于来到了。早上太阳公公和我招手见面，我到了奶奶家，便看见桌子上有大团像球似的米果。小姨、姑姑她们围在一起，我见她们每人从那大团米果里挖了一小团，搓了几下后，就捏成一个个圆圆的球，<img src="/meishi/assets/admin/kindeditor/attached/image/20180418/20180418033945_62544.jpg" alt="" width="200" height="126" title="" align="" />再用那个“机器”一压，就压出一块块铰子皮似的小圆饼来。我见小姨做了一个好像鞋子一样的米果，我就把它称为“鞋子米果”。还可以把米果搓成一根根手指模样。全部做好了，就可以放在灶上蒸了。我最喜欢做米果的这一天了。我盼呀盼，这一天终于来到了。早上太阳公公和我招手见面，我到了奶奶家，便看见桌子上有大团像球似的米果。小姨、姑姑她们围在一起，我见她们每人从那大团米果里挖了一小团，搓了几下后，就捏成一个个圆圆的球，再用那个“机器”一压，就压出一块块铰子皮似的小圆饼来。我见小姨做了一个好像鞋子一样的米果，我就把它称为“鞋子米果”。还可以把米果搓成一根根手指模样。全部做好了，就可以放在灶上蒸了。', 0, '2018-04-18 03:46:03'),
(5, '烘焙甜点方式', 'upload/2018-04-18152402318410.jpg', '蛋糕的美味就是让人吃了还想吃，拥有诱惑难挡的魔力！', '2018', '100', '8', '我最喜欢做米果的这一天了。我盼呀盼，这一天终于来到了。早上太阳公公和我招手见面，我到了奶奶家，便看见桌子上有大团像球似的米果。小姨、姑姑她们围在一起，我见她们每人从那大团米果里挖了一小团，搓了几下后，就捏成一个个圆圆的球，<img src="/meishi/assets/admin/kindeditor/attached/image/20180418/20180418033945_62544.jpg" alt="" width="200" height="126" title="" align="" />再用那个“机器”一压，就压出一块块铰子皮似的小圆饼来。我见小姨做了一个好像鞋子一样的米果，我就把它称为“鞋子米果”。还可以把米果搓成一根根手指模样。全部做好了，就可以放在灶上蒸了。我最喜欢做米果的这一天了。我盼呀盼，这一天终于来到了。早上太阳公公和我招手见面，我到了奶奶家，便看见桌子上有大团像球似的米果。小姨、姑姑她们围在一起，我见她们每人从那大团米果里挖了一小团，搓了几下后，就捏成一个个圆圆的球，再用那个“机器”一压，就压出一块块铰子皮似的小圆饼来。我见小姨做了一个好像鞋子一样的米果，我就把它称为“鞋子米果”。还可以把米果搓成一根根手指模样。全部做好了，就可以放在灶上蒸了。', 0, '2018-04-18 03:46:26'),
(6, '每日美味', 'upload/2018-04-1815240232075.jpg', '蛋糕的美味就是让人吃了还想吃，拥有诱惑难挡的魔力！', '2018', '100', '8', '我最喜欢做米果的这一天了。我盼呀盼，这一天终于来到了。早上太阳公公和我招手见面，我到了奶奶家，便看见桌子上有大团像球似的米果。小姨、姑姑她们围在一起，我见她们每人从那大团米果里挖了一小团，搓了几下后，就捏成一个个圆圆的球，<img src="/meishi/assets/admin/kindeditor/attached/image/20180418/20180418033945_62544.jpg" alt="" width="200" height="126" title="" align="" />再用那个“机器”一压，就压出一块块铰子皮似的小圆饼来。我见小姨做了一个好像鞋子一样的米果，我就把它称为“鞋子米果”。还可以把米果搓成一根根手指模样。全部做好了，就可以放在灶上蒸了。我最喜欢做米果的这一天了。我盼呀盼，这一天终于来到了。早上太阳公公和我招手见面，我到了奶奶家，便看见桌子上有大团像球似的米果。小姨、姑姑她们围在一起，我见她们每人从那大团米果里挖了一小团，搓了几下后，就捏成一个个圆圆的球，再用那个“机器”一压，就压出一块块铰子皮似的小圆饼来。我见小姨做了一个好像鞋子一样的米果，我就把它称为“鞋子米果”。还可以把米果搓成一根根手指模样。全部做好了，就可以放在灶上蒸了。', 0, '2018-04-18 03:46:50'),
(7, '中国菜与西点', 'upload/2018-04-1815240232367.jpg', '蛋糕的美味就是让人吃了还想吃，拥有诱惑难挡的魔力！', '2018', '100', '8', '我最喜欢做米果的这一天了。我盼呀盼，这一天终于来到了。早上太阳公公和我招手见面，我到了奶奶家，便看见桌子上有大团像球似的米果。小姨、姑姑她们围在一起，我见她们每人从那大团米果里挖了一小团，搓了几下后，就捏成一个个圆圆的球，<img src="/meishi/assets/admin/kindeditor/attached/image/20180418/20180418033945_62544.jpg" alt="" width="200" height="126" title="" align="" />再用那个“机器”一压，就压出一块块铰子皮似的小圆饼来。我见小姨做了一个好像鞋子一样的米果，我就把它称为“鞋子米果”。还可以把米果搓成一根根手指模样。全部做好了，就可以放在灶上蒸了。我最喜欢做米果的这一天了。我盼呀盼，这一天终于来到了。早上太阳公公和我招手见面，我到了奶奶家，便看见桌子上有大团像球似的米果。小姨、姑姑她们围在一起，我见她们每人从那大团米果里挖了一小团，搓了几下后，就捏成一个个圆圆的球，再用那个“机器”一压，就压出一块块铰子皮似的小圆饼来。我见小姨做了一个好像鞋子一样的米果，我就把它称为“鞋子米果”。还可以把米果搓成一根根手指模样。全部做好了，就可以放在灶上蒸了。', 0, '2018-04-18 03:47:18');

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
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `baker`
--

INSERT INTO `baker` (`id`, `name`, `thumb`, `descrition`) VALUES
(1, 'Tom', 'upload/2018-04-1815240198596.png', '面点师，这是一个受人尊重的职业。知名财经杂志《福布斯》联手全球权威咨询机构纽约声誉研究所（Reputation Institute），面向全球范围内的上千家大企业做了一项声誉调查并公布了一份“2008全球最受尊敬企业排名”。来自拉美的大型跨国烘焙食品企业宾堡集团（Group Bimbo）就名列榜上前十名。'),
(2, '詹妮弗', 'upload/2018-04-1815240199464.png', '取得本职业初级职业资格证书，取得经劳动和社会保障行政部门审核认定，职业中级职业资格证书，职业技师职业资格证书，连续从事本职业工作5年'),
(3, '本杰明·凡茜', 'upload/2018-04-1815240201849.jpg', '面点是中国烹饪的主要组成部分，素以历史悠久、制作精致、品类丰富、风味多样著称于世。春秋战国时，谷物品已有麦、稻、菽、黍、稷、粟、大麻子等，并已有五谷、九谷、百谷之称。其中麦有大麦、小麦之分，黍、稷、稻也有许多品。'),
(4, '李师傅', 'upload/2018-04-1815240202466.jpg', '四川绵阳人，出生于1972，中国烹饪大师、中华名厨、华人餐饮名人，食品雕刻烹饪名师、国家级高级烹饪技师，世界名人烹饪大师、曾担任中韩国际烹饪大奖赛评委，中国餐饮精英会专家评委，首届乡土菜国际烹饪大赛裁判长、首届国际绿色养生厨艺大赛首席专家评委，深圳（CMH）厨师联合协会主任；现任中国乡土菜研究协会副会长'),
(5, '迈克威尔', 'upload/2018-04-18152402026610.jpg', 'IFBA国际餐饮协会副会长，中华伊尹饮食文化研究会副会长、中国菜（zgc）文化传播中心专家、世界华人健康饮食协会主席、川味飘香餐饮管理有限公司董事长、绵阳市微电影协会秘书长、四川滋竹酒业总经理。');

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
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `name`, `thumb`, `mess`, `nid`, `aid`, `cid`, `time`) VALUES
(1, '可爱的吃货', 'upload/user1.png', '厉害了这个新品，我要带朋友经常来光顾，吃友们你们有没有觉得美味的，帮我推荐一下好吗？', 0, 1, 0, '2018-04-18 06:20:23'),
(2, '可爱的吃货', 'upload/user2.png', '厉害了这个新品，我要带朋友经常来光顾，吃友们你们有没有觉得美味的，帮我推荐一下好吗？', 0, 2, 0, '2018-04-18 06:20:23'),
(3, '可爱的吃货', 'upload/user3.png', '厉害了这个新品，我要带朋友经常来光顾，吃友们你们有没有觉得美味的，帮我推荐一下好吗？', 0, 3, 0, '2018-04-18 06:20:23');

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
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `descrition`, `thumb`, `content`, `time`, `look`, `like`, `recommend`) VALUES
(1, '面包也需要创意', '没有什么是设计解决不了的/设计大赛获奖感言', 'upload/2018-04-1815240204078.png', '<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">2006年创办川味飘香厨政管理有限公司，2007被收录大型系列丛书《名人之光》，经“世界名人管理科学院专家委员会”评审，特授予 “世界名人烹饪大师”称号，同时被“世界名人资格审评委员会”授予“世界名人勋章”。同年任《中国时代前沿》杂志社副理事长, 授予“构建和谐社会杰出人物”金像奖。年底成功在义乌举办“首届乡土菜国际烹饪大赛”，2008年在中国饭店协会和搜厨网在迎奥运全国餐饮技能大赛期间进行的“2008中国厨艺明星走红地毯”大型活动中作为厨艺明星受邀出席走红地毯，并担任第三届搜厨国际烹饪大赛评委，2008年底由中国国际经济技术合作促进会和中国企业改革发展研究院经组委会办公室遴选，评委会审议；特授予 “中国改革开放30年餐饮文化行业十大功勋人物”荣誉称号，应邀在人民大会堂联合召开“改革开放三十年功勋人物先进事迹报告会”并编撰中国改革史上的大型存史资治《改革开放三十年人物成就大典》</span>', '2018-04-18 03:00:34', 0, 0, 0),
(2, '甜蜜豆沙面包', '豆沙的甜和糯/面点师的刚和柔', 'upload/2018-04-18152402057510.png', '<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">同年被评为“食品雕刻烹饪名师”并加入“食品雕刻专业委员会”，2005年收入《中国当代名厨大全》，并获“中华名厨”称号，评为“大师”级。[图片]2006年被中国世纪大采风组委会及世界华侨华人联合总会收入《走近当代大师》。2006年底被中国新闻文化促进会收录大型历史文献《中华先锋》。2006年创办川味飘香厨政管理有限公司，2007被收录大型系列丛书《名人之光》，经“世界名人管理科学院专家委员会”评审，特授予 “世界名人烹饪大师”称号，同时被“世界名人资格审评委员会”授</span>', '2018-04-18 03:03:10', 0, 0, 0),
(3, '这个世界还是很美好的', '没有什么是设计解决不了的/设计大赛获奖感言', 'upload/2018-04-1815240207279.png', '<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">同年被评为“食品雕刻烹饪名师”并加入“食品雕刻专业委员会”，2005年收入《中国当代名厨大全》，并获“中华名厨”称号，评为“大师”级。[图片]2006年被中国世纪大采风组委会及世界华侨华人联合总会收入《走近当代大师》。2006年底被中国新闻文化促进会收录大型历史文献《中华先锋》。2006年创办川味飘香厨政管理有限公司，2007被收录大型系列丛书《名人之光》，经“世界名人管理科学院专家委员会”评审，特授予 “世界名人烹饪大师”称号，同时被“世界名人资格审评委员会”授</span>', '2018-04-18 03:05:29', 0, 0, 0),
(4, '这个世界还是很美好的', '没有什么是设计解决不了的/设计大赛获奖感言', 'upload/2018-04-1815240211466.png', '<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">同年被评为“食品雕刻烹饪名师”并加入“食品雕刻专业委员会”，2005年收入《中国当代名厨大全》，并获“中华名厨”称号，评为“大师”级。[图片]2006年被中国世纪大采风组委会及世界华侨华人联合总会收入《走近当代大师》。2006年底被中国新闻文化促进会收录大型历史文献《中华先锋》。2006年创办川味飘香厨政管理有限公司，2007被收录大型系列丛书《名人之光》，经“世界名人管理科学院专家委员会”评审，特授予 “世界名人烹饪大师”称号，同时被“世界名人资格审评委员会”授</span>', '2018-04-18 03:12:29', 0, 0, 0),
(5, '这个世界还是很美好的', '没有什么是设计解决不了的/设计大赛获奖感言', 'upload/2018-04-1815240211637.png', '<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">同年被评为“食品雕刻烹饪名师”并加入“食品雕刻专业委员会”，2005年收入《中国当代名厨大全》，并获“中华名厨”称号，评为“大师”级。[图片]2006年被中国世纪大采风组委会及世界华侨华人联合总会收入《走近当代大师》。2006年底被中国新闻文化促进会收录大型历史文献《中华先锋》。2006年创办川味飘香厨政管理有限公司，2007被收录大型系列丛书《名人之光》，经“世界名人管理科学院专家委员会”评审，特授予 “世界名人烹饪大师”称号，同时被“世界名人资格审评委员会”授</span>', '2018-04-18 03:12:45', 0, 0, 0),
(6, '这个世界还是很美好的', '没有什么是设计解决不了的/设计大赛获奖感言', 'upload/2018-04-1815240211777.png', '<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">同年被评为“食品雕刻烹饪名师”并加入“食品雕刻专业委员会”，2005年收入《中国当代名厨大全》，并获“中华名厨”称号，评为“大师”级。[图片]2006年被中国世纪大采风组委会及世界华侨华人联合总会收入《走近当代大师》。2006年底被中国新闻文化促进会收录大型历史文献《中华先锋》。2006年创办川味飘香厨政管理有限公司，2007被收录大型系列丛书《名人之光》，经“世界名人管理科学院专家委员会”评审，特授予 “世界名人烹饪大师”称号，同时被“世界名人资格审评委员会”授</span>', '2018-04-18 03:12:59', 0, 0, 0),
(7, '这个世界还是很美好的', '没有什么是设计解决不了的/设计大赛获奖感言', 'upload/2018-04-1815240211904.png', '<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">同年被评为“食品雕刻烹饪名师”并加入“食品雕刻专业委员会”，2005年收入《中国当代名厨大全》，并获“中华名厨”称号，评为“大师”级。[图片]2006年被中国世纪大采风组委会及世界华侨华人联合总会收入《走近当代大师》。2006年底被中国新闻文化促进会收录大型历史文献《中华先锋》。2006年创办川味飘香厨政管理有限公司，2007被收录大型系列丛书《名人之光》，经“世界名人管理科学院专家委员会”评审，特授予 “世界名人烹饪大师”称号，同时被“世界名人资格审评委员会”授</span>', '2018-04-18 03:13:12', 0, 0, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `name`, `descrition`, `thumb`, `xgtj`, `uptime`, `pfdj`, `recommend`, `like`) VALUES
(1, '肉松夹层', '优等肉松/烘焙师推荐', 'upload/2018-04-1815240314363.png', '总店可购买', '2018-04-18 06:05:17', 8, '0', '0'),
(2, '花生巧克力', '优等肉松/烘焙师推荐', 'upload/2018-04-1815240316685.png', '总店可购买', '2018-04-18 06:05:17', 8, '0', '0'),
(3, '松仁面包', '优等肉松/烘焙师推荐', 'upload/2018-04-1815240316764.png', '总店可购买', '2018-04-18 06:05:17', 8, '0', '0'),
(4, '蜂蜜面包', '优等肉松/烘焙师推荐', 'upload/2018-04-1815240319231.png', '总店可购买', '2018-04-18 06:05:17', 8, '0', '0'),
(5, '黑森林', '优等肉松/烘焙师推荐', 'upload/2018-04-1815240319368.png', '总店可购买', '2018-04-18 06:05:17', 8, '0', '0'),
(6, '花香面包', '优等肉松/烘焙师推荐', 'upload/2018-04-1815240319455.png', '总店可购买', '2018-04-18 06:05:17', 8, '0', '0'),
(7, '帝久包', '优等肉松/烘焙师推荐', 'upload/2018-04-1815240319531.png', '总店可购买', '2018-04-18 06:05:17', 8, '0', '0'),
(8, '测试面包', '测试面包测试面包', 'upload/2018-04-1815240472327.png', '本店购买', '2018-04-18 10:27:32', 8, '0', '0'),
(9, '幻想面包', '优等肉松/烘焙师推荐', 'upload/2018-04-1915240984807.png', '本店购买', '2018-04-19 00:41:35', 8, '0', '0');

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

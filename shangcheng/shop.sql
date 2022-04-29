-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2021-12-20 16:50:47
-- 服务器版本： 5.7.24
-- PHP 版本： 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `shop`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_dingdan`
--

DROP TABLE IF EXISTS `tb_dingdan`;
CREATE TABLE IF NOT EXISTS `tb_dingdan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dingdanhao` char(125) DEFAULT NULL,
  `spc` char(125) DEFAULT NULL,
  `slc` char(125) DEFAULT NULL,
  `shouhuoren` char(25) DEFAULT NULL,
  `dizhi` char(125) DEFAULT NULL,
  `tel` char(25) DEFAULT NULL,
  `time` char(25) DEFAULT NULL,
  `xiadanrenzh` char(25) DEFAULT NULL,
  `zt` char(50) DEFAULT NULL,
  `total` char(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_dingdan`
--

INSERT INTO `tb_dingdan` (`id`, `dingdanhao`, `spc`, `slc`, `shouhuoren`, `dizhi`, `tel`, `time`, `xiadanrenzh`, `zt`, `total`) VALUES
(63, '20211220112959123', '10@', '1@', 'jjjjj', '22222', '11111111111', '2021-12-20 11:29:59', '1478963', '未做如何处理', '2888'),
(62, '20211220112400123', ' 11@', ' 1@', 'jjjjj', '22222', '11111111111', '2021-12-20 11:24:00', '1478963', '取消订单', '0'),
(61, '20211220112159123', ' 11@', ' 1@', 'jjjjj', '22222', '11111111111', '2021-12-20 11:21:59', '1478963', '未做如何处理', '0'),
(60, '20211220111803123', ' 33@', '2@', 'jjjjj', '22222', '11111111111', '2021-12-20 11:18:03', '1478963', '未做如何处理', '2400'),
(59, '20211220111126123', ' 10@', ' 1@', 'jjjjj', '22222', '11111111111', '2021-12-20 11:11:26', '1478963', '已支付', '0'),
(58, '20211220111044123', ' 11@', ' 1@', 'jjjjj', '22222', '11111111111', '2021-12-20 11:10:44', '1478963', '未做如何处理', '0'),
(57, '20211220111016123', ' 11@12@19@', '2@1@1@', 'jjjjj', '22222', '11111111111', '2021-12-20 11:10:16', '1478963', '未做如何处理', '0'),
(56, '20211220105915123', '33@15@11@', '1@1@3@', 'jjjjj', '22222', '11111111111', '2021-12-20 10:59:15', '1478963', '已支付', '0'),
(55, '20211220100807123', ' 10@', '2@', 'jjjjj', '22222', '11111111111', '2021-12-20 10:08:07', '1478963', '未做如何处理', '0'),
(54, '20211220100746123', ' 10@14@', ' 1@1@', 'jjjjj', '22222', '11111111111', '2021-12-20 10:07:46', '1478963', '未做如何处理', '0'),
(53, '20211220100253123', ' 11@10@12@12@', ' 1@1@1@1@', 'jjjjj', '22222', '11111111111', '2021-12-20 10:02:53', '1478963', '未做如何处理', '0'),
(48, '20211220094457123', ' 10@', ' 1@', 'jjjjj', '22222', '11111111111', '2021-12-20 09:44:57', '1478963', '未做如何处理', '8664'),
(47, '20211220094258123', ' 10@', '2@', 'jjjjj', '22222', '11111111111', '2021-12-20 09:42:58', '1478963', '未做如何处理', '8664'),
(49, '20211220094717123', ' 33@', ' 1@', 'jjjjj', '22222', '11111111111', '2021-12-20 09:47:17', '1478963', '未做如何处理', '8664'),
(50, '20211220095140123', ' 10@', ' 1@', 'jjjjj', '22222', '11111111111', '2021-12-20 09:51:40', '1478963', '未做如何处理', '0'),
(51, '20211220095214123', ' 10@', '2@', 'jjjjj', '22222', '11111111111', '2021-12-20 09:52:14', '1478963', '未做如何处理', '0'),
(52, '20211220095531123', ' 10@', ' 1@', 'jjjjj', '22222', '11111111111', '2021-12-20 09:55:31', '1478963', '未做如何处理', '0'),
(64, '20211220115316123', '11@', '1@', 'jjjjj', '22222', '11111111111', '2021-12-20 11:53:16', '1478963', '未做如何处理', '0'),
(65, '20211220115335123', ' 11@', '2@', 'jjjjj', '22222', '11111111111', '2021-12-20 11:53:35', '1478963', '未做如何处理', '0'),
(66, '20211220115418123', ' 11@12@', ' 1@1@', 'jjjjj', '22222', '11111111111', '2021-12-20 11:54:18', '1478963', '未做如何处理', '0'),
(67, '20211220164701123', '35@', '1@', 'jjjjj', '广东科技学院', '11111111111', '2021-12-20 16:47:01', '1478963', '未做如何处理', ''),
(68, '20211220164727123', ' 35@', ' 1@', 'jjjjj', '广东科技学院', '11111111111', '2021-12-20 16:47:27', '1478963', '未做如何处理', '');

-- --------------------------------------------------------

--
-- 表的结构 `tb_shangpin`
--

DROP TABLE IF EXISTS `tb_shangpin`;
CREATE TABLE IF NOT EXISTS `tb_shangpin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mingcheng` char(65) NOT NULL,
  `jianjie` mediumtext NOT NULL,
  `addtime` date NOT NULL,
  `xinghao` char(50) DEFAULT NULL,
  `tupian` blob NOT NULL,
  `shuliang` int(4) DEFAULT NULL,
  `cishu` int(4) DEFAULT NULL,
  `tuijian` int(4) DEFAULT NULL,
  `typeid` int(4) DEFAULT NULL,
  `pinpai` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_shangpin`
--

INSERT INTO `tb_shangpin` (`id`, `mingcheng`, `jianjie`, `addtime`, `xinghao`, `tupian`, `shuliang`, `cishu`, `tuijian`, `typeid`, `pinpai`) VALUES
(35, 'CHANEL 香奈儿奢华精萃黑金砖套组 修护', '10810', '2021-12-20', '1', 0x696d616765732f676f6f64732f622e6a7067, 1, 1, 1, 1, 'CHANE'),
(36, 'CHANEL 香奈儿山茶花润泽明星套装 洗面奶', '2180', '2021-12-20', '1', 0x696d616765732f676f6f64732f632e6a7067, 1, 1, 1, 1, 'CHANE'),
(34, 'CHANE 嘉柏丽尔发香喷雾', '460', '2021-12-20', '1', 0x696d616765732f676f6f64732f612e6a7067, 1, 1, 1, 1, 'CHANE'),
(42, 'Ralph Lauren/拉夫劳伦 小熊蓝马球男士淡香水海洋调', '970', '2021-12-20', '1', 0x696d616765732f676f6f64732f6b2e6a7067, 1, 1, 1, 1, 'Armani'),
(41, 'HR赫莲娜黑绷带白绷带面霜修护舒缓保湿紧致抗老', '6760', '2021-12-20', '1', 0x696d616765732f676f6f64732f682e6a7067, 1, 1, 1, 1, 'hr'),
(40, 'Armani/阿玛尼时刻无瑕礼盒唇釉红管番茄气垫彩妆', '2970', '2021-12-20', '1', 0x696d616765732f676f6f64732f692e6a7067, 1, 1, 1, 1, 'cpb'),
(39, '肌肤之钥CPB面霜 金致乳霜修护滋养锁水保湿面霜', '4500', '2021-12-20', '1', 0x696d616765732f676f6f64732f662e6a7067, 1, 1, 1, 1, 'cpb'),
(38, 'CL路铂廷女王权杖唇膏唇釉双支装礼盒礼物萝卜丁口红', '1665', '2021-12-20', '1', 0x696d616765732f676f6f64732f652e6a7067, 1, 1, 1, 1, 'cl'),
(37, 'CHANEL 香奈儿炫亮魅力唇膏丝绒系列哑光口红58 57', '350', '2021-12-20', '1', 0x696d616765732f676f6f64732f642e6a7067, 1, 1, 1, 1, 'CHANE');

-- --------------------------------------------------------

--
-- 表的结构 `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `uid` int(11) NOT NULL,
  `username` char(25) DEFAULT NULL,
  `password` char(50) NOT NULL,
  `sfzh` char(25) DEFAULT NULL,
  `tel` char(25) DEFAULT NULL,
  `dizhi` char(100) DEFAULT NULL,
  `truenam` char(25) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_user`
--

INSERT INTO `tb_user` (`uid`, `username`, `password`, `sfzh`, `tel`, `dizhi`, `truenam`) VALUES
(123456, NULL, '123456', NULL, NULL, NULL, NULL),
(1478963, 'lin', '1478963', '11111111111', '11111111111', '广东科技学院', 'jjjjj'),
(777777, '小二', '123457', '441881200106219688', '15917609024', '广东科技学院', '黄二');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- -----------------------------
-- Think MySQL Data Transfer 
-- 
-- Host     : 127.0.0.1
-- Port     : 
-- Database : tpshop
-- 
-- Part : #1
-- Date : 2019-05-03 19:57:55
-- -----------------------------

SET FOREIGN_KEY_CHECKS = 0;


-- -----------------------------
-- Table structure for `tp_article`
-- -----------------------------
DROP TABLE IF EXISTS `tp_article`;
CREATE TABLE `tp_article` (
  `ar_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章ID',
  `ar_title` varchar(20) NOT NULL COMMENT '标题',
  `ar_keywords` varchar(100) NOT NULL COMMENT '关键词',
  `ar_description` varchar(150) NOT NULL COMMENT '描述',
  `ar_author` varchar(10) NOT NULL COMMENT '发起人',
  `ar_email` varchar(20) NOT NULL COMMENT '电子邮箱',
  `ar_url` varchar(50) NOT NULL COMMENT '外链',
  `ar_img` varchar(100) NOT NULL COMMENT '缩略图',
  `ar_content` longtext NOT NULL COMMENT '内容',
  `ar_top` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1顶置 0不顶置',
  `ar_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1显示 0不显示',
  `ar_cateid` smallint(6) NOT NULL COMMENT '所属栏目',
  `ar_addtime` int(10) NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`ar_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_article`
-- -----------------------------
INSERT INTO `tp_article` VALUES ('17', '售后流程', '', '', '', '', '', '20180429\\281efeb22e3dccd1c74cfd6166d012e9.jpg', '<p>售后流程<br/></p>', '0', '1', '3', '1555213229');
INSERT INTO `tp_article` VALUES ('18', '购物流程', '', '', '', '', '', '', '<p>购物流程</p><p><img src=\"/static/ueditor/image/20180502/1525263020139255.jpg\" style=\"\" title=\"1525263020139255.jpg\"/></p>', '0', '1', '3', '1555213253');
INSERT INTO `tp_article` VALUES ('19', '订购方式', '', '', '', '', '', '', '<p>订购方式<br/></p>', '0', '1', '3', '1555213489');
INSERT INTO `tp_article` VALUES ('20', '货到付款区域', '', '', '', '', '', '', '<p>货到付款区域</p>', '0', '1', '4', '1555213535');
INSERT INTO `tp_article` VALUES ('21', '配送支付智能查询', '', '', '', '', '', '', '<p>配送支付智能查询</p>', '0', '1', '4', '1555213550');
INSERT INTO `tp_article` VALUES ('22', '支付方式说明', '', '', '', '', '', '', '<p>支付方式说明</p>', '0', '1', '4', '1555213562');
INSERT INTO `tp_article` VALUES ('23', '资金管理', '', '', '', '', '', '', '<p>资金管理</p>', '0', '1', '5', '1555213572');
INSERT INTO `tp_article` VALUES ('24', '我的收藏', '', '', '', '', '', '', '<p>我的收藏</p>', '0', '1', '5', '1555213581');
INSERT INTO `tp_article` VALUES ('25', '我的订单', '', '', '', '', '', '', '<p>我的订单</p>', '0', '1', '5', '1555213591');
INSERT INTO `tp_article` VALUES ('26', '退换货原则', '', '', '', '', '', '', '<p>退换货原则</p>', '0', '1', '10', '1555213601');
INSERT INTO `tp_article` VALUES ('27', '售后服务保证', '', '', '', '', '', '', '<p>售后服务保证</p>', '0', '1', '10', '1555213611');
INSERT INTO `tp_article` VALUES ('28', '产品质量保证', '', '', '', '', '', '', '<p>产品质量保证</p>', '0', '1', '10', '1555213621');
INSERT INTO `tp_article` VALUES ('29', '网站故障报告', '', '', '', '', '', '', '<p>网站故障报告</p>', '0', '1', '11', '1555213632');
INSERT INTO `tp_article` VALUES ('30', '选机咨询', '', '', '', '', '', '', '<p>选机咨询</p>', '0', '1', '11', '1555213642');
INSERT INTO `tp_article` VALUES ('31', '投诉与建议', '', '', '', '', 'http://www.baidu.com', '', '<p>投诉与建议</p>', '0', '1', '11', '1555234824');
INSERT INTO `tp_article` VALUES ('32', '隐私保护 ', '', '', '', '', '', '', '<p>隐私保护 <br/>隐私保护 <br/>隐私保护 <br/>隐私保护 <br/><br/></p>', '0', '1', '24', '1555846252');
INSERT INTO `tp_article` VALUES ('33', '联系我们', '', '', '', '', '', '', '<p>联系我们联系我们联系我们联系我们联系我们</p>', '0', '1', '24', '1555846280');
INSERT INTO `tp_article` VALUES ('34', '免责条款', '', '', '', '', '', '', '<p>免责条款免责条款免责条款免责条款</p>', '0', '1', '24', '1555846300');
INSERT INTO `tp_article` VALUES ('35', '公司简介', '', '', '', '', '', '', '<p><a target=\"_black\" href=\"http://m.com/\"></a>公司简介公司简介公司简介公司简介公司简介</p>', '0', '1', '24', '1555846321');
INSERT INTO `tp_article` VALUES ('36', '意见反馈', '', '', '', '', '', '', '<p>意见反馈意见反馈意见反馈意见反馈</p>', '0', '1', '24', '1555846342');

-- -----------------------------
-- Table structure for `tp_attr`
-- -----------------------------
DROP TABLE IF EXISTS `tp_attr`;
CREATE TABLE `tp_attr` (
  `attr_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `attr_name` varchar(30) NOT NULL COMMENT '属性名称',
  `attr_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '属性类型：1单选2唯一',
  `attr_default` varchar(255) NOT NULL COMMENT '属性值',
  `attr_typeid` smallint(6) NOT NULL COMMENT '所属类型',
  PRIMARY KEY (`attr_id`),
  KEY `attr_typeid` (`attr_typeid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_attr`
-- -----------------------------
INSERT INTO `tp_attr` VALUES ('1', 'T恤', '1', '1,2,3,4,5', '1');
INSERT INTO `tp_attr` VALUES ('2', 'T恤1', '1', '1,2,3', '1');
INSERT INTO `tp_attr` VALUES ('3', '裙子1', '1', ' 黑色,白色,红色', '2');
INSERT INTO `tp_attr` VALUES ('4', 'gg', '1', '1,2,4', '1');
INSERT INTO `tp_attr` VALUES ('5', '衬衣', '2', '', '2');
INSERT INTO `tp_attr` VALUES ('6', '硬盘', '1', '512g,256g,128g', '3');
INSERT INTO `tp_attr` VALUES ('7', '内存', '2', '', '3');
INSERT INTO `tp_attr` VALUES ('8', 'T恤', '2', '', '2');
INSERT INTO `tp_attr` VALUES ('9', '颜色', '1', '黑色,白色,红色', '3');
INSERT INTO `tp_attr` VALUES ('11', 'cpu', '2', '奔腾,酷睿,AMD', '3');

-- -----------------------------
-- Table structure for `tp_brand`
-- -----------------------------
DROP TABLE IF EXISTS `tp_brand`;
CREATE TABLE `tp_brand` (
  `brand_id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(60) NOT NULL,
  `brand_url` varchar(60) NOT NULL,
  `brand_img` varchar(100) NOT NULL,
  `brand_description` varchar(255) NOT NULL,
  `brand_sort` smallint(6) NOT NULL DEFAULT '50',
  `brand_status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_brand`
-- -----------------------------
INSERT INTO `tp_brand` VALUES ('12', '苹果', 'http://vvvw.apple.com', '20180430\\433c47e217de338727a55db133f9833b.jpg', 'http://vvvw.apple.com', '50', '1');
INSERT INTO `tp_brand` VALUES ('13', 'air jordan', 'http://aj', '20190317\\48b140c4976ce51313e0653bde9720d9.jpg', '2222222', '50', '1');

-- -----------------------------
-- Table structure for `tp_cate`
-- -----------------------------
DROP TABLE IF EXISTS `tp_cate`;
CREATE TABLE `tp_cate` (
  `cate_id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '栏目ID',
  `cate_name` varchar(20) NOT NULL COMMENT '栏目名称',
  `cate_type` tinyint(1) NOT NULL DEFAULT '5' COMMENT '栏目类型：1系统分类 2帮助分类 3网店帮助 4网店信息 5普通分类',
  `cate_keywords` varchar(100) NOT NULL COMMENT '栏目关键词',
  `cate_description` varchar(150) NOT NULL COMMENT '栏目描述',
  `cate_shownav` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否显示到导航栏',
  `cate_sort` smallint(6) NOT NULL DEFAULT '50' COMMENT '排序',
  `cate_pid` tinyint(1) NOT NULL DEFAULT '0' COMMENT '上级栏目ID',
  `cate_son` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1是 0 否   是否允许添加子栏目',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_cate`
-- -----------------------------
INSERT INTO `tp_cate` VALUES ('1', '系统', '1', '', '', '1', '1', '0', '1');
INSERT INTO `tp_cate` VALUES ('2', '网店帮助分类', '2', '', '', '1', '10', '1', '1');
INSERT INTO `tp_cate` VALUES ('3', '新手上路', '3', '', '', '1', '11', '2', '0');
INSERT INTO `tp_cate` VALUES ('4', '配送与支付', '3', '', '', '1', '12', '2', '0');
INSERT INTO `tp_cate` VALUES ('5', '会员中心', '3', '', '', '1', '13', '2', '0');
INSERT INTO `tp_cate` VALUES ('10', '服务保证', '3', '', '', '1', '14', '2', '1');
INSERT INTO `tp_cate` VALUES ('11', '联系我们', '3', '', '', '1', '15', '2', '1');
INSERT INTO `tp_cate` VALUES ('12', '3G资讯', '5', '', '', '1', '20', '0', '1');
INSERT INTO `tp_cate` VALUES ('13', '站内快讯', '5', '', '', '1', '30', '0', '1');
INSERT INTO `tp_cate` VALUES ('14', '商城公告', '5', '', '', '1', '40', '0', '1');
INSERT INTO `tp_cate` VALUES ('15', '商家入驻流程说明', '5', '', '', '1', '50', '0', '1');
INSERT INTO `tp_cate` VALUES ('16', '商家入驻商家说明', '5', '', '', '1', '60', '0', '1');
INSERT INTO `tp_cate` VALUES ('17', 'App', '5', '', '', '1', '70', '0', '1');
INSERT INTO `tp_cate` VALUES ('18', '发票问题', '5', '', '', '1', '80', '0', '1');
INSERT INTO `tp_cate` VALUES ('19', '公告', '5', '', '', '1', '90', '0', '1');
INSERT INTO `tp_cate` VALUES ('20', '促销', '5', '', '', '1', '100', '0', '1');
INSERT INTO `tp_cate` VALUES ('21', '微分销', '5', '', '', '1', '110', '0', '1');
INSERT INTO `tp_cate` VALUES ('22', 'ios', '5', '', '', '1', '71', '17', '1');
INSERT INTO `tp_cate` VALUES ('23', 'android', '5', '', '', '1', '72', '17', '1');
INSERT INTO `tp_cate` VALUES ('24', '网站信息', '4', '', '', '1', '50', '0', '1');

-- -----------------------------
-- Table structure for `tp_cates`
-- -----------------------------
DROP TABLE IF EXISTS `tp_cates`;
CREATE TABLE `tp_cates` (
  `cates_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `cates_name` varchar(30) NOT NULL COMMENT '商品分类名称',
  `cates_img` varchar(150) NOT NULL COMMENT '栏目banner',
  `cates_keywords` varchar(50) NOT NULL COMMENT '关键词',
  `cates_description` varchar(150) NOT NULL COMMENT '描述',
  `cates_showcates` smallint(5) unsigned NOT NULL DEFAULT '1' COMMENT '1显示0隐藏',
  `cates_sort` smallint(6) NOT NULL DEFAULT '50' COMMENT '排序',
  `cates_pid` smallint(6) NOT NULL DEFAULT '0' COMMENT '上级栏目id',
  PRIMARY KEY (`cates_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_cates`
-- -----------------------------
INSERT INTO `tp_cates` VALUES ('3', '数码', '', '到底', '的', '0', '50', '0');
INSERT INTO `tp_cates` VALUES ('11', '笔记本', '20180519\\59d379bf1168a2b32e49c23b946505c3.jpg', '啊啊', '啊啊', '1', '50', '3');

-- -----------------------------
-- Table structure for `tp_conf`
-- -----------------------------
DROP TABLE IF EXISTS `tp_conf`;
CREATE TABLE `tp_conf` (
  `conf_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `conf_ename` varchar(30) NOT NULL COMMENT '英文名称',
  `conf_cname` varchar(30) NOT NULL COMMENT '中文名称',
  `conf_formtype` varchar(10) NOT NULL DEFAULT 'input' COMMENT '表单类型',
  `conf_conftype` tinyint(4) NOT NULL DEFAULT '1' COMMENT '配置类型 1店铺配置 2 商品配置',
  `conf_values` varchar(60) NOT NULL COMMENT '可选值',
  `conf_default` varchar(255) NOT NULL COMMENT '默认值',
  `conf_sort` varchar(255) NOT NULL DEFAULT '50',
  PRIMARY KEY (`conf_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_conf`
-- -----------------------------
INSERT INTO `tp_conf` VALUES ('1', 'webname', '站点名称', 'input', '1', '', 'tt', '50');
INSERT INTO `tp_conf` VALUES ('2', 'keywords', '站点关键词', 'input', '1', '', 'tt', '50');
INSERT INTO `tp_conf` VALUES ('3', 'description', '站点描述', 'textarea', '1', '', 'tt', '50');
INSERT INTO `tp_conf` VALUES ('4', 'web-yesno', '关闭站点', 'radio', '1', '是,否', '是', '50');
INSERT INTO `tp_conf` VALUES ('5', 'twowm', '二维码', 'file', '1', '', '20180512\\e57c75af1ac691724867cd1658193b60.jpg', '50');
INSERT INTO `tp_conf` VALUES ('6', 'LOGO', '网站LOGO', 'file', '1', '', '', '50');
INSERT INTO `tp_conf` VALUES ('7', 'huiyuan', '会员注册', 'select', '1', '启动,关闭', '关闭', '50');
INSERT INTO `tp_conf` VALUES ('8', 'selection', '多选测试', 'checkbox', '1', '选项1,选项2,选项3,选项4', '选项4', '50');
INSERT INTO `tp_conf` VALUES ('9', 'search_keywords', '搜索关键词', 'textarea', '1', '', '周大福,内衣,Five Plus,手机', '50');
INSERT INTO `tp_conf` VALUES ('10', 'search_value', '搜索框默认值', 'input', '1', '', '内衣111', '50');
INSERT INTO `tp_conf` VALUES ('11', 'banquan', '版权所有', 'textarea', '1', '', '© 2015-2017 tongpankt.com 版权所有', '50');
INSERT INTO `tp_conf` VALUES ('12', 'icpbenan', 'ICP备案名称', 'textarea', '1', '', 'ICP备案证书号:', '50');
INSERT INTO `tp_conf` VALUES ('13', 'icp', 'ICP备案证书号', 'textarea', '1', '', '豫ICP备*****号-1', '50');
INSERT INTO `tp_conf` VALUES ('14', 'powered', '网站作者', 'textarea', '1', '', 'POWERED by童攀课堂', '50');

-- -----------------------------
-- Table structure for `tp_goods`
-- -----------------------------
DROP TABLE IF EXISTS `tp_goods`;
CREATE TABLE `tp_goods` (
  `gs_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `gs_name` varchar(50) NOT NULL COMMENT '商品名称',
  `gs_code` char(16) NOT NULL COMMENT '商品编号',
  `gs_img` varchar(100) NOT NULL COMMENT '原图',
  `gs_smimg` varchar(100) NOT NULL COMMENT '小缩略图',
  `gs_midimg` varchar(100) NOT NULL COMMENT '中缩略图',
  `gs_bigimg` varchar(100) NOT NULL COMMENT '大缩略图',
  `gs_marktep` decimal(10,2) NOT NULL COMMENT '市场价',
  `gs_shopp` decimal(10,2) NOT NULL COMMENT '本店价',
  `gs_onsale` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否上架 1上架0 下架',
  `gs_shopcateid` mediumint(9) NOT NULL COMMENT '所属栏目',
  `gs_brandid` mediumint(9) NOT NULL DEFAULT '0' COMMENT '所属品牌',
  `gs_typeid` mediumint(9) NOT NULL DEFAULT '0' COMMENT '所属类型',
  `gs_des` longtext NOT NULL COMMENT '描述',
  `gs_weight` decimal(10,2) NOT NULL COMMENT '重量',
  `gs_unit` varchar(10) NOT NULL DEFAULT 'kg' COMMENT '单位',
  PRIMARY KEY (`gs_id`),
  KEY `gs_brandid` (`gs_brandid`),
  KEY `gs_shopcateid` (`gs_shopcateid`,`gs_brandid`,`gs_typeid`) USING BTREE,
  KEY `gs_typeid` (`gs_typeid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_goods`
-- -----------------------------
INSERT INTO `tp_goods` VALUES ('56', 'efdg', '155341789534195', '', '', '', '', '0.00', '0.00', '0', '3', '12', '3', '', '0.00', 'kg');
INSERT INTO `tp_goods` VALUES ('49', '测试4', '155221168628211', '20190310\\d3e326b94171cada1b33ebb2b5498121.png', '20190310\\sm_d3e326b94171cada1b33ebb2b5498121.png', '20190310\\mid_d3e326b94171cada1b33ebb2b5498121.png', '20190310\\big_d3e326b94171cada1b33ebb2b5498121.png', '333.00', '33.00', '0', '3', '12', '3', '<p>3333<br/></p>', '33.00', 'kg');
INSERT INTO `tp_goods` VALUES ('50', '测试5', '155221183385804', '20190317\\3b953f035391a5aacf2b47c508114267.jpg', '20190317\\sm_3b953f035391a5aacf2b47c508114267.jpg', '20190317\\mid_3b953f035391a5aacf2b47c508114267.jpg', '20190317\\big_3b953f035391a5aacf2b47c508114267.jpg', '111.00', '11.00', '0', '3', '12', '3', '<p>111<br/></p>', '111.00', 'g');
INSERT INTO `tp_goods` VALUES ('51', '测试5', '155339655578249', '', '', '', '', '333.00', '33.00', '1', '11', '12', '0', '<p>333<br/></p>', '33.00', 'kg');
INSERT INTO `tp_goods` VALUES ('52', '测试6', '155339696481483', '', '', '', '', '333.00', '33.00', '0', '3', '12', '0', '<p>666<br/></p>', '33.00', 'kg');
INSERT INTO `tp_goods` VALUES ('53', '45343434', '155339731142955', '', '', '', '', '44343.00', '3443.00', '0', '3', '12', '0', '<p>34<br/></p>', '3434.00', 'kg');
INSERT INTO `tp_goods` VALUES ('54', '7777', '155339951940885', '', '', '', '', '666.00', '66.00', '0', '3', '12', '3', '<p>666<br/></p>', '66.00', 'kg');
INSERT INTO `tp_goods` VALUES ('55', 'dgfdfds', '155340610441916', '', '', '', '', '0.00', '444.00', '0', '11', '12', '3', '<p>444<br/></p>', '444.00', 'kg');
INSERT INTO `tp_goods` VALUES ('57', '2423423432', '155677350848874', '', '', '', '', '45654.00', '5645.00', '0', '3', '12', '0', '', '45645.00', 'kg');
INSERT INTO `tp_goods` VALUES ('58', '43444', '155677729881613', '', '', '', '', '44.00', '343.00', '1', '3', '0', '0', '', '33.00', 'kg');
INSERT INTO `tp_goods` VALUES ('59', '43444', '155677732554359', '', '', '', '', '44.00', '343.00', '0', '3', '0', '0', '', '33.00', 'kg');
INSERT INTO `tp_goods` VALUES ('60', '43444', '155677739071147', '', '', '', '', '44.00', '343.00', '0', '3', '0', '0', '', '33.00', 'kg');

-- -----------------------------
-- Table structure for `tp_goods_attr`
-- -----------------------------
DROP TABLE IF EXISTS `tp_goods_attr`;
CREATE TABLE `tp_goods_attr` (
  `gsattr_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `gsattr_attrid` mediumint(9) NOT NULL COMMENT '属性id',
  `gsattr_value` varchar(60) NOT NULL COMMENT '属性值',
  `gsattr_price` decimal(10,2) NOT NULL COMMENT '属性价格',
  `gsattr_goodsid` mediumint(9) NOT NULL COMMENT '所属商品',
  PRIMARY KEY (`gsattr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_goods_attr`
-- -----------------------------
INSERT INTO `tp_goods_attr` VALUES ('78', '6', '256g', '0.00', '56');
INSERT INTO `tp_goods_attr` VALUES ('51', '6', '512g', '1123.00', '49');
INSERT INTO `tp_goods_attr` VALUES ('52', '6', '256g', '1123.00', '49');
INSERT INTO `tp_goods_attr` VALUES ('53', '7', '111', '111.00', '49');
INSERT INTO `tp_goods_attr` VALUES ('54', '9', '黑色', '111.00', '49');
INSERT INTO `tp_goods_attr` VALUES ('55', '9', '白色', '111.00', '49');
INSERT INTO `tp_goods_attr` VALUES ('56', '6', '512g', '100.00', '50');
INSERT INTO `tp_goods_attr` VALUES ('57', '6', '256g', '200.00', '50');
INSERT INTO `tp_goods_attr` VALUES ('58', '9', '黑色', '100.00', '50');
INSERT INTO `tp_goods_attr` VALUES ('59', '9', '白色', '100.00', '50');
INSERT INTO `tp_goods_attr` VALUES ('60', '6', '512g', '33.00', '51');
INSERT INTO `tp_goods_attr` VALUES ('61', '7', '333', '0.00', '51');
INSERT INTO `tp_goods_attr` VALUES ('62', '9', '黑色', '333.00', '51');
INSERT INTO `tp_goods_attr` VALUES ('63', '6', '512g', '666.00', '52');
INSERT INTO `tp_goods_attr` VALUES ('64', '7', '66', '0.00', '52');
INSERT INTO `tp_goods_attr` VALUES ('65', '9', '黑色', '66.00', '52');
INSERT INTO `tp_goods_attr` VALUES ('66', '1', '1', '344343.00', '53');
INSERT INTO `tp_goods_attr` VALUES ('67', '2', '2', '3434.00', '53');
INSERT INTO `tp_goods_attr` VALUES ('68', '4', '4', '343.00', '53');
INSERT INTO `tp_goods_attr` VALUES ('69', '6', '512g', '666.00', '54');
INSERT INTO `tp_goods_attr` VALUES ('70', '7', '66', '0.00', '54');
INSERT INTO `tp_goods_attr` VALUES ('71', '9', '黑色', '6.00', '54');
INSERT INTO `tp_goods_attr` VALUES ('72', '6', '512g', '55465.00', '55');
INSERT INTO `tp_goods_attr` VALUES ('73', '6', '256g', '456.00', '55');
INSERT INTO `tp_goods_attr` VALUES ('75', '7', '456', '0.00', '55');
INSERT INTO `tp_goods_attr` VALUES ('76', '9', '黑色', '5546.00', '55');
INSERT INTO `tp_goods_attr` VALUES ('77', '11', 'AMD', '0.00', '55');

-- -----------------------------
-- Table structure for `tp_goods_img`
-- -----------------------------
DROP TABLE IF EXISTS `tp_goods_img`;
CREATE TABLE `tp_goods_img` (
  `img_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `img_goodsid` mediumint(9) NOT NULL COMMENT '所属商品',
  `img_img` varchar(100) NOT NULL,
  `img_smimg` varchar(100) NOT NULL COMMENT '小图',
  `img_midimg` varchar(100) NOT NULL COMMENT '中图',
  `img_bigimg` varchar(100) NOT NULL COMMENT '大图',
  PRIMARY KEY (`img_id`),
  KEY `img_goodsid` (`img_goodsid`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;


-- -----------------------------
-- Table structure for `tp_link`
-- -----------------------------
DROP TABLE IF EXISTS `tp_link`;
CREATE TABLE `tp_link` (
  `link_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '链接ID',
  `link_title` varchar(30) NOT NULL COMMENT '链接标题',
  `link_url` varchar(60) NOT NULL COMMENT '链接url',
  `link_logo` varchar(100) NOT NULL COMMENT '链接logo',
  `link_description` varchar(255) NOT NULL COMMENT '链接描述',
  `link_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '类型：1文字 2 图片',
  `link_status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1显示 0禁用',
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_link`
-- -----------------------------
INSERT INTO `tp_link` VALUES ('1', 'qweqwe', 'http://ddd2222', '20180502\\f2822a14a8d9594010703858904be25e.jpg', 'ddd', '1', '1');
INSERT INTO `tp_link` VALUES ('2', 'dsgfsdgf', 'http://sdgfdgdf', '', 'dfgdfgdf', '1', '0');

-- -----------------------------
-- Table structure for `tp_member_level`
-- -----------------------------
DROP TABLE IF EXISTS `tp_member_level`;
CREATE TABLE `tp_member_level` (
  `level_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(30) NOT NULL COMMENT '级别名称',
  `level_bompoint` int(11) NOT NULL COMMENT '积分下限',
  `level_toppoint` int(11) NOT NULL COMMENT '积分上限',
  `level_rate` tinyint(3) unsigned NOT NULL COMMENT '折扣率',
  PRIMARY KEY (`level_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_member_level`
-- -----------------------------
INSERT INTO `tp_member_level` VALUES ('1', '注册会员', '0', '10000', '10');
INSERT INTO `tp_member_level` VALUES ('2', '中级会员', '10001', '30000', '8');
INSERT INTO `tp_member_level` VALUES ('3', '高级会员', '30001', '40000', '7');
INSERT INTO `tp_member_level` VALUES ('4', 'VIP会员', '40001', '50000', '6');

-- -----------------------------
-- Table structure for `tp_member_price`
-- -----------------------------
DROP TABLE IF EXISTS `tp_member_price`;
CREATE TABLE `tp_member_price` (
  `price_id` int(11) NOT NULL AUTO_INCREMENT,
  `price_mpprice` decimal(10,2) NOT NULL COMMENT '会员价格',
  `price_mlevelid` smallint(6) NOT NULL COMMENT '会员级别',
  `price_goodsid` int(11) NOT NULL COMMENT '商品',
  PRIMARY KEY (`price_id`)
) ENGINE=MyISAM AUTO_INCREMENT=120 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_member_price`
-- -----------------------------
INSERT INTO `tp_member_price` VALUES ('87', '3.00', '4', '49');
INSERT INTO `tp_member_price` VALUES ('86', '33.00', '3', '49');
INSERT INTO `tp_member_price` VALUES ('85', '333.00', '2', '49');
INSERT INTO `tp_member_price` VALUES ('84', '3333.00', '1', '49');
INSERT INTO `tp_member_price` VALUES ('99', '1.00', '4', '50');
INSERT INTO `tp_member_price` VALUES ('98', '11.00', '3', '50');
INSERT INTO `tp_member_price` VALUES ('97', '111.00', '2', '50');
INSERT INTO `tp_member_price` VALUES ('96', '1111.00', '1', '50');
INSERT INTO `tp_member_price` VALUES ('100', '3333.00', '1', '51');
INSERT INTO `tp_member_price` VALUES ('101', '333.00', '2', '51');
INSERT INTO `tp_member_price` VALUES ('102', '33.00', '3', '51');
INSERT INTO `tp_member_price` VALUES ('103', '3.00', '4', '51');
INSERT INTO `tp_member_price` VALUES ('104', '3333.00', '1', '52');
INSERT INTO `tp_member_price` VALUES ('105', '333.00', '2', '52');
INSERT INTO `tp_member_price` VALUES ('106', '33.00', '3', '52');
INSERT INTO `tp_member_price` VALUES ('107', '3.00', '4', '52');
INSERT INTO `tp_member_price` VALUES ('108', '4343.00', '1', '53');
INSERT INTO `tp_member_price` VALUES ('109', '343.00', '2', '53');
INSERT INTO `tp_member_price` VALUES ('110', '343.00', '3', '53');
INSERT INTO `tp_member_price` VALUES ('111', '34.00', '4', '53');
INSERT INTO `tp_member_price` VALUES ('112', '655.00', '1', '54');
INSERT INTO `tp_member_price` VALUES ('113', '6565.00', '2', '54');
INSERT INTO `tp_member_price` VALUES ('114', '56.00', '3', '54');
INSERT INTO `tp_member_price` VALUES ('115', '5.00', '4', '54');
INSERT INTO `tp_member_price` VALUES ('116', '4354.00', '1', '55');
INSERT INTO `tp_member_price` VALUES ('117', '345.00', '2', '55');
INSERT INTO `tp_member_price` VALUES ('118', '345.00', '3', '55');
INSERT INTO `tp_member_price` VALUES ('119', '34.00', '4', '55');

-- -----------------------------
-- Table structure for `tp_nav`
-- -----------------------------
DROP TABLE IF EXISTS `tp_nav`;
CREATE TABLE `tp_nav` (
  `nav_id` smallint(11) NOT NULL AUTO_INCREMENT,
  `nav_name` varchar(30) NOT NULL COMMENT '导航名称',
  `nav_url` varchar(30) NOT NULL COMMENT '导航地址',
  `nav_open` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1：新标签 2：当前页',
  `nav_pos` varchar(6) NOT NULL COMMENT '顶部：top 中间：mid 底部：bottom',
  `nav_sort` varchar(50) NOT NULL DEFAULT '50' COMMENT '排序',
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_nav`
-- -----------------------------
INSERT INTO `tp_nav` VALUES ('1', '我的订单', '', '2', 'top', '2');
INSERT INTO `tp_nav` VALUES ('2', '我的浏览', '', '2', 'top', '2');
INSERT INTO `tp_nav` VALUES ('3', '我的收藏', '', '2', 'top', '3');
INSERT INTO `tp_nav` VALUES ('4', '客户服务', '', '2', 'top', '4');
INSERT INTO `tp_nav` VALUES ('5', '女装街', '', '1', 'mid', '10');
INSERT INTO `tp_nav` VALUES ('6', '男人柜', '', '1', 'mid', '11');
INSERT INTO `tp_nav` VALUES ('7', '品牌专区', '', '1', 'mid', '12');
INSERT INTO `tp_nav` VALUES ('8', '聚划算', '', '1', 'mid', '13');
INSERT INTO `tp_nav` VALUES ('9', '积分商城', '', '1', 'mid', '14');
INSERT INTO `tp_nav` VALUES ('10', '隐私保护', '', '1', 'bottom', '50');
INSERT INTO `tp_nav` VALUES ('11', '联系我们', '', '1', 'bottom', '50');
INSERT INTO `tp_nav` VALUES ('12', '免责条款', '', '1', 'bottom', '50');
INSERT INTO `tp_nav` VALUES ('13', '公司简介', '', '1', 'bottom', '50');
INSERT INTO `tp_nav` VALUES ('14', '意见反馈', '', '1', 'bottom', '50');

-- -----------------------------
-- Table structure for `tp_product`
-- -----------------------------
DROP TABLE IF EXISTS `tp_product`;
CREATE TABLE `tp_product` (
  `prod_id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '库存量ID',
  `prod_goods_id` mediumint(9) NOT NULL COMMENT '所属商品',
  `prod_goods_num` int(11) NOT NULL COMMENT '库存量',
  `prod_goods_attr` varchar(20) NOT NULL COMMENT '商品属性',
  PRIMARY KEY (`prod_id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_product`
-- -----------------------------
INSERT INTO `tp_product` VALUES ('49', '49', '100', '52,55');
INSERT INTO `tp_product` VALUES ('48', '49', '520', '51,54');
INSERT INTO `tp_product` VALUES ('47', '48', '100', '47,49');
INSERT INTO `tp_product` VALUES ('46', '48', '100', '47,50');
INSERT INTO `tp_product` VALUES ('45', '48', '100', '48,49');
INSERT INTO `tp_product` VALUES ('44', '48', '200', '48,50');

-- -----------------------------
-- Table structure for `tp_recpos`
-- -----------------------------
DROP TABLE IF EXISTS `tp_recpos`;
CREATE TABLE `tp_recpos` (
  `rec_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `rec_name` varchar(60) NOT NULL COMMENT '推荐位名称',
  `rec_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '推荐位类型 1：商品 2：分类',
  PRIMARY KEY (`rec_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_recpos`
-- -----------------------------
INSERT INTO `tp_recpos` VALUES ('1', '限时抢购', '1');
INSERT INTO `tp_recpos` VALUES ('2', '热卖商品', '1');
INSERT INTO `tp_recpos` VALUES ('3', '最新商品', '1');
INSERT INTO `tp_recpos` VALUES ('4', '首页推荐', '2');
INSERT INTO `tp_recpos` VALUES ('5', '商品分类', '2');

-- -----------------------------
-- Table structure for `tp_recpos_item`
-- -----------------------------
DROP TABLE IF EXISTS `tp_recpos_item`;
CREATE TABLE `tp_recpos_item` (
  `recpos_id` smallint(5) unsigned NOT NULL,
  `value_id` smallint(3) unsigned NOT NULL,
  `value_type` tinyint(3) unsigned NOT NULL COMMENT '1：商品2：商品分类'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_recpos_item`
-- -----------------------------
INSERT INTO `tp_recpos_item` VALUES ('2', '60', '1');
INSERT INTO `tp_recpos_item` VALUES ('1', '60', '1');
INSERT INTO `tp_recpos_item` VALUES ('4', '12', '2');
INSERT INTO `tp_recpos_item` VALUES ('3', '60', '1');
INSERT INTO `tp_recpos_item` VALUES ('3', '59', '1');

-- -----------------------------
-- Table structure for `tp_shopcate`
-- -----------------------------
DROP TABLE IF EXISTS `tp_shopcate`;
CREATE TABLE `tp_shopcate` (
  `shopcate_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `shopcate_name` varchar(30) NOT NULL COMMENT '商品分类名称',
  `shopcate_img` varchar(150) NOT NULL COMMENT '栏目banner',
  `shopcate_keywords` varchar(50) NOT NULL COMMENT '关键词',
  `shopcate_description` varchar(150) NOT NULL COMMENT '描述',
  `shopcate_showshopcate` smallint(5) unsigned NOT NULL DEFAULT '1' COMMENT '1显示0隐藏',
  `shopcate_sort` smallint(6) NOT NULL DEFAULT '50' COMMENT '排序',
  `shopcate_pid` smallint(6) NOT NULL DEFAULT '0' COMMENT '上级栏目id',
  PRIMARY KEY (`shopcate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=520 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_shopcate`
-- -----------------------------
INSERT INTO `tp_shopcate` VALUES ('1', '家用电器', '', '', '', '1', '50', '0');
INSERT INTO `tp_shopcate` VALUES ('2', '手机 数码 通信', '', '', '', '1', '50', '0');
INSERT INTO `tp_shopcate` VALUES ('3', '电脑、办公', '', '', '', '1', '50', '0');
INSERT INTO `tp_shopcate` VALUES ('4', '家居、家具、家装、厨具', '', '', '', '1', '50', '0');
INSERT INTO `tp_shopcate` VALUES ('5', '男装、女装、内衣', '', '', '', '1', '50', '0');
INSERT INTO `tp_shopcate` VALUES ('6', '鞋靴、箱包、钟表、奢侈品', '', '', '', '1', '50', '0');
INSERT INTO `tp_shopcate` VALUES ('7', '个人化妆、清洁用品', '', '', '', '1', '50', '0');
INSERT INTO `tp_shopcate` VALUES ('8', '大家电', '', '', '', '1', '50', '1');
INSERT INTO `tp_shopcate` VALUES ('9', '生活电器', '', '', '', '1', '50', '1');
INSERT INTO `tp_shopcate` VALUES ('10', '智能设备', '', '', '', '1', '50', '2');
INSERT INTO `tp_shopcate` VALUES ('11', '数码配件', '', '', '', '1', '50', '2');
INSERT INTO `tp_shopcate` VALUES ('12', '服务产品', '', '', '', '1', '50', '3');
INSERT INTO `tp_shopcate` VALUES ('13', '电脑整机', '', '', '', '1', '50', '3');
INSERT INTO `tp_shopcate` VALUES ('14', '厨具', '', '', '', '1', '50', '4');
INSERT INTO `tp_shopcate` VALUES ('15', '家装建材', '', '', '', '1', '50', '4');
INSERT INTO `tp_shopcate` VALUES ('16', '女装', '', '', '', '1', '50', '5');
INSERT INTO `tp_shopcate` VALUES ('17', '男装', '', '', '', '1', '50', '5');
INSERT INTO `tp_shopcate` VALUES ('18', '奢侈品', '', '', '', '1', '50', '6');
INSERT INTO `tp_shopcate` VALUES ('19', '功能箱包', '', '', '', '1', '50', '6');
INSERT INTO `tp_shopcate` VALUES ('20', '面部护肤', '', '', '', '1', '50', '7');
INSERT INTO `tp_shopcate` VALUES ('21', '洗发护发', '', '', '', '1', '50', '7');
INSERT INTO `tp_shopcate` VALUES ('22', '厨房电器', '', '', '', '1', '50', '1');
INSERT INTO `tp_shopcate` VALUES ('23', '个护健康', '', '', '', '1', '50', '1');
INSERT INTO `tp_shopcate` VALUES ('24', '五金家装', '', '', '', '1', '50', '1');
INSERT INTO `tp_shopcate` VALUES ('25', '平板电视', '', '', '', '1', '50', '8');
INSERT INTO `tp_shopcate` VALUES ('26', '电风扇', '', '', '', '1', '50', '9');
INSERT INTO `tp_shopcate` VALUES ('27', '电饭煲', '', '', '', '1', '50', '22');
INSERT INTO `tp_shopcate` VALUES ('28', '按摩椅', '', '', '', '1', '50', '23');
INSERT INTO `tp_shopcate` VALUES ('29', '电动工具', '', '', '', '1', '50', '24');
INSERT INTO `tp_shopcate` VALUES ('30', '手机通讯', '', '', '', '1', '50', '2');
INSERT INTO `tp_shopcate` VALUES ('31', '运营商', '', '', '', '1', '50', '2');
INSERT INTO `tp_shopcate` VALUES ('32', '手机配件', '', '', '', '1', '50', '2');
INSERT INTO `tp_shopcate` VALUES ('33', '摄影摄像', '', '', '', '1', '50', '2');
INSERT INTO `tp_shopcate` VALUES ('34', '时尚影音', '', '', '', '1', '50', '2');
INSERT INTO `tp_shopcate` VALUES ('35', '智能手环', '', '', '', '1', '50', '10');
INSERT INTO `tp_shopcate` VALUES ('36', '存储卡', '', '', '', '1', '50', '11');
INSERT INTO `tp_shopcate` VALUES ('37', '手机', '', '', '', '1', '50', '30');
INSERT INTO `tp_shopcate` VALUES ('38', '购机送费', '', '', '', '1', '50', '31');
INSERT INTO `tp_shopcate` VALUES ('39', '电池', '', '', '', '1', '50', '32');
INSERT INTO `tp_shopcate` VALUES ('40', '数码相机', '', '', '', '1', '50', '33');
INSERT INTO `tp_shopcate` VALUES ('41', '耳机/耳麦', '', '', '', '1', '50', '34');
INSERT INTO `tp_shopcate` VALUES ('42', '电脑配件', '', '', '', '1', '50', '3');
INSERT INTO `tp_shopcate` VALUES ('43', '外设产品', '', '', '', '1', '50', '3');
INSERT INTO `tp_shopcate` VALUES ('44', '网络产品', '', '', '', '1', '50', '3');
INSERT INTO `tp_shopcate` VALUES ('45', '办公打印', '', '', '', '1', '50', '3');
INSERT INTO `tp_shopcate` VALUES ('46', '上门服务', '', '', '', '1', '50', '12');
INSERT INTO `tp_shopcate` VALUES ('47', '笔记本', '', '', '', '1', '50', '13');
INSERT INTO `tp_shopcate` VALUES ('48', 'CPU', '', '', '', '1', '50', '42');
INSERT INTO `tp_shopcate` VALUES ('49', '鼠标', '', '', '', '1', '50', '43');
INSERT INTO `tp_shopcate` VALUES ('50', '路由器', '', '', '', '1', '50', '44');
INSERT INTO `tp_shopcate` VALUES ('51', '打印机', '', '', '', '1', '50', '45');
INSERT INTO `tp_shopcate` VALUES ('52', '家纺', '', '', '', '1', '50', '4');
INSERT INTO `tp_shopcate` VALUES ('53', '家具', '', '', '', '1', '50', '4');
INSERT INTO `tp_shopcate` VALUES ('54', '灯具', '', '', '', '1', '50', '4');
INSERT INTO `tp_shopcate` VALUES ('55', '生活日用', '', '', '', '1', '50', '4');
INSERT INTO `tp_shopcate` VALUES ('56', '烹饪锅具', '', '', '', '1', '50', '14');
INSERT INTO `tp_shopcate` VALUES ('57', '灯饰照明', '', '', '', '1', '50', '15');
INSERT INTO `tp_shopcate` VALUES ('58', '床品套件', '', '', '', '1', '50', '52');
INSERT INTO `tp_shopcate` VALUES ('59', '卧室家具', '', '', '', '1', '50', '53');
INSERT INTO `tp_shopcate` VALUES ('60', '台灯', '', '', '', '1', '50', '54');
INSERT INTO `tp_shopcate` VALUES ('61', '收纳用品', '', '', '', '1', '50', '55');
INSERT INTO `tp_shopcate` VALUES ('62', '服饰配件', '', '', '', '1', '50', '5');
INSERT INTO `tp_shopcate` VALUES ('63', '内衣', '', '', '', '1', '50', '5');
INSERT INTO `tp_shopcate` VALUES ('64', '运动户外', '', '', '', '1', '50', '5');
INSERT INTO `tp_shopcate` VALUES ('65', '连衣裙', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('66', 'T恤', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('67', '配饰', '', '', '', '1', '50', '62');
INSERT INTO `tp_shopcate` VALUES ('68', '内衣配件', '', '', '', '1', '50', '63');
INSERT INTO `tp_shopcate` VALUES ('69', '跑步运动', '', '', '', '1', '50', '64');
INSERT INTO `tp_shopcate` VALUES ('70', '流行男鞋', '', '', '', '1', '50', '6');
INSERT INTO `tp_shopcate` VALUES ('71', '时尚女鞋', '', '', '', '1', '50', '6');
INSERT INTO `tp_shopcate` VALUES ('72', '潮流女包', '', '', '', '1', '50', '6');
INSERT INTO `tp_shopcate` VALUES ('73', '精品男包', '', '', '', '1', '50', '6');
INSERT INTO `tp_shopcate` VALUES ('74', '钟表', '', '', '', '1', '50', '6');
INSERT INTO `tp_shopcate` VALUES ('75', '鞋靴', '', '', '', '1', '50', '18');
INSERT INTO `tp_shopcate` VALUES ('76', '拉杆箱/拉杆包', '', '', '', '1', '50', '19');
INSERT INTO `tp_shopcate` VALUES ('77', '休闲鞋', '', '', '', '1', '50', '70');
INSERT INTO `tp_shopcate` VALUES ('78', '凉鞋', '', '', '', '1', '50', '71');
INSERT INTO `tp_shopcate` VALUES ('79', '单肩包', '', '', '', '1', '50', '72');
INSERT INTO `tp_shopcate` VALUES ('80', '商务公文包', '', '', '', '1', '50', '73');
INSERT INTO `tp_shopcate` VALUES ('81', '男表', '', '', '', '1', '50', '74');
INSERT INTO `tp_shopcate` VALUES ('82', '身体护肤', '', '', '', '1', '50', '7');
INSERT INTO `tp_shopcate` VALUES ('83', '口腔护理', '', '', '', '1', '50', '7');
INSERT INTO `tp_shopcate` VALUES ('84', '香水彩妆', '', '', '', '1', '50', '7');
INSERT INTO `tp_shopcate` VALUES ('85', '女性护理', '', '', '', '1', '50', '7');
INSERT INTO `tp_shopcate` VALUES ('86', '清洁用品', '', '', '', '1', '50', '7');
INSERT INTO `tp_shopcate` VALUES ('87', '清洁', '', '', '', '1', '50', '20');
INSERT INTO `tp_shopcate` VALUES ('88', '洗发', '', '', '', '1', '50', '21');
INSERT INTO `tp_shopcate` VALUES ('89', '沐浴', '', '', '', '1', '50', '82');
INSERT INTO `tp_shopcate` VALUES ('90', '牙膏/牙粉', '', '', '', '1', '50', '83');
INSERT INTO `tp_shopcate` VALUES ('91', '香水', '', '', '', '1', '50', '84');
INSERT INTO `tp_shopcate` VALUES ('92', '卫生巾', '', '', '', '1', '50', '85');
INSERT INTO `tp_shopcate` VALUES ('93', '纸品湿巾', '', '', '', '1', '50', '86');
INSERT INTO `tp_shopcate` VALUES ('94', '空调', '', '', '', '1', '50', '8');
INSERT INTO `tp_shopcate` VALUES ('95', '冰箱', '', '', '', '1', '50', '8');
INSERT INTO `tp_shopcate` VALUES ('96', '洗衣机', '', '', '', '1', '50', '8');
INSERT INTO `tp_shopcate` VALUES ('97', '家庭影院', '', '', '', '1', '50', '8');
INSERT INTO `tp_shopcate` VALUES ('98', 'DVD', '', '', '', '1', '50', '8');
INSERT INTO `tp_shopcate` VALUES ('99', '迷你音响', '', '', '', '1', '50', '8');
INSERT INTO `tp_shopcate` VALUES ('100', '热水器', '', '', '', '1', '50', '8');
INSERT INTO `tp_shopcate` VALUES ('101', '冷吧/冰柜', '', '', '', '1', '50', '8');
INSERT INTO `tp_shopcate` VALUES ('102', '冷风扇', '', '', '', '1', '50', '9');
INSERT INTO `tp_shopcate` VALUES ('103', '净化器', '', '', '', '1', '50', '9');
INSERT INTO `tp_shopcate` VALUES ('104', '加湿器', '', '', '', '1', '50', '9');
INSERT INTO `tp_shopcate` VALUES ('105', '扫地机器人', '', '', '', '1', '50', '9');
INSERT INTO `tp_shopcate` VALUES ('106', '吸尘器', '', '', '', '1', '50', '9');
INSERT INTO `tp_shopcate` VALUES ('107', '插座', '', '', '', '1', '50', '9');
INSERT INTO `tp_shopcate` VALUES ('108', '电话机', '', '', '', '1', '50', '9');
INSERT INTO `tp_shopcate` VALUES ('109', '饮水机', '', '', '', '1', '50', '9');
INSERT INTO `tp_shopcate` VALUES ('110', '取暖电器', '', '', '', '1', '50', '9');
INSERT INTO `tp_shopcate` VALUES ('111', '净水设备', '', '', '', '1', '50', '9');
INSERT INTO `tp_shopcate` VALUES ('112', '干衣机', '', '', '', '1', '50', '9');
INSERT INTO `tp_shopcate` VALUES ('113', '收音机/录音机', '', '', '', '1', '50', '9');
INSERT INTO `tp_shopcate` VALUES ('114', '电器开关', '', '', '', '1', '50', '9');
INSERT INTO `tp_shopcate` VALUES ('115', '电压力锅', '', '', '', '1', '50', '22');
INSERT INTO `tp_shopcate` VALUES ('116', '豆浆机', '', '', '', '1', '50', '22');
INSERT INTO `tp_shopcate` VALUES ('117', '面包机', '', '', '', '1', '50', '22');
INSERT INTO `tp_shopcate` VALUES ('118', '咖啡机', '', '', '', '1', '50', '22');
INSERT INTO `tp_shopcate` VALUES ('119', '微波炉', '', '', '', '1', '50', '22');
INSERT INTO `tp_shopcate` VALUES ('120', '料理/榨汁机', '', '', '', '1', '50', '22');
INSERT INTO `tp_shopcate` VALUES ('121', '电烤箱', '', '', '', '1', '50', '22');
INSERT INTO `tp_shopcate` VALUES ('122', '电磁炉', '', '', '', '1', '50', '22');
INSERT INTO `tp_shopcate` VALUES ('123', '电饼铛/烧火盘', '', '', '', '1', '50', '22');
INSERT INTO `tp_shopcate` VALUES ('124', '煮蛋器', '', '', '', '1', '50', '22');
INSERT INTO `tp_shopcate` VALUES ('125', '酸奶机', '', '', '', '1', '50', '22');
INSERT INTO `tp_shopcate` VALUES ('126', '电水壶/热水瓶', '', '', '', '1', '50', '22');
INSERT INTO `tp_shopcate` VALUES ('127', '电饭盒', '', '', '', '1', '50', '22');
INSERT INTO `tp_shopcate` VALUES ('128', '其他厨房电器', '', '', '', '1', '50', '22');
INSERT INTO `tp_shopcate` VALUES ('129', '剃须刀', '', '', '', '1', '50', '23');
INSERT INTO `tp_shopcate` VALUES ('130', '脱毛器', '', '', '', '1', '50', '23');
INSERT INTO `tp_shopcate` VALUES ('131', '口腔护理', '', '', '', '1', '50', '23');
INSERT INTO `tp_shopcate` VALUES ('132', '电吹风', '', '', '', '1', '50', '23');
INSERT INTO `tp_shopcate` VALUES ('133', '美容器', '', '', '', '1', '50', '23');
INSERT INTO `tp_shopcate` VALUES ('134', '理发器', '', '', '', '1', '50', '23');
INSERT INTO `tp_shopcate` VALUES ('135', '按摩器', '', '', '', '1', '50', '23');
INSERT INTO `tp_shopcate` VALUES ('136', '足浴盆', '', '', '', '1', '50', '23');
INSERT INTO `tp_shopcate` VALUES ('137', '血压计', '', '', '', '1', '50', '23');
INSERT INTO `tp_shopcate` VALUES ('138', '健康秤/厨房秤', '', '', '', '1', '50', '23');
INSERT INTO `tp_shopcate` VALUES ('139', '血糖计', '', '', '', '1', '50', '23');
INSERT INTO `tp_shopcate` VALUES ('140', '计步器', '', '', '', '1', '50', '23');
INSERT INTO `tp_shopcate` VALUES ('141', '其他健康电器', '', '', '', '1', '50', '23');
INSERT INTO `tp_shopcate` VALUES ('142', '手动工具', '', '', '', '1', '50', '24');
INSERT INTO `tp_shopcate` VALUES ('143', '仪器', '', '', '', '1', '50', '24');
INSERT INTO `tp_shopcate` VALUES ('144', '仪表', '', '', '', '1', '50', '24');
INSERT INTO `tp_shopcate` VALUES ('145', '浴霸/排气扇', '', '', '', '1', '50', '24');
INSERT INTO `tp_shopcate` VALUES ('146', '灯具', '', '', '', '1', '50', '24');
INSERT INTO `tp_shopcate` VALUES ('147', 'LED灯', '', '', '', '1', '50', '24');
INSERT INTO `tp_shopcate` VALUES ('148', '洁身器', '', '', '', '1', '50', '24');
INSERT INTO `tp_shopcate` VALUES ('149', '水槽', '', '', '', '1', '50', '24');
INSERT INTO `tp_shopcate` VALUES ('150', '龙头', '', '', '', '1', '50', '24');
INSERT INTO `tp_shopcate` VALUES ('151', '沐浴花洒', '', '', '', '1', '50', '24');
INSERT INTO `tp_shopcate` VALUES ('152', '厨卫五金', '', '', '', '1', '50', '24');
INSERT INTO `tp_shopcate` VALUES ('153', '家具五金', '', '', '', '1', '50', '24');
INSERT INTO `tp_shopcate` VALUES ('154', '门铃', '', '', '', '1', '50', '24');
INSERT INTO `tp_shopcate` VALUES ('155', '监控安防', '', '', '', '1', '50', '24');
INSERT INTO `tp_shopcate` VALUES ('156', '智能手表', '', '', '', '1', '50', '10');
INSERT INTO `tp_shopcate` VALUES ('157', '智能眼镜', '', '', '', '1', '50', '10');
INSERT INTO `tp_shopcate` VALUES ('158', '运动跟踪器', '', '', '', '1', '50', '10');
INSERT INTO `tp_shopcate` VALUES ('159', '健康监测', '', '', '', '1', '50', '10');
INSERT INTO `tp_shopcate` VALUES ('160', '智能配饰', '', '', '', '1', '50', '10');
INSERT INTO `tp_shopcate` VALUES ('161', '智能家居', '', '', '', '1', '50', '10');
INSERT INTO `tp_shopcate` VALUES ('162', '体感车', '', '', '', '1', '50', '10');
INSERT INTO `tp_shopcate` VALUES ('163', '其他配件', '', '', '', '1', '50', '10');
INSERT INTO `tp_shopcate` VALUES ('164', '读卡器', '', '', '', '1', '50', '11');
INSERT INTO `tp_shopcate` VALUES ('165', '滤镜', '', '', '', '1', '50', '11');
INSERT INTO `tp_shopcate` VALUES ('166', '闪光灯/手柄', '', '', '', '1', '50', '11');
INSERT INTO `tp_shopcate` VALUES ('167', '相机包', '', '', '', '1', '50', '11');
INSERT INTO `tp_shopcate` VALUES ('168', '三脚架/云台', '', '', '', '1', '50', '11');
INSERT INTO `tp_shopcate` VALUES ('169', '相机清洁', '', '', '', '1', '50', '11');
INSERT INTO `tp_shopcate` VALUES ('170', '相机贴膜', '', '', '', '1', '50', '11');
INSERT INTO `tp_shopcate` VALUES ('171', '机身附件', '', '', '', '1', '50', '11');
INSERT INTO `tp_shopcate` VALUES ('172', '镜头附件', '', '', '', '1', '50', '11');
INSERT INTO `tp_shopcate` VALUES ('173', '电池/充电器', '', '', '', '1', '50', '11');
INSERT INTO `tp_shopcate` VALUES ('174', '移动电源', '', '', '', '1', '50', '11');
INSERT INTO `tp_shopcate` VALUES ('175', '对讲机', '', '', '', '1', '50', '30');
INSERT INTO `tp_shopcate` VALUES ('176', '0元购机', '', '', '', '1', '50', '31');
INSERT INTO `tp_shopcate` VALUES ('177', '选号入网', '', '', '', '1', '50', '31');
INSERT INTO `tp_shopcate` VALUES ('178', '蓝牙耳机', '', '', '', '1', '50', '32');
INSERT INTO `tp_shopcate` VALUES ('179', '充电器/数据线', '', '', '', '1', '50', '32');
INSERT INTO `tp_shopcate` VALUES ('180', '手机耳机', '', '', '', '1', '50', '32');
INSERT INTO `tp_shopcate` VALUES ('181', '贴膜', '', '', '', '1', '50', '32');
INSERT INTO `tp_shopcate` VALUES ('182', '存储卡', '', '', '', '1', '50', '32');
INSERT INTO `tp_shopcate` VALUES ('183', '保护套', '', '', '', '1', '50', '32');
INSERT INTO `tp_shopcate` VALUES ('184', '车载', '', '', '', '1', '50', '32');
INSERT INTO `tp_shopcate` VALUES ('185', 'iPhone配件', '', '', '', '1', '50', '32');
INSERT INTO `tp_shopcate` VALUES ('186', '创意配件', '', '', '', '1', '50', '32');
INSERT INTO `tp_shopcate` VALUES ('187', '便携/无线音箱', '', '', '', '1', '50', '32');
INSERT INTO `tp_shopcate` VALUES ('188', '手机饰品', '', '', '', '1', '50', '32');
INSERT INTO `tp_shopcate` VALUES ('189', '单电/微单相机', '', '', '', '1', '50', '33');
INSERT INTO `tp_shopcate` VALUES ('190', '单反相机', '', '', '', '1', '50', '33');
INSERT INTO `tp_shopcate` VALUES ('191', '拍立得', '', '', '', '1', '50', '33');
INSERT INTO `tp_shopcate` VALUES ('192', '运动相机', '', '', '', '1', '50', '33');
INSERT INTO `tp_shopcate` VALUES ('193', '摄像机', '', '', '', '1', '50', '33');
INSERT INTO `tp_shopcate` VALUES ('194', '镜头', '', '', '', '1', '50', '33');
INSERT INTO `tp_shopcate` VALUES ('195', '户外器材', '', '', '', '1', '50', '33');
INSERT INTO `tp_shopcate` VALUES ('196', '摄影器材', '', '', '', '1', '50', '33');
INSERT INTO `tp_shopcate` VALUES ('197', '音箱/音响', '', '', '', '1', '50', '34');
INSERT INTO `tp_shopcate` VALUES ('198', '麦克风', '', '', '', '1', '50', '34');
INSERT INTO `tp_shopcate` VALUES ('199', 'MP3/MP4', '', '', '', '1', '50', '34');
INSERT INTO `tp_shopcate` VALUES ('200', '数码相框', '', '', '', '1', '50', '34');
INSERT INTO `tp_shopcate` VALUES ('201', '专业音频', '', '', '', '1', '50', '34');
INSERT INTO `tp_shopcate` VALUES ('202', '苹果周边', '', '', '', '1', '50', '34');
INSERT INTO `tp_shopcate` VALUES ('203', '远程服务', '', '', '', '1', '50', '12');
INSERT INTO `tp_shopcate` VALUES ('204', '电脑软件', '', '', '', '1', '50', '12');
INSERT INTO `tp_shopcate` VALUES ('205', '超级本', '', '', '', '1', '50', '13');
INSERT INTO `tp_shopcate` VALUES ('206', '游戏本', '', '', '', '1', '50', '13');
INSERT INTO `tp_shopcate` VALUES ('207', '平板电脑', '', '', '', '1', '50', '13');
INSERT INTO `tp_shopcate` VALUES ('208', '平板电脑配件', '', '', '', '1', '50', '13');
INSERT INTO `tp_shopcate` VALUES ('209', '台式机', '', '', '', '1', '50', '13');
INSERT INTO `tp_shopcate` VALUES ('210', '笔记本配件', '', '', '', '1', '50', '13');
INSERT INTO `tp_shopcate` VALUES ('211', '服务器/工作站', '', '', '', '1', '50', '13');
INSERT INTO `tp_shopcate` VALUES ('212', '主板', '', '', '', '1', '50', '42');
INSERT INTO `tp_shopcate` VALUES ('213', '显卡', '', '', '', '1', '50', '42');
INSERT INTO `tp_shopcate` VALUES ('214', '硬盘', '', '', '', '1', '50', '42');
INSERT INTO `tp_shopcate` VALUES ('215', 'SSD固态硬盘', '', '', '', '1', '50', '42');
INSERT INTO `tp_shopcate` VALUES ('216', '内存', '', '', '', '1', '50', '42');
INSERT INTO `tp_shopcate` VALUES ('217', '机箱', '', '', '', '1', '50', '42');
INSERT INTO `tp_shopcate` VALUES ('218', '电源', '', '', '', '1', '50', '42');
INSERT INTO `tp_shopcate` VALUES ('219', '显示器', '', '', '', '1', '50', '42');
INSERT INTO `tp_shopcate` VALUES ('220', '刻录机/光驱', '', '', '', '1', '50', '42');
INSERT INTO `tp_shopcate` VALUES ('221', '声卡、扩展卡', '', '', '', '1', '50', '42');
INSERT INTO `tp_shopcate` VALUES ('222', '散热器', '', '', '', '1', '50', '42');
INSERT INTO `tp_shopcate` VALUES ('223', '装机配件', '', '', '', '1', '50', '42');
INSERT INTO `tp_shopcate` VALUES ('224', '组装电脑', '', '', '', '1', '50', '42');
INSERT INTO `tp_shopcate` VALUES ('225', '键盘', '', '', '', '1', '50', '43');
INSERT INTO `tp_shopcate` VALUES ('226', '游戏设备', '', '', '', '1', '50', '43');
INSERT INTO `tp_shopcate` VALUES ('227', 'U盘', '', '', '', '1', '50', '43');
INSERT INTO `tp_shopcate` VALUES ('228', '移动硬盘', '', '', '', '1', '50', '43');
INSERT INTO `tp_shopcate` VALUES ('229', '鼠标垫', '', '', '', '1', '50', '43');
INSERT INTO `tp_shopcate` VALUES ('230', '摄像头', '', '', '', '1', '50', '43');
INSERT INTO `tp_shopcate` VALUES ('231', '线缆', '', '', '', '1', '50', '43');
INSERT INTO `tp_shopcate` VALUES ('232', '电玩', '', '', '', '1', '50', '43');
INSERT INTO `tp_shopcate` VALUES ('233', '手写板', '', '', '', '1', '50', '43');
INSERT INTO `tp_shopcate` VALUES ('234', '外置盒', '', '', '', '1', '50', '43');
INSERT INTO `tp_shopcate` VALUES ('235', '电脑工具', '', '', '', '1', '50', '43');
INSERT INTO `tp_shopcate` VALUES ('236', '电脑清洁', '', '', '', '1', '50', '43');
INSERT INTO `tp_shopcate` VALUES ('237', 'UPS', '', '', '', '1', '50', '43');
INSERT INTO `tp_shopcate` VALUES ('238', '插座', '', '', '', '1', '50', '43');
INSERT INTO `tp_shopcate` VALUES ('239', '网卡', '', '', '', '1', '50', '44');
INSERT INTO `tp_shopcate` VALUES ('240', '交换机', '', '', '', '1', '50', '44');
INSERT INTO `tp_shopcate` VALUES ('241', '网络存储', '', '', '', '1', '50', '44');
INSERT INTO `tp_shopcate` VALUES ('242', '4G/3G上网', '', '', '', '1', '50', '44');
INSERT INTO `tp_shopcate` VALUES ('243', '网络盒子', '', '', '', '1', '50', '44');
INSERT INTO `tp_shopcate` VALUES ('244', '网络配件', '', '', '', '1', '50', '45');
INSERT INTO `tp_shopcate` VALUES ('245', '一体机', '', '', '', '1', '50', '45');
INSERT INTO `tp_shopcate` VALUES ('246', '投影机', '', '', '', '1', '50', '45');
INSERT INTO `tp_shopcate` VALUES ('247', '投影配件', '', '', '', '1', '50', '45');
INSERT INTO `tp_shopcate` VALUES ('248', '传真机', '', '', '', '1', '50', '45');
INSERT INTO `tp_shopcate` VALUES ('249', '复合机', '', '', '', '1', '50', '45');
INSERT INTO `tp_shopcate` VALUES ('250', '碎纸机', '', '', '', '1', '50', '45');
INSERT INTO `tp_shopcate` VALUES ('251', '扫描仪', '', '', '', '1', '50', '45');
INSERT INTO `tp_shopcate` VALUES ('252', '墨盒', '', '', '', '1', '50', '45');
INSERT INTO `tp_shopcate` VALUES ('253', '硒鼓', '', '', '', '1', '50', '45');
INSERT INTO `tp_shopcate` VALUES ('254', '墨粉', '', '', '', '1', '50', '45');
INSERT INTO `tp_shopcate` VALUES ('255', '色带', '', '', '', '1', '50', '45');
INSERT INTO `tp_shopcate` VALUES ('256', '刀剪菜板', '', '', '', '1', '50', '14');
INSERT INTO `tp_shopcate` VALUES ('257', '厨房配件', '', '', '', '1', '50', '14');
INSERT INTO `tp_shopcate` VALUES ('258', '水具酒具', '', '', '', '1', '50', '14');
INSERT INTO `tp_shopcate` VALUES ('259', '餐具', '', '', '', '1', '50', '14');
INSERT INTO `tp_shopcate` VALUES ('260', '茶具/咖啡具', '', '', '', '1', '50', '14');
INSERT INTO `tp_shopcate` VALUES ('261', '厨房卫浴', '', '', '', '1', '50', '15');
INSERT INTO `tp_shopcate` VALUES ('262', '五金工具', '', '', '', '1', '50', '15');
INSERT INTO `tp_shopcate` VALUES ('263', '电工电料', '', '', '', '1', '50', '15');
INSERT INTO `tp_shopcate` VALUES ('264', '墙地面材料', '', '', '', '1', '50', '15');
INSERT INTO `tp_shopcate` VALUES ('265', '装饰材料', '', '', '', '1', '50', '15');
INSERT INTO `tp_shopcate` VALUES ('266', '装修服务', '', '', '', '1', '50', '15');
INSERT INTO `tp_shopcate` VALUES ('267', '吸顶灯', '', '', '', '1', '50', '15');
INSERT INTO `tp_shopcate` VALUES ('268', '淋浴花洒', '', '', '', '1', '50', '15');
INSERT INTO `tp_shopcate` VALUES ('269', '开关插座', '', '', '', '1', '50', '15');
INSERT INTO `tp_shopcate` VALUES ('270', '油漆涂料', '', '', '', '1', '50', '15');
INSERT INTO `tp_shopcate` VALUES ('271', '龙头', '', '', '', '1', '50', '15');
INSERT INTO `tp_shopcate` VALUES ('272', '被子', '', '', '', '1', '50', '52');
INSERT INTO `tp_shopcate` VALUES ('273', '蚊帐', '', '', '', '1', '50', '52');
INSERT INTO `tp_shopcate` VALUES ('274', '凉席', '', '', '', '1', '50', '52');
INSERT INTO `tp_shopcate` VALUES ('275', '床单被罩', '', '', '', '1', '50', '52');
INSERT INTO `tp_shopcate` VALUES ('276', '枕芯', '', '', '', '1', '50', '52');
INSERT INTO `tp_shopcate` VALUES ('277', '毛巾浴巾', '', '', '', '1', '50', '52');
INSERT INTO `tp_shopcate` VALUES ('278', '布艺软饰', '', '', '', '1', '50', '52');
INSERT INTO `tp_shopcate` VALUES ('279', '毯子', '', '', '', '1', '50', '52');
INSERT INTO `tp_shopcate` VALUES ('280', '抱枕靠垫', '', '', '', '1', '50', '52');
INSERT INTO `tp_shopcate` VALUES ('281', '床垫/床褥', '', '', '', '1', '50', '52');
INSERT INTO `tp_shopcate` VALUES ('282', '窗帘/窗纱', '', '', '', '1', '50', '52');
INSERT INTO `tp_shopcate` VALUES ('283', '电热毯', '', '', '', '1', '50', '52');
INSERT INTO `tp_shopcate` VALUES ('284', '客厅家具', '', '', '', '1', '50', '53');
INSERT INTO `tp_shopcate` VALUES ('285', '餐厅家具', '', '', '', '1', '50', '53');
INSERT INTO `tp_shopcate` VALUES ('286', '书房家具', '', '', '', '1', '50', '53');
INSERT INTO `tp_shopcate` VALUES ('287', '储物家具', '', '', '', '1', '50', '53');
INSERT INTO `tp_shopcate` VALUES ('288', '阳台/户外', '', '', '', '1', '50', '53');
INSERT INTO `tp_shopcate` VALUES ('289', '商业办公', '', '', '', '1', '50', '53');
INSERT INTO `tp_shopcate` VALUES ('290', '床', '', '', '', '1', '50', '53');
INSERT INTO `tp_shopcate` VALUES ('291', '床垫', '', '', '', '1', '50', '53');
INSERT INTO `tp_shopcate` VALUES ('292', '沙发', '', '', '', '1', '50', '53');
INSERT INTO `tp_shopcate` VALUES ('293', '电脑椅', '', '', '', '1', '50', '53');
INSERT INTO `tp_shopcate` VALUES ('294', '衣柜', '', '', '', '1', '50', '53');
INSERT INTO `tp_shopcate` VALUES ('295', '茶几', '', '', '', '1', '50', '53');
INSERT INTO `tp_shopcate` VALUES ('296', '电视柜', '', '', '', '1', '50', '53');
INSERT INTO `tp_shopcate` VALUES ('297', '餐桌', '', '', '', '1', '50', '53');
INSERT INTO `tp_shopcate` VALUES ('298', '电脑桌', '', '', '', '1', '50', '53');
INSERT INTO `tp_shopcate` VALUES ('299', '鞋架/衣帽架', '', '', '', '1', '50', '53');
INSERT INTO `tp_shopcate` VALUES ('300', '吸顶灯', '', '', '', '1', '50', '54');
INSERT INTO `tp_shopcate` VALUES ('301', '筒灯射灯', '', '', '', '1', '50', '54');
INSERT INTO `tp_shopcate` VALUES ('302', 'LED灯', '', '', '', '1', '50', '54');
INSERT INTO `tp_shopcate` VALUES ('303', '节能灯', '', '', '', '1', '50', '54');
INSERT INTO `tp_shopcate` VALUES ('304', '落地灯', '', '', '', '1', '50', '54');
INSERT INTO `tp_shopcate` VALUES ('305', '五金电器', '', '', '', '1', '50', '54');
INSERT INTO `tp_shopcate` VALUES ('306', '应急灯/手电', '', '', '', '1', '50', '54');
INSERT INTO `tp_shopcate` VALUES ('307', '装饰灯', '', '', '', '1', '50', '54');
INSERT INTO `tp_shopcate` VALUES ('308', '吊灯', '', '', '', '1', '50', '54');
INSERT INTO `tp_shopcate` VALUES ('309', '氛围照明', '', '', '', '1', '50', '54');
INSERT INTO `tp_shopcate` VALUES ('310', '雨伞雨具', '', '', '', '1', '50', '55');
INSERT INTO `tp_shopcate` VALUES ('311', '浴室用品', '', '', '', '1', '50', '55');
INSERT INTO `tp_shopcate` VALUES ('312', '缝纫/针织用品', '', '', '', '1', '50', '55');
INSERT INTO `tp_shopcate` VALUES ('313', '洗晒/熨烫', '', '', '', '1', '50', '55');
INSERT INTO `tp_shopcate` VALUES ('314', '净化除味', '', '', '', '1', '50', '55');
INSERT INTO `tp_shopcate` VALUES ('315', '连衣裙', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('316', '蕾丝/雪纺衫', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('317', '衬衫', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('318', 'T恤', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('319', '半身裙', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('320', '休闲裤', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('321', '短裤', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('322', '牛仔裤', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('323', '针织衫', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('324', '吊带/背心', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('325', '打底衫', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('326', '打底裤', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('327', '正装裤', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('328', '小西服', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('329', '马甲', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('330', '风衣', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('331', '羊毛衫', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('332', '羊绒衫', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('333', '短外套', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('334', '棉服', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('335', '毛呢大衣', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('336', '加绒裤', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('337', '羽绒服', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('338', '皮草', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('339', '真皮皮衣', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('340', '仿皮皮衣', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('341', '旗袍/唐装', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('342', '礼服', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('343', '婚纱', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('344', '中老年女装', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('345', '大码女装', '', '', '', '1', '50', '16');
INSERT INTO `tp_shopcate` VALUES ('346', '裤子', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('347', 'POLO衫', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('348', '针织衫', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('349', '夹克', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('350', '卫衣', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('351', '风衣', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('352', '马甲/背心', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('353', '短裤', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('354', '休闲裤', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('355', '牛仔裤', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('356', '西服', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('357', '西裤', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('358', '西服套装', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('359', '真皮皮衣', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('360', '仿皮皮衣', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('361', '羽绒服', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('362', '毛呢大衣', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('363', '棉服', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('364', '羊绒衫', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('365', '羊毛衫', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('366', '卫裤/运动裤', '', '', '', '1', '50', '17');
INSERT INTO `tp_shopcate` VALUES ('367', '光学镜架/镜片', '', '', '', '1', '50', '62');
INSERT INTO `tp_shopcate` VALUES ('368', '防辐射眼镜', '', '', '', '1', '50', '62');
INSERT INTO `tp_shopcate` VALUES ('369', '女士丝巾/围巾/披肩', '', '', '', '1', '50', '62');
INSERT INTO `tp_shopcate` VALUES ('370', '棒球帽', '', '', '', '1', '50', '62');
INSERT INTO `tp_shopcate` VALUES ('371', '遮阳伞/雨伞', '', '', '', '1', '50', '62');
INSERT INTO `tp_shopcate` VALUES ('372', '遮阳帽', '', '', '', '1', '50', '62');
INSERT INTO `tp_shopcate` VALUES ('373', '领带/领结/领带夹', '', '', '', '1', '50', '62');
INSERT INTO `tp_shopcate` VALUES ('374', '男士腰带/礼盒', '', '', '', '1', '50', '62');
INSERT INTO `tp_shopcate` VALUES ('375', '防晒手套', '', '', '', '1', '50', '62');
INSERT INTO `tp_shopcate` VALUES ('376', '老花镜', '', '', '', '1', '50', '62');
INSERT INTO `tp_shopcate` VALUES ('377', '袖扣', '', '', '', '1', '50', '62');
INSERT INTO `tp_shopcate` VALUES ('378', '鸭舌帽', '', '', '', '1', '50', '62');
INSERT INTO `tp_shopcate` VALUES ('379', '装饰眼镜', '', '', '', '1', '50', '62');
INSERT INTO `tp_shopcate` VALUES ('380', '女士腰带/礼盒', '', '', '', '1', '50', '62');
INSERT INTO `tp_shopcate` VALUES ('381', '文胸', '', '', '', '1', '50', '63');
INSERT INTO `tp_shopcate` VALUES ('382', '睡衣/家居服', '', '', '', '1', '50', '63');
INSERT INTO `tp_shopcate` VALUES ('383', '情侣睡衣', '', '', '', '1', '50', '63');
INSERT INTO `tp_shopcate` VALUES ('384', '文胸套装', '', '', '', '1', '50', '63');
INSERT INTO `tp_shopcate` VALUES ('385', '少女文胸', '', '', '', '1', '50', '63');
INSERT INTO `tp_shopcate` VALUES ('386', '女式内裤', '', '', '', '1', '50', '63');
INSERT INTO `tp_shopcate` VALUES ('387', '男式内裤', '', '', '', '1', '50', '63');
INSERT INTO `tp_shopcate` VALUES ('388', '商务男袜', '', '', '', '1', '50', '63');
INSERT INTO `tp_shopcate` VALUES ('389', '休闲棉袜', '', '', '', '1', '50', '63');
INSERT INTO `tp_shopcate` VALUES ('390', '吊带/背心', '', '', '', '1', '50', '63');
INSERT INTO `tp_shopcate` VALUES ('391', '打底衫', '', '', '', '1', '50', '63');
INSERT INTO `tp_shopcate` VALUES ('392', '抹胸', '', '', '', '1', '50', '63');
INSERT INTO `tp_shopcate` VALUES ('393', '连裤袜/丝袜', '', '', '', '1', '50', '63');
INSERT INTO `tp_shopcate` VALUES ('394', '美腿袜', '', '', '', '1', '50', '63');
INSERT INTO `tp_shopcate` VALUES ('395', '打底裤袜', '', '', '', '1', '50', '63');
INSERT INTO `tp_shopcate` VALUES ('396', '塑身美体', '', '', '', '1', '50', '63');
INSERT INTO `tp_shopcate` VALUES ('397', '大码内衣', '', '', '', '1', '50', '63');
INSERT INTO `tp_shopcate` VALUES ('398', '室内健身', '', '', '', '1', '50', '64');
INSERT INTO `tp_shopcate` VALUES ('399', '自行车运动', '', '', '', '1', '50', '64');
INSERT INTO `tp_shopcate` VALUES ('400', '轮滑运动', '', '', '', '1', '50', '64');
INSERT INTO `tp_shopcate` VALUES ('401', '羽毛球/网球/乒乓球', '', '', '', '1', '50', '64');
INSERT INTO `tp_shopcate` VALUES ('402', '足球/篮球/排球', '', '', '', '1', '50', '64');
INSERT INTO `tp_shopcate` VALUES ('403', '运动休闲', '', '', '', '1', '50', '64');
INSERT INTO `tp_shopcate` VALUES ('404', '钓鱼用品', '', '', '', '1', '50', '64');
INSERT INTO `tp_shopcate` VALUES ('405', '野营烧烤', '', '', '', '1', '50', '64');
INSERT INTO `tp_shopcate` VALUES ('406', '游泳运动', '', '', '', '1', '50', '64');
INSERT INTO `tp_shopcate` VALUES ('407', '舞蹈运动', '', '', '', '1', '50', '64');
INSERT INTO `tp_shopcate` VALUES ('408', '瑜伽运动', '', '', '', '1', '50', '64');
INSERT INTO `tp_shopcate` VALUES ('409', '防狼防身', '', '', '', '1', '50', '64');
INSERT INTO `tp_shopcate` VALUES ('410', '水上运动', '', '', '', '1', '50', '64');
INSERT INTO `tp_shopcate` VALUES ('411', '箱包', '', '', '', '1', '50', '18');
INSERT INTO `tp_shopcate` VALUES ('412', '钱包', '', '', '', '1', '50', '18');
INSERT INTO `tp_shopcate` VALUES ('413', '服饰', '', '', '', '1', '50', '18');
INSERT INTO `tp_shopcate` VALUES ('414', '腰带', '', '', '', '1', '50', '18');
INSERT INTO `tp_shopcate` VALUES ('415', '太阳镜/眼镜框', '', '', '', '1', '50', '18');
INSERT INTO `tp_shopcate` VALUES ('416', '饰品', '', '', '', '1', '50', '18');
INSERT INTO `tp_shopcate` VALUES ('417', '配件', '', '', '', '1', '50', '18');
INSERT INTO `tp_shopcate` VALUES ('418', '旅行包', '', '', '', '1', '50', '19');
INSERT INTO `tp_shopcate` VALUES ('419', '电脑包', '', '', '', '1', '50', '20');
INSERT INTO `tp_shopcate` VALUES ('420', '休闲运动包', '', '', '', '1', '50', '21');
INSERT INTO `tp_shopcate` VALUES ('421', '相机包', '', '', '', '1', '50', '22');
INSERT INTO `tp_shopcate` VALUES ('422', '腰包/胸包', '', '', '', '1', '50', '23');
INSERT INTO `tp_shopcate` VALUES ('423', '登山包', '', '', '', '1', '50', '24');
INSERT INTO `tp_shopcate` VALUES ('424', '旅行配件', '', '', '', '1', '50', '25');
INSERT INTO `tp_shopcate` VALUES ('425', '书包', '', '', '', '1', '50', '26');
INSERT INTO `tp_shopcate` VALUES ('426', '妈咪包', '', '', '', '1', '50', '27');
INSERT INTO `tp_shopcate` VALUES ('427', '凉鞋/沙滩鞋', '', '', '', '1', '50', '70');
INSERT INTO `tp_shopcate` VALUES ('428', '帆布鞋', '', '', '', '1', '50', '70');
INSERT INTO `tp_shopcate` VALUES ('429', '商务休闲鞋', '', '', '', '1', '50', '70');
INSERT INTO `tp_shopcate` VALUES ('430', '正装鞋', '', '', '', '1', '50', '70');
INSERT INTO `tp_shopcate` VALUES ('431', '增高鞋', '', '', '', '1', '50', '70');
INSERT INTO `tp_shopcate` VALUES ('432', '拖鞋/人字拖', '', '', '', '1', '50', '70');
INSERT INTO `tp_shopcate` VALUES ('433', '工装鞋', '', '', '', '1', '50', '70');
INSERT INTO `tp_shopcate` VALUES ('434', '男靴', '', '', '', '1', '50', '70');
INSERT INTO `tp_shopcate` VALUES ('435', '传统布鞋', '', '', '', '1', '50', '70');
INSERT INTO `tp_shopcate` VALUES ('436', '功能鞋', '', '', '', '1', '50', '70');
INSERT INTO `tp_shopcate` VALUES ('437', '鞋配件', '', '', '', '1', '50', '70');
INSERT INTO `tp_shopcate` VALUES ('438', '定制鞋', '', '', '', '1', '50', '70');
INSERT INTO `tp_shopcate` VALUES ('439', '单鞋', '', '', '', '1', '50', '71');
INSERT INTO `tp_shopcate` VALUES ('440', '高跟鞋', '', '', '', '1', '50', '71');
INSERT INTO `tp_shopcate` VALUES ('441', '坡跟鞋', '', '', '', '1', '50', '71');
INSERT INTO `tp_shopcate` VALUES ('442', '松糕鞋', '', '', '', '1', '50', '71');
INSERT INTO `tp_shopcate` VALUES ('443', '鱼嘴鞋', '', '', '', '1', '50', '71');
INSERT INTO `tp_shopcate` VALUES ('444', '休闲鞋', '', '', '', '1', '50', '71');
INSERT INTO `tp_shopcate` VALUES ('445', '帆布鞋', '', '', '', '1', '50', '71');
INSERT INTO `tp_shopcate` VALUES ('446', '拖鞋/人字拖', '', '', '', '1', '50', '71');
INSERT INTO `tp_shopcate` VALUES ('447', '妈妈鞋', '', '', '', '1', '50', '71');
INSERT INTO `tp_shopcate` VALUES ('448', '防水台', '', '', '', '1', '50', '71');
INSERT INTO `tp_shopcate` VALUES ('449', '雨鞋/雨靴', '', '', '', '1', '50', '71');
INSERT INTO `tp_shopcate` VALUES ('450', '内增高', '', '', '', '1', '50', '71');
INSERT INTO `tp_shopcate` VALUES ('451', '布鞋/绣花鞋', '', '', '', '1', '50', '71');
INSERT INTO `tp_shopcate` VALUES ('452', '女靴', '', '', '', '1', '50', '71');
INSERT INTO `tp_shopcate` VALUES ('453', '雪地靴', '', '', '', '1', '50', '71');
INSERT INTO `tp_shopcate` VALUES ('454', '踝靴', '', '', '', '1', '50', '71');
INSERT INTO `tp_shopcate` VALUES ('455', '马丁靴', '', '', '', '1', '50', '71');
INSERT INTO `tp_shopcate` VALUES ('456', '鞋配件', '', '', '', '1', '50', '71');
INSERT INTO `tp_shopcate` VALUES ('457', '手提包', '', '', '', '1', '50', '72');
INSERT INTO `tp_shopcate` VALUES ('458', '斜跨包', '', '', '', '1', '50', '72');
INSERT INTO `tp_shopcate` VALUES ('459', '双肩包', '', '', '', '1', '50', '72');
INSERT INTO `tp_shopcate` VALUES ('460', '钱包', '', '', '', '1', '50', '72');
INSERT INTO `tp_shopcate` VALUES ('461', '手拿包/晚宴包', '', '', '', '1', '50', '72');
INSERT INTO `tp_shopcate` VALUES ('462', '卡包/零钱包', '', '', '', '1', '50', '72');
INSERT INTO `tp_shopcate` VALUES ('463', '钥匙包', '', '', '', '1', '50', '72');
INSERT INTO `tp_shopcate` VALUES ('464', '单肩/斜跨包', '', '', '', '1', '50', '73');
INSERT INTO `tp_shopcate` VALUES ('465', '男生手包', '', '', '', '1', '50', '73');
INSERT INTO `tp_shopcate` VALUES ('466', '双肩包', '', '', '', '1', '50', '73');
INSERT INTO `tp_shopcate` VALUES ('467', '钱包/卡包', '', '', '', '1', '50', '73');
INSERT INTO `tp_shopcate` VALUES ('468', '钥匙包', '', '', '', '1', '50', '73');
INSERT INTO `tp_shopcate` VALUES ('469', '女表', '', '', '', '1', '50', '74');
INSERT INTO `tp_shopcate` VALUES ('470', '儿童表', '', '', '', '1', '50', '74');
INSERT INTO `tp_shopcate` VALUES ('471', '座钟挂钟', '', '', '', '1', '50', '74');
INSERT INTO `tp_shopcate` VALUES ('472', '护肤', '', '', '', '1', '50', '20');
INSERT INTO `tp_shopcate` VALUES ('473', '面膜', '', '', '', '1', '50', '20');
INSERT INTO `tp_shopcate` VALUES ('474', '洗面奶', '', '', '', '1', '50', '20');
INSERT INTO `tp_shopcate` VALUES ('475', 'BB霜', '', '', '', '1', '50', '20');
INSERT INTO `tp_shopcate` VALUES ('476', '指甲油', '', '', '', '1', '50', '20');
INSERT INTO `tp_shopcate` VALUES ('477', '洗面泥', '', '', '', '1', '50', '20');
INSERT INTO `tp_shopcate` VALUES ('478', '水润护肤', '', '', '', '1', '50', '20');
INSERT INTO `tp_shopcate` VALUES ('479', '卸妆水', '', '', '', '1', '50', '20');
INSERT INTO `tp_shopcate` VALUES ('480', '雪花膏', '', '', '', '1', '50', '20');
INSERT INTO `tp_shopcate` VALUES ('481', '爽肤水', '', '', '', '1', '50', '20');
INSERT INTO `tp_shopcate` VALUES ('482', '清洁套装', '', '', '', '1', '50', '20');
INSERT INTO `tp_shopcate` VALUES ('483', '剃须', '', '', '', '1', '50', '20');
INSERT INTO `tp_shopcate` VALUES ('484', '洁面刷', '', '', '', '1', '50', '20');
INSERT INTO `tp_shopcate` VALUES ('485', '修眉笔', '', '', '', '1', '50', '20');
INSERT INTO `tp_shopcate` VALUES ('486', '护发', '', '', '', '1', '50', '21');
INSERT INTO `tp_shopcate` VALUES ('487', '染发', '', '', '', '1', '50', '21');
INSERT INTO `tp_shopcate` VALUES ('488', '造型', '', '', '', '1', '50', '21');
INSERT INTO `tp_shopcate` VALUES ('489', '润肤', '', '', '', '1', '50', '82');
INSERT INTO `tp_shopcate` VALUES ('490', '手足', '', '', '', '1', '50', '82');
INSERT INTO `tp_shopcate` VALUES ('491', '美胸', '', '', '', '1', '50', '82');
INSERT INTO `tp_shopcate` VALUES ('492', '套装', '', '', '', '1', '50', '82');
INSERT INTO `tp_shopcate` VALUES ('493', '牙刷/牙线', '', '', '', '1', '50', '83');
INSERT INTO `tp_shopcate` VALUES ('494', '漱口水', '', '', '', '1', '50', '83');
INSERT INTO `tp_shopcate` VALUES ('495', '套装', '', '', '', '1', '50', '83');
INSERT INTO `tp_shopcate` VALUES ('496', '底妆', '', '', '', '1', '50', '84');
INSERT INTO `tp_shopcate` VALUES ('497', '腮红', '', '', '', '1', '50', '84');
INSERT INTO `tp_shopcate` VALUES ('498', '眼部', '', '', '', '1', '50', '84');
INSERT INTO `tp_shopcate` VALUES ('499', '美甲', '', '', '', '1', '50', '84');
INSERT INTO `tp_shopcate` VALUES ('500', '精油放疗', '', '', '', '1', '50', '84');
INSERT INTO `tp_shopcate` VALUES ('501', '假睫毛', '', '', '', '1', '50', '84');
INSERT INTO `tp_shopcate` VALUES ('502', '彩妆套装', '', '', '', '1', '50', '84');
INSERT INTO `tp_shopcate` VALUES ('503', '蜜粉', '', '', '', '1', '50', '84');
INSERT INTO `tp_shopcate` VALUES ('504', '遮瑕', '', '', '', '1', '50', '84');
INSERT INTO `tp_shopcate` VALUES ('505', '化妆棉', '', '', '', '1', '50', '84');
INSERT INTO `tp_shopcate` VALUES ('506', '双眼皮贴', '', '', '', '1', '50', '84');
INSERT INTO `tp_shopcate` VALUES ('507', '高光阴影', '', '', '', '1', '50', '84');
INSERT INTO `tp_shopcate` VALUES ('508', '隔离', '', '', '', '1', '50', '84');
INSERT INTO `tp_shopcate` VALUES ('509', '粉饼', '', '', '', '1', '50', '84');
INSERT INTO `tp_shopcate` VALUES ('510', '气垫BB', '', '', '', '1', '50', '84');
INSERT INTO `tp_shopcate` VALUES ('511', '卫生护垫', '', '', '', '1', '50', '85');
INSERT INTO `tp_shopcate` VALUES ('512', '私密护理', '', '', '', '1', '50', '85');
INSERT INTO `tp_shopcate` VALUES ('513', '脱毛膏', '', '', '', '1', '50', '85');
INSERT INTO `tp_shopcate` VALUES ('514', '衣物清洁', '', '', '', '1', '50', '86');
INSERT INTO `tp_shopcate` VALUES ('515', '清洁工具', '', '', '', '1', '50', '86');
INSERT INTO `tp_shopcate` VALUES ('516', '家庭清洁', '', '', '', '1', '50', '86');
INSERT INTO `tp_shopcate` VALUES ('517', '一次性用品', '', '', '', '1', '50', '86');
INSERT INTO `tp_shopcate` VALUES ('518', '驱蚊用品', '', '', '', '1', '50', '86');
INSERT INTO `tp_shopcate` VALUES ('519', '皮具护理', '', '', '', '1', '50', '86');

-- -----------------------------
-- Table structure for `tp_type`
-- -----------------------------
DROP TABLE IF EXISTS `tp_type`;
CREATE TABLE `tp_type` (
  `type_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(30) NOT NULL COMMENT '属性名称',
  `type_showtype` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1显示0隐藏',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_type`
-- -----------------------------
INSERT INTO `tp_type` VALUES ('1', '男装', '1');
INSERT INTO `tp_type` VALUES ('2', '女装', '1');
INSERT INTO `tp_type` VALUES ('3', '平板', '1');

-- -----------------------------
-- Think MySQL Data Transfer 
-- 
-- Host     : 127.0.0.1
-- Port     : 
-- Database : tpshop
-- 
-- Part : #1
-- Date : 2019-01-23 01:23:10
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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_article`
-- -----------------------------
INSERT INTO `tp_article` VALUES ('17', '爱爱爱', '', '', '', '', '', '20180429\\281efeb22e3dccd1c74cfd6166d012e9.jpg', '', '0', '0', '1', '1526433625');
INSERT INTO `tp_article` VALUES ('18', '哈哈哈哈', '', '', '', '', '', '', '<p>gggg<br/></p><p><img src=\"/static/ueditor/image/20180502/1525263020139255.jpg\" style=\"\" title=\"1525263020139255.jpg\"/></p>', '0', '1', '3', '1525263509');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_attr`
-- -----------------------------
INSERT INTO `tp_attr` VALUES ('1', 'T恤', '1', '1,2,3,4,5', '1');
INSERT INTO `tp_attr` VALUES ('2', 'T恤1', '1', '1,2,3', '1');
INSERT INTO `tp_attr` VALUES ('3', '裙子1', '1', ' 黑色,白色,红色', '2');
INSERT INTO `tp_attr` VALUES ('4', 'gg', '1', '1,2,4', '1');
INSERT INTO `tp_attr` VALUES ('5', '衬衣', '2', '', '2');
INSERT INTO `tp_attr` VALUES ('6', '硬盘', '1', '512g,256g,128g', '3');
INSERT INTO `tp_attr` VALUES ('7', '内存', '2', '2M', '3');
INSERT INTO `tp_attr` VALUES ('8', 'T恤', '2', '', '2');

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_brand`
-- -----------------------------
INSERT INTO `tp_brand` VALUES ('12', '苹果', 'http://vvvw.apple.com', '20180430\\433c47e217de338727a55db133f9833b.jpg', 'http://vvvw.apple.com', '50', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_cate`
-- -----------------------------
INSERT INTO `tp_cate` VALUES ('1', '系统', '1', '', '', '1', '50', '0', '1');
INSERT INTO `tp_cate` VALUES ('2', '网店帮助分类', '2', '', '', '1', '50', '1', '1');
INSERT INTO `tp_cate` VALUES ('3', '新手上路', '3', '', '', '1', '50', '2', '0');
INSERT INTO `tp_cate` VALUES ('4', '配送与支付', '3', '', '', '0', '50', '2', '0');
INSERT INTO `tp_cate` VALUES ('5', '网店信息', '4', '', '', '1', '50', '1', '0');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

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
  KEY `gs_shopcateid` (`gs_shopcateid`,`gs_brandid`,`gs_typeid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_goods`
-- -----------------------------
INSERT INTO `tp_goods` VALUES ('18', '', '154729191243760', '', '', '', '', '0.00', '0.00', '0', '0', '0', '0', '', '0.00', 'kg');
INSERT INTO `tp_goods` VALUES ('19', '', '154729223049894', '', '', '', '', '0.00', '0.00', '0', '0', '0', '0', '', '0.00', 'kg');
INSERT INTO `tp_goods` VALUES ('20', '', '154729231867922', '', '', '', '', '0.00', '0.00', '0', '0', '0', '0', '', '0.00', 'kg');
INSERT INTO `tp_goods` VALUES ('21', '', '154729239859912', '', '', '', '', '0.00', '0.00', '0', '0', '0', '0', '', '0.00', 'kg');
INSERT INTO `tp_goods` VALUES ('22', '测试1', '154729908467784', '20190112\\b6481842f2a1c8e4d6d9678709c6222d.jpg', '20190112\\sm_b6481842f2a1c8e4d6d9678709c6222d.jpg', '20190112\\mid_b6481842f2a1c8e4d6d9678709c6222d.jpg', '20190112\\big_b6481842f2a1c8e4d6d9678709c6222d.jpg', '333.00', '33.00', '1', '3', '12', '0', '', '33.00', 'kg');
INSERT INTO `tp_goods` VALUES ('23', '', '154730143845751', '', '', '', '', '0.00', '0.00', '0', '0', '0', '0', '', '0.00', 'kg');
INSERT INTO `tp_goods` VALUES ('24', '思想上的第三', '154730150655311', '', '', '', '', '0.00', '0.00', '0', '0', '0', '0', '', '0.00', 'kg');
INSERT INTO `tp_goods` VALUES ('25', '焐热453', '154730153851128', '', '', '', '', '44.00', '55.00', '0', '3', '12', '0', '', '66.00', 'kg');
INSERT INTO `tp_goods` VALUES ('26', '', '154730172137711', '20190112\\3036dc648b4268c392ee905b49eb74ed.jpg', '20190112\\sm_3036dc648b4268c392ee905b49eb74ed.jpg', '20190112\\mid_3036dc648b4268c392ee905b49eb74ed.jpg', '20190112\\big_3036dc648b4268c392ee905b49eb74ed.jpg', '0.00', '0.00', '1', '0', '0', '0', '', '0.00', 'kg');
INSERT INTO `tp_goods` VALUES ('27', '12356', '154730202132147', '20190112\\b7344f814a9fa33ec563d5a1ce54f28d.jpg', '20190112\\sm_b7344f814a9fa33ec563d5a1ce54f28d.jpg', '20190112\\mid_b7344f814a9fa33ec563d5a1ce54f28d.jpg', '20190112\\big_b7344f814a9fa33ec563d5a1ce54f28d.jpg', '222.00', '22.00', '1', '11', '12', '0', '', '22.00', 'kg');
INSERT INTO `tp_goods` VALUES ('30', '555', '154730213434583', '20190112\\f1806c55d563720763abd539e75eb5f7.jpg', '20190112\\sm_f1806c55d563720763abd539e75eb5f7.jpg', '20190112\\mid_f1806c55d563720763abd539e75eb5f7.jpg', '20190112\\big_f1806c55d563720763abd539e75eb5f7.jpg', '0.00', '0.00', '0', '0', '0', '0', '', '0.00', 'kg');
INSERT INTO `tp_goods` VALUES ('32', '52565', '154730225414010', '20190112\\054e144bcc7936929f88e7f948f26b58.jpg', '20190112\\sm_054e144bcc7936929f88e7f948f26b58.jpg', '20190112\\mid_054e144bcc7936929f88e7f948f26b58.jpg', '20190112\\big_054e144bcc7936929f88e7f948f26b58.jpg', '0.00', '0.00', '0', '0', '12', '0', '', '0.00', 'kg');
INSERT INTO `tp_goods` VALUES ('35', 'eee', '154817485329068', '', '', '', '', '0.00', '2.00', '0', '0', '0', '0', '', '2.00', 'kg');

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
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_goods_attr`
-- -----------------------------
INSERT INTO `tp_goods_attr` VALUES ('11', '3', '白色', '5555.00', '18');
INSERT INTO `tp_goods_attr` VALUES ('12', '5', '88', '0.00', '18');
INSERT INTO `tp_goods_attr` VALUES ('13', '3', '黑色', '45.00', '19');
INSERT INTO `tp_goods_attr` VALUES ('14', '5', '', '0.00', '19');
INSERT INTO `tp_goods_attr` VALUES ('15', '3', '黑色', '12.00', '20');
INSERT INTO `tp_goods_attr` VALUES ('16', '3', '红色', '789.00', '21');
INSERT INTO `tp_goods_attr` VALUES ('17', '0', '33', '0.00', '22');
INSERT INTO `tp_goods_attr` VALUES ('18', '0', '1', '123.00', '27');
INSERT INTO `tp_goods_attr` VALUES ('19', '0', '2', '23.00', '27');
INSERT INTO `tp_goods_attr` VALUES ('20', '0', '2', '55.00', '27');
INSERT INTO `tp_goods_attr` VALUES ('21', '0', '2M', '0.00', '34');
INSERT INTO `tp_goods_attr` VALUES ('22', '0', '1', '444.00', '36');
INSERT INTO `tp_goods_attr` VALUES ('23', '0', '2', '433.00', '36');
INSERT INTO `tp_goods_attr` VALUES ('24', '0', '4', '33.00', '36');

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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_goods_img`
-- -----------------------------
INSERT INTO `tp_goods_img` VALUES ('1', '22', '', '20190112\\sm_d4e90a08be2462646c8c360e70c9951c.jpg', '20190112\\mid_d4e90a08be2462646c8c360e70c9951c.jpg', '20190112\\big_d4e90a08be2462646c8c360e70c9951c.jpg');
INSERT INTO `tp_goods_img` VALUES ('2', '23', '', '20190112\\sm_6b654123ff14b4ab8cee561921101775.jpg', '20190112\\mid_6b654123ff14b4ab8cee561921101775.jpg', '20190112\\big_6b654123ff14b4ab8cee561921101775.jpg');
INSERT INTO `tp_goods_img` VALUES ('3', '24', '', '20190112\\sm_6dc6d20a11f5d41d63817bfd63ae23c6.jpg', '20190112\\mid_6dc6d20a11f5d41d63817bfd63ae23c6.jpg', '20190112\\big_6dc6d20a11f5d41d63817bfd63ae23c6.jpg');
INSERT INTO `tp_goods_img` VALUES ('4', '25', '', '20190112\\sm_8f4a570bc358e7af3d4bd39b65cd737f.jpg', '20190112\\mid_8f4a570bc358e7af3d4bd39b65cd737f.jpg', '20190112\\big_8f4a570bc358e7af3d4bd39b65cd737f.jpg');
INSERT INTO `tp_goods_img` VALUES ('5', '26', '', '20190112\\sm_a146d512a380d500225cd4af6f5d3cea.jpg', '20190112\\mid_a146d512a380d500225cd4af6f5d3cea.jpg', '20190112\\big_a146d512a380d500225cd4af6f5d3cea.jpg');
INSERT INTO `tp_goods_img` VALUES ('6', '27', '', '20190112\\sm_a3864872d51c835ccdd121ef8f86c98d.jpg', '20190112\\mid_a3864872d51c835ccdd121ef8f86c98d.jpg', '20190112\\big_a3864872d51c835ccdd121ef8f86c98d.jpg');
INSERT INTO `tp_goods_img` VALUES ('9', '34', '', '20190122\\sm_be46518eb5d1b8e0fa5b101dcc66165a.jpg', '20190122\\mid_be46518eb5d1b8e0fa5b101dcc66165a.jpg', '20190122\\big_be46518eb5d1b8e0fa5b101dcc66165a.jpg');
INSERT INTO `tp_goods_img` VALUES ('10', '36', '', '20190123\\sm_a100b4a8a5a881e2eccbe15585729d1a.png', '20190123\\mid_a100b4a8a5a881e2eccbe15585729d1a.png', '20190123\\big_a100b4a8a5a881e2eccbe15585729d1a.png');
INSERT INTO `tp_goods_img` VALUES ('11', '37', '', '20190123\\sm_5160bc8b7b9422d457f00cde6b5a0dde.png', '20190123\\mid_5160bc8b7b9422d457f00cde6b5a0dde.png', '20190123\\big_5160bc8b7b9422d457f00cde6b5a0dde.png');
INSERT INTO `tp_goods_img` VALUES ('12', '38', '20190123\\3cd78354443104cb2c7c8a7432eb6baf.png', '20190123\\sm_3cd78354443104cb2c7c8a7432eb6baf.png', '20190123\\mid_3cd78354443104cb2c7c8a7432eb6baf.png', '20190123\\big_3cd78354443104cb2c7c8a7432eb6baf.png');
INSERT INTO `tp_goods_img` VALUES ('13', '39', '20190123\\7eeb6b05d88f3b7fbec24cd435693842.png', '20190123\\sm_7eeb6b05d88f3b7fbec24cd435693842.png', '20190123\\mid_7eeb6b05d88f3b7fbec24cd435693842.png', '20190123\\big_7eeb6b05d88f3b7fbec24cd435693842.png');
INSERT INTO `tp_goods_img` VALUES ('14', '40', '20190123\\798155c81ca2d090fe3e089639c3e2d0.png', '20190123\\sm_798155c81ca2d090fe3e089639c3e2d0.png', '20190123\\mid_798155c81ca2d090fe3e089639c3e2d0.png', '20190123\\big_798155c81ca2d090fe3e089639c3e2d0.png');
INSERT INTO `tp_goods_img` VALUES ('15', '41', '20190123\\117391cbe3a1640a4cfc32c056c3b2c7.png', '20190123\\sm_117391cbe3a1640a4cfc32c056c3b2c7.png', '20190123\\mid_117391cbe3a1640a4cfc32c056c3b2c7.png', '20190123\\big_117391cbe3a1640a4cfc32c056c3b2c7.png');

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
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_member_price`
-- -----------------------------
INSERT INTO `tp_member_price` VALUES ('5', '33.00', '1', '22');
INSERT INTO `tp_member_price` VALUES ('6', '34.00', '2', '22');
INSERT INTO `tp_member_price` VALUES ('7', '35.00', '3', '22');
INSERT INTO `tp_member_price` VALUES ('8', '26.00', '4', '22');
INSERT INTO `tp_member_price` VALUES ('9', '213.00', '1', '27');
INSERT INTO `tp_member_price` VALUES ('10', '321.00', '2', '27');
INSERT INTO `tp_member_price` VALUES ('11', '321.00', '3', '27');
INSERT INTO `tp_member_price` VALUES ('12', '21.00', '4', '27');

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_shopcate`
-- -----------------------------
INSERT INTO `tp_shopcate` VALUES ('3', '数码', '', '到底', '的', '0', '50', '0');
INSERT INTO `tp_shopcate` VALUES ('11', '笔记本', '20180519\\59d379bf1168a2b32e49c23b946505c3.jpg', '啊啊', '啊啊', '1', '50', '3');

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

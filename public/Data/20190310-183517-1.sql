-- -----------------------------
-- Think MySQL Data Transfer 
-- 
-- Host     : 127.0.0.1
-- Port     : 
-- Database : tpshop
-- 
-- Part : #1
-- Date : 2019-03-10 18:35:17
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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_goods`
-- -----------------------------
INSERT INTO `tp_goods` VALUES ('46', '测试1', '155158916186143', '', '', '', '', '111.00', '11.00', '0', '3', '12', '0', '<p>1111<br/></p>', '1.00', 'kg');
INSERT INTO `tp_goods` VALUES ('47', '测试2', '155159133533878', '', '', '', '', '354.00', '345.00', '1', '3', '12', '0', '<p>4<br/></p>', '4.00', 'kg');
INSERT INTO `tp_goods` VALUES ('48', '测试3', '155159211813527', '', '', '', '', '453.00', '43534.00', '1', '3', '12', '0', '<p>3534<br/></p>', '343.00', 'kg');
INSERT INTO `tp_goods` VALUES ('49', '测试4', '155221168628211', '20190310\\d3e326b94171cada1b33ebb2b5498121.png', '20190310\\sm_d3e326b94171cada1b33ebb2b5498121.png', '20190310\\mid_d3e326b94171cada1b33ebb2b5498121.png', '20190310\\big_d3e326b94171cada1b33ebb2b5498121.png', '333.00', '33.00', '1', '3', '12', '0', '<p>3333<br/></p>', '33.00', 'kg');
INSERT INTO `tp_goods` VALUES ('50', '测试5', '155221183385804', '20190310\\ae0eaa329ce2a7469f443ca922708b6e.png', '20190310\\sm_ae0eaa329ce2a7469f443ca922708b6e.png', '20190310\\mid_ae0eaa329ce2a7469f443ca922708b6e.png', '20190310\\big_ae0eaa329ce2a7469f443ca922708b6e.png', '111.00', '11.00', '1', '3', '12', '0', '<p>111<br/></p>', '111.00', 'kg');

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
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_goods_attr`
-- -----------------------------
INSERT INTO `tp_goods_attr` VALUES ('44', '9', '黑色', '111.00', '46');
INSERT INTO `tp_goods_attr` VALUES ('45', '9', '白色', '0.00', '46');
INSERT INTO `tp_goods_attr` VALUES ('46', '9', '黑色', '123.00', '47');
INSERT INTO `tp_goods_attr` VALUES ('47', '9', '白色', '333.00', '48');
INSERT INTO `tp_goods_attr` VALUES ('48', '9', '黑色', '0.00', '48');
INSERT INTO `tp_goods_attr` VALUES ('49', '6', '512g', '444.00', '48');
INSERT INTO `tp_goods_attr` VALUES ('50', '6', '256g', '33.00', '48');
INSERT INTO `tp_goods_attr` VALUES ('51', '6', '512g', '1123.00', '49');
INSERT INTO `tp_goods_attr` VALUES ('52', '6', '256g', '1123.00', '49');
INSERT INTO `tp_goods_attr` VALUES ('53', '7', '111', '0.00', '49');
INSERT INTO `tp_goods_attr` VALUES ('54', '9', '黑色', '111.00', '49');
INSERT INTO `tp_goods_attr` VALUES ('55', '9', '白色', '111.00', '49');
INSERT INTO `tp_goods_attr` VALUES ('56', '6', '512g', '100.00', '50');
INSERT INTO `tp_goods_attr` VALUES ('57', '6', '256g', '200.00', '50');
INSERT INTO `tp_goods_attr` VALUES ('58', '9', '黑色', '100.00', '50');
INSERT INTO `tp_goods_attr` VALUES ('59', '9', '白色', '100.00', '50');

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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_goods_img`
-- -----------------------------
INSERT INTO `tp_goods_img` VALUES ('22', '50', '20190310\\ad74cff5072c45592cc24efeced666ae.png', '20190310\\sm_ad74cff5072c45592cc24efeced666ae.png', '20190310\\mid_ad74cff5072c45592cc24efeced666ae.png', '20190310\\big_ad74cff5072c45592cc24efeced666ae.png');

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
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_member_price`
-- -----------------------------
INSERT INTO `tp_member_price` VALUES ('61', '1111.00', '1', '46');
INSERT INTO `tp_member_price` VALUES ('62', '111.00', '2', '46');
INSERT INTO `tp_member_price` VALUES ('63', '11.00', '3', '46');
INSERT INTO `tp_member_price` VALUES ('64', '1.00', '4', '46');
INSERT INTO `tp_member_price` VALUES ('65', '4.00', '1', '47');
INSERT INTO `tp_member_price` VALUES ('66', '444.00', '2', '47');
INSERT INTO `tp_member_price` VALUES ('67', '4.00', '3', '47');
INSERT INTO `tp_member_price` VALUES ('68', '4.00', '4', '47');
INSERT INTO `tp_member_price` VALUES ('69', '433.00', '1', '48');
INSERT INTO `tp_member_price` VALUES ('70', '3.00', '2', '48');
INSERT INTO `tp_member_price` VALUES ('71', '3.00', '3', '48');
INSERT INTO `tp_member_price` VALUES ('72', '3.00', '4', '48');
INSERT INTO `tp_member_price` VALUES ('73', '3333.00', '1', '49');
INSERT INTO `tp_member_price` VALUES ('74', '333.00', '2', '49');
INSERT INTO `tp_member_price` VALUES ('75', '33.00', '3', '49');
INSERT INTO `tp_member_price` VALUES ('76', '33.00', '4', '49');
INSERT INTO `tp_member_price` VALUES ('77', '1111.00', '1', '50');
INSERT INTO `tp_member_price` VALUES ('78', '111.00', '2', '50');
INSERT INTO `tp_member_price` VALUES ('79', '11.00', '3', '50');
INSERT INTO `tp_member_price` VALUES ('80', '1.00', '4', '50');

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
INSERT INTO `tp_shopcate` VALUES ('11', '笔记本', '', '啊啊', '啊啊', '1', '50', '3');

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
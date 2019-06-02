-- -----------------------------
-- Think MySQL Data Transfer 
-- 
-- Host     : 127.0.0.1
-- Port     : 
-- Database : tpshop
-- 
-- Part : #1
-- Date : 2019-06-02 13:00:24
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
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_brand`
-- -----------------------------
INSERT INTO `tp_brand` VALUES ('1', '金士顿', '', '20190504\\1490039286075654490.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('2', '同庆和堂', '', '20190504\\1490072850306019115.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('3', 'ELLE HOME', '', '20190504\\1490072313895957648.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('4', '她他/tata', '', '20190504\\1490072329183966195.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('5', '梦特娇', '', '20190504\\1490072344340492758.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('6', '阿迪达斯', '', '20190504\\1490072384627679069.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('7', '猫人', '', '20190504\\1490072399542595828.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('8', 'Dior', '', '20190504\\1490072417755830176.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('9', '同仁堂', '', '20190504\\1490072746651935979.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('10', '喜瑞', '', '20190504\\1490072756032175204.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('11', '汤臣倍健', '', '20190504\\1490072777790374054.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('12', '养生堂', '', '20190504\\1490072787223453617.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('13', '北大荒', '', '20190504\\1490072813729175306.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('14', '斯伯丁', '', '20190504\\1490072889090025069.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('15', '皮尔瑜伽', '', '20190504\\1490072898345358625.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('16', '乔山', '', '20190504\\1490072918339853569.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('17', '皮克朋', '', '20190504\\1490072931218635674.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('18', '欧亚马', '', '20190504\\1490072941526335126.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('19', '玛克家纺', '', '20190504\\1490072971610241726.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('20', '三星', '', '20190504\\1490296477657287023.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('21', '开普特', '', '20190504\\1490072981305868823.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('22', '迪士尼', '', '20190504\\1490073717776504773.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('23', '哥弟', '', '20190504\\1490073675778205608.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('24', '工银瑞信', '', '20190504\\1490073661335207841.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('25', '鸿星尔克', '', '20190504\\1490073591535005714.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('26', '华帝', '', '20190504\\1490073577683159021.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('27', '姬芮', '', '20190504\\1490073561018734078.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('28', '匡威', '', '20190504\\1490073529881448780.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('29', '耐克', '', '20190504\\1490073338357697604.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('30', '佳沪数码-华为', '', '20190504\\1490171981556005380.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('31', '苹果', '', '20190504\\1490073009638652059.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('32', '伊莱克斯', '', '20190504\\1490073109529817869.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('33', '帮宝适', '', '20190504\\1490075108722576375.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('34', '海飞丝', '', '20190504\\1490073648356663196.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('35', '海富通基金', '', '20190504\\1490227603513332911.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('36', '合生元', '', '20190504\\1490073616154966189.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('37', '李医生', '', '20190504\\1490227784119952387.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('38', '途牛', '', '20190504\\1490075080126940602.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('39', '磨铁图书', '', '20190504\\1490228262050567438.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('40', '养生堂', '', '20190504\\1490072787223453617.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('41', '一品玉', '', '20190504\\1490072835176110718.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('42', '亿健', '', '20190504\\1490073971637187496.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('43', 'ZIPPO', '', '20190504\\1490073919711003101.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('44', '帮宝适', '', '20190504\\1490075108722576375.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('45', '匡威', '', '20190504\\1490073529881448780.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('46', '美的', '', '20190504\\1490074901892372216.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('47', '魅族', '', '20190504\\1490073359611343586.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('48', '同庆和堂', '', '20190504\\1490072850306019115.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('49', 'esprit', '', '20190504\\1490071974970349584.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('50', 'ELLE HOME', '', '20190504\\1490072313895957648.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('51', '金利来', '', '20190504\\1490072373278367315.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('52', 'justyle', '', '20190504\\1490072677495061584.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('53', '李宁', '', '20190504\\1490072694695600078.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('54', '喜瑞', '', '20190504\\1490072756032175204.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('55', '康比特', '', '20190504\\1490072765604121481.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('56', '健安喜', '', '20190504\\1490072804442637685.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('57', '金奥力', '', '20190504\\1490072823106532144.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('58', '乐力', '', '20190504\\1490072860522023692.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('59', '金史密斯', '', '20190504\\1490072879222701895.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('60', '斯伯丁', '', '20190504\\1490072889090025069.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('61', '皮尔瑜伽', '', '20190504\\1490072898345358625.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('62', '乔山', '', '20190504\\1490072918339853569.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('63', '皮克朋', '', '20190504\\1490072931218635674.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('64', 'Masentek', '', '20190504\\1490072950580851309.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('65', '开普特', '', '20190504\\1490072981305868823.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('66', '三星', '', '20190504\\1490072993409028193.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('67', '苹果', '', '20190504\\1490073009638652059.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('68', '同庆和堂', '', '20190504\\1490072850306019115.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('69', '同仁堂', '', '20190504\\1490072746651935979.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('70', '喜瑞', '', '20190504\\1490072756032175204.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('71', '汤臣倍健', '', '20190504\\1490072777790374054.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('72', '养生堂', '', '20190504\\1490072787223453617.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('73', '一品玉', '', '20190504\\1490072835176110718.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('74', '西门子', '', '20190504\\1490074006660107941.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('75', '伊莱克斯', '', '20190504\\1490073109529817869.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('76', '亿健', '', '20190504\\1490073971637187496.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('77', 'TP-LINL', '', '20190504\\1490074180745676140.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('78', 'ZIPPO', '', '20190504\\1490073919711003101.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('79', '阿玛尼', '', '20190504\\1490073900838296364.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('80', '达利园', '', '20190504\\1490073731822160672.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('81', '迪士尼', '', '20190504\\1490073717776504773.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('82', '飞科', '', '20190504\\1490073705755280994.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('83', '匡威', '', '20190504\\1490073529881448780.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('84', '途牛', '', '20190504\\1490075080126940602.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('85', '文轩网', '', '20190504\\1490073253749057076.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('86', '新百伦', '', '20190504\\1490074308773778697.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('87', 'justyle', '', '20190504\\1490072677495061584.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('88', '宝姿', '', '20190504\\1490072685002270742.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('89', '欧亚马', '', '20190504\\1490072941526335126.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('90', 'NINE WEST', '', '20190504\\1490073930435480283.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('91', '飞利浦', '', '20190504\\1490073692774466710.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('92', '麦斯威尔', '', '20190504\\1490228075580091113.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('93', '美的', '', '20190504\\1490074901892372216.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('94', '耐克', '', '20190504\\1490073338357697604.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('95', '佳沪数码-华为', '', '20190504\\1490171981556005380.jpg', '', '50', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=162 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_goods`
-- -----------------------------
INSERT INTO `tp_goods` VALUES ('1', '马克华菲长袖T恤男士圆领修身韩版刺绣纯棉2017春装新款潮t 7002 立体3D绣花 欧美潮流范 1', 'ECS000864', '20190511/0_P_1490211620030.jpg', '', '20190511/0_thumb_P_1490211620315.jpg', '', '100.10', '85.22', '1', '5', '0', '66', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('2', '康佳电风扇塔扇家用塔式落地扇静音无叶风扇定时扇遥控立式大厦扇 换季活动 晒图奖励30元 到手119元', 'ECS000847', '20190511/_P_1490209654592.jpg', '', '20190511/_thumb_P_1490209654387.jpg', '', '101.10', '86.22', '1', '1', '0', '26', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('3', '美特斯邦威长袖T恤男士2017春装新款时尚印花百搭205064商场同款 1元秒100元优惠券丨限量抢', 'ECS000865', '20190511/_P_1490211708134.jpg', '', '20190511/_thumb_P_1490211708272.jpg', '', '102.10', '87.22', '1', '5', '0', '66', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('4', '马克华菲长袖T恤男 冬季新品纯棉圆领黑白潮款印花休闲t恤   98', 'ECS000863', '20190511/0_P_1490211575796.jpg', '', '20190511/0_thumb_P_1490211575413.jpg', '', '103.10', '88.22', '1', '5', '0', '66', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('5', 'JOMOO九牧 健康龙头厨房水槽冷热龙头 双槽洗菜盆龙头 33080 冷热厨房龙头 360°旋转', 'ECS000826', '20190511/_P_1490205043859.jpg', '', '20190511/_thumb_P_1490205043594.jpg', '', '104.10', '89.22', '1', '1', '0', '29', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('6', '顺鼎电动按摩椅家用全自动全身按摩垫智能颈椎按摩器老人椅子沙发', 'ECS000856', '20190511/0_P_1490209956657.jpg', '', '20190511/0_thumb_P_1490209956687.jpg', '', '105.10', '90.22', '1', '1', '0', '28', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('7', '都市丽人一片式无痕文胸厚杯性感聚拢舒适光面胸罩纯色商场同款 2016新品明星同款舒适Q软托无痕体验', 'ECS000795', '20190511/0_P_1490174703551.jpg', '', '20190511/0_thumb_P_1490174703212.jpg', '', '106.10', '91.22', '1', '5', '0', '68', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('8', '2017新品 加一尚品无痕内衣女 前扣无钢圈薄款交叉美背文胸M37 厚杯+薄杯 无钢圈 前扣 美背 ', 'ECS000629', '20190511/_P_1489100060638.jpg', '', '20190511/_thumb_P_1489100060603.jpg', '', '107.10', '92.22', '1', '5', '0', '68', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('9', '2016秋冬季新款尖头粗跟短靴女高跟真皮加绒中跟马丁靴女靴子女鞋 优质全头层牛皮，品质女鞋', 'ECS000681', '20190511/_P_1489109137127.jpg', '', '20190511/_thumb_P_1489109137169.jpg', '', '108.10', '93.22', '1', '6', '0', '77', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('10', '樱尚雅一片式无痕无钢圈文胸聚拢调整型性感小胸罩厚薄款少女内衣 2件减5元 不聚拢包退 送运费险', 'ECS000631', '20190511/_P_1489100659034.jpg', '', '20190511/_thumb_P_1489100659432.jpg', '', '109.10', '94.22', '1', '5', '0', '68', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('11', '皮尔卡丹正品男士钱包长款真皮软 头层牛皮钱包男青年钱夹皮夹男 立即抢购 领券购物 享折上折', 'ECS000833', '20190511/_P_1490208839006.jpg', '', '20190511/_thumb_P_1490208839270.jpg', '', '110.10', '95.22', '1', '6', '0', '467', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('12', 'AIPU艾谱豪雅高端电子指纹家用办公奢侈品保险箱保险柜88cm', 'ECS000841', '20190511/_P_1490209167717.jpg', '', '20190511/_thumb_P_1490209167850.jpg', '', '111.10', '96.22', '1', '6', '0', '411', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('13', 'LUGAV奢侈品男鞋商务休闲皮鞋固特异男士尖头手工定制鞋进口牛皮 固特异工艺 顺丰包邮 经典手工皮鞋', 'ECS000836', '20190511/0_P_1490208973643.jpg', '', '20190511/0_thumb_P_1490208973750.jpg', '', '112.10', '97.22', '1', '6', '0', '411', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('14', '波米铝框拉杆箱万向轮密码旅行箱子20/24寸行李箱女登机箱男26/28 顺丰速运赠运费险赠十礼品终身', 'ECS000682', '20190511/_P_1489109293514.jpg', '', '20190511/_thumb_P_1489109293604.jpg', '', '113.10', '98.22', '1', '6', '0', '424', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('15', 'KooDao2016新款奢侈蛇纹真皮女士手提包百搭精品休闲斜挎手拎包 悦享生活 品质追求 满减领券 ', 'ECS000837', '20190511/_P_1490209036698.jpg', '', '20190511/_thumb_P_1490209036667.jpg', '', '114.10', '99.22', '1', '6', '0', '411', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('16', 'BOSSsunwen头层牛皮真皮针扣皮带男士编织时尚腰带奢侈品个性青年 自动扣 头层牛皮 赠运费险 ', 'ECS000839', '20190511/_P_1490209095494.jpg', '', '20190511/_thumb_P_1490209095013.jpg', '', '115.10', '100.22', '1', '6', '0', '411', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('17', 'perhomme/帛欧尼男士手提包横款潮流精品男包奢侈品时尚真皮包 领券购物更 优惠', 'ECS000838', '20190511/_P_1490209064513.jpg', '', '20190511/_thumb_P_1490209064534.jpg', '', '116.10', '101.22', '1', '6', '0', '411', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('18', 'COVHERlab男士职业正装商务领带 紫方块奢侈领带男韩版 礼品领带 奢侈品牌 商务必备 简约大气', 'ECS000840', '20190511/_P_1490209134080.jpg', '', '20190511/_thumb_P_1490209134006.jpg', '', '117.10', '102.22', '1', '6', '0', '411', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('19', 'igtt铝框行李箱拉杆箱旅行箱万向轮男女20/24/26寸密码箱登机箱子 铝合金框 加强密码锁 万向', 'ECS000683', '20190511/_P_1489109349384.jpg', '', '20190511/_thumb_P_1489109349428.jpg', '', '118.10', '103.22', '1', '6', '0', '76', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('20', 'DELSEY法国大使拉杆箱旅行箱25寸400密码箱箱子万向轮男女行李箱 可扩充容量 全球联保', 'ECS000832', '20190511/_P_1490208761146.jpg', '', '20190511/_thumb_P_1490208761264.jpg', '', '119.10', '104.22', '1', '6', '0', '76', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('21', 'Apple/苹果 iPhone 6s Plus', 'ECS000668', '20190511/_P_1489107766735.jpg', '', '20190511/_thumb_P_1489107766573.jpg', '', '120.10', '105.22', '1', '2', '0', '184', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('22', '小蚁微单相机变焦镜头套机双镜头套机微单反4K视频索尼传感器', 'ECS000669', '20190511/_P_1489107805930.jpg', '', '20190511/_thumb_P_1489107805207.jpg', '', '121.10', '106.22', '1', '2', '0', '202', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('23', 'Leica/徕卡 SL Typ601全画幅无反单反相机莱卡微单数码相机小S 正品行货 全国联保 德国', 'ECS000670', '20190511/_P_1489107889880.jpg', '', '20190511/_thumb_P_1489107889656.jpg', '', '122.10', '107.22', '1', '2', '0', '189', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('24', '【年度旗舰】Huawei/华为 Mate 9 6+128GB 4G智能手机限量抢 麒麟960芯片 徕', 'ECS000672', '20190511/_P_1489108272459.jpg', '', '20190511/_thumb_P_1489108272135.jpg', '', '123.10', '108.22', '1', '2', '0', '37', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('25', 'Xiaomi/小米 小米note2 64G 双曲面柔性屏智能商务手机官方旗舰店 5.7\"双曲面柔性屏', 'ECS000675', '20190511/_P_1489108611345.jpg', '', '20190511/_thumb_P_1489108611865.jpg', '', '124.10', '109.22', '1', '2', '0', '37', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('26', 'PENTAX 宾得 K-1 K1(28-105mm/15-30mm/24-70mm/70-200mm', 'ECS000701', '20190511/0_P_1490154813676.jpg', '', '20190511/0_thumb_P_1490154813623.jpg', '', '125.10', '110.22', '1', '2', '0', '190', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('27', '红色特别版 Apple/苹果 iPhone 7 128G 全网通4G智能手机', 'ECS000699', '20190511/0_P_1490154264018.jpg', '', '20190511/0_thumb_P_1490154264110.jpg', '', '126.10', '111.22', '1', '2', '0', '37', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('28', '小米红米3s手机壳保护套红米3高配版指纹男女款潮版磨砂硬壳防摔 收藏截图 送大礼包', 'ECS000700', '20190511/0_P_1490154412133.jpg', '', '20190511/0_thumb_P_1490154412972.jpg', '', '127.10', '112.22', '1', '2', '0', '183', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('29', '唐麦 T0耳机耳塞入耳式重低音线控带麦K歌耳麦手机笔记本电脑通用 K歌语音清晰 佩戴舒适牢靠 一年质', 'ECS000702', '20190511/0_P_1490154865922.jpg', '', '20190511/0_thumb_P_1490154865472.jpg', '', '128.10', '113.22', '1', '2', '0', '178', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('30', '【套餐送豪礼】Samsung/三星Galaxy C7 C7000全网通4G手机', 'ECS000703', '20190511/0_P_1490154962533.jpg', '', '20190511/0_thumb_P_1490154962657.jpg', '', '129.10', '114.22', '1', '2', '0', '37', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('31', '绿联 数据线安卓高速单头加长手机通用华为魅族小米2a快充电器2米 铝合金外壳+纯铜芯，充电快寿命长', 'ECS000705', '20190511/0_P_1490155064458.jpg', '', '20190511/0_thumb_P_1490155064353.jpg', '', '130.10', '115.22', '1', '2', '0', '179', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('32', 'Ordro/欧达 Z20 数码摄像机支持wifi 高清广角专业家用商务婚庆DV 可加热靴索尼影像24', 'ECS000704', '20190511/0_P_1490155022644.jpg', '', '20190511/0_thumb_P_1490155022026.jpg', '', '131.10', '116.22', '1', '2', '0', '40', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('33', '春季马丁靴男真皮男靴黄靴工装军靴韩版短靴沙漠靴高帮男鞋大黄靴 头层牛皮', 'ECS000685', '20190511/_P_1489109638947.jpg', '', '20190511/_thumb_P_1489109638568.jpg', '', '132.10', '117.22', '1', '6', '0', '77', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('34', '小米手环2蓝牙智能男女情侣运动计步器睡眠心率检测器手表支持IOS 精准心率监测 超长续航 触摸操作', 'ECS000708', '20190511/0_P_1490155421265.jpg', '', '20190511/0_thumb_P_1490155421675.jpg', '', '133.10', '118.22', '1', '2', '0', '35', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('35', '【情侣款】Camel骆驼男靴 时尚潮流英伦风马丁靴高帮皮靴 爆卖1万双！ 情侣马丁靴 好评如潮', 'ECS000684', '20190511/_P_1489109592551.jpg', '', '20190511/_thumb_P_1489109592194.jpg', '', '134.10', '119.22', '1', '6', '0', '77', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('36', 'New Balance/NB 500系列男鞋复古鞋跑步鞋休闲运动鞋GM500RSW', 'ECS000834', '20190511/_P_1490208873642.jpg', '', '20190511/_thumb_P_1490208873892.jpg', '', '135.10', '120.22', '1', '6', '0', '77', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('37', '阿迪达斯男鞋ZX750三叶草zx700跑步鞋S 76193 BB 1211 1213 1214 〓〓', 'ECS000901', '20190511/_P_1490915600932.jpg', '', '20190511/_thumb_P_1490915600852.jpg', '', '136.10', '121.22', '1', '6', '0', '77', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('38', 'NIKE耐克男鞋2017春款AIR ZOOM 33气垫休闲运动跑步鞋831352-001 气垫缓震 ', 'ECS000835', '20190511/0_P_1490208908709.jpg', '', '20190511/0_thumb_P_1490208908805.jpg', '', '137.10', '122.22', '1', '6', '0', '77', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('39', '伊米妮2017春新款简约时尚自然摔牛皮单肩手提大小版波士顿包女包 简约时尚 自然摔牛皮 单肩手提 波', 'ECS000677', '20190511/_P_1489108914582.jpg', '', '20190511/_thumb_P_1489108914748.jpg', '', '138.10', '123.22', '1', '6', '0', '457', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('40', '正品直邮Hermes爱马仕2017新款男鞋 时尚真皮休闲鞋H171325ZH02   7495', 'ECS000903', '20190511/_P_1490915817088.jpg', '', '20190511/_thumb_P_1490915817767.jpg', '', '139.10', '124.22', '1', '6', '0', '430', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('41', '莱尔斯丹 2017春新款复古粗跟圆头中跟高跟鞋女鞋通勤单鞋8M43701', 'ECS000676', '20190511/_P_1489108720266.jpg', '', '20190511/_thumb_P_1489108720352.jpg', '', '140.10', '125.22', '1', '6', '0', '440', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('42', 'topgloria/汤普葛罗舒适秋冬新款圆头女靴 舒适粗高跟短靴110360H 冬靴特价清仓2件9折', 'ECS000680', '20190511/_P_1489109047973.jpg', '', '20190511/_thumb_P_1489109047992.jpg', '', '141.10', '126.22', '1', '6', '0', '440', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('43', '特步女鞋2017春季新款运动鞋休闲鞋女慢跑步鞋旅游鞋轻便舒适时尚 早春特惠 爆款休闲女鞋 赠运费险', 'ECS000679', '20190511/_P_1489109006225.jpg', '', '20190511/_thumb_P_1489109006190.jpg', '', '142.10', '127.22', '1', '6', '0', '77', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('44', '舒适睡眠文胸罩无痕薄款运动内衣无钢圈女士调整型背心式少女聚拢 赠运费险 无痕无钢圈 舒适聚拢', 'ECS000632', '20190511/_P_1489100921740.jpg', '', '20190511/_thumb_P_1489100921260.jpg', '', '143.10', '128.22', '1', '5', '0', '68', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('45', 'Calvin Klein Underwear/CK 2017春夏新款 男士平角内裤NU8638 初上', 'ECS000790', '20190511/_P_1490174477679.jpg', '', '20190511/_thumb_P_1490174477219.jpg', '', '144.10', '129.22', '1', '5', '0', '68', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('46', '贝妍夏季薄款女士睡衣性感V领女南韩丝家居服运动可外穿中袖套装', 'ECS000792', '20190511/_P_1490174552581.jpg', '', '20190511/_thumb_P_1490174552009.jpg', '', '145.10', '130.22', '1', '5', '0', '68', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('47', '久慕雅黛诱惑情趣内衣诱惑女蕾丝吊带袜性感长筒吊袜丝袜吊袜带 性感显瘦 舒适防滑 细腻滑弹 纤长有型', 'ECS000793', '20190511/_P_1490174636201.jpg', '', '20190511/_thumb_P_1490174636261.jpg', '', '146.10', '131.22', '1', '5', '0', '393', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('48', '迷瞳盒装女士内裤莫代尔透气少女三角裤夏季性感低腰无痕大码裤头 5条盒装 莫代尔面料 小内裤 窄边三角', 'ECS000791', '20190511/_P_1490174512305.jpg', '', '20190511/_thumb_P_1490174512079.jpg', '', '147.10', '132.22', '1', '5', '0', '386', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('49', 'Konka/康佳 A48F 48英寸高清智能网络平板 LED液晶电视机 50 49 已累计爆售 1万', 'ECS000651', '20190511/_P_1489105435647.jpg', '', '20190511/_thumb_P_1489105435625.jpg', '', '148.10', '133.22', '1', '1', '0', '25', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('50', '三星C24F396FH曲面显示器23.5英寸电脑显示器24液晶显示屏幕超22', 'ECS000621', '20190511/_P_1489098399288.jpg', '', '20190511/_thumb_P_1489098399364.jpg', '', '149.10', '134.22', '1', '1', '0', '25', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('51', 'Skyworth/创维 55V9E 55吋4K超高清智能网络平板LED液晶电视机 50 25核智能 ', 'ECS000650', '20190511/_P_1489105391454.jpg', '', '20190511/_thumb_P_1489105391439.jpg', '', '150.10', '135.22', '1', '1', '0', '25', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('52', '都市丽人文胸旗舰店 林志玲有钢圈少女小胸文胸 聚拢 调整型内衣V 官方正品 赠运费险 收藏有礼 全国', 'ECS000794', '20190511/_P_1490174667488.jpg', '', '20190511/_thumb_P_1490174667568.jpg', '', '151.10', '136.22', '1', '5', '0', '68', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('53', 'Haier/海尔 KFR-33GW/10EBBAL13U1 1.5匹智能壁挂式家用空调挂机 智能操控', 'ECS000652', '20190511/_P_1489105504246.jpg', '', '20190511/_thumb_P_1489105504828.jpg', '', '152.10', '137.22', '1', '1', '0', '94', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('54', 'Midea/美的 MB80-eco31WD 8公斤变频洗衣机全自动波轮智能大容量 省电静音 0.9洗', 'ECS000655', '20190511/_P_1489105648365.jpg', '', '20190511/_thumb_P_1489105648570.jpg', '', '153.10', '138.22', '1', '1', '0', '96', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('55', 'Changhong/长虹 55G6 55吋液晶电视机4k曲面平板电视智能网络wifi 曲面 4K超清', 'ECS000693', '20190511/0_P_1490147169848.jpg', '', '20190511/0_thumb_P_1490147169031.jpg', '', '154.10', '139.22', '1', '1', '0', '25', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('56', 'SIEMENS/西门子 KA92NV66TI 双开门双门对开门家用变频无霜电冰箱', 'ECS000809', '20190511/0_P_1490175463169.jpg', '', '20190511/0_thumb_P_1490175463956.jpg', '', '155.10', '140.22', '1', '1', '0', '95', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('57', 'Haier/海尔 EG10014B39GU1 10公斤kg智能变频滚筒全自动洗衣机', 'ECS000698', '20190511/0_P_1490147669022.jpg', '', '20190511/0_thumb_P_1490147669795.jpg', '', '156.10', '141.22', '1', '1', '0', '96', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('58', 'Hisense/海信 LED49EC270W 49吋液晶平板电视机网络wifi彩电50', 'ECS000810', '20190511/_P_1490175562213.jpg', '', '20190511/_thumb_P_1490175562001.jpg', '', '157.10', '142.22', '1', '1', '0', '25', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('59', 'AUX/奥克斯 3匹除湿大功率广角送风空调立柜机 KFR-72LW/NSP1+3 自动升降面板 商居', 'ECS000811', '20190511/0_P_1490175614509.jpg', '', '20190511/0_thumb_P_1490175614076.jpg', '', '158.10', '143.22', '1', '1', '0', '94', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('60', '小吉 宝宝儿童家用小型全自动婴儿迷你滚筒洗衣机高温煮洗杀菌 杀菌安全 DD变频电机 睡眠级静音', 'ECS000813', '20190511/0_P_1490203982612.jpg', '', '20190511/0_thumb_P_1490203982587.jpg', '', '159.10', '144.22', '1', '1', '0', '96', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('61', '康佳kktv U65 65英寸4K超高清安卓智能网络平板led液晶电视机6070 4k超高清 6ms', 'ECS000842', '20190511/0_P_1490209464414.jpg', '', '20190511/0_thumb_P_1490209464078.jpg', '', '160.10', '145.22', '1', '1', '0', '25', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('62', 'Midea/美的 F60-21WB2(ES) 电热水器60升L 电 储水即热式洗澡沐浴 全网爆款 4', 'ECS000812', '20190511/0_P_1490203927077.jpg', '', '20190511/0_thumb_P_1490203927553.jpg', '', '161.10', '146.22', '1', '1', '0', '100', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('63', '韩都衣舍2017韩版女装夏装新款纯色镂空露腰短袖T恤OU7163堯 韩版版型 时尚镂空 舒适面料 个', 'ECS000767', '20190511/0_P_1490168991500.jpg', '', '20190511/0_thumb_P_1490168991357.jpg', '', '162.10', '147.22', '1', '5', '0', '65', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('64', '朴信惠明显同款韩都衣舍2017春装新款高领毛衣女套头宽松纯色韩版 领券下单立减/单件包邮/先拍先发货', 'ECS000769', '20190511/0_P_1490169074508.jpg', '', '20190511/0_thumb_P_1490169074855.jpg', '', '163.10', '148.22', '1', '5', '0', '65', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('65', '韩都衣舍2017春装新款女装春款拼接喇叭长袖连衣裙中长款时尚韩版 领券立减/单件包邮/七天无理由退换', 'ECS000772', '20190511/0_P_1490169186593.jpg', '', '20190511/0_thumb_P_1490169186098.jpg', '', '164.10', '149.22', '1', '5', '0', '65', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('66', '小米红米3s手机壳保护套红米3高配版指纹男女款潮版磨砂硬壳防摔 收藏截图 送大礼包', 'ECS000770', '20190511/0_P_1490169118805.jpg', '', '20190511/0_thumb_P_1490169118199.jpg', '', '165.10', '150.22', '1', '5', '0', '65', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('67', '韩都衣舍春季韩国ulzzang连帽卫衣女套头宽松百搭学生韩版潮bf风 领券下单立减/单件包邮/先拍先', 'ECS000771', '20190511/0_P_1490169151956.jpg', '', '20190511/0_thumb_P_1490169151557.jpg', '', '166.10', '151.22', '1', '5', '0', '65', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('68', '韩都衣舍2017韩版女装夏装新款时尚修身显瘦圆领条纹T恤OGY7711娋 显瘦版型 舒适面料 条纹元', 'ECS000768', '20190511/0_P_1490169030861.jpg', '', '20190511/0_thumb_P_1490169030177.jpg', '', '167.10', '152.22', '1', '5', '0', '65', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('69', '韩都衣舍2016新款秋冬款长袖连衣裙宽松学生冬季内搭打底裙子韩版 领券下单立减/单件包邮/先拍先发货', 'ECS000773', '20190511/0_P_1490169216204.jpg', '', '20190511/0_thumb_P_1490169216735.jpg', '', '168.10', '153.22', '1', '5', '0', '65', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('70', '韩都衣舍秋冬喇叭长袖针织衫毛衣女套头宽松纯色百搭学生韩版打底 领券下单立减/单件包邮/先拍先发货！', 'ECS000774', '20190511/0_P_1490169250153.jpg', '', '20190511/0_thumb_P_1490169250295.jpg', '', '169.10', '154.22', '1', '5', '0', '65', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('71', '韩都衣舍2017韩版女装春装新款条纹显瘦百搭宽松v领七分袖衬衫潮 领券立减/单件包邮/七天无理由退换', 'ECS000775', '20190511/0_P_1490169281344.jpg', '', '20190511/0_thumb_P_1490169281822.jpg', '', '170.10', '155.22', '1', '5', '0', '65', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('72', '17年春夏新款百搭半身裙蛋糕裙 a字裙 裤裙伞裙大码裙子超短裙女 松紧腰围 带裤边打底衬 涤针织面料', 'ECS000797', '20190511/_P_1490174794513.jpg', '', '20190511/_thumb_P_1490174794253.jpg', '', '171.10', '156.22', '1', '5', '0', '319', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('73', '逸阳女裤2017夏修身白色牛仔裤超短裤三分裤mm热裤女夏宽松大码潮', 'ECS000798', '20190511/0_P_1490174824411.jpg', '', '20190511/0_thumb_P_1490174824415.jpg', '', '172.10', '157.22', '1', '5', '0', '321', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('74', '韩美格2017春秋新款修身大码蕾丝网纱打底衫女长袖薄款圆领女T恤 全店商品 二件减5元 三件减10', 'ECS000799', '20190511/0_P_1490174858621.jpg', '', '20190511/0_thumb_P_1490174858959.jpg', '', '173.10', '158.22', '1', '5', '0', '316', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('75', 'Sony/索尼 KDL-48W650D 48英寸液晶高清 wifi网络 平板电视 正品保证 三期免息', 'ECS000843', '20190511/_P_1490209497990.jpg', '', '20190511/_thumb_P_1490209497109.jpg', '', '174.10', '159.22', '1', '1', '0', '25', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('76', '飞科全身水洗智能电动充电式剃须刀男士刮胡刀胡须刀刮胡子FS375 全身水洗 座充设计 智能操控系统', 'ECS000696', '20190511/0_P_1490147569272.jpg', '', '20190511/0_thumb_P_1490147569286.jpg', '', '175.10', '160.22', '1', '1', '0', '129', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('77', 'iRest/艾力斯特A90梦想舱按摩椅家用全自动老人全身太空舱多功能 足底滚轮按摩 肩部气囊按摩', 'ECS000814', '20190511/_P_1490204116852.jpg', '', '20190511/_thumb_P_1490204116970.jpg', '', '176.10', '161.22', '1', '1', '0', '28', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('78', '飞利浦剃须刀S5091 男士充电式电动剃须刀刮胡刀胡须刀三刀头正品 一机三用 多效理容 剃须 洁面 ', 'ECS000817', '20190511/0_P_1490204599024.jpg', '', '20190511/0_thumb_P_1490204599562.jpg', '', '177.10', '162.22', '1', '1', '0', '129', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('79', '正品康夫专业成人理发器电动充电电推剪静音理发工具电推子剃头刀', 'ECS000816', '20190511/0_P_1490204421811.jpg', '', '20190511/0_thumb_P_1490204421946.jpg', '', '178.10', '163.22', '1', '1', '0', '134', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('80', '飞科FR5222剃毛机毛球修剪器充电式衣服去球器吸打脱毛器除剃毛器 送备用刀头强劲去球不伤衣物', 'ECS000818', '20190511/_P_1490204632277.jpg', '', '20190511/_thumb_P_1490204632898.jpg', '', '179.10', '164.22', '1', '1', '0', '130', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('81', 'Philips/飞利浦齿间清洁工具可充电 HX8255/02', 'ECS000815', '20190511/0_P_1490204190814.jpg', '', '20190511/0_thumb_P_1490204190893.jpg', '', '180.10', '165.22', '1', '1', '0', '131', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('82', '泰昌足浴盆全自动按摩加热电动洗脚盆泡脚洗脚桶足浴器足疗盆家用 全自动足浴盆 送足浴大礼包', 'ECS000819', '20190511/_P_1490204727903.jpg', '', '20190511/_thumb_P_1490204727121.jpg', '', '181.10', '166.22', '1', '1', '0', '136', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('83', '丁阁仕A6L家用全身按摩椅 零重力太空舱全自动音乐按摩椅沙发 双SL导轨 深V零重力 泰式拉筋', 'ECS000852', '20190511/0_P_1490209823724.jpg', '', '20190511/0_thumb_P_1490209823347.jpg', '', '182.10', '167.22', '1', '1', '0', '28', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('84', '多迪斯泰A09按摩椅豪华全身家用按摩椅太空舱零重力按摩椅沙发 热销新品 SL型轨道 智能前移 自动检', 'ECS000853', '20190511/0_P_1490209865488.jpg', '', '20190511/0_thumb_P_1490209865579.jpg', '', '183.10', '168.22', '1', '1', '0', '28', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('85', '[OTO]EV-01按摩椅家用全身腰部靠垫多功能全自动太空舱沙发椅老人 正品保障 小巧实用 美臀塑形', 'ECS000854', '20190511/0_P_1490209897486.jpg', '', '20190511/0_thumb_P_1490209897162.jpg', '', '184.10', '169.22', '1', '1', '0', '28', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('86', '正品老人豪华按摩椅家用颈椎按摩器颈部全身多功能电动沙发椅特价', 'ECS000855', '20190511/0_P_1490209928980.jpg', '', '20190511/0_thumb_P_1490209928934.jpg', '', '185.10', '170.22', '1', '1', '0', '28', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('87', '希玛 红外线测温仪手持式工业红外测温枪高精度高温电子温度计 配硬盒 送31件套螺丝批 30天只换不修', 'ECS000831', '20190511/_P_1490205226227.jpg', '', '20190511/_thumb_P_1490205226947.jpg', '', '186.10', '171.22', '1', '1', '0', '144', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('88', '东成角磨机S1M-FF03/04-100A手提砂轮切割机角向磨光机抛光机东城', 'ECS000857', '20190511/_P_1490209991608.jpg', '', '20190511/_thumb_P_1490209991988.jpg', '', '187.10', '172.22', '1', '1', '0', '29', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('89', '龙韵电链锯 大功率自喷油手提电锯伐木锯家用木工锯链条电动工具 免费换新 3年质保 安全耐用 3C认证', 'ECS000858', '20190511/_P_1490210207515.jpg', '', '20190511/_thumb_P_1490210207955.jpg', '', '188.10', '173.22', '1', '1', '0', '29', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('90', '龙韵电动扳手 锂电扳手 无刷电机充电扳手 扭力冲击板手 无刷电机 档位调节 双档定制', 'ECS000860', '20190511/0_P_1490210322722.jpg', '', '20190511/0_thumb_P_1490210322406.jpg', '', '189.10', '174.22', '1', '1', '0', '29', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('91', '百锐3.6V电动螺丝刀迷你电起子充电式小型电改锥锂电变形电批包邮 3.6V双向控制 带灯照明 可变型', 'ECS000859', '20190511/_P_1490210242810.jpg', '', '20190511/_thumb_P_1490210242674.jpg', '', '190.10', '175.22', '1', '1', '0', '29', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('92', '醒狮 多功能手提木工刨家用轻型大功率电刨子电动工具套装压刨机', 'ECS000861', '20190511/0_P_1490210364832.jpg', '', '20190511/0_thumb_P_1490210364065.jpg', '', '191.10', '176.22', '1', '1', '0', '29', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('93', '【新品发售】 Beats Beats Solo3 Wireless 头戴式无线蓝牙耳机 分期免息 全', 'ECS000671', '20190511/_P_1489108094834.jpg', '', '20190511/_thumb_P_1489108094809.jpg', '', '192.10', '177.22', '1', '5', '0', '67', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('94', 'Apple/苹果 Apple Watch Series 2 智能手表42mm', 'ECS000707', '20190511/0_P_1490155369286.jpg', '', '20190511/0_thumb_P_1490155369071.jpg', '', '193.10', '178.22', '1', '5', '0', '67', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('95', '74超薄非球面镜片高度近视眼镜片近视镜片防蓝光配眼镜镜片加工 套餐价低至359元 6款镜架任您选', 'ECS000779', '20190511/0_P_1490173626561.jpg', '', '20190511/0_thumb_P_1490173626075.jpg', '', '194.10', '179.22', '1', '5', '0', '67', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('96', 'NewEra纽亦华 新款MLB棒球帽男女字母NY洋基LA道奇调节平沿嘻哈帽 官方正品', 'ECS000777', '20190511/_P_1490173541442.jpg', '', '20190511/_thumb_P_1490173541696.jpg', '', '195.10', '180.22', '1', '5', '0', '67', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('97', 'NewEra纽亦华 新款MLB棒球帽男女字母NY洋基LA道奇调节平沿嘻哈帽 官方正品', 'ECS000778', '20190511/0_thumb_G_1490173534127.jpg', '', '20190511/0_thumb_G_1490173534127.jpg', '', '196.10', '181.22', '1', '5', '0', '370', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('98', '男女韩版纯棉可爱冬季个性防尘情侣口罩保暖透气黑色时尚潮款春 15元一共2个口罩 防尘个性时尚', 'ECS000780', '20190511/0_P_1490173663778.jpg', '', '20190511/0_thumb_P_1490173663175.jpg', '', '197.10', '182.22', '1', '5', '0', '67', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('99', '宝石蝶真丝围巾女士春秋季高档丝巾重磅桑蚕丝大方巾披肩丝绸礼品 16姆米重磅真丝丝滑缎面90方巾礼盒包', 'ECS000781', '20190511/0_P_1490173699715.jpg', '', '20190511/0_thumb_P_1490173699210.jpg', '', '198.10', '183.22', '1', '5', '0', '67', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('100', '6林志玲花样姐姐同款海伦凯勒太阳镜女 偏光蛤蟆镜潮墨镜H8535 花样姐姐同款 林志玲设计 炫彩镂空', 'ECS000782', '20190511/_P_1490173863814.jpg', '', '20190511/_thumb_P_1490173863123.jpg', '', '199.10', '184.22', '1', '5', '0', '67', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('101', '美的电磁炉Midea/美的 WK2102电磁炉特价家用触摸屏电池炉灶正品 已爆售百万多台 防滑触摸屏', 'ECS000646', '20190511/_P_1489105141976.jpg', '', '20190511/_thumb_P_1489105141608.jpg', '', '200.10', '185.22', '1', '1', '0', '122', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('102', 'Midea/美的 MB-WFS5017TM电饭煲5L智能正品电饭锅家用3-4-6-7-8人 下单立减', 'ECS000648', '20190511/_P_1489105264996.jpg', '', '20190511/_thumb_P_1489105264940.jpg', '', '201.10', '186.22', '1', '1', '0', '115', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('103', 'SUPOR/苏泊尔 SWF17E18A家用电热水壶304不锈钢烧水壶开水壶煮茶 单店爆卖 超70万台', 'ECS000653', '20190511/_P_1489105553208.jpg', '', '20190511/_thumb_P_1489105553910.jpg', '', '202.10', '187.22', '1', '1', '0', '126', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('104', '美的电磁炉Midea/美的 C21-WT2116超薄触摸屏电磁炉特价家用正品 纤薄机身 二级能效 更', 'ECS000689', '20190511/0_P_1490146589097.jpg', '', '20190511/0_thumb_P_1490146589627.jpg', '', '203.10', '188.22', '1', '1', '0', '122', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('105', 'SUPOR/苏泊尔 CFXB40HC807-120家用智能IH球釜电饭煲3-4人正品4L', 'ECS000690', '20190511/0_P_1490147016710.jpg', '', '20190511/0_thumb_P_1490147016553.jpg', '', '204.10', '189.22', '1', '1', '0', '27', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('106', 'Xiaomi/小米 米家IH电饭煲 小米智能家用wifi电饭锅3L手机控制 小米专卖店 正品授权', 'ECS000691', '20190511/0_P_1490147066713.jpg', '', '20190511/0_thumb_P_1490147066069.jpg', '', '205.10', '190.22', '1', '1', '0', '27', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('107', 'Galanz/格兰仕 G80F23CN3L-C2(R0)正品微波炉23L 智能光波炉家用 800w速', 'ECS000697', '20190511/0_P_1490147626865.jpg', '', '20190511/0_thumb_P_1490147626196.jpg', '', '206.10', '191.22', '1', '1', '0', '119', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('108', '【12期免息】Panasonic/松下 SR-PE401-K 新品可变压力IH电饭煲4L 送豪华大礼', 'ECS000802', '20190511/_P_1490175192223.jpg', '', '20190511/_thumb_P_1490175192888.jpg', '', '207.10', '192.22', '1', '1', '0', '27', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('109', 'Joyoung/九阳 DJ13B-N621SG全自动豆浆机家用特价正品旗舰店智能 会做饭煲汤 易清洗', 'ECS000804', '20190511/_P_1490175276671.jpg', '', '20190511/_thumb_P_1490175276096.jpg', '', '208.10', '193.22', '1', '1', '0', '116', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('110', 'Joyoung/九阳 Y-50C15电压力锅高压锅正品双胆智能预约5L铁釜新品 土灶铁斧 双重安全锁', 'ECS000803', '20190511/_P_1490175239097.jpg', '', '20190511/_thumb_P_1490175239740.jpg', '', '209.10', '194.22', '1', '1', '0', '27', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('111', 'Donlim/东菱 DL-KF500S 咖啡机家用全半自动意式商用蒸汽式打奶泡 不锈钢机身 20帕进', 'ECS000805', '20190511/0_P_1490175311789.jpg', '', '20190511/0_thumb_P_1490175311366.jpg', '', '210.10', '195.22', '1', '1', '0', '118', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('112', 'Midea/美的 TLC2000面包机家用全自动智能多功能不锈钢机身触摸屏 逼格好物 钢化上盖 时尚', 'ECS000806', '20190511/0_P_1490175339128.jpg', '', '20190511/0_thumb_P_1490175339297.jpg', '', '211.10', '196.22', '1', '1', '0', '117', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('113', 'TOSOT/大松 GDF-2001C格力电饭煲迷你智能全自动家用 电饭锅1-2人 格力出品 数码显示', 'ECS000848', '20190511/_P_1490209692088.jpg', '', '20190511/_thumb_P_1490209692646.jpg', '', '212.10', '197.22', '1', '1', '0', '27', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('114', '美的智能家用多功能双胆电压力锅高压锅饭煲正品WCS5025 5L小家电 5L双胆 智能预约 大面板', 'ECS000849', '20190511/_P_1490209723971.jpg', '', '20190511/_thumb_P_1490209723636.jpg', '', '213.10', '198.22', '1', '1', '0', '27', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('115', '锐奔水钻机手持式钻孔机混泥土打孔钻眼机大功率空调开孔两用电钻 力大威猛 工业级 全铜电机 带保护离合', 'ECS000862', '20190511/0_P_1490210428247.jpg', '', '20190511/0_thumb_P_1490210428859.jpg', '', '214.10', '199.22', '1', '1', '0', '29', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('116', '红叶伞遮阳伞防紫外线黑胶防晒晴雨两用太阳伞女糖果色折叠雨伞大 黑胶防晒 晴雨两用 糖果色 都市风情', 'ECS000783', '20190511/0_P_1490173894462.jpg', '', '20190511/0_thumb_P_1490173894937.jpg', '', '215.10', '200.22', '1', '5', '0', '67', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('117', 'RW/容威 GL-166迷你电饭锅2人-3人家用宿舍小型1-2-3人正品电饭煲 智能预约 1.8L容', 'ECS000850', '20190511/_P_1490209756075.jpg', '', '20190511/_thumb_P_1490209756656.jpg', '', '216.10', '201.22', '1', '1', '0', '27', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('118', '海尔落地扇家用电风扇遥控静音 办公室风扇 学生宿舍立式摇头风扇 五叶飓风 全国联保 大风力 超静音', 'ECS000692', '20190511/0_P_1490147116139.jpg', '', '20190511/0_thumb_P_1490147116915.jpg', '', '217.10', '202.22', '1', '1', '0', '26', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('119', 'TCL取暖器小太阳电暖器台式电暖气暖风机烤火炉电暖风家用学生 700W功率 两档调节 碳纤维发热', 'ECS000694', '20190511/0_P_1490147285537.jpg', '', '20190511/0_thumb_P_1490147285167.jpg', '', '218.10', '203.22', '1', '1', '0', '110', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('120', '奥克斯空调扇冷暖两用遥控冷风扇制冷机小空调冷风机水冷空调冷气 冷暖两用 净化加湿！四季可用', 'ECS000823', '20190511/_P_1490204926537.jpg', '', '20190511/_thumb_P_1490204926379.jpg', '', '219.10', '204.22', '1', '1', '0', '26', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('121', '松下空气净化器家用静音除雾霾甲醛PM2.5异味烟味 卧室氧吧PXF35C 质保两年 纳米水离子 适用', 'ECS000822', '20190511/_P_1490204886674.jpg', '', '20190511/_thumb_P_1490204886080.jpg', '', '220.10', '205.22', '1', '1', '0', '103', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('122', '美悦达电风扇空气涡轮对流循环扇 家用静音遥控台式换气扇节能扇 空气循环对流净化 八档无级调节 智能遥', 'ECS000820', '20190511/_P_1490204807769.jpg', '', '20190511/_thumb_P_1490204807891.jpg', '', '221.10', '206.22', '1', '1', '0', '26', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('123', '落地式加湿器家用静音 卧室大容量办公室孕妇空调创意空气香薰机 落地加湿器 不占用桌面空间高出雾口大雾', 'ECS000821', '20190511/_P_1490204849080.jpg', '', '20190511/_thumb_P_1490204849143.jpg', '', '222.10', '207.22', '1', '1', '0', '104', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('124', '美国iRobot529经典组合扫地机器人家用全自动智能擦地机国行热卖 告别手动 每日净尘 咨询送配件', 'ECS000824', '20190511/_P_1490204961251.jpg', '', '20190511/_thumb_P_1490204961313.jpg', '', '223.10', '208.22', '1', '1', '0', '105', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('125', '申花饮水机立式冷热办公室冰温热水机家用玻璃节能制冷开水机 32年老品牌 多仓速发 晒单奖20元', 'ECS000825', '20190511/_P_1490205002913.jpg', '', '20190511/_thumb_P_1490205002108.jpg', '', '224.10', '209.22', '1', '1', '0', '109', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('126', '美的壁扇FW40-F3挂壁式工业电风扇 家用台式餐厅摇头墙16寸电扇 热销壁扇 团购优选 3档风速', 'ECS000844', '20190511/_P_1490209562656.jpg', '', '20190511/_thumb_P_1490209562894.jpg', '', '225.10', '210.22', '1', '1', '0', '26', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('127', '秋冬新款加绒圆领套头卫衣男青年男生韩版潮流学生休闲外套男', 'ECS000626', '20190511/_P_1489099551210.jpg', '', '20190511/_thumb_P_1489099551835.jpg', '', '226.10', '211.22', '1', '5', '0', '66', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('128', '碧利沙电风扇家用落地扇宿舍台扇静音摇头小台式电扇立式学生风扇', 'ECS000845', '20190511/0_P_1490209587333.jpg', '', '20190511/0_thumb_P_1490209587331.jpg', '', '227.10', '212.22', '1', '1', '0', '26', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('129', '凉师傅无叶风扇静音落地扇家用立式遥控电风扇办公室循环扇客厅6A 凉师傅 无叶风扇 两年保修', 'ECS000846', '20190511/_P_1490209617748.jpg', '', '20190511/_thumb_P_1490209617740.jpg', '', '228.10', '213.22', '1', '1', '0', '26', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('130', '2017春装新款男士卫衣套头圆领韩版潮流时尚男生休闲外套', 'ECS000627', '20190511/_P_1489099784621.jpg', '', '20190511/_thumb_P_1489099784881.jpg', '', '229.10', '214.22', '1', '5', '0', '66', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('131', '秋季新款男士套头卫衣印花外套韩版简约百搭潮流男生上衣服', 'ECS000625', '20190511/_P_1489099444655.jpg', '', '20190511/_thumb_P_1489099444901.jpg', '', '230.10', '215.22', '1', '5', '0', '66', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('132', '马克华菲短袖T恤 夏装新款舒适圆领条纹拼接男简约修身短袖上衣', 'ECS000866', '20190511/0_P_1490211843690.jpg', '', '20190511/0_thumb_P_1490211843028.jpg', '', '231.10', '216.22', '1', '5', '0', '66', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('133', '森马夹克 2016冬装新款男士飞行夹克贴布绣立领休闲外套韩版潮流', 'ECS000785', '20190511/_P_1490174212677.jpg', '', '20190511/_thumb_P_1490174212863.jpg', '', '232.10', '217.22', '1', '5', '0', '66', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('134', 'HLA/海澜之家撞色长袖T恤春季热卖圆领修身拼接T恤男 简约圆领 微弹修身 撞色拼接 触感柔软', 'ECS000784', '20190511/_P_1490174022605.jpg', '', '20190511/_thumb_P_1490174022801.jpg', '', '233.10', '218.22', '1', '5', '0', '66', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('135', 'YOHO有货潮牌LAL/数字贴布连帽套头卫衣男女通用 吴亦凡亲着同款 春夏焕新季，3.21日00:0', 'ECS000787', '20190511/_P_1490174307606.jpg', '', '20190511/_thumb_P_1490174307249.jpg', '', '234.10', '219.22', '1', '5', '0', '66', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('136', '裤子男士哈伦裤春季新款2017束脚裤修身韩版潮流小脚裤男裤休闲裤 弹力', 'ECS000786', '20190511/_P_1490174245373.jpg', '', '20190511/_thumb_P_1490174245021.jpg', '', '235.10', '220.22', '1', '5', '0', '346', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('137', 'HLA/海澜之家休闲西服2017春季新品平驳领时尚西装男单西外套 平驳领型 胸针装饰 青春休闲 舒适', 'ECS000788', '20190511/_P_1490174348733.jpg', '', '20190511/_thumb_P_1490174348731.jpg', '', '236.10', '221.22', '1', '5', '0', '66', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('138', '森马针织衫 冬季男圆领套头青年毛衣小清新线衫毛衫纯色韩版学生', 'ECS000789', '20190511/_P_1490174418377.jpg', '', '20190511/_thumb_P_1490174418305.jpg', '', '237.10', '222.22', '1', '5', '0', '66', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('139', 'Apple/苹果 27” Retina 5K显示屏 iMac:3.3GHz处理器2TB存储', 'ECS000622', '20190511/_P_1489098631976.jpg', '', '20190511/_thumb_P_1489098631255.jpg', '', '238.10', '223.22', '1', '3', '0', '47', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('140', 'Razer雷蛇 雨林狼蛛幻彩版 Ornata Chroma 机械式薄膜游戏键盘', 'ECS000617', '20190511/_P_1489097667511.jpg', '', '20190511/_thumb_P_1489097667603.jpg', '', '239.10', '224.22', '1', '3', '0', '214', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('141', '火影 金钢 T2 1050Ti游戏本 i7-7700HQ游戏笔记本电脑 手提电脑 32色RGB键盘 ', 'ECS000711', '20190511/0_P_1490159412267.jpg', '', '20190511/0_thumb_P_1490159412072.jpg', '', '240.10', '225.22', '1', '3', '0', '47', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('142', '南极人法兰绒毛毯加厚秋单人双人珊瑚绒毯子双层冬季被子盖毯 加厚保暖 不掉毛 柔软面料 亲肤透气', 'ECS000656', '20190511/_P_1489105964789.jpg', '', '20190511/_thumb_P_1489105964157.jpg', '', '241.10', '226.22', '1', '4', '0', '272', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('143', 'Razer雷蛇 太攀皇蛇+黑寡妇蜘蛛X 机械键盘鼠标电竞游戏套装 酷黑包装 三色灯光系统 顺丰包邮', 'ECS000715', '20190511/0_P_1490159823504.jpg', '', '20190511/0_thumb_P_1490159823209.jpg', '', '242.10', '227.22', '1', '3', '0', '225', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('144', '创意真皮床双人床现代婚床1.8米1.5榻榻米床储物床皮艺床软床大床 床侧储物 升降靠背 双ll价格 ', 'ECS000657', '20190511/_P_1489106154837.jpg', '', '20190511/_thumb_P_1489106154795.jpg', '', '243.10', '228.22', '1', '4', '0', '311', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('145', '丹麦innovation北欧小户型客厅双人多功能沙发床三人布艺沙发IDUN 原创设计 独立簧坐垫 欧', 'ECS000661', '20190511/_P_1489106318879.jpg', '', '20190511/_thumb_P_1489106318041.jpg', '', '244.10', '229.22', '1', '4', '0', '59', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('146', '李军塑料防滑衣架衣挂撑子裤架衣服架成人晾衣架晒衣架子儿童衣架 成人衣架普通 款38cm 50个只要 ', 'ECS000665', '20190511/_P_1489106800293.jpg', '', '20190511/_thumb_P_1489106800594.jpg', '', '245.10', '230.22', '1', '4', '0', '312', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('147', '超诺淋浴套装 太空铝增压花洒水龙头 三档冷热可升降喷头带下出水 拒绝生锈 十年质保 历久弥新', 'ECS000659', '20190511/_P_1489106244182.jpg', '', '20190511/_thumb_P_1489106244297.jpg', '', '246.10', '231.22', '1', '4', '0', '257', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('148', '马氏皇庭布艺沙发组合现代简约大小户型客厅家具转角整装皮布沙发 舒适棉麻可拆洗 颜色可定制 极速发货', 'ECS000660', '20190511/_P_1489106283486.jpg', '', '20190511/_thumb_P_1489106283096.jpg', '', '247.10', '232.22', '1', '4', '0', '284', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('149', '寄居蟹304不锈钢筷子勺子韩式餐具套装', 'ECS000720', '20190511/0_P_1490161056113.jpg', '', '20190511/0_thumb_P_1490161056584.jpg', '', '248.10', '233.22', '1', '4', '0', '259', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('150', '美宝莲绝色持久唇膏 粉红警报 魅惑炫亮润泽 唇彩口红', 'ECS000639', '20190511/_P_1489104544618.jpg', '', '20190511/_thumb_P_1489104544803.jpg', '', '249.10', '234.22', '1', '7', '0', '496', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('151', '杰威尔发胶定型喷雾男士干胶头发持久定型造型啫喱水发蜡蓬松清香 快速定型，蓬松清香，不起白屑，买2送1', 'ECS000645', '20190511/_P_1489105091095.jpg', '', '20190511/_thumb_P_1489105091338.jpg', '', '250.10', '235.22', '1', '7', '0', '488', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('152', '美宝莲 宝蓓爱炫彩护唇膏 润唇膏 波普风 保湿滋润 显色丰润 一扫唇色暗沉 卖萌必备', 'ECS000884', '20190511/0_P_1490224263776.jpg', '', '20190511/0_thumb_P_1490224263168.jpg', '', '251.10', '236.22', '1', '7', '0', '496', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('153', 'Maybelline/美宝莲净澈多效卸妆水清爽型 舒缓 深层清洁 舒缓 补水 深层清洁 卸妆', 'ECS000886', '20190511/0_P_1490224320593.jpg', '', '20190511/0_thumb_P_1490224320884.jpg', '', '252.10', '237.22', '1', '7', '0', '496', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('154', '美宝莲宝蓓护唇膏 宝贝护唇膏 润唇膏 唇彩口红保湿 滋润', 'ECS000885', '20190511/0_P_1490224291415.jpg', '', '20190511/0_thumb_P_1490224291402.jpg', '', '253.10', '238.22', '1', '7', '0', '496', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('155', '美宝莲 色秀指甲油 糖果色 专业彩妆美甲 专柜正品 绚丽色彩 多色可选', 'ECS000887', '20190511/0_P_1490224351882.jpg', '', '20190511/0_thumb_P_1490224351056.jpg', '', '254.10', '239.22', '1', '7', '0', '496', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('156', '美宝莲 精纯矿物专业彩妆化妆刷 散粉刷 腮红刷 粉底刷 山羊毛 专业彩妆化妆刷', 'ECS000888', '20190511/0_P_1490224379171.jpg', '', '20190511/0_thumb_P_1490224379498.jpg', '', '255.10', '240.22', '1', '7', '0', '496', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('157', '美宝莲 奇妙净颜盈润洁面膏100ml 保湿 控油 滋润 祛除多余油脂 不干燥 不紧绷', 'ECS000889', '20190511/0_P_1490224406180.jpg', '', '20190511/0_thumb_P_1490224406930.jpg', '', '256.10', '241.22', '1', '7', '0', '496', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('158', '美宝莲 顺滑恒久眉笔流畅线条 利落型眉 可长久持妆 新品上市 流畅线条 利落型眉 长效持妆', 'ECS000890', '20190511/0_P_1490224435891.jpg', '', '20190511/0_thumb_P_1490224435860.jpg', '', '257.10', '242.22', '1', '7', '0', '496', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('159', '美宝莲 好气色潮色双搭轻垫霜提亮肌肤白皙气垫CC霜凸显好气色 提亮肌肤', 'ECS000891', '20190511/0_P_1490224462811.jpg', '', '20190511/0_thumb_P_1490224462894.jpg', '', '258.10', '243.22', '1', '7', '0', '496', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('160', 'Voyo VBook V3奔腾版13.3英寸超薄固态Win10平板电脑二合一笔记本 送礼包 英特尔奔', 'ECS000717', '20190511/0_P_1490159924611.jpg', '', '20190511/0_thumb_P_1490159924785.jpg', '', '259.10', '244.22', '1', '3', '0', '25', '', '0.00', 'g');
INSERT INTO `tp_goods` VALUES ('161', '宝莲 透净瞬洁净妆乳 120ml 卸妆乳 卸妆液卸妆无残留专柜正品 安全温和 彻底清洁 水润清爽', 'ECS000892', '20190511/0_P_1490224493316.jpg', '', '20190511/0_thumb_P_1490224493856.jpg', '', '260.10', '245.22', '1', '7', '0', '496', '', '0.00', 'g');

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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_goods_img`
-- -----------------------------
INSERT INTO `tp_goods_img` VALUES ('29', '60', '20190602\\9f62c7bc3dfbc846ee44c76c85450008.jpg', '20190602\\sm_9f62c7bc3dfbc846ee44c76c85450008.jpg', '20190602\\mid_9f62c7bc3dfbc846ee44c76c85450008.jpg', '20190602\\big_9f62c7bc3dfbc846ee44c76c85450008.jpg');

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
INSERT INTO `tp_recpos_item` VALUES ('3', '60', '1');
INSERT INTO `tp_recpos_item` VALUES ('2', '60', '1');
INSERT INTO `tp_recpos_item` VALUES ('4', '12', '2');
INSERT INTO `tp_recpos_item` VALUES ('1', '60', '1');
INSERT INTO `tp_recpos_item` VALUES ('3', '59', '1');
INSERT INTO `tp_recpos_item` VALUES ('4', '5', '2');
INSERT INTO `tp_recpos_item` VALUES ('4', '16', '2');
INSERT INTO `tp_recpos_item` VALUES ('4', '17', '2');
INSERT INTO `tp_recpos_item` VALUES ('4', '62', '2');
INSERT INTO `tp_recpos_item` VALUES ('4', '63', '2');
INSERT INTO `tp_recpos_item` VALUES ('4', '6', '2');
INSERT INTO `tp_recpos_item` VALUES ('4', '18', '2');
INSERT INTO `tp_recpos_item` VALUES ('4', '19', '2');
INSERT INTO `tp_recpos_item` VALUES ('4', '70', '2');
INSERT INTO `tp_recpos_item` VALUES ('4', '71', '2');
INSERT INTO `tp_recpos_item` VALUES ('4', '1', '2');
INSERT INTO `tp_recpos_item` VALUES ('4', '8', '2');
INSERT INTO `tp_recpos_item` VALUES ('4', '22', '2');
INSERT INTO `tp_recpos_item` VALUES ('4', '23', '2');
INSERT INTO `tp_recpos_item` VALUES ('4', '24', '2');

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
INSERT INTO `tp_shopcate` VALUES ('244', '网络配件', '', '', '', '1', '50', '44');
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
INSERT INTO `tp_shopcate` VALUES ('419', '电脑包', '', '', '', '1', '50', '19');
INSERT INTO `tp_shopcate` VALUES ('420', '休闲运动包', '', '', '', '1', '50', '19');
INSERT INTO `tp_shopcate` VALUES ('421', '相机包', '', '', '', '1', '50', '19');
INSERT INTO `tp_shopcate` VALUES ('422', '腰包/胸包', '', '', '', '1', '50', '19');
INSERT INTO `tp_shopcate` VALUES ('423', '登山包', '', '', '', '1', '50', '19');
INSERT INTO `tp_shopcate` VALUES ('424', '旅行配件', '', '', '', '1', '50', '19');
INSERT INTO `tp_shopcate` VALUES ('425', '书包', '', '', '', '1', '50', '19');
INSERT INTO `tp_shopcate` VALUES ('426', '妈咪包', '', '', '', '1', '50', '19');
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
-- Table structure for `tp_shopcate_brand`
-- -----------------------------
DROP TABLE IF EXISTS `tp_shopcate_brand`;
CREATE TABLE `tp_shopcate_brand` (
  `cb_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cb_brandid` varchar(100) NOT NULL COMMENT '关联的品牌id列表',
  `cb_proimg` varchar(60) NOT NULL COMMENT '推广图地址',
  `cb_prourl` varchar(60) NOT NULL COMMENT '推广图链接',
  `cb_shopcateid` mediumint(9) NOT NULL COMMENT '对应主栏目id',
  `cb_status` tinyint(4) NOT NULL COMMENT '显示1 隐藏0',
  PRIMARY KEY (`cb_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_shopcate_brand`
-- -----------------------------
INSERT INTO `tp_shopcate_brand` VALUES ('1', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20', '20190504\\1490847672639256000.jpg', 'https://www.dscmall.cn/', '1', '1');
INSERT INTO `tp_shopcate_brand` VALUES ('2', '21,22,23,24,25,26,27,28,29,30', '20190504\\1490296477657287023.jpg', 'https://www.dscmall.cn/', '2', '1');
INSERT INTO `tp_shopcate_brand` VALUES ('3', '31,32,33,34,35,36,37,38,39', '20190504\\1490296350661886591.jpg', 'https://www.dscmall.cn/', '3', '1');
INSERT INTO `tp_shopcate_brand` VALUES ('4', '40,41,42,43,44,45,46,47', '20190504\\1490847695352345291.jpg', 'https://www.dscmall.cn/', '4', '1');
INSERT INTO `tp_shopcate_brand` VALUES ('5', '48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67', '20190504\\1490296743207336995.jpg', 'https://www.dscmall.cn/', '5', '1');
INSERT INTO `tp_shopcate_brand` VALUES ('6', '68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86', '20190504\\1490296765062943272.jpg', 'https://www.dscmall.cn/', '6', '1');
INSERT INTO `tp_shopcate_brand` VALUES ('7', '87,88,89,90,91,92,93,94,95', '20190504\\1490847656340816332.jpg', 'https://www.dscmall.cn/', '7', '1');

-- -----------------------------
-- Table structure for `tp_shopcate_words`
-- -----------------------------
DROP TABLE IF EXISTS `tp_shopcate_words`;
CREATE TABLE `tp_shopcate_words` (
  `cw_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `cw_shopcateid` mediumint(9) NOT NULL COMMENT '关联的顶级栏目ID',
  `cw_word` varchar(60) NOT NULL COMMENT '词汇',
  `cw_linkurl` varchar(60) NOT NULL COMMENT '链接url',
  `cw_status` tinyint(4) NOT NULL COMMENT '显示1 隐藏0',
  PRIMARY KEY (`cw_id`)
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `tp_shopcate_words`
-- -----------------------------
INSERT INTO `tp_shopcate_words` VALUES ('1', '1', '品牌日', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('2', '2', '手机频道', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('4', '3', '家装城', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('3', '4', '本周热卖', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('5', '5', '男装', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('6', '6', '男鞋', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('7', '7', '清洁用品', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('8', '1', '家电城', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('9', '1', '智能生活馆', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('10', '1', '京东净化馆', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('11', '1', '京东帮服务店', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('12', '1', '值得买精选', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('13', '2', '网上营业厅', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('14', '2', '配件城', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('15', '2', '影像Club', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('16', '2', '手机社区', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('17', '2', '以旧换新', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('18', '3', '游戏部落', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('19', '3', '智能社区', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('20', '3', 'GAME+', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('21', '3', '装机大师', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('22', '3', '办公生活馆', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('23', '4', '居家日用', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('24', '4', '精品家具', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('25', '4', '家装建材', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('26', '4', '厨房达人', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('27', '4', '猫猫狗狗', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('28', '5', '女装', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('29', '5', '内衣', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('30', '5', '国际品牌', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('31', '6', '女鞋', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('32', '6', '箱包', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('33', '6', '钟表', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('34', '6', '奢侈品', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('35', '6', '女包', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('36', '7', '美妆商城', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('37', '7', '官方旗舰店', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('38', '7', '美妆特卖', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('39', '7', '妆比社', '', '1');
INSERT INTO `tp_shopcate_words` VALUES ('40', '7', '全球购美妆', '', '1');

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

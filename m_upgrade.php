<?php 
pdo_query("CREATE TABLE IF NOT EXISTS `ims_hcstep_activity` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11),
`step` varchar(255),
`entryfee` varchar(255),
`displayorder` varchar(255),
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_activitylog` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11),
`user_id` int(11),
`aid` int(11)    COMMENT '活动id',
`timestamp` varchar(255),
`time` varchar(255),
`entryfee` varchar(255),
`step` varchar(255),
`status` int(11) NOT NULL   COMMENT '0未达标1已达标，未发奖2已达标，已发奖',
`jiangjin` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_adv` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11),
`advname` varchar(50),
`thumb` varchar(255),
`displayorder` int(11),
`enabled` int(11),
`jump` int(11) NOT NULL   COMMENT '跳转方式 0 不跳转 1 小程序',
`xcxpath` varchar(255) NOT NULL,
`xcxappid` varchar(255) NOT NULL,
`h5` varchar(255) NOT NULL,
`tippic` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_awards` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11),
`goods_name` varchar(255),
`main_img` varchar(255),
`goods_img` varchar(2555),
`price` decimal(10,2),
`inventory` varchar(255),
`express` varchar(255),
`status` int(11)    COMMENT '1 上架 2 下架',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_bushulog` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`user_id` int(11),
`uniacid` int(11),
`bushu` varchar(255),
`money` varchar(255),
`time` varchar(255),
`timestamp` varchar(255),
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_formid` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`user_id` int(11),
`formid` varchar(255),
`status` int(11) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_goods` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11),
`goods_name` varchar(255),
`main_img` varchar(255),
`goods_img` varchar(2555),
`price` decimal(10,2),
`inventory` varchar(255),
`express` varchar(255),
`status` int(11)    COMMENT '1 上架 2 下架',
`displayorder` int(11) NOT NULL,
`goodsinfo` varchar(9999) NOT NULL,
`paytype` int(11) NOT NULL   COMMENT '支付方式',
`price2` decimal(10,2) NOT NULL   COMMENT '步数加钱 步数币',
`rmb` varchar(255) NOT NULL   COMMENT '人民币',
`maxrmb` varchar(255) NOT NULL   COMMENT '人民币原价',
`selltype` int(11) NOT NULL   COMMENT '0普通1核销',
`shop_id` int(11) NOT NULL,
`minpeople` varchar(20) NOT NULL   COMMENT '邀请人数',
`maxbuy` varchar(20) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_guanzhulog` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11),
`user_id` int(11),
`step` varchar(255),
`time` varchar(255),
`status` int(11) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_hongbao` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11),
`hongbaopic` varchar(255),
`displayorder` int(11),
`enabled` int(11),
`hongbaomoney` varchar(255) NOT NULL,
`hongbaoname` varchar(255) NOT NULL,
`hongbaonamecolor` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_hongbaolog` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11),
`user_id` int(11),
`sonid` int(11),
`invite_time` varchar(255),
`status` int(11),
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_icon` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11),
`advname` varchar(50),
`thumb` varchar(255),
`displayorder` int(11),
`enabled` int(11),
`jump` int(11) NOT NULL   COMMENT '跳转方式 0 运动提醒1汗水日子2其他',
`xcxpath` varchar(255) NOT NULL,
`xcxappid` varchar(255) NOT NULL,
`runpic` varchar(255) NOT NULL,
`advnamecolor` varchar(100) NOT NULL,
`h5` varchar(255) NOT NULL,
`tippic` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_invitelog` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11),
`user_id` int(11),
`sonid` int(11),
`step` varchar(255),
`invite_time` varchar(255),
`status` int(11)    COMMENT '0 未兑换燃力币 1 已兑换',
`time` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_kefu` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11),
`kefu_keyword` varchar(255),
`kefu_title` varchar(255),
`kefu_img` varchar(255),
`kefu_gaishu` varchar(255),
`kefu_url` varchar(255),
`beizhu` varchar(255),
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_message` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11),
`msgid` varchar(255),
`keyword1` varchar(255),
`keyword2` varchar(255),
`keyword3` varchar(255),
`hongbao_msgid` varchar(255) NOT NULL,
`fahuomsgid` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_orders` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11),
`user_id` int(11),
`userName` varchar(255),
`postalCode` varchar(255),
`provinceName` varchar(255),
`cityName` varchar(255),
`countyName` varchar(255),
`detailInfo` varchar(255),
`nationalCode` varchar(255),
`telNumber` varchar(255),
`goods_id` int(11),
`time` varchar(255) NOT NULL,
`status` int(11) NOT NULL   COMMENT '0待发货1已发货',
`type` int(11) NOT NULL   COMMENT '0原价1币加钱2纯币',
`oid` int(11) NOT NULL   COMMENT '支付表id',
`express` varchar(255) NOT NULL,
`fahuotime` varchar(255) NOT NULL,
`expressname` varchar(255) NOT NULL   COMMENT '快递公司名',
`hexiaostatus` int(11)    COMMENT '0未核销1已核销',
`hexiaotime` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_payment` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`weid` int(11),
`uid` int(11),
`ordersn` varchar(30),
`goods_id` int(11)    COMMENT '商品id',
`paytype` int(11) NOT NULL   COMMENT '0原价1步数加钱',
`fee` decimal(11,2) NOT NULL,
`status` tinyint(1),
`paystatus` tinyint(1) NOT NULL,
`paytime` char(10) NOT NULL,
`transid` varchar(50),
`createtime` int(10),
`package` varchar(50) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_peoplelog` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11),
`goods_id` int(11),
`user_id` int(11),
`son_id` int(11),
`time` varchar(255),
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_question` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11) NOT NULL,
`displayorder` int(11) NOT NULL,
`title` varchar(200) NOT NULL,
`thumb` varchar(200) NOT NULL,
`link` varchar(200) NOT NULL,
`content` text() NOT NULL,
`enabled` tinyint(3) NOT NULL,
`createtime` char(10) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_set` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11),
`sharetitle` varchar(255),
`sharepic` varchar(255),
`coinname` varchar(255),
`rate` varchar(255),
`sharestep` varchar(255),
`boxprice` varchar(255),
`rulepic` varchar(255),
`headcolor` varchar(255) NOT NULL,
`xcx` varchar(255) NOT NULL,
`up` varchar(255) NOT NULL,
`notice` varchar(5000) NOT NULL,
`shenhe` int(11) NOT NULL,
`loginpic` varchar(255) NOT NULL,
`indexbg` varchar(255) NOT NULL,
`indexbutton` varchar(255) NOT NULL,
`inviteball` varchar(255) NOT NULL,
`upball` varchar(255) NOT NULL,
`zerotip` varchar(255) NOT NULL,
`poortip` varchar(255) NOT NULL,
`questionpic` varchar(255) NOT NULL,
`is_follow` int(11) NOT NULL,
`followpic` varchar(255) NOT NULL,
`kefu_title` varchar(255) NOT NULL,
`kefu_img` varchar(255) NOT NULL,
`kefu_gaishu` varchar(255) NOT NULL,
`kefu_url` varchar(255) NOT NULL,
`kefupic` varchar(255) NOT NULL,
`guanzhu_step` varchar(255) NOT NULL,
`followlogo` varchar(255) NOT NULL,
`maxstep` varchar(255) NOT NULL,
`sharetext` varchar(255) NOT NULL,
`version` varchar(255) NOT NULL,
`shareinfo` varchar(255) NOT NULL,
`upinfo` varchar(255) NOT NULL,
`adunit` varchar(255) NOT NULL,
`adunit2` varchar(255) NOT NULL,
`adunit3` varchar(255) NOT NULL,
`boxpic` varchar(255) NOT NULL,
`activitypic` varchar(255) NOT NULL,
`applypic` varchar(255) NOT NULL,
`rule` varchar(255) NOT NULL,
`sweattext` varchar(255) NOT NULL,
`icon` varchar(255) NOT NULL,
`comeon` varchar(255) NOT NULL,
`posterpic` varchar(255) NOT NULL,
`smalltip` varchar(255) NOT NULL,
`signsharetext` varchar(255) NOT NULL,
`signpic` varchar(255) NOT NULL,
`signsharemoney` varchar(255) NOT NULL,
`frame` varchar(255) NOT NULL,
`signicon` varchar(255) NOT NULL,
`signtext` varchar(255) NOT NULL,
`smalltipcolor` varchar(100) NOT NULL,
`sharetextcolor` varchar(100) NOT NULL,
`shareinfocolor` varchar(100) NOT NULL,
`signtextcolor` varchar(100) NOT NULL,
`buttonbg` varchar(100) NOT NULL,
`balltextcolor` varchar(100) NOT NULL,
`centercolor` varchar(100) NOT NULL,
`coinpic` varchar(100) NOT NULL,
`cointextcolor` varchar(100) NOT NULL,
`invitetype` int(11) NOT NULL DEFAULT NULL DEFAULT '1',
`hongbaobg` varchar(100) NOT NULL,
`longbg` varchar(100) NOT NULL,
`hongbaotext` varchar(100) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_shop` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11),
`logo` varchar(255),
`topbg` varchar(255) NOT NULL,
`shopname` varchar(255) NOT NULL,
`sheng` varchar(255),
`shi` varchar(255),
`qu` varchar(255),
`tel` varchar(255),
`starttime` varchar(255),
`endtime` varchar(255),
`address` varchar(255),
`user_id` int(11),
`openid` varchar(255),
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_uplog` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11),
`user_id` int(11),
`step` varchar(255),
`time` varchar(255),
`day` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_users` (
`user_id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11),
`status` int(11) NOT NULL DEFAULT NULL DEFAULT '1',
`city` varchar(255),
`country` varchar(255),
`gender` varchar(255),
`open_id` varchar(255),
`nick_name` varchar(255),
`head_pic` varchar(255),
`province` varchar(255),
`money` decimal(11,4) NOT NULL DEFAULT NULL DEFAULT '0.0000'  COMMENT '可提现金额',
`fatherid` int(11),
`black` int(11) NOT NULL   COMMENT '0正常1拉黑',
`is_yy` int(11) NOT NULL,
`signtime` varchar(255) NOT NULL DEFAULT NULL DEFAULT '1'  COMMENT '连续签到次数',
`lasttime` varchar(255) NOT NULL   COMMENT '最后签到时间',
`sharetime` varchar(255) NOT NULL,
`hongbaofid` int(11) NOT NULL,
PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_winlog` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11),
`user_id` int(11),
`userName` varchar(255) NOT NULL,
`postalCode` varchar(255) NOT NULL,
`provinceName` varchar(255) NOT NULL,
`cityName` varchar(255) NOT NULL,
`countyName` varchar(255) NOT NULL,
`detailInfo` varchar(255) NOT NULL,
`nationalCode` varchar(255) NOT NULL,
`telNumber` varchar(255) NOT NULL,
`goods_id` int(11),
`time` varchar(255) NOT NULL,
`status` int(11) NOT NULL   COMMENT '0待发货1已发货',
`express` varchar(255) NOT NULL,
`fahuotime` varchar(255) NOT NULL,
`expressname` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE IF NOT EXISTS `ims_hcstep_xuni` (
`id` int(11) NOT NULL  AUTO_INCREMENT,
`uniacid` int(11),
`nick_name` varchar(255),
`head_pic` varchar(255),
`goods_id` int(11),
`time` varchar(255),
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
");
if(pdo_tableexists('hcstep_activity')) {
 if(!pdo_fieldexists('hcstep_activity',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_activity')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_activity')) {
 if(!pdo_fieldexists('hcstep_activity',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_activity')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_activity')) {
 if(!pdo_fieldexists('hcstep_activity',  'step')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_activity')." ADD `step` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_activity')) {
 if(!pdo_fieldexists('hcstep_activity',  'entryfee')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_activity')." ADD `entryfee` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_activity')) {
 if(!pdo_fieldexists('hcstep_activity',  'displayorder')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_activity')." ADD `displayorder` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_activitylog')) {
 if(!pdo_fieldexists('hcstep_activitylog',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_activitylog')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_activitylog')) {
 if(!pdo_fieldexists('hcstep_activitylog',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_activitylog')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_activitylog')) {
 if(!pdo_fieldexists('hcstep_activitylog',  'user_id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_activitylog')." ADD `user_id` int(11);");
 }
}
if(pdo_tableexists('hcstep_activitylog')) {
 if(!pdo_fieldexists('hcstep_activitylog',  'aid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_activitylog')." ADD `aid` int(11)    COMMENT '活动id';");
 }
}
if(pdo_tableexists('hcstep_activitylog')) {
 if(!pdo_fieldexists('hcstep_activitylog',  'timestamp')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_activitylog')." ADD `timestamp` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_activitylog')) {
 if(!pdo_fieldexists('hcstep_activitylog',  'time')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_activitylog')." ADD `time` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_activitylog')) {
 if(!pdo_fieldexists('hcstep_activitylog',  'entryfee')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_activitylog')." ADD `entryfee` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_activitylog')) {
 if(!pdo_fieldexists('hcstep_activitylog',  'step')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_activitylog')." ADD `step` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_activitylog')) {
 if(!pdo_fieldexists('hcstep_activitylog',  'status')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_activitylog')." ADD `status` int(11) NOT NULL   COMMENT '0未达标1已达标，未发奖2已达标，已发奖';");
 }
}
if(pdo_tableexists('hcstep_activitylog')) {
 if(!pdo_fieldexists('hcstep_activitylog',  'jiangjin')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_activitylog')." ADD `jiangjin` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_adv')) {
 if(!pdo_fieldexists('hcstep_adv',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_adv')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_adv')) {
 if(!pdo_fieldexists('hcstep_adv',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_adv')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_adv')) {
 if(!pdo_fieldexists('hcstep_adv',  'advname')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_adv')." ADD `advname` varchar(50);");
 }
}
if(pdo_tableexists('hcstep_adv')) {
 if(!pdo_fieldexists('hcstep_adv',  'thumb')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_adv')." ADD `thumb` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_adv')) {
 if(!pdo_fieldexists('hcstep_adv',  'displayorder')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_adv')." ADD `displayorder` int(11);");
 }
}
if(pdo_tableexists('hcstep_adv')) {
 if(!pdo_fieldexists('hcstep_adv',  'enabled')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_adv')." ADD `enabled` int(11);");
 }
}
if(pdo_tableexists('hcstep_adv')) {
 if(!pdo_fieldexists('hcstep_adv',  'jump')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_adv')." ADD `jump` int(11) NOT NULL   COMMENT '跳转方式 0 不跳转 1 小程序';");
 }
}
if(pdo_tableexists('hcstep_adv')) {
 if(!pdo_fieldexists('hcstep_adv',  'xcxpath')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_adv')." ADD `xcxpath` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_adv')) {
 if(!pdo_fieldexists('hcstep_adv',  'xcxappid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_adv')." ADD `xcxappid` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_adv')) {
 if(!pdo_fieldexists('hcstep_adv',  'h5')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_adv')." ADD `h5` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_adv')) {
 if(!pdo_fieldexists('hcstep_adv',  'tippic')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_adv')." ADD `tippic` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_awards')) {
 if(!pdo_fieldexists('hcstep_awards',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_awards')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_awards')) {
 if(!pdo_fieldexists('hcstep_awards',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_awards')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_awards')) {
 if(!pdo_fieldexists('hcstep_awards',  'goods_name')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_awards')." ADD `goods_name` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_awards')) {
 if(!pdo_fieldexists('hcstep_awards',  'main_img')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_awards')." ADD `main_img` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_awards')) {
 if(!pdo_fieldexists('hcstep_awards',  'goods_img')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_awards')." ADD `goods_img` varchar(2555);");
 }
}
if(pdo_tableexists('hcstep_awards')) {
 if(!pdo_fieldexists('hcstep_awards',  'price')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_awards')." ADD `price` decimal(10,2);");
 }
}
if(pdo_tableexists('hcstep_awards')) {
 if(!pdo_fieldexists('hcstep_awards',  'inventory')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_awards')." ADD `inventory` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_awards')) {
 if(!pdo_fieldexists('hcstep_awards',  'express')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_awards')." ADD `express` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_awards')) {
 if(!pdo_fieldexists('hcstep_awards',  'status')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_awards')." ADD `status` int(11)    COMMENT '1 上架 2 下架';");
 }
}
if(pdo_tableexists('hcstep_bushulog')) {
 if(!pdo_fieldexists('hcstep_bushulog',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_bushulog')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_bushulog')) {
 if(!pdo_fieldexists('hcstep_bushulog',  'user_id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_bushulog')." ADD `user_id` int(11);");
 }
}
if(pdo_tableexists('hcstep_bushulog')) {
 if(!pdo_fieldexists('hcstep_bushulog',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_bushulog')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_bushulog')) {
 if(!pdo_fieldexists('hcstep_bushulog',  'bushu')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_bushulog')." ADD `bushu` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_bushulog')) {
 if(!pdo_fieldexists('hcstep_bushulog',  'money')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_bushulog')." ADD `money` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_bushulog')) {
 if(!pdo_fieldexists('hcstep_bushulog',  'time')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_bushulog')." ADD `time` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_bushulog')) {
 if(!pdo_fieldexists('hcstep_bushulog',  'timestamp')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_bushulog')." ADD `timestamp` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_formid')) {
 if(!pdo_fieldexists('hcstep_formid',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_formid')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_formid')) {
 if(!pdo_fieldexists('hcstep_formid',  'user_id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_formid')." ADD `user_id` int(11);");
 }
}
if(pdo_tableexists('hcstep_formid')) {
 if(!pdo_fieldexists('hcstep_formid',  'formid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_formid')." ADD `formid` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_formid')) {
 if(!pdo_fieldexists('hcstep_formid',  'status')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_formid')." ADD `status` int(11) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_goods')) {
 if(!pdo_fieldexists('hcstep_goods',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_goods')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_goods')) {
 if(!pdo_fieldexists('hcstep_goods',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_goods')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_goods')) {
 if(!pdo_fieldexists('hcstep_goods',  'goods_name')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_goods')." ADD `goods_name` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_goods')) {
 if(!pdo_fieldexists('hcstep_goods',  'main_img')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_goods')." ADD `main_img` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_goods')) {
 if(!pdo_fieldexists('hcstep_goods',  'goods_img')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_goods')." ADD `goods_img` varchar(2555);");
 }
}
if(pdo_tableexists('hcstep_goods')) {
 if(!pdo_fieldexists('hcstep_goods',  'price')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_goods')." ADD `price` decimal(10,2);");
 }
}
if(pdo_tableexists('hcstep_goods')) {
 if(!pdo_fieldexists('hcstep_goods',  'inventory')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_goods')." ADD `inventory` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_goods')) {
 if(!pdo_fieldexists('hcstep_goods',  'express')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_goods')." ADD `express` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_goods')) {
 if(!pdo_fieldexists('hcstep_goods',  'status')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_goods')." ADD `status` int(11)    COMMENT '1 上架 2 下架';");
 }
}
if(pdo_tableexists('hcstep_goods')) {
 if(!pdo_fieldexists('hcstep_goods',  'displayorder')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_goods')." ADD `displayorder` int(11) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_goods')) {
 if(!pdo_fieldexists('hcstep_goods',  'goodsinfo')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_goods')." ADD `goodsinfo` varchar(9999) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_goods')) {
 if(!pdo_fieldexists('hcstep_goods',  'paytype')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_goods')." ADD `paytype` int(11) NOT NULL   COMMENT '支付方式';");
 }
}
if(pdo_tableexists('hcstep_goods')) {
 if(!pdo_fieldexists('hcstep_goods',  'price2')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_goods')." ADD `price2` decimal(10,2) NOT NULL   COMMENT '步数加钱 步数币';");
 }
}
if(pdo_tableexists('hcstep_goods')) {
 if(!pdo_fieldexists('hcstep_goods',  'rmb')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_goods')." ADD `rmb` varchar(255) NOT NULL   COMMENT '人民币';");
 }
}
if(pdo_tableexists('hcstep_goods')) {
 if(!pdo_fieldexists('hcstep_goods',  'maxrmb')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_goods')." ADD `maxrmb` varchar(255) NOT NULL   COMMENT '人民币原价';");
 }
}
if(pdo_tableexists('hcstep_goods')) {
 if(!pdo_fieldexists('hcstep_goods',  'selltype')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_goods')." ADD `selltype` int(11) NOT NULL   COMMENT '0普通1核销';");
 }
}
if(pdo_tableexists('hcstep_goods')) {
 if(!pdo_fieldexists('hcstep_goods',  'shop_id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_goods')." ADD `shop_id` int(11) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_goods')) {
 if(!pdo_fieldexists('hcstep_goods',  'minpeople')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_goods')." ADD `minpeople` varchar(20) NOT NULL   COMMENT '邀请人数';");
 }
}
if(pdo_tableexists('hcstep_goods')) {
 if(!pdo_fieldexists('hcstep_goods',  'maxbuy')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_goods')." ADD `maxbuy` varchar(20) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_guanzhulog')) {
 if(!pdo_fieldexists('hcstep_guanzhulog',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_guanzhulog')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_guanzhulog')) {
 if(!pdo_fieldexists('hcstep_guanzhulog',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_guanzhulog')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_guanzhulog')) {
 if(!pdo_fieldexists('hcstep_guanzhulog',  'user_id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_guanzhulog')." ADD `user_id` int(11);");
 }
}
if(pdo_tableexists('hcstep_guanzhulog')) {
 if(!pdo_fieldexists('hcstep_guanzhulog',  'step')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_guanzhulog')." ADD `step` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_guanzhulog')) {
 if(!pdo_fieldexists('hcstep_guanzhulog',  'time')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_guanzhulog')." ADD `time` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_guanzhulog')) {
 if(!pdo_fieldexists('hcstep_guanzhulog',  'status')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_guanzhulog')." ADD `status` int(11) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_hongbao')) {
 if(!pdo_fieldexists('hcstep_hongbao',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_hongbao')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_hongbao')) {
 if(!pdo_fieldexists('hcstep_hongbao',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_hongbao')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_hongbao')) {
 if(!pdo_fieldexists('hcstep_hongbao',  'hongbaopic')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_hongbao')." ADD `hongbaopic` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_hongbao')) {
 if(!pdo_fieldexists('hcstep_hongbao',  'displayorder')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_hongbao')." ADD `displayorder` int(11);");
 }
}
if(pdo_tableexists('hcstep_hongbao')) {
 if(!pdo_fieldexists('hcstep_hongbao',  'enabled')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_hongbao')." ADD `enabled` int(11);");
 }
}
if(pdo_tableexists('hcstep_hongbao')) {
 if(!pdo_fieldexists('hcstep_hongbao',  'hongbaomoney')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_hongbao')." ADD `hongbaomoney` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_hongbao')) {
 if(!pdo_fieldexists('hcstep_hongbao',  'hongbaoname')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_hongbao')." ADD `hongbaoname` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_hongbao')) {
 if(!pdo_fieldexists('hcstep_hongbao',  'hongbaonamecolor')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_hongbao')." ADD `hongbaonamecolor` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_hongbaolog')) {
 if(!pdo_fieldexists('hcstep_hongbaolog',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_hongbaolog')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_hongbaolog')) {
 if(!pdo_fieldexists('hcstep_hongbaolog',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_hongbaolog')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_hongbaolog')) {
 if(!pdo_fieldexists('hcstep_hongbaolog',  'user_id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_hongbaolog')." ADD `user_id` int(11);");
 }
}
if(pdo_tableexists('hcstep_hongbaolog')) {
 if(!pdo_fieldexists('hcstep_hongbaolog',  'sonid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_hongbaolog')." ADD `sonid` int(11);");
 }
}
if(pdo_tableexists('hcstep_hongbaolog')) {
 if(!pdo_fieldexists('hcstep_hongbaolog',  'invite_time')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_hongbaolog')." ADD `invite_time` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_hongbaolog')) {
 if(!pdo_fieldexists('hcstep_hongbaolog',  'status')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_hongbaolog')." ADD `status` int(11);");
 }
}
if(pdo_tableexists('hcstep_icon')) {
 if(!pdo_fieldexists('hcstep_icon',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_icon')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_icon')) {
 if(!pdo_fieldexists('hcstep_icon',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_icon')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_icon')) {
 if(!pdo_fieldexists('hcstep_icon',  'advname')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_icon')." ADD `advname` varchar(50);");
 }
}
if(pdo_tableexists('hcstep_icon')) {
 if(!pdo_fieldexists('hcstep_icon',  'thumb')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_icon')." ADD `thumb` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_icon')) {
 if(!pdo_fieldexists('hcstep_icon',  'displayorder')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_icon')." ADD `displayorder` int(11);");
 }
}
if(pdo_tableexists('hcstep_icon')) {
 if(!pdo_fieldexists('hcstep_icon',  'enabled')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_icon')." ADD `enabled` int(11);");
 }
}
if(pdo_tableexists('hcstep_icon')) {
 if(!pdo_fieldexists('hcstep_icon',  'jump')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_icon')." ADD `jump` int(11) NOT NULL   COMMENT '跳转方式 0 运动提醒1汗水日子2其他';");
 }
}
if(pdo_tableexists('hcstep_icon')) {
 if(!pdo_fieldexists('hcstep_icon',  'xcxpath')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_icon')." ADD `xcxpath` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_icon')) {
 if(!pdo_fieldexists('hcstep_icon',  'xcxappid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_icon')." ADD `xcxappid` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_icon')) {
 if(!pdo_fieldexists('hcstep_icon',  'runpic')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_icon')." ADD `runpic` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_icon')) {
 if(!pdo_fieldexists('hcstep_icon',  'advnamecolor')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_icon')." ADD `advnamecolor` varchar(100) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_icon')) {
 if(!pdo_fieldexists('hcstep_icon',  'h5')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_icon')." ADD `h5` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_icon')) {
 if(!pdo_fieldexists('hcstep_icon',  'tippic')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_icon')." ADD `tippic` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_invitelog')) {
 if(!pdo_fieldexists('hcstep_invitelog',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_invitelog')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_invitelog')) {
 if(!pdo_fieldexists('hcstep_invitelog',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_invitelog')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_invitelog')) {
 if(!pdo_fieldexists('hcstep_invitelog',  'user_id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_invitelog')." ADD `user_id` int(11);");
 }
}
if(pdo_tableexists('hcstep_invitelog')) {
 if(!pdo_fieldexists('hcstep_invitelog',  'sonid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_invitelog')." ADD `sonid` int(11);");
 }
}
if(pdo_tableexists('hcstep_invitelog')) {
 if(!pdo_fieldexists('hcstep_invitelog',  'step')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_invitelog')." ADD `step` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_invitelog')) {
 if(!pdo_fieldexists('hcstep_invitelog',  'invite_time')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_invitelog')." ADD `invite_time` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_invitelog')) {
 if(!pdo_fieldexists('hcstep_invitelog',  'status')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_invitelog')." ADD `status` int(11)    COMMENT '0 未兑换燃力币 1 已兑换';");
 }
}
if(pdo_tableexists('hcstep_invitelog')) {
 if(!pdo_fieldexists('hcstep_invitelog',  'time')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_invitelog')." ADD `time` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_kefu')) {
 if(!pdo_fieldexists('hcstep_kefu',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_kefu')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_kefu')) {
 if(!pdo_fieldexists('hcstep_kefu',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_kefu')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_kefu')) {
 if(!pdo_fieldexists('hcstep_kefu',  'kefu_keyword')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_kefu')." ADD `kefu_keyword` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_kefu')) {
 if(!pdo_fieldexists('hcstep_kefu',  'kefu_title')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_kefu')." ADD `kefu_title` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_kefu')) {
 if(!pdo_fieldexists('hcstep_kefu',  'kefu_img')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_kefu')." ADD `kefu_img` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_kefu')) {
 if(!pdo_fieldexists('hcstep_kefu',  'kefu_gaishu')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_kefu')." ADD `kefu_gaishu` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_kefu')) {
 if(!pdo_fieldexists('hcstep_kefu',  'kefu_url')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_kefu')." ADD `kefu_url` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_kefu')) {
 if(!pdo_fieldexists('hcstep_kefu',  'beizhu')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_kefu')." ADD `beizhu` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_message')) {
 if(!pdo_fieldexists('hcstep_message',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_message')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_message')) {
 if(!pdo_fieldexists('hcstep_message',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_message')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_message')) {
 if(!pdo_fieldexists('hcstep_message',  'msgid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_message')." ADD `msgid` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_message')) {
 if(!pdo_fieldexists('hcstep_message',  'keyword1')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_message')." ADD `keyword1` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_message')) {
 if(!pdo_fieldexists('hcstep_message',  'keyword2')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_message')." ADD `keyword2` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_message')) {
 if(!pdo_fieldexists('hcstep_message',  'keyword3')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_message')." ADD `keyword3` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_message')) {
 if(!pdo_fieldexists('hcstep_message',  'hongbao_msgid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_message')." ADD `hongbao_msgid` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_message')) {
 if(!pdo_fieldexists('hcstep_message',  'fahuomsgid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_message')." ADD `fahuomsgid` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'user_id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `user_id` int(11);");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'userName')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `userName` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'postalCode')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `postalCode` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'provinceName')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `provinceName` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'cityName')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `cityName` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'countyName')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `countyName` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'detailInfo')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `detailInfo` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'nationalCode')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `nationalCode` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'telNumber')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `telNumber` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'goods_id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `goods_id` int(11);");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'time')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `time` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'status')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `status` int(11) NOT NULL   COMMENT '0待发货1已发货';");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'type')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `type` int(11) NOT NULL   COMMENT '0原价1币加钱2纯币';");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'oid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `oid` int(11) NOT NULL   COMMENT '支付表id';");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'express')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `express` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'fahuotime')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `fahuotime` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'expressname')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `expressname` varchar(255) NOT NULL   COMMENT '快递公司名';");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'hexiaostatus')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `hexiaostatus` int(11)    COMMENT '0未核销1已核销';");
 }
}
if(pdo_tableexists('hcstep_orders')) {
 if(!pdo_fieldexists('hcstep_orders',  'hexiaotime')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_orders')." ADD `hexiaotime` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_payment')) {
 if(!pdo_fieldexists('hcstep_payment',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_payment')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_payment')) {
 if(!pdo_fieldexists('hcstep_payment',  'weid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_payment')." ADD `weid` int(11);");
 }
}
if(pdo_tableexists('hcstep_payment')) {
 if(!pdo_fieldexists('hcstep_payment',  'uid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_payment')." ADD `uid` int(11);");
 }
}
if(pdo_tableexists('hcstep_payment')) {
 if(!pdo_fieldexists('hcstep_payment',  'ordersn')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_payment')." ADD `ordersn` varchar(30);");
 }
}
if(pdo_tableexists('hcstep_payment')) {
 if(!pdo_fieldexists('hcstep_payment',  'goods_id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_payment')." ADD `goods_id` int(11)    COMMENT '商品id';");
 }
}
if(pdo_tableexists('hcstep_payment')) {
 if(!pdo_fieldexists('hcstep_payment',  'paytype')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_payment')." ADD `paytype` int(11) NOT NULL   COMMENT '0原价1步数加钱';");
 }
}
if(pdo_tableexists('hcstep_payment')) {
 if(!pdo_fieldexists('hcstep_payment',  'fee')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_payment')." ADD `fee` decimal(11,2) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_payment')) {
 if(!pdo_fieldexists('hcstep_payment',  'status')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_payment')." ADD `status` tinyint(1);");
 }
}
if(pdo_tableexists('hcstep_payment')) {
 if(!pdo_fieldexists('hcstep_payment',  'paystatus')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_payment')." ADD `paystatus` tinyint(1) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_payment')) {
 if(!pdo_fieldexists('hcstep_payment',  'paytime')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_payment')." ADD `paytime` char(10) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_payment')) {
 if(!pdo_fieldexists('hcstep_payment',  'transid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_payment')." ADD `transid` varchar(50);");
 }
}
if(pdo_tableexists('hcstep_payment')) {
 if(!pdo_fieldexists('hcstep_payment',  'createtime')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_payment')." ADD `createtime` int(10);");
 }
}
if(pdo_tableexists('hcstep_payment')) {
 if(!pdo_fieldexists('hcstep_payment',  'package')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_payment')." ADD `package` varchar(50) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_peoplelog')) {
 if(!pdo_fieldexists('hcstep_peoplelog',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_peoplelog')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_peoplelog')) {
 if(!pdo_fieldexists('hcstep_peoplelog',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_peoplelog')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_peoplelog')) {
 if(!pdo_fieldexists('hcstep_peoplelog',  'goods_id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_peoplelog')." ADD `goods_id` int(11);");
 }
}
if(pdo_tableexists('hcstep_peoplelog')) {
 if(!pdo_fieldexists('hcstep_peoplelog',  'user_id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_peoplelog')." ADD `user_id` int(11);");
 }
}
if(pdo_tableexists('hcstep_peoplelog')) {
 if(!pdo_fieldexists('hcstep_peoplelog',  'son_id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_peoplelog')." ADD `son_id` int(11);");
 }
}
if(pdo_tableexists('hcstep_peoplelog')) {
 if(!pdo_fieldexists('hcstep_peoplelog',  'time')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_peoplelog')." ADD `time` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_question')) {
 if(!pdo_fieldexists('hcstep_question',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_question')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_question')) {
 if(!pdo_fieldexists('hcstep_question',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_question')." ADD `uniacid` int(11) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_question')) {
 if(!pdo_fieldexists('hcstep_question',  'displayorder')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_question')." ADD `displayorder` int(11) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_question')) {
 if(!pdo_fieldexists('hcstep_question',  'title')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_question')." ADD `title` varchar(200) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_question')) {
 if(!pdo_fieldexists('hcstep_question',  'thumb')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_question')." ADD `thumb` varchar(200) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_question')) {
 if(!pdo_fieldexists('hcstep_question',  'link')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_question')." ADD `link` varchar(200) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_question')) {
 if(!pdo_fieldexists('hcstep_question',  'content')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_question')." ADD `content` text() NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_question')) {
 if(!pdo_fieldexists('hcstep_question',  'enabled')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_question')." ADD `enabled` tinyint(3) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_question')) {
 if(!pdo_fieldexists('hcstep_question',  'createtime')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_question')." ADD `createtime` char(10) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'sharetitle')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `sharetitle` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'sharepic')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `sharepic` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'coinname')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `coinname` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'rate')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `rate` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'sharestep')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `sharestep` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'boxprice')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `boxprice` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'rulepic')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `rulepic` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'headcolor')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `headcolor` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'xcx')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `xcx` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'up')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `up` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'notice')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `notice` varchar(5000) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'shenhe')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `shenhe` int(11) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'loginpic')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `loginpic` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'indexbg')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `indexbg` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'indexbutton')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `indexbutton` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'inviteball')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `inviteball` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'upball')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `upball` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'zerotip')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `zerotip` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'poortip')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `poortip` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'questionpic')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `questionpic` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'is_follow')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `is_follow` int(11) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'followpic')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `followpic` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'kefu_title')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `kefu_title` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'kefu_img')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `kefu_img` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'kefu_gaishu')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `kefu_gaishu` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'kefu_url')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `kefu_url` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'kefupic')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `kefupic` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'guanzhu_step')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `guanzhu_step` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'followlogo')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `followlogo` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'maxstep')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `maxstep` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'sharetext')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `sharetext` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'version')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `version` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'shareinfo')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `shareinfo` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'upinfo')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `upinfo` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'adunit')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `adunit` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'adunit2')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `adunit2` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'adunit3')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `adunit3` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'boxpic')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `boxpic` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'activitypic')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `activitypic` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'applypic')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `applypic` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'rule')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `rule` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'sweattext')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `sweattext` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'icon')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `icon` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'comeon')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `comeon` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'posterpic')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `posterpic` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'smalltip')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `smalltip` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'signsharetext')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `signsharetext` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'signpic')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `signpic` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'signsharemoney')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `signsharemoney` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'frame')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `frame` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'signicon')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `signicon` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'signtext')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `signtext` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'smalltipcolor')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `smalltipcolor` varchar(100) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'sharetextcolor')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `sharetextcolor` varchar(100) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'shareinfocolor')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `shareinfocolor` varchar(100) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'signtextcolor')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `signtextcolor` varchar(100) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'buttonbg')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `buttonbg` varchar(100) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'balltextcolor')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `balltextcolor` varchar(100) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'centercolor')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `centercolor` varchar(100) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'coinpic')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `coinpic` varchar(100) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'cointextcolor')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `cointextcolor` varchar(100) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'invitetype')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `invitetype` int(11) NOT NULL DEFAULT NULL DEFAULT '1';");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'hongbaobg')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `hongbaobg` varchar(100) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'longbg')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `longbg` varchar(100) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_set')) {
 if(!pdo_fieldexists('hcstep_set',  'hongbaotext')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_set')." ADD `hongbaotext` varchar(100) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_shop')) {
 if(!pdo_fieldexists('hcstep_shop',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_shop')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_shop')) {
 if(!pdo_fieldexists('hcstep_shop',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_shop')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_shop')) {
 if(!pdo_fieldexists('hcstep_shop',  'logo')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_shop')." ADD `logo` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_shop')) {
 if(!pdo_fieldexists('hcstep_shop',  'topbg')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_shop')." ADD `topbg` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_shop')) {
 if(!pdo_fieldexists('hcstep_shop',  'shopname')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_shop')." ADD `shopname` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_shop')) {
 if(!pdo_fieldexists('hcstep_shop',  'sheng')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_shop')." ADD `sheng` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_shop')) {
 if(!pdo_fieldexists('hcstep_shop',  'shi')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_shop')." ADD `shi` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_shop')) {
 if(!pdo_fieldexists('hcstep_shop',  'qu')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_shop')." ADD `qu` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_shop')) {
 if(!pdo_fieldexists('hcstep_shop',  'tel')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_shop')." ADD `tel` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_shop')) {
 if(!pdo_fieldexists('hcstep_shop',  'starttime')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_shop')." ADD `starttime` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_shop')) {
 if(!pdo_fieldexists('hcstep_shop',  'endtime')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_shop')." ADD `endtime` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_shop')) {
 if(!pdo_fieldexists('hcstep_shop',  'address')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_shop')." ADD `address` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_shop')) {
 if(!pdo_fieldexists('hcstep_shop',  'user_id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_shop')." ADD `user_id` int(11);");
 }
}
if(pdo_tableexists('hcstep_shop')) {
 if(!pdo_fieldexists('hcstep_shop',  'openid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_shop')." ADD `openid` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_uplog')) {
 if(!pdo_fieldexists('hcstep_uplog',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_uplog')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_uplog')) {
 if(!pdo_fieldexists('hcstep_uplog',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_uplog')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_uplog')) {
 if(!pdo_fieldexists('hcstep_uplog',  'user_id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_uplog')." ADD `user_id` int(11);");
 }
}
if(pdo_tableexists('hcstep_uplog')) {
 if(!pdo_fieldexists('hcstep_uplog',  'step')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_uplog')." ADD `step` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_uplog')) {
 if(!pdo_fieldexists('hcstep_uplog',  'time')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_uplog')." ADD `time` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_uplog')) {
 if(!pdo_fieldexists('hcstep_uplog',  'day')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_uplog')." ADD `day` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_users')) {
 if(!pdo_fieldexists('hcstep_users',  'user_id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_users')." ADD `user_id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_users')) {
 if(!pdo_fieldexists('hcstep_users',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_users')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_users')) {
 if(!pdo_fieldexists('hcstep_users',  'status')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_users')." ADD `status` int(11) NOT NULL DEFAULT NULL DEFAULT '1';");
 }
}
if(pdo_tableexists('hcstep_users')) {
 if(!pdo_fieldexists('hcstep_users',  'city')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_users')." ADD `city` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_users')) {
 if(!pdo_fieldexists('hcstep_users',  'country')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_users')." ADD `country` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_users')) {
 if(!pdo_fieldexists('hcstep_users',  'gender')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_users')." ADD `gender` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_users')) {
 if(!pdo_fieldexists('hcstep_users',  'open_id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_users')." ADD `open_id` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_users')) {
 if(!pdo_fieldexists('hcstep_users',  'nick_name')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_users')." ADD `nick_name` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_users')) {
 if(!pdo_fieldexists('hcstep_users',  'head_pic')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_users')." ADD `head_pic` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_users')) {
 if(!pdo_fieldexists('hcstep_users',  'province')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_users')." ADD `province` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_users')) {
 if(!pdo_fieldexists('hcstep_users',  'money')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_users')." ADD `money` decimal(11,4) NOT NULL DEFAULT NULL DEFAULT '0.0000'  COMMENT '可提现金额';");
 }
}
if(pdo_tableexists('hcstep_users')) {
 if(!pdo_fieldexists('hcstep_users',  'fatherid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_users')." ADD `fatherid` int(11);");
 }
}
if(pdo_tableexists('hcstep_users')) {
 if(!pdo_fieldexists('hcstep_users',  'black')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_users')." ADD `black` int(11) NOT NULL   COMMENT '0正常1拉黑';");
 }
}
if(pdo_tableexists('hcstep_users')) {
 if(!pdo_fieldexists('hcstep_users',  'is_yy')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_users')." ADD `is_yy` int(11) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_users')) {
 if(!pdo_fieldexists('hcstep_users',  'signtime')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_users')." ADD `signtime` varchar(255) NOT NULL DEFAULT NULL DEFAULT '1'  COMMENT '连续签到次数';");
 }
}
if(pdo_tableexists('hcstep_users')) {
 if(!pdo_fieldexists('hcstep_users',  'lasttime')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_users')." ADD `lasttime` varchar(255) NOT NULL   COMMENT '最后签到时间';");
 }
}
if(pdo_tableexists('hcstep_users')) {
 if(!pdo_fieldexists('hcstep_users',  'sharetime')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_users')." ADD `sharetime` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_users')) {
 if(!pdo_fieldexists('hcstep_users',  'hongbaofid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_users')." ADD `hongbaofid` int(11) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_winlog')) {
 if(!pdo_fieldexists('hcstep_winlog',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_winlog')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_winlog')) {
 if(!pdo_fieldexists('hcstep_winlog',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_winlog')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_winlog')) {
 if(!pdo_fieldexists('hcstep_winlog',  'user_id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_winlog')." ADD `user_id` int(11);");
 }
}
if(pdo_tableexists('hcstep_winlog')) {
 if(!pdo_fieldexists('hcstep_winlog',  'userName')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_winlog')." ADD `userName` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_winlog')) {
 if(!pdo_fieldexists('hcstep_winlog',  'postalCode')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_winlog')." ADD `postalCode` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_winlog')) {
 if(!pdo_fieldexists('hcstep_winlog',  'provinceName')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_winlog')." ADD `provinceName` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_winlog')) {
 if(!pdo_fieldexists('hcstep_winlog',  'cityName')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_winlog')." ADD `cityName` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_winlog')) {
 if(!pdo_fieldexists('hcstep_winlog',  'countyName')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_winlog')." ADD `countyName` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_winlog')) {
 if(!pdo_fieldexists('hcstep_winlog',  'detailInfo')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_winlog')." ADD `detailInfo` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_winlog')) {
 if(!pdo_fieldexists('hcstep_winlog',  'nationalCode')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_winlog')." ADD `nationalCode` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_winlog')) {
 if(!pdo_fieldexists('hcstep_winlog',  'telNumber')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_winlog')." ADD `telNumber` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_winlog')) {
 if(!pdo_fieldexists('hcstep_winlog',  'goods_id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_winlog')." ADD `goods_id` int(11);");
 }
}
if(pdo_tableexists('hcstep_winlog')) {
 if(!pdo_fieldexists('hcstep_winlog',  'time')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_winlog')." ADD `time` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_winlog')) {
 if(!pdo_fieldexists('hcstep_winlog',  'status')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_winlog')." ADD `status` int(11) NOT NULL   COMMENT '0待发货1已发货';");
 }
}
if(pdo_tableexists('hcstep_winlog')) {
 if(!pdo_fieldexists('hcstep_winlog',  'express')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_winlog')." ADD `express` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_winlog')) {
 if(!pdo_fieldexists('hcstep_winlog',  'fahuotime')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_winlog')." ADD `fahuotime` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_winlog')) {
 if(!pdo_fieldexists('hcstep_winlog',  'expressname')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_winlog')." ADD `expressname` varchar(255) NOT NULL;");
 }
}
if(pdo_tableexists('hcstep_xuni')) {
 if(!pdo_fieldexists('hcstep_xuni',  'id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_xuni')." ADD `id` int(11) NOT NULL  AUTO_INCREMENT;");
 }
}
if(pdo_tableexists('hcstep_xuni')) {
 if(!pdo_fieldexists('hcstep_xuni',  'uniacid')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_xuni')." ADD `uniacid` int(11);");
 }
}
if(pdo_tableexists('hcstep_xuni')) {
 if(!pdo_fieldexists('hcstep_xuni',  'nick_name')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_xuni')." ADD `nick_name` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_xuni')) {
 if(!pdo_fieldexists('hcstep_xuni',  'head_pic')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_xuni')." ADD `head_pic` varchar(255);");
 }
}
if(pdo_tableexists('hcstep_xuni')) {
 if(!pdo_fieldexists('hcstep_xuni',  'goods_id')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_xuni')." ADD `goods_id` int(11);");
 }
}
if(pdo_tableexists('hcstep_xuni')) {
 if(!pdo_fieldexists('hcstep_xuni',  'time')) {
  pdo_query("ALTER TABLE ".tablename('hcstep_xuni')." ADD `time` varchar(255);");
 }
}

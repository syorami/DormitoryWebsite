-- ----------------------------
--  Table structure for `ocenter_contact`
-- ----------------------------
DROP TABLE IF EXISTS `ocenter_contact`;
CREATE TABLE `ocenter_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(11) NOT NULL COMMENT '姓名',
  `address` varchar(255) NOT NULL COMMENT '寝室地址',
  `phone` varchar(11) NOT NULL COMMENT '联系方式',
  `message` text NOT NULL COMMENT '留言信息',
  `created_at` int(11) NOT NULL COMMENT '留言时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;

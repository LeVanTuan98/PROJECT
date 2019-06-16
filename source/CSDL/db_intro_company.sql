/*
Navicat MySQL Data Transfer

Source Server         : tuanle98
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : db_intro_company

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-06-17 00:18:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES ('8', 'Lê Văn Tuấn', 'leanhtuan.311098@gmail.com', '7088be364d406cd2f77713ce037f2846', '2019-06-16 18:42:59');
INSERT INTO `admins` VALUES ('19', 'admin1', 'admin@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', '2019-06-16 19:14:23');

-- ----------------------------
-- Table structure for business_field
-- ----------------------------
DROP TABLE IF EXISTS `business_field`;
CREATE TABLE `business_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field` text,
  `note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of business_field
-- ----------------------------
INSERT INTO `business_field` VALUES ('1', 'Cung cấp hạ tầng mạng viễn thông cho dịch vụ Internet băng rộng.', null);
INSERT INTO `business_field` VALUES ('2', 'Cung cấp các sản phẩm, dịch vụ viễn thông, Internet.', null);
INSERT INTO `business_field` VALUES ('3', 'Dịch vụ giá trị gia tăng trên mạng Internet, điện thoại di động.', null);
INSERT INTO `business_field` VALUES ('4', 'Dịch vụ Truyền hình.', null);
INSERT INTO `business_field` VALUES ('5', 'Dịch vụ tin nhắn, dữ liệu, thông tin giải trí trên mạng điện thoại di động.', null);
INSERT INTO `business_field` VALUES ('6', 'Thiết lập hạ tầng mạng và cung cấp các dịch vụ viễn thông, Internet.', null);
INSERT INTO `business_field` VALUES ('7', 'Xuất nhập khẩu thiết bị viễn thông và Internet.', null);
INSERT INTO `business_field` VALUES ('8', 'Dịch vụ viễn thông cố định nội hạt.', null);
INSERT INTO `business_field` VALUES ('9', 'Dịch vụ viễn thông giá trị gia tăng.', null);
INSERT INTO `business_field` VALUES ('10', 'Dịch vụ viễn thông cố định đường dài trong nước, quốc tế.', null);

-- ----------------------------
-- Table structure for company_size
-- ----------------------------
DROP TABLE IF EXISTS `company_size`;
CREATE TABLE `company_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` int(11) DEFAULT NULL,
  `employees` int(11) DEFAULT NULL,
  `offices` int(11) DEFAULT NULL,
  `province` int(11) DEFAULT NULL,
  `branch` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of company_size
-- ----------------------------
INSERT INTO `company_size` VALUES ('1', '21', '9000', '200', '59', '80');

-- ----------------------------
-- Table structure for customer_logo
-- ----------------------------
DROP TABLE IF EXISTS `customer_logo`;
CREATE TABLE `customer_logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer_logo
-- ----------------------------
INSERT INTO `customer_logo` VALUES ('1', 'https://fpt.vn/storage/upload/images/partners/logo-1.png', 'logo1.png');
INSERT INTO `customer_logo` VALUES ('2', 'https://fpt.vn/storage/upload/images/partners/logo-2.png', 'logo2.png');
INSERT INTO `customer_logo` VALUES ('3', 'https://fpt.vn/storage/upload/images/partners/logo-3.png', 'logo3.png');
INSERT INTO `customer_logo` VALUES ('4', 'https://fpt.vn/storage/upload/images/partners/logo-4.png', 'logo4.png');
INSERT INTO `customer_logo` VALUES ('5', 'https://fpt.vn/storage/upload/images/partners/logo-5.png', 'logo5.png');
INSERT INTO `customer_logo` VALUES ('6', 'https://fpt.vn/storage/upload/images/partners/logo-6.png', 'logo6.png');
INSERT INTO `customer_logo` VALUES ('7', 'https://fpt.vn/storage/upload/images/partners/logo-7.png', 'logo7.png');
INSERT INTO `customer_logo` VALUES ('8', 'https://fpt.vn/storage/upload/images/partners/logo-8.png', 'logo8.png');
INSERT INTO `customer_logo` VALUES ('9', 'https://fpt.vn/storage/upload/images/partners/logo-9.png', 'logo9.png');
INSERT INTO `customer_logo` VALUES ('10', 'https://fpt.vn/storage/upload/images/partners/logo-10.png', 'logo10.png');
INSERT INTO `customer_logo` VALUES ('11', 'https://fpt.vn/storage/upload/images/partners/logo-11.png', 'logo11.png');
INSERT INTO `customer_logo` VALUES ('12', 'https://fpt.vn/storage/upload/images/partners/logo-12.png', 'logo12.png');
INSERT INTO `customer_logo` VALUES ('13', 'https://fpt.vn/storage/upload/images/partners/logo-13.png', 'logo13.png');
INSERT INTO `customer_logo` VALUES ('14', 'https://fpt.vn/storage/upload/images/partners/logo-14.png', 'logo14.png');
INSERT INTO `customer_logo` VALUES ('15', 'https://fpt.vn/storage/upload/images/partners/logo-15.png', 'logo15.png');
INSERT INTO `customer_logo` VALUES ('16', 'https://fpt.vn/storage/upload/images/partners/logo-16.png', 'logo16.png');
INSERT INTO `customer_logo` VALUES ('17', 'https://fpt.vn/storage/upload/images/partners/logo-17.png', 'logo17.png');
INSERT INTO `customer_logo` VALUES ('18', 'https://fpt.vn/storage/upload/images/partners/logo-18.png', 'logo18.png');
INSERT INTO `customer_logo` VALUES ('19', 'https://fpt.vn/storage/upload/images/partners/logo-19.png', 'logo19.png');
INSERT INTO `customer_logo` VALUES ('20', 'https://fpt.vn/storage/upload/images/partners/logo-20.png', 'logo20.png');
INSERT INTO `customer_logo` VALUES ('21', 'https://fpt.vn/storage/upload/images/partners/logo-21.png', 'logo21.png');
INSERT INTO `customer_logo` VALUES ('22', 'https://fpt.vn/storage/upload/images/partners/logo-22.png', 'logo22.png');
INSERT INTO `customer_logo` VALUES ('23', 'https://fpt.vn/storage/upload/images/partners/logo-23.png', 'logo23.png');
INSERT INTO `customer_logo` VALUES ('24', 'https://fpt.vn/storage/upload/images/partners/logo-24.png', 'logo24.png');
INSERT INTO `customer_logo` VALUES ('25', 'https://fpt.vn/storage/upload/images/partners/logo-25.png', 'logo25.png');
INSERT INTO `customer_logo` VALUES ('26', 'https://fpt.vn/storage/upload/images/partners/logo-26.png', 'logo26.png');
INSERT INTO `customer_logo` VALUES ('27', 'https://fpt.vn/storage/upload/images/partners/logo-27.png', 'logo27.png');
INSERT INTO `customer_logo` VALUES ('28', 'https://fpt.vn/storage/upload/images/partners/logo-28.png', 'logo28.png');
INSERT INTO `customer_logo` VALUES ('29', 'https://fpt.vn/storage/upload/images/partners/logo-29.png', 'logo29.png');
INSERT INTO `customer_logo` VALUES ('30', 'https://fpt.vn/storage/upload/images/partners/logo-30.png', 'logo30.png');

-- ----------------------------
-- Table structure for field_supply
-- ----------------------------
DROP TABLE IF EXISTS `field_supply`;
CREATE TABLE `field_supply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of field_supply
-- ----------------------------
INSERT INTO `field_supply` VALUES ('1', 'Kênh thuê riêng kết nối Internet (Leased line Internet).', null);
INSERT INTO `field_supply` VALUES ('2', 'Kênh thuê riêng Truyền số liệu Trong nước (nội hạt, nội tỉnh, liên tỉnh).', null);
INSERT INTO `field_supply` VALUES ('3', 'Kênh thuê riêng Truyền số liệu Quốc tế (IPLC, MPLS).', null);
INSERT INTO `field_supply` VALUES ('4', 'Dịch vụ Quản lý (Managed Services).', null);
INSERT INTO `field_supply` VALUES ('5', 'Các dịch vụ tại Data Center: Thuê máy chủ, trung tâm dự phòng, thuê chỗ đặt máy chủ, hosting…', null);
INSERT INTO `field_supply` VALUES ('6', 'Chữ ký số.', null);
INSERT INTO `field_supply` VALUES ('7', 'Điện thoại VoIP Doanh nghiệp, đầu số 1800/1900…', null);

-- ----------------------------
-- Table structure for fpt_overview
-- ----------------------------
DROP TABLE IF EXISTS `fpt_overview`;
CREATE TABLE `fpt_overview` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) DEFAULT NULL,
  `province` int(11) DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `employee` int(11) DEFAULT NULL,
  `revenue` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fpt_overview
-- ----------------------------
INSERT INTO `fpt_overview` VALUES ('1', '30', '63', '33', '32000', '43845');

-- ----------------------------
-- Table structure for fti_field
-- ----------------------------
DROP TABLE IF EXISTS `fti_field`;
CREATE TABLE `fti_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fti_field
-- ----------------------------
INSERT INTO `fti_field` VALUES ('1', 'https://fpt.vn/storage/upload/images/pages/subsidiaries/i1.png', 'i1.png', 'Sở hữu 4 Trung tâm dữ liệu (Data Center) chuẩn quốc tế Tier3 với tổng diện tích lên tới hàng nghìn m2 phục vụ cho khách hàng thuê máy chủ, hosting...\r\n');
INSERT INTO `fti_field` VALUES ('2', 'https://fpt.vn/storage/upload/images/pages/subsidiaries/i2.png', 'i2.png', 'Băng thông kết nối trong nước với các ISP khác đạt 100 Gbps');
INSERT INTO `fti_field` VALUES ('3', 'https://fpt.vn/storage/upload/images/pages/subsidiaries/i3.png', 'i3.png', 'Kết nối quốc tế (cả cáp đất liền và cáp quang biển) với tổng dung lượng kết nối lên Trên 100 Gbps với nhiều hướng kết nối đến Mỹ, châu Âu và châu Á (Trung Quốc, Hàn Quốc, Hồng Kông, Nhật Bản, Singapore, Thailand...)');
INSERT INTO `fti_field` VALUES ('4', 'https://fpt.vn/storage/upload/images/pages/subsidiaries/i4.png', 'i4.png', 'Phạm vi kinh doanh trên toàn bộ lãnh thổ Việt Nam');
INSERT INTO `fti_field` VALUES ('5', 'https://fpt.vn/storage/upload/images/pages/subsidiaries/i5.png', 'i5.png', 'Hàng chục đối tác quốc tế: PCCW, T-System, NTT, Singtel, Korea Telecom, China Telecom…');

-- ----------------------------
-- Table structure for international_certificate
-- ----------------------------
DROP TABLE IF EXISTS `international_certificate`;
CREATE TABLE `international_certificate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of international_certificate
-- ----------------------------
INSERT INTO `international_certificate` VALUES ('1', 'https://fpt.vn/storage/upload/images/pages/intro/gioithieu_03.png', null);
INSERT INTO `international_certificate` VALUES ('2', 'https://fpt.vn/storage/upload/images/pages/intro/gioithieu_05.png', null);
INSERT INTO `international_certificate` VALUES ('3', 'https://fpt.vn/storage/upload/images/pages/intro/gioithieu_07.png', null);
INSERT INTO `international_certificate` VALUES ('4', 'https://fpt.vn/storage/upload/images/pages/intro/gioithieu_09.png', null);
INSERT INTO `international_certificate` VALUES ('5', 'https://fpt.vn/storage/upload/images/pages/intro/gioithieu_11.png', null);
INSERT INTO `international_certificate` VALUES ('6', 'https://fpt.vn/storage/upload/images/pages/intro/gioithieu_13.png', null);
INSERT INTO `international_certificate` VALUES ('7', 'https://fpt.vn/storage/upload/images/pages/intro/gioithieu_15.png', null);
INSERT INTO `international_certificate` VALUES ('8', 'https://fpt.vn/storage/upload/images/pages/intro/gioithieu_17.png', null);
INSERT INTO `international_certificate` VALUES ('9', 'https://fpt.vn/storage/upload/images/pages/intro/gioithieu_19.jpg', null);

-- ----------------------------
-- Table structure for partner_logo
-- ----------------------------
DROP TABLE IF EXISTS `partner_logo`;
CREATE TABLE `partner_logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of partner_logo
-- ----------------------------
INSERT INTO `partner_logo` VALUES ('1', 'https://fpt.vn/storage/upload/images/partners/partner-1.png', 'partner-1.png');
INSERT INTO `partner_logo` VALUES ('2', 'https://fpt.vn/storage/upload/images/partners/partner-2.png', 'partner-2.png');
INSERT INTO `partner_logo` VALUES ('3', 'https://fpt.vn/storage/upload/images/partners/partner-3.png', 'partner-3.png');
INSERT INTO `partner_logo` VALUES ('4', 'https://fpt.vn/storage/upload/images/partners/partner-4.png', 'partner-4.png');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', 'https://fpt.vn/storage/upload/images/banners/logos/logo-fpt-internet.png', 'logo-fpt-internet');
INSERT INTO `product` VALUES ('2', 'https://fpt.vn/storage/upload/images/banners/logos/logo-fpt-truyenhinh.png', 'logo-fpt-truyenhinh');
INSERT INTO `product` VALUES ('3', 'https://fpt.vn/storage/upload/images/banners/logos/logo-fpt-play.png', 'logo-fpt-play');
INSERT INTO `product` VALUES ('4', 'https://fpt.vn/storage/upload/images/banners/logos/logo-fpt-play-box.png', 'logo-fpt-box');
INSERT INTO `product` VALUES ('5', 'https://fpt.vn/storage/upload/images/banners/logos/logo-fshare.png', 'logo-fshare');
INSERT INTO `product` VALUES ('6', 'https://fpt.vn/storage/upload/images/banners/logos/logo-fsend.png', 'logo-fsend');
INSERT INTO `product` VALUES ('7', 'https://fpt.vn/storage/upload/images/banners/logos/logo-startalk.png', 'logo-startalk');
INSERT INTO `product` VALUES ('8', 'https://fpt.vn/storage/upload/images/banners/logos/logo-mix166.png', 'logo-mix-166');

-- ----------------------------
-- Table structure for slide_show
-- ----------------------------
DROP TABLE IF EXISTS `slide_show`;
CREATE TABLE `slide_show` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of slide_show
-- ----------------------------
INSERT INTO `slide_show` VALUES ('1', 'https://fpt.vn/storage/upload/images/banners/home/banner_qr_pay_2048x635.jpg', 'Slide Show 1');
INSERT INTO `slide_show` VALUES ('2', 'https://fpt.vn/storage/upload/images/banners/home/2048x635_trophy-vie.jpg', 'Slide Show 2');
INSERT INTO `slide_show` VALUES ('3', 'https://fpt.vn/storage/upload/images/banners/home/dangkyonline-2048x635_tieng-viet_.jpg', 'Slide Show 3');
INSERT INTO `slide_show` VALUES ('4', 'https://fpt.vn/storage/upload/images/banners/home/dichvuonline_tieng-viet_.jpg', 'Slide Show 4');
INSERT INTO `slide_show` VALUES ('5', 'https://fpt.vn/storage/upload/images/banners/home/banner-fptplaybox-trang-chinh.jpg', 'Slide Show 5');
INSERT INTO `slide_show` VALUES ('6', 'https://fpt.vn/storage/upload/images/banners/home/goi-kenh-1.jpg', 'Slide Show 6');
INSERT INTO `slide_show` VALUES ('7', 'https://fpt.vn/storage/upload/images/banners/home/_banner-fpt-internet-nhanh-_v_-trang-chinh.jpg', 'Slide Show 7');
INSERT INTO `slide_show` VALUES ('8', 'https://fpt.vn/storage/upload/images/banners/home/s_o_c_new.jpg', 'Slide Show 8');
INSERT INTO `slide_show` VALUES ('9', 'https://fpt.vn/storage/upload/images/banners/enterprise/pro_banner_vn.png', 'Slide Show 9');

-- ----------------------------
-- Table structure for trophys
-- ----------------------------
DROP TABLE IF EXISTS `trophys`;
CREATE TABLE `trophys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trophy` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of trophys
-- ----------------------------
INSERT INTO `trophys` VALUES ('1', 'Giải thưởng TOP ICT 2017 của HCA', null);
INSERT INTO `trophys` VALUES ('2', 'Giải thưởng Doanh nghiệp chuyển đổi kỹ thuật số ATSA 2016', null);
INSERT INTO `trophys` VALUES ('3', 'Danh hiệu Sao khuê liên tiếp trong nhiều năm từ 2012 – 2015', null);
INSERT INTO `trophys` VALUES ('4', 'Huy chương Vàng ICT Việt Nam 2015', null);
INSERT INTO `trophys` VALUES ('5', 'Thương hiệu Việt tiêu biểu 2014', null);
INSERT INTO `trophys` VALUES ('6', 'Doanh nghiệp dịch vụ được hài lòng nhất 2013', null);
INSERT INTO `trophys` VALUES ('7', 'Huy chương Vàng đơn vị Internet, Viễn thông 2012', null);
INSERT INTO `trophys` VALUES ('8', 'Huy chương Vàng đơn vị CNTT-TT Việt Nam 2006', null);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2', '0339379380', 'leanhtuan.311098@gmail.com', '7088be364d406cd2f77713ce037f2846', '2019-06-16 15:35:42');
INSERT INTO `users` VALUES ('7', '01664171166', 'user2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-06-16 18:44:04');

/*
SQLyog Community v12.3.2 (64 bit)
MySQL - 5.7.16-log : Database - mspr_ratings
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mspr_ratings` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `mspr_ratings`;

/*Table structure for table `location` */

DROP TABLE IF EXISTS `location`;

CREATE TABLE `location` (
  `loc_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'region id',
  `loc_desc` varchar(50) NOT NULL COMMENT 'Description',
  `cre_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`loc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `location` */

insert  into `location`(`loc_id`,`loc_desc`,`cre_dt`) values 
(1,'US','2017-03-15 22:47:51'),
(2,'IN','2017-03-15 22:47:59');

/*Table structure for table `prod_info` */

DROP TABLE IF EXISTS `prod_info`;

CREATE TABLE `prod_info` (
  `cnt_id` int(11) NOT NULL AUTO_INCREMENT,
  `loc_name` varchar(10) NOT NULL COMMENT 'Location name',
  `prod_id` varchar(20) NOT NULL COMMENT 'Product Id',
  `prod_name` varchar(50) NOT NULL COMMENT 'Product name',
  `prod_desc` varchar(512) DEFAULT NULL COMMENT 'Product Info',
  `camera_type` varchar(20) NOT NULL COMMENT 'Camera Type (8MP, 12MP, 16MP)',
  `weight` int(11) NOT NULL COMMENT 'Device weight in grams',
  `storage_size` varchar(20) NOT NULL COMMENT 'Device internal storage (16GB, 32GB, 64G, 128GB)',
  `price` varchar(30) NOT NULL COMMENT 'Product price',
  `cre_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cnt_id`,`prod_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

/*Data for the table `prod_info` */

/*Table structure for table `product_ratings` */

DROP TABLE IF EXISTS `product_ratings`;

CREATE TABLE `product_ratings` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'rating id',
  `loc_name` varchar(10) NOT NULL COMMENT 'Location name',
  `prod_name` varchar(60) NOT NULL COMMENT 'Product name',
  `prod_descr` varchar(512) NOT NULL COMMENT 'Product description',
  `user_name` varchar(100) NOT NULL COMMENT 'user name',
  `user_ratings` float NOT NULL COMMENT 'user ratinggs, ratings from 0 to 5',
  `ratings_desc` varchar(512) DEFAULT NULL COMMENT 'User comments',
  `cre_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rating_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

/*Data for the table `product_ratings` */

/*Table structure for table `store_info` */

DROP TABLE IF EXISTS `store_info`;

CREATE TABLE `store_info` (
  `store_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Store Id',
  `loc_name` varchar(10) NOT NULL COMMENT 'Location id -US/IN',
  `store_name` varchar(100) DEFAULT NULL COMMENT 'Store name',
  `loc_desc` varchar(50) NOT NULL COMMENT 'Location name/description',
  `cre_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`store_id`,`loc_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `store_info` */

insert  into `store_info`(`store_id`,`loc_name`,`store_name`,`loc_desc`,`cre_dt`,`upd_dt`) values 
(1,'US','US Store','USA','2017-03-17 15:42:54','2017-03-17 15:42:54'),
(2,'IN','IND Store','IND','2017-03-17 15:43:27','2017-03-17 15:43:27');

/*Table structure for table `user_group` */

DROP TABLE IF EXISTS `user_group`;

CREATE TABLE `user_group` (
  `cnt_id` int(11) NOT NULL AUTO_INCREMENT,
  `ug_id` int(11) NOT NULL COMMENT 'User group Id',
  `us_id` int(11) NOT NULL COMMENT 'User Id',
  `ug_desc` varchar(50) NOT NULL COMMENT 'user group description',
  PRIMARY KEY (`cnt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `user_group` */

/*Table structure for table `user_group_info` */

DROP TABLE IF EXISTS `user_group_info`;

CREATE TABLE `user_group_info` (
  `ug_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User group id',
  `ug_desc` varchar(50) NOT NULL COMMENT 'user group description',
  `cre_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ug_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `user_group_info` */

/*Table structure for table `user_info` */

DROP TABLE IF EXISTS `user_info`;

CREATE TABLE `user_info` (
  `us_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User id',
  `user_name` varchar(100) NOT NULL COMMENT 'user name',
  `user_email` varchar(100) NOT NULL COMMENT 'User email address',
  `mobile_no` varchar(16) NOT NULL COMMENT 'User mobile no',
  `password` varchar(200) NOT NULL COMMENT 'user passwd',
  `loc_name` varchar(10) NOT NULL COMMENT 'User location id',
  `role_id` int(11) NOT NULL COMMENT 'User role',
  `user_desc` varchar(100) DEFAULT NULL COMMENT 'User other info',
  `cre_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`us_id`,`user_email`,`mobile_no`,`loc_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `user_info` */

insert  into `user_info`(`us_id`,`user_name`,`user_email`,`mobile_no`,`password`,`loc_name`,`role_id`,`user_desc`,`cre_dt`,`upd_dt`) values 
(1,'Admin','admin@gmail.com','919999911223','$2y$10$hbaoGXSYM.YXpfGqz6OOP.5HICAOM0qBkqN3nVcSXEd1Js/4pDxhK','IN',1,NULL,'2017-03-15 14:28:26','2017-03-15 14:28:26');

/*Table structure for table `user_roles` */

DROP TABLE IF EXISTS `user_roles`;

CREATE TABLE `user_roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user role id',
  `role_level` int(1) NOT NULL COMMENT 'permission levels 1:Store manager, 2- Staff, 3:site visitor',
  `role_desc` varchar(100) DEFAULT NULL COMMENT 'Roles description',
  `cre_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `up_dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`role_id`,`role_level`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `user_roles` */

insert  into `user_roles`(`role_id`,`role_level`,`role_desc`,`cre_dt`,`up_dt`) values 
(1,1,'Manager','2017-03-15 22:37:36','2017-03-15 22:37:36'),
(2,2,'Staff','2017-03-15 22:37:41','2017-03-15 22:37:41'),
(3,3,'Visitor','2017-03-15 22:37:45','2017-03-15 22:37:45');

/*Table structure for table `user_roles_permission` */

DROP TABLE IF EXISTS `user_roles_permission`;

CREATE TABLE `user_roles_permission` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL COMMENT 'User roles id',
  `role_view` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'view permission',
  `role_create` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'create permission',
  `role_update` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'update permission',
  `role_delete` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'delete permission',
  `cre_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idx`,`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `user_roles_permission` */

insert  into `user_roles_permission`(`idx`,`role_id`,`role_view`,`role_create`,`role_update`,`role_delete`,`cre_dt`,`upd_dt`) values 
(1,1,1,1,1,1,'2017-03-18 23:25:14','2017-03-18 23:25:14'),
(2,2,1,1,1,1,'2017-03-18 23:25:34','2017-03-18 23:25:34'),
(3,3,1,0,0,0,'2017-03-18 23:25:53','2017-03-18 23:25:53');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

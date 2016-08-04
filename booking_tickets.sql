# Host: localhost  (Version: 5.6.20)
# Date: 2016-02-06 11:43:45
# Generator: MySQL-Front 5.2  (Build 5.66)

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

DROP DATABASE IF EXISTS `booking_tickets`;
CREATE DATABASE `booking_tickets` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `booking_tickets`;

#
# Source for table "booking"
#

DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `booking_reference` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_payment` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "booking"
#

INSERT INTO `booking` VALUES ('B0001','sads sdasd','1','1',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),('B0002','dasdasdasd dasdasda','1','2',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00');

#
# Source for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "migrations"
#

INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_02_02_085530_tickets',1),('2016_02_02_085551_tickets_type',1),('2016_02_02_104014_seat',1),('2016_02_02_104027_venue',1),('2016_02_02_104042_payment',1),('2016_02_02_133529_booking',1),('2016_02_03_045457_show',1);

#
# Source for table "password_resets"
#

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "password_resets"
#


#
# Source for table "payment"
#

DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payment_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "payment"
#

INSERT INTO `payment` VALUES (1,'111','aaaa',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00');

#
# Source for table "seat"
#

DROP TABLE IF EXISTS `seat`;
CREATE TABLE `seat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `seat_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "seat"
#

INSERT INTO `seat` VALUES (1,'seat 1',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'seat 2',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'seat 3',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'seat 4',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00');

#
# Source for table "show"
#

DROP TABLE IF EXISTS `show`;
CREATE TABLE `show` (
  `id_booking` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_venue` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_seat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `show_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "show"
#

INSERT INTO `show` VALUES ('B0001','1','1','lk',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),('B0003','1','1','lk',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00');

#
# Source for table "tickets"
#

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE `tickets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ticketName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_ticket_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_booking` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "tickets"
#

INSERT INTO `tickets` VALUES (8,'ticketee','1','B0001',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,'tickete','1','B0001',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(10,'ticketeasas','1','B0001',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(11,'ticketee','1','B0002',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(12,'ticketee','1','B0002',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(13,'ticketee','1','B0002',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(31,'ticketee','1','B0003',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00');

#
# Source for table "tickets_type"
#

DROP TABLE IF EXISTS `tickets_type`;
CREATE TABLE `tickets_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ticket_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "tickets_type"
#

INSERT INTO `tickets_type` VALUES (1,'ticket 13',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00');

#
# Source for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `town` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'Hery','septy','Hery','$2y$10$BJgiQSEcNzho8vqEDrqy1O84GmqsNp0xCWG2YN/fmOt/sb5cwt/nu','Cengkareng Timur','Jakarta barat','Indonesia','11730','heryspty@gmail.com','ZxFyrr3meK7UhPZpHTFh3K4g7JN9l9FQ7AaE3efoZ95wdjSjge0kPCKGNCMY','0000-00-00 00:00:00','2016-02-04 09:35:42'),(2,'hs','septy','Hery','$2y$10$2htGtzq2cInC.DqNoXVtOesSP.11Upq3vsKEGbT2bw5ZB9kTSD/kK','Cengkareng Timur','Jakarta barat','Indonesia','11730','herys@gmail.com',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00');

#
# Source for table "venue"
#

DROP TABLE IF EXISTS `venue`;
CREATE TABLE `venue` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `venue_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `venue_location` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "venue"
#

INSERT INTO `venue` VALUES (1,'aa','aaa',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00');

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

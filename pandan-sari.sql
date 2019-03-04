/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.30-MariaDB : Database - epiz_23541696_pandasari
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`epiz_23541696_pandasari` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `epiz_23541696_pandasari`;

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id` INT(5) NOT NULL AUTO_INCREMENT,
  `random` VARCHAR(10) DEFAULT NULL,
  `first_name` VARCHAR(25) DEFAULT NULL,
  `last_name` VARCHAR(25) DEFAULT NULL,
  `email` VARCHAR(25) DEFAULT NULL,
  `address` VARCHAR(25) DEFAULT NULL,
  `phone` CHAR(13) DEFAULT NULL,
  `city` CHAR(20) DEFAULT NULL,
  `for_date` DATE DEFAULT NULL,
  `parasailing` INT(5) DEFAULT NULL,
  `bananaboat` INT(5) DEFAULT NULL,
  `jetski` INT(5) DEFAULT NULL,
  `flyingfish` INT(5) DEFAULT NULL,
  `scubadiving` INT(5) DEFAULT NULL,
  `snorkeling` INT(5) DEFAULT NULL,
  `snorkeling+ti` INT(5) DEFAULT NULL,
  `glass+ti` INT(5) DEFAULT NULL,
  `mangrove` INT(5) DEFAULT NULL,
  `waterski` INT(5) DEFAULT NULL,
  `seawalker` INT(5) DEFAULT NULL,
  `flyboard` INT(5) DEFAULT NULL,
  `donut` INT(5) DEFAULT NULL,
  `trawling` INT(5) DEFAULT NULL,
  `coral` INT(5) DEFAULT NULL,
  `spear` INT(5) DEFAULT NULL,
  `packagea` INT(5) DEFAULT NULL,
  `packageb` INT(5) DEFAULT NULL,
  `packagec` INT(5) DEFAULT NULL,
  `total` int(25) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id`,`random`,`first_name`,`last_name`,`email`,`address`,`phone`,`city`,`for_date`,`parasailing`,`bananaboat`,`jetski`,`flyingfish`,`scubadiving`,`snorkeling`,`snorkeling+ti`,`glass+ti`,`mangrove`,`waterski`,`seawalker`,`flyboard`,`donut`,`trawling`,`coral`,`spear`,`packagea`,`packageb`,`packagec`,`total`,`created_at`) values (1,'0','Eka','Krisna','kwayan624@gmail.com','Jalan Nangka Selatan Gang','0898437749','Denpasar','2019-02-26',0,0,0,0,0,0,NULL,NULL,0,0,3,0,NULL,0,0,0,0,1,0,NULL,'2019-02-26'),(2,'0','Eka','Krisna','ekakrisna123@gmail.com','Jalan Nangka Selatan Gang','0898412312','Denpasar','2019-02-28',0,0,0,0,0,0,NULL,NULL,0,0,0,0,NULL,0,0,0,0,4,0,NULL,'2019-02-26'),(3,'DC6FN','Ketut','Manik','ekakrisna123@gmail.com','Jalan Antasura No 4','08984337749','Denpasar','2019-03-31',0,0,0,0,0,0,NULL,NULL,0,0,1,1,1,1,1,1,1,1,1,NULL,'2019-02-26'),(4,'6A7G9','Eka','Krisna','kwayan624@gmail.com','Jalan Nangka Selatan Gang','08984337749','Denpasar','2019-03-31',0,0,0,0,0,0,NULL,NULL,0,0,0,0,0,0,3,0,0,0,0,NULL,'2019-02-28'),(5,'LBE61','Sri','Asih','kwayan624@gmail.com','Jalan Kaswari No 7','08984337749','denpasar','2019-04-30',1,1,1,1,1,1,NULL,NULL,1,1,1,1,1,1,1,1,1,1,1,7770000,'2019-02-28'),(6,'65I1J','Galuh','Feby','kwayan624@gmail.com','Jalan Nangka Selatan Gang','08984337749','Denpasar','2019-04-30',1,1,1,1,1,1,NULL,NULL,1,1,1,1,1,1,1,1,1,1,1,7770000,'2019-02-28'),(7,'C3HDI','Ryan','Adiwiguna','kwayan624@gmail.com','Jalan Nangka Selatan Gang','08984337749','Denpasar','2019-03-31',0,0,0,0,0,0,NULL,NULL,0,0,0,0,0,0,0,0,0,0,6,1350000,'2019-02-28'),(8,'6D5L2','Surya','Pertama','kwayan624@gmail.com','Jalan Nanga Selatan ','08984337749','Denpasar','2019-02-28',0,0,0,0,0,0,NULL,NULL,0,0,0,0,0,0,0,0,1,1,1,720000,'2019-02-28'),(9,'9DI9L','Eka','Krisna','kwayan624@gmail.com','Jalan Nangka Selatan Gang','089843377449','Denpasar','2019-02-28',1,0,0,0,0,0,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,270000,'2019-02-28'),(10,'8A3KC','Surya ','Ratata','kwayan624@gmail.com','Jalan Antasura No 4','08984337748','Denpasar','2019-02-28',0,5,0,0,0,0,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,300000,'2019-02-28'),(11,'4LMJD','Krisna','Putra','kwayan624@gmail.com','Jalan Nangka Selatan Gang','08984337749','Denpasar','2019-02-28',0,0,2,0,0,0,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,240000,'2019-02-28'),(12,'2JA29','Eka','Saputra','kwayan624@gmail.com','Jalan Sari Gading No 7','08984337748','Denpasar','2019-03-31',1,1,0,1,1,0,1,2,0,1,0,0,0,0,0,0,1,1,1,2470000,'2019-02-28'),(13,'CH3GK','Ketut Manik ','Mahendra','kwayan624@gmail.com','Jalan Nangka Selatan Gang','08984337748','Denpasar','2019-04-23',0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,0,0,0,4930000,'2019-02-28'),(14,'MF9N7','Ketut Manik ','Mahendra','kwayan624@gmail.com','Jalan Nangka Selatan Gang','08984337748','Denpasar','2019-04-23',0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,0,0,0,4930000,'2019-02-28'),(15,'CGCI4','Sri','Asih','kwayan624@gmail.com','Jalan Nangka Seltana Gang','08984337749','Denpasar','2019-02-28',0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,0,0,0,4930000,'2019-02-28'),(16,'14J2L','Sura','Pandika','kwayan624@gmail.com','kwayan624@gmail.com','08984337749','Denpasar','2019-03-31',0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,0,0,0,4800000,'2019-02-28'),(17,'E6G9E','Kety','Ledy','kwayan624@gmail.com','Jalan Nangka Selatan Gang','08984337748','Denpasar','2019-03-29',1,1,1,1,1,1,1,2,1,1,1,1,1,1,1,1,1,1,1,8190000,'2019-02-28'),(18,'551CC','Boy','Adi','kwayan624@gmail.com','Jalan Nangka Selatan Gang','08984337749','Denpasar','2019-04-30',1,1,1,1,1,1,1,2,1,1,1,1,1,1,1,1,1,1,1,8220000,'2019-02-28'),(19,'LEJHD','Daramyasa','Sriaasih','kwayan624@gmail.com','Jalan Nangka Selatan Gang','08984337749','Denpasar','2019-03-31',1,1,1,1,1,1,1,2,1,1,1,1,1,1,1,1,1,1,1,8330000,'2019-02-28'),(20,'IB83K','Boking','Pandan','kwayan624@gmail.com','Jalan Nusa Indah No 10','08984337749','Denpasar','2019-04-30',1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,270000,'2019-02-28'),(21,'41KC6','First Name','Last Name','kwayan624@gmail.com','Jalan Nangka Selatan Gang','08984337749','Denpasar','2019-04-23',0,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,120000,'2019-02-28'),(22,'II89F','Name First','Name Last','kwayan624@gmail.com','Jalan Nangka Selatan No 7','08984377749','Denpasar','2019-02-28',0,0,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,240000,'2019-02-28'),(23,'7C52A','Gita','Saraswati','kwayan624@gmail.com','Jalan Nangka Selatan Gang','08984337749','Denpasar','2019-03-31',0,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,120000,'2019-03-01');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`) values (8,'ekakrisna','ekakrisna'),(9,'pandan','sari');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

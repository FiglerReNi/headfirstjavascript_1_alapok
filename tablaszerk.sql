/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 5.6.24 : Database - houses
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`houses` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci */;

USE `houses`;

/*Data for the table `house_for_sale` */

insert  into `house_for_sale`(`id`,`address`,`bedroom`,`price`,`zip`) values 
(1,'Budapest Kérő utca 6',2,25000000,1000),
(2,'Szeged Kossuth utca 6',1,13000000,2000),
(3,'Miskolc Rákóczi utca 6',2,17000000,8000),
(4,'Budapest Petőfi utca 6',3,30000000,1000);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

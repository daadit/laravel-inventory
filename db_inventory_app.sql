/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.19-MariaDB : Database - db_inventory_app
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_inventory_app` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_inventory_app`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `kode` varchar(50) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jenis` int(11) DEFAULT NULL,
  `satuan` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `hargabeli` int(11) DEFAULT NULL,
  `hargajual` int(11) DEFAULT NULL,
  `biayapesan` int(11) DEFAULT NULL,
  `biayasimpan` int(11) DEFAULT NULL,
  `leadtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

insert  into `barang`(`kode`,`nama`,`jenis`,`satuan`,`stok`,`hargabeli`,`hargajual`,`biayapesan`,`biayasimpan`,`leadtime`) values 
('BRG001','Amoxilin',1,2,23,10000,12000,1000,1000,7),
('BRG002','Vitamin',2,3,21,12000,13000,1000,500,8);

/*Table structure for table `detailpembelian` */

DROP TABLE IF EXISTS `detailpembelian`;

CREATE TABLE `detailpembelian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nofaktur` char(20) DEFAULT NULL,
  `kodebarang` varchar(50) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;

/*Data for the table `detailpembelian` */

/*Table structure for table `detailpenjualan` */

DROP TABLE IF EXISTS `detailpenjualan`;

CREATE TABLE `detailpenjualan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nofaktur` char(20) DEFAULT NULL,
  `kodebarang` varchar(50) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

/*Data for the table `detailpenjualan` */

/*Table structure for table `jenis` */

DROP TABLE IF EXISTS `jenis`;

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `jenis` */

insert  into `jenis`(`id`,`nama`) values 
(1,'Tablet'),
(2,'Botol'),
(3,'Sachet');

/*Table structure for table `pembelian` */

DROP TABLE IF EXISTS `pembelian`;

CREATE TABLE `pembelian` (
  `nofaktur` char(20) NOT NULL,
  `tglmasuk` datetime DEFAULT NULL,
  `supplier` int(11) DEFAULT NULL,
  `totalitem` int(11) DEFAULT NULL,
  `totalbayar` int(11) DEFAULT NULL,
  PRIMARY KEY (`nofaktur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pembelian` */

/*Table structure for table `penjualan` */

DROP TABLE IF EXISTS `penjualan`;

CREATE TABLE `penjualan` (
  `nofaktur` char(20) NOT NULL,
  `tglkeluar` datetime DEFAULT NULL,
  `totalitem` int(11) DEFAULT NULL,
  `totalbayar` int(11) DEFAULT NULL,
  PRIMARY KEY (`nofaktur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `penjualan` */

/*Table structure for table `satuan` */

DROP TABLE IF EXISTS `satuan`;

CREATE TABLE `satuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `satuan` */

insert  into `satuan`(`id`,`nama`) values 
(1,'Pak'),
(2,'Lusin'),
(3,'Box');

/*Table structure for table `supplier` */

DROP TABLE IF EXISTS `supplier`;

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `notelp` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `supplier` */

insert  into `supplier`(`id`,`nama`,`notelp`,`alamat`) values 
(1,'Jaya Abadi','089895353534','Padang'),
(2,'Inti Sehat','082234734738','Sibolga');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`role`,`created_at`,`updated_at`) values 
(1,'Administrator','administrator@gmail.com',NULL,'$2y$10$.YSchuRmYt8QETgJ9vi5.etP9tJ8DemajvXr3I3sx0sXATqcD2jf2','XwoFe50hCZAIeO3JfdG6b9YqFuZMZdUc8yI9GckJgAaVG01Y4ygXsVOuiBAX',0,'2022-05-23 15:13:57','2022-05-23 15:13:57'),
(2,'Pimpinan','pimpinan@gmail.com',NULL,'$2y$10$f7V4W.lUW6w0MeLz.WGdmOFGnvPDoHtoi7eTxnt9DtVIzPV4.AEjG',NULL,1,'2022-06-07 22:47:08','2022-06-07 22:47:13'),
(3,'Karyawan Satu','karyawansatu@gmail.com',NULL,'$2y$10$jO5jpMhzYVWlBTyS917U8u147mT5QGoh2Y4h3Ey2CC3dFX/x9jVRG',NULL,2,'2022-06-07 22:47:10','2022-06-07 22:47:15');

/* Trigger structure for table `detailpembelian` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `stok_barang_pembelian` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `stok_barang_pembelian` AFTER DELETE ON `detailpembelian` FOR EACH ROW BEGIN
	UPDATE barang SET stok = stok - OLD.qty
	WHERE kode = OLD.kodebarang;
    END */$$


DELIMITER ;

/* Trigger structure for table `detailpenjualan` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `stok_barang_penjualan` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `stok_barang_penjualan` AFTER DELETE ON `detailpenjualan` FOR EACH ROW BEGIN
	UPDATE barang SET stok = stok + OLD.qty
	WHERE kode = OLD.kodebarang;
    END */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

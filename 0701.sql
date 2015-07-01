-- MySQL dump 10.13  Distrib 5.6.25, for osx10.8 (x86_64)
--
-- Host: localhost    Database: opportunity_db
-- ------------------------------------------------------
-- Server version	5.6.25-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `opportunity`
--

DROP TABLE IF EXISTS `opportunity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opportunity` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `Business_Name` text NOT NULL,
  `Website` varchar(40) NOT NULL,
  `Phone_Number` varchar(11) DEFAULT NULL,
  `Contact_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Requested_Follow_up` text NOT NULL,
  `Requested_Meeting` text NOT NULL,
  `Requested_Sample` text NOT NULL,
  `Notes` text NOT NULL,
  `followup_date` datetime NOT NULL,
  `followup_notes` text NOT NULL,
  `followup_Meeting_date` datetime NOT NULL,
  `followup_Meeting_topic` text NOT NULL,
  `followup_Meeting_sample_app_name` text NOT NULL,
  `followup_Meeting_sample_buttons` text NOT NULL,
  `followup_Meeting_sample_notes` text NOT NULL,
  `status` text NOT NULL,
  `Interesting_package` text NOT NULL,
  `committed_to_do` text NOT NULL,
  `final_package` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opportunity`
--

LOCK TABLES `opportunity` WRITE;
/*!40000 ALTER TABLE `opportunity` DISABLE KEYS */;
INSERT INTO `opportunity` VALUES (20,'Mircosoft','','','','','Yes','Yes','No','Love you','0000-00-00 00:00:00','','2015-08-18 15:00:05','New company','mircolive','softtouch','ready','','','',''),(24,'nihaome','','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(27,'Google','www.google.co','12','Larry Page','larrypage@gmail.com','','','','','0000-00-00 00:00:00','','1992-00-00 00:00:00','','','','','Interested','','',''),(28,'asdfasdfadsfa','','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(29,'Dengxu','','6132456464','Dengxu','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(30,'Dengxu','dengxu.com','6132456464','Dengxu','','','','','Good','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(31,'Dengxu','dengxu.com','6132456464','','rewbfdsgrf','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(32,'JIangjun','www.jiangjifeng.com','61312212121','JIfengjiang','jiangjun@gmail.com','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(33,'TiangeYao','www.yaotiange.com','61321312142','Tiange Yao','yaotiange@gmail.com','','','','','1998-08-19 12:14:56','','0000-00-00 00:00:00','','','','','Interested','','',''),(34,'jkljlj','kklklmlkmlkm',',mmlmlml','kljljljlm','mkklmlml','l;k;k;m  ,.','kjhik m,n,n','kjhkhkjknnk','jgjhbjkbjkbkjb','0000-00-00 00:00:00','ygjbufukjnlk','0000-00-00 00:00:00','cjhbkjnkjnjkjgqhhj','fgvhjbknknkjh','hnnmksdfhjhiufy','chvjhnkoiggh m,','Interested','','',''),(35,'Mircosoft','dengxu.com','18007688923','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(36,'s','dengxu.com','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(37,'alibaba','www.aliyun.com','','','yh0546@aliyun.com','','','','','2015-06-30 21:00:07','','2015-06-30 21:00:07','','','','','Interested','','',''),(38,'sina','www.sina.com','1234567','yuanhengzhao','yuanheng.zhao@sina.com','','','','','2015-06-30 21:00:44','','2015-06-30 21:00:44','','','','','Interested','','',''),(39,'sina','www.sina.com','1234567','yuanhengzhao','yuanheng.zhao@sina.com','','','','','2015-06-30 21:00:44','','2015-06-30 21:00:44','','','','','Interested','','',''),(40,'sina','www.sina.com','1234567','yuanhengzhao','yuanheng.zhao@sina.com','','','','','2015-06-30 21:00:44','','2015-06-30 21:00:44','','','','','Interested','','',''),(41,'Google','12312431234','18007688923','JIfengjiang','s.chao1014@gmail.com','Yes','','','','2015-06-30 21:03:50','','2015-06-30 21:03:50','','','','','Interested','','',''),(42,'sdfasddddddd','sdfs.ca','','','','','','','','2015-06-30 21:04:32','','2015-06-30 21:04:32','','','','','Interested','','',''),(43,'qewfqefe','wqevq.ca','','','','','','','','2015-06-30 21:33:19','','2015-06-30 21:33:19','','','','','Interested','','',''),(44,'sadfasfa','wefqw.efa','','','','','','','','2015-06-30 21:40:55','','2015-06-30 21:40:55','','','','','Interested','','',''),(45,'sadfasfa','wefqw.efa','','','','','','','','2015-06-30 21:40:55','','2015-06-30 21:40:55','','','','','Interested','','',''),(46,'asdfasdfa','egewrgwfe.we','','','','','','','asdfas','2015-06-30 21:47:08','asdfasdf','2015-06-30 21:47:08','','','','','closed','','',''),(47,'asdfasdfa','egewrgwfe.we','','','','','','','asdfas','2015-06-30 21:47:08','asdfasdf','2015-06-30 21:47:08','','','','','Interested','','',''),(48,'dfasfae','qerqwe.sd','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(49,'aweffdfefr','wqefaw.cdas','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(50,'sdfadf','qweqref.ca','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(51,'sdfasddddddd','www.google.com','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(52,'sdfasddddddd','www.google.com','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(53,'sdfasf','ffew','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(54,'sdfasf','ffew','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(55,'sdfasfda','wefqwe','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(56,'s','s','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(57,'qweer','qwer','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(58,'qweer','qwer','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(59,'sdf','qe','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(60,'woshizhaoyuanheng','nihaome','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(61,'s','s','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(62,'s','s','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(63,'asdf','fda','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(64,'asdf','fda','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(65,'ee','ww','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(66,'ee','ww','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(67,'ee','ww','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(68,'nihao','zaijian','','','','','','','','0000-00-00 00:00:00','','0000-00-00 00:00:00','','','','','Interested','','',''),(69,'hello','sany','','','','','','','','2015-07-01 13:25:39','','2015-07-01 13:25:39','','','','','Interested','','','');
/*!40000 ALTER TABLE `opportunity` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-01 15:50:54

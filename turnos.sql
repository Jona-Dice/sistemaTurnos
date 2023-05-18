# Host: localhost  (Version 5.5.5-10.4.24-MariaDB)
# Date: 2022-08-30 18:42:07
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "contador"
#

DROP TABLE IF EXISTS `contador`;
CREATE TABLE `contador` (
  `id` int(11) NOT NULL,
  `turno` varchar(255) DEFAULT NULL,
  `caja` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "contador"
#

INSERT INTO `contador` VALUES (0,'0','0');

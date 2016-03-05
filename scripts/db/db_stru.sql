USE adsCottage ;

CREATE TABLE `postal` (
  `country_code` varchar(2) DEFAULT NULL,
  `postal_code` varchar(20) DEFAULT NULL,
  `place_name` varchar(180) DEFAULT NULL,
  `admin_name1` varchar(100) DEFAULT NULL,
  `admin_code1` varchar(20) DEFAULT NULL,
  `admin_name2` varchar(100) DEFAULT NULL,
  `admin_code2` varchar(20) DEFAULT NULL,
  `admin_name3` varchar(100) DEFAULT NULL,
  `admin_code3` varchar(20) DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `accuracy` int(11) DEFAULT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1 ;

CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(250) NOT NULL,
  `headingText` varchar(100) DEFAULT NULL,
  `descriptionText` text,
  `type` int(11) DEFAULT NULL,
  `animationImgPath` varchar(250) DEFAULT NULL,
  `buttonText` varchar(50) DEFAULT NULL,
  `landingURL` varchar(250) NOT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


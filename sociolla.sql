-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `thread`;
CREATE TABLE `thread` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITLE` varchar(100) NOT NULL,
  `TEXT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `thread` (`ID`, `TITLE`, `TEXT`) VALUES
(1,	'Perkembangan Teknologi yg semakin pesat',	'Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat Perkembangan Teknologi yg semakin pesat '),
(2,	'Judul kedua',	'Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua Judul kedua ');

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` text NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `ALAMAT` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`ID`, `EMAIL`, `PASSWORD`, `NAME`, `ALAMAT`) VALUES
(3,	'nur33n4@yahoo.com',	'2cfd93505dc431deb93135f1876536a29d2b17e573b53e8eb005e488c85d9185c264c75e4432101a05039588d7c21b0fea4d1bea1b24a7d9cb09a9e340e6f4d5/HgvNKYk+s1EjRbjClvogA==',	'Delika Pratiwi',	'Bogor');

-- 2018-07-07 05:09:06

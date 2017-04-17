-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.17 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2017-04-17 14:25:27
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for ci
CREATE DATABASE IF NOT EXISTS `ci` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ci`;


-- Dumping structure for table ci.country
CREATE TABLE IF NOT EXISTS `country` (
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ci.country: ~201 rows (approximately)
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT IGNORE INTO `country` (`name`) VALUES
	('Afghanistan'),
	('Albania'),
	('Algeria'),
	('Andorra'),
	('Angola'),
	('Antigua and Barbuda'),
	('Argentina'),
	('Armenia'),
	('Australia'),
	('Austria'),
	('Azerbaijan'),
	('Bahamas, The'),
	('Bahrain'),
	('Bangladesh'),
	('Barbados'),
	('Belarus'),
	('Belgium'),
	('Belize'),
	('Benin'),
	('Bhutan'),
	('Bolivia'),
	('Bosnia and Herzegovina'),
	('Botswana'),
	('Brazil'),
	('Brunei'),
	('Bulgaria'),
	('Burkina Faso'),
	('Burma'),
	('Burundi'),
	('Cambodia'),
	('Cameroon'),
	('Canada'),
	('Cape Verde'),
	('Central Africa'),
	('Chad'),
	('Chile'),
	('China'),
	('Colombia'),
	('Comoros'),
	('Congo, Democratic Republic of the'),
	('Costa Rica'),
	('Cote dIvoire'),
	('Crete'),
	('Croatia'),
	('Cuba'),
	('Cyprus'),
	('Czech Republic'),
	('Denmark'),
	('Djibouti'),
	('Dominican Republic'),
	('East Timor'),
	('Ecuador'),
	('Egypt'),
	('El Salvador'),
	('Equatorial Guinea'),
	('Eritrea'),
	('Estonia'),
	('Ethiopia'),
	('Fiji'),
	('Finland'),
	('France'),
	('Gabon'),
	(' The Gambia'),
	('Georgia'),
	('Germany'),
	('Ghana'),
	('Greece'),
	('Grenada'),
	('Guadeloupe'),
	('Guatemala'),
	('Guinea'),
	('Guinea-Bissau'),
	('Guyana'),
	('Haiti'),
	('Holy See'),
	('Honduras'),
	('Hong Kong'),
	('Hungary'),
	('Iceland'),
	('India'),
	('Indonesia'),
	('Iran'),
	('Iraq'),
	('Ireland'),
	('Israel'),
	('Italy'),
	('Ivory Coast'),
	('Jamaica'),
	('Japan'),
	('Jordan'),
	('Kazakhstan'),
	('Kenya'),
	('Kiribati'),
	('Korea, North'),
	('Korea, South'),
	('Kosovo'),
	('Kuwait'),
	('Kyrgyzstan'),
	('Laos'),
	('Latvia'),
	('Lebanon'),
	('Lesotho'),
	('Liberia'),
	('Libya'),
	('Liechtenstein'),
	('Lithuania'),
	('Macau'),
	('Macedonia'),
	('Madagascar'),
	('Malawi'),
	('Malaysia'),
	('Maldives'),
	('Mali'),
	('Malta'),
	('Marshall Islands'),
	('Mauritania'),
	('Mauritius'),
	('Mexico'),
	('Micronesia'),
	('Moldova'),
	('Monaco'),
	('Mongolia'),
	('Montenegro'),
	('Morocco'),
	('Mozambique'),
	('Namibia'),
	('Nauru'),
	('Nepal'),
	('Netherlands'),
	('New Zealand'),
	('Nicaragua'),
	('Niger'),
	('Nigeria'),
	('North Korea'),
	('Norway'),
	('Oman'),
	('Pakistan'),
	('Palau'),
	('Panama'),
	('Papua New Guinea'),
	('Paraguay'),
	('Peru'),
	('Philippines'),
	('Poland'),
	('Portugal'),
	('Qatar'),
	('Romania'),
	('Russia'),
	('Rwanda'),
	('Saint Lucia'),
	('Saint Vincent and the Grenadines'),
	('Samoa'),
	('San Marino'),
	('Sao Tome and Principe'),
	('Saudi Arabia'),
	('Scotland'),
	('Senegal'),
	('Serbia'),
	('Seychelles'),
	('Sierra Leone'),
	('Singapore'),
	('Slovakia'),
	('Slovenia'),
	('Solomon Islands'),
	('Somalia'),
	('South Africa'),
	('South Korea'),
	('Spain'),
	('Sri Lanka'),
	('Sudan'),
	('Suriname'),
	('Swaziland'),
	('Sweden'),
	('Switzerland'),
	('Syria'),
	('Taiwan'),
	('Tajikistan'),
	('Tanzania'),
	('Thailand'),
	('Tibet'),
	('Timor-Leste'),
	('Togo'),
	('Tonga'),
	('Trinidad and Tobago'),
	('Tunisia'),
	('Turkey'),
	('Turkmenistan'),
	('Tuvalu'),
	('Uganda'),
	('Ukraine'),
	('United Arab Emirates'),
	('United Kingdom'),
	('United States'),
	('Uruguay'),
	('Uzbekistan'),
	('Vanuatu'),
	('Venezuela'),
	('Vietnam'),
	('Yemen'),
	('Zambia'),
	('Zimbabwe'),
	('England'),
	('Wales'),
	('Gibraltar'),
	('Guernsey'),
	('Isle of Man'),
	('Jersey'),
	('Northern Ireland'),
	('European Union'),
	('Brunel Darussalam');
/*!40000 ALTER TABLE `country` ENABLE KEYS */;


-- Dumping structure for table ci.exclisive_second
CREATE TABLE IF NOT EXISTS `exclisive_second` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(50) NOT NULL,
  `thumb` varchar(50) NOT NULL,
  `is_active` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- Dumping data for table ci.exclisive_second: ~30 rows (approximately)
/*!40000 ALTER TABLE `exclisive_second` DISABLE KEYS */;
INSERT IGNORE INTO `exclisive_second` (`id`, `country`, `thumb`, `is_active`, `created_at`) VALUES
	(1, 'England', 'england-flag.png', '1', '2017-04-15 11:58:53'),
	(2, 'Scotland', 'scotland-flag.png', '1', '2017-04-15 11:59:39'),
	(3, 'Wales', 'wales-flag.png', '1', '2017-04-15 12:01:13'),
	(4, 'Cyprus', 'cyprus-flag.png', '1', '2017-04-15 12:01:51'),
	(5, 'Malta', 'malta-flag.png', '1', '2017-04-15 12:02:21'),
	(6, 'Gibraltar', 'gibraltar-flag.png', '1', '2017-04-15 12:03:56'),
	(7, 'Guernsey', 'guernsey-flag.png', '1', '2017-04-15 12:05:15'),
	(8, 'Isle of Man', 'isle2-flag.png', '1', '2017-04-15 12:11:49'),
	(9, 'Jersey', 'jersey-flag.png', '1', '2017-04-15 12:22:29'),
	(10, 'Northern Ireland', 'northern1-flag.png', '1', '2017-04-15 12:23:03'),
	(11, 'European Union', 'european-flag.png', '1', '2017-04-15 12:24:07'),
	(12, 'Brunel Darussalam', 'brunail-flag.png', '1', '2017-04-15 12:24:31'),
	(13, 'Botswana', 'botswana-flag.png', '1', '2017-04-15 12:24:50'),
	(14, 'Mauritius', 'mauritius-flag.png', '1', '2017-04-15 12:25:13'),
	(15, 'Namibia', 'namibia-flag.png', '1', '2017-04-15 12:25:49'),
	(16, 'Cameroon', 'Cameroon-flag.png', '1', '2017-04-15 12:27:48'),
	(17, 'The Gambia', 'gambia2-flag.png', '1', '2017-04-15 12:28:09'),
	(18, 'Kenya', 'kenya-flag.png', '1', '2017-04-15 12:28:25'),
	(19, 'Lesotho', 'lesotho-flag.png', '1', '2017-04-15 12:28:45'),
	(20, 'Malaysia', 'malaysia-flag.png', '1', '2017-04-15 12:29:08'),
	(21, 'Maldives', 'maldives-flag.png', '1', '2017-04-15 12:29:45'),
	(22, 'Pakistan', 'pakistan-flag.png', '1', '2017-04-15 12:30:01'),
	(23, 'Samoa', 'samoa-flag.png', '1', '2017-04-15 12:30:26'),
	(24, 'Sierra Leone', 'Sierra-flag.png', '1', '2017-04-15 12:30:43'),
	(25, 'Sri Lanka', 'sri-lanka-flag.png', '1', '2017-04-15 12:30:59'),
	(26, 'Singapore', 'singapore-flag.png', '1', '2017-04-15 12:31:17'),
	(27, 'Swaziland', 'swaziland-flag.png', '1', '2017-04-15 12:31:31'),
	(28, 'Tanzania', 'tanzania-flag.png', '1', '2017-04-15 12:36:38'),
	(29, 'Tonga', 'tonga-flag.png', '1', '2017-04-15 12:31:50'),
	(30, 'Bangladesh', 'bangladesh-flag.png', '1', '2017-04-15 12:32:23');
/*!40000 ALTER TABLE `exclisive_second` ENABLE KEYS */;


-- Dumping structure for table ci.exclusive
CREATE TABLE IF NOT EXISTS `exclusive` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `country` varchar(50) NOT NULL,
  `thumb` varchar(50) NOT NULL,
  `is_active` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Dumping data for table ci.exclusive: ~17 rows (approximately)
/*!40000 ALTER TABLE `exclusive` DISABLE KEYS */;
INSERT IGNORE INTO `exclusive` (`id`, `country`, `thumb`, `is_active`) VALUES
	(1, 'Bangladesh', 'bangladesh-flag.png', '1'),
	(2, 'Brunei Darussalam', 'brunail-flag.png', '1'),
	(3, 'Botswana', 'botswana-flag.png', '1'),
	(4, 'Mauritius', 'mauritius-flag.png', '1'),
	(5, 'Namibia', 'namibia-flag.png', '1'),
	(6, 'Cameroon', 'Cameroon-flag.png', '1'),
	(7, 'Gambia', 'gambia2-flag.png', '1'),
	(8, 'Kenya', 'kenya-flag.png', '1'),
	(9, 'Lesotho', 'lesotho-flag.png', '1'),
	(10, 'Malaysia', 'malaysia-flag.png', '1'),
	(11, 'Maldives', 'maldives-flag.png', '1'),
	(12, 'Pakistan', 'pakistan-flag.png', '1'),
	(13, 'Samoa', 'samoa-flag.png', '1'),
	(14, 'Sierra', 'Sierra-flag.png', '1'),
	(15, 'SriLanka', 'sri-lanka-flag.png', '1'),
	(16, 'Singapore', 'singapore-flag.png', '1'),
	(17, 'Swaziland', 'swaziland-flag.png', '1'),
	(18, 'Tanzania', 'tanzania-flag.png', '1'),
	(19, 'Tonga', 'tonga-flag.png', '1');
/*!40000 ALTER TABLE `exclusive` ENABLE KEYS */;


-- Dumping structure for table ci.groups
CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table ci.groups: ~2 rows (approximately)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT IGNORE INTO `groups` (`id`, `name`, `description`) VALUES
	(1, 'admin', 'Administrator'),
	(2, 'members', 'General User');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;


-- Dumping structure for table ci.login_attempts
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table ci.login_attempts: ~0 rows (approximately)
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;


-- Dumping structure for table ci.newsletter
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table ci.newsletter: ~2 rows (approximately)
/*!40000 ALTER TABLE `newsletter` DISABLE KEYS */;
INSERT IGNORE INTO `newsletter` (`id`, `email`, `created_at`) VALUES
	(1, 'test@test.com', '2017-04-16 01:47:26'),
	(2, 'test1@test.com', '2017-04-16 01:48:08'),
	(3, 'test2@test.com', '2017-04-16 02:45:42');
/*!40000 ALTER TABLE `newsletter` ENABLE KEYS */;


-- Dumping structure for table ci.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `header_logo` text NOT NULL,
  `banner_img` text NOT NULL,
  `banner_heading` text NOT NULL,
  `banner_sub_text` text NOT NULL,
  `banner_btn_text` text NOT NULL,
  `banner_btn_link` text NOT NULL,
  `bottom_footer_logo` text NOT NULL,
  `footer_link` text NOT NULL,
  `footer_sub_link` text NOT NULL,
  `contact_us` text NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL,
  `twitter` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table ci.settings: ~1 rows (approximately)
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT IGNORE INTO `settings` (`id`, `header_logo`, `banner_img`, `banner_heading`, `banner_sub_text`, `banner_btn_text`, `banner_btn_link`, `bottom_footer_logo`, `footer_link`, `footer_sub_link`, `contact_us`, `facebook`, `instagram`, `twitter`) VALUES
	(1, 'logo.png', 'main-banner.jpg', 'Gold Coast <span> 2018 </span> Commonwealth games ', '<p class="fadeInUp wow" data-wow-duration="2s" data-wow-delay="0.3s">Travel Packages and Event Tickets are now available for the Gold Coast 2018 Commonwealth Games. <strong> Kingdom Sports Group is an Exclusive Authorised Ticket Reseller </strong> for 28 countries as well as an Authorised </p>\r\n<h5>Ticket Reseller for Malta and Cyprus and all EU / EEA countries.</h5>', 'READ MORE ', 'http://localhost:8080/kingdomsg/', 'Image Credit : Images courtesy of Tourism and Events Queensland', '<ul>\r\n        <li><a href="#">Company</a></li>\r\n        <li><a href="#">Contact us</a></li>\r\n	<li><a href="#">Legal information</a></li>\r\n	<li><a href="#">Privacy policy</a></li>\r\n	<li><a href="#">The City</a></li>\r\n	<li><a href="#">Useful information</a></li>\r\n	<li><a href="#">Sports</a></li>\r\n	<li><a href="#">Venues</a></li>\r\n	<li><a href="#">Maps</a></li>\r\n </ul>', '<ul>\r\n	<li><a href="#">Complete Packages</a></li>\r\n	<li><a href="#">Hospitality Packages</a></li>\r\n	<li><a href="#">Event Tickets</a></li>\r\n	<li><a href="#">Tours</a></li>\r\n	<li><a href="#">Accommodation</a></li>\r\n	<li><a href="#">Who we are</a></li>\r\n	<li><a href="#">FAQ</a></li>\r\n	<li><a href="#">Authentic Australia</a></li>\r\n	<li><a href="#">Ourr Designer Bio</a></li>\r\n  </ul>', '<div class="col-xs-12 pad_none contact2-footer">\r\n	<span><i class="fa fa-map-marker map-marker-footer" aria-hidden="true"></i></span>\r\n	<p>6/211 Ben Boyd Rd Neutral Bay NSW 2089 Australia</p>\r\n</div>\r\n<div class="col-xs-12 pad_none contact2-footer">\r\n	<span><i class="fa fa-phone phone3" aria-hidden="true"></i></span>\r\n	<p><a href="callto:+61299049225">+61 2 9904 9225</a></p>\r\n</div>\r\n					\r\n<div class="col-xs-12 pad_none contact2-footer">\r\n	<span><i class="fa fa-envelope envelope2" aria-hidden="true"></i></span>\r\n	<p><a href="mailto:info@kingdomsg.com">info@kingdomsg.com</a></p>\r\n</div>', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://twitter.com/');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;


-- Dumping structure for table ci.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table ci.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
	(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', '-dNgEFSDUPkpIO-ccb8t7O0afebca12d8d73f850', 1492078330, NULL, 1268889823, 1492406001, 1, 'John', 'Smith', 'ADMIN', '0123456789');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for table ci.users_groups
CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table ci.users_groups: ~2 rows (approximately)
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT IGNORE INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
	(1, 1, 1),
	(2, 1, 2);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

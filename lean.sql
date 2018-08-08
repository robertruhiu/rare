-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for codeln
CREATE DATABASE IF NOT EXISTS `codeln` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `codeln`;

-- Dumping structure for table codeln.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.admins: ~2 rows (approximately)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `name`, `email`, `title`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Garry Kuhn', 'jamarcus.mueller@example.org', 'Ezra Mayer', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'xcMqjNvT7u', '2002-03-25 00:00:00', '1974-10-31 00:00:00'),
	(2, 'Dewayne Cruickshank', 'rmarquardt@example.net', 'Ed Cormier DVM', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'BtFb9aQeVC', '2011-02-26 00:00:00', '2006-09-06 00:00:00');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping structure for table codeln.assessments
CREATE TABLE IF NOT EXISTS `assessments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `type` text COLLATE utf8mb4_unicode_ci,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeassessment` int(11) DEFAULT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirement1` text COLLATE utf8mb4_unicode_ci,
  `requirement2` text COLLATE utf8mb4_unicode_ci,
  `requirement3` text COLLATE utf8mb4_unicode_ci,
  `requirement4` text COLLATE utf8mb4_unicode_ci,
  `requirement5` text COLLATE utf8mb4_unicode_ci,
  `requirement6` text COLLATE utf8mb4_unicode_ci,
  `numberapplicant` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.assessments: ~3 rows (approximately)
/*!40000 ALTER TABLE `assessments` DISABLE KEYS */;
INSERT INTO `assessments` (`id`, `name`, `description`, `type`, `level`, `timeassessment`, `image1`, `requirement1`, `requirement2`, `requirement3`, `requirement4`, `requirement5`, `requirement6`, `numberapplicant`, `created_at`, `updated_at`) VALUES
	(1, 'Morden cave', 'This project tests the user capabilty to create clean intefaces using svg backgrounds and isometric drawing and varios javascript effect', 'frontend', 'intermediate', 240, 'https://scontent.facc5-1.fna.fbcdn.net/v/t1.0-9/37867635_1885414921516504_7279325115467169792_n.jpg?_nc_cat=0&oh=c1dc8af03057b700bb6249ad0a45b121&oe=5BD00460', 'svg background curve', 'anime js box animation', 'morphing', 'css illustration', '', '', NULL, NULL, NULL),
	(4, 'Simple stripe Project', 'Create a basic checkout process of an online store.It encompasses connecting to stripe api and storing ', 'backend', 'intermediate', 240, 'https://res.infoq.com/presentations/stripe-api-pci/en/slides/sl2.jpg', 'Layout sketch of the order,payment,storage process.(MS Paint is ok)', 'Create a simple checkout page.', 'Use payment api of choice to pay the orders eg.(stripe)', 'Create a database model to store the confirmed payed orders', ' Each model should contain the order and payment id', NULL, NULL, NULL, NULL),
	(5, 'Sweet tooth', 'Sweet tooth is a feedback application that enables restaurant to easily', 'fullstack', 'intermediate', 360, 'https://don16obqbay2c.cloudfront.net/wp-content/uploads/Black-devices_Food-1507811327.png', 'Food menu to choose from', 'Feedback input of food chosen use stars or rate', 'A pop message thanking client for rating and redirection to food menu', 'Data should be relayed to admin dashboard', 'Admin dashboard showing food and their rating', NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `assessments` ENABLE KEYS */;

-- Dumping structure for table codeln.assessment_user
CREATE TABLE IF NOT EXISTS `assessment_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `assessment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.assessment_user: ~0 rows (approximately)
/*!40000 ALTER TABLE `assessment_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `assessment_user` ENABLE KEYS */;

-- Dumping structure for table codeln.backends
CREATE TABLE IF NOT EXISTS `backends` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(800) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'backend',
  `timeassessment` int(11) DEFAULT NULL,
  `image1` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirement1` text COLLATE utf8mb4_unicode_ci,
  `requirement2` text COLLATE utf8mb4_unicode_ci,
  `requirement3` text COLLATE utf8mb4_unicode_ci,
  `requirement4` text COLLATE utf8mb4_unicode_ci,
  `requirement5` text COLLATE utf8mb4_unicode_ci,
  `requirement6` text COLLATE utf8mb4_unicode_ci,
  `price` int(11) DEFAULT NULL,
  `numberapplicant` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table codeln.backends: ~1 rows (approximately)
/*!40000 ALTER TABLE `backends` DISABLE KEYS */;
INSERT INTO `backends` (`id`, `name`, `description`, `level`, `type`, `timeassessment`, `image1`, `requirement1`, `requirement2`, `requirement3`, `requirement4`, `requirement5`, `requirement6`, `price`, `numberapplicant`, `created_at`, `updated_at`) VALUES
	(1, 'Secure Api', 'Ilightup analytics is set to create its own Api to distribute sensitive data to its client.They currently want a GET request only. Due to the nature of sensitivity the data access restrictions have to be put into place. They want you to automate a system that uniquely generates an Api key and assigns it to each first time user.', 'intermediate', 'backend', 180, 'https://www.htbridge.com/images/blog/api-security.jpg', 'A simple interface like sample idea above meant for new users.Each user should have a unique key.', 'A user database that stores user info inclusive of their api key', 'Create a simple database and put sample data that will be served out eg(weather)', 'Create a simple database  REST api data end point(json format) example', 'Include the Api key as one of the parameters of each get requests. example http://ziarafrica.herokuapp.com/orders?key=Your_key_here', 'Ensure proper error handling.example http://bustime.mta.info/api/where/stops-for-location.json?lat=40.748433&lon=-73.985656&latSpan=0.005&lonSpan=0.005&key=YOUR_KEY_HERE', 3, NULL, NULL, NULL);
/*!40000 ALTER TABLE `backends` ENABLE KEYS */;

-- Dumping structure for table codeln.candidates
CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biography` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `candidates_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.candidates: ~2 rows (approximately)
/*!40000 ALTER TABLE `candidates` DISABLE KEYS */;
INSERT INTO `candidates` (`id`, `avatar`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `linkedin`, `biography`, `github`) VALUES
	(14, 'https://pbs.twimg.com/profile_images/961897996509237248/PGcmxUkD_400x400.jpg', 'kweku mensah', 'kweku@gmail.com', '$2y$10$8F8v4Ox7GSmbRu7N6PRQ6OylJ4GrtWeDgwgXOcFYswFAJ54Fn9AEK', 'Gn7mY4ac1fbmWuWJ1wg00dyF9ahNy4NTxGzB6gTouYLZnoNoR0yv5jhI000q', '2018-07-27 15:08:51', '2018-08-07 19:22:09', 'dennis ruhiu', 'Kweku mensah has a bsc. in computer engineering and spent three years developing custom data processing and analysis programs for mlima. He specializes in scalable, enterprise-level application development and engineering solutions for exceptionally high thro', 'robertruhiu'),
	(15, 'https://lh3.googleusercontent.com/-LR6lYLqIN8g/AAAAAAAAAAI/AAAAAAAACvQ/b6ze-M7e-Gk/s640-il/photo.jpg', 'dennis ruhiu', 'meme@gmail.com', '$2y$10$fcFP3.WpxaiHpTbdg0/Qr.M7doPBAZf7Uc/dZxWNgDA4Am5HvG7be', 'hilvIrQ3UPVCOVsUzgplG7hfYdAU1by0z1vkFQLzp2lR5wsrpMTQs6G61lsh', '2018-07-28 18:02:22', '2018-07-28 18:02:22', 'dennis ruhiu', 'Fast iterator in technology with a strong working background on the node js framework.Abstract thinker challenging the normal thought process,fun to be around (9gager).Skilled at creative problem solving,identifying unfair advantage opportunities in ideation,social circle personality fit.', 'robertuhiu');
/*!40000 ALTER TABLE `candidates` ENABLE KEYS */;

-- Dumping structure for table codeln.candidate_password_resets
CREATE TABLE IF NOT EXISTS `candidate_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `candidate_password_resets_email_index` (`email`),
  KEY `candidate_password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.candidate_password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `candidate_password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `candidate_password_resets` ENABLE KEYS */;

-- Dumping structure for table codeln.candidate_reward
CREATE TABLE IF NOT EXISTS `candidate_reward` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) DEFAULT NULL,
  `reward_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.candidate_reward: ~0 rows (approximately)
/*!40000 ALTER TABLE `candidate_reward` DISABLE KEYS */;
/*!40000 ALTER TABLE `candidate_reward` ENABLE KEYS */;

-- Dumping structure for table codeln.candidate_skill
CREATE TABLE IF NOT EXISTS `candidate_skill` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) DEFAULT NULL,
  `skill_id` int(11) DEFAULT NULL,
  `valide` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.candidate_skill: ~8 rows (approximately)
/*!40000 ALTER TABLE `candidate_skill` DISABLE KEYS */;
INSERT INTO `candidate_skill` (`id`, `candidate_id`, `skill_id`, `valide`, `created_at`, `updated_at`) VALUES
	(1, 6, 1, NULL, NULL, NULL),
	(2, 6, 8, NULL, NULL, NULL),
	(3, 14, 8, NULL, NULL, NULL),
	(4, 14, 2, NULL, NULL, NULL),
	(5, 15, 1, NULL, NULL, NULL),
	(6, 15, 4, NULL, NULL, NULL),
	(7, 15, 6, NULL, NULL, NULL),
	(8, 14, 10, NULL, NULL, NULL);
/*!40000 ALTER TABLE `candidate_skill` ENABLE KEYS */;

-- Dumping structure for table codeln.candidate_store
CREATE TABLE IF NOT EXISTS `candidate_store` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assessment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `candidate_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proglanguage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `framelanguage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `framecss` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `framehtml` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeassessment` date DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirement1` text COLLATE utf8mb4_unicode_ci,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `loginftp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passftp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hostftp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portftp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logineclipse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passeclipse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkeclipse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.candidate_store: ~0 rows (approximately)
/*!40000 ALTER TABLE `candidate_store` DISABLE KEYS */;
/*!40000 ALTER TABLE `candidate_store` ENABLE KEYS */;

-- Dumping structure for table codeln.candidate_stores
CREATE TABLE IF NOT EXISTS `candidate_stores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `candidate_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `candidate_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proglanguage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `framelanguage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `framecss` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `framehtml` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateassessment` date DEFAULT NULL,
  `endassessment` date DEFAULT NULL,
  `timeassessment` int(11) DEFAULT NULL,
  `mytimeassessment` date DEFAULT NULL,
  `numberapplicant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirement1` text COLLATE utf8mb4_unicode_ci,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `requirement2` text COLLATE utf8mb4_unicode_ci,
  `requirement3` text COLLATE utf8mb4_unicode_ci,
  `requirement4` text COLLATE utf8mb4_unicode_ci,
  `requirement5` text COLLATE utf8mb4_unicode_ci,
  `requirement6` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.candidate_stores: ~0 rows (approximately)
/*!40000 ALTER TABLE `candidate_stores` DISABLE KEYS */;
/*!40000 ALTER TABLE `candidate_stores` ENABLE KEYS */;

-- Dumping structure for table codeln.candidate_typecontract
CREATE TABLE IF NOT EXISTS `candidate_typecontract` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) DEFAULT NULL,
  `typecontract_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.candidate_typecontract: ~5 rows (approximately)
/*!40000 ALTER TABLE `candidate_typecontract` DISABLE KEYS */;
INSERT INTO `candidate_typecontract` (`id`, `candidate_id`, `typecontract_id`, `created_at`, `updated_at`) VALUES
	(1, 14, 3, NULL, NULL),
	(2, 14, 2, NULL, NULL),
	(3, 14, 9, NULL, NULL),
	(5, 15, 1, NULL, NULL),
	(6, 15, 2, NULL, NULL);
/*!40000 ALTER TABLE `candidate_typecontract` ENABLE KEYS */;

-- Dumping structure for table codeln.casestudies
CREATE TABLE IF NOT EXISTS `casestudies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `challenge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numberOfApplicants` int(11) DEFAULT NULL,
  `numberOfMeeting` int(11) DEFAULT NULL,
  `numberOfDaysSaves` int(11) DEFAULT NULL,
  `numberOfHiring` int(11) DEFAULT NULL,
  `emberVideo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageCase` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkResources` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.casestudies: ~4 rows (approximately)
/*!40000 ALTER TABLE `casestudies` DISABLE KEYS */;
INSERT INTO `casestudies` (`id`, `name`, `description`, `challenge`, `solution`, `numberOfApplicants`, `numberOfMeeting`, `numberOfDaysSaves`, `numberOfHiring`, `emberVideo`, `imageCase`, `linkResources`, `author`, `created_at`, `updated_at`) VALUES
	(1, 'Prof. Jennyfer Lang', 'Orrin Maggio MD', 'Ullam odio totam sint distinctio sit est qui fuga quae quae.', 'Quaerat animi aspernatur voluptatem eligendi numquam hic rerum omnis voluptatem reiciendis nulla exercitationem et.', 9, 10, 10, 0, 'Non.', 'Modi.', 'Officia.', 0, '1981-10-04 00:00:00', '1998-09-28 00:00:00'),
	(2, 'Beaulah Haley', 'Mallory Trantow', 'Quos voluptate magnam similique cumque ut blanditiis non sit mollitia enim.', 'Eligendi dolores nulla qui omnis eum ab sed iusto.', 33, 15, 4, 0, 'Aut.', 'Quia.', 'At et.', 1, '1980-06-02 00:00:00', '1991-08-09 00:00:00'),
	(3, 'Marilyne Ernser', 'Keshaun Simonis I', 'Quam tempore quae dolorem animi sapiente molestiae cumque ea fugiat.', 'Nesciunt est quis omnis laboriosam non amet explicabo saepe.', 30, 18, 1, 1, 'In.', 'Temporibus dolores.', 'Dolore cumque.', 1, '1997-06-04 00:00:00', '1985-03-12 00:00:00'),
	(4, 'Durward Ziemann', 'Jazmyn Wilderman III', 'Dolorem occaecati iusto mollitia aliquam nihil est eius dolores.', 'Et sed libero voluptates officiis odit voluptatibus dolor dolorem.', 29, 15, 1, 3, 'Minus.', 'Voluptas dolores.', 'Dolore rerum.', 0, '2008-12-10 00:00:00', '2012-06-05 00:00:00');
/*!40000 ALTER TABLE `casestudies` ENABLE KEYS */;

-- Dumping structure for table codeln.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.categories: ~5 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `slug`, `post_id`, `created_at`, `updated_at`) VALUES
	(1, 'Paxton Hane', 'Perspiciatis.', 1, '2018-07-25 15:01:30', '2018-07-25 15:01:30'),
	(2, 'Mr. Macey Oberbrunner V', 'Ratione vero.', 2, '2018-07-25 15:01:30', '2018-07-25 15:01:30'),
	(3, 'Donny Pfeffer DVM', 'Qui et.', 3, '2018-07-25 15:01:30', '2018-07-25 15:01:30'),
	(4, 'Nathen Treutel', 'Aperiam.', 1, '2018-07-25 15:01:30', '2018-07-25 15:01:30'),
	(5, 'Jerrod Gibson', 'Illo et.', 3, '2018-07-25 15:01:30', '2018-07-25 15:01:30');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table codeln.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.contacts: ~0 rows (approximately)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Dumping structure for table codeln.csv_data
CREATE TABLE IF NOT EXISTS `csv_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `csv_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `csv_header` tinyint(1) NOT NULL DEFAULT '0',
  `csv_data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.csv_data: ~0 rows (approximately)
/*!40000 ALTER TABLE `csv_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `csv_data` ENABLE KEYS */;

-- Dumping structure for table codeln.frontends
CREATE TABLE IF NOT EXISTS `frontends` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'frontend',
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeassessment` int(11) DEFAULT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirement1` text COLLATE utf8mb4_unicode_ci,
  `requirement2` text COLLATE utf8mb4_unicode_ci,
  `requirement3` text COLLATE utf8mb4_unicode_ci,
  `requirement4` text COLLATE utf8mb4_unicode_ci,
  `requirement5` text COLLATE utf8mb4_unicode_ci,
  `requirement6` text COLLATE utf8mb4_unicode_ci,
  `numberapplicant` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table codeln.frontends: ~1 rows (approximately)
/*!40000 ALTER TABLE `frontends` DISABLE KEYS */;
INSERT INTO `frontends` (`id`, `name`, `description`, `type`, `level`, `timeassessment`, `image1`, `requirement1`, `requirement2`, `requirement3`, `requirement4`, `requirement5`, `requirement6`, `numberapplicant`, `created_at`, `updated_at`) VALUES
	(1, 'Modern cave', 'This project tests the user capabilty to create clean intefaces using svg backgrounds and isometric drawing and varios javascript effect.It includes showcasing how the components and services work', 'frontend', 'intermediate', 360, 'https://scontent.facc5-1.fna.fbcdn.net/v/t1.0-9/37867635_1885414921516504_7279325115467169792_n.jpg?_nc_cat=0&oh=c1dc8af03057b700bb6249ad0a45b121&oe=5BD00460', 'svg background curve', 'anime js box animation', 'morphing', 'frontend rendering of booking a house', 'fetch user data from a csv file', 'replicate the wireframe provided to map out your ui', NULL, NULL, NULL);
/*!40000 ALTER TABLE `frontends` ENABLE KEYS */;

-- Dumping structure for table codeln.fullstacks
CREATE TABLE IF NOT EXISTS `fullstacks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'fullstack',
  `timeassessment` int(11) DEFAULT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirement1` text COLLATE utf8mb4_unicode_ci,
  `requirement2` text COLLATE utf8mb4_unicode_ci,
  `requirement3` text COLLATE utf8mb4_unicode_ci,
  `requirement4` text COLLATE utf8mb4_unicode_ci,
  `requirement5` text COLLATE utf8mb4_unicode_ci,
  `requirement6` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table codeln.fullstacks: ~1 rows (approximately)
/*!40000 ALTER TABLE `fullstacks` DISABLE KEYS */;
INSERT INTO `fullstacks` (`id`, `name`, `description`, `level`, `type`, `timeassessment`, `image1`, `requirement1`, `requirement2`, `requirement3`, `requirement4`, `requirement5`, `requirement6`, `created_at`, `updated_at`) VALUES
	(1, 'ilightup', 'Karaoke style video aggregator for your needs.', 'intermediate', 'fullstack', 240, 'https://scontent.facc5-1.fna.fbcdn.net/v/t1.0-9/38012377_1890502917674371_7065786140443279360_n.jpg?_nc_cat=0&oh=029bbb9031a09503c4f6c7f13b94b276&oe=5BCA0A3A', 'Improved Ui/Ux', 'User management each user should have own saved videos', 'Song data form that saves in the database.', 'Dashboard should have videos listed.', 'View song page that play the song chosen from dashboard should contain', 'Create data models of (user and songs)', NULL, NULL);
/*!40000 ALTER TABLE `fullstacks` ENABLE KEYS */;

-- Dumping structure for table codeln.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.migrations: ~30 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2017_10_09_123029_create_csv_data_table', 1),
	(4, '2017_10_09_124338_create_contacts_table', 1),
	(5, '2018_06_25_174858_create_profiles_table', 1),
	(6, '2018_06_25_183713_create_roles_table', 1),
	(7, '2018_06_25_204617_create_admins_table', 1),
	(8, '2018_06_25_231040_create_posts_table', 1),
	(9, '2018_06_25_231505_create_categories_table', 1),
	(10, '2018_06_26_000332_create_casestudies_table', 1),
	(11, '2018_06_26_105909_create_assessments_table', 1),
	(12, '2018_06_27_191952_create_typeassessments_table', 1),
	(13, '2018_07_02_150332_create_stacks_table', 1),
	(14, '2018_07_02_200636_create_stores_table', 1),
	(15, '2018_07_03_125031_create_skills_table', 1),
	(16, '2018_07_05_114536_create_products_table', 1),
	(17, '2018_07_09_192243_create_candidates_table', 1),
	(18, '2018_07_11_180419_create_candidate_password_resets_table', 1),
	(19, '2018_07_12_212712_create_candidate_skill_table', 1),
	(20, '2018_07_12_212839_create_skill_user_table', 1),
	(21, '2018_07_13_001220_create_assessment_user_table', 1),
	(22, '2018_07_14_132640_create_profilecandidates_table', 1),
	(23, '2018_07_14_162135_create_candidate_reward_table', 1),
	(24, '2018_07_14_162227_create_rewards_table', 1),
	(25, '2018_07_14_191253_create_typecontracts_table', 1),
	(26, '2018_07_14_193252_create_candidate_typecontract_table', 1),
	(27, '2018_07_15_131345_create_candidate_store_table', 1),
	(28, '2018_07_16_204742_create_candidate_stores_table', 1),
	(29, '2018_07_20_074535_create_typeskills_table', 1),
	(30, '2018_07_20_121014_create_states_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table codeln.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table codeln.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgPost` text COLLATE utf8mb4_unicode_ci,
  `author` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.posts: ~2 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `title`, `description`, `slug`, `imgPost`, `author`, `created_at`, `updated_at`) VALUES
	(1, 'Michaela Hilll', 'Minus quos non earum ratione tenetur qui.', 'Raquel Wisoky', 'Angeline Langosh', 2, '2010-08-12 00:00:00', '1994-07-10 00:00:00'),
	(2, 'Ethyl Hackett', 'Possimus quia magni tenetur reprehenderit excepturi.', 'Chelsea Kirlin', 'Peter Aufderhar DVM', 2, '1982-11-01 00:00:00', '2015-07-03 00:00:00');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Dumping structure for table codeln.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.products: ~0 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table codeln.profilecandidates
CREATE TABLE IF NOT EXISTS `profilecandidates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) DEFAULT NULL,
  `profilecandidatePicture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biography` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.profilecandidates: ~0 rows (approximately)
/*!40000 ALTER TABLE `profilecandidates` DISABLE KEYS */;
/*!40000 ALTER TABLE `profilecandidates` ENABLE KEYS */;

-- Dumping structure for table codeln.profiles
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `profilePicture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biography` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.profiles: ~0 rows (approximately)
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;

-- Dumping structure for table codeln.rewards
CREATE TABLE IF NOT EXISTS `rewards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.rewards: ~8 rows (approximately)
/*!40000 ALTER TABLE `rewards` DISABLE KEYS */;
INSERT INTO `rewards` (`id`, `name`, `description`, `tag`, `created_at`, `updated_at`) VALUES
	(1, 'Soluta.', 'Distinctio aut.', 'Eum.', '1985-04-21 00:00:00', '1988-07-17 00:00:00'),
	(2, 'Provident.', 'Aut.', 'Quam.', '1976-09-29 00:00:00', '2007-01-21 00:00:00'),
	(3, 'Quaerat.', 'Est.', 'Doloremque soluta.', '1990-12-22 00:00:00', '2003-11-10 00:00:00'),
	(4, 'Ut quisquam.', 'Et deserunt.', 'Rerum.', '1991-03-01 00:00:00', '1975-07-16 00:00:00'),
	(5, 'Quod.', 'Quaerat.', 'Dignissimos.', '1983-02-15 00:00:00', '2014-06-02 00:00:00'),
	(6, 'Minima.', 'Dolorem.', 'Officiis dolorem.', '1986-05-18 00:00:00', '1987-10-23 00:00:00'),
	(7, 'Aliquam.', 'Expedita.', 'Exercitationem.', '1974-09-10 00:00:00', '1982-02-11 00:00:00'),
	(8, 'Quisquam esse.', 'Et.', 'Laboriosam ab.', '2000-02-18 00:00:00', '1971-09-02 00:00:00');
/*!40000 ALTER TABLE `rewards` ENABLE KEYS */;

-- Dumping structure for table codeln.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.roles: ~2 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Mrs. Rubye Carroll', '1980-10-06 00:00:00', '1987-06-18 00:00:00'),
	(2, 'Brad Reichel', '1986-11-11 00:00:00', '1986-06-15 00:00:00');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table codeln.skills
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.skills: ~13 rows (approximately)
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` (`id`, `name`, `tag`, `created_at`, `updated_at`) VALUES
	(1, 'javascript', 'framework', '1976-03-01 00:00:00', '1985-04-19 00:00:00'),
	(2, 'express js', 'backend', '2006-07-12 00:00:00', '2015-03-23 00:00:00'),
	(3, 'react js', 'frontend', '1972-04-11 00:00:00', '2005-03-01 00:00:00'),
	(4, 'python', 'framework', '1993-10-04 00:00:00', '1983-08-29 00:00:00'),
	(5, 'django', 'backend', '1984-03-26 00:00:00', '1983-03-10 00:00:00'),
	(6, 'angular', 'frontend', '2002-01-17 00:00:00', '1971-06-30 00:00:00'),
	(7, 'meteor', 'frontend', '1970-01-12 00:00:00', '2003-03-03 00:00:00'),
	(8, 'vue js', 'frontend', '1997-09-23 00:00:00', '1984-06-19 00:00:00'),
	(9, 'php', 'framework', NULL, NULL),
	(10, 'ruby', 'framework', '1976-03-01 00:00:00', '1985-04-19 00:00:00'),
	(11, 'laravel', 'backend', NULL, NULL),
	(12, 'flask', 'backend', NULL, NULL),
	(13, 'ember js', 'frontend', NULL, NULL);
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;

-- Dumping structure for table codeln.skill_user
CREATE TABLE IF NOT EXISTS `skill_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `skill_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.skill_user: ~0 rows (approximately)
/*!40000 ALTER TABLE `skill_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `skill_user` ENABLE KEYS */;

-- Dumping structure for table codeln.stacks
CREATE TABLE IF NOT EXISTS `stacks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.stacks: ~2 rows (approximately)
/*!40000 ALTER TABLE `stacks` DISABLE KEYS */;
INSERT INTO `stacks` (`id`, `user_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 2, 'Dr. Baron Hartmann V', 'Sit sequi quisquam ut molestiae fugiat.', '1994-07-17 00:00:00', '1989-09-26 00:00:00'),
	(2, 2, 'Mrs. Lina Prohaska V', 'Veniam occaecati aut inventore vitae et dolores.', '2016-08-31 00:00:00', '1979-01-04 00:00:00');
/*!40000 ALTER TABLE `stacks` ENABLE KEYS */;

-- Dumping structure for table codeln.states
CREATE TABLE IF NOT EXISTS `states` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `skill_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.states: ~0 rows (approximately)
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
/*!40000 ALTER TABLE `states` ENABLE KEYS */;

-- Dumping structure for table codeln.stores
CREATE TABLE IF NOT EXISTS `stores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assessment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirement1` text COLLATE utf8mb4_unicode_ci,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numberapplicant` int(11) DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proglanguage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `framelanguage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `framecss` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `framehtml` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeassessment` int(11) DEFAULT NULL,
  `dateassessment` date DEFAULT NULL,
  `endassessment` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `requirement2` text COLLATE utf8mb4_unicode_ci,
  `requirement3` text COLLATE utf8mb4_unicode_ci,
  `requirement4` text COLLATE utf8mb4_unicode_ci,
  `requirement5` text COLLATE utf8mb4_unicode_ci,
  `requirement6` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.stores: ~0 rows (approximately)
/*!40000 ALTER TABLE `stores` DISABLE KEYS */;
/*!40000 ALTER TABLE `stores` ENABLE KEYS */;

-- Dumping structure for table codeln.typeassessments
CREATE TABLE IF NOT EXISTS `typeassessments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `frontend_id` int(11) unsigned DEFAULT NULL,
  `backend_id` int(11) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assessment_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fullstack_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.typeassessments: ~3 rows (approximately)
/*!40000 ALTER TABLE `typeassessments` DISABLE KEYS */;
INSERT INTO `typeassessments` (`id`, `frontend_id`, `backend_id`, `name`, `assessment_id`, `created_at`, `updated_at`, `fullstack_id`) VALUES
	(1, 1, 1, 'fullstack developer', 1, '1997-01-31 00:00:00', '1976-04-04 00:00:00', 1),
	(2, NULL, NULL, 'frontend developer', 2, '1978-10-27 00:00:00', '1994-05-15 00:00:00', NULL),
	(3, NULL, NULL, 'backend developer', 3, '1976-11-26 00:00:00', '1990-05-19 00:00:00', NULL);
/*!40000 ALTER TABLE `typeassessments` ENABLE KEYS */;

-- Dumping structure for table codeln.typecontracts
CREATE TABLE IF NOT EXISTS `typecontracts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.typecontracts: ~3 rows (approximately)
/*!40000 ALTER TABLE `typecontracts` DISABLE KEYS */;
INSERT INTO `typecontracts` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'remote', '1987-08-20 00:00:00', '2015-08-06 00:00:00'),
	(2, 'full time', '1988-06-23 00:00:00', '1996-12-28 00:00:00'),
	(9, 'contract ', NULL, NULL);
/*!40000 ALTER TABLE `typecontracts` ENABLE KEYS */;

-- Dumping structure for table codeln.typeskills
CREATE TABLE IF NOT EXISTS `typeskills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `skill_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.typeskills: ~0 rows (approximately)
/*!40000 ALTER TABLE `typeskills` DISABLE KEYS */;
/*!40000 ALTER TABLE `typeskills` ENABLE KEYS */;

-- Dumping structure for table codeln.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'testco',
  `updated_at` timestamp NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$2y$10$wYEIlpnqPG5hh39h2IQJ/uKYv7eXbhSZR1ccnnLQnh2Qn2vXGD8oO',
  `created_at` timestamp NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeln.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `company`, `updated_at`, `remember_token`, `created_at`, `email`, `password`) VALUES
	(21, 'dennis ruhiu', 'codeln', '2018-07-28 17:16:03', 'iNnDBLCI2c85OorW1Y4AKR4NxKxoQIEHcwdv4XLowjtDwIMOnhuvQT6wzThY', '2018-07-28 17:16:03', 'robertruhiu@gmail.com', '$2y$10$Nv.rnx2BT/m9oHehWJQpMOb0uWH9a8a3Iqqu20sHw9tvN/us1ElBG'),
	(22, 'deno', 'tester', '2018-07-28 17:36:27', '7Osw30CFlJMEOuul2j6f9tVyHjZmUlrXgdWXld2CE0OEcVx8rZ2w9fetKO3N', '2018-07-28 17:36:27', 'test@gmail.com', '$2y$10$70TylaFBkWgfcCX6UTPm.OmxZ8k83dNLddibR09NJ4YtpwuB.hWa.');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

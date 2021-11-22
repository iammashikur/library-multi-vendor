-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for library
DROP DATABASE IF EXISTS `library`;
CREATE DATABASE IF NOT EXISTS `library` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `library`;

-- Dumping structure for table library.addresses
DROP TABLE IF EXISTS `addresses`;
CREATE TABLE IF NOT EXISTS `addresses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.addresses: ~0 rows (approximately)
DELETE FROM `addresses`;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;

-- Dumping structure for table library.blogs
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_premium` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.blogs: ~20 rows (approximately)
DELETE FROM `blogs`;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`id`, `user_id`, `category_id`, `image`, `title`, `slug`, `body`, `tags`, `is_premium`, `status`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '6c96fae447b3e39dc99094892dbc1749.png', 'quo', 'quo', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 'Ikigai: The Japanese Secret to a Long and Happy Life', 0, 1, '2021-11-03 10:22:43', '2021-11-03 10:22:43'),
	(2, 1, 1, 'd9ef0052320d3a7a48e934f6f8717047.png', 'cum', 'cum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 'Ikigai: The Japanese Secret to a Long and Happy Life', 0, 1, '2021-11-03 10:22:43', '2021-11-03 10:22:43'),
	(3, 1, 1, 'd2b5a08671c635dc8b8c6c3759544c9a.png', 'quasi', 'quasi', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 'Ikigai: The Japanese Secret to a Long and Happy Life', 0, 1, '2021-11-03 10:22:43', '2021-11-03 10:22:43'),
	(4, 1, 1, 'd2d94641596063ee853576053b63711b.png', 'sint', 'sint', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 'Ikigai: The Japanese Secret to a Long and Happy Life', 0, 1, '2021-11-03 10:22:43', '2021-11-03 10:22:43'),
	(5, 1, 1, '7dfb6b2cf4f4200bfebcbe07c87c8ed5.png', 'consequuntur', 'consequuntur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 'Ikigai: The Japanese Secret to a Long and Happy Life', 0, 1, '2021-11-03 10:22:43', '2021-11-03 10:22:43'),
	(6, 1, 1, 'f0974094821fde77773cf9ad1660b0f1.png', 'rerum', 'rerum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 'Ikigai: The Japanese Secret to a Long and Happy Life', 0, 1, '2021-11-03 10:22:43', '2021-11-03 10:22:43'),
	(7, 1, 1, '817b990acd35c5a6b9ca4a395f7845c4.png', 'et', 'et', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 'Ikigai: The Japanese Secret to a Long and Happy Life', 0, 1, '2021-11-03 10:22:43', '2021-11-03 10:22:43'),
	(8, 1, 1, 'f62195ae9d6e00af18d4c645121ba708.png', 'aut', 'aut', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 'Ikigai: The Japanese Secret to a Long and Happy Life', 0, 1, '2021-11-03 10:22:43', '2021-11-03 10:22:43'),
	(9, 1, 1, '183134b75ecaadb45a8abf42d6b80568.png', 'necessitatibus', 'necessitatibus', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 'Ikigai: The Japanese Secret to a Long and Happy Life', 0, 1, '2021-11-03 10:22:43', '2021-11-03 10:22:43'),
	(10, 1, 1, 'df9d370346a1a2dbecfa4abfb57773e9.png', 'quo', 'quo', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 'Ikigai: The Japanese Secret to a Long and Happy Life', 0, 1, '2021-11-03 10:22:43', '2021-11-03 10:22:43'),
	(11, 1, 1, '88c62e8ac5e00e63bf575ea1a65107a5.png', 'consequatur', 'consequatur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 'Ikigai: The Japanese Secret to a Long and Happy Life', 0, 1, '2021-11-03 10:22:43', '2021-11-03 10:22:43'),
	(12, 1, 1, '4bd902862dccdc9e29b2cf988d8a778a.png', 'dolorem', 'dolorem', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 'Ikigai: The Japanese Secret to a Long and Happy Life', 0, 1, '2021-11-03 10:22:43', '2021-11-03 10:22:43'),
	(13, 1, 1, '04b3d10d4e8609bf005437141deb552e.png', 'minima', 'minima', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 'Ikigai: The Japanese Secret to a Long and Happy Life', 0, 1, '2021-11-03 10:22:43', '2021-11-03 10:22:43'),
	(14, 1, 1, 'b5b0ada389362b84b1f9f0f14368d568.png', 'rerum', 'rerum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 'Ikigai: The Japanese Secret to a Long and Happy Life', 0, 1, '2021-11-03 10:22:43', '2021-11-03 10:22:43'),
	(15, 1, 1, '75ef988f90374482b6058414d2618391.png', 'molestias', 'molestias', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 'Ikigai: The Japanese Secret to a Long and Happy Life', 0, 1, '2021-11-03 10:22:43', '2021-11-03 10:22:43'),
	(16, 1, 1, '9fdfe77dd413d73b46b550e780ebe847.png', 'quas', 'quas', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 'Ikigai: The Japanese Secret to a Long and Happy Life', 0, 1, '2021-11-03 10:22:43', '2021-11-03 10:22:43'),
	(17, 1, 1, '1423691251d9c87b19a020c6801a09e8.png', 'libero', 'libero', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 'Ikigai: The Japanese Secret to a Long and Happy Life', 0, 1, '2021-11-03 10:22:43', '2021-11-03 10:22:43'),
	(18, 1, 1, '20638a2a19b50c7d3f5152f450e601a4.png', 'aut', 'aut', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 'Ikigai: The Japanese Secret to a Long and Happy Life', 0, 1, '2021-11-03 10:22:43', '2021-11-03 10:22:43'),
	(19, 1, 1, 'df73636babf206347d66b575bd88e487.png', 'vitae', 'vitae', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 'Ikigai: The Japanese Secret to a Long and Happy Life', 0, 1, '2021-11-03 10:22:43', '2021-11-03 10:22:43'),
	(20, 1, 1, '0319af994d3239bbb391f336544fc2c6.png', 'veritatis', 'veritatis', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 'Ikigai: The Japanese Secret to a Long and Happy Life', 0, 1, '2021-11-03 10:22:43', '2021-11-03 10:22:43');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;

-- Dumping structure for table library.blog_credits
DROP TABLE IF EXISTS `blog_credits`;
CREATE TABLE IF NOT EXISTS `blog_credits` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `basic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.blog_credits: ~0 rows (approximately)
DELETE FROM `blog_credits`;
/*!40000 ALTER TABLE `blog_credits` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_credits` ENABLE KEYS */;

-- Dumping structure for table library.books
DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `library_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `disabled_price` int(11) NOT NULL DEFAULT '0',
  `stock` int(11) NOT NULL,
  `writer` text COLLATE utf8mb4_unicode_ci,
  `num_of_page` int(11) DEFAULT NULL,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.books: ~20 rows (approximately)
DELETE FROM `books`;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` (`id`, `user_id`, `library_id`, `category_id`, `cover_image`, `title`, `slug`, `description`, `price`, `disabled_price`, `stock`, `writer`, `num_of_page`, `publisher`, `tags`, `status`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 1, 'ae7cb11893d953272fb23685cbe20465.png', 'doloremque', 'doloremque', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 500, 200, 100, 'Prof. Benton Kohler', NULL, 'Myrna Hills', 'Ikigai: The Japanese Secret to a Long and Happy Life', '1', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(2, 1, 1, 1, '9bb2997d94c73e049458d39711289c87.png', 'laudantium', 'laudantium', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 500, 200, 100, 'Vella Jenkins', NULL, 'Columbus Hammes', 'Ikigai: The Japanese Secret to a Long and Happy Life', '1', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(3, 1, 1, 1, '86928b013f1d0fbeb7b0e0756c9544fa.png', 'ex', 'ex', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 500, 200, 100, 'Adeline Mills DVM', NULL, 'Piper Willms', 'Ikigai: The Japanese Secret to a Long and Happy Life', '1', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(4, 1, 1, 1, 'aa776dfad6e87551d40bfad0951d54f2.png', 'animi', 'animi', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 500, 200, 100, 'Santino Muller IV', NULL, 'Prof. Mona Conroy PhD', 'Ikigai: The Japanese Secret to a Long and Happy Life', '1', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(5, 1, 1, 1, 'e4989a3992af5bf71212c14b7514f515.png', 'et', 'et', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 500, 200, 100, 'Dr. Rashad Hudson', NULL, 'Ida Parisian', 'Ikigai: The Japanese Secret to a Long and Happy Life', '1', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(6, 1, 1, 1, '14813d46be73daca7bd54284e4c933f6.png', 'necessitatibus', 'necessitatibus', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 500, 200, 100, 'Destin McLaughlin', NULL, 'Anna Lindgren', 'Ikigai: The Japanese Secret to a Long and Happy Life', '1', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(7, 1, 1, 1, 'be3996f3b22f9039f6ef73ca8bd73790.png', 'et', 'et', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 500, 200, 100, 'Angelina Stehr', NULL, 'Linnie Shields', 'Ikigai: The Japanese Secret to a Long and Happy Life', '1', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(8, 1, 1, 1, 'b3e89401abf6b7905e513d0af5ac32ac.png', 'eos', 'eos', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 500, 200, 100, 'Mason Stracke', NULL, 'Prof. Gus Auer', 'Ikigai: The Japanese Secret to a Long and Happy Life', '1', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(9, 1, 1, 1, 'd09401261238618aa293c76547c37a2e.png', 'eaque', 'eaque', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 500, 200, 100, 'Dallin Hegmann', NULL, 'Kareem Weber', 'Ikigai: The Japanese Secret to a Long and Happy Life', '1', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(10, 1, 1, 1, 'f6021d8cf1b09cd28171380764c9d158.png', 'explicabo', 'explicabo', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 500, 200, 100, 'Marlon Balistreri I', NULL, 'Rickey Kling', 'Ikigai: The Japanese Secret to a Long and Happy Life', '1', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(11, 1, 1, 1, 'e869c0769fba1fb46295af596e7c83ff.png', 'exercitationem', 'exercitationem', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 500, 200, 100, 'Maya Nader', NULL, 'Mr. Johnnie Eichmann Jr.', 'Ikigai: The Japanese Secret to a Long and Happy Life', '1', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(12, 1, 1, 1, 'f4946b9139bea4b4751b2ffc580c70e1.png', 'laudantium', 'laudantium', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 500, 200, 100, 'Darron Haley', NULL, 'Prof. Nigel Wyman', 'Ikigai: The Japanese Secret to a Long and Happy Life', '1', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(13, 1, 1, 1, '0a7e0ab26c967b2bd04c9399a422c683.png', 'non', 'non', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 500, 200, 100, 'Toby Murphy', NULL, 'Miss Althea Schoen I', 'Ikigai: The Japanese Secret to a Long and Happy Life', '1', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(14, 1, 1, 1, '6a426187f2b019ec0907f2893d604b07.png', 'ea', 'ea', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 500, 200, 100, 'Olaf Moore', NULL, 'Estella Waters', 'Ikigai: The Japanese Secret to a Long and Happy Life', '1', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(15, 1, 1, 1, '5d2e9ab1c42f917a89468a668ba9d331.png', 'ut', 'ut', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 500, 200, 100, 'Deonte Koss', NULL, 'Camden Bergstrom', 'Ikigai: The Japanese Secret to a Long and Happy Life', '1', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(16, 1, 1, 1, '50691f1d6a205d9e7c8c91047ad24edc.png', 'consequatur', 'consequatur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 500, 200, 100, 'Efren Hammes', NULL, 'Emiliano Sporer', 'Ikigai: The Japanese Secret to a Long and Happy Life', '1', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(17, 1, 1, 1, '1a230c901eca97e80e8f8ddef7e29a29.png', 'nobis', 'nobis', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 500, 200, 100, 'Daphne Wolff II', NULL, 'Mrs. Ursula Morar V', 'Ikigai: The Japanese Secret to a Long and Happy Life', '1', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(18, 1, 1, 1, '6d7e151a07131aaa30a4392d7e3e90d0.png', 'tempore', 'tempore', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 500, 200, 100, 'Linnea Grady', NULL, 'Mrs. Theresa Hayes DVM', 'Ikigai: The Japanese Secret to a Long and Happy Life', '1', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(19, 1, 1, 1, '0f84bdb98488c911623e8fbaeb0b089b.png', 'id', 'id', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 500, 200, 100, 'Adelia Ryan', NULL, 'Mr. Kane Labadie', 'Ikigai: The Japanese Secret to a Long and Happy Life', '1', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(20, 1, 1, 1, '0e2bb2107c3cf70f16ab6eb43a149d58.png', 'repudiandae', 'repudiandae', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, sint excepturi ipsam architecto atque nemo sequi quia, in, eligendi maiores molestiae unde alias! Temporibus maiores et quia dignissimos qui exercitationem.', 500, 200, 100, 'Prof. Camille O\'Reilly', NULL, 'Derick Pacocha', 'Ikigai: The Japanese Secret to a Long and Happy Life', '1', '2021-11-03 10:22:34', '2021-11-03 10:22:34');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;

-- Dumping structure for table library.carts
DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `library_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.carts: ~0 rows (approximately)
DELETE FROM `carts`;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;
/*!40000 ALTER TABLE `carts` ENABLE KEYS */;

-- Dumping structure for table library.cart_items
DROP TABLE IF EXISTS `cart_items`;
CREATE TABLE IF NOT EXISTS `cart_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.cart_items: ~0 rows (approximately)
DELETE FROM `cart_items`;
/*!40000 ALTER TABLE `cart_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart_items` ENABLE KEYS */;

-- Dumping structure for table library.cart_libraries
DROP TABLE IF EXISTS `cart_libraries`;
CREATE TABLE IF NOT EXISTS `cart_libraries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `library_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.cart_libraries: ~0 rows (approximately)
DELETE FROM `cart_libraries`;
/*!40000 ALTER TABLE `cart_libraries` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart_libraries` ENABLE KEYS */;

-- Dumping structure for table library.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.categories: ~15 rows (approximately)
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `slug`, `type`, `created_at`, `updated_at`) VALUES
	(1, 'et', 'et', 1, '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(2, 'beatae', 'beatae', 0, '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(3, 'et', 'et', 1, '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(4, 'aut', 'aut', 0, '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(5, 'id', 'id', 1, '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(6, 'rerum', 'rerum', 1, '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(7, 'ad', 'ad', 1, '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(8, 'iusto', 'iusto', 1, '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(9, 'beatae', 'beatae', 0, '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(10, 'consequatur', 'consequatur', 0, '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(11, 'sit', 'sit', 1, '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(12, 'cumque', 'cumque', 0, '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(13, 'saepe', 'saepe', 1, '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(14, 'nesciunt', 'nesciunt', 1, '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(15, 'atque', 'atque', 1, '2021-11-03 10:22:34', '2021-11-03 10:22:34');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table library.cities
DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=492 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.cities: ~491 rows (approximately)
DELETE FROM `cities`;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` (`id`, `name`, `district_id`) VALUES
	(1, 'দেবিদ্বার', 1),
	(2, 'বরুড়া', 1),
	(3, 'ব্রাহ্মণপাড়া', 1),
	(4, 'চান্দিনা', 1),
	(5, 'চৌদ্দগ্রাম', 1),
	(6, 'দাউদকান্দি', 1),
	(7, 'হোমনা', 1),
	(8, 'লাকসাম', 1),
	(9, 'মুরাদনগর', 1),
	(10, 'নাঙ্গলকোট', 1),
	(11, 'কুমিল্লা সদর', 1),
	(12, 'মেঘনা', 1),
	(13, 'মনোহরগঞ্জ', 1),
	(14, 'সদর দক্ষিণ', 1),
	(15, 'তিতাস', 1),
	(16, 'বুড়িচং', 1),
	(17, 'লালমাই', 1),
	(18, 'ছাগলনাইয়া', 2),
	(19, 'ফেনী সদর', 2),
	(20, 'সোনাগাজী', 2),
	(21, 'ফুলগাজী', 2),
	(22, 'পরশুরাম', 2),
	(23, 'দাগনভূঞা', 2),
	(24, 'ব্রাহ্মণবাড়িয়া সদর', 3),
	(25, 'কসবা', 3),
	(26, 'নাসিরনগর', 3),
	(27, 'সরাইল', 3),
	(28, 'আশুগঞ্জ', 3),
	(29, 'আখাউড়া', 3),
	(30, 'নবীনগর', 3),
	(31, 'বাঞ্ছারামপুর', 3),
	(32, 'বিজয়নগর', 3),
	(33, 'রাঙ্গামাটি সদর', 4),
	(34, 'কাপ্তাই', 4),
	(35, 'কাউখালী', 4),
	(36, 'বাঘাইছড়ি', 4),
	(37, 'বরকল', 4),
	(38, 'লংগদু', 4),
	(39, 'রাজস্থলী', 4),
	(40, 'বিলাইছড়ি', 4),
	(41, 'জুরাছড়ি', 4),
	(42, 'নানিয়ারচর', 4),
	(43, 'নোয়াখালী সদর', 5),
	(44, 'কোম্পানীগঞ্জ', 5),
	(45, 'বেগমগঞ্জ', 5),
	(46, 'হাতিয়া', 5),
	(47, 'সুবর্ণচর', 5),
	(48, 'কবিরহাট', 5),
	(49, 'সেনবাগ', 5),
	(50, 'চাটখিল', 5),
	(51, 'সোনাইমুড়ী', 5),
	(52, 'হাইমচর', 6),
	(53, 'কচুয়া', 6),
	(54, 'শাহরাস্তি	', 6),
	(55, 'চাঁদপুর সদর', 6),
	(56, 'মতলব দক্ষিণ', 6),
	(57, 'হাজীগঞ্জ', 6),
	(58, 'মতলব উত্তর', 6),
	(59, 'ফরিদগঞ্জ', 6),
	(60, 'লক্ষ্মীপুর সদর', 7),
	(61, 'কমলনগর', 7),
	(62, 'রায়পুর', 7),
	(63, 'রামগতি', 7),
	(64, 'রামগঞ্জ', 7),
	(65, 'রাঙ্গুনিয়া', 8),
	(66, 'সীতাকুন্ড', 8),
	(67, 'মীরসরাই', 8),
	(68, 'পটিয়া', 8),
	(69, 'সন্দ্বীপ', 8),
	(70, 'বাঁশখালী', 8),
	(71, 'বোয়ালখালী', 8),
	(72, 'আনোয়ারা', 8),
	(73, 'চন্দনাইশ', 8),
	(74, 'সাতকানিয়া', 8),
	(75, 'লোহাগাড়া', 8),
	(76, 'হাটহাজারী', 8),
	(77, 'ফটিকছড়ি', 8),
	(78, 'রাউজান', 8),
	(79, 'কর্ণফুলী', 8),
	(80, 'কক্সবাজার সদর', 9),
	(81, 'চকরিয়া', 9),
	(82, 'কুতুবদিয়া', 9),
	(83, 'উখিয়া', 9),
	(84, 'মহেশখালী', 9),
	(85, 'পেকুয়া', 9),
	(86, 'রামু', 9),
	(87, 'টেকনাফ', 9),
	(88, 'খাগড়াছড়ি সদর', 10),
	(89, 'দিঘীনালা', 10),
	(90, 'পানছড়ি', 10),
	(91, 'লক্ষীছড়ি', 10),
	(92, 'মহালছড়ি', 10),
	(93, 'মানিকছড়ি', 10),
	(94, 'রামগড়', 10),
	(95, 'মাটিরাঙ্গা', 10),
	(96, 'গুইমারা', 10),
	(97, 'বান্দরবান সদর', 11),
	(98, 'আলীকদম', 11),
	(99, 'নাইক্ষ্যংছড়ি', 11),
	(100, 'রোয়াংছড়ি', 11),
	(101, 'লামা', 11),
	(102, 'রুমা', 11),
	(103, 'থানচি', 11),
	(104, 'বেলকুচি', 12),
	(105, 'চৌহালি', 12),
	(106, 'কামারখন্দ', 12),
	(107, 'কাজীপুর', 12),
	(108, 'রায়গঞ্জ', 12),
	(109, 'শাহজাদপুর', 12),
	(110, 'সিরাজগঞ্জ সদর', 12),
	(111, 'তাড়াশ', 12),
	(112, 'উল্লাপাড়া', 12),
	(113, 'সুজানগর', 13),
	(114, 'ঈশ্বরদী', 13),
	(115, 'ভাঙ্গুড়া', 13),
	(116, 'পাবনা সদর', 13),
	(117, 'বেড়া', 13),
	(118, 'আটঘরিয়া', 13),
	(119, 'চাটমোহর', 13),
	(120, 'সাঁথিয়া', 13),
	(121, 'ফরিদপুর', 13),
	(122, 'কাহালু', 14),
	(123, 'বগুড়া সদর', 14),
	(124, 'সারিয়াকান্দি', 14),
	(125, 'শাজাহানপুর', 14),
	(126, 'দুপচাচিঁয়া', 14),
	(127, 'আদমদিঘি', 14),
	(128, 'নন্দিগ্রাম', 14),
	(129, 'সোনাতলা', 14),
	(130, 'ধুনট', 14),
	(131, 'গাবতলী', 14),
	(132, 'শেরপুর', 14),
	(133, 'শিবগঞ্জ', 14),
	(134, 'পবা', 15),
	(135, 'দুর্গাপুর', 15),
	(136, 'মোহনপুর', 15),
	(137, 'চারঘাট', 15),
	(138, 'পুঠিয়া', 15),
	(139, 'বাঘা', 15),
	(140, 'গোদাগাড়ী', 15),
	(141, 'তানোর', 15),
	(142, 'বাগমারা', 15),
	(143, 'নাটোর সদর', 16),
	(144, 'সিংড়া', 16),
	(145, 'বড়াইগ্রাম', 16),
	(146, 'বাগাতিপাড়া', 16),
	(147, 'লালপুর', 16),
	(148, 'গুরুদাসপুর', 16),
	(149, 'নলডাঙ্গা', 16),
	(150, 'আক্কেলপুর', 17),
	(151, 'কালাই', 17),
	(152, 'ক্ষেতলাল', 17),
	(153, 'পাঁচবিবি', 17),
	(154, 'জয়পুরহাট সদর', 17),
	(155, 'চাঁপাইনবাবগঞ্জ সদর', 18),
	(156, 'গোমস্তাপুর', 18),
	(157, 'নাচোল', 18),
	(158, 'ভোলাহাট', 18),
	(159, 'শিবগঞ্জ', 18),
	(160, 'মহাদেবপুর', 19),
	(161, 'বদলগাছী', 19),
	(162, 'পত্নিতলা', 19),
	(163, 'ধামইরহাট', 19),
	(164, 'নিয়ামতপুর', 19),
	(165, 'মান্দা', 19),
	(166, 'আত্রাই', 19),
	(167, 'রাণীনগর', 19),
	(168, 'নওগাঁ সদর', 19),
	(169, 'পোরশা', 19),
	(170, 'সাপাহার', 19),
	(171, 'মণিরামপুর', 20),
	(172, 'অভয়নগর', 20),
	(173, 'বাঘারপাড়া', 20),
	(174, 'চৌগাছা', 20),
	(175, 'ঝিকরগাছা', 20),
	(176, 'কেশবপুর', 20),
	(177, 'যশোর সদর', 20),
	(178, 'শার্শা', 20),
	(179, 'আশাশুনি', 21),
	(180, 'দেবহাটা', 21),
	(181, 'কলারোয়া', 21),
	(182, 'সাতক্ষীরা সদর', 21),
	(183, 'শ্যামনগর', 21),
	(184, 'তালা', 21),
	(185, 'কালিগঞ্জ', 21),
	(186, 'মুজিবনগর', 22),
	(187, 'মেহেরপুর সদর', 22),
	(188, 'গাংনী', 22),
	(189, 'নড়াইল সদর', 23),
	(190, 'লোহাগড়া', 23),
	(191, 'কালিয়া', 23),
	(192, 'চুয়াডাঙ্গা সদর', 24),
	(193, 'আলমডাঙ্গা', 24),
	(194, 'দামুড়হুদা', 24),
	(195, 'জীবননগর', 24),
	(196, 'কুষ্টিয়া সদর', 25),
	(197, 'কুমারখালী', 25),
	(198, 'খোকসা', 25),
	(199, 'মিরপুর', 25),
	(200, 'দৌলতপুর', 25),
	(201, 'ভেড়ামারা', 25),
	(202, 'শালিখা', 26),
	(203, 'শ্রীপুর', 26),
	(204, 'মাগুরা সদর', 26),
	(205, 'মহম্মদপুর', 26),
	(206, 'পাইকগাছা', 27),
	(207, 'ফুলতলা', 27),
	(208, 'দিঘলিয়া', 27),
	(209, 'রূপসা', 27),
	(210, 'তেরখাদা', 27),
	(211, 'ডুমুরিয়া', 27),
	(212, 'বটিয়াঘাটা', 27),
	(213, 'দাকোপ', 27),
	(214, 'কয়রা', 27),
	(215, 'ফকিরহাট', 28),
	(216, 'বাগেরহাট সদর', 28),
	(217, 'মোল্লাহাট', 28),
	(218, 'শরণখোলা', 28),
	(219, 'রামপাল', 28),
	(220, 'মোড়েলগঞ্জ', 28),
	(221, 'কচুয়া', 28),
	(222, 'মোংলা', 28),
	(223, 'চিতলমারী', 28),
	(224, 'ঝিনাইদহ সদর', 29),
	(225, 'শৈলকুপা', 29),
	(226, 'হরিণাকুন্ডু', 29),
	(227, 'কালীগঞ্জ', 29),
	(228, 'কোটচাঁদপুর', 29),
	(229, 'মহেশপুর', 29),
	(230, 'ঝালকাঠি সদর', 30),
	(231, 'কাঠালিয়া', 30),
	(232, 'নলছিটি', 30),
	(233, 'রাজাপুর', 30),
	(234, 'বাউফল', 31),
	(235, 'পটুয়াখালী সদর', 31),
	(236, 'দুমকি', 31),
	(237, 'দশমিনা', 31),
	(238, 'কলাপাড়া', 31),
	(239, 'মির্জাগঞ্জ', 31),
	(240, 'গলাচিপা', 31),
	(241, 'রাঙ্গাবালী', 31),
	(242, 'পিরোজপুর সদর', 32),
	(243, 'নাজিরপুর', 32),
	(244, 'কাউখালী', 32),
	(245, 'জিয়ানগর', 32),
	(246, 'ভান্ডারিয়া', 32),
	(247, 'মঠবাড়ীয়া', 32),
	(248, 'নেছারাবাদ', 32),
	(249, 'বরিশাল সদর', 33),
	(250, 'বাকেরগঞ্জ', 33),
	(251, 'বাবুগঞ্জ', 33),
	(252, 'উজিরপুর', 33),
	(253, 'বানারীপাড়া', 33),
	(254, 'গৌরনদী', 33),
	(255, 'আগৈলঝাড়া', 33),
	(256, 'মেহেন্দিগঞ্জ', 33),
	(257, 'মুলাদী', 33),
	(258, 'হিজলা', 33),
	(259, 'ভোলা সদর', 34),
	(260, 'বোরহান উদ্দিন', 34),
	(261, 'চরফ্যাশন', 34),
	(262, 'দৌলতখান', 34),
	(263, 'মনপুরা', 34),
	(264, 'তজুমদ্দিন', 34),
	(265, 'লালমোহন', 34),
	(266, 'আমতলী', 35),
	(267, 'বরগুনা সদর', 35),
	(268, 'বেতাগী', 35),
	(269, 'বামনা', 35),
	(270, 'পাথরঘাটা', 35),
	(271, 'তালতলি', 35),
	(272, 'বালাগঞ্জ', 36),
	(273, 'বিয়ানীবাজার', 36),
	(274, 'বিশ্বনাথ', 36),
	(275, 'কোম্পানীগঞ্জ', 36),
	(276, 'ফেঞ্চুগঞ্জ', 36),
	(277, 'গোলাপগঞ্জ', 36),
	(278, 'গোয়াইনঘাট', 36),
	(279, 'জৈন্তাপুর', 36),
	(280, 'কানাইঘাট', 36),
	(281, 'সিলেট সদর', 36),
	(282, 'জকিগঞ্জ', 36),
	(283, 'দক্ষিণ সুরমা', 36),
	(284, 'ওসমানী নগর', 36),
	(285, 'বড়লেখা', 37),
	(286, 'কমলগঞ্জ', 37),
	(287, 'কুলাউড়া', 37),
	(288, 'মৌলভীবাজার সদর', 37),
	(289, 'রাজনগর', 37),
	(290, 'শ্রীমঙ্গল', 37),
	(291, 'জুড়ী', 37),
	(292, 'নবীগঞ্জ', 38),
	(293, 'বাহুবল', 38),
	(294, 'আজমিরীগঞ্জ', 38),
	(295, 'বানিয়াচং', 38),
	(296, 'লাখাই', 38),
	(297, 'চুনারুঘাট', 38),
	(298, 'হবিগঞ্জ সদর', 38),
	(299, 'মাধবপুর', 38),
	(300, 'সুনামগঞ্জ সদর', 39),
	(301, 'দক্ষিণ সুনামগঞ্জ', 39),
	(302, 'বিশ্বম্ভরপুর', 39),
	(303, 'ছাতক', 39),
	(304, 'জগন্নাথপুর', 39),
	(305, 'দোয়ারাবাজার', 39),
	(306, 'তাহিরপুর', 39),
	(307, 'ধর্মপাশা', 39),
	(308, 'জামালগঞ্জ', 39),
	(309, 'শাল্লা', 39),
	(310, 'দিরাই', 39),
	(311, 'বেলাবো', 40),
	(312, 'মনোহরদী', 40),
	(313, 'নরসিংদী সদর', 40),
	(314, 'পলাশ', 40),
	(315, 'রায়পুরা', 40),
	(316, 'শিবপুর', 40),
	(317, 'কালীগঞ্জ', 41),
	(318, 'কালিয়াকৈর', 41),
	(319, 'কাপাসিয়া', 41),
	(320, 'গাজীপুর সদর', 41),
	(321, 'শ্রীপুর', 41),
	(322, 'শরিয়তপুর সদর', 42),
	(323, 'নড়িয়া', 42),
	(324, 'জাজিরা', 42),
	(325, 'গোসাইরহাট', 42),
	(326, 'ভেদরগঞ্জ', 42),
	(327, 'ডামুড্যা', 42),
	(328, 'আড়াইহাজার', 43),
	(329, 'বন্দর', 43),
	(330, 'নারায়নগঞ্জ সদর', 43),
	(331, 'রূপগঞ্জ', 43),
	(332, 'সোনারগাঁ', 43),
	(333, 'বাসাইল', 44),
	(334, 'ভুয়াপুর', 44),
	(335, 'দেলদুয়ার', 44),
	(336, 'ঘাটাইল', 44),
	(337, 'গোপালপুর', 44),
	(338, 'মধুপুর', 44),
	(339, 'মির্জাপুর', 44),
	(340, 'নাগরপুর', 44),
	(341, 'সখিপুর', 44),
	(342, 'টাঙ্গাইল সদর', 44),
	(343, 'কালিহাতী', 44),
	(344, 'ধনবাড়ী', 44),
	(345, 'ইটনা', 45),
	(346, 'কটিয়াদী', 45),
	(347, 'ভৈরব', 45),
	(348, 'তাড়াইল', 45),
	(349, 'হোসেনপুর', 45),
	(350, 'পাকুন্দিয়া', 45),
	(351, 'কুলিয়ারচর', 45),
	(352, 'কিশোরগঞ্জ সদর', 45),
	(353, 'করিমগঞ্জ', 45),
	(354, 'বাজিতপুর', 45),
	(355, 'অষ্টগ্রাম', 45),
	(356, 'মিঠামইন', 45),
	(357, 'নিকলী', 45),
	(358, 'হরিরামপুর', 46),
	(359, 'সাটুরিয়া', 46),
	(360, 'মানিকগঞ্জ সদর', 46),
	(361, 'ঘিওর', 46),
	(362, 'শিবালয়', 46),
	(363, 'দৌলতপুর', 46),
	(364, 'সিংগাইর', 46),
	(365, 'সাভার', 47),
	(366, 'ধামরাই', 47),
	(367, 'কেরাণীগঞ্জ', 47),
	(368, 'নবাবগঞ্জ', 47),
	(369, 'দোহার', 47),
	(370, 'মুন্সিগঞ্জ সদর', 48),
	(371, 'শ্রীনগর', 48),
	(372, 'সিরাজদিখান', 48),
	(373, 'লৌহজং', 48),
	(374, 'গজারিয়া', 48),
	(375, 'টংগীবাড়ি', 48),
	(376, 'রাজবাড়ী সদর', 49),
	(377, 'গোয়ালন্দ', 49),
	(378, 'পাংশা', 49),
	(379, 'বালিয়াকান্দি', 49),
	(380, 'কালুখালী', 49),
	(381, 'মাদারীপুর সদর', 50),
	(382, 'শিবচর', 50),
	(383, 'কালকিনি', 50),
	(384, 'রাজৈর', 50),
	(385, 'গোপালগঞ্জ সদর', 51),
	(386, 'কাশিয়ানী', 51),
	(387, 'টুংগীপাড়া', 51),
	(388, 'কোটালীপাড়া', 51),
	(389, 'মুকসুদপুর', 51),
	(390, 'ফরিদপুর সদর', 52),
	(391, 'আলফাডাঙ্গা', 52),
	(392, 'বোয়ালমারী', 52),
	(393, 'সদরপুর', 52),
	(394, 'নগরকান্দা', 52),
	(395, 'ভাঙ্গা', 52),
	(396, 'চরভদ্রাসন', 52),
	(397, 'মধুখালী', 52),
	(398, 'সালথা', 52),
	(399, 'পঞ্চগড় সদর', 53),
	(400, 'দেবীগঞ্জ', 53),
	(401, 'বোদা', 53),
	(402, 'আটোয়ারী', 53),
	(403, 'তেতুলিয়া', 53),
	(404, 'নবাবগঞ্জ', 54),
	(405, 'বীরগঞ্জ', 54),
	(406, 'ঘোড়াঘাট', 54),
	(407, 'বিরামপুর', 54),
	(408, 'পার্বতীপুর', 54),
	(409, 'বোচাগঞ্জ', 54),
	(410, 'কাহারোল', 54),
	(411, 'ফুলবাড়ী', 54),
	(412, 'দিনাজপুর সদর', 54),
	(413, 'হাকিমপুর', 54),
	(414, 'খানসামা', 54),
	(415, 'বিরল', 54),
	(416, 'চিরিরবন্দর', 54),
	(417, 'লালমনিরহাট সদর', 55),
	(418, 'কালীগঞ্জ', 55),
	(419, 'হাতীবান্ধা', 55),
	(420, 'পাটগ্রাম', 55),
	(421, 'আদিতমারী', 55),
	(422, 'সৈয়দপুর', 56),
	(423, 'ডোমার', 56),
	(424, 'ডিমলা', 56),
	(425, 'জলঢাকা', 56),
	(426, 'কিশোরগঞ্জ', 56),
	(427, 'নীলফামারী সদর', 56),
	(428, 'সাদুল্লাপুর', 57),
	(429, 'গাইবান্ধা সদর', 57),
	(430, 'পলাশবাড়ী', 57),
	(431, 'সাঘাটা', 57),
	(432, 'গোবিন্দগঞ্জ', 57),
	(433, 'সুন্দরগঞ্জ', 57),
	(434, 'ফুলছড়ি', 57),
	(435, 'ঠাকুরগাঁও সদর', 58),
	(436, 'পীরগঞ্জ', 58),
	(437, 'রাণীশংকৈল', 58),
	(438, 'হরিপুর', 58),
	(439, 'বালিয়াডাঙ্গী', 58),
	(440, 'রংপুর সদর', 59),
	(441, 'গংগাচড়া', 59),
	(442, 'তারাগঞ্জ', 59),
	(443, 'বদরগঞ্জ', 59),
	(444, 'মিঠাপুকুর', 59),
	(445, 'পীরগঞ্জ', 59),
	(446, 'কাউনিয়া', 59),
	(447, 'পীরগাছা', 59),
	(448, 'কুড়িগ্রাম সদর', 60),
	(449, 'নাগেশ্বরী', 60),
	(450, 'ভুরুঙ্গামারী', 60),
	(451, 'ফুলবাড়ী', 60),
	(452, 'রাজারহাট', 60),
	(453, 'উলিপুর', 60),
	(454, 'চিলমারী', 60),
	(455, 'রৌমারী', 60),
	(456, 'চর রাজিবপুর', 60),
	(457, 'শেরপুর সদর', 61),
	(458, 'নালিতাবাড়ী', 61),
	(459, 'শ্রীবরদী', 61),
	(460, 'নকলা', 61),
	(461, 'ঝিনাইগাতী', 61),
	(462, 'ফুলবাড়ীয়া', 62),
	(463, 'ত্রিশাল', 62),
	(464, 'ভালুকা', 62),
	(465, 'মুক্তাগাছা', 62),
	(466, 'ময়মনসিংহ সদর', 62),
	(467, 'ধোবাউড়া', 62),
	(468, 'ফুলপুর', 62),
	(469, 'হালুয়াঘাট', 62),
	(470, 'গৌরীপুর', 62),
	(471, 'গফরগাঁও', 62),
	(472, 'ঈশ্বরগঞ্জ', 62),
	(473, 'নান্দাইল', 62),
	(474, 'তারাকান্দা', 62),
	(475, 'জামালপুর সদর', 63),
	(476, 'মেলান্দহ', 63),
	(477, 'ইসলামপুর', 63),
	(478, 'দেওয়ানগঞ্জ', 63),
	(479, 'সরিষাবাড়ী', 63),
	(480, 'মাদারগঞ্জ', 63),
	(481, 'বকশীগঞ্জ', 63),
	(482, 'বারহাট্টা', 64),
	(483, 'দুর্গাপুর', 64),
	(484, 'কেন্দুয়া', 64),
	(485, 'আটপাড়া', 64),
	(486, 'মদন', 64),
	(487, 'খালিয়াজুরী', 64),
	(488, 'কলমাকান্দা', 64),
	(489, 'মোহনগঞ্জ', 64),
	(490, 'পূর্বধলা', 64),
	(491, 'নেত্রকোণা সদর', 64);
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;

-- Dumping structure for table library.districts
DROP TABLE IF EXISTS `districts`;
CREATE TABLE IF NOT EXISTS `districts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.districts: ~64 rows (approximately)
DELETE FROM `districts`;
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;
INSERT INTO `districts` (`id`, `name`, `division_id`) VALUES
	(1, 'কুমিল্লা', 1),
	(2, 'ফেনী', 1),
	(3, 'ব্রাহ্মণবাড়িয়া', 1),
	(4, 'রাঙ্গামাটি', 1),
	(5, 'নোয়াখালী', 1),
	(6, 'চাঁদপুর', 1),
	(7, 'লক্ষ্মীপুর', 1),
	(8, 'চট্টগ্রাম', 1),
	(9, 'কক্সবাজার', 1),
	(10, 'খাগড়াছড়ি', 1),
	(11, 'বান্দরবান', 1),
	(12, 'সিরাজগঞ্জ', 2),
	(13, 'পাবনা', 2),
	(14, 'বগুড়া', 2),
	(15, 'রাজশাহী', 2),
	(16, 'নাটোর', 2),
	(17, 'জয়পুরহাট', 2),
	(18, 'চাঁপাইনবাবগঞ্জ', 2),
	(19, 'নওগাঁ', 2),
	(20, 'যশোর', 3),
	(21, 'সাতক্ষীরা', 3),
	(22, 'মেহেরপুর', 3),
	(23, 'নড়াইল', 3),
	(24, 'চুয়াডাঙ্গা', 3),
	(25, 'কুষ্টিয়া', 3),
	(26, 'মাগুরা', 3),
	(27, 'খুলনা', 3),
	(28, 'বাগেরহাট', 3),
	(29, 'ঝিনাইদহ', 3),
	(30, 'ঝালকাঠি', 4),
	(31, 'পটুয়াখালী', 4),
	(32, 'পিরোজপুর', 4),
	(33, 'বরিশাল', 4),
	(34, 'ভোলা', 4),
	(35, 'বরগুনা', 4),
	(36, 'সিলেট', 5),
	(37, 'মৌলভীবাজার', 5),
	(38, 'হবিগঞ্জ', 5),
	(39, 'সুনামগঞ্জ', 5),
	(40, 'নরসিংদী', 6),
	(41, 'গাজীপুর', 6),
	(42, 'শরীয়তপুর', 6),
	(43, 'নারায়ণগঞ্জ', 6),
	(44, 'টাঙ্গাইল', 6),
	(45, 'কিশোরগঞ্জ', 6),
	(46, 'মানিকগঞ্জ', 6),
	(47, 'ঢাকা', 6),
	(48, 'মুন্সিগঞ্জ', 6),
	(49, 'রাজবাড়ী', 6),
	(50, 'মাদারীপুর', 6),
	(51, 'গোপালগঞ্জ', 6),
	(52, 'ফরিদপুর', 6),
	(53, 'পঞ্চগড়', 7),
	(54, 'দিনাজপুর', 7),
	(55, 'লালমনিরহাট', 7),
	(56, 'নীলফামারী', 7),
	(57, 'গাইবান্ধা', 7),
	(58, 'ঠাকুরগাঁও', 7),
	(59, 'রংপুর', 7),
	(60, 'কুড়িগ্রাম', 7),
	(61, 'শেরপুর', 8),
	(62, 'ময়মনসিংহ', 8),
	(63, 'জামালপুর', 8),
	(64, 'নেত্রকোণা', 8);
/*!40000 ALTER TABLE `districts` ENABLE KEYS */;

-- Dumping structure for table library.divisions
DROP TABLE IF EXISTS `divisions`;
CREATE TABLE IF NOT EXISTS `divisions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.divisions: ~8 rows (approximately)
DELETE FROM `divisions`;
/*!40000 ALTER TABLE `divisions` DISABLE KEYS */;
INSERT INTO `divisions` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'চট্টগ্রাম', NULL, NULL),
	(2, 'রাজশাহী', NULL, NULL),
	(3, 'খুলনা', NULL, NULL),
	(4, 'বরিশাল', NULL, NULL),
	(5, 'সিলেট', NULL, NULL),
	(6, 'ঢাকা', NULL, NULL),
	(7, 'রংপুর', NULL, NULL),
	(8, 'ময়মনসিংহ', NULL, NULL);
/*!40000 ALTER TABLE `divisions` ENABLE KEYS */;

-- Dumping structure for table library.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table library.libraries
DROP TABLE IF EXISTS `libraries`;
CREATE TABLE IF NOT EXISTS `libraries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `division_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.libraries: ~0 rows (approximately)
DELETE FROM `libraries`;
/*!40000 ALTER TABLE `libraries` DISABLE KEYS */;
INSERT INTO `libraries` (`id`, `user_id`, `name`, `district_id`, `division_id`, `city_id`, `address`, `logo`, `banner`, `description`, `status`, `created_at`, `updated_at`) VALUES
	(1, 1, 'sk library', 1, 1, 1, 'Dhaka, Mohammad-pur', 'https://images-platform.99static.com//GRmtYhUNKV2Ugv_21gbqiWplrf4=/711x1150:1347x1784/fit-in/500x500/projects-files/89/8984/898485/9a8ba799-91b0-463b-a84a-087c8afe347b.jpg', 'https://en.ricest.ac.ir/wp-content/uploads/2018/02/library-banner.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum,  quaerat repellat deserunt sequi sapiente voluptate aperiam. Placeat sed consequuntur impedit. Id, quae nihil labore officiis beatae culpa et accusamus quod?', 1, '2021-11-03 10:22:24', '2021-11-03 10:22:24');
/*!40000 ALTER TABLE `libraries` ENABLE KEYS */;

-- Dumping structure for table library.library_wallets
DROP TABLE IF EXISTS `library_wallets`;
CREATE TABLE IF NOT EXISTS `library_wallets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `book_sold` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.library_wallets: ~0 rows (approximately)
DELETE FROM `library_wallets`;
/*!40000 ALTER TABLE `library_wallets` DISABLE KEYS */;
INSERT INTO `library_wallets` (`id`, `user_id`, `book_sold`, `total_amount`, `status`, `created_at`, `updated_at`) VALUES
	(1, 1, '42', '4000000', 1, NULL, NULL);
/*!40000 ALTER TABLE `library_wallets` ENABLE KEYS */;

-- Dumping structure for table library.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.migrations: ~25 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2021_08_23_064609_create_permission_tables', 1),
	(6, '2021_08_28_120011_create_categories_table', 1),
	(7, '2021_08_30_191747_create_blogs_table', 1),
	(8, '2021_09_02_045915_create_libraries_table', 1),
	(9, '2021_09_02_185039_create_books_table', 1),
	(10, '2021_09_03_133441_create_orders_table', 1),
	(11, '2021_09_04_122000_create_order_items_table', 1),
	(12, '2021_09_04_200942_create_addresses_table', 1),
	(13, '2021_09_10_102930_create_order_reports_table', 1),
	(14, '2021_09_24_150828_create_pdfs_table', 1),
	(15, '2021_09_24_201645_create_divisions_table', 1),
	(16, '2021_09_24_201740_create_districts_table', 1),
	(17, '2021_09_24_202227_create_cities_table', 1),
	(18, '2021_09_26_091021_create_library_wallets_table', 1),
	(19, '2021_09_26_105931_create_payment_histories_table', 1),
	(20, '2021_09_26_173315_create_carts_table', 1),
	(21, '2021_09_30_162643_create_cart_items_table', 1),
	(22, '2021_09_30_170031_create_cart_libraries_table', 1),
	(23, '2021_10_01_085048_create_site_settings_table', 1),
	(24, '2021_10_01_091316_create_blog_credits_table', 1),
	(25, '2021_10_05_153609_create_ratings_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table library.model_has_permissions
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.model_has_permissions: ~0 rows (approximately)
DELETE FROM `model_has_permissions`;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;

-- Dumping structure for table library.model_has_roles
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.model_has_roles: ~5 rows (approximately)
DELETE FROM `model_has_roles`;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1),
	(2, 'App\\Models\\User', 2),
	(3, 'App\\Models\\User', 3),
	(4, 'App\\Models\\User', 4),
	(5, 'App\\Models\\User', 5);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;

-- Dumping structure for table library.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `library_id` int(11) NOT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.orders: ~0 rows (approximately)
DELETE FROM `orders`;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table library.order_items
DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `unit_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sum_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.order_items: ~0 rows (approximately)
DELETE FROM `order_items`;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;

-- Dumping structure for table library.order_reports
DROP TABLE IF EXISTS `order_reports`;
CREATE TABLE IF NOT EXISTS `order_reports` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.order_reports: ~0 rows (approximately)
DELETE FROM `order_reports`;
/*!40000 ALTER TABLE `order_reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_reports` ENABLE KEYS */;

-- Dumping structure for table library.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table library.payment_histories
DROP TABLE IF EXISTS `payment_histories`;
CREATE TABLE IF NOT EXISTS `payment_histories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `library_id` int(11) DEFAULT NULL,
  `paid_amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.payment_histories: ~0 rows (approximately)
DELETE FROM `payment_histories`;
/*!40000 ALTER TABLE `payment_histories` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment_histories` ENABLE KEYS */;

-- Dumping structure for table library.pdfs
DROP TABLE IF EXISTS `pdfs`;
CREATE TABLE IF NOT EXISTS `pdfs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.pdfs: ~0 rows (approximately)
DELETE FROM `pdfs`;
/*!40000 ALTER TABLE `pdfs` DISABLE KEYS */;
/*!40000 ALTER TABLE `pdfs` ENABLE KEYS */;

-- Dumping structure for table library.permissions
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.permissions: ~0 rows (approximately)
DELETE FROM `permissions`;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Dumping structure for table library.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table library.ratings
DROP TABLE IF EXISTS `ratings`;
CREATE TABLE IF NOT EXISTS `ratings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.ratings: ~20 rows (approximately)
DELETE FROM `ratings`;
/*!40000 ALTER TABLE `ratings` DISABLE KEYS */;
INSERT INTO `ratings` (`id`, `book_id`, `rating`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
	(1, 15, '5', 1, 'Non dolores provident assumenda et molestias minus.', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(2, 6, '5', 1, 'Consequuntur aut ipsa sunt expedita veritatis.', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(3, 2, '5', 1, 'Veniam perferendis id temporibus dolorem.', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(4, 6, '5', 1, 'Quia sunt quae qui laboriosam accusantium perspiciatis debitis.', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(5, 8, '5', 1, 'Quasi quis quos id.', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(6, 17, '5', 1, 'Laudantium expedita dolore praesentium similique et.', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(7, 1, '5', 1, 'Quidem dolorum est neque aut vitae dignissimos.', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(8, 20, '5', 1, 'Eligendi iure debitis tenetur excepturi consequuntur.', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(9, 15, '5', 1, 'Natus blanditiis officia magni reiciendis et.', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(10, 18, '5', 1, 'Eveniet placeat in omnis voluptas autem.', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(11, 5, '5', 1, 'Quis dolores ut debitis officia.', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(12, 12, '5', 1, 'Nostrum sint est qui est ut.', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(13, 10, '5', 1, 'Qui cum vel sed asperiores esse impedit.', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(14, 12, '5', 1, 'Optio fugit ipsum voluptas libero.', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(15, 9, '5', 1, 'Neque animi quia aut recusandae quibusdam nemo voluptatum.', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(16, 16, '5', 1, 'Mollitia quod rem est deleniti voluptas est.', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(17, 20, '5', 1, 'Et consequuntur hic esse facilis harum iure.', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(18, 17, '5', 1, 'Amet suscipit reprehenderit laborum animi enim est dolorem.', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(19, 2, '5', 1, 'Atque illo et repudiandae deserunt repellat rerum ducimus.', '2021-11-03 10:22:34', '2021-11-03 10:22:34'),
	(20, 19, '5', 1, 'Veritatis maxime autem ut pariatur unde quibusdam sapiente dignissimos.', '2021-11-03 10:22:34', '2021-11-03 10:22:34');
/*!40000 ALTER TABLE `ratings` ENABLE KEYS */;

-- Dumping structure for table library.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.roles: ~5 rows (approximately)
DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'web', '2021-11-03 10:22:23', '2021-11-03 10:22:23'),
	(2, 'manager', 'web', '2021-11-03 10:22:23', '2021-11-03 10:22:23'),
	(3, 'volunteer', 'web', '2021-11-03 10:22:23', '2021-11-03 10:22:23'),
	(4, 'librarian', 'web', '2021-11-03 10:22:23', '2021-11-03 10:22:23'),
	(5, 'writer', 'web', '2021-11-03 10:22:23', '2021-11-03 10:22:23');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table library.role_has_permissions
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.role_has_permissions: ~0 rows (approximately)
DELETE FROM `role_has_permissions`;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;

-- Dumping structure for table library.site_settings
DROP TABLE IF EXISTS `site_settings`;
CREATE TABLE IF NOT EXISTS `site_settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basic_credit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_credit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.site_settings: ~0 rows (approximately)
DELETE FROM `site_settings`;
/*!40000 ALTER TABLE `site_settings` DISABLE KEYS */;
INSERT INTO `site_settings` (`id`, `logo`, `favicon`, `banner_one`, `banner_two`, `banner_three`, `meta`, `tags`, `description`, `hero_title`, `hero_sub_title`, `basic_credit`, `pro_credit`, `created_at`, `updated_at`) VALUES
	(1, NULL, NULL, NULL, NULL, 'sdafsaf', 'sadf', 'sadf', 'sdaf', 'sadfasd', 'sdfa', 'sadf', 'sadf', NULL, NULL);
/*!40000 ALTER TABLE `site_settings` ENABLE KEYS */;

-- Dumping structure for table library.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_pro` int(11) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table library.users: ~7 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `phone`, `is_pro`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '10000000000', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '2021-11-03 10:22:23', '2021-11-03 10:22:23'),
	(2, 'manager', '20000000000', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '2021-11-03 10:22:23', '2021-11-03 10:22:23'),
	(3, 'volunteer', '30000000000', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '2021-11-03 10:22:23', '2021-11-03 10:22:23'),
	(4, 'librarian', '40000000000', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '2021-11-03 10:22:23', '2021-11-03 10:22:23'),
	(5, 'writer', '50000000000', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '2021-11-03 10:22:23', '2021-11-03 10:22:23'),
	(6, 'basic user one', '60000000000', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '2021-11-03 10:22:23', '2021-11-03 10:22:23'),
	(7, 'basic user two', '70000000000', 0, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '2021-11-03 10:22:23', '2021-11-03 10:22:23');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

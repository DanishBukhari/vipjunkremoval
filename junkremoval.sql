-- MySQL dump 10.13  Distrib 8.0.40, for macos14 (arm64)
--
-- Host: localhost    Database: junkremoval
-- ------------------------------------------------------
-- Server version	8.0.40

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `appointments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'submitted',
  `booking_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_apt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `onside_first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `onside_last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `onside_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `onside_phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `removal_items` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `appointments_user_id_foreign` (`user_id`),
  CONSTRAINT `appointments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointments`
--

LOCK TABLES `appointments` WRITE;
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
INSERT INTO `appointments` VALUES (10,6,'2025-04-19','9:00am - 11:00am','in_progress','Home','90991 Crown Street, Marjorybury, 90991 Crown Street, Marjorybury, North Dakota - 34839, Mozambique - 34839, Mozambique','OKMS','Marjorybury','AK','07017',NULL,NULL,NULL,'0003689905562',NULL,NULL,NULL,NULL,'1. providing your phone number and email, you agree\r\n2. providing your phone number and email, you agree\r\n3. providing your phone number and email, you agree','2025-04-19 17:57:54','2025-04-19 18:01:10'),(11,6,'2025-04-20','12:00pm - 2:00pm','submitted','Home','484 Charlene Mill, Trevionfurt, Wisconsin - 83003, India','HNKD','Trevionfurt','CO','07017',NULL,NULL,NULL,'068990556299932',NULL,NULL,NULL,NULL,'Trevionfurt','2025-04-19 17:58:26','2025-04-19 17:58:26'),(12,6,'2025-04-17','9:30am - 11:30am','submitted','Business','1637 Jefferson Street, New Gerardburgh, Alaska - 04771, Turkmenistan','BHD','Gerardburgh','AR','07017',NULL,NULL,NULL,'06899055323262',NULL,NULL,NULL,NULL,'system or other automated technology, including calls, pre-recorded messages, text messages, and emails at the number and email provided. You also consent to receive customer','2025-04-19 17:59:17','2025-04-19 17:59:17');
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `available_booking_times`
--

DROP TABLE IF EXISTS `available_booking_times`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `available_booking_times` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `time_period` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `available_booking_times`
--

LOCK TABLES `available_booking_times` WRITE;
/*!40000 ALTER TABLE `available_booking_times` DISABLE KEYS */;
INSERT INTO `available_booking_times` VALUES (1,'8:00am - 10:00am','2025-04-17 20:06:10','2025-04-17 20:06:10'),(2,'8:30am - 10:30am','2025-04-17 20:06:10','2025-04-17 20:06:10'),(3,'9:00am - 11:00am','2025-04-17 20:06:10','2025-04-17 20:06:10'),(4,'9:30am - 11:30am','2025-04-17 20:06:10','2025-04-17 20:06:10'),(5,'10:00am - 12:00pm','2025-04-17 20:06:10','2025-04-17 20:06:10'),(6,'10:30am - 12:30pm','2025-04-17 20:06:10','2025-04-17 20:06:10'),(7,'11:00am - 1:00pm','2025-04-17 20:06:10','2025-04-17 20:06:10'),(8,'11:30am - 1:30pm','2025-04-17 20:06:10','2025-04-17 20:06:10'),(9,'12:00pm - 2:00pm','2025-04-17 20:06:10','2025-04-17 20:06:10'),(10,'12:30pm - 2:30pm','2025-04-17 20:06:10','2025-04-17 20:06:10'),(11,'1:00pm - 3:00pm','2025-04-17 20:06:10','2025-04-17 20:06:10'),(12,'1:30pm - 3:30pm','2025-04-17 20:06:10','2025-04-17 20:06:10'),(13,'2:00pm - 4:00pm','2025-04-17 20:06:10','2025-04-17 20:06:10'),(14,'2:30pm - 4:30pm','2025-04-17 20:06:10','2025-04-17 20:06:10'),(15,'3:00pm - 5:00pm','2025-04-17 20:06:10','2025-04-17 20:06:10');
/*!40000 ALTER TABLE `available_booking_times` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_posts`
--

DROP TABLE IF EXISTS `blog_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog_posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_posts`
--

LOCK TABLES `blog_posts` WRITE;
/*!40000 ALTER TABLE `blog_posts` DISABLE KEYS */;
INSERT INTO `blog_posts` VALUES (9,'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit','blog-images/FnTXF6jR8IHoPsg118niNoRT6YerNJQfMYv0AiVe.webp','<div>\r\n<p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2 class="mb-3">Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div>\r\n<h2 class="mb-3">Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n</div>','2025-04-19 18:01:46','2025-04-19 18:03:23'),(10,'5 Stress-Free Renovation Cleanup Tips','blog-images/YKXBAUzePn3l1lcDp3FQDBkCP5WTkT1kD5MqwfQx.webp','<p>Home renovations are exciting until you&rsquo;re in the middle where everything is chaos and you can\'t yet see the light at the end of the tunnel. But it&rsquo;s important to remember that there&rsquo;s nothing like seeing your space transform into something you&rsquo;ve dreamed of! When you\'re tackling a big project, the last thing you want to do is deal with piles of debris, old materials, and clutter. That&rsquo;s where VIP Junk Removal came to the rescue for us.</p>\r\n<p>I&rsquo;ve learned that one of the best renovation tips isn&rsquo;t just about the design&mdash;it&rsquo;s about dealing with the not-so-glamorous parts like the clean-up. If you&rsquo;re planning a renovation, here&rsquo;s how to keep things stress-free so you can focus on creating a home you love.</p>\r\n<h2 class="mb-3">1. Plan for the Cleanup from the Start</h2>\r\n<p>It&rsquo;s easy to get caught up in picking paint colors and tile samples, but trust me, planning for cleanup is just as important. Before demo day, figure out where all that old flooring, drywall, and random junk is going to go. Instead of letting it pile up and overwhelm you, have a junk removal service on standby to take care of it for you.</p>\r\n<p>However, if you didn\'t plan ahead, it\'s ok, one of my favorite things about VIP Junk Removal is that they can show up the same day to take care of your junk! Within hours, they can be at your door ready to work their magic.</p>\r\n<h2 class="mb-3">2. Don&rsquo;t Waste Time Moving Heavy Debris</h2>\r\n<p>When I was getting ready for the truck\'s arrival, I had the urge to clean up and organize before they arrived but I resisted because they told me not to worry about it. They do all the heavy lifting&mdash;I didn&rsquo;t have to move a single thing. They told me to leave everything exactly where it was, and they took care of the rest. If you&rsquo;re in the middle of a renovation, this is a game-changer because:</p>','2025-04-19 18:03:10','2025-04-19 18:03:10'),(11,'How to dispose of your old toilet','blog-images/Ej54rjPLhKHuyQC64An2D1D3D2KjsiPPrXOw4gz2.webp','<p>t&rsquo;s time for a new throne! But what do you do with the old one? No, throwing it in the trash is not the royal treatment we had in mind. Toilets are bulky, heavy, and classified as &ldquo;construction waste,&rdquo; which means they can&rsquo;t just be tossed in with your everyday household trash. Luckily, there are plenty of eco-friendly, legal, and convenient ways to dispose of your old toilet. Let&rsquo;s dive into your options.</p>\r\n<h2 class="mb-3">Why you shouldn&rsquo;t put your old toilet in the trash</h2>\r\n<p>As much as we&rsquo;d love to just chuck that old toilet into the trash and move on with our lives, that&rsquo;s not the best idea. In most cities, large items like toilets are classified as &ldquo;bulk waste,&rdquo; and can&rsquo;t be disposed of with your regular trash.<br><br>Here&rsquo;s why:</p>\r\n<ul>\r\n<li><strong>Bulk waste restrictions</strong>: Toilets are heavy and cumbersome. They can overload waste systems and cause issues with your local trash pickup.</li>\r\n<li><strong>Long breakdown time</strong>: Toilets are made from porcelain and metal, materials that take a long time to decompose in a landfill (we&rsquo;re talking decades here).</li>\r\n<li><strong>Recycling potential</strong>: Many parts of a toilet can be recycled&mdash;so why let them go to waste?</li>\r\n</ul>\r\n<p>Here are the parts of your toilet you&rsquo;ll need to think about:</p>\r\n<ul>\r\n<li><strong>Porcelain bowl</strong>: This can generally be recycled, but toilets made before the 1980s may have lead-based glazing or enamel. If you have an old toilet, make sure to check with a local recycling center or hazardous waste facility for proper disposal.</li>\r\n<li><strong>Metal bolts and hinges</strong>: These are recyclable and can be sent to a scrap metal facility.</li>\r\n<li><strong>Rubber &amp; plastic parts:</strong>&nbsp;These parts aren&rsquo;t biodegradable but can often be recycled. If they can&rsquo;t be, they can be disposed of with household waste.</li>\r\n<li><strong>Wooden or composite seats</strong>: These can&rsquo;t be recycled and are typically disposed of with regular waste (unless they contain asbestos).</li>\r\n<li><strong>Asbestos</strong>: Some older toilets may have asbestos-containing materials, so if you suspect that, you should contact a hazardous waste specialist for proper disposal.</li>\r\n</ul>\r\n<p>As you can see, it&rsquo;s not just about getting rid of a toilet&mdash;it&rsquo;s about making sure you dispose of it the right way!</p>\r\n<div>\r\n<div class=\"field field--name-field-media-image field--type-image field--label-visually_hidden\">\r\n<div class=\"field__label visually-hidden\">Image</div>\r\n</div>\r\n</div>','2025-04-19 18:03:51','2025-04-19 18:03:51');
/*!40000 ALTER TABLE `blog_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(5,'2025_04_16_010229_create_zipcodes_table',3),(6,'2025_04_16_010424_populate_zip_codes_table',4),(8,'2025_04_15_175023_create_appointments_table',5),(9,'2025_04_16_234702_add_status_to_appointments_table',6),(10,'2025_04_17_001140_add_is_admin_to_users_table',7),(11,'2025_04_17_001355_populate_users_table_with_new_admin_account',8),(13,'2025_04_17_210445_create_available_booking_times_table',9),(14,'2025_04_18_183505_create_blog_posts_table',10);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('4qJZ94oTIRgyvBy0NZttr9bytzeSYJsjoX8E3Uct',NULL,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiM0VWY1VaeFlWUmY0QXRRdko3dFBFdDQwTzlNTkpRNUVicHRPdVNqbiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZXB1cnBvc2Utc3VzdGFpbmFiaWxpdHkiO319',1745089655);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'MOHAMED CHOULLA','choullamed@gmail.com',0,NULL,'$2y$12$wsQKFhT0ygmpgaDzgtkc.uvlCUhpN0ZolHheKQFiutQKCnC3UIlBO',NULL,'2025-04-14 18:10:14','2025-04-14 18:10:14'),(2,'Admin','admin@admin.com',1,NULL,'$2y$12$JRDhQIWR1nYRLxrolF0M7u2DtGY4k7kt/aeJAAdfJ33Qq/CE75gFe',NULL,'2025-04-16 23:14:20','2025-04-19 17:53:55'),(3,'Dawn Maxwell','test@test.test',0,NULL,'$2y$12$h446XdcQKX/QEETm6E5Lle/G4M2TL6z2rocyHC5a3MC/npPyfY/4O',NULL,'2025-04-18 16:31:15','2025-04-18 16:31:15'),(4,'Teagan Sanford','sogame@mailinator.com',0,NULL,'$2y$12$fog1ukyMBWYViR/UQb7/Qe4.oEEeAMCip/268mL7LWTDLPjDM3VnW',NULL,'2025-04-18 16:32:44','2025-04-18 16:32:44'),(5,'Rafael Mcclain','mecabu@mailinator.com',0,NULL,'$2y$12$aQbmzxu.8SpXlMYMt5ZxoOsEmHiKJqCEVYbCh.nXT7Ejh.Ekj/3Wi',NULL,'2025-04-18 16:33:43','2025-04-18 16:33:43'),(6,'USER NAME','user@user.com',0,NULL,'$2y$12$jUZQ/fhzBNXVrHUnZ0XOrOA4yOvbVANKLIdzwdenBFh6/2koBezzK',NULL,'2025-04-19 17:54:16','2025-04-19 17:54:16');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zipcodes`
--

DROP TABLE IF EXISTS `zipcodes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `zipcodes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `place_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zipcodes`
--

LOCK TABLES `zipcodes` WRITE;
/*!40000 ALTER TABLE `zipcodes` DISABLE KEYS */;
INSERT INTO `zipcodes` VALUES (1,'East Orange','07017','2025-04-16 00:04:41','2025-04-16 00:04:41'),(2,'Newark','07102','2025-04-16 00:04:41','2025-04-16 00:04:41'),(3,'Orange','07050','2025-04-16 00:04:41','2025-04-16 00:04:41'),(4,'Irvington','07111','2025-04-16 00:04:41','2025-04-16 00:04:41'),(5,'Belleville','07109','2025-04-16 00:04:41','2025-04-16 00:04:41'),(6,'Bloomfield','07003','2025-04-16 00:04:41','2025-04-16 00:04:41'),(7,'Caldwell','07006','2025-04-16 00:04:41','2025-04-16 00:04:41'),(8,'Cedar Grove','07009','2025-04-16 00:04:41','2025-04-16 00:04:41'),(9,'Essex Fells','07021','2025-04-16 00:04:41','2025-04-16 00:04:41'),(10,'Fairfield','07004','2025-04-16 00:04:41','2025-04-16 00:04:41'),(11,'Glen Ridge','07028','2025-04-16 00:04:41','2025-04-16 00:04:41'),(12,'Livingston','07039','2025-04-16 00:04:41','2025-04-16 00:04:41'),(13,'Maplewood','07040','2025-04-16 00:04:41','2025-04-16 00:04:41'),(14,'Millburn','07041','2025-04-16 00:04:41','2025-04-16 00:04:41'),(15,'Montclair','07042','2025-04-16 00:04:41','2025-04-16 00:04:41'),(16,'North Caldwell','07006','2025-04-16 00:04:41','2025-04-16 00:04:41'),(17,'Nutley','07110','2025-04-16 00:04:41','2025-04-16 00:04:41'),(18,'Roseland','07068','2025-04-16 00:04:41','2025-04-16 00:04:41'),(19,'South Orange','07079','2025-04-16 00:04:41','2025-04-16 00:04:41'),(20,'Verona','07044','2025-04-16 00:04:41','2025-04-16 00:04:41'),(21,'West Caldwell','07006','2025-04-16 00:04:41','2025-04-16 00:04:41'),(22,'West Orange','07052','2025-04-16 00:04:41','2025-04-16 00:04:41'),(23,'Elizabeth','07201','2025-04-16 00:04:41','2025-04-16 00:04:41'),(24,'Linden','07036','2025-04-16 00:04:41','2025-04-16 00:04:41'),(25,'Plainfield','07060','2025-04-16 00:04:41','2025-04-16 00:04:41'),(26,'Summit','07901','2025-04-16 00:04:41','2025-04-16 00:04:41'),(27,'Berkeley Heights','07922','2025-04-16 00:04:41','2025-04-16 00:04:41'),(28,'Clark','07066','2025-04-16 00:04:41','2025-04-16 00:04:41'),(29,'Cranford','07016','2025-04-16 00:04:41','2025-04-16 00:04:41'),(30,'Hillside','07205','2025-04-16 00:04:41','2025-04-16 00:04:41'),(31,'Scotch Plains','07076','2025-04-16 00:04:41','2025-04-16 00:04:41'),(32,'Springfield','07081','2025-04-16 00:04:41','2025-04-16 00:04:41'),(33,'Union','07083','2025-04-16 00:04:41','2025-04-16 00:04:41'),(34,'Westfield','07090','2025-04-16 00:04:41','2025-04-16 00:04:41'),(35,'Fanwood','07023','2025-04-16 00:04:41','2025-04-16 00:04:41'),(36,'Garwood','07027','2025-04-16 00:04:41','2025-04-16 00:04:41'),(37,'Kenilworth','07033','2025-04-16 00:04:41','2025-04-16 00:04:41'),(38,'Mountainside','07092','2025-04-16 00:04:41','2025-04-16 00:04:41'),(39,'New Providence','07974','2025-04-16 00:04:41','2025-04-16 00:04:41'),(40,'Roselle','07203','2025-04-16 00:04:41','2025-04-16 00:04:41'),(41,'Roselle Park','07204','2025-04-16 00:04:41','2025-04-16 00:04:41'),(42,'Winfield','07036','2025-04-16 00:04:41','2025-04-16 00:04:41'),(43,'New Brunswick','08901','2025-04-16 00:04:41','2025-04-16 00:04:41'),(44,'Perth Amboy','08861','2025-04-16 00:04:41','2025-04-16 00:04:41'),(45,'South Amboy','08879','2025-04-16 00:04:41','2025-04-16 00:04:41'),(46,'Cranbury','08512','2025-04-16 00:04:41','2025-04-16 00:04:41'),(47,'East Brunswick','08816','2025-04-16 00:04:41','2025-04-16 00:04:41'),(48,'Edison','08817','2025-04-16 00:04:41','2025-04-16 00:04:41'),(49,'Monroe','08831','2025-04-16 00:04:41','2025-04-16 00:04:41'),(50,'North Brunswick','08902','2025-04-16 00:04:41','2025-04-16 00:04:41'),(51,'Old Bridge','08857','2025-04-16 00:04:41','2025-04-16 00:04:41'),(52,'Piscataway','08854','2025-04-16 00:04:41','2025-04-16 00:04:41'),(53,'Plainsboro','08536','2025-04-16 00:04:41','2025-04-16 00:04:41'),(54,'South Brunswick','08810','2025-04-16 00:04:41','2025-04-16 00:04:41'),(55,'Woodbridge','07095','2025-04-16 00:04:41','2025-04-16 00:04:41'),(56,'Carteret','07008','2025-04-16 00:04:41','2025-04-16 00:04:41'),(57,'Dunellen','08812','2025-04-16 00:04:41','2025-04-16 00:04:41'),(58,'Helmetta','08828','2025-04-16 00:04:41','2025-04-16 00:04:41'),(59,'Highland Park','08904','2025-04-16 00:04:41','2025-04-16 00:04:41'),(60,'Jamesburg','08831','2025-04-16 00:04:41','2025-04-16 00:04:41'),(61,'Metuchen','08840','2025-04-16 00:04:41','2025-04-16 00:04:41'),(62,'Middlesex','08846','2025-04-16 00:04:41','2025-04-16 00:04:41'),(63,'Milltown','08850','2025-04-16 00:04:41','2025-04-16 00:04:41'),(64,'Sayreville','08872','2025-04-16 00:04:41','2025-04-16 00:04:41'),(65,'South Plainfield','07080','2025-04-16 00:04:41','2025-04-16 00:04:41'),(66,'South River','08882','2025-04-16 00:04:41','2025-04-16 00:04:41'),(67,'Spotswood','08884','2025-04-16 00:04:41','2025-04-16 00:04:41');
/*!40000 ALTER TABLE `zipcodes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-04-19 20:11:11

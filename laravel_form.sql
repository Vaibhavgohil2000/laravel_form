-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 20, 2022 at 01:14 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laravel_form`
--

DROP TABLE IF EXISTS `laravel_form`;
CREATE TABLE IF NOT EXISTS `laravel_form` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laravel_form`
--

INSERT INTO `laravel_form` (`id`, `name`, `city`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'mohan', 'bhavnagar', 85274196, '2022-10-19 01:35:19', '2022-10-19 01:35:19'),
(2, 'soham', 'rajula', 8527419654, '2022-10-19 01:40:00', '2022-10-19 01:40:00'),
(3, 'sima', 'jamnagar', 8527419654, '2022-10-19 01:42:53', '2022-10-19 01:42:53'),
(4, 'sima', 'jamnagar', 8527419654, '2022-10-19 01:44:33', '2022-10-19 01:44:33'),
(5, 'sima', 'jamnagar', 8527419654, '2022-10-19 01:44:59', '2022-10-19 01:44:59'),
(6, 'niji', 'ghf', 7418529635, '2022-10-19 01:47:00', '2022-10-19 01:47:00'),
(7, 'Hardik', 'Up', 7041454256, '2022-10-19 01:54:40', '2022-10-19 01:54:40'),
(8, 'rohan', 'surendrnagar', 741829635, '2022-10-19 02:01:18', '2022-10-19 02:01:18'),
(9, 'roh', 'surendrnagar', 741829635, '2022-10-19 02:08:55', '2022-10-19 02:08:55'),
(10, 'rohi', 'surendrnagar', 741829635, '2022-10-19 02:10:31', '2022-10-19 02:10:31'),
(11, 'siya', 'kashi', 7418529635, '2022-10-19 02:13:44', '2022-10-19 02:13:44'),
(12, 'a', 'd', 745, '2022-10-19 02:15:35', '2022-10-19 02:15:35'),
(13, 'q', 'q', 8527419635, '2022-10-19 02:16:36', '2022-10-19 02:16:36'),
(14, 'mohit', 'lilya', 7485965241, '2022-10-19 02:21:54', '2022-10-19 02:21:54'),
(15, 'dd1', 'aa', 744, '2022-10-19 02:24:50', '2022-10-19 02:24:50'),
(16, 'nj', 'w', 74, '2022-10-19 02:25:40', '2022-10-19 02:25:40'),
(17, 'q', 'sa', 74, '2022-10-19 02:26:32', '2022-10-19 02:26:32'),
(18, 'e', 'd', 4, '2022-10-19 02:28:37', '2022-10-19 02:28:37'),
(19, 'ee', 'd', 4, '2022-10-19 02:58:47', '2022-10-19 02:58:47'),
(20, 's', 'a', 5, '2022-10-19 03:20:04', '2022-10-19 03:20:04'),
(21, 'jk', 'kk', 4512, '2022-10-19 03:53:35', '2022-10-19 03:53:35'),
(22, 'mohdi', 'rajkot', 6352147485, '2022-10-19 04:21:41', '2022-10-19 04:21:41'),
(23, 'mohdi', 'rajkot', 6352147485, '2022-10-19 04:24:23', '2022-10-19 04:24:23'),
(24, 's', 's', 5241, '2022-10-19 04:32:29', '2022-10-19 04:32:29'),
(25, 's', 's', 5241, '2022-10-19 04:34:01', '2022-10-19 04:34:01'),
(26, 's', 's', 5241, '2022-10-19 04:35:28', '2022-10-19 04:35:28'),
(27, 's', 's', 5241, '2022-10-19 04:36:45', '2022-10-19 04:36:45'),
(28, 's', 's', 5241, '2022-10-19 04:42:13', '2022-10-19 04:42:13'),
(29, 'ggh', 's', 5241, '2022-10-19 04:46:36', '2022-10-19 04:46:36'),
(30, 'ggha', 's', 5241, '2022-10-19 04:47:21', '2022-10-19 04:47:21'),
(31, 'gghax', 's', 5241, '2022-10-19 04:47:47', '2022-10-19 04:47:47'),
(32, 'gghax', 's', 5241, '2022-10-19 04:58:01', '2022-10-19 04:58:01'),
(33, 'gghax', 's', 5241, '2022-10-19 04:58:38', '2022-10-19 04:58:38'),
(34, 'w', 'wq', 5, '2022-10-19 05:06:22', '2022-10-19 05:06:22'),
(35, 'w', 'wq', 5, '2022-10-19 05:10:55', '2022-10-19 05:10:55'),
(36, 'w', 'wq', 5, '2022-10-19 05:16:29', '2022-10-19 05:16:29'),
(37, 'w', 'wq', 5, '2022-10-19 05:40:11', '2022-10-19 05:40:11'),
(38, 'w', 'wq', 5, '2022-10-19 05:41:00', '2022-10-19 05:41:00'),
(39, 'sohama', 'surendrnagar', 85274196, '2022-10-19 05:42:56', '2022-10-19 05:42:56'),
(40, 'sohamaq', 'surendrnagar', 85274196, '2022-10-19 05:51:02', '2022-10-19 05:51:02'),
(41, 'sita', 'rameshvar', 7418529635, '2022-10-19 06:22:28', '2022-10-19 06:22:28'),
(42, 'hj', 'nm', 415, '2022-10-19 07:31:56', '2022-10-19 07:31:56'),
(43, 'hjsd', 'nm', 415, '2022-10-19 07:35:00', '2022-10-19 07:35:00'),
(44, 'hjsd', 'nm', 415, '2022-10-19 07:51:54', '2022-10-19 07:51:54'),
(45, 'rajat', 'maninagar', 7418529635, '2022-10-19 08:18:24', '2022-10-19 08:18:24'),
(46, 'dd', 'dd', 7418529635, '2022-10-20 06:12:58', '2022-10-20 06:12:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` bigint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_18_122832_laravel_form', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 30, 2022 at 12:23 PM
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
-- Database: `apple`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_uz` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ru` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_uz` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_ru` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `type`, `media_type`, `name_uz`, `name_ru`, `name_en`, `desc_uz`, `desc_ru`, `desc_en`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(14, 'middle', 'image', 'iPhone 13 Pro Max Uz', 'iPhone 13 Pro Max Ru', 'iPhone 13 Pro Max En', NULL, NULL, NULL, 'images/slider/middle/tSJTIZkJiW.png', '85', '2022-06-30 04:23:27', '2022-06-30 04:23:27'),
(13, 'slider', 'image', 'MacBook Pro 14-inch uz uz', 'MacBook Pro 14-inch ru ru', 'MacBook Pro 14-inch en en', 'MacBook Pro 14-inch description uz', 'MacBook Pro 14-inch description ru', 'MacBook Pro 14-inch description en', 'images/slider/n8o6LkpwVv.png', '88', '2022-06-30 04:08:04', '2022-06-30 06:36:17'),
(12, 'slider', 'image', 'iMac 27 Uz', 'iMac 27 Ru', 'iMac 27 En', 'iMac 27 Description  Uz', 'iMac 27 Description  Ru', 'iMac 27 Description  En', 'images/slider/RT02qUCIzp.png', '89', '2022-06-30 04:06:31', '2022-06-30 04:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_id`, `name`, `created_at`, `updated_at`) VALUES
(23, 18, 'iWatch', '2022-05-30 01:43:36', '2022-05-30 01:43:36'),
(22, 18, 'iPhone', '2022-05-30 01:43:27', '2022-05-30 01:43:27'),
(21, NULL, 'Accessories', '2022-05-30 01:43:13', '2022-05-30 01:43:13'),
(20, NULL, 'Xiaomi', '2022-05-30 01:42:28', '2022-05-30 01:42:28'),
(18, NULL, 'Apple', '2022-05-30 01:42:12', '2022-05-30 01:42:12'),
(19, NULL, 'Samsung', '2022-05-30 01:42:18', '2022-05-30 01:42:18'),
(24, 18, 'Mac', '2022-05-30 01:43:44', '2022-05-30 01:43:44'),
(25, 18, 'iPad', '2022-05-30 01:43:59', '2022-05-30 01:43:59'),
(26, 19, 'Samsung Watch', '2022-05-30 01:44:39', '2022-05-30 01:44:39'),
(27, 20, 'Redmi', '2022-05-30 01:45:06', '2022-05-30 01:45:06'),
(28, 20, 'Xiaomi Watch', '2022-05-30 01:45:21', '2022-05-30 01:45:21'),
(29, 19, 'Galaxy', '2022-06-01 04:46:23', '2022-06-01 04:46:23');

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
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone`, `created_at`, `updated_at`) VALUES
(10, 'test', '+998 55 555 55 55', '2022-06-29 04:41:47', '2022-06-29 04:41:47'),
(9, 'test', '+998 44 444 44 44', '2022-06-29 04:40:56', '2022-06-29 04:40:56'),
(8, '3333', '+998 33 333 33 33', '2022-06-29 04:07:17', '2022-06-29 04:07:17'),
(7, '22222', '+998 22 222 22 22', '2022-06-29 04:03:18', '2022-06-29 04:03:18'),
(6, '1111', '+998 11 111 11 11', '2022-06-29 04:02:47', '2022-06-29 04:02:47'),
(11, 'sam', '+998 12 345 67 89', '2022-06-29 04:42:51', '2022-06-29 04:42:51'),
(12, 'sam', '+998 13 546 87 97', '2022-06-29 04:44:10', '2022-06-29 04:44:10'),
(13, 'sam', '+998 77 777 77 77', '2022-06-29 04:46:04', '2022-06-29 04:46:04'),
(14, 'sasd', '+998 55 555 55 55', '2022-06-29 04:46:55', '2022-06-29 04:46:55'),
(15, 'sdf', '+998 33 333 33 33', '2022-06-29 04:47:10', '2022-06-29 04:47:10'),
(16, 'asd', '+998 33 333 33 33', '2022-06-29 04:47:39', '2022-06-29 04:47:39'),
(17, 'asd', '+998 33 333 33 33', '2022-06-29 04:48:14', '2022-06-29 04:48:14'),
(18, 'asd', '+998 22 222 22 22', '2022-06-29 04:48:36', '2022-06-29 04:48:36'),
(19, 'asd', '+998 11 111 11 11', '2022-06-29 04:49:04', '2022-06-29 04:49:04'),
(20, 'dasd', '+998 21 111 11 11', '2022-06-29 04:49:18', '2022-06-29 04:49:18'),
(21, 'asd', '+998 22 222 22 22', '2022-06-29 04:49:42', '2022-06-29 04:49:42'),
(22, 'asd', '+998 11 111 11 11', '2022-06-29 04:50:15', '2022-06-29 04:50:15'),
(23, 'asd', '+998 11 111 11 11', '2022-06-29 04:50:46', '2022-06-29 04:50:46'),
(24, 'asd', '+998 11 111 11 11', '2022-06-29 04:51:24', '2022-06-29 04:51:24'),
(25, 'asd', '+998 33 333 33 33', '2022-06-29 04:52:34', '2022-06-29 04:52:34'),
(26, 'wre', '+998 33 333 33 33', '2022-06-29 04:53:36', '2022-06-29 04:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 3),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_05_05_110846_create_sessions_table', 1),
(7, '2022_05_05_133638_create_categories_table', 2),
(8, '2022_05_05_133735_create_products_table', 2),
(9, '2022_05_05_134245_create_product_photos_table', 2),
(10, '2022_05_05_134654_create_product_options_table', 2),
(11, '2022_05_05_134745_create_options_table', 2),
(13, '2022_05_19_070758_create_wishlists_table', 4),
(14, '2022_05_26_090407_create_orders_table', 5),
(15, '2022_05_26_090514_create_order_products_table', 5),
(16, '2022_05_26_091848_create_order_options_table', 5),
(17, '2022_06_14_095052_create_banners_table', 6),
(18, '2022_06_16_065956_create_banners_table', 7),
(19, '2022_06_29_072117_create_messages_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `name`, `value`, `photo`, `photo_path`, `sort`, `created_at`, `updated_at`) VALUES
(17, 'RAM', '4 GB', NULL, NULL, 1, '2022-05-09 09:28:11', '2022-05-09 09:28:11'),
(16, 'RAM', '6 GB', NULL, NULL, 2, '2022-05-09 09:20:05', '2022-05-09 09:20:05'),
(15, 'RAM', '8 GB', NULL, NULL, 3, '2022-05-09 09:15:44', '2022-05-09 09:15:44'),
(14, 'RAM', '16 GB', NULL, NULL, 4, '2022-05-09 09:15:20', '2022-05-09 09:15:20'),
(13, 'ROM', '128 GB', NULL, NULL, 1, '2022-05-09 09:11:31', '2022-05-09 09:11:31'),
(12, 'ROM', '256 GB', NULL, NULL, 2, '2022-05-09 09:03:52', '2022-05-09 09:03:52'),
(21, 'CPU', 'Intel Core i7', NULL, NULL, NULL, '2022-05-12 00:21:59', '2022-05-12 00:21:59'),
(22, 'CPU', 'ADM Ryzen 5 5500', NULL, NULL, NULL, '2022-05-12 00:22:15', '2022-05-12 00:22:15'),
(54, 'Color', 'Red', 'Red_QbF6x0MGTo.webp', 'images/optionColors/2022-06-07_red', NULL, '2022-05-12 02:46:25', '2022-06-07 08:43:24'),
(55, 'Color', 'Silver', 'Silver_2iRsYbYz8r.webp', 'images/optionColors/2022-06-07_silver', NULL, '2022-05-12 02:55:03', '2022-06-07 08:41:11'),
(56, 'Color', 'Black', 'Black_xexWPptFnu.webp', 'images/optionColors/2022-06-07_black', NULL, '2022-05-12 02:55:45', '2022-06-07 08:41:53'),
(60, 'Color', 'Blue', 'Blue_WFjBido8BX.webp', 'images/optionColors/2022-06-07_blue', NULL, '2022-05-12 02:59:02', '2022-06-07 08:42:16'),
(58, 'Color', 'Pink', 'Pink_6mN7Llewmf.webp', 'images/optionColors/2022-06-07_pink', NULL, '2022-05-12 02:57:22', '2022-06-07 08:42:24'),
(59, 'Color', 'White', 'White_S8qlyezTYG.webp', 'images/optionColors/2022-06-24_white', NULL, '2022-05-12 02:58:02', '2022-06-24 00:31:19'),
(61, 'Color', 'Yellow', 'Yellow_xJcHp2IVi6.webp', 'images/optionColors/2022-06-07_yellow', NULL, '2022-05-12 02:59:32', '2022-06-07 08:42:41'),
(62, 'CPU', 'Intel Core i5-7200U', NULL, NULL, NULL, '2022-05-12 04:18:55', '2022-05-12 04:18:55'),
(63, 'CPU', 'Intel Core i5-8250U', NULL, NULL, NULL, '2022-05-12 04:19:49', '2022-05-12 04:19:49'),
(64, 'CPU', 'Intel Core i3-7100U', NULL, NULL, NULL, '2022-05-12 04:20:33', '2022-05-12 04:20:33'),
(65, 'CPU', 'Intel Core i7-7700HQ', NULL, NULL, NULL, '2022-05-12 04:21:09', '2022-05-12 04:21:09'),
(66, 'CPU', 'AMD Ryzen 5 1600X', NULL, NULL, NULL, '2022-05-12 04:22:08', '2022-05-12 04:22:08'),
(67, 'CPU', 'AMD Ryzen 5 2400G', NULL, NULL, NULL, '2022-05-12 04:22:34', '2022-05-12 04:22:34'),
(68, 'CPU', 'AMD Ryzen 3 2200G', NULL, NULL, NULL, '2022-05-12 04:22:54', '2022-05-12 04:22:54'),
(69, 'CPU', 'AMD Ryzen 5 2400G', NULL, NULL, NULL, '2022-05-12 04:23:31', '2022-05-12 04:23:31'),
(70, 'ROM', '512 GB', NULL, NULL, 3, '2022-05-12 07:27:51', '2022-05-12 07:27:51'),
(71, 'CPU', '2x 2.5 GHz Vortex, 4x 1.59 GHz Tempest', NULL, NULL, NULL, '2022-06-01 03:49:55', '2022-06-01 03:49:55');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `user_id`, `last_name`, `phone`, `total_price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'John', '2', 'Jim', '+998 44 444 44 44', '4140', 'pending', '2022-06-09 01:42:56', '2022-06-09 01:42:56'),
(2, 'Jim', '2', 'Cerry', '+998 33 333 33 33', '6300', 'pending', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(3, 'asdas', '3', 'asdasd', '+998 44 444 44 44', '1640', 'pending', '2022-06-13 05:31:30', '2022-06-13 05:31:30'),
(16, 'sder', '2', 'wer', '+998 32 423 42 34', '2605', 'pending', '2022-06-20 08:15:22', '2022-06-20 08:15:22');

-- --------------------------------------------------------

--
-- Table structure for table `order_options`
--

DROP TABLE IF EXISTS `order_options`;
CREATE TABLE IF NOT EXISTS `order_options` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_options`
--

INSERT INTO `order_options` (`id`, `order_product_id`, `option`, `value`, `photo`, `photo_path`, `created_at`, `updated_at`) VALUES
(10, '4', 'RAM', '15', 'SV2brjGEXF.webp', 'images/productImages/2022-06-02_imac-27', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(11, '4', 'ROM', '13', 'SV2brjGEXF.webp', 'images/productImages/2022-06-02_imac-27', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(12, '4', 'CPU', '21', 'SV2brjGEXF.webp', 'images/productImages/2022-06-02_imac-27', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(13, '5', 'CPU', '71', '1NQQ7VCrRM.webp', 'images/productImages/2022-06-02_ipad-mini-6', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(14, '5', 'RAM', '17', '1NQQ7VCrRM.webp', 'images/productImages/2022-06-02_ipad-mini-6', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(15, '5', 'Color', '54', '1NQQ7VCrRM.webp', 'images/productImages/2022-06-02_ipad-mini-6', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(16, '6', 'ROM', '256 GB', 'BcZNZbhSoW.webp', 'images/productImages/2022-06-09_xiaomi-redmi-note-11', '2022-06-13 05:31:30', '2022-06-13 05:31:30'),
(17, '6', 'RAM', '6 GB', 'BcZNZbhSoW.webp', 'images/productImages/2022-06-09_xiaomi-redmi-note-11', '2022-06-13 05:31:30', '2022-06-13 05:31:30'),
(18, '6', 'Color', 'Blue', 'BcZNZbhSoW.webp', 'images/productImages/2022-06-09_xiaomi-redmi-note-11', '2022-06-13 05:31:30', '2022-06-13 05:31:30'),
(19, '7', 'Color', 'Silver', 'cZlh0WAiZ9.webp', 'images/productImages/2022-06-09_xiaomi-mi-watch', '2022-06-13 05:31:30', '2022-06-13 05:31:30'),
(20, '8', 'CPU', 'Intel Core i7-7700HQ', 'u4wvCWL1k0.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-06-15 04:39:46', '2022-06-15 04:39:46'),
(21, '8', 'RAM', '8 GB', 'u4wvCWL1k0.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-06-15 04:39:46', '2022-06-15 04:39:46'),
(22, '8', 'ROM', '256 GB', 'u4wvCWL1k0.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-06-15 04:39:46', '2022-06-15 04:39:46'),
(23, '8', 'Color', 'Blue', 'u4wvCWL1k0.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-06-15 04:39:46', '2022-06-15 04:39:46'),
(24, '9', 'RAM', '6 GB', 'uKWNvDlwQ0-option_0.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-06-20 08:15:22', '2022-06-20 08:15:22'),
(25, '9', 'ROM', '128 GB', 'uKWNvDlwQ0-option_0.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-06-20 08:15:22', '2022-06-20 08:15:22'),
(26, '9', 'CPU', 'Intel Core i7-7700HQ', 'uKWNvDlwQ0-option_0.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-06-20 08:15:22', '2022-06-20 08:15:22'),
(27, '9', 'Color', 'Blue', 'uKWNvDlwQ0-option_0.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-06-20 08:15:22', '2022-06-20 08:15:22'),
(28, '10', 'Color', 'Pink', 'JKdvmYpQJn-option_0.webp', 'images/productImages/2022-06-02_iphone-11', '2022-06-20 08:15:22', '2022-06-20 08:15:22'),
(29, '10', 'ROM', '128 GB', 'JKdvmYpQJn-option_0.webp', 'images/productImages/2022-06-02_iphone-11', '2022-06-20 08:15:22', '2022-06-20 08:15:22'),
(30, '10', 'RAM', '6 GB', 'JKdvmYpQJn-option_0.webp', 'images/productImages/2022-06-02_iphone-11', '2022-06-20 08:15:22', '2022-06-20 08:15:22');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

DROP TABLE IF EXISTS `order_products`;
CREATE TABLE IF NOT EXISTS `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, '1', '89', '1', '2190', '2022-06-09 01:42:56', '2022-06-09 01:42:56'),
(2, '1', '97', '1', '640', '2022-06-09 01:42:56', '2022-06-09 01:42:56'),
(3, '1', '99', '1', '1310', '2022-06-09 01:42:56', '2022-06-09 01:42:56'),
(4, '2', '89', '2', '2190', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(5, '2', '97', '3', '640', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(6, '3', '104', '2', '800', '2022-06-13 05:31:30', '2022-06-13 05:31:30'),
(7, '3', '105', '1', '40', '2022-06-13 05:31:30', '2022-06-13 05:31:30'),
(8, '4', '88', '1', '1830', '2022-06-15 04:39:46', '2022-06-15 04:39:46'),
(9, '16', '88', '1', '1790', '2022-06-20 08:15:22', '2022-06-20 08:15:22'),
(10, '16', '83', '1', '815', '2022-06-20 08:15:22', '2022-06-20 08:15:22');

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `production_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_photo_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `price`, `quantity`, `production_date`, `status`, `main_photo`, `main_photo_path`, `created_at`, `updated_at`) VALUES
(89, 'iMac 27', 'imac-27-2051483668', 24, 2000, NULL, NULL, NULL, 'SV2brjGEXF.webp', 'images/productImages/2022-06-02_imac-27', '2022-05-31 02:25:22', '2022-06-13 09:12:04'),
(88, 'MacBook Pro 14-inch', 'macbook-pro-14-inch-1700429064', 24, 1600, NULL, NULL, NULL, 'u4wvCWL1k0.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-05-31 02:15:52', '2022-06-13 09:12:04'),
(87, 'Apple Studio Display', 'apple-studio-display-1955008004', 24, 1800, NULL, NULL, NULL, 'dagsEqEpMV.webp', 'images/productImages/2022-06-02_apple-studio-display', '2022-05-31 01:42:28', '2022-06-13 09:12:04'),
(85, 'iPhone 13 pro max', 'iphone-13-pro-max-1955514324', 22, 1200, NULL, NULL, NULL, '1Lqs1YUper.webp', 'images/productImages/2022-06-09_iphone-13-pro-max', '2022-05-30 09:05:47', '2022-06-13 09:12:04'),
(86, 'MacBook Pro 16-inch', 'macbook-pro-16-inch-662540088', 24, 1650, NULL, NULL, NULL, 'eoC57LtbsX.webp', 'images/productImages/2022-06-02_macbook-pro-16-inch', '2022-05-31 01:20:24', '2022-06-13 09:12:04'),
(83, 'iPhone 11', 'iphone-11-1774381494', 22, 750, NULL, NULL, NULL, 'Pfw3oX0eBl.webp', 'images/productImages/2022-06-02_iphone-11', '2022-05-30 07:37:41', '2022-06-13 09:12:04'),
(84, 'iPhone 12', 'iphone-12-1212354189', 22, 850, NULL, NULL, NULL, 'EpMLRNSfGq.webp', 'images/productImages/2022-06-02_iphone-12', '2022-05-30 08:15:48', '2022-06-13 09:12:04'),
(78, 'iWatch clear', 'iwatch-clear-372550294', 23, 30, NULL, NULL, NULL, 'D7ZaOaccVV.webp', 'images/productImages/2022-06-02_iwatch-clear', '2022-05-30 04:02:09', '2022-06-13 09:12:04'),
(79, 'apple watch vii2', 'apple-watch-vii2-1565751390', 23, 45, NULL, NULL, NULL, 'HhMajRM8O1.webp', 'images/productImages/2022-06-02_apple-watch-vii2', '2022-05-30 05:52:47', '2022-06-13 09:12:04'),
(80, 'iWatch 2 collaction', 'iwatch-2-collaction-1048827776', 23, 35, NULL, NULL, NULL, 'PhYGSvXwA0.webp', 'images/productImages/2022-06-02_iwatch-2-collaction', '2022-05-30 06:12:27', '2022-06-13 09:12:04'),
(81, 'iWatch 1', 'iwatch-1-189470231', 23, 40, NULL, NULL, NULL, 'vBhE7BbouU.webp', 'images/productImages/2022-06-02_iwatch-1', '2022-05-30 06:19:26', '2022-06-13 09:12:04'),
(82, 'iPhone X', 'iphone-x-1245647805', 22, 600, NULL, NULL, NULL, '68wTAkip8f.webp', 'images/productImages/2022-06-02_iphone-x', '2022-05-30 06:51:37', '2022-06-13 09:12:04'),
(90, 'APPLE IPAD 10.2-INCH', 'apple-ipad-102-inch-616553374', 25, 1300, NULL, NULL, NULL, '5W5bMlbAPw.webp', 'images/productImages/2022-05-31_apple-ipad-10.2-inch', '2022-05-31 05:12:38', '2022-06-13 09:12:04'),
(103, 'SAMSUNG GALAXY WATCH (SM-R815)', 'samsung-galaxy-watch-sm-r815-625248449', 26, 50, NULL, NULL, NULL, 'GZGzdkb42S.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-(sm-r815)', '2022-06-09 02:28:22', '2022-06-13 09:12:04'),
(93, 'Samsung Electronics Galaxy-Watch Active 2 44MM', 'samsung-electronics-galaxy-watch-active-2-44mm-1278486724', 26, 50, NULL, NULL, NULL, 'rGht1uyenL.webp', 'images/productImages/2022-05-31_samsung-electronics-galaxy-watch-active-2-44mm', '2022-05-31 06:24:26', '2022-06-13 09:12:04'),
(104, 'Xiaomi Redmi Note 11', 'xiaomi-redmi-note-11-736974656', 27, 700, NULL, NULL, NULL, 'BcZNZbhSoW.webp', 'images/productImages/2022-06-09_xiaomi-redmi-note-11', '2022-06-09 02:47:08', '2022-06-13 09:12:04'),
(95, 'Xiaomi Mi 11 Lite 5G', 'xiaomi-mi-11-lite-5g-1511854048', 27, 850, NULL, NULL, NULL, '2kevjbVW56.webp', 'images/productImages/2022-05-31_xiaomi-mi-11-lite-5g', '2022-05-31 06:51:14', '2022-06-13 09:12:04'),
(96, 'XIAOMI MI WATCH LITE', 'xiaomi-mi-watch-lite-156262941', 28, 50, NULL, NULL, NULL, 'XtZbM9CShZ.webp', 'images/productImages/2022-05-31_xiaomi-mi-watch-lite', '2022-05-31 09:05:21', '2022-06-13 09:12:04'),
(97, 'iPad mini 6', 'ipad-mini-6-504607425', 25, 600, NULL, NULL, NULL, '1NQQ7VCrRM.webp', 'images/productImages/2022-06-02_ipad-mini-6', '2022-06-01 04:37:03', '2022-06-13 09:12:04'),
(99, 'galaxy s21', 'galaxy-s21-1377147883', 29, 1200, NULL, NULL, NULL, 'QXBc3aGcI0.webp', 'images/productImages/2022-06-06_galaxy-s21', '2022-06-06 02:08:44', '2022-06-13 09:12:04'),
(100, 'galaxy A51', 'galaxy-a51-126152005', 29, 200, NULL, NULL, NULL, 'pkMPNslG8x.webp', 'images/productImages/2022-06-06_galaxy-a51', '2022-06-06 02:20:20', '2022-06-13 09:12:04'),
(102, 'Samsung Galaxy Watch 4', 'samsung-galaxy-watch-4-1724051700', 26, 55, NULL, NULL, NULL, 'AITSkNsB6H.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-4', '2022-06-09 02:07:45', '2022-06-13 09:12:04'),
(105, 'XIAOMI MI WATCH', 'xiaomi-mi-watch-1180130982', 28, 35, NULL, NULL, NULL, 'cZlh0WAiZ9.webp', 'images/productImages/2022-06-09_xiaomi-mi-watch', '2022-06-09 03:05:26', '2022-06-13 09:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `product_options`
--

DROP TABLE IF EXISTS `product_options`;
CREATE TABLE IF NOT EXISTS `product_options` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=290 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_options`
--

INSERT INTO `product_options` (`id`, `product_id`, `option_id`, `price`, `created_at`, `updated_at`) VALUES
(182, '86', '63', '100', '2022-05-31 01:20:25', '2022-05-31 01:20:25'),
(181, '86', '21', '200', '2022-05-31 01:20:25', '2022-05-31 01:20:25'),
(180, '86', '70', '120', '2022-05-31 01:20:25', '2022-05-31 01:20:25'),
(179, '86', '12', '80', '2022-05-31 01:20:25', '2022-05-31 01:20:25'),
(178, '86', '14', '150', '2022-05-31 01:20:25', '2022-05-31 01:20:25'),
(177, '86', '15', '60', '2022-05-31 01:20:25', '2022-05-31 01:20:25'),
(176, '86', '16', '40', '2022-05-31 01:20:25', '2022-05-31 01:20:25'),
(175, '85', '55', '15', '2022-05-30 09:05:47', '2022-05-30 09:05:47'),
(174, '85', '54', '10', '2022-05-30 09:05:47', '2022-05-30 09:05:47'),
(173, '85', '12', '45', '2022-05-30 09:05:47', '2022-05-30 09:05:47'),
(172, '85', '13', '30', '2022-05-30 09:05:47', '2022-05-30 09:05:47'),
(171, '85', '15', '30', '2022-05-30 09:05:47', '2022-05-30 09:05:47'),
(170, '85', '16', '20', '2022-05-30 09:05:47', '2022-05-30 09:05:47'),
(169, '85', '17', '10', '2022-05-30 09:05:47', '2022-05-30 09:05:47'),
(168, '84', '55', '15', '2022-05-30 08:15:48', '2022-05-30 08:15:48'),
(167, '84', '61', '10', '2022-05-30 08:15:48', '2022-05-30 08:15:48'),
(166, '84', '12', '45', '2022-05-30 08:15:48', '2022-05-30 08:15:48'),
(165, '84', '13', '30', '2022-05-30 08:15:48', '2022-05-30 08:15:48'),
(164, '84', '15', '25', '2022-05-30 08:15:48', '2022-05-30 08:15:48'),
(163, '84', '16', '15', '2022-05-30 08:15:48', '2022-05-30 08:15:48'),
(162, '84', '17', '10', '2022-05-30 08:15:48', '2022-05-30 08:15:48'),
(161, '83', '59', '2', '2022-05-30 07:37:42', '2022-05-30 07:37:42'),
(160, '83', '58', '10', '2022-05-30 07:37:42', '2022-05-30 07:37:42'),
(159, '83', '12', '55', '2022-05-30 07:37:42', '2022-05-30 07:37:42'),
(158, '83', '13', '30', '2022-05-30 07:37:42', '2022-05-30 07:37:42'),
(157, '83', '15', '40', '2022-05-30 07:37:42', '2022-05-30 07:37:42'),
(156, '83', '16', '25', '2022-05-30 07:37:42', '2022-05-30 07:37:42'),
(155, '83', '17', '15', '2022-05-30 07:37:42', '2022-05-30 07:37:42'),
(154, '82', '56', '10', '2022-05-30 06:51:38', '2022-05-30 06:51:38'),
(153, '82', '55', '5', '2022-05-30 06:51:38', '2022-05-30 06:51:38'),
(152, '82', '54', '5', '2022-05-30 06:51:38', '2022-05-30 06:51:38'),
(151, '82', '12', '60', '2022-05-30 06:51:38', '2022-05-30 06:51:38'),
(150, '82', '13', '40', '2022-05-30 06:51:38', '2022-05-30 06:51:38'),
(149, '82', '15', '25', '2022-05-30 06:51:38', '2022-05-30 06:51:38'),
(148, '82', '16', '15', '2022-05-30 06:51:38', '2022-05-30 06:51:38'),
(147, '82', '17', '10', '2022-05-30 06:51:38', '2022-05-30 06:51:38'),
(146, '81', '59', '4', '2022-05-30 06:19:26', '2022-06-02 01:52:06'),
(145, '81', '58', '3', '2022-05-30 06:19:26', '2022-05-30 06:19:26'),
(144, '81', '61', '2', '2022-05-30 06:19:26', '2022-06-09 06:36:16'),
(143, '81', '56', '4', '2022-05-30 06:19:26', '2022-06-02 01:52:08'),
(142, '80', '55', '3', '2022-05-30 06:12:27', '2022-05-30 06:12:27'),
(141, '80', '54', '2', '2022-05-30 06:12:27', '2022-05-30 06:12:27'),
(140, '80', '61', '3', '2022-05-30 06:12:27', '2022-05-30 06:12:27'),
(139, '79', '59', '2', '2022-05-30 05:52:47', '2022-05-30 05:52:47'),
(138, '79', '58', '3', '2022-05-30 05:52:47', '2022-05-30 05:52:47'),
(137, '79', '60', '3', '2022-05-30 05:52:47', '2022-05-30 05:52:47'),
(136, '79', '56', '2', '2022-05-30 05:52:47', '2022-05-30 05:52:47'),
(135, '78', '55', '2', '2022-05-30 04:02:09', '2022-05-30 04:02:09'),
(134, '78', '54', '2', '2022-05-30 04:02:09', '2022-05-30 04:02:09'),
(133, '75', '54', '5', '2022-05-30 03:41:50', '2022-05-30 03:41:50'),
(132, '71', '55', NULL, '2022-05-30 02:40:20', '2022-05-30 02:40:20'),
(131, '71', '12', '45', '2022-05-30 02:40:20', '2022-05-30 02:40:20'),
(130, '71', '13', '30', '2022-05-30 02:40:20', '2022-05-30 02:40:20'),
(129, '71', '15', '45', '2022-05-30 02:40:20', '2022-05-30 02:40:20'),
(128, '71', '16', '30', '2022-05-30 02:40:20', '2022-05-30 02:40:20'),
(127, '71', '17', '20', '2022-05-30 02:40:20', '2022-05-30 02:40:20'),
(126, '70', '54', '10', '2022-05-30 02:14:35', '2022-05-30 02:14:35'),
(125, '70', '12', '45', '2022-05-30 02:14:35', '2022-05-30 02:14:35'),
(124, '70', '13', '30', '2022-05-30 02:14:35', '2022-05-30 02:14:35'),
(123, '70', '15', '45', '2022-05-30 02:14:35', '2022-05-30 02:14:35'),
(122, '70', '16', '30', '2022-05-30 02:14:35', '2022-05-30 02:14:35'),
(121, '70', '17', '20', '2022-05-30 02:14:35', '2022-05-30 02:14:35'),
(120, '69', '58', '10', '2022-05-30 02:07:14', '2022-05-30 02:07:14'),
(119, '68', '60', '6', '2022-05-30 02:04:58', '2022-05-30 02:04:58'),
(118, '67', '56', '7', '2022-05-30 02:00:50', '2022-05-30 02:00:50'),
(117, '66', '55', '5', '2022-05-30 01:58:29', '2022-05-30 01:58:29'),
(116, '65', '54', NULL, '2022-05-30 01:53:30', '2022-05-30 01:53:30'),
(115, '64', '54', '5', '2022-05-30 01:52:06', '2022-05-30 01:52:06'),
(114, '63', '14', '14', '2022-05-30 01:48:01', '2022-05-30 01:48:01'),
(113, '63', '17', '12', '2022-05-30 01:48:01', '2022-05-30 01:48:01'),
(183, '86', '22', '60', '2022-05-31 01:20:25', '2022-05-31 01:20:25'),
(184, '86', '65', '120', '2022-05-31 01:20:25', '2022-05-31 01:20:25'),
(185, '86', '55', '30', '2022-05-31 01:20:25', '2022-05-31 01:20:25'),
(186, '86', '54', '40', '2022-05-31 01:20:25', '2022-05-31 01:20:25'),
(187, '86', '58', NULL, '2022-05-31 01:20:25', '2022-05-31 01:20:25'),
(188, '87', '15', '80', '2022-05-31 01:42:29', '2022-05-31 01:42:29'),
(189, '87', '14', '150', '2022-05-31 01:42:29', '2022-05-31 01:42:29'),
(190, '87', '13', '40', '2022-05-31 01:42:29', '2022-05-31 01:42:29'),
(191, '87', '12', '70', '2022-05-31 01:42:29', '2022-05-31 01:42:29'),
(192, '87', '70', '150', '2022-05-31 01:42:29', '2022-05-31 01:42:29'),
(193, '87', '21', '120', '2022-05-31 01:42:29', '2022-05-31 01:42:29'),
(194, '87', '22', '80', '2022-05-31 01:42:29', '2022-05-31 01:42:29'),
(195, '87', '63', '85', '2022-05-31 01:42:29', '2022-05-31 01:42:29'),
(196, '87', '65', '110', '2022-05-31 01:42:29', '2022-05-31 01:42:29'),
(197, '87', '55', '20', '2022-05-31 01:42:29', '2022-05-31 01:42:29'),
(198, '88', '16', '40', '2022-05-31 02:15:54', '2022-05-31 02:15:54'),
(199, '88', '15', '60', '2022-05-31 02:15:54', '2022-05-31 02:15:54'),
(200, '88', '14', '100', '2022-05-31 02:15:54', '2022-05-31 02:15:54'),
(201, '88', '13', '30', '2022-05-31 02:15:54', '2022-05-31 02:15:54'),
(202, '88', '12', '50', '2022-05-31 02:15:54', '2022-05-31 02:15:54'),
(203, '88', '70', '80', '2022-05-31 02:15:54', '2022-05-31 02:15:54'),
(204, '88', '65', '100', '2022-05-31 02:15:54', '2022-05-31 02:15:54'),
(205, '88', '62', '60', '2022-05-31 02:15:54', '2022-05-31 02:15:54'),
(206, '88', '22', '40', '2022-05-31 02:15:54', '2022-05-31 02:15:54'),
(207, '88', '55', '15', '2022-05-31 02:15:54', '2022-05-31 02:15:54'),
(208, '88', '60', '20', '2022-05-31 02:15:54', '2022-05-31 02:15:54'),
(209, '89', '15', '80', '2022-05-31 02:25:23', '2022-05-31 02:25:23'),
(210, '89', '14', '150', '2022-05-31 02:25:23', '2022-05-31 02:25:23'),
(211, '89', '13', '60', '2022-05-31 02:25:23', '2022-05-31 02:25:23'),
(212, '89', '12', '110', '2022-05-31 02:25:23', '2022-05-31 02:25:23'),
(213, '89', '70', '150', '2022-05-31 02:25:23', '2022-05-31 02:25:23'),
(214, '89', '21', '50', '2022-05-31 02:25:23', '2022-05-31 02:25:23'),
(215, '89', '22', '30', '2022-05-31 02:25:23', '2022-05-31 02:25:23'),
(216, '89', '62', '20', '2022-05-31 02:25:23', '2022-05-31 02:25:23'),
(217, '89', '65', '80', '2022-05-31 02:25:23', '2022-05-31 02:25:23'),
(218, '90', '16', '30', '2022-05-31 05:12:38', '2022-05-31 05:12:38'),
(219, '90', '15', '50', '2022-05-31 05:12:38', '2022-05-31 05:12:38'),
(220, '90', '13', '30', '2022-05-31 05:12:38', '2022-05-31 05:12:38'),
(221, '90', '12', '50', '2022-05-31 05:12:38', '2022-05-31 05:12:38'),
(222, '90', '58', '15', '2022-05-31 05:12:38', '2022-05-31 05:12:38'),
(223, '90', '55', '20', '2022-05-31 05:12:38', '2022-05-31 05:12:38'),
(284, '104', '12', '65', '2022-06-09 02:47:09', '2022-06-09 02:47:09'),
(283, '104', '13', '40', '2022-06-09 02:47:09', '2022-06-09 02:47:09'),
(282, '104', '16', '30', '2022-06-09 02:47:09', '2022-06-09 02:47:09'),
(281, '104', '17', '20', '2022-06-09 02:47:09', '2022-06-09 02:47:09'),
(280, '103', '56', '3', '2022-06-09 02:28:24', '2022-06-09 02:29:10'),
(279, '103', '58', '5', '2022-06-09 02:28:23', '2022-06-09 02:28:23'),
(231, '93', '55', '10', '2022-05-31 06:24:27', '2022-05-31 06:24:27'),
(232, '93', '56', '5', '2022-05-31 06:24:27', '2022-05-31 06:24:27'),
(233, '93', '58', '10', '2022-05-31 06:24:27', '2022-05-31 06:24:27'),
(289, '105', '55', '5', '2022-06-09 03:05:28', '2022-06-09 03:05:28'),
(288, '105', '54', '3', '2022-06-09 03:05:27', '2022-06-09 03:05:27'),
(287, '104', '60', '5', '2022-06-09 02:47:10', '2022-06-09 02:47:10'),
(286, '104', '58', '5', '2022-06-09 02:47:09', '2022-06-09 02:47:09'),
(285, '104', '70', '80', '2022-06-09 02:47:09', '2022-06-09 02:47:09'),
(241, '94', '56', '20', '2022-05-31 06:47:01', '2022-05-31 06:47:01'),
(242, '95', '17', '20', '2022-05-31 06:51:15', '2022-05-31 06:51:15'),
(243, '95', '16', '30', '2022-05-31 06:51:15', '2022-05-31 06:51:15'),
(244, '95', '15', '45', '2022-05-31 06:51:15', '2022-05-31 06:51:15'),
(245, '95', '13', '50', '2022-05-31 06:51:15', '2022-05-31 06:51:15'),
(246, '95', '12', '80', '2022-05-31 06:51:15', '2022-05-31 06:51:15'),
(247, '95', '70', '120', '2022-05-31 06:51:15', '2022-05-31 06:51:15'),
(248, '95', '56', '15', '2022-05-31 06:51:15', '2022-05-31 06:51:15'),
(249, '95', '58', '10', '2022-05-31 06:51:15', '2022-05-31 06:51:15'),
(250, '96', '56', '10', '2022-05-31 09:05:22', '2022-05-31 09:05:22'),
(251, '96', '60', '15', '2022-05-31 09:05:22', '2022-05-31 09:05:22'),
(252, '96', '59', '10', '2022-05-31 09:05:22', '2022-05-31 09:05:22'),
(253, '96', '61', '10', '2022-05-31 09:05:22', '2022-05-31 09:05:22'),
(254, '97', '71', '10', '2022-06-01 04:37:03', '2022-06-01 04:37:03'),
(255, '97', '17', '20', '2022-06-01 04:37:03', '2022-06-01 04:37:03'),
(256, '97', '16', '35', '2022-06-01 04:37:03', '2022-06-01 04:37:03'),
(257, '97', '54', '10', '2022-06-01 04:37:03', '2022-06-01 04:37:03'),
(258, '97', '55', '15', '2022-06-01 04:37:03', '2022-06-01 04:37:03'),
(262, '99', '17', '20', '2022-06-06 02:08:44', '2022-06-06 02:08:44'),
(263, '99', '16', '30', '2022-06-06 02:08:44', '2022-06-06 02:08:44'),
(264, '99', '15', '50', '2022-06-06 02:08:44', '2022-06-06 02:08:44'),
(265, '99', '13', '80', '2022-06-06 02:08:44', '2022-06-06 02:08:44'),
(266, '99', '12', '100', '2022-06-06 02:08:44', '2022-06-06 02:08:44'),
(267, '99', '70', '150', '2022-06-06 02:08:44', '2022-06-06 02:08:44'),
(268, '99', '55', '10', '2022-06-06 02:08:44', '2022-06-06 02:08:44'),
(269, '99', '60', '15', '2022-06-06 02:08:45', '2022-06-06 02:08:45'),
(270, '100', '17', '20', '2022-06-06 02:20:20', '2022-06-06 02:20:20'),
(271, '100', '16', '30', '2022-06-06 02:20:20', '2022-06-06 02:20:20'),
(272, '100', '13', '30', '2022-06-06 02:20:20', '2022-06-06 02:20:20'),
(273, '100', '12', '50', '2022-06-06 02:20:20', '2022-06-06 02:20:20'),
(274, '100', '56', '5', '2022-06-06 02:20:20', '2022-06-06 02:20:20'),
(277, '102', '55', '5', '2022-06-09 02:07:46', '2022-06-09 02:07:46'),
(278, '102', '60', '3', '2022-06-09 02:07:47', '2022-06-09 02:07:47');

-- --------------------------------------------------------

--
-- Table structure for table `product_photos`
--

DROP TABLE IF EXISTS `product_photos`;
CREATE TABLE IF NOT EXISTS `product_photos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_option_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=512 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_photos`
--

INSERT INTO `product_photos` (`id`, `product_id`, `product_option_id`, `photo`, `photo_path`, `created_at`, `updated_at`) VALUES
(276, NULL, '139', 'ELCzm5lJbI-option_1.webp', 'images/productImages/2022-06-02_apple-watch-vii2', '2022-06-02 02:21:57', '2022-06-02 02:21:57'),
(275, NULL, '139', 'ELCzm5lJbI-option_0.webp', 'images/productImages/2022-06-02_apple-watch-vii2', '2022-06-02 02:21:57', '2022-06-02 02:21:57'),
(291, NULL, '135', '3dl0ZsNecW-option_0.webp', 'images/productImages/2022-06-02_iwatch-clear', '2022-06-02 02:26:27', '2022-06-02 02:26:27'),
(288, '78', NULL, 'F0YDQC4J5y_1.webp', 'images/productImages/2022-06-02_iwatch-clear', '2022-06-02 02:26:27', '2022-06-02 02:26:27'),
(289, '78', NULL, 'F0YDQC4J5y_2.webp', 'images/productImages/2022-06-02_iwatch-clear', '2022-06-02 02:26:27', '2022-06-02 02:26:27'),
(290, '78', NULL, 'F0YDQC4J5y_3.webp', 'images/productImages/2022-06-02_iwatch-clear', '2022-06-02 02:26:27', '2022-06-02 02:26:27'),
(108, NULL, '133', 'E8gAkDuy1A-option_0.jpg', '/images/productImages/2022-05-30_iwatch', '2022-05-30 03:41:50', '2022-05-30 03:41:50'),
(107, '75', NULL, 'E8gAkDuy1A_2.webp', 'images/productImages/2022-05-30_iwatch', '2022-05-30 03:41:50', '2022-05-30 03:41:50'),
(106, '75', NULL, 'E8gAkDuy1A_1.webp', 'images/productImages/2022-05-30_iwatch', '2022-05-30 03:41:50', '2022-05-30 03:41:50'),
(103, '71', NULL, '1KPDblaFYq_1.webp', 'images/productImages/2022-05-30_iphone-11/2022-05-30_iphone-11', '2022-05-30 02:40:20', '2022-05-30 02:40:20'),
(102, NULL, '126', 'cFmsOD1mAT-option_0.jpg', '/images/productImages/2022-05-30_iphone-x', '2022-05-30 02:14:35', '2022-05-30 02:14:35'),
(324, NULL, '161', '7BEL7eZ9Sd-option_0.webp', 'images/productImages/2022-06-02_iphone-11', '2022-06-02 03:56:12', '2022-06-02 03:56:12'),
(101, '70', NULL, 'cFmsOD1mAT_2.webp', 'images/productImages/2022-05-30_iphone-x', '2022-05-30 02:14:35', '2022-05-30 02:14:35'),
(100, '70', NULL, 'cFmsOD1mAT_1.webp', 'images/productImages/2022-05-30_iphone-x/2022-05-30_iphone-x', '2022-05-30 02:14:35', '2022-05-30 02:14:35'),
(99, NULL, '120', 'fBJOgqrIok-option_0.jpg', '/images/productImages/2022-05-30_apple-watch', '2022-05-30 02:07:14', '2022-05-30 02:07:14'),
(98, '69', NULL, 'fBJOgqrIok_2.webp', 'images/productImages/2022-05-30_apple-watch/2022-05-30_apple-watch', '2022-05-30 02:07:14', '2022-05-30 02:07:14'),
(97, '69', NULL, 'fBJOgqrIok_1.webp', 'images/productImages/2022-05-30_apple-watch/2022-05-30_apple-watch', '2022-05-30 02:07:13', '2022-05-30 02:07:13'),
(96, NULL, '119', 'd09aUVOUWN-option_0.jpg', '/images/productImages/2022-05-30_apple-watch', '2022-05-30 02:04:58', '2022-05-30 02:04:58'),
(95, '68', NULL, 'd09aUVOUWN_3.webp', 'images/productImages/2022-05-30_apple-watch', '2022-05-30 02:04:58', '2022-05-30 02:04:58'),
(94, '68', NULL, 'd09aUVOUWN_2.webp', 'images/productImages/2022-05-30_apple-watch', '2022-05-30 02:04:58', '2022-05-30 02:04:58'),
(93, '68', NULL, 'd09aUVOUWN_1.webp', 'images/productImages/2022-05-30_apple-watch', '2022-05-30 02:04:58', '2022-05-30 02:04:58'),
(323, '83', NULL, 'vqVYSu3BUC_3.webp', 'images/productImages/2022-06-02_iphone-11', '2022-06-02 03:56:12', '2022-06-02 03:56:12'),
(92, NULL, '118', '9iq6rYfGN3-option_0.jpg', '/images/productImages/2022-05-30_apple-watch', '2022-05-30 02:00:50', '2022-05-30 02:00:50'),
(91, '67', NULL, '9iq6rYfGN3_2.webp', 'images/productImages/2022-05-30_apple-watch', '2022-05-30 02:00:50', '2022-05-30 02:00:50'),
(90, '67', NULL, '9iq6rYfGN3_1.webp', 'images/productImages/2022-05-30_apple-watch/2022-05-30_apple-watch', '2022-05-30 02:00:50', '2022-05-30 02:00:50'),
(89, NULL, '117', 'hrFT3yshKV-option_0.jpg', '/images/productImages/2022-05-30_apple-watch', '2022-05-30 01:58:29', '2022-05-30 01:58:29'),
(88, '66', NULL, 'hrFT3yshKV_2.webp', 'images/productImages/2022-05-30_apple-watch/2022-05-30_apple-watch', '2022-05-30 01:58:29', '2022-05-30 01:58:29'),
(87, '66', NULL, 'hrFT3yshKV_1.webp', 'images/productImages/2022-05-30_apple-watch/2022-05-30_apple-watch', '2022-05-30 01:58:29', '2022-05-30 01:58:29'),
(86, NULL, '116', 'TMn56xlQiG-option_0.jpg', '/images/productImages/2022-05-30_apple-watch-wii2', '2022-05-30 01:53:30', '2022-05-30 01:53:30'),
(85, '65', NULL, 'TMn56xlQiG_2.webp', 'images/productImages/2022-05-30_apple-watch-wii2/2022-05-30_apple-watch-wii2', '2022-05-30 01:53:30', '2022-05-30 01:53:30'),
(84, '65', NULL, 'TMn56xlQiG_1.webp', 'images/productImages/2022-05-30_apple-watch-wii2/2022-05-30_apple-watch-wii2', '2022-05-30 01:53:30', '2022-05-30 01:53:30'),
(83, '64', NULL, 'X1kjHMETt6_2.webp', 'images/productImages/2022-05-30_apple-watch-wii2/2022-05-30_apple-watch-wii2', '2022-05-30 01:52:06', '2022-05-30 01:52:06'),
(82, '64', NULL, 'X1kjHMETt6_1.webp', 'images/productImages/2022-05-30_apple-watch-wii2/2022-05-30_apple-watch-wii2', '2022-05-30 01:52:06', '2022-05-30 01:52:06'),
(271, '79', NULL, 'gjQccgSRSX_1.webp', 'images/productImages/2022-06-02_apple-watch-vii2', '2022-06-02 02:21:57', '2022-06-02 02:21:57'),
(272, '79', NULL, 'gjQccgSRSX_2.webp', 'images/productImages/2022-06-02_apple-watch-vii2', '2022-06-02 02:21:57', '2022-06-02 02:21:57'),
(273, '79', NULL, 'gjQccgSRSX_3.webp', 'images/productImages/2022-06-02_apple-watch-vii2', '2022-06-02 02:21:57', '2022-06-02 02:21:57'),
(274, '79', NULL, 'gjQccgSRSX_4.webp', 'images/productImages/2022-06-02_apple-watch-vii2', '2022-06-02 02:21:57', '2022-06-02 02:21:57'),
(260, NULL, '142', 'QfBAidxJK4-option_0.webp', 'images/productImages/2022-06-02_iwatch-2-collaction', '2022-06-02 02:15:48', '2022-06-02 02:15:48'),
(257, '80', NULL, 'GZLSSCqF7Z_1.webp', 'images/productImages/2022-06-02_iwatch-2-collaction', '2022-06-02 02:15:47', '2022-06-02 02:15:47'),
(258, '80', NULL, 'GZLSSCqF7Z_2.webp', 'images/productImages/2022-06-02_iwatch-2-collaction', '2022-06-02 02:15:48', '2022-06-02 02:15:48'),
(259, '80', NULL, 'GZLSSCqF7Z_3.webp', 'images/productImages/2022-06-02_iwatch-2-collaction', '2022-06-02 02:15:48', '2022-06-02 02:15:48'),
(251, NULL, '144', 'ySPsfy4rh6-option_0.webp', 'images/productImages/2022-06-02_iwatch-1', '2022-06-02 02:07:52', '2022-06-02 02:07:52'),
(250, NULL, '145', '1rUQAAW5Lu-option_2.webp', 'images/productImages/2022-06-02_iwatch-1', '2022-06-02 02:07:51', '2022-06-02 02:07:51'),
(249, NULL, '145', '1rUQAAW5Lu-option_1.webp', 'images/productImages/2022-06-02_iwatch-1', '2022-06-02 02:07:51', '2022-06-02 02:07:51'),
(248, NULL, '145', '1rUQAAW5Lu-option_0.webp', 'images/productImages/2022-06-02_iwatch-1', '2022-06-02 02:07:51', '2022-06-02 02:07:51'),
(300, NULL, '154', 'ocFzHmBr8P-option_0.webp', 'images/productImages/2022-06-02_iphone-x', '2022-06-02 03:48:35', '2022-06-02 03:48:35'),
(297, '82', NULL, 'LGcpFYU2eX_1.webp', 'images/productImages/2022-06-02_iphone-x', '2022-06-02 03:48:35', '2022-06-02 03:48:35'),
(298, '82', NULL, 'LGcpFYU2eX_2.webp', 'images/productImages/2022-06-02_iphone-x', '2022-06-02 03:48:35', '2022-06-02 03:48:35'),
(299, '82', NULL, 'LGcpFYU2eX_3.webp', 'images/productImages/2022-06-02_iphone-x', '2022-06-02 03:48:35', '2022-06-02 03:48:35'),
(321, '83', NULL, 'vqVYSu3BUC_1.webp', 'images/productImages/2022-06-02_iphone-11', '2022-06-02 03:56:11', '2022-06-02 03:56:11'),
(322, '83', NULL, 'vqVYSu3BUC_2.webp', 'images/productImages/2022-06-02_iphone-11', '2022-06-02 03:56:11', '2022-06-02 03:56:11'),
(313, NULL, '168', 'gU9mxsUDvK-option_0.webp', 'images/productImages/2022-06-02_iphone-12', '2022-06-02 03:52:52', '2022-06-02 03:52:52'),
(312, '84', NULL, 'OBBBDWb1sN_3.webp', 'images/productImages/2022-06-02_iphone-12', '2022-06-02 03:52:52', '2022-06-02 03:52:52'),
(310, '84', NULL, 'OBBBDWb1sN_1.webp', 'images/productImages/2022-06-02_iphone-12', '2022-06-02 03:52:52', '2022-06-02 03:52:52'),
(311, '84', NULL, 'OBBBDWb1sN_2.webp', 'images/productImages/2022-06-02_iphone-12', '2022-06-02 03:52:52', '2022-06-02 03:52:52'),
(332, '85', NULL, 'J8OCBo2ZcD_3.webp', 'images/productImages/2022-06-02_iphone-13-pro-max', '2022-06-02 04:00:07', '2022-06-02 04:00:07'),
(330, '85', NULL, 'J8OCBo2ZcD_1.webp', 'images/productImages/2022-06-02_iphone-13-pro-max', '2022-06-02 04:00:06', '2022-06-02 04:00:06'),
(331, '85', NULL, 'J8OCBo2ZcD_2.webp', 'images/productImages/2022-06-02_iphone-13-pro-max', '2022-06-02 04:00:07', '2022-06-02 04:00:07'),
(347, NULL, '185', '0CIqQHUEkR-option_1.webp', 'images/productImages/2022-06-02_macbook-pro-16-inch', '2022-06-02 04:05:57', '2022-06-02 04:05:57'),
(346, NULL, '185', '0CIqQHUEkR-option_0.webp', 'images/productImages/2022-06-02_macbook-pro-16-inch', '2022-06-02 04:05:56', '2022-06-02 04:05:56'),
(345, '86', NULL, 'NTHGHNVvv2_4.webp', 'images/productImages/2022-06-02_macbook-pro-16-inch', '2022-06-02 04:05:56', '2022-06-02 04:05:56'),
(344, '86', NULL, 'NTHGHNVvv2_3.webp', 'images/productImages/2022-06-02_macbook-pro-16-inch', '2022-06-02 04:05:56', '2022-06-02 04:05:56'),
(343, '86', NULL, 'NTHGHNVvv2_2.webp', 'images/productImages/2022-06-02_macbook-pro-16-inch', '2022-06-02 04:05:56', '2022-06-02 04:05:56'),
(342, '86', NULL, 'NTHGHNVvv2_1.webp', 'images/productImages/2022-06-02_macbook-pro-16-inch', '2022-06-02 04:05:56', '2022-06-02 04:05:56'),
(360, '87', NULL, 'eOd2KCnBCA_3.webp', 'images/productImages/2022-06-02_apple-studio-display', '2022-06-02 04:08:05', '2022-06-02 04:08:05'),
(359, '87', NULL, 'eOd2KCnBCA_2.webp', 'images/productImages/2022-06-02_apple-studio-display', '2022-06-02 04:08:05', '2022-06-02 04:08:05'),
(358, '87', NULL, 'eOd2KCnBCA_1.webp', 'images/productImages/2022-06-02_apple-studio-display', '2022-06-02 04:08:05', '2022-06-02 04:08:05'),
(370, NULL, '207', 'nT5thxEiP5-option_1.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-06-02 04:12:35', '2022-06-02 04:12:35'),
(369, NULL, '207', 'nT5thxEiP5-option_0.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-06-02 04:12:35', '2022-06-02 04:12:35'),
(368, '88', NULL, 'xYvECfJcq1_3.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-06-02 04:12:34', '2022-06-02 04:12:34'),
(367, '88', NULL, 'xYvECfJcq1_2.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-06-02 04:12:34', '2022-06-02 04:12:34'),
(366, '88', NULL, 'xYvECfJcq1_1.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-06-02 04:12:34', '2022-06-02 04:12:34'),
(379, '89', NULL, 'vDGhhUwPNv_2.webp', 'images/productImages/2022-06-02_imac-27', '2022-06-02 04:13:49', '2022-06-02 04:13:49'),
(378, '89', NULL, 'vDGhhUwPNv_1.webp', 'images/productImages/2022-06-02_imac-27', '2022-06-02 04:13:49', '2022-06-02 04:13:49'),
(168, '90', NULL, '5W5bMlbAPw_1.webp', 'images/productImages/2022-05-31_apple-ipad-10.2-inch', '2022-05-31 05:12:38', '2022-05-31 05:12:38'),
(169, '90', NULL, '5W5bMlbAPw_2.webp', 'images/productImages/2022-05-31_apple-ipad-10.2-inch', '2022-05-31 05:12:38', '2022-05-31 05:12:38'),
(170, '90', NULL, '5W5bMlbAPw_3.webp', 'images/productImages/2022-05-31_apple-ipad-10.2-inch', '2022-05-31 05:12:38', '2022-05-31 05:12:38'),
(417, NULL, '222', 'Mv4GVp2r6f-option_1.webp', 'images/productImages/2022-06-02_apple-ipad-10.2-inch', '2022-06-02 04:41:23', '2022-06-02 04:41:23'),
(416, NULL, '222', 'Mv4GVp2r6f-option_0.webp', 'images/productImages/2022-06-02_apple-ipad-10.2-inch', '2022-06-02 04:41:23', '2022-06-02 04:41:23'),
(502, NULL, '249', 'V45Cac6pdf-option_2.webp', 'images/productImages/2022-06-09_xiaomi-mi-11-lite-5g', '2022-06-09 06:29:27', '2022-06-09 06:29:27'),
(456, '103', NULL, 'GZGzdkb42S_3.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-(sm-r815)', '2022-06-09 02:28:23', '2022-06-09 02:28:23'),
(455, '103', NULL, 'GZGzdkb42S_2.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-(sm-r815)', '2022-06-09 02:28:23', '2022-06-09 02:28:23'),
(454, '103', NULL, 'GZGzdkb42S_1.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-(sm-r815)', '2022-06-09 02:28:22', '2022-06-09 02:28:22'),
(182, '93', NULL, 'rGht1uyenL_1.webp', 'images/productImages/2022-05-31_samsung-electronics-galaxy-watch-active-2-44mm', '2022-05-31 06:24:26', '2022-05-31 06:24:26'),
(183, '93', NULL, 'rGht1uyenL_2.webp', 'images/productImages/2022-05-31_samsung-electronics-galaxy-watch-active-2-44mm', '2022-05-31 06:24:26', '2022-05-31 06:24:26'),
(184, '93', NULL, 'rGht1uyenL_3.webp', 'images/productImages/2022-05-31_samsung-electronics-galaxy-watch-active-2-44mm', '2022-05-31 06:24:27', '2022-05-31 06:24:27'),
(185, '93', NULL, 'rGht1uyenL_4.webp', 'images/productImages/2022-05-31_samsung-electronics-galaxy-watch-active-2-44mm', '2022-05-31 06:24:27', '2022-05-31 06:24:27'),
(383, NULL, '231', 'WUjel76gnw-option_2.webp', 'images/productImages/2022-06-02_samsung-electronics-galaxy-watch-active-2-44mm', '2022-06-02 04:16:53', '2022-06-02 04:16:53'),
(382, NULL, '231', 'WUjel76gnw-option_1.webp', 'images/productImages/2022-06-02_samsung-electronics-galaxy-watch-active-2-44mm', '2022-06-02 04:16:53', '2022-06-02 04:16:53'),
(381, NULL, '231', 'WUjel76gnw-option_0.webp', 'images/productImages/2022-06-02_samsung-electronics-galaxy-watch-active-2-44mm', '2022-06-02 04:16:52', '2022-06-02 04:16:52'),
(498, NULL, '248', 'EvjasFeSTF-option_2.webp', 'images/productImages/2022-06-09_xiaomi-mi-11-lite-5g', '2022-06-09 06:29:26', '2022-06-09 06:29:26'),
(499, NULL, '248', 'EvjasFeSTF-option_3.webp', 'images/productImages/2022-06-09_xiaomi-mi-11-lite-5g', '2022-06-09 06:29:26', '2022-06-09 06:29:26'),
(500, NULL, '249', 'V45Cac6pdf-option_0.webp', 'images/productImages/2022-06-09_xiaomi-mi-11-lite-5g', '2022-06-09 06:29:26', '2022-06-09 06:29:26'),
(194, NULL, '241', 'VDLf5gtrsr-option_0.png', 'images/productImages/2022-05-31_xiaomi-mi-11-lite-5g', '2022-05-31 06:47:01', '2022-05-31 06:47:01'),
(195, '95', NULL, '2kevjbVW56_1.webp', 'images/productImages/2022-05-31_xiaomi-mi-11-lite-5g', '2022-05-31 06:51:15', '2022-05-31 06:51:15'),
(196, '95', NULL, '2kevjbVW56_2.webp', 'images/productImages/2022-05-31_xiaomi-mi-11-lite-5g', '2022-05-31 06:51:15', '2022-05-31 06:51:15'),
(197, '95', NULL, '2kevjbVW56_3.webp', 'images/productImages/2022-05-31_xiaomi-mi-11-lite-5g', '2022-05-31 06:51:15', '2022-05-31 06:51:15'),
(198, '95', NULL, '2kevjbVW56_4.webp', 'images/productImages/2022-05-31_xiaomi-mi-11-lite-5g', '2022-05-31 06:51:15', '2022-05-31 06:51:15'),
(497, NULL, '248', 'EvjasFeSTF-option_1.webp', 'images/productImages/2022-06-09_xiaomi-mi-11-lite-5g', '2022-06-09 06:29:26', '2022-06-09 06:29:26'),
(496, NULL, '248', 'EvjasFeSTF-option_0.webp', 'images/productImages/2022-06-09_xiaomi-mi-11-lite-5g', '2022-06-09 06:29:25', '2022-06-09 06:29:25'),
(201, '96', NULL, 'XtZbM9CShZ_1.webp', 'images/productImages/2022-05-31_xiaomi-mi-watch-lite', '2022-05-31 09:05:21', '2022-05-31 09:05:21'),
(202, '96', NULL, 'XtZbM9CShZ_2.webp', 'images/productImages/2022-05-31_xiaomi-mi-watch-lite', '2022-05-31 09:05:21', '2022-05-31 09:05:21'),
(203, '96', NULL, 'XtZbM9CShZ_3.webp', 'images/productImages/2022-05-31_xiaomi-mi-watch-lite', '2022-05-31 09:05:22', '2022-05-31 09:05:22'),
(204, '96', NULL, 'XtZbM9CShZ_4.webp', 'images/productImages/2022-05-31_xiaomi-mi-watch-lite', '2022-05-31 09:05:22', '2022-05-31 09:05:22'),
(394, NULL, '250', '71RG9snWVj-option_3.webp', 'images/productImages/2022-06-02_xiaomi-mi-watch-lite', '2022-06-02 04:18:47', '2022-06-02 04:18:47'),
(393, NULL, '250', '71RG9snWVj-option_2.webp', 'images/productImages/2022-06-02_xiaomi-mi-watch-lite', '2022-06-02 04:18:47', '2022-06-02 04:18:47'),
(392, NULL, '250', '71RG9snWVj-option_1.webp', 'images/productImages/2022-06-02_xiaomi-mi-watch-lite', '2022-06-02 04:18:47', '2022-06-02 04:18:47'),
(391, NULL, '250', '71RG9snWVj-option_0.webp', 'images/productImages/2022-06-02_xiaomi-mi-watch-lite', '2022-06-02 04:18:47', '2022-06-02 04:18:47'),
(409, NULL, '257', 'vMh90kgshD-option_0.webp', 'images/productImages/2022-06-02_ipad-mini-6', '2022-06-02 04:39:25', '2022-06-02 04:39:25'),
(406, '97', NULL, 'd3IDqtFZou_1.webp', 'images/productImages/2022-06-02_ipad-mini-6', '2022-06-02 04:39:25', '2022-06-02 04:39:25'),
(407, '97', NULL, 'd3IDqtFZou_2.webp', 'images/productImages/2022-06-02_ipad-mini-6', '2022-06-02 04:39:25', '2022-06-02 04:39:25'),
(408, '97', NULL, 'd3IDqtFZou_3.webp', 'images/productImages/2022-06-02_ipad-mini-6', '2022-06-02 04:39:25', '2022-06-02 04:39:25'),
(247, NULL, '146', 'xrwJSMK065-option_3.webp', 'images/productImages/2022-06-02_iwatch-1', '2022-06-02 02:07:51', '2022-06-02 02:07:51'),
(246, NULL, '146', 'xrwJSMK065-option_2.webp', 'images/productImages/2022-06-02_iwatch-1', '2022-06-02 02:07:51', '2022-06-02 02:07:51'),
(243, '81', NULL, 'qEjIBDKiIU_3.webp', 'images/productImages/2022-06-02_iwatch-1', '2022-06-02 02:07:50', '2022-06-02 02:07:50'),
(244, NULL, '146', 'xrwJSMK065-option_0.webp', 'images/productImages/2022-06-02_iwatch-1', '2022-06-02 02:07:50', '2022-06-02 02:07:50'),
(245, NULL, '146', 'xrwJSMK065-option_1.webp', 'images/productImages/2022-06-02_iwatch-1', '2022-06-02 02:07:51', '2022-06-02 02:07:51'),
(241, '81', NULL, 'qEjIBDKiIU_1.webp', 'images/productImages/2022-06-02_iwatch-1', '2022-06-02 02:07:50', '2022-06-02 02:07:50'),
(242, '81', NULL, 'qEjIBDKiIU_2.webp', 'images/productImages/2022-06-02_iwatch-1', '2022-06-02 02:07:50', '2022-06-02 02:07:50'),
(252, NULL, '144', 'ySPsfy4rh6-option_1.webp', 'images/productImages/2022-06-02_iwatch-1', '2022-06-02 02:07:52', '2022-06-02 02:07:52'),
(253, NULL, '143', 'u7CzCrRlF7-option_0.webp', 'images/productImages/2022-06-02_iwatch-1', '2022-06-02 02:07:52', '2022-06-02 02:07:52'),
(254, NULL, '143', 'u7CzCrRlF7-option_1.webp', 'images/productImages/2022-06-02_iwatch-1', '2022-06-02 02:07:52', '2022-06-02 02:07:52'),
(255, NULL, '143', 'u7CzCrRlF7-option_2.webp', 'images/productImages/2022-06-02_iwatch-1', '2022-06-02 02:07:52', '2022-06-02 02:07:52'),
(256, NULL, '143', 'u7CzCrRlF7-option_3.webp', 'images/productImages/2022-06-02_iwatch-1', '2022-06-02 02:07:53', '2022-06-02 02:07:53'),
(261, NULL, '142', 'QfBAidxJK4-option_1.webp', 'images/productImages/2022-06-02_iwatch-2-collaction', '2022-06-02 02:15:48', '2022-06-02 02:15:48'),
(262, NULL, '142', 'QfBAidxJK4-option_2.webp', 'images/productImages/2022-06-02_iwatch-2-collaction', '2022-06-02 02:15:48', '2022-06-02 02:15:48'),
(263, NULL, '141', 'iilSLt342Y-option_0.webp', 'images/productImages/2022-06-02_iwatch-2-collaction', '2022-06-02 02:15:48', '2022-06-02 02:15:48'),
(264, NULL, '141', 'iilSLt342Y-option_1.webp', 'images/productImages/2022-06-02_iwatch-2-collaction', '2022-06-02 02:15:49', '2022-06-02 02:15:49'),
(265, NULL, '141', 'iilSLt342Y-option_2.webp', 'images/productImages/2022-06-02_iwatch-2-collaction', '2022-06-02 02:15:49', '2022-06-02 02:15:49'),
(266, NULL, '141', 'iilSLt342Y-option_3.webp', 'images/productImages/2022-06-02_iwatch-2-collaction', '2022-06-02 02:15:49', '2022-06-02 02:15:49'),
(267, NULL, '140', '2meB7ny77B-option_0.webp', 'images/productImages/2022-06-02_iwatch-2-collaction', '2022-06-02 02:15:49', '2022-06-02 02:15:49'),
(268, NULL, '140', '2meB7ny77B-option_1.webp', 'images/productImages/2022-06-02_iwatch-2-collaction', '2022-06-02 02:15:49', '2022-06-02 02:15:49'),
(269, NULL, '140', '2meB7ny77B-option_2.webp', 'images/productImages/2022-06-02_iwatch-2-collaction', '2022-06-02 02:15:49', '2022-06-02 02:15:49'),
(270, NULL, '140', '2meB7ny77B-option_3.webp', 'images/productImages/2022-06-02_iwatch-2-collaction', '2022-06-02 02:15:50', '2022-06-02 02:15:50'),
(277, NULL, '139', 'ELCzm5lJbI-option_2.webp', 'images/productImages/2022-06-02_apple-watch-vii2', '2022-06-02 02:21:58', '2022-06-02 02:21:58'),
(278, NULL, '139', 'ELCzm5lJbI-option_3.webp', 'images/productImages/2022-06-02_apple-watch-vii2', '2022-06-02 02:21:58', '2022-06-02 02:21:58'),
(279, NULL, '138', 'jOZ1lSwU52-option_0.webp', 'images/productImages/2022-06-02_apple-watch-vii2', '2022-06-02 02:21:58', '2022-06-02 02:21:58'),
(280, NULL, '138', 'jOZ1lSwU52-option_1.webp', 'images/productImages/2022-06-02_apple-watch-vii2', '2022-06-02 02:21:58', '2022-06-02 02:21:58'),
(281, NULL, '138', 'jOZ1lSwU52-option_2.webp', 'images/productImages/2022-06-02_apple-watch-vii2', '2022-06-02 02:21:58', '2022-06-02 02:21:58'),
(282, NULL, '137', 'NxBmnkqjcl-option_0.webp', 'images/productImages/2022-06-02_apple-watch-vii2', '2022-06-02 02:21:58', '2022-06-02 02:21:58'),
(283, NULL, '137', 'NxBmnkqjcl-option_1.webp', 'images/productImages/2022-06-02_apple-watch-vii2', '2022-06-02 02:21:59', '2022-06-02 02:21:59'),
(284, NULL, '137', 'NxBmnkqjcl-option_2.webp', 'images/productImages/2022-06-02_apple-watch-vii2', '2022-06-02 02:21:59', '2022-06-02 02:21:59'),
(285, NULL, '136', 'eu7uLVpHCj-option_0.webp', 'images/productImages/2022-06-02_apple-watch-vii2', '2022-06-02 02:21:59', '2022-06-02 02:21:59'),
(286, NULL, '136', 'eu7uLVpHCj-option_1.webp', 'images/productImages/2022-06-02_apple-watch-vii2', '2022-06-02 02:21:59', '2022-06-02 02:21:59'),
(287, NULL, '136', 'eu7uLVpHCj-option_2.webp', 'images/productImages/2022-06-02_apple-watch-vii2', '2022-06-02 02:21:59', '2022-06-02 02:21:59'),
(292, NULL, '135', '3dl0ZsNecW-option_1.webp', 'images/productImages/2022-06-02_iwatch-clear', '2022-06-02 02:26:27', '2022-06-02 02:26:27'),
(293, NULL, '135', '3dl0ZsNecW-option_2.webp', 'images/productImages/2022-06-02_iwatch-clear', '2022-06-02 02:26:28', '2022-06-02 02:26:28'),
(294, NULL, '134', 'hOCG5ArBOt-option_0.webp', 'images/productImages/2022-06-02_iwatch-clear', '2022-06-02 02:26:28', '2022-06-02 02:26:28'),
(295, NULL, '134', 'hOCG5ArBOt-option_1.webp', 'images/productImages/2022-06-02_iwatch-clear', '2022-06-02 02:26:28', '2022-06-02 02:26:28'),
(296, NULL, '134', 'hOCG5ArBOt-option_2.webp', 'images/productImages/2022-06-02_iwatch-clear', '2022-06-02 02:26:28', '2022-06-02 02:26:28'),
(301, NULL, '154', 'ocFzHmBr8P-option_1.webp', 'images/productImages/2022-06-02_iphone-x', '2022-06-02 03:48:36', '2022-06-02 03:48:36'),
(302, NULL, '154', 'ocFzHmBr8P-option_2.webp', 'images/productImages/2022-06-02_iphone-x', '2022-06-02 03:48:36', '2022-06-02 03:48:36'),
(303, NULL, '153', '7xiqAgjcFr-option_0.webp', 'images/productImages/2022-06-02_iphone-x', '2022-06-02 03:48:36', '2022-06-02 03:48:36'),
(304, NULL, '153', '7xiqAgjcFr-option_1.webp', 'images/productImages/2022-06-02_iphone-x', '2022-06-02 03:48:36', '2022-06-02 03:48:36'),
(305, NULL, '153', '7xiqAgjcFr-option_2.webp', 'images/productImages/2022-06-02_iphone-x', '2022-06-02 03:48:36', '2022-06-02 03:48:36'),
(306, NULL, '153', '7xiqAgjcFr-option_3.webp', 'images/productImages/2022-06-02_iphone-x', '2022-06-02 03:48:37', '2022-06-02 03:48:37'),
(307, NULL, '152', 'eRRlUVCDcd-option_0.webp', 'images/productImages/2022-06-02_iphone-x', '2022-06-02 03:48:37', '2022-06-02 03:48:37'),
(308, NULL, '152', 'eRRlUVCDcd-option_1.webp', 'images/productImages/2022-06-02_iphone-x', '2022-06-02 03:48:37', '2022-06-02 03:48:37'),
(309, NULL, '152', 'eRRlUVCDcd-option_2.webp', 'images/productImages/2022-06-02_iphone-x', '2022-06-02 03:48:37', '2022-06-02 03:48:37'),
(314, NULL, '168', 'gU9mxsUDvK-option_1.webp', 'images/productImages/2022-06-02_iphone-12', '2022-06-02 03:52:53', '2022-06-02 03:52:53'),
(315, NULL, '168', 'gU9mxsUDvK-option_2.webp', 'images/productImages/2022-06-02_iphone-12', '2022-06-02 03:52:53', '2022-06-02 03:52:53'),
(316, NULL, '168', 'gU9mxsUDvK-option_3.webp', 'images/productImages/2022-06-02_iphone-12', '2022-06-02 03:52:53', '2022-06-02 03:52:53'),
(317, NULL, '167', 'UHxkNmHqVJ-option_0.webp', 'images/productImages/2022-06-02_iphone-12', '2022-06-02 03:52:53', '2022-06-02 03:52:53'),
(318, NULL, '167', 'UHxkNmHqVJ-option_1.webp', 'images/productImages/2022-06-02_iphone-12', '2022-06-02 03:52:53', '2022-06-02 03:52:53'),
(319, NULL, '167', 'UHxkNmHqVJ-option_2.webp', 'images/productImages/2022-06-02_iphone-12', '2022-06-02 03:52:54', '2022-06-02 03:52:54'),
(320, NULL, '167', 'UHxkNmHqVJ-option_3.webp', 'images/productImages/2022-06-02_iphone-12', '2022-06-02 03:52:54', '2022-06-02 03:52:54'),
(325, NULL, '161', '7BEL7eZ9Sd-option_1.webp', 'images/productImages/2022-06-02_iphone-11', '2022-06-02 03:56:12', '2022-06-02 03:56:12'),
(326, NULL, '161', '7BEL7eZ9Sd-option_2.webp', 'images/productImages/2022-06-02_iphone-11', '2022-06-02 03:56:12', '2022-06-02 03:56:12'),
(327, NULL, '160', 'JKdvmYpQJn-option_0.webp', 'images/productImages/2022-06-02_iphone-11', '2022-06-02 03:56:12', '2022-06-02 03:56:12'),
(328, NULL, '160', 'JKdvmYpQJn-option_1.webp', 'images/productImages/2022-06-02_iphone-11', '2022-06-02 03:56:13', '2022-06-02 03:56:13'),
(329, NULL, '160', 'JKdvmYpQJn-option_2.webp', 'images/productImages/2022-06-02_iphone-11', '2022-06-02 03:56:13', '2022-06-02 03:56:13'),
(333, NULL, '175', 'L7dZok8dbM-option_0.webp', 'images/productImages/2022-06-02_iphone-13-pro-max', '2022-06-02 04:00:07', '2022-06-02 04:00:07'),
(334, NULL, '175', 'L7dZok8dbM-option_1.webp', 'images/productImages/2022-06-02_iphone-13-pro-max', '2022-06-02 04:00:07', '2022-06-02 04:00:07'),
(335, NULL, '175', 'L7dZok8dbM-option_2.webp', 'images/productImages/2022-06-02_iphone-13-pro-max', '2022-06-02 04:00:07', '2022-06-02 04:00:07'),
(336, NULL, '175', 'L7dZok8dbM-option_3.webp', 'images/productImages/2022-06-02_iphone-13-pro-max', '2022-06-02 04:00:07', '2022-06-02 04:00:07'),
(337, NULL, '175', 'L7dZok8dbM-option_4.webp', 'images/productImages/2022-06-02_iphone-13-pro-max', '2022-06-02 04:00:08', '2022-06-02 04:00:08'),
(338, NULL, '175', 'L7dZok8dbM-option_5.webp', 'images/productImages/2022-06-02_iphone-13-pro-max', '2022-06-02 04:00:08', '2022-06-02 04:00:08'),
(339, NULL, '174', '0kK2cpKtsM-option_0.webp', 'images/productImages/2022-06-02_iphone-13-pro-max', '2022-06-02 04:00:08', '2022-06-02 04:00:08'),
(340, NULL, '174', '0kK2cpKtsM-option_1.webp', 'images/productImages/2022-06-02_iphone-13-pro-max', '2022-06-02 04:00:08', '2022-06-02 04:00:08'),
(341, NULL, '174', '0kK2cpKtsM-option_2.webp', 'images/productImages/2022-06-02_iphone-13-pro-max', '2022-06-02 04:00:08', '2022-06-02 04:00:08'),
(348, NULL, '185', '0CIqQHUEkR-option_2.webp', 'images/productImages/2022-06-02_macbook-pro-16-inch', '2022-06-02 04:05:57', '2022-06-02 04:05:57'),
(349, NULL, '185', '0CIqQHUEkR-option_3.webp', 'images/productImages/2022-06-02_macbook-pro-16-inch', '2022-06-02 04:05:57', '2022-06-02 04:05:57'),
(350, NULL, '186', '5gzSNP1Dwt-option_0.webp', 'images/productImages/2022-06-02_macbook-pro-16-inch', '2022-06-02 04:05:57', '2022-06-02 04:05:57'),
(351, NULL, '186', '5gzSNP1Dwt-option_1.webp', 'images/productImages/2022-06-02_macbook-pro-16-inch', '2022-06-02 04:05:57', '2022-06-02 04:05:57'),
(352, NULL, '186', '5gzSNP1Dwt-option_2.webp', 'images/productImages/2022-06-02_macbook-pro-16-inch', '2022-06-02 04:05:58', '2022-06-02 04:05:58'),
(353, NULL, '186', '5gzSNP1Dwt-option_3.webp', 'images/productImages/2022-06-02_macbook-pro-16-inch', '2022-06-02 04:05:58', '2022-06-02 04:05:58'),
(354, NULL, '187', 'WjlStMKSPx-option_0.webp', 'images/productImages/2022-06-02_macbook-pro-16-inch', '2022-06-02 04:05:58', '2022-06-02 04:05:58'),
(355, NULL, '187', 'WjlStMKSPx-option_1.webp', 'images/productImages/2022-06-02_macbook-pro-16-inch', '2022-06-02 04:05:58', '2022-06-02 04:05:58'),
(356, NULL, '187', 'WjlStMKSPx-option_2.webp', 'images/productImages/2022-06-02_macbook-pro-16-inch', '2022-06-02 04:05:58', '2022-06-02 04:05:58'),
(357, NULL, '187', 'WjlStMKSPx-option_3.webp', 'images/productImages/2022-06-02_macbook-pro-16-inch', '2022-06-02 04:05:59', '2022-06-02 04:05:59'),
(361, NULL, '197', 'OWhhr8vxl3-option_0.webp', 'images/productImages/2022-06-02_apple-studio-display', '2022-06-02 04:08:05', '2022-06-02 04:08:05'),
(362, NULL, '197', 'OWhhr8vxl3-option_1.webp', 'images/productImages/2022-06-02_apple-studio-display', '2022-06-02 04:08:06', '2022-06-02 04:08:06'),
(363, NULL, '197', 'OWhhr8vxl3-option_2.webp', 'images/productImages/2022-06-02_apple-studio-display', '2022-06-02 04:08:06', '2022-06-02 04:08:06'),
(364, NULL, '197', 'OWhhr8vxl3-option_3.webp', 'images/productImages/2022-06-02_apple-studio-display', '2022-06-02 04:08:06', '2022-06-02 04:08:06'),
(365, NULL, '197', 'OWhhr8vxl3-option_4.webp', 'images/productImages/2022-06-02_apple-studio-display', '2022-06-02 04:08:06', '2022-06-02 04:08:06'),
(371, NULL, '207', 'nT5thxEiP5-option_2.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-06-02 04:12:35', '2022-06-02 04:12:35'),
(372, NULL, '207', 'nT5thxEiP5-option_3.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-06-02 04:12:35', '2022-06-02 04:12:35'),
(373, NULL, '207', 'nT5thxEiP5-option_4.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-06-02 04:12:35', '2022-06-02 04:12:35'),
(374, NULL, '208', 'uKWNvDlwQ0-option_0.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-06-02 04:12:36', '2022-06-02 04:12:36'),
(375, NULL, '208', 'uKWNvDlwQ0-option_1.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-06-02 04:12:36', '2022-06-02 04:12:36'),
(376, NULL, '208', 'uKWNvDlwQ0-option_2.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-06-02 04:12:36', '2022-06-02 04:12:36'),
(377, NULL, '208', 'uKWNvDlwQ0-option_3.webp', 'images/productImages/2022-06-02_macbook-pro-14-inch', '2022-06-02 04:12:36', '2022-06-02 04:12:36'),
(380, '89', NULL, 'vDGhhUwPNv_3.webp', 'images/productImages/2022-06-02_imac-27', '2022-06-02 04:13:49', '2022-06-02 04:13:49'),
(384, NULL, '231', 'WUjel76gnw-option_3.webp', 'images/productImages/2022-06-02_samsung-electronics-galaxy-watch-active-2-44mm', '2022-06-02 04:16:53', '2022-06-02 04:16:53'),
(385, NULL, '232', 'mBK3Jd1zWb-option_0.webp', 'images/productImages/2022-06-02_samsung-electronics-galaxy-watch-active-2-44mm', '2022-06-02 04:16:53', '2022-06-02 04:16:53'),
(386, NULL, '232', 'mBK3Jd1zWb-option_1.webp', 'images/productImages/2022-06-02_samsung-electronics-galaxy-watch-active-2-44mm', '2022-06-02 04:16:53', '2022-06-02 04:16:53'),
(387, NULL, '232', 'mBK3Jd1zWb-option_2.webp', 'images/productImages/2022-06-02_samsung-electronics-galaxy-watch-active-2-44mm', '2022-06-02 04:16:53', '2022-06-02 04:16:53'),
(388, NULL, '233', 'IVPE7OsN0J-option_0.webp', 'images/productImages/2022-06-02_samsung-electronics-galaxy-watch-active-2-44mm', '2022-06-02 04:16:54', '2022-06-02 04:16:54'),
(389, NULL, '233', 'IVPE7OsN0J-option_1.webp', 'images/productImages/2022-06-02_samsung-electronics-galaxy-watch-active-2-44mm', '2022-06-02 04:16:54', '2022-06-02 04:16:54'),
(390, NULL, '233', 'IVPE7OsN0J-option_2.webp', 'images/productImages/2022-06-02_samsung-electronics-galaxy-watch-active-2-44mm', '2022-06-02 04:16:54', '2022-06-02 04:16:54'),
(395, NULL, '251', 'tCVEl7OXMr-option_0.webp', 'images/productImages/2022-06-02_xiaomi-mi-watch-lite', '2022-06-02 04:18:47', '2022-06-02 04:18:47'),
(396, NULL, '251', 'tCVEl7OXMr-option_1.webp', 'images/productImages/2022-06-02_xiaomi-mi-watch-lite', '2022-06-02 04:18:47', '2022-06-02 04:18:47'),
(397, NULL, '251', 'tCVEl7OXMr-option_2.webp', 'images/productImages/2022-06-02_xiaomi-mi-watch-lite', '2022-06-02 04:18:48', '2022-06-02 04:18:48'),
(398, NULL, '251', 'tCVEl7OXMr-option_3.webp', 'images/productImages/2022-06-02_xiaomi-mi-watch-lite', '2022-06-02 04:18:48', '2022-06-02 04:18:48'),
(399, NULL, '252', 'xCESBTvYxQ-option_0.webp', 'images/productImages/2022-06-02_xiaomi-mi-watch-lite', '2022-06-02 04:18:48', '2022-06-02 04:18:48'),
(400, NULL, '252', 'xCESBTvYxQ-option_1.webp', 'images/productImages/2022-06-02_xiaomi-mi-watch-lite', '2022-06-02 04:18:48', '2022-06-02 04:18:48'),
(401, NULL, '252', 'xCESBTvYxQ-option_2.webp', 'images/productImages/2022-06-02_xiaomi-mi-watch-lite', '2022-06-02 04:18:48', '2022-06-02 04:18:48'),
(402, NULL, '252', 'xCESBTvYxQ-option_3.webp', 'images/productImages/2022-06-02_xiaomi-mi-watch-lite', '2022-06-02 04:18:48', '2022-06-02 04:18:48'),
(403, NULL, '253', 'kNaY8TAE6F-option_0.webp', 'images/productImages/2022-06-02_xiaomi-mi-watch-lite', '2022-06-02 04:18:49', '2022-06-02 04:18:49'),
(404, NULL, '253', 'kNaY8TAE6F-option_1.webp', 'images/productImages/2022-06-02_xiaomi-mi-watch-lite', '2022-06-02 04:18:49', '2022-06-02 04:18:49'),
(405, NULL, '253', 'kNaY8TAE6F-option_2.webp', 'images/productImages/2022-06-02_xiaomi-mi-watch-lite', '2022-06-02 04:18:49', '2022-06-02 04:18:49'),
(410, NULL, '257', 'vMh90kgshD-option_1.webp', 'images/productImages/2022-06-02_ipad-mini-6', '2022-06-02 04:39:26', '2022-06-02 04:39:26'),
(411, NULL, '257', 'vMh90kgshD-option_2.webp', 'images/productImages/2022-06-02_ipad-mini-6', '2022-06-02 04:39:26', '2022-06-02 04:39:26'),
(412, NULL, '258', 'PIxr8YzLrk-option_0.webp', 'images/productImages/2022-06-02_ipad-mini-6', '2022-06-02 04:39:26', '2022-06-02 04:39:26'),
(413, NULL, '258', 'PIxr8YzLrk-option_1.webp', 'images/productImages/2022-06-02_ipad-mini-6', '2022-06-02 04:39:26', '2022-06-02 04:39:26'),
(414, NULL, '258', 'PIxr8YzLrk-option_2.webp', 'images/productImages/2022-06-02_ipad-mini-6', '2022-06-02 04:39:26', '2022-06-02 04:39:26'),
(415, NULL, '258', 'PIxr8YzLrk-option_3.webp', 'images/productImages/2022-06-02_ipad-mini-6', '2022-06-02 04:39:27', '2022-06-02 04:39:27'),
(418, NULL, '222', 'Mv4GVp2r6f-option_2.webp', 'images/productImages/2022-06-02_apple-ipad-10.2-inch', '2022-06-02 04:41:23', '2022-06-02 04:41:23'),
(419, NULL, '222', 'Mv4GVp2r6f-option_3.webp', 'images/productImages/2022-06-02_apple-ipad-10.2-inch', '2022-06-02 04:41:24', '2022-06-02 04:41:24'),
(420, NULL, '223', '7rQ9z5XL9v-option_0.webp', 'images/productImages/2022-06-02_apple-ipad-10.2-inch', '2022-06-02 04:41:24', '2022-06-02 04:41:24'),
(421, NULL, '223', '7rQ9z5XL9v-option_1.webp', 'images/productImages/2022-06-02_apple-ipad-10.2-inch', '2022-06-02 04:41:24', '2022-06-02 04:41:24'),
(422, NULL, '223', '7rQ9z5XL9v-option_2.webp', 'images/productImages/2022-06-02_apple-ipad-10.2-inch', '2022-06-02 04:41:24', '2022-06-02 04:41:24'),
(423, '99', NULL, 'QXBc3aGcI0_1.webp', 'images/productImages/2022-06-06_galaxy-s21', '2022-06-06 02:08:44', '2022-06-06 02:08:44'),
(424, '99', NULL, 'QXBc3aGcI0_2.webp', 'images/productImages/2022-06-06_galaxy-s21', '2022-06-06 02:08:44', '2022-06-06 02:08:44'),
(511, NULL, '268', 'y10KekcXvV-option_3.webp', 'images/productImages/2022-06-09_galaxy-s21', '2022-06-09 06:34:43', '2022-06-09 06:34:43'),
(510, NULL, '268', 'y10KekcXvV-option_2.webp', 'images/productImages/2022-06-09_galaxy-s21', '2022-06-09 06:34:43', '2022-06-09 06:34:43'),
(509, NULL, '268', 'y10KekcXvV-option_1.webp', 'images/productImages/2022-06-09_galaxy-s21', '2022-06-09 06:34:43', '2022-06-09 06:34:43'),
(508, NULL, '268', 'y10KekcXvV-option_0.webp', 'images/productImages/2022-06-09_galaxy-s21', '2022-06-09 06:34:43', '2022-06-09 06:34:43'),
(429, NULL, '269', 'QXBc3aGcI0-option_0.webp', 'images/productImages/2022-06-06_galaxy-s21', '2022-06-06 02:08:45', '2022-06-06 02:08:45'),
(430, NULL, '269', 'QXBc3aGcI0-option_1.webp', 'images/productImages/2022-06-06_galaxy-s21', '2022-06-06 02:08:45', '2022-06-06 02:08:45'),
(431, NULL, '269', 'QXBc3aGcI0-option_2.webp', 'images/productImages/2022-06-06_galaxy-s21', '2022-06-06 02:08:46', '2022-06-06 02:08:46'),
(432, '100', NULL, 'pkMPNslG8x_1.webp', 'images/productImages/2022-06-06_galaxy-a51', '2022-06-06 02:20:20', '2022-06-06 02:20:20'),
(433, '100', NULL, 'pkMPNslG8x_2.webp', 'images/productImages/2022-06-06_galaxy-a51', '2022-06-06 02:20:20', '2022-06-06 02:20:20'),
(434, '100', NULL, 'pkMPNslG8x_3.webp', 'images/productImages/2022-06-06_galaxy-a51', '2022-06-06 02:20:20', '2022-06-06 02:20:20'),
(435, NULL, '274', 'pkMPNslG8x-option_0.webp', 'images/productImages/2022-06-06_galaxy-a51', '2022-06-06 02:20:21', '2022-06-06 02:20:21'),
(436, NULL, '274', 'pkMPNslG8x-option_1.webp', 'images/productImages/2022-06-06_galaxy-a51', '2022-06-06 02:20:21', '2022-06-06 02:20:21'),
(437, NULL, '274', 'pkMPNslG8x-option_2.webp', 'images/productImages/2022-06-06_galaxy-a51', '2022-06-06 02:20:21', '2022-06-06 02:20:21'),
(438, NULL, '274', 'pkMPNslG8x-option_3.webp', 'images/productImages/2022-06-06_galaxy-a51', '2022-06-06 02:20:21', '2022-06-06 02:20:21'),
(443, '102', NULL, 'AITSkNsB6H_1.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-4', '2022-06-09 02:07:45', '2022-06-09 02:07:45'),
(444, '102', NULL, 'AITSkNsB6H_2.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-4', '2022-06-09 02:07:46', '2022-06-09 02:07:46'),
(445, '102', NULL, 'AITSkNsB6H_3.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-4', '2022-06-09 02:07:46', '2022-06-09 02:07:46'),
(492, NULL, '277', '0akplJRgnX-option_3.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-4', '2022-06-09 06:20:06', '2022-06-09 06:20:06'),
(491, NULL, '277', '0akplJRgnX-option_2.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-4', '2022-06-09 06:20:06', '2022-06-09 06:20:06'),
(490, NULL, '277', '0akplJRgnX-option_1.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-4', '2022-06-09 06:20:06', '2022-06-09 06:20:06'),
(489, NULL, '277', '0akplJRgnX-option_0.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-4', '2022-06-09 06:20:05', '2022-06-09 06:20:05'),
(450, NULL, '278', 'AITSkNsB6H-option_0.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-4', '2022-06-09 02:07:47', '2022-06-09 02:07:47'),
(451, NULL, '278', 'AITSkNsB6H-option_1.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-4', '2022-06-09 02:07:47', '2022-06-09 02:07:47'),
(452, NULL, '278', 'AITSkNsB6H-option_2.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-4', '2022-06-09 02:07:47', '2022-06-09 02:07:47'),
(453, NULL, '278', 'AITSkNsB6H-option_3.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-4', '2022-06-09 02:07:47', '2022-06-09 02:07:47'),
(501, NULL, '249', 'V45Cac6pdf-option_1.webp', 'images/productImages/2022-06-09_xiaomi-mi-11-lite-5g', '2022-06-09 06:29:26', '2022-06-09 06:29:26'),
(461, NULL, '280', 'GZGzdkb42S-option_0.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-(sm-r815)', '2022-06-09 02:28:24', '2022-06-09 02:28:24'),
(462, NULL, '280', 'GZGzdkb42S-option_1.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-(sm-r815)', '2022-06-09 02:28:24', '2022-06-09 02:28:24'),
(463, NULL, '280', 'GZGzdkb42S-option_2.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-(sm-r815)', '2022-06-09 02:28:24', '2022-06-09 02:28:24'),
(464, '104', NULL, 'BcZNZbhSoW_1.webp', 'images/productImages/2022-06-09_xiaomi-redmi-note-11', '2022-06-09 02:47:09', '2022-06-09 02:47:09'),
(465, '104', NULL, 'BcZNZbhSoW_2.webp', 'images/productImages/2022-06-09_xiaomi-redmi-note-11', '2022-06-09 02:47:09', '2022-06-09 02:47:09'),
(466, '104', NULL, 'BcZNZbhSoW_3.webp', 'images/productImages/2022-06-09_xiaomi-redmi-note-11', '2022-06-09 02:47:09', '2022-06-09 02:47:09'),
(495, NULL, '286', 'Ww4XbmeCmR-option_2.webp', 'images/productImages/2022-06-09_xiaomi-redmi-note-11', '2022-06-09 06:26:57', '2022-06-09 06:26:57'),
(494, NULL, '286', 'Ww4XbmeCmR-option_1.webp', 'images/productImages/2022-06-09_xiaomi-redmi-note-11', '2022-06-09 06:26:56', '2022-06-09 06:26:56'),
(493, NULL, '286', 'Ww4XbmeCmR-option_0.webp', 'images/productImages/2022-06-09_xiaomi-redmi-note-11', '2022-06-09 06:26:56', '2022-06-09 06:26:56'),
(470, NULL, '287', 'BcZNZbhSoW-option_0.webp', 'images/productImages/2022-06-09_xiaomi-redmi-note-11', '2022-06-09 02:47:10', '2022-06-09 02:47:10'),
(471, NULL, '287', 'BcZNZbhSoW-option_1.webp', 'images/productImages/2022-06-09_xiaomi-redmi-note-11', '2022-06-09 02:47:10', '2022-06-09 02:47:10'),
(472, NULL, '287', 'BcZNZbhSoW-option_2.webp', 'images/productImages/2022-06-09_xiaomi-redmi-note-11', '2022-06-09 02:47:10', '2022-06-09 02:47:10'),
(473, NULL, '287', 'BcZNZbhSoW-option_3.webp', 'images/productImages/2022-06-09_xiaomi-redmi-note-11', '2022-06-09 02:47:10', '2022-06-09 02:47:10'),
(474, '105', NULL, 'cZlh0WAiZ9_1.webp', 'images/productImages/2022-06-09_xiaomi-mi-watch', '2022-06-09 03:05:26', '2022-06-09 03:05:26'),
(475, '105', NULL, 'cZlh0WAiZ9_2.webp', 'images/productImages/2022-06-09_xiaomi-mi-watch', '2022-06-09 03:05:26', '2022-06-09 03:05:26'),
(476, '105', NULL, 'cZlh0WAiZ9_3.webp', 'images/productImages/2022-06-09_xiaomi-mi-watch', '2022-06-09 03:05:27', '2022-06-09 03:05:27'),
(477, '105', NULL, 'cZlh0WAiZ9_4.webp', 'images/productImages/2022-06-09_xiaomi-mi-watch', '2022-06-09 03:05:27', '2022-06-09 03:05:27'),
(507, NULL, '288', 'cYkPLJejSH-option_3.webp', 'images/productImages/2022-06-09_xiaomi-mi-watch', '2022-06-09 06:31:33', '2022-06-09 06:31:33'),
(506, NULL, '288', 'cYkPLJejSH-option_2.webp', 'images/productImages/2022-06-09_xiaomi-mi-watch', '2022-06-09 06:31:33', '2022-06-09 06:31:33'),
(505, NULL, '288', 'cYkPLJejSH-option_1.webp', 'images/productImages/2022-06-09_xiaomi-mi-watch', '2022-06-09 06:31:33', '2022-06-09 06:31:33'),
(504, NULL, '288', 'cYkPLJejSH-option_0.webp', 'images/productImages/2022-06-09_xiaomi-mi-watch', '2022-06-09 06:31:32', '2022-06-09 06:31:32'),
(482, NULL, '289', 'cZlh0WAiZ9-option_0.webp', 'images/productImages/2022-06-09_xiaomi-mi-watch', '2022-06-09 03:05:28', '2022-06-09 03:05:28'),
(483, NULL, '289', 'cZlh0WAiZ9-option_1.webp', 'images/productImages/2022-06-09_xiaomi-mi-watch', '2022-06-09 03:05:28', '2022-06-09 03:05:28'),
(484, NULL, '289', 'cZlh0WAiZ9-option_2.webp', 'images/productImages/2022-06-09_xiaomi-mi-watch', '2022-06-09 03:05:28', '2022-06-09 03:05:28'),
(485, NULL, '279', 'uZUD893dPA-option_0.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-(sm-r815)', '2022-06-09 06:17:42', '2022-06-09 06:17:42'),
(486, NULL, '279', 'uZUD893dPA-option_1.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-(sm-r815)', '2022-06-09 06:17:43', '2022-06-09 06:17:43'),
(487, NULL, '279', 'uZUD893dPA-option_2.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-(sm-r815)', '2022-06-09 06:17:43', '2022-06-09 06:17:43'),
(488, NULL, '279', 'uZUD893dPA-option_3.webp', 'images/productImages/2022-06-09_samsung-galaxy-watch-(sm-r815)', '2022-06-09 06:17:43', '2022-06-09 06:17:43'),
(503, NULL, '249', 'V45Cac6pdf-option_3.webp', 'images/productImages/2022-06-09_xiaomi-mi-11-lite-5g', '2022-06-09 06:29:27', '2022-06-09 06:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('A74Y9d96SOAiOhbsN5un2aB8bZfHWZFgqHfxy9gM', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiYlFrZG5XQlpwMTJ5UE02Q3NCdTRROWMwc3ExczFsZktPZHU3OUhKRyI7czo2OiJsb2NhbGUiO3M6MjoidXoiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjUwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vYmFubmVycy9zbGlkZXIvZWRpdC8xMyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJHF6NTQxTHIyL3ZUdUU1WVQzOFR4RGVSYkc3Q1JiQ1lEM2dwWkllQk9RL05GbWx0UXBndWhxIjtzOjQ6ImNhcnQiO2E6MTp7aTo3ODthOjY6e3M6NDoibmFtZSI7czoxMjoiaVdhdGNoIGNsZWFyIjtzOjU6InByaWNlIjtpOjMyO3M6NToicGhvdG8iO3M6MTU6IkQ3WmFPYWNjVlYud2VicCI7czoxMDoicGhvdG9fcGF0aCI7czo0NDoiaW1hZ2VzL3Byb2R1Y3RJbWFnZXMvMjAyMi0wNi0wMl9pd2F0Y2gtY2xlYXIiO3M6Nzoib3B0aW9ucyI7YToxOntzOjU6IkNvbG9yIjtpOjU1O31zOjg6InF1YW50aXR5IjtpOjE7fX19', 1656588989);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `usertype`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Ozodbek', '1', 'ozodbek1111@gmail.com', NULL, '$2y$10$wrMDG8Gby15HI3gtKUT3kuBfdSDG4GjVOzq2K/hyVFQu5DxAI4n/q', NULL, NULL, NULL, '2022-05-18 08:11:06', '2022-05-18 08:11:06'),
(2, 'Ibrohim', '0', 'ibrohim1111@gmail.com', NULL, '$2y$10$qz541Lr2/vTuE5YT38TxDeRbG7CRbCYD3gpZIeBOQ/NFmltQpguhq', NULL, NULL, NULL, '2022-05-18 08:16:45', '2022-05-18 08:16:45'),
(3, 'Ahror', '0', 'ahror1111@gmail.com', NULL, '$2y$10$IQnyiW9En5hZX9AzeVgs8OF9as/X6EcojD0hRdbV0opQKnhD.4hnW', NULL, NULL, NULL, '2022-05-18 08:25:06', '2022-05-18 08:25:06');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

DROP TABLE IF EXISTS `wishlists`;
CREATE TABLE IF NOT EXISTS `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=370 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(362, '3', '89', '2022-06-14 04:20:34', '2022-06-14 04:20:34'),
(360, '3', '87', '2022-06-14 04:20:23', '2022-06-14 04:20:23'),
(359, '3', '103', '2022-06-13 09:14:32', '2022-06-13 09:14:32'),
(296, '3', '85', '2022-06-13 07:24:22', '2022-06-13 07:24:22'),
(354, '3', '104', '2022-06-13 08:53:33', '2022-06-13 08:53:33'),
(355, '3', '105', '2022-06-13 08:53:37', '2022-06-13 08:53:37'),
(358, '3', '102', '2022-06-13 08:56:32', '2022-06-13 08:56:32'),
(363, '3', '88', '2022-06-14 04:20:38', '2022-06-14 04:20:38'),
(369, '2', '79', '2022-06-30 06:27:28', '2022-06-30 06:27:28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

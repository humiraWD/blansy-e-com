-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2024 at 08:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newblansy`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `description`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Destinio', 'Destinio', 'Occaecat reprehender', NULL, 1, '2024-07-11 09:26:53', '2024-07-11 09:26:53'),
(10, 'Madeline Bean', 'Perferendis eligendi', 'Occaecat reprehender', NULL, 1, '2024-05-21 23:15:05', '2024-05-21 23:15:05'),
(11, 'Zemic', 'Zemic', 'Occaecat reprehender', NULL, 1, '2024-07-11 09:28:00', '2024-07-11 09:28:00'),
(12, 'Rexera', 'Rexera', 'Occaecat reprehender', NULL, 1, '2024-07-11 09:29:14', '2024-07-11 09:29:14');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT 0,
  `order` int(11) NOT NULL DEFAULT 0,
  `icon` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `parent_id`, `level`, `order`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Electronices', 'Electronices', NULL, NULL, 3, 0, NULL, 1, '2024-07-10 04:22:47', '2024-07-10 04:22:47'),
(2, 'kitchen', 'kitchen', NULL, NULL, 2, 0, NULL, 1, '2024-07-10 04:23:43', '2024-07-10 04:23:43'),
(3, 'Beauty', 'Beauty', NULL, NULL, 4, 0, NULL, 1, '2024-07-10 04:25:12', '2024-07-10 04:25:12'),
(4, 'Food/healthitem', 'Food-healthitem', NULL, NULL, 1, 0, NULL, 1, '2024-07-10 06:09:30', '2024-07-10 06:09:30'),
(5, 'Oksem Cook', 'Oksemcook', NULL, NULL, 0, 0, NULL, 1, '2024-07-10 06:10:49', '2024-07-10 06:10:49'),
(6, 'Car accessories', 'Car accessories', NULL, NULL, 6, 0, NULL, 1, '2024-07-10 06:12:15', '2024-07-10 06:12:15'),
(7, 'Brand shop', 'Brand shop', NULL, NULL, 7, 0, NULL, 1, '2024-07-10 06:14:08', '2024-07-10 06:14:08'),
(8, 'Pay shop', 'pay shop', NULL, NULL, 8, 0, NULL, 1, '2024-07-14 03:54:58', '2024-07-14 03:54:58'),
(9, '1st Brander', '1st Brander', NULL, NULL, 9, 0, NULL, 1, '2024-07-14 03:55:57', '2024-07-14 03:55:57'),
(16, 'Fashion', 'Fashion', NULL, NULL, 5, 0, NULL, 1, '2024-05-21 22:17:00', '2024-05-21 22:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Blue', '#0000FF', '1', '2024-05-22 05:55:38', '2024-05-22 06:04:57'),
(2, 'White', '#FFFFFF', '1', '2024-05-22 05:55:38', '2024-05-22 06:04:57'),
(3, 'Red', '#FF0000', '1', '2024-08-07 05:50:00', '2024-08-07 05:50:00'),
(4, 'Purple', '#800080', '1', '2024-08-07 05:50:00', '2024-08-07 05:50:00'),
(5, 'Maroon', '#800000', '1', '2024-08-07 05:50:00', '2024-08-07 05:50:00'),
(6, 'Lime', '#00FF00', '1', '2024-08-07 05:50:00', '2024-08-07 05:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(16, '2024_05_14_194707_create_sliders_table', 2),
(21, '2014_10_12_000000_create_users_table', 3),
(22, '2024_05_11_020714_create_units_table', 4),
(23, '2024_05_13_170939_create_categories_table', 5),
(24, '2024_05_13_171029_create_brands_table', 5),
(25, '2024_05_13_171047_create_products_table', 5),
(26, '2024_04_18_082725_create_orders_table', 6),
(27, '2024_05_22_112451_create_colors_table', 7),
(28, '2024_05_22_120603_create_sizes_table', 8),
(29, '2024_04_18_082746_create_order_lines_table', 9),
(30, '2024_04_18_083328_create_order_payments_table', 9),
(31, '2024_04_18_083743_create_order_life_cycles_table', 9),
(32, '2024_05_24_022901_create_product_images_table', 9),
(33, '2024_05_24_160212_create_product_variations_table', 9),
(35, '2024_07_28_052336_create_reviews_table', 10),
(36, '2024_08_14_064747_add_role_to_users_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address_line_1` text NOT NULL,
  `address_line_2` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `shipping_fees` double(20,4) DEFAULT NULL,
  `tax` double(20,4) DEFAULT NULL,
  `vat` double(20,4) DEFAULT NULL,
  `discount` double(20,4) DEFAULT NULL,
  `promo_code` varchar(255) DEFAULT NULL,
  `total` double(20,4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `email`, `full_name`, `address_line_1`, `address_line_2`, `country`, `city`, `state`, `zip`, `shipping_fees`, `tax`, `vat`, `discount`, `promo_code`, `total`, `created_at`, `updated_at`) VALUES
(1, 'humirajannatnoyan2023@gmail.com', 'Humaira Jannat', '', NULL, 'Bangladesh', 'Chittagong Sadar', 'hdsgfhdfg', '4212', NULL, NULL, NULL, NULL, NULL, 0.0000, '2024-07-31 03:18:59', '2024-07-31 03:18:59'),
(2, 'humirajannatnoyan2023@gmail.com', 'Humaira Jannat', '', NULL, 'Bangladesh', 'Chittagong Sadar', 'hdsgfhdfg', '4212', NULL, NULL, NULL, NULL, NULL, 0.0000, '2024-07-31 03:21:18', '2024-07-31 03:21:18'),
(3, 'noyan@gmail.com', 'noyan m', '', NULL, 'Bangladesh', 'Chittagong Sadar', 'gfdghjf', '4212', NULL, NULL, NULL, NULL, NULL, 0.0000, '2024-08-08 02:55:06', '2024-08-08 02:55:06'),
(5, 'noyan@gmail.com', 'noyan m', '', NULL, 'Bangladesh', 'Chittagong Sadar', 'gfdghjf', '4212', NULL, NULL, NULL, NULL, NULL, 0.0000, '2024-08-08 03:00:29', '2024-08-08 03:00:29'),
(6, 'noyan@gmail.com', 'noyan m', '', NULL, 'Bangladesh', 'Chittagong Sadar', 'gfdghjf', '4212', NULL, NULL, NULL, NULL, NULL, 0.0000, '2024-08-08 03:07:34', '2024-08-08 03:07:34'),
(10, 'fijeme@mailinator.com', 'Lysandra Shaw', '', NULL, 'Ad atque velit est e', 'Cillum aliquip enim', 'Doloremque maxime la', '94418', NULL, NULL, NULL, NULL, NULL, 0.0000, '2024-08-09 23:31:39', '2024-08-09 23:31:39'),
(11, 'pawobu@mailinator.com', 'Jerry Chang', '', NULL, 'Est quia architecto', 'In quaerat proident', 'Rerum aut sint minu', '39049', NULL, NULL, NULL, NULL, NULL, 0.0000, '2024-08-11 22:54:21', '2024-08-11 22:54:21'),
(15, 'lyjexusehy@mailinator.com', 'Darryl Vargas', '', NULL, 'Numquam numquam ex d', 'Ut non molestiae nos', 'Sit qui veritatis v', '48234', NULL, NULL, NULL, NULL, NULL, 0.0000, '2024-08-12 22:40:55', '2024-08-12 22:40:55'),
(16, 'xuxyduqopo@mailinator.com', 'Lucy Myers', '', NULL, 'Neque et dolore ea c', 'Neque nulla rerum co', 'Elit veniam est ve', '69658', NULL, NULL, NULL, NULL, NULL, 0.0000, '2024-08-12 23:01:31', '2024-08-12 23:01:31'),
(17, 'xuxyduqopo@mailinator.com', 'Lucy Myers', '', NULL, 'Neque et dolore ea c', 'Neque nulla rerum co', 'Elit veniam est ve', '69658', NULL, NULL, NULL, NULL, NULL, 0.0000, '2024-08-12 23:02:10', '2024-08-12 23:02:10'),
(18, 'xuxyduqopo@mailinator.com', 'Lucy Myers', '', NULL, 'Neque et dolore ea c', 'Neque nulla rerum co', 'Elit veniam est ve', '69658', NULL, NULL, NULL, NULL, NULL, 0.0000, '2024-08-12 23:02:34', '2024-08-12 23:02:34'),
(19, 'xuxyduqopo@mailinator.com', 'Lucy Myers', '', NULL, 'Neque et dolore ea c', 'Neque nulla rerum co', 'Elit veniam est ve', '69658', NULL, NULL, NULL, NULL, NULL, 0.0000, '2024-08-12 23:02:55', '2024-08-12 23:02:55'),
(20, 'xuxyduqopo@mailinator.com', 'Lucy Myers', '', NULL, 'Neque et dolore ea c', 'Neque nulla rerum co', 'Elit veniam est ve', '69658', NULL, NULL, NULL, NULL, NULL, 0.0000, '2024-08-12 23:03:06', '2024-08-12 23:03:06'),
(21, 'jojy@mailinator.com', 'Skyler Crawford', '', NULL, 'Fugiat dolor eligend', 'Sed earum voluptate', 'Esse distinctio Do', '99045', NULL, NULL, NULL, NULL, NULL, 0.0000, '2024-08-12 23:10:59', '2024-08-12 23:10:59'),
(22, 'pirovu@mailinator.com', 'Kyla Baker', '', NULL, 'Quod sint consequunt', 'Exercitation molesti', 'Magnam quas consequa', '92666', NULL, NULL, NULL, NULL, NULL, 0.0000, '2024-08-13 00:52:14', '2024-08-13 00:52:14'),
(23, 'myfaken@mailinator.com', 'Phyllis Allen', '', NULL, 'Omnis sint autem exe', 'Quia quo dolor tempo', 'Harum aut dolorum cu', '69341', NULL, NULL, NULL, NULL, NULL, 0.0000, '2024-08-27 04:53:37', '2024-08-27 04:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `order_life_cycles`
--

CREATE TABLE `order_life_cycles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_life_cycles`
--

INSERT INTO `order_life_cycles` (`id`, `order_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 4, 'empty', '2024-08-08 02:59:37', '2024-08-08 02:59:37'),
(2, 5, 'empty', '2024-08-08 03:00:29', '2024-08-08 03:00:29'),
(3, 6, 'empty', '2024-08-08 03:07:34', '2024-08-08 03:07:34'),
(4, 7, 'empty', '2024-08-08 03:08:01', '2024-08-08 03:08:01'),
(5, 8, 'empty', '2024-08-08 04:21:52', '2024-08-08 04:21:52'),
(6, 9, 'empty', '2024-08-08 04:31:03', '2024-08-08 04:31:03'),
(7, 10, 'empty', '2024-08-09 23:31:39', '2024-08-09 23:31:39'),
(8, 11, 'empty', '2024-08-11 22:54:21', '2024-08-11 22:54:21'),
(9, 12, 'empty', '2024-08-12 22:37:02', '2024-08-12 22:37:02'),
(10, 13, 'empty', '2024-08-12 22:39:33', '2024-08-12 22:39:33'),
(11, 14, 'empty', '2024-08-12 22:39:41', '2024-08-12 22:39:41'),
(12, 15, 'empty', '2024-08-12 22:40:55', '2024-08-12 22:40:55'),
(13, 16, 'empty', '2024-08-12 23:01:31', '2024-08-12 23:01:31'),
(14, 17, 'empty', '2024-08-12 23:02:10', '2024-08-12 23:02:10'),
(15, 18, 'empty', '2024-08-12 23:02:34', '2024-08-12 23:02:34'),
(16, 19, 'empty', '2024-08-12 23:02:55', '2024-08-12 23:02:55'),
(17, 20, 'empty', '2024-08-12 23:03:06', '2024-08-12 23:03:06'),
(18, 21, 'empty', '2024-08-12 23:10:59', '2024-08-12 23:10:59'),
(19, 22, 'empty', '2024-08-13 00:52:14', '2024-08-13 00:52:14'),
(20, 23, 'empty', '2024-08-27 04:53:37', '2024-08-27 04:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `order_lines`
--

CREATE TABLE `order_lines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_lines`
--

INSERT INTO `order_lines` (`id`, `order_id`, `product_id`, `color`, `size`, `qty`, `sale_price`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 4, 14, '', '', 0, 0, '', '2024-08-08 02:59:37', '2024-08-08 02:59:37'),
(2, 4, 17, '', '', 0, 0, '', '2024-08-08 02:59:37', '2024-08-08 02:59:37'),
(3, 4, 25, '', '', 0, 0, '', '2024-08-08 02:59:37', '2024-08-08 02:59:37'),
(4, 4, 4, '', '', 0, 0, '', '2024-08-08 02:59:37', '2024-08-08 02:59:37'),
(5, 4, 23, '', '', 0, 0, '', '2024-08-08 02:59:37', '2024-08-08 02:59:37'),
(6, 4, 23, '', '', 0, 0, '', '2024-08-08 02:59:37', '2024-08-08 02:59:37'),
(7, 5, 14, '', '', 0, 0, '', '2024-08-08 03:00:29', '2024-08-08 03:00:29'),
(8, 5, 17, '', '', 0, 0, '', '2024-08-08 03:00:29', '2024-08-08 03:00:29'),
(9, 5, 25, '', '', 0, 0, '', '2024-08-08 03:00:29', '2024-08-08 03:00:29'),
(10, 5, 4, '', '', 0, 0, '', '2024-08-08 03:00:29', '2024-08-08 03:00:29'),
(11, 5, 23, '', '', 0, 0, '', '2024-08-08 03:00:29', '2024-08-08 03:00:29'),
(12, 5, 23, '', '', 0, 0, '', '2024-08-08 03:00:29', '2024-08-08 03:00:29'),
(13, 6, 14, '', '', 0, 0, '', '2024-08-08 03:07:34', '2024-08-08 03:07:34'),
(14, 6, 17, '', '', 0, 0, '', '2024-08-08 03:07:34', '2024-08-08 03:07:34'),
(15, 6, 25, '', '', 0, 0, '', '2024-08-08 03:07:34', '2024-08-08 03:07:34'),
(16, 6, 4, '', '', 0, 0, '', '2024-08-08 03:07:34', '2024-08-08 03:07:34'),
(17, 6, 23, '', '', 0, 0, '', '2024-08-08 03:07:34', '2024-08-08 03:07:34'),
(18, 6, 23, '', '', 0, 0, '', '2024-08-08 03:07:34', '2024-08-08 03:07:34'),
(19, 7, 14, '', '', 0, 0, '', '2024-08-08 03:08:01', '2024-08-08 03:08:01'),
(20, 7, 17, '', '', 0, 0, '', '2024-08-08 03:08:01', '2024-08-08 03:08:01'),
(21, 7, 25, '', '', 0, 0, '', '2024-08-08 03:08:01', '2024-08-08 03:08:01'),
(22, 7, 4, '', '', 0, 0, '', '2024-08-08 03:08:01', '2024-08-08 03:08:01'),
(23, 7, 23, '', '', 0, 0, '', '2024-08-08 03:08:01', '2024-08-08 03:08:01'),
(24, 7, 23, '', '', 0, 0, '', '2024-08-08 03:08:01', '2024-08-08 03:08:01'),
(25, 8, 14, '', '', 0, 0, '', '2024-08-08 04:21:52', '2024-08-08 04:21:52'),
(26, 8, 17, '', '', 0, 0, '', '2024-08-08 04:21:52', '2024-08-08 04:21:52'),
(27, 8, 25, '', '', 0, 0, '', '2024-08-08 04:21:52', '2024-08-08 04:21:52'),
(28, 8, 4, '', '', 0, 0, '', '2024-08-08 04:21:52', '2024-08-08 04:21:52'),
(29, 8, 23, '', '', 0, 0, '', '2024-08-08 04:21:52', '2024-08-08 04:21:52'),
(30, 8, 23, '', '', 0, 0, '', '2024-08-08 04:21:52', '2024-08-08 04:21:52'),
(31, 10, 14, '', '', 0, 0, '', '2024-08-09 23:31:39', '2024-08-09 23:31:39'),
(32, 10, 17, '', '', 0, 0, '', '2024-08-09 23:31:39', '2024-08-09 23:31:39'),
(33, 10, 25, '', '', 0, 0, '', '2024-08-09 23:31:39', '2024-08-09 23:31:39'),
(34, 10, 4, '', '', 0, 0, '', '2024-08-09 23:31:39', '2024-08-09 23:31:39'),
(35, 10, 23, '', '', 0, 0, '', '2024-08-09 23:31:39', '2024-08-09 23:31:39'),
(36, 10, 23, '', '', 0, 0, '', '2024-08-09 23:31:39', '2024-08-09 23:31:39'),
(37, 10, 17, '', '', 0, 0, '', '2024-08-09 23:31:39', '2024-08-09 23:31:39'),
(38, 11, 14, '', '', 0, 0, '', '2024-08-11 22:54:21', '2024-08-11 22:54:21'),
(39, 11, 17, '', '', 0, 0, '', '2024-08-11 22:54:21', '2024-08-11 22:54:21'),
(40, 11, 25, '', '', 0, 0, '', '2024-08-11 22:54:21', '2024-08-11 22:54:21'),
(41, 11, 4, '', '', 0, 0, '', '2024-08-11 22:54:21', '2024-08-11 22:54:21'),
(42, 11, 23, '', '', 0, 0, '', '2024-08-11 22:54:21', '2024-08-11 22:54:21'),
(43, 11, 23, '', '', 0, 0, '', '2024-08-11 22:54:21', '2024-08-11 22:54:21'),
(44, 11, 17, '', '', 0, 0, '', '2024-08-11 22:54:21', '2024-08-11 22:54:21'),
(45, 12, 17, '', '', 0, 0, '', '2024-08-12 22:37:02', '2024-08-12 22:37:02'),
(46, 13, 17, '', '', 0, 0, '', '2024-08-12 22:39:33', '2024-08-12 22:39:33'),
(47, 14, 17, '', '', 0, 0, '', '2024-08-12 22:39:41', '2024-08-12 22:39:41'),
(48, 15, 17, '', '', 0, 0, '', '2024-08-12 22:40:55', '2024-08-12 22:40:55'),
(49, 16, 17, '', '', 0, 0, '', '2024-08-12 23:01:31', '2024-08-12 23:01:31'),
(50, 17, 17, '', '', 0, 0, '', '2024-08-12 23:02:10', '2024-08-12 23:02:10'),
(51, 18, 17, '', '', 0, 0, '', '2024-08-12 23:02:34', '2024-08-12 23:02:34'),
(52, 19, 17, '', '', 0, 0, '', '2024-08-12 23:02:55', '2024-08-12 23:02:55'),
(53, 20, 17, '', '', 0, 0, '', '2024-08-12 23:03:06', '2024-08-12 23:03:06'),
(54, 21, 17, '', '', 0, 0, '', '2024-08-12 23:10:59', '2024-08-12 23:10:59'),
(55, 22, 17, '', '', 0, 0, '', '2024-08-13 00:52:14', '2024-08-13 00:52:14'),
(56, 23, 17, '', '', 0, 0, '', '2024-08-27 04:53:37', '2024-08-27 04:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `order_payments`
--

CREATE TABLE `order_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'Paid',
  `payment_method` varchar(255) NOT NULL,
  `payee_email` varchar(255) DEFAULT NULL,
  `payee_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `best_seller` tinyint(1) NOT NULL DEFAULT 0,
  `new` tinyint(1) NOT NULL DEFAULT 0,
  `hot` tinyint(1) NOT NULL DEFAULT 0,
  `sale_off` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `name`, `slug`, `sku`, `description`, `content`, `image`, `status`, `featured`, `best_seller`, `new`, `hot`, `sale_off`, `created_at`, `updated_at`) VALUES
(1, 16, 10, 'burger6', 'burger6', 'bhvbcvbcv', NULL, NULL, 'products/SqPIrUqm2s1720584103.jpg', 1, 0, 1, 0, 0, 0, '2024-07-10 05:26:43', '2024-07-10 05:26:43'),
(2, 2, 10, 'burger5', 'burger5', 'bhvb', NULL, NULL, 'products/SqPIrUqm2s1720584103.jpg', 1, 0, 1, 0, 0, 0, '2024-07-10 05:25:27', '2024-07-10 05:25:27'),
(3, 4, 10, 'burger3', 'burger3', 'hfghhjkj', NULL, NULL, 'products/SqPIrUqm2s1720584103.jpg', 1, 0, 1, 0, 0, 0, '2024-07-10 04:17:39', '2024-07-10 04:17:39'),
(4, 3, 10, 'burger2', 'burger2', 'hfghhj', 'Discover how to write content for a product that captivates your audience and drives conversions. Master SEO, storytelling, visuals, and mobile optimization with our comprehensive guide. Unleash your product\'s full potential today!', 'Use vivid, sensory language and storytelling techniques to bring your product to life and create a more immersive experience for your audience.', 'products/SqPIrUqm2s1720584103.jpg', 0, 0, 1, 0, 0, 0, '2024-07-09 18:00:00', '2024-07-09 18:00:00'),
(5, 2, 10, 'burger1', 'burger1', 'hfghjgjkhgjbvb', NULL, NULL, 'products/SqPIrUqm2s1720584103.jpg', 1, 1, 0, 0, 0, 0, '2024-07-09 18:00:00', '2024-07-09 18:00:00'),
(7, 5, 10, 'burger7', 'burger7', 'hfghjgjkhgjbvgfhg', NULL, NULL, 'products/SqPIrUqm2s1720584103.jpg', 1, 1, 0, 0, 0, 0, '2024-07-10 05:28:24', '2024-07-10 05:28:24'),
(8, 16, 10, 'burger8', 'burger8', 'hfghjgjkhgjbvgfhgfdgdg', NULL, NULL, 'products/SqPIrUqm2s1720584103.jpg', 1, 1, 0, 0, 0, 0, '2024-07-10 05:29:59', '2024-07-10 05:29:59'),
(9, 1, 10, 'burger9', 'burger9', 'hfghjgjkhgjbvgfjh', NULL, NULL, 'products/SqPIrUqm2s1720584103.jpg', 1, 1, 0, 0, 0, 1, '2024-07-10 05:34:50', '2024-07-10 05:34:50'),
(17, 16, 10, 'oksemcook', 'Fashion', 'dgdggfhfh', 'umbrella, a portable, hand-held device that is used for protection against rain and sunlight. The modern umbrella consists of a circular fabric or plastic screen stretched over hinged ribs that radiate from a central pole', NULL, 'products/sBr0hFDbVK1720524947.jpg', 1, 1, 1, 1, 1, 1, '2024-07-09 05:35:47', '2024-07-09 05:35:47'),
(18, 7, 10, 'sorma', 'htfhgfhjdzsfs', 'hfghjgjk', NULL, NULL, 'products/EcLzh7Juf11720525084.jpg', 1, 0, 1, 1, 0, 0, '2024-07-09 05:38:04', '2024-07-09 05:38:04'),
(20, 16, 10, 'burger', 'burger', 'hfghjgjkhgj', NULL, NULL, 'products/SqPIrUqm2s1720584103.jpg', 1, 1, 0, 0, 0, 0, '2024-07-09 22:01:43', '2024-07-09 22:01:43'),
(23, 4, 11, 'xyz', 'fdgfd', 'rtyrty', NULL, NULL, 'products/ALDeeiRCmu1720854504.jpg', 1, 1, 0, 0, 0, 0, '2024-07-13 01:08:24', '2024-07-13 01:08:24'),
(24, 3, 11, 'Humira', 'fgfg', 'werfetfestger', '<p>best product</p>', NULL, 'products/1IluuGcorj1721117714.png', 1, 1, 1, 0, 0, 1, '2024-07-16 02:15:14', '2024-08-12 22:31:38'),
(28, 8, 10, 'sohan', 'vzxcvcxv', 'xcvcxvx', '<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>', NULL, 'products/minwFAemjP1721128075.jpg', 1, 1, 1, 0, 0, 1, '2024-07-16 05:07:55', '2024-08-12 22:32:57'),
(30, 16, 11, 'Jewellery', 'htfhgfhjdzsfsdg', 'dgdggfhfhhfg', NULL, NULL, 'products/ornJ8PzUy31723523291.jpg', 1, 0, 1, 1, 0, 1, '2024-08-12 22:28:11', '2024-08-12 22:28:11'),
(31, 3, 10, 'Garden', 'sadsfsdfdfgdg', 'edsadsadzda', NULL, NULL, 'products/Nrl6TXCj2S1723523398.jpg', 1, 0, 1, 0, 0, 0, '2024-08-12 22:29:58', '2024-08-12 22:29:58'),
(32, 4, 10, 'sohan', 'dfgfdhgf', 'dgdggfhfhgdf', '<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>', NULL, 'products/slP5imvw2X1723523733.jpg', 1, 1, 0, 0, 0, 1, '2024-08-12 22:35:33', '2024-08-13 00:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 17, 'products/sBr0hFDbVK1720524947.jpg', '2024-07-09 05:35:47', '2024-07-09 05:35:47'),
(2, 18, 'products/EcLzh7Juf11720525084.jpg', '2024-07-09 05:38:04', '2024-07-09 05:38:04'),
(3, 20, 'products/SqPIrUqm2s1720584103.jpg', '2024-07-09 22:01:43', '2024-07-09 22:01:43'),
(4, 22, 'products/D8bY5a27BH1720608233.jpg', '2024-07-10 04:43:54', '2024-07-10 04:43:54'),
(5, 23, 'products/ALDeeiRCmu1720854504.jpg', '2024-07-13 01:08:25', '2024-07-13 01:08:25'),
(6, 24, 'products/1IluuGcorj1721117714.png', '2024-07-16 02:15:14', '2024-07-16 02:15:14'),
(10, 28, 'products/minwFAemjP1721128075.jpg', '2024-07-16 05:07:55', '2024-07-16 05:07:55'),
(12, 30, 'products/ornJ8PzUy31723523291.jpg', '2024-08-12 22:28:11', '2024-08-12 22:28:11'),
(13, 31, 'products/Nrl6TXCj2S1723523398.jpg', '2024-08-12 22:29:58', '2024-08-12 22:29:58'),
(14, 32, 'products/slP5imvw2X1723523733.jpg', '2024-08-12 22:35:33', '2024-08-12 22:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `product_variations`
--

CREATE TABLE `product_variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` int(11) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `composite_key` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variations`
--

INSERT INTO `product_variations` (`id`, `product_id`, `color_id`, `size`, `weight`, `image`, `price`, `stock`, `composite_key`, `created_at`, `updated_at`) VALUES
(1, 17, 2, 'L', NULL, 'products/UXFa3yBV3F1720524947.jpg', 300, NULL, '17-2-L', '2024-07-09 05:35:47', '2024-07-09 05:35:47'),
(2, 18, 2, 'L', NULL, 'products/0ZRS4noVQw1720525084.jpg', 400, NULL, '18-2-L', '2024-07-09 05:38:04', '2024-07-09 05:38:04'),
(3, 20, 2, 'L', NULL, 'products/kLpZQOznKK1720584103.jpg', 400, NULL, '20-2-L', '2024-07-09 22:01:43', '2024-07-09 22:01:43'),
(5, 23, 4, '2XL', NULL, 'products/e3Bjdt5Y491720854505.jpg', 300, NULL, '23-4-2XL', '2024-07-13 01:08:25', '2024-07-13 01:08:25'),
(12, 30, 4, 'Small', NULL, 'products/O3EDPJ4KqR1723523291.jfif', 1000, NULL, '30-4-Small', '2024-08-12 22:28:11', '2024-08-12 22:28:11'),
(13, 31, 5, 'XL', NULL, 'products/ss9uYBvplb1723523398.jfif', 1200, NULL, '31-5-XL', '2024-08-12 22:29:58', '2024-08-12 22:29:58'),
(14, 24, 2, 'L', NULL, NULL, 1000, NULL, '24-2-L', '2024-08-12 22:31:38', '2024-08-12 22:31:38'),
(15, 28, 2, 'L', NULL, NULL, 1100, NULL, '28-2-L', '2024-08-12 22:32:57', '2024-08-12 22:32:57'),
(17, 32, 6, 'Medium', NULL, NULL, 700, NULL, '32-6-Medium', '2024-08-13 00:11:17', '2024-08-13 00:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `review` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_id`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(1, 18, 4, 4, 'Abc', NULL, NULL),
(2, 4, 2, 4, 'In today\'s rapidly growing and highly competitive e-commerce industry, it is becoming increasingly important for sellers to effectively select products, improve customer experience, and ultimately be able to increase their market sales and strengthen their brand.', '2024-08-12 05:46:18', '2024-08-12 05:46:18');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `identity` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `type`, `identity`, `created_at`, `updated_at`) VALUES
(3, 'Super Admin', 'super_admin', '2024-08-15 05:06:29', '2024-08-14 23:50:49'),
(4, 'Super Admin3', 'super_admin3', '2024-08-15 06:10:11', '2024-08-15 06:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'XL', NULL, 1, '2024-08-07 05:42:57', '2024-08-07 05:42:57'),
(2, 'L', NULL, 1, '2024-05-22 06:37:31', '2024-05-22 06:38:33'),
(3, 'M', NULL, 1, '2024-08-07 05:45:12', '2024-08-07 05:45:12'),
(4, 'Large', NULL, 1, '2024-08-07 05:45:12', '2024-08-07 05:45:12'),
(5, 'Small', NULL, 1, '2024-08-07 05:45:12', '2024-08-07 05:45:12'),
(6, 'Medium', NULL, 1, '2024-08-07 05:45:12', '2024-08-07 05:45:12'),
(7, '2XL', NULL, 1, '2024-08-07 05:45:12', '2024-08-07 05:45:12');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_location` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_location`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(9, '1', 'sliders/rNFV8qjrPy1720855371.jpg', NULL, 1, '2024-07-13 01:22:51', '2024-07-13 01:22:51'),
(12, '1', 'sliders/JOO7hlklcp1723438010.jpg', NULL, 1, '2024-08-11 22:46:50', '2024-08-11 22:46:50'),
(16, '1', 'sliders/h4E7MaYhYW1723442638.jpg', NULL, 1, '2024-08-12 00:03:58', '2024-08-12 00:03:58'),
(17, '1', 'sliders/f5b9RGF0MC1723442703.jpg', NULL, 0, '2024-08-12 00:05:03', '2024-08-12 00:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `short_name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Kilogram', 'kg', 'scsc', 'sxcddfs', '2024-05-17 23:56:20', '2024-05-17 23:56:20'),
(4, 'Flowers', 'Rooney Lucas', 'htfhgfhjdzsfs', 'hjhgfhdsaddsf', '2024-08-15 00:11:05', '2024-08-15 00:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'user' COMMENT 'user, admin, affiliate',
  `remember_token` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_id`, `email_verified_at`, `password`, `type`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'rahi@user.com', 'rahi@user.com', NULL, NULL, '$2y$10$lJcwKg/W8/heVMS/c3gA4eaUYW68HEsCf08SRz4RbPc/d5Jd8nide', 'user', NULL, 1, '2024-04-30 23:25:19', '2024-04-30 23:25:19'),
(2, 'rahi@admin.com', 'rahi@admin.com', NULL, NULL, '$2y$10$lJcwKg/W8/heVMS/c3gA4eaUYW68HEsCf08SRz4RbPc/d5Jd8nide', 'admin', NULL, 1, '2024-05-01 05:29:02', '2024-05-01 05:29:03'),
(3, 'rahi@affiliate.com', 'rahi@affiliate.com', NULL, NULL, '$2y$10$lJcwKg/W8/heVMS/c3gA4eaUYW68HEsCf08SRz4RbPc/d5Jd8nide', 'affiliate', NULL, 1, '2024-05-01 05:30:44', '2024-05-01 05:30:46'),
(4, 'Monayem Hosen', 'rahi@affiliate2.com', NULL, NULL, '$2y$10$G2F/GuqW/7j91QGhRqXWh.SyCqQkCkE9xSF0Vf6moEAnDMGVGM3jy', 'affiliate', NULL, 0, '2024-04-30 23:32:25', '2024-04-30 23:32:25'),
(5, 'noyan@admin.com', 'noyan@admin.com', NULL, NULL, '$2y$10$qLD8Rasize5nvEXAVENOh.8VDcT4chqIsQ9ZmhXhNO1tUASKlyuiy', 'admin', NULL, 1, '2024-08-14 09:33:50', '2024-08-14 09:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `users_new`
--

CREATE TABLE `users_new` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'user' COMMENT 'user, admin, affiliate',
  `remember_token` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_life_cycles`
--
ALTER TABLE `order_life_cycles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_lines`
--
ALTER TABLE `order_lines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_payments`
--
ALTER TABLE `order_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD UNIQUE KEY `products_sku_unique` (`sku`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variations_product_id_foreign` (`product_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `units_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_life_cycles`
--
ALTER TABLE `order_life_cycles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order_lines`
--
ALTER TABLE `order_lines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `order_payments`
--
ALTER TABLE `order_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD CONSTRAINT `product_variations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 04, 2023 at 04:10 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `essence`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Size', 'S', '2023-02-09 02:35:57', '2023-02-09 02:35:57'),
(2, 'Size', 'M', '2023-02-09 02:36:04', '2023-02-09 02:36:04'),
(3, 'Size', 'L', '2023-02-09 02:36:09', '2023-02-09 02:36:09'),
(4, 'Size', 'XL', '2023-02-09 02:36:15', '2023-02-09 02:36:15'),
(5, 'Color', 'White', '2023-02-09 02:36:20', '2023-02-09 02:36:20'),
(6, 'Color', 'Black', '2023-02-09 02:36:25', '2023-02-09 02:36:25'),
(7, 'Color', 'Blue', '2023-02-09 02:36:31', '2023-02-09 02:36:31'),
(8, 'Color', 'Red', '2023-02-09 02:36:37', '2023-02-09 02:36:37'),
(9, 'Color', 'Green', '2023-02-10 03:45:48', '2023-02-10 03:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_id` bigint UNSIGNED NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'TOPSHOP', 'brand1.png', 1, '2023-02-09 02:38:39', '2023-02-09 02:38:39'),
(2, 'Mango', 'brand2.png', 1, '2023-02-09 02:38:55', '2023-02-09 02:38:55'),
(3, 'Zara', 'brand3.png', 1, '2023-02-09 02:39:06', '2023-02-09 02:39:06'),
(4, 'Bershka', 'brand4.png', 1, '2023-02-09 02:39:20', '2023-02-09 02:39:20'),
(5, 'Asos', 'brand5.png', 1, '2023-02-09 02:39:38', '2023-02-09 02:39:38'),
(6, 'River island', 'brand6.png', 1, '2023-02-09 02:39:55', '2023-02-09 02:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` bigint UNSIGNED NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'T-shirt Men', 2, 1, NULL, NULL),
(3, 'Shirt Men', 2, 1, NULL, NULL),
(4, 'Sweater Men', 2, 1, NULL, NULL),
(6, 'Hoodie Men', 2, 1, NULL, NULL),
(7, 'Jeans Men\n', 2, 1, NULL, NULL),
(9, 'Jogger Men', 2, 1, NULL, NULL),
(12, 'T-shirt Women', 1, 1, NULL, NULL),
(15, 'Shirt Women', 1, 1, NULL, NULL),
(16, 'Sweater Women', 1, 1, NULL, NULL),
(19, 'Hoodie Women', 1, 1, NULL, NULL),
(20, 'Jeans Women', 1, 1, NULL, NULL),
(21, 'Jogger Women', 1, 1, NULL, NULL),
(22, 'jacket Women', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_types`
--

CREATE TABLE `category_types` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_types`
--

INSERT INTO `category_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Women', NULL, NULL),
(2, 'Men', NULL, NULL),
(3, 'Kids', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_12_22_122526_create_brands_table', 1),
(5, '2022_12_22_125915_create_attributes_table', 1),
(6, '2022_12_22_133032_create_users_table', 1),
(7, '2022_12_22_134312_create_payment_methods_table', 1),
(8, '2023_02_07_172824_create_category_types_table', 1),
(9, '2023_02_07_173014_create_categories_table', 1),
(10, '2023_02_07_173806_create_banners_table', 1),
(11, '2023_02_07_175238_create_products_table', 1),
(12, '2023_02_07_180051_create_orders_table', 1),
(13, '2023_02_07_180415_create_order_details_table', 1),
(14, '2023_02_07_180654_create_product_images_table', 1),
(15, '2023_02_07_181244_create_product_attrs_table', 1),
(16, '2023_09_18_070306_add_color_to_order_details', 2),
(17, '2023_10_03_105423_create_sessions_table', 2),
(18, '2014_10_12_000000_create_users_table', 3),
(19, '2014_10_12_200000_add_two_factor_columns_to_users_table', 3),
(20, '2023_10_04_020047_add_google_id_column', 4),
(21, '2023_10_04_022534_add_column_user', 5),
(22, '2023_10_04_022939_add_column_role_user', 6),
(23, '2023_10_04_023720_add_column_role_user', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `status` tinyint NOT NULL,
  `total_quantity` double UNSIGNED NOT NULL,
  `total_price` double(8,2) UNSIGNED NOT NULL,
  `note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint UNSIGNED NOT NULL,
  `pro_id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int UNSIGNED NOT NULL,
  `unit_price` int NOT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `sale_price` double NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `brand_id` bigint UNSIGNED NOT NULL,
  `origin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int UNSIGNED NOT NULL,
  `type` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `sale_price`, `description`, `image`, `status`, `category_id`, `brand_id`, `origin`, `year`, `stock`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Floral embroidered cotton jogger pants', 1163000, 1000000, '<ul>\r\n	<li>Jogging pants containing organic loop-back cotton, animated with a pixelated logo, Creeper motif and floral embroidery. Part of a new collaboration between Burberry and Minecraft, the design evokes the adventure-filled realms explored within the game &ndash; inspired by our affinity for the natural world. The exclusive collection of clothing and accessories joins immersive retail environments and an adventure game titled &lsquo;Burberry: Freedom to Go Beyond&rsquo; available for download from the Minecraft marketplace.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Jogging pant inside leg length: 77.5cm/30.5in. This is based on a size UK M as proportions change slightly according to size.</li>\r\n	<li>Model&rsquo;s height: 191cm/6ft 3in. Model wears size UK M.</li>\r\n</ul>', 'jg1.2.jpg', 1, 9, 4, 'VIETNAM', '2023', 50, NULL, NULL, NULL),
(4, 'carpenter pattern wide leg jeans', 990000, 900000, '<p>Our Curve &amp; Plus Cool Carpenter Wide Leg Jeans feature a high-waisted fit, wide leg, and slouchy, oversized fit. With a dark-wash denim material and cargo-style pockets throughout, these trousers are perfect for achieving that off-duty model look. Pair with your favorite graphic tee or white tank to complete the look.</p>\r\n\r\n<div class=\"ddict_btn\" style=\"top: 49px; left: 147.906px;\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>', 'jean2.jpg', 1, 7, 2, 'VIETNAM', '2023', 50, NULL, NULL, NULL),
(5, 'Multi-pocket jeans', 999000, 900000, '<p>2ESHTM2JE11727CT</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Considerably washed with fading and whisker details, this pair of cropped fit jeans is adorned with bi-color seagull print on the back pockets. Up your styling game with colorful sneakers this summer.</p>\r\n\r\n<ul>\r\n	<li>2027 Cropped fit</li>\r\n	<li>Seagull print</li>\r\n	<li>5 pockets</li>\r\n	<li>Button fly</li>\r\n	<li>Godhead leather patch</li>\r\n	<li>100% Cotton</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>FIT &amp; STYLING</strong>: 2027 CROPPED</p>\r\n\r\n<div class=\"ddict_btn\" style=\"top: 37px; left: 147.906px;\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>', 'jean1.jpg', 1, 7, 6, 'VIETNAM', '2023', 30, NULL, NULL, NULL),
(6, 'Collar short sleeve shirt', 550000, 450000, '<p>Nhập m&ocirc; tả sản phẩm</p>', '1136296250_2_7_4.jpg', 1, 3, 4, 'VIETNAM', '2022', 35, NULL, NULL, NULL),
(7, 'Suede effect jacket', 690000, 550000, '<p>Description<br />\r\nModel size: L</p>\r\n\r\n<p>Model&#39;s height: 188cm</p>\r\n\r\n<p>White color</p>\r\n\r\n<p>Composition<br />\r\nAbroad<br />\r\n93% polyester</p>\r\n\r\n<p>7% elastane</p>\r\n\r\n<p>Cover<br />\r\n100% polyester</p>\r\n\r\n<div class=\"ddict_btn\" style=\"top: 44px; left: 147.906px;\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>', '3380644250_2_7_4.jpg', 1, 6, 2, 'VIETNAM', '2023', 36, NULL, NULL, NULL),
(8, 'Orange striped sweater', 800000, 650000, '<p>Basic shape sweater, heart collar with color scheme at the neck.</p>', '1836645712_2_3_3.jpg', 1, 4, 5, 'VIETNAM', '2023', 50, NULL, NULL, NULL),
(9, 'Long puffer coat', 1800000, 1500000, '<h2>Descripci&oacute;n</h2>\r\n\r\n<p>Talla del modelo: S</p>\r\n\r\n<p>Altura del modelo: 177 cm</p>\r\n\r\n<p>Color: Negro</p>\r\n\r\n<h2>Composici&oacute;n</h2>\r\n\r\n<h3>Exterior</h3>\r\n\r\n<p>100% poli&eacute;ster</p>\r\n\r\n<h3>Forro</h3>\r\n\r\n<p>100% poli&eacute;ster</p>\r\n\r\n<h3>Interior</h3>\r\n\r\n<p>100% poli&eacute;ster</p>\r\n\r\n<h2>Cuidados</h2>\r\n\r\n<p><img alt=\"Lavar a maquina max. 30ºc. centrifugado corto\" src=\"https://static.bershka.net/4/static/itxwebstandard/images/cares/7.png?t=20230210022212\" /></p>\r\n\r\n<p><img alt=\"No usar lejía / blanqueador\" src=\"https://static.bershka.net/4/static/itxwebstandard/images/cares/14.png?t=20230210022212\" /></p>\r\n\r\n<p><img alt=\"Planchar maximo 110 º c \" src=\"https://static.bershka.net/4/static/itxwebstandard/images/cares/18.png?t=20230210022212\" /></p>\r\n\r\n<p><img alt=\"No usar secadora\" src=\"https://static.bershka.net/4/static/itxwebstandard/images/cares/35.png?t=20230210022212\" /></p>\r\n\r\n<div class=\"ddict_btn\" style=\"top: 58px; left: 147.906px;\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>', 'w7.jpg', 1, 19, 4, 'VIETNAM', '2023', 40, NULL, NULL, NULL),
(10, 'New modern luxury womens long coat', 2100000, 1800000, '<p>Product information is being updated</p>\r\n\r\n<div class=\"ddict_btn\" style=\"top: 51px; left: 147.906px;\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>', 'w2.jpg', 1, 22, 4, 'VIETNAM', '2023', 50, NULL, NULL, NULL),
(11, 'Cazadora biker efecto piel desgastada cinturón', 430000, 400000, '<h2>Descripci&oacute;n</h2>\r\n\r\n<p>Talla del modelo: S</p>\r\n\r\n<p>Altura del modelo: 173 cm</p>\r\n\r\n<p>Color: Gris</p>', 'w8.jpg', 1, 22, 6, 'VIETNAM', '2023', 40, NULL, NULL, NULL),
(12, 'Drop shoulder cloth coat', 480000, 420000, '<h2>Descripci&oacute;n</h2>\r\n\r\n<p>Talla del modelo: S</p>\r\n\r\n<p>Altura del modelo: 175 cm</p>\r\n\r\n<p>Color: Lima</p>\r\n\r\n<div class=\"ddict_btn\" style=\"top: 50px; left: 147.906px;\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>', 'w5.jpg', 1, 22, 2, 'VIETNAM', '2023', 44, NULL, NULL, NULL),
(13, '1 layer thin down jacket | Mangto | MYB Clothing', 800000, 720000, '<p>👉XS: height 1m50 - 1m60, weight 40 - 50 kg<br />\r\n👉S: height 1m60 - 1m68, weight 51 - 58 kg<br />\r\n👉M: height 1m69 - 1m74, weight 59 - 65 kg<br />\r\n👉L: height 1m75 - 1m80, weight 66 - 75 kg</p>', 'w6.jpg', 1, 20, 3, 'Korea', '2023', 40, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_attrs`
--

CREATE TABLE `product_attrs` (
  `product_id` bigint UNSIGNED NOT NULL,
  `attribute_size_id` bigint UNSIGNED DEFAULT NULL,
  `attribute_color_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attrs`
--

INSERT INTO `product_attrs` (`product_id`, `attribute_size_id`, `attribute_color_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2023-02-09 20:31:13', '2023-02-09 20:31:13'),
(1, 2, NULL, '2023-02-09 20:31:13', '2023-02-09 20:31:13'),
(1, 3, NULL, '2023-02-09 20:31:13', '2023-02-09 20:31:13'),
(1, 4, NULL, '2023-02-09 20:31:13', '2023-02-09 20:31:13'),
(1, NULL, 5, '2023-02-09 20:31:13', '2023-02-09 20:31:13'),
(1, NULL, 6, '2023-02-09 20:31:13', '2023-02-09 20:31:13'),
(1, NULL, 7, '2023-02-09 20:31:13', '2023-02-09 20:31:13'),
(1, NULL, 8, '2023-02-09 20:31:13', '2023-02-09 20:31:13'),
(4, 1, NULL, '2023-02-09 20:35:53', '2023-02-09 20:35:53'),
(4, 2, NULL, '2023-02-09 20:35:53', '2023-02-09 20:35:53'),
(4, 3, NULL, '2023-02-09 20:35:53', '2023-02-09 20:35:53'),
(4, 4, NULL, '2023-02-09 20:35:53', '2023-02-09 20:35:53'),
(4, NULL, 5, '2023-02-09 20:35:53', '2023-02-09 20:35:53'),
(4, NULL, 6, '2023-02-09 20:35:53', '2023-02-09 20:35:53'),
(4, NULL, 7, '2023-02-09 20:35:53', '2023-02-09 20:35:53'),
(4, NULL, 8, '2023-02-09 20:35:53', '2023-02-09 20:35:53'),
(5, 1, NULL, '2023-02-09 20:44:10', '2023-02-09 20:44:10'),
(5, 2, NULL, '2023-02-09 20:44:10', '2023-02-09 20:44:10'),
(5, 3, NULL, '2023-02-09 20:44:10', '2023-02-09 20:44:10'),
(5, 4, NULL, '2023-02-09 20:44:10', '2023-02-09 20:44:10'),
(5, NULL, 7, '2023-02-09 20:44:10', '2023-02-09 20:44:10'),
(6, 1, NULL, '2023-02-09 20:47:04', '2023-02-09 20:47:04'),
(6, 2, NULL, '2023-02-09 20:47:04', '2023-02-09 20:47:04'),
(6, 3, NULL, '2023-02-09 20:47:04', '2023-02-09 20:47:04'),
(6, 4, NULL, '2023-02-09 20:47:04', '2023-02-09 20:47:04'),
(6, NULL, 5, '2023-02-09 20:47:05', '2023-02-09 20:47:05'),
(7, 1, NULL, '2023-02-09 20:49:31', '2023-02-09 20:49:31'),
(7, 2, NULL, '2023-02-09 20:49:31', '2023-02-09 20:49:31'),
(7, 3, NULL, '2023-02-09 20:49:31', '2023-02-09 20:49:31'),
(7, 4, NULL, '2023-02-09 20:49:31', '2023-02-09 20:49:31'),
(7, NULL, 5, '2023-02-09 20:49:31', '2023-02-09 20:49:31'),
(7, NULL, 6, '2023-02-09 20:49:31', '2023-02-09 20:49:31'),
(7, NULL, 7, '2023-02-09 20:49:31', '2023-02-09 20:49:31'),
(8, 1, NULL, '2023-02-09 20:54:05', '2023-02-09 20:54:05'),
(8, 2, NULL, '2023-02-09 20:54:05', '2023-02-09 20:54:05'),
(8, 3, NULL, '2023-02-09 20:54:05', '2023-02-09 20:54:05'),
(8, 4, NULL, '2023-02-09 20:54:05', '2023-02-09 20:54:05'),
(8, NULL, 5, '2023-02-09 20:54:05', '2023-02-09 20:54:05'),
(8, NULL, 6, '2023-02-09 20:54:05', '2023-02-09 20:54:05'),
(8, NULL, 7, '2023-02-09 20:54:05', '2023-02-09 20:54:05'),
(8, NULL, 8, '2023-02-09 20:54:05', '2023-02-09 20:54:05'),
(9, 1, NULL, '2023-02-09 20:58:05', '2023-02-09 20:58:05'),
(9, 2, NULL, '2023-02-09 20:58:05', '2023-02-09 20:58:05'),
(9, 3, NULL, '2023-02-09 20:58:05', '2023-02-09 20:58:05'),
(9, 4, NULL, '2023-02-09 20:58:05', '2023-02-09 20:58:05'),
(9, NULL, 5, '2023-02-09 20:58:05', '2023-02-09 20:58:05'),
(9, NULL, 6, '2023-02-09 20:58:05', '2023-02-09 20:58:05'),
(9, NULL, 7, '2023-02-09 20:58:05', '2023-02-09 20:58:05'),
(9, NULL, 8, '2023-02-09 20:58:05', '2023-02-09 20:58:05'),
(10, 1, NULL, '2023-02-09 21:01:50', '2023-02-09 21:01:50'),
(10, 2, NULL, '2023-02-09 21:01:50', '2023-02-09 21:01:50'),
(10, 3, NULL, '2023-02-09 21:01:50', '2023-02-09 21:01:50'),
(10, 4, NULL, '2023-02-09 21:01:50', '2023-02-09 21:01:50'),
(10, NULL, 5, '2023-02-09 21:01:50', '2023-02-09 21:01:50'),
(10, NULL, 6, '2023-02-09 21:01:50', '2023-02-09 21:01:50'),
(10, NULL, 7, '2023-02-09 21:01:50', '2023-02-09 21:01:50'),
(11, 1, NULL, '2023-02-10 03:27:17', '2023-02-10 03:27:17'),
(11, 2, NULL, '2023-02-10 03:27:17', '2023-02-10 03:27:17'),
(11, 3, NULL, '2023-02-10 03:27:17', '2023-02-10 03:27:17'),
(11, 4, NULL, '2023-02-10 03:27:17', '2023-02-10 03:27:17'),
(11, NULL, 5, '2023-02-10 03:27:17', '2023-02-10 03:27:17'),
(11, NULL, 6, '2023-02-10 03:27:17', '2023-02-10 03:27:17'),
(11, NULL, 7, '2023-02-10 03:27:17', '2023-02-10 03:27:17'),
(12, 1, NULL, '2023-02-10 03:30:42', '2023-02-10 03:30:42'),
(12, 2, NULL, '2023-02-10 03:30:42', '2023-02-10 03:30:42'),
(12, 3, NULL, '2023-02-10 03:30:42', '2023-02-10 03:30:42'),
(12, 4, NULL, '2023-02-10 03:30:42', '2023-02-10 03:30:42'),
(12, NULL, 5, '2023-02-10 03:30:42', '2023-02-10 03:30:42'),
(12, NULL, 6, '2023-02-10 03:30:42', '2023-02-10 03:30:42'),
(12, NULL, 7, '2023-02-10 03:30:42', '2023-02-10 03:30:42'),
(13, 1, NULL, '2023-02-10 03:35:33', '2023-02-10 03:35:33'),
(13, 2, NULL, '2023-02-10 03:35:33', '2023-02-10 03:35:33'),
(13, 3, NULL, '2023-02-10 03:35:33', '2023-02-10 03:35:33'),
(13, 4, NULL, '2023-02-10 03:35:33', '2023-02-10 03:35:33'),
(13, NULL, 5, '2023-02-10 03:35:33', '2023-02-10 03:35:33'),
(13, NULL, 6, '2023-02-10 03:35:33', '2023-02-10 03:35:33'),
(13, NULL, 7, '2023-02-10 03:35:33', '2023-02-10 03:35:33'),
(13, NULL, 8, '2023-02-10 03:35:33', '2023-02-10 03:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'jg1.3.jpg', '2023-02-09 20:19:18', '2023-02-09 20:19:18'),
(2, 1, 'jg1.1.jpg', '2023-02-09 20:19:18', '2023-02-09 20:19:18'),
(3, 1, 'jg1.jpg', '2023-02-09 20:19:18', '2023-02-09 20:19:18'),
(4, 4, 'jean2.2.jpg', '2023-02-09 20:35:53', '2023-02-09 20:35:53'),
(5, 4, 'hean2.3.jpg', '2023-02-09 20:35:53', '2023-02-09 20:35:53'),
(6, 4, 'jean2.1.jpg', '2023-02-09 20:35:53', '2023-02-09 20:35:53'),
(7, 5, 'jean1.3.jpg', '2023-02-09 20:44:10', '2023-02-09 20:44:10'),
(8, 5, 'jean1.2.jpg', '2023-02-09 20:44:10', '2023-02-09 20:44:10'),
(9, 5, 'jean1.1.jpg', '2023-02-09 20:44:10', '2023-02-09 20:44:10'),
(10, 6, '1136296250_2_4_4.jpg', '2023-02-09 20:47:04', '2023-02-09 20:47:04'),
(11, 6, '1136296250_2_1_4.jpg', '2023-02-09 20:47:04', '2023-02-09 20:47:04'),
(12, 6, '1136296250_2_7_4.jpg', '2023-02-09 20:47:04', '2023-02-09 20:47:04'),
(13, 7, '3380644250_2_3_4.jpg', '2023-02-09 20:49:31', '2023-02-09 20:49:31'),
(14, 7, '3380644250_2_2_4.jpg', '2023-02-09 20:49:31', '2023-02-09 20:49:31'),
(15, 7, '3380644250_2_1_4.jpg', '2023-02-09 20:49:31', '2023-02-09 20:49:31'),
(16, 8, '1836645712_2_4_3.jpg', '2023-02-09 20:54:05', '2023-02-09 20:54:05'),
(17, 8, '1836645712_2_3_3.jpg', '2023-02-09 20:54:05', '2023-02-09 20:54:05'),
(18, 8, '1836645712_2_1_3.jpg', '2023-02-09 20:54:05', '2023-02-09 20:54:05'),
(19, 8, '1836645712_2_7_3.jpg', '2023-02-09 20:54:05', '2023-02-09 20:54:05'),
(20, 9, 'w7.3.jpg', '2023-02-09 20:58:05', '2023-02-09 20:58:05'),
(21, 9, 'w7.2.jpg', '2023-02-09 20:58:05', '2023-02-09 20:58:05'),
(22, 9, 'w7.1.jpg', '2023-02-09 20:58:05', '2023-02-09 20:58:05'),
(23, 10, 'w2.4.jpg', '2023-02-09 21:01:50', '2023-02-09 21:01:50'),
(24, 10, 'w2.3.jpg', '2023-02-09 21:01:50', '2023-02-09 21:01:50'),
(25, 10, 'w2.1.jpg', '2023-02-09 21:01:50', '2023-02-09 21:01:50'),
(26, 11, 'w8.3.jpg', '2023-02-10 03:27:17', '2023-02-10 03:27:17'),
(27, 11, 'w8.2.jpg', '2023-02-10 03:27:17', '2023-02-10 03:27:17'),
(28, 11, 'w8.1.jpg', '2023-02-10 03:27:17', '2023-02-10 03:27:17'),
(29, 12, 'w5.3.jpg', '2023-02-10 03:30:42', '2023-02-10 03:30:42'),
(30, 12, 'w5.2.jpg', '2023-02-10 03:30:42', '2023-02-10 03:30:42'),
(31, 12, 'w5.1.jpg', '2023-02-10 03:30:42', '2023-02-10 03:30:42'),
(32, 13, 'w6.3.jpg', '2023-02-10 03:34:20', '2023-02-10 03:34:20'),
(33, 13, 'w6.1.jpg', '2023-02-10 03:34:20', '2023-02-10 03:34:20');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9t1p0GOE3pke0meUwydSVDlLGEOuymY7RVIaDetc', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYlVJaXJRRnBPQlF2TEFZcVJVNWpBd2JNVEJBdzBPMGttNkhxSXlMZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9kZXYuZXNzZW5jZS5uZXQvT3JkZXJNYW5hZ2VtZW50Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDt9', 1696386869),
('rgWrk8F7xAyS0wUSUTX0kxzIgEgWP6P5SR87SVti', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQTNScVBHVkhJVXh1eEsyeGtrOXdLdGI1dlhsQWFCMFZSa1diNDlURCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly9kZXYuZXNzZW5jZS5uZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1696386711),
('YKOtdyohSHqVfnbwLi9HU4pOtaRwCKbu3TwPt4cR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibHN0RWl6T2l4TTNjaGxKV04yOU50WGhsTTFPTlhZWEpzbnFkcGQyTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9kZXYuZXNzZW5jZS5uZXQvYXV0aC9nb29nbGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjU6InN0YXRlIjtzOjQwOiJpQUFtbks2amRJbkJGM2x6YXZzMTNkSnYweHVDbVI4Ull6enVCaWJyIjt9', 1696386782),
('yR3f03svm5qf9faPdTLtDP3Y0F8HBNv3Z0WxwhFB', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZFJoNDg4SEF1VklLcU5ydlZDUGNOSUhJM0lYYzBFenpZZDQ2RDBTbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vZGV2LmVzc2VuY2UubmV0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NDoiY2FydCI7YToxOntpOjE7YTo4OntzOjI6ImlkIjtpOjE7czo0OiJuYW1lIjtzOjM4OiJGbG9yYWwgZW1icm9pZGVyZWQgY290dG9uIGpvZ2dlciBwYW50cyI7czo1OiJpbWFnZSI7czo5OiJqZzEuMi5qcGciO3M6ODoicXVhbnRpdHkiO3M6MToiMSI7czo4OiJicmFuZF9pZCI7aTo0O3M6MTc6ImF0dHJpYnV0ZV9zaXplX2lkIjtzOjE6IlMiO3M6MTg6ImF0dHJpYnV0ZV9jb2xvcl9pZCI7czo1OiJXaGl0ZSI7czo1OiJwcmljZSI7ZDoxMDAwMDAwO319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NTt9', 1696392201);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `google_id`, `address`, `phone`, `role`) VALUES
(5, 'Đức Anh Lê', 'leducanh.hna@gmail.com', NULL, 'eyJpdiI6Ikk2WkZGMVlyK0JidGJRY3lyRmJJOFE9PSIsInZhbHVlIjoiRHVBTTEwc0ZTa3NtZmVTZEhIUG93U08zTDAzSHpGTkMvSTQ1ajNRU2Fwcz0iLCJtYWMiOiI4MWViNGExNmI3ZjJmOTJmMmIxNjBhYjg5N2RiMmI5ZjIwOTIzYmYyYzU3Y2I2YWNiNjVkMjg2N2M1ZTBkMTI4IiwidGFnIjoiIn0=', NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-03 19:38:01', '2023-10-03 19:38:01', '107148898199212099356', NULL, NULL, '0'),
(6, 'cao tuan linhhhhhhhh', 'levantungduong1@gmail.com', NULL, '$2y$10$rNjPjtm3vMRxtMx5gmqSHu9k/pyPqH7himXNw8e2CFYjRtU40V8Hi', NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-03 19:58:53', '2023-10-03 19:58:53', NULL, 'Ha noi\r\nHa noi', '0981041136', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banners_name_unique` (`name`),
  ADD KEY `banners_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD KEY `categories_type_foreign` (`type`);

--
-- Indexes for table `category_types`
--
ALTER TABLE `category_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_types_name_unique` (`name`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_payment_method_foreign` (`payment_method`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_pro_id_foreign` (`pro_id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payment_methods_name_unique` (`name`);

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
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_type_foreign` (`type`);

--
-- Indexes for table `product_attrs`
--
ALTER TABLE `product_attrs`
  ADD KEY `product_attrs_product_id_foreign` (`product_id`),
  ADD KEY `product_attrs_attribute_size_id_foreign` (`attribute_size_id`),
  ADD KEY `product_attrs_attribute_color_id_foreign` (`attribute_color_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `category_types`
--
ALTER TABLE `category_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_type_foreign` FOREIGN KEY (`type`) REFERENCES `category_types` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_payment_method_foreign` FOREIGN KEY (`payment_method`) REFERENCES `payment_methods` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_type_foreign` FOREIGN KEY (`type`) REFERENCES `category_types` (`id`);

--
-- Constraints for table `product_attrs`
--
ALTER TABLE `product_attrs`
  ADD CONSTRAINT `product_attrs_attribute_color_id_foreign` FOREIGN KEY (`attribute_color_id`) REFERENCES `attributes` (`id`),
  ADD CONSTRAINT `product_attrs_attribute_size_id_foreign` FOREIGN KEY (`attribute_size_id`) REFERENCES `attributes` (`id`),
  ADD CONSTRAINT `product_attrs_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

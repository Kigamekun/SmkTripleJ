-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2022 at 02:22 AM
-- Server version: 8.0.27-0ubuntu0.21.04.1
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shorai`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `judul`, `tanggal`, `waktu_mulai`, `waktu_selesai`, `deskripsi`, `lokasi`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Test Agenda', '2022-01-11', '03:59:21', '03:59:21', 'Test agenda', 'kp pondok bitung rt 01 rw 02', 0, '2022-01-10 20:59:21', '2022-01-10 20:59:21'),
(2, 'Test Agenda', '2022-01-11', '03:59:21', '03:59:21', 'Test agenda', 'kp pondok bitung rt 01 rw 02', 1, '2022-01-10 20:59:21', '2022-01-10 20:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `judul`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 'aaaaa', '1643875614-731180.jpg', '2022-02-03 01:06:54', '2022-02-03 01:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories` bigint UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `content`, `categories`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 'Test Berita 1', '<p>TEST AJA<strong> MEREUN</strong></p>', 5, '1642991491-Rapat_Komite_Fasilitas_Udara.jpg', '2022-01-23 19:31:31', '2022-01-23 19:31:31'),
(3, 'Test Berita 1', '<p>TEST AJA<strong> MEREUN</strong></p>', 5, '1642991491-Rapat_Komite_Fasilitas_Udara.jpg', '2022-01-23 19:31:31', '2022-01-23 19:31:31'),
(4, 'Test Berita 1', '<p>TEST AJA<strong> MEREUN</strong></p>', 5, '1642991491-Rapat_Komite_Fasilitas_Udara.jpg', '2022-01-23 19:31:31', '2022-01-23 19:31:31'),
(5, 'Test Berita 2', '<p>cuma apa atu<strong> djfhjs</strong></p>', 6, '1642991565-168729820.48589100_1547639292_gettyimages-877766428-800x533.jpg', '2022-01-23 19:32:45', '2022-01-23 19:32:45'),
(6, 'd', '<p>sdad</p>', 6, '1642991608-180px-Kasad_Andika_Perkasa 1.png', '2022-01-23 19:33:28', '2022-01-23 19:33:28'),
(7, 'Excepteur dolor earu', '<p>Nemo sit, animi, in .</p>', 6, '1642991750-4085c3707af8636f9bca86367ab1b389.jpg', '2022-01-23 19:35:50', '2022-01-23 19:35:50');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(5, 'Test Category 1', '2022-01-23 19:29:30', '2022-01-23 19:29:30'),
(6, 'Test Category 2', '2022-01-23 19:29:38', '2022-01-23 19:29:38'),
(7, 'Test Category 3', '2022-01-23 19:29:44', '2022-01-23 19:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint UNSIGNED NOT NULL,
  `album_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `album_name`, `image`, `created_at`, `updated_at`) VALUES
(2, 'khjkhjk', '[\"1642557921240652297_195551759174535_3908819366956541564_n.jpg\",\"1642557921240755534_394534702107429_1443353187102449023_n.jpg\",\"1642557921240424738_153460786851411_103744116157892658_n.jpg\",\"164256105545-456248_sad-anime-wallpaper-aesthetic.jpg\"]', '2022-01-18 19:05:21', '2022-01-18 19:57:35'),
(3, 'fkjdfhdjshfksdhf', '[\"16425619701640921835-240424738_153460786851411_103744116157892658_n.jpg\",\"1642561997240663141_848501655870056_2138120025880399925_n.jpg\",\"1642561997240652297_195551759174535_3908819366956541564_n.jpg\"]', '2022-01-18 20:12:50', '2022-01-23 20:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `halaman_statis`
--

CREATE TABLE `halaman_statis` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `halaman_statis`
--

INSERT INTO `halaman_statis` (`id`, `title`, `seo_title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Test Page', 'test Page', 'test', '2022-01-10 20:59:21', '2022-01-10 20:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id`, `nama`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Test Link', 'https://www.youtube.com/watch?v=STe1RMGHjl8&list=RDGMEMCMFH2exzjBeE_zAHHJOdxg&index=12', '2022-01-10 20:59:21', '2022-01-10 20:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `embed_maps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `nama`, `embed_maps`, `created_at`, `updated_at`) VALUES
(1, 'Test Maps', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d247.68451290525238!2d106.77250140734021!3d-6.652846399999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1641787815838!5m2!1sid!2sid\" width=\"800\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2022-01-10 20:59:21', '2022-01-10 20:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_06_035722_create_slider_table', 1),
(6, '2022_01_06_035752_create_banner_table', 1),
(7, '2022_01_06_035758_create_link_table', 1),
(8, '2022_01_06_035803_create_maps_table', 1),
(9, '2022_01_06_035815_create_agenda_table', 1),
(10, '2022_01_06_035818_create_categories_table', 1),
(11, '2022_01_06_035820_create_berita_table', 1),
(12, '2022_01_06_035903_create_halaman_statis_table', 1),
(13, '2022_01_06_040028_create_produk_table', 1),
(14, '2022_01_06_040045_create_blog_table', 1),
(15, '2022_01_06_040054_create_staff_table', 1),
(16, '2022_01_18_065119_create_video_table', 2),
(17, '2022_01_18_065225_create_gallery_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `judul`, `gambar`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Test Slider', 'slider.jpg', 'just slider', '2022-01-10 20:59:21', '2022-01-10 20:59:21'),
(2, 'test slider 3', '1642991799-index.png', 'sadas', '2022-01-23 19:36:39', '2022-01-23 19:36:39');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `nama`, `jabatan`, `foto`, `nip`, `urutan`, `created_at`, `updated_at`) VALUES
(1, 'Velit aut debitis l', 'Consequatur eum susc', '1641954370-45-456248_sad-anime-wallpaper-aesthetic.jpg', '54', 1, '2022-01-11 19:26:10', '2022-02-06 11:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `permission` text COLLATE utf8mb4_unicode_ci,
  `role` int DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `permission`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Beatrice Herring', 'gasam@mailinator.com', NULL, NULL, NULL, '$2y$10$Cd2F/i/D6XdfEX8MkF5XSODoi.OYhIy/f9TKV0nf9YHyONhEXkwIe', NULL, '2022-01-11 19:07:32', '2022-01-11 19:07:32'),
(2, 'Igor Tyson', 'zijepexog@mailinator.com', NULL, NULL, NULL, '$2y$10$IZtx/VsdoeZ2GpO6DPW/f.6rvm9EK8k2q5DkU8.1RnuUeYDCeuWdW', NULL, '2022-01-12 17:16:40', '2022-01-12 17:16:40'),
(3, 'Wesley Nielsen', 'gadu@mailinator.com', NULL, '[\"Agenda\",\"Banner\",\"Berita\",\"Category\",\"Gallery\",\"Link\",\"Maps\",\"Page\",\"Slider\",\"Staff\",\"Video\"]', NULL, '$2y$10$nrM.qMa3HqHY1XJ/FbYupuG6Sq/UvPk.y7Mr4taNJbWJhH6i7J7T2', NULL, '2022-01-16 05:39:25', '2022-01-23 20:47:17'),
(5, 'Maisie Serrano', 'xowupuci@mailinator.com', NULL, NULL, NULL, '$2y$10$eLPwX8LdAbORCILnuMP2.u.c5ALMYKsaaq.07PcD7P.hqALMcoIIm', NULL, '2022-01-16 18:28:39', '2022-01-16 18:28:39'),
(6, 'Leilani Graves', 'vuteq@mailinator.com', NULL, NULL, NULL, '$2y$10$n4GnJjrpzaXG8yHoUZ8Ze.oOfGfWugwtvGUzDNZhnBjyVpoWRYW9a', NULL, '2022-01-16 18:42:33', '2022-01-16 18:42:33'),
(7, 'Christine Humphrey', 'cewige@mailinator.com', NULL, NULL, NULL, '$2y$10$eJ4VtCzCJriJRGFxi8HSB.5IPPFR470tjwDCfg6kRWyE7sQcRzYkm', NULL, '2022-01-17 20:00:16', '2022-01-17 20:00:16'),
(8, 'dsdasds', 'bopuwo@mailinator.com', NULL, '[\"Agenda\",\"Banner\"]', NULL, '$2y$10$R/uE8wKKz6MlftCnhOOmuOmnGFxBjZMhvG1.hiNWb9r5ZIGVQ3lDq', NULL, '2022-01-17 21:13:46', '2022-01-17 21:35:20'),
(10, 'Dominique Hebert', 'bopuwdasdo@mailinator.com', NULL, NULL, NULL, '$2y$10$5G.4VcWaUBcyGiZXumnfkuiR8REkx7HqfCYhgUxVuruVmvXxUjT8C', NULL, '2022-01-17 21:13:59', '2022-01-17 21:13:59'),
(11, 'Audra Ellison', 'cukedikoqo@mailinator.com', NULL, NULL, NULL, '$2y$10$T6E4jAIgbTNslAvqS/aUYuqMrl.vwb11zoZ66//PY5QnYqE2IJIFG', NULL, '2022-01-17 21:14:46', '2022-01-17 21:14:46'),
(12, 'Kay Castillo', 'daqywybo@mailinator.com', NULL, '[\"Agenda\",\"Banner\",\"Category\",\"Link\",\"Maps\",\"User\"]', NULL, '$2y$10$B0pGnkKaefMt2VOofxnQAulLD2w3V7sYKFng/arbPytTxEE2TqB8G', NULL, '2022-01-17 21:16:02', '2022-01-17 21:16:02'),
(13, 'Jaquelyn Bryan', 'niryz@mailinator.com', NULL, '[\"Agenda\",\"Banner\",\"Maps\",\"Staff\",\"User\"]', NULL, '$2y$10$4LAp7E3Xam0rNYiJbx797OaFztcN1E8LOHXC14fMAQDHSU0Unx.Si', NULL, '2022-01-17 21:37:46', '2022-01-17 21:37:46'),
(14, 'Macy Abbott', 'dijiz@mailinator.com', NULL, '[\"Agenda\",\"Banner\",\"Berita\",\"Category\",\"Gallery\",\"Link\",\"Maps\",\"Page\",\"Slider\",\"Staff\",\"Video\"]', 0, '$2y$10$Yssv.pe79q5SdTSb0iih7efdslotuqQ9DcMkr71CFGwDuAc2gupXm', NULL, '2022-01-17 21:41:48', '2022-01-18 00:01:15'),
(15, 'Devin Hendrix', 'sojavyzaf@mailinator.com', NULL, NULL, NULL, '$2y$10$ttLxyjgpserKAf9W91v.3OOvWXDdAbgy4oMc6U3cpei8.Ef6ZF3Sq', NULL, '2022-01-18 16:23:00', '2022-01-18 16:23:00'),
(16, 'Simone Sharpe', 'xyti@mailinator.com', NULL, '[\"Agenda\",\"Banner\",\"Category\",\"Link\",\"Maps\",\"User\"]', 1, '$2y$10$tdLPUsysOh.mMs7wzeRY2eebY88NvLJYU5JPdSQzHJhfKMNTJnED6', NULL, '2022-01-19 19:49:02', '2022-01-19 19:49:02'),
(17, 'Darrel Best', 'ceroqimu@mailinator.com', NULL, NULL, 0, '$2y$10$.ErLIFMNzwB4QGjrFUXGxuVf2bymh3NAn6GkBtudiqM1agP23Yu8e', NULL, '2022-01-23 19:27:46', '2022-01-23 19:27:46'),
(18, 'Lyle Abbott', 'lyjap@mailinator.com', NULL, NULL, NULL, '$2y$10$Y8Rnb77Ne7RmZDsijzMDwOfaVRctTPx48XNiCZyQz1QAe7NOqDu5i', NULL, '2022-01-23 20:46:52', '2022-01-23 20:46:52'),
(19, 'Abigail Bridges', 'calumal@mailinator.com', NULL, NULL, 0, '$2y$10$7FfImBLVRlN4/ndvl5ee5.mGejmKsXrgRfXmvJaAzVXrCCb6RGeEq', NULL, '2022-02-03 01:04:57', '2022-02-03 01:04:57'),
(20, 'Norman Roth', 'cofofe@mailinator.com', NULL, NULL, 0, '$2y$10$KedhOIRStQO5MtlZY7M3/ubC0XH3Seg8GDjf3RO9m17qVRZbx/7M6', NULL, '2022-02-06 11:22:05', '2022-02-06 11:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `nama`, `video`, `created_at`, `updated_at`) VALUES
(2, 'Test Video', 'https://www.youtube.com/embed/0YF8vecQWYs', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `berita_categories_foreign` (`categories`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halaman_statis`
--
ALTER TABLE `halaman_statis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `halaman_statis`
--
ALTER TABLE `halaman_statis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_categories_foreign` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

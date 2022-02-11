-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Feb 2022 pada 09.51
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkn3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) DEFAULT NULL,
  `kompetensi` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id`, `judul`, `tanggal`, `waktu_mulai`, `waktu_selesai`, `deskripsi`, `lokasi`, `role`, `kompetensi`, `created_at`, `updated_at`) VALUES
(3, 'Pembagian Laptop', '2022-02-09', '14:22:00', '16:00:00', 'Cuman bagi bagi laptop', 'Bogor', 0, 3, '2022-02-09 07:49:08', '2022-02-09 07:49:08'),
(4, 'Pengambilan Kartu Teknik', '2022-02-09', '14:22:00', '16:22:00', 'Pengambilan Kartu Teknik', 'Bogor', 1, 3, '2022-02-09 07:49:49', '2022-02-09 07:49:49'),
(5, 'Libero dolor odit do', '1995-09-19', '05:08:00', '00:28:00', 'Fugiat amet tempore', 'Dolorem qui est fug', 0, 4, '2022-02-09 19:15:33', '2022-02-09 19:15:33'),
(6, 'Et molestiae adipisi', '1992-06-28', '14:07:00', '13:12:00', 'Incididunt totam deb', 'Aspernatur modi aut', 1, 6, '2022-02-09 19:15:45', '2022-02-09 19:15:45'),
(7, 'Architecto rerum deb', '1998-01-12', '15:23:00', '01:10:00', 'Enim esse deleniti', 'Voluptatibus volupta', 0, 3, '2022-02-09 19:16:01', '2022-02-09 19:16:01'),
(8, 'Pengambilan kartu tkj', '2022-02-10', '15:29:00', '15:35:00', 'Ambil kartu tkj', 'LAB TKJ 1', 1, 3, '2022-02-10 01:30:11', '2022-02-10 01:30:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompetensi` int(11) DEFAULT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id`, `judul`, `kompetensi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'top-banner', 3, '1644470440-Desain tanpa judul (6).png', '2022-02-09 08:56:50', '2022-02-09 22:20:40'),
(2, 'top-banner', 3, '1644469722-TERANG.png', '2022-02-09 20:02:10', '2022-02-09 22:08:42'),
(3, 'top-banner', 4, '1644469999-baca. belajar. tahu..png', '2022-02-09 22:13:19', '2022-02-09 22:13:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories` bigint(20) UNSIGNED NOT NULL,
  `kompetensi` int(11) DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `content`, `categories`, `kompetensi`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 'Berita 1', '<p>Berita 1</p>', 9, 3, '1644421499-269880682_6541272539281458_1425271641176581777_n.jpg', '2022-02-09 08:44:59', '2022-02-09 08:44:59'),
(3, 'Cupiditate ex conseq', '<p>Velit, est id, volup.</p>', 10, 3, '1644421524-269945167_1231832097342826_2255218308715171589_n.jpg', '2022-02-09 08:45:24', '2022-02-09 08:45:24'),
(4, 'Voluptatum cupiditat', '<p>Enim obcaecati animi.</p>', 10, 3, '1644421538-Web capture_9-2-2022_22838_profilosiskepati3.carrd.co.jpeg', '2022-02-09 08:45:38', '2022-02-09 08:45:38'),
(5, 'Nisi sapiente soluta', '<p>Sunt ullamco et in a.</p>', 10, 5, '1644459135-Web capture_9-2-2022_22838_profilosiskepati3.carrd.co.jpeg', '2022-02-09 19:12:15', '2022-02-09 19:12:15'),
(6, 'Odit harum dolor ill', '<p>Autem nihil culpa, v.</p>', 9, 3, '1644459302-269880682_6541272539281458_1425271641176581777_n.jpg', '2022-02-09 19:15:02', '2022-02-09 19:15:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(9, 'Biasa', '2022-02-09 07:30:14', '2022-02-09 07:30:14'),
(10, 'Sedeng', '2022-02-09 07:30:22', '2022-02-09 07:30:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `album_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompetensi` int(11) DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `album_name`, `kompetensi`, `image`, `created_at`, `updated_at`) VALUES
(12, 'Album TKJ', 3, '[\"1644420239269881252_881818572507730_8119178698206601701_n.jpg\",\"1644420239269898704_201599755522645_7493273918399542222_n.jpg\",\"1644420239269907974_967604170498567_8182486909602391629_n.jpg\",\"1644420239269948564_610777983504214_3882163329568531763_n.jpg\",\"1644420239270013972_118333210690900_7910135827751589061_n.jpg\"]', '2022-02-09 08:23:59', '2022-02-09 22:37:11'),
(13, 'Album Tata Rias', 6, '[\"1644420257270013972_118333210690900_7910135827751589061_n.jpg\",\"1644420257ldks.jpg\",\"1644420257ldks1.jpg\"]', '2022-02-09 08:24:17', '2022-02-09 22:35:55'),
(14, 'Album Kuliner', 5, '[\"1644461010269948564_610777983504214_3882163329568531763_n.jpg\",\"1644461010269907974_967604170498567_8182486909602391629_n.jpg\"]', '2022-02-09 19:43:30', '2022-02-09 22:36:19'),
(15, 'Album Perhotelan', 7, '[\"1644461030ldks1.jpg\",\"1644461030ldks.jpg\"]', '2022-02-09 19:43:50', '2022-02-09 22:36:39'),
(16, 'Album Tata Busana', 4, '[\"1644461081ldks1.jpg\",\"1644461081ldks.jpg\",\"1644461081270013972_118333210690900_7910135827751589061_n.jpg\"]', '2022-02-09 19:44:41', '2022-02-09 22:36:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman_statis`
--

CREATE TABLE `halaman_statis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `halaman_statis`
--

INSERT INTO `halaman_statis` (`id`, `title`, `seo_title`, `content`, `created_at`, `updated_at`) VALUES
(2, 'Cara memasak', 'cara-memasak', '<p>ANSAN GREENERS FC</p>', '2022-02-09 22:59:41', '2022-02-09 22:59:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kompetensi_keahlians`
--

CREATE TABLE `kompetensi_keahlians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kaprog_id` bigint(20) UNSIGNED NOT NULL,
  `sambutan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kompetensi_keahlians`
--

INSERT INTO `kompetensi_keahlians` (`id`, `nama`, `kaprog_id`, `sambutan`, `slug`, `tentang`, `thumb`, `created_at`, `updated_at`) VALUES
(3, 'TKJ', 3, '<p>HAIII Selamat datang di TKJ</p>', 'tkj', '<p>TKJ adalah gatau</p>', '1644416445-TKJ-760x490.jpg', '2022-02-09 07:20:45', '2022-02-09 07:20:45'),
(4, 'Tata Busana', 3, '<p>Tata Busana</p>', 'tata_busana', '<p>Tata Busana </p>', '1644418333-tata busana.jfif', '2022-02-09 07:52:13', '2022-02-09 07:52:13'),
(5, 'Kuliner', 3, '<p>Tata Boga</p>', 'Kuliner', '<p>Tata Boga</p>', '1644418364-Tata-Boga.jpg', '2022-02-09 07:52:44', '2022-02-09 22:30:23'),
(6, 'Tata Rias', 3, '<p>Perhotelan</p>', 'tata-rias', '<p>Perhotelan</p>', '1644418443-Kecantikan Kulit dan Rambut.jpg', '2022-02-09 07:54:03', '2022-02-09 22:33:27'),
(7, 'Perhotelan', 3, '<p>Perhotelana</p>', 'Perhotelan', '<p>Perhotelana</p>', '1644471234-hotel.jpg', '2022-02-09 22:33:54', '2022-02-09 22:33:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `link`
--

CREATE TABLE `link` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `link`
--

INSERT INTO `link` (`id`, `nama`, `link`, `created_at`, `updated_at`) VALUES
(2, 'alamat', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15854.041768026766!2d106.8065119!3d-6.5832888!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x15ae2b0a1aa5a4d9!2sSMKN%203%20Kota%20Bogor!5e0!3m2!1sid!2sid!4v1644417211116!5m2!1sid!2sid', '2022-02-09 07:34:04', '2022-02-09 07:34:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maps`
--

CREATE TABLE `maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `embed_maps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `maps`
--

INSERT INTO `maps` (`id`, `nama`, `embed_maps`, `created_at`, `updated_at`) VALUES
(2, 'alamat', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15854.041768026766!2d106.8065119!3d-6.5832888!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x15ae2b0a1aa5a4d9!2sSMKN%203%20Kota%20Bogor!5e0!3m2!1sid!2sid!4v1644417211116!5m2!1sid!2sid', '2022-02-09 08:54:15', '2022-02-09 08:54:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
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
(17, '2022_01_18_065225_create_gallery_table', 2),
(18, '2022_02_07_033606_create_kompetensi_keahlians_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id`, `judul`, `gambar`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Slider 1', '1644420098-269881238_630426841605761_1468948712392793547_n.jpg', '-', '2022-02-09 08:21:38', '2022-02-09 08:21:38'),
(4, 'Slider 2', '1644420107-269890880_294506119307186_9118055754367504574_n.jpg', '-', '2022-02-09 08:21:47', '2022-02-09 08:21:47'),
(5, 'Slider 4', '1644420162-meating.png', '-', '2022-02-09 08:22:42', '2022-02-09 08:22:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id`, `nama`, `jabatan`, `foto`, `nip`, `urutan`, `created_at`, `updated_at`) VALUES
(3, 'Gunnar Gunaidi', 'Kepala Sekolah', '1644416171-fc3277c31dbd6e0ec8ca5575e58a69ac.jpg', '111222333', 1, '2022-02-09 07:16:11', '2022-02-09 07:16:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `permission` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `permission`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Destiny Frye', 'quqykyzocy@mailinator.com', NULL, NULL, NULL, '$2y$10$Ilpz5fDwfmvNR2yEaqv9xe3taRfmvkzOSYDjoTp7WwPj9bxECEmN.', NULL, '2022-02-09 06:36:37', '2022-02-09 06:36:37'),
(2, 'admin', 'admin@gmail.com', NULL, NULL, 0, '$2y$10$xc/kYky58qFzmxUHT3VVcOwKa4mDl9A8kDcaGayaEPqW4xhoQgL..', NULL, '2022-02-09 19:09:09', '2022-02-09 19:09:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id`, `nama`, `video`, `created_at`, `updated_at`) VALUES
(3, 'Perhotelan', 'https://www.youtube.com/embed/5bDEgHO9974', '2022-02-09 23:01:02', '2022-02-09 23:01:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `berita_categories_foreign` (`categories`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `halaman_statis`
--
ALTER TABLE `halaman_statis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kompetensi_keahlians`
--
ALTER TABLE `kompetensi_keahlians`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `halaman_statis`
--
ALTER TABLE `halaman_statis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kompetensi_keahlians`
--
ALTER TABLE `kompetensi_keahlians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `link`
--
ALTER TABLE `link`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `maps`
--
ALTER TABLE `maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_categories_foreign` FOREIGN KEY (`categories`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;